<?php

/* OroPromotionBundle:Promotion:getPromotionDetails.html.twig */
class __TwigTemplate_e173fab143d875c7c4e02ae478fd0a517d1e4eee17c44f9db30bd10c3043bd4b extends Twig_Template
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
        $context["scopeMacros"] = $this->loadTemplate("OroScopeBundle::macros.html.twig", "OroPromotionBundle:Promotion:getPromotionDetails.html.twig", 1);
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPromotionBundle:Promotion:getPromotionDetails.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    ";
        // line 5
        ob_start();
        // line 6
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("render_discount_information", $context)) ? (_twig_default_filter(($context["render_discount_information"] ?? null), "render_discount_information")) : ("render_discount_information")), array("entity" => ($context["entity"] ?? null)));
        // line 7
        echo "    ";
        $context["discountBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.sections.general.label"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.sections.general.subsection.general_info.label"), "useSpan" => false, "data" => array(0 =>         // line 18
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.name.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "name", array())), 1 =>         // line 19
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.sort_order.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "sortOrder", array())), 2 =>         // line 20
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rule.stop_processing.label"), (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "stopProcessing", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.rule.stop_processing.yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.rule.stop_processing.no")))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.sections.general.subsection.discount_options.label"), "useSpan" => false, "data" => array(0 =>         // line 26
($context["discountBlock"] ?? null))))));
        // line 31
        echo "
    ";
        // line 32
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.sections.conditions.label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 40
$context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.restrictions.label"), $context["scopeMacros"]->getrenderRestrictionsView(($context["scopeEntities"] ?? null), $this->getAttribute(($context["entity"] ?? null), "scopes", array()))), 1 =>         // line 41
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.advanced_conditions.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array()), "expression", array()))))))));
        // line 47
        echo "
    ";
        // line 48
        $context["id"] = "promotion-details";
        // line 49
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 50
        echo "
    ";
        // line 51
        echo $context["UI"]->getscrollData(($context["id"] ?? null), ($context["data"] ?? null), ($context["entity"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Promotion:getPromotionDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 51,  59 => 50,  56 => 49,  54 => 48,  51 => 47,  49 => 41,  48 => 40,  47 => 32,  44 => 31,  42 => 26,  41 => 20,  40 => 19,  39 => 18,  38 => 9,  35 => 8,  32 => 7,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Promotion:getPromotionDetails.html.twig", "");
    }
}
