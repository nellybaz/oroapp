<?php

/* @OroLayout/Layout/php/button_widget_input.html.php */
class __TwigTemplate_2d7ad6fde5d1c901adb4b519689bd93351a14a97a5255d696eb36a5cf085158e extends Twig_Template
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
<input <?php echo \$view['layout']->block(\$block, 'block_attributes') ?> type=\"<?php echo (\$action === 'submit' || \$action === 'reset') ? \$action : 'button' ?>\"<?php if (isset(\$name)): ?> name=\"<?php echo \$name ?>\"<?php endif ?><?php if (isset(\$value) || isset(\$text)): ?> value=\"<?php echo \$view->escape(isset(\$value) ? \$value : \$view['layout']->text(\$text, \$translation_domain)) ?>\"<?php endif ?>/>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/button_widget_input.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/button_widget_input.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/button_widget_input.html.php");
    }
}
