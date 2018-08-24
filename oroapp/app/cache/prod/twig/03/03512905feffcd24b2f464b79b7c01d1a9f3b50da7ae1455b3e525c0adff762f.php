<?php

/* OroUIBundle:Default:help.html.twig */
class __TwigTemplate_a67c27ed3659acd160c6f5c441ecbc71bd80d0de69e0b4600c1560e45493ef54 extends Twig_Template
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
        echo "<li><a class=\"help no-hash\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\HelpBundle\Twig\HelpExtension')->getHelpLinkUrl(), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa-question-circle\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Get help"), "html", null, true);
        echo "\"></i></a></li>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "OroUIBundle:Default:help.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/Default/help.html.twig");
    }
}
