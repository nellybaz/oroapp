<?php

namespace Oro\Bundle\ProductBundle\EventListener;

use Oro\Bundle\ProductBundle\Async\Topics;
use Oro\Bundle\ProductBundle\Helper\ProductCollectionSegmentHelper;
use Oro\Bundle\ProductBundle\Model\SegmentMessageFactory;
use Oro\Bundle\SegmentBundle\Entity\Segment;
use Oro\Component\MessageQueue\Client\MessageProducerInterface;

class ProductCollectionVariantReindexMessageSendListener
{
    const SEGMENT = 'segment';
    const IS_FULL = 'is_full';

    /**
     * @var MessageProducerInterface
     */
    private $messageProducer;

    /**
     * @var SegmentMessageFactory
     */
    private $messageFactory;

    /**
     * @var ProductCollectionSegmentHelper
     */
    private $productCollectionSegmentHelper;

    /**
     * @var array
     */
    private $scheduledMessages = [];

    /**
     * @var array
     */
    private $segments = [];

    /**
     * @param MessageProducerInterface $messageProducer
     * @param ProductCollectionSegmentHelper $productCollectionSegmentHelper
     * @param SegmentMessageFactory $messageFactory
     */
    public function __construct(
        MessageProducerInterface $messageProducer,
        ProductCollectionSegmentHelper $productCollectionSegmentHelper,
        SegmentMessageFactory $messageFactory
    ) {
        $this->messageProducer = $messageProducer;
        $this->productCollectionSegmentHelper = $productCollectionSegmentHelper;
        $this->messageFactory = $messageFactory;
    }

    public function postFlush()
    {
        $this->addSegmentsMessages();
        while ($message = array_pop($this->scheduledMessages)) {
            $this->messageProducer->send(Topics::REINDEX_PRODUCT_COLLECTION_BY_SEGMENT, $message);
        }
    }

    /**
     * @param Segment $segment
     * @param bool $isFull
     */
    public function scheduleSegment(Segment $segment, $isFull = false)
    {
        if (!array_key_exists($segment->getId(), $this->segments)) {
            $this->segments[$segment->getId()] = [
                self::SEGMENT => $segment,
                self::IS_FULL => $isFull
            ];
        }

        if ($isFull) {
            $this->segments[$segment->getId()][self::IS_FULL] = true;
        }
    }

    /**
     * @param Segment $segment
     */
    public function scheduleMessageBySegmentDefinition(Segment $segment)
    {
        $websiteIds = $this->productCollectionSegmentHelper->getWebsiteIdsBySegment($segment);

        if (count($websiteIds) > 0) {
            $message = $this->messageFactory->createMessage($websiteIds, null, $segment->getDefinition(), true);
            $this->scheduledMessages[$this->getMessageKey($message)] = $message;
        }
    }

    private function addSegmentsMessages()
    {
        while ($segmentData = array_pop($this->segments)) {
            $segment = $segmentData[self::SEGMENT];
            $websiteIds = $this->productCollectionSegmentHelper->getWebsiteIdsBySegment($segment);

            if (count($websiteIds) > 0) {
                $message = $this->messageFactory->createMessage(
                    $websiteIds,
                    $segment,
                    null,
                    $segmentData[self::IS_FULL]
                );
                $this->scheduledMessages[$this->getMessageKey($message)] = $message;
            }
        }
    }

    /**
     * @param array $message
     * @return string
     */
    private function getMessageKey(array $message): string
    {
        return md5(json_encode($message));
    }
}
