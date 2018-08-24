<?php

namespace Oro\Bundle\ApiBundle\Config;

use Oro\Bundle\ApiBundle\Util\ConfigUtil;

class SortersConfigLoader extends AbstractConfigLoader
{
    /** @var array */
    protected $fieldMethodMap = [
        SorterFieldConfig::EXCLUDE => 'setExcluded',
    ];

    /**
     * {@inheritdoc}
     */
    public function load(array $config)
    {
        $sorters = new SortersConfig();
        foreach ($config as $key => $value) {
            if (ConfigUtil::FIELDS === $key) {
                $this->loadFields($sorters, $value);
            } else {
                $this->loadConfigValue($sorters, $key, $value);
            }
        }

        return $sorters;
    }

    /**
     * @param SortersConfig $sorters
     * @param array|null    $fields
     */
    protected function loadFields(SortersConfig $sorters, array $fields = null)
    {
        if (!empty($fields)) {
            foreach ($fields as $name => $config) {
                $sorters->addField($name, $this->loadField($config));
            }
        }
    }

    /**
     * @param array|null $config
     *
     * @return SorterFieldConfig
     */
    protected function loadField(array $config = null)
    {
        $sorter = new SorterFieldConfig();
        if (!empty($config)) {
            foreach ($config as $key => $value) {
                $this->loadConfigValue($sorter, $key, $value, $this->fieldMethodMap);
            }
        }

        return $sorter;
    }
}
