<?php

namespace Oro\Bundle\CustomerBundle\Model;

use Oro\Bundle\UserBundle\Entity\AbstractRole;

abstract class ExtendCustomerUserRole extends AbstractRole
{
    /**
     * Constructor
     *
     * The real implementation of this method is auto generated.
     *
     * IMPORTANT: If the derived class has own constructor it must call parent constructor.
     *
     * @param string|null $role
     */
    public function __construct($role = null)
    {
        parent::__construct($role);
    }
}
