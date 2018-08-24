<?php

/* OroUserBundle:Reset:request.html.twig */
class __TwigTemplate_465141994c59e9267e5a1455914ace2f8e826d1734ef69adb382914415de569e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUserBundle::layout.html.twig", "OroUserBundle:Reset:request.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUserBundle::layout.html.twig";
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

    // line 4
    public function block_messages($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["messagesContent"] = $this->renderParentBlock("messages", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"container\">
    <form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_reset_send_email");
        echo "\" method=\"post\" class=\"form-signin\">
        <div class=\"title-box\">
            <h2 class=\"title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Forgot Password"), "html", null, true);
        echo "</h2>
        </div>
        <fieldset class=\"oro-forgot-password\">
            ";
        // line 15
        if (array_key_exists("invalid_username", $context)) {
            // line 16
            echo "                <div class=\"alert alert-error\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no active user with username or email address \"%username%\".", array("%username%" => ($context["invalid_username"] ?? null))), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 20
        echo "            ";
        echo twig_escape_filter($this->env, ($context["messagesContent"] ?? null), "html", null, true);
        echo "
            <input type=\"text\" id=\"prependedInput\" name=\"username\" required=\"required\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username or Email"), "html", null, true);
        echo "\" autofocus/>
            <input type=\"hidden\" name=\"frontend\" value=\"1\" />
            <div class=\"form-row\">
                <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_security_login");
        echo "\" class=\"btn btn-link\">&laquo; ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Return to Login"), "html", null, true);
        echo "</a>
                <button type=\"submit\" class=\"btn extra-submit btn-large btn-primary\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Request"), "html", null, true);
        echo "</button>
            </div>
        </fieldset>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Reset:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  83 => 24,  77 => 21,  72 => 20,  66 => 17,  63 => 16,  61 => 15,  55 => 12,  50 => 10,  47 => 9,  44 => 8,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Reset:request.html.twig", "");
    }
}
