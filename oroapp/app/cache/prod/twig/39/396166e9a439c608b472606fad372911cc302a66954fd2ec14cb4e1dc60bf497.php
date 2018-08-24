<?php

/* OroCommerceMenuBundle:layouts/default/page:main_menu_logged.html.twig */
class __TwigTemplate_f730b520522a728f66c7f2c60772dd5122790ef0750580ba77eae455b67f8361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_header_row_shopping_widget' => array($this, 'block__header_row_shopping_widget'),
            '_header_row_shopping_trigger_widget' => array($this, 'block__header_row_shopping_trigger_widget'),
            '_main_menu_messages_widget' => array($this, 'block__main_menu_messages_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_header_row_shopping_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('_header_row_shopping_trigger_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_main_menu_messages_widget', $context, $blocks);
    }

    // line 1
    public function block__header_row_shopping_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"header-row__container shopping-list-widget\">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 7
    public function block__header_row_shopping_trigger_widget($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"header-row__trigger\" data-toggle=\"dropdown\">
        <div class=\"nav-trigger\">
            ";
        // line 10
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 15
    public function block__main_menu_messages_widget($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " main-menu__item main-menu__item--nested"));
        // line 19
        echo "    <li ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        //TODO: confused of names
        <button class=\"messages-widget__trigger\" data-oro-mpa-trigger>
            <span class=\"badge messages-widget__badge\">3</span>
            <span class=\"badge badge--dark\"><i class=\"fa-comment\"></i></span>
            <span class=\"messages-widget__title text-uppercase\">Messages</span>
            <i class=\"fa-angle-down\"></i>
        </button>
    </li>
";
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:layouts/default/page:main_menu_logged.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  67 => 16,  64 => 15,  56 => 10,  52 => 8,  49 => 7,  42 => 3,  39 => 2,  36 => 1,  32 => 15,  29 => 14,  27 => 7,  24 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:layouts/default/page:main_menu_logged.html.twig", "");
    }
}
