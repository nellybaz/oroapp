<?php

namespace Oro\Bundle\OrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Form\Type\OrderType;
use Oro\Bundle\OrderBundle\Event\OrderEvent;

class AjaxOrderController extends Controller
{
    /**
     * @Route("/entry-point/{id}", name="oro_order_entry_point", defaults={"id" = 0})
     * @AclAncestor("oro_order_update")
     *
     * @param Request $request
     * @param Order|null $order
     * @return JsonResponse
     */
    public function entryPointAction(Request $request, Order $order = null)
    {
        if (!$order) {
            $order = new Order();
            $order->setWebsite($this->get('oro_website.manager')->getDefaultWebsite());
        }

        $form = $this->getType($order);

        $submittedData = $request->get($form->getName());

        $form->submit($submittedData);

        $event = new OrderEvent($form, $form->getData(), $submittedData);
        $this->get('event_dispatcher')->dispatch(OrderEvent::NAME, $event);

        return new JsonResponse($event->getData());
    }

    /**
     * @param Order $order
     * @return Form
     */
    protected function getType(Order $order)
    {
        return $this->createForm(OrderType::NAME, $order);
    }
}
