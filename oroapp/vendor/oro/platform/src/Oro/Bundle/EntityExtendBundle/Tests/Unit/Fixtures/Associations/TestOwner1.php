<?php

namespace Oro\Bundle\EntityExtendBundle\Tests\Unit\Fixtures\Associations;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="test_owner1")
 */
class TestOwner1
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="TestPhone", mappedBy="owner")
     */
    protected $phones;

    /**
     * @ORM\ManyToMany(targetEntity="TestTarget1")
     * @ORM\JoinTable(name="test_owner1_to_target1",
     *     joinColumns = { @ORM\JoinColumn(name = "owner_id", referencedColumnName = "id") },
     *     inverseJoinColumns = { @ORM\JoinColumn(name = "target_id", referencedColumnName = "id")}
     * )
     */
    protected $targets_1;

    /**
     * @ORM\ManyToMany(targetEntity="TestTarget2")
     * @ORM\JoinTable(name="test_owner1_to_target2",
     *     joinColumns = { @ORM\JoinColumn(name = "owner_id", referencedColumnName = "id") },
     *     inverseJoinColumns = { @ORM\JoinColumn(name = "target_id", referencedColumnName = "id")}
     * )
     */
    protected $targets_2;
}
