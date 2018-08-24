<?php

namespace Oro\Bundle\CampaignBundle\Form\EventListener;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;

use Oro\Bundle\EmailBundle\Entity\Repository\EmailTemplateRepository;
use Oro\Bundle\FormBundle\Utils\FormUtils;
use Oro\Bundle\MarketingListBundle\Entity\MarketingList;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;

class TransportSettingsEmailTemplateListener implements EventSubscriberInterface
{
    /**
     * @var RegistryInterface
     */
    protected $registry;

    /**
     * @var TokenAccessorInterface
     */
    protected $tokenAccessor;

    /**
     * @param RegistryInterface      $registry
     * @param TokenAccessorInterface $tokenAccessor
     */
    public function __construct(RegistryInterface $registry, TokenAccessorInterface $tokenAccessor)
    {
        $this->registry = $registry;
        $this->tokenAccessor = $tokenAccessor;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SET_DATA => 'preSet',
            FormEvents::PRE_SUBMIT   => 'preSubmit'
        ];
    }

    /**
     * Fill template choices based on Existing EmailCampaign{MarketingList} entity class.
     *
     * @param FormEvent $event
     */
    public function preSet(FormEvent $event)
    {
        $entityName = $event->getForm()->getParent()->getData()->getEntityName();
        $this->fillEmailTemplateChoices($event->getForm(), $entityName);
    }

    /**
     * Fill template choices based on new EmailCampaign{MarketingList} entity class
     *
     * @param FormEvent $event
     */
    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        if (empty($data['parentData']['marketingList'])) {
            return;
        }

        $marketingList = $this->getMarketingListById((int)$data['parentData']['marketingList']);
        if (is_null($marketingList)) {
            return;
        }

        $entityName = $marketingList->getEntity();
        $this->fillEmailTemplateChoices($event->getForm(), $entityName);
    }

    /**
     * @param int $id
     *
     * @return MarketingList
     */
    protected function getMarketingListById($id)
    {
        return $this->registry
            ->getRepository('OroMarketingListBundle:MarketingList')
            ->find($id);
    }

    /**
     * @param FormInterface $form
     * @param string        $entityName
     */
    protected function fillEmailTemplateChoices(FormInterface $form, $entityName)
    {
        FormUtils::replaceField(
            $form,
            'template',
            [
                'selectedEntity' => $entityName,
                'query_builder'  => function (EmailTemplateRepository $templateRepository) use ($entityName) {
                    return $templateRepository->getEntityTemplatesQueryBuilder(
                        $entityName,
                        $this->tokenAccessor->getOrganization(),
                        true
                    );
                },
            ],
            ['choice_list', 'choices']
        );
    }
}
