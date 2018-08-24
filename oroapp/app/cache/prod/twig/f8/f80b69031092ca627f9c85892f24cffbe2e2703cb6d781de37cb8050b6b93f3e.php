<?php

/* OroHangoutsCallBundle::macros.html.twig */
class __TwigTemplate_274e83822a213ef31b46db472e668b8530877ad8c6c0531622ee2b3dfa172005 extends Twig_Template
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

    // line 13
    public function getrenderStartButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroHangoutsCallBundle::macros.html.twig", 14);
            // line 15
            echo "    ";
            $context["pageComponent"] = array("module" => (($this->getAttribute(            // line 16
($context["parameters"] ?? null), "componentModule", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "componentModule", array())) : ("oroui/js/app/components/view-component")), "options" => array("view" => "orohangoutscall/js/app/views/start-button-view", "autoRender" => true, "hangoutOptions" => (($this->getAttribute(            // line 20
($context["parameters"] ?? null), "hangoutOptions", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "hangoutOptions", array())) : (array()))));
            // line 23
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "componentName", array(), "any", true, true)) {
                // line 24
                echo "        ";
                $context["pageComponent"] = twig_array_merge(($context["pageComponent"] ?? null), array("name" => $this->getAttribute(                // line 25
($context["parameters"] ?? null), "componentName", array())));
                // line 27
                echo "    ";
            }
            // line 28
            echo "    <div class=\"start-hangout-button-placeholder";
            if ($this->getAttribute(($context["parameters"] ?? null), "class", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "class", array()), "html", null, true);
            }
            echo "\"
            ";
            // line 29
            if (($this->getAttribute(($context["parameters"] ?? null), "dataAttributes", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "dataAttributes", array())))) {
                // line 30
                echo "                ";
                echo $context["UI"]->getrenderAttributes($this->getAttribute(($context["parameters"] ?? null), "dataAttributes", array()));
                echo "
            ";
            }
            // line 32
            echo "            ";
            echo $context["UI"]->getrenderPageComponentAttributes(($context["pageComponent"] ?? null));
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
        return "OroHangoutsCallBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 32,  61 => 30,  59 => 29,  51 => 28,  48 => 27,  46 => 25,  44 => 24,  41 => 23,  39 => 20,  38 => 16,  36 => 15,  33 => 14,  21 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroHangoutsCallBundle::macros.html.twig", "");
    }
}
