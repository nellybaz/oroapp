<?php

/* @OroLayout/Layout/php/icon_block.html.php */
class __TwigTemplate_86ab6177465cd9722f941817f0273bb323c92b9425e295f910249d8f98ba360c extends Twig_Template
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
<i class=\"fa-<?php echo \$icon ?><?php if (isset(\$icon_class)): ?> <?php echo \$icon_class ?><?php endif ?>\"></i>
";
    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/php/icon_block.html.php";
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
        return new Twig_Source("", "@OroLayout/Layout/php/icon_block.html.php", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/php/icon_block.html.php");
    }
}
