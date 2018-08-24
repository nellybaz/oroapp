<?php

namespace Oro\Bundle\FlatRateShippingBundle\Migrations\Data\Demo\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityNotFoundException;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\CurrencyBundle\DependencyInjection\Configuration as CurrencyConfig;
use Oro\Bundle\FlatRateShippingBundle\Entity\FlatRateSettings;
use Oro\Bundle\FlatRateShippingBundle\Integration\FlatRateChannelType;
use Oro\Bundle\FlatRateShippingBundle\Method\FlatRateMethodType;
use Oro\Bundle\IntegrationBundle\Entity\Channel;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\MigrationBundle\Entity\DataFixture;
use Oro\Bundle\MigrationBundle\Entity\Repository\DataFixtureRepository;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\OrganizationBundle\Migrations\Data\ORM\LoadOrganizationAndBusinessUnitData;
use Oro\Bundle\RuleBundle\Entity\Rule;
use Oro\Bundle\ShippingBundle\Entity\ShippingMethodConfig;
use Oro\Bundle\ShippingBundle\Entity\ShippingMethodsConfigsRule;
use Oro\Bundle\ShippingBundle\Entity\ShippingMethodTypeConfig;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\UserBundle\Migrations\Data\ORM\LoadAdminUserData;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadFlatRateIntegration extends AbstractFixture implements DependentFixtureInterface, ContainerAwareInterface
{
    /**
     * @internal
     */
    const PREVIOUS_CLASS_NAME = 'Oro\Bundle\FlatRateBundle\Migrations\Data\ORM\LoadFlatRateIntegration';
    const MAIN_USER_ID = 1;

    /**
     * @var ContainerInterface
     */
    protected $container;

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
            LoadOrganizationAndBusinessUnitData::class,
            LoadAdminUserData::class,
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        if (!$this->container) {
            return;
        }

        if (!$this->container->hasParameter('oro_integration.entity.class')) {
            return;
        }

        // Migration could be loaded before renaming of FlatRateBundle to FlatRateShippingBundle
        if ($this->isFixtureAlreadyLoaded()) {
            return;
        }

        $channel = $this->loadIntegration($manager);

        $this->loadShippingRule($manager, $channel);
    }

    /**
     * @return bool
     */
    private function isFixtureAlreadyLoaded()
    {
        $fixtures = $this->getDataFixtureRepository()->findByClassName(static::PREVIOUS_CLASS_NAME);

        return count($fixtures) > 0;
    }

    /**
     * @return DataFixtureRepository|\Doctrine\ORM\EntityRepository
     */
    private function getDataFixtureRepository()
    {
        return $this->container->get('oro_entity.doctrine_helper')->getEntityRepository(DataFixture::class);
    }

    /**
     * @param ObjectManager $manager
     *
     * @return Channel
     */
    private function loadIntegration(ObjectManager $manager)
    {
        $label = (new LocalizedFallbackValue())->setString('Flat Rate');

        $transport = new FlatRateSettings();
        $transport->addLabel($label);

        $channel = new Channel();
        $channel->setType(FlatRateChannelType::TYPE)
            ->setName('Flat Rate')
            ->setEnabled(true)
            ->setOrganization($this->getOrganization($manager))
            ->setDefaultUserOwner($this->getMainUser($manager))
            ->setTransport($transport);

        $manager->persist($channel);
        $manager->flush();

        return $channel;
    }

    /**
     * @param ObjectManager $manager
     * @param Channel       $channel
     */
    private function loadShippingRule(ObjectManager $manager, Channel $channel)
    {
        $typeConfig = new ShippingMethodTypeConfig();
        $typeConfig->setEnabled(true);
        $typeConfig->setType(FlatRateMethodType::IDENTIFIER)
            ->setOptions([
                FlatRateMethodType::PRICE_OPTION => 10,
                FlatRateMethodType::TYPE_OPTION => FlatRateMethodType::PER_ORDER_TYPE,
            ]);

        $methodConfig = new ShippingMethodConfig();
        $methodConfig->setMethod($this->getFlatRateIdentifier($channel))
            ->addTypeConfig($typeConfig);

        $rule = new Rule();
        $rule->setName('Default')
            ->setEnabled(true)
            ->setSortOrder(1);

        $shippingRule = new ShippingMethodsConfigsRule();

        $shippingRule->setRule($rule)
            ->setOrganization($this->getOrganization($manager))
            ->setCurrency($this->getDefaultCurrency())
            ->addMethodConfig($methodConfig);

        $manager->persist($shippingRule);
        $manager->flush();
    }

    /**
     * @param ObjectManager $manager
     *
     * @return Organization|object
     */
    private function getOrganization(ObjectManager $manager)
    {
        if ($this->hasReference(LoadOrganizationAndBusinessUnitData::REFERENCE_DEFAULT_ORGANIZATION)) {
            return $this->getReference(LoadOrganizationAndBusinessUnitData::REFERENCE_DEFAULT_ORGANIZATION);
        }

        return $manager->getRepository('OroOrganizationBundle:Organization')->getFirst();
    }

    /**
     * @param ObjectManager $manager
     *
     * @return User
     *
     * @throws EntityNotFoundException
     */
    public function getMainUser(ObjectManager $manager)
    {
        /** @var User $entity */
        $entity = $manager->getRepository(User::class)->findOneBy([], ['id' => 'ASC']);
        if (!$entity) {
            throw new EntityNotFoundException('Main user does not exist.');
        }

        return $entity;
    }

    /**
     * @param Channel $channel
     *
     * @return int|string
     */
    private function getFlatRateIdentifier(Channel $channel)
    {
        return $this->container
            ->get('oro_flat_rate_shipping.method.identifier_generator.method')
            ->generateIdentifier($channel);
    }

    /**
     * @return string
     */
    private function getDefaultCurrency()
    {
        /** @var ConfigManager $configManager * */
        $configManager = $this->container->get('oro_config.global');

        $currencyConfigKey = CurrencyConfig::getConfigKeyByName(CurrencyConfig::KEY_DEFAULT_CURRENCY);

        return $configManager->get($currencyConfigKey) ?: CurrencyConfig::DEFAULT_CURRENCY;
    }
}
