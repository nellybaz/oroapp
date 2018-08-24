<?php

/* OroEntityConfigBundle:Attribute:index.html.twig */
class __TwigTemplate_cfab98a3cc7d61a7d5140aa2c25572a2ecea4db3c0155e2cc87e3df881366248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroEntityConfigBundle:Attribute:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle:Attribute:index.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroEntityConfigBundle:Attribute:index.html.twig", 3);
        // line 5
        $context["gridName"] = "attributes-grid";
        // line 6
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["attributesLabel"] ?? null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_attribute_create") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_attribute_update"))) {
            // line 10
            echo "        ";
            $this->loadTemplate("OroImportExportBundle:ImportExport:buttons_from_configuration.html.twig", "OroEntityConfigBundle:Attribute:index.html.twig", 10)->display(array_merge($context, array("alias" => "oro_field_config_model_attribute", "options" => array("entity_id" => $this->getAttribute(            // line 12
($context["entity"] ?? null), "id", array()), "check_attributes" => true))));
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    ";
        // line 16
        echo $context["entityConfig"]->getdisplayLayoutActions(($context["layoutActions"] ?? null));
        echo "
    ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_attribute_create")) {
            // line 18
            echo "        <div class=\"btn-group pull-right\">
            ";
            // line 19
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_create", array("alias" =>             // line 20
($context["entityAlias"] ?? null))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute.entity_label")));
            // line 22
            echo "
        </div>
    ";
        }
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 29
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("attributes_content_after", $context)) ? (_twig_default_filter(($context["attributes_content_after"] ?? null), "attributes_content_after")) : ("attributes_content_after")), array("entityAlias" => ($context["entityAlias"] ?? null)));
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Attribute:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  76 => 28,  73 => 27,  66 => 22,  64 => 20,  63 => 19,  60 => 18,  58 => 17,  54 => 16,  51 => 15,  48 => 14,  46 => 12,  44 => 10,  41 => 9,  38 => 8,  34 => 1,  32 => 6,  30 => 5,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Attribute:index.html.twig", "");
    }
}
