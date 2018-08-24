<?php

/* OroSearchBundle:Search:searchResults.html.twig */
class __TwigTemplate_0485ca400f7fc062c350326476752656a0c72a5e067d74f9529209b24510fca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["bap"] ?? null), "layout", array()), "OroSearchBundle:Search:searchResults.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroSearchBundle:Search:searchResults.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%keyword%" => ((        // line 4
array_key_exists("searchString", $context)) ? (_twig_default_filter(($context["searchString"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.search.result.empty"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.search.result.empty"))))));
        // line 5
        $context["gridName"] = "search-grid";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container-fluid search-header clearfix\">
        <h2>
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Search results", array(), "messages");
        // line 11
        echo "        </h2>
        <form method=\"get\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_search_results");
        echo "\" class=\"form-inline search-form\">
            <input type=\"hidden\" name=\"from\" value=\"\" />
            <div class=\"input-append\">
                <input type=\"text\" id=\"search\" class=\"span2 search\" name=\"search\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["searchString"] ?? null), "html", null, true);
        echo "\" />
                <button type=\"submit\" class=\"btn btn-search btn-primary\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "</button>
            </div>
        </form>
    </div>

    ";
        // line 21
        if ((((array_key_exists("groupedResults", $context) && twig_in_filter("", twig_get_array_keys_filter(($context["groupedResults"] ?? null)))) && ($this->getAttribute($this->getAttribute(($context["groupedResults"] ?? null), "", array(), "array"), "count", array()) > 0)) || (twig_length_filter($this->env, ($context["groupedResults"] ?? null)) > 1))) {
            // line 22
            echo "        <div class=\"oro-page collapsible-sidebar clearfix\">
            <div class=\"oro-page-sidebar search-entity-types-column dropdown\">
                <a href=\"javascript: void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa-filter\"></i>
                    ";
            // line 26
            if (($context["selectedResult"] ?? null)) {
                // line 27
                echo "                        ";
                if ($this->getAttribute(($context["selectedResult"] ?? null), "class", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["selectedResult"] ?? null), "label", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.search.result.all"), "html", null, true);
                }
                // line 28
                echo "                        (";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["selectedResult"] ?? null), "count", array()), "html", null, true);
                echo ") <i class=\"fa-sort-desc\"></i>
                    ";
            }
            // line 30
            echo "                </a>
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groupedResults"] ?? null));
            foreach ($context['_seq'] as $context["alias"] => $context["type"]) {
                // line 33
                echo "                    ";
                $context["selected"] = ($context["alias"] == ($context["from"] ?? null));
                // line 34
                echo "                    ";
                if ($this->getAttribute($context["type"], "class", array())) {
                    // line 35
                    echo "                        ";
                    $context["label"] = $this->getAttribute($context["type"], "label", array());
                    // line 36
                    echo "                        ";
                    $context["iconClass"] = $this->getAttribute($context["type"], "icon", array());
                    // line 37
                    echo "                    ";
                } else {
                    // line 38
                    echo "                        ";
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.search.result.all");
                    // line 39
                    echo "                        ";
                    $context["iconClass"] = "fa-search";
                    // line 40
                    echo "                    ";
                }
                // line 41
                echo "
                    ";
                // line 42
                if (twig_test_empty(($context["iconClass"] ?? null))) {
                    // line 43
                    echo "                        ";
                    $context["iconClass"] = "fa-file";
                    // line 44
                    echo "                    ";
                }
                // line 45
                echo "
                    <li";
                // line 46
                if (($context["selected"] ?? null)) {
                    echo " class=\"selected\"";
                }
                echo ">
                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_search_results", array("from" => $context["alias"], "search" => ($context["searchString"] ?? null))), "html", null, true);
                echo "\">
                            ";
                // line 48
                if (($context["selected"] ?? null)) {
                    echo "<i class=\"fa-chevron-right pull-right\"></i>";
                }
                // line 49
                echo "                            <i class=\"";
                echo twig_escape_filter($this->env, ($context["iconClass"] ?? null), "html", null, true);
                echo "\"></i>
                            ";
                // line 50
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "count", array()), "html", null, true);
                echo ")
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                </ul>
            </div>
            <div class=\"oro-page-body search-results-column\">
                <div id=\"search-result-grid\">
                    ";
            // line 58
            echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), array("from" => ($context["from"] ?? null), "search" => ($context["searchString"] ?? null)), array("cssClass" => "search-grid grid-without-header"));
            echo "
                </div>
            </div>
        </div>
    ";
        } else {
            // line 63
            echo "    <div class=\"search-no-results\">
        ";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("No results were found to match your search.", array(), "messages");
            // line 65
            echo "        <br />
        ";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Try modifying your search criteria or creating a new ...", array(), "messages");
            // line 67
            echo "    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroSearchBundle:Search:searchResults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 67,  187 => 66,  184 => 65,  182 => 64,  179 => 63,  171 => 58,  165 => 54,  153 => 50,  148 => 49,  144 => 48,  140 => 47,  134 => 46,  131 => 45,  128 => 44,  125 => 43,  123 => 42,  120 => 41,  117 => 40,  114 => 39,  111 => 38,  108 => 37,  105 => 36,  102 => 35,  99 => 34,  96 => 33,  92 => 32,  88 => 30,  82 => 28,  75 => 27,  73 => 26,  67 => 22,  65 => 21,  57 => 16,  53 => 15,  47 => 12,  44 => 11,  42 => 10,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 4,  24 => 2,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSearchBundle:Search:searchResults.html.twig", "");
    }
}
