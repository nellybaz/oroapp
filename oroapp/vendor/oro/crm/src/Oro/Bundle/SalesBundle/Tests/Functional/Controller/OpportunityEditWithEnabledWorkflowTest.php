<?php

namespace Oro\Bundle\SalesBundle\Tests\Functional\Controller;

use Symfony\Component\DomCrawler\Form;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\WorkflowBundle\Model\WorkflowManager;
use Oro\Bundle\SalesBundle\Tests\Functional\Fixture\LoadOpenOpportunityFixtures;

class OpportunityEditWithEnabledWorkflowTest extends WebTestCase
{
    /** @var  WorkflowManager */
    protected $workflowManager;

    protected function setUp()
    {
        $this->initClient(
            ['debug' => false],
            array_merge($this->generateBasicAuthHeader(), array('HTTP_X-CSRF-Header' => 1))
        );
        $this->client->useHashNavigation(true);
        $this->workflowManager = $this->client->getContainer()->get('oro_workflow.manager');
        $this->workflowManager->activateWorkflow('opportunity_flow');
        $this->loadFixtures([
            LoadOpenOpportunityFixtures::class
        ]);
    }

    public function testEditOpportunity()
    {
        $newOpportunityName = 'Changed name';

        $opportunity = $this->getReference('open_opportunity');

        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_sales_opportunity_update', ['id' => $opportunity->getId()])
        );

        /** @var Form $form */
        $form = $crawler->selectButton('Save and Close')->form();
        $form['oro_sales_opportunity_form[name]']->setValue($newOpportunityName);

        $this->client->followRedirects(true);
        $this->client->submit($form);

        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_sales_opportunity_update', ['id' => $opportunity->getId()])
        );

        $form = $crawler->selectButton('Save and Close')->form();

        $opportunityName = $form['oro_sales_opportunity_form[name]'];

        $this->assertEquals(
            $newOpportunityName,
            $opportunityName->getValue(),
            "Changed opportunity name through edit form with enabled 'Opportunity workflow' is fault !"
        );
    }
}
