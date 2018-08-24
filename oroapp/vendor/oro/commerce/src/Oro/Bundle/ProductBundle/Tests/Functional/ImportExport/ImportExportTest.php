<?php

namespace Oro\Bundle\ProductBundle\Tests\Functional\ImportExport;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Yaml\Yaml;

use Oro\Bundle\MessageQueueBundle\Test\Functional\MessageProcessTrait;
use Oro\Bundle\ImportExportBundle\Job\JobExecutor;
use Oro\Bundle\ImportExportBundle\Processor\ProcessorRegistry;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Tests\Functional\DataFixtures\LoadProductData;
use Oro\Bundle\SecurityBundle\Authentication\Token\OrganizationToken;

/**
 * @dbIsolationPerTest
 *
 * @covers \Oro\Bundle\ProductBundle\ImportExport\TemplateFixture\ProductFixture
 */
class ImportExportTest extends AbstractImportExportTest
{
    use MessageProcessTrait;

    /**
     * @var string
     */
    protected $file;

    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
    }

    public function testShouldExportCorrectData()
    {
        $this->markTestSkipped(
            'This test will be completely removed and replaced with a set of smaller functional tests (see BAP-13064)'
        );
        $this->client->followRedirects(false);
        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_importexport_export_instant',
                ['processorAlias' => 'oro_product_product', '_format' => 'json']
            )
        );

        $data = $this->getJsonResponseContent($this->client->getResponse(), 200);
        $this->assertCount(1, $data);
        $this->assertTrue($data['success']);

        $exportedDataFilePath = $this->processExportMessage($this->getContainer(), $this->client);

        $expectedDataFilePath = $this->getContainer()->get('file_locator')->locate(
            '@OroProductBundle/Tests/Functional/ImportExport/data/expected_export_product_row.csv'
        );

        $exportedData = $this->getFileContents($exportedDataFilePath);
        $expectedData = $this->getFileContents($expectedDataFilePath);

        $commonFields = array_intersect($expectedData[0], $exportedData[0]);

        $expectedValues = $this->extractFieldValues($commonFields, $expectedData);
        $exportedValues = $this->extractFieldValues($commonFields, $exportedData);

        $this->assertEquals($expectedValues, $exportedValues);

        unlink($exportedDataFilePath); // remove trash
    }

    /**
     * @param string $strategy
     * @dataProvider strategyDataProvider
     */
    public function testImportProcess($strategy)
    {
        $this->markTestSkipped(
            'This test will be completely removed and replaced with a set of smaller functional tests (see BAP-13063)'
        );
        $importTemplateFile = $this->getImportTemplate();
        $this->validateImportFile($strategy, $importTemplateFile);
        $data = $this->doImport($strategy);
        $this->assertImportResponse($data, 1, 0);
    }

    /**
     * @return array
     */
    public function strategyDataProvider()
    {
        return [
            'add or replace' => ['oro_product_product.add_or_replace'],
        ];
    }

    /**
     * @return string
     */
    protected function getExportFile()
    {
        $result = $this
            ->getContainer()
            ->get('oro_importexport.handler.export')
            ->getExportResult(
                JobExecutor::JOB_EXPORT_TO_CSV,
                'oro_product_product',
                ProcessorRegistry::TYPE_EXPORT
            );

        $chains = explode('/', $result['url']);

        return $this
            ->getContainer()
            ->get('oro_importexport.file.file_system_operator')
            ->getTemporaryFile(end($chains))
            ->getRealPath();
    }

    /**
     * @param string $fileName
     * @return array
     */
    protected function getFileContents($fileName)
    {
        $content = file_get_contents($fileName);
        $content = explode("\n", $content);
        $content = array_filter($content, 'strlen');

        return array_map('str_getcsv', $content);
    }

    /**
     * @param string $exportFile
     * @param int $expectedItemsCount
     */
    protected function validateExportResult($exportFile, $expectedItemsCount)
    {
        $exportedData = $this->getFileContents($exportFile);
        unset($exportedData[0]);

        $this->assertCount($expectedItemsCount, $exportedData);
    }

    /**
     * @param string $fileName
     * @param array $contextErrors
     *
     * @dataProvider validationDataProvider
     */
    public function testValidation($fileName, array $contextErrors = [])
    {
        $this->markTestSkipped(
            'This test will be completely removed and replaced with a set of smaller functional tests (see BAP-13063)'
        );
        $this->setSecurityToken();
        $this->cleanUpReader();

        $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $fileName;

        $configuration = [
            'import_validation' => [
                'processorAlias' => 'oro_product_product.add_or_replace',
                'entityName' => $this->getContainer()->getParameter('oro_product.entity.product.class'),
                'filePath' => $filePath,
            ],
        ];

        $jobResult = $this->getContainer()->get('oro_importexport.job_executor')->executeJob(
            ProcessorRegistry::TYPE_IMPORT_VALIDATION,
            JobExecutor::JOB_IMPORT_VALIDATION_FROM_CSV,
            $configuration
        );

        $exceptions = $jobResult->getFailureExceptions();
        $this->assertEmpty($exceptions, implode(PHP_EOL, $exceptions));

        // owner is not available in cli context, managed using ConsoleContextListener
        $errors = array_filter(
            $jobResult->getContext()->getErrors(),
            function ($error) {
                return strpos($error, 'owner: This value should not be blank.') === false
                && strpos($error, 'Unit of Quantity Unit Code: This value should not be blank.') === false;
            }
        );
        $this->assertEquals($contextErrors, array_values($errors), implode(PHP_EOL, $errors));
        $this->getContainer()->get('security.token_storage')->setToken(null);
    }

    /**
     * @return array
     */
    public function validationDataProvider()
    {
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'import_validation.yml';

        return Yaml::parse(file_get_contents($filePath));
    }

    public function testImportRelations()
    {
        $this->markTestSkipped(
            'This test will be completely removed and replaced with a set of smaller functional tests (see BAP-13063)'
        );
        $this->setSecurityToken();
        $this->cleanUpReader();

        $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'import.csv';

        $productClass = $this->getContainer()->getParameter('oro_product.entity.product.class');
        $configuration = [
            'import' => [
                'processorAlias' => 'oro_product_product.add_or_replace',
                'entityName' => $productClass,
                'filePath' => $filePath,
            ],
        ];

        $jobResult = $this->getContainer()->get('oro_importexport.job_executor')->executeJob(
            ProcessorRegistry::TYPE_IMPORT,
            JobExecutor::JOB_IMPORT_FROM_CSV,
            $configuration
        );

        $exceptions = $jobResult->getFailureExceptions();
        $this->assertEmpty($exceptions, implode(PHP_EOL, $exceptions));
        $this->assertEmpty(
            $jobResult->getContext()->getErrors(),
            implode(PHP_EOL, $jobResult->getContext()->getErrors())
        );

        $em = $this->getContainer()->get('doctrine')->getManagerForClass($productClass);

        /** @var Product $product */
        $product = $em->getRepository($productClass)->findOneBy(['sku' => 'SKU099']);

        $this->assertNotEmpty($product);
        $this->assertEquals('enabled', $product->getStatus());
        $this->assertEquals('in_stock', $product->getInventoryStatus()->getId());

        $this->assertCount(1, $product->getUnitPrecisions());
        $this->assertEquals('each', $product->getUnitPrecisions()->first()->getUnit()->getCode());
        $this->assertEquals(3, $product->getUnitPrecisions()->first()->getPrecision());

        $this->assertCount(2, $product->getNames());
        $this->assertEquals('parent_localization', $product->getNames()->first()->getFallback());
        $this->assertEquals('Name', $product->getNames()->first()->getString());
        $this->assertEquals('system', $product->getNames()->last()->getFallback());
        $this->assertEquals('En Name', $product->getNames()->last()->getString());

        $this->getContainer()->get('security.token_storage')->setToken(null);
    }

    public function testSkippedTypeForExistingProduct()
    {
        $this->markTestSkipped(
            'This test will be completely removed and replaced with a set of smaller functional tests (see BAP-13063)'
        );
        $token = new OrganizationToken(
            $this->getContainer()->get('doctrine')->getRepository('OroOrganizationBundle:Organization')->findOneBy([])
        );
        $token->setUser(
            $this->getContainer()->get('doctrine')->getRepository('OroUserBundle:User')->findOneBy([])
        );
        $this->getContainer()->get('security.token_storage')->setToken($token);

        $this->cleanUpReader();

        $dataPath = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR;

        $productClass = $this->getContainer()->getParameter('oro_product.entity.product.class');
        $configuration = [
            'import' => [
                'processorAlias' => 'oro_product_product.add_or_replace',
                'entityName' => $productClass,
                'filePath' => $dataPath . 'import.csv',
            ],
        ];

        $this->getContainer()->get('oro_importexport.job_executor')->executeJob(
            ProcessorRegistry::TYPE_IMPORT,
            JobExecutor::JOB_IMPORT_FROM_CSV,
            $configuration
        );

        $this->cleanUpReader();

        $configuration = [
            'import' => [
                'processorAlias' => 'oro_product_product.add_or_replace',
                'entityName' => $productClass,
                'filePath' => $dataPath . 'import_with_type.csv',
            ],
        ];

        $this->getContainer()->get('oro_importexport.job_executor')->executeJob(
            ProcessorRegistry::TYPE_IMPORT,
            JobExecutor::JOB_IMPORT_FROM_CSV,
            $configuration
        );

        $em = $this->getContainer()->get('doctrine')->getManagerForClass($productClass);

        /** @var Product $product */
        $product = $em->getRepository($productClass)->findOneBy(['sku' => 'SKU099']);

        $this->assertNotEmpty($product);
        $this->assertNotEquals(Product::TYPE_CONFIGURABLE, $product->getType());
        $this->assertEquals(Product::STATUS_DISABLED, $product->getStatus());

        $this->getContainer()->get('security.token_storage')->setToken(null);
    }

    /**
     * @dataProvider strategyDataProvider
     * @param string $strategy
     */
    public function testAddNewProducts($strategy)
    {
        $this->markTestSkipped(
            'This test will be completely removed and replaced with a set of smaller functional tests
             (see BAP-13063 and BAP-13064)'
        );
        $this->loadFixtures([LoadProductData::class]);
        $productClass = $this->getContainer()->getParameter('oro_product.entity.product.class');

        $file = $this->getExportFile();
        $this->validateExportResult($file, 8);

        $doctrine = $this->getContainer()->get('doctrine');

        /** @var EntityManager $productManager */
        $productManager = $doctrine->getManagerForClass($productClass);
        $productManager->createQuery('DELETE FROM OroProductBundle:Product')->execute();

        $this->validateImportFile($strategy, $file);
        $data = $this->doImport($strategy);
        $this->assertImportResponse($data, 8, 0);

        $products = $productManager->getRepository($productClass)->findAll();
        $this->assertCount(8, $products);
    }

    /**
     * @dataProvider strategyDataProvider
     * @param string $strategy
     */
    public function testUpdateProducts($strategy)
    {
        $this->markTestSkipped(
            'This test will be completely removed and replaced with a set of smaller functional tests
            (see BAP-13063 and BAP-13064)'
        );
        $this->loadFixtures([LoadProductData::class]);

        $file = $this->getExportFile();
        $this->validateExportResult($file, 8);

        $this->validateImportFile($strategy, $file);
        $data = $this->doImport($strategy);
        $this->assertImportResponse($data, 0, 8);
    }

    /**
     * @param array $data
     * @param int $added
     * @param int $updated
     */
    protected function assertImportResponse(array $data, $added, $updated)
    {
        $this->assertEquals(
            [
                'success'    => true,
                'message'    => 'File was successfully imported.',
                'importInfo' => $added . ' products were added, ' . $updated . ' products were updated',
            ],
            $data
        );
    }

    protected function setSecurityToken()
    {
        $token = new OrganizationToken(
            $this->getContainer()->get('doctrine')->getRepository('OroOrganizationBundle:Organization')->findOneBy([])
        );
        $token->setUser(
            $this->getContainer()->get('doctrine')->getRepository('OroUserBundle:User')->findOneBy([])
        );
        $this->getContainer()->get('security.token_storage')->setToken($token);
    }
}
