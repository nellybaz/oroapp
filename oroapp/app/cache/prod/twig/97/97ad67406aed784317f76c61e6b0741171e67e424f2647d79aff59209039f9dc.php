<?php

/* OroTagBundle::tagField.html.twig */
class __TwigTemplate_6c5e74fa7f432cf02ae1b1f38ada96c55fba3a261b224cab821d3b56df280841 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTagBundle::tagField.html.twig", 1);
        // line 2
        $context["Tag"] = $this->loadTemplate("OroTagBundle::macros.html.twig", "OroTagBundle::tagField.html.twig", 2);
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_tag_view")) {
            // line 4
            echo "    <div class=\"row-fluid\">
        <div class=\"responsive-block\">
    ";
            // line 6
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tag.entity_plural_label"), $context["Tag"]->getrenderView(($context["entity"] ?? null)));
            echo "
        </div>
        <div class=\"responsive-block\"></div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroTagBundle::tagField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTagBundle::tagField.html.twig", "");
    }
}
