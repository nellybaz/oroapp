<?php

namespace Oro\Bundle\CatalogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ProductController extends BaseProductController
{
    /**
     * @Route("/sidebar", name="oro_catalog_category_product_sidebar")
     * @Template
     *
     * @return array
     */
    public function sidebarAction()
    {
        return parent::sidebarAction();
    }
}
