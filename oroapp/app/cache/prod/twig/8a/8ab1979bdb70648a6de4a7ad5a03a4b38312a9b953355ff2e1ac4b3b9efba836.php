<?php

/* OroSearchBundle:Search:searchBar.html.twig */
class __TwigTemplate_84251f8a138c8b333d5d6ac857922095a1c6b4ad7c8d9fbcda5b68f0f2d90621 extends Twig_Template
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_search")) {
            // line 2
            echo "<div class=\"dropdown header-dropdown-search header-utility-dropdown\">
    <a href=\"javascript:void(0);\" class=\"dropdown-toggle oro-dropdown-toggle\" title=\"";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Search", array(), "messages");
            echo "\"><i class=\"fa-search\"></i></a>
    <ul class=\"dropdown-menu\">
        <li class=\"nav-header nav-header-title\">";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Search", array(), "messages");
            echo "</li>
        <li class=\"dark\">
            <form method=\"get\" action=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_search_results");
            echo "\" style=\"margin: 0\" id=\"top-search-form\" class=\"search-form\">
                <div id=\"search-div\" class=\"input-append input-prepend pull-left header-search\">
                    <div class=\"btn-group btn-block\">
                        <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\" id=\"search-bar-button\">
                            <span class=\"search-bar-type\">";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("All", array(), "messages");
            echo "</span>
                            <span class=\"fa-caret-down\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" id=\"search-bar-dropdown\">
                            <li data-alias=\"\">
                                <a href=\"javascript: void(0);\">";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("All", array(), "messages");
            echo "</a>
                            </li>
                            ";
            // line 18
            $context["searchEntities"] = array();
            // line 19
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
            foreach ($context['_seq'] as $context["className"] => $context["alias"]) {
                // line 20
                echo "                                ";
                $context["entityType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue($context["className"], "label"));
                // line 21
                echo "                                ";
                $context["searchEntities"] = twig_array_merge(($context["searchEntities"] ?? null), array($context["alias"] => ($context["entityType"] ?? null)));
                // line 22
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['className'], $context['alias'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
                            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["searchEntities"] ?? null)));
            foreach ($context['_seq'] as $context["alias"] => $context["name"]) {
                // line 25
                echo "                                <li data-alias=\"";
                echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                echo "\">
                                    <a href=\"javascript: void(0);\">";
                // line 26
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                        </ul>
                    </div>
                    <div class=\"header-search-frame\">
                        <input type=\"hidden\" name=\"from\" id=\"search-bar-from\" value=\"\"/>
                        <input type=\"text\" id=\"search-bar-search\" class=\"span2 search\" placeholder=\"\" name=\"search\" value=\"\" autocomplete=\"off\"/>
                        <button type=\"submit\" class=\"btn btn-search btn-primary\">";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Go", array(), "messages");
            echo "</button>
                        <div class=\"custom-dropdown\" id=\"search-dropdown\"></div>
                        <div class=\"search-more hide\"><a href=\"javascript:void(0);\" class=\"search-view-more-link\">";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("View more...", array(), "messages");
            echo "</a></div>
                    </div>
                </div>
            </form>
        </li>
    </ul>
</div>
<script type=\"text/javascript\">
    require(['orosearch/js/init-search-bar'])
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroSearchBundle:Search:searchBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  101 => 34,  94 => 29,  85 => 26,  80 => 25,  76 => 24,  73 => 23,  67 => 22,  64 => 21,  61 => 20,  56 => 19,  54 => 18,  49 => 16,  41 => 11,  34 => 7,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSearchBundle:Search:searchBar.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/SearchBundle/Resources/views/Search/searchBar.html.twig");
    }
}
