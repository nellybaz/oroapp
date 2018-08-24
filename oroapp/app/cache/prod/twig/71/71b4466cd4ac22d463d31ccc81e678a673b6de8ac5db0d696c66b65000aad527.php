<?php

/* OroReminderBundle:Form:fields.html.twig */
class __TwigTemplate_c5af893878f24c67827d0500ad99cfc6a6e666b4dce779823d0e462b4ba0cc91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_reminder_collection_widget' => array($this, 'block_oro_reminder_collection_widget'),
            'oro_reminder_widget' => array($this, 'block_oro_reminder_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_reminder_collection_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('oro_reminder_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_reminder_collection_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["class"] = "reminders-collection";
        // line 3
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . ($context["class"] ?? null))) : (($context["class"] ?? null)))));
        // line 4
        echo "    ";
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    ";
        // line 5
        $context["id"] = (($context["id"] ?? null) . "_collection");
    }

    // line 8
    public function block_oro_reminder_widget($context, array $blocks = array())
    {
        // line 9
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <div class=\"float-holder\">
            <div>
                <div class=\"method inline-field";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "method", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
                    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "method", array()), 'widget');
        echo "
                </div>
                <div class=\"number inline-field";
        // line 15
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "interval", array()), "number", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
                    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "interval", array()), "number", array()), 'widget');
        echo "
                </div>
                <div class=\"unit inline-field";
        // line 18
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "interval", array()), "unit", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
                    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "interval", array()), "unit", array()), 'widget');
        echo "
                </div>
            </div>
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "method", array()), 'errors');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "interval", array()), "number", array()), 'errors');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "interval", array()), "unit", array()), 'errors');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroReminderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  100 => 24,  96 => 23,  92 => 22,  86 => 19,  80 => 18,  75 => 16,  69 => 15,  64 => 13,  58 => 12,  51 => 9,  48 => 8,  44 => 5,  39 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 8,  23 => 7,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroReminderBundle:Form:fields.html.twig", "");
    }
}
