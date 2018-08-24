<?php

/* OroCustomerBundle:layouts/blank/imports/oro_customer_toolbar_actions:layout.html.twig */
class __TwigTemplate_49d14d82f5c57acb77ad6705132c096e179e8dffefb94b58fcbf9721dadbf32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_customer_toolbar_actions__wrapper_widget' => array($this, 'block___oro_customer_toolbar_actions__wrapper_widget'),
            '__oro_customer_toolbar_actions__actions_container_widget' => array($this, 'block___oro_customer_toolbar_actions__actions_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_customer_toolbar_actions__wrapper_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('__oro_customer_toolbar_actions__actions_container_widget', $context, $blocks);
        // line 18
        echo "
";
    }

    // line 1
    public function block___oro_customer_toolbar_actions__wrapper_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " box-toolbar box-toolbar--offset-none"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 10
    public function block___oro_customer_toolbar_actions__actions_container_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " box-toolbar__actions"));
        // line 14
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/imports/oro_customer_toolbar_actions:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  57 => 14,  54 => 11,  51 => 10,  44 => 6,  39 => 5,  36 => 2,  33 => 1,  28 => 18,  26 => 10,  23 => 9,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/imports/oro_customer_toolbar_actions:layout.html.twig", "");
    }
}
