<?php

/* OroCatalogBundle:Category:index.html.twig */
class __TwigTemplate_fe25926eb9b2997cab8aeab67ced0f957a2e74ee72a10d50297595bd24469677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroCatalogBundle:Category:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCatalogBundle:Category:index.html.twig", 2);
        // line 3
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.category.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_navButtons($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_catalog_category_create")) {
            // line 7
            echo "        <div class=\"btn-group\">
            ";
            // line 8
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_catalog_category_create", array("id" => $this->getAttribute(            // line 9
($context["rootCategory"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.category.entity_label")));
            // line 11
            echo "
        </div>
    ";
        }
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    ";
        // line 19
        $context["treeOptions"] = array("view" => "orocatalog/js/app/views/tree-manage-view", "data" => $this->env->getExtension('Oro\Bundle\CatalogBundle\Twig\CategoryExtension')->getCategoryList(), "updateAllowed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_catalog_category_update"), "onSelectRoute" => "oro_catalog_category_update", "onMoveRoute" => "oro_catalog_category_move");
        // line 26
        echo "
    ";
        // line 27
        $this->loadTemplate("OroCatalogBundle:Category:index.html.twig", "OroCatalogBundle:Category:index.html.twig", 27, "1101263910")->display($context);
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  64 => 26,  62 => 19,  56 => 17,  53 => 16,  46 => 11,  44 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:Category:index.html.twig", "");
    }
}


/* OroCatalogBundle:Category:index.html.twig */
class __TwigTemplate_fe25926eb9b2997cab8aeab67ced0f957a2e74ee72a10d50297595bd24469677_1101263910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("OroUIBundle::content_sidebar.html.twig", "OroCatalogBundle:Category:index.html.twig", 27);
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

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        // line 29
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderJsTree", array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.category.entity_plural_label"), "treeOptions" =>         // line 32
($context["treeOptions"] ?? null)), 1 => array("move" => array("routeName" => "oro_catalog_category_move_form"))), "method"), "html", null, true);
        // line 39
        echo "
        ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "            ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_catalog_category_create") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_catalog_category_update"))) {
            // line 44
            echo "                <div class=\"tree-empty-content scrollable-container\">
                    ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.template.select_existing_or_create_new"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 48
        echo "        ";
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 48,  146 => 45,  143 => 44,  140 => 43,  137 => 42,  132 => 39,  130 => 32,  128 => 29,  125 => 28,  67 => 27,  64 => 26,  62 => 19,  56 => 17,  53 => 16,  46 => 11,  44 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:Category:index.html.twig", "");
    }
}
