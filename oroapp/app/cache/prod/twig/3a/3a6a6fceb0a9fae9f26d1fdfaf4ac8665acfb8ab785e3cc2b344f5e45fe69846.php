<?php

/* OroUserBundle:Search:result.html.twig */
class __TwigTemplate_33f4210500e703deaf74ba1b2fec2611e04086f44f9fb22406ffe14ce754c5d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroUserBundle:Search:result.html.twig", 6);
        $this->blocks = array(
            'additional_info' => array($this, 'block_additional_info'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroSearchBundle:Search:searchResultItem.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        $context["showImage"] = true;
        // line 10
        $context["recordUrl"] = $this->getAttribute(($context["indexer_item"] ?? null), "recordUrl", array());
        // line 11
        $context["image"] = ((($context["entity"] ?? null)) ? ($this->getAttribute(($context["entity"] ?? null), "avatar", array())) : (null));
        // line 13
        if (($context["entity"] ?? null)) {
        }
        // line 25
        $context["title"] = ((($context["entity"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["entity"] ?? null))) : ($this->getAttribute(($context["indexer_item"] ?? null), "recordTitle", array())));
        // line 26
        $context["entityType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue($this->getAttribute(($context["indexer_item"] ?? null), "entityName", array()), "label"));
        // line 28
        $context["entityInfo"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "value" => (($this->getAttribute(        // line 29
($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "value" => (($this->getAttribute(        // line 30
($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.last_login.label"), "value" => (($this->getAttribute(        // line 31
($context["entity"] ?? null), "lastLogin", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "lastLogin", array()))) : ("N/A"))), 3 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.login_count.label"), "value" => (($this->getAttribute(        // line 32
($context["entity"] ?? null), "loginCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "loginCount", array()), 0)) : (0))));
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_additional_info($context, array $blocks = array())
    {
        // line 15
        echo "        <div class=\"pull-left\">
            ";
        // line 16
        if ($this->getAttribute(($context["entity"] ?? null), "enabled", array())) {
            // line 17
            echo "                <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
            echo "</div>
            ";
        } else {
            // line 19
            echo "                <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inactive"), "html", null, true);
            echo "</div>
            ";
        }
        // line 21
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Search:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  62 => 19,  56 => 17,  54 => 16,  51 => 15,  48 => 14,  44 => 6,  42 => 32,  41 => 31,  40 => 30,  39 => 29,  38 => 28,  36 => 26,  34 => 25,  31 => 13,  29 => 11,  27 => 10,  25 => 8,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Search:result.html.twig", "");
    }
}
