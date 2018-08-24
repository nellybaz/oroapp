<?php

/* OroCustomerBundle:Form:fields.html.twig */
class __TwigTemplate_f0bceb010dc6a2e0a59da31abed504524c49c4ee45c0b51aba6b8a5025ef5686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroAddressBundle:Include:fields.html.twig", "OroCustomerBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'oro_customer_acl_access_level_text_widget' => array($this, 'block_oro_customer_acl_access_level_text_widget'),
            'oro_customer_typed_address_with_default_row' => array($this, 'block_oro_customer_typed_address_with_default_row'),
            'oro_customer_customer_user_typed_address_widget' => array($this, 'block_oro_customer_customer_user_typed_address_widget'),
            'oro_customer_typed_address_widget' => array($this, 'block_oro_customer_typed_address_widget'),
            'oro_customer_frontend_customer_user_typed_address_widget' => array($this, 'block_oro_customer_frontend_customer_user_typed_address_widget'),
            'oro_address_rows' => array($this, 'block_oro_address_rows'),
            'oro_address_collection_widget' => array($this, 'block_oro_address_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroAddressBundle:Include:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_oro_customer_acl_access_level_text_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["additionalClass"] = "";
        // line 5
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "privileges_config", array(), "any", false, true), "view_type", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "parent", array()), "vars", array()), "privileges_config", array()), "view_type", array()) != "grid"))) {
            // line 6
            echo "        ";
            $context["additionalClass"] = "span2";
            // line 7
            echo "    ";
        }
        // line 8
        echo "        <div class=\"access_level_value_link\">
                ";
        // line 9
        $context["label"] = ((( !array_key_exists("level_label", $context) || twig_test_empty(($context["level_label"] ?? null)))) ? ((        // line 10
($context["translation_prefix"] ?? null) . "NONE")) : ((        // line 11
($context["translation_prefix"] ?? null) . ($context["level_label"] ?? null))));
        // line 13
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
        echo "
            ";
        // line 14
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 15
        echo "            ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        </div>
";
    }

    // line 19
    public function block_oro_customer_typed_address_with_default_row($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 23
    public function block_oro_customer_customer_user_typed_address_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        $this->displayBlock("oro_customer_typed_address_widget", $context, $blocks);
        echo "
";
    }

    // line 28
    public function block_oro_customer_typed_address_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "primary", array()), 'row', array("label" => "oro.customer.customeraddress.primary.label"));
        echo "
    ";
        // line 30
        $this->displayBlock("oro_address_rows", $context, $blocks);
        echo "
    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "types", array()), 'row', array("label" => "oro.customer.customeraddress.types.label"));
        echo "
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "defaults", array()), 'row', array("label" => "oro.customer.customeraddress.defaults.label"));
        echo "
";
    }

    // line 35
    public function block_oro_customer_frontend_customer_user_typed_address_widget($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->displayBlock("oro_customer_frontend_typed_address_widget", $context, $blocks);
        echo "
";
    }

    // line 39
    public function block_oro_address_rows($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id", array()), 'row');
        echo "
    ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row', array("label" => "oro.customer.customeraddress.label.label"));
        echo "
    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "namePrefix", array()), 'row', array("label" => "oro.customer.customeraddress.name_prefix.label"));
        echo "
    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row', array("label" => "oro.customer.customeraddress.first_name.label"));
        echo "
    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "middleName", array()), 'row', array("label" => "oro.customer.customeraddress.middle_name.label"));
        echo "
    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row', array("label" => "oro.customer.customeraddress.last_name.label"));
        echo "
    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameSuffix", array()), 'row', array("label" => "oro.customer.customeraddress.name_suffix.label"));
        echo "
    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "organization", array()), 'row', array("label" => "oro.customer.customeraddress.organization.label"));
        echo "
    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'row', array("label" => "oro.customer.customeraddress.country.label"));
        echo "
    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "street", array()), 'row', array("label" => "oro.customer.customeraddress.street.label"));
        echo "
    ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "street2", array()), 'row', array("label" => "oro.customer.customeraddress.street2.label"));
        echo "
    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "city", array()), 'row', array("label" => "oro.customer.customeraddress.city.label"));
        echo "
    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "region_text", array()), 'row', array("label" => "oro.customer.customeraddress.region_text.label"));
        echo "
    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "region", array()), 'row', array("label" => "oro.customer.customeraddress.region.label"));
        echo "
    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "postalCode", array()), 'row', array("label" => "oro.customer.customeraddress.postal_code.label"));
        echo "
    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 58
    public function block_oro_address_collection_widget($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-address-collection")));
        // line 60
        echo "        ";
        $context["options"] = array("disableDefaultWithoutType" => true, "disableRepeatedTypes" => true);
        // line 64
        echo "    <span
      data-page-component-module=\"orocustomer/js/app/components/customer-address-component\"
      data-page-component-options=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 67
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    </span>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 67,  208 => 66,  204 => 64,  201 => 60,  198 => 59,  195 => 58,  189 => 55,  185 => 54,  181 => 53,  177 => 52,  173 => 51,  169 => 50,  165 => 49,  161 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  128 => 40,  125 => 39,  118 => 36,  115 => 35,  109 => 32,  105 => 31,  101 => 30,  96 => 29,  93 => 28,  86 => 25,  84 => 24,  81 => 23,  74 => 20,  71 => 19,  63 => 15,  61 => 14,  56 => 13,  54 => 11,  53 => 10,  52 => 9,  49 => 8,  46 => 7,  43 => 6,  40 => 5,  37 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/Form/fields.html.twig");
    }
}
