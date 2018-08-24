<?php

namespace Oro\Bundle\CatalogBundle\Form\Handler;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;

use Oro\Bundle\FormBundle\Event\FormHandler\AfterFormProcessEvent;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\ProductBundle\Entity\Product;

class CategoryHandler
{
    /** @var FormInterface */
    protected $form;

    /** @var Request */
    protected $request;

    /** @var EntityManager */
    protected $manager;

    /** @var  EventDispatcherInterface */
    protected $eventDispatcher;

    /**
     * @param FormInterface $form
     * @param Request $request
     * @param ObjectManager $manager
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(
        FormInterface $form,
        Request $request,
        ObjectManager $manager,
        EventDispatcherInterface $eventDispatcher
    ) {
        $this->form = $form;
        $this->request = $request;
        $this->manager = $manager;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param Category $category
     *
     * @return bool True on successful processing, false otherwise
     */
    public function process(Category $category)
    {
        $this->form->setData($category);

        if (in_array($this->request->getMethod(), ['POST', 'PUT'])) {
            $this->form->submit($this->request);
            if ($this->form->isValid()) {
                $appendProducts = $this->form->get('appendProducts')->getData();
                $removeProducts = $this->form->get('removeProducts')->getData();
                $this->onSuccess($category, $appendProducts, $removeProducts);

                $this->eventDispatcher->dispatch(
                    'oro_catalog.category.edit',
                    new AfterFormProcessEvent($this->form, $category)
                );

                return true;
            }
        }

        return false;
    }

    /**
     * @param Category $category
     * @param Product[] $appendProducts
     * @param Product[] $removeProducts
     */
    protected function onSuccess(Category $category, array $appendProducts, array $removeProducts)
    {
        $this->appendProducts($category, $appendProducts);
        $this->removeProducts($category, $removeProducts);

        if ($category->getDefaultProductOptions()) {
            $category->getDefaultProductOptions()->updateUnitPrecision();
        }
        $category->preUpdate();
        $this->manager->persist($category);
        $this->manager->flush();
    }

    /**
     * @param Category $category
     * @param Product[] $products
     */
    protected function appendProducts(Category $category, array $products)
    {
        $categoryRepository = $this->manager->getRepository('OroCatalogBundle:Category');
        /** @var $product Product */
        foreach ($products as $product) {
            $productCategory = $categoryRepository->findOneByProduct($product);

            if ($productCategory instanceof Category) {
                $productCategory->removeProduct($product);
            }

            $category->addProduct($product);

            if ($productCategory instanceof Category) {
                $categoriesToUpdate = [$productCategory];
                if ($category->getId() !== null) {
                    $categoriesToUpdate[] = $category;
                }
                // both categories must be updated in the same flush
                //EDIT: we will flush $category only if it is an existing one, not a category that is now added
                $this->manager->flush($categoriesToUpdate);
            }
        }
    }

    /**
     * @param Category $category
     * @param Product[] $products
     */
    protected function removeProducts(Category $category, array $products)
    {
        /** @var $product Product */
        foreach ($products as $product) {
            $category->removeProduct($product);
        }
    }
}
