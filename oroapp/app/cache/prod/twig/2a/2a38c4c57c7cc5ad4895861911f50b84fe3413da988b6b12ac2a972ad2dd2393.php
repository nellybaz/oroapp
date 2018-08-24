<?php

/* OroRFPBundle:RequestAdditionalNote/Datagrid:type.html.twig */
class __TwigTemplate_e487a2dce9ed129f1b7b274275abc17ba009fb80416403c26a6b5b6b00161fad extends Twig_Template
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
        $context["value"] = (("oro.rfp.requestadditionalnote.type." . ($context["value"] ?? null)) . ".label");
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? null)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:RequestAdditionalNote/Datagrid:type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:RequestAdditionalNote/Datagrid:type.html.twig", "");
    }
}
