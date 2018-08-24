<?php

/* OroDotmailerBundle:Form:fields.html.twig */
class __TwigTemplate_4e8f6754a9c519015010d2e02ea2950e39e652330b6ebec533bbc25bd5a051c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_dotmailer_transport_check_button_widget' => array($this, 'block_oro_dotmailer_transport_check_button_widget'),
            'oro_dotmailer_transport_check_button_row' => array($this, 'block_oro_dotmailer_transport_check_button_row'),
            '_oro_dotmailer_datafield_mapping_form_config_entityFields_row' => array($this, 'block__oro_dotmailer_datafield_mapping_form_config_entityFields_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_dotmailer_transport_check_button_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('oro_dotmailer_transport_check_button_row', $context, $blocks);
        // line 21
        $this->displayBlock('_oro_dotmailer_datafield_mapping_form_config_entityFields_row', $context, $blocks);
    }

    // line 1
    public function block_oro_dotmailer_transport_check_button_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["options"] = array("pingUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_ping"));
        // line 5
        echo "    <div data-page-component-module=\"orodotmailer/js/app/components/dm-resource-component\"
         data-page-component-options=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
        <div class=\"control-group\">
            <div class=\"controls\">
                <div style=\"margin-top: 10px;display: none;\" class=\"ping-holder\">
                    <button type=\"";
        // line 10
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "</button>
                    <div class=\"connection-status alert\" style=\"display: none\"></div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 18
    public function block_oro_dotmailer_transport_check_button_row($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block__oro_dotmailer_datafield_mapping_form_config_entityFields_row($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        ob_start();
        // line 23
        echo "        <div class=\"control-group entity-field-control\">
            ";
        // line 24
        if ( !(($context["label"] ?? null) === false)) {
            // line 25
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => ($context["label_attr"] ?? null)));
            echo "
                </div>
            ";
        }
        // line 29
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
            <div class=\"control-group\">
                <div class=\"controls fields-container\">
                </div>
                <a class=\"btn add-field\" href=\"javascript: void(0);\"><i class=\"icon-plus\"></i>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "</a>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroDotmailerBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  105 => 31,  101 => 30,  94 => 29,  88 => 26,  85 => 25,  83 => 24,  80 => 23,  77 => 22,  74 => 21,  67 => 19,  64 => 18,  49 => 10,  42 => 6,  39 => 5,  36 => 2,  33 => 1,  29 => 21,  27 => 18,  24 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDotmailerBundle:Form:fields.html.twig", "");
    }
}
