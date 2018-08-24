<?php

/* OroDistributionBundle::base_login.html.twig */
class __TwigTemplate_28a73e4561b063b37e8f704061126df3b15718441e314fa47322d441f459224f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDistributionBundle::base.html.twig", "OroDistributionBundle::base_login.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDistributionBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "login-page";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.security.login"), "html", null, true);
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"top-page\">
        <div class=\"container\">
            ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        </div>
    </div>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "OroDistributionBundle::base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  52 => 11,  50 => 10,  46 => 8,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDistributionBundle::base_login.html.twig", "");
    }
}
