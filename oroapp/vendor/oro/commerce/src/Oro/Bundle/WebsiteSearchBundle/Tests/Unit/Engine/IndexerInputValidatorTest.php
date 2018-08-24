<?php

namespace Oro\Bundle\WebsiteSearchBundle\Tests\Unit\Engine;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\WebsiteBundle\Provider\WebsiteProvider;
use Oro\Bundle\WebsiteSearchBundle\Engine\Context\ContextTrait;
use Oro\Bundle\WebsiteSearchBundle\Engine\IndexerInputValidator;
use Oro\Bundle\WebsiteSearchBundle\Provider\WebsiteSearchMappingProvider;

class IndexerInputValidatorTest extends \PHPUnit_Framework_TestCase
{
    use ContextTrait;

    const WEBSITE_ID = 1;

    /**
     * @var WebsiteSearchMappingProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    private $mappingProvider;

    /**
     * @var WebsiteProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    private $websiteProvider;

    /**
     * @var IndexerInputValidator
     */
    private $testable;

    public function setUp()
    {
        $this->mappingProvider = $this->createMock(WebsiteSearchMappingProvider::class);

        $this->mappingProvider->method('isClassSupported')
            ->willReturn(true);

        $this->websiteProvider = $this->createMock(WebsiteProvider::class);
        $this->websiteProvider->expects($this->any())
            ->method('getWebsiteIds')
            ->willReturn([self::WEBSITE_ID]);

        $this->testable = new IndexerInputValidator(
            $this->createMock(DoctrineHelper::class),
            $this->mappingProvider
        );
        $this->testable->setWebsiteProvider($this->websiteProvider);
    }

    /**
     * @expectedException \LogicException
     */
    public function testIncoherentEntityInput()
    {
        $context = [];
        $context = $this->setContextEntityIds($context, [1,2,3]);
        $this->testable->validateReindexRequest(['class1','class2'], $context);
    }

    /**
     * @expectedException \LogicException
     */
    public function testEmptyEntitiesInput()
    {
        $this->testable->validateReindexRequest([], []);
    }

    public function testValidation()
    {
        $context = [];
        $context = $this->setContextEntityIds($context, [1,2,3]);
        $result = $this->testable->validateReindexRequest(['class1'], $context);

        $this->assertEquals(
            $result,
            [
                ['class1'],
                [self::WEBSITE_ID]
            ]
        );
    }
}
