<?php
/**
 *
 *
 * @author Roman Piták <roman@pitak.net>
 *
 */

namespace DotMailer\Api\DataTypes;

final class XsString implements IDataType
{

    /** @var string */
    private $value;

    public function __construct($value)
    {

        if (!is_string($value)) {
            $value = (string)$value;
        }

        $this->value = $value;
    }

    /*
     * ========== IDataType ==========
     */

    public function __toString()
    {
        return (string)$this->value;
    }

    public function toArray()
    {
        return (string)$this;
    }

    public function toJson()
    {
        return json_encode($this->value);
    }
}
