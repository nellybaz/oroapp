<?php

namespace Oro\Component\MessageQueue\Transport\Null;

use Oro\Component\MessageQueue\Transport\MessageInterface;

class NullMessage implements MessageInterface
{
    /** @var string */
    private $body;
    
    /** @var array */
    private $properties = [];

    /** @var array */
    private $headers = [];

    /** @var bool */
    private $redelivered = false;

    /**
     * {@inheritdoc}
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * {@inheritdoc}
     */
    public function setProperties(array $properties)
    {
        $this->properties = $properties;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperty($name, $default = null)
    {
        return array_key_exists($name, $this->properties) ? $this->properties[$name] : $default;
    }

    /**
     * {@inheritdoc}
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeader($name, $default = null)
    {
        return array_key_exists($name, $this->headers) ?$this->headers[$name] : $default;
    }

    /**
     * {@inheritdoc}
     */
    public function isRedelivered()
    {
        return $this->redelivered;
    }

    /**
     * {@inheritdoc}
     */
    public function setRedelivered($redelivered)
    {
        $this->redelivered = $redelivered;
    }

    /**
     * {@inheritdoc}
     */
    public function setCorrelationId($correlationId)
    {
        $headers = $this->getHeaders();
        $headers['correlation_id'] = (string) $correlationId;

        $this->setHeaders($headers);
    }

    /**
     * {@inheritdoc}
     */
    public function getCorrelationId()
    {
        return $this->getHeader('correlation_id', '');
    }

    /**
     * {@inheritdoc}
     */
    public function setMessageId($messageId)
    {
        $headers = $this->getHeaders();
        $headers['message_id'] = (string) $messageId;

        $this->setHeaders($headers);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessageId()
    {
        return $this->getHeader('message_id', '');
    }

    /**
     * {@inheritdoc}
     */
    public function getTimestamp()
    {
        return $this->getHeader('timestamp');
    }

    /**
     * {@inheritdoc}
     */
    public function setTimestamp($timestamp)
    {
        $headers = $this->getHeaders();
        $headers['timestamp'] = (int) $timestamp;

        $this->setHeaders($headers);
    }
}
