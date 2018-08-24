<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form.html.twig */
class __TwigTemplate_bfd9361e6fd3539551771892cd7aafd84a5ff61ca02f43943c0b7075dad0d579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block_row' => array($this, 'block_block_row'),
            '_login_page_widget' => array($this, 'block__login_page_widget'),
            '_login_form_start_widget' => array($this, 'block__login_form_start_widget'),
            '_login_form_end_widget' => array($this, 'block__login_form_end_widget'),
            '_login_form_notifications_widget' => array($this, 'block__login_form_notifications_widget'),
            '_login_form_remember_widget' => array($this, 'block__login_form_remember_widget'),
            '_login_form_username_widget' => array($this, 'block__login_form_username_widget'),
            '_login_form_password_widget' => array($this, 'block__login_form_password_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form.html.twig"));

        // line 1
        $this->displayBlock('block_row', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_login_page_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('_login_form_start_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('_login_form_end_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('_login_form_notifications_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('_login_form_remember_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('_login_form_username_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('_login_form_password_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_block_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_row"));

        // line 2
        echo "<div class=\"form-row\">
        ";
        // line 3
        if ((($context["type"] ?? $this->getContext($context, "type")) != "checkbox")) {
            // line 4
            echo "        <div class=\"form-row__label\">";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'label');
            echo "</div>
        ";
        }
        // line 6
        echo "        <div class=\"form-row__content\">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "</div>
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block__login_page_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_login_page_widget"));

        // line 11
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " login-form"));
        // line 14
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block__login_form_start_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_login_form_start_widget"));

        // line 20
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("id" => "form-login", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_security_check"), "method" => "post"));
        // line 25
        echo "    <form ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"grid\">
            ";
        // line 27
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block__login_form_end_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_login_form_end_widget"));

        // line 31
        echo "            ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
        </div>
    </form>
    <script type=\"text/javascript\">
        require(['jquery', 'jquery.validate'],
            function (\$) {
                \$('#form-login').validate({
                    onfocusout: false
                });
            });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block__login_form_notifications_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_login_form_notifications_widget"));

        // line 45
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " notification"));
        // line 48
        echo "    <div class=\"form-row\">
        <div class=\"notifications notifications--error\">";
        // line 49
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "</div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block__login_form_remember_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_login_form_remember_widget"));

        // line 54
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'row');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block__login_form_username_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_login_form_username_widget"));

        // line 58
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("required" => "required", "autofocus" => true, "data-validation" => array("NotBlank" => array("payload" => null), "Email" => array("payload" => null)), "~class" => " input input--full"));
        // line 64
        echo "
    ";
        // line 65
        $context["label_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("~class" => " label"));
        // line 68
        echo "
    ";
        // line 69
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'row', array("attr" =>         // line 70
($context["attr"] ?? $this->getContext($context, "attr")), "label_attr" =>         // line 71
($context["label_attr"] ?? $this->getContext($context, "label_attr"))));
        // line 72
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 75
    public function block__login_form_password_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_login_form_password_widget"));

        // line 76
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-validation" => array("NotBlank" => array("payload" => null))));
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock("_login_form_username_widget", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  252 => 80,  249 => 79,  246 => 76,  240 => 75,  232 => 72,  230 => 71,  229 => 70,  228 => 69,  225 => 68,  223 => 65,  220 => 64,  217 => 58,  211 => 57,  201 => 54,  195 => 53,  185 => 49,  182 => 48,  179 => 45,  173 => 44,  153 => 31,  147 => 30,  138 => 27,  132 => 25,  129 => 20,  123 => 19,  113 => 15,  108 => 14,  105 => 11,  99 => 10,  89 => 6,  83 => 4,  81 => 3,  78 => 2,  72 => 1,  65 => 75,  62 => 74,  60 => 57,  57 => 56,  55 => 53,  52 => 52,  50 => 44,  47 => 43,  45 => 30,  42 => 29,  40 => 19,  37 => 18,  35 => 10,  32 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block block_row -%}
    <div class=\"form-row\">
        {% if type != 'checkbox' %}
        <div class=\"form-row__label\">{{ block_label(block) -}}</div>
        {% endif %}
        <div class=\"form-row__content\">{{ block_widget(block) -}}</div>
    </div>
{%- endblock %}

{% block _login_page_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' login-form'
    }) %}
    <div {{ block('block_attributes') }}>
        {{ block('container_widget') }}
    </div>
{% endblock %}

{% block _login_form_start_widget %}
    {% set attr = layout_attr_defaults(attr, {
        'id': 'form-login',
        'action': path('oro_customer_customer_user_security_check'),
        'method': 'post'
    }) %}
    <form {{ block('block_attributes') }}>
        <div class=\"grid\">
            {{ block_widget(block) }}
{% endblock %}

{% block _login_form_end_widget %}
            {{ block_widget(block) }}
        </div>
    </form>
    <script type=\"text/javascript\">
        require(['jquery', 'jquery.validate'],
            function (\$) {
                \$('#form-login').validate({
                    onfocusout: false
                });
            });
    </script>
{% endblock %}

{% block _login_form_notifications_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' notification'
    }) %}
    <div class=\"form-row\">
        <div class=\"notifications notifications--error\">{{ block_widget(block) }}</div>
    </div>
{% endblock %}

{% block _login_form_remember_widget %}
    {{ block_row(block) }}
{% endblock %}

{% block _login_form_username_widget %}
    {% set attr = layout_attr_defaults(attr, {
        'required': 'required',
        'autofocus': true,
        'data-validation': {\"NotBlank\":{\"payload\":null}, \"Email\":{\"payload\": null}},
        '~class': \" input input--full\"
    }) %}

    {% set label_attr = layout_attr_defaults(label_attr, {
        '~class': \" label\"
    }) %}

    {{ block_row(block, {
        attr: attr,
        label_attr: label_attr
    }) }}
{% endblock %}

{% block _login_form_password_widget %}
    {% set attr = layout_attr_defaults(attr, {
        'data-validation': {\"NotBlank\":{\"payload\":null}},
    }) %}

    {{ block('_login_form_username_widget') }}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form.html.twig");
    }
}
