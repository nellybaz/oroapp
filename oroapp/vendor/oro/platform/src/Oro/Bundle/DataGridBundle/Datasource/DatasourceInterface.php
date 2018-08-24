<?php

namespace Oro\Bundle\DataGridBundle\Datasource;

use Oro\Bundle\DataGridBundle\Datagrid\DatagridInterface;

interface DatasourceInterface
{
    /**
     * Add source to datagrid
     *
     * @param DatagridInterface $grid
     * @param array             $config
     */
    public function process(DatagridInterface $grid, array $config);

    /**
     * Returns data extracted via datasource
     *
     * @return ResultRecordInterface[]
     */
    public function getResults();
}
