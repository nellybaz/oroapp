<?php

namespace Oro\Bundle\MagentoBundle\Provider\Transport;

use FOS\RestBundle\Util\Codes;

use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerAwareInterface;

use Oro\Bundle\IntegrationBundle\Entity\Transport;
use Oro\Bundle\IntegrationBundle\Provider\PingableInterface;
use Oro\Bundle\IntegrationBundle\Provider\Rest\Exception\RestException;
use Oro\Bundle\IntegrationBundle\Provider\Rest\Client\RestResponseInterface;
use Oro\Bundle\IntegrationBundle\Provider\Rest\Client\RestClientInterface;
use Oro\Bundle\IntegrationBundle\Provider\Rest\Client\FactoryInterface as RestClientFactoryInterface;
use Oro\Bundle\IntegrationBundle\Provider\TransportInterface;
use Oro\Bundle\MagentoBundle\Converter\Rest\ResponseConverterManager;
use Oro\Bundle\MagentoBundle\Entity\Customer;
use Oro\Bundle\MagentoBundle\Entity\MagentoRestTransport;
use Oro\Bundle\MagentoBundle\Exception\ExtensionRequiredException;
use Oro\Bundle\MagentoBundle\Exception\RuntimeException;
use Oro\Bundle\MagentoBundle\Form\Type\RestTransportSettingFormType;
use Oro\Bundle\MagentoBundle\Model\OroBridgeExtension\Config;
use Oro\Bundle\MagentoBundle\Provider\RestTokenProvider;
use Oro\Bundle\MagentoBundle\Provider\Iterator\Rest\BaseMagentoRestIterator;
use Oro\Bundle\MagentoBundle\Provider\Iterator\Rest\LoadableRestIterator;
use Oro\Bundle\MagentoBundle\Provider\Transport\Provider\OroBridgeExtensionConfigProvider;
use Oro\Bundle\MagentoBundle\Utils\ValidationUtils;

/**
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class RestTransport implements
    TransportInterface,
    MagentoTransportInterface,
    PingableInterface,
    LoggerAwareInterface
{
    use LoggerAwareTrait;
    use ExtensionVersionTrait;

    const REQUIRED_EXTENSION_VERSION = '0.0.0';

    const REGION_RESPONSE_TYPE = 'region';
    const WEBSITE_RESPONSE_TYPE = 'website';

    const API_URL_PREFIX = 'rest/V1';
    const TOKEN_KEY = 'api_token';

    const TOKEN_HEADER_KEY  = 'Authorization';
    const TOKEN_MASK        = 'Bearer %s';

    const REST_PING_URI     = 'oro/ping';

    /**
     * @var array
     */
    protected $headers = [];

    /**
     * @var MagentoRestTransport
     */
    protected $transportEntity;

    /**
     * @var RestClientInterface
     */
    protected $client;

    /**
     * @var RestClientFactoryInterface
     */
    protected $clientFactory;

    /**
     * @var RestTokenProvider
     */
    protected $restTokenProvider;

    /**
     * @var  OroBridgeExtensionConfigProvider
     */
    protected $oroBridgeExtensionConfigProvider;

    /**
     * @var ResponseConverterManager
     */
    protected $responseConverterManager;

    /**
     * @param RestClientFactoryInterface   $clientFactory
     * @param RestTokenProvider         $restTokenProvider
     * @param OroBridgeExtensionConfigProvider $oroBridgeExtensionConfigProvider
     * @param ResponseConverterManager $responseConverterManager
     */
    public function __construct(
        RestClientFactoryInterface $clientFactory,
        RestTokenProvider $restTokenProvider,
        OroBridgeExtensionConfigProvider $oroBridgeExtensionConfigProvider,
        ResponseConverterManager $responseConverterManager
    ) {
        $this->clientFactory = $clientFactory;
        $this->restTokenProvider = $restTokenProvider;
        $this->oroBridgeExtensionConfigProvider = $oroBridgeExtensionConfigProvider;
        $this->responseConverterManager = $responseConverterManager;
    }

    /**
     * {@inheritdoc}
     */
    public function init(Transport $transportEntity)
    {
        $this->initWithExtraOptions($transportEntity, []);
    }

    /**
     * {@inheritdoc}
     */
    public function initWithExtraOptions(Transport $transportEntity, array $clientExtraOptions)
    {
        $this->transportEntity = $transportEntity;
        $this->client = $this->clientFactory->getClientInstance(
            new RestTransportAdapter($this->transportEntity, $clientExtraOptions)
        );
        $token = $this->restTokenProvider->getTokenFromEntity($this->transportEntity, $this->client);
        $this->updateTokenHeaderParam($token);
        $this->oroBridgeExtensionConfigProvider->clearCache();
    }

    /**
     * {@inheritdoc}
     */
    public function resetInitialState()
    {
        $this->transportEntity->setIsExtensionInstalled(null);
    }

    /**
     * @return RestClientInterface
     *
     * @throws RuntimeException
     */
    protected function getClient()
    {
        if (null === $this->client) {
            throw new RuntimeException("REST Transport isn't configured properly.");
        }

        return $this->client;
    }

    /**
     * @param RestException $exception
     *
     * @return bool
     */
    protected function isUnauthorizedException(RestException $exception)
    {
        return $exception->getResponse()->getStatusCode() === Codes::HTTP_UNAUTHORIZED;
    }

    /**
     * @return bool
     */
    protected function isAllowToProcessUnauthorizedResponse()
    {
        $lastResponse = $this->client->getLastResponse();

        return null === $lastResponse || $lastResponse->getStatusCode() !== Codes::HTTP_UNAUTHORIZED;
    }

    /**
     * @param $token
     */
    protected function updateTokenHeaderParam($token)
    {
        $this->headers[static::TOKEN_HEADER_KEY] = $this->getTokenForHeader($token);
    }

    /**
     * @return string
     */
    protected function refreshToken()
    {
        return $this->restTokenProvider->generateNewToken($this->transportEntity, $this->client);
    }

    /**
     * @param string $token
     *
     * @return string
     */
    protected function getTokenForHeader($token)
    {
        return sprintf(static::TOKEN_MASK, $token);
    }

    /**
     * {@inheritdoc}
     */
    public function getAdminUrl()
    {
        return $this->getExtensionConfig()->getAdminUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrders()
    {
        // TODO: Implement getOrders() method. Will be implemented in CRM-8154.
    }

    /**
     * {@inheritdoc}
     */
    public function getCarts()
    {
        // TODO: Implement getCarts() method. Will be implemented in CRM-8155.
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomers()
    {
        //TODO: Implement CustomerRestIterator. Will be implemented in CRM-8153
        return new BaseMagentoRestIterator($this, []);
    }

    /**
     * {@inheritdoc}
     */
    public function isCustomerHasUniqueEmail(Customer $customer)
    {
        /**
         * Will be implemented with method `getCustomers`
         */
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroups()
    {
        // TODO: Implement getCustomerGroups() method. Will be implemented in CRM-8153
    }

    /**
     * {@inheritdoc}
     */
    public function getStores()
    {
        try {
            $data = $this->client->get('store/storeViews', [], $this->headers)->json();

            return new LoadableRestIterator($data);
        } catch (RestException $e) {
            return $this->handleException($e, 'getStores');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsites()
    {
        try {
            $data = $this->client->get('store/websites', [], $this->headers)->json();
            $data = $this->responseConverterManager->convert($data, self::WEBSITE_RESPONSE_TYPE);

            return new LoadableRestIterator($data);
        } catch (RestException $e) {
            return $this->handleException($e, 'getWebsites');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRegions()
    {
        try {
            $data = $this->client->get(sprintf('directory/countries'), [], $this->headers)->json();
            $data = $this->responseConverterManager->convert($data, self::REGION_RESPONSE_TYPE);

            return new LoadableRestIterator($data);
        } catch (RestException $e) {
            return $this->handleException($e, 'getRegions');
        }
    }

    /**
     * @throws ExtensionRequiredException
     */
    protected function checkExtensionInstalled()
    {
        if (!$this->isExtensionInstalled()) {
            throw new ExtensionRequiredException();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerInfo($originId)
    {
        // TODO: Implement getCustomerInfo() method. Will be implemented in CRM-8153
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerAddresses($originId)
    {
        // TODO: Implement getCustomerAddresses() method. Will be implemented in CRM-8153
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorCode(\Exception $e)
    {
        // TODO: Implement getErrorCode() method. Will be implemented in CRM-8329
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderInfo($incrementId)
    {
        // TODO: Implement getOrderInfo() method. Will be implemented in CRM-8154
    }

    /**
     * {@inheritdoc}
     */
    public function createCustomer(array $customerData)
    {
        // TODO: Implement createCustomer() method. Will be implemented in CRM-8234
    }

    /**
     * {@inheritdoc}
     */
    public function updateCustomer($customerId, array $customerData)
    {
        // TODO: Implement updateCustomer() method. Will be implemented in CRM-8234
    }

    /**
     * {@inheritdoc}
     */
    public function createCustomerAddress($customerId, array $item)
    {
        // TODO: Implement createCustomerAddress() method. Will be implemented in CRM-8234
    }

    /**
     * {@inheritdoc}
     */
    public function updateCustomerAddress($customerAddressId, array $item)
    {
        // TODO: Implement updateCustomerAddress() method. Will be implemented in CRM-8234
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerAddressInfo($customerAddressId)
    {
        // TODO: Implement getCustomerAddressInfo() method. Will be implemented in CRM-8153
    }

    /**
     * {@inheritdoc}
     */
    public function getNewsletterSubscribers()
    {
        // TODO: Implement getNewsletterSubscribers() method. Will be implemented in CRM-8156
    }

    /**
     * {@inheritdoc}
     */
    public function createNewsletterSubscriber(array $subscriberData)
    {
        // TODO: Implement createNewsletterSubscriber() method. Will be implemented in CRM-8156
    }

    /**
     * {@inheritdoc}
     */
    public function updateNewsletterSubscriber($subscriberId, array $subscriberData)
    {
        // TODO: Implement updateNewsletterSubscriber() method. Will be implemented in CRM-8156
    }

    /**
     * {@inheritdoc}
     */
    public function isExtensionInstalled()
    {
        return $this->getTransportEntity()->getIsExtensionInstalled();
    }

    /**
     * {@inheritdoc}
     */
    public function isSupportedExtensionVersion()
    {
        return $this->isSupportedVersion($this->getExtensionVersion());
    }

    /**
     * {@inheritdoc}
     */
    public function isSupportedOrderNoteExtensionVersion()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensionVersion()
    {
        return $this->getTransportEntity()->getExtensionVersion();
    }

    /**
     * {@inheritdoc}
     */
    public function getMagentoVersion()
    {
        return $this->getTransportEntity()->getMagentoVersion();
    }


    /**
     * @return MagentoRestTransport
     */
    protected function getTransportEntity()
    {
        if (!$this->isTransportEntityInit()) {
            $config = $this->getExtensionConfig();

            $this->transportEntity->setMagentoVersion($config->getMagentoVersion());
            $this->transportEntity->setExtensionVersion($config->getExtensionVersion());
            $this->transportEntity->setIsExtensionInstalled(!empty($config->getExtensionVersion()));
        }

        return $this->transportEntity;
    }

    /**
     * @return bool
     */
    protected function isTransportEntityInit()
    {
        return null !== $this->transportEntity->getIsExtensionInstalled();
    }

    /**
     * {@inheritdoc}
     */
    public function getServerTime()
    {
        // TODO: Implement getServerTime() method. Will be implemented in CRM-8329
    }

    /**
     * {@inheritdoc}
     */
    public function getLabel()
    {
        return 'oro.magento.transport.rest.label';
    }

    /**
     * {@inheritdoc}
     */
    public function getSettingsFormType()
    {
        return RestTransportSettingFormType::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getSettingsEntityFQCN()
    {
        return MagentoRestTransport::class;
    }

    /**
     * {@inheritdoc}
     */
    public function ping()
    {
        try {
            $this->getClient()->get(static::REST_PING_URI, [], $this->headers);
        } catch (RestException $e) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredExtensionVersion()
    {
        return self::REQUIRED_EXTENSION_VERSION;
    }

    /**
     * @throws RuntimeException
     */
    public function getOrderNoteRequiredExtensionVersion()
    {
        throw new RuntimeException('This functionality not supported !');
    }

    /**
     * {@inheritdoc}
     */
    public function getCreditMemos()
    {
        // TODO: Implement getCreditMemos() method. Will be implemented in CRM-8310
    }

    /**
     * {@inheritdoc}
     */
    public function getCreditMemoInfo($incrementId)
    {
        // TODO: Implement getCreditMemoInfo() method. Will be implemented in CRM-8310
    }

    /**
     * Fill extension data to OroBridgeExtension object
     *
     * @return Config
     *
     * @throws RuntimeException
     */
    protected function getExtensionConfig()
    {
        try {
            return $this->oroBridgeExtensionConfigProvider->getConfig(
                $this->client,
                $this->headers
            );
        } catch (RestException $e) {
            return $this->handleException($e, 'getExtensionConfig', []);
        }
    }

    /**
     * @param RestException $exception
     * @param string        $methodName
     * @param array         $arguments
     *
     * @return mixed
     *
     * @throws RuntimeException
     */
    protected function handleException(RestException $exception, $methodName, $arguments = [])
    {
        if ($exception->getResponse() instanceof RestResponseInterface &&
            $this->isUnauthorizedException($exception) &&
            $this->isAllowToProcessUnauthorizedResponse()
        ) {
            /**
             * Update token and do request one more time
             */
            $token = $this->refreshToken();
            $this->updateTokenHeaderParam($token);

            return call_user_func_array([$this, $methodName], $arguments);
        }

        /**
         * Exception caused by incorrect client settings or invalid response body
         */
        if (null === $exception->getResponse()) {
            throw new RuntimeException(
                ValidationUtils::sanitizeSecureInfo($exception->getMessage()),
                $exception->getCode(),
                $exception
            );
        }

        throw new RuntimeException(
            sprintf(
                'Server returned unexpected response. Response code %s',
                $exception->getCode()
            ),
            $exception->getCode(),
            $exception
        );
    }
}
