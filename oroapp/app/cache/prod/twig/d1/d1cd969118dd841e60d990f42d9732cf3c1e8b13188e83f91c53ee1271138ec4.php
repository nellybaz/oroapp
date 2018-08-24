<?php

/* OroRFPBundle:Request:view.html.twig */
class __TwigTemplate_d1dd1a3c722dfcf5799e85f6de8a756ca9603b6c3b727daea2070a24f44efe97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroRFPBundle:Request:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtonContainer' => array($this, 'block_navButtonContainer'),
            'navButtons' => array($this, 'block_navButtons'),
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroRFPBundle:Request:view.html.twig", 2);
        // line 3
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroRFPBundle:Request:view.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "__toString", array(), "method"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 9
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_rfp_request_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.entity_plural_label"), "entityTitle" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.request.id.label") . $this->getAttribute(        // line 12
($context["entity"] ?? null), "id", array())));
        // line 14
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_navButtonContainer($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_navButtons_before", $context)) ? (_twig_default_filter(($context["view_navButtons_before"] ?? null), "view_navButtons_before")) : ("view_navButtons_before")), array("entity" => ($context["entity"] ?? null)));
        // line 19
        echo "    ";
        $this->displayBlock('navButtons', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("rfp_view_navButtons_after", $context)) ? (_twig_default_filter(($context["rfp_view_navButtons_after"] ?? null), "rfp_view_navButtons_after")) : ("rfp_view_navButtons_after")), array("entity" => ($context["entity"] ?? null)));
    }

    // line 19
    public function block_navButtons($context, array $blocks = array())
    {
        // line 20
        echo "        ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

        ";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_order_create")) {
            // line 23
            echo "            <div class=\"btn-group\">
                ";
            // line 24
            echo $context["UI"]->getlink(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_rfp_request_create_order", array("id" => $this->getAttribute(            // line 25
($context["entity"] ?? null), "id", array()))), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.entity_label"))), "class" => "btn", "iCss" => "fa-briefcase"));
            // line 29
            echo "
            </div>
        ";
        }
        // line 32
        echo "    ";
    }

    // line 36
    public function block_content_data($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        ob_start();
        // line 38
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_rfp_request_info", array("id" => $this->getAttribute(        // line 40
($context["entity"] ?? null), "id", array()))), "alias" => "request-info-widget"));
        // line 42
        echo "
    ";
        $context["requestInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 44
        echo "
    ";
        // line 45
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 49
($context["requestInfo"] ?? null))))));
        // line 52
        echo "
    ";
        // line 53
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.sections.note"), "subblocks" => array(0 => array("data" => array(0 =>         // line 57
$context["dataGrid"]->getrenderGrid("rfp-request-additional-notes-grid", array("request" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"))))))));
        // line 60
        echo "
    ";
        // line 61
        if (twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "requestProducts", array()))) {
            // line 62
            echo "        ";
            ob_start();
            // line 63
            echo "            <div class=\"rfp-line-items-info grid-container\">
                <table class=\"grid table table-bordered table-condensed rfp-line-items\">
                    <thead>
                        <tr>
                            <th class=\"rfp-line_item-sku\"><span>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sku.label"), "html", null, true);
            echo "</span></th>
                            <th class=\"rfp-line_item-product\"><span>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_label"), "html", null, true);
            echo "</span></th>
                            <th class=\"rfp-line_item-requested_quantity\"><span>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.requestproductitem.quantity.label"), "html", null, true);
            echo "</span></th>
                            <th class=\"rfp-line_item-target_price\"><span>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.requestproductitem.price.label"), "html", null, true);
            echo "</span></th>
                            <th class=\"rfp-line_item-target_notes\"><span>";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.requestproduct.comment.label"), "html", null, true);
            echo "</span></th>
                        </tr>
                    </thead>
                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "requestProducts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
                // line 75
                echo "                        ";
                $context["numSubItems"] = twig_length_filter($this->env, $this->getAttribute($context["lineItem"], "requestProductItems", array()));
                // line 76
                echo "                        ";
                if ((($context["numSubItems"] ?? null) > 1)) {
                    echo "<tbody class=\"hasrs\">";
                } else {
                    echo "<tbody>";
                }
                // line 77
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["lineItem"], "requestProductItems", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["subItem"]) {
                    // line 78
                    echo "                            ";
                    $context["quantity"] = $this->getAttribute($context["subItem"], "quantity", array());
                    // line 79
                    echo "                            ";
                    $context["price"] = $this->getAttribute($context["subItem"], "price", array());
                    // line 80
                    echo "                            <tr>
                                ";
                    // line 81
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 82
                        echo "                                    <td rowspan=\"";
                        echo twig_escape_filter($this->env, ($context["numSubItems"] ?? null), "html", null, true);
                        echo "\" class=\"rfp-line_item-sku\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["lineItem"], "productSku", array()), "html", null, true);
                        echo "</td>
                                    <td rowspan=\"";
                        // line 83
                        echo twig_escape_filter($this->env, ($context["numSubItems"] ?? null), "html", null, true);
                        echo "\" class=\"rfp-line_item-product\">
                                        ";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute($context["lineItem"], "product", array()), "html", null, true);
                        echo "
                                    </td>
                                ";
                    }
                    // line 87
                    echo "                                <td class=\"rfp-line_item-requested_quantity rfp-line_item-requested_quantity-";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        echo "first";
                    } else {
                        echo "not_first";
                    }
                    echo "\">
                                    ";
                    // line 88
                    if ($this->getAttribute($context["subItem"], "productUnit", array())) {
                        // line 89
                        echo "                                        ";
                        if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\UnitVisibilityExtension')->isUnitCodeVisible($this->getAttribute($this->getAttribute($context["subItem"], "productUnit", array()), "code", array()))) {
                            // line 90
                            echo "                                            ";
                            echo twig_escape_filter($this->env, ((($context["quantity"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitValueExtension')->formatShort(($context["quantity"] ?? null), $this->getAttribute($context["subItem"], "productUnit", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
                            echo "
                                        ";
                        } else {
                            // line 92
                            echo "                                            ";
                            echo twig_escape_filter($this->env, ((($context["quantity"] ?? null)) ? (($context["quantity"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
                            echo "
                                        ";
                        }
                        // line 94
                        echo "                                    ";
                    } else {
                        // line 95
                        echo "                                        ";
                        echo twig_escape_filter($this->env, ((($context["quantity"] ?? null)) ? (((($context["quantity"] ?? null) . " ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.message.requestproductitem.unit.removed", array("{title}" => $this->getAttribute($context["subItem"], "productUnitCode", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 97
                    echo "                                </td>
                                <td class=\"rfp-line_item-target_price rfp-line_item-target_price-";
                    // line 98
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        echo "first";
                    } else {
                        echo "not_first";
                    }
                    echo "\">
                                    ";
                    // line 99
                    echo twig_escape_filter($this->env, ((($context["price"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice(($context["price"] ?? null))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(""))), "html", null, true);
                    echo "
                                </td>
                                ";
                    // line 101
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 102
                        echo "                                    <td rowspan=\"";
                        echo twig_escape_filter($this->env, ($context["numSubItems"] ?? null), "html", null, true);
                        echo "\" class=\"rfp-line_item-target_notes\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["lineItem"], "comment", array()), "html", null, true);
                        echo "</td>
                                ";
                    }
                    // line 104
                    echo "                            </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                        </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                </table>
            </div>
        ";
            $context["lineItems"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 111
            echo "
        ";
            // line 112
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.sections.request_products"), "subblocks" => array(0 => array("data" => array(0 =>             // line 114
($context["lineItems"] ?? null)))))));
            // line 116
            echo "    ";
        }
        // line 117
        echo "
    ";
        // line 118
        $context["id"] = "request-view";
        // line 119
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 120
        echo "
    ";
        // line 121
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:Request:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 121,  321 => 120,  318 => 119,  316 => 118,  313 => 117,  310 => 116,  308 => 114,  307 => 112,  304 => 111,  299 => 108,  292 => 106,  277 => 104,  269 => 102,  267 => 101,  262 => 99,  254 => 98,  251 => 97,  245 => 95,  242 => 94,  236 => 92,  230 => 90,  227 => 89,  225 => 88,  216 => 87,  210 => 84,  206 => 83,  199 => 82,  197 => 81,  194 => 80,  191 => 79,  188 => 78,  170 => 77,  163 => 76,  160 => 75,  156 => 74,  150 => 71,  146 => 70,  142 => 69,  138 => 68,  134 => 67,  128 => 63,  125 => 62,  123 => 61,  120 => 60,  118 => 57,  117 => 53,  114 => 52,  112 => 49,  111 => 45,  108 => 44,  104 => 42,  102 => 40,  100 => 38,  97 => 37,  94 => 36,  90 => 32,  85 => 29,  83 => 25,  82 => 24,  79 => 23,  77 => 22,  71 => 20,  68 => 19,  63 => 33,  60 => 19,  57 => 18,  54 => 17,  47 => 14,  45 => 12,  44 => 9,  42 => 8,  39 => 7,  35 => 1,  33 => 5,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:Request:view.html.twig", "");
    }
}
