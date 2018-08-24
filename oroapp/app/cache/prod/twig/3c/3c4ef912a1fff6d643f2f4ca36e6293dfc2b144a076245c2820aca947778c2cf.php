<?php

/* @OroLayout/Layout/php/root_widget.html.php */
class __TwigTemplate_60747e5da968b6859e87ff97e32bcb8bd897ff66ab6f824075f87a507683e6e8 extends Twig_Template
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
<!DOCTYPE <?php echo !empty(\$doctype) ? \$view->escape(\$doctype) : 'html' ?>>
<html>
    <?php echo \$view['layout']->widget(\$block) ?>
</html>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/root_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/root_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/root_widget.html.php");
    }
}
