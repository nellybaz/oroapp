<?php

namespace Oro\Bundle\PromotionBundle\Controller;

use Oro\Bundle\ProductBundle\Service\ProductCollectionDefinitionConverter;
use Oro\Bundle\PromotionBundle\Entity\Promotion;
use Oro\Bundle\PromotionBundle\Form\Type\PromotionType;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class PromotionController extends Controller
{
    /**
     * @Route("/view/{id}", name="oro_promotion_view", requirements={"id"="\d+"})
     * @Template()
     * @Acl(
     *      id="oro_promotion_view",
     *      type="entity",
     *      class="OroPromotionBundle:Promotion",
     *      permission="VIEW"
     * )
     * @param Promotion $promotion
     * @return array
     */
    public function viewAction(Promotion $promotion)
    {
        $definitionParts = $this->get('oro_product.service.product_collection_definition_converter')
            ->getDefinitionParts($promotion->getProductsSegment()->getDefinition());

        return [
            'entity' => $promotion,
            'scopeEntities' => $this->get('oro_scope.scope_manager')->getScopeEntities('promotion'),
            'segmentDefinition' => $definitionParts[ProductCollectionDefinitionConverter::DEFINITION_KEY],
            'includedProducts' => $definitionParts[ProductCollectionDefinitionConverter::INCLUDED_FILTER_KEY],
            'excludedProducts' => $definitionParts[ProductCollectionDefinitionConverter::EXCLUDED_FILTER_KEY]
        ];
    }

    /**
     * @Route("/", name="oro_promotion_index")
     * @Template()
     * @AclAncestor("oro_promotion_view")
     *
     * @return array
     */
    public function indexAction()
    {
        return [
            'entity_class' => Promotion::class,
            'gridName' => 'promotion-grid'
        ];
    }

    /**
     * @Route("/create", name="oro_promotion_create")
     * @Template("OroPromotionBundle:Promotion:update.html.twig")
     * @Acl(
     *      id="oro_promotion_create",
     *      type="entity",
     *      class="OroPromotionBundle:Promotion",
     *      permission="CREATE"
     * )
     *
     * @param Request $request
     * @return array|RedirectResponse
     */
    public function createAction(Request $request)
    {
        $promotion = new Promotion();

        return $this->update($promotion, $request);
    }

    /**
     * @Route("/update/{id}", name="oro_promotion_update", requirements={"id"="\d+"})
     * @Template()
     * @Acl(
     *      id="oro_promotion_update",
     *      type="entity",
     *      class="OroPromotionBundle:Promotion",
     *      permission="EDIT"
     * )
     *
     * @param Promotion $promotion
     * @param Request $request
     * @return array|RedirectResponse
     */
    public function updateAction(Promotion $promotion, Request $request)
    {
        return $this->update($promotion, $request);
    }

    /**
     * @param Promotion $promotion
     * @param Request $request
     * @return array|RedirectResponse
     */
    protected function update(Promotion $promotion, Request $request)
    {
        $form = $this->createForm(PromotionType::NAME, $promotion);

        $result = $this->get('oro_form.update_handler')->update(
            $promotion,
            $form,
            $this->get('translator')->trans('oro.promotion.controller.saved.message'),
            $request
        );

        return $result;
    }
}
