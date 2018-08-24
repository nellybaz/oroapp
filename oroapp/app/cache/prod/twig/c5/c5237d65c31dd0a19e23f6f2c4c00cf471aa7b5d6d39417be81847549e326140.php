<?php

/* OroCommerceMenuBundle:Placeholders:customerGroupButton.html.twig */
class __TwigTemplate_cf3e1a5a4d19dc85ef6b0f0a264d6c906967a4109af85d413568261662038d33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCommerceMenuBundle:Placeholders:customerGroupButton.html.twig", 2);
            // line 3
            echo "    ";
            echo $context["UI"]->getbutton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_commerce_menu_customer_group_menu_index", array("id" => $this->getAttribute(            // line 4
($context["entity"] ?? null), "id", array()))), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.customer_group_menu.label"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.customer_group_menu.label"), "iCss" => "fa-cog"));
            // line 8
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:Placeholders:customerGroupButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:Placeholders:customerGroupButton.html.twig", "");
    }
}
