<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig */
class __TwigTemplate_4a524066a46c127304b8495ffb6d06c4320b719383b779dbd954d100fd002ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_require_js_widget' => array($this, 'block__require_js_widget'),
            '_require_modules_widget' => array($this, 'block__require_modules_widget'),
            '_requirejs_scripts_widget' => array($this, 'block__requirejs_scripts_widget'),
            'body_widget' => array($this, 'block_body_widget'),
            '_wrapper_widget' => array($this, 'block__wrapper_widget'),
            '_page_container_widget' => array($this, 'block__page_container_widget'),
            '_page_main_widget' => array($this, 'block__page_main_widget'),
            '_page_main_content_widget' => array($this, 'block__page_main_content_widget'),
            '_page_main_header_widget' => array($this, 'block__page_main_header_widget'),
            '_page_content_widget' => array($this, 'block__page_content_widget'),
            '_page_sidebar_widget' => array($this, 'block__page_sidebar_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_require_js_widget', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_require_modules_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('_requirejs_scripts_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('body_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('_wrapper_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('_page_container_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('_page_main_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('_page_main_content_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('_page_main_header_widget', $context, $blocks);
        // line 81
        echo "

";
        // line 83
        $this->displayBlock('_page_content_widget', $context, $blocks);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('_page_sidebar_widget', $context, $blocks);
        // line 113
        echo "
";
    }

    // line 1
    public function block__require_js_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 5
    public function block__require_modules_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 9
    public function block__requirejs_scripts_widget($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("requirejs_config_extend", $context)) ? (_twig_default_filter(($context["requirejs_config_extend"] ?? null), "requirejs_config_extend")) : ("requirejs_config_extend")), array());
        $context["requirejs_config_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "    ";
        $this->loadTemplate("OroRequireJSBundle::scripts.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig", 13)->display(array_merge($context, array("compressed" =>  !$this->getAttribute(        // line 14
($context["app"] ?? null), "debug", array()), "config_extend" =>         // line 15
($context["requirejs_config_extend"] ?? null), "provider_alias" =>         // line 16
($context["provider_alias"] ?? null))));
        // line 18
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 21
    public function block_body_widget($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => ((" body " . (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) ? ("mobile") : ("desktop"))) . "-version")));
        // line 25
        echo "
    <body ";
        // line 26
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div id=\"container\" data-layout=\"separate\">
            ";
        // line 28
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </body>
";
    }

    // line 33
    public function block__wrapper_widget($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " wrapper"));
        // line 37
        echo "
    <div ";
        // line 38
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 39
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 43
    public function block__page_container_widget($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-container"));
        // line 47
        echo "
    <div ";
        // line 48
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 49
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 53
    public function block__page_main_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-main"));
        // line 57
        echo "    <main";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 58
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </main>
";
    }

    // line 62
    public function block__page_main_content_widget($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-main__content"));
        // line 66
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 67
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 71
    public function block__page_main_header_widget($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        if (($this->getAttribute(($context["block"] ?? null), "count", array()) > 0)) {
            // line 73
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-main__header"));
            // line 76
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 77
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </div>
    ";
        }
    }

    // line 83
    public function block__page_content_widget($context, array $blocks = array())
    {
        // line 84
        echo "    ";
        $context["visibleSidebarChildren"] = array();
        // line 85
        echo "    ";
        if ($this->getAttribute(($context["blocks"] ?? null), "page_sidebar", array(), "any", true, true)) {
            // line 86
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["blocks"] ?? null), "page_sidebar", array()), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 87
                echo "            ";
                if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                    // line 88
                    echo "                ";
                    $context["visibleSidebarChildren"] = twig_array_merge(($context["visibleSidebarChildren"] ?? null), array(0 => $context["child"]));
                    // line 89
                    echo "            ";
                }
                // line 90
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "    ";
        }
        // line 92
        echo "
    ";
        // line 93
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (" page-content" . (((twig_length_filter($this->env,         // line 94
($context["visibleSidebarChildren"] ?? null)) > 0)) ? (" page-content--has-sidebar") : ("")))));
        // line 96
        echo "
    <section ";
        // line 97
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 98
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </section>
";
    }

    // line 102
    public function block__page_sidebar_widget($context, array $blocks = array())
    {
        // line 103
        echo "    ";
        if (($this->getAttribute(($context["block"] ?? null), "count", array()) > 0)) {
            // line 104
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-sidebar"));
            // line 107
            echo "
        <aside ";
            // line 108
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 109
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </aside>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  318 => 109,  314 => 108,  311 => 107,  308 => 104,  305 => 103,  302 => 102,  295 => 98,  291 => 97,  288 => 96,  286 => 94,  285 => 93,  282 => 92,  279 => 91,  273 => 90,  270 => 89,  267 => 88,  264 => 87,  259 => 86,  256 => 85,  253 => 84,  250 => 83,  242 => 77,  237 => 76,  234 => 73,  231 => 72,  228 => 71,  221 => 67,  216 => 66,  213 => 63,  210 => 62,  203 => 58,  198 => 57,  195 => 54,  192 => 53,  185 => 49,  181 => 48,  178 => 47,  175 => 44,  172 => 43,  165 => 39,  161 => 38,  158 => 37,  155 => 34,  152 => 33,  144 => 28,  139 => 26,  136 => 25,  133 => 22,  130 => 21,  123 => 18,  121 => 16,  120 => 15,  119 => 14,  117 => 13,  114 => 11,  111 => 10,  108 => 9,  101 => 6,  98 => 5,  91 => 2,  88 => 1,  83 => 113,  81 => 102,  78 => 101,  76 => 83,  72 => 81,  70 => 71,  67 => 70,  65 => 62,  62 => 61,  60 => 53,  57 => 52,  55 => 43,  52 => 42,  50 => 33,  47 => 32,  45 => 21,  42 => 20,  40 => 9,  37 => 8,  35 => 5,  32 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig");
    }
}
