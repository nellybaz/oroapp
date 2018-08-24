<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/search_row.html.twig */
class __TwigTemplate_c252986df5ebfcb5ed52963d07c59c3eb7f0839c7d51c64342788ebe2f2f84d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_search_row_main_container_widget' => array($this, 'block__search_row_main_container_widget'),
            '_search_row_extra_container_widget' => array($this, 'block__search_row_extra_container_widget'),
            '_search_row_trigger_widget' => array($this, 'block__search_row_trigger_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_search_row_main_container_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('_search_row_extra_container_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_search_row_trigger_widget', $context, $blocks);
    }

    // line 1
    public function block__search_row_main_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"header-row__container hidden-on-desktop\">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 7
    public function block__search_row_extra_container_widget($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"header-row__dropdown\">
        <div class=\"search-container\" data-header-row-search-container></div>
    </div>
";
    }

    // line 13
    public function block__search_row_trigger_widget($context, array $blocks = array())
    {
        // line 14
        echo "    <button class=\"header-row__trigger hidden-on-desktop\" data-toggle=\"dropdown\">
        <span class=\"nav-trigger__icon nav-trigger__icon--transparent nav-trigger__icon--large\">
            <span class=\"fa-search fa--gray fa--no-offset\"></span>
        </span>
    </button>
    <div class=\"header-row__toggle\" data-header-row-toggle>
        ";
        // line 20
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/search_row.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  62 => 14,  59 => 13,  52 => 8,  49 => 7,  42 => 3,  39 => 2,  36 => 1,  32 => 13,  29 => 12,  27 => 7,  24 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/search_row.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/search_row.html.twig");
    }
}
