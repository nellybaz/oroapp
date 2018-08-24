<?php

namespace Oro\Bundle\IntegrationBundle\Provider;

interface ConnectorInterface
{
    const CONTEXT_CONNECTOR_DATA_KEY = 'connectorData';

    /**
     * Returns label for UI
     *
     * @return string
     */
    public function getLabel();

    /**
     * Returns entity name that will be used for matching "import processor"
     *
     * @return string
     */
    public function getImportEntityFQCN();

    /**
     * Returns job name for import
     *
     * @return string
     */
    public function getImportJobName();

    /**
     * Returns type name, the same as registered in service tag
     *
     * @return string
     */
    public function getType();
}
