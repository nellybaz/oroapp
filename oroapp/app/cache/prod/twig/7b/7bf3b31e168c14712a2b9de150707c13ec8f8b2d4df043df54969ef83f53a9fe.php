<?php

/* @OroLayout/Layout/php/container_widget.html.php */
class __TwigTemplate_1cb2a236c8452887a6897deeede8620137a29f654df4c1547447ed67b5103648 extends Twig_Template
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
<?php foreach (\$block as \$child) : ?>
    <?php if (\$child->vars['visible']): ?>
        <?php echo \$view['layout']->widget(\$child) ?>
    <?php endif ?>
<?php endforeach; ?>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/container_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/container_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/container_widget.html.php");
    }
}
