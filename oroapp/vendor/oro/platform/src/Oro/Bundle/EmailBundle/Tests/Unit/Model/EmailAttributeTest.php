<?php

namespace Oro\Bundle\EmailBundle\Tests\Unit\Model;

use Oro\Bundle\EmailBundle\Model\EmailAttribute;

class EmailAttributeTest extends \PHPUnit_Framework_TestCase
{
    public function testEmailAttributeShouldBeConstructed()
    {
        $emailAttribute = new EmailAttribute('attr', true);
        $this->assertEquals('attr', $emailAttribute->getName());
        $this->assertTrue($emailAttribute->isAssociation());
    }
}
