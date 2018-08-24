<?php

namespace Oro\Bundle\ShoppingListBundle\Controller\Frontend\Api\Rest;

use FOS\RestBundle\Util\Codes;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\NamePrefix;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\SoapBundle\Controller\Api\Rest\RestController;
use Oro\Bundle\ShoppingListBundle\Entity\LineItem;
use Oro\Bundle\ShoppingListBundle\Form\Handler\LineItemHandler;
use Oro\Bundle\ProductBundle\Form\Type\FrontendLineItemType;

/**
 * @NamePrefix("oro_api_shopping_list_frontend_")
 */
class LineItemController extends RestController implements ClassResourceInterface
{
    /**
     * @ApiDoc(
     *      description="Delete Line Item",
     *      resource=true
     * )
     * @AclAncestor("oro_shopping_list_frontend_update")
     *
     * @param int $id
     *
     * @return Response
     */
    public function deleteAction($id)
    {
        $success = false;
        /** @var LineItem $lineItem */
        $lineItem = $this->getDoctrine()
            ->getManagerForClass('OroShoppingListBundle:LineItem')
            ->getRepository('OroShoppingListBundle:LineItem')
            ->find($id);

        $view = $this->view(null, Codes::HTTP_NO_CONTENT);
        if ($lineItem) {
            $this->get('oro_shopping_list.shopping_list.manager')->removeLineItem($lineItem);
            $success = true;
        }

        return $this->buildResponse($view, self::ACTION_DELETE, ['id' => $lineItem->getId(), 'success' => $success]);
    }

    /**
     * @ApiDoc(
     *      description="Update Line Item",
     *      resource=true
     * )
     * @AclAncestor("oro_shopping_list_frontend_update")
     *
     * @param int $id
     *
     * @param Request $request
     * @return Response
     */
    public function putAction($id, Request $request)
    {
        /** @var LineItem $entity */
        $entity = $this->getManager()->find($id);

        if ($entity) {
            $form = $this->createForm(FrontendLineItemType::NAME, $entity, ['csrf_protection' => false]);

            $handler = new LineItemHandler(
                $form,
                $request,
                $this->getDoctrine(),
                $this->get('oro_shopping_list.shopping_list.manager')
            );
            $isFormHandled = $handler->process($entity);
            if ($isFormHandled) {
                $view = $this->view(
                    ['unit' => $entity->getUnit()->getCode(), 'quantity' => $entity->getQuantity()],
                    Codes::HTTP_OK
                );
            } else {
                $view = $this->view($form, Codes::HTTP_BAD_REQUEST);
            }
        } else {
            $view = $this->view(null, Codes::HTTP_NOT_FOUND);
        }

        return $this->buildResponse($view, self::ACTION_UPDATE, ['id' => $id, 'entity' => $entity]);
    }

    /**
     * {@inheritdoc}
     */
    public function getManager()
    {
        return $this->get('oro_shopping_list.line_item.manager.api');
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        throw new \LogicException('This method should not be called');
    }

    /**
     * {@inheritdoc}
     */
    public function getFormHandler()
    {
        throw new \LogicException('This method should not be called');
    }
}
