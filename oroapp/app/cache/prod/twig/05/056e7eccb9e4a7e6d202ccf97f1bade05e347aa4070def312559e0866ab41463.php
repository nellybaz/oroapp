<?php

/* OroMagentoBundle:NewsletterSubscriber/widget:info.html.twig */
class __TwigTemplate_086710b66ef1580af713548f9355503f3eb996f00e01dc6aa2f27ccdb190afe7 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:NewsletterSubscriber/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroMagentoBundle:NewsletterSubscriber/widget:info.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.newslettersubscriber.email.label"), $this->getAttribute(($context["entity"] ?? null), "email", array()));
        echo "

            ";
        // line 9
        if ((array_key_exists("useCustomer", $context) && ($context["useCustomer"] ?? null))) {
            // line 10
            echo "                ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.newslettersubscriber.customer.label"),             // line 12
$context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "customer", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "customer", array())), "oro_magento_customer_view"));
            // line 13
            echo "
            ";
        }
        // line 15
        echo "
            ";
        // line 16
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:NewsletterSubscriber/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 16,  44 => 15,  40 => 13,  38 => 12,  36 => 10,  34 => 9,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:NewsletterSubscriber/widget:info.html.twig", "");
    }
}
