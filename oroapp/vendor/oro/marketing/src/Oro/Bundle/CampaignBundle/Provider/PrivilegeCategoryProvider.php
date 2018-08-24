<?php

namespace Oro\Bundle\CampaignBundle\Provider;

use Oro\Bundle\UserBundle\Model\PrivilegeCategory;
use Oro\Bundle\UserBundle\Provider\PrivilegeCategoryProviderInterface;

class PrivilegeCategoryProvider implements PrivilegeCategoryProviderInterface
{
    const NAME = 'marketing';
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getRolePrivilegeCategory()
    {
        return new PrivilegeCategory(self::NAME, 'oro.campaign.privilege.category.marketing.label', true, 5);
    }
}
