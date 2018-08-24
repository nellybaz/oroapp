<?php

/* OroSalesBundle:Lead/Autocomplete:result.html.twig */
class __TwigTemplate_fad05af903a9d5f6515cbfcc3e90a0f588815b9088caccbec1cba566eed1ad7a extends Twig_Template
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
        echo "<%= highlight(_.escape(name)) %><%if (typeof firstName != 'undefined' && typeof lastName != 'undefined') { %> - <%= highlight(_.escape(firstName)) %> <%= highlight(_.escape(lastName)) %><% } %>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Lead/Autocomplete:result.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Lead/Autocomplete:result.html.twig", "");
    }
}
