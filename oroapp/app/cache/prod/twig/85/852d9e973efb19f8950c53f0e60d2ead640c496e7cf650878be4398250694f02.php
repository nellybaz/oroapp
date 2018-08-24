<?php

/* OroCustomerBundle:Pagestate:pagestate.html.twig */
class __TwigTemplate_568be5811c65a51d728f5353664f846757187cec96ea0fd0c4fbdf53e6769603 extends Twig_Template
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
        echo "<span id=\"pagestate-routes\" data-pagestate-post-route = \"oro_api_frontend_post_pagestate\"
      data-pagestate-put-route =\"oro_api_frontend_put_pagestate\"
      data-pagestate-checkid-route =\"oro_api_frontend_get_pagestate_checkid\"
></span>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:Pagestate:pagestate.html.twig";
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
        return new Twig_Source("", "OroCustomerBundle:Pagestate:pagestate.html.twig", "");
    }
}
