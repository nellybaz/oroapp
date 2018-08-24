<?php

/* OroFrontendBundle:layouts/blank/imports/datagrid:datagrid.html.twig */
class __TwigTemplate_e2a3799ffb851b58ac2ff7e044ca1a9c6575940cb05b31d1a9f117071b70b88c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'datagrid_widget' => array($this, 'block_datagrid_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('datagrid_widget', $context, $blocks);
    }

    public function block_datagrid_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["grid_render_parameters"] = twig_array_merge(array("viewLoading" => true),         // line 4
($context["grid_render_parameters"] ?? null));
        // line 5
        echo "
    ";
        // line 6
        $context["themeOptions"] = (($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array()), array())) : (array()));
        // line 7
        echo "
    ";
        // line 8
        if ((($context["split_to_cells"] ?? null) != false)) {
            // line 9
            echo "        ";
            $context["themeOptions"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["themeOptions"] ?? null), array("headerRowTemplateSelector" => "#template-datagrid-header-row", "rowTemplateSelector" => "#template-datagrid-row"));
            // line 13
            echo "        ";
            $context["toolbarOptions"] = (($this->getAttribute(($context["grid_render_parameters"] ?? null), "toolbarOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["grid_render_parameters"] ?? null), "toolbarOptions", array()), array())) : (array()));
            // line 14
            echo "        ";
            $context["toolbarOptions"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["toolbarOptions"] ?? null), array("columnManager" => array("addSorting" => false)));
            // line 17
            echo "        ";
            $context["grid_render_parameters"] = twig_array_merge(($context["grid_render_parameters"] ?? null), array("toolbarOptions" =>             // line 18
($context["toolbarOptions"] ?? null)));
            // line 20
            echo "        ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $context["grid_render_parameters"] = twig_array_merge(($context["grid_render_parameters"] ?? null), array("themeOptions" =>         // line 24
($context["themeOptions"] ?? null)));
        // line 26
        echo "    ";
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroFrontendBundle:layouts/blank/imports/datagrid:datagrid.html.twig", 26);
        // line 27
        echo "    ";
        echo $context["dataGrid"]->getrenderGrid(($context["grid_full_name"] ?? null), ($context["grid_parameters"] ?? null), ($context["grid_render_parameters"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank/imports/datagrid:datagrid.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  65 => 26,  63 => 24,  62 => 23,  59 => 22,  53 => 20,  51 => 18,  49 => 17,  46 => 14,  43 => 13,  40 => 9,  38 => 8,  35 => 7,  33 => 6,  30 => 5,  28 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank/imports/datagrid:datagrid.html.twig", "");
    }
}
