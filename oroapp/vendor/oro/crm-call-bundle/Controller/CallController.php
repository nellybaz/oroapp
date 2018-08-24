<?php

namespace Oro\Bundle\CallBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\CallBundle\Entity\Call;

class CallController extends Controller
{
    /**
     * This action is used to render the list of calls associated with the given entity
     * on the view page of this entity
     *
     * @Route("/activity/view/{entityClass}/{entityId}", name="oro_call_activity_view")
     * @AclAncestor("oro_call_view")
     * @Template
     */
    public function activityAction($entityClass, $entityId)
    {
        return array(
            'entity' => $this->get('oro_entity.routing_helper')->getEntity($entityClass, $entityId)
        );
    }

    /**
     * @Route("/create", name="oro_call_create")
     * @Template("OroCallBundle:Call:update.html.twig")
     * @Acl(
     *      id="oro_call_create",
     *      type="entity",
     *      permission="CREATE",
     *      class="OroCallBundle:Call"
     * )
     */
    public function createAction()
    {
        $entity = new Call();

        $callStatus = $this->getDoctrine()
            ->getRepository('OroCallBundle:CallStatus')
            ->findOneByName('completed');
        $entity->setCallStatus($callStatus);

        $callDirection = $this->getDoctrine()
            ->getRepository('OroCallBundle:CallDirection')
            ->findOneByName('outgoing');
        $entity->setDirection($callDirection);

        $formAction = $this->get('oro_entity.routing_helper')
            ->generateUrlByRequest('oro_call_create', $this->getRequest());

        return $this->update($entity, $formAction);
    }

    /**
     * @Route("/update/{id}", name="oro_call_update", requirements={"id"="\d+"})
     * @Template
     * @Acl(
     *      id="oro_call_update",
     *      type="entity",
     *      permission="EDIT",
     *      class="OroCallBundle:Call"
     * )
     */
    public function updateAction(Call $entity)
    {
        $formAction = $this->get('router')->generate('oro_call_update', ['id' => $entity->getId()]);

        return $this->update($entity, $formAction);
    }

    /**
     * @Route(name="oro_call_index")
     * @Template
     * @Acl(
     *      id="oro_call_view",
     *      type="entity",
     *      permission="VIEW",
     *      class="OroCallBundle:Call"
     * )
     */
    public function indexAction()
    {
        return array(
            'entity_class' => $this->container->getParameter('oro_call.call.entity.class')
        );
    }

    /**
     * @Route("/view/{id}", name="oro_call_view")
     * @Template
     */
    public function viewAction(Call $entity)
    {
        return [
            'entity' => $entity,
        ];
    }

    /**
     * @Route("/widget", name="oro_call_widget_calls")
     * @Template
     * @AclAncestor("oro_call_view")
     *
     * @param Request $request
     * @return array
     */
    public function callsAction(Request $request)
    {
        return array(
            'datagridParameters' => $request->query->all()
        );
    }

    /**
     * @Route("/base-widget", name="oro_call_base_widget_calls")
     * @Template
     * @AclAncestor("oro_call_view")
     */
    public function baseCallsAction(Request $request)
    {
        return array(
            'datagridParameters' => $request->query->all()
        );
    }

    /**
     * @Route(
     *      "/widget/info/{id}/{renderContexts}",
     *      name="oro_call_widget_info",
     *      requirements={"id"="\d+", "renderContexts"="\d+"},
     *      defaults={"renderContexts"=true}
     * )
     * @Template("OroCallBundle:Call/widget:info.html.twig")
     * @AclAncestor("oro_call_view")
     */
    public function infoAction(Call $entity, $renderContexts)
    {
        return [
            'entity'         => $entity,
            'renderContexts' => (bool)$renderContexts
        ];
    }

    /**
     * @param Call   $entity
     * @param string $formAction
     *
     * @return array
     */
    protected function update(Call $entity, $formAction)
    {
        $saved = false;

        if ($this->get('oro_call.call.form.handler')->process($entity)) {
            if (!$this->getRequest()->get('_widgetContainer')) {
                $this->get('session')->getFlashBag()->add(
                    'success',
                    $this->get('translator')->trans('oro.call.controller.call.saved.message')
                );

                return $this->get('oro_ui.router')->redirect($entity);
            }
            $saved = true;
        }

        return array(
            'entity'     => $entity,
            'saved'      => $saved,
            'form'       => $this->get('oro_call.call.form.handler')->getForm()->createView(),
            'formAction' => $formAction
        );
    }
}
