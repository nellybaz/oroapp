<?php

namespace Oro\Bundle\MailChimpBundle\ImportExport\Serializer;

use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\DataGridBundle\Extension\Formatter\Property\PropertyInterface;
use Oro\Bundle\ImportExportBundle\Field\DatabaseHelper;
use Oro\Bundle\EntityBundle\Helper\FieldHelper;
use Oro\Bundle\ImportExportBundle\Serializer\Normalizer\ConfigurableEntityNormalizer;
use Oro\Bundle\LocaleBundle\Formatter\NumberFormatter;
use Oro\Bundle\LocaleBundle\Formatter\DateTimeFormatter;
use Oro\Bundle\MarketingListBundle\Entity\MarketingList;
use Oro\Bundle\MailChimpBundle\Entity\ExtendedMergeVar;
use Oro\Bundle\MailChimpBundle\Entity\MemberExtendedMergeVar;
use Oro\Bundle\MailChimpBundle\Entity\StaticSegment;
use Oro\Bundle\MailChimpBundle\Model\MarketingList\DataGridProviderInterface;
use Oro\Bundle\QueryDesignerBundle\Grid\QueryDesignerQueryConfiguration;

class MemberExtendedMergeVarSerializer extends ConfigurableEntityNormalizer
{
    const YES_LABEL_KEY = 'oro.filter.form.label_type_yes';
    const NO_LABEL_KEY  = 'oro.filter.form.label_type_no';

    /**
     * @var DatabaseHelper
     */
    protected $databaseHelper;

    /**
     * @var DataGridProviderInterface
     */
    protected $dataGridProvider;

    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @var NumberFormatter
     */
    protected $numberFormatter;

    /**
     * @var DateTimeFormatter
     */
    protected $dateTimeFormatter;

    /**
     * @var string
     */
    protected $memberExtendedMergeVarClassName;

    /**
     * @param FieldHelper $fieldHelper
     * @param DatabaseHelper $databaseHelper
     * @param DataGridProviderInterface $dataGridProvider
     * @param TranslatorInterface $translator
     * @param NumberFormatter $numberFormatter
     * @param DateTimeFormatter $dateTimeFormatter
     * @param string $memberExtendedMergeVarClassName
     */
    public function __construct(
        FieldHelper $fieldHelper,
        DatabaseHelper $databaseHelper,
        DataGridProviderInterface $dataGridProvider,
        TranslatorInterface $translator,
        NumberFormatter $numberFormatter,
        DateTimeFormatter $dateTimeFormatter,
        $memberExtendedMergeVarClassName
    ) {
        parent::__construct($fieldHelper);

        if (!is_string($memberExtendedMergeVarClassName) || empty($memberExtendedMergeVarClassName)) {
            throw new \InvalidArgumentException('MemberExtendedMergeVar class name should be provided.');
        }

        $this->databaseHelper                  = $databaseHelper;
        $this->dataGridProvider                = $dataGridProvider;
        $this->translator                      = $translator;
        $this->numberFormatter                 = $numberFormatter;
        $this->dateTimeFormatter               = $dateTimeFormatter;
        $this->memberExtendedMergeVarClassName = $memberExtendedMergeVarClassName;
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        /** @var MemberExtendedMergeVar $entity */
        $entity = parent::denormalize($data, $class, $format, $context);

        /** @var StaticSegment $staticSegment */
        $staticSegment = $this->databaseHelper->getEntityReference($entity->getStaticSegment());

        if (!$staticSegment) {
            return $entity;
        }

        $extendedMergeVars = $staticSegment->getSyncedExtendedMergeVars();

        if ($extendedMergeVars->isEmpty()) {
            return $entity;
        }

        $columns = $this->getColumns($staticSegment->getMarketingList());
        $columnAliases = $this->getColumnAliases($staticSegment->getMarketingList());

        $mergeVarValues = [];
        foreach ($extendedMergeVars as $extendedMergeVar) {
            $value = $this->getValue($extendedMergeVar, $data, $columns, $columnAliases);
            if ($value) {
                $mergeVarValues[$extendedMergeVar->getTag()] = $value;
            }
        }

        $this->fieldHelper->setObjectValue($entity, 'merge_var_values', $mergeVarValues);

        return $entity;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization($data, $type, $format = null, array $context = [])
    {
        return $type === $this->memberExtendedMergeVarClassName;
    }

    /**
     * @param ExtendedMergeVar $extendedMergeVar
     * @param array $itemData
     * @param array $columns
     * @param array $columnAliases
     * @return null|string
     */
    protected function getValue(
        ExtendedMergeVar $extendedMergeVar,
        array $itemData,
        array $columns,
        array $columnAliases
    ) {
        $value = null;
        if (array_key_exists($extendedMergeVar->getName(), $columnAliases)) {
            $columnAlias = $columnAliases[$extendedMergeVar->getName()];
            if (!empty($itemData[$columnAlias]) && !empty($columns[$columnAlias])) {
                $value = $this->applyFrontendFormatting($itemData[$columnAlias], $columns[$columnAlias]);
            }
        }

        return $value;
    }

    /**
     * @param string $value
     * @param array $options
     * @return string
     */
    protected function applyFrontendFormatting($value, array $options)
    {
        $frontendType = isset($options['frontend_type']) ? $options['frontend_type'] : null;
        switch ($frontendType) {
            case PropertyInterface::TYPE_DATE:
                $value = $this->dateTimeFormatter->formatDate($value);
                break;
            case PropertyInterface::TYPE_DATETIME:
                $value = $this->dateTimeFormatter->format($value);
                break;
            case PropertyInterface::TYPE_DECIMAL:
                $value = $this->numberFormatter->formatDecimal($value);
                break;
            case PropertyInterface::TYPE_INTEGER:
                $value = $this->numberFormatter->formatDecimal($value);
                break;
            case PropertyInterface::TYPE_BOOLEAN:
                $value = $this->translator->trans((bool)$value ? self::YES_LABEL_KEY : self::NO_LABEL_KEY);
                break;
            case PropertyInterface::TYPE_PERCENT:
                $value = $this->numberFormatter->formatPercent($value);
                break;
            case PropertyInterface::TYPE_CURRENCY:
                $value = $this->numberFormatter->formatCurrency($value);
                break;
            case PropertyInterface::TYPE_SELECT:
                if (isset($options['choices'][$value])) {
                    $value = $this->translator->trans($options['choices'][$value]);
                }
                break;
        }

        return $value;
    }

    /**
     * @param MarketingList $marketingList
     * @return array
     */
    protected function getColumns(MarketingList $marketingList)
    {
        return $this->dataGridProvider->getDataGridConfiguration($marketingList)->offsetGet('columns');
    }

    /**
     * @param MarketingList $marketingList
     * @return array
     */
    protected function getColumnAliases(MarketingList $marketingList)
    {
        return $this->dataGridProvider->getDataGridConfiguration($marketingList)
            ->offsetGetByPath(QueryDesignerQueryConfiguration::COLUMN_ALIASES, []);
    }
}
