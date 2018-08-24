<?php

/* OroPaymentTermBundle:PaymentTerm:update.html.twig */
class __TwigTemplate_14f9c7b0996c58ff375b85df024623dd336f6d6b30572c22a0d24ef09f6dd75d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroPaymentTermBundle:PaymentTerm:update.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroPaymentTermBundle:PaymentTerm:update.html.twig", 2);
        // line 4
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityLabel%" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "label", array()))));
        // line 7
        $context["formAction"] = ((($context["entityId"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_term_update", array("id" =>         // line 8
($context["entityId"] ?? null)))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_term_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_navButtons($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_navButtons", $context)) ? (_twig_default_filter(($context["update_navButtons"] ?? null), "update_navButtons")) : ("update_navButtons")), array("entity" => ($context["entity"] ?? null)));
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_term_index")), "method"), "html", null, true);
        echo "
    ";
        // line 15
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method");
        // line 16
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_payment_term_update"))) {
            // line 17
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
            // line 18
            echo "    ";
        }
        // line 19
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 22
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 24
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 25
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_payment_term_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 28
($context["entity"] ?? null), "label", array()));
            // line 30
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 32
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.entity_label")));
            // line 33
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroPaymentTermBundle:PaymentTerm:update.html.twig", 33)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 34
            echo "    ";
        }
    }

    // line 37
    public function block_content_data($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["id"] = "payment-term-edit";
        // line 39
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.sections.general_information"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 45
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row'))))));
        // line 49
        echo "
    ";
        // line 50
        $context["data"] = array("formErrors" => ((        // line 51
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 52
($context["dataBlocks"] ?? null));
        // line 54
        echo "
    ";
        // line 55
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPaymentTermBundle:PaymentTerm:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 55,  115 => 54,  113 => 52,  112 => 51,  111 => 50,  108 => 49,  106 => 45,  104 => 39,  101 => 38,  98 => 37,  93 => 34,  90 => 33,  87 => 32,  81 => 30,  79 => 28,  78 => 25,  76 => 24,  73 => 23,  70 => 22,  63 => 19,  60 => 18,  57 => 17,  54 => 16,  52 => 15,  47 => 14,  44 => 13,  41 => 12,  37 => 1,  35 => 8,  34 => 7,  32 => 5,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentTermBundle:PaymentTerm:update.html.twig", "");
    }
}
