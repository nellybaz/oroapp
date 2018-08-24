<?php

/* OroAccountBundle:Account/widget:info.html.twig */
class __TwigTemplate_d95385f7552964752b130073199e00682948796f4b5532d748db916271eaced7 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroAccountBundle:Account/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroAccountBundle:Account/widget:info.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["account"] ?? null), "name")) {
            // line 7
            echo "            <div class=\"responsive-block\">
                ";
            // line 8
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.name.label"), $this->getAttribute(($context["account"] ?? null), "name", array()));
            echo "
            </div>
        ";
        }
        // line 11
        echo "
        <div class=\"responsive-block\">
            ";
        // line 13
        echo $context["entityConfig"]->getrenderDynamicFields(($context["account"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroAccountBundle:Account/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  39 => 11,  33 => 8,  30 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAccountBundle:Account/widget:info.html.twig", "");
    }
}
