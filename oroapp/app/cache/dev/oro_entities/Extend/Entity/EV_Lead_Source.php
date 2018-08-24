<?php

namespace Extend\Entity;

class EV_Lead_Source extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}