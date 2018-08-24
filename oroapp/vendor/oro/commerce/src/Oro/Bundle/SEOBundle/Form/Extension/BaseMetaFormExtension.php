<?php

namespace Oro\Bundle\SEOBundle\Form\Extension;

use Oro\Bundle\LocaleBundle\Form\Type\LocalizedFallbackValueCollectionType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Valid;

abstract class BaseMetaFormExtension extends AbstractTypeExtension
{
    /**
     * Return the name of the extend entity which will be used for determining field labels
     * @return string
     */
    abstract public function getMetaFieldLabelPrefix();

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'metaTitles',
                LocalizedFallbackValueCollectionType::NAME,
                [
                    'label' => $this->getMetaFieldLabelPrefix() . '.meta_titles.label',
                    'required' => false,
                    'type' => 'text',
                    'constraints' => new Valid()
                ]
            )
            ->add(
                'metaDescriptions',
                LocalizedFallbackValueCollectionType::NAME,
                [
                    'label' => $this->getMetaFieldLabelPrefix() . '.meta_descriptions.label',
                    'required' => false,
                    'field' => 'text',
                    'type' => 'textarea',
                    'constraints' => new Valid()
                ]
            )
            ->add(
                'metaKeywords',
                LocalizedFallbackValueCollectionType::NAME,
                [
                    'label' => $this->getMetaFieldLabelPrefix() . '.meta_keywords.label',
                    'required' => false,
                    'field' => 'text',
                    'type' => 'textarea',
                    'constraints' => new Valid()
                ]
            );
    }
}
