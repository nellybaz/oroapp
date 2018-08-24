<?php

namespace Oro\Bundle\DataGridBundle\Tests\Functional\DataFixtures;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData extends AbstractFixture implements ContainerAwareInterface
{
    const SIMPLE_USER = 'simple_user';
    const SIMPLE_USER_2 = 'simple_user2';

    /** @var ContainerInterface */
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
    public function load(ObjectManager $manager)
    {
        $organization = $manager->getRepository('OroOrganizationBundle:Organization')->getFirst();
        $userManager = $this->container->get('oro_user.manager');

        $user = $userManager->createUser();
        $user->setUsername(self::SIMPLE_USER)
            ->setPlainPassword('simple_password')
            ->setEmail('simple_user@example.com')
            ->setFirstName("First Name")
            ->setLastName("Last Name")
            ->setOrganization($organization)
            ->setOrganizations(new ArrayCollection([$organization]))
            ->setOwner($organization->getBusinessUnits()->first())
            ->setEnabled(true);
        $userManager->updateUser($user);
        $this->setReference($user->getUsername(), $user);

        $user = $userManager->createUser();
        $user->setUsername(self::SIMPLE_USER_2)
            ->setPlainPassword('simple_password2')
            ->setEmail('simple_user2@example.com')
            ->setFirstName("First Name")
            ->setLastName("Last Name")
            ->setOrganization($organization)
            ->setOrganizations(new ArrayCollection([$organization]))
            ->setOwner($organization->getBusinessUnits()->first())
            ->setEnabled(true);
        $userManager->updateUser($user);

        $this->setReference($user->getUsername(), $user);
    }
}
