<?php

/* OroPromotionBundle:Coupon:index.html.twig */
class __TwigTemplate_fa6029d3d5338659db13aa2f4c93a18218b8ff15b8d1b889f15df1488ef7bb71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroPromotionBundle:Coupon:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPromotionBundle:Coupon:index.html.twig", 2);
        // line 4
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.entity_plural_label");
        // line 5
        $context["params"] = twig_array_merge($this->env->getExtension('Oro\Bundle\ActionBundle\Twig\OperationExtension')->getActionParameters($context), array("group" => "create_coupon_buttons"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("OroImportExportBundle:ImportExport:buttons_from_configuration.html.twig", "OroPromotionBundle:Coupon:index.html.twig", 9)->display(array_merge($context, array("alias" => "oro_coupon")));
        // line 12
        echo "
    ";
        // line 13
        if ($this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("oro_promotion_coupon_create")) {
            // line 14
            echo "        ";
            $this->loadTemplate("OroActionBundle:Widget:_widget.html.twig", "OroPromotionBundle:Coupon:index.html.twig", 14)->display($context);
            // line 15
            echo "    ";
        }
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Coupon:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  51 => 15,  48 => 14,  46 => 13,  43 => 12,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 4,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Coupon:index.html.twig", "");
    }
}
