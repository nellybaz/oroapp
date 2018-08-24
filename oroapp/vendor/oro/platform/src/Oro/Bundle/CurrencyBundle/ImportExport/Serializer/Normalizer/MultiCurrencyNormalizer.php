<?php

namespace Oro\Bundle\CurrencyBundle\ImportExport\Serializer\Normalizer;

use Oro\Bundle\ImportExportBundle\Serializer\Normalizer\NormalizerInterface;
use Oro\Bundle\CurrencyBundle\Formatter\NumberFormatter;
use Oro\Bundle\CurrencyBundle\Entity\MultiCurrency;

class MultiCurrencyNormalizer implements NormalizerInterface
{
    /**
     * @var NumberFormatter
     */
    private $formatter;

    /**
     * MultiCurrencyNormalizer constructor.
     *
     * @param NumberFormatter $formatter
     */
    public function __construct(NumberFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null, array $context = [])
    {
        return $data instanceof MultiCurrency;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = [])
    {
        return $this->formatter->formatCurrency($object->getValue(), $object->getCurrency());
    }
}
