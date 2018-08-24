<?php

/* @OroLayout/Layout/php/list_item_widget.html.php */
class __TwigTemplate_dbe7c8eabf556e05c248c0d403117994027e9da088b1024e847d62bbbe55de1b extends Twig_Template
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
<li <?php echo \$view['layout']->block(\$block, 'block_attributes') ?>><?php echo \$view['layout']->widget(\$block) ?></li>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/list_item_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/list_item_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/list_item_widget.html.php");
    }
}
