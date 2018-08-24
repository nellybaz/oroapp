<?php

/* OroChartBundle::macros.html.twig */
class __TwigTemplate_7088dc1390261b3111248597e4acf158d86c19d8dc3d0abaf40b22450b1099f8 extends Twig_Template
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

    // line 10
    public function getrenderChart($__data__ = null, $__options__ = null, $__config__ = null, $__isMobileVersion__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "options" => $__options__,
            "config" => $__config__,
            "isMobileVersion" => $__isMobileVersion__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            $context["name"] = twig_replace_filter($this->getAttribute(($context["options"] ?? null), "name", array()), array("_chart" => ""));
            // line 12
            echo "    ";
            $context["params"] = array("ratio" => ((            // line 13
($context["isMobileVersion"] ?? null)) ? ("0.8") : ("0.35")), "data" =>             // line 14
($context["data"] ?? null), "options" =>             // line 15
($context["options"] ?? null), "config" =>             // line 16
($context["config"] ?? null), "date" => (($this->getAttribute($this->getAttribute(            // line 17
($context["options"] ?? null), "settings", array(), "any", false, true), "quarterDate", array(), "any", true, true)) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute($this->getAttribute(($context["options"] ?? null), "settings", array()), "quarterDate", array()), array("timeZone" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getTimeZone()))) : ("")));
            // line 19
            echo "

    <div data-page-component-module=\"orochart/js/app/components/";
            // line 21
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-chart-component\"
         data-page-component-options=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["params"] ?? null)), "html", null, true);
            echo "\"></div>
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
        return "OroChartBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 22,  51 => 21,  47 => 19,  45 => 17,  44 => 16,  43 => 15,  42 => 14,  41 => 13,  39 => 12,  36 => 11,  21 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChartBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/ChartBundle/Resources/views/macros.html.twig");
    }
}
