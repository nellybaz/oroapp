<?php

namespace Oro\Bundle\CustomThemeBundle\Tests\Functional\Frontend;

use Symfony\Component\DomCrawler\Form;

use Oro\Bundle\CheckoutBundle\Tests\Functional\Controller\Frontend\CheckoutControllerTestCase;
use Oro\Bundle\PaymentTermBundle\Tests\Functional\DataFixtures\Traits\EnabledPaymentMethodIdentifierTrait;
use Oro\Bundle\ShoppingListBundle\Tests\Functional\DataFixtures\LoadShoppingLists;

class CheckoutAbsenceBootstrap3ClassesTest extends CheckoutControllerTestCase
{
    use AbsenceBootstrap3ClassesTrait;
    use EnabledPaymentMethodIdentifierTrait {
        getReference as protected;
    }

    public function testStartCheckout()
    {
        $shoppingList = $this->getReference(LoadShoppingLists::SHOPPING_LIST_1);
        $this->startCheckout($shoppingList);
        $crawler = $this->client->request('GET', self::$checkoutUrl);
        $this->assertBootstrapClassesNotExist($crawler);
    }

    /**
     * @depends testStartCheckout
     */
    public function testSubmitBilling()
    {
        $crawler = $this->client->request('GET', self::$checkoutUrl);
        $form = $this->getTransitionForm($crawler);
        $this->setCustomerAddress(
            $this->getReference(self::ANOTHER_ACCOUNT_ADDRESS)->getId(),
            $form,
            self::BILLING_ADDRESS
        );
        $crawler = $this->client->submit($form);
        $this->assertBootstrapClassesNotExist($crawler);
    }

    /**
     * @depends testSubmitBilling
     */
    public function testSubmitShipping()
    {
        $crawler = $this->client->request('GET', self::$checkoutUrl);
        $form = $this->getTransitionForm($crawler);
        $this->setCustomerAddress(
            $this->getReference(self::ANOTHER_ACCOUNT_ADDRESS)->getId(),
            $form,
            self::SHIPPING_ADDRESS
        );
        $crawler = $this->client->submit($form);
        $this->assertBootstrapClassesNotExist($crawler);
    }

    /**
     * @depends testSubmitShipping
     */
    public function testSubmitShippingMethod()
    {
        $crawler = $this->client->request('GET', self::$checkoutUrl);
        $form = $this->getTransitionForm($crawler);
        $crawler = $this->client->submit($form);

        $form = $this->getTransitionForm($crawler);

        $values = $this->explodeArrayPaths($form->getValues());

        $crawler = $this->client->request(
            'POST',
            $form->getUri(),
            $values,
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );
        $this->assertBootstrapClassesNotExist($crawler);
    }

    /**
     * @depends testSubmitShippingMethod
     */
    public function testSubmitPayment()
    {
        $crawler = $this->client->request('GET', self::$checkoutUrl);

        $form = $this->getTransitionForm($crawler);
        $values = $this->explodeArrayPaths($form->getValues());
        $values[self::ORO_WORKFLOW_TRANSITION]['payment_method'] =
            $this->getPaymentMethodIdentifier($this->getContainer());
        $values['_widgetContainer'] = 'ajax';
        $values['_wid'] = 'ajax_checkout';

        $crawler =  $this->client->request(
            'POST',
            $form->getUri(),
            $values,
            [],
            ['HTTP_X-Requested-With' => 'XMLHttpRequest']
        );
        $this->assertBootstrapClassesNotExist($crawler);
    }

    /**
     * @return array
     */
    protected function getInventoryFixtures()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        $config = $this->getContainer()->get('oro_config.global');
        $config->reset('oro_frontend.frontend_theme');
    }

    /**
     * @param int $addressId
     * @param Form $form
     * @param string $addressType
     */
    private function setCustomerAddress($addressId, Form $form, $addressType)
    {
        $addressId = $addressId == 0 ?: 'a_' . $addressId;

        $addressTypePath = sprintf('%s[%s][customerAddress]', self::ORO_WORKFLOW_TRANSITION, $addressType);
        $form->setValues([$addressTypePath => $addressId]);
    }
}
