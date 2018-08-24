<?php

/* OroCustomerBundle:Menu:menuProfile.html.twig */
class __TwigTemplate_f2f177603ef12519129446de6061116fa2d7889f47d489553bad1f186461dba4 extends Twig_Template
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
        echo "<li class=\"dropdown\">
    <a href=\"javascript: void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 3
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            // line 4
            echo "            <i class=\"fa-user\"></i>
        ";
        } else {
            // line 6
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["app"] ?? null), "user", array())));
            echo "
            <i class=\"fa-sort-down\"></i>
        ";
        }
        // line 9
        echo "    </a>
    ";
        // line 10
        echo $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\MenuExtension')->render("customer_usermenu");
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:Menu:menuProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  36 => 9,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:Menu:menuProfile.html.twig", "");
    }
}
