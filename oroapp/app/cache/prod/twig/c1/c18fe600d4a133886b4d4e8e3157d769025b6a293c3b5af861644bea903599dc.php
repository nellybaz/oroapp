<?php

/* OroDataGridBundle:layouts/blank/page:layout.html.twig */
class __TwigTemplate_2155805a92d6bf550740df5b5bce96836299831591ed6892d2f0a4bafb4f87ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'datagrid_row_widget' => array($this, 'block_datagrid_row_widget'),
            'datagrid_cell_widget' => array($this, 'block_datagrid_cell_widget'),
            'datagrid_cell_value_widget' => array($this, 'block_datagrid_cell_value_widget'),
            'datagrid_header_row_widget' => array($this, 'block_datagrid_header_row_widget'),
            'datagrid_header_cell_widget' => array($this, 'block_datagrid_header_cell_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('datagrid_row_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('datagrid_cell_widget', $context, $blocks);
        // line 11
        $this->displayBlock('datagrid_cell_value_widget', $context, $blocks);
        // line 15
        $this->displayBlock('datagrid_header_row_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('datagrid_header_cell_widget', $context, $blocks);
    }

    // line 1
    public function block_datagrid_row_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <script type=\"text/html\" id=\"template-datagrid-row\">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </script>
";
    }

    // line 7
    public function block_datagrid_cell_widget($context, array $blocks = array())
    {
        // line 8
        echo "    <td <%= attributes('";
        echo twig_escape_filter($this->env, ($context["column_name"] ?? null), "html", null, true);
        echo "', ";
        echo twig_jsonencode_filter(($context["attr"] ?? null));
        echo ") %>>";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</td>
";
    }

    // line 11
    public function block_datagrid_cell_value_widget($context, array $blocks = array())
    {
        // line 12
        echo "<%= render('";
        echo twig_escape_filter($this->env, ($context["column_name"] ?? null), "html", null, true);
        echo "') %>";
    }

    // line 15
    public function block_datagrid_header_row_widget($context, array $blocks = array())
    {
        // line 16
        echo "    <script type=\"text/html\" id=\"template-datagrid-header-row\">
        ";
        // line 17
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </script>
";
    }

    // line 21
    public function block_datagrid_header_cell_widget($context, array $blocks = array())
    {
        // line 22
        echo "    <th <%= attributes('";
        echo twig_escape_filter($this->env, ($context["column_name"] ?? null), "html", null, true);
        echo "', ";
        echo twig_jsonencode_filter(($context["attr"] ?? null));
        echo ") %>><%= render('";
        echo twig_escape_filter($this->env, ($context["column_name"] ?? null), "html", null, true);
        echo "') %></th>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:layouts/blank/page:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  91 => 21,  84 => 17,  81 => 16,  78 => 15,  72 => 12,  69 => 11,  58 => 8,  55 => 7,  48 => 3,  45 => 2,  42 => 1,  38 => 21,  35 => 20,  33 => 15,  31 => 11,  29 => 7,  26 => 6,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataGridBundle:layouts/blank/page:layout.html.twig", "");
    }
}
