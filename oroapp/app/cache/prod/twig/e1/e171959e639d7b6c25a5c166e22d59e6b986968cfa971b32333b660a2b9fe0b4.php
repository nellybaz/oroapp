<?php

/* @OroLayout/Layout/php/meta_widget.html.php */
class __TwigTemplate_36f0454d33e95a6eb4f35b381abfc658517aead36e62e2eed93ae37f03ab6d9f extends Twig_Template
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
<?php if (!empty(\$charset)) {
    \$attr['charset'] = \$charset;
} ?>
<?php if (!empty(\$http_equiv)) {
    \$attr['http_equiv'] = \$http_equiv;
} ?>
<?php if (!empty(\$name)) {
    \$attr['name'] = \$name;
} ?>
<?php if (!empty(\$content)) {
    \$attr['content'] = \$content;
} ?>
<meta <?php echo \$view['layout']->block(\$block, 'block_attributes', array('attr' => \$attr)) ?>/>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/meta_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/meta_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/meta_widget.html.php");
    }
}
