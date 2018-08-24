<?php

namespace Oro\Bundle\SalesBundle\Migrations\Schema\v1_26;

use Doctrine\DBAL\Schema\Schema;

use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\OrderedMigrationInterface;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;
use Oro\Bundle\WorkflowBundle\Migrations\Schema\RemoveWorkflowFieldsTrait;

class RemoveWorkflowFields implements Migration, OrderedMigrationInterface
{
    use RemoveWorkflowFieldsTrait;

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 100;
    }

    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        //workflow now has no direct relations
        $this->removeWorkflowFields($schema->getTable('orocrm_sales_lead'));
        $this->removeWorkflowFields($schema->getTable('orocrm_sales_opportunity'));
        $this->removeWorkflowFields($schema->getTable('orocrm_sales_funnel'));
    }
}
