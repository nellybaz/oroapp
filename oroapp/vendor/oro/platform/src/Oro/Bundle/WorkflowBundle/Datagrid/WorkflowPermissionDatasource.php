<?php

namespace Oro\Bundle\WorkflowBundle\Datagrid;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\UserBundle\Provider\RolePrivilegeAbstractProvider;
use Oro\Bundle\EntityConfigBundle\Config\ConfigManager;
use Oro\Bundle\DataGridBundle\Datagrid\DatagridInterface;
use Oro\Bundle\DataGridBundle\Datasource\DatasourceInterface;
use Oro\Bundle\DataGridBundle\Datasource\ResultRecord;
use Oro\Bundle\SecurityBundle\Acl\AccessLevel;
use Oro\Bundle\SecurityBundle\Form\Type\AclAccessLevelSelectorType;
use Oro\Bundle\SecurityBundle\Acl\Permission\PermissionManager;
use Oro\Bundle\SecurityBundle\Model\AclPermission;
use Oro\Bundle\SecurityBundle\Model\AclPrivilege;
use Oro\Bundle\UserBundle\Provider\RolePrivilegeCategoryProvider;
use Oro\Bundle\UserBundle\Form\Handler\AclRoleHandler;
use Oro\Bundle\UserBundle\Entity\AbstractRole;

class WorkflowPermissionDatasource extends RolePrivilegeAbstractProvider implements DatasourceInterface
{
    /** @var PermissionManager */
    protected $permissionManager;

    /** @var ConfigManager */
    protected $configEntityManager;

    /** @var AbstractRole */
    protected $role;

    /**
     * @param TranslatorInterface           $translator
     * @param PermissionManager             $permissionManager
     * @param AclRoleHandler                $aclRoleHandler
     * @param RolePrivilegeCategoryProvider $categoryProvider
     * @param ConfigManager                 $configEntityManager
     */
    public function __construct(
        TranslatorInterface $translator,
        PermissionManager $permissionManager,
        AclRoleHandler $aclRoleHandler,
        RolePrivilegeCategoryProvider $categoryProvider,
        ConfigManager $configEntityManager
    ) {
        parent::__construct($translator, $categoryProvider, $aclRoleHandler);
        $this->permissionManager = $permissionManager;
        $this->configEntityManager = $configEntityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function process(DatagridInterface $grid, array $config)
    {
        $this->role = $grid->getParameters()->get('role');
        $grid->setDatasource(clone $this);
    }

    /**
     * {@inheritdoc}
     */
    public function getResults()
    {
        $gridData = [];
        $allPrivileges = $this->preparePrivileges($this->role, 'workflow');
        $categories = [];
        foreach ($allPrivileges as $privilege) {
            /** @var AclPrivilege $privilege */
            $item = [
                'identity'    => $privilege->getIdentity()->getId(),
                'label'       => $privilege->getIdentity()->getName(),
                'group'       => $this->getPrivilegeCategory($privilege, $categories),
                'permissions' => [],
                'fields'      => $this->getFieldPrivileges($privilege->getFields())
            ];
            $item = $this->preparePermissions($privilege, $item);
            $gridData[] = new ResultRecord($item);
        }
        return $gridData;
    }

    /**
     * @param ArrayCollection $fields
     *
     * @return array
     */
    protected function getFieldPrivileges(ArrayCollection $fields)
    {
        $result = [];
        foreach ($fields as $privilege) {
            /** @var AclPrivilege $privilege */
            $item = [
                'identity'    => $privilege->getIdentity()->getId(),
                'label'       => $privilege->getIdentity()->getName(),
                'description' => $privilege->getDescription(),
                'permissions' => []
            ];
            $result[] = $this->preparePermissions($privilege, $item);
        }
        return $result;
    }

    /**
     * @param AclPrivilege $privilege
     * @param array        $item
     *
     * @return mixed
     */
    protected function preparePermissions(AclPrivilege $privilege, $item)
    {
        $permissions = [];
        foreach ($privilege->getPermissions() as $permission) {
            $privilegePermission = $this->getPrivilegePermission(
                $privilege,
                $permission
            );
            $permissions[$permission->getName()] = $privilegePermission;
        }
        $item['permissions'] = array_values($permissions);

        return $item;
    }

    /**
     * @param AclPrivilege  $privilege
     * @param AclPermission $permission
     *
     * @return array
     */
    protected function getPrivilegePermission(
        AclPrivilege $privilege,
        AclPermission $permission
    ) {
        $accessLevel = $permission->getAccessLevel();
        $accessLevelName = AccessLevel::getAccessLevelName($accessLevel);
        $valueText = $this->getRoleTranslationPrefix() . (empty($accessLevelName) ? 'NONE' : $accessLevelName);
        $valueText = $this->translator->trans($valueText);

        return [
            'id'                 => uniqid(),
            'name'               => $permission->getName(),
            'label'              => $this->translator->trans('oro.workflow.permission.' . $permission->getName()),
            'description'        => '',
            'identity'           => $privilege->getIdentity()->getId(),
            'access_level'       => $accessLevel,
            'access_level_label' => $valueText
        ];
    }

    /**
     * @return string
     */
    protected function getRoleTranslationPrefix()
    {
        return AclAccessLevelSelectorType::TRANSLATE_KEY_ACCESS_LEVEL . '.';
    }
}
