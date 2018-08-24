<?php

namespace Oro\Bundle\ImportExportBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class FormatConversionEvent extends Event
{
    /** @var array */
    protected $record = [];

    /** @var array */
    protected $result = [];

    /**
     * @param array $record
     * @param array $result
     */
    public function __construct(array $record, array $result = [])
    {
        $this->record = $record;
        $this->result = $result;
    }

    /**
     * @return array
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * @return array
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param array $record
     *
     * @return $this
     */
    public function setRecord(array $record)
    {
        $this->record = $record;

        return $this;
    }

    /**
     * @param array $result
     *
     * @return $this
     */
    public function setResult(array $result)
    {
        $this->result = $result;

        return $this;
    }
}
