<?php
namespace Oro\Bundle\DemoDataBundle\Migrations\Data\Demo\ORM;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

use Oro\Bundle\UserBundle\Entity\UserManager;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\OrganizationBundle\Entity\Organization;
use Oro\Bundle\NavigationBundle\Entity\Builder\ItemFactory;
use Oro\Bundle\SecurityBundle\Authentication\Token\UsernamePasswordOrganizationToken;

class LoadPintabsData extends AbstractFixture implements ContainerAwareInterface, DependentFixtureInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var UserManager
     */
    protected $userManager;

    /**
     * @var User[]
     */
    protected $users;

    /** @var  ItemFactory */
    protected $navigationFactory;

    /** @var  EntityManager */
    protected $em;

    /**
     * @var Organization
     */
    protected $organization;

    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return [
            'Oro\Bundle\DemoDataBundle\Migrations\Data\Demo\ORM\LoadUserData'
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
        $this->navigationFactory = $container->get('oro_navigation.item.factory');
        $this->userManager = $container->get('oro_user.manager');
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->organization = $manager->getRepository('OroOrganizationBundle:Organization')->getFirst();
        $this->initSupportingEntities();
        $this->loadUsersTags();
    }

    protected function initSupportingEntities()
    {
        $this->em = $this->container->get('doctrine.orm.entity_manager');
        $userStorageManager = $this->userManager->getStorageManager();
        $this->users = $userStorageManager->getRepository('OroUserBundle:User')->findAll();
    }

    public function loadUsersTags()
    {
        $router = $this->container->get('router');

        $params = array(
            'account' => array(
                "url" => $router->generate('oro_account_index'),
                "title_rendered" => "Accounts - Customers",
                "title" => "{\"template\":\"Accounts - Customers\",\"short_template\":\"Accounts\",\"params\":[]}",
                "position" => 0,
                "type" => "pinbar",
                "display_type" => "list",
                "maximized" => false,
                "remove" => false
            ),
            'contact' => array(
                "url" => $router->generate('oro_contact_index'),
                "title_rendered" => "Contacts - Customers",
                "title" => "{\"template\":\"Contacts - Customers\",\"short_template\":\"Contacts\",\"params\":[]}",
                "position" => 1,
                "type" => "pinbar",
                "display_type" => "list",
                "maximized" => false,
                "remove" => false
            ),
            'leads' => array(
                "url" => $router->generate('oro_sales_lead_index'),
                "title_rendered" => "Leads - Sales",
                "title" => "{\"template\":\"Leads - Sales\",\"short_template\":\"Leads\",\"params\":[]}",
                "position" => 2,
                "type" => "pinbar",
                "display_type" => "list",
                "maximized" => false,
                "remove" => false
            ),
            'opportunities' => array(
                "url" => $router->generate('oro_sales_opportunity_index'),
                "title_rendered" => "Opportunities - Sales",
                "title"
                    => "{\"template\":\"Opportunities - Sales\",\"short_template\":\"Opportunities\",\"params\":[]}",
                "position" => 3,
                "type" => "pinbar",
                "display_type" => "list",
                "maximized" => false,
                "remove" => false
            )
        );
        $organization = $this->getReference('default_organization');
        foreach ($this->users as $user) {
            $tokenStorage = $this->container->get('security.token_storage');

            $token = new UsernamePasswordOrganizationToken($user, $user->getUsername(), 'main', $this->organization);

            $tokenStorage->setToken($token);
            foreach ($params as $param) {
                $param['user'] = $user;
                $pinTab = $this->navigationFactory->createItem($param['type'], $param);
                $pinTab->getItem()->setOrganization($organization);
                $this->persist($this->em, $pinTab);
            }
            $tokenStorage->setToken(null);
        }
        $this->flush($this->em);
    }

    /**
     * Persist object
     *
     * @param mixed $manager
     * @param mixed $object
     */
    private function persist($manager, $object)
    {
        $manager->persist($object);
    }

    /**
     * Flush objects
     *
     * @param mixed $manager
     */
    private function flush($manager)
    {
        $manager->flush();
    }
}
