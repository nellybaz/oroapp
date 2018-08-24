<?php

namespace Oro\Bundle\WebCatalogBundle\Controller;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Oro\Bundle\WebCatalogBundle\Entity\ContentNode;
use Oro\Bundle\WebCatalogBundle\Entity\WebCatalog;
use Oro\Bundle\WebCatalogBundle\Form\Type\ContentNodeType;
use Oro\Bundle\WebCatalogBundle\JsTree\ContentNodeTreeHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class ContentNodeController extends Controller
{
    /**
     * @Route("/root/{id}", name="oro_content_node_update_root", requirements={"id"="\d+"})
     *
     * @AclAncestor("oro_web_catalog_update")
     * @Template("OroWebCatalogBundle:ContentNode:update.html.twig")
     *
     * @param WebCatalog $webCatalog
     * @return array
     */
    public function createRootAction(WebCatalog $webCatalog)
    {
        $rootNode = $this->getTreeHandler()->getTreeRootByWebCatalog($webCatalog);
        if (!$rootNode) {
            $rootNode = new ContentNode();
            $rootNode->setWebCatalog($webCatalog);
        }

        $rootNode->setUpdatedAt(new \DateTime());

        return $this->updateTreeNode($rootNode);
    }

    /**
     * @Route("/create/parent/{id}", name="oro_content_node_create", requirements={"id"="\d+"})
     *
     * @AclAncestor("oro_web_catalog_update")
     * @Template("OroWebCatalogBundle:ContentNode:update.html.twig")
     *
     * @param ContentNode $parentNode
     * @return array
     */
    public function createAction(ContentNode $parentNode)
    {
        $contentNode = new ContentNode();
        $contentNode->setWebCatalog($parentNode->getWebCatalog());
        $contentNode->setParentNode($parentNode);

        return $this->updateTreeNode($contentNode);
    }

    /**
     * @Route("/update/{id}", name="oro_content_node_update", requirements={"id"="\d+"})
     *
     * @AclAncestor("oro_web_catalog_update")
     * @Template("OroWebCatalogBundle:ContentNode:update.html.twig")
     *
     * @param ContentNode $contentNode
     * @return array
     */
    public function updateAction(ContentNode $contentNode)
    {
        return $this->updateTreeNode($contentNode);
    }

    /**
     * @Route("/move", name="oro_content_node_move")
     * @Method({"PUT"})
     * @AclAncestor("oro_web_catalog_update")
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function moveAction(Request $request)
    {
        $nodeId = (int)$request->get('id');
        $parentId = (int)$request->get('parent');
        $position = (int)$request->get('position');
        $createRedirect = (bool)$request->get('createRedirect', false);
        
        $handler = $this->getTreeHandler();
        $handler->setCreateRedirect($createRedirect);

        return new JsonResponse($handler->moveNode($nodeId, $parentId, $position));
    }

    /**
     * @Route(
     *     "/get-possible-urls/{id}/{newParentId}",
     *     name="oro_content_node_get_possible_urls",
     *     requirements={"id"="\d+", "newParentId"="\d+"}
     * )
     *
     * @ParamConverter("newParentContentNode", options={"id" = "newParentId"})
     *
     * @AclAncestor("oro_web_catalog_update")
     *
     * @param ContentNode $contentNode
     * @param ContentNode $newParentContentNode
     * @return JsonResponse
     */
    public function getPossibleUrlsAction(ContentNode $contentNode, ContentNode $newParentContentNode)
    {
        $slugGenerator = $this->get('oro_web_catalog.generator.slug_generator');

        return new JsonResponse($slugGenerator->getSlugsUrlForMovedNode($newParentContentNode, $contentNode));
    }

    /**
     * @Route(
     *     "/get-changed-urls/{id}",
     *     name="oro_content_node_get_changed_urls",
     *     requirements={"id"="\d+"}
     * )
     *
     * @AclAncestor("oro_web_catalog_update")
     *
     * @param ContentNode $node
     * @return JsonResponse
     */
    public function getChangedUrlsAction(ContentNode $node, Request $request)
    {
        $slugGenerator = $this->get('oro_web_catalog.generator.slug_generator');
        $oldUrls = $slugGenerator->prepareSlugUrls($node);

        $form = $this->createForm(ContentNodeType::class, $node);
        $form->submit($request);

        $newUrls = $slugGenerator->prepareSlugUrls($form->getData());

        $slugUrlDiffer = $this->get('oro_redirect.generator.slug_url_differ');

        $urlChanges = $slugUrlDiffer->getSlugUrlsChanges($oldUrls, $newUrls);

        return new JsonResponse($urlChanges);
    }

    /**
     * @param ContentNode $node
     * @return array|RedirectResponse
     */
    protected function updateTreeNode(ContentNode $node)
    {
        $form = $this->createForm(ContentNodeType::NAME, $node);

        $saveRedirectHandler = function (ContentNode $node) {
            if ($node->getParentNode()) {
                return [
                    'route' => 'oro_content_node_update',
                    'parameters' => ['id' => $node->getId()]
                ];
            } else {
                return [
                    'route' => 'oro_content_node_update_root',
                    'parameters' => ['id' => $node->getWebCatalog()->getId()]
                ];
            }
        };

        return $this->get('oro_form.model.update_handler')->handleUpdate(
            $node,
            $form,
            $saveRedirectHandler,
            $saveRedirectHandler,
            $this->get('translator')->trans('oro.webcatalog.controller.contentnode.saved.message')
        );
    }

    /**
     * @return ContentNodeTreeHandler
     */
    protected function getTreeHandler()
    {
        return $this->get('oro_web_catalog.content_node_tree_handler');
    }
}
