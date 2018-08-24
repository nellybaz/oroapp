<?php

/* OroCustomerBundle:layouts:blank/page/top_nav_anonymous.html.twig */
class __TwigTemplate_925600052de9c2537663025c8b23c5c58ed506fea7a9b48bc74bd4411d1e7130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_top_authorization_container_widget' => array($this, 'block__top_authorization_container_widget'),
            '_top_sign_in_link_widget' => array($this, 'block__top_sign_in_link_widget'),
            '_top_registration_link_widget' => array($this, 'block__top_registration_link_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_top_authorization_container_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_top_sign_in_link_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('_top_registration_link_widget', $context, $blocks);
    }

    // line 1
    public function block__top_authorization_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid__column grid__column--5"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 11
    public function block__top_sign_in_link_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " link"));
        // line 15
        echo "
    ";
        // line 16
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    // line 19
    public function block__top_registration_link_widget($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " link"));
        // line 23
        echo "
    ";
        // line 24
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts:blank/page/top_nav_anonymous.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  77 => 23,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  59 => 12,  56 => 11,  49 => 7,  45 => 6,  42 => 5,  39 => 2,  36 => 1,  32 => 19,  29 => 18,  27 => 11,  24 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts:blank/page/top_nav_anonymous.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/page/top_nav_anonymous.html.twig");
    }
}
