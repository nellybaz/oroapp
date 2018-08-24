<?php

/* OroActionBundle:Operation:crud-button.html.twig */
class __TwigTemplate_f6b1a44685406223f0a7c14a89c740750cd29e77a618a43354c57c5edc4128b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:button.html.twig", "OroActionBundle:Operation:crud-button.html.twig", 1);
        $this->blocks = array(
            'button' => array($this, 'block_button'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroActionBundle:Operation:button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_button($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["actionData"] ?? null), "entityLabel", array(), "any", true, true)) {
            // line 5
            echo "        ";
            $context["linkTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["params"] ?? null), "frontendOptions", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "frontendOptions", array(), "any", false, true), "title", array()), $this->getAttribute(($context["params"] ?? null), "label", array()))) : ($this->getAttribute(($context["params"] ?? null), "label", array()))), array("%entityLabel%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["actionData"] ?? null), "entityLabel", array()))));
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        $this->displayParentBlock("button", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroActionBundle:Operation:crud-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActionBundle:Operation:crud-button.html.twig", "");
    }
}
