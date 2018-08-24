<?php

/* OroCustomerAccountBridgeBundle:Customer:view.html.twig */
class __TwigTemplate_52acc07a17f53a096252a5c9f8363cecc65804438422ea593d0ce0e88d6efa92 extends Twig_Template
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
    <div class=\"label label-info\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.account.lifetime.label"), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "lifetime", array()));
        echo "
    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerAccountBridgeBundle:Customer:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerAccountBridgeBundle:Customer:view.html.twig", "");
    }
}
