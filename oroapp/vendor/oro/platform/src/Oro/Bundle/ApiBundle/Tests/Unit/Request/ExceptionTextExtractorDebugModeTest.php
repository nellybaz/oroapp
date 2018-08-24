<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Request;

use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Oro\Component\ChainProcessor\Exception\ExecutionFailedException;
use Oro\Bundle\ApiBundle\Exception\ActionNotAllowedException;
use Oro\Bundle\ApiBundle\Exception\ResourceNotAccessibleException;
use Oro\Bundle\ApiBundle\Exception\RuntimeException;
use Oro\Bundle\ApiBundle\Request\ExceptionTextExtractor;
use Oro\Bundle\SecurityBundle\Exception\ForbiddenException;

class ExceptionTextExtractorDebugModeTest extends \PHPUnit_Framework_TestCase
{
    /** @var ExceptionTextExtractor */
    protected $exceptionTextExtractor;

    protected function setUp()
    {
        $this->exceptionTextExtractor = new ExceptionTextExtractor(
            true,
            ['\UnexpectedValueException']
        );
    }

    /**
     * @param \Exception|null $innerException
     * @param string          $processorId
     *
     * @return ExecutionFailedException
     */
    protected function createExecutionFailedException(\Exception $innerException = null, $processorId = 'processor1')
    {
        return new ExecutionFailedException(
            $processorId,
            null,
            null,
            $innerException
        );
    }

    /**
     * @dataProvider getExceptionStatusCodeDataProvider()
     */
    public function testGetExceptionStatusCode(\Exception $exception, $expectedStatusCode)
    {
        $this->assertEquals(
            $expectedStatusCode,
            $this->exceptionTextExtractor->getExceptionStatusCode($exception)
        );
    }

    public function getExceptionStatusCodeDataProvider()
    {
        return [
            [new \UnexpectedValueException(), 500],
            [new BadRequestHttpException(), 400],
            [$this->createExecutionFailedException(new BadRequestHttpException()), 400],
            [new AccessDeniedException(), 403],
            [new ForbiddenException('test'), 403],
            [new \InvalidArgumentException(), 500],
            [new RuntimeException(), 500],
            [new ActionNotAllowedException(), 405],
            [new ForbiddenException('Reason.'), 403],
            [new ResourceNotAccessibleException(), 404],
        ];
    }

    public function testGetExceptionCode()
    {
        $this->assertNull($this->exceptionTextExtractor->getExceptionCode(new \Exception()));
    }

    /**
     * @dataProvider getExceptionTypeDataProvider
     */
    public function testExceptionType(\Exception $exception, $expectedType)
    {
        $this->assertEquals(
            $expectedType,
            $this->exceptionTextExtractor->getExceptionType($exception)
        );
    }

    public function getExceptionTypeDataProvider()
    {
        return [
            [new \Exception(), 'exception'],
            [new \UnexpectedValueException(), 'unexpected value exception'],
            [new \LogicException(), 'logic exception'],
            [new \InvalidArgumentException(), 'invalid argument exception'],
            [new BadRequestHttpException(), 'bad request http exception'],
            [$this->createExecutionFailedException(new BadRequestHttpException()), 'bad request http exception'],
            [new RuntimeException('Some error.'), 'runtime exception'],
            [new ActionNotAllowedException(), 'action not allowed exception'],
            [new ForbiddenException('Reason.'), 'forbidden exception'],
            [new ResourceNotAccessibleException(), 'resource not accessible exception'],
        ];
    }

    /**
     * @dataProvider getExceptionTextDataProvider
     */
    public function testExceptionText(\Exception $exception, $expectedType)
    {
        $this->assertEquals(
            $expectedType,
            $this->exceptionTextExtractor->getExceptionText($exception)
        );
    }

    public function getExceptionTextDataProvider()
    {
        return [
            [
                new \Exception('some error'),
                '*DEBUG ONLY* some error.'
            ],
            [
                new \Exception(),
                null
            ],
            [
                $this->createExecutionFailedException(new \Exception('some error')),
                '*DEBUG ONLY* some error. Processor: processor1.'
            ],
            [
                $this->createExecutionFailedException(
                    $this->createExecutionFailedException(new \Exception('some error')),
                    'processor0'
                ),
                '*DEBUG ONLY* some error. Processor: processor0->processor1.'
            ],
            [
                new \UnexpectedValueException('some error'),
                'some error.'
            ],
            [
                new \UnexpectedValueException(),
                null
            ],
            [
                $this->createExecutionFailedException(new \UnexpectedValueException('some error')),
                'some error. Processor: processor1.'
            ],
            [
                $this->createExecutionFailedException(
                    $this->createExecutionFailedException(new \UnexpectedValueException('some error')),
                    'processor0'
                ),
                'some error. Processor: processor0->processor1.'
            ],
            [
                new BadRequestHttpException('some error in request'),
                'some error in request.'
            ],
            [
                $this->createExecutionFailedException(new BadRequestHttpException('some error in request')),
                'some error in request. Processor: processor1.'
            ],
            [
                $this->createExecutionFailedException(
                    $this->createExecutionFailedException(new BadRequestHttpException('some error in request')),
                    'processor0'
                ),
                'some error in request. Processor: processor0->processor1.'
            ],
            [
                new RuntimeException('Some error.'),
                'Some error.'
            ],
            [
                new ActionNotAllowedException(),
                'The action is not allowed.'
            ],
            [
                new ForbiddenException('Reason.'),
                'Reason.'
            ],
            [
                new ResourceNotAccessibleException(),
                'The resource is not accessible.'
            ],
        ];
    }
}
