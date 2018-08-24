<?php

namespace Oro\Bundle\WorkflowBundle\Controller\Api\Rest;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Translation\TranslatorInterface;

use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\WorkflowBundle\Configuration\WorkflowDefinitionHandleBuilder;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Handler\WorkflowDefinitionHandler;

/**
 * @Rest\NamePrefix("oro_api_workflow_definition_")
 */
class WorkflowDefinitionController extends FOSRestController
{
    /**
     * REST GET item
     *
     * @param WorkflowDefinition $workflowDefinition
     *
     * @Rest\Get(
     *      "/api/rest/{version}/workflowdefinition/{workflowDefinition}",
     *      defaults={"version"="latest", "_format"="json"}
     * )
     * @ApiDoc(
     *      description="Get workflow definition",
     *      resource=true
     * )
     * @AclAncestor("oro_workflow_definition_view")
     * @return Response
     */
    public function getAction(WorkflowDefinition $workflowDefinition)
    {
        return $this->handleView($this->view($workflowDefinition, Codes::HTTP_OK));
    }

    /**
     * Update workflow definition
     *
     * Returns
     * - HTTP_OK (200)
     * - HTTP_BAD_REQUEST (400)
     *
     * @param WorkflowDefinition $workflowDefinition
     * @param Request $request
     * @return Response
     * @Rest\Put(
     *      "/api/rest/{version}/workflowdefinition/{workflowDefinition}",
     *      defaults={"version"="latest", "_format"="json"}
     * )
     * @ApiDoc(
     *      description="Update workflow definition",
     *      resource=true
     * )
     * @AclAncestor("oro_workflow_definition_update")
     */
    public function putAction(WorkflowDefinition $workflowDefinition, Request $request)
    {
        try {
            $configuration = $this->getConfiguration($request);
            if (!$this->isConfigurationValid($configuration)) {
                throw new \InvalidArgumentException(
                    $this->getTranslator()->trans('oro.workflow.notification.workflow.could_not_be_saved')
                );
            }

            /** @var WorkflowDefinitionHandleBuilder $definitionBuilder */
            $definitionBuilder = $this->get('oro_workflow.configuration.builder.workflow_definition.handle');
            $builtDefinition = $definitionBuilder->buildFromRawConfiguration($configuration);

            $this->getHandler()->updateWorkflowDefinition($workflowDefinition, $builtDefinition);
        } catch (\Exception $exception) {
            return $this->handleView(
                $this->view(
                    ['error' => $exception->getMessage()],
                    Codes::HTTP_BAD_REQUEST
                )
            );
        }

        return $this->handleView($this->view($workflowDefinition->getName(), Codes::HTTP_OK));
    }

    /**
     * Create new workflow definition
     *
     * @param Request $request
     * @param WorkflowDefinition $workflowDefinition
     * @return Response
     * @Rest\Post(
     *      "/api/rest/{version}/workflowdefinition/{workflowDefinition}",
     *      defaults={"version"="latest", "_format"="json", "workflowDefinition"=null}
     * )
     * @ApiDoc(
     *      description="Create new workflow definition",
     *      resource=true
     * )
     * @AclAncestor("oro_workflow_definition_create")
     */
    public function postAction(Request $request, WorkflowDefinition $workflowDefinition = null)
    {
        try {
            $configuration = $this->getConfiguration($request);
            if (!$this->isConfigurationValid($configuration)) {
                throw new \InvalidArgumentException(
                    $this->getTranslator()->trans('oro.workflow.notification.workflow.could_not_be_saved')
                );
            }

            /** @var WorkflowDefinitionHandleBuilder $definitionBuilder */
            $definitionBuilder = $this->get('oro_workflow.configuration.builder.workflow_definition.handle');
            $builtDefinition = $definitionBuilder->buildFromRawConfiguration($configuration);

            if (!$workflowDefinition) {
                $this->getHandler()->createWorkflowDefinition($builtDefinition);
            } else {
                $this->getHandler()->updateWorkflowDefinition($workflowDefinition, $builtDefinition);
            }
        } catch (\Exception $exception) {
            return $this->handleView(
                $this->view(
                    ['error' => $exception->getMessage()],
                    Codes::HTTP_BAD_REQUEST
                )
            );
        }

        return $this->handleView($this->view($builtDefinition->getName(), Codes::HTTP_OK));
    }

    /**
     * Delete workflow definition
     *
     * Returns
     * - HTTP_NO_CONTENT (204)
     * - HTTP_FORBIDDEN (403)
     *
     * @Rest\Delete(
     *      "/api/rest/{version}/workflowdefinition/{workflowDefinition}",
     *      defaults={"version"="latest", "_format"="json"}
     * )
     * @ApiDoc(description="Delete workflow definition")
     * @Acl(
     *      id="oro_workflow_definition_delete",
     *      type="entity",
     *      class="OroWorkflowBundle:WorkflowDefinition",
     *      permission="DELETE"
     * )
     *
     * @param WorkflowDefinition $workflowDefinition
     * @return Response
     */
    public function deleteAction(WorkflowDefinition $workflowDefinition)
    {
        if ($workflowDefinition->isSystem()) {
            return $this->handleView($this->view(null, Codes::HTTP_FORBIDDEN));
        } else {
            $this->getHandler()->deleteWorkflowDefinition($workflowDefinition);

            return $this->handleView($this->view(null, Codes::HTTP_NO_CONTENT));
        }
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function getConfiguration(Request $request)
    {
        return $request->request->all();
    }

    /**
     * @return WorkflowDefinitionHandler
     */
    protected function getHandler()
    {
        return $this->get('oro_workflow.handler.workflow_definition');
    }

    /**
     * @param array $configuration
     * @return bool
     */
    protected function isConfigurationValid(array $configuration)
    {
        $checker = $this->get('oro_workflow.configuration.checker');

        return $checker->isClean($configuration);
    }

    /**
     * @return TranslatorInterface
     */
    protected function getTranslator()
    {
        return $this->get('translator');
    }
}
