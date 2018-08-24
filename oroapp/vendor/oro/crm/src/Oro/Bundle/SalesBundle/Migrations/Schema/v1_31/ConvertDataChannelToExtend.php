<?php

namespace Oro\Bundle\SalesBundle\Migrations\Schema\v1_31;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\EntityConfigBundle\Entity\ConfigModel;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\EntityExtendBundle\Migration\ExtendOptionsManager;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ConvertToExtendExtension;
use Oro\Bundle\EntityExtendBundle\Migration\Extension\ConvertToExtendExtensionAwareInterface;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class ConvertDataChannelToExtend implements Migration, ConvertToExtendExtensionAwareInterface
{
    /** @var ConvertToExtendExtension */
    protected $сonvertToExtendExtension;

    /**
     * {@inheritdoc}
     */
    public function setConvertToExtendExtension(ConvertToExtendExtension $convertToExtendExtension)
    {
        $this->сonvertToExtendExtension = $convertToExtendExtension;
    }

    /**
     * Changes account_id to onDelete=CASCADE
     *
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        $this->сonvertToExtendExtension->manyToOneRelation(
            $queries,
            $schema,
            'Oro\Bundle\SalesBundle\Entity\Opportunity',
            'dataChannel',
            'orocrm_sales_opportunity',
            'data_channel',
            'orocrm_channel',
            'name',
            [
                ExtendOptionsManager::MODE_OPTION => ConfigModel::MODE_READONLY,
                'extend' => [
                    'owner' => ExtendScope::OWNER_CUSTOM,
                    'is_extend' => true,
                ],
                'form' => [
                    'is_enabled' => true,
                    'form_type' => 'oro_channel_select_type'
                ],
                'view' => ['is_displayable' => true],
                'merge' => ['display' => false],
                'dataaudit' => ['auditable' => false]
            ]
        );
        $this->сonvertToExtendExtension->manyToOneRelation(
            $queries,
            $schema,
            'Oro\Bundle\SalesBundle\Entity\Lead',
            'dataChannel',
            'orocrm_sales_lead',
            'data_channel',
            'orocrm_channel',
            'name',
            [
                ExtendOptionsManager::MODE_OPTION => ConfigModel::MODE_READONLY,
                'extend' => [
                    'owner' => ExtendScope::OWNER_CUSTOM,
                    'is_extend' => true,
                ],
                'form' => [
                    'is_enabled' => true,
                    'form_type' => 'oro_channel_select_type'
                ],
                'view' => ['is_displayable' => true],
                'merge' => ['display' => false],
                'dataaudit' => ['auditable' => false]
            ]
        );
        $this->сonvertToExtendExtension->manyToOneRelation(
            $queries,
            $schema,
            'Oro\Bundle\SalesBundle\Entity\SalesFunnel',
            'dataChannel',
            'orocrm_sales_funnel',
            'data_channel',
            'orocrm_channel',
            'name',
            [
                ExtendOptionsManager::MODE_OPTION => ConfigModel::MODE_READONLY,
                'extend' => [
                    'owner' => ExtendScope::OWNER_CUSTOM,
                    'is_extend' => true,
                ],
                'form' => [
                    'is_enabled' => true,
                    'form_type' => 'oro_channel_select_type'
                ],
                'view' => ['is_displayable' => true],
                'merge' => ['display' => false],
                'dataaudit' => ['auditable' => false]
            ]
        );
    }
}
