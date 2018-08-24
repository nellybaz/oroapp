<?php

/* OroEntityExtendBundle:Form:fields.html.twig */
class __TwigTemplate_7e9739e1104050e0684aa4cb23ea0a0238c3d12adac78cdb27a15841a12e96ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_entity_extend_enum_value_widget' => array($this, 'block_oro_entity_extend_enum_value_widget'),
            'oro_entity_extend_enum_value_collection_widget' => array($this, 'block_oro_entity_extend_enum_value_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_entity_extend_enum_value_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('oro_entity_extend_enum_value_collection_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_entity_extend_enum_value_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "label", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append input-append-sortable collection-element-primary\">
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'widget', array("disabled" => ($context["disabled"] ?? null)));
        echo "
            <span class=\"add-on ui-sortable-handle";
        // line 5
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo "\"
                  data-name=\"sortable-handle\"
                  title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.enum_options.priority.tooltip"), "html", null, true);
        echo "\">
                <i class=\"fa-arrows-v ";
        // line 8
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo "\"></i>
                ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priority", array()), 'widget', array("disabled" => ($context["disabled"] ?? null)));
        echo "
            </span>
            <label class=\"add-on";
        // line 11
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.enum_options.default.tooltip"), "html", null, true);
        echo "\">
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "is_default", array()), 'widget', array("disabled" => ($context["disabled"] ?? null)));
        echo "
            </label>
        </div>
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'errors');
        echo "
    </div>
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 20
    public function block_oro_entity_extend_enum_value_collection_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityExtendBundle:Form:fields.html.twig", 21);
        // line 22
        echo "    ";
        if ( !($context["disabled"] ?? null)) {
            // line 23
            echo "        <div class=\"enum-value-collection\" ";
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "oroentityextend/js/app/views/enum-values-view", "multiple" =>             // line 27
($context["multiple"] ?? null), "autoRender" => true)));
            // line 30
            echo ">
            ";
            // line 31
            $this->displayBlock("oro_collection_widget", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 34
            echo "        ";
            $this->displayBlock("oro_collection_widget", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  108 => 31,  105 => 30,  103 => 27,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  86 => 17,  81 => 15,  75 => 12,  67 => 11,  62 => 9,  56 => 8,  52 => 7,  45 => 5,  41 => 4,  33 => 2,  30 => 1,  26 => 20,  23 => 19,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityExtendBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityExtendBundle/Resources/views/Form/fields.html.twig");
    }
}
