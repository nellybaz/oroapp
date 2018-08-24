<?php

namespace Oro\Bundle\SearchBundle\Utils;

use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\FilterBundle\Form\Type\Filter\TextFilterType;

class SearchAllText
{
    /**
     * @var TranslatorInterface
     */
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @return array
     */
    public function getOperatorChoices()
    {
        return [
            TextFilterType::TYPE_CONTAINS => $this->translator->trans('oro.filter.form.label_type_contains'),
            TextFilterType::TYPE_NOT_CONTAINS => $this->translator->trans('oro.filter.form.label_type_not_contains')
        ];
    }
}
