<?php

/* OroUIBundle::jstree.html.twig */
class __TwigTemplate_b540dfb418b4d7cc3cb9a6cc017edb0eaee0a5ec55ae39bd891b2fb06af4a0ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
            'search' => array($this, 'block_search'),
            'tree' => array($this, 'block_tree'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["data"] = twig_array_merge(($context["data"] ?? null), array("disableActions" => (($this->getAttribute(        // line 2
($context["data"] ?? null), "disableActions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), "disableActions", array()), false)) : (false)), "disableSearch" => (($this->getAttribute(        // line 3
($context["data"] ?? null), "disableSearch", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), "disableSearch", array()), false)) : (false)), "treeOptions" => twig_array_merge(array("view" => "oroui/js/app/views/jstree/base-tree-view"), (($this->getAttribute(        // line 6
($context["data"] ?? null), "treeOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), "treeOptions", array()), array())) : (array()))), "actionsOptions" => twig_array_merge(array("view" => "oroui/js/app/views/jstree/action-manager-view", "actions" => ((        // line 9
array_key_exists("actions", $context)) ? (_twig_default_filter(($context["actions"] ?? null), array())) : (array()))), (($this->getAttribute(        // line 10
($context["data"] ?? null), "actionsOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), "actionsOptions", array()), array())) : (array())))));
        // line 12
        echo "
<div class=\"jstree-wrapper collapse-view expanded\" data-role=\"jstree-wrapper\">
    <div data-page-component-view=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["data"] ?? null), "treeOptions", array())), "html", null, true);
        echo "\">
        <div class=\"jstree-wrapper__title\">
            ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 43
        echo "        </div>
        <div data-collapse-container>
            ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "        </div>
    </div>
</div>
";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "                ";
        $this->displayBlock('label', $context, $blocks);
        // line 35
        echo "                ";
        $this->displayBlock('actions', $context, $blocks);
        // line 42
        echo "            ";
    }

    // line 17
    public function block_label($context, array $blocks = array())
    {
        // line 18
        echo "                    ";
        if ((($this->getAttribute(($context["data"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), "label", array()), "")) : (""))) {
            // line 19
            echo "                        <span class=\"jstree-wrapper__label\">
                            <label class=\"custom-checkbox jstree-wrapper__checkbox\"
                                   data-role=\"jstree-checkall\">
                                <input class=\"custom-checkbox__input\"
                                       type=\"checkbox\"
                                       name=\"jstree-items\"
                                       data-action-type=\"checkAll\"/>
                                <span class=\"custom-checkbox__text\"></span>
                            </label>
                            <span class=\"jstree-wrapper__text\"
                                data-collapse-trigger>
                                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "label", array()), "html", null, true);
            echo "
                            </span>
                        </span>
                    ";
        }
        // line 34
        echo "                ";
    }

    // line 35
    public function block_actions($context, array $blocks = array())
    {
        // line 36
        echo "                    ";
        if ( !$this->getAttribute(($context["data"] ?? null), "disableActions", array())) {
            // line 37
            echo "                    <div class=\"jstree-actions dropdown btn-group\"
                        data-page-component-view=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["data"] ?? null), "actionsOptions", array())), "html", null, true);
            echo "\">
                    </div>
                    ";
        }
        // line 41
        echo "                ";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "                ";
        $this->displayBlock('search', $context, $blocks);
        // line 59
        echo "                ";
        $this->displayBlock('tree', $context, $blocks);
        // line 62
        echo "            ";
    }

    // line 46
    public function block_search($context, array $blocks = array())
    {
        // line 47
        echo "                    ";
        if (( !$this->getAttribute(($context["data"] ?? null), "disableSearch", array()) && (($this->getAttribute($this->getAttribute(($context["data"] ?? null), "treeOptions", array(), "any", false, true), "data", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["data"] ?? null), "treeOptions", array(), "any", false, true), "data", array()), array())) : (array())))) {
            // line 48
            echo "                    <div class=\"jstree-search-component\" data-name=\"jstree-search-component\">
                        <input type=\"search\" placeholder=\"Quick Search\" class=\"jstree-search-component__input\" data-name=\"search\"/>
                        <span data-name=\"clear-search\" class=\"jstree-search-component__clear-icon\">
                            <i class=\"fa fa-close\"></i>
                        </span>
                        <span class=\"jstree-search-component__search-icon\">
                            <i class=\"fa fa-search\"></i>
                        </span>
                    </div>
                    ";
        }
        // line 58
        echo "                ";
    }

    // line 59
    public function block_tree($context, array $blocks = array())
    {
        // line 60
        echo "                    <div data-role=\"jstree-container\" class=\"jstree-container\"></div>
                ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle::jstree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 60,  153 => 59,  149 => 58,  137 => 48,  134 => 47,  131 => 46,  127 => 62,  124 => 59,  121 => 46,  118 => 45,  114 => 41,  108 => 38,  105 => 37,  102 => 36,  99 => 35,  95 => 34,  88 => 30,  75 => 19,  72 => 18,  69 => 17,  65 => 42,  62 => 35,  59 => 17,  56 => 16,  49 => 63,  47 => 45,  43 => 43,  41 => 16,  36 => 14,  32 => 12,  30 => 10,  29 => 9,  28 => 6,  27 => 3,  26 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle::jstree.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/jstree.html.twig");
    }
}
