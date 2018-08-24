<?php

namespace Oro\Bundle\OrderBundle\Tests\Unit\Datagrid;

use Doctrine\Common\Collections\ArrayCollection;
use Oro\Bundle\DataGridBundle\Extension\GridViews\View;
use Oro\Bundle\FilterBundle\Form\Type\Filter\EnumFilterType;
use Oro\Bundle\OrderBundle\Datagrid\OrdersViewList;
use Symfony\Component\Translation\TranslatorInterface;

class OrdersViewListTest extends \PHPUnit_Framework_TestCase
{
    /** @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $translator;

    /** @var OrdersViewList */
    protected $viewList;

    protected function setUp()
    {
        $this->translator = $this->createMock(TranslatorInterface::class);
        $this->translator->expects($this->any())
            ->method('trans')
            ->willReturnCallback(
                function ($key) {
                    return sprintf('*%s*', $key);
                }
            );

        $this->viewList = new OrdersViewList($this->translator);
    }

    public function testGetList()
    {
        $view = new View(
            'oro_order.open_orders',
            [
                'internalStatusName' => [
                    'type'  => EnumFilterType::TYPE_IN,
                    'value' => ['open']
                ]
            ]
        );
        $view->setLabel('*oro.order.datagrid.view.open_orders*')->setDefault(true);

        $this->assertEquals(new ArrayCollection([$view]), $this->viewList->getList());
    }
}
