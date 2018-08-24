<?php

/* OroFrontendBundle:layouts/blank/page:layout.html.twig */
class __TwigTemplate_60b408eda135286e9d51552751fa67db4bfa95fba7373e4f1de28ef35170dc89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_page_title_container_widget' => array($this, 'block__page_title_container_widget'),
            '_page_title_widget' => array($this, 'block__page_title_widget'),
            '_wrapper_widget' => array($this, 'block__wrapper_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_page_title_container_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_page_title_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_wrapper_widget', $context, $blocks);
    }

    // line 1
    public function block__page_title_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["content"] = twig_trim_filter($this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget'));
        // line 3
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (" page-title" . ((        // line 4
($context["class_prefix"] ?? null)) ? (" {{ class_prefix }}-page-title") : ("")))));
        // line 6
        echo "    ";
        if (twig_length_filter($this->env, ($context["content"] ?? null))) {
            // line 7
            echo "        <h1";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">";
            echo ($context["content"] ?? null);
            echo "</h1>
    ";
        }
    }

    // line 11
    public function block__page_title_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 15
    public function block__wrapper_widget($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " wrapper"));
        // line 19
        echo "
    <div";
        // line 20
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div data-page-component-view=\"orofrontend/js/app/views/dom-relocation-view\"></div>
        ";
        // line 22
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank/page:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  78 => 20,  75 => 19,  72 => 16,  69 => 15,  62 => 12,  59 => 11,  49 => 7,  46 => 6,  44 => 4,  42 => 3,  39 => 2,  36 => 1,  32 => 15,  29 => 14,  27 => 11,  24 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank/page:layout.html.twig", "");
    }
}
