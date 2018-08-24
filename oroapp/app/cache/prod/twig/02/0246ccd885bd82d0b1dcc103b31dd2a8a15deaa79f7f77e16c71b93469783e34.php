<?php

/* OroMagentoBundle:CreditMemo:view.html.twig */
class __TwigTemplate_9747fcf90f57796f92d9d05a9ef26ead83dc754e5093d069739c019bdfca49e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroMagentoBundle:CreditMemo:view.html.twig", 1);
        $this->blocks = array(
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%creditMemo.incrementId%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "incrementId", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 7
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_credit_memo_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.entity_plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.entity_number", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.entity_label"), "%entityNumber%" => $this->getAttribute(        // line 10
($context["entity"] ?? null), "incrementId", array()))));
        // line 12
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_content_data($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["generalSubblocks"] = array();
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_credit_memo_widget_info", array("id" => $this->getAttribute(        // line 21
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.credit_memo_information")));
        // line 23
        echo "
    ";
        $context["creditMemoInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "    ";
        $context["generalSubblocks"] = twig_array_merge(($context["generalSubblocks"] ?? null), array(0 => array("data" => array(0 => ($context["creditMemoInformationWidget"] ?? null)))));
        // line 26
        echo "
    ";
        // line 27
        if (($this->getAttribute(($context["entity"] ?? null), "order", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_magento_order_view"))) {
            // line 28
            echo "        ";
            ob_start();
            // line 29
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_order_widget_info", array("id" => $this->getAttribute($this->getAttribute(            // line 31
($context["entity"] ?? null), "order", array()), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.order_information")));
            // line 33
            echo "
        ";
            $context["orderInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 35
            echo "        ";
            $context["generalSubblocks"] = twig_array_merge(($context["generalSubblocks"] ?? null), array(0 => array("data" => array(0 => ($context["orderInformationWidget"] ?? null)))));
            // line 36
            echo "    ";
        }
        // line 37
        echo "
    ";
        // line 38
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.general_information"), "class" => "active", "subblocks" =>         // line 42
($context["generalSubblocks"] ?? null)));
        // line 45
        echo "
    ";
        // line 46
        ob_start();
        // line 47
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_credit_memo_widget_items", array("id" => $this->getAttribute(        // line 49
($context["entity"] ?? null), "id", array())))));
        // line 50
        echo "
    ";
        $context["creditMemoItemsWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.items.label"), "subblocks" => array(0 => array("data" => array(0 =>         // line 57
($context["creditMemoItemsWidget"] ?? null)))))));
        // line 61
        echo "
    ";
        // line 62
        $context["id"] = "magentoCreditMemoView";
        // line 63
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 64
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:CreditMemo:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 64,  122 => 63,  120 => 62,  117 => 61,  115 => 57,  114 => 53,  111 => 52,  107 => 50,  105 => 49,  103 => 47,  101 => 46,  98 => 45,  96 => 42,  95 => 38,  92 => 37,  89 => 36,  86 => 35,  82 => 33,  80 => 31,  78 => 29,  75 => 28,  73 => 27,  70 => 26,  67 => 25,  63 => 23,  61 => 21,  59 => 19,  57 => 18,  54 => 17,  51 => 16,  48 => 15,  41 => 12,  39 => 10,  38 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:CreditMemo:view.html.twig", "");
    }
}
