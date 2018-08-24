<?php

/* OroFormBundle:Layout:widgetForm.html.twig */
class __TwigTemplate_0b4a6eaf8c7dcd400a197751c44219076c53ceb28fff1a5b779c388c0c4a56fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"widget-content\">
    ";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 4
        echo "</div>
";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroFormBundle:Layout:widgetForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  30 => 2,  25 => 4,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFormBundle:Layout:widgetForm.html.twig", "");
    }
}
