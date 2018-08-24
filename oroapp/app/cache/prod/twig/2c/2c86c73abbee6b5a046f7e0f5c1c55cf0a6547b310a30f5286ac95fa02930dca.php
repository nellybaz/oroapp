<?php

/* OroCustomerBundle:CustomerGroup:view.html.twig */
class __TwigTemplate_8b1ad85eb84d7e175354bf84b3a92a2813a5109ac4a21951ea1f93786110c9d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCustomerBundle:CustomerGroup:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
            'stats' => array($this, 'block_stats'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCustomerBundle:CustomerGroup:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()))));
        // line 6
        $context["gridName"] = "customer-group-customers-grid-view";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 10
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customergroup.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 13
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 15
        echo "
    ";
        // line 16
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_content_data($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_info", array("id" => $this->getAttribute(        // line 23
($context["entity"] ?? null), "id", array()))), "alias" => "customer-group-info-widget"));
        // line 25
        echo "
    ";
        $context["customerGroupInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        $context["customersGrid"] = $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), array("group" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"));
        // line 29
        echo "
    ";
        // line 30
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 34
($context["customerGroupInfo"] ?? null))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.customergroup.customers"), "subblocks" => array(0 => array("data" => array(0 =>         // line 38
($context["customersGrid"] ?? null))))));
        // line 41
        echo "
    ";
        // line 42
        $context["id"] = "customer-group-view";
        // line 43
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 44
        echo "
    ";
        // line 45
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 48
    public function block_stats($context, array $blocks = array())
    {
        // line 49
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerGroup:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 49,  98 => 48,  92 => 45,  89 => 44,  86 => 43,  84 => 42,  81 => 41,  79 => 38,  78 => 34,  77 => 30,  74 => 29,  72 => 28,  69 => 27,  65 => 25,  63 => 23,  61 => 21,  58 => 20,  55 => 19,  49 => 16,  46 => 15,  44 => 13,  43 => 10,  41 => 9,  38 => 8,  34 => 1,  32 => 6,  30 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:CustomerGroup:view.html.twig", "");
    }
}
