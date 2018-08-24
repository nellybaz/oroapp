<?php

/* OroEmailBundle:Email/Datagrid/Property:subject.html.twig */
class __TwigTemplate_c258c8e0c4512163fe1e14de345347b744cf8dae242811d3c63c0151a3bf54b6 extends Twig_Template
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
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email/Datagrid/Property:subject.html.twig", 1);
        // line 2
        $context["emailBody"] = array("textBody" => $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "body_content"), "method"));
        // line 3
        $context["isNew"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "is_new"), "method");
        // line 4
        $context["valueToShow"] = ((($context["value"] ?? null)) ? (($context["value"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.subject.no_subject.label")));
        // line 5
        echo "
<div class=\"nowrap-ellipsis\">
    <div>
        ";
        // line 8
        if (($context["isNew"] ?? null)) {
            // line 9
            echo "            <strong class=\"email-subject\">";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(($context["valueToShow"] ?? null));
            echo "</strong>
        ";
        } else {
            // line 11
            echo "            <span class=\"email-subject\">";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(($context["valueToShow"] ?? null));
            echo "</span>
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute(($context["emailBody"] ?? null), "textBody", array(), "any", true, true)) {
            // line 14
            echo "            <div class=\"email-body\">";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($context["EA"]->getemail_short_body(($context["emailBody"] ?? null)));
            echo "</div>
        ";
        }
        // line 16
        echo "    </div>
</div>
<div class=\"td-expander\"></div>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Datagrid/Property:subject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  49 => 14,  46 => 13,  40 => 11,  34 => 9,  32 => 8,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Datagrid/Property:subject.html.twig", "");
    }
}
