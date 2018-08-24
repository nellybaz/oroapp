<?php

/* OroPaymentBundle:layouts/default:layout.html.twig */
class __TwigTemplate_cb4b0e58e231ac8d05dce47c1c8dc07f070ef460c81709a6c99447dc40f49004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'payment_additional_data_widget' => array($this, 'block_payment_additional_data_widget'),
            '_payment_methods_widget' => array($this, 'block__payment_methods_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('payment_additional_data_widget', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_payment_methods_widget', $context, $blocks);
    }

    // line 1
    public function block_payment_additional_data_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock(($context["block_name"] ?? null), $context, $blocks);
        echo "
";
    }

    // line 5
    public function block__payment_methods_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["currentPaymentMethod"] = ((array_key_exists("currentPaymentMethod", $context)) ? (_twig_default_filter(($context["currentPaymentMethod"] ?? null), twig_first($this->env, twig_get_array_keys_filter(($context["views"] ?? null))))) : (twig_first($this->env, twig_get_array_keys_filter(($context["views"] ?? null)))));
        // line 7
        echo "
    ";
        // line 8
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-payment-method-forms" => ""));
        // line 9
        echo "
    <div class=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
        echo "-form\" data-content=\"payment_method_form\" data-page-component-module=\"oropayment/js/app/components/payment-method-selector-component\">
        <div class=\"grid__row grid__row--offset-none\">
            <div ";
        // line 12
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
                ";
        // line 13
        if ((twig_length_filter($this->env, ($context["views"] ?? null)) > 0)) {
            // line 14
            echo "                    <span class=\"label label--full text-uppercase\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.methods.select_method"), "html", null, true);
            echo "<sup class=\"checkout-form__asterix\">*</sup></span>
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["views"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["name"] => $context["view"]) {
                if ((array_key_exists("views", $context) && twig_test_iterable($context["view"]))) {
                    // line 16
                    echo "                        ";
                    $context["selected"] = (($context["currentPaymentMethod"] ?? null) == $context["name"]);
                    // line 17
                    echo "                        <div class=\"";
                    echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
                    echo "-form__radio\" data-item-container>
                            <label class=\"custom-radio custom-radio--large ";
                    // line 18
                    if (($context["selected"] ?? null)) {
                        echo "checked";
                    }
                    echo "\" data-radio tabindex=\"0\">
                                <input class=\"custom-radio__control\" type=\"radio\" name=\"paymentMethod\" data-choice=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" ";
                    if (($context["selected"] ?? null)) {
                        echo "checked=\"checked\"";
                    }
                    echo " />
                                <span class=\"custom-radio__text\">";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["view"], "label", array()), "html", null, true);
                    echo "</span>
                            </label>
                            <div class=\"";
                    // line 22
                    echo twig_escape_filter($this->env, ($context["class_prefix"] ?? null), "html", null, true);
                    echo "-form__payment-container\" data-form-container ";
                    if ( !($context["selected"] ?? null)) {
                        echo " style=\"display: none;\" ";
                    }
                    echo ">
                                ";
                    // line 23
                    $this->displayBlock($this->getAttribute($context["view"], "block", array()), $context, $blocks);
                    echo "
                            </div>
                        </div>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                ";
        } else {
            // line 28
            echo "                    <div class=\"notification notification--alert\">
                        <span class=\"notification__text\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.payment.methods.no_method"), "html", null, true);
            echo "</span>
                    </div>
                ";
        }
        // line 32
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:layouts/default:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 32,  138 => 29,  135 => 28,  132 => 27,  118 => 23,  110 => 22,  105 => 20,  95 => 19,  89 => 18,  84 => 17,  81 => 16,  70 => 15,  65 => 14,  63 => 13,  59 => 12,  54 => 10,  51 => 9,  49 => 8,  46 => 7,  43 => 6,  40 => 5,  33 => 2,  30 => 1,  26 => 5,  23 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentBundle:layouts/default:layout.html.twig", "");
    }
}
