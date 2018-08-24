<?php

/* OroTaxBundle::macros.html.twig */
class __TwigTemplate_b9f6df20fc5275a72a599ed6f42927778aa621ff63280437e519e37f30309595 extends Twig_Template
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
        // line 5
        echo "
";
        // line 16
        echo "
";
        // line 34
        echo "
";
        // line 45
        echo "
";
        // line 63
        echo "
";
        // line 93
        echo "
";
    }

    // line 1
    public function getrenderResult($__result__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "result" => $__result__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            echo $this->getAttribute($this, "renderItems", array(0 => ($context["result"] ?? null)), "method");
            echo "
    ";
            // line 3
            echo $this->getAttribute($this, "renderTaxes", array(0 => ($context["result"] ?? null)), "method");
            echo "
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

    // line 6
    public function get_renderItemsHead(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    <thead>
    <tr>
        <th class=\"renderable\"></th>
        <th class=\"renderable\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.result.short.includingTax"), "html", null, true);
            echo "</th>
        <th class=\"renderable\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.result.short.excludingTax"), "html", null, true);
            echo "</th>
        <th class=\"renderable\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.result.short.taxAmount"), "html", null, true);
            echo "</th>
    </tr>
    </thead>
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

    // line 17
    public function getrenderItems($__result__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "result" => $__result__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "    ";
            if ((array_key_exists("result", $context) && twig_length_filter($this->env, ($context["result"] ?? null)))) {
                // line 19
                echo "        <table class=\"grid table table-condensed table-bordered tax-result-grid\">
            ";
                // line 20
                echo $this->getAttribute($this, "_renderItemsHead", array(), "method");
                echo "
            <tbody>
            ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
                foreach ($context['_seq'] as $context["type"] => $context["data"]) {
                    if ($this->getAttribute($context["data"], "includingTax", array(), "any", true, true)) {
                        // line 23
                        echo "                <tr>
                    <td class=\"renderable\">";
                        // line 24
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf("oro.tax.result.%s", $context["type"])), "html", null, true);
                        echo "</td>
                    <td class=\"renderable\">";
                        // line 25
                        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($context["data"], "includingTax", array()), array("currency" => $this->getAttribute($context["data"], "currency", array())));
                        echo "</td>
                    <td class=\"renderable\">";
                        // line 26
                        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($context["data"], "excludingTax", array()), array("currency" => $this->getAttribute($context["data"], "currency", array())));
                        echo "</td>
                    <td class=\"renderable\">";
                        // line 27
                        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($context["data"], "taxAmount", array()), array("currency" => $this->getAttribute($context["data"], "currency", array())));
                        echo "</td>
                </tr>
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </tbody>
        </table>
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

    // line 35
    public function get_renderTaxesHead(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 36
            echo "    <thead>
    <tr>
        <th class=\"renderable\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.result.tax"), "html", null, true);
            echo "</th>
        <th class=\"renderable\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.result.rate"), "html", null, true);
            echo "</th>
        <th class=\"renderable\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.result.taxableAmount"), "html", null, true);
            echo "</th>
        <th class=\"renderable\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.result.taxAmount"), "html", null, true);
            echo "</th>
    </tr>
    </thead>
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

    // line 46
    public function getrenderTaxes($__result__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "result" => $__result__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 47
            echo "    ";
            if (($this->getAttribute(($context["result"] ?? null), "taxes", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute(($context["result"] ?? null), "taxes", array())))) {
                // line 48
                echo "        <table class=\"grid table table-condensed table-bordered tax-result-grid\">
            ";
                // line 49
                echo $this->getAttribute($this, "_renderTaxesHead", array(), "method");
                echo "
            <tbody>
            ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["result"] ?? null), "taxes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tax"]) {
                    // line 52
                    echo "                <tr>
                    <td class=\"renderable\">";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tax"], "tax", array()), "html", null, true);
                    echo "</td>
                    <td class=\"renderable\">";
                    // line 54
                    echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute($context["tax"], "rate", array()));
                    echo "</td>
                    <td class=\"renderable\">";
                    // line 55
                    echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($context["tax"], "taxableAmount", array()), array("currency" => $this->getAttribute($context["tax"], "currency", array())));
                    echo "</td>
                    <td class=\"renderable\">";
                    // line 56
                    echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($context["tax"], "taxAmount", array()), array("currency" => $this->getAttribute($context["tax"], "currency", array())));
                    echo "</td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "            </tbody>
        </table>
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

    // line 64
    public function getrenderJsItems(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "    <% var translations = {
        unit: '";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.result.unit"), "html", null, true);
            echo "',
        row: '";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.result.row"), "html", null, true);
            echo "',
        total: '";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.result.total"), "html", null, true);
            echo "',
        shipping: '";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.result.shipping"), "html", null, true);
            echo "'}
    %>
    <% var unit = unit; %>
    <% var row = row; %>
    <% var total = total; %>
    <% var shipping = shipping; %>
    <% var object = {unit: unit, row: row, shipping: shipping, total: total}; %>
    <% var data = _.pick(object, _.identity); %>
    <% if (data) { %>
    <table class=\"grid table table-condensed table-bordered tax-result-grid\">
        ";
            // line 79
            echo $this->getAttribute($this, "_renderItemsHead", array(), "method");
            echo "
        <tbody>
        <% _.each(data, function(item, key) { %>
        <tr>
            <td class=\"renderable\"><%= translations[key] %></td>
            <td class=\"renderable\"><%= item.includingTax %></td>
            <td class=\"renderable\"><%= item.excludingTax %></td>
            <td class=\"renderable\"><%= item.taxAmount %></td>
        </tr>
        <% }); %>
        </tbody>
    </table>
    <% } %>
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

    // line 94
    public function getrenderJsTaxes(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 95
            echo "    <% var taxes = taxes; %>
    <% if (!_.isEmpty(taxes)) { %>
    <table class=\"grid table table-condensed table-bordered tax-result-grid\">
        ";
            // line 98
            echo $this->getAttribute($this, "_renderTaxesHead", array(), "method");
            echo "
        <tbody>
        <% _.each(taxes, function(tax) { %>
        <tr>
            <td class=\"renderable\"><%= tax.tax %></td>
            <td class=\"renderable\"><%= tax.rate %></td>
            <td class=\"renderable\"><%= tax.taxableAmount %></td>
            <td class=\"renderable\"><%= tax.taxAmount %></td>
        </tr>
        <% }); %>
        </tbody>
    </table>
    <% } %>
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
        return "OroTaxBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 98,  381 => 95,  370 => 94,  341 => 79,  328 => 69,  324 => 68,  320 => 67,  316 => 66,  313 => 65,  302 => 64,  284 => 59,  275 => 56,  271 => 55,  267 => 54,  263 => 53,  260 => 52,  256 => 51,  251 => 49,  248 => 48,  245 => 47,  233 => 46,  214 => 41,  210 => 40,  206 => 39,  202 => 38,  198 => 36,  187 => 35,  169 => 30,  159 => 27,  155 => 26,  151 => 25,  147 => 24,  144 => 23,  139 => 22,  134 => 20,  131 => 19,  128 => 18,  116 => 17,  97 => 12,  93 => 11,  89 => 10,  84 => 7,  73 => 6,  56 => 3,  51 => 2,  39 => 1,  34 => 93,  31 => 63,  28 => 45,  25 => 34,  22 => 16,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/TaxBundle/Resources/views/macros.html.twig");
    }
}
