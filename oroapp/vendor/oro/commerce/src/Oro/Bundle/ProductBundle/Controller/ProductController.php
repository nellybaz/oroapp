<?php

namespace Oro\Bundle\ProductBundle\Controller;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Event\ProductGridWidgetRenderEvent;
use Oro\Bundle\ProductBundle\Form\Handler\ProductCreateStepOneHandler;
use Oro\Bundle\ProductBundle\Form\Type\ProductStepOneType;
use Oro\Bundle\ProductBundle\Form\Type\ProductType;
use Oro\Bundle\RedirectBundle\DependencyInjection\Configuration;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * @Route("/view/{id}", name="oro_product_view", requirements={"id"="\d+"})
     * @Template
     * @Acl(
     *      id="oro_product_view",
     *      type="entity",
     *      class="OroProductBundle:Product",
     *      permission="VIEW"
     * )
     *
     * @param Product $product
     * @return array
     */
    public function viewAction(Product $product)
    {
        $pageTemplate = $this->get('oro_product.provider.page_template_provider')
            ->getPageTemplate($product, 'oro_product_frontend_product_view');

        return [
            'entity' => $product,
            'imageTypes' => $this->get('oro_layout.provider.image_type')->getImageTypes(),
            'pageTemplate' => $pageTemplate,
            'upsellProductsEnabled' => $this->get('oro_product.related_item.upsell_product.config_provider')
                ->isEnabled(),
            'relatedProductsEnabled' => $this->get('oro_product.related_item.related_product.config_provider')
                ->isEnabled(),
        ];
    }

    /**
     * @Route("/info/{id}", name="oro_product_info", requirements={"id"="\d+"})
     * @Template
     * @AclAncestor("oro_product_view")
     *
     * @param Product $product
     * @return array
     */
    public function infoAction(Product $product)
    {
        return [
            'product' => $product,
            'imageTypes' => $this->get('oro_layout.provider.image_type')->getImageTypes()
        ];
    }

    /**
     * @Route("/", name="oro_product_index")
     * @Template
     * @AclAncestor("oro_product_view")
     *
     * @return array
     */
    public function indexAction()
    {
        $widgetRouteParameters = [
            'gridName' => 'products-grid',
            'renderParams' => [
                'enableFullScreenLayout' => 1,
                'enableViews' => 0
            ],
            'renderParamsTypes' => [
                'enableFullScreenLayout' => 'int',
                'enableViews' => 'int'
            ]
        ];

        /** @var ProductGridWidgetRenderEvent $event */
        $event = $this->get('event_dispatcher')->dispatch(
            ProductGridWidgetRenderEvent::NAME,
            new ProductGridWidgetRenderEvent($widgetRouteParameters)
        );

        return [
            'entity_class' => $this->container->getParameter('oro_product.entity.product.class'),
            'widgetRouteParameters' => $event->getWidgetRouteParameters()
        ];
    }

    /**
     * Create product form
     *
     * @Route("/create", name="oro_product_create")
     * @Template("OroProductBundle:Product:createStepOne.html.twig")
     * @Acl(
     *      id="oro_product_create",
     *      type="entity",
     *      class="OroProductBundle:Product",
     *      permission="CREATE"
     * )
     * @param Request $request
     * @return array|RedirectResponse
     */
    public function createAction(Request $request)
    {
        return $this->createStepOne($request);
    }

    /**
     * Create product form step two
     *
     * @Route("/create/step-two", name="oro_product_create_step_two")
     *
     * @Template("OroProductBundle:Product:createStepTwo.html.twig")
     *
     * @AclAncestor("oro_product_create")
     *
     * @param Request $request
     * @return array|RedirectResponse
     */
    public function createStepTwoAction(Request $request)
    {
        return $this->createStepTwo($request, new Product());
    }

    /**
     * Edit product form
     *
     * @Route("/update/{id}", name="oro_product_update", requirements={"id"="\d+"})
     * @Template
     * @Acl(
     *      id="oro_product_update",
     *      type="entity",
     *      class="OroProductBundle:Product",
     *      permission="EDIT"
     * )
     * @param Product $product
     * @return array|RedirectResponse
     */
    public function updateAction(Product $product)
    {
        return $this->update($product);
    }

    /**
     * Quick edit product form
     *
     * @Route("/related-items-update/{id}", name="oro_product_related_items_update", requirements={"id"="\d+"})
     * @Template
     * @AclAncestor("oro_product_update")
     * @param Product $product
     *
     * @return array|RedirectResponse
     */
    public function updateRelatedItemsAction(Product $product)
    {
        if (!$this->relatedItemsIsGranted()) {
            throw $this->createAccessDeniedException();
        }

        if (!$this->get('oro_product.related_item.helper.config_helper')->isAnyEnabled()) {
            throw $this->createNotFoundException();
        }

        return $this->update($product, 'oro_product_related_items_update');
    }

    /**
     * @param Product $product
     * @return array|RedirectResponse
     */
    protected function update(Product $product, $routeName = 'oro_product_update')
    {
        return $this->get('oro_product.service.product_update_handler')->handleUpdate(
            $product,
            $this->createForm(ProductType::NAME, $product),
            function (Product $product) use ($routeName) {
                return [
                    'route' => $routeName,
                    'parameters' => ['id' => $product->getId()]
                ];
            },
            function (Product $product) {
                return [
                    'route' => 'oro_product_view',
                    'parameters' => ['id' => $product->getId()]
                ];
            },
            $this->get('translator')->trans('oro.product.controller.product.saved.message')
        );
    }

    /**
     * @param Request $request
     * @return array|Response
     */
    protected function createStepOne(Request $request)
    {
        $form = $this->createForm(ProductStepOneType::NAME);
        $handler = new ProductCreateStepOneHandler($form, $request);

        if ($handler->process()) {
            return $this->forward('OroProductBundle:Product:createStepTwo');
        }

        return [
            'form' => $form->createView(),
            'isWidgetContext' => (bool)$request->get('_wid', false)
        ];
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return array|RedirectResponse
     */
    protected function createStepTwo(Request $request, Product $product)
    {
        if ($request->get('input_action') === 'oro_product_create') {
            $form = $this->createForm(ProductStepOneType::NAME, $product);
            $form->handleRequest($request);
            $formData = $form->all();

            if (!empty($formData)) {
                $form = $this->createForm(ProductType::NAME, $product);
                foreach ($formData as $key => $item) {
                    $data = $item->getData();
                    $form->get($key)->setData($data);
                }
            }

            return [
                'form' => $form->createView(),
                'entity' => $product,
                'isWidgetContext' => (bool)$request->get('_wid', false)
            ];
        }

        $form = $this->createForm(ProductStepOneType::NAME, $product, ['validation_groups'=> false]);
        $form->submit($request->request->get(ProductType::NAME));

        return $this->update($product);
    }

    /**
     * @Route("/get-changed-urls/{id}", name="oro_product_get_changed_slugs", requirements={"id"="\d+"})
     *
     * @AclAncestor("oro_product_update")
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function getChangedSlugsAction(Product $product)
    {
        return new JsonResponse($this->get('oro_redirect.helper.changed_slugs_helper')
            ->getChangedSlugsData($product, ProductType::class));
    }

    /**
     * @Route("/get-changed-default-url/{id}", name="oro_product_get_changed_default_slug", requirements={"id"="\d+"})
     *
     * @AclAncestor("oro_product_update")
     *
     * @param Request $request
     * @param Product $product
     * @return JsonResponse
     */
    public function getChangedDefaultSlugAction(Request $request, Product $product)
    {
        $newName = $request->get('productName');

        $configManager = $this->get('oro_config.manager');
        $showRedirectConfirmation =
            $configManager->get('oro_redirect.redirect_generation_strategy') === Configuration::STRATEGY_ASK;

        $slugsData = [];
        if ($newName !== null) {
            $newSlug = $this->get('oro_entity_config.slug.generator')->slugify($newName);
            $slugsData = $this->get('oro_redirect.helper.changed_slugs_helper')
                ->getChangedDefaultSlugData($product, $newSlug);
        }

        return new JsonResponse([
            'showRedirectConfirmation' => $showRedirectConfirmation,
            'slugsData' => $slugsData,
        ]);
    }

    /**
     * @Route(
     *     "/get-possible-products-for-related-products/{id}",
     *     name="oro_product_possible_products_for_related_products",
     *     requirements={"id"="\d+"}
     * )
     * @Template(template="OroProductBundle:Product:selectRelatedProducts.html.twig")
     *
     * @param Product $product
     * @return array
     */
    public function getPossibleProductsForRelatedProductsAction(Product $product)
    {
        return ['product' => $product];
    }

    /**
     * @Route(
     *     "/get-possible-products-for-upsell-products/{id}",
     *     name="oro_product_possible_products_for_upsell_products",
     *     requirements={"id"="\d+"}
     * )
     * @Template(template="OroProductBundle:Product:selectUpsellProducts.html.twig")
     *
     * @param Product $product
     * @return array
     */
    public function getPossibleProductsForUpsellProductsAction(Product $product)
    {
        return ['product' => $product];
    }

    /**
     * @Route("/add-products-widget/{gridName}", name="oro_add_products_widget")
     * @AclAncestor("oro_product_view")
     * @Template
     */
    public function addProductsWidgetAction(Request $request, $gridName)
    {
        $hiddenProducts = $request->get('hiddenProducts');

        return [
            'parameters' => $hiddenProducts ? ['hiddenProducts' => $hiddenProducts] : [],
            'gridName' => $gridName,
        ];
    }

    /**
     * Checks if at least one "Related Items" functionality is available for the user
     *
     * @return bool
     */
    private function relatedItemsIsGranted()
    {
        return $this->isGranted('oro_related_products_edit')
            || $this->isGranted('oro_upsell_products_edit');
    }
}
