<?php

namespace Oro\Bundle\RFPBundle\Tests\Unit\Form\Type\Frontend;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use Oro\Bundle\FormBundle\Form\Type\OroDateType;
use Oro\Component\Testing\Unit\Form\Type\Stub\EntityType;
use Oro\Bundle\CustomerBundle\Form\Type\Frontend\CustomerUserMultiSelectType;

use Oro\Bundle\PricingBundle\Tests\Unit\Form\Type\Stub\CurrencySelectionTypeStub;

use Oro\Bundle\ProductBundle\Form\Type\ProductSelectType;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\Stub\ProductSelectTypeStub;
use Oro\Bundle\ProductBundle\Formatter\ProductUnitLabelFormatter;
use Oro\Bundle\ProductBundle\Form\Type\ProductUnitSelectionType;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\Stub\ProductUnitSelectionTypeStub;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\QuantityTypeTrait;

use Oro\Bundle\RFPBundle\Form\Type\RequestProductType;
use Oro\Bundle\RFPBundle\Form\Type\Frontend\RequestProductCollectionType;
use Oro\Bundle\RFPBundle\Form\Type\Frontend\RequestProductType as FrontendRequestProductType;
use Oro\Bundle\RFPBundle\Form\Type\Frontend\RequestType;
use Oro\Bundle\RFPBundle\Form\Type\Frontend\RequestProductItemCollectionType;
use Oro\Bundle\RFPBundle\Tests\Unit\Form\Type\AbstractTest;

class RequestTypeTest extends AbstractTest
{
    use QuantityTypeTrait;

    const DATA_CLASS = 'Oro\Bundle\RFPBundle\Entity\Request';

    /**
     * @var RequestType
     */
    protected $formType;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->formType = new RequestType();
        $this->formType->setDataClass(self::DATA_CLASS);

        parent::setUp();
    }

    /**
     * Test configureOptions
     */
    public function testConfigureOptions()
    {
        /* @var $resolver OptionsResolver|\PHPUnit_Framework_MockObject_MockObject */
        $resolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolver');

        $resolver->expects(static::once())
            ->method('setDefaults')
            ->with(
                [
                    'data_class' => self::DATA_CLASS
                ]
            );

        $this->formType->configureOptions($resolver);
    }

    /**
     * Test getName
     */
    public function testGetName()
    {
        static::assertEquals(RequestType::NAME, $this->formType->getName());
    }

    /**
     * @return array
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function submitProvider()
    {
        $requestProductItem = $this->getRequestProductItem(2, 10, 'kg', $this->createPrice(20, 'USD'));
        $requestProduct     = $this->getRequestProduct(2, 'comment', [$requestProductItem]);

        $email      = 'test@example.com';
        $date       = '2015-10-15';
        $dateObj    = new \DateTime($date . 'T00:00:00+0000');

        return [
            'valid data' => [
                'isValid'       => true,
                'submittedData' => [
                    'firstName' => 'FirstName',
                    'lastName'  => 'LastName',
                    'email'     => $email,
                    'phone'     => '+38 (044) 247-68-00',
                    'company'   => 'company',
                    'role'      => 'role',
                    'note'      => 'note',
                    'poNumber'  => 'poNumber',
                    'shipUntil' => $date,
                    'requestProducts' => [
                        [
                            'product'   => 2,
                            'comment'   => 'comment',
                            'requestProductItems' => [
                                [
                                    'quantity' => 10,
                                    'productUnit' => 'kg',
                                    'price' => ['value' => 20, 'currency' => 'USD',],
                                ],
                            ],
                        ],
                    ],
                    'assignedCustomerUsers' => [10],
                ],
                'expectedData'  => $this
                    ->getRequest(
                        'FirstName',
                        'LastName',
                        $email,
                        'note',
                        'company',
                        'role',
                        '+38 (044) 247-68-00',
                        'poNumber',
                        $dateObj
                    )
                    ->addRequestProduct($requestProduct)
                    ->addAssignedCustomerUser($this->getCustomerUser(10)),
                'defaultData'  => $this
                    ->getRequest(
                        'FirstName',
                        'LastName',
                        $email,
                        'note',
                        'company',
                        'role',
                        '+38 (044) 247-68-00',
                        'poNumber',
                        $dateObj
                    )
                    ->addRequestProduct($requestProduct),
            ],
            'empty PO number' => [
                'isValid'       => true,
                'submittedData' => [
                    'firstName' => 'FirstName',
                    'lastName'  => 'LastName',
                    'email'     => $email,
                    'phone'     => '+38 (044) 247-68-00',
                    'company'   => 'company',
                    'role'      => 'role',
                    'note'      => 'note',
                    'poNumber'  => null,
                    'shipUntil' => null,
                    'requestProducts' => [
                        [
                            'product'   => 2,
                            'comment'   => 'comment',
                            'requestProductItems' => [
                                [
                                    'quantity' => 10,
                                    'productUnit' => 'kg',
                                    'price' => ['value' => 20, 'currency' => 'USD',],
                                ],
                            ],
                        ],
                    ],
                ],
                'expectedData'  => $this
                    ->getRequest(
                        'FirstName',
                        'LastName',
                        $email,
                        'note',
                        'company',
                        'role',
                        '+38 (044) 247-68-00',
                        null,
                        null
                    )
                    ->addRequestProduct($requestProduct),
                'defaultData'  => $this
                    ->getRequest(
                        'FirstName',
                        'LastName',
                        $email,
                        'note',
                        'company',
                        'role',
                        '+38 (044) 247-68-00',
                        null,
                        null
                    )
                    ->addRequestProduct($requestProduct),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtensions()
    {
        /* @var $productUnitLabelFormatter ProductUnitLabelFormatter|\PHPUnit_Framework_MockObject_MockObject */
        $productUnitLabelFormatter = $this->getMockBuilder(
            'Oro\Bundle\ProductBundle\Formatter\ProductUnitLabelFormatter'
        )
            ->disableOriginalConstructor()
            ->getMock();

        $priceType                  = $this->preparePriceType();
        $entityType                 = $this->prepareProductSelectType();
        $currencySelectionType      = new CurrencySelectionTypeStub();
        $requestProductItemType     = $this->prepareRequestProductItemType();
        $productUnitSelectionType   = $this->prepareProductUnitSelectionType();
        $customerUserMultiSelectType = $this->prepareCustomerUserMultiSelectType();
        $requestProductType         = new RequestProductType($productUnitLabelFormatter);
        $requestProductType->setDataClass('Oro\Bundle\RFPBundle\Entity\RequestProduct');
        $frontendRequestProductType = new FrontendRequestProductType();
        $frontendRequestProductType->setDataClass('Oro\Bundle\RFPBundle\Entity\RequestProduct');

        return [
            new PreloadedExtension(
                [
                    CollectionType::NAME                    => new CollectionType(),
                    RequestProductCollectionType::NAME      => new RequestProductCollectionType(),
                    RequestProductItemCollectionType::NAME  => new RequestProductItemCollectionType(),
                    ProductUnitSelectionType::NAME          => new ProductUnitSelectionTypeStub(),
                    ProductSelectType::NAME                 => new ProductSelectTypeStub(),
                    OroDateType::NAME                       => new OroDateType(),
                    $priceType->getName()                   => $priceType,
                    $entityType->getName()                  => $entityType,
                    $requestProductType->getName()          => $requestProductType,
                    $currencySelectionType->getName()       => $currencySelectionType,
                    $requestProductItemType->getName()      => $requestProductItemType,
                    $productUnitSelectionType->getName()    => $productUnitSelectionType,
                    $customerUserMultiSelectType->getName()  => $customerUserMultiSelectType,
                    $frontendRequestProductType->getName()  => $frontendRequestProductType,
                    QuantityTypeTrait::$name                => $this->getQuantityType(),
                ],
                []
            ),
            $this->getValidatorExtension(true),
        ];
    }

    /**
     * @return EntityType
     */
    protected function prepareCustomerUserMultiSelectType()
    {
        return new EntityType(
            [
                10 => $this->getCustomerUser(10),
                11 => $this->getCustomerUser(11),
            ],
            CustomerUserMultiSelectType::NAME,
            [
                'multiple' => true
            ]
        );
    }
}
