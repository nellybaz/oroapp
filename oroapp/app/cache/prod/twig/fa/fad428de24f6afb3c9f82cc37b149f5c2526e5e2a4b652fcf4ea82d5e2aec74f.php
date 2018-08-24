<?php

/* OroTrackingBundle:TrackingEvent/Property:url.html.twig */
class __TwigTemplate_c0dd1e698e94e9337c39f83e0127d0083dd4908a3f114f5e36ccfb5883338c47 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "url"), "method"), "html", null, true);
        echo "\">
    ";
        // line 2
        if ($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "title"), "method")) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "title"), "method"), "html", null, true);
            echo "
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "OroTrackingBundle:TrackingEvent/Property:url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  32 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTrackingBundle:TrackingEvent/Property:url.html.twig", "");
    }
}
