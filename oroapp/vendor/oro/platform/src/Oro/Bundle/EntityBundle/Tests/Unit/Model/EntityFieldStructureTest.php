<?php

namespace Oro\Bundle\EntityBundle\Tests\Unit\Model;

use Oro\Bundle\EntityBundle\Model\EntityFieldStructure;
use Oro\Component\Testing\Unit\EntityTestCaseTrait;

class EntityFieldStructureTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    public function testAccessors()
    {
        static::assertPropertyAccessors(new EntityFieldStructure(), [
            ['name', 'name'],
            ['label', 'label'],
            ['type', 'type'],
            ['relationType', 'relationType'],
            ['relatedEntityName', 'relatedEntityName'],
            ['options', ['option1' => true]],
        ]);
    }

    public function testGetNotExistingOption()
    {
        $item = new EntityFieldStructure();
        $this->assertFalse($item->hasOption('unknown'));
        $this->assertNull($item->getOption('unknown'));
    }
}
