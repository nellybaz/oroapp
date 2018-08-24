<?php

/* OroCustomerBundle:CustomerGroup:update.html.twig */
class __TwigTemplate_8fb7de3f426f6cf30acd5d2d72cd65213355e49e60932e8b469bf7ea2729be2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCustomerBundle:CustomerGroup:update.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCustomerBundle:CustomerGroup:update.html.twig", 2);
        // line 4
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), "OroFormBundle:Form:fields.html.twig");
        // line 6
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_create")));

        $this->env->getExtension("oro_title")->set(array("params" => array("%customerGroupName%" => (($this->getAttribute(        // line 8
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customergroup.entity_label"))));
        // line 10
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 11
            $context["gridName"] = "customer-group-customers-grid-update";
        } else {
            // line 13
            $context["gridName"] = "customer-group-customers-grid-create";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_navButtons($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_navButtons", $context)) ? (_twig_default_filter(($context["update_navButtons"] ?? null), "update_navButtons")) : ("update_navButtons")), array("entity" => ($context["entity"] ?? null)));
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_index")), "method"), "html", null, true);
        echo "
    ";
        // line 19
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method");
        // line 20
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_customer_customer_group_update"))) {
            // line 21
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
            // line 22
            echo "    ";
        }
        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 26
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 28
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 29
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_group_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customergroup.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 32
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 34
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customergroup.entity_label")));
            // line 37
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCustomerBundle:CustomerGroup:update.html.twig", 37)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 38
            echo "    ";
        }
    }

    // line 41
    public function block_content_data($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["id"] = "customer-group-edit";
        // line 43
        echo "
    ";
        // line 44
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 51
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'))))));
        // line 57
        echo "
    ";
        // line 58
        $context["additionalData"] = array();
        // line 59
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 60
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 61
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 63
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 68
($context["additionalData"] ?? null))))));
            // line 71
            echo "    ";
        }
        // line 72
        echo "
    ";
        // line 73
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.customergroup.customers"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 79
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appendCustomers", array()), 'widget', array("id" => "groupAppendCustomers")), 1 =>         // line 80
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removeCustomers", array()), 'widget', array("id" => "groupRemoveCustomers")), 2 =>         // line 81
$context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), array("group" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"))))))));
        // line 85
        echo "
    ";
        // line 86
        $context["data"] = array("formErrors" =>         // line 87
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 88
($context["dataBlocks"] ?? null));
        // line 90
        echo "
    <div class=\"responsive-form-inner\">
        ";
        // line 92
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerGroup:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 92,  163 => 90,  161 => 88,  160 => 87,  159 => 86,  156 => 85,  154 => 81,  153 => 80,  152 => 79,  151 => 73,  148 => 72,  145 => 71,  143 => 68,  141 => 63,  138 => 62,  131 => 61,  128 => 60,  122 => 59,  120 => 58,  117 => 57,  115 => 51,  114 => 44,  111 => 43,  108 => 42,  105 => 41,  100 => 38,  97 => 37,  94 => 36,  88 => 34,  86 => 32,  85 => 29,  83 => 28,  80 => 27,  77 => 26,  70 => 23,  67 => 22,  64 => 21,  61 => 20,  59 => 19,  54 => 18,  51 => 17,  48 => 16,  44 => 1,  41 => 13,  38 => 11,  36 => 10,  34 => 8,  31 => 6,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:CustomerGroup:update.html.twig", "");
    }
}
