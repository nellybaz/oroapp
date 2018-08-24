<?php

/* OroMailChimpBundle::macros.html.twig */
class __TwigTemplate_79cb66bb8c72b86222867b90b26444ac734ff8f48e0d706be016135119136437 extends Twig_Template
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
    public function getrenderAttributeWithTooltip($__title__ = null, $__data__ = null, $__tooltip__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "tooltip" => $__tooltip__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMailChimpBundle::macros.html.twig", 2);
            // line 3
            echo "    <div class=\"control-group\">
        <label class=\"control-label\">";
            // line 4
            echo $context["ui"]->gettooltip(($context["tooltip"] ?? null));
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            <div class=\"control-label\">
                ";
            // line 7
            echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, ($context["data"] ?? null)), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty")), "html", null, true);
            echo "
            </div>
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
        return "OroMailChimpBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  41 => 4,  38 => 3,  35 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMailChimpBundle::macros.html.twig", "");
    }
}
