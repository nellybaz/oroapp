<?php
namespace Oro\Component\MessageQueue\Tests\Unit\Transport\Exception;

use Oro\Component\MessageQueue\Transport\Exception\ExceptionInterface;
use Oro\Component\MessageQueue\Transport\Exception\Exception;
use Oro\Component\Testing\ClassExtensionTrait;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
    use ClassExtensionTrait;
    
    public function testShouldBeSubClassOfException()
    {
        $this->assertClassExtends(\Exception::class, Exception::class);
    }

    public function testShouldImplementExceptionInterface()
    {
        $this->assertClassImplements(ExceptionInterface::class, Exception::class);
    }

    public function testCouldBeConstructedWithoutAnyArguments()
    {
        new Exception();
    }
}
