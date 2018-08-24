<?php

namespace Oro\Bundle\EntityBundle\Tests\Unit\Provider;

use Oro\Bundle\EntityBundle\Model\EntityAlias;
use Oro\Bundle\EntityBundle\Provider\EntityAliasLoader;
use Oro\Bundle\EntityBundle\Provider\EntityAliasStorage;

class EntityAliasLoaderTest extends \PHPUnit_Framework_TestCase
{
    /** @var EntityAliasLoader */
    protected $loader;

    protected function setUp()
    {
        $this->loader = new EntityAliasLoader();
    }

    public function testEmptyLoader()
    {
        $storage = new EntityAliasStorage();
        $this->loader->load($storage);
        $this->assertEquals([], $storage->getAll());
    }

    public function testLoadWhenSeveralProvidersReturnSameClass()
    {
        $classProvider1 = $this->createMock('Oro\Bundle\EntityBundle\Provider\EntityClassProviderInterface');
        $classProvider2 = $this->createMock('Oro\Bundle\EntityBundle\Provider\EntityClassProviderInterface');

        $classProvider1->expects($this->once())
            ->method('getClassNames')
            ->willReturn(['Test\Entity1', 'Test\Entity2']);
        $classProvider2->expects($this->once())
            ->method('getClassNames')
            ->willReturn(['Test\Entity2', 'Test\Entity3']);

        $this->loader->addEntityClassProvider($classProvider1);
        $this->loader->addEntityClassProvider($classProvider2);

        $aliasProvider1 = $this->createMock('Oro\Bundle\EntityBundle\Provider\EntityAliasProviderInterface');
        $this->loader->addEntityAliasProvider($aliasProvider1);
        $aliasProvider1->expects($this->any())
            ->method('getEntityAlias')
            ->willReturnMap(
                [
                    ['Test\Entity1', new EntityAlias('alias1', 'plural_alias1')],
                    ['Test\Entity2', new EntityAlias('alias2', 'plural_alias2')],
                    ['Test\Entity3', new EntityAlias('alias3', 'plural_alias3')],
                ]
            );

        $this->loader->addEntityAliasProvider($aliasProvider1);

        $storage = new EntityAliasStorage();
        $this->loader->load($storage);

        $this->assertEquals(
            [
                'Test\Entity1' => new EntityAlias('alias1', 'plural_alias1'),
                'Test\Entity2' => new EntityAlias('alias2', 'plural_alias2'),
                'Test\Entity3' => new EntityAlias('alias3', 'plural_alias3'),
            ],
            $storage->getAll()
        );
    }

    public function testThatEarlierAliasProviderWins()
    {
        $classProvider1 = $this->createMock('Oro\Bundle\EntityBundle\Provider\EntityClassProviderInterface');
        $classProvider1->expects($this->once())
            ->method('getClassNames')
            ->willReturn(['Test\Entity1']);
        $this->loader->addEntityClassProvider($classProvider1);

        $aliasProvider1 = $this->createMock('Oro\Bundle\EntityBundle\Provider\EntityAliasProviderInterface');
        $aliasProvider1->expects($this->once())
            ->method('getEntityAlias')
            ->with('Test\Entity1')
            ->willReturn(new EntityAlias('alias1', 'plural_alias1'));
        $aliasProvider2 = $this->createMock('Oro\Bundle\EntityBundle\Provider\EntityAliasProviderInterface');
        $aliasProvider2->expects($this->never())
            ->method('getEntityAlias');

        $this->loader->addEntityAliasProvider($aliasProvider1);
        $this->loader->addEntityAliasProvider($aliasProvider2);

        $storage = new EntityAliasStorage();
        $this->loader->load($storage);

        $this->assertEquals(
            [
                'Test\Entity1' => new EntityAlias('alias1', 'plural_alias1')
            ],
            $storage->getAll()
        );
    }

    public function testEntityAliasCanBeDisabled()
    {
        $classProvider1 = $this->createMock('Oro\Bundle\EntityBundle\Provider\EntityClassProviderInterface');
        $classProvider1->expects($this->once())
            ->method('getClassNames')
            ->willReturn(['Test\Entity1']);
        $this->loader->addEntityClassProvider($classProvider1);

        $aliasProvider1 = $this->createMock('Oro\Bundle\EntityBundle\Provider\EntityAliasProviderInterface');
        $aliasProvider1->expects($this->once())
            ->method('getEntityAlias')
            ->with('Test\Entity1')
            ->willReturn(false);
        $aliasProvider2 = $this->createMock('Oro\Bundle\EntityBundle\Provider\EntityAliasProviderInterface');
        $aliasProvider2->expects($this->never())
            ->method('getEntityAlias');

        $this->loader->addEntityAliasProvider($aliasProvider1);
        $this->loader->addEntityAliasProvider($aliasProvider2);

        $storage = new EntityAliasStorage();
        $this->loader->load($storage);

        $this->assertEquals(
            [],
            $storage->getAll()
        );
    }
}
