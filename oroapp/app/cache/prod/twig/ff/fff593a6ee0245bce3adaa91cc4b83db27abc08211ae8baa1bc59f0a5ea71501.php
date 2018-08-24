<?php

/* OroTaskBundle:Task/widget:info.html.twig */
class __TwigTemplate_51d024d4e466d8841c5d847ca64a04e36d25a34e142542feb49c5e089288ed95 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTaskBundle:Task/widget:info.html.twig", 1);
        // line 2
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroTaskBundle:Task/widget:info.html.twig", 2);
        // line 3
        $context["U"] = $this->loadTemplate("OroUserBundle::macros.html.twig", "OroTaskBundle:Task/widget:info.html.twig", 3);
        // line 4
        echo "
<div class=\"widget-content form-horizontal box-content row-fluid\">
    <div class=\"responsive-block\">
        ";
        // line 8
        echo "        ";
        if ((array_key_exists("renderContexts", $context) && ($context["renderContexts"] ?? null))) {
            // line 9
            echo "            <div class=\"activity-context-activity-list\">
                ";
            // line 10
            echo $context["AC"]->getactivity_contexts(($context["entity"] ?? null), ($context["target"] ?? null), true);
            echo "
            </div>
        ";
        }
        // line 13
        echo "        ";
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.subject.label"), $this->getAttribute(($context["entity"] ?? null), "subject", array()));
        echo "
        ";
        // line 14
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.description.label"), $this->getAttribute(($context["entity"] ?? null), "description", array()));
        echo "
        ";
        // line 15
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.due_date.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "dueDate", array())));
        echo "
        ";
        // line 16
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.task_priority.label"), $this->getAttribute(($context["entity"] ?? null), "taskPriority", array()));
        echo "
        ";
        // line 17
        ob_start();
        // line 18
        echo "            ";
        if ($this->getAttribute(($context["entity"] ?? null), "owner", array())) {
            // line 19
            echo "                ";
            echo $context["U"]->getrender_user_name($this->getAttribute(($context["entity"] ?? null), "owner", array()));
            echo "
                ";
            // line 20
            echo $context["U"]->getuser_business_unit_name($this->getAttribute(($context["entity"] ?? null), "owner", array()));
            echo "
            ";
        }
        // line 22
        echo "        ";
        $context["ownerData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "        ";
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.owner.label"), ($context["ownerData"] ?? null));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  74 => 22,  69 => 20,  64 => 19,  61 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  42 => 13,  36 => 10,  33 => 9,  30 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task/widget:info.html.twig", "");
    }
}
