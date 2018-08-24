<?php

namespace Oro\Bundle\VisibilityBundle\Model;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Component\MessageQueue\Client\MessageProducerInterface;

class ProductMessageHandler
{
    /**
     * @var ProductMessageFactory
     */
    protected $messageFactory;

    /**
     * @var MessageProducerInterface
     */
    protected $messageProducer;

    /**
     * @var array
     */
    protected $scheduledMessages = [];

    /**
     * @param ProductMessageFactory $messageFactory
     * @param MessageProducerInterface $messageProducer
     */
    public function __construct(
        ProductMessageFactory $messageFactory,
        MessageProducerInterface $messageProducer
    ) {
        $this->messageFactory = $messageFactory;
        $this->messageProducer = $messageProducer;
    }

    /**
     * @param string $topic
     * @param Product $product
     */
    public function addProductMessageToSchedule($topic, Product $product)
    {
        $message = $this->messageFactory->createMessage($product);

        if (!$this->isScheduledMessage($topic, $message)) {
            $this->scheduleMessage($topic, $message);
        }
    }

    public function sendScheduledMessages()
    {
        foreach ($this->scheduledMessages as $topic => $messages) {
            if (count($messages) > 0) {
                foreach ($messages as $message) {
                    $this->messageProducer->send($topic, $message);
                }
            }
        }

        $this->scheduledMessages = [];
    }

    /**
     * @param string $topic
     * @param array $message
     * @return bool
     */
    protected function isScheduledMessage($topic, array $message)
    {
        $messages = empty($this->scheduledMessages[$topic]) ? [] : $this->scheduledMessages[$topic];

        return array_key_exists($this->getMessageKey($message), $messages);
    }

    /**
     * @param string $topic
     * @param array $message
     */
    protected function scheduleMessage($topic, array $message)
    {
        $this->scheduledMessages[$topic][$this->getMessageKey($message)] = $message;
    }

    /**
     * @param $message
     * @return string
     */
    protected function getMessageKey($message)
    {
        return $message[ProductMessageFactory::ID];
    }
}
