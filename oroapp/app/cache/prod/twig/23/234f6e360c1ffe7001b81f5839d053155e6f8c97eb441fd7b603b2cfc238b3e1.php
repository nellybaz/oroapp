<?php

/* OroShoppingListBundle:ShoppingList/widget:info.html.twig */
class __TwigTemplate_4acafacf0153c8ab10141371551f3d51ae2ea3ea4d889d3a1c098bc7aebce315 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroShoppingListBundle:ShoppingList/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroShoppingListBundle:ShoppingList/widget:info.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.id.label"), $this->getAttribute(($context["shopping_list"] ?? null), "id", array()));
        echo "
            ";
        // line 8
        if ($this->getAttribute(($context["shopping_list"] ?? null), "customer", array())) {
            // line 9
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.customer.label"), $context["UI"]->getentityViewLink($this->getAttribute(($context["shopping_list"] ?? null), "customer", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["shopping_list"] ?? null), "customer", array())), "oro_customer_customer_view"));
            echo "
            ";
        }
        // line 11
        echo "            ";
        if ($this->getAttribute(($context["shopping_list"] ?? null), "customerUser", array())) {
            // line 12
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.customer_user.label"), $context["UI"]->getentityViewLink($this->getAttribute(($context["shopping_list"] ?? null), "customerUser", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["shopping_list"] ?? null), "customerUser", array())), "oro_customer_customer_user_view"));
            echo "
            ";
        }
        // line 14
        echo "            ";
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.label.label"), $this->getAttribute(($context["shopping_list"] ?? null), "label", array()));
        echo "
            ";
        // line 15
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.notes.label"), $this->getAttribute(($context["shopping_list"] ?? null), "notes", array()));
        echo "
        </div>
        <div class=\"responsive-block\">
            ";
        // line 18
        echo $context["entityConfig"]->getrenderDynamicFields(($context["shopping_list"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:ShoppingList/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  55 => 15,  50 => 14,  44 => 12,  41 => 11,  35 => 9,  33 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:ShoppingList/widget:info.html.twig", "");
    }
}
