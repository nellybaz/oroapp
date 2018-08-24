<?php

/* OroDataAuditBundle:js:audit-condition-type-select.html.twig */
class __TwigTemplate_2bf4b1c0708edc65d039b40fc48a4d7d196ab4ad9271ae4c170877c754ff508b extends Twig_Template
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
        echo "<script type=\"text-template\" id=\"template-audit-condition-type-select\">
    <span class=\"active-filter\">
        <div>
            <div class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><%= selected === \"changed\" ? changedLabel : changedToValueLabel %></a>
                <ul class=\"dropdown-menu\">
                    <li <%= (selected === \"changed\") ? 'class=\"active\"' : '' %>>
                        <a class=\"choice-value\" href=\"#\" data-value=\"changed\"><%= changedLabel %></a>
                    </li>
                    <li <%= (selected === \"changed_to_value\") ? 'class=\"active\"' : '' %>>
                        <a class=\"choice-value\" href=\"#\" data-value=\"changed_to_value\"><%= changedToValueLabel %></a>
                    </li>
                </ul>

                <select style=\"display: none;\">
                    <option <%= (selected === \"changed\") ? \"selected\" : \"\" %> value=\"changed\"><%= changedLabel %></option>
                    <option <%= (selected === \"changed_to_value\") ? \"selected\" : \"\" %> value=\"changed_to_value\"><%= changedToValueLabel %></option>
                </select>
                <span class=\"active-filter\">
                </span>
            </div>
        </div>
    </span>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:js:audit-condition-type-select.html.twig";
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
        return new Twig_Source("", "OroDataAuditBundle:js:audit-condition-type-select.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataAuditBundle/Resources/views/js/audit-condition-type-select.html.twig");
    }
}
