<?php

/* OroCustomerBundle:layouts/default/imports/oro_customer_address_form:oro_customer_address_form.html.twig */
class __TwigTemplate_7bc71044f50604d49f2814fd37bbac74555bf3d8d0cada32d3e6343491f6a235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_customer_address_form__container_widget' => array($this, 'block___oro_customer_address_form__container_widget'),
            '__oro_customer_address_form__form_actions_widget' => array($this, 'block___oro_customer_address_form__form_actions_widget'),
            '__oro_customer_address_form__form_required_label_widget' => array($this, 'block___oro_customer_address_form__form_required_label_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_customer_address_form__container_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('__oro_customer_address_form__form_actions_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('__oro_customer_address_form__form_required_label_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_customer_address_form__container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-form", "data-focusable" => true));
        // line 6
        echo "
    <div";
        // line 7
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 12
    public function block___oro_customer_address_form__form_actions_widget($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " address-form-actions"));
        // line 16
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 17
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 21
    public function block___oro_customer_address_form__form_required_label_widget($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " required-label"));
        // line 25
        echo "
    <p ";
        // line 26
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "><sup>*</sup> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.form.label.required"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/imports/oro_customer_address_form:oro_customer_address_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  80 => 25,  77 => 22,  74 => 21,  67 => 17,  62 => 16,  59 => 13,  56 => 12,  49 => 8,  45 => 7,  42 => 6,  39 => 2,  36 => 1,  32 => 21,  29 => 20,  27 => 12,  24 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/imports/oro_customer_address_form:oro_customer_address_form.html.twig", "");
    }
}
