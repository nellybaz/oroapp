<?php

/* OroAlternativeCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:approve_request.html.twig */
class __TwigTemplate_1b1335e4916997dc86324fa6a46af9f270e27dde22f1e929abb924818c275d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_checkout_form_fields_widget' => array($this, 'block__checkout_form_fields_widget'),
            '_checkout_information_body_widget' => array($this, 'block__checkout_information_body_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_checkout_form_fields_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('_checkout_information_body_widget', $context, $blocks);
    }

    // line 1
    public function block__checkout_form_fields_widget($context, array $blocks = array())
    {
        // line 2
        echo "<div div class=\"checkout__approval-wrapper\">
        ";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["workflowItem"] ?? null), "data", array()), "get", array(0 => "allowed"), "method") && $this->getAttribute($this->getAttribute(($context["workflowItem"] ?? null), "data", array()), "get", array(0 => "allow_request_date"), "method"))) {
            // line 4
            echo "            <div class=\"notification--notice\">
                <span class=\"notification__text\">";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.alternativecheckout.messages.approved_at"), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute(($context["workflowItem"] ?? null), "data", array()), "get", array(0 => "allow_request_date"), "method"));
            echo "</span>
            </div>
        ";
        } else {
            // line 8
            echo "            <div class=\"notification--alert\">
                <span class=\"notification__text\">";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.alternativecheckout.messages.waiting_for_approve"), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 12
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["workflowItem"] ?? null), "data", array()), "get", array(0 => "request_approval_notes"), "method")) {
            // line 13
            echo "            <div class=\"checkout__approval-note\">
                <label>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.alternativecheckout.requestApprovalNotes.label"), "html", null, true);
            echo ":</label>
                <span>";
            // line 15
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["workflowItem"] ?? null), "data", array()), "get", array(0 => "request_approval_notes"), "method"), "html", null, true));
            echo "</span>
            </div>
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        if ($this->getAttribute(($context["form"] ?? null), "state_token", array(), "any", true, true)) {
            // line 20
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "state_token", array()), 'row');
            echo "
        ";
        }
        // line 22
        echo "
        ";
        // line 23
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>";
    }

    // line 27
    public function block__checkout_information_body_widget($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " checkout__body--offset-none"));
        // line 31
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroAlternativeCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:approve_request.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  97 => 28,  94 => 27,  88 => 23,  85 => 22,  79 => 20,  77 => 19,  74 => 18,  68 => 15,  64 => 14,  61 => 13,  58 => 12,  52 => 9,  49 => 8,  41 => 5,  38 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 27,  23 => 26,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAlternativeCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:approve_request.html.twig", "");
    }
}
