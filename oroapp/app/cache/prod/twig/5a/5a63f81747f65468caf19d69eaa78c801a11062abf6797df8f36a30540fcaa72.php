<?php

/* OroHangoutsCallBundle:Call/widget:additionalProperties.html.twig */
class __TwigTemplate_4f1fe9eb7318a789ad2e3f5ffa56e69b4d76ead232a6ca7cfd75b39591d7bb0c extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroHangoutsCallBundle:Call/widget:additionalProperties.html.twig", 1);
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context["hangoutOptions"] = array("widget_size" => 70);
        // line 6
        echo "    ";
        $this->loadTemplate("OroHangoutsCallBundle:Call:updateActions.html.twig", "OroHangoutsCallBundle:Call/widget:additionalProperties.html.twig", 6)->display($context);
        $context["hangoutButton"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo $context["UI"]->getrenderAttribute($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.hangoutscall.label"), ($context["hangoutButton"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroHangoutsCallBundle:Call/widget:additionalProperties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  26 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroHangoutsCallBundle:Call/widget:additionalProperties.html.twig", "");
    }
}
