<?php

namespace Oro\Bundle\DataGridBundle\Tests\Functional\Controller;

use Oro\Bundle\DataGridBundle\Async\Topics;
use Oro\Bundle\ImportExportBundle\Formatter\FormatterProvider;
use Oro\Bundle\MessageQueueBundle\Test\Functional\MessageQueueAssertTrait;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Symfony\Component\Security\Csrf\CsrfToken;

class GridControllerTest extends WebTestCase
{
    use MessageQueueAssertTrait;

    public function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
    }

    public function testShouldSendExportMessage()
    {
        $this->client->request('GET', $this->getUrl('oro_datagrid_export_action', [
            'gridName' => 'audit-grid',
            'format' => 'csv',
            'audit-grid' => [
                '_pager' => [
                    '_page' => 1,
                    '_per_page' => 25,
                ],
                '_parameters' => ['view' => '__all__'],
                '_appearance' => ['_type' => 'grid'],
                '_sort_by' => ['name' => 'ASC'],
                '_columns' => 'organization1.fields1.audit1.user1.impersonation1',
            ],
        ]));

        $result = $this->getJsonResponseContent($this->client->getResponse(), 200);

        $this->assertNotEmpty($result);
        $this->assertCount(1, $result);
        $this->assertTrue($result['successful']);

        $this->assertMessageSent(Topics::PRE_EXPORT, [
            'format' => 'csv',
            'parameters' => [
                'gridName' => 'audit-grid',
                'gridParameters' => [
                    '_pager' => [
                        '_page' => '1',
                        '_per_page' => '25',
                    ],
                    '_parameters' => ['view' => '__all__'],
                    '_appearance' => ['_type' => 'grid'],
                    '_sort_by' => ['name' => 'ASC'],
                    '_columns' => 'organization1.fields1.audit1.user1.impersonation1',

                ],
                FormatterProvider::FORMAT_TYPE => 'excel',
            ],
        ]);
    }

    public function testMassActionActionWithToken()
    {
        $this->client->disableReboot();

        /* @var $token CsrfToken */
        $token = $this->getContainer()->get('security.csrf.token_manager')->getToken('action1');

        $this->client->request(
            'GET',
            $this->getUrl(
                'oro_datagrid_mass_action',
                [
                    'gridName' => 'grid',
                    'actionName' => 'action1',
                    'token' => $token->getValue()
                ]
            )
        );

        $result = $this->client->getResponse();

        $this->assertJsonResponseStatusCodeEquals($result, 403);
        $this->assertEquals('{}', $result->getContent());
    }

    public function testMassActionActionWithInvalidToken()
    {
        $this->client->request(
            'GET',
            $this->getUrl('oro_datagrid_mass_action', ['gridName' => 'grid', 'actionName' => 'action2'])
        );

        $result = $this->client->getResponse();

        $this->assertJsonResponseStatusCodeEquals($result, 403);
        $this->assertEquals('Invalid CSRF Token', json_decode($result->getContent()));
    }
}
