<?php

/* OroFrontendBundle:layouts/blank/oro_frontend_style_book_group:grid.html.twig */
class __TwigTemplate_ef2e6b5cbaa50b091b5289c6ee1b1db66c88a6f60b94dbd0acc8eaa6a8828e5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_style_book_grid_element_grid_widget' => array($this, 'block__style_book_grid_element_grid_widget'),
            '_style_book_grid_element_offset_row_widget' => array($this, 'block__style_book_grid_element_offset_row_widget'),
            '_style_book_grid_element_offset_widget' => array($this, 'block__style_book_grid_element_offset_widget'),
            '_style_book_grid_element_offset_bottom_widget' => array($this, 'block__style_book_grid_element_offset_bottom_widget'),
            '_style_book_grid_element_half_widget' => array($this, 'block__style_book_grid_element_half_widget'),
            '_style_book_grid_element_clear_widget' => array($this, 'block__style_book_grid_element_clear_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_style_book_grid_element_grid_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('_style_book_grid_element_offset_row_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('_style_book_grid_element_offset_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('_style_book_grid_element_offset_bottom_widget', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('_style_book_grid_element_half_widget', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('_style_book_grid_element_clear_widget', $context, $blocks);
    }

    // line 1
    public function block__style_book_grid_element_grid_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
            <div class=\"grid__column grid__column--1\">grid__column--1</div>
        </div>
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--3\">grid__column--3</div>
            <div class=\"grid__column grid__column--9\">grid__column--9</div>
        </div>
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--4\">grid__column--4</div>
            <div class=\"grid__column grid__column--4\">grid__column--4</div>
            <div class=\"grid__column grid__column--4\">grid__column--4</div>
        </div>
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--12\">grid__column--12</div>
        </div>
    </div>
";
    }

    // line 36
    public function block__style_book_grid_element_offset_row_widget($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid"));
        // line 40
        echo "
    <div ";
        // line 41
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"grid__row grid__row--has-twin-row\">
            <div class=\"grid__column grid__column--6\">grid__row--has-twin-row</div>
            <div class=\"grid__column grid__column--6\">grid__row--has-twin-row</div>
        </div>
        <div class=\"grid__row grid__row--offset-l\">
            <div class=\"grid__column grid__column--6\">grid__row--offset-l (default theme)</div>
            <div class=\"grid__column grid__column--6\">grid__row--offset-l (default theme)</div>
        </div>
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--6\">grid__row</div>
            <div class=\"grid__column grid__column--6\">grid__row</div>
        </div>
        <div class=\"grid__row grid__row--offset-m\">
            <div class=\"grid__column grid__column--6\">grid__row--offset-m</div>
            <div class=\"grid__column grid__column--6\">grid__row--offset-m</div>
        </div>
        <div class=\"grid__row grid__row--offset-s\">
            <div class=\"grid__column grid__column--6\">grid__row--offset-s</div>
            <div class=\"grid__column grid__column--6\">grid__row--offset-s</div>
        </div>
        <div class=\"grid__row grid__row--offset-none\">
            <div class=\"grid__column grid__column--6\">grid__row--offset-none</div>
            <div class=\"grid__column grid__column--6\">grid__row--offset-none</div>
        </div>
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--6\">grid__row</div>
            <div class=\"grid__column grid__column--6\">grid__row</div>
        </div>
    </div>
";
    }

    // line 73
    public function block__style_book_grid_element_offset_widget($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid"));
        // line 77
        echo "
    <div ";
        // line 78
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--3 grid__column--offset-m\">grid__column--3 grid__column--offset-m</div>
            <div class=\"grid__column grid__column--3 grid__column--offset-m\">grid__column--3 grid__column--offset-m</div>
            <div class=\"grid__column grid__column--3\">grid__column--3</div>
        </div>
    </div>
";
    }

    // line 87
    public function block__style_book_grid_element_offset_bottom_widget($context, array $blocks = array())
    {
        // line 88
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid"));
        // line 91
        echo "
    <div ";
        // line 92
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--6 grid__column--offset-y\">grid__column--6 grid__column--offset-y</div>
            <div class=\"grid__column grid__column--6 grid__column--offset-y\">grid__column--6 grid__column--offset-y</div>
            <div class=\"grid__column grid__column--6 grid__column--offset-y\">grid__column--6 grid__column--offset-y</div>
            <div class=\"grid__column grid__column--6 grid__column--offset-y\">grid__column--6 grid__column--offset-y</div>
            <div class=\"grid__column grid__column--6 grid__column--offset-y\">grid__column--6 grid__column--offset-y</div>
            <div class=\"grid__column grid__column--6 grid__column--offset-y\">grid__column--6 grid__column--offset-y</div>
        </div>
    </div>
";
    }

    // line 104
    public function block__style_book_grid_element_half_widget($context, array $blocks = array())
    {
        // line 105
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid"));
        // line 108
        echo "
    <div ";
        // line 109
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column-half\">grid__column-half</div>
            <div class=\"grid__column grid__column-half\">grid__column-half</div>
        </div>
    </div>
";
    }

    // line 117
    public function block__style_book_grid_element_clear_widget($context, array $blocks = array())
    {
        // line 118
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid"));
        // line 121
        echo "
    <div ";
        // line 122
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--3\">grid__column--3</div>
            <div class=\"grid__column grid__column--3\">grid__column--3</div>
            <div class=\"grid__column grid__column--3 grid__column--both\">grid__column--3 grid__column--both</div>
            <div class=\"grid__column grid__column--3\">grid__column--3</div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank/oro_frontend_style_book_group:grid.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  214 => 122,  211 => 121,  208 => 118,  205 => 117,  194 => 109,  191 => 108,  188 => 105,  185 => 104,  170 => 92,  167 => 91,  164 => 88,  161 => 87,  149 => 78,  146 => 77,  143 => 74,  140 => 73,  105 => 41,  102 => 40,  99 => 37,  96 => 36,  63 => 6,  60 => 5,  57 => 2,  54 => 1,  50 => 117,  47 => 116,  45 => 104,  42 => 103,  40 => 87,  37 => 86,  35 => 73,  32 => 72,  30 => 36,  27 => 35,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank/oro_frontend_style_book_group:grid.html.twig", "");
    }
}
