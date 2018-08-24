<?php

/* OroNavigationBundle:ApplicationMenu:pinButton.html.twig */
class __TwigTemplate_6f6c4d75e26c29bfc198caedd258dfcac52e6093523009f5df4c8d7a90371617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["contentProviderContent"] = twig_first($this->env, $this->getAttribute(($context["oro_ui_content_provider_manager"] ?? null), "getContent", array(0 => array(0 => "navigationElements")), "method"));
        // line 2
        echo "<div id=\"bookmark-buttons\">
    <div class=\"navigation clearfix\">
        <div class=\"top-action-box\">
            <button class=\"btn favorite-button\" ";
        // line 5
        if (($this->getAttribute(($context["contentProviderContent"] ?? null), "favoriteButton", array(), "array") == false)) {
            echo "style=\"display: none\"";
        }
        // line 6
        echo "                    data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->renderSerialized(), "html", null, true);
        echo "\"
                    data-title-rendered=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->render(), "html", null, true);
        echo "\"
                    data-title-rendered-short=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->renderShort(), "html", null, true);
        echo "\"
                    title=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.favorites.button.title"), "html", null, true);
        echo "\">
                        <i class=\"fa-star hide-text\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.favorites.button"), "html", null, true);
        echo "</i>
            </button>
            <button class=\"btn minimize-button\" ";
        // line 12
        if (($this->getAttribute(($context["contentProviderContent"] ?? null), "pinButton", array(), "array") == false)) {
            echo "style=\"display: none\"";
        }
        // line 13
        echo "                    data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->renderSerialized(), "html", null, true);
        echo "\"
                    data-title-rendered=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->render(), "html", null, true);
        echo "\"
                    data-title-rendered-short=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\TitleExtension')->renderShort(), "html", null, true);
        echo "\"
                    title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.pins.button.title"), "html", null, true);
        echo "\">
                        <i class=\"fa-thumb-tack hide-text\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.pins.button"), "html", null, true);
        echo "</i>
            </button>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:pinButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  69 => 16,  65 => 15,  61 => 14,  56 => 13,  52 => 12,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:ApplicationMenu:pinButton.html.twig", "");
    }
}
