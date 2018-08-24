<?php

/* OroUIBundle:layouts/blank/page:components.html.twig */
class __TwigTemplate_aa1a3101707e2647188b1e277c4437c68a6fbf6fc542300419b9d15b30fdaa6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vertical_container_widget' => array($this, 'block_vertical_container_widget'),
            '_copyright_widget' => array($this, 'block__copyright_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('vertical_container_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_copyright_widget', $context, $blocks);
    }

    // line 1
    public function block_vertical_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " vertical-container"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"vertical-container__content\">
            ";
        // line 8
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 13
    public function block__copyright_widget($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " copyright"));
        // line 17
        echo "
    <p ";
        // line 18
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:layouts/blank/page:components.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  58 => 17,  55 => 14,  52 => 13,  44 => 8,  39 => 6,  36 => 5,  33 => 2,  30 => 1,  26 => 13,  23 => 12,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:layouts/blank/page:components.html.twig", "");
    }
}
