<?php

/* OroIntegrationBundle:Form:javascript.html.twig */
class __TwigTemplate_dfbd7b252de31637a65f23bc4f4e52228ddb6b92495c353d3652f68231cf11bc extends Twig_Template
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

    // line 8
    public function getrenderIntegrationFormJS($__form__ = null, $__formSelector__ = null, $__csrfTokenFieldFillName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "formSelector" => $__formSelector__,
            "csrfTokenFieldFillName" => $__csrfTokenFieldFillName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "    ";
            $context["fieldsToSendOnTypeChange"] = array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 10
($context["form"] ?? null), "type", array()), "vars", array()), "full_name", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 11
($context["form"] ?? null), "name", array()), "vars", array()), "full_name", array()));
            // line 13
            echo "    ";
            if (array_key_exists("csrfTokenFieldFillName", $context)) {
                // line 14
                echo "        ";
                $context["fieldsToSendOnTypeChange"] = twig_array_merge(($context["fieldsToSendOnTypeChange"] ?? null), array(0 => ($context["csrfTokenFieldFillName"] ?? null)));
                // line 15
                echo "    ";
            } elseif ($this->getAttribute(($context["form"] ?? null), "_token", array(), "any", true, true)) {
                // line 16
                echo "        ";
                $context["fieldsToSendOnTypeChange"] = twig_array_merge(($context["fieldsToSendOnTypeChange"] ?? null), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "_token", array()), "vars", array()), "full_name", array())));
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            $context["fieldsToSendOnTransportTypeChange"] = twig_array_merge(($context["fieldsToSendOnTypeChange"] ?? null), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "transportType", array()), "vars", array()), "full_name", array())));
            // line 20
            echo "
    ";
            // line 21
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroIntegrationBundle:Form:javascript.html.twig", 21);
            // line 22
            echo "
    <div ";
            // line 23
            echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "orointegration/js/channel-view", "options" => array("formSelector" => ("#" . ((            // line 26
array_key_exists("formSelector", $context)) ? (_twig_default_filter(($context["formSelector"] ?? null), $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()))) : ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array())))), "typeSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 27
($context["form"] ?? null), "type", array()), "vars", array()), "id", array())), "transportTypeSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 28
($context["form"] ?? null), "transportType", array()), "vars", array()), "id", array())), "fieldsSets" => array("type" =>             // line 30
($context["fieldsToSendOnTypeChange"] ?? null), "transportType" =>             // line 31
($context["fieldsToSendOnTransportTypeChange"] ?? null)))));
            // line 34
            echo "></div>
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
        return "OroIntegrationBundle:Form:javascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 34,  73 => 31,  72 => 30,  71 => 28,  70 => 27,  69 => 26,  68 => 23,  65 => 22,  63 => 21,  60 => 20,  58 => 19,  55 => 18,  52 => 17,  49 => 16,  46 => 15,  43 => 14,  40 => 13,  38 => 11,  37 => 10,  35 => 9,  21 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroIntegrationBundle:Form:javascript.html.twig", "");
    }
}
