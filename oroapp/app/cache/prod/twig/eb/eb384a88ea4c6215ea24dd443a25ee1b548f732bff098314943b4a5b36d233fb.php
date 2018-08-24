<?php

/* OroCalendarBundle:Calendar/Menu:removeCalendar.html.twig */
class __TwigTemplate_c9150dcbc0e9b3b7686ab58b702ec5f30149e1b921c7e167d5ccc7671c4c26a2 extends Twig_Template
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
        echo "<% if (removable) { %>
    ";
        // line 2
        ob_start();
        // line 3
        if ($this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "icon"), "method")) {
            // line 4
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 6
        if (($this->getAttribute(($context["options"] ?? null), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? null), "label", array()));
        } else {
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? null), "label", array()), $this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "translateParams", 1 => array()), "method"), $this->getAttribute(($context["item"] ?? null), "getExtra", array(0 => "translateDomain", 1 => "messages"), "method")), "html", null, true);
        }
        // line 11
        echo "    ";
        $context["Label"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    <li";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oro_menu"] ?? null), "attributes", array(0 => ($context["itemAttributes"] ?? null)), "method"), "html", null, true);
        echo ">
        <a href=\"javascript:void(0);\" class=\"action\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["Label"] ?? null), "html", null, true);
        echo "</a>
    </li>
<% } %>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Calendar/Menu:removeCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  43 => 12,  40 => 11,  37 => 9,  34 => 7,  32 => 6,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:Calendar/Menu:removeCalendar.html.twig", "");
    }
}
