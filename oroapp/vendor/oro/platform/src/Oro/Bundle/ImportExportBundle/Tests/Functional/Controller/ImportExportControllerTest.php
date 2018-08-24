<?php

namespace Oro\Bundle\ImportExportBundle\Tests\Functional\Controller;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Oro\Bundle\ImportExportBundle\Async\Topics;
use Oro\Bundle\ImportExportBundle\Job\JobExecutor;
use Oro\Bundle\MessageQueueBundle\Test\Functional\MessageQueueExtension;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\UserBundle\Entity\User;

class ImportExportControllerTest extends WebTestCase
{
    use MessageQueueExtension;

    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
    }

    public function testShouldSendExportMessageOnInstantExportActionWithDefaultParameters()
    {
        $this->client->request(
            'GET',
            $this->getUrl('oro_importexport_export_instant', ['processorAlias' => 'oro_account'])
        );

        $this->assertJsonResponseSuccessOnExport();

        $organization = $this->getTokenAccessor()->getOrganization();
        $organizationId = $organization ? $organization->getId() : null;

        $this->assertMessageSent(Topics::PRE_EXPORT, [
            'jobName' => JobExecutor::JOB_EXPORT_TO_CSV,
            'processorAlias' => 'oro_account',
            'outputFilePrefix' => null,
            'options' => [],
            'userId' => $this->getCurrentUser()->getId(),
            'organizationId' => $organizationId,
        ]);
    }

    public function testShouldSendExportMessageOnInstantExportActionWithPassedParameters()
    {
        $this->client->request(
            'GET',
            $this->getUrl('oro_importexport_export_instant', [
                'processorAlias' => 'oro_account',
                'exportJob' => JobExecutor::JOB_EXPORT_TEMPLATE_TO_CSV,
                'filePrefix' => 'prefix',
                'options' => [
                    'first' => 'first value',
                    'second' => 'second value',
                ]
            ])
        );

        $this->assertJsonResponseSuccessOnExport();

        $organization = $this->getTokenAccessor()->getOrganization();
        $organizationId = $organization ? $organization->getId() : null;

        $this->assertMessageSent(Topics::PRE_EXPORT, [
            'jobName' => JobExecutor::JOB_EXPORT_TEMPLATE_TO_CSV,
            'processorAlias' => 'oro_account',
            'outputFilePrefix' => 'prefix',
            'options' => [
                'first' => 'first value',
                'second' => 'second value',
            ],
            'userId' => $this->getCurrentUser()->getId(),
            'organizationId' => $organizationId,
        ]);
    }

    public function testDownloadFileSuccess()
    {
        $this->client->followRedirects(true);

        $tmpDirName = $this->getContainer()->getParameter('kernel.root_dir') . '/import_export';
        $tmpFileName = tempnam($tmpDirName, 'download.txt');
        $tmp = explode('/', $tmpFileName);
        $filename = array_pop($tmp);

        $this->client->request(
            'GET',
            $this->getUrl('oro_importexport_export_download', [
                'fileName' => $filename
            ])
        );

        $this->assertJsonResponseStatusCodeEquals($this->client->getResponse(), 200);

        unlink($tmpFileName);
    }

    public function testDownloadFileReturns404IfFileDoesntExist()
    {
        $this->client->followRedirects(true);

        $this->client->request(
            'GET',
            $this->getUrl('oro_importexport_export_download', [
                'fileName' => 'non_existing_file.txt'
            ])
        );

        $this->assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 404);
    }

    public function testImportProcessAction()
    {
        $options = [
            'first' => 'first value',
            'second' => 'second value',
        ];
        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_importexport_import_process',
                [
                    'processorAlias' => 'oro_account',
                    'importJob' => JobExecutor::JOB_IMPORT_FROM_CSV,
                    'fileName' => 'test_file',
                    'originFileName' => 'test_file_original',
                    'options' => $options,
                ]
            )
        );

        $this->assertJsonResponseSuccess();

        $this->assertMessageSent(
            Topics::PRE_HTTP_IMPORT,
            [
                'jobName' => JobExecutor::JOB_IMPORT_FROM_CSV,
                'process' => 'import',
                'processorAlias' => 'oro_account',
                'fileName' => 'test_file',
                'originFileName' => 'test_file_original',
                'options' => $options,
                'userId' => $this->getCurrentUser()->getId(),
            ]
        );
    }

    public function testImportValidateAction()
    {
        $options = [
            'first' => 'first value',
            'second' => 'second value',
        ];
        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_importexport_import_validate',
                [
                    'processorAlias' => 'oro_account',
                    'importValidateJob' => JobExecutor::JOB_IMPORT_VALIDATION_FROM_CSV,
                    'fileName' => 'test_file',
                    'originFileName' => 'test_file_original',
                    'options' => $options,
                ]
            )
        );

        $this->assertJsonResponseSuccess();

        $this->assertMessageSent(
            Topics::PRE_HTTP_IMPORT,
            [
                'jobName' => JobExecutor::JOB_IMPORT_VALIDATION_FROM_CSV,
                'processorAlias' => 'oro_account',
                'process' => 'import_validation',
                'fileName' => 'test_file',
                'originFileName' => 'test_file_original',
                'options' => $options,
                'userId' => $this->getCurrentUser()->getId(),
            ]
        );
    }

    public function testImportForm()
    {
        $tmpFilePath = null;
        $file = null;
        try {
            $tmpDirName = $this->getContainer()->getParameter('kernel.root_dir') . '/import_export';
            $fileDir = __DIR__ . '/Import/fixtures';
            $fileName = 'testLineEndings.csv';
            $file = $fileDir . DIRECTORY_SEPARATOR . $fileName;
            $finder = new Finder();
            $finder
                ->files()
                ->name('*.csv')
                ->in($tmpDirName);

            $fs = new Filesystem();

            $tmpFile = sys_get_temp_dir() . DIRECTORY_SEPARATOR . $fileName;
            $fs->copy($file, $tmpFile);
            $file = $tmpFile;

            /** @var \SplFileInfo $file */
            foreach ($finder as $importFile) {
                $fs->remove($importFile->getPathname());
            }

            $csvFile = new UploadedFile(
                $file,
                'testLineEndings.csv',
                'text/csv'
            );
            $this->assertEquals(
                substr_count(file_get_contents($file), "\r\n"),
                substr_count(file_get_contents($csvFile->getPathname()), "\r\n")
            );
            $this->assertEquals(
                substr_count(file_get_contents($file), "\n"),
                substr_count(file_get_contents($csvFile->getPathname()), "\n")
            );

            $crawler = $this->client->request(
                'GET',
                $this->getUrl(
                    'oro_importexport_import_form',
                    [
                        '_widgetContainer' => 'dialog',
                        '_wid' => 'test',
                        'entity' => User::class,
                    ]
                )
            );
            $this->assertHtmlResponseStatusCodeEquals($this->client->getResponse(), 200);

            $uploadFileNode = $crawler->selectButton('Submit');
            $uploadFileForm = $uploadFileNode->form();
            $values = [
                'oro_importexport_import' => [
                    '_token' => $uploadFileForm['oro_importexport_import[_token]']->getValue(),
                    'processorAlias' => 'oro_user.add_or_replace'
                ],
            ];
            $files = [
                'oro_importexport_import' => [
                    'file' => $csvFile
                ]
            ];
            $this->client->request(
                $uploadFileForm->getMethod(),
                $this->getUrl(
                    'oro_importexport_import_form',
                    [
                        '_widgetContainer' => 'dialog',
                        '_wid' => 'test',
                        'entity' => User::class,
                    ]
                ),
                $values,
                $files
            );
            $this->assertJsonResponseSuccess();
            $tmpFiles = glob($tmpDirName . DIRECTORY_SEPARATOR . '*.csv');
            $tmpFilePath = $tmpFiles[count($tmpFiles)-1];
            $tmpFile = new File($tmpFilePath);
            $this->assertEquals(
                substr_count(file_get_contents($file), "\n"),
                substr_count(file_get_contents($tmpFile->getPathname()), "\r\n")
            );
        } finally {
            if ($tmpFilePath && file_exists($tmpFilePath)) {
                unlink($tmpFile->getPathname());
            }
            if ($file && file_exists($file . '_formatted')) {
                unlink($file . '_formatted');
            }
            if ($file && file_exists($file . '_formatted')) {
                unlink($file);
            }
        }
    }

    public function testImportValidateExportTemplateFormNoAlias()
    {
        $this->client->request(
            'GET',
            $this->getUrl('oro_importexport_import_validate_export_template_form')
        );

        static::assertResponseStatusCodeEquals($this->client->getResponse(), 400);
    }

    public function testImportValidateExportTemplateFormGetRequest()
    {
        $this->client->request(
            'GET',
            $this->getUrl('oro_importexport_import_validate_export_template_form'),
            [
                'alias' => 'alias',
                'entity' => 'entity',
            ]
        );

        $response = $this->client->getResponse();

        static::assertResponseStatusCodeEquals($response, 200);
        static::assertContains('Cancel', $response->getContent());
        static::assertContains('Validate', $response->getContent());
        static::assertContains('Import file', $response->getContent());
    }

    /**
     * @return TokenAccessorInterface
     */
    private function getTokenAccessor()
    {
        return $this->getContainer()->get('oro_security.token_accessor');
    }

    /**
     * @return mixed
     */
    private function getCurrentUser()
    {
        return $this->getContainer()->get('security.token_storage')->getToken()->getUser();
    }

    private function assertJsonResponseSuccessOnExport()
    {
        $result = $this->getJsonResponseContent($this->client->getResponse(), 200);

        $this->assertNotEmpty($result);
        $this->assertCount(1, $result);
        $this->assertTrue($result['success']);
    }

    private function assertJsonResponseSuccess()
    {
        $result = $this->getJsonResponseContent($this->client->getResponse(), 200);

        $this->assertNotEmpty($result);
        $this->assertCount(2, $result);
        $this->assertTrue($result['success']);
        $this->assertContains('message', $result);
    }
}
