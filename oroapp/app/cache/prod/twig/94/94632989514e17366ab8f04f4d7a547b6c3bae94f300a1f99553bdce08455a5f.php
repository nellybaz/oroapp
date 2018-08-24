<?php

/* OroAlternativeCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:request_approval.html.twig */
class __TwigTemplate_2bf4874875c37e384825301ec728a05fdf4da050bfb078c09940f8b6c4294a63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_checkout_form_fields_widget' => array($this, 'block__checkout_form_fields_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_checkout_form_fields_widget', $context, $blocks);
    }

    public function block__checkout_form_fields_widget($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"checkout__approval-wrapper\">
        <div class=\"notification notification--alert\">
            ";
        // line 4
        $context["frontendMessage"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["transitionData"] ?? null), "transition", array()), "frontendOptions", array()), "message", array());
        // line 5
        echo "            <span class=\"notification__text\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["frontendMessage"] ?? null), "content", array()), (($this->getAttribute(($context["frontendMessage"] ?? null), "message_parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["frontendMessage"] ?? null), "message_parameters", array()), array())) : (array())), "workflows");
        echo "</span>
        </div>

        <fieldset class=\"grid__row grid__row--offset-none\">
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "request_approval_notes", array()), 'row', array("attr" => array("class" => "input input--full input--size-m", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.order_review.note_placeholder"))));
        echo "
        </fieldset>

        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state_token", array()), 'row');
        echo "

        ";
        // line 14
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>";
    }

    public function getTemplateName()
    {
        return "OroAlternativeCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:request_approval.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  46 => 12,  40 => 9,  32 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAlternativeCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:request_approval.html.twig", "");
    }
}
