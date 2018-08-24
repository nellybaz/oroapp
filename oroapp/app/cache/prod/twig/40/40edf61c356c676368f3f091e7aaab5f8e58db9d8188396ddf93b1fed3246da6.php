<?php

/* @OroLayout/Layout/php/form_end_widget.html.php */
class __TwigTemplate_22d2f693343d6efc196bbc5f4c2b8a9fcb4dce454fedbd64bebbe7a73d6e12e6 extends Twig_Template
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
<?php
    if (\$view['render_rest']) {
        echo \$view['form']->end(\$form);
    } else {
        echo '</form>';
    }
?>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/form_end_widget.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/form_end_widget.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/form_end_widget.html.php");
    }
}
