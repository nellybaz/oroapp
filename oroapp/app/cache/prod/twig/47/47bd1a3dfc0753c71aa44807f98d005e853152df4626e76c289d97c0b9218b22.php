<?php

/* OroInvoiceBundle:Invoice:view.html.twig */
class __TwigTemplate_5308d7ea7593c5053f6eee714ec1fd369ef6c26101f98548f02b9ca484f03639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroInvoiceBundle:Invoice:view.html.twig", 1);
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%identifier%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "invoiceNumber", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 7
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_invoice_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.entity_plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.navigation.view", array("%identifier%" => (($this->getAttribute(        // line 11
($context["entity"] ?? null), "invoiceNumber", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "invoiceNumber", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))))));
        // line 14
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_content_data($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.widgets.invoice_information"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_invoice_info", array("id" => $this->getAttribute(        // line 22
($context["entity"] ?? null), "id", array())))));
        // line 23
        echo "
    ";
        $context["invoiceInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "
    ";
        // line 26
        $context["generalSectionBlocks"] = array(0 => array("data" => array(0 => ($context["invoiceInformationWidget"] ?? null))));
        // line 27
        echo "
    ";
        // line 28
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.navigation.sections.general"), "class" => "active", "subblocks" =>         // line 32
($context["generalSectionBlocks"] ?? null)));
        // line 35
        echo "
    ";
        // line 36
        if (twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "lineItems", array()))) {
            // line 37
            echo "        ";
            ob_start();
            // line 38
            echo "            <div class=\"grid-container\">
                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th><span>#</span></th>
                        <th><span>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sku.label"), "html", null, true);
            echo "</span></th>
                        <th><span>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_label"), "html", null, true);
            echo "</span></th>
                        <th><span>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.invoicelineitem.quantity.label"), "html", null, true);
            echo "</span></th>
                        <th><span>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.invoicelineitem.price.label"), "html", null, true);
            echo "</span></th>
                        <th><span>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.invoicelineitem.price_total.label"), "html", null, true);
            echo "</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "lineItems", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
                // line 52
                echo "                        ";
                $context["isFreeFormProduct"] = (twig_test_empty($this->getAttribute($context["lineItem"], "product", array())) &&  !twig_test_empty($this->getAttribute($context["lineItem"], "freeFormProduct", array())));
                // line 53
                echo "
                        <tr>
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["lineItem"], "productSku", array()), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 58
                if (($context["isFreeFormProduct"] ?? null)) {
                    // line 59
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lineItem"], "freeFormProduct", array()), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 61
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lineItem"], "product", array()), "html", null, true);
                    echo "
                                ";
                }
                // line 63
                echo "                            </td>
                            <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitValueExtension')->format($this->getAttribute($context["lineItem"], "quantity", array()), $this->getAttribute($context["lineItem"], "productUnit", array())), "html", null, true);
                echo "</td>
                            <td>";
                // line 65
                echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute($context["lineItem"], "price", array()));
                echo "</td>
                            <td>";
                // line 66
                echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute($context["lineItem"], "totalPrice", array()));
                echo "</td>
                        </tr>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["lineItems"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 73
            echo "
        ";
            // line 74
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.invoice.navigation.sections.invoice_line_items"), "subblocks" => array(0 => array("data" => array(0 =>             // line 76
($context["lineItems"] ?? null)))))));
            // line 78
            echo "    ";
        }
        // line 79
        echo "
    ";
        // line 80
        $context["id"] = "invoice-view";
        // line 81
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 82
        echo "
    ";
        // line 83
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInvoiceBundle:Invoice:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 83,  209 => 82,  206 => 81,  204 => 80,  201 => 79,  198 => 78,  196 => 76,  195 => 74,  192 => 73,  186 => 69,  169 => 66,  165 => 65,  161 => 64,  158 => 63,  152 => 61,  146 => 59,  144 => 58,  139 => 56,  135 => 55,  131 => 53,  128 => 52,  111 => 51,  104 => 47,  100 => 46,  96 => 45,  92 => 44,  88 => 43,  81 => 38,  78 => 37,  76 => 36,  73 => 35,  71 => 32,  70 => 28,  67 => 27,  65 => 26,  62 => 25,  58 => 23,  56 => 22,  54 => 19,  51 => 18,  48 => 17,  41 => 14,  39 => 11,  38 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInvoiceBundle:Invoice:view.html.twig", "");
    }
}
