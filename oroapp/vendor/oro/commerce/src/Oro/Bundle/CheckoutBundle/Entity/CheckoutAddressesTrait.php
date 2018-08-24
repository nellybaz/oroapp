<?php

namespace Oro\Bundle\CheckoutBundle\Entity;

trait CheckoutAddressesTrait
{
    use BillingAddressTrait;
    use ShippingAddressTrait;

    /**
     * @var bool
     *
     * @ORM\Column(name="ship_to_billing_address", type="boolean", options={"default"=false})
     */
    protected $shipToBillingAddress = false;

    /**
     * @return boolean
     */
    public function isShipToBillingAddress()
    {
        return $this->shipToBillingAddress;
    }

    /**
     * @param boolean $shipToBillingAddress
     * @return $this
     */
    public function setShipToBillingAddress($shipToBillingAddress)
    {
        $this->shipToBillingAddress = $shipToBillingAddress;

        return $this;
    }
}
