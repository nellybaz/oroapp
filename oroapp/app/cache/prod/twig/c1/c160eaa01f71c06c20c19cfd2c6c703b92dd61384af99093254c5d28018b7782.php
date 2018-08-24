<?php

/* OroCallBundle:Call:view.html.twig */
class __TwigTemplate_75b99a1f2ab4c1f6625910250eb6d65d6603bc6697ac9d193993effd6dc1cb1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCallBundle:Call:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'stats' => array($this, 'block_stats'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCallBundle:Call:view.html.twig", 2);
        // line 3
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroCallBundle:Call:view.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%subject%" => (($this->getAttribute(        // line 5
($context["entity"] ?? null), "subject", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "subject", array()), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 9
            echo "        ";
            // line 10
            echo "        ";
            echo $context["AC"]->getaddContextButton(($context["entity"] ?? null));
            echo "
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_call_update", array("id" => $this->getAttribute(            // line 12
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.entity_label"))), "method"), "html", null, true);
            // line 14
            echo "
    ";
        }
        // line 16
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_call", array("id" => $this->getAttribute(            // line 18
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_call_index"), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 21
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.entity_label"))), "method"), "html", null, true);
            // line 23
            echo "
    ";
        }
    }

    // line 27
    public function block_stats($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        // line 29
        echo "    <li class=\"context-data activity-context-activity-block\">
        ";
        // line 30
        echo $context["AC"]->getactivity_contexts(($context["entity"] ?? null));
        echo "
    </li>
";
    }

    // line 34
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 36
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_call_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 39
($context["entity"] ?? null), "subject", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "subject", array()), "N/A")) : ("N/A")));
        // line 41
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 44
    public function block_content_data($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        ob_start();
        // line 46
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.widget.call_information"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_call_widget_info", array("id" => $this->getAttribute(        // line 49
($context["entity"] ?? null), "id", array()), "renderContexts" => 0))));
        // line 50
        echo "
    ";
        $context["callInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 58
($context["callInformationWidget"] ?? null))))));
        // line 62
        echo "
    ";
        // line 63
        $context["id"] = "callView";
        // line 64
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 65
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCallBundle:Call:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 65,  128 => 64,  126 => 63,  123 => 62,  121 => 58,  120 => 53,  117 => 52,  113 => 50,  111 => 49,  109 => 46,  106 => 45,  103 => 44,  96 => 41,  94 => 39,  93 => 36,  91 => 35,  88 => 34,  81 => 30,  78 => 29,  76 => 28,  73 => 27,  67 => 23,  65 => 21,  64 => 18,  62 => 17,  59 => 16,  55 => 14,  53 => 12,  52 => 11,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  35 => 1,  33 => 5,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCallBundle:Call:view.html.twig", "");
    }
}
