<?php

/* OroPromotionBundle:Coupon:view.html.twig */
class __TwigTemplate_f83d41aa04a54c9221bef385fecc28c501f4b5af208f769190f1d28e0e1ae44c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroPromotionBundle:Coupon:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%code%" => $this->getAttribute(        // line 2
($context["entity"] ?? null), "code", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 6
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_coupon_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 9
($context["entity"] ?? null), "code", array()));
        // line 11
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 17
        if ($this->getAttribute(($context["entity"] ?? null), "enabled", array())) {
            // line 18
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.enabled.active"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 20
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.enabled.inactive"), "html", null, true);
            echo "</div>
        ";
        }
        // line 22
        echo "    </div>
";
    }

    // line 25
    public function block_content_data($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "promotion", array())) {
            // line 27
            echo "        ";
            $context["promotion"] = $this->getAttribute(($context["UI"] ?? null), "entityViewLink", array(0 => $this->getAttribute(($context["entity"] ?? null), "promotion", array()), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "promotion", array()), "rule", array()), "name", array())), 2 => "oro_promotion_view"), "method");
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        $context["dataBlocks"] = array("general" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array("code" => $this->getAttribute(        // line 36
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.code.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "code", array())), "method"), "promotion" => $this->getAttribute(        // line 37
($context["UI"] ?? null), "renderHtmlProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.promotion.label"), 1 => ((array_key_exists("promotion", $context)) ? (_twig_default_filter(($context["promotion"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")))), "method"), "usesPerCoupon" => $this->getAttribute(        // line 38
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.uses_per_coupon.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "usesPerCoupon", array())), "method"), "usesPerPerson" => $this->getAttribute(        // line 39
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.uses_per_person.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "usesPerPerson", array())), "method"), "validFrom" => $this->getAttribute(        // line 40
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.valid_from.label"), 1 => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "validFrom", array()))), "method"), "validUntil" => $this->getAttribute(        // line 41
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.valid_until.label"), 1 => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "validUntil", array()))), "method"))))));
        // line 47
        echo "
    ";
        // line 48
        $context["id"] = "coupon-view";
        // line 49
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 50
        echo "
    ";
        // line 51
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Coupon:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 51,  106 => 50,  103 => 49,  101 => 48,  98 => 47,  96 => 41,  95 => 40,  94 => 39,  93 => 38,  92 => 37,  91 => 36,  89 => 29,  86 => 28,  83 => 27,  80 => 26,  77 => 25,  72 => 22,  66 => 20,  60 => 18,  58 => 17,  52 => 15,  49 => 14,  42 => 11,  40 => 9,  39 => 6,  37 => 5,  34 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Coupon:view.html.twig", "");
    }
}
