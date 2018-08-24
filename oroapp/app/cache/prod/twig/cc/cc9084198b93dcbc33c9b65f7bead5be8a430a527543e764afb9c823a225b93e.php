<?php

/* OroDotmailerBundle:DataField/widget:info.html.twig */
class __TwigTemplate_7cb94a1751133bc240efa058a414f28cdbbafdc3c0fec75189f0efcea87da06c extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDotmailerBundle:DataField/widget:info.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 6
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.integration.label"), $this->getAttribute(($context["entity"] ?? null), "channel", array()));
        echo "
            ";
        // line 7
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "
            ";
        // line 8
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.type.label"), $this->getAttribute(($context["entity"] ?? null), "type", array()));
        echo "
            ";
        // line 9
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.visibility.label"), $this->getAttribute(($context["entity"] ?? null), "visibility", array()));
        echo "
            ";
        // line 10
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.default_value.label"), $this->getAttribute(($context["entity"] ?? null), "defaultValue", array()));
        echo "
            ";
        // line 11
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.notes.label"), $this->getAttribute(($context["entity"] ?? null), "notes", array()));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroDotmailerBundle:DataField/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDotmailerBundle:DataField/widget:info.html.twig", "");
    }
}
