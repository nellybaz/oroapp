<?php

namespace Oro\Bundle\DotmailerBundle\Tests\Unit\Entity;

use Oro\Bundle\IntegrationBundle\Entity\Channel;
use Oro\Bundle\DotmailerBundle\Entity\DataFieldMapping;
use Oro\Bundle\DotmailerBundle\Entity\DataFieldMappingConfig;
use Oro\Component\Testing\Unit\EntityTestCaseTrait;

class DataFieldMappingTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    /**
     * @var DataFieldMapping
     */
    protected $entity;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->entity = new DataFieldMapping();
    }

    public function testProperties()
    {
        $now = new \DateTime();
        $channel = new Channel();
        $organization = $this->createMock('Oro\Bundle\OrganizationBundle\Entity\Organization');
        $properties = [
            ['id', 1],
            ['channel', $channel],
            ['entity', 'Entity Class'],
            ['syncPriority', '1'],
            ['createdAt', $now],
            ['updatedAt', $now],
            ['owner', $organization],
        ];

        $this->assertPropertyAccessors($this->entity, $properties);
    }

    public function testCollections()
    {
        $config = new DataFieldMappingConfig();

        $this->assertPropertyCollection($this->entity, 'configs', $config);
    }

    public function testPrePersist()
    {
        $this->entity->prePersist();
        $this->assertInstanceOf('DateTime', $this->entity->getCreatedAt());
        $this->assertInstanceOf('DateTime', $this->entity->getUpdatedAt());
    }

    public function testPreUpdate()
    {
        $this->assertEmpty($this->entity->getUpdatedAt());
        $this->entity->preUpdate();
        $this->assertInstanceOf('DateTime', $this->entity->getUpdatedAt());
    }
}
