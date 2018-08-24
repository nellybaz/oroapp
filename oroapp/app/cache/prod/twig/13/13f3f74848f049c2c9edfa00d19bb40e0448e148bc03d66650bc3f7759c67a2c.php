<?php

/* @OroLayout/Layout/php/button_widget_button.html.php */
class __TwigTemplate_d1a597dd3e377b27c3ecfca686954326318c46015369008f7b15697e3587b60d extends Twig_Template
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
<button <?php echo \$view['layout']->block(\$block, 'block_attributes') ?><?php if (\$action === 'submit' || \$action === 'reset'): ?> type=\"<?php echo \$action ?>\" <?php else: ?>type=\"<?php echo 'button' ?>\"<?php endif ?><?php if (isset(\$name)): ?> name=\"<?php echo \$name ?>\"<?php endif ?><?php if (isset(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>><?php if (isset(\$icon)): ?><?php echo \$view['layout']->block(\$block, 'icon_block') ?><?php endif ?><?php if (isset(\$text)): ?><?php echo \$view->escape(\$view['layout']->text(\$text, \$translation_domain)) ?><?php endif ?></button>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/button_widget_button.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/button_widget_button.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/button_widget_button.html.php");
    }
}
