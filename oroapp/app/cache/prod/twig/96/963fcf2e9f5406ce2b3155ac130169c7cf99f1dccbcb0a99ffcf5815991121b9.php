<?php

/* OroDistributionBundle:Security:login.html.twig */
class __TwigTemplate_a4834aaa009fb9b763651e2f100aeb3daf49d3d8aa2329d990df26fb558f3cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDistributionBundle::base_login.html.twig", "OroDistributionBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDistributionBundle::base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_distribution_security_login_check");
        echo "\" method=\"post\" class=\"form-signin\">
        <div class=\"title-box\">
            <h1 class=\"title logo-image\" title=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ORO Business Application Platform"), "html", null, true);
        echo "\">
                ORO
            </h1>
            <span class=\"divider-vertical\"></span>
            <h2 class=\"title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.security.login"), "html", null, true);
        echo "</h2>
        </div>
        <fieldset>
            ";
        // line 13
        if (($context["error"] ?? null)) {
            // line 14
            echo "                <div class=\"alert alert-error\">
                    <div>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        // line 18
        $context["usernameLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.security.username");
        // line 19
        $context["passwordLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.security.password");
        // line 20
        $context["showLabels"] = ((twig_length_filter($this->env, ($context["usernameLabel"] ?? null)) <= 9) && (twig_length_filter($this->env, ($context["passwordLabel"] ?? null)) <= 9));
        // line 21
        echo "            <div class=\"input-prepend\">
                ";
        // line 22
        if (($context["showLabels"] ?? null)) {
            // line 23
            echo "                    <label for=\"prependedInput\" class=\"add-on\">";
            echo twig_escape_filter($this->env, ($context["usernameLabel"] ?? null), "html", null, true);
            echo "</label>
                ";
        }
        // line 25
        echo "                <input type=\"text\" id=\"prependedInput\" class=\"span2\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.security.username_or_email"), "html", null, true);
        echo "\" autofocus/>
            </div>
            <div class=\"input-prepend\">
                ";
        // line 28
        if (($context["showLabels"] ?? null)) {
            // line 29
            echo "                    <label for=\"prependedInput2\" class=\"add-on\">";
            echo twig_escape_filter($this->env, ($context["passwordLabel"] ?? null), "html", null, true);
            echo "</label>
                ";
        }
        // line 31
        echo "                <input type=\"password\" id=\"prependedInput2\" class=\"span2\" name=\"_password\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.security.password"), "html", null, true);
        echo "\" autocomplete=\"off\" />
            </div>
            <label class=\"checkbox oro-remember-me\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.security.remember_me"), "html", null, true);
        echo "
            </label>
            <div class=\"control-group form-row\">
                <button type=\"submit\" class=\"btn btn-large  btn-primary pull-right\" id=\"_submit\" name=\"_submit\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.security.log_in"), "html", null, true);
        echo "</button>
            </div>
        </fieldset>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "OroDistributionBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  108 => 37,  102 => 34,  95 => 31,  89 => 29,  87 => 28,  78 => 25,  72 => 23,  70 => 22,  67 => 21,  65 => 20,  63 => 19,  61 => 18,  55 => 15,  52 => 14,  50 => 13,  44 => 10,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDistributionBundle:Security:login.html.twig", "");
    }
}
