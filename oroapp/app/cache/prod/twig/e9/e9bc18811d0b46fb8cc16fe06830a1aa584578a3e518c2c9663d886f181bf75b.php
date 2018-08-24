<?php

/* OroUserBundle:Menu:menuProfile.html.twig */
class __TwigTemplate_00dd2f9cc10e67314b0447a2d75556c97d3f98c6758a39d98ac69a03b31425a2 extends Twig_Template
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
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 2
            echo "    <li class=\"dropdown\" id=\"user-menu\">
        <a href=\"javascript: void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            ";
            // line 4
            if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
                // line 5
                echo "                <i class=\"fa-user\"></i>
            ";
            } else {
                // line 7
                echo "                ";
                // line 10
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["app"] ?? null), "user", array())));
                echo "
                <i class=\"fa-sort-desc\"></i>
            ";
            }
            // line 13
            echo "        </a>
        ";
            // line 14
            echo $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\MenuExtension')->render("usermenu");
            echo "
    </li>
";
        } else {
            // line 17
            echo "    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
            echo "</a></li>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Menu:menuProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  43 => 14,  40 => 13,  33 => 10,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Menu:menuProfile.html.twig", "");
    }
}
