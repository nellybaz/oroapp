<?php

/* @OroEmbeddedForm/layouts/embedded_default/php/embed_form_end_widget.html.php */
class __TwigTemplate_93968f2798848c375adcabf06bb9513f5b369d87f07f8970bb8bc192d4a7ff75 extends Twig_Template
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
        echo "<?php //@codingStandardsIgnoreFile?>
<?php
    if (\$view['render_rest']) {
        echo \$view['form']->end(\$form);
    } else {
        echo '</form>';
    }
?>
";
    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/layouts/embedded_default/php/embed_form_end_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroEmbeddedForm/layouts/embedded_default/php/embed_form_end_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/php/embed_form_end_widget.html.php");
    }
}
