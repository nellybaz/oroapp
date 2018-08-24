<?php

/* OroContactBundle:Contact:index.html.twig */
class __TwigTemplate_76fa5c2874cfc4264befff10cfc924ba4e18a581a9ca02e29444264226a59d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroContactBundle:Contact:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroContactBundle:Contact:index.html.twig", 2);
        // line 3
        $context["gridName"] = "contacts-grid";
        // line 4
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->loadTemplate("OroImportExportBundle:ImportExport:buttons_from_configuration.html.twig", "OroContactBundle:Contact:index.html.twig", 7)->display(array_merge($context, array("alias" => "oro_contact")));
        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_contact_create")) {
            // line 12
            echo "    <div class=\"btn-group\">
        ";
            // line 13
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_create"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.entity_label")));
            // line 16
            echo "
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroContactBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  49 => 13,  46 => 12,  44 => 11,  41 => 10,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactBundle:Contact:index.html.twig", "");
    }
}