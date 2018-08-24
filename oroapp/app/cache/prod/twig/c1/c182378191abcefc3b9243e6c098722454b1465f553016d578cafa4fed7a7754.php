<?php

/* OroCustomerBundle:Customer:view.html.twig */
class __TwigTemplate_71814129f6960e3fcde2957cce5f21d3e8c657881c9baebd5cb714b0dc347b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCustomerBundle:Customer:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
            'stats' => array($this, 'block_stats'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCustomerBundle:Customer:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 11
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 13
        echo "
    ";
        // line 14
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_content_data($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_info", array("id" => $this->getAttribute(        // line 21
($context["entity"] ?? null), "id", array()))), "alias" => "customer-info-widget"));
        // line 23
        echo "
    ";
        $context["customerInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "
    ";
        // line 26
        ob_start();
        // line 27
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_customer_customer_address_view")) {
            // line 28
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "contentClasses" => array(), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_address_book", array("id" => $this->getAttribute(            // line 31
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customer.address_book.label")));
            // line 33
            echo "
        ";
        }
        // line 35
        echo "    ";
        $context["addressBookWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "
    ";
        // line 37
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 41
($context["customerInfo"] ?? null))), 1 => array("data" => array(0 =>         // line 42
($context["addressBookWidget"] ?? null))))));
        // line 45
        echo "
    ";
        // line 46
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.entity_plural_label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 53
$context["dataGrid"]->getrenderGrid("customer-user-by-customer-grid", array("customer_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())), array("cssClass" => "inner-grid"))))))));
        // line 58
        echo "
    ";
        // line 59
        $context["id"] = "customer-view";
        // line 60
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 61
        echo "
    ";
        // line 62
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 65
    public function block_stats($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $context["data"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->scrollDataBefore($this->env, "customer-stats-view", array(), ($context["entity"] ?? null));
        // line 67
        echo "    ";
        if ($this->getAttribute(($context["data"] ?? null), "dataBlocks", array(), "any", true, true)) {
            // line 68
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->sortBy($this->getAttribute(($context["data"] ?? null), "dataBlocks", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 69
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["scrollBlock"], "subblocks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                    // line 70
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subblock"], "data", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                        // line 71
                        echo "                    ";
                        echo $context["dataBlock"];
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:Customer:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 75,  155 => 74,  149 => 73,  140 => 71,  135 => 70,  130 => 69,  125 => 68,  122 => 67,  119 => 66,  116 => 65,  110 => 62,  107 => 61,  104 => 60,  102 => 59,  99 => 58,  97 => 53,  96 => 46,  93 => 45,  91 => 42,  90 => 41,  89 => 37,  86 => 36,  83 => 35,  79 => 33,  77 => 31,  75 => 28,  72 => 27,  70 => 26,  67 => 25,  63 => 23,  61 => 21,  59 => 19,  56 => 18,  53 => 17,  47 => 14,  44 => 13,  42 => 11,  41 => 8,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:Customer:view.html.twig", "");
    }
}
