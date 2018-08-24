<?php

/* OroNavigationBundle:menuUpdate:index.html.twig */
class __TwigTemplate_25772bc667a16696e9fd639d5ef6c4c72dc92f306728d6019d436cf9b6ff1b1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'navButtons' => array($this, 'block_navButtons'),
            'content_datagrid' => array($this, 'block_content_datagrid'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["bap"] ?? null), "layout", array()), "OroNavigationBundle:menuUpdate:index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNavigationBundle:menuUpdate:index.html.twig", 3);
        // line 4
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroNavigationBundle:menuUpdate:index.html.twig", 4);
        // line 6
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.menus");
        // line 8
        if (array_key_exists("entityClass", $context)) {
            // line 9
            $context["buttonsPlaceholderData"] = array("entity_class" => ($context["entityClass"] ?? null));
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"container-fluid page-title\">
        <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    ";
        // line 17
        echo twig_include($this->env, $context, "OroNavigationBundle:menuUpdate:pageHeader.html.twig");
        echo "
                </div>
                ";
        // line 19
        if (array_key_exists("entityClass", $context)) {
            // line 20
            echo "                    <div class=\"pull-right title-buttons-container invisible\"
                         data-page-component-module=\"oroui/js/app/components/view-component\"
                         data-page-component-options=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroui/js/app/views/hidden-initialization-view")), "html", null, true);
            echo "\"
                         data-layout=\"separate\">
                        ";
            // line 24
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("index_navButtons_before", $context)) ? (_twig_default_filter(($context["index_navButtons_before"] ?? null), "index_navButtons_before")) : ("index_navButtons_before")), ($context["buttonsPlaceholderData"] ?? null));
            // line 25
            echo "                        ";
            $this->displayBlock('navButtons', $context, $blocks);
            // line 26
            echo "                        ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("index_navButtons_after", $context)) ? (_twig_default_filter(($context["index_navButtons_after"] ?? null), "index_navButtons_after")) : ("index_navButtons_after")), ($context["buttonsPlaceholderData"] ?? null));
            // line 27
            echo "                    </div>
                ";
        }
        // line 29
        echo "            </div>
        </div>
    </div>
    ";
        // line 32
        $this->displayBlock('content_datagrid', $context, $blocks);
    }

    // line 25
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 32
    public function block_content_datagrid($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        if (array_key_exists("gridName", $context)) {
            // line 34
            echo "            ";
            if (array_key_exists("gridScope", $context)) {
                // line 35
                echo "                ";
                $context["gridName"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName(($context["gridName"] ?? null), ($context["gridScope"] ?? null));
                // line 36
                echo "            ";
            }
            // line 37
            echo "            ";
            $context["renderParams"] = twig_array_merge(array("enableFullScreenLayout" => true, "enableViews" => true, "showViewsInNavbar" => true), ((            // line 42
array_key_exists("renderParams", $context)) ? (_twig_default_filter(($context["renderParams"] ?? null), array())) : (array())));
            // line 43
            echo "            ";
            echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), ($context["renderParams"] ?? null));
            echo "

            ";
            // line 46
            echo "            ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNavigationBundle:menuUpdate:index.html.twig", 46);
            // line 47
            echo "
            <div ";
            // line 48
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orodatagrid/js/app/components/datagrid-allow-tracking-component", "options" => array("gridName" =>             // line 51
($context["gridName"] ?? null))));
            // line 53
            echo "></div>
        ";
        }
        // line 55
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:menuUpdate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 55,  126 => 53,  124 => 51,  123 => 48,  120 => 47,  117 => 46,  111 => 43,  109 => 42,  107 => 37,  104 => 36,  101 => 35,  98 => 34,  95 => 33,  92 => 32,  87 => 25,  83 => 32,  78 => 29,  74 => 27,  71 => 26,  68 => 25,  66 => 24,  61 => 22,  57 => 20,  55 => 19,  50 => 17,  44 => 13,  41 => 12,  37 => 1,  34 => 9,  32 => 8,  30 => 6,  28 => 4,  26 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:menuUpdate:index.html.twig", "");
    }
}
