<?php

/* OroDataAuditBundle:js:audit-condition-type-select.html.twig */
class __TwigTemplate_52444c7846eafb2d4602f838da156b078972020ebaf2796368310b2460b7e83b extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataAuditBundle:js:audit-condition-type-select.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:js:audit-condition-type-select.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text-template\" id=\"template-audit-condition-type-select\">
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
", "OroDataAuditBundle:js:audit-condition-type-select.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataAuditBundle/Resources/views/js/audit-condition-type-select.html.twig");
    }
}
