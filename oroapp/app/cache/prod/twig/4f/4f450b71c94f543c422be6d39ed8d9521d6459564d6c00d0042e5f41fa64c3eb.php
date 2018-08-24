<?php

/* OroAnalyticsBundle:RFMCategory:channelView.html.twig */
class __TwigTemplate_5774b05116a8e36e990c79c779750e0e71dcf17f3b36ad451830e4b6fdb857b3 extends Twig_Template
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
        // line 1
        echo "<div class=\"responsive-cell clearfix\">
    <div class=\"span6\">
        <h4>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.rfm_setting.title"), "html", null, true);
        echo "</h4>
        <div class=\"rfm-settings rfm-enabled\">
            <div class=\"rfm-settings-data\">
                ";
        // line 6
        if ((($context["rfmCategoriesCount"] ?? null) > 1)) {
            // line 7
            echo "                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th><label>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.score.title"), "html", null, true);
            echo "</label></th>
                        <th>
                            <label>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.recency.label"), "html", null, true);
            echo "</label>
                            ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.hint.recency"), "html", null, true);
            echo "
                        </th>
                        <th>
                            <label>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.frequency.label"), "html", null, true);
            echo "</label>
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.hint.frequency"), "html", null, true);
            echo "
                        </th>
                        <th>
                            <label>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.monetary.label"), "html", null, true);
            echo "</label>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.hint.monetary"), "html", null, true);
            echo "
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=\"rfm-cell-index\">1
                                <br><small>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.best"), "html", null, true);
            echo "</small>
                            </td>
                            <td class=\"rfm-cell-recency\">
                                <span>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.less"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "recency", array()), 0, array(), "array"), "maxValue", array()), "html", null, true);
            echo "</strong>
                            </td>
                            <td class=\"rfm-cell-frequency\">
                                <span>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.more"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "frequency", array()), 0, array(), "array"), "minValue", array()), "html", null, true);
            echo "</strong>
                            <td class=\"rfm-cell-monetary\">
                                <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.more"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "monetary", array()), 0, array(), "array"), "minValue", array()), "html", null, true);
            echo "</strong>
                            </td>
                        </tr>

                        ";
            // line 43
            if ((($context["rfmCategoriesCount"] ?? null) > 2)) {
                // line 44
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute(($context["rfmCategories"] ?? null), "recency", array()), 1,  -1));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["rfmCategory"]) {
                    // line 45
                    echo "                                <tr>
                                    <td class=\"rfm-cell-index\">";
                    // line 46
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) + 1), "html", null, true);
                    echo "</td>
                                    <td class=\"rfm-cell-recency\">
                                        <span>";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.from"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "recency", array()), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "minValue", array()), "html", null, true);
                    echo "</strong>
                                        <br><span>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.to"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "recency", array()), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "maxValue", array()), "html", null, true);
                    echo "</strong>
                                    </td>
                                    <td class=\"rfm-cell-frequency\">
                                        <span>";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.from"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "frequency", array()), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "minValue", array()), "html", null, true);
                    echo "</strong>
                                        <br><span>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.to"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "frequency", array()), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "maxValue", array()), "html", null, true);
                    echo "</strong>
                                    <td class=\"rfm-cell-monetary\">
                                        <span>";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.from"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "monetary", array()), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "minValue", array()), "html", null, true);
                    echo "</strong>
                                        <br><span>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.to"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "monetary", array()), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "maxValue", array()), "html", null, true);
                    echo "</strong>
                                    </td>
                                </tr>
                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rfmCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                        ";
            }
            // line 67
            echo "
                        <tr>
                            <td class=\"rfm-cell-index\">";
            // line 69
            echo twig_escape_filter($this->env, ($context["rfmCategoriesCount"] ?? null), "html", null, true);
            echo "
                                <br><small>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.worst"), "html", null, true);
            echo "</small>
                            </td>
                            <td class=\"rfm-cell-recency\">
                                <span>";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.more"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "recency", array()), (($context["rfmCategoriesCount"] ?? null) - 1), array(), "array"), "minValue", array()), "html", null, true);
            echo "</strong>
                            </td>
                            <td class=\"rfm-cell-frequency\">
                                <span>";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.less"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "frequency", array()), (($context["rfmCategoriesCount"] ?? null) - 1), array(), "array"), "maxValue", array()), "html", null, true);
            echo "</strong>
                            <td class=\"rfm-cell-monetary\">
                                <span>";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.less"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rfmCategories"] ?? null), "monetary", array()), (($context["rfmCategoriesCount"] ?? null) - 1), array(), "array"), "maxValue", array()), "html", null, true);
            echo "</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ";
        }
        // line 87
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroAnalyticsBundle:RFMCategory:channelView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 87,  244 => 81,  240 => 80,  235 => 78,  231 => 77,  225 => 74,  221 => 73,  215 => 70,  211 => 69,  207 => 67,  204 => 66,  186 => 62,  182 => 61,  178 => 60,  174 => 59,  169 => 57,  165 => 56,  161 => 55,  157 => 54,  151 => 51,  147 => 50,  143 => 49,  139 => 48,  134 => 46,  131 => 45,  113 => 44,  111 => 43,  104 => 39,  100 => 38,  95 => 36,  91 => 35,  85 => 32,  81 => 31,  75 => 28,  65 => 21,  61 => 20,  55 => 17,  51 => 16,  45 => 13,  41 => 12,  36 => 10,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAnalyticsBundle:RFMCategory:channelView.html.twig", "");
    }
}
