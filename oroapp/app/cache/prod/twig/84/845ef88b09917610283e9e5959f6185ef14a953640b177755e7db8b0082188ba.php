<?php

/* OroUserBundle:Mail:layout.html.twig */
class __TwigTemplate_6a8350dcc371c428585f320f573608fb7aaa959da17267eb779d39782c505f4d extends Twig_Template
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
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 3.2 Final//EN\">
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
</head>
<body leftmargin=\"0\" rightmargin=\"0\" topmargin=\"0\" bottommargin=\"0\" bgcolor=\"#ffffff\">
    ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "</body>
</html>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Mail:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  30 => 8,  28 => 7,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Mail:layout.html.twig", "");
    }
}
