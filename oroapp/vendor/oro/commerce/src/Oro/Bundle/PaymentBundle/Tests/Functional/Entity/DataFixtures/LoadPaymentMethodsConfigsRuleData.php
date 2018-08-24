<?php

namespace Oro\Bundle\PaymentBundle\Tests\Functional\Entity\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Oro\Bundle\PaymentBundle\Entity\PaymentMethodsConfigsRule;
use Oro\Bundle\RuleBundle\Entity\RuleInterface;
use Oro\Bundle\TestFrameworkBundle\Test\DataFixtures\AbstractFixture;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\UserBundle\Entity\UserInterface;
use Oro\Bundle\UserBundle\Entity\UserManager;
use Oro\Bundle\UserBundle\Migrations\Data\ORM\LoadAdminUserData;
use Symfony\Component\Yaml\Yaml;

class LoadPaymentMethodsConfigsRuleData extends AbstractFixture implements DependentFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getDependencies()
    {
        return [
            'Oro\Bundle\RuleBundle\Tests\Functional\Entity\DataFixtures\LoadRulesDataFixture'
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('oro_user.manager');
        $admin = $this->getUser($userManager);
        $organization = $admin->getOrganization();

        foreach ($this->getPaymentMethodsConfigsRulesData() as $reference => $data) {
            $entity = new PaymentMethodsConfigsRule();

            /** @var RuleInterface $rule */
            $rule = $this->getReference($data['rule_reference']);

            $entity
                ->setCurrency($data['currency'])
                ->setRule($rule)
                ->setOrganization($organization);

            $manager->persist($entity);

            $this->setReference($reference, $entity);
        }

        $manager->flush();
    }

    /**
     * @return array
     */
    protected function getPaymentMethodsConfigsRulesData()
    {
        return Yaml::parse(file_get_contents(__DIR__.'/data/basic_payment_methods_configs_rules.yml'));
    }

    /**
     * @param UserManager $userManager
     *
     * @return User|UserInterface
     */
    protected function getUser(UserManager $userManager)
    {
        $user = $userManager->findUserByEmail(LoadAdminUserData::DEFAULT_ADMIN_EMAIL);

        if (!$user) {
            throw new \LogicException('There are no users in system');
        }

        return $user;
    }
}
