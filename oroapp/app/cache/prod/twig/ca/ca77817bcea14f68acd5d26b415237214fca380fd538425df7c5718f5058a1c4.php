<?php

/* @OroLayout/Layout/php/script_widget.html.php */
class __TwigTemplate_bf8bc6e138c7d450aaad92af113b65bfa53a2e0b35c874ff80be04a5460e5e54 extends Twig_Template
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
<?php if (!empty(\$async)) {
    \$attr['async'] = 'async';
} ?>
<?php if (!empty(\$defer)) {
    \$attr['defer'] = 'defer';
} ?>
<?php if (!empty(\$crossorigin)) {
    \$attr['crossorigin'] = \$crossorigin;
} ?>
<?php if (!empty(\$src)): ?>
    <?php \$attr['src'] = \$src; ?>
    <script <?php echo \$view['layout']->block(\$block, 'block_attributes', array('attr' => \$attr)) ?>></script>
<?php else: ?>
    <script <?php echo \$view['layout']->block(\$block, 'block_attributes', array('attr' => \$attr)) ?>>
        <?php echo \$content ?>
    </script>
<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/script_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/script_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/script_widget.html.php");
    }
}
