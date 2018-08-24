<?php

/* OroFrontendBundle:layouts/blank/oro_frontend_style_book_group:forms_button.html.twig */
class __TwigTemplate_25619ccb45abc79fe4bf1ac16da93fc953174ac1ebcb59d772a99b2fbcac3090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_style_book_forms_description_widget' => array($this, 'block__style_book_forms_description_widget'),
            '_style_book_button_element_widget' => array($this, 'block__style_book_button_element_widget'),
            '_style_book_button_element_group_widget' => array($this, 'block__style_book_button_element_group_widget'),
            '_style_book_button_element_inline_group_widget' => array($this, 'block__style_book_button_element_inline_group_widget'),
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
        $this->displayBlock('_style_book_button_element_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_style_book_button_element_group_widget', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('_style_book_button_element_inline_group_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('_style_book_button_element_btn_group_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
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
    public function block__style_book_button_element_widget($context, array $blocks = array())
    {
        // line 9
        echo "    <button class=\"btn\" type=\"button\">An Ordinary Button</button>
";
    }

    // line 12
    public function block__style_book_button_element_group_widget($context, array $blocks = array())
    {
        // line 13
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

    // line 26
    public function block__style_book_button_element_inline_group_widget($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"btn-group\">
    <button class=\"btn\">
        <i class=\"fa-filter hide-text\"></i>
    </button>
    <button class=\"btn\">
        <i class=\"fa-repeat hide-text\"></i>
    </button>
    <button class=\"btn\">
        <i class=\"fa-refresh hide-text\"></i>
    </button>
</div>
";
    }

    // line 40
    public function block__style_book_button_element_btn_group_widget($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"btn-group\" role=\"group\">
        <button type=\"button\" class=\"btn btn-default\">Left</button>
        <button type=\"button\" class=\"btn btn-default\">Middle</button>
        <button type=\"button\" class=\"btn btn-default\">Right</button>
    </div>
";
    }

    // line 48
    public function block__style_book_button_element_btn_group_vertical_widget($context, array $blocks = array())
    {
        // line 49
        echo "    <div class=\"btn-group-vertical\" role=\"group\">
        <button type=\"button\" class=\"btn btn-default\">Top</button>
        <button type=\"button\" class=\"btn btn-default\">Middle</button>
        <button type=\"button\" class=\"btn btn-default\">Bottom</button>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank/oro_frontend_style_book_group:forms_button.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 49,  127 => 48,  118 => 41,  115 => 40,  100 => 27,  97 => 26,  82 => 13,  79 => 12,  74 => 9,  71 => 8,  64 => 4,  60 => 3,  57 => 2,  54 => 1,  50 => 48,  47 => 47,  45 => 40,  42 => 39,  40 => 26,  37 => 25,  35 => 12,  32 => 11,  30 => 8,  27 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank/oro_frontend_style_book_group:forms_button.html.twig", "");
    }
}
