<?php

namespace Oro\Bundle\PaymentBundle\Controller\Frontend;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Oro\Bundle\PaymentBundle\Entity\PaymentTransaction;
use Oro\Bundle\PaymentBundle\Event\CallbackErrorEvent;
use Oro\Bundle\PaymentBundle\Event\CallbackReturnEvent;
use Oro\Bundle\PaymentBundle\Event\CallbackNotifyEvent;

class CallbackController extends Controller
{
    /**
     * @Route(
     *     "/return/{accessIdentifier}",
     *     name="oro_payment_callback_return",
     *     requirements={"accessIdentifier"="[a-zA-Z0-9\-]+"}
     * )
     * @ParamConverter("paymentTransaction", options={"accessIdentifier" = "accessIdentifier"})
     * @Method({"GET", "POST"})
     * @param PaymentTransaction $paymentTransaction
     * @param Request $request
     * @return Response
     */
    public function callbackReturnAction(PaymentTransaction $paymentTransaction, Request $request)
    {
        $event = new CallbackReturnEvent($request->request->all() + $request->query->all());
        $event->setPaymentTransaction($paymentTransaction);

        return $this->get('oro_payment.event.callback_handler')->handle($event);
    }

    /**
     * @Route(
     *     "/error/{accessIdentifier}",
     *     name="oro_payment_callback_error",
     *     requirements={"accessIdentifier"="[a-zA-Z0-9\-]+"}
     * )
     * @ParamConverter("paymentTransaction", options={"accessIdentifier" = "accessIdentifier"})
     * @Method({"GET", "POST"})
     * @param PaymentTransaction $paymentTransaction
     * @param Request $request
     * @return Response
     */
    public function callbackErrorAction(PaymentTransaction $paymentTransaction, Request $request)
    {
        $event = new CallbackErrorEvent($request->request->all() + $request->query->all());
        $event->setPaymentTransaction($paymentTransaction);

        return $this->get('oro_payment.event.callback_handler')->handle($event);
    }

    /**
     * @Route(
     *     "/notify/{accessIdentifier}/{accessToken}",
     *     name="oro_payment_callback_notify",
     *     requirements={"accessIdentifier"="[a-zA-Z0-9\-]+", "accessToken"="[a-zA-Z0-9\-]+"}
     * )
     * @ParamConverter(
     *     "paymentTransaction",
     *     options={"accessIdentifier" = "accessIdentifier", "accessToken" = "accessToken"}
     * )
     * @Method("POST")
     * @param Request $request
     * @param PaymentTransaction $paymentTransaction
     * @return Response
     */
    public function callbackNotifyAction(PaymentTransaction $paymentTransaction, Request $request)
    {
        $event = new CallbackNotifyEvent($request->request->all());
        $event->setPaymentTransaction($paymentTransaction);

        return $this->get('oro_payment.event.callback_handler')->handle($event);
    }
}
