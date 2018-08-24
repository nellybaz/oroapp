<?php

namespace Oro\Bundle\DemoDataBundle\Migrations\Data\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Oro\Bundle\SecurityBundle\Acl\Persistence\AclManager;
use Oro\Bundle\UserBundle\Entity\Role;

class UpdateEmailAccessLevels extends AbstractFixture implements ContainerAwareInterface, DependentFixtureInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return ['Oro\Bundle\DemoDataBundle\Migrations\Data\ORM\LoadRolesData'];
    }

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Load ACL for security roles
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->objectManager = $manager;

        /** @var AclManager $aclManager */
        $aclManager = $this->container->get('oro_security.acl.manager');

        if ($aclManager->isAclEnabled()) {
            $this->updateUserRole($aclManager);
            $aclManager->flush();
        }
    }

    protected function updateUserRole(AclManager $manager)
    {
        $roles = [
            'ROLE_ONLINE_SALES_REP',
            'ROLE_MARKETING_MANAGER',
            'ROLE_LEADS_DEVELOPMENT_REP',
        ];
        $oid = $manager->getOid('entity:Oro\Bundle\EmailBundle\Entity\EmailUser');

        foreach ($roles as $roleName) {
            $role = $this->getRole($roleName);
            if ($role) {
                $sid = $manager->getSid($role);
                $mask = 0;
                foreach (['VIEW', 'CREATE', 'EDIT'] as $permission) {
                    $maskBuilder = $manager->getMaskBuilder($oid, $permission);
                    $maskBuilder->add($permission . '_BASIC');
                    $mask |= $maskBuilder->get();
                }
                $manager->setPermission($sid, $oid, $mask);
            }
        }
    }

    /**
     * @param string $roleName
     * @return Role|null
     */
    protected function getRole($roleName)
    {
        return $this->objectManager->getRepository('OroUserBundle:Role')->findOneBy(['role' => $roleName]);
    }
}
