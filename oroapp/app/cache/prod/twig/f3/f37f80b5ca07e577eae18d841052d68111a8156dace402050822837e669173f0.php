<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_grid/grid.html.twig */
class __TwigTemplate_1bd900f242d296ec29938c4b11d5f3fa9948c775abbf60ec736f007250a8e620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_sticky_element_toolbar_widget' => array($this, 'block__sticky_element_toolbar_widget'),
            '_product_require_js_config_widget' => array($this, 'block__product_require_js_config_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_sticky_element_toolbar_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('_product_require_js_config_widget', $context, $blocks);
    }

    // line 1
    public function block__sticky_element_toolbar_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" => "sticky_element_toolbar", "~class" => " sticky-panel__toolbar toolbar-sticky-container"));
        // line 6
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 9
    public function block__product_require_js_config_widget($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ( !$this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            // line 11
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-grid-toolbar" => "top", "data-sticky-target" => "top-sticky-panel", "data-proxy-data" => "true", "data-sticky" => array("isSticky" => true, "autoWidth" => true, "toggleClass" => "toolbar-sticky-container", "placeholderId" => "sticky_element_toolbar")));
            // line 22
            echo "    ";
        }
        // line 23
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_grid/grid.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 23,  54 => 22,  51 => 11,  48 => 10,  45 => 9,  36 => 6,  33 => 2,  30 => 1,  26 => 9,  23 => 8,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_grid/grid.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_grid/grid.html.twig");
    }
}
