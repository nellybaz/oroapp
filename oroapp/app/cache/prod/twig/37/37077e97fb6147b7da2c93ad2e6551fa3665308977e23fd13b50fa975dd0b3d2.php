<?php

/* OroProductBundle:Product/widget:info.html.twig */
class __TwigTemplate_f238366a2d37cc61a8faa8b84d2bb5d2e6525041b1c977ab905ffb320fe8909b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sku_and_name' => array($this, 'block_sku_and_name'),
            'images' => array($this, 'block_images'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:Product/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroProductBundle:Product/widget:info.html.twig", 2);
        // line 3
        $context["Image"] = $this->loadTemplate("OroProductBundle::image_macros.html.twig", "OroProductBundle:Product/widget:info.html.twig", 3);
        // line 4
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 8
        $this->displayBlock('sku_and_name', $context, $blocks);
        // line 12
        echo "            ";
        $context["type"] = ("oro.product.type." . $this->getAttribute(($context["product"] ?? null), "type", array()));
        // line 13
        echo "            ";
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.type.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["type"] ?? null)));
        echo "

            ";
        // line 15
        $this->displayBlock('images', $context, $blocks);
        // line 23
        echo "        </div>
        <div class=\"responsive-block\">
            ";
        // line 25
        echo $context["entityConfig"]->getrenderDynamicFields(($context["product"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    // line 8
    public function block_sku_and_name($context, array $blocks = array())
    {
        // line 9
        echo "                ";
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sku.label"), $this->getAttribute(($context["product"] ?? null), "sku", array()));
        echo "
                ";
        // line 10
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.names.label"), $this->getAttribute(($context["product"] ?? null), "defaultName", array()));
        echo "
            ";
    }

    // line 15
    public function block_images($context, array $blocks = array())
    {
        // line 16
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["product"] ?? null), "images", array()), "count", array())) {
            // line 17
            echo "                    ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.images.label"),             // line 19
$context["Image"]->getrenderProductImages($this->getAttribute(($context["product"] ?? null), "images", array()), ($context["imageTypes"] ?? null)));
            // line 20
            echo "
                ";
        }
        // line 22
        echo "            ";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  83 => 20,  81 => 19,  79 => 17,  76 => 16,  73 => 15,  67 => 10,  62 => 9,  59 => 8,  50 => 25,  46 => 23,  44 => 15,  38 => 13,  35 => 12,  33 => 8,  27 => 4,  25 => 3,  23 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product/widget:info.html.twig", "");
    }
}
