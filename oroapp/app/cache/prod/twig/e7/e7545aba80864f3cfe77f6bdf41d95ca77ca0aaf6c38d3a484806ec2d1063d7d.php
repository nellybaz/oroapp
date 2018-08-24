<?php

/* OroPaymentTermBundle:PaymentTerm:view.html.twig */
class __TwigTemplate_e02c6b317766c0bf151afd5b0e95dc20b813f87956c27d1667e59161f3b6b641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroPaymentTermBundle:PaymentTerm:view.html.twig", 1);
        $this->blocks = array(
            'stats' => array($this, 'block_stats'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroPaymentTermBundle:PaymentTerm:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityLabel%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "label", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stats($context, array $blocks = array())
    {
    }

    // line 8
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 10
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_term_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 13
($context["entity"] ?? null), "label", array()));
        // line 15
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_content_data($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        ob_start();
        // line 20
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_term_widget_info", array("id" => $this->getAttribute(        // line 22
($context["entity"] ?? null), "id", array())))));
        // line 23
        echo "
    ";
        $context["paymentTermInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "
    ";
        // line 26
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.sections.general_information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 31
($context["paymentTermInformationWidget"] ?? null))))));
        // line 35
        echo "
    ";
        // line 36
        $context["id"] = "payment-term-view";
        // line 37
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 38
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPaymentTermBundle:PaymentTerm:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 38,  81 => 37,  79 => 36,  76 => 35,  74 => 31,  73 => 26,  70 => 25,  66 => 23,  64 => 22,  62 => 20,  59 => 19,  56 => 18,  49 => 15,  47 => 13,  46 => 10,  44 => 9,  41 => 8,  36 => 6,  32 => 1,  30 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentTermBundle:PaymentTerm:view.html.twig", "");
    }
}
