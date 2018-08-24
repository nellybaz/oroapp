<?php

/* @OroEmbeddedForm/layouts/embedded_default/php/embed_form_start_widget.html.php */
class __TwigTemplate_8b2f6e4e74a4a586a551a1211db36e869f74573bc2cd25dc5bf0816ba8d1dec8 extends Twig_Template
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
<?php \$action = isset(\$action_path) ? \$action_path : (isset(\$action_route_name) ? \$view['router']->generate(\$action_route_name, \$action_route_parameters) : null) ?>
<?php if (isset(\$method) && \$method !== 'GET' && \$method !== 'POST') {
    \$form_method = 'POST';
} ?>
<form <?php echo \$view['layout']->block(\$block, 'block_attributes', ['attr' => \$attr]) ?><?php if (isset(\$action)): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php if (isset(\$method)): ?> method=\"<?php echo strtolower(isset(\$form_method) ? \$form_method : \$method) ?>\"<?php endif ?><?php if (isset(\$enctype)): ?> enctype=\"<?php echo \$enctype ?>\"<?php endif ?>>
<?php if (isset(\$form_method)): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/layouts/embedded_default/php/embed_form_start_widget.html.php";
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
        return new Twig_Source("", "@OroEmbeddedForm/layouts/embedded_default/php/embed_form_start_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/php/embed_form_start_widget.html.php");
    }
}
