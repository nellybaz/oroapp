<?php

namespace Oro\Bundle\ProductBundle\ImportExport\DataConverter;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Bundle\ImportExportBundle\Converter\RelationCalculatorInterface;
use Oro\Bundle\LocaleBundle\ImportExport\DataConverter\LocalizedFallbackValueAwareDataConverter;
use Oro\Bundle\ProductBundle\ImportExport\Event\ProductDataConverterEvent;

class ProductDataConverter extends LocalizedFallbackValueAwareDataConverter
{
    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * {@inheritdoc}
     */
    protected function getBackendHeader()
    {
        $backendHeader = parent::getBackendHeader();

        // According to business logic Product should have Primary and Additional unit precisions.
        // But Product Entity has primaryUnitPrecision property and unitPrecisions property which
        // is collection of all unit precisions. AdditionalUnitPrecisions is calculated by excluding
        // PrimaryUnitPrecision from all UnitPrecisions. This fix was done in order to display
        // correct column headers during Products Export.
        foreach ($backendHeader as $k => &$v) {
            $arr = explode(':', $v);
            if ($arr[0] === 'unitPrecisions') {
                if ((int)$arr[1] === 0) {
                    unset($backendHeader[$k]);
                } else {
                    $arr[0] = 'additionalUnitPrecisions';
                    --$arr[1];
                    $v = implode(':', $arr);
                }
            }
        }
        unset($v);

        if ($this->eventDispatcher) {
            $event = new ProductDataConverterEvent($backendHeader);
            $this->eventDispatcher->dispatch(ProductDataConverterEvent::BACKEND_HEADER, $event);
            $backendHeader = $event->getData();
        }

        return $backendHeader;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToExportFormat(array $exportedRecord, $skipNullValues = true)
    {
        $data = parent::convertToExportFormat($exportedRecord, $skipNullValues);

        if ($this->eventDispatcher) {
            $event = new ProductDataConverterEvent($data);
            $this->eventDispatcher->dispatch(ProductDataConverterEvent::CONVERT_TO_EXPORT, $event);
            $data = $event->getData();
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToImportFormat(array $importedRecord, $skipNullValues = true)
    {
        $data = parent::convertToImportFormat($importedRecord, $skipNullValues);

        if ($this->eventDispatcher) {
            $event = new ProductDataConverterEvent($data);
            $this->eventDispatcher->dispatch(ProductDataConverterEvent::CONVERT_TO_IMPORT, $event);
            $data = $event->getData();
        }

        return $data;
    }

    /**
     * @param RelationCalculatorInterface $relationCalculator
     */
    public function setRelationCalculator(RelationCalculatorInterface $relationCalculator)
    {
        $this->relationCalculator = $relationCalculator;
    }
}
