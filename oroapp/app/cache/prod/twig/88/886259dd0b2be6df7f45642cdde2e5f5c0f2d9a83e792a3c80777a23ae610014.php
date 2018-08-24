<?php

/* OroShoppingListBundle:layouts/blank/imports/oro_shopping_list_create:shopping_list_create.html.twig */
class __TwigTemplate_f81c75ed6b3c5e71ad24db463dd1ec91421c5f96ee4181c2accf2604176b464e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:layouts:blank/dialog/dialog.html.twig", "OroShoppingListBundle:layouts/blank/imports/oro_shopping_list_create:shopping_list_create.html.twig", 1);
        $this->blocks = array(
            '_widget_content_widget' => array($this, 'block__widget_content_widget'),
            '_form_comment_widget' => array($this, 'block__form_comment_widget'),
            '_form_actions_widget' => array($this, 'block__form_actions_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:layouts:blank/dialog/dialog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block__widget_content_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shopping_list_frontend_view", array("id" => $this->getAttribute(($context["shoppingList"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "label", array()), "html", null, true);
        echo "</a>
    ";
        $context["shoppingListLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
    ";
        // line 8
        $context["shoppinglistCreatedMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.flash.success", array("%shoppinglist%" => _twig_default_filter(twig_trim_filter(($context["shoppingListLink"] ?? null)), null)));
        // line 9
        echo "    ";
        $context["pageComponentOptions"] = array("savedId" => ((        // line 10
array_key_exists("savedId", $context)) ? (_twig_default_filter(($context["savedId"] ?? null), null)) : (null)), "shoppingListCreateEnabled" =>         // line 11
($context["shoppingListCreateEnabled"] ?? null), "messages" => twig_array_merge(array(0 =>         // line 12
($context["shoppinglistCreatedMessage"] ?? null)), ($context["messages"] ?? null)));
        // line 14
        echo "    ";
        $context["attr"] = twig_array_merge(twig_array_merge(array("data-page-component-module" => "oroshoppinglist/js/app/components/shopping-list-create-component"),         // line 16
($context["attr"] ?? null)), array("data-page-component-options" => twig_array_merge(        // line 17
($context["pageComponentOptions"] ?? null), (($this->getAttribute(($context["attr"] ?? null), "data-page-component-options", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "data-page-component-options", array(), "array"), array())) : (array())))));
        // line 19
        echo "    ";
        $this->displayParentBlock("_widget_content_widget", $context, $blocks);
        echo "
";
    }

    // line 22
    public function block__form_comment_widget($context, array $blocks = array())
    {
        // line 23
        echo "    <i>
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.create_new_form.comment"), "html", null, true);
        echo "<br/>
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.create_new_form.comment_cancel"), "html", null, true);
        echo "
    </i>
";
    }

    // line 29
    public function block__form_actions_widget($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 31
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " widget-actions")));
        // line 33
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 34
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:layouts/blank/imports/oro_shopping_list_create:shopping_list_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  91 => 33,  89 => 31,  87 => 30,  84 => 29,  77 => 25,  73 => 24,  70 => 23,  67 => 22,  60 => 19,  58 => 17,  57 => 16,  55 => 14,  53 => 12,  52 => 11,  51 => 10,  49 => 9,  47 => 8,  44 => 7,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:layouts/blank/imports/oro_shopping_list_create:shopping_list_create.html.twig", "");
    }
}
