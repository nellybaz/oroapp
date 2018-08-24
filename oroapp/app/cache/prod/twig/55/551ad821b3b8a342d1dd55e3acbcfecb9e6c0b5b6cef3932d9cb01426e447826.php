<?php

/* OroUIBundle:actions:index.html.twig */
class __TwigTemplate_ad403e9287ace55c373a58ea8fa04db0262e7276579a5371a2f31057d86dfb17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'before_content_addition' => array($this, 'block_before_content_addition'),
            'content' => array($this, 'block_content'),
            'navButtons' => array($this, 'block_navButtons'),
            'content_datagrid' => array($this, 'block_content_datagrid'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["bap"] ?? null), "layout", array()), "OroUIBundle:actions:index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:actions:index.html.twig", 2);
        // line 3
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroUIBundle:actions:index.html.twig", 3);
        // line 4
        $context["buttonsPlaceholderData"] = array();
        // line 5
        if (array_key_exists("entity_class", $context)) {
            // line 6
            $context["buttonsPlaceholderData"] = array("entity_class" => ($context["entity_class"] ?? null));
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_before_content_addition($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("index_before_content_addition", $context)) ? (_twig_default_filter(($context["index_before_content_addition"] ?? null), "index_before_content_addition")) : ("index_before_content_addition")), array());
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"container-fluid page-title\">
        <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    <div class=\"pull-left\">
                        <h1 class=\"oro-subtitle\">";
        // line 19
        echo twig_escape_filter($this->env, ((array_key_exists("pageTitle", $context)) ? (($context["pageTitle"] ?? null)) : ("")), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"pull-right title-buttons-container invisible\"
                         data-page-component-module=\"oroui/js/app/components/view-component\"
                         data-page-component-options=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroui/js/app/views/hidden-initialization-view")), "html", null, true);
        echo "\"
                         data-layout=\"separate\">
                    ";
        // line 26
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("index_navButtons_before", $context)) ? (_twig_default_filter(($context["index_navButtons_before"] ?? null), "index_navButtons_before")) : ("index_navButtons_before")), ($context["buttonsPlaceholderData"] ?? null));
        // line 27
        echo "                    ";
        $this->displayBlock('navButtons', $context, $blocks);
        // line 28
        echo "                    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("index_navButtons_after", $context)) ? (_twig_default_filter(($context["index_navButtons_after"] ?? null), "index_navButtons_after")) : ("index_navButtons_after")), ($context["buttonsPlaceholderData"] ?? null));
        // line 29
        echo "                </div>
                <div class=\"page-title-center\"
                     data-page-component-module=\"oroui/js/app/components/view-component\"
                     data-page-component-options=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroui/js/app/views/page-center-title-view")), "html", null, true);
        echo "\">
                    <div class=\"filters-state-view-container\"></div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 38
        $this->displayBlock('content_datagrid', $context, $blocks);
    }

    // line 27
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 38
    public function block_content_datagrid($context, array $blocks = array())
    {
        // line 39
        echo "        ";
        if (array_key_exists("gridName", $context)) {
            // line 40
            echo "            ";
            if (array_key_exists("gridScope", $context)) {
                // line 41
                echo "                ";
                $context["gridName"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName(($context["gridName"] ?? null), ($context["gridScope"] ?? null));
                // line 42
                echo "            ";
            }
            // line 43
            echo "            ";
            $context["renderParams"] = twig_array_merge(array("enableFullScreenLayout" => true, "enableViews" => true, "showViewsInNavbar" => true, "filtersStateElement" => ".filters-state-view-container"), ((            // line 49
array_key_exists("renderParams", $context)) ? (_twig_default_filter(($context["renderParams"] ?? null), array())) : (array())));
            // line 50
            echo "            ";
            echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), ($context["renderParams"] ?? null));
            echo "

            ";
            // line 53
            echo "            ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:actions:index.html.twig", 53);
            // line 54
            echo "
            <div ";
            // line 55
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orodatagrid/js/app/components/datagrid-allow-tracking-component", "options" => array("gridName" =>             // line 58
($context["gridName"] ?? null))));
            // line 60
            echo "></div>
        ";
        }
        // line 62
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 62,  138 => 60,  136 => 58,  135 => 55,  132 => 54,  129 => 53,  123 => 50,  121 => 49,  119 => 43,  116 => 42,  113 => 41,  110 => 40,  107 => 39,  104 => 38,  99 => 27,  95 => 38,  86 => 32,  81 => 29,  78 => 28,  75 => 27,  73 => 26,  68 => 24,  60 => 19,  53 => 14,  50 => 13,  45 => 10,  42 => 9,  38 => 1,  35 => 6,  33 => 5,  31 => 4,  29 => 3,  27 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:actions:index.html.twig", "");
    }
}
