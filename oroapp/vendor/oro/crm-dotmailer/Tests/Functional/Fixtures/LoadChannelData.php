<?php

namespace Oro\Bundle\DotmailerBundle\Tests\Functional\Fixtures;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\UserBundle\Migrations\Data\ORM\LoadAdminUserData;
use Oro\Bundle\IntegrationBundle\Entity\Channel;
use Oro\Bundle\DotmailerBundle\Provider\Connector\ExportContactConnector;
use Oro\Bundle\DotmailerBundle\Provider\Connector\UnsubscribedContactConnector;
use Oro\Bundle\DotmailerBundle\Provider\Connector\ContactConnector;
use Oro\Bundle\DotmailerBundle\Provider\ChannelType;
use Oro\Bundle\DotmailerBundle\Provider\Connector\CampaignConnector;
use Oro\Bundle\DotmailerBundle\Provider\Connector\AddressBookConnector;
use Oro\Bundle\DotmailerBundle\Provider\Connector\ActivityContactConnector;
use Oro\Bundle\DotmailerBundle\Provider\Connector\CampaignSummaryConnector;
use Oro\Bundle\DotmailerBundle\Provider\Connector\DataFieldConnector;
use Oro\Bundle\DotmailerBundle\Provider\Connector\CampaignClickConnector;
use Oro\Bundle\DotmailerBundle\Provider\Connector\CampaignOpenConnector;

class LoadChannelData extends AbstractFixture implements ContainerAwareInterface, DependentFixtureInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var array
     */
    protected $data = [
        [
            'name' => 'first channel',
            'connectors' => [
                CampaignConnector::TYPE,
                AddressBookConnector::TYPE,
                UnsubscribedContactConnector::TYPE,
                ActivityContactConnector::TYPE,
                CampaignSummaryConnector::TYPE,
                ContactConnector::TYPE,
                ExportContactConnector::TYPE,
                DataFieldConnector::TYPE,
            ],
            'transport' => 'oro_dotmailer.transport.first',
            'reference' => 'oro_dotmailer.channel.first'
        ],
        [
            'name' => 'second channel',
            'connectors' => [
                CampaignConnector::TYPE,
                AddressBookConnector::TYPE,
                UnsubscribedContactConnector::TYPE,
                ActivityContactConnector::TYPE,
                CampaignSummaryConnector::TYPE,
                ContactConnector::TYPE,
                ExportContactConnector::TYPE,
                CampaignClickConnector::TYPE,
                CampaignOpenConnector::TYPE
            ],
            'transport' => 'oro_dotmailer.transport.second',
            'reference' => 'oro_dotmailer.channel.second'
        ],
        [
            'name' => 'third channel',
            'connectors' => [
                CampaignConnector::TYPE,
                AddressBookConnector::TYPE,
                UnsubscribedContactConnector::TYPE,
                ActivityContactConnector::TYPE,
                CampaignSummaryConnector::TYPE,
                ContactConnector::TYPE,
                ExportContactConnector::TYPE
            ],
            'transport' => 'oro_dotmailer.transport.third',
            'reference' => 'oro_dotmailer.channel.third'
        ],
        [
            'name' => 'fourth channel',
            'connectors' => [
                CampaignConnector::TYPE,
                AddressBookConnector::TYPE,
                UnsubscribedContactConnector::TYPE,
                ActivityContactConnector::TYPE,
                CampaignSummaryConnector::TYPE,
                ContactConnector::TYPE,
                ExportContactConnector::TYPE
            ],
            'transport' => 'oro_dotmailer.transport.fourth',
            'reference' => 'oro_dotmailer.channel.fourth'
        ]
    ];

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('oro_user.manager');
        $admin = $userManager->findUserByEmail(LoadAdminUserData::DEFAULT_ADMIN_EMAIL);

        foreach ($this->data as $item) {
            $channel = new Channel();
            $channel->setOrganization($admin->getOrganization());
            $channel->setDefaultUserOwner($admin);
            $channel->setType(ChannelType::TYPE);
            $channel->setName($item['name']);
            $channel->setConnectors($item['connectors']);
            $channel->setEnabled(true);
            $channel->setTransport($this->getReference($item['transport']));

            $manager->persist($channel);

            $this->setReference($item['reference'], $channel);
        }

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return [
            'Oro\Bundle\DotmailerBundle\Tests\Functional\Fixtures\LoadTransportData'
        ];
    }
}
