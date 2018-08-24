<?php

namespace Oro\Bundle\BatchBundle\Tests\Unit\Fixtures\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class UserEmail
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="emails")
     */
    protected $user;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $primary;

    /**
     * @ORM\ManyToOne(targetEntity="EmailStatus", cascade={"persist"})
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status;
}
