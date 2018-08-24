<?php

/* OroPromotionBundle:Promotion:update.html.twig */
class __TwigTemplate_09453ab624dc7277100ae1b0a53d3c027a5e9b98e9e306756f08c1d5e98defca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroPromotionBundle:Promotion:update.html.twig", 1);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPromotionBundle:Promotion:update.html.twig", 2);
        // line 4
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 6
        if (($context["entityId"] ?? null)) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => $this->getAttribute($this->getAttribute(            // line 7
($context["entity"] ?? null), "rule", array()), "name", array()))));
        } else {

            $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.entity_label"))));
        }
        // line 12
        $context["formAction"] = ((($context["entityId"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_update", array("id" => ($context["entityId"] ?? null)))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_navButtons($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $context["UI"]->getcancelButton($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_index"));
        echo "

    ";
        // line 17
        $context["html"] = "";
        // line 18
        echo "    ";
        if ($this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("oro_promotion_view")) {
            // line 19
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndCloseButton(array("route" => "oro_promotion_view", "params" => array("id" => "\$id"))));
            // line 23
            echo "    ";
        }
        // line 24
        echo "    ";
        if ((($context["entityId"] ?? null) || $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("oro_promotion_update"))) {
            // line 25
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndStayButton(array("route" => "oro_promotion_update", "params" => array("id" => "\$id"))));
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        echo $context["UI"]->getdropdownSaveButton(array("html" => ($context["html"] ?? null)));
        echo "
";
    }

    // line 33
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 35
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 36
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.entity_plural_label"), "entityTitle" => (($this->getAttribute($this->getAttribute(            // line 39
($context["entity"] ?? null), "rule", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "rule", array(), "any", false, true), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 41
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 43
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.entity_label")));
            // line 44
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroPromotionBundle:Promotion:update.html.twig", 44)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 45
            echo "    ";
        }
    }

    // line 48
    public function block_content_data($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["id"] = "promotion-edit";
        // line 50
        echo "
    ";
        // line 51
        ob_start();
        // line 52
        echo "        <div class=\"collapse-view\"
             data-page-component-collapse=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("open" =>  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "expression", array()), "vars", array()), "value", array())))), "html", null, true);
        echo "\"
        >
            <div class=\"control-group\">
                <div class=\"control-label wrap\">
                    ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "expression", array()), 'label');
        echo "
                </div>
                <div data-collapse-trigger class=\"controls\">
                    <div class=\"control-label expression-collapse-label\">
                        <a class=\"collapse-view__trigger_show\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.rule.expression.toggle.show"), "html", null, true);
        echo "</a>
                        <a class=\"collapse-view__trigger_hide\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.rule.expression.toggle.hide"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <div data-collapse-container>
                        ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "expression", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        $context["advancedConditions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 75
        echo "
    ";
        // line 76
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.blocks.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 83
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row'), 1 =>         // line 84
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "name", array()), 'row'), 2 =>         // line 85
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "sortOrder", array()), 'row'), 3 =>         // line 86
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "enabled", array()), 'row', array("label" => "oro.promotion.rule.enabled.label")), 4 =>         // line 87
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rule", array()), "stopProcessing", array()), 'row'), 5 =>         // line 88
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "useCoupons", array()), 'row'))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.blocks.discount_options"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 97
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discountConfiguration", array()), 'widget'))))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.blocks.schedules"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 106
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "schedules", array()), 'row'))))), 3 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.blocks.conditions"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scopes", array()), 'row'), 1 =>         // line 116
($context["advancedConditions"] ?? null))))), 4 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.blocks.matching_items"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 125
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productsSegment", array()), 'widget'))))));
        // line 130
        echo "
    ";
        // line 131
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.blocks.store_frontend"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 136
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "labels", array()), 'row')))))));
        // line 140
        echo "
    ";
        // line 141
        $context["data"] = array("formErrors" =>         // line 142
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 143
($context["dataBlocks"] ?? null));
        // line 145
        echo "
    ";
        // line 146
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Promotion:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 146,  190 => 145,  188 => 143,  187 => 142,  186 => 141,  183 => 140,  181 => 136,  180 => 131,  177 => 130,  175 => 125,  174 => 116,  173 => 115,  172 => 106,  171 => 97,  170 => 88,  169 => 87,  168 => 86,  167 => 85,  166 => 84,  165 => 83,  164 => 76,  161 => 75,  152 => 69,  142 => 62,  138 => 61,  131 => 57,  124 => 53,  121 => 52,  119 => 51,  116 => 50,  113 => 49,  110 => 48,  105 => 45,  102 => 44,  99 => 43,  93 => 41,  91 => 39,  90 => 36,  88 => 35,  85 => 34,  82 => 33,  75 => 30,  72 => 29,  69 => 25,  66 => 24,  63 => 23,  60 => 19,  57 => 18,  55 => 17,  49 => 15,  46 => 14,  42 => 1,  40 => 12,  34 => 7,  31 => 6,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Promotion:update.html.twig", "");
    }
}
