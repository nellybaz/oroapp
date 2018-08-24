<?php

namespace Oro\Bundle\ZendeskBundle\Twig;

use Guzzle\Http\Url;

use Symfony\Component\DependencyInjection\ContainerInterface;

use Oro\Bundle\CaseBundle\Entity\CaseEntity;
use Oro\Bundle\IntegrationBundle\Entity\Channel;
use Oro\Bundle\ZendeskBundle\Entity\Ticket;
use Oro\Bundle\ZendeskBundle\Entity\ZendeskRestTransport;
use Oro\Bundle\ZendeskBundle\Exception\ConfigurationException;
use Oro\Bundle\ZendeskBundle\Model\EntityProvider\OroEntityProvider;
use Oro\Bundle\ZendeskBundle\Model\EntityProvider\ZendeskEntityProvider;

class ZendeskExtension extends \Twig_Extension
{
    /** @var ContainerInterface */
    protected $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return OroEntityProvider
     */
    protected function getOroEntityProvider()
    {
        return $this->container->get('oro_zendesk.entity_provider.oro');
    }

    /**
     * @return ZendeskEntityProvider
     */
    protected function getZendeskEntityProvider()
    {
        return $this->container->get('oro_zendesk.entity_provider.zendesk');
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction(
                'oro_zendesk_enabled_two_way_sync_channels',
                [$this, 'getEnabledTwoWaySyncChannels']
            ),
            new \Twig_SimpleFunction(
                'oro_zendesk_ticket_by_related_case',
                [$this, 'getTicketByCase']
            ),
            new \Twig_SimpleFunction('oro_zendesk_ticket_url', [$this, 'getTicketUrl']),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'oro_zendesk';
    }

    /**
     * @return Channel[]
     */
    public function getEnabledTwoWaySyncChannels()
    {
        return $this->getOroEntityProvider()->getEnabledTwoWaySyncChannels();
    }

    /**
     * @param CaseEntity $caseEntity
     *
     * @return Ticket|null
     */
    public function getTicketByCase(CaseEntity $caseEntity)
    {
        return $this->getZendeskEntityProvider()->getTicketByCase($caseEntity);
    }

    /**
     * @param Ticket $ticket
     *
     * @return string|null
     */
    public function getTicketUrl(Ticket $ticket)
    {
        try {
            if (!$ticket->getChannel() || !$ticket->getOriginId()) {
                return null;
            }
            /** @var ZendeskRestTransport $transport */
            $transport = $ticket->getChannel()->getTransport();

            $url = $transport->getUrl();
            $url = Url::factory($url);
            $scheme = $url->getScheme();

            if (empty($scheme)) {
                $url->setHost($url->getPath())
                    ->setPath('')
                    ->setScheme('https');
            }

            $url = (string)$url;

            if (empty($url)) {
                return null;
            }

            return $url . '/tickets/' . $ticket->getOriginId();
        } catch (ConfigurationException $exception) {
            return null;
        }
    }
}
