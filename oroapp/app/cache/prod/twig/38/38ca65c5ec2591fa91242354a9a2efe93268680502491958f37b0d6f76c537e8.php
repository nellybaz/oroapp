<?php

/* @OroLayout/Layout/php/form_start_widget.html.php */
class __TwigTemplate_40dc825514d4bac15a61b381f107bb6f74f414d1631d3e6f9e5bab8e902e59d3 extends Twig_Template
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
<?php \$attr = array_merge(\$form->vars['attr'], \$attr) ?>
<?php if (!isset(\$attr['id'])) {
    \$attr['id'] = \$form->vars['id'];
} ?>

<?php \$options = ['attr' => \$attr] ?>

<?php \$action = isset(\$form_action) ? \$form_action : (isset(\$form_route_name) ? \$view['router']->generate(\$form_route_name, \$form_route_parameters) : null) ?>
<?php if (\$action !== null) {
    \$options = array_merge(\$options, ['action' => \$action]);
} ?>

<?php if (isset(\$form_method) && !in_array(\$form_method, ['GET', 'POST'])) {
    \$form_method = 'POST';
} ?>

<?php if (isset(\$form_multipart)) {
    \$options = array_merge(\$options, ['multipart' => \$form_multipart]);
} ?>

<?php echo \$view['form']->start(\$form, \$options) ?>

<?php if (isset(\$form_method)): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$form_method ?>\" />
<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/form_start_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/form_start_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/form_start_widget.html.php");
    }
}
