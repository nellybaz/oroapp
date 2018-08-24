<?php

namespace Oro\Bundle\TestFrameworkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;

/**
 * @ORM\Table(name="test_workflow_aware_entity")
 * @ORM\Entity
 * @Config(
 *      routeName="oro_test_wfa_index",
 *      routeView="oro_test_wfa_view",
 *      routeCreate="oro_test_wfa_create",
 *      routeUpdate="oro_test_wfa_update",
 *      routeDelete="oro_test_wfa_delete"
 * )
 */
class WorkflowAwareEntity implements TestFrameworkEntityInterface
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    protected $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
