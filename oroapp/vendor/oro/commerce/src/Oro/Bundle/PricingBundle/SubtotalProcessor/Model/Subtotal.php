<?php

namespace Oro\Bundle\PricingBundle\SubtotalProcessor\Model;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\PricingBundle\Entity\CombinedPriceList;

class Subtotal
{
    const OPERATION_ADD = 1;
    const OPERATION_SUBTRACTION = 2;
    const OPERATION_IGNORE = 3;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var float
     */
    protected $amount = 0;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var CombinedPriceList
     */
    protected $combinedPriceList;

    /**
     * Type operation for calculate total
     *
     * @var integer
     */
    protected $operation = self::OPERATION_ADD;

    /**
     * Visibility in total
     *
     * @var boolean
     */
    protected $visible;

    /**
     * Display order, the less the value the earlier subtotal is displayed
     *
     * @var boolean
     */
    protected $sortOrder = 0;

    /**
     * Extra data
     *
     * @var array
     */
    protected $data;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Subtotal
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return Subtotal
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return Subtotal
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return Subtotal
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return CombinedPriceList
     */
    public function getCombinedPriceList()
    {
        return $this->combinedPriceList;
    }

    /**
     * @param CombinedPriceList|null $combinedPriceList
     *
     * @return Subtotal
     */
    public function setCombinedPriceList(CombinedPriceList $combinedPriceList = null)
    {
        $this->combinedPriceList = $combinedPriceList;

        return $this;
    }

    /**
     * Get operation type
     *
     * @return integer
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set operation type
     *
     * @param integer $operation
     *
     * @return Subtotal
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Check visibility in total block
     *
     * @return boolean
     */
    public function isVisible()
    {
        return $this->visible;
    }

    /**
     * Set operation type
     *
     * @param boolean $visible
     *
     * @return Subtotal
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param int $order
     * @return Subtotal
     */
    public function setSortOrder($order)
    {
        $this->sortOrder = $order;

        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     *
     * @return Subtotal
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'type' => $this->getType(),
            'label' => $this->getLabel(),
            'amount' => $this->getAmount(),
            'signedAmount' => $this->getSignedAmount(),
            'currency' => $this->getCurrency(),
            'visible' => $this->isVisible(),
            'data' => $this->getData(),
        ];
    }

    /**
     * @return Price
     */
    public function getTotalPrice()
    {
        return (new Price())->setCurrency($this->getCurrency())->setValue($this->getAmount());
    }

    /**
     * If operation is subtraction than negative amount is returned, otherwise positive amount is returned.
     * @return float
     */
    public function getSignedAmount()
    {
        if ($this->amount && $this->getOperation() === self::OPERATION_SUBTRACTION) {
            return -$this->amount;
        }

        return $this->amount;
    }
}
