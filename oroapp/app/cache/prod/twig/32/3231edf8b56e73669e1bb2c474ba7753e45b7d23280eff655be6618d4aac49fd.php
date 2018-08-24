<?php

/* OroContactUsBridgeBundle:ContactRequest:customerUser.html.twig */
class __TwigTemplate_fcd15e6f122c9bf0de2a1a5f603384918c7261c60973967ea83b46336fc9c455 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroContactUsBridgeBundle:ContactRequest:customerUser.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.customer_user.label"),         // line 5
$context["UI"]->getentityViewLink(($context["customerUser"] ?? null), $this->getAttribute(($context["customerUser"] ?? null), "fullName", array()), "oro_customer_customer_user_view"));
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroContactUsBridgeBundle:ContactRequest:customerUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  25 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactUsBridgeBundle:ContactRequest:customerUser.html.twig", "");
    }
}
