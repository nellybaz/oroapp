<?php

/* OroSalesBundle:SalesFunnel:update.html.twig */
class __TwigTemplate_c35335fda60d43b82f3dc35f0d3885501c5aedf9c714fd612f26c6dbfc7ea72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroSalesBundle:SalesFunnel:update.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroAddressBundle:Include:fields.html.twig", 1 => "OroFormBundle:Form:fields.html.twig"));
        // line 4
        $context["salesFunnelHint"] = "";
        // line 5
        if (($context["entity"] ?? null)) {
            // line 6
            $context["salesFunnelHint"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.salesfunnel.hint", array("%id%" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        }

        $this->env->getExtension("oro_title")->set(array("params" => array("%sales_funnel%" =>         // line 9
($context["salesFunnelHint"] ?? null))));
        // line 10
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_salesfunnel_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_salesfunnel_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_head_script($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'stylesheet');
        echo "
    ";
    }

    // line 20
    public function block_navButtons($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_salesfunnel", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 23
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_salesfunnel_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-sales-funnel", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 27
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.salesfunnel.entity_label"))), "method"), "html", null, true);
            // line 29
            echo "
        ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 32
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_salesfunnel_index")), "method"), "html", null, true);
        echo "
    ";
        // line 33
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_sales_salesfunnel_view", "params" => array("id" => "\$id"))), "method");
        // line 37
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_sales_salesfunnel_update"))) {
            // line 38
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_sales_salesfunnel_update", "params" => array("id" => "\$id"))), "method"));
            // line 42
            echo "    ";
        }
        // line 43
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 46
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 48
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 49
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_salesfunnel_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.salesfunnel.entity_plural_label"), "entityTitle" =>             // line 52
($context["salesFunnelHint"] ?? null));
            // line 54
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 56
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroSalesBundle:SalesFunnel:update.html.twig", 56)->display(array_merge($context, array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.salesfunnel.new_entity"))));
            // line 57
            echo "    ";
        }
    }

    // line 60
    public function block_stats($context, array $blocks = array())
    {
        // line 61
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 65
    public function block_content_data($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $context["id"] = "sales-funnel-management";
        // line 67
        echo "
    ";
        // line 68
        $context["formFields"] = array();
        // line 69
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
            // line 70
            echo "        ";
            $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row')));
            // line 71
            echo "    ";
        }
        // line 72
        echo "    ";
        $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 =>         // line 73
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "startDate", array()), 'row')));
        // line 75
        echo "
    ";
        // line 76
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("data" =>         // line 81
($context["formFields"] ?? null)))));
        // line 86
        echo "
    ";
        // line 87
        $context["additionalData"] = array();
        // line 88
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 89
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 90
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 92
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 97
($context["additionalData"] ?? null))))));
            // line 100
            echo "    ";
        }
        // line 101
        echo "
    ";
        // line 102
        $context["data"] = array("formErrors" => ((        // line 103
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 104
($context["dataBlocks"] ?? null));
        // line 106
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:SalesFunnel:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 106,  221 => 104,  220 => 103,  219 => 102,  216 => 101,  213 => 100,  211 => 97,  209 => 92,  206 => 91,  199 => 90,  196 => 89,  190 => 88,  188 => 87,  185 => 86,  183 => 81,  182 => 76,  179 => 75,  177 => 73,  175 => 72,  172 => 71,  169 => 70,  166 => 69,  164 => 68,  161 => 67,  158 => 66,  155 => 65,  147 => 62,  140 => 61,  137 => 60,  132 => 57,  129 => 56,  123 => 54,  121 => 52,  120 => 49,  118 => 48,  115 => 47,  112 => 46,  105 => 43,  102 => 42,  99 => 38,  96 => 37,  94 => 33,  89 => 32,  84 => 30,  81 => 29,  79 => 27,  78 => 23,  76 => 22,  73 => 21,  70 => 20,  63 => 16,  57 => 15,  51 => 13,  48 => 12,  44 => 1,  42 => 10,  40 => 9,  36 => 6,  34 => 5,  32 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:SalesFunnel:update.html.twig", "");
    }
}
