<?php

/* OroCommerceMenuBundle:menuUpdate:update.html.twig */
class __TwigTemplate_05722757873a570227fb619510debb8316bcc4a3e688491abc553931536be030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:menuUpdate:update.html.twig", "OroCommerceMenuBundle:menuUpdate:update.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:menuUpdate:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["deletedMessage"] = "oro.commercemenu.menuupdate.deleted_message";
        // line 4
        $context["hiddenMessage"] = "oro.commercemenu.menuupdate.hide_success_message";
        // line 5
        $context["showedMessage"] = "oro.commercemenu.menuupdate.show_success_message";
        // line 6
        $context["movedMessage"] = "oro.commercemenu.menuupdate.moved_success_message";
        // line 7
        $context["dividerCreatedMessage"] = "oro.commercemenu.menuupdate.divider_created";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:menuUpdate:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:menuUpdate:update.html.twig", "");
    }
}
