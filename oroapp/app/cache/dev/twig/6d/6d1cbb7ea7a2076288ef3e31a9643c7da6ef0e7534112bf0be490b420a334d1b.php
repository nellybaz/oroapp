<?php

/* OroTaxBundle::macros.html.twig */
class __TwigTemplate_e8852ed6c6aa97c90dc1e57f84a13d438bbd4fd71256e0fe428df755b3ca2fa4 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroTaxBundle::macros.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderResult"));

            // line 2
            echo "    ";
            echo $this->getAttribute($this, "renderItems", array(0 => ($context["result"] ?? $this->getContext($context, "result"))), "method");
            echo "
    ";
            // line 3
            echo $this->getAttribute($this, "renderTaxes", array(0 => ($context["result"] ?? $this->getContext($context, "result"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "_renderItemsHead"));

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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderItems"));

            // line 18
            echo "    ";
            if ((array_key_exists("result", $context) && twig_length_filter($this->env, ($context["result"] ?? $this->getContext($context, "result"))))) {
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
                $context['_seq'] = twig_ensure_traversable(($context["result"] ?? $this->getContext($context, "result")));
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "_renderTaxesHead"));

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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderTaxes"));

            // line 47
            echo "    ";
            if (($this->getAttribute(($context["result"] ?? null), "taxes", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute(($context["result"] ?? $this->getContext($context, "result")), "taxes", array())))) {
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["result"] ?? $this->getContext($context, "result")), "taxes", array()));
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderJsItems"));

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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderJsTaxes"));

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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  431 => 98,  426 => 95,  412 => 94,  380 => 79,  367 => 69,  363 => 68,  359 => 67,  355 => 66,  352 => 65,  338 => 64,  317 => 59,  308 => 56,  304 => 55,  300 => 54,  296 => 53,  293 => 52,  289 => 51,  284 => 49,  281 => 48,  278 => 47,  263 => 46,  241 => 41,  237 => 40,  233 => 39,  229 => 38,  225 => 36,  211 => 35,  190 => 30,  180 => 27,  176 => 26,  172 => 25,  168 => 24,  165 => 23,  160 => 22,  155 => 20,  152 => 19,  149 => 18,  134 => 17,  112 => 12,  108 => 11,  104 => 10,  99 => 7,  85 => 6,  65 => 3,  60 => 2,  45 => 1,  37 => 93,  34 => 63,  31 => 45,  28 => 34,  25 => 16,  22 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro renderResult(result) %}
    {{ _self.renderItems(result) }}
    {{ _self.renderTaxes(result) }}
{% endmacro %}

{% macro _renderItemsHead() %}
    <thead>
    <tr>
        <th class=\"renderable\"></th>
        <th class=\"renderable\">{{ 'oro.tax.result.short.includingTax'|trans }}</th>
        <th class=\"renderable\">{{ 'oro.tax.result.short.excludingTax'|trans }}</th>
        <th class=\"renderable\">{{ 'oro.tax.result.short.taxAmount'|trans }}</th>
    </tr>
    </thead>
{% endmacro %}

{% macro renderItems(result) %}
    {% if result is defined and result|length %}
        <table class=\"grid table table-condensed table-bordered tax-result-grid\">
            {{ _self._renderItemsHead() }}
            <tbody>
            {% for type, data in result if data.includingTax is defined %}
                <tr>
                    <td class=\"renderable\">{{ 'oro.tax.result.%s'|format(type)|trans }}</td>
                    <td class=\"renderable\">{{ data.includingTax|oro_format_currency({currency: data.currency}) }}</td>
                    <td class=\"renderable\">{{ data.excludingTax|oro_format_currency({currency: data.currency}) }}</td>
                    <td class=\"renderable\">{{ data.taxAmount|oro_format_currency({currency: data.currency}) }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endmacro %}

{% macro _renderTaxesHead() %}
    <thead>
    <tr>
        <th class=\"renderable\">{{ 'oro.tax.result.tax'|trans }}</th>
        <th class=\"renderable\">{{ 'oro.tax.result.rate'|trans }}</th>
        <th class=\"renderable\">{{ 'oro.tax.result.taxableAmount'|trans }}</th>
        <th class=\"renderable\">{{ 'oro.tax.result.taxAmount'|trans }}</th>
    </tr>
    </thead>
{% endmacro %}

{% macro renderTaxes(result) %}
    {% if result.taxes is defined and result.taxes|length %}
        <table class=\"grid table table-condensed table-bordered tax-result-grid\">
            {{ _self._renderTaxesHead() }}
            <tbody>
            {% for tax in result.taxes %}
                <tr>
                    <td class=\"renderable\">{{ tax.tax }}</td>
                    <td class=\"renderable\">{{ tax.rate|oro_format_percent }}</td>
                    <td class=\"renderable\">{{ tax.taxableAmount|oro_format_currency({currency: tax.currency}) }}</td>
                    <td class=\"renderable\">{{ tax.taxAmount|oro_format_currency({currency: tax.currency}) }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endmacro %}

{% macro renderJsItems() %}
    <% var translations = {
        unit: '{{ 'oro.tax.result.unit'|trans }}',
        row: '{{ 'oro.tax.result.row'|trans }}',
        total: '{{ 'oro.tax.result.total'|trans }}',
        shipping: '{{ 'oro.tax.result.shipping'|trans }}'}
    %>
    <% var unit = unit; %>
    <% var row = row; %>
    <% var total = total; %>
    <% var shipping = shipping; %>
    <% var object = {unit: unit, row: row, shipping: shipping, total: total}; %>
    <% var data = _.pick(object, _.identity); %>
    <% if (data) { %>
    <table class=\"grid table table-condensed table-bordered tax-result-grid\">
        {{ _self._renderItemsHead() }}
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
{% endmacro %}

{% macro renderJsTaxes() %}
    <% var taxes = taxes; %>
    <% if (!_.isEmpty(taxes)) { %>
    <table class=\"grid table table-condensed table-bordered tax-result-grid\">
        {{ _self._renderTaxesHead() }}
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
{% endmacro %}
", "OroTaxBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/TaxBundle/Resources/views/macros.html.twig");
    }
}
