<?php

/* OroCustomerBundle:layouts/default/imports/oro_customer_address_form:form_theme.html.twig */
class __TwigTemplate_7dbcd602e37819cad731b0761369a9cff23d8d693cbf5422da456d6e56e9b640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_customer_frontend_typed_address_widget' => array($this, 'block_oro_customer_frontend_typed_address_widget'),
            'oro_customer_typed_address_with_default_widget' => array($this, 'block_oro_customer_typed_address_with_default_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_customer_frontend_typed_address_widget', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('oro_customer_typed_address_with_default_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
    }

    // line 1
    public function block_oro_customer_frontend_typed_address_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"grid\">
            ";
        // line 4
        if ($this->getAttribute(($context["form"] ?? null), "primary", array(), "any", true, true)) {
            // line 5
            echo "                <div class=\"grid__row grid__row--offset-none\">
                    <div class=\"grid__column grid__column--12 grid__column--offset-y\">
                        ";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "primary", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.label.primary")));
            echo "
                    </div>
                </div>
            ";
        }
        // line 11
        echo "            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--12\">
                    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "frontendOwner", array()), 'row');
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.label.address_label")));
        echo "
                </div>
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "namePrefix", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.placeholder.name.prefix"))));
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.placeholder.first_name"))));
        echo "
                </div>
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "middleName", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.placeholder.middle_name"))));
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.placeholder.last_name"))));
        echo "
                </div>
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameSuffix", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.placeholder.name_suffix"))));
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "organization", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.placeholder.organization"))));
        echo "
                </div>
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.placeholder.phone"))));
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "street", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.placeholder.street"))));
        echo "
                </div>
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "street2", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.placeholder.street2"))));
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "city", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.placeholder.city"))));
        echo "
                </div>
                <div class=\"grid__column grid__column--2\">
                    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'row');
        echo "
                </div>
                <div class=\"grid__column grid__column--2\">
                    ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "region", array()), 'row');
        echo "
                </div>
                <div class=\"grid__column grid__column--2\">
                    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "postalCode", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.placeholder.zip"))));
        echo "
                </div>
            </div>
        </div>

        <div class=\"grid\">
            <div class=\"grid__row\"
                 data-page-component-module=\"orocustomer/js/app/components/customer-address-component\"
                 data-page-component-options=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("disableDefaultWithoutType" => true)), "html", null, true);
        echo "\">
                <div class=\"grid__column grid__column--6\">
                    <p class=\"oro-title\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.address.form.label.address_types"), "html", null, true);
        echo ":</p>
                    ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "types", array()), 'widget');
        echo "
                    ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "defaults", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"grid__row hidden\">
                ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id", array()), 'widget');
        echo "
                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "region_text", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"pixels\">

        </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 95
    public function block_oro_customer_typed_address_with_default_widget($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "default", array()), 'widget');
        echo "
";
    }

    // line 99
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 100
        echo "    <div class=\"grid__column grid__column--6\">
        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 102
            echo "            <div class=\"";
            echo ((($context["multiple"] ?? null)) ? ("checkbox") : ("radio"));
            echo " col\">
                ";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/imports/oro_customer_address_form:form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  241 => 106,  232 => 103,  227 => 102,  223 => 101,  220 => 100,  217 => 99,  210 => 96,  207 => 95,  193 => 84,  189 => 83,  182 => 79,  178 => 78,  174 => 77,  169 => 75,  158 => 67,  152 => 64,  146 => 61,  140 => 58,  132 => 53,  126 => 50,  118 => 45,  112 => 42,  104 => 37,  98 => 34,  90 => 29,  84 => 26,  76 => 21,  70 => 18,  62 => 13,  58 => 11,  51 => 7,  47 => 5,  45 => 4,  42 => 3,  39 => 2,  36 => 1,  32 => 99,  29 => 98,  27 => 95,  24 => 94,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/imports/oro_customer_address_form:form_theme.html.twig", "");
    }
}
