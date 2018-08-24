<?php

/* OroCMSBundle:layouts/blank:content_block.html.twig */
class __TwigTemplate_324f578cc1b309336ad1c5c14cceb73c888ed9aedcbf3752d909459f27f50166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content_block_widget' => array($this, 'block_content_block_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content_block_widget', $context, $blocks);
    }

    public function block_content_block_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <h3>";
        // line 3
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(($context["contentBlock"] ?? null), "titles", array()));
        echo "</h3>
        ";
        // line 4
        echo $this->getAttribute(($context["contentBlock"] ?? null), "content", array());
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:layouts/blank:content_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:layouts/blank:content_block.html.twig", "");
    }
}
