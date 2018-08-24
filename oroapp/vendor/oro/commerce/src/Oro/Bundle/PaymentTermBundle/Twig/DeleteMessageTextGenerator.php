<?php

namespace Oro\Bundle\PaymentTermBundle\Twig;

use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerGroup;
use Oro\Bundle\FilterBundle\Grid\Extension\OrmFilterExtension;
use Oro\Bundle\PaymentTermBundle\Entity\PaymentTerm;
use Oro\Bundle\PaymentTermBundle\Manager\PaymentTermManager;

use Symfony\Component\Routing\RouterInterface;

class DeleteMessageTextGenerator
{
    const ACCOUNT_GROUP_GRID_NAME = 'customer-groups-grid';
    const ACCOUNT_GRID_NAME = 'customer-customers-grid';
    const ACCOUNT_GROUP_GRID_ROUTE = 'oro_customer_customer_group_index';
    const ACCOUNT_GRID_ROUTE = 'oro_customer_customer_index';

    /** @var RouterInterface */
    protected $router;

    /** @var \Twig_Environment */
    protected $twig;

    /** @var PaymentTermManager */
    private $paymentTermManager;

    /**
     * @param RouterInterface $router
     * @param \Twig_Environment $twig
     * @param PaymentTermManager $paymentTermManager
     */
    public function __construct(
        RouterInterface $router,
        \Twig_Environment $twig,
        PaymentTermManager $paymentTermManager
    ) {
        $this->router = $router;
        $this->twig = $twig;
        $this->paymentTermManager = $paymentTermManager;
    }

    /**
     * @param PaymentTerm $paymentTerm
     * @return string
     */
    public function getDeleteMessageText(PaymentTerm $paymentTerm)
    {
        $customerGroupFilterUrlHtml = $this->generateCustomerGroupFilterUrl($paymentTerm);
        $customerFilterUrlHtml = $this->generateCustomerFilterUrl($paymentTerm);

        $message = $this->twig->render(
            '@OroPaymentTerm/PaymentTerm/deleteMessage.html.twig',
            [
                'customerFilterUrl' => $customerFilterUrlHtml,
                'customerGroupFilterUrl' => $customerGroupFilterUrlHtml,
            ]
        );

        return $message;
    }

    /**
     * @param int $paymentTermId
     * @return string
     */
    public function getDeleteMessageTextForDataGrid($paymentTermId)
    {
        $paymentTerm = $this->paymentTermManager->getReference($paymentTermId);
        if (!$paymentTerm) {
            throw new \InvalidArgumentException(sprintf('PaymentTerm #%s not found', $paymentTermId));
        }

        return $this->getDeleteMessageText($paymentTerm);
    }

    /**
     * @param PaymentTerm $paymentTerm
     * @return string
     */
    protected function generateCustomerGroupFilterUrl(PaymentTerm $paymentTerm)
    {
        if (!$this->paymentTermManager->hasAssignedPaymentTerm(CustomerGroup::class, $paymentTerm)) {
            return null;
        }

        return $this->generateHtmFilterUrl(
            $paymentTerm->getId(),
            static::ACCOUNT_GROUP_GRID_NAME,
            static::ACCOUNT_GROUP_GRID_ROUTE,
            'oro.customer.customergroup.entity_label'
        );
    }

    /**
     * @param PaymentTerm $paymentTerm
     * @return string
     */
    protected function generateCustomerFilterUrl(PaymentTerm $paymentTerm)
    {
        if (!$this->paymentTermManager->hasAssignedPaymentTerm(Customer::class, $paymentTerm)) {
            return null;
        }

        return $this->generateHtmFilterUrl(
            $paymentTerm->getId(),
            static::ACCOUNT_GRID_NAME,
            static::ACCOUNT_GRID_ROUTE,
            'oro.customer.customer.entity_label'
        );
    }

    /**
     * @param string $gridName
     * @param int $paymentTermId
     * @return array
     */
    protected function getParameters($gridName, $paymentTermId)
    {
        $parameters = [
            'grid' => [
                $gridName => http_build_query(
                    [
                        OrmFilterExtension::MINIFIED_FILTER_PARAM => [
                            $this->paymentTermManager->getAssociationName() => [
                                'value' => [$paymentTermId],
                            ],
                        ],
                    ]
                ),
            ],
        ];

        return $parameters;
    }

    /**
     * @param int $paymentTermId
     * @param string $gridName
     * @param string $gridRoute
     * @param string $label
     * @return string
     */
    protected function generateHtmFilterUrl($paymentTermId, $gridName, $gridRoute, $label)
    {
        $urlParameters = $this->getParameters($gridName, $paymentTermId);
        $url = $this->router->generate($gridRoute, $urlParameters, true);
        $htmlFilterUrl = $this->twig->render(
            '@OroPaymentTerm/PaymentTerm/linkWithTarget.html.twig',
            [
                'urlPath' => $url,
                'label' => $label,
            ]
        );

        return $htmlFilterUrl;
    }
}
