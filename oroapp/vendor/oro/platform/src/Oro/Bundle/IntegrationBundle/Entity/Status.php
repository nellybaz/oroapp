<?php

namespace Oro\Bundle\IntegrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Status
 *
 * @package Oro\Bundle\IntegrationBundle\Entity
 * @ORM\Entity
 * @ORM\Table(
 *      name="oro_integration_channel_status",
 *      indexes={
 *          @ORM\Index(name="oro_intch_con_state_idx", columns={"connector", "code"}),
 *          @ORM\Index(name="oro_intch_date_idx", columns={"date"})
 *      }
 * )
 */
class Status
{
    const STATUS_COMPLETED = 1;
    const STATUS_FAILED    = 2;

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Channel
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\IntegrationBundle\Entity\Channel", cascade="ALL", inversedBy="statuses")
     * @ORM\JoinColumn(name="channel_id", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    protected $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    protected $code;

    /**
     * @var string
     *
     * @ORM\Column(name="connector", type="string", length=255)
     */
    protected $connector;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    protected $message;

    /**
     * @var \DateTime $createdAt
     *
     * @ORM\Column(name="date", type="datetime")
     */
    protected $date;

    /**
     * @var array $data
     *
     * @ORM\Column(name="data", type="json_array", nullable=true)
     */
    protected $data;

    public function __construct()
    {
        $this->setDate(new \DateTime('now', new \DateTimeZone('UTC')));
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Channel $channel
     *
     * @return $this
     */
    public function setChannel(Channel $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $connector
     *
     * @return $this
     */
    public function setConnector($connector)
    {
        $this->connector = $connector;

        return $this;
    }

    /**
     * @return string
     */
    public function getConnector()
    {
        return $this->connector;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param \DateTime $date
     *
     * @return $this
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Do not serialize
     *
     * @return array
     */
    public function __sleep()
    {
        return [];
    }

    /**
     * @param array $data
     *
     * @return Status
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getCode();
    }
}
