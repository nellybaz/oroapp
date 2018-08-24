<?php

/* @OroLayout/Layout/php/external_resource_widget.html.php */
class __TwigTemplate_1c64219722278e3a0e4e5205b9fcc4638fd17b2e5db703475e8fcad60bbdd5a6 extends Twig_Template
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
<?php if (isset(\$type)) {
    \$attr['type'] = \$type;
} ?>
<?php if (isset(\$rel)) {
    \$attr['rel'] = \$rel;
} ?>
<?php if (isset(\$href)) {
    \$attr['href'] = \$href;
} ?>
<link <?php echo \$view['layout']->block(\$block, 'block_attributes', array('attr' => \$attr)) ?>/>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/external_resource_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/external_resource_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/external_resource_widget.html.php");
    }
}
