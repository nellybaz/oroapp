<?php

/* OroCustomerBundle:layouts/default/imports/oro_customer_user_role_form:form.html.twig */
class __TwigTemplate_541f6d89faccb2097bc3f5ee70fb8a7a31621edaba66f1de814b339120d2c708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_customer_frontend_customer_user_role_widget' => array($this, 'block_oro_customer_frontend_customer_user_role_widget'),
            '_oro_customer_frontend_customer_user_role_entity_row' => array($this, 'block__oro_customer_frontend_customer_user_role_entity_row'),
            '_oro_customer_frontend_customer_user_role_action_row' => array($this, 'block__oro_customer_frontend_customer_user_role_action_row'),
            '_oro_customer_frontend_customer_user_role_label_row' => array($this, 'block__oro_customer_frontend_customer_user_role_label_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_customer_frontend_customer_user_role_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('_oro_customer_frontend_customer_user_role_entity_row', $context, $blocks);
        // line 48
        $this->displayBlock('_oro_customer_frontend_customer_user_role_action_row', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('_oro_customer_frontend_customer_user_role_label_row', $context, $blocks);
    }

    // line 1
    public function block_oro_customer_frontend_customer_user_role_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["fields"] = array();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["child"]) {
            // line 4
            echo "        ";
            if (!twig_in_filter($context["name"], array(0 => "appendUsers", 1 => "removeUsers", 2 => "entity", 3 => "privileges", 4 => "action"))) {
                // line 5
                echo "            ";
                $context["fields"] = twig_array_merge(($context["fields"] ?? null), array($context["name"] => ("#" . $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "id", array()))));
                // line 6
                echo "        ";
            }
            // line 7
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    ";
        // line 9
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCustomerBundle:layouts/default/imports/oro_customer_user_role_form:form.html.twig", 9);
        // line 10
        echo "
    ";
        // line 11
        $context["options"] = array("elSelector" => ".btn.role-submit", "formName" => $this->getAttribute($this->getAttribute(        // line 13
($context["form"] ?? null), "vars", array()), "name", array()), "formSelector" => ("#" . $this->getAttribute($this->getAttribute(        // line 14
($context["form"] ?? null), "vars", array()), "id", array())), "labelSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
($context["form"] ?? null), "label", array()), "vars", array()), "id", array())), "privilegesSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 16
($context["form"] ?? null), "privileges", array()), "vars", array()), "id", array())), "appendUsersSelector" => "#roleAppendUsers", "removeUsersSelector" => "#roleRemoveUsers", "fields" =>         // line 19
($context["fields"] ?? null));
        // line 21
        echo "
    <div data-page-component-module=\"orouser/js/views/role-view\"
         data-page-component-options=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
    </div>

    ";
        // line 26
        $context["customerUserRoleOptions"] = array("customerFieldId" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
($context["form"] ?? null), "customer", array()), "vars", array()), "id", array())), "datagridName" => "frontend-customer-customer-users-grid-update", "originalValue" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 29
($context["form"] ?? null), "customer", array()), "vars", array()), "value", array()), "enableConfirmation" => (($this->getAttribute(        // line 30
($context["attr"] ?? null), "enableConfirmation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "enableConfirmation", array()), false)) : (false)), "dialogOptions" => array("className" => "modal modal-primary"));
        // line 33
        echo "
    <div ";
        // line 34
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orocustomer/js/app/components/customer-user-role-component", "options" =>         // line 36
($context["customerUserRoleOptions"] ?? null)));
        // line 37
        echo " >
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer", array()), 'row');
        echo "
    </div>

    ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row');
        echo "

    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appendUsers", array()), 'widget', array("id" => "roleAppendUsers"));
        echo "
    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removeUsers", array()), 'widget', array("id" => "roleRemoveUsers"));
        echo "
";
    }

    // line 47
    public function block__oro_customer_frontend_customer_user_role_entity_row($context, array $blocks = array())
    {
    }

    // line 48
    public function block__oro_customer_frontend_customer_user_role_action_row($context, array $blocks = array())
    {
    }

    // line 50
    public function block__oro_customer_frontend_customer_user_role_label_row($context, array $blocks = array())
    {
        // line 51
        echo "    <div class=\"grid__column--5 pull-left\">
        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label" => "oro.customer.frontend.sections.customer_user_role.label"));
        echo "
        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/imports/oro_customer_user_role_form:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  149 => 54,  145 => 53,  141 => 52,  138 => 51,  135 => 50,  130 => 48,  125 => 47,  119 => 44,  115 => 43,  110 => 41,  104 => 38,  101 => 37,  99 => 36,  98 => 34,  95 => 33,  93 => 30,  92 => 29,  91 => 27,  90 => 26,  84 => 23,  80 => 21,  78 => 19,  77 => 16,  76 => 15,  75 => 14,  74 => 13,  73 => 11,  70 => 10,  68 => 9,  65 => 8,  59 => 7,  56 => 6,  53 => 5,  50 => 4,  45 => 3,  42 => 2,  39 => 1,  35 => 50,  32 => 49,  30 => 48,  28 => 47,  25 => 46,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/imports/oro_customer_user_role_form:form.html.twig", "");
    }
}
