<?php

/* ::base.html.twig */
class __TwigTemplate_e30f3b1f540b72a5f3b3b1b73de6b97d1987c3762dc38803936319f1b03d65a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "::base.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'head_style' => array($this, 'block_head_style'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    ";
        // line 5
        $this->displayBlock("head_script_component", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_head_style($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("head_style", $context, $blocks);
        echo "
    ";
        // line 10
        $this->displayBlock("head_style_component", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "
    ";
        // line 15
        echo $this->env->getExtension('Oro\Bundle\WindowsBundle\Twig\WindowsExtension')->render($this->env);
        echo "
";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  61 => 14,  58 => 13,  52 => 10,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "");
    }
}
