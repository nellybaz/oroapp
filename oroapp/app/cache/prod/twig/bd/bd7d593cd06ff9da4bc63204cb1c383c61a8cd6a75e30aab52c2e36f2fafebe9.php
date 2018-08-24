<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/logo.html.twig */
class __TwigTemplate_f5f2c166462740539d8e73efa47b366a87b4eff014f0a91be9257e8c599ead95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_logo_widget' => array($this, 'block__logo_widget'),
            '_logo_print_widget' => array($this, 'block__logo_print_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_logo_widget', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('_logo_print_widget', $context, $blocks);
    }

    // line 1
    public function block__logo_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6b6855e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6b6855e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6b6855e_logo-oroacem_1.svg");
            // line 3
            echo "        ";
            $context["imgUrl"] = ($context["asset_url"] ?? null);
            // line 4
            echo "    ";
        } else {
            // asset "6b6855e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6b6855e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6b6855e.svg");
            // line 3
            echo "        ";
            $context["imgUrl"] = ($context["asset_url"] ?? null);
            // line 4
            echo "    ";
        }
        unset($context["asset_url"]);
        // line 5
        echo "    
    ";
        // line 6
        $context["attr_img"] = ((array_key_exists("attr_img", $context)) ? (_twig_default_filter(($context["attr_img"] ?? null), array())) : (array()));
        // line 7
        echo "    ";
        $context["attr_img"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr_img"] ?? null), array("src" =>         // line 8
($context["imgUrl"] ?? null)));
        // line 10
        echo "
    ";
        // line 11
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 14
    public function block__logo_print_widget($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayBlock("_logo_widget", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/logo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  71 => 14,  65 => 11,  62 => 10,  60 => 8,  58 => 7,  56 => 6,  53 => 5,  49 => 4,  46 => 3,  41 => 4,  38 => 3,  33 => 2,  30 => 1,  26 => 14,  23 => 13,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/logo.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/logo.html.twig");
    }
}
