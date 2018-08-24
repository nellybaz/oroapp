<?php

/* OroNavigationBundle:menuUpdate:savedSuccessMessage.html.twig */
class __TwigTemplate_6f1cfc08a812c0da243372da22bd0d804d0f69104fbd6db97fa04e1e27bbcdd6 extends Twig_Template
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
        ob_start();
        // line 2
        echo "<a href=\"#\" onclick=\"window.location.reload(false);return false;\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.reload_link.label"), "html", null, true);
        // line 4
        echo "</a>";
        $context["reloadLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.navigation.menuupdate.saved_message", array("%reload_link%" => ($context["reloadLink"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:menuUpdate:savedSuccessMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:menuUpdate:savedSuccessMessage.html.twig", "");
    }
}
