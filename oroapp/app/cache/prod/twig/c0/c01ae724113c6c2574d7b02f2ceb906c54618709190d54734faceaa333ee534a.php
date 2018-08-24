<?php

/* @OroLayout/Layout/php/fieldset_widget.html.php */
class __TwigTemplate_7b3ed88f8486afcf8c435a7624d91565e934bffaeecc950822c4a89f066291b4 extends Twig_Template
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
<fieldset <?php echo \$view['layout']->block(\$block, 'block_attributes') ?>>
    <legend><?php echo \$view->escape(\$view['layout']->text(\$title, \$translation_domain)) ?></legend>
    <?php echo \$view['layout']->widget(\$block) ?>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/fieldset_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/fieldset_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/fieldset_widget.html.php");
    }
}
