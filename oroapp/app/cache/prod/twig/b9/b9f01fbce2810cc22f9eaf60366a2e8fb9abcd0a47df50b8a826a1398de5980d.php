<?php

/* OroDistributionBundle:Package:install_form.html.twig */
class __TwigTemplate_39abeab580dfbc4ed605ae6623d8b1e59b5a4df85fb60abedc2c15f7c3eb22b9 extends Twig_Template
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
        echo "<div class=\"control-group\">
    <label for=\"oro_package_install_packageName\" class=\"required\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.name"), "html", null, true);
        echo "</label>
    <div class=\"controls\">
        <input type=\"text\"
               id=\"oro_package_install_packageName\"
               required=\"required\"
               autocomplete=\"off\"
               data-required-message=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.messages.enter_package_name"), "html", null, true);
        echo "\"
        />
    </div>
    <div class=\"actions\">
        <a href=\"#\" class=\"btn btn-success ajax install\"
           data-action=\"install\"
           data-params='{\"packageName\": \"#oro_package_install_packageName\"}'>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.action.install"), "html", null, true);
        echo "</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroDistributionBundle:Package:install_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  31 => 8,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDistributionBundle:Package:install_form.html.twig", "");
    }
}
