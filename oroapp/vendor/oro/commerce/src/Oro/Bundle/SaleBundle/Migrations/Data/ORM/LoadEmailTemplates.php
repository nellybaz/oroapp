<?php

namespace Oro\Bundle\SaleBundle\Migrations\Data\ORM;

use Oro\Bundle\EmailBundle\Migrations\Data\ORM\AbstractEmailFixture;

class LoadEmailTemplates extends AbstractEmailFixture
{
    /**
     * {@inheritdoc}
     */
    public function getEmailsDir()
    {
        return $this->container
            ->get('kernel')
            ->locateResource('@OroSaleBundle/Migrations/Data/ORM/emails');
    }
}
