<?php

/* OroDashboardBundle::macros.html.twig */
class __TwigTemplate_9ba3d4f66327352c6d32f0c39c85d7958fa3962b5cdaa3759ffa3bd5d7eb8bb6 extends Twig_Template
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
    public function getrenderDateWidgeView($__form__ = null, $__valueType__ = null, $__className__ = null, $__viewType__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "valueType" => $__valueType__,
            "className" => $__className__,
            "viewType" => $__viewType__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"datetime-range-filter filter-criteria ";
            echo twig_escape_filter($this->env, ($context["className"] ?? null), "html", null, true);
            echo "-range-filter-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\">
        <!-- datetime range filter placeholder -->
        <input type=\"hidden\" name=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
            echo "[part]\" value=\"value\"/>
    </div>

    ";
            // line 7
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle::macros.html.twig", 7);
            // line 8
            echo "
    ";
            // line 9
            $context["options"] = array("_sourceElement" => "div.widget-configuration", "metadata" => $this->getAttribute($this->getAttribute(            // line 11
($context["form"] ?? null), "vars", array()), "datetime_range_metadata", array()), "formName" => $this->getAttribute($this->getAttribute(            // line 12
($context["form"] ?? null), "vars", array()), "name", array()), "formFullName" => $this->getAttribute($this->getAttribute(            // line 13
($context["form"] ?? null), "vars", array()), "full_name", array()), "valueType" =>             // line 14
($context["valueType"] ?? null));
            // line 16
            echo "
    ";
            // line 17
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "value", array()) != null)) {
                // line 18
                echo "        ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), array("valueConfig" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 19
($context["form"] ?? null), "vars", array()), "value", array()), "value", array())));
                // line 21
                echo "    ";
            }
            // line 22
            echo "
    <div ";
            // line 23
            echo $context["UI"]->getrenderPageComponentAttributes(array("view" =>             // line 24
($context["viewType"] ?? null), "options" =>             // line 25
($context["options"] ?? null)));
            // line 26
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
        return "OroDashboardBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  78 => 25,  77 => 24,  76 => 23,  73 => 22,  70 => 21,  68 => 19,  66 => 18,  64 => 17,  61 => 16,  59 => 14,  58 => 13,  57 => 12,  56 => 11,  55 => 9,  52 => 8,  50 => 7,  44 => 4,  36 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle::macros.html.twig", "");
    }
}
