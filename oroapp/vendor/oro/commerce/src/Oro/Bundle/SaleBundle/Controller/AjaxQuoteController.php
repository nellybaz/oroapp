<?php

namespace Oro\Bundle\SaleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\AddressBundle\Entity\AddressType;
use Oro\Bundle\SaleBundle\Form\Type\QuoteType;
use Oro\Bundle\PaymentTermBundle\Provider\PaymentTermProvider;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerGroup;
use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\SaleBundle\Entity\Quote;
use Oro\Bundle\SaleBundle\Model\QuoteRequestHandler;
use Oro\Bundle\SaleBundle\Event\QuoteEvent;

class AjaxQuoteController extends Controller
{
    /**
     * Get order related data
     *
     * @Route("/related-data", name="oro_quote_related_data")
     * @Method({"GET"})
     * @AclAncestor("oro_quote_update")
     *
     * @return JsonResponse
     */
    public function getRelatedDataAction()
    {
        $quote = new Quote();
        $customerUser = $this->getQuoteRequestHandler()->getCustomerUser();
        $customer = $this->getCustomer($customerUser);

        $quote->setCustomer($customer);
        $quote->setCustomerUser($customerUser);

        $customerPaymentTerm = null;
        $customerGroupPaymentTerm = null;

        if ($customer instanceof Customer) {
            $customerPaymentTerm = $this->getPaymentTermProvider()->getCustomerPaymentTerm($customer);

            if ($customer->getGroup() instanceof CustomerGroup) {
                $customerGroupPaymentTerm = $this->getPaymentTermProvider()
                                                 ->getCustomerGroupPaymentTerm($customer->getGroup());
            }
        }

        $orderForm = $this->createForm($this->getQuoteFormTypeName(), $quote);

        return new JsonResponse(
            [
                'shippingAddress' => $this->renderForm(
                    $orderForm->get(AddressType::TYPE_SHIPPING . 'Address')->createView()
                ),
                'customerPaymentTerm' => $customerPaymentTerm ? $customerPaymentTerm->getId() : null,
                'customerGroupPaymentTerm' => $customerGroupPaymentTerm ? $customerGroupPaymentTerm->getId() : null,
            ]
        );
    }

    /**
     * @Route("/entry-point/{id}", name="oro_quote_entry_point", defaults={"id" = 0})
     * @AclAncestor("oro_order_update")
     *
     * @param Request    $request
     * @param Quote|null $quote
     *
     * @return JsonResponse
     */
    public function entryPointAction(Request $request, Quote $quote = null)
    {
        if (!$quote) {
            $quote = new Quote();
        }

        $form = $this->createForm($this->getQuoteFormTypeName(), $quote);

        $submittedData = $request->get($form->getName());

        $form->submit($submittedData);

        $event = new QuoteEvent($form, $form->getData(), $submittedData);
        $this->get('event_dispatcher')->dispatch(QuoteEvent::NAME, $event);

        return new JsonResponse($event->getData());
    }

    /**
     * @param FormView $formView
     *
     * @return string
     */
    protected function renderForm(FormView $formView)
    {
        return $this->renderView('OroSaleBundle:Form:customerAddressSelector.html.twig', ['form' => $formView]);
    }

    /**
     * @param CustomerUser $customerUser
     * @return null|Customer
     */
    protected function getCustomer(CustomerUser $customerUser = null)
    {
        $customer = $this->getQuoteRequestHandler()->getCustomer();
        if (!$customer && $customerUser) {
            $customer = $customerUser->getCustomer();
        }
        if ($customer && $customerUser) {
            $this->validateRelation($customerUser, $customer);
        }

        return $customer;
    }

    /**
     * @param CustomerUser $customerUser
     * @param Customer $customer
     *
     * @throws BadRequestHttpException
     */
    protected function validateRelation(CustomerUser $customerUser, Customer $customer)
    {
        if ($customerUser &&
            $customerUser->getCustomer() &&
            $customerUser->getCustomer()->getId() !== $customer->getId()
        ) {
            throw new BadRequestHttpException('CustomerUser must belong to Customer');
        }
    }

    /**
     * @return PaymentTermProvider
     */
    protected function getPaymentTermProvider()
    {
        return $this->get('oro_payment_term.provider.payment_term');
    }

    /**
     * {@inheritdoc}
     */
    protected function getQuoteFormTypeName()
    {
        return QuoteType::NAME;
    }

    /**
     * @return QuoteRequestHandler
     */
    protected function getQuoteRequestHandler()
    {
        return $this->get('oro_sale.service.quote_request_handler');
    }
}
