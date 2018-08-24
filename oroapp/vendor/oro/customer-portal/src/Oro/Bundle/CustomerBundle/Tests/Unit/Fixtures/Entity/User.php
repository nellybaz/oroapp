<?php

namespace Oro\Bundle\CustomerBundle\Tests\Unit\Fixtures\Entity;

use Oro\Bundle\CustomerBundle\Entity\CustomerUser as ParentUser;

class User extends ParentUser
{
    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
