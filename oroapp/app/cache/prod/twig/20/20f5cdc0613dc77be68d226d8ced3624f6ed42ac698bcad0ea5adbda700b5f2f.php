<?php

/* OroPromotionBundle:AppliedPromotion:applied_promotions_view_table.html.twig */
class __TwigTemplate_a8d4a2d28dfdcde70d9886f53f31f39261f6cb34af0bbcc2371728f337395cf5 extends Twig_Template
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
        echo "<div class=\"oro-promotions-collection grid-container oro-collection-table\">
    <div class=\"oro-collection-table-heading\">
        <h5>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.all_label"), "html", null, true);
        echo "</h5>
    </div>

    ";
        // line 6
        $context["collection"] = $this->env->getExtension('Oro\Bundle\PromotionBundle\Twig\AppliedPromotionsExtension')->getAppliedPromotionsInfo(($context["entity"] ?? null));
        // line 7
        echo "    ";
        $this->loadTemplate("OroPromotionBundle:AppliedPromotion:applied_promotions_table.html.twig", "OroPromotionBundle:AppliedPromotion:applied_promotions_view_table.html.twig", 7)->display(array_merge($context, array("collection" => ($context["collection"] ?? null), "editable" => false)));
        // line 8
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:AppliedPromotion:applied_promotions_view_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:AppliedPromotion:applied_promotions_view_table.html.twig", "");
    }
}
