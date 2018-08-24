<?php

/* OroOrderBundle:Discount:order_discount_collection.html.twig */
class __TwigTemplate_b70dcd7ff4143facf477c95287d331222a569c9c48f5896c289103ed6f44fd21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroOrderBundle:Discount:order_discount_collection.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["addAndEditLinkSettings"] = array("widget" => array("type" => "dialog", "options" => array("stateEnabled" => false, "dialogOptions" => array("allowMaximize" => false, "allowMinimize" => false, "dblclick" => false, "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 550))));
        // line 18
        echo "
<div class=\"oro-collection-table-heading\">
    <h5>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.order_discount.all_label"), "html", null, true);
        echo "</h5>

    ";
        // line 22
        if ((array_key_exists("editable", $context) && ($context["editable"] ?? null))) {
            // line 23
            echo "        ";
            echo $context["UI"]->getclientLink(Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_action_widget_form", array("operationName" => "oro_order_discount_add_form", "entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute($this->getAttribute(            // line 26
($context["form"] ?? null), "vars", array()), "order", array())), "entityId" => array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 27
($context["form"] ?? null), "vars", array()), "order", array()), "id", array())))), "aCss" => "btn", "dataAttributes" => array("role" => "add"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.widgets.add_order_discount"), "widget" => array("multiple" => false, "options" => array("alias" => "add-order-discount-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.widgets.add_order_discount"), "modal" => true)))),             // line 44
($context["addAndEditLinkSettings"] ?? null)));
            echo "
    ";
        }
        // line 46
        echo "</div>

";
        // line 48
        if (twig_length_filter($this->env, ($context["collection"] ?? null))) {
            // line 49
            echo "    <table class=\"grid table-hover table table-bordered table-condensed\">
        <thead>
            <tr>
                <th class=\"order-discount-item-description\">
                    <span>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.order_discount.columns.description"), "html", null, true);
            echo "</span>
                </th>
                <th class=\"discount\">
                    <span>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.order_discount.columns.title"), "html", null, true);
            echo "</span>
                </th>
                ";
            // line 58
            if ((array_key_exists("editable", $context) && ($context["editable"] ?? null))) {
                // line 59
                echo "                    <th colspan=\"2\"></th>
                ";
            }
            // line 61
            echo "            </tr>
        </thead>
        <tbody>
            ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 65
                echo "                <tr class=\"order-discount-item\">
                    <td>
                        ";
                // line 67
                if ($this->getAttribute($context["discount"], "description", array())) {
                    // line 68
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "description", array()), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 70
                    echo "                            <span class=\"not-available\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 72
                echo "                    </td>
                    <td class=\"discount\">
                        ";
                // line 74
                if ( !twig_test_empty($this->getAttribute($context["discount"], "order", array()))) {
                    // line 75
                    echo "                            -";
                    echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute($context["discount"], "amountPrice", array()));
                    echo "
                        ";
                }
                // line 77
                echo "                    </td>
                    ";
                // line 78
                if ((array_key_exists("editable", $context) && ($context["editable"] ?? null))) {
                    // line 79
                    echo "                        <td class=\"action\">
                            ";
                    // line 80
                    echo $context["UI"]->getclientLink(Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_action_widget_form", array("operationName" => "oro_order_discount_edit_form", "entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute($this->getAttribute(                    // line 83
($context["form"] ?? null), "vars", array()), "order", array())), "entityId" => array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 84
($context["form"] ?? null), "vars", array()), "order", array()), "id", array())))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.order_discount.actions.edit"), "iCss" => "fa-edit hide-text", "dataAttributes" => array("role" => "edit"), "widget" => array("multiple" => false, "options" => array("alias" => "edit-order-discount-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.widgets.edit_order_discount"), "collectionElementIndex" => $this->getAttribute(                    // line 97
$context["loop"], "index0", array()))))),                     // line 101
($context["addAndEditLinkSettings"] ?? null)));
                    echo "
                        </td>
                        <td class=\"action\">
                            <a data-role=\"remove\" href=\"javascript:void(0);\" title=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.order_discount.actions.remove"), "html", null, true);
                    echo "\">
                                <i data-element-index=\"";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                    echo "\" class=\"fa-trash hide-text\">
                                    ";
                    // line 106
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.order_discount.actions.remove"), "html", null, true);
                    echo "
                                </i>
                            </a>
                        </td>
                    ";
                }
                // line 111
                echo "                </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "        </tbody>
    </table>
";
        } elseif (( !        // line 115
array_key_exists("editable", $context) ||  !($context["editable"] ?? null))) {
            // line 116
            echo "    <div class=\"no-data\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.order_discount.no_entities"), "html", null, true);
            echo "<span></span></span></div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:Discount:order_discount_collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 116,  180 => 115,  176 => 113,  161 => 111,  153 => 106,  149 => 105,  145 => 104,  139 => 101,  138 => 97,  137 => 84,  136 => 83,  135 => 80,  132 => 79,  130 => 78,  127 => 77,  121 => 75,  119 => 74,  115 => 72,  109 => 70,  103 => 68,  101 => 67,  97 => 65,  80 => 64,  75 => 61,  71 => 59,  69 => 58,  64 => 56,  58 => 53,  52 => 49,  50 => 48,  46 => 46,  41 => 44,  40 => 27,  39 => 26,  37 => 23,  35 => 22,  30 => 20,  26 => 18,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Discount:order_discount_collection.html.twig", "");
    }
}
