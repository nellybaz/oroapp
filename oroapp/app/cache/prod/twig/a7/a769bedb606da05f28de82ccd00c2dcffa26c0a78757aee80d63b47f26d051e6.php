<?php

/* OroPromotionBundle:AppliedPromotion:applied_promotions_edit_table.html.twig */
class __TwigTemplate_b6af74b6903286d8e06d9b14c4fb3fa5911be57c80332c3439ce4c4fbf4df590 extends Twig_Template
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
        $context["collection"] = $this->env->getExtension('Oro\Bundle\PromotionBundle\Twig\AppliedPromotionsExtension')->prepareAppliedPromotionsInfo(($context["collection"] ?? null));
        // line 2
        $this->loadTemplate("OroPromotionBundle:AppliedPromotion:applied_promotions_table.html.twig", "OroPromotionBundle:AppliedPromotion:applied_promotions_edit_table.html.twig", 2)->display(array_merge($context, array("collection" => ($context["collection"] ?? null), "editable" => true)));
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:AppliedPromotion:applied_promotions_edit_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:AppliedPromotion:applied_promotions_edit_table.html.twig", "");
    }
}
