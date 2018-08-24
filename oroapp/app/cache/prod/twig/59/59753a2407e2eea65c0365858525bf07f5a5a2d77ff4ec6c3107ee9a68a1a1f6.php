<?php

/* OroCurrencyBundle::macros.html.twig */
class __TwigTemplate_6f7f2bbc92d6b37c16ce218dcdd1f507622f98feacd5691ab283031070356142 extends Twig_Template
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
        // line 18
        echo "
";
    }

    // line 9
    public function getconvert_to_base_currency($__multicurrency__ = null, $__title__ = null, $__entity__ = null, $__fieldName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "multicurrency" => $__multicurrency__,
            "title" => $__title__,
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCurrencyBundle::macros.html.twig", 10);
            // line 11
            echo "    ";
            $context["value"] = $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\RateConverterExtension')->convert(($context["multicurrency"] ?? null));
            // line 12
            echo "    ";
            if (twig_length_filter($this->env, ($context["value"] ?? null))) {
                // line 13
                echo "        <div class=\"base-currency-wrapper\">
            ";
                // line 14
                echo $context["ui"]->getrenderProperty(((($context["title"] ?? null)) ? (($context["title"] ?? null)) : ("")), ($context["value"] ?? null), ($context["entity"] ?? null), ($context["fieldName"] ?? null));
                echo "
        </div>
    ";
            }
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
        return "OroCurrencyBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  24 => 9,  19 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCurrencyBundle::macros.html.twig", "");
    }
}
