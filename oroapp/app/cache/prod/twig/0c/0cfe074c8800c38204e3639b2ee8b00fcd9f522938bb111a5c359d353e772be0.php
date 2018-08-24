<?php

/* @OroLayout/Layout/php/ordered_list_widget.html.php */
class __TwigTemplate_03a0ce7dbdf2617bd202567e5f27c66a02c57935ce062a33c70bdab96abbaa64 extends Twig_Template
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
<?php if (!empty(\$start)) {
    \$attr['start'] = \$start;
} ?>
<ol <?php echo \$view['layout']->block(\$block, 'block_attributes', array('attr' => \$attr)) ?>>
<?php foreach (\$block as \$child) : ?>
    <?php if (\$child->vars['visible']): ?>
        <?php if (isset(\$child->vars['own_template']) && \$child->vars['own_template']): ?><?php echo \$view['layout']->widget(\$child) ?><?php else: ?><li><?php echo \$view['layout']->widget(\$child) ?></li><?php endif ?>
    <?php endif ?>
<?php endforeach; ?>
</ol>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/ordered_list_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/ordered_list_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/ordered_list_widget.html.php");
    }
}
