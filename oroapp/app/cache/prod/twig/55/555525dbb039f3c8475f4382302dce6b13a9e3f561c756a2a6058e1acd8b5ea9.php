<?php

/* OroCurrencyBundle:Form:fields.html.twig */
class __TwigTemplate_adcf60ebb6cde97fe15f557cccc15f6c4a53eeafecdbc382f375929755187cbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_currency_price_widget' => array($this, 'block_oro_currency_price_widget'),
            'oro_multicurrency_row' => array($this, 'block_oro_multicurrency_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_currency_price_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('oro_multicurrency_row', $context, $blocks);
        // line 74
        echo "
";
    }

    // line 1
    public function block_oro_currency_price_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (($context["hide_currency"] ?? null)) {
            // line 3
            echo "        <div class=\"currency-price-value\">
            ";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'widget');
            echo "
            ";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'widget');
            echo "
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'errors');
            echo "
            ";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'errors');
            echo "
        </div>
    ";
        } else {
            // line 10
            echo "        <table>
            <tr>
                <td>
                    <div class=\"currency-price-value\">
                        ";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'widget');
            echo "
                        ";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'errors');
            echo "
                    </div>
                </td>
                <td>
                    ";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'widget');
            echo "
                    ";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'errors');
            echo "
                </td>
            </tr>
        </table>
    ";
        }
    }

    // line 27
    public function block_oro_multicurrency_row($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"control-group";
        if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "class", array()), "html", null, true);
        }
        echo "\">
        <div class=\"control-label wrap\">
            ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
        </div>
        <div class=\"controls";
        // line 32
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " validation-error";
        }
        echo "\">
            ";
        // line 33
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCurrencyBundle:Form:fields.html.twig", 33);
        // line 34
        echo "            <div class=\"currency-select-enabled\" ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "orocurrency/js/app/views/multicurrency-control-view", "autoRender" => true, "rates" =>         // line 39
($context["currencyRates"] ?? null))));
        // line 41
        echo ">
                <div class=\"multicurrency-fields-wrapper value-field input-append\">
                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'widget');
        echo "
                    ";
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "currency", array()), "vars", array()), "hidden_field", array())) {
            // line 45
            echo "                        <span class=\"add-on\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "currency", array()), "vars", array()), "choices", array()), 0, array(), "array"), "label", array()), "html", null, true);
            echo "</span>
                        <input name=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "currency", array()), "vars", array()), "full_name", array()), "html", null, true);
            echo "\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "currency", array()), "vars", array()), "value", array()), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 48
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'widget');
            echo "
                    ";
        }
        // line 50
        echo "                </div>
                ";
        // line 51
        if ($this->getAttribute(($context["form"] ?? null), "baseCurrencyValue", array(), "any", true, true)) {
            // line 52
            echo "                    <div class=\"base-currency\">
                        <div class=\"base-currency-field input-append\">
                            ";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "baseCurrencyValue", array()), 'widget');
            echo "
                            ";
            // line 55
            if (array_key_exists("defaultCurrency", $context)) {
                // line 56
                echo "                                <span class=\"add-on\">";
                echo twig_escape_filter($this->env, ($context["defaultCurrency"] ?? null), "html", null, true);
                echo "</span>
                            ";
            } else {
                // line 58
                echo "                                <span class=\"add-on\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'widget');
                echo "</span>
                            ";
            }
            // line 60
            echo "                        </div>
                    </div>
                ";
        }
        // line 63
        echo "                <div class=\"default-currency-equivalent\" data-name=\"default-currency-equivalent\"></div>
                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'errors');
        echo "
                ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'errors');
        echo "
                ";
        // line 67
        if ($this->getAttribute(($context["form"] ?? null), "baseCurrencyValue", array(), "any", true, true)) {
            // line 68
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "baseCurrencyValue", array()), 'errors');
            echo "
                ";
        }
        // line 70
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCurrencyBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  203 => 70,  197 => 68,  195 => 67,  191 => 66,  187 => 65,  183 => 64,  180 => 63,  175 => 60,  169 => 58,  163 => 56,  161 => 55,  157 => 54,  153 => 52,  151 => 51,  148 => 50,  142 => 48,  135 => 46,  130 => 45,  128 => 44,  124 => 43,  120 => 41,  118 => 39,  116 => 34,  114 => 33,  108 => 32,  103 => 30,  94 => 28,  91 => 27,  81 => 20,  77 => 19,  70 => 15,  66 => 14,  60 => 10,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  39 => 3,  36 => 2,  33 => 1,  28 => 74,  26 => 27,  23 => 26,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCurrencyBundle:Form:fields.html.twig", "");
    }
}
