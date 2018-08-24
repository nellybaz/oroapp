<?php

/* OroNotificationBundle:EmailNotification/Datagrid/Property:recipientUsersList.html.twig */
class __TwigTemplate_07fd4052af69163f28338ac38ffd28d2c9cee1753c065dc578da7e48686dabe6 extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
            if ( !twig_test_empty($context["recipient"])) {
                // line 3
                echo "        <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($context["recipient"]));
                echo " &lt;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["recipient"], "email", array()), "html", null, true);
                echo "&gt;</li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OroNotificationBundle:EmailNotification/Datagrid/Property:recipientUsersList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  27 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNotificationBundle:EmailNotification/Datagrid/Property:recipientUsersList.html.twig", "");
    }
}
