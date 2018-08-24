<?php

/* OroProductBundle::product_collection_macros.html.twig */
class __TwigTemplate_645ac411876956d6dc2cc5358b63f08533b3ba50639e5fe304cbecf8a095f177 extends Twig_Template
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
    }

    // line 1
    public function getpopupButton($__gridName__ = null, $__hiddenProductsSelector__ = null, $__hint__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "gridName" => $__gridName__,
            "hiddenProductsSelector" => $__hiddenProductsSelector__,
            "hint" => $__hint__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle::product_collection_macros.html.twig", 2);
            // line 3
            echo "
    <div class=\"btn-group\">
        ";
            // line 5
            echo $context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_add_products_widget", array("gridName" =>             // line 6
($context["gridName"] ?? null))), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.add"), "class" => "btn", "title" =>             // line 9
($context["hint"] ?? null), "widget" => array("type" => "product-collection-popup-add-products", "multiple" => false, "options" => array("hiddenProductsSelector" =>             // line 14
($context["hiddenProductsSelector"] ?? null), "gridName" =>             // line 15
($context["gridName"] ?? null), "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.add_products"), "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1200, "modal" => true)))));
            // line 25
            echo "
    </div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroProductBundle::product_collection_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 25,  45 => 15,  44 => 14,  43 => 9,  42 => 6,  41 => 5,  37 => 3,  35 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle::product_collection_macros.html.twig", "");
    }
}
