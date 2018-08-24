<?php

/* OroTagBundle:Tag:search.html.twig */
class __TwigTemplate_bd94e868712e4b2207b71c6692adb3fd6e39780f6d9f365e2c474120b09f025e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["bap"] ?? null), "layout", array()), "OroTagBundle:Tag:search.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroTagBundle:Tag:search.html.twig", 2);
        // line 4
        $context["gridName"] = "tag-results-grid";

        $this->env->getExtension("oro_title")->set(array("params" => array("%tag.name%" => $this->getAttribute(        // line 5
($context["tag"] ?? null), "name", array()))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container-fluid search-header clearfix\">
        <h2 style=\"width: auto\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tag.datagrid.search_result", array("%name%" => twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? null), "name", array()))));
        echo "</h2>
    </div>

    ";
        // line 12
        if (((twig_in_filter("", twig_get_array_keys_filter(($context["groupedResults"] ?? null))) && ($this->getAttribute($this->getAttribute(($context["groupedResults"] ?? null), "", array(), "array"), "count", array()) > 0)) || (twig_length_filter($this->env, ($context["groupedResults"] ?? null)) > 1))) {
            // line 13
            echo "        <div class=\"oro-page collapsible-sidebar clearfix\">
            <div class=\"oro-page-sidebar search-entity-types-column dropdown\">
                <a href=\"javascript: void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa-filter\"></i>
                    ";
            // line 17
            if (($this->getAttribute(($context["selectedResult"] ?? null), "label", array(), "any", true, true) && $this->getAttribute(($context["selectedResult"] ?? null), "count", array(), "any", true, true))) {
                // line 18
                echo "                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["selectedResult"] ?? null), "label", array())), "html", null, true);
                echo "
                        ";
                // line 19
                $context["selectedResultCount"] = $this->getAttribute(($context["selectedResult"] ?? null), "count", array());
                // line 20
                echo "                    ";
            } else {
                // line 21
                echo "                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.search.result.all"), "html", null, true);
                echo "
                        ";
                // line 22
                $context["selectedResultCount"] = $this->getAttribute($this->getAttribute(($context["groupedResults"] ?? null), "", array(), "array"), "count", array());
                // line 23
                echo "                    ";
            }
            // line 24
            echo "                    (";
            echo twig_escape_filter($this->env, ($context["selectedResultCount"] ?? null), "html", null, true);
            echo ") <i class=\"fa-sort-desc\"></i>
                </a>
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groupedResults"] ?? null));
            foreach ($context['_seq'] as $context["alias"] => $context["type"]) {
                // line 28
                echo "                    ";
                $context["selected"] = ($context["alias"] == ($context["from"] ?? null));
                // line 29
                echo "                    ";
                if ($this->getAttribute($context["type"], "class", array(), "any", true, true)) {
                    // line 30
                    echo "                        ";
                    $context["label"] = $this->getAttribute($context["type"], "label", array());
                    // line 31
                    echo "                        ";
                    $context["iconClass"] = $this->getAttribute($context["type"], "icon", array());
                    // line 32
                    echo "                    ";
                } else {
                    // line 33
                    echo "                        ";
                    $context["label"] = "oro.search.result.all";
                    // line 34
                    echo "                        ";
                    $context["iconClass"] = "fa-search";
                    // line 35
                    echo "                    ";
                }
                // line 36
                echo "
                    ";
                // line 37
                if (twig_test_empty(($context["iconClass"] ?? null))) {
                    // line 38
                    echo "                        ";
                    $context["iconClass"] = "fa-file";
                    // line 39
                    echo "                    ";
                }
                // line 40
                echo "
                    <li";
                // line 41
                if (($context["selected"] ?? null)) {
                    echo " class=\"selected\"";
                }
                echo ">
                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tag_search", array("from" => $context["alias"], "id" => $this->getAttribute(($context["tag"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                            ";
                // line 43
                if (($context["selected"] ?? null)) {
                    echo "<i class=\"fa-chevron-right pull-right\"></i>";
                }
                // line 44
                echo "                            <i class=\"";
                echo twig_escape_filter($this->env, ($context["iconClass"] ?? null), "html", null, true);
                echo "\"></i>
                            ";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
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
            // line 49
            echo "                </ul>
            </div>
            <div class=\"oro-page-body search-results-column\">
                <div id=\"tag-search-results-grid\">
                    ";
            // line 53
            echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), array("from" => ($context["from"] ?? null), "tag_id" => $this->getAttribute(($context["tag"] ?? null), "id", array())), array("cssClass" => "tag-search-grid"));
            echo "
                </div>
            </div>
        </div>
    ";
        } else {
            // line 58
            echo "    <div class=\"search-no-results\">
        ";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("No results were found.", array(), "messages");
            // line 60
            echo "        <br />
        ";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Try modifying your search criteria", array(), "messages");
            // line 62
            echo "    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroTagBundle:Tag:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 62,  179 => 61,  176 => 60,  174 => 59,  171 => 58,  163 => 53,  157 => 49,  145 => 45,  140 => 44,  136 => 43,  132 => 42,  126 => 41,  123 => 40,  120 => 39,  117 => 38,  115 => 37,  112 => 36,  109 => 35,  106 => 34,  103 => 33,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  88 => 28,  84 => 27,  77 => 24,  74 => 23,  72 => 22,  67 => 21,  64 => 20,  62 => 19,  57 => 18,  55 => 17,  49 => 13,  47 => 12,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  26 => 4,  24 => 2,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTagBundle:Tag:search.html.twig", "");
    }
}
