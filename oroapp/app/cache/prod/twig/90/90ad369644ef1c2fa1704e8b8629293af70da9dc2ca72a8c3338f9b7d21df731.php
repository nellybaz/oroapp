<?php

/* OroEmailBundle:Mailbox/Datagrid/Property:processSettings.html.twig */
class __TwigTemplate_1244763a131fd018b470faf5329609d6a1c974b1eb9c93eccc32a9a4280c4055 extends Twig_Template
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
        $context["settings"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "processSettings"), "method");
        // line 2
        if ((null === ($context["settings"] ?? null))) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("None"), "html", null, true);
            echo "
";
        } else {
            // line 5
            echo "    ";
            $context["type"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "processSettings.type"), "method");
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->getMailboxProcessLabel(($context["type"] ?? null))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Mailbox/Datagrid/Property:processSettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  29 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Mailbox/Datagrid/Property:processSettings.html.twig", "");
    }
}
