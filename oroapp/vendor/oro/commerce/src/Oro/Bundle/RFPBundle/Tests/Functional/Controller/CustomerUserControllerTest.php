<?php

namespace Oro\Bundle\RFPBundle\Tests\Functional\Controller;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\RFPBundle\Entity\Request;
use Oro\Bundle\RFPBundle\Tests\Functional\DataFixtures\LoadRequestData;

class CustomerUserControllerTest extends WebTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->initClient([], static::generateBasicAuthHeader());
        $this->client->useHashNavigation(true);

        $this->loadFixtures([
            'Oro\Bundle\RFPBundle\Tests\Functional\DataFixtures\LoadRequestData',
        ]);
    }

    public function testQuoteGridOnCustomerViewPage()
    {
        /** @var Request $request */
        $request = $this->getReference('rfp.request.2');
        /** @var CustomerUser $customerUser */
        $customerUser = $request->getCustomerUser();
        $crawler = $this->client->request(
            'GET',
            $this->getUrl(
                'oro_customer_customer_user_view',
                ['id' => $customerUser->getId()]
            )
        );
        $gridAttr = $crawler->filter('[id^=grid-customer-user-view-rfq-grid]')
            ->first()->attr('data-page-component-options');
        $gridJsonElements = json_decode(html_entity_decode($gridAttr), true);
        $this->assertCount(
            count(LoadRequestData::getRequestsFor('customerUser', $customerUser->getEmail())),
            $gridJsonElements['data']['data']
        );
    }
}
