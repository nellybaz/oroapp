<?php

namespace Oro\Bundle\SaleBundle\Manager;

use Oro\Bundle\PricingBundle\SubtotalProcessor\Provider\LineItemSubtotalProvider;
use Oro\Bundle\PricingBundle\SubtotalProcessor\TotalProcessorProvider;
use Oro\Bundle\SaleBundle\Entity\QuoteDemand;

class QuoteDemandManager
{
    /**
     * @var TotalProcessorProvider
     */
    protected $totalProvider;

    /**
     * @var LineItemSubtotalProvider
     */
    protected $subtotalProvider;

    /**
     * @param TotalProcessorProvider $totalProvider
     * @param LineItemSubtotalProvider $subtotalProvider
     */
    public function __construct(
        TotalProcessorProvider $totalProvider,
        LineItemSubtotalProvider $subtotalProvider
    ) {
        $this->totalProvider = $totalProvider;
        $this->subtotalProvider = $subtotalProvider;
    }

    /**
     * @param QuoteDemand $quoteDemand
     */
    public function recalculateSubtotals(QuoteDemand $quoteDemand)
    {
        $subtotal = $this->subtotalProvider->getSubtotal($quoteDemand);
        $quoteDemand->setSubtotal($subtotal->getAmount());

        $total = $this->totalProvider->getTotal($quoteDemand);
        $quoteDemand->setTotal($total->getAmount());

        $quoteDemand->setTotalCurrency($subtotal->getCurrency());
    }
}
