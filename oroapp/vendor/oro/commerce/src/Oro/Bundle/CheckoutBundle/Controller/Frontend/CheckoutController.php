<?php

namespace Oro\Bundle\CheckoutBundle\Controller\Frontend;

use Oro\Bundle\ActionBundle\Exception\ForbiddenActionGroupException;
use Oro\Bundle\ActionBundle\Model\ActionData;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Entity\CheckoutInterface;
use Oro\Bundle\CheckoutBundle\Event\CheckoutValidateEvent;
use Oro\Bundle\CheckoutBundle\Layout\DataProvider\TransitionProvider;
use Oro\Bundle\CheckoutBundle\Model\TransitionData;
use Oro\Bundle\LayoutBundle\Annotation\Layout;
use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowItem;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowStep;
use Oro\Bundle\WorkflowBundle\Model\WorkflowManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Exception\AlreadySubmittedException;
use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckoutController extends Controller
{
    /**
     * @var WorkflowManager
     */
    protected $workflowManager;

    /**
     * Create checkout form
     *
     * @Route(
     *     "/{id}",
     *     name="oro_checkout_frontend_checkout",
     *     requirements={"id"="\d+"}
     * )
     * @Layout(vars={"workflowStepName", "workflowName"})
     * @Acl(
     *      id="oro_checkout_frontend_checkout",
     *      type="entity",
     *      class="OroCheckoutBundle:Checkout",
     *      permission="EDIT",
     *      group_name="commerce"
     * )
     *
     * @param Request $request
     * @param Checkout $checkout
     * @return array|Response
     * @throws \Exception
     */
    public function checkoutAction(Request $request, Checkout $checkout)
    {
        $workflowItem = $this->getWorkflowItem($checkout);

        if ($request->isMethod(Request::METHOD_POST) &&
            $this->isCheckoutRestartRequired($workflowItem)
        ) {
            $this->restartCheckout($workflowItem, $checkout);
            $workflowItem = $this->getWorkflowItem($checkout);
        } else {
            $this->handleTransition($workflowItem, $request);
        }

        $currentStep = $this->validateStep($workflowItem);
        if ($checkout->getId()) {
            $this->validateOrderLineItems($workflowItem, $checkout, $request);
        }

        $responseData = [];
        if ($workflowItem->getResult()->has('responseData')) {
            $responseData['responseData'] = $workflowItem->getResult()->get('responseData');
        }
        if ($workflowItem->getResult()->has('redirectUrl')) {
            if ($request->isXmlHttpRequest()) {
                $responseData['redirectUrl'] = $workflowItem->getResult()->get('redirectUrl');
            } else {
                return $this->redirect($workflowItem->getResult()->get('redirectUrl'));
            }
        }

        if ($responseData && $request->isXmlHttpRequest()) {
            return new JsonResponse($responseData);
        }

        return [
            'workflowStepName' => $currentStep->getName(),
            'workflowName' => $workflowItem->getWorkflowName(),
            'data' =>
                [
                    'checkout' => $checkout,
                    'workflowItem' => $workflowItem,
                    'workflowStep' => $currentStep
                ]
        ];
    }

    /**
     * @param WorkflowItem $workflowItem
     *
     * @return WorkflowStep
     */
    protected function validateStep(WorkflowItem $workflowItem)
    {
        $workflowManager = $this->getWorkflowManager();
        $verifyTransition = null;
        $transitions = $workflowManager->getTransitionsByWorkflowItem($workflowItem);
        foreach ($transitions as $transition) {
            $frontendOptions = $transition->getFrontendOptions();
            if (!empty($frontendOptions['is_checkout_verify'])) {
                $verifyTransition = $transition;
                break;
            }
        }

        if ($verifyTransition) {
            $workflowManager->transitIfAllowed($workflowItem, $verifyTransition);
        }

        return $workflowItem->getCurrentStep();
    }

    /**
     * @param WorkflowItem $workflowItem
     * @param CheckoutInterface $checkout
     * @param Request $request
     */
    protected function validateOrderLineItems(WorkflowItem $workflowItem, CheckoutInterface $checkout, Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            return;
        }

        $continueTransition = $this->get('oro_checkout.layout.data_provider.transition')
            ->getContinueTransition($workflowItem);
        if (!$continueTransition) {
            return;
        }

        $frontendOptions = $continueTransition->getTransition()->getFrontendOptions();
        if (!array_key_exists('is_checkout_show_errors', $frontendOptions)) {
            return;
        }

        $this->addTransitionErrors($continueTransition);

        $errors = $continueTransition->getErrors();
        if (!$errors->isEmpty()) {
            return;
        }

        $manager = $this->get('oro_checkout.data_provider.manager.checkout_line_items');
        $orderLineItemsCount = $manager->getData($checkout, true)->count();

        if ($manager->getLineItemsWithoutQuantity($checkout)->count()) {
            $this->get('session')->getFlashBag()->add(
                'warning',
                'oro.checkout.order.line_items.line_item_has_no_price_not_allow_rfp.message'
            );

            return;
        }

        if ($orderLineItemsCount && $orderLineItemsCount !== $manager->getData($checkout)->count()) {
            $orderLineItemsRfp = $manager->getData($checkout, true, 'oro_rfp.frontend_product_visibility');
            $message = $orderLineItemsRfp->isEmpty()
                ? 'oro.checkout.order.line_items.line_item_has_no_price_not_allow_rfp.message'
                : 'oro.checkout.order.line_items.line_item_has_no_price_allow_rfp.message';
            $this->get('session')->getFlashBag()->add('warning', $message);
        }
    }

    /**
     * @param TransitionData $continueTransition
     */
    protected function addTransitionErrors(TransitionData $continueTransition)
    {
        $translator = $this->get('translator');

        $errors = $continueTransition->getErrors();
        foreach ($errors as $error) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $translator->trans($error['message'], $error['parameters'])
            );
        }
    }

    /**
     * @param WorkflowItem $workflowItem
     * @param Request $request
     */
    protected function handleGetTransition(WorkflowItem $workflowItem, Request $request)
    {
        if ($request->query->has('transition')) {
            $transition = $request->get('transition');
            $this->getWorkflowManager()->transitIfAllowed($workflowItem, $transition);
        }
    }

    /**
     * @param WorkflowItem $workflowItem
     * @param Request $request
     * @throws ForbiddenActionGroupException
     * @throws \Exception
     * @throws AlreadySubmittedException
     */
    protected function handlePostTransition(WorkflowItem $workflowItem, Request $request)
    {
        /* @var $transitionProvider TransitionProvider */
        $transitionProvider = $this->get('oro_checkout.layout.data_provider.transition');

        $continueTransition = $transitionProvider->getContinueTransition($workflowItem, $request->get('transition'));
        if (!$continueTransition) {
            return;
        }

        $this->addTransitionErrors($continueTransition);

        $transitionForm = $this->getTransitionForm($continueTransition, $workflowItem);
        if (!$transitionForm) {
            $this->getWorkflowManager()->transitIfAllowed(
                $workflowItem,
                $continueTransition->getTransition()
            );
            return;
        }

        $transitionForm->submit($request);
        if (!$transitionForm->isValid()) {
            $this->handleFormErrors($transitionForm->getErrors());
            return;
        }

        $this->getWorkflowManager()->transitIfAllowed(
            $workflowItem,
            $continueTransition->getTransition()
        );

        $transitionProvider->clearCache();
    }

    /**
     * @param WorkflowItem $workflowItem
     * @param Request $request
     * @throws ForbiddenActionGroupException
     * @throws \Exception
     * @throws AlreadySubmittedException
     */
    protected function handleTransition(WorkflowItem $workflowItem, Request $request)
    {
        if ($request->isMethod(Request::METHOD_GET)) {
            $this->handleGetTransition($workflowItem, $request);
        } elseif ($request->isMethod(Request::METHOD_POST)) {
            $this->handlePostTransition($workflowItem, $request);
        }
    }

    /**
     * @return WorkflowManager
     */
    protected function getWorkflowManager()
    {
        if (!$this->workflowManager) {
            $this->workflowManager = $this->get('oro_workflow.manager');
        }

        return $this->workflowManager;
    }

    /**
     * @param TransitionData $transitionData
     * @param WorkflowItem $workflowItem
     * @return FormInterface
     */
    protected function getTransitionForm(TransitionData $transitionData, WorkflowItem $workflowItem)
    {
        return $this->get('oro_checkout.layout.data_provider.transition_form')
            ->getTransitionForm($workflowItem, $transitionData);
    }

    /**
     * @param CheckoutInterface $checkout
     * @return WorkflowItem
     */
    protected function getWorkflowItem(CheckoutInterface $checkout)
    {
        $items = $this->getWorkflowManager()->getWorkflowItemsByEntity($checkout);

        if (count($items) !== 1) {
            throw $this->createNotFoundException('Unable to find correct WorkflowItem for current checkout');
        }

        return reset($items);
    }

    /**
     * @param FormErrorIterator $errors
     */
    protected function handleFormErrors(FormErrorIterator $errors)
    {
        $this->get('oro_checkout.workflow_state.handler.checkout_error')->addFlashWorkflowStateWarning($errors);
    }

    /**
     * @param WorkflowItem $workflowItem
     * @return bool
     */
    protected function isCheckoutRestartRequired(WorkflowItem $workflowItem)
    {
        $event = new CheckoutValidateEvent($workflowItem);
        $dispatcher = $this->get('event_dispatcher');
        if (false == $dispatcher->hasListeners(CheckoutValidateEvent::NAME)) {
            return false;
        }

        $dispatcher->dispatch(CheckoutValidateEvent::NAME, $event);

        return $event->isCheckoutRestartRequired();
    }

    /**
     * @param WorkflowItem $workflowItem
     * @param CheckoutInterface $checkout
     * @throws ForbiddenActionGroupException
     * @throws \Exception
     */
    protected function restartCheckout(WorkflowItem $workflowItem, CheckoutInterface $checkout)
    {
        $workflowName = $workflowItem->getWorkflowName();

        $shoppingList = $workflowItem->getEntity()->getSource()->getShoppingList();
        $this->getWorkflowManager()->resetWorkflowItem($workflowItem);
        $this->getWorkflowManager()->startWorkflow($workflowName, $checkout);

        $actionData = new ActionData(['shoppingList' => $shoppingList, 'forceStartCheckout' => true]);
        $this->get('oro_action.action_group_registry')
            ->findByName('start_shoppinglist_checkout')
            ->execute($actionData);
    }
}
