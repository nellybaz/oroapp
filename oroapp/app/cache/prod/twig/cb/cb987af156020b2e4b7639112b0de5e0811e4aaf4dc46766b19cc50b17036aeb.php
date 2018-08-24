<?php

/* @OroLayout/Layout/php/text_widget.html.php */
class __TwigTemplate_b3b57dab38dda5d72b966ce8268008e0231b943e44457817117a014a7f1404ce extends Twig_Template
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
<?php echo \$view->escape(\$view['layout']->text(\$text, \$translation_domain)) ?>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/text_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/text_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/text_widget.html.php");
    }
}
