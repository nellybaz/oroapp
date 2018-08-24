<?php

/* OroAccountBundle:Account:lifetimeValue.html.twig */
class __TwigTemplate_04e34e2551ef5082ce7d99f23b9f89815858af0c5e8f02a7e3c2982715dc2462 extends Twig_Template
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
        echo "<li>
    <div class=\"label label-info orocrm-channel-lifetime-value-label\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.lifetime_value.label"), "html", null, true);
        echo ":
        ";
        // line 4
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->env->getExtension('Oro\Bundle\ChannelBundle\Twig\LifetimeValueExtension')->getLifetimeValue(($context["entity"] ?? null)));
        echo "
    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "OroAccountBundle:Account:lifetimeValue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAccountBundle:Account:lifetimeValue.html.twig", "");
    }
}
