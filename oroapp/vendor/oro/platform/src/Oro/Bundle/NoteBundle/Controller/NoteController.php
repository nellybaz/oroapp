<?php

namespace Oro\Bundle\NoteBundle\Controller;

use FOS\RestBundle\Util\Codes;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormInterface;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\EntityBundle\Tools\EntityRoutingHelper;
use Oro\Bundle\NoteBundle\Entity\Note;
use Oro\Bundle\NoteBundle\Entity\Manager\NoteManager;

/**
 * @Route("/notes")
 */
class NoteController extends Controller
{
    /**
     * @Route(
     *      "/view/widget/{entityClass}/{entityId}",
     *      name="oro_note_widget_notes"
     * )
     *
     * @AclAncestor("oro_note_view")
     * @Template("OroNoteBundle:Note:notes.html.twig")
     */
    public function widgetAction($entityClass, $entityId)
    {
        $entity = $this->getEntityRoutingHelper()->getEntity($entityClass, $entityId);

        return [
            'entity' => $entity
        ];
    }

    /**
     * @Route(
     *      "/view/{entityClass}/{entityId}",
     *      name="oro_note_notes"
     * )
     *
     * @AclAncestor("oro_note_view")
     */
    public function getAction($entityClass, $entityId)
    {
        $entityClass = $this->getEntityRoutingHelper()->resolveEntityClass($entityClass);

        $sorting = strtoupper($this->getRequest()->get('sorting', 'DESC'));

        $manager = $this->getNoteManager();

        $result = $manager->getEntityViewModels(
            $manager->getList($entityClass, $entityId, $sorting)
        );

        return new Response(json_encode($result), Codes::HTTP_OK);
    }

    /**
     * @Route(
     *     "/widget/info/{id}/{renderContexts}",
     *     name="oro_note_widget_info",
     *     requirements={"id"="\d+", "renderContexts"="\d+"},
     *     defaults={"renderContexts"=true}
     * )
     * @Template("OroNoteBundle:Note/widget:info.html.twig")
     * @AclAncestor("oro_note_view")
     */
    public function infoAction(Note $entity, $renderContexts)
    {
        $attachmentProvider = $this->get('oro_attachment.provider.attachment');
        $attachment = $attachmentProvider->getAttachmentInfo($entity);

        return [
            'entity'         => $entity,
            'target'         => $this->getTargetEntity(),
            'renderContexts' => (bool)$renderContexts,
            'attachment'     => $attachment
        ];
    }

    /**
     * Get target entity
     *
     * @return object|null
     */
    protected function getTargetEntity()
    {
        $entityRoutingHelper = $this->getEntityRoutingHelper();
        $targetEntityClass   = $entityRoutingHelper->getEntityClassName($this->getRequest(), 'targetActivityClass');
        $targetEntityId      = $entityRoutingHelper->getEntityId($this->getRequest(), 'targetActivityId');
        if (!$targetEntityClass || !$targetEntityId) {
            return null;
        }

        return $entityRoutingHelper->getEntity($targetEntityClass, $targetEntityId);
    }

    /**
     * @Route("/create", name="oro_note_create")
     *
     * @Template("OroNoteBundle:Note:update.html.twig")
     * @AclAncestor("oro_note_create")
     */
    public function createAction(Request $request)
    {
        $entityRoutingHelper = $this->getEntityRoutingHelper();

        $entityClass = $entityRoutingHelper->getEntityClassName($request);
        $entityId = $entityRoutingHelper->getEntityId($request);

        $noteEntity = new Note();

        $formAction = $entityRoutingHelper->generateUrlByRequest(
            'oro_note_create',
            $this->getRequest(),
            $entityRoutingHelper->getRouteParameters($entityClass, $entityId)
        );

        return $this->update($noteEntity, $formAction);
    }

    /**
     * @Route("/update/{id}", name="oro_note_update", requirements={"id"="\d+"})
     *
     * @Template
     * @AclAncestor("oro_note_update")
     */
    public function updateAction(Note $entity)
    {
        $formAction = $this->get('router')->generate('oro_note_update', ['id' => $entity->getId()]);

        return $this->update($entity, $formAction);
    }

    protected function update(Note $entity, $formAction)
    {
        $responseData = [
            'entity' => $entity,
            'saved'  => false
        ];

        if ($this->get('oro_note.form.handler.note')->process($entity)) {
            $responseData['saved'] = true;
            $responseData['model'] = $this->getNoteManager()->getEntityViewModel($entity);
        }
        $responseData['form']        = $this->getForm()->createView();
        $responseData['formAction']  = $formAction;
        if ($entity->getId()) {
            $responseData['submitLabel'] = $this->get('translator')->trans('oro.note.save.label');
        } else {
            $responseData['submitLabel'] = $this->get('translator')->trans('oro.note.add.label');
        }

        return $responseData;
    }

    /**
     * @return FormInterface
     */
    public function getForm()
    {
        return $this->get('oro_note.form.note');
    }

    /**
     * @return NoteManager
     */
    protected function getNoteManager()
    {
        return $this->get('oro_note.manager');
    }

    /**
     * @return EntityRoutingHelper
     */
    protected function getEntityRoutingHelper()
    {
        return $this->get('oro_entity.routing_helper');
    }
}
