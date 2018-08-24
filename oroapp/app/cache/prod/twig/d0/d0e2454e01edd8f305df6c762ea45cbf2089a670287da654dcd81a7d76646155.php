<?php

/* OroSalesBundle:B2bCustomer:update.html.twig */
class __TwigTemplate_6ed890415b7d33141d05ee37125923ffe52917704b8761cb1690f31806d1abee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroSalesBundle:B2bCustomer:update.html.twig", 1);
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig"));

        $this->env->getExtension("oro_title")->set(array("params" => array("%b2bcustomer.name%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()))));
        // line 6
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_b2bcustomer_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_b2bcustomer_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_head_script($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'stylesheet');
        echo "
    ";
    }

    // line 16
    public function block_navButtons($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_b2bcustomer_index")), "method"), "html", null, true);
        echo "
    ";
        // line 21
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_sales_b2bcustomer_view", "params" => array("id" => "\$id"))), "method");
        // line 25
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_sales_b2bcustomer_create")) {
            // line 26
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_sales_b2bcustomer_create")), "method"));
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_sales_b2bcustomer_update"))) {
            // line 31
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_sales_b2bcustomer_update", "params" => array("id" => "\$id"))), "method"));
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 39
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 41
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 42
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_b2bcustomer_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 45
($context["entity"] ?? null), "name", array()));
            // line 47
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 49
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.entity_label")));
            // line 50
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroSalesBundle:B2bCustomer:update.html.twig", 50)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 51
            echo "    ";
        }
    }

    // line 54
    public function block_stats($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
";
    }

    // line 58
    public function block_content_data($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $context["id"] = "b2bcustomer-profile";
        // line 60
        echo "
    ";
        // line 61
        $context["formFields"] = array();
        // line 62
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
            // line 63
            echo "        ";
            $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row')));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    ";
        // line 66
        $context["formFields"] = twig_array_merge(($context["formFields"] ?? null), array(0 =>         // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'), 1 =>         // line 68
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dataChannel", array()), 'row'), 2 =>         // line 69
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contact", array()), 'row'), 3 =>         // line 70
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phones", array()), 'row'), 4 =>         // line 71
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "emails", array()), 'row')));
        // line 73
        echo "
    ";
        // line 74
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.widgets.b2bcustomer_information"), "data" =>         // line 79
($context["formFields"] ?? null)))));
        // line 82
        echo "
    ";
        // line 83
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses"), "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.billing_address.label"), "data" => array(0 =>         // line 88
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "billingAddress", array()), 'widget'))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.b2bcustomer.shipping_address.label"), "data" => array(0 =>         // line 92
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "shippingAddress", array()), 'widget')))))));
        // line 96
        echo "
    ";
        // line 97
        $context["additionalData"] = array();
        // line 98
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 99
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 100
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 102
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 107
($context["additionalData"] ?? null))))));
            // line 110
            echo "    ";
        }
        // line 111
        echo "
    ";
        // line 112
        $context["data"] = array("formErrors" => ((        // line 113
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 114
($context["dataBlocks"] ?? null));
        // line 116
        echo "    <div class=\"responsive-form-inner\">
        ";
        // line 117
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:B2bCustomer:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 117,  226 => 116,  224 => 114,  223 => 113,  222 => 112,  219 => 111,  216 => 110,  214 => 107,  212 => 102,  209 => 101,  202 => 100,  199 => 99,  193 => 98,  191 => 97,  188 => 96,  186 => 92,  185 => 88,  184 => 83,  181 => 82,  179 => 79,  178 => 74,  175 => 73,  173 => 71,  172 => 70,  171 => 69,  170 => 68,  169 => 67,  168 => 66,  165 => 65,  162 => 64,  159 => 63,  156 => 62,  154 => 61,  151 => 60,  148 => 59,  145 => 58,  138 => 55,  135 => 54,  130 => 51,  127 => 50,  124 => 49,  118 => 47,  116 => 45,  115 => 42,  113 => 41,  110 => 40,  107 => 39,  100 => 36,  97 => 35,  94 => 31,  91 => 30,  88 => 29,  85 => 26,  82 => 25,  80 => 21,  75 => 20,  69 => 18,  66 => 17,  63 => 16,  56 => 12,  50 => 11,  44 => 9,  41 => 8,  37 => 1,  35 => 6,  33 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:B2bCustomer:update.html.twig", "");
    }
}
