<?php

/* OroFrontendBundle:layouts/default/oro_frontend_style_book_group:forms_button.html.twig */
class __TwigTemplate_7b3bdda55e123cda9e86bb3b6907dca20d86bc51b44f902ace68373b65ee0c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_style_book_forms_description_widget' => array($this, 'block__style_book_forms_description_widget'),
            '_style_book_button_element_action_widget' => array($this, 'block__style_book_button_element_action_widget'),
            '_style_book_button_element_info_widget' => array($this, 'block__style_book_button_element_info_widget'),
            '_style_book_button_element_primary_widget' => array($this, 'block__style_book_button_element_primary_widget'),
            '_style_book_button_element_link_widget' => array($this, 'block__style_book_button_element_link_widget'),
            '_style_book_button_element_large_size_widget' => array($this, 'block__style_book_button_element_large_size_widget'),
            '_style_book_button_element_size_l_widget' => array($this, 'block__style_book_button_element_size_l_widget'),
            '_style_book_button_element_size_m_widget' => array($this, 'block__style_book_button_element_size_m_widget'),
            '_style_book_button_element_size_s_widget' => array($this, 'block__style_book_button_element_size_s_widget'),
            '_style_book_button_element_inline_group_widget' => array($this, 'block__style_book_button_element_inline_group_widget'),
            '_style_book_button_element_group_widget' => array($this, 'block__style_book_button_element_group_widget'),
            '_style_book_button_element_btn_group_widget' => array($this, 'block__style_book_button_element_btn_group_widget'),
            '_style_book_button_element_btn_group_vertical_widget' => array($this, 'block__style_book_button_element_btn_group_vertical_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_style_book_forms_description_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('_style_book_button_element_action_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_style_book_button_element_info_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('_style_book_button_element_primary_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('_style_book_button_element_link_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('_style_book_button_element_large_size_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('_style_book_button_element_size_l_widget', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('_style_book_button_element_size_m_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('_style_book_button_element_size_s_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('_style_book_button_element_inline_group_widget', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('_style_book_button_element_group_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('_style_book_button_element_btn_group_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('_style_book_button_element_btn_group_vertical_widget', $context, $blocks);
    }

    // line 1
    public function block__style_book_forms_description_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"content-section\">
        <p class=\"content-section__text\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.grid.text_content"), "html", null, true);
        echo "</p>
        <p class=\"content-section__text\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.grid.text_content_first"), "html", null, true);
        echo "</p>
    </div>
";
    }

    // line 8
    public function block__style_book_button_element_action_widget($context, array $blocks = array())
    {
        // line 9
        echo "    <button class=\"btn btn--action\" type=\"submit\">Action Button</button>
";
    }

    // line 12
    public function block__style_book_button_element_info_widget($context, array $blocks = array())
    {
        // line 13
        echo "    <button class=\"btn btn--info\" type=\"submit\">Info Button</button>
";
    }

    // line 16
    public function block__style_book_button_element_primary_widget($context, array $blocks = array())
    {
        // line 17
        echo "    <button class=\"btn btn--primary\" type=\"submit\">Primary Button</button>
";
    }

    // line 20
    public function block__style_book_button_element_link_widget($context, array $blocks = array())
    {
        // line 21
        echo "    <a href=\"#\" class=\"btn btn--link\">Link Button</a>
";
    }

    // line 24
    public function block__style_book_button_element_large_size_widget($context, array $blocks = array())
    {
        // line 25
        echo "    <button class=\"btn btn--default btn--large\" type=\"submit\">Default Button, Large</button>
";
    }

    // line 28
    public function block__style_book_button_element_size_l_widget($context, array $blocks = array())
    {
        // line 29
        echo "    <button class=\"btn btn--default btn--size-l\" type=\"submit\">Default Button, L(arge)</button>
";
    }

    // line 32
    public function block__style_book_button_element_size_m_widget($context, array $blocks = array())
    {
        // line 33
        echo "    <button class=\"btn btn--default btn--size-m\" type=\"submit\">Default Button, M(edium)</button>
";
    }

    // line 36
    public function block__style_book_button_element_size_s_widget($context, array $blocks = array())
    {
        // line 37
        echo "    <button class=\"btn btn--default btn--size-s\" type=\"submit\">Default Button, S(mall)</button>
";
    }

    // line 40
    public function block__style_book_button_element_inline_group_widget($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"btn-group\">
        <button class=\"btn btn--default btn--size-s\">
            <i class=\"fa-filter hide-text\"></i>
        </button>
        <button class=\"btn btn--default btn--size-s\">
            <i class=\"fa-repeat hide-text\"></i>
        </button>
        <button class=\"btn btn--default btn--size-s\">
            <i class=\"fa-refresh hide-text\"></i>
        </button>
    </div>
";
    }

    // line 54
    public function block__style_book_button_element_group_widget($context, array $blocks = array())
    {
        // line 55
        echo "    <div class=\"btn-group\">
        <a href=\"javascript: void(0);\" class=\"btn btn--info\">Button with a drop-down</a>
        <a href=\"#\" data-toggle=\"dropdown\" class=\"btn dropdown-toggle btn--info\">
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" href=\"#\">Action A</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Action B</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Action C</a></li>
        </ul>
    </div>
";
    }

    // line 68
    public function block__style_book_button_element_btn_group_widget($context, array $blocks = array())
    {
        // line 69
        echo "    <div class=\"btn-group\" role=\"group\">
        <button type=\"button\" class=\"btn btn--default\">Left</button>
        <button type=\"button\" class=\"btn btn--default\">Middle</button>
        <button type=\"button\" class=\"btn btn--default\">Right</button>
    </div>
";
    }

    // line 76
    public function block__style_book_button_element_btn_group_vertical_widget($context, array $blocks = array())
    {
        // line 77
        echo "    <div class=\"btn-group-vertical\" role=\"group\">
        <button type=\"button\" class=\"btn btn--default\">Top</button>
        <button type=\"button\" class=\"btn btn--default\">Middle</button>
        <button type=\"button\" class=\"btn btn--default\">Bottom</button>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/default/oro_frontend_style_book_group:forms_button.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  228 => 77,  225 => 76,  216 => 69,  213 => 68,  198 => 55,  195 => 54,  180 => 41,  177 => 40,  172 => 37,  169 => 36,  164 => 33,  161 => 32,  156 => 29,  153 => 28,  148 => 25,  145 => 24,  140 => 21,  137 => 20,  132 => 17,  129 => 16,  124 => 13,  121 => 12,  116 => 9,  113 => 8,  106 => 4,  102 => 3,  99 => 2,  96 => 1,  92 => 76,  89 => 75,  87 => 68,  84 => 67,  82 => 54,  79 => 53,  77 => 40,  74 => 39,  72 => 36,  69 => 35,  67 => 32,  64 => 31,  62 => 28,  59 => 27,  57 => 24,  54 => 23,  52 => 20,  49 => 19,  47 => 16,  44 => 15,  42 => 12,  39 => 11,  37 => 8,  34 => 7,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/default/oro_frontend_style_book_group:forms_button.html.twig", "");
    }
}
