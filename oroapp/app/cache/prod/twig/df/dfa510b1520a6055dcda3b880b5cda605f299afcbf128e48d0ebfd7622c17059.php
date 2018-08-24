<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/middle_bar.html.twig */
class __TwigTemplate_225c68268cfd54b99cbee42869900556ac7ec92c0e8b20b108638904df02a9bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_middle_bar_widget' => array($this, 'block__middle_bar_widget'),
            '_middle_bar_logo_widget' => array($this, 'block__middle_bar_logo_widget'),
            '_middle_bar_center_widget' => array($this, 'block__middle_bar_center_widget'),
            '_middle_bar_right_widget' => array($this, 'block__middle_bar_right_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_middle_bar_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_middle_bar_logo_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('_middle_bar_center_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('_middle_bar_right_widget', $context, $blocks);
    }

    // line 1
    public function block__middle_bar_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " middlebar"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 10
    public function block__middle_bar_logo_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " middlebar__left"));
        // line 14
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 19
    public function block__middle_bar_center_widget($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " middlebar__center"));
        // line 23
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 24
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 28
    public function block__middle_bar_right_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " middlebar__right"));
        // line 32
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 33
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/middle_bar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  102 => 32,  99 => 29,  96 => 28,  89 => 24,  84 => 23,  81 => 20,  78 => 19,  71 => 15,  66 => 14,  63 => 11,  60 => 10,  53 => 6,  48 => 5,  45 => 2,  42 => 1,  38 => 28,  35 => 27,  33 => 19,  30 => 18,  28 => 10,  25 => 9,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/middle_bar.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/middle_bar.html.twig");
    }
}
