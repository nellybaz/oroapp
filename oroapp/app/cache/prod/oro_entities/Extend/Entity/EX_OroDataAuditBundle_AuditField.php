<?php

namespace Extend\Entity;

abstract class EX_OroDataAuditBundle_AuditField extends \Oro\Bundle\DataAuditBundle\Entity\AbstractAuditField implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($field, $dataType, $newValue, $oldValue)
    {
        parent::__construct($field, $dataType, $newValue, $oldValue);
    }
}