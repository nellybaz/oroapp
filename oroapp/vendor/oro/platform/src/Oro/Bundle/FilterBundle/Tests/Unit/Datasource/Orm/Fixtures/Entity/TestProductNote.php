<?php

namespace Oro\Bundle\FilterBundle\Tests\Unit\Datasource\Orm\Fixtures\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class TestProductNote
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="TestProduct", mappedBy="notes")
     */
    protected $products;

    /**
     * @param int|null $id
     */
    public function __construct($id = null)
    {
        $this->id       = $id;
        $this->products = new ArrayCollection();
    }
}
