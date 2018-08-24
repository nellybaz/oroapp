<?php

namespace Oro\Bundle\TestFrameworkBundle\Test;

use Doctrine\Common\DataFixtures\ReferenceRepository;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as BaseWebTestCase;
use Symfony\Component\Console\Output\StreamOutput;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\BrowserKit\Cookie;

use Oro\Bundle\NavigationBundle\Event\ResponseHashnavListener;
use Oro\Bundle\SearchBundle\Tests\Functional\SearchExtensionTrait;
use Oro\Bundle\TestFrameworkBundle\Test\DataFixtures\AliceFixtureFactory;
use Oro\Bundle\TestFrameworkBundle\Test\DataFixtures\AliceFixtureIdentifierResolver;
use Oro\Bundle\TestFrameworkBundle\Test\DataFixtures\AliceFixtureLoader;
use Oro\Bundle\TestFrameworkBundle\Test\DataFixtures\DataFixturesExecutor;
use Oro\Bundle\TestFrameworkBundle\Test\DataFixtures\DataFixturesLoader;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Component\PhpUtils\ArrayUtil;
use Oro\Component\Testing\DbIsolationExtension;
use Oro\Bundle\OrganizationBundle\Tests\Unit\Fixture\Entity\Organization;
use Oro\Bundle\SecurityBundle\Authentication\Token\UsernamePasswordOrganizationToken;

/**
 * Abstract class for functional and integration tests
 *
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 */
abstract class WebTestCase extends BaseWebTestCase
{
    use DbIsolationExtension;

    /** Annotation names */
    const DB_ISOLATION_PER_TEST_ANNOTATION = 'dbIsolationPerTest';

    /**
     * Use to avoid transaction rollbacks with Connection::transactional and missing on conflict in Doctrine
     * SQLSTATE[25P02] current transaction is aborted, commands ignored until end of transaction block
     */
    const NEST_TRANSACTIONS_WITH_SAVEPOINTS = 'nestTransactionsWithSavepoints';

    /** Default WSSE credentials */
    const USER_NAME = 'admin';
    const USER_PASSWORD = 'admin_api_key';

    /**  Default user name and password */
    const AUTH_USER = 'admin@example.com';
    const AUTH_PW = 'admin';
    const AUTH_ORGANIZATION = 1;

    /**
     * @var bool[]
     */
    private static $dbIsolationPerTest = [];

    /**
     * @var bool[]
     */
    private static $nestTransactionsWithSavepoints = [];

    /**
     * @var Client
     */
    private static $clientInstance;

    /**
     * @var Client
     */
    private static $soapClientInstance;

    /**
     * @var array
     */
    protected static $loadedFixtures = [];

    /** @var Client */
    protected $client;

    /** @var Client */
    protected $soapClient;

    /** @var callable */
    private static $resetCallback;

    /**
     * @var ReferenceRepository
     */
    private static $referenceRepository;

    protected function setUp()
    {
    }

    /**
     * In order to disable kernel shutdown
     * @see \Symfony\Bundle\FrameworkBundle\Test\KernelTestCase::tearDown
     */
    protected function tearDown()
    {
    }

    /**
     * @before
     * @internal
     */
    protected function beforeTest()
    {
        if (!self::$resetCallback) {
            $self = $this;
            self::$resetCallback = function () use ($self) {
                $self->client = null;
                $self->soapClient = null;
            };
        }
    }

    /**
     * @after
     * @internal
     */
    protected function afterTest()
    {
        if (self::getDbIsolationPerTestSetting()) {
            $this->rollbackTransaction();
            self::$loadedFixtures = [];
            self::$referenceRepository = null;

            self::resetClient();
        }
    }

    /**
     * @beforeClass
     * @internal
     */
    public static function beforeClass()
    {
        /**
         * In case we have isolated test we should have clean env before run it,
         * so we will not have next problem:
         * - Data provider in phpunit called before tests (even before this method) and can start a client
         *   for not isolated tests (ex. GetRestJsonApiTest),
         *   so we will have client without transaction started in our test
         */
        self::resetClient();
    }

    /**
     * @afterClass
     * @internal
     */
    public static function afterClass()
    {
        self::rollbackTransaction();
        self::$loadedFixtures = [];
        self::$referenceRepository = null;

        if (self::$resetCallback) {
            call_user_func(self::$resetCallback);
            self::$resetCallback = null;
        }

        self::resetClient();
    }

    /**
     * Creates a Client.
     *
     * @param array $options An array of options to pass to the createKernel class
     * @param array $server An array of server parameters
     * @param bool $force If this option - true, will reset client on each initClient call
     *
     * @return Client A Client instance
     */
    protected function initClient(array $options = [], array $server = [], $force = false)
    {
        if (self::isClassHasAnnotation(get_called_class(), 'dbIsolation')) {
            throw new \RuntimeException(
                sprintf(
                    '@dbIsolation is default behavior now, please remove annotation from %s',
                    get_called_class()
                )
            );
        }

        if ($force) {
            throw new \RuntimeException(
                sprintf(
                    '%s::initClient asked to do force reset, use @%s instead',
                    get_called_class(),
                    self::DB_ISOLATION_PER_TEST_ANNOTATION
                )
            );
        }

        if (!self::$clientInstance) {
            self::$clientInstance = static::createClient($options, $server);

            if (self::isClassHasAnnotation(get_called_class(), 'dbReindex')) {
                throw new \RuntimeException(
                    sprintf(
                        '%s::initClient asked to do reindex, use %s instead and add tearDown method',
                        get_called_class(),
                        SearchExtensionTrait::class
                    )
                );
            }

            $this->startTransaction(self::hasNestTransactionsWithSavepoints());
        } else {
            self::$clientInstance->setServerParameters($server);
        }

        return $this->client = self::$clientInstance;
    }

    /** {@inheritdoc} */
    protected static function createKernel(array $options = array())
    {
        $options['debug'] = false;

        return parent::createKernel($options);
    }

    /**
     * @param string $tokenId
     * @return CsrfToken
     */
    protected function getCsrfToken($tokenId)
    {
        return $this->getContainer()->get('security.csrf.token_manager')->getToken($tokenId);
    }

    /**
     * @param string $login
     */
    protected function loginUser($login)
    {
        if ('' !== $login) {
            self::$clientInstance->setServerParameters(static::generateBasicAuthHeader($login, $login));
        } else {
            self::$clientInstance->setServerParameters([]);
            self::$clientInstance->getCookieJar()->clear();
        }
    }

    /**
     * @param string $email
     */
    protected function updateUserSecurityToken($email)
    {
        $user = $this->getUser($email);
        $token = new UsernamePasswordToken($user, false, 'k', $user->getRoles());
        $this->getContainer()->get('security.token_storage')->setToken($token);
    }

    /**
     * @param string $email
     * @param string $userClass
     * @return object
     */
    private function getUser($email, $userClass = User::class)
    {
        return $this->getContainer()->get('doctrine')->getRepository($userClass)->findOneBy(['email' => $email]);
    }

    /**
     * Reset client and rollback transaction
     */
    protected static function resetClient()
    {
        if (self::$clientInstance) {
            self::$clientInstance = null;
        }

        if (self::$soapClientInstance) {
            self::$soapClientInstance = null;
        }

        static::ensureKernelShutdown();
    }

    /**
     * {@inheritdoc}
     */
    protected static function getKernelClass()
    {
        if (isset($_SERVER['KERNEL_DIR'])) {
            $dir = $_SERVER['KERNEL_DIR'];

            if (!is_dir($dir)) {
                $phpUnitDir = static::getPhpUnitXmlDir();
                if (is_dir("$phpUnitDir/$dir")) {
                    $dir = "$phpUnitDir/$dir";
                }
            }
        } else {
            $dir = static::getPhpUnitXmlDir();
        }

        $finder = new Finder();
        $finder->name('AppKernel.php')->depth(0)->in($dir);
        $results = iterator_to_array($finder);
        if (!count($results)) {
            throw new \RuntimeException(
                'Either set KERNEL_DIR in your phpunit.xml according to' .
                ' https://symfony.com/doc/current/book/testing.html#your-first-functional-test' .
                ' or override the WebTestCase::createKernel() method.'
            );
        }

        $file = current($results);
        $class = $file->getBasename('.php');

        require_once $file;

        return $class;
    }

    /**
     * Process and replace all references and functions to values
     *
     * @param  array|string $data Can be path to yml template file or array
     * @return array|string
     */
    protected static function processTemplateData($data)
    {
        if (!self::$referenceRepository) {
            return $data;
        }

        /** @var AliceFixtureLoader $aliceLoader */
        $aliceLoader = self::getContainer()->get('oro_test.alice_fixture_loader');
        $aliceLoader->setReferences(self::$referenceRepository->getReferences());

        if (is_string($data)) {
            try {
                $file = $aliceLoader->locateFile($data);
                if (is_file($file)) {
                    $data = Yaml::parse(file_get_contents($file));
                }
            } catch (\InvalidArgumentException $e) {
            }
        }

        if (is_array($data)) {
            array_walk_recursive($data, function (&$item) use ($aliceLoader) {
                $item = $aliceLoader->getProcessor()->process($item, [], null);
            });
        } elseif (is_int($data) || is_string($data)) {
            $data = $aliceLoader->getProcessor()->process($data, [], null);
        } else {
            throw new \InvalidArgumentException(
                sprintf('Expected argument of type "array or string", "%s" given.', gettype($data))
            );
        }

        return $data;
    }

    /**
     * Get value of dbIsolationPerTest option from annotation of called class
     *
     * @return bool
     */
    private static function getDbIsolationPerTestSetting()
    {
        $calledClass = get_called_class();
        if (!isset(self::$dbIsolationPerTest[$calledClass])) {
            self::$dbIsolationPerTest[$calledClass] = self::isClassHasAnnotation(
                $calledClass,
                self::DB_ISOLATION_PER_TEST_ANNOTATION
            );
        }

        return self::$dbIsolationPerTest[$calledClass];
    }

    /**
     * @return bool
     */
    private static function hasNestTransactionsWithSavepoints()
    {
        $calledClass = get_called_class();
        if (!isset(self::$nestTransactionsWithSavepoints[$calledClass])) {
            self::$nestTransactionsWithSavepoints[$calledClass] =
                self::isClassHasAnnotation($calledClass, self::NEST_TRANSACTIONS_WITH_SAVEPOINTS);
        }

        return self::$nestTransactionsWithSavepoints[$calledClass];
    }

    /**
     * @param string $className
     * @param string $annotationName
     *
     * @return bool
     */
    private static function isClassHasAnnotation($className, $annotationName)
    {
        $annotations = \PHPUnit_Util_Test::parseTestMethodAnnotations($className);
        return isset($annotations['class'][$annotationName]);
    }

    /**
     * @param string $wsdl
     * @param array $options
     * @param bool $force
     *
     * @return SoapClient
     * @throws \Exception
     */
    protected function initSoapClient($wsdl = null, array $options = [], $force = false)
    {
        if (!self::$soapClientInstance || $force) {
            if ($wsdl === null) {
                $wsdl = "http://localhost/api/soap";
            }

            $options = array_merge(
                [
                    'location' => $wsdl,
                    'soap_version' => SOAP_1_2
                ],
                $options
            );

            $client = $this->getClientInstance();
            if ($options['soap_version'] == SOAP_1_2) {
                $contentType = 'application/soap+xml';
            } else {
                $contentType = 'text/xml';
            }
            $client->request('GET', $wsdl, [], [], ['CONTENT_TYPE' => $contentType]);
            $status = $client->getResponse()->getStatusCode();
            $wsdl = $client->getResponse()->getContent();
            if ($status >= 400) {
                throw new \Exception($wsdl, $status);
            }
            //save to file
            $file = tempnam(sys_get_temp_dir(), date("Ymd") . '_') . '.xml';
            $fl = fopen($file, 'bw');
            fwrite($fl, $wsdl);
            fclose($fl);

            self::$soapClientInstance = new SoapClient($file, $options, $client);

            unlink($file);
        }

        return $this->soapClient = self::$soapClientInstance;
    }

    /**
     * Builds up the environment to run the given command.
     *
     * @param string $name
     * @param array $params
     * @param bool $cleanUp strip new lines and multiple spaces, removes dependency on terminal columns
     * @param bool $exceptionOnError
     *
     * @return string
     */
    protected static function runCommand($name, array $params = [], $cleanUp = true, $exceptionOnError = false)
    {
        /** @var KernelInterface $kernel */
        $kernel = self::getContainer()->get('kernel');

        $application = new Application($kernel);
        $application->setAutoExit(false);
        $application->setTerminalDimensions(120, 50);

        $params['--no-ansi'] = true;

        $args = ['application', $name];
        foreach ($params as $k => $v) {
            if (is_bool($v)) {
                if ($v) {
                    $args[] = $k;
                }
            } else {
                if (!is_int($k)) {
                    $args[] = $k;
                }
                $args[] = $v;
            }
        }
        $input = new ArgvInput($args);
        $input->setInteractive(false);

        $fp = fopen('php://temp/maxmemory:' . (1024 * 1024 * 1), 'br+');
        $output = new StreamOutput($fp);

        $exitCode = $application->run($input, $output);

        rewind($fp);

        $content = stream_get_contents($fp);

        if ($exceptionOnError && $exitCode !== 0) {
            throw new \RuntimeException($content);
        }

        if ($cleanUp) {
            $content = preg_replace(['/\s{2,}\n\s{2,}/', '/(\n|\s{2,})+/'], ['', ' '], $content);
        }

        return trim($content);
    }

    /**
     * @param string[] $fixtures Each fixture can be a class name or a path to nelmio/alice file
     * @param bool     $force    Load fixtures even if its was loaded
     *
     * @link https://github.com/nelmio/alice
     */
    protected function loadFixtures(array $fixtures, $force = false)
    {
        if ($force) {
            throw new \RuntimeException(
                sprintf(
                    '%s::loadFixtures asked to do force load, use @%s instead',
                    get_called_class(),
                    self::DB_ISOLATION_PER_TEST_ANNOTATION
                )
            );
        }

        $container = $this->getContainer();
        $fixtureIdentifierResolver = new AliceFixtureIdentifierResolver($container->get('kernel'));

        $filteredFixtures = $this->filterFixtures($fixtures, $force);
        if (!$filteredFixtures) {
            return;
        }

        $loader = new DataFixturesLoader(new AliceFixtureFactory(), $fixtureIdentifierResolver, $container);
        foreach ($filteredFixtures as $fixture) {
            $loader->addFixture($fixture);
        }

        $executor = new DataFixturesExecutor($this->getDataFixturesExecutorEntityManager());
        $executor->execute($loader->getFixtures(), true);
        self::$referenceRepository = $executor->getReferenceRepository();
        $this->postFixtureLoad();
    }

    /**
     * @return EntityManagerInterface
     */
    protected function getDataFixturesExecutorEntityManager()
    {
        return $this->getContainer()->get('doctrine')->getManager();
    }

    /**
     * @param array  $fixtures Existing references that will be filtered
     * @param bool   $force    Load fixtures even if its was loaded
     * @return array
     */
    protected function filterFixtures(array $fixtures, $force = false)
    {
        $container = $this->getContainer();
        $fixtureIdentifierResolver = new AliceFixtureIdentifierResolver($container->get('kernel'));
        $filteredFixtures = [];

        foreach ($fixtures as $fixture) {
            $filteredFixtures[$fixtureIdentifierResolver->resolveId($fixture)] = $fixture;
        }

        if (!$force) {
            $removeLoadedFixturesCallback = function ($fixtureId) {
                return !in_array($fixtureId, self::$loadedFixtures, true);
            };

            $filteredFixtures = array_filter($filteredFixtures, $removeLoadedFixturesCallback, ARRAY_FILTER_USE_KEY);
        }

        self::$loadedFixtures = array_merge(self::$loadedFixtures, array_keys($filteredFixtures));

        return $filteredFixtures;
    }

    /**
     * @param string $name
     *
     * @return object|mixed
     */
    protected function getReference($name)
    {
        return $this->getReferenceRepository()->getReference($name);
    }

    /**
     * @param string $name
     * @return bool
     */
    protected function hasReference($name)
    {
        return $this->getReferenceRepository()->hasReference($name);
    }

    /**
     * @return ReferenceRepository|null
     */
    protected function getReferenceRepository()
    {
        if (false == self::$referenceRepository) {
            throw new \LogicException('The reference repository is not set. Have you loaded fixtures?');
        }

        return self::$referenceRepository;
    }

    /**
     * Callback function to be executed after fixture load.
     */
    protected function postFixtureLoad()
    {
    }

    /**
     * Creates a mock object of a service identified by its id.
     *
     * @param string $id
     *
     * @return \PHPUnit_Framework_MockObject_MockBuilder
     */
    protected function getServiceMockBuilder($id)
    {
        $service = $this->getContainer()->get($id);
        $class = get_class($service);
        return $this->getMockBuilder($class)->disableOriginalConstructor();
    }

    /**
     * Generates a URL or path for a specific route based on the given parameters.
     *
     * @param string $name
     * @param array $parameters
     * @param bool $absolute
     *
     * @return string
     */
    protected function getUrl($name, $parameters = [], $absolute = false)
    {
        return self::getContainer()->get('router')->generate($name, $parameters, $absolute);
    }

    /**
     * Get an instance of the dependency injection container.
     *
     * @return ContainerInterface
     */
    protected static function getContainer()
    {
        return static::getClientInstance()->getContainer();
    }

    /**
     * @return Client
     * @throws \BadMethodCallException
     */
    public static function getClientInstance()
    {
        if (!self::$clientInstance) {
            throw new \BadMethodCallException('Client instance is not initialized.');
        }

        return self::$clientInstance;
    }

    /**
     * Add value from 'oro_default' route to the url
     *
     * @param array $data
     * @param string $urlParameterKey
     */
    public function addOroDefaultPrefixToUrlInParameterArray(&$data, $urlParameterKey)
    {
        $oroDefaultPrefix = $this->getUrl('oro_default');

        $replaceOroDefaultPrefixCallback = function (&$value) use ($oroDefaultPrefix, $urlParameterKey) {
            if (!is_null($value[$urlParameterKey])) {
                $value[$urlParameterKey] = str_replace(
                    '%oro_default_prefix%',
                    $oroDefaultPrefix,
                    $value[$urlParameterKey]
                );
            }
        };

        array_walk(
            $data,
            $replaceOroDefaultPrefixCallback
        );
    }

    /**
     * Data provider for REST/SOAP API tests
     *
     * @param string $folder
     *
     * @return array
     */
    public static function getApiRequestsData($folder)
    {
        static $randomString;

        // generate unique value
        if (!$randomString) {
            $randomString = self::generateRandomString(5);
        }

        $parameters = [];
        $testFiles = new \RecursiveDirectoryIterator($folder, \RecursiveDirectoryIterator::SKIP_DOTS);
        foreach ($testFiles as $fileName => $object) {
            $parameters[$fileName] = Yaml::parse(file_get_contents($fileName)) ?: [];
            if (is_null($parameters[$fileName]['response'])) {
                unset($parameters[$fileName]['response']);
            }
        }

        $replaceCallback = function (&$value) use ($randomString) {
            if (!is_null($value)) {
                $value = str_replace('%str%', $randomString, $value);
            }
        };

        foreach ($parameters as $key => $value) {
            array_walk(
                $parameters[$key]['request'],
                $replaceCallback,
                $randomString
            );
            array_walk(
                $parameters[$key]['response'],
                $replaceCallback,
                $randomString
            );
        }

        return $parameters;
    }

    /**
     * @param int $length
     *
     * @return string
     */
    public static function generateRandomString($length = 10)
    {
        $random = "";
        mt_srand((double)microtime() * 1000000);
        $char_list = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $char_list .= "abcdefghijklmnopqrstuvwxyz";
        $char_list .= "1234567890_";

        for ($i = 0; $i < $length; $i++) {
            $random .= substr($char_list, (mt_rand() % (strlen($char_list))), 1);
        }

        return $random;
    }

    /**
     * Generate WSSE authorization header
     *
     * @param string $userName
     * @param string $userPassword
     * @param string|null $nonce
     *
     * @return array
     */
    public static function generateWsseAuthHeader(
        $userName = self::USER_NAME,
        $userPassword = self::USER_PASSWORD,
        $nonce = null
    ) {
        if (null === $nonce) {
            $nonce = uniqid('nonce', true);
        }

        $created = date('c');
        $digest = base64_encode(sha1(base64_decode($nonce) . $created . $userPassword, true));
        $wsseHeader = [
            'CONTENT_TYPE' => 'application/json',
            'HTTP_Authorization' => 'WSSE profile="UsernameToken"',
            'HTTP_X-WSSE' => sprintf(
                'UsernameToken Username="%s", PasswordDigest="%s", Nonce="%s", Created="%s"',
                $userName,
                $digest,
                $nonce,
                $created
            )
        ];

        return $wsseHeader;
    }

    /**
     * Generate Basic  authorization header
     *
     * @param string $userName
     * @param string $userPassword
     * @param int $userOrganization
     *
     * @return array
     */
    public static function generateBasicAuthHeader(
        $userName = self::AUTH_USER,
        $userPassword = self::AUTH_PW,
        $userOrganization = self::AUTH_ORGANIZATION
    ) {
        return [
            'PHP_AUTH_USER' => $userName,
            'PHP_AUTH_PW' => $userPassword,
            'PHP_AUTH_ORGANIZATION' => $userOrganization
        ];
    }

    /**
     * @return array
     */
    public static function generateNoHashNavigationHeader()
    {
        return ['HTTP_' . strtoupper(ResponseHashnavListener::HASH_NAVIGATION_HEADER) => 0];
    }

    /**
     * Convert value to array
     *
     * @param mixed $value
     *
     * @return array
     */
    public static function valueToArray($value)
    {
        return self::jsonToArray(json_encode($value));
    }

    /**
     * Convert json to array
     *
     * @param string $json
     *
     * @return array
     */
    public static function jsonToArray($json)
    {
        return (array)json_decode($json, true);
    }

    /**
     * Checks json response status code and return content as array
     *
     * @param Response $response
     * @param int $statusCode
     * @param string|int $message
     *
     * @return array
     */
    public static function getJsonResponseContent(Response $response, $statusCode, $message = null)
    {
        self::assertJsonResponseStatusCodeEquals($response, $statusCode, $message);
        return self::jsonToArray($response->getContent());
    }

    /**
     * Assert response is json and has status code
     *
     * @param Response $response
     * @param int $statusCode
     * @param string|null $message
     */
    public static function assertEmptyResponseStatusCodeEquals(Response $response, $statusCode, $message = null)
    {
        self::assertResponseStatusCodeEquals($response, $statusCode, $message);
        self::assertEmpty(
            $response->getContent(),
            sprintf('HTTP response with code %d must have empty body', $statusCode)
        );
    }

    /**
     * Assert response is json and has status code
     *
     * @param Response $response
     * @param int $statusCode
     * @param string|null $message
     */
    public static function assertJsonResponseStatusCodeEquals(Response $response, $statusCode, $message = null)
    {
        self::assertResponseStatusCodeEquals($response, $statusCode, $message);
        self::assertResponseContentTypeEquals($response, 'application/json', $message);
    }

    /**
     * Assert response is html and has status code
     *
     * @param Response $response
     * @param int $statusCode
     * @param string|null $message
     */
    public static function assertHtmlResponseStatusCodeEquals(Response $response, $statusCode, $message = null)
    {
        self::assertResponseStatusCodeEquals($response, $statusCode, $message);
        self::assertResponseContentTypeEquals($response, 'text/html; charset=UTF-8', $message);
    }

    /**
     * Assert response status code equals
     *
     * @param Response $response
     * @param int $statusCode
     * @param string|null $message
     */
    public static function assertResponseStatusCodeEquals(Response $response, $statusCode, $message = null)
    {
        try {
            \PHPUnit_Framework_TestCase::assertEquals($statusCode, $response->getStatusCode(), $message);
        } catch (\PHPUnit_Framework_ExpectationFailedException $e) {
            if ($statusCode < 400
                && $response->getStatusCode() >= 400
                && $response->headers->contains('Content-Type', 'application/json')
            ) {
                $content = self::jsonToArray($response->getContent());
                if (!empty($content['message'])) {
                    $errors = null;
                    if (!empty($content['errors'])) {
                        $errors = is_array($content['errors'])
                            ? json_encode($content['errors'])
                            : $content['errors'];
                    }
                    $e = new \PHPUnit_Framework_ExpectationFailedException(
                        $e->getMessage()
                        . ' Error message: ' . $content['message']
                        . ($errors ? '. Errors: ' . $errors : ''),
                        $e->getComparisonFailure()
                    );
                } else {
                    $e = new \PHPUnit_Framework_ExpectationFailedException(
                        $e->getMessage() . ' Response content: ' . $response->getContent(),
                        $e->getComparisonFailure()
                    );
                }
            }
            throw $e;
        }
    }

    /**
     * Assert response content type equals
     *
     * @param Response $response
     * @param string $contentType
     * @param string|null $message
     */
    public static function assertResponseContentTypeEquals(Response $response, $contentType, $message = null)
    {
        $message = $message ? $message . PHP_EOL : '';
        $message .= sprintf('Failed asserting response has header "Content-Type: %s":', $contentType);
        $message .= PHP_EOL . $response->headers;

        \PHPUnit_Framework_TestCase::assertTrue($response->headers->contains('Content-Type', $contentType), $message);
    }

    /**
     * Assert that intersect of $actual with $expected equals $expected
     *
     * @param array $expected
     * @param array $actual
     * @param string $message
     */
    public static function assertArrayIntersectEquals(array $expected, array $actual, $message = null)
    {
        $actualIntersect = self::getRecursiveArrayIntersect($actual, $expected);
        \PHPUnit_Framework_TestCase::assertEquals(
            $expected,
            $actualIntersect,
            $message
        );
    }

    /**
     * Get intersect of $target array with values of keys in $source array.
     * If key is an array in both places then the value of this key will be returned as intersection as well.
     * Not associative arrays will be returned completely
     *
     * @param array $source
     * @param array $target
     * @return array
     */
    public static function getRecursiveArrayIntersect(array $target, array $source)
    {
        $result = [];

        $isSourceAssociative = ArrayUtil::isAssoc($source);
        $isTargetAssociative = ArrayUtil::isAssoc($target);
        if (!$isSourceAssociative || !$isTargetAssociative) {
            foreach ($target as $key => $value) {
                if (array_key_exists($key, $source) && is_array($value) && is_array($source[$key])) {
                    $result[$key] = self::getRecursiveArrayIntersect($value, $source[$key]);
                } else {
                    $result[$key] = $value;
                }
            }
        } else {
            foreach (array_keys($source) as $key) {
                if (array_key_exists($key, $target)) {
                    if (is_array($target[$key]) && is_array($source[$key])) {
                        $result[$key] = self::getRecursiveArrayIntersect($target[$key], $source[$key]);
                    } else {
                        $result[$key] = $target[$key];
                    }
                }
            }
        }


        return $result;
    }

    /**
     * Sorts array by key recursively. This method is used to output failures of array response comparison in
     * a more comprehensive way.
     *
     * @param array $array
     */
    protected static function sortArrayByKeyRecursively(array &$array)
    {
        ksort($array);

        foreach ($array as $key => &$value) {
            if (is_array($value)) {
                self::sortArrayByKeyRecursively($value);
            }
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return Client
     */
    protected function getClient()
    {
        return self::getClientInstance();
    }

    /**
     * @return Client
     */
    protected function getSoapClient()
    {
        if (!self::$soapClientInstance) {
            throw new \LogicException('Client is not initialized, call "initSoapClient" method first');
        }

        return self::$soapClientInstance;
    }

    /**
     * @return string
     */
    protected function getCurrentDir()
    {
        return dirname((new \ReflectionClass($this))->getFileName());
    }

    /**
     * @param string $folderName
     * @param string $fileName
     *
     * @return string
     */
    protected function getTestResourcePath($folderName, $fileName)
    {
        if (!$folderName) {
            return $this->getCurrentDir() . DIRECTORY_SEPARATOR . $fileName;
        }

        return $this->getCurrentDir() . DIRECTORY_SEPARATOR .  $folderName . DIRECTORY_SEPARATOR . $fileName;
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    protected function isRelativePath($path)
    {
        return
            0 !== strpos($path, '/')
            && 0 !== strpos($path, '@')
            && false === strpos($path, ':');
    }
}
