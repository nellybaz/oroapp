<?php

namespace Oro\Bundle\OrderBundle\Tests\Unit\EventListener\ORM\Stub;

use Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue;
use Oro\Bundle\OrderBundle\Entity\Order;

class OrderStub extends Order
{
    /** @var AbstractEnumValue */
    protected $internalStatus;

    /**
     * @return AbstractEnumValue
     */
    public function getInternalStatus()
    {
        return $this->internalStatus;
    }

    /**
     * @param AbstractEnumValue $internalStatus
     *
     * @return $this
     */
    public function setInternalStatus($internalStatus)
    {
        $this->internalStatus = $internalStatus;

        return $this;
    }

    public function unsetWebsite()
    {
        $this->website = null;
    }
}
