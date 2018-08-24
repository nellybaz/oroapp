<?php

/* @OroLayout/Layout/php/link_widget.html.php */
class __TwigTemplate_801b153ae4b866853446200c78e6abd845fd2e6091b1b279e4fd133fdf35ac08 extends Twig_Template
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
<a <?php echo \$view['layout']->block(\$block, 'block_attributes') ?> href=\"<?php echo \$path ?: \$view['router']->generate(\$route_name, \$route_parameters) ?>\"><?php if (isset(\$icon)): ?><?php echo \$view['layout']->block(\$block, 'icon_block') ?><?php endif ?><?php if (isset(\$text)): ?><?php echo \$view->escape(\$view['layout']->text(\$text, \$translation_domain)) ?><?php endif ?></a>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/link_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/link_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/link_widget.html.php");
    }
}
