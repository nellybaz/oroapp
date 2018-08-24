<?php

/* OroCallBundle:Call/widget:info.html.twig */
class __TwigTemplate_0403e0267c98a8a1e8944f92239f8eb4d1de0e2e6ed34c0223a5e75f5e7a0e4a extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCallBundle:Call/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroCallBundle:Call/widget:info.html.twig", 2);
        // line 3
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroCallBundle:Call/widget:info.html.twig", 3);
        // line 4
        echo "
<div class=\"widget-content form-horizontal box-content box-split-content row-fluid\">
    <div class=\"responsive-block\">
        ";
        // line 8
        echo "        ";
        if ((array_key_exists("renderContexts", $context) && ($context["renderContexts"] ?? null))) {
            // line 9
            echo "            <div class=\"activity-context-activity-list\">
                ";
            // line 10
            echo $context["AC"]->getactivity_contexts(($context["entity"] ?? null));
            echo "
            </div>
        ";
        }
        // line 13
        echo "        ";
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.subject.label"), $this->getAttribute(($context["entity"] ?? null), "subject", array()));
        echo "
        ";
        // line 15
        echo "        ";
        echo $context["ui"]->getrenderSwitchableHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.notes.label"), $this->getAttribute(($context["entity"] ?? null), "notes", array()));
        echo "
        ";
        // line 16
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.call_date_time.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "callDateTime", array())));
        echo "
    </div>
    <div class=\"responsive-block\">
        ";
        // line 19
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.phone_number.label"), $context["ui"]->getrenderPhoneWithActions($this->getAttribute(($context["entity"] ?? null), "phoneNumber", array()), ($context["entity"] ?? null)));
        echo "
        ";
        // line 20
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.direction.label"), (($this->getAttribute(($context["entity"] ?? null), "direction", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "direction", array()), "label", array())) : (null)));
        echo "
        ";
        // line 22
        echo "        ";
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.duration.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDuration($this->getAttribute(($context["entity"] ?? null), "duration", array()), array("default" => true)));
        echo "
    </div>
    <div class=\"responsive-block\">
        ";
        // line 25
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCallBundle:Call/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  66 => 22,  62 => 20,  58 => 19,  52 => 16,  47 => 15,  42 => 13,  36 => 10,  33 => 9,  30 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCallBundle:Call/widget:info.html.twig", "");
    }
}
