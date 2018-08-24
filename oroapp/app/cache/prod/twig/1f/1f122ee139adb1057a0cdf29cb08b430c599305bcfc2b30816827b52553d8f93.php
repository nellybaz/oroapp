<?php

/* OroNotificationBundle:MassNotification:view.html.twig */
class __TwigTemplate_ded83a87bf0c7556ae2fec3e6a219a23d0ef2302c1f6f9a12eae110e8938c57a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroNotificationBundle:MassNotification:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.name%" => (($this->getAttribute(        // line 3
($context["entity"] ?? null), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "email", array()), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 7
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_notification_massnotification_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.massnotification.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 10
($context["entity"] ?? null), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "email", array()), "N/A")) : ("N/A")));
        // line 12
        echo "    ";
        $this->displayBlock('stats', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_stats($context, array $blocks = array())
    {
        // line 13
        echo "    ";
    }

    // line 17
    public function block_content_data($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_notification_massnotification_info", array("id" => $this->getAttribute(        // line 21
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.notification.massnotification.block.info")));
        // line 23
        echo "
    ";
        $context["massNotificationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "
    ";
        // line 26
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 31
($context["massNotificationWidget"] ?? null))))));
        // line 35
        echo "
    ";
        // line 36
        $context["id"] = "massNotificationView";
        // line 37
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 38
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNotificationBundle:MassNotification:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 38,  84 => 37,  82 => 36,  79 => 35,  77 => 31,  76 => 26,  73 => 25,  69 => 23,  67 => 21,  65 => 19,  62 => 18,  59 => 17,  55 => 13,  52 => 12,  45 => 14,  42 => 12,  40 => 10,  39 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNotificationBundle:MassNotification:view.html.twig", "");
    }
}
