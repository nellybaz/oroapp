<?php

namespace Oro\Bundle\ShoppingListBundle\Tests\Unit\Layout\DataProvider;

use Symfony\Bridge\Twig\Form\TwigRenderer;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\ShoppingListBundle\Form\Type\MatrixCollectionType;
use Oro\Bundle\ShoppingListBundle\Layout\DataProvider\MatrixGridOrderFormProvider;
use Oro\Bundle\ShoppingListBundle\Manager\MatrixGridOrderManager;
use Oro\Bundle\ShoppingListBundle\Model\MatrixCollection;
use Oro\Component\Testing\Unit\EntityTrait;

class MatrixGridOrderFormProviderTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /** @var FormFactoryInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $formFactory;

    /** @var UrlGeneratorInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $router;

    /** @var MatrixGridOrderManager|\PHPUnit_Framework_MockObject_MockObject */
    private $matrixOrderManager;

    /** @var MatrixGridOrderFormProvider */
    private $provider;

    protected function setUp()
    {
        $this->formFactory = $this->createMock(FormFactoryInterface::class);
        $this->router = $this->createMock(UrlGeneratorInterface::class);
        $this->matrixOrderManager = $this->createMock(MatrixGridOrderManager::class);

        $this->provider = new MatrixGridOrderFormProvider($this->formFactory, $this->router);
        $this->provider->setMatrixOrderManager($this->matrixOrderManager);
    }

    /**
     * @param ShoppingList|null $shoppingList
     *
     * @dataProvider getLineItemsDataProvider
     */
    public function testGetMatrixOrderForm(ShoppingList $shoppingList = null)
    {
        /** @var Product $product **/
        $product = $this->getEntity(Product::class);

        $collection = new MatrixCollection();

        $form = $this->createMock(FormInterface::class);

        $this->matrixOrderManager->expects($this->once())
            ->method('getMatrixCollection')
            ->with($product, $shoppingList)
            ->willReturn($collection);

        $this->formFactory->expects($this->once())
            ->method('create')
            ->with(MatrixCollectionType::class, $collection, [])
            ->willReturn($form);

        $this->assertSame($form, $this->provider->getMatrixOrderForm($product, $shoppingList));
    }

    /**
     * @param ShoppingList|null $shoppingList
     *
     * @dataProvider getLineItemsDataProvider
     */
    public function testGetMatrixOrderFormView(ShoppingList $shoppingList = null)
    {
        /** @var Product $product1 **/
        $product1 = $this->getEntity(Product::class, ['id' => 1]);

        /** @var Product $product1 **/
        $product2 = $this->getEntity(Product::class, ['id' => 2]);

        $collection1 = new MatrixCollection();
        $collection1->rows = [
            'row1',
        ];

        $collection2 = new MatrixCollection();
        $collection2->rows = [
            'row1',
            'row2',
        ];

        $form1 = $this->createMock(FormInterface::class);
        $formView1 = $this->createMock(FormView::class);

        $form2 = $this->createMock(FormInterface::class);
        $formView2 = $this->createMock(FormView::class);

        $this->matrixOrderManager->expects($this->exactly(2))
            ->method('getMatrixCollection')
            ->withConsecutive(
                [$product1, $shoppingList],
                [$product2, $shoppingList]
            )
            ->willReturnOnConsecutiveCalls(
                $collection1,
                $collection2
            );

        $this->formFactory->expects($this->exactly(2))
            ->method('create')
            ->withConsecutive(
                [MatrixCollectionType::class, $collection1, []],
                [MatrixCollectionType::class, $collection2, []]
            )
            ->willReturnOnConsecutiveCalls(
                $form1,
                $form2
            );

        $form1->expects($this->once())
            ->method('createView')
            ->willReturn($formView1);

        $form2->expects($this->once())
            ->method('createView')
            ->willReturn($formView2);

        $actualFormView1 = $this->provider->getMatrixOrderFormView($product1, $shoppingList);
        $actualFormView2 = $this->provider->getMatrixOrderFormView($product2, $shoppingList);
        // Assert that different collections don't return the same cached form view
        $this->assertNotSame($actualFormView1, $actualFormView2);
        $this->assertSame($formView1, $actualFormView1);
        $this->assertSame($formView2, $actualFormView2);
    }

    /**
     * @param ShoppingList|null $shoppingList
     *
     * @dataProvider getLineItemsDataProvider
     */
    public function testGetMatrixOrderFormHtml(ShoppingList $shoppingList = null)
    {
        $collection = new MatrixCollection();

        /** @var Product $product **/
        $product = $this->getEntity(Product::class);

        $this->matrixOrderManager->expects($this->once())
            ->method('getMatrixCollection')
            ->with($product, $shoppingList)
            ->willReturn($collection);

        $form = $this->createMock(FormInterface::class);
        $formView = $this->createMock(FormView::class);

        $this->formFactory->expects($this->once())
            ->method('create')
            ->with(MatrixCollectionType::class, $collection, [])
            ->willReturn($form);

        $form->expects($this->once())
            ->method('createView')
            ->willReturn($formView);

        $twigRenderer = $this->createMock(TwigRenderer::class);
        $this->provider->setTwigRenderer($twigRenderer);

        $twigRenderer->expects($this->once())
            ->method('searchAndRenderBlock')
            ->with($formView, 'widget');

        $this->provider->getMatrixOrderFormHtml($product, $shoppingList);
    }

    /**
     * @return array
     */
    public function getLineItemsDataProvider()
    {
        return [
            'without shopping list' => [
                null
            ],
            'with shopping list' => [
                $this->getEntity(ShoppingList::class)
            ]
        ];
    }
}
