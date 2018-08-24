<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Functional\Controller;

use Symfony\Component\HttpFoundation\Response;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

use Oro\Bundle\WorkflowBundle\Tests\Functional\DataFixtures\LoadProcessEntities;

class ProcessDefinitionControllerTest extends WebTestCase
{
    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->loadFixtures(['Oro\Bundle\WorkflowBundle\Tests\Functional\DataFixtures\LoadProcessEntities']);
    }

    public function testIndexAction()
    {
        $this->client->request(
            'GET',
            $this->getUrl('oro_process_definition_index'),
            [],
            [],
            $this->generateBasicAuthHeader()
        );
        $response = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($response, 200);

        $result = $response->getContent();
        $this->assertContains('data-page-component-name="process-definitions-grid"', $result);

        $response = $this->client->requestGrid(
            [
                'gridName' => 'process-definitions-grid',
                'process-definitions-grid[_pager][_per_page]' => '100',
            ]
        );

        $this->assertJsonResponseStatusCodeEquals($response, Response::HTTP_OK);
        $result = $response->getContent();

        $this->assertContains(LoadProcessEntities::FIRST_DEFINITION, $result);
        $this->assertContains(LoadProcessEntities::SECOND_DEFINITION, $result);
        $this->assertContains(LoadProcessEntities::DISABLED_DEFINITION, $result);
    }

    public function testViewAction()
    {
        $this->client->request(
            'GET',
            $this->getUrl('oro_process_definition_view', ['name' => LoadProcessEntities::FIRST_DEFINITION]),
            [],
            [],
            $this->generateBasicAuthHeader()
        );
        $response = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($response, 200);
        $result = $response->getContent();
        $this->assertContains(LoadProcessEntities::FIRST_DEFINITION, $result);
    }
}
