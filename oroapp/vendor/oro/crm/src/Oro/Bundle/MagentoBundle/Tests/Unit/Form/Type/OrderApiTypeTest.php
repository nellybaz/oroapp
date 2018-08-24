<?php

namespace Oro\Bundle\MagentoBundle\Tests\Unit\Form\Type;

use Oro\Bundle\MagentoBundle\Form\Type\OrderApiType;

class OrderApiTypeTest extends \PHPUnit_Framework_TestCase
{
    /** @var OrderApiType */
    protected $type;

    protected function setUp()
    {
        $this->type = new OrderApiType();
    }

    protected function tearDown()
    {
        unset($this->type);
    }

    public function testBuildForm()
    {
        $builder = $this->getMockBuilder('Symfony\Component\Form\FormBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $builder->expects($this->exactly(2))
            ->method('addEventSubscriber')
            ->with($this->isInstanceOf('Symfony\Component\EventDispatcher\EventSubscriberInterface'));

        $expectedFields = [
            'incrementId'         => 'text',
            'originId'            => 'text',
            'isVirtual'           => 'checkbox',
            'isGuest'             => 'checkbox',
            'giftMessage'         => 'text',
            'remoteIp'            => 'text',
            'storeName'           => 'text',
            'totalPaidAmount'     => 'number',
            'totalInvoicedAmount' => 'oro_money',
            'totalRefundedAmount' => 'oro_money',
            'totalCanceledAmount' => 'oro_money',
            'notes'               => 'text',
            'feedback'            => 'text',
            'customerEmail'       => 'text',
            'currency'            => 'text',
            'paymentMethod'       => 'text',
            'paymentDetails'      => 'text',
            'subtotalAmount'      => 'oro_money',
            'shippingAmount'      => 'oro_money',
            'shippingMethod'      => 'text',
            'taxAmount'           => 'oro_money',
            'couponCode'          => 'text',
            'discountAmount'      => 'oro_money',
            'discountPercent'     => 'oro_percent',
            'totalAmount'         => 'oro_money',
            'status'              => 'text',
            'customer'            => 'oro_customer_select',
            'addresses'           => 'oro_address_collection',
            'items'               => 'oro_order_item_collection',
            'owner'               => 'translatable_entity',
            'dataChannel'         => 'translatable_entity',
            'store'               => 'translatable_entity',
            'channel'             => 'oro_integration_select'
        ];

        $builder->expects($this->exactly(count($expectedFields)))
            ->method('add');

        $counter = 0;
        foreach ($expectedFields as $fieldName => $formType) {
            $builder->expects($this->at($counter))
                ->method('add')
                ->with($fieldName, $formType)
                ->will($this->returnSelf());
            $counter++;
        }

        $this->type->buildForm($builder, []);
    }

    public function testSetDefaultOptions()
    {
        $resolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolverInterface');
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with(
                [
                    'data_class'      => 'Oro\Bundle\MagentoBundle\Entity\Order',
                    'csrf_protection' => false
                ]
            );

        $this->type->setDefaultOptions($resolver);
    }

    public function testGetName()
    {
        $this->assertEquals('order_api_type', $this->type->getName());
    }
}
