<?php

namespace Oro\Bundle\EmailBundle\Migrations\Data\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Oro\Bundle\SecurityBundle\Acl\Persistence\AclManager;
use Oro\Bundle\UserBundle\Migrations\Data\ORM\LoadRolesData;
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
        return ['Oro\Bundle\SecurityBundle\Migrations\Data\ORM\LoadAclRoles'];
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

    /**
     * @param AclManager $manager
     */
    protected function updateUserRole(AclManager $manager)
    {
        $roles = [LoadRolesData::ROLE_USER, LoadRolesData::ROLE_MANAGER];
        foreach ($roles as $roleName) {
            $role = $this->getRole($roleName);
            if ($role) {
                $sid = $manager->getSid($role);
                $oid = $manager->getOid('entity:Oro\Bundle\EmailBundle\Entity\EmailUser');

                $extension = $manager->getExtensionSelector()->select($oid);
                $maskBuilders = $extension->getAllMaskBuilders();

                foreach ($maskBuilders as $maskBuilder) {
                    foreach (['VIEW_BASIC', 'CREATE_BASIC', 'EDIT_BASIC'] as $permission) {
                        if ($maskBuilder->hasMask('MASK_' . $permission)) {
                            $maskBuilder->add($permission);
                        }
                    }

                    $manager->setPermission($sid, $oid, $maskBuilder->get());
                }
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
