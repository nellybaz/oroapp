<?php

/* OroConfigBundle::macros.html.twig */
class __TwigTemplate_b9d3973a537c06e30de654005202be6bd9eecdaa01ae2ebb4f6ac466f6056fda extends Twig_Template
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
        // line 33
        echo "
";
        // line 55
        echo "
";
        // line 111
        echo "
";
        // line 182
        echo "
";
    }

    // line 4
    public function getrenderTitleAndButtons($__pageTitle__ = null, $__buttons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pageTitle" => $__pageTitle__,
            "buttons" => $__buttons__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    <div class=\"container-fluid configuration-header clearfix\">
    ";
            // line 6
            if (twig_test_iterable(($context["pageTitle"] ?? null))) {
                // line 7
                echo "        <div class=\"customer-info customer-simple pull-left\">
        ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pageTitle"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                    // line 9
                    echo "            ";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        // line 10
                        echo "            <div class=\"sub-title\">
                ";
                        // line 11
                        echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                        echo "
            </div>
            <span class=\"separator\">/</span>
            ";
                    } else {
                        // line 15
                        echo "            <h1 class=\"user-name\">";
                        echo $context["title"];
                        echo "</h1>
            ";
                    }
                    // line 17
                    echo "        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "        </div>
    ";
            } else {
                // line 20
                echo "        <h1>
            ";
                // line 21
                echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
                echo "
        </h1>
    ";
            }
            // line 24
            echo "        <div class=\"pull-right\">
            ";
            // line 25
            if (array_key_exists("buttons", $context)) {
                // line 26
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 27
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["button"], "html", null, true);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            ";
            }
            // line 30
            echo "        </div>
    </div>
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

    // line 44
    public function getrenderScrollData($__configTree__ = null, $__form__ = null, $__activeTabName__ = false, $__activeSubTabName__ = false, $__routeName__ = "oro_config_configuration_system", $__routeParameters__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "configTree" => $__configTree__,
            "form" => $__form__,
            "activeTabName" => $__activeTabName__,
            "activeSubTabName" => $__activeSubTabName__,
            "routeName" => $__routeName__,
            "routeParameters" => $__routeParameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "    ";
            echo $this->getAttribute($this, "renderConfigurationScrollData", array(0 => array("configTree" =>             // line 46
($context["configTree"] ?? null), "form" =>             // line 47
($context["form"] ?? null), "content" => array(), "activeTabName" =>             // line 49
($context["activeTabName"] ?? null), "activeSubTabName" =>             // line 50
($context["activeSubTabName"] ?? null), "routeName" =>             // line 51
($context["routeName"] ?? null), "routeParameters" =>             // line 52
($context["routeParameters"] ?? null))), "method");
            // line 53
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

    // line 56
    public function getrenderConfigurationScrollData($__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 57
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroConfigBundle::macros.html.twig", 57);
            // line 58
            echo "
    ";
            // line 59
            ob_start();
            // line 60
            echo "        <div data-page-component-view=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroui/js/app/views/highlight-text-view", "highlightSelectors" => array(0 => "div.system-configuration-content-title", 1 => "h5.user-fieldset span", 2 => "div.control-label label", 3 => "i.tooltip-icon", 4 => "div.controls > div.control-subgroup *[data-name=\"field__value\"]"), "toggleSelectors" => array("div.control-group" => "div.control-group-wrapper", "fieldset.form-horizontal" => "div.system-configuration-content-inner"), "viewGroup" => "configuration")), "html", null, true);
            // line 74
            echo "\">
            ";
            // line 75
            echo $this->getAttribute($this, "renderTabContent", array(0 => $this->getAttribute(($context["data"] ?? null), "form", array()), 1 => $this->getAttribute(($context["data"] ?? null), "content", array())), "method");
            echo "
        </div>
    ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 78
            echo "    <div class=\"system-configuration-container\">
        ";
            // line 79
            $this->loadTemplate("OroConfigBundle::macros.html.twig", "OroConfigBundle::macros.html.twig", 79, "2121782090")->display(array_merge($context, array("options" => array("scrollbar" => "[data-role=\"jstree-container\"]"))));
            // line 109
            echo "    </div>
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

    // line 117
    public function getrenderTabContent($__form__ = null, $__content__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "content" => $__content__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 118
            echo "    ";
            $context["content"] = ((array_key_exists("content", $context)) ? (_twig_default_filter(($context["content"] ?? null), array())) : (array()));
            // line 119
            echo "    ";
            $context["processForm"] = false;
            // line 120
            echo "    ";
            if ( !$this->getAttribute(($context["content"] ?? null), "formErrors", array(), "any", true, true)) {
                // line 121
                echo "        ";
                $context["content"] = twig_array_merge(($context["content"] ?? null), array("formErrors" =>                 // line 122
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')));
                // line 124
                echo "    ";
            }
            // line 125
            echo "    ";
            if ( !$this->getAttribute(($context["content"] ?? null), "dataBlocks", array(), "any", true, true)) {
                // line 126
                echo "        ";
                $context["content"] = twig_array_merge(($context["content"] ?? null), array("dataBlocks" => $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormDataBlocks($this->env, $context,                 // line 127
($context["form"] ?? null))));
                // line 129
                echo "        ";
                $context["processForm"] = true;
                // line 130
                echo "    ";
            }
            // line 131
            echo "    ";
            if ( !$this->getAttribute(($context["content"] ?? null), "hiddenData", array(), "any", true, true)) {
                // line 132
                echo "        ";
                $context["content"] = twig_array_merge(($context["content"] ?? null), array("hiddenData" =>                 // line 133
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest')));
                // line 135
                echo "    ";
            }
            // line 136
            echo "    ";
            if (($context["processForm"] ?? null)) {
                // line 137
                echo "        ";
                $context["content"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->processForm($this->env, ($context["content"] ?? null), ($context["form"] ?? null));
                // line 138
                echo "    ";
            }
            // line 139
            echo "
    <div class=\"placeholder\">
        <div class=\"scrollable-container\">
            <div class=\"system-configuration-content content form-container\" id=\"configuration-options-block\">
                <div class=\"pull-right\">
                    <input type=\"hidden\" name=\"input_action\" value=\"\" data-form-id=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\"/>
                </div>
                ";
            // line 146
            if (($this->getAttribute(($context["content"] ?? null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute(($context["content"] ?? null), "formErrors", array())))) {
                // line 147
                echo "                    <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                        <div class=\"alert alert-error\">
                            <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                            ";
                // line 150
                echo $this->getAttribute(($context["content"] ?? null), "formErrors", array());
                echo "
                        </div>
                    </div>
                ";
            }
            // line 154
            echo "
                ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "dataBlocks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 156
                echo "                <div class=\"system-configuration-content-wrapper\">
                    <div class=\"system-configuration-content-title\">
                        ";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["scrollBlock"], "title", array())), "html", null, true);
                echo "
                    </div>
                    <div class=\"system-configuration-content-inner\">
                        ";
                // line 161
                if (($this->getAttribute($context["scrollBlock"], "description", array(), "any", true, true) && ($this->getAttribute($context["scrollBlock"], "description", array()) != ""))) {
                    // line 162
                    echo "                            <p>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["scrollBlock"], "description", array())), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 164
                echo "
                        ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["scrollBlock"], "subblocks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                    // line 166
                    echo "                            ";
                    if (twig_test_iterable($context["subblock"])) {
                        // line 167
                        echo "                                ";
                        echo $this->getAttribute($this, "renderFieldset", array(0 => $context["subblock"]), "method");
                        echo "
                            ";
                    } else {
                        // line 169
                        echo "                                ";
                        echo $context["subblock"];
                        echo "
                            ";
                    }
                    // line 171
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                <div class=\"hide\">
                    ";
            // line 176
            echo $this->getAttribute(($context["content"] ?? null), "hiddenData", array());
            echo "
                </div>
            </div>
        </div>
    </div>
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

    // line 191
    public function getrenderFieldset($__block__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "block" => $__block__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 192
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroConfigBundle::macros.html.twig", 192);
            // line 193
            echo "    <fieldset class=\"form-horizontal form-horizontal-large\">
        ";
            // line 194
            if ($this->getAttribute(($context["block"] ?? null), "title", array(), "any", true, true)) {
                // line 195
                echo "        <h5 class=\"user-fieldset\">
            <span>";
                // line 196
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["block"] ?? null), "title", array())), "html", null, true);
                echo "</span>
            ";
                // line 197
                if (($this->getAttribute(($context["block"] ?? null), "tooltip", array(), "any", true, true) && ($this->getAttribute(($context["block"] ?? null), "tooltip", array()) != ""))) {
                    // line 198
                    echo "                <label class=\"control-label header-tooltips\">";
                    echo $context["ui"]->gettooltip($this->getAttribute(($context["block"] ?? null), "tooltip", array()), array(), "right");
                    echo "</label>
            ";
                }
                // line 200
                echo "        </h5>
        ";
            }
            // line 202
            echo "
        ";
            // line 203
            if (($this->getAttribute(($context["block"] ?? null), "description", array(), "any", true, true) && ($this->getAttribute(($context["block"] ?? null), "description", array()) != ""))) {
                // line 204
                echo "            <div class=\"container-fluid\">
                <p>";
                // line 205
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["block"] ?? null), "description", array())), "html", null, true);
                echo "</p>
            </div>
        ";
            }
            // line 208
            echo "
        <div class=\"control-group-wrapper\">
            ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["block"] ?? null), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 211
                echo "                ";
                echo $context["dataBlock"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "        </div>
    </fieldset>
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
        return "OroConfigBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 213,  484 => 211,  480 => 210,  476 => 208,  470 => 205,  467 => 204,  465 => 203,  462 => 202,  458 => 200,  452 => 198,  450 => 197,  446 => 196,  443 => 195,  441 => 194,  438 => 193,  435 => 192,  423 => 191,  402 => 176,  399 => 175,  391 => 172,  385 => 171,  379 => 169,  373 => 167,  370 => 166,  366 => 165,  363 => 164,  357 => 162,  355 => 161,  349 => 158,  345 => 156,  341 => 155,  338 => 154,  331 => 150,  326 => 147,  324 => 146,  319 => 144,  312 => 139,  309 => 138,  306 => 137,  303 => 136,  300 => 135,  298 => 133,  296 => 132,  293 => 131,  290 => 130,  287 => 129,  285 => 127,  283 => 126,  280 => 125,  277 => 124,  275 => 122,  273 => 121,  270 => 120,  267 => 119,  264 => 118,  251 => 117,  235 => 109,  233 => 79,  230 => 78,  224 => 75,  221 => 74,  218 => 60,  216 => 59,  213 => 58,  210 => 57,  198 => 56,  182 => 53,  180 => 52,  179 => 51,  178 => 50,  177 => 49,  176 => 47,  175 => 46,  173 => 45,  156 => 44,  139 => 30,  136 => 29,  127 => 27,  122 => 26,  120 => 25,  117 => 24,  111 => 21,  108 => 20,  104 => 18,  90 => 17,  84 => 15,  77 => 11,  74 => 10,  71 => 9,  54 => 8,  51 => 7,  49 => 6,  46 => 5,  33 => 4,  28 => 182,  25 => 111,  22 => 55,  19 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroConfigBundle::macros.html.twig", "");
    }
}


/* OroConfigBundle::macros.html.twig */
class __TwigTemplate_b9d3973a537c06e30de654005202be6bd9eecdaa01ae2ebb4f6ac466f6056fda_2121782090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 79
        $this->parent = $this->loadTemplate("OroUIBundle::content_sidebar.html.twig", "OroConfigBundle::macros.html.twig", 79);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle::content_sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 82
    public function block_header($context, array $blocks = array())
    {
        // line 83
        echo "                <div id=\"system-configuration-jstree-inline-actions\"></div>
            ";
    }

    // line 85
    public function block_sidebar($context, array $blocks = array())
    {
        // line 86
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderJsTree", array(0 => array("label" => null, "treeOptions" => array("data" => $this->getAttribute(        // line 89
($context["data"] ?? null), "configTree", array()), "viewGroup" => "configuration", "nodeId" => $this->getAttribute(        // line 91
($context["data"] ?? null), "activeSubTabName", array()), "onSelectRoute" => $this->getAttribute(        // line 92
($context["data"] ?? null), "routeName", array()), "onSelectRouteParameters" => $this->getAttribute(        // line 93
($context["data"] ?? null), "routeParameters", array()), "view" => "oroconfig/js/app/views/configuration-tree-view"), "actionsOptions" => array("inlineActionsCount" => 2, "inlineActionsElement" => "#system-configuration-jstree-inline-actions"))), "method"), "html", null, true);
        // line 100
        echo "
            ";
    }

    // line 103
    public function block_content($context, array $blocks = array())
    {
        // line 104
        echo "                ";
        // line 105
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "
                ";
        // line 107
        echo "            ";
    }

    public function getTemplateName()
    {
        return "OroConfigBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 107,  594 => 105,  592 => 104,  589 => 103,  584 => 100,  582 => 93,  581 => 92,  580 => 91,  579 => 89,  577 => 86,  574 => 85,  569 => 83,  566 => 82,  547 => 79,  493 => 213,  484 => 211,  480 => 210,  476 => 208,  470 => 205,  467 => 204,  465 => 203,  462 => 202,  458 => 200,  452 => 198,  450 => 197,  446 => 196,  443 => 195,  441 => 194,  438 => 193,  435 => 192,  423 => 191,  402 => 176,  399 => 175,  391 => 172,  385 => 171,  379 => 169,  373 => 167,  370 => 166,  366 => 165,  363 => 164,  357 => 162,  355 => 161,  349 => 158,  345 => 156,  341 => 155,  338 => 154,  331 => 150,  326 => 147,  324 => 146,  319 => 144,  312 => 139,  309 => 138,  306 => 137,  303 => 136,  300 => 135,  298 => 133,  296 => 132,  293 => 131,  290 => 130,  287 => 129,  285 => 127,  283 => 126,  280 => 125,  277 => 124,  275 => 122,  273 => 121,  270 => 120,  267 => 119,  264 => 118,  251 => 117,  235 => 109,  233 => 79,  230 => 78,  224 => 75,  221 => 74,  218 => 60,  216 => 59,  213 => 58,  210 => 57,  198 => 56,  182 => 53,  180 => 52,  179 => 51,  178 => 50,  177 => 49,  176 => 47,  175 => 46,  173 => 45,  156 => 44,  139 => 30,  136 => 29,  127 => 27,  122 => 26,  120 => 25,  117 => 24,  111 => 21,  108 => 20,  104 => 18,  90 => 17,  84 => 15,  77 => 11,  74 => 10,  71 => 9,  54 => 8,  51 => 7,  49 => 6,  46 => 5,  33 => 4,  28 => 182,  25 => 111,  22 => 55,  19 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroConfigBundle::macros.html.twig", "");
    }
}
