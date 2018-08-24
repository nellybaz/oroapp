<?php

/* OroCatalogBundle:Category:update.html.twig */
class __TwigTemplate_edc9930f68528f57647529b5b18d411d272b16493d55cba44fbf11f56c670336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCatalogBundle:Category:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCatalogBundle:Category:update.html.twig", 2);
        // line 3
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCatalogBundle:Category:update.html.twig", 3);
        // line 5
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 6
        $context["parentCategoryId"] = (($this->getAttribute(($context["entity"] ?? null), "parentCategory", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "parentCategory", array()), "id", array())) : (null));
        // line 8
        if (($context["entityId"] ?? null)) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->getAttribute($this->getAttribute(            // line 9
($context["entity"] ?? null), "defaultTitle", array()), "string", array()))));
        }
        // line 12
        $context["formAction"] = ((($context["entityId"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_catalog_category_update", array("id" => ($context["entityId"] ?? null)))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_catalog_category_create", array("id" => ($context["parentCategoryId"] ?? null)))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_navButtons($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 16
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_catalog_category_create")) {
                // line 17
                echo "            ";
                echo $context["UI"]->getbutton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_catalog_category_create", array("id" =>                 // line 18
($context["entityId"] ?? null))), "iCss" => "fa-folder", "aCss" => "btn-primary", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.subcategory.entity_label"))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.subcategory.entity_label")))));
                // line 23
                echo "
        ";
            }
            // line 25
            echo "        ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_navButtons", $context)) ? (_twig_default_filter(($context["update_navButtons"] ?? null), "update_navButtons")) : ("update_navButtons")), array("entity" => ($context["entity"] ?? null)));
            // line 26
            echo "    ";
        }
        // line 27
        echo "
    ";
        // line 28
        echo $context["UI"]->getcancelButton($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_catalog_category_index"));
        echo "
    ";
        // line 29
        $context["html"] = $context["UI"]->getsaveAndStayButton();
        // line 30
        echo "    ";
        echo $context["UI"]->getdropdownSaveButton(array("html" => ($context["html"] ?? null)));
        echo "
";
    }

    // line 33
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 35
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 36
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_catalog_category_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.category.entity_plural_label"), "entityTitle" => (($this->getAttribute($this->getAttribute(            // line 39
($context["entity"] ?? null), "defaultTitle", array(), "any", false, true), "string", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultTitle", array(), "any", false, true), "string", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 41
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 43
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.category.entity_label")));
            // line 44
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCatalogBundle:Category:update.html.twig", 44)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 45
            echo "    ";
        }
    }

    // line 48
    public function block_content_data($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["id"] = "category-edit";
        // line 50
        echo "
    ";
        // line 51
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.sections.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 57
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appendProducts", array()), 'widget', array("id" => "categoryAppendProducts")), 1 =>         // line 58
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removeProducts", array()), 'widget', array("id" => "categoryRemoveProducts")), 2 =>         // line 59
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titles", array()), 'row'), 3 =>         // line 60
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "slugPrototypesWithRedirect", array()), 'row'), 4 =>         // line 61
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shortDescriptions", array()), 'row'), 5 =>         // line 62
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "longDescriptions", array()), 'row'), 6 =>         // line 63
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "smallImage", array()), 'row'), 7 =>         // line 64
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "largeImage", array()), 'row'))))));
        // line 69
        echo "
    ";
        // line 70
        $context["additionalData"] = array();
        // line 71
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 72
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 73
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
    ";
        // line 75
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 76
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.sections.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 81
($context["additionalData"] ?? null))))));
            // line 84
            echo "    ";
        }
        // line 85
        echo "
    ";
        // line 86
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_product_update")) {
            // line 87
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_plural_label"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>             // line 94
$context["dataGrid"]->getrenderGrid("category-products-grid", array("category_id" => ((($context["entityId"] ?? null)) ? (($context["entityId"] ?? null)) : (0))), array("cssClass" => "inner-grid"))))))));
            // line 98
            echo "    ";
        }
        // line 99
        echo "
    ";
        // line 100
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.sections.default_options"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 105
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "defaultProductOptions", array()), 'widget')))))));
        // line 108
        echo "
    ";
        // line 109
        $context["data"] = array("formErrors" =>         // line 110
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 111
($context["dataBlocks"] ?? null));
        // line 113
        echo "
    ";
        // line 114
        $context["treeOptions"] = array("view" => "orocatalog/js/app/views/tree-manage-view", "key" => "commerce-category", "data" => $this->env->getExtension('Oro\Bundle\CatalogBundle\Twig\CategoryExtension')->getCategoryList(), "nodeId" => ((        // line 118
($context["entityId"] ?? null)) ? (($context["entityId"] ?? null)) : (($context["parentCategoryId"] ?? null))), "updateAllowed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_catalog_category_update"), "onSelectRoute" => "oro_catalog_category_update", "onMoveRoute" => "oro_catalog_category_move");
        // line 123
        echo "
    ";
        // line 124
        $context["twoColumnContent"] = $this->renderParentBlock("content_data", $context, $blocks);
        // line 125
        echo "
    ";
        // line 126
        $this->loadTemplate("OroCatalogBundle:Category:update.html.twig", "OroCatalogBundle:Category:update.html.twig", 126, "1219180057")->display($context);
        // line 149
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:Category:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 149,  205 => 126,  202 => 125,  200 => 124,  197 => 123,  195 => 118,  194 => 114,  191 => 113,  189 => 111,  188 => 110,  187 => 109,  184 => 108,  182 => 105,  181 => 100,  178 => 99,  175 => 98,  173 => 94,  171 => 87,  169 => 86,  166 => 85,  163 => 84,  161 => 81,  159 => 76,  157 => 75,  154 => 74,  147 => 73,  144 => 72,  138 => 71,  136 => 70,  133 => 69,  131 => 64,  130 => 63,  129 => 62,  128 => 61,  127 => 60,  126 => 59,  125 => 58,  124 => 57,  123 => 51,  120 => 50,  117 => 49,  114 => 48,  109 => 45,  106 => 44,  103 => 43,  97 => 41,  95 => 39,  94 => 36,  92 => 35,  89 => 34,  86 => 33,  79 => 30,  77 => 29,  73 => 28,  70 => 27,  67 => 26,  64 => 25,  60 => 23,  58 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  43 => 1,  41 => 12,  38 => 9,  35 => 8,  33 => 6,  31 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:Category:update.html.twig", "");
    }
}


/* OroCatalogBundle:Category:update.html.twig */
class __TwigTemplate_edc9930f68528f57647529b5b18d411d272b16493d55cba44fbf11f56c670336_1219180057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 126
        $this->parent = $this->loadTemplate("OroUIBundle::content_sidebar.html.twig", "OroCatalogBundle:Category:update.html.twig", 126);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle::content_sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 127
    public function block_sidebar($context, array $blocks = array())
    {
        // line 128
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderJsTree", array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.category.entity_plural_label"), "treeOptions" =>         // line 131
($context["treeOptions"] ?? null)), 1 => array("move" => array("routeName" => "oro_catalog_category_move_form"))), "method"), "html", null, true);
        // line 138
        echo "
        ";
    }

    // line 141
    public function block_content($context, array $blocks = array())
    {
        // line 142
        echo "            ";
        // line 143
        echo "                <div class=\"category-data\">
                    ";
        // line 144
        echo ($context["twoColumnContent"] ?? null);
        echo "
                </div>
            ";
        // line 147
        echo "        ";
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:Category:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 147,  287 => 144,  284 => 143,  282 => 142,  279 => 141,  274 => 138,  272 => 131,  270 => 128,  267 => 127,  249 => 126,  207 => 149,  205 => 126,  202 => 125,  200 => 124,  197 => 123,  195 => 118,  194 => 114,  191 => 113,  189 => 111,  188 => 110,  187 => 109,  184 => 108,  182 => 105,  181 => 100,  178 => 99,  175 => 98,  173 => 94,  171 => 87,  169 => 86,  166 => 85,  163 => 84,  161 => 81,  159 => 76,  157 => 75,  154 => 74,  147 => 73,  144 => 72,  138 => 71,  136 => 70,  133 => 69,  131 => 64,  130 => 63,  129 => 62,  128 => 61,  127 => 60,  126 => 59,  125 => 58,  124 => 57,  123 => 51,  120 => 50,  117 => 49,  114 => 48,  109 => 45,  106 => 44,  103 => 43,  97 => 41,  95 => 39,  94 => 36,  92 => 35,  89 => 34,  86 => 33,  79 => 30,  77 => 29,  73 => 28,  70 => 27,  67 => 26,  64 => 25,  60 => 23,  58 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  43 => 1,  41 => 12,  38 => 9,  35 => 8,  33 => 6,  31 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:Category:update.html.twig", "");
    }
}
