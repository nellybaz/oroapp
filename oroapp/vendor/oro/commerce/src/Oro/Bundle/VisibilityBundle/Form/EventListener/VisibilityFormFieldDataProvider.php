<?php

namespace Oro\Bundle\VisibilityBundle\Form\EventListener;

use Doctrine\Common\Persistence\ManagerRegistry;
use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerGroup;
use Oro\Bundle\ScopeBundle\Form\FormScopeCriteriaResolver;
use Oro\Bundle\ScopeBundle\Manager\ScopeManager;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\Repository\VisibilityRepositoryInterface;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\VisibilityInterface;
use Oro\Bundle\VisibilityBundle\Form\Type\EntityVisibilityType;
use Oro\Bundle\VisibilityBundle\Model\Exception\InvalidArgumentException;
use Symfony\Component\Form\FormInterface;

class VisibilityFormFieldDataProvider
{
    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /**
     * @var ScopeManager
     */
    protected $scopeManager;

    /**
     * @var FormScopeCriteriaResolver
     */
    protected $formScopeCriteriaResolver;

    /**
     * @param ManagerRegistry $registry
     * @param ScopeManager $scopeManager
     * @param FormScopeCriteriaResolver $formScopeCriteriaResolver
     */
    public function __construct(
        ManagerRegistry $registry,
        ScopeManager $scopeManager,
        FormScopeCriteriaResolver $formScopeCriteriaResolver
    ) {
        $this->registry = $registry;
        $this->scopeManager = $scopeManager;
        $this->formScopeCriteriaResolver = $formScopeCriteriaResolver;
    }

    /**
     * @param FormInterface $form
     * @param string $field
     * @return VisibilityInterface|VisibilityInterface[]
     */
    public function findFormFieldData($form, $field)
    {
        $visibilityClassName = $form->getConfig()->getOption($field.'Class');
        /** @var VisibilityRepositoryInterface $repository */
        $type = $this->getVisibilityScopeType($form, $field);
        $criteria = $this->formScopeCriteriaResolver->resolve($form->get($field), $type);

        $repository = $this->registry->getManagerForClass($visibilityClassName)->getRepository($visibilityClassName);
        $result = $repository->findByScopeCriteriaForTarget($criteria, $form->getData());

        if ($field === EntityVisibilityType::ALL_FIELD) {
            if (0 === count($result)) {
                $result = null;
            } else {
                $result = reset($result);
            }
        } else {
            $result = $this->mapVisibilitiesById($result);
        }

        return $result;
    }

    /**
     * @param FormInterface $form
     * @param string $field
     * @param null|object $fieldData
     * @return VisibilityInterface
     */
    public function createFormFieldData($form, $field, $fieldData = null)
    {
        $config = $form->getConfig();

        $visibilityClassName = $config->getOption($field.'Class');

        if ($config->hasOption(FormScopeCriteriaResolver::SCOPE)
            && null !== $config->getOption(FormScopeCriteriaResolver::SCOPE)
        ) {
            $rootScope = $config->getOption(FormScopeCriteriaResolver::SCOPE);
        } else {
            $rootScope = $this->scopeManager->findDefaultScope();
        }
        $scopeType = $this->getVisibilityScopeType($form, $field);

        $context = $this->scopeManager->getCriteriaByScope(
            $rootScope,
            $scopeType
        )->toArray();
        if (null !== $fieldData && array_key_exists($field, $context)) {
            $context[$field] = $fieldData;
        }

        /** @var VisibilityInterface $visibility */
        $visibility = new $visibilityClassName();
        $scope = $this->scopeManager->findOrCreate(
            $scopeType,
            $context
        );
        $visibility->setScope($scope);
        $visibility->setTargetEntity($form->getData());

        return $visibility;
    }

    /**
     * @param array $visibilities
     * @return VisibilityInterface[]
     */
    protected function mapVisibilitiesById($visibilities)
    {
        $visibilitiesById = [];
        /** @var VisibilityInterface $visibilityEntity */
        foreach ($visibilities as $visibilityEntity) {
            $scope = $visibilityEntity->getScope();

            /** @var Customer $customer */
            /** @noinspection PhpUndefinedMethodInspection - field added through entity extend */
            $customer = $scope->getCustomer();

            /** @var CustomerGroup $customerGroup */
            /** @noinspection PhpUndefinedMethodInspection - field added through entity extend */
            $customerGroup = $scope->getCustomerGroup();

            if (null !== $customerGroup) {
                $visibilitiesById[$customerGroup->getId()] = $visibilityEntity;
            } elseif (null !== $customer) {
                $visibilitiesById[$customer->getId()] = $visibilityEntity;
            }
        }

        return $visibilitiesById;
    }

    /**
     * @param FormInterface $form
     * @param string $field
     * @return string
     */
    protected function getVisibilityScopeType(FormInterface $form, $field)
    {
        switch ($field) {
            case EntityVisibilityType::ALL_FIELD:
                $className = $form->getConfig()->getOption(EntityVisibilityType::ALL_CLASS);
                break;
            case EntityVisibilityType::ACCOUNT_FIELD:
                $className = $form->getConfig()->getOption(EntityVisibilityType::ACCOUNT_CLASS);
                break;
            case EntityVisibilityType::ACCOUNT_GROUP_FIELD:
                $className = $form->getConfig()->getOption(EntityVisibilityType::ACCOUNT_GROUP_CLASS);
                break;
            default:
                throw new InvalidArgumentException();
        }

        return call_user_func([$className, 'getScopeType']);
    }
}
