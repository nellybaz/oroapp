<?php

namespace Oro\Bundle\PricingBundle\Controller;

use Oro\Bundle\PricingBundle\Async\NotificationMessages;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Form\Type\PriceListType;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PriceListController extends Controller
{
    /**
     * @Route("/view/{id}", name="oro_pricing_price_list_view", requirements={"id"="\d+"})
     * @Template
     * @Acl(
     *      id="oro_pricing_price_list_view",
     *      type="entity",
     *      class="OroPricingBundle:PriceList",
     *      permission="VIEW"
     * )
     * @param PriceList $priceList
     * @return array
     */
    public function viewAction(PriceList $priceList)
    {
        if (!$priceList->isActual()) {
            $this->get('session')->getFlashBag()->add(
                'warning',
                $this->get('translator')->trans('oro.pricing.pricelist.not_actual.recalculation')
            );
        }
        $this->renderNotificationMessages(NotificationMessages::CHANNEL_PRICE_LIST, $priceList);

        return [
            'entity' => $priceList,
            'product_price_entity_class' => $this->container->getParameter('oro_pricing.entity.product_price.class')
        ];
    }

    /**
     * @Route("/info/{id}", name="oro_pricing_price_list_info", requirements={"id"="\d+"})
     * @Template("OroPricingBundle:PriceList/widget:info.html.twig")
     * @AclAncestor("oro_pricing_price_list_view")
     * @param PriceList $priceList
     * @return array
     */
    public function infoAction(PriceList $priceList)
    {
        return [
            'entity' => $priceList
        ];
    }

    /**
     * @Route("/", name="oro_pricing_price_list_index")
     * @Template
     * @AclAncestor("oro_pricing_price_list_view")
     *
     * @return array
     */
    public function indexAction()
    {
        return [
            'entity_class' => $this->container->getParameter('oro_pricing.entity.price_list.class')
        ];
    }

    /**
     * Create price_list form
     *
     * @Route("/create", name="oro_pricing_price_list_create")
     * @Template("OroPricingBundle:PriceList:update.html.twig")
     * @Acl(
     *      id="oro_pricing_price_list_create",
     *      type="entity",
     *      class="OroPricingBundle:PriceList",
     *      permission="CREATE"
     * )
     * @return array|RedirectResponse
     */
    public function createAction()
    {
        return $this->update(new PriceList());
    }

    /**
     * Edit price_list form
     *
     * @Route("/update/{id}", name="oro_pricing_price_list_update", requirements={"id"="\d+"})
     * @Template
     * @Acl(
     *      id="oro_pricing_price_list_update",
     *      type="entity",
     *      class="OroPricingBundle:PriceList",
     *      permission="EDIT"
     * )
     * @param PriceList $priceList
     * @return array|RedirectResponse
     */
    public function updateAction(PriceList $priceList)
    {
        return $this->update($priceList);
    }

    /**
     * @param PriceList $priceList
     * @return array|RedirectResponse
     */
    protected function update(PriceList $priceList)
    {
        return $this->get('oro_form.model.update_handler')->handleUpdate(
            $priceList,
            $this->createForm(PriceListType::NAME, $priceList),
            function (PriceList $priceList) {
                return [
                    'route' => 'oro_pricing_price_list_update',
                    'parameters' => ['id' => $priceList->getId()]
                ];
            },
            function (PriceList $priceList) {
                return [
                    'route' => 'oro_pricing_price_list_view',
                    'parameters' => ['id' => $priceList->getId()]
                ];
            },
            $this->get('translator')->trans('oro.pricing.controller.price_list.saved.message')
        );
    }

    /**
     * @param string|array $channel
     * @param PriceList $priceList
     */
    protected function renderNotificationMessages($channel, PriceList $priceList)
    {
        $messenger = $this->container->get('oro_pricing.notification_message.messenger');
        $messageRenderer = $this->container->get('oro_pricing.notification_message.renderer.flash_message');
        $messages = $messenger->receive($channel, PriceList::class, $priceList->getId());
        foreach ($messages as $message) {
            $messageRenderer->render($message);
        }
    }
}
