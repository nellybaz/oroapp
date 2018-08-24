<?php

/* OroUIBundle:Default/navbar:blocks.html.twig */
class __TwigTemplate_e44a5c425fab52f1ce0884bcbf1ddeee0d556a17fd2ead9fd7914a7eede50105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'application_menu' => array($this, 'block_application_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('application_menu', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('user_menu', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('navbar', $context, $blocks);
    }

    // line 1
    public function block_application_menu($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("application_menu", $context)) ? (_twig_default_filter(($context["application_menu"] ?? null), "application_menu")) : ("application_menu")), array());
    }

    // line 5
    public function block_user_menu($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("user_menu", $context)) ? (_twig_default_filter(($context["user_menu"] ?? null), "user_menu")) : ("user_menu")), array());
        // line 7
        echo "    ";
    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("navbar", $context)) ? (_twig_default_filter(($context["navbar"] ?? null), "navbar")) : ("navbar")), array());
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default/navbar:blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  54 => 15,  50 => 7,  47 => 6,  44 => 5,  39 => 2,  36 => 1,  32 => 15,  29 => 14,  27 => 5,  24 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default/navbar:blocks.html.twig", "");
    }
}
