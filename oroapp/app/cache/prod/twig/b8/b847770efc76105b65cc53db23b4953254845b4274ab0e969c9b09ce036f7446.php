<?php

/* OroDataGridBundle:layouts/blank:default.html.twig */
class __TwigTemplate_b1b97337b12e759f15bc8ed219845496afaa7e4ec91ac7fa68e651969bb4a5c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'datagrid_widget' => array($this, 'block_datagrid_widget'),
            'taggable_datagrid_widget' => array($this, 'block_taggable_datagrid_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["grid_parameters"] = twig_array_merge(array("enableFullScreenLayout" => true), ($context["grid_parameters"] ?? null));
        // line 2
        $this->displayBlock('datagrid_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('taggable_datagrid_widget', $context, $blocks);
    }

    // line 2
    public function block_datagrid_widget($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if ((($context["split_to_cells"] ?? null) != false)) {
            // line 4
            echo "        ";
            $context["themeOptions"] = (($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array()), array())) : (array()));
            // line 5
            echo "        ";
            $context["themeOptions"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["themeOptions"] ?? null), array("headerRowTemplateSelector" => "#template-datagrid-header-row", "rowTemplateSelector" => "#template-datagrid-row"));
            // line 9
            echo "        ";
            $context["toolbarOptions"] = (($this->getAttribute(($context["grid_render_parameters"] ?? null), "toolbarOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["grid_render_parameters"] ?? null), "toolbarOptions", array()), array())) : (array()));
            // line 10
            echo "        ";
            $context["toolbarOptions"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["toolbarOptions"] ?? null), array("columnManager" => array("addSorting" => false)));
            // line 13
            echo "        ";
            $context["grid_render_parameters"] = twig_array_merge(($context["grid_render_parameters"] ?? null), array("themeOptions" =>             // line 14
($context["themeOptions"] ?? null), "toolbarOptions" =>             // line 15
($context["toolbarOptions"] ?? null)));
            // line 17
            echo "        ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
    ";
        }
        // line 19
        echo "    ";
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroDataGridBundle:layouts/blank:default.html.twig", 19);
        // line 20
        echo "    ";
        echo $context["dataGrid"]->getrenderGrid(($context["grid_full_name"] ?? null), ($context["grid_parameters"] ?? null), ($context["grid_render_parameters"] ?? null));
        echo "
";
    }

    // line 23
    public function block_taggable_datagrid_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "

    ";
        // line 26
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDataGridBundle:layouts/blank:default.html.twig", 26);
        // line 27
        echo "
    <div ";
        // line 28
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orodatagrid/js/app/components/datagrid-allow-tracking-component", "options" => array("gridName" =>         // line 31
($context["grid_full_name"] ?? null))));
        // line 33
        echo "></div>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:layouts/blank:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  86 => 31,  85 => 28,  82 => 27,  80 => 26,  74 => 24,  71 => 23,  64 => 20,  61 => 19,  55 => 17,  53 => 15,  52 => 14,  50 => 13,  47 => 10,  44 => 9,  41 => 5,  38 => 4,  35 => 3,  32 => 2,  28 => 23,  25 => 22,  23 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataGridBundle:layouts/blank:default.html.twig", "");
    }
}
