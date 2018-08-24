<?php

/* OroPaymentTermBundle:PaymentTerm:linkWithTarget.html.twig */
class __TwigTemplate_31546ddfd9da7e9e0ef1ef3b74779c587065ea8a59849f2d7b87233981bbe7e5 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["urlPath"] ?? null), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("target", $context)) ? (($context["target"] ?? null)) : ("_blank")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_trim_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null))), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "OroPaymentTermBundle:PaymentTerm:linkWithTarget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentTermBundle:PaymentTerm:linkWithTarget.html.twig", "");
    }
}
