<?php

namespace Oro\Bundle\SaleBundle\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormConfigInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\SaleBundle\Entity\Quote;
use Oro\Bundle\SaleBundle\Provider\QuoteProductPriceProvider;
use Oro\Bundle\SaleBundle\Quote\Pricing\QuotePriceComparator;

/**
 * Discards price modifications and free form inputs, if there are no permissions for those operations
 */
class QuoteFormSubscriber implements EventSubscriberInterface
{
    /** @var QuoteProductPriceProvider */
    protected $provider;

    /** @var TranslatorInterface */
    protected $translator;

    /**
     * @param QuoteProductPriceProvider $provider
     * @param TranslatorInterface $translator
     */
    public function __construct(QuoteProductPriceProvider $provider, TranslatorInterface $translator)
    {
        $this->provider = $provider;
        $this->translator = $translator;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SUBMIT => 'onPreSubmit',
        ];
    }

    /**
     * @param FormEvent $event
     */
    public function onPreSubmit(FormEvent $event)
    {
        $form = $event->getForm();

        $quote = $form->getData();
        if (!$quote instanceof Quote || !$quote->getId()) {
            return;
        }

        $data = $event->getData();
        if (!is_array($data) || !isset($data['quoteProducts'])) {
            return;
        }

        $this->processPriceChanges($form, $quote, $data['quoteProducts']);
    }

    /**
     * @param FormInterface $form
     * @param Quote $quote
     * @param array $quoteProducts
     */
    protected function processPriceChanges(FormInterface $form, Quote $quote, array $quoteProducts)
    {
        $config = $form->getConfig();

        $allowPricesOverride = $this->isAllowedPricesOverride($config);
        $allowFreeForm = $this->isAllowedAddFreeFormItems($config);

        $priceComparator = new QuotePriceComparator($quote);
        $tierPrices = $this->getTierPrices($quote, $quoteProducts);

        foreach ($quoteProducts as $productData) {
            $allowChanges = $allowPricesOverride && ($productData['product'] || $allowFreeForm);
            $offers = $productData['quoteProductOffers'] ?? [];

            foreach ($offers as $productOfferData) {
                $priceChanged = $priceComparator->isQuoteProductOfferPriceChanged(
                    $productData['productSku'],
                    $productOfferData['productUnit'],
                    $productOfferData['quantity'],
                    $productOfferData['price']['currency'],
                    $productOfferData['price']['value']
                );

                if ($priceChanged) {
                    $quote->setPricesChanged(true);

                    if ($allowChanges) {
                        break;
                    }

                    // check that overridden price in free form
                    if (!$productData['product']) {
                        $this->addFormError($form, 'oro.sale.quote.form.error.free_form_price_override');
                        break;
                    }

                    // check that overridden price is tier
                    if (!$this->isTierPrice($productData['product'], $productOfferData, $tierPrices)) {
                        $this->addFormError($form, 'oro.sale.quote.form.error.price_override');
                        break;
                    }
                }
            }
        }
    }

    /**
     * @param Quote $quote
     * @param array $quoteProducts
     *
     * @return array
     */
    protected function getTierPrices(Quote $quote, array $quoteProducts)
    {
        $productIds = array_filter(array_column($quoteProducts, 'product'));

        return $this->provider->getTierPricesForProducts($quote, $productIds);
    }

    /**
     * @param int $productId
     * @param array $quoteProductOfferData
     * @param array $tierPrices
     *
     * @return bool
     */
    protected function isTierPrice($productId, array $quoteProductOfferData, array $tierPrices)
    {
        $productTierPrices = array_reverse($tierPrices[$productId] ?? []);
        foreach ($productTierPrices as $tierPrice) {
            if ((float) $quoteProductOfferData['quantity'] < (float) $tierPrice['quantity']) {
                continue;
            }
            if ($quoteProductOfferData['productUnit'] === $tierPrice['unit'] &&
                $quoteProductOfferData['price']['currency'] === $tierPrice['currency'] &&
                (float) $quoteProductOfferData['price']['value'] === (float) $tierPrice['price']
            ) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param FormInterface $form
     * @param string $error
     */
    protected function addFormError(FormInterface $form, $error)
    {
        $form->addError(new FormError($this->translator->trans($error)));
    }

    /**
     * @param FormConfigInterface $config
     * @return bool
     */
    protected function isAllowedPricesOverride(FormConfigInterface $config)
    {
        $options = $config->getOptions();

        return $options['allow_prices_override'] ?? false;
    }

    /**
     * @param FormConfigInterface $config
     * @return bool
     */
    protected function isAllowedAddFreeFormItems(FormConfigInterface $config)
    {
        $options = $config->getOptions();

        return $options['allow_add_free_form_items'] ?? false;
    }
}
