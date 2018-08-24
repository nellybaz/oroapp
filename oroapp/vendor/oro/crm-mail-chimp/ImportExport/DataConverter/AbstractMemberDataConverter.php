<?php

namespace Oro\Bundle\MailChimpBundle\ImportExport\DataConverter;

abstract class AbstractMemberDataConverter extends IntegrationAwareDataConverter
{
    /**
     * {@inheritdoc}
     */
    protected function getHeaderConversionRules()
    {
        return [
            'status' => 'status',
            'list_id' => 'subscribersList:originId',
            'channel_id' => 'channel:id',
            'subscribersList_id' => 'subscribersList:id',
            'email' => 'email',
            'MEMBER_RATING' => 'memberRating',
            'OPTIN_TIME' => 'optedInAt',
            'OPTIN_IP' => 'optedInIpAddress',
            'CONFIRM_TIME' => 'confirmedAt',
            'CONFIRM_IP' => 'confirmedIpAddress',
            'LATITUDE' => 'latitude',
            'LONGITUDE' => 'longitude',
            'GMTOFF' => 'gmtOffset',
            'DSTOFF' => 'dstOffset',
            'TIMEZONE' => 'timezone',
            'CC' => 'cc',
            'REGION' => 'region',
            'LAST_CHANGED' => 'lastChangedAt',
            'LEID' => 'originId',
            'EUID' => 'euid',
            'NOTES' => 'notes',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function convertToImportFormat(array $importedRecord, $skipNullValues = true)
    {
        if ($this->context->hasOption('channel')) {
            $channel = $this->context->getOption('channel');
            $importedRecord['subscribersList:channel:id'] = $channel;
        }

        $mergeVarValues = [];

        foreach ($importedRecord as $key => $value) {
            if ($this->isMergeVarValueColumn($key)) {
                $mergeVarValues[$key] = $value;
                unset($importedRecord[$key]);
            }
        }

        $importedRecord['mergeVarValues'] = $mergeVarValues;

        return parent::convertToImportFormat($importedRecord, $skipNullValues);
    }

    /**
     * @param string $name
     * @return bool
     */
    protected function isMergeVarValueColumn($name)
    {
        $headerConversionRules = $this->getHeaderConversionRules();
        return !isset($headerConversionRules[$name]) && $name !== 'subscribersList:channel:id';
    }

    /**
     * {@inheritdoc}
     */
    protected function getBackendHeader()
    {
        throw new \Exception('Normalization is not implemented!');
    }
}
