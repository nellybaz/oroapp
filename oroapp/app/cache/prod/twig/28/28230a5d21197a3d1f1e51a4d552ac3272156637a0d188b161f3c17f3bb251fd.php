<?php

/* OroTagBundle:Form/Include:fields.html.twig */
class __TwigTemplate_ac0447b80ba2a506d298f981122e5a8148216fefb399ac47763a5d20aa9b00c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_tag_config_choice_widget' => array($this, 'block_oro_tag_config_choice_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_tag_config_choice_widget', $context, $blocks);
    }

    public function block_oro_tag_config_choice_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "

    ";
        // line 4
        if (($context["value"] ?? null)) {
            // line 5
            echo "        <div class=\"alert alert-danger tags-config\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tag.config.disable.alert"), "html", null, true);
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroTagBundle:Form/Include:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  32 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTagBundle:Form/Include:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/TagBundle/Resources/views/Form/Include/fields.html.twig");
    }
}