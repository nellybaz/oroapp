<?php

namespace Oro\Bundle\SEOBundle\Tests\Unit\Async;

use Oro\Bundle\RedirectBundle\Async\UrlCacheProcessor;
use Oro\Bundle\SEOBundle\Async\GenerateSitemapIndexProcessor;
use Oro\Bundle\SEOBundle\Async\Topics;
use Oro\Bundle\SEOBundle\Model\Exception\InvalidArgumentException;
use Oro\Bundle\SEOBundle\Model\SitemapIndexMessageFactory;
use Oro\Component\MessageQueue\Transport\MessageInterface;
use Oro\Component\MessageQueue\Transport\SessionInterface;
use Oro\Component\MessageQueue\Util\JSON;
use Oro\Component\SEO\Tools\SitemapDumperInterface;
use Oro\Component\Website\WebsiteInterface;
use Psr\Log\LoggerInterface;

class GenerateSitemapIndexProcessorTest extends \PHPUnit_Framework_TestCase
{
    const INDEX_FILE_PROVIDER_NAME = 'index';

    /**
     * @var SitemapIndexMessageFactory|\PHPUnit_Framework_MockObject_MockObject
     */
    private $messageFactory;

    /**
     * @var SitemapDumperInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $dumper;

    /**
     * @var LoggerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $logger;

    /**
     * @var GenerateSitemapIndexProcessor
     */
    private $processor;

    protected function setUp()
    {
        $this->messageFactory = $this->getMockBuilder(SitemapIndexMessageFactory::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->dumper = $this->createMock(SitemapDumperInterface::class);
        $this->logger = $this->createMock(LoggerInterface::class);

        $this->processor = new GenerateSitemapIndexProcessor(
            $this->messageFactory,
            $this->dumper,
            $this->logger
        );
    }

    public function testProcessWhenThrowsInvalidArgumentException()
    {
        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session */
        $session = $this->createMock(SessionInterface::class);

        $data = ['key' => 'value'];
        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message */
        $message = $this->createMock(MessageInterface::class);

        $message->expects($this->atLeastOnce())
            ->method('getBody')
            ->willReturn(JSON::encode($data));

        $exception = new InvalidArgumentException();
        $this->messageFactory->expects($this->once())
            ->method('getWebsiteFromMessage')
            ->with($data)
            ->willThrowException($exception);

        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                'Queue Message is invalid',
                [
                    'exception' => $exception,
                ]
            );

        $this->assertEquals(UrlCacheProcessor::REJECT, $this->processor->process($message, $session));
    }

    public function testProcessWhenThrowsException()
    {
        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session */
        $session = $this->createMock(SessionInterface::class);

        $data = ['key' => 'value'];
        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message */
        $message = $this->createMock(MessageInterface::class);

        $message->expects($this->atLeastOnce())
            ->method('getBody')
            ->willReturn(JSON::encode($data));

        $website = $this->createMock(WebsiteInterface::class);
        $this->messageFactory->expects($this->once())
            ->method('getWebsiteFromMessage')
            ->with($data)
            ->willReturn($website);
        
        $version = time();
        $this->messageFactory->expects($this->once())
            ->method('getVersionFromMessage')
            ->with($data)
            ->willReturn($version);

        $exception = new \Exception();
        $this->dumper->expects($this->once())
            ->method('dump')
            ->with($website, $version, self::INDEX_FILE_PROVIDER_NAME)
            ->willThrowException($exception);
        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                'Unexpected exception occurred during queue message processing',
                [
                    'exception' => $exception,
                    'topic' => Topics::GENERATE_SITEMAP_INDEX_BY_WEBSITE,
                ]
            );

        $this->assertEquals(UrlCacheProcessor::REJECT, $this->processor->process($message, $session));
    }

    public function testProcess()
    {
        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session */
        $session = $this->createMock(SessionInterface::class);

        $data = ['key' => 'value'];
        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message */
        $message = $this->createMock(MessageInterface::class);

        $message->expects($this->atLeastOnce())
            ->method('getBody')
            ->willReturn(JSON::encode($data));

        $website = $this->createMock(WebsiteInterface::class);
        $this->messageFactory->expects($this->once())
            ->method('getWebsiteFromMessage')
            ->with($data)
            ->willReturn($website);

        $version = time();
        $this->messageFactory->expects($this->once())
            ->method('getVersionFromMessage')
            ->with($data)
            ->willReturn($version);

        $this->dumper->expects($this->once())
            ->method('dump', self::INDEX_FILE_PROVIDER_NAME)
            ->with($website, $version);

        $this->assertEquals(UrlCacheProcessor::ACK, $this->processor->process($message, $session));
    }

    public function testGetSubscribedTopics()
    {
        $this->assertEquals(
            [Topics::GENERATE_SITEMAP_INDEX_BY_WEBSITE],
            GenerateSitemapIndexProcessor::getSubscribedTopics()
        );
    }
}
