<?php

/* OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:success.html.twig */
class __TwigTemplate_87e85f8ce2b7da597e63f0cc01e1cd3bb6a9d6bbf4a06d83cac0306c85a93884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_success_order_widget' => array($this, 'block__success_order_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_success_order_widget', $context, $blocks);
    }

    public function block__success_order_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"checkout__success\">
        <h1 class=\"checkout__success__title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.success.thank_you.label"), "html", null, true);
        echo "</h1>
        <div class=\"checkout__success__order\">
            <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.success.order_number.label"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? null), "id", array()), "html", null, true);
        echo "
            ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["order"] ?? null))) {
            // line 7
            echo "                (<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_order_frontend_view", array("id" => $this->getAttribute(($context["order"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.success.click_to_review.label"), "html", null, true);
            echo "</a>)
            ";
        }
        // line 9
        echo "            </p>
            <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.success.receive_email.label"), "html", null, true);
        echo "</p>
        </div>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_frontend_root");
        echo "\" class=\"btn btn--info checkout__success__btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.success.done.label"), "html", null, true);
        echo "</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:success.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  53 => 10,  50 => 9,  42 => 7,  40 => 6,  34 => 5,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:success.html.twig", "");
    }
}
