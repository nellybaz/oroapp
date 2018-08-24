<?php

/* @OroEmbeddedForm/layouts/embedded_default/php/embed_form_field_widget.html.php */
class __TwigTemplate_185b600d593b90d56c956c6434e36b1bbca10bf752f60781a7ded99fe04d49d5 extends Twig_Template
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
<?php echo \$view['form']->row(\$form) ?>
";
    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/layouts/embedded_default/php/embed_form_field_widget.html.php";
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
        return new Twig_Source("", "@OroEmbeddedForm/layouts/embedded_default/php/embed_form_field_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/php/embed_form_field_widget.html.php");
    }
}
