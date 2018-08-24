<?php

/* OroDistributionBundle::base.html.twig */
class __TwigTemplate_8e703cd9628434fa40fc0ffc642de032d0b6eafe335af5798d0632ddc239ab5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if IE 7 ]>
<html class=\"no-js ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]>
<html class=\"no-js ie ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]>
<html class=\"no-js ie ie9\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 15
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "</head>
<body class=\"desktop-version ";
        // line 23
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
<header id=\"oroplatform-header\">
    <div class=\"navbar-inner\">
        <h1 class=\"logo\">
            <a href=\"/\"><i class=\"fa-home\"></i></a>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">
                ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.installer"), "html", null, true);
        echo "
            </a>
        </h1>

        <div class=\"pull-right help\">
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\HelpBundle\Twig\HelpExtension')->getHelpLinkUrl(), "html", null, true);
        echo "\" target=\"_blank\">
                <i class=\"fa-question-circle\" title=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.menu.get_help"), "html", null, true);
        echo "\"></i>
            </a>
            ";
        // line 37
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 38
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_distribution_settings_index");
            echo "\">
                    <i class=\"fa-cogs\" title=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.menu.composer_settings"), "html", null, true);
            echo "\"></i>
                </a>
                <a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_distribution_security_logout");
            echo "\">
                    <i class=\"fa-sign-out\" title=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.menu.sign_out"), "html", null, true);
            echo "\"></i>
                </a>
            ";
        }
        // line 45
        echo "        </div>

    </div>
</header>
<div id=\"page\">
    ";
        // line 50
        $this->displayBlock('page', $context, $blocks);
        // line 51
        echo "</div>
</body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
    }

    // line 15
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 16
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/oro.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/orodistribution/css/style.css"), "html", null, true);
        echo "\"/>
    ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "    ";
    }

    // line 23
    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 50
    public function block_page($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "OroDistributionBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  146 => 23,  142 => 21,  139 => 20,  133 => 17,  128 => 16,  125 => 15,  120 => 13,  113 => 51,  111 => 50,  104 => 45,  98 => 42,  94 => 41,  89 => 39,  84 => 38,  82 => 37,  77 => 35,  73 => 34,  65 => 29,  61 => 28,  53 => 23,  50 => 22,  48 => 20,  45 => 19,  43 => 15,  38 => 13,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDistributionBundle::base.html.twig", "");
    }
}
