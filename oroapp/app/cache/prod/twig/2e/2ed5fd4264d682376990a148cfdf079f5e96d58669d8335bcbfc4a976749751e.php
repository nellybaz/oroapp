<?php

/* OroFallbackBundle:Form:fields.html.twig */
class __TwigTemplate_57e97f8537dba990d26ac53f7732f9368e73f84516ac29884337e1724052f2ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_fallback_website_property_widget' => array($this, 'block_oro_fallback_website_property_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_fallback_website_property_widget', $context, $blocks);
    }

    public function block_oro_fallback_website_property_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <table class=\"fallback-container\"
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orolocale/js/app/views/fallback-view")), "html", null, true);
        echo "\"
            data-layout=\"separate\"
            >
        <tr class=\"fallback-item\">
            <td class=\"fallback-item-label\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "default", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</td>
            <td class=\"fallback-item-value\">
                ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "default", array()), 'widget');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "default", array()), 'errors');
        echo "
            </td>
            <td class=\"fallback-status\"></td>
        </tr>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "websites", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["website"]) {
            // line 16
            echo "            <tr class=\"fallback-item\" style=\"display: none\">
                <td class=\"fallback-item-label\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["website"], "vars", array()), "label", array())), "html", null, true);
            echo "</td>
                <td colspan=\"2\">
                    ";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["website"], 'widget');
            echo "
                    ";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["website"], 'errors');
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['website'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "OroFallbackBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  69 => 20,  65 => 19,  60 => 17,  57 => 16,  53 => 15,  46 => 11,  42 => 10,  37 => 8,  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFallbackBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FallbackBundle/Resources/views/Form/fields.html.twig");
    }
}
