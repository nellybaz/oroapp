<?php

/* OroActivityBundle:Activity:activities.html.twig */
class __TwigTemplate_16b0651a5f656721372c53147a3ee5e67ebb395e59ef105e3406fa5f1f4c3619 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroActivityBundle:Activity:activities.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    ";
        $this->loadTemplate("OroUIBundle::tab_panel.html.twig", "OroActivityBundle:Activity:activities.html.twig", 4)->display($context);
        $context["panelContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 6
        echo $context["UI"]->getscrollSubblock(null, array(0 => ($context["panelContent"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroActivityBundle:Activity:activities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActivityBundle:Activity:activities.html.twig", "");
    }
}
