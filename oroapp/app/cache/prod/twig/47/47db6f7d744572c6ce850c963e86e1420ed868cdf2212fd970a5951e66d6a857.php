<?php

/* OroRedirectBundle:Form:fields.html.twig */
class __TwigTemplate_d64b91e1200db984292133f92871d8fd1c046d7363601b8c3ec485b4e3d6ff6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_redirect_localized_slug_widget' => array($this, 'block_oro_redirect_localized_slug_widget'),
            'oro_redirect_slug_widget' => array($this, 'block_oro_redirect_slug_widget'),
            'oro_redirect_localized_slug_with_redirect_widget' => array($this, 'block_oro_redirect_localized_slug_with_redirect_widget'),
            'oro_redirect_slug_with_redirect_widget' => array($this, 'block_oro_redirect_slug_with_redirect_widget'),
            'oro_redirect_sluggable_prefix_widget' => array($this, 'block_oro_redirect_sluggable_prefix_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_redirect_localized_slug_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('oro_redirect_slug_widget', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('oro_redirect_localized_slug_with_redirect_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('oro_redirect_slug_with_redirect_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('oro_redirect_sluggable_prefix_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_redirect_localized_slug_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "slugify_component_options", array(), "any", true, true)) {
            // line 4
            echo "            data-page-component-module=\"ororedirect/js/app/components/localized-field-slugify-component\"
            data-page-component-options=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "slugify_component_options", array())), "html", null, true);
            echo "\"
        ";
        }
        // line 7
        echo "    >
        <div class=\"control-group\">
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "values", array()), 'widget');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "values", array()), 'errors');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ids", array()), 'widget');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ids", array()), 'errors');
        echo "
        </div>
    </div>
";
    }

    // line 17
    public function block_oro_redirect_slug_widget($context, array $blocks = array())
    {
        // line 18
        echo "    <div
            data-page-component-module=\"ororedirect/js/app/components/text-field-slugify-component\"
            data-page-component-options=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "slugify_component_options", array())), "html", null, true);
        echo "\"
    >
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 26
    public function block_oro_redirect_localized_slug_with_redirect_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "slugPrototypes", array()), 'widget');
        echo "
    ";
        // line 28
        if ($this->getAttribute(($context["form"] ?? null), "createRedirect", array(), "any", true, true)) {
            // line 29
            echo "        <div class=\"hide\"
            data-page-component-module=\"ororedirect/js/app/components/confirm-slug-change-component\"
            data-page-component-options=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "confirm_slug_change_component_options", array())), "html", null, true);
            echo "\"
        >
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "createRedirect", array()), 'widget');
            echo "
        </div>
    ";
        }
    }

    // line 38
    public function block_oro_redirect_slug_with_redirect_widget($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "textSlugPrototype", array()), 'widget');
        echo "
    ";
        // line 40
        if ($this->getAttribute(($context["form"] ?? null), "createRedirect", array(), "any", true, true)) {
            // line 41
            echo "        <div class=\"hide\"
            data-page-component-module=\"ororedirect/js/app/components/confirm-slug-change-component\"
            data-page-component-options=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "confirm_slug_change_component_options", array())), "html", null, true);
            echo "\"
        >
            ";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "createRedirect", array()), 'widget');
            echo "
        </div>
    ";
        }
    }

    // line 50
    public function block_oro_redirect_sluggable_prefix_widget($context, array $blocks = array())
    {
        // line 51
        echo "    <div
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "ororedirect/js/app/views/prefix-redirect-view", "selectors" => array("strategySelector" => "select[name\$=\"__redirect_generation_strategy][value]\"]", "prefixSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 57
($context["form"] ?? null), "prefix", array()), "vars", array()), "id", array()))), "askStrategyName" => $this->getAttribute($this->getAttribute(        // line 59
($context["form"] ?? null), "vars", array()), "askStrategyName", array()), "isAskStrategy" => $this->getAttribute($this->getAttribute(        // line 60
($context["form"] ?? null), "vars", array()), "isAskStrategy", array()))), "html", null, true);
        // line 61
        echo "\">
        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prefix", array()), 'widget');
        echo "
        <div class=\"create-redirect hide\">
            ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "createRedirect", array()), 'row');
        echo "
        </div>
        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroRedirectBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  186 => 66,  181 => 64,  176 => 62,  173 => 61,  171 => 60,  170 => 59,  169 => 57,  168 => 53,  164 => 51,  161 => 50,  153 => 45,  148 => 43,  144 => 41,  142 => 40,  137 => 39,  134 => 38,  126 => 33,  121 => 31,  117 => 29,  115 => 28,  110 => 27,  107 => 26,  100 => 22,  95 => 20,  91 => 18,  88 => 17,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 7,  59 => 5,  56 => 4,  54 => 3,  51 => 2,  48 => 1,  44 => 50,  41 => 49,  39 => 38,  36 => 37,  34 => 26,  31 => 25,  29 => 17,  26 => 16,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRedirectBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RedirectBundle/Resources/views/Form/fields.html.twig");
    }
}
