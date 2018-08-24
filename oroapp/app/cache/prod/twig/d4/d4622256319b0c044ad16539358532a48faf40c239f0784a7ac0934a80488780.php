<?php

/* OroEntityBundle:Form:fields.html.twig */
class __TwigTemplate_7c5a7e64afbcf9f8cc86ed78bcd82c68438c25073b38a9648d9c723afd4f588a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_oro_entity_config_type_view_is_displayable_widget' => array($this, 'block__oro_entity_config_type_view_is_displayable_widget'),
            'oro_entity_fallback_value_widget' => array($this, 'block_oro_entity_fallback_value_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_oro_entity_config_type_view_is_displayable_widget', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('oro_entity_fallback_value_widget', $context, $blocks);
    }

    // line 1
    public function block__oro_entity_config_type_view_is_displayable_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityBundle:Form:fields.html.twig", 2);
        // line 3
        echo "
    <div ";
        // line 4
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroentity/js/app/views/displayable-priority-view", "options" => array("prioritySelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
($context["form"] ?? null), "parent", array()), "children", array()), "priority", array()), "vars", array()), "id", array())))));
        // line 9
        echo ">
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("data-field" => "is_displayable")));
        echo "
    </div>
";
    }

    // line 14
    public function block_oro_entity_fallback_value_widget($context, array $blocks = array())
    {
        // line 15
        echo "    <table class=\"entity-fallback-container\"
           data-page-component-module=\"oroui/js/app/components/view-component\"
           data-page-component-options=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroentity/js/app/views/entity-field-fallback")), "html", null, true);
        echo "\"
    >
        <tr>
            <td>
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scalarValue", array()), 'widget', array("attr" => array("class" => "entity-field-value")));
        echo "
            </td>
            <td nowrap=\"true\" class=\"fallback-item-use-fallback\">
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "useFallback", array()), 'widget', array("attr" => array("class" => "use-fallback-checkbox")));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "useFallback", array()), "vars", array()), "label", array())), "html", null, true);
        echo "
            </td>
            <td class=\"fallback-item-fallback\">
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fallback", array()), 'widget', array("attr" => array("class" => "fallback fallback-select")));
        echo "
            </td>
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  72 => 24,  66 => 21,  59 => 17,  55 => 15,  52 => 14,  45 => 10,  42 => 9,  40 => 7,  39 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 14,  23 => 13,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityBundle/Resources/views/Form/fields.html.twig");
    }
}
