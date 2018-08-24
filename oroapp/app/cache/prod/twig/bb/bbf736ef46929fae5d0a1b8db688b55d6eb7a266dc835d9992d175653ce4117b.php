<?php

/* OroUIBundle:layouts/blank/page:page-footer.html.twig */
class __TwigTemplate_5bbd8db160c5f0fcf4413af8c36364f974b172d12d35aadbdfe825b8c2fa1639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_page_footer_widget' => array($this, 'block__page_footer_widget'),
            '_page_footer_container_widget' => array($this, 'block__page_footer_container_widget'),
            '_page_footer_base_widget' => array($this, 'block__page_footer_base_widget'),
            '_page_footer_side_widget' => array($this, 'block__page_footer_side_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_page_footer_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_page_footer_container_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('_page_footer_base_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('_page_footer_side_widget', $context, $blocks);
    }

    // line 1
    public function block__page_footer_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-footer", "data-page-footer" => ""));
        // line 6
        echo "
    <footer ";
        // line 7
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </footer>
";
    }

    // line 12
    public function block__page_footer_container_widget($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-footer-container"));
        // line 16
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 17
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 21
    public function block__page_footer_base_widget($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-footer-container__base"));
        // line 25
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 26
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 30
    public function block__page_footer_side_widget($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-footer-container__side"));
        // line 34
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 35
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:layouts/blank/page:page-footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  104 => 34,  101 => 31,  98 => 30,  91 => 26,  86 => 25,  83 => 22,  80 => 21,  73 => 17,  68 => 16,  65 => 13,  62 => 12,  55 => 8,  51 => 7,  48 => 6,  45 => 2,  42 => 1,  38 => 30,  35 => 29,  33 => 21,  30 => 20,  28 => 12,  25 => 11,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:layouts/blank/page:page-footer.html.twig", "");
    }
}
