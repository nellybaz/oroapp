<?php

/* OroEntityBundle:Entities:index.html.twig */
class __TwigTemplate_1a37520835ca60eb42d0c8ad07a512a636a2adcd8f2960d78bda8fe233769773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroEntityBundle:Entities:index.html.twig", 1);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityBundle:Entities:index.html.twig", 2);
        // line 4
        $context["gridName"] = "custom-entity-grid";
        // line 6
        $context["params"] = array("class_name" => ($context["entity_class"] ?? null));
        // line 8
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["plural_label"] ?? null));

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((        // line 10
array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null), "N/A")) : ("N/A"))))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_navButtons($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("CREATE", ("entity:" . ($context["entity_class"] ?? null)))) {
            // line 14
            echo "        ";
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entity_update", array("entityName" =>             // line 15
($context["entity_name"] ?? null))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(            // line 16
($context["label"] ?? null))));
            // line 17
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Entities:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  49 => 16,  48 => 15,  46 => 14,  43 => 13,  40 => 12,  36 => 1,  34 => 10,  31 => 8,  29 => 6,  27 => 4,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityBundle:Entities:index.html.twig", "");
    }
}
