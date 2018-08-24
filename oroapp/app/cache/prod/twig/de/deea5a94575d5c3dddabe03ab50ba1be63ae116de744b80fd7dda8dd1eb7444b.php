<?php

/* OroOrganizationBundle:Js:organizationStructure.js.twig */
class __TwigTemplate_81e3e3533212c79bbd507352449917a43e98c173d13bc33014b8372d858fa7fa extends Twig_Template
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
        echo "<script type=\"text/template\" id=\"organization-children-template\">
    <% _.each(children, function(child) { %>
        <% if (child.hasOwnProperty('children')) { %>
            <div class=\"accordion-group\">
                <div class=\"accordion-heding\">
        <% } %>
                    <div class=\"oro-clearfix\">
                        <% if (child.hasOwnProperty('children')) { %>
                            <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" href=\"#businessUnit_<%= child.id %>\"></a>
                        <% } %>
                        <label>
                            <input type=\"checkbox\"
                                   data-name=\"businessUnit\"
                                   value=\"<%= child.id %>\"
                                   <% if (selected.indexOf(child.id) !== -1) { %>
                                       checked=\"checked\"
                                   <% } %>
                                   class=\"bu\"
                                   data-organization=\"<%= organization %>\"/>
                            <%= child.name %>
                        </label>
                    </div>
        <% if (child.hasOwnProperty('children')) { %>
                </div>
                <div id=\"businessUnit_<%= child.id %>\" class=\"accordion-body collapse<%= !accordionEnabled ? ' in' : '' %>\">
                    <div class=\"accordion-inner\"></div>
                </div>
            </div>
        <% } %>
    <% }) %>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:Js:organizationStructure.js.twig";
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
        return new Twig_Source("", "OroOrganizationBundle:Js:organizationStructure.js.twig", "");
    }
}
