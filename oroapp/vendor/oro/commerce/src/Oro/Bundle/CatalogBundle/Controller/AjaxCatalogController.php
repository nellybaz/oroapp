<?php

namespace Oro\Bundle\CatalogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;

class AjaxCatalogController extends Controller
{
    /**
     * @Route(
     *      "/category-move",
     *      name="oro_catalog_category_move"
     * )
     * @Method({"PUT"})
     * @AclAncestor("oro_catalog_category_update")
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function categoryMoveAction(Request $request)
    {
        $nodeId = (int)$request->get('id');
        $parentId = (int)$request->get('parent');
        $position = (int)$request->get('position');

        return new JsonResponse(
            $this->get('oro_catalog.category_tree_handler')->moveNode($nodeId, $parentId, $position)
        );
    }
}
