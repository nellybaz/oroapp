<?php

/* OroAddressBundle:Include:javascript.html.twig */
class __TwigTemplate_b5ddd0ae60de8dbf2127ea06c2135b1ff15cc64dbcc4bec9647a23834f22b7bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_region_updater_js' => array($this, 'block_oro_region_updater_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_region_updater_js', $context, $blocks);
    }

    public function block_oro_region_updater_js($context, array $blocks = array())
    {
        // line 2
        echo "    <script type=\"text/template\" id=\"region-chooser-template\">
        <% _.each(regions, function(region, i) { %>
            <option value=\"<%= region.get('combinedCode') %>\"><%= region.get('name') %></option>
        <% }); %>
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroAddressBundle:Include:javascript.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAddressBundle:Include:javascript.html.twig", "");
    }
}
