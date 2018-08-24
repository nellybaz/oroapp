<?php

/* OroEntityPaginationBundle:Placeholder:entityPagination.html.twig */
class __TwigTemplate_97d03b3f8e2e82310f6fa8665aa311cd783e00717044e76c889b41631fc21757 extends Twig_Template
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
        $context["first_route"] = ((array_key_exists("first_route", $context)) ? (_twig_default_filter(($context["first_route"] ?? null), "oro_entity_pagination_first")) : ("oro_entity_pagination_first"));
        // line 2
        $context["previous_route"] = ((array_key_exists("previous_route", $context)) ? (_twig_default_filter(($context["previous_route"] ?? null), "oro_entity_pagination_previous")) : ("oro_entity_pagination_previous"));
        // line 3
        $context["next_route"] = ((array_key_exists("next_route", $context)) ? (_twig_default_filter(($context["next_route"] ?? null), "oro_entity_pagination_next")) : ("oro_entity_pagination_next"));
        // line 4
        $context["last_route"] = ((array_key_exists("last_route", $context)) ? (_twig_default_filter(($context["last_route"] ?? null), "oro_entity_pagination_last")) : ("oro_entity_pagination_last"));
        // line 5
        echo "
";
        // line 6
        if ((array_key_exists("entity", $context) && ($context["entity"] ?? null))) {
            // line 7
            echo "    ";
            $context["isDataCollected"] = $this->env->getExtension('Oro\Bundle\EntityPaginationBundle\Twig\EntityPaginationExtension')->collectData(($context["scope"] ?? null));
            // line 8
            echo "    ";
            $context["pager"] = $this->env->getExtension('Oro\Bundle\EntityPaginationBundle\Twig\EntityPaginationExtension')->getPager(($context["entity"] ?? null), ($context["scope"] ?? null));
            // line 9
            echo "
    ";
            // line 10
            if ((($context["isDataCollected"] ?? null) && ($context["pager"] ?? null))) {
                // line 11
                echo "        ";
                $context["infoMessageShown"] = $this->env->getExtension('Oro\Bundle\EntityPaginationBundle\Twig\EntityPaginationExtension')->showInfoMessage(($context["entity"] ?? null), ($context["scope"] ?? null));
                // line 12
                echo "        ";
                $context["currentRoute"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
                // line 13
                echo "        ";
                $context["currentParams"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
                // line 14
                echo "        ";
                $context["queryParams"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "all", array());
                // line 15
                echo "        ";
                $context["allParams"] = array("_entityName" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["entity"] ?? null), true), "_scope" => ($context["scope"] ?? null), "_routeName" => ($context["currentRoute"] ?? null));
                // line 16
                echo "        ";
                $context["allParams"] = twig_array_merge(($context["allParams"] ?? null), ($context["currentParams"] ?? null));
                // line 17
                echo "        ";
                $context["allParams"] = twig_array_merge(($context["allParams"] ?? null), ($context["queryParams"] ?? null));
                // line 18
                echo "
        ";
                // line 19
                $context["componentName"] = "oroui/js/app/components/hidden-redirect-component";
                // line 20
                echo "        ";
                $context["componentOptions"] = array("type" => "warning");
                // line 21
                echo "        
        <div id=\"entity-pagination\">
            <div class=\"pagination\">
                <ul class=\"icons-holder\">
                    <li ";
                // line 25
                if (($this->getAttribute(($context["pager"] ?? null), "current", array()) == 1)) {
                    echo " class=\"disabled\" ";
                }
                echo ">
                        <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["first_route"] ?? null), ($context["allParams"] ?? null)), "html", null, true);
                echo "\"
                           data-page-component-module=\"";
                // line 27
                echo twig_escape_filter($this->env, ($context["componentName"] ?? null), "html", null, true);
                echo "\"
                           data-page-component-options=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["componentOptions"] ?? null)), "html", null, true);
                echo "\">
                            ";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_pagination.first"), "html", null, true);
                echo "
                        </a>
                    </li>
                    <li ";
                // line 32
                if (($this->getAttribute(($context["pager"] ?? null), "current", array()) == 1)) {
                    echo " class=\"disabled\" ";
                }
                echo ">
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["previous_route"] ?? null), ($context["allParams"] ?? null)), "html", null, true);
                echo "\"
                           data-page-component-module=\"";
                // line 34
                echo twig_escape_filter($this->env, ($context["componentName"] ?? null), "html", null, true);
                echo "\"
                           data-page-component-options=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["componentOptions"] ?? null)), "html", null, true);
                echo "\">
                            <i class=\"fa-chevron-left hide-text\"></i>
                        </a>
                    </li>
                    <li><div class=\"pagination-current\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "current", array()), "html", null, true);
                echo "</div></li>
                    <li ";
                // line 40
                if (($this->getAttribute(($context["pager"] ?? null), "current", array()) == $this->getAttribute(($context["pager"] ?? null), "total", array()))) {
                    echo " class=\"disabled\" ";
                }
                echo ">
                        <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["next_route"] ?? null), ($context["allParams"] ?? null)), "html", null, true);
                echo "\"
                           data-page-component-module=\"";
                // line 42
                echo twig_escape_filter($this->env, ($context["componentName"] ?? null), "html", null, true);
                echo "\"
                           data-page-component-options=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["componentOptions"] ?? null)), "html", null, true);
                echo "\">
                            <i class=\"fa-chevron-right hide-text\"></i>
                        </a>
                    </li>
                    <li ";
                // line 47
                if (($this->getAttribute(($context["pager"] ?? null), "current", array()) == $this->getAttribute(($context["pager"] ?? null), "total", array()))) {
                    echo " class=\"disabled\" ";
                }
                echo ">
                        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["last_route"] ?? null), ($context["allParams"] ?? null)), "html", null, true);
                echo "\"
                           data-page-component-module=\"";
                // line 49
                echo twig_escape_filter($this->env, ($context["componentName"] ?? null), "html", null, true);
                echo "\"
                           data-page-component-options=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["componentOptions"] ?? null)), "html", null, true);
                echo "\">
                            ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_pagination.last"), "html", null, true);
                echo "
                        </a>
                    </li>
                </ul>

                <div class=\"dib pagination-total\">
                    ";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("oro.entity_pagination.pager_of_%total%_record|pager_of_%total%_records", $this->getAttribute(($context["pager"] ?? null), "total", array()), array("%total%" => $this->getAttribute(($context["pager"] ?? null), "total", array()))), "html", null, true);
                echo "
                </div>
            </div>
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "OroEntityPaginationBundle:Placeholder:entityPagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 57,  166 => 51,  162 => 50,  158 => 49,  154 => 48,  148 => 47,  141 => 43,  137 => 42,  133 => 41,  127 => 40,  123 => 39,  116 => 35,  112 => 34,  108 => 33,  102 => 32,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  78 => 25,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  49 => 13,  46 => 12,  43 => 11,  41 => 10,  38 => 9,  35 => 8,  32 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityPaginationBundle:Placeholder:entityPagination.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityPaginationBundle/Resources/views/Placeholder/entityPagination.html.twig");
    }
}
