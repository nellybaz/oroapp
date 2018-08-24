<?php

namespace Oro\Bundle\UserBundle\Provider;

use Oro\Bundle\ConfigBundle\Provider\AbstractProvider;

class UserConfigurationFormProvider extends AbstractProvider
{
    const USER_TREE_NAME  = 'user_configuration';

    /**
     * @var string
     */
    protected $parentCheckboxLabel = 'oro.user.user_configuration.use_default';

    /**
     * {@inheritdoc}
     */
    public function getTree()
    {
        return $this->getTreeData(self::USER_TREE_NAME, self::CORRECT_FIELDS_NESTING_LEVEL);
    }

    /**
     * {@inheritdoc}
     */
    public function getJsTree()
    {
        return $this->getJsTreeData(self::USER_TREE_NAME, self::CORRECT_MENU_NESTING_LEVEL);
    }

    /**
     * @param string $label
     */
    public function setParentCheckboxLabel($label)
    {
        $this->parentCheckboxLabel = $label;
    }

    /**
     * {@inheritdoc}
     */
    protected function getParentCheckboxLabel()
    {
        return $this->parentCheckboxLabel;
    }
}
