<?php

namespace Oro\Bundle\FallbackBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;

use Oro\Bundle\LocaleBundle\Form\Type\FallbackPropertyType;
use Oro\Bundle\LocaleBundle\Form\Type\FallbackValueType;
use Oro\Bundle\LocaleBundle\Model\FallbackType;
use Oro\Bundle\WebsiteBundle\Entity\Website;

class WebsiteCollectionType extends AbstractType
{
    const NAME = 'oro_fallback_website_collection';

    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /**
     * @return Website[]
     */
    protected $websites;

    /**
     * @var string
     */
    protected $websiteClass;

    /**
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        $this->registry = $registry;
    }

    /**
     * @param string $websiteClass
     */
    public function setWebsiteClass($websiteClass)
    {
        $this->websiteClass = $websiteClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setRequired([
            'type',
        ]);

        $resolver->setDefaults([
            'options'           => [],
            'fallback_type'     => FallbackPropertyType::NAME,
            'enabled_fallbacks' => [],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        foreach ($this->getWebsites() as $website) {
            $builder->add(
                $website->getId(),
                FallbackValueType::NAME,
                [
                    'label'             => $website->getName(),
                    'type'              => $options['type'],
                    'options'           => $options['options'],
                    'fallback_type'     => $options['fallback_type'],
                    'enabled_fallbacks' => $options['enabled_fallbacks'],
                ]
            );
        }

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $data = $event->getData();
            $filledData = $this->fillDefaultData($data);
            $event->setData($filledData);
        });
    }

    /**
     * @return Website[]
     */
    protected function getWebsites()
    {
        if (null === $this->websites) {
            /** @var EntityRepository $entityRepository */
            $entityRepository = $this->registry->getRepository($this->websiteClass);

            $this->websites = $entityRepository->createQueryBuilder('website')
                ->addOrderBy('website.id', 'ASC')
                ->getQuery()
                ->getResult();
        }

        return $this->websites;
    }

    /**
     * @param mixed $data
     * @return array
     */
    public function fillDefaultData($data)
    {
        if (!$data) {
            $data = [];
        }

        foreach ($this->getWebsites() as $website) {
            $websiteId = $website->getId();
            if (!isset($data[$websiteId])) {
                $data[$websiteId] = new FallbackType(FallbackType::SYSTEM);
            }
        }

        return $data;
    }
}
