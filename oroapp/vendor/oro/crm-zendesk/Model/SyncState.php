<?php

namespace Oro\Bundle\ZendeskBundle\Model;

use Psr\Log\LoggerInterface;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\HttpKernel\Log\NullLogger;

use Oro\Bundle\IntegrationBundle\Entity\Channel;
use Oro\Bundle\IntegrationBundle\Entity\Status;
use Oro\Bundle\IntegrationBundle\Entity\Repository\ChannelRepository;

class SyncState
{
    const LAST_SYNC_DATE_KEY = 'lastSyncDate';

    /**
     * @var array
     */
    protected $ticketIds = [];

    /**
     * @var ManagerRegistry
     */
    protected $managerRegistry;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @param ManagerRegistry $managerRegistry
     */
    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
    }

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param Channel $channel
     * @param string  $connector
     *
     * @return \DateTime|null
     */
    public function getLastSyncDate(Channel $channel, $connector)
    {
        /**
         * @var $channelRepository ChannelRepository
         */
        $channelRepository = $this->managerRegistry->getRepository('OroIntegrationBundle:Channel');
        $status = $channelRepository->getLastStatusForConnector($channel, $connector, Status::STATUS_COMPLETED);

        if (null === $status) {
            return null;
        }

        $date = null;
        $statusData = $status->getData();
        if (!empty($statusData[self::LAST_SYNC_DATE_KEY])) {
            try {
                $date = new \DateTime($statusData[self::LAST_SYNC_DATE_KEY], new \DateTimeZone('UTC'));
            } catch (\Exception $e) {
                $this->getLogger()->error(
                    sprintf(
                        'Status with [id=%s] contains incorrect date format in data by key "lastSyncDate".',
                        $status->getId()
                    ),
                    ['exception' => $e]
                );
            }
        }

        return $date;
    }

    /**
     * @return array
     */
    public function getTicketIds()
    {
        return $this->ticketIds;
    }

    /**
     * @param int $id
     *
     * @return SyncState
     */
    public function addTicketId($id)
    {
        $this->ticketIds[] = $id;

        return $this;
    }

    /**
     * @param array $ticketIds
     *
     * @return SyncState
     */
    public function setTicketIds(array $ticketIds)
    {
        $this->ticketIds = $ticketIds;

        return $this;
    }

    /**
     * @return LoggerInterface
     */
    protected function getLogger()
    {
        if (!$this->logger) {
            $this->logger = new NullLogger();
        }
        return $this->logger;
    }
}
