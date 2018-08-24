<?php

namespace Oro\Bundle\CalendarBundle\Tests\Functional\DataFixtures;

use Oro\Bundle\UserBundle\Entity\UserApi;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\TestFrameworkBundle\Test\DataFixtures\AbstractFixture;
use Oro\Bundle\UserBundle\Entity\User;

class LoadUserData extends AbstractFixture implements ContainerAwareInterface, DependentFixtureInterface
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
            'username'          => 'system_user_1',
            'email'             => 'system_user_1@example.com',
            'firstName'         => 'Elley',
            'lastName'          => 'Towards',
            'plainPassword'     => 'password',
            'apiKey'            => 'system_user_1_api_key',
            'organization'      => 'oro_calendar:organization:system',
            'reference'         => 'oro_calendar:user:system_user_1',
            'calendarReference' => 'oro_calendar:calendar:system_user_1',
            'enabled'           => true,
        ],
        [
            'username'          => 'system_user_2',
            'email'             => 'system_user_2@example.com',
            'firstName'         => 'Giffard',
            'lastName'          => 'Gray',
            'plainPassword'     => 'password',
            'apiKey'            => 'system_user_2_api_key',
            'organization'      => 'oro_calendar:organization:system',
            'reference'         => 'oro_calendar:user:system_user_2',
            'calendarReference' => 'oro_calendar:calendar:system_user_2',
            'enabled'           => true,
        ],
        [
            'username'          => 'foo_user_1',
            'email'             => 'foo_user_1@example.com',
            'firstName'         => 'Billy',
            'lastName'          => 'Wilf',
            'plainPassword'     => 'password',
            'apiKey'            => 'foo_user_1_api_key',
            'organization'      => 'oro_calendar:organization:foo',
            'reference'         => 'oro_calendar:user:foo_user_1',
            'calendarReference' => 'oro_calendar:calendar:foo_user_1',
            'enabled'           => true,
            'isAdministrator'   => true,
        ],
        [
            'username'          => 'foo_user_2',
            'email'             => 'foo_user_2@example.com',
            'firstName'         => 'Wesley',
            'lastName'          => 'Tate',
            'plainPassword'     => 'password',
            'apiKey'            => 'foo_user_2_api_key',
            'organization'      => 'oro_calendar:organization:foo',
            'reference'         => 'oro_calendar:user:foo_user_2',
            'calendarReference' => 'oro_calendar:calendar:foo_user_2',
            'enabled'           => true,
        ],
        [
            'username'          => 'foo_user_3',
            'email'             => 'foo_user_3@example.com',
            'firstName'         => 'Wally',
            'lastName'          => 'Lynn',
            'plainPassword'     => 'password',
            'apiKey'            => 'foo_user_3_api_key',
            'organization'      => 'oro_calendar:organization:foo',
            'reference'         => 'oro_calendar:user:foo_user_3',
            'calendarReference' => 'oro_calendar:calendar:foo_user_3',
            'enabled'           => true,
        ],
        [
            'username'          => 'bar_user_1',
            'email'             => 'bar_user_1@example.com',
            'firstName'         => 'Bruce',
            'lastName'          => 'Hector',
            'plainPassword'     => 'password',
            'apiKey'            => 'bar_user_1_api_key',
            'organization'      => 'oro_calendar:organization:bar',
            'reference'         => 'oro_calendar:user:bar_user_1',
            'calendarReference' => 'oro_calendar:calendar:bar_user_1',
            'enabled'           => true,
        ],
        [
            'username'          => 'bar_user_2',
            'email'             => 'bar_user_2@example.com',
            'firstName'         => 'Hadley',
            'lastName'          => 'Roosevelt',
            'plainPassword'     => 'password',
            'apiKey'            => 'bar_user_2_api_key',
            'organization'      => 'oro_calendar:organization:bar',
            'reference'         => 'oro_calendar:user:bar_user_2',
            'calendarReference' => 'oro_calendar:calendar:bar_user_2',
            'enabled'           => true,
        ],
        [
            'username'          => 'bar_user_3',
            'email'             => 'bar_user_3@example.com',
            'firstName'         => 'Foster',
            'lastName'          => 'Conway',
            'plainPassword'     => 'password',
            'apiKey'            => 'bar_user_3_api_key',
            'organization'      => 'oro_calendar:organization:bar',
            'reference'         => 'oro_calendar:user:bar_user_3',
            'calendarReference' => 'oro_calendar:calendar:bar_user_3',
            'enabled'           => true,
        ],
    ];

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
        $userManager = $this->container->get('oro_user.manager');

        $users = [];
        foreach ($this->data as $data) {
            /** @var User $user */
            $user = $userManager->createUser();

            if (!empty($data['isAdministrator'])) {
                $role = $manager->getRepository('OroUserBundle:Role')->findOneBy(['role' => 'ROLE_ADMINISTRATOR']);
                $user->addRole($role);
            }
            unset($data['isAdministrator']);

            $this->resolveReferences($data, ['organization']);
            $this->setEntityPropertyValues(
                $user,
                $data,
                ['reference', 'calendarReference', 'apiKey']
            );
            $user->addOrganization($data['organization']);

            if (isset($data['apiKey'])) {
                $apiKey = new UserApi();
                $apiKey->setApiKey($data['apiKey']);
                $apiKey->setOrganization($data['organization']);
                $manager->persist($apiKey);
                $user->addApiKey($apiKey);
            }

            $userManager->updateUser($user);
            $this->setReference($data['reference'], $user);
            $users[] = $user;
        }

        $manager->flush();

        /**
         * Filling reference repository with references to user's calendars created in the listener.
         *
         * @see \Oro\Bundle\CalendarBundle\EventListener\EntityListener::createCalendarsForNewUser
         */
        foreach ($this->data as $data) {
            $userReference = $data['reference'];
            $user = $this->getReference($userReference);
            $calendar = $manager->getRepository('OroCalendarBundle:Calendar')
                ->findOneBy(
                    [
                        'owner' => $user,
                        'organization' => $user->getOrganization(),
                    ]
                );

            $this->setReference($data['calendarReference'], $calendar);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return [LoadOrganizationData::class];
    }
}
