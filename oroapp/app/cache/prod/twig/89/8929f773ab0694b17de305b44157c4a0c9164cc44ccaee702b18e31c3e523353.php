<?php

/* OroCMSBundle:Page/Frontend:view.html.twig */
class __TwigTemplate_a93ee75051557e7236dbd877cb86e01cf168a0dc8e2a7288075f1716071df138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroFrontendBundle:actions:view.html.twig", "OroCMSBundle:Page/Frontend:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'navButtons' => array($this, 'block_navButtons'),
            'ownerLink' => array($this, 'block_ownerLink'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroFrontendBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "title", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 7
($context["entity"] ?? null), "entityTitle" => $this->getAttribute(        // line 8
($context["entity"] ?? null), "title", array()));
        // line 10
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_stats($context, array $blocks = array())
    {
    }

    // line 14
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 16
    public function block_ownerLink($context, array $blocks = array())
    {
    }

    // line 18
    public function block_content_data($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"frontend-page-container\">
        ";
        // line 20
        echo $this->getAttribute(($context["entity"] ?? null), "content", array());
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:Page/Frontend:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  69 => 19,  66 => 18,  61 => 16,  56 => 14,  51 => 13,  44 => 10,  42 => 8,  41 => 7,  39 => 6,  36 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:Page/Frontend:view.html.twig", "");
    }
}
