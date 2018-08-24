<?php

/* OroUIBundle:Default:loginPage.html.twig */
class __TwigTemplate_d251cb8410690fb0464213b45830250f05083637b7ca54ef998ec1fb007ed456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:loginPage.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_bodyClass($context, array $blocks = array())
    {
        // line 3
        echo "    login-page
";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container\">
        <form class=\"form-signin\">
            <div class=\"title-box\">
                <h2 class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
        echo "</h2>
            </div>
            <fieldset>
                <div class=\"input-prepend\">
                    <span class=\"add-on\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "</span>
                    <input type=\"text\" placeholder=\"login\" id=\"prependedInput\" class=\"span2\">
                </div>
                <div class=\"input-prepend\">
                    <span class=\"add-on\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo "</span>
                    <input type=\"password\" placeholder=\"pass\" id=\"prependedInput2\" class=\"span2\">
                </div>
                <div class=\"form-row\">
                    <label class=\"checkbox\">
                        <input type=\"checkbox\" value=\"remember-me\"> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me on this computer"), "html", null, true);
        echo "
                    </label>
                </div>
                <button type=\"submit\" class=\"btn btn-large btn-primary\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log in"), "html", null, true);
        echo "</button>
                <div class=\"form-row\">
                    <a href=\"#\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot your username?"), "html", null, true);
        echo "</a>
                    <span class=\"divider-vertical\">|</span>
                    <a href=\"#\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot your password?"), "html", null, true);
        echo "</a>
                </div>
            </fieldset>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:loginPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  84 => 29,  79 => 27,  73 => 24,  65 => 19,  58 => 15,  51 => 11,  46 => 8,  43 => 7,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default:loginPage.html.twig", "");
    }
}
