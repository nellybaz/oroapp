<?php

/* OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:address.html.twig */
class __TwigTemplate_4d69b210daa19501b20641b7bceac513dfa8fe750bb4d0bd96917fbad4d09530 extends Twig_Template
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
    }

    // line 1
    public function getaddress_form($__address_form__ = null, $__save_address_checkbox__ = null, $__hasCustomAddress__ = null, $__compact__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "address_form" => $__address_form__,
            "save_address_checkbox" => $__save_address_checkbox__,
            "hasCustomAddress" => $__hasCustomAddress__,
            "compact" => $__compact__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:address.html.twig", 2);
            // line 3
            echo "    <div id=\"checkout-address-fields-container\" class=\"grid ";
            if ( !($context["hasCustomAddress"] ?? null)) {
                echo "hidden";
            }
            echo "\"
         ";
            // line 4
            echo $context["UI"]->getattributes($this->getAttribute($this->getAttribute(($context["address_form"] ?? null), "vars", array()), "attr", array()));
            echo "
    >
        <div class=\"grid__row grid__row--offset-none\">
            <div class=\"grid__column ";
            // line 7
            if (($context["compact"] ?? null)) {
                echo "grid__column--12 grid__column--no-gutters";
            } else {
                echo "grid__column--6";
            }
            echo "\">
                ";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "label", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.address.label"))));
            echo "
            </div>
            <div class=\"grid__column ";
            // line 10
            if (($context["compact"] ?? null)) {
                echo "grid__column--12 grid__column--no-gutters";
            } else {
                echo "grid__column--6";
            }
            echo "\">
                ";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "namePrefix", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.name.prefix"))));
            echo "
            </div>
        </div>

        <div class=\"grid__row grid__row--offset-none\">
            <div class=\"grid__column ";
            // line 16
            if (($context["compact"] ?? null)) {
                echo "grid__column--12 grid__column--no-gutters";
            } else {
                echo "grid__column--6";
            }
            echo "\">
                ";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "firstName", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.name.first_name"))));
            echo "
            </div>
            <div class=\"grid__column ";
            // line 19
            if (($context["compact"] ?? null)) {
                echo "grid__column--12 grid__column--no-gutters";
            } else {
                echo "grid__column--6";
            }
            echo "\">
                ";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "middleName", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.name.middle_name"))));
            echo "
            </div>
        </div>
        <div class=\"grid__row grid__row--offset-none\">
            <div class=\"grid__column ";
            // line 24
            if (($context["compact"] ?? null)) {
                echo "grid__column--12 grid__column--no-gutters";
            } else {
                echo "grid__column--6";
            }
            echo "\">
                ";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "lastName", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.name.last_name"))));
            echo "
            </div>
            <div class=\"grid__column ";
            // line 27
            if (($context["compact"] ?? null)) {
                echo "grid__column--12 grid__column--no-gutters";
            } else {
                echo "grid__column--6";
            }
            echo "\">
                ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "nameSuffix", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.name.sufix"))));
            echo "
            </div>
        </div>

        <div class=\"grid__row grid__row--offset-none\">
            <div class=\"grid__column ";
            // line 33
            if (($context["compact"] ?? null)) {
                echo "grid__column--12 grid__column--no-gutters";
            } else {
                echo "grid__column--6";
            }
            echo "\">
                ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "organization", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.address.organization"))));
            echo "
            </div>
            <div class=\"grid__column ";
            // line 36
            if (($context["compact"] ?? null)) {
                echo "grid__column--12 grid__column--no-gutters";
            } else {
                echo "grid__column--6";
            }
            echo "\">
                ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "phone", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.address.phone"))));
            echo "
            </div>
        </div>

        <div class=\"grid__row grid__row--offset-none\">
            <div class=\"grid__column ";
            // line 42
            if (($context["compact"] ?? null)) {
                echo "grid__column--12 grid__column--no-gutters";
            } else {
                echo "grid__column--6";
            }
            echo "\">
                ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "street", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.address.street"))));
            echo "
            </div>
            <div class=\"grid__column ";
            // line 45
            if (($context["compact"] ?? null)) {
                echo "grid__column--12 grid__column--no-gutters";
            } else {
                echo "grid__column--6";
            }
            echo "\">
                ";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "street2", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.address.street2"))));
            echo "
            </div>
        </div>

        ";
            // line 50
            if (($context["compact"] ?? null)) {
                // line 51
                echo "            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--12 grid__column--no-gutters\">
                    ";
                // line 53
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "city", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.address.city"))));
                echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--12 grid__column--no-gutters\">
                    ";
                // line 58
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "country", array()), 'row');
                echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--12 grid__column--no-gutters\">
                    ";
                // line 63
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "region", array()), 'row');
                echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--no-gutters grid__column--6 col-zip-error\">
                    ";
                // line 68
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "postalCode", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.address.zip"))));
                echo "
                </div>
            </div>
        ";
            } else {
                // line 72
                echo "            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6\">
                    ";
                // line 74
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "city", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.address.city"))));
                echo "
                </div>
                <div class=\"grid__column grid__column--2\">
                    ";
                // line 77
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "country", array()), 'row');
                echo "
                </div>
                <div class=\"grid__column grid__column--2\">
                    ";
                // line 80
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "region", array()), 'row');
                echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6 col-zip-error\">
                    ";
                // line 85
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "postalCode", array()), 'row', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.form.placeholder.address.zip"))));
                echo "
                </div>
            </div>
        ";
            }
            // line 89
            echo "
        <div class=\"grid__row ";
            // line 90
            if ( !($context["compact"] ?? null)) {
                echo "grid__row--offset-none";
            }
            echo "\">
            <div class=\"grid__column ";
            // line 91
            if (($context["compact"] ?? null)) {
                echo "grid__column--no-gutters";
            }
            echo "\">
                ";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["save_address_checkbox"] ?? null), 'row');
            echo "
            </div>
        </div>

        <div class=\"hidden\">
            ";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "id", array()), 'widget');
            echo "
            ";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["address_form"] ?? null), "region_text", array()), 'widget');
            echo "
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 98,  286 => 97,  278 => 92,  272 => 91,  266 => 90,  263 => 89,  256 => 85,  248 => 80,  242 => 77,  236 => 74,  232 => 72,  225 => 68,  217 => 63,  209 => 58,  201 => 53,  197 => 51,  195 => 50,  188 => 46,  180 => 45,  175 => 43,  167 => 42,  159 => 37,  151 => 36,  146 => 34,  138 => 33,  130 => 28,  122 => 27,  117 => 25,  109 => 24,  102 => 20,  94 => 19,  89 => 17,  81 => 16,  73 => 11,  65 => 10,  60 => 8,  52 => 7,  46 => 4,  39 => 3,  36 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:layouts/default/oro_checkout_frontend_checkout/templates:address.html.twig", "");
    }
}
