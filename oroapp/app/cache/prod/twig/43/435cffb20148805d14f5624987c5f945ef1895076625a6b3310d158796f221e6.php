<?php

/* OroProductBundle:layouts/default/imports/oro_product_list_item:oro_product_list_item.html.twig */
class __TwigTemplate_9e6a8995e368c2c2d8b21cc506d92ce274e1aa59678107d24120cf5ac7a8e337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_list_item__product_details_widget' => array($this, 'block___oro_product_list_item__product_details_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_list_item__product_details_widget', $context, $blocks);
    }

    public function block___oro_product_list_item__product_details_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product__view-details-link product__view-details-link--{{ class_prefix }}"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_view", array("id" => $this->getAttribute(($context["product"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"view-product\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.frontend.index.view_details"), "html", null, true);
        echo "<i class=\"fa-angle-right fa--link-r\"></i>
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/imports/oro_product_list_item:oro_product_list_item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  29 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/imports/oro_product_list_item:oro_product_list_item.html.twig", "");
    }
}
