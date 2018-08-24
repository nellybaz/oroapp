<?php

/* @OroLayout/Layout/php/style_widget.html.php */
class __TwigTemplate_07bf425f4a661b750f62864b33ec8331c70a0e4aa3286c81f2249c4c48780698 extends Twig_Template
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
<?php if (!empty(\$media)) {
    \$attr['media'] = \$media;
} ?>
<?php if (!empty(\$scoped)) {
    \$attr['scoped'] = 'scoped';
} ?>
<?php if (!empty(\$crossorigin)) {
    \$attr['crossorigin'] = \$crossorigin;
} ?>
<?php if (!empty(\$src)): ?>
    <?php \$attr['href'] = \$src; ?>
    <?php \$attr = array_merge(['rel' => 'stylesheet'], \$attr); ?>
    <link <?php echo \$view['layout']->block(\$block, 'block_attributes', array('attr' => \$attr)) ?>/>
<?php else: ?>
    <style <?php echo \$view['layout']->block(\$block, 'block_attributes', array('attr' => \$attr)) ?>>
        <?php echo \$content ?>
    </style>
<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/style_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/style_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/style_widget.html.php");
    }
}
