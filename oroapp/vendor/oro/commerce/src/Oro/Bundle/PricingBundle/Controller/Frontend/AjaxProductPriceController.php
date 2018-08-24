<?php

namespace Oro\Bundle\PricingBundle\Controller\Frontend;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\PricingBundle\Controller\AbstractAjaxProductPriceController;

class AjaxProductPriceController extends AbstractAjaxProductPriceController
{
    /**
     * @Route("/get-product-prices-by-customer", name="oro_pricing_frontend_price_by_customer")
     * @Method({"GET"})
     *
     * {@inheritdoc}
     */
    public function getProductPricesByCustomerAction(Request $request)
    {
        return parent::getProductPricesByCustomer($request);
    }

    /**
     * @Route("/get-matching-price", name="oro_pricing_frontend_matching_price")
     * @Method({"GET"})
     *
     * {@inheritdoc}
     */
    public function getMatchingPriceAction(Request $request)
    {
        $lineItems = $request->get('items', []);
        $matchedPrices = $this->get('oro_pricing.provider.matching_price')->getMatchingPrices(
            $lineItems,
            $this->get('oro_pricing.model.price_list_request_handler')->getPriceListByCustomer()
        );

        return new JsonResponse($matchedPrices);
    }

    /**
     * @Route("/get-product-units-by-currency", name="oro_pricing_frontend_units_by_pricelist")
     * @Method({"GET"})
     *
     * {@inheritdoc}
     */
    public function getProductUnitsByCurrencyAction(Request $request)
    {
        return $this->getProductUnitsByCurrency(
            $this->get('oro_pricing.model.price_list_request_handler')->getPriceListByCustomer(),
            $request,
            $this->getParameter('oro_pricing.entity.combined_product_price.class')
        );
    }

    /**
     * @Route("/set-current-currency", name="oro_pricing_frontend_set_current_currency")
     * @Method({"POST"})
     *
     * {@inheritdoc}
     */
    public function setCurrentCurrencyAction(Request $request)
    {
        $currency = $request->get('currency');
        $result = false;
        $userCurrencyManager = $this->get('oro_pricing.user_currency_manager');
        if (in_array($currency, $userCurrencyManager->getAvailableCurrencies(), true)) {
            $userCurrencyManager->saveSelectedCurrency($currency);
            $result = true;
        }

        return new JsonResponse(['success' => $result]);
    }
}
