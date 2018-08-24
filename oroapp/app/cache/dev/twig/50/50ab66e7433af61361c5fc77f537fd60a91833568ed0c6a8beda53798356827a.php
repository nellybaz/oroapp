<?php

/* OroUIBundle:Default:help.html.twig */
class __TwigTemplate_27da5c478fb0add8c150de03e62b9ab12e7dc2da2b34c7d202a862e88a7feb89 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Default:help.html.twig"));

        // line 1
        echo "<li><a class=\"help no-hash\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\HelpBundle\Twig\HelpExtension')->getHelpLinkUrl(), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa-question-circle\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Get help"), "html", null, true);
        echo "\"></i></a></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li><a class=\"help no-hash\" href=\"{{ get_help_link() }}\" target=\"_blank\"><i class=\"fa-question-circle\" title=\"{{ 'Get help'|trans }}\"></i></a></li>
", "OroUIBundle:Default:help.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/Default/help.html.twig");
    }
}
