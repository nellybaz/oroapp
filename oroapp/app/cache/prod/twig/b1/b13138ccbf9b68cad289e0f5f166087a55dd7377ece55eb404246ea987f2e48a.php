<?php

/* OroShoppingListBundle:LineItem/Frontend/widget:shoppinglist_form_widget.html.twig */
class __TwigTemplate_92e6d8a45d5d3651e8560ebb6124776d25b3d5f547cbdfd3546f359ebdee237c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_oro_shopping_list_frontend_line_item_widget_shoppingList_widget' => array($this, 'block__oro_shopping_list_frontend_line_item_widget_shoppingList_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_oro_shopping_list_frontend_line_item_widget_shoppingList_widget', $context, $blocks);
    }

    public function block__oro_shopping_list_frontend_line_item_widget_shoppingList_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["currentShoppingList"] = (( !array_key_exists("currentShoppingList", $context)) ? (null) : (($context["currentShoppingList"] ?? null)));
        // line 3
        echo "    ";
        $context["isPost"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "isMethod", array(0 => "POST"), "method");
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 7
            echo "                ";
            $context["isCurrent"] = ( !(null === ($context["currentShoppingList"] ?? null)) && ($this->getAttribute($context["choice"], "value", array()) == $this->getAttribute(($context["currentShoppingList"] ?? null), "id", array())));
            // line 8
            echo "                ";
            $context["label"] = ($this->getAttribute($context["choice"], "label", array()) . ((($context["isCurrent"] ?? null)) ? (" (current)") : ("")));
            // line 9
            echo "                ";
            $context["isSelected"] = ((( !            // line 10
($context["isPost"] ?? null) && twig_test_empty(($context["value"] ?? null))) && ($context["isCurrent"] ?? null)) || ((            // line 11
($context["isPost"] ?? null) &&  !twig_test_empty(($context["value"] ?? null))) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? null))));
            // line 13
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
            echo "\"";
            echo ((($context["isSelected"] ?? null)) ? (" selected=\"selected\"") : (""));
            echo ">
                    ";
            // line 14
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            <option value=\"\"";
        if ((twig_test_empty(($context["value"] ?? null)) && ((null === ($context["currentShoppingList"] ?? null)) || ($context["isPost"] ?? null)))) {
            echo " selected=\"selected\"";
        }
        echo ">
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "
            </option>
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:LineItem/Frontend/widget:shoppinglist_form_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  71 => 17,  62 => 14,  55 => 13,  53 => 11,  52 => 10,  50 => 9,  47 => 8,  44 => 7,  40 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:LineItem/Frontend/widget:shoppinglist_form_widget.html.twig", "");
    }
}
