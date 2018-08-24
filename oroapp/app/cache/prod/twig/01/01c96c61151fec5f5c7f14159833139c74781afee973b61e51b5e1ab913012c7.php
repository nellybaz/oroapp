<?php

/* OroEntityConfigBundle:Attribute:create.html.twig */
class __TwigTemplate_3c9f1fc528ae07125fe95d4d8f02e0c88a490810916715847ef43beb4e924d18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroEntityExtendBundle:ConfigFieldGrid:create.html.twig", "OroEntityConfigBundle:Attribute:create.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroEntityExtendBundle:ConfigFieldGrid:create.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute.entity_label"))));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_navButtons($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_index", array("alias" => ($context["entityAlias"] ?? null)))), "method"), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "saveActionButton", array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Continue"), "route" => "oro_attribute_save", "params" => array("alias" =>         // line 10
($context["entityAlias"] ?? null)))), "method"), "html", null, true);
        // line 11
        echo "
";
    }

    // line 14
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_attribute_index", array("alias" =>         // line 17
($context["entityAlias"] ?? null))), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(        // line 18
($context["attributesLabel"] ?? null)), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.attribute.entity_label"))));
        // line 21
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Attribute:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  53 => 18,  52 => 17,  50 => 15,  47 => 14,  42 => 11,  40 => 10,  39 => 7,  34 => 6,  31 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Attribute:create.html.twig", "");
    }
}
