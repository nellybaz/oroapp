<?php

/* OroContactBundle:Contact:addContactButton.html.twig */
class __TwigTemplate_a619fdb82971e918d546ccb0d1a3792baed03bdf77aa9fb0c7b25b8d202936cf extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroContactBundle:Contact:addContactButton.html.twig", 1);
        // line 2
        echo $context["UI"]->getbutton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_create", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 5
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 6
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.add_entity"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.add_entity"), "iCss" => "fa-user", "aCss" => "action-link"));
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroContactBundle:Contact:addContactButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  23 => 6,  22 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactBundle:Contact:addContactButton.html.twig", "");
    }
}
