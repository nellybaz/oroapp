<?php

/* OroActionBundle:Operation:ajax-button.html.twig */
class __TwigTemplate_eb5f0ff2b435a1d33ff47a60c6dbaed803ef99b5ba4f6b58c5e4c78c1624f955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:button.html.twig", "OroActionBundle:Operation:ajax-button.html.twig", 1);
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
        $context["isAjax"] = true;
        // line 5
        echo "    ";
        $this->displayParentBlock("button", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroActionBundle:Operation:ajax-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActionBundle:Operation:ajax-button.html.twig", "");
    }
}
