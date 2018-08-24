<?php

/* OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:right_buttons.html.twig */
class __TwigTemplate_3f0da4fab21d385e679d52b74d101c18fc5e899b64a33d0614fd45a84fb9ddbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_checkout_button_continue_right_widget' => array($this, 'block__checkout_button_continue_right_widget'),
            '_checkout_button_back_right_widget' => array($this, 'block__checkout_button_back_right_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_checkout_button_continue_right_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('_checkout_button_back_right_widget', $context, $blocks);
    }

    // line 1
    public function block__checkout_button_continue_right_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((array_key_exists("transitionData", $context) && ($context["transitionData"] ?? null))) {
            // line 3
            echo "        ";
            $context["_layout"] = $this->loadTemplate("OroCheckoutBundle:layouts/default:layout.html.twig", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:right_buttons.html.twig", 3);
            // line 4
            echo "        <div class=\"order-checkout-widget text-right\">
            <button type=\"submit\"
                    class=\"btn ";
            // line 6
            if ($this->getAttribute(($context["transitionData"] ?? null), "isAllowed", array())) {
                echo "btn--info";
            }
            echo " btn--size-m checkout__submit-btn\"
                    ";
            // line 7
            echo $context["_layout"]->gettransitionAttrbiutes(($context["transitionData"] ?? null), ($context["checkout"] ?? null));
            echo "
                    ";
            // line 8
            echo $context["_layout"]->getconditionMessages(($context["transitionData"] ?? null));
            echo "
            >
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["transitionData"] ?? null), "transition", array()), "label", array()), array(), "workflows"), "html", null, true);
            echo "
            </button>
        </div>
    ";
        }
    }

    // line 16
    public function block__checkout_button_back_right_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ((array_key_exists("transitionData", $context) && ($context["transitionData"] ?? null))) {
            // line 18
            echo "        ";
            $context["_layout"] = $this->loadTemplate("OroCheckoutBundle:layouts/default:layout.html.twig", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:right_buttons.html.twig", 18);
            // line 19
            echo "        <div class=\"checkout-form__back order-checkout-widget text-right\">
            ";
            // line 20
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:right_buttons.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  58 => 10,  53 => 8,  49 => 7,  43 => 6,  39 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 16,  23 => 15,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:right_buttons.html.twig", "");
    }
}
