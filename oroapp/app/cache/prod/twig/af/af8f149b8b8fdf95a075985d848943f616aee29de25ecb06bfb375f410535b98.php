<?php

/* @OroLayout/Layout/php/block_attributes.html.php */
class __TwigTemplate_0018e8ba8fd5903f198825772f243e9bd0ac228d42f5257fb66b55c2808d3983 extends Twig_Template
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
<?php if (isset(\$attr['class'])) {
    \$attr['class'] = str_replace('";
        // line 3
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "', \$class_prefix, \$attr['class']);
} ?>
<?php foreach (\$attr as \$k => \$v): ?>
    <?php if (\$v instanceof Traversable || is_array(\$v)) {
    \$v = json_encode(\$v, JSON_FORCE_OBJECT);
} ?>
    <?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k === 'title' ? \$view['layout']->text(\$v, \$translation_domain) : \$v)) ?>
<?php endforeach; ?>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/block_attributes.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroLayout/Layout/php/block_attributes.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/block_attributes.html.php");
    }
}
