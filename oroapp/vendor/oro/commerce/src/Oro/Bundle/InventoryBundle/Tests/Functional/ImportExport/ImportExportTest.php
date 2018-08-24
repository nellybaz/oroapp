<?php

namespace Oro\Bundle\InventoryBundle\Tests\Functional\ImportExport;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Yaml\Yaml;

use Doctrine\ORM\EntityRepository;

use Oro\Bundle\InventoryBundle\Entity\InventoryLevel;
use Oro\Bundle\ImportExportBundle\Job\JobExecutor;
use Oro\Bundle\ImportExportBundle\Processor\ProcessorRegistry;
use Oro\Bundle\InventoryBundle\Tests\Functional\DataFixtures\UpdateInventoryLevelsQuantities;
use Oro\Bundle\ProductBundle\Entity\Product;

/**
 * @dbIsolationPerTest
 * @group CommunityEdition
 *
 * @SuppressWarnings(PHPMD.TooManyMethods)
 */
class ImportExportTest extends AbstractImportExportTestCase
{
    /**
     * @var array
     */
    protected $inventoryStatusOnlyHeader = [
        'SKU',
        'Product',
        'Inventory Status',
    ];

    /**
     * @var array
     */
    protected $inventoryLevelHeader = [
        'SKU',
        'Product',
        'Inventory Status',
        'Quantity',
        'Unit',
    ];

    /**
     * @var string
     */
    protected $file;

    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
        $this->loadFixtures([UpdateInventoryLevelsQuantities::class]);
    }

    /**
     * @param string $strategy
     * @dataProvider strategyDataProvider
     */
    public function testImportExport($strategy)
    {
        $this->markTestSkipped(
            'This test will be completely removed and replaced with a set of smaller functional tests (see BAP-13063)'
        );
        $this->validateImportFile($strategy);
        $this->doImport($strategy);
    }

    /**
     * @return array
     */
    public function strategyDataProvider()
    {
        return [
            'inventory level' => ['oro_inventory.inventory_level'],
        ];
    }

    /**
     * @param string $strategy
     */
    protected function doImport($strategy)
    {
        $this->client->followRedirects(false);
        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_importexport_import_process',
                [
                    'processorAlias' => $strategy,
                    '_format' => 'json',
                ]
            )
        );

        $data = $this->getJsonResponseContent($this->client->getResponse(), 200);

        $this->assertEquals(
            [
                'success' => true,
                'message' => 'File was successfully imported.',
                'importInfo' => '0 inventory levels were added, 1 inventory levels were updated',
            ],
            $data
        );
    }

    /**
     * @param string $strategy
     */
    protected function validateImportFile($strategy)
    {
        $crawler = $this->client->request(
            'GET',
            $this->getUrl(
                'oro_importexport_import_form',
                [
                    'entity' => InventoryLevel::class,
                    '_widgetContainer' => 'dialog',
                ]
            )
        );
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        $this->file = $this->getImportTemplate();
        $this->assertTrue(file_exists($this->file));

        /** @var Form $form */
        $form = $crawler->selectButton('Submit')->form();

        /** TODO Change after BAP-1813 */
        $form->getFormNode()->setAttribute(
            'action',
            $form->getFormNode()->getAttribute('action') . '&_widgetContainer=dialog'
        );

        $form['oro_importexport_import[file]']->upload($this->file);
        $form['oro_importexport_import[processorAlias]'] = $strategy;

        $this->client->followRedirects(true);
        $this->client->submit($form);

        $result = $this->client->getResponse();

        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        $crawler = $this->client->getCrawler();
        $this->assertEquals(0, $crawler->filter('.import-errors')->count());
    }

    /**
     * @return string
     */
    protected function getImportTemplate()
    {
        $result = $this
            ->getContainer()
            ->get('oro_importexport.handler.export')
            ->getExportResult(
                JobExecutor::JOB_EXPORT_TEMPLATE_TO_CSV,
                'oro_inventory.detailed_inventory_levels_template',
                ProcessorRegistry::TYPE_EXPORT_TEMPLATE
            );

        $chains = explode('/', $result['url']);

        return $this
            ->getContainer()
            ->get('oro_importexport.file.file_system_operator')
            ->getTemporaryFile(end($chains))
            ->getRealPath();
    }

    public function testExportInventoryStatusesOnly()
    {
        $this->markTestSkipped(
            'This test will be completely removed and replaced with a set of smaller functional tests (see BAP-13064)'
        );
        $fileContent = $this->assertExportInfluencedByProcessorChoice(
            'oro_product.inventory_status_only',
            $this->inventoryStatusOnlyHeader
        );

        $expectedRows = count(
            $this->client->getContainer()->get('oro_entity.doctrine_helper')
                ->getEntityRepository(Product::class)
                ->findAll()
        );
        $this->assertFileContentConsistency(
            $fileContent,
            count($this->inventoryStatusOnlyHeader),
            $expectedRows
        );
    }

    public function testExportDetailedInventoryLevel()
    {
        $this->markTestSkipped(
            'This test will be completely removed and replaced with a set of smaller functional tests (see BAP-13064)'
        );
        $fileContent = $this->assertExportInfluencedByProcessorChoice(
            'oro_inventory.detailed_inventory_levels',
            $this->inventoryLevelHeader
        );

        $expectedRows = count(
            $this->client->getContainer()->get('oro_entity.doctrine_helper')
                ->getEntityRepository(InventoryLevel::class)
                ->findAll()
        );

        $this->assertFileContentConsistency(
            $fileContent,
            count($this->inventoryLevelHeader),
            $expectedRows
        );

        // check correct unit format
        $exportUnits = [];
        for ($i = 1; $i < count($fileContent); $i++) {
            $exportUnits[] = end($fileContent[$i]);
        }

        $inventoryLevels = $this->client->getContainer()->get('oro_api.doctrine_helper')
            ->getEntityRepository(InventoryLevel::class)
            ->findAll();
        $formatter = $this->client->getContainer()->get('oro_product.formatter.product_unit_label');
        $actualUnits = [];
        foreach ($inventoryLevels as $inventoryLevel) {
            /** @var InventoryLevel $inventoryLevel */
            $precisionUnit = $inventoryLevel->getProductUnitPrecision()->getUnit();
            $actualUnits[] = $formatter->format(
                $precisionUnit ? $precisionUnit->getCode() : null,
                true,
                $inventoryLevel->getQuantity() > 1
            );
        }

        $this->assertEmpty(array_diff($exportUnits, $actualUnits));
    }

    /**
     * @param string $exportChoice
     * @param array $expectedHeader
     * @return array
     */
    protected function assertExportInfluencedByProcessorChoice($exportChoice, $expectedHeader)
    {
        $crawler = $this->client->request(
            'GET',
            $this->getUrl(
                'oro_importexport_export_config',
                $this->getDefaultRequestParameters()
            )
        );
        $form = $crawler->selectButton('Export')->form();
        $form['oro_importexport_export[processorAlias]'] = $exportChoice;
        $this->client->submit($form);
        $response = json_decode($this->client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('success', $response);
        $this->assertTrue($response['success']);

        $fileContent = $this->downloadFile($response['url']);
        $this->assertEquals($fileContent[0], $expectedHeader);

        return $fileContent;
    }

    /**
     * @dataProvider exportTemplateDataProvider
     * @param string $exportChoice
     * @param [] $expectedHeader
     */
    public function testExportTemplateInventoryStatusOnly($exportChoice, $expectedHeader)
    {
        $this->markTestSkipped(
            'This test will be completely removed and replaced with a set of smaller functional tests (see BAP-13064)'
        );
        $this->client->useHashNavigation(false);
        $parameters = $this->getDefaultRequestParameters();
        $parameters['processorAlias'] = 'oro_inventory.detailed_inventory_levels_template';

        $crawler = $this->client->request(
            'GET',
            $this->getUrl(
                'oro_importexport_export_template_config',
                $parameters
            )
        );
        $form = $crawler->selectButton('Download')->form();
        $form['oro_importexport_export_template[processorAlias]'] = $exportChoice;
        $this->client->submit($form);
        $response = json_decode($this->client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('url', $response);
        $this->assertContains('.csv', $response['url']);

        $fileContent = $this->downloadFile($response['url']);
        $this->assertEquals($fileContent[0], $expectedHeader);
    }

    /**
     * @return array
     */
    public function exportTemplateDataProvider()
    {
        return [
            ['oro_product.inventory_status_only_template', $this->inventoryStatusOnlyHeader],
            ['oro_inventory.detailed_inventory_levels_template', $this->inventoryLevelHeader]
        ];
    }

    /**
     * @param string $url
     * @return array
     */
    protected function downloadFile($url)
    {
        $this->client->request('GET', $url);

        /** @var File $file */
        $file = $this->client->getResponse()->getFile();
        $handle = fopen($file->getRealPath(), "r");
        $this->assertNotFalse($handle);

        $row = fgetcsv($handle);
        $rows = [];
        while ($row) {
            $rows[] = $row;
            $row = fgetcsv($handle);
        }

        return $rows;
    }

    /**
     * @param array $fileContent
     * @param int $numberOfColumns
     * @param int $numberOfRows
     */
    protected function assertFileContentConsistency($fileContent, $numberOfColumns, $numberOfRows)
    {
        for ($i = 1; $i < count($fileContent); $i++) {
            $this->assertEquals(count($fileContent[$i]), $numberOfColumns);
        }

        $this->assertEquals($numberOfRows, count($fileContent) - 1);
    }

    protected function getDefaultRequestParameters()
    {
        return [
            '_widgetContainer' => 'dialog',
            '_wid' => uniqid('abc', true),
            'entity' => InventoryLevel::class,
            'processorAlias' => 'oro_inventory.detailed_inventory_levels'
        ];
    }

    /**
     * @param string $fileName
     * @param array $contextErrors
     *
     * @dataProvider validationDataProvider
     */
    public function testValidation($fileName, array $contextErrors = [])
    {
        $this->cleanUpReader();

        $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $fileName;

        $configuration = [
            'import_validation' => [
                'processorAlias' => 'oro_inventory.inventory_level',
                'entityName' => InventoryLevel::class,
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
                return strpos($error, 'owner: This value should not be blank.') === false;
            }
        );
        $this->assertEquals($contextErrors, array_values($errors), implode(PHP_EOL, $errors));
    }

    /**
     * @return array
     */
    public function validationDataProvider()
    {
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'import_validation.yml';

        return Yaml::parse(file_get_contents($filePath));
    }

    /**
     * @param string $fileName
     * @param array $configuration
     *
     * @dataProvider inventoryStatusDataProvider
     */
    public function testImportInventoryStatuses($fileName)
    {
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $fileName;

        $jobResult = $this->makeImport($filePath);
        $exceptions = $jobResult->getFailureExceptions();
        $this->assertEmpty($exceptions, implode(PHP_EOL, $exceptions));
        $this->assertEmpty(
            $jobResult->getContext()->getErrors(),
            implode(PHP_EOL, $jobResult->getContext()->getErrors())
        );

        $file = fopen($filePath, "r");
        $header = fgetcsv($file);

        if (!$header) {
            return;
        }

        /** @var EntityRepository $repository */
        $repository = $this->client->getContainer()->get('oro_entity.doctrine_helper')
            ->getEntityRepository(Product::class);

        $row = fgetcsv($file);
        while ($row) {
            $values = array_combine($header, $row);
            $entity = $repository->findOneBy(['sku' => $values['SKU']]);

            $this->assertTrue($this->assertFields(
                $entity,
                $values,
                array_intersect($this->getFieldMappings(), $header),
                []
            ));

            $row = fgetcsv($file);
        }
    }

    /**
     * @param string $fileName
     * @param array $configuration
     *
     * @dataProvider inventoryLevelsDataProvider
     */
    public function testImportInventoryLevels($fileName)
    {
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $fileName;

        $jobResult = $this->makeImport($filePath);
        $exceptions = $jobResult->getFailureExceptions();
        $this->assertEmpty($exceptions, implode(PHP_EOL, $exceptions));
        $this->assertEmpty(
            $jobResult->getContext()->getErrors(),
            implode(PHP_EOL, $jobResult->getContext()->getErrors())
        );

        $file = fopen($filePath, "r");
        $header = fgetcsv($file);

        if (!$header) {
            return;
        }

        $row = fgetcsv($file);
        while ($row) {
            $values = array_combine($header, $row);

            $this->assertTrue($this->assertFields(
                $this->getInventoryLevelEntity($values),
                $values,
                array_intersect($this->getFieldMappings(), $header),
                []
            ));

            $row = fgetcsv($file);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImportStatusFile()
    {
        return 'import_status_data.yml';
    }

    /**
     * {@inheritdoc}
     */
    public function getImportLevelFile()
    {
        return 'import_level_data.yml';
    }
}
