<?php

namespace Oro\Bundle\CheckoutBundle\Tests\Functional\Controller\Frontend;

use Oro\Bundle\ShoppingListBundle\Tests\Functional\DataFixtures\LoadShoppingLists;

/**
 * @group CommunityEdition
 */
class SingleCheckoutControllerTest extends CheckoutControllerTestCase
{
    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $manager = $this->getContainer()->get('oro_workflow.manager');

        $manager->deactivateWorkflow('b2b_flow_checkout');
        $manager->activateWorkflow('b2b_flow_checkout_single_page');
    }

    public function testSaveState()
    {
        $this->startCheckout($this->getReference(LoadShoppingLists::SHOPPING_LIST_8));

        $form = $this->getTransitionForm(
            $this->client->request('GET', self::$checkoutUrl)
        );

        $this->client->request(
            'POST',
            $this->getTransitionUrl('save_state'),
            $form->getPhpValues(),
            $form->getPhpFiles(),
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );

        $result = $this->getJsonResponseContent($this->client->getResponse(), 200);
        $this->assertEquals(
            [
                'responseData' => [
                    'stateSaved' => true,
                ],
            ],
            $result
        );
    }
}
