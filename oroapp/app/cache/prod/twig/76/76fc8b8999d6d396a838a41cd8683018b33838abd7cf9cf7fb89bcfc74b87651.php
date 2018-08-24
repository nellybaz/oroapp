<?php

/* @OroLayout/Layout/php/list_widget.html.php */
class __TwigTemplate_f0028ea3290efa66e84b6126012fb87484b6be62ea70caaa660acc4fd6c6373e extends Twig_Template
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
<ul <?php echo \$view['layout']->block(\$block, 'block_attributes') ?>>
<?php foreach (\$block as \$child) : ?>
    <?php if (\$child->vars['visible']): ?>
        <?php if (isset(\$child->vars['own_template']) && \$child->vars['own_template']): ?><?php echo \$view['layout']->widget(\$child) ?><?php else: ?><li><?php echo \$view['layout']->widget(\$child) ?></li><?php endif ?>
    <?php endif ?>
<?php endforeach; ?>
</ul>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/list_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/list_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/list_widget.html.php");
    }
}
