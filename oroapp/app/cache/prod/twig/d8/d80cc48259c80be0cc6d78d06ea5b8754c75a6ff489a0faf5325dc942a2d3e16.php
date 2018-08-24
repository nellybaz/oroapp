<?php

/* OroProductBundle:Product/Autocomplete:result.html.twig */
class __TwigTemplate_3eba1bbb0469edac3e103dd5f51aed32bd6ffa45cf796da21f9df5e8b2312679 extends Twig_Template
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
        echo "<%= highlight(_.escape(sku)) %> - <%= highlight(_.escape(obj['defaultName.string'])) %>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product/Autocomplete:result.html.twig";
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
        return new Twig_Source("", "OroProductBundle:Product/Autocomplete:result.html.twig", "");
    }
}
