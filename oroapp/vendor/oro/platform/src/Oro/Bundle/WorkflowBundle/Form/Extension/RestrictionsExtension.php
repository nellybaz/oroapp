<?php

namespace Oro\Bundle\WorkflowBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\FormBundle\Utils\FormUtils;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\WorkflowBundle\Model\WorkflowManager;
use Oro\Bundle\WorkflowBundle\Restriction\RestrictionManager;
use Oro\Bundle\FormBundle\Form\Extension\Traits\FormExtendedTypeTrait;

class RestrictionsExtension extends AbstractTypeExtension
{
    use FormExtendedTypeTrait;
    
    /**
     * @var WorkflowManager
     */
    protected $workflowManager;
    
    /**
     * @var DoctrineHelper
     */
    protected $doctrineHelper;

    /**
     * @var RestrictionManager
     */
    protected $restrictionsManager;

    /**
     * @param WorkflowManager    $workflowManager
     * @param DoctrineHelper     $doctrineHelper
     * @param RestrictionManager $restrictionManager
     */
    public function __construct(
        WorkflowManager $workflowManager,
        DoctrineHelper $doctrineHelper,
        RestrictionManager $restrictionManager
    ) {
        $this->workflowManager     = $workflowManager;
        $this->doctrineHelper      = $doctrineHelper;
        $this->restrictionsManager = $restrictionManager;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($options['disable_workflow_restrictions'] ||
            empty($options['data_class']) ||
            !$this->restrictionsManager->hasEntityClassRestrictions($options['data_class'])
        ) {
            return;
        }

        $builder->addEventListener(
            FormEvents::POST_SET_DATA,
            [$this, 'addRestrictionListener']
        );
    }

    /**
     * @param FormEvent $event
     */
    public function addRestrictionListener(FormEvent $event)
    {
        $entity = $event->getData();
        if (!is_object($entity)) {
            return;
        }

        $form = $event->getForm();
        $restrictions = $this->restrictionsManager->getEntityRestrictions($entity);
        foreach ($restrictions as $restriction) {
            if ($form->has($restriction['field'])) {
                $this->applyRestriction($restriction, $form);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['disable_workflow_restrictions' => false]);
    }

    /**
     * @param array         $restriction
     * @param FormInterface $form
     */
    protected function applyRestriction(array $restriction, FormInterface $form)
    {
        $field = $restriction['field'];
        $mode  = $restriction['mode'];
        if ($mode === 'full') {
            FormUtils::replaceField($form, $field, ['read_only' => true]);
        } else {
            $values = $restriction['values'];
            if ($mode === 'disallow') {
                $this->tryDisableFieldValues($form, $field, $values);
            } elseif ($mode === 'allow') {
                $restrictionClosure = function ($value) use ($values) {
                    return in_array($value, $values);
                };
                $this->tryDisableFieldValues($form, $field, $restrictionClosure);
            }
        }
    }

    /**
     * @param FormInterface  $form
     * @param string         $field
     * @param array|callable $disabledValues
     */
    protected function tryDisableFieldValues(FormInterface $form, $field, $disabledValues)
    {
        $fieldForm = $form->get($field);
        if ($fieldForm->getConfig()->hasOption('excluded_values')) {
            FormUtils::replaceField($form, $field, ['excluded_values' => $disabledValues]);
        } else {
            FormUtils::replaceField($form, $field, ['read_only' => true]);
        }
    }
}
