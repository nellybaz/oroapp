<?php

/* OroPromotionBundle:Coupon:update.html.twig */
class __TwigTemplate_deea8d3b504ad7692024fecbe814d761d1b46105ba82c4e0b2d014ddac8891e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroPromotionBundle:Coupon:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPromotionBundle:Coupon:update.html.twig", 2);
        // line 4
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_coupon_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_coupon_create")));

        $this->env->getExtension("oro_title")->set(array("params" => array("%code%" => $this->getAttribute(        // line 6
($context["entity"] ?? null), "code", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.entity_label"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 11
        echo $context["UI"]->getcancelButton($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_coupon_index"));
        echo "
    ";
        // line 12
        $context["html"] = $context["UI"]->getsaveAndCloseButton(array("route" => "oro_promotion_coupon_index"));
        // line 15
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("oro_promotion_coupon_update"))) {
            // line 16
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndStayButton(array("route" => "oro_promotion_coupon_update", "params" => array("id" => "\$id"))));
            // line 20
            echo "    ";
        }
        // line 21
        echo "    ";
        echo $context["UI"]->getdropdownSaveButton(array("html" => ($context["html"] ?? null)));
        echo "
";
    }

    // line 24
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 26
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 27
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_coupon_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 30
($context["entity"] ?? null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "code", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 32
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 34
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.entity_label")));
            // line 35
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroPromotionBundle:Coupon:update.html.twig", 35)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 36
            echo "    ";
        }
    }

    // line 39
    public function block_content_data($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $context["id"] = "coupon-edit";
        // line 41
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 48
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "code", array()), 'row'), 1 =>         // line 49
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "promotion", array()), 'row'), 2 =>         // line 50
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", array()), 'row'), 3 =>         // line 51
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "usesPerCoupon", array()), 'row'), 4 =>         // line 52
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "usesPerPerson", array()), 'row'), 5 =>         // line 53
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "validFrom", array()), 'row'), 6 =>         // line 54
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "validUntil", array()), 'row'))))));
        // line 60
        echo "    ";
        $context["additionalData"] = array();
        // line 61
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 62
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 63
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 65
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.sections.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 70
($context["additionalData"] ?? null))))));
            // line 73
            echo "    ";
        }
        // line 74
        echo "
    ";
        // line 75
        $context["data"] = array("formErrors" =>         // line 76
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 77
($context["dataBlocks"] ?? null));
        // line 79
        echo "
    <div class=\"responsive-form-inner\">
        ";
        // line 81
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Coupon:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 81,  149 => 79,  147 => 77,  146 => 76,  145 => 75,  142 => 74,  139 => 73,  137 => 70,  135 => 65,  132 => 64,  125 => 63,  122 => 62,  116 => 61,  113 => 60,  111 => 54,  110 => 53,  109 => 52,  108 => 51,  107 => 50,  106 => 49,  105 => 48,  103 => 41,  100 => 40,  97 => 39,  92 => 36,  89 => 35,  86 => 34,  80 => 32,  78 => 30,  77 => 27,  75 => 26,  72 => 25,  69 => 24,  62 => 21,  59 => 20,  56 => 16,  53 => 15,  51 => 12,  47 => 11,  41 => 9,  38 => 8,  34 => 1,  32 => 6,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Coupon:update.html.twig", "");
    }
}
