<?php

namespace Oro\Bundle\SalesBundle\Migrations\Data\ORM;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\WorkflowBundle\Model\Filter\WorkflowDefinitionFilters;
use Oro\Bundle\WorkflowBundle\Model\WorkflowManager;

class DeactivateSalesWorkflows extends AbstractFixture implements ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        /* @var $filters WorkflowDefinitionFilters */
        $filters = $this->container->get('oro_workflow.registry.definition_filters');
        $filters->setEnabled(false); // disable filters, because some workflows disabled by `features` by default

        /** @var WorkflowManager $workflowManager */
        $workflowManager = $this->container->get('oro_workflow.manager');
        $workflowManager->deactivateWorkflow('b2b_flow_lead');
        $workflowManager->deactivateWorkflow('opportunity_flow');

        $filters->setEnabled(true);
    }
}
