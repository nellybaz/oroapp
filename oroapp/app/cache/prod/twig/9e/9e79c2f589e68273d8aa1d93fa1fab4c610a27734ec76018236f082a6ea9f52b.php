<?php

/* @OroLayout/Layout/php/input_widget.html.php */
class __TwigTemplate_6552497db7c7d77b6a5c71b4c95fbd7319f606706f29ad85a294aec916096821 extends Twig_Template
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
<?php if (!empty(\$type)) {
    \$attr['type'] = \$type;
} ?>
<?php if (!empty(\$name)) {
    \$attr['name'] = \$name;
} ?>
<?php if (!empty(\$attr['placeholder'])) {
    \$attr['placeholder'] = \$view['layout']->text(\$attr['placeholder'], \$translation_domain);
} ?>
<input <?php echo \$view['layout']->block(\$block, 'block_attributes', array('attr' => \$attr)) ?>/>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/input_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/input_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/input_widget.html.php");
    }
}
