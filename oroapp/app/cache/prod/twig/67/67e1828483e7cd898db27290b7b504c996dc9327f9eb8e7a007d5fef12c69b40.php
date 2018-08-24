<?php

/* OroInvoiceBundle:Invoice:update.html.twig */
class __TwigTemplate_01bf0f729a214867a8a029d58eeb79f8c00eae15decd54b4af292a9d6ed3a14f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroInvoiceBundle:Invoice:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroInvoiceBundle:Invoice:update.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%identifier%" => (($this->getAttribute(        // line 5
($context["entity"] ?? null), "invoiceNumber", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "invoiceNumber", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.entity_label"))));
        // line 8
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_invoice_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_invoice_create")));
        // line 10
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroInvoiceBundle:Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_navButtons($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 15
        echo $context["UI"]->getcancelButton($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_invoice_index"));
        echo "
    ";
        // line 16
        $context["html"] = $context["UI"]->getsaveAndCloseButton();
        // line 17
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_invoice_update"))) {
            // line 18
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndStayButton());
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        echo $context["UI"]->getdropdownSaveButton(array("html" => ($context["html"] ?? null)));
        echo "
";
    }

    // line 23
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 25
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 26
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_invoice_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 29
($context["entity"] ?? null), "invoiceNumber", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "invoiceNumber", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 31
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 33
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.entity_label")));
            // line 34
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroInvoiceBundle:Invoice:update.html.twig", 34)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 35
            echo "    ";
        }
    }

    // line 38
    public function block_content_data($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $context["id"] = "invoice-edit";
        // line 40
        echo "
    ";
        // line 41
        ob_start();
        // line 42
        echo "        ";
        $this->loadTemplate("OroPricingBundle:Totals:totals.html.twig", "OroInvoiceBundle:Invoice:update.html.twig", 42)->display(array("options" => array("route" => "oro_pricing_recalculate_entity_totals", "selectors" => array("form" => ("#" . $this->getAttribute($this->getAttribute(        // line 46
($context["form"] ?? null), "vars", array()), "id", array()))), "events" => array(0 => "line-items-totals:update", 1 => "update:customer", 2 => "update:currency"), "entityClassName" => "Oro\\Bundle\\InvoiceBundle\\Entity\\Invoice", "entityId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 54
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "data" =>         // line 55
($context["totals"] ?? null))));
        // line 58
        echo "    ";
        $context["totals"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "
    ";
        // line 60
        ob_start();
        // line 61
        echo "        <div class=\"invoice-line-items\"
             data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroinvoice/js/app/views/invoice-line-items-view", "tierPrices" => ((        // line 65
array_key_exists("tierPrices", $context)) ? (_twig_default_filter(($context["tierPrices"] ?? null), array())) : (array())), "tierPricesRoute" => "oro_pricing_price_by_customer", "currency" => $this->getAttribute(        // line 67
($context["entity"] ?? null), "currency", array()), "customer" => (((null === $this->getAttribute(        // line 68
($context["entity"] ?? null), "customer", array()))) ? (null) : ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customer", array()), "id", array()))))), "html", null, true);
        // line 69
        echo "\"
             data-layout=\"separate\">
            ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lineItems", array()), 'widget');
        echo "
            ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lineItems", array()), 'errors');
        echo "
        </div>
    ";
        $context["lineItems"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 75
        echo "
    ";
        // line 76
        ob_start();
        // line 77
        echo "        <div
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orofrontend/js/app/views/form-view", "selectors" => array("currency" => "select[name\$=\"[currency]\"]", "customer" => "input[name\$=\"[customer]\"]"))), "html", null, true);
        // line 85
        echo "\">
            <div data-page-component-module=\"orocustomer/js/app/components/customer-selection-component\">
                ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer", array()), 'row');
        echo "
                ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerUser", array()), 'row');
        echo "
            </div>
            <div>
                ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "invoiceDate", array()), 'row');
        echo "
                ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "paymentDueDate", array()), 'row');
        echo "
                ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "poNumber", array()), 'row');
        echo "
                ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'row');
        echo "
            </div>
        </div>
    ";
        $context["mainFormFields"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 98
        echo "
    ";
        // line 99
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 104
($context["mainFormFields"] ?? null))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.sections.invoice_line_items"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 112
($context["lineItems"] ?? null))))));
        // line 117
        echo "
    ";
        // line 118
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.sections.totals"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 122
($context["totals"] ?? null)))))));
        // line 126
        echo "
    ";
        // line 127
        $context["additionalData"] = array(0 =>         // line 128
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "poNumber", array()), 'row'));
        // line 130
        echo "
    ";
        // line 131
        $context["data"] = array("formErrors" =>         // line 132
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 133
($context["dataBlocks"] ?? null));
        // line 135
        echo "
    ";
        // line 136
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInvoiceBundle:Invoice:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 136,  217 => 135,  215 => 133,  214 => 132,  213 => 131,  210 => 130,  208 => 128,  207 => 127,  204 => 126,  202 => 122,  201 => 118,  198 => 117,  196 => 112,  195 => 104,  194 => 99,  191 => 98,  184 => 94,  180 => 93,  176 => 92,  172 => 91,  166 => 88,  162 => 87,  158 => 85,  156 => 79,  152 => 77,  150 => 76,  147 => 75,  141 => 72,  137 => 71,  133 => 69,  131 => 68,  130 => 67,  129 => 65,  128 => 63,  124 => 61,  122 => 60,  119 => 59,  116 => 58,  114 => 55,  113 => 54,  112 => 46,  110 => 42,  108 => 41,  105 => 40,  102 => 39,  99 => 38,  94 => 35,  91 => 34,  88 => 33,  82 => 31,  80 => 29,  79 => 26,  77 => 25,  74 => 24,  71 => 23,  64 => 20,  61 => 19,  58 => 18,  55 => 17,  53 => 16,  49 => 15,  43 => 13,  40 => 12,  36 => 1,  34 => 10,  32 => 8,  30 => 5,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInvoiceBundle:Invoice:update.html.twig", "");
    }
}
