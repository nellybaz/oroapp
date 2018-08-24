<?php

/* OroUIBundle::tab_panel.html.twig */
class __TwigTemplate_87955ea8dc5e12986acfabcd1435efb6ad284da149449e13c8a003972561ba17 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle::tab_panel.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["options"] = twig_array_merge(array("useDropdown" => false, "verticalTabs" => false, "subtitle" => false), ((        // line 7
array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), array())) : (array())));
        // line 8
        echo "
";
        // line 9
        $context["containerAlias"] = "tab";
        // line 10
        $context["activeTabAlias"] = null;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 12
            echo "    ";
            $context["containerAlias"] = ((($context["containerAlias"] ?? null) . "-") . $this->getAttribute($context["tab"], "alias", array()));
            // line 13
            echo "    ";
            if (($this->getAttribute(($context["options"] ?? null), "activeTabAlias", array(), "any", true, true) && ($this->getAttribute(($context["options"] ?? null), "activeTabAlias", array()) == $this->getAttribute($context["tab"], "alias", array())))) {
                // line 14
                echo "        ";
                $context["activeTabAlias"] = $this->getAttribute(($context["options"] ?? null), "activeTabAlias", array());
                // line 15
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
<div class=\"oro-tabs";
        // line 18
        echo (($this->getAttribute(($context["options"] ?? null), "verticalTabs", array())) ? (" oro-tabs__vertical") : (""));
        echo "\"
     data-page-component-module=\"oroui/js/app/components/tabs-component\"
     data-page-component-options=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 21
        if ($this->getAttribute(($context["options"] ?? null), "subtitle", array())) {
            // line 22
            echo "        <div class=\"tabs-subtitle\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "subtitle", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 24
        echo "    <ul class=\"nav nav-tabs";
        echo (($this->getAttribute(($context["options"] ?? null), "useDropdown", array())) ? (" nav-tabs-dropdown") : (""));
        echo "\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 26
            echo "            ";
            $context["isActiveTab"] = ((($context["activeTabAlias"] ?? null)) ? ((($context["activeTabAlias"] ?? null) == $this->getAttribute($context["tab"], "alias", array()))) : (($this->getAttribute($context["loop"], "index", array()) == 1)));
            // line 27
            echo "            <li class=\"tab ";
            if (($context["isActiveTab"] ?? null)) {
                echo " active";
            }
            echo "\">
                ";
            // line 28
            $context["widgetOptions"] = array("type" => (($this->getAttribute(            // line 29
$context["tab"], "widgetType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "widgetType", array()), "block")) : ("block")), "event" => "shown.bs.tab", "multiple" => false, "options" => array("container" => ("#" . $this->getAttribute(            // line 33
$context["tab"], "alias", array())), "loadingElement" => ("#" .             // line 34
($context["containerAlias"] ?? null)), "alias" => $this->getAttribute(            // line 35
$context["tab"], "alias", array())));
            // line 38
            echo "
                ";
            // line 39
            $context["dataAttributes"] = array("target" => ("#" . $this->getAttribute(            // line 40
$context["tab"], "alias", array())), "toggle" => "tab", "url" => $this->getAttribute(            // line 42
$context["tab"], "url", array()));
            // line 44
            echo "
                ";
            // line 45
            if (((($this->getAttribute($context["tab"], "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "content", array()), "")) : ("")) || ($context["isActiveTab"] ?? null))) {
                // line 46
                echo "                    ";
                $context["widgetOptions"] = twig_array_merge(($context["widgetOptions"] ?? null), array("initialized" => true));
                // line 47
                echo "                ";
            }
            // line 48
            echo "
                ";
            // line 49
            $context["tabOptions"] = twig_array_merge($context["tab"], array("widget" =>             // line 50
($context["widgetOptions"] ?? null), "dataAttributes" =>             // line 51
($context["dataAttributes"] ?? null), "label" => $this->getAttribute(            // line 52
$context["tab"], "label", array())));
            // line 54
            echo "
                ";
            // line 55
            echo $context["UI"]->getclientLink(($context["tabOptions"] ?? null));
            echo "
            </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        if ($this->getAttribute(($context["options"] ?? null), "useDropdown", array())) {
            // line 59
            echo "            <li class=\"dropdown\" style=\"display: none\">
                <a href=\"#\" id=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["containerAlias"] ?? null), "html", null, true);
            echo "-dropdown\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <span>";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View more..."), "html", null, true);
            echo "</span> <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu pull-right\" role=\"menu\" aria-labelledby=\"";
            // line 63
            echo twig_escape_filter($this->env, ($context["containerAlias"] ?? null), "html", null, true);
            echo "-dropdown\"></ul>
            </li>
        ";
        }
        // line 66
        echo "    </ul>

    <div class=\"tab-content\" id=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["containerAlias"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 70
            echo "            ";
            $context["isActiveTab"] = ((($context["activeTabAlias"] ?? null)) ? ((($context["activeTabAlias"] ?? null) == $this->getAttribute($context["tab"], "alias", array()))) : (($this->getAttribute($context["loop"], "index", array()) == 1)));
            // line 71
            echo "            <div class=\"tab-pane";
            if (($context["isActiveTab"] ?? null)) {
                echo " active";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "alias", array()), "html", null, true);
            echo "\">
                ";
            // line 72
            if ((($this->getAttribute($context["tab"], "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "content", array()), "")) : (""))) {
                // line 73
                echo "                    ";
                echo $this->getAttribute($context["tab"], "content", array());
                echo "
                ";
            } elseif (            // line 74
($context["isActiveTab"] ?? null)) {
                // line 75
                echo "                    ";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, $context["tab"]);
                echo "
                ";
            }
            // line 77
            echo "            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle::tab_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 79,  231 => 77,  225 => 75,  223 => 74,  218 => 73,  216 => 72,  207 => 71,  204 => 70,  187 => 69,  183 => 68,  179 => 66,  173 => 63,  168 => 61,  164 => 60,  161 => 59,  158 => 58,  141 => 55,  138 => 54,  136 => 52,  135 => 51,  134 => 50,  133 => 49,  130 => 48,  127 => 47,  124 => 46,  122 => 45,  119 => 44,  117 => 42,  116 => 40,  115 => 39,  112 => 38,  110 => 35,  109 => 34,  108 => 33,  107 => 29,  106 => 28,  99 => 27,  96 => 26,  79 => 25,  74 => 24,  68 => 22,  66 => 21,  62 => 20,  57 => 18,  54 => 17,  47 => 15,  44 => 14,  41 => 13,  38 => 12,  34 => 11,  32 => 10,  30 => 9,  27 => 8,  25 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle::tab_panel.html.twig", "");
    }
}
