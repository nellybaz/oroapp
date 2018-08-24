<?php

namespace Oro\Bundle\DataGridBundle\Datasource;

use Oro\Bundle\DataGridBundle\Exception\LogicException;

interface ResultRecordInterface
{
    /**
     * Get value of record property by name
     *
     * @param  string $name
     *
     * @return mixed
     * @throws LogicException When cannot get value
     */
    public function getValue($name);

    /**
     * Get root entity of current result record
     *
     * @return object|null
     */
    public function getRootEntity();
}
