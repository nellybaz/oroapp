<?php

/* OroFrontendBundle:layouts/blank:layout.html.twig */
class __TwigTemplate_d2f2d2d46b8f024d99812ab9dd0cdb5172b522ee7273e0ff39ba794293eb9ca1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block_attributes_underscore' => array($this, 'block_block_attributes_underscore'),
            'action_line_buttons_widget' => array($this, 'block_action_line_buttons_widget'),
            'action_combined_buttons_widget' => array($this, 'block_action_combined_buttons_widget'),
            'line_buttons_widget' => array($this, 'block_line_buttons_widget'),
            'combined_buttons_widget' => array($this, 'block_combined_buttons_widget'),
            'icon_block' => array($this, 'block_icon_block'),
            'back_link_widget' => array($this, 'block_back_link_widget'),
            'embedded_list_widget' => array($this, 'block_embedded_list_widget'),
            'attribute_file_widget' => array($this, 'block_attribute_file_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('block_attributes_underscore', $context, $blocks);
        // line 5
        echo "
";
        // line 7
        $this->displayBlock('action_line_buttons_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('action_combined_buttons_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 71
        $this->displayBlock('line_buttons_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('combined_buttons_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('icon_block', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('back_link_widget', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('embedded_list_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('attribute_file_widget', $context, $blocks);
    }

    // line 1
    public function block_block_attributes_underscore($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["utils"] = $this->loadTemplate("OroFrontendBundle:layouts/blank:utils.html.twig", "OroFrontendBundle:layouts/blank:layout.html.twig", 2);
        // line 3
        echo "    ";
        echo $context["utils"]->getunderscoreRaw(        $this->renderBlock("block_attributes_base", $context, $blocks));
    }

    // line 7
    public function block_action_line_buttons_widget($context, array $blocks = array())
    {
        // line 8
        echo "    <ul";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 10
            echo "            <li>
                <a>
                    ";
            // line 12
            if ( !twig_test_empty($this->getAttribute($context["action"], "icon", array()))) {
                // line 13
                echo "                        <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["action"], "buttonOptions", array(), "any", false, true), "iCss", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["action"], "buttonOptions", array(), "any", false, true), "iCss", array()), "")) : ("")), "html", null, true);
                echo "\"></i>
                    ";
            }
            // line 15
            echo "                    ";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($context["action"], "label", array())), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>
";
    }

    // line 22
    public function block_action_combined_buttons_widget($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["actionsCount"] = twig_length_filter($this->env, ($context["actions"] ?? null));
        // line 24
        echo "    ";
        if ((($context["actionsCount"] ?? null) > 0)) {
            // line 25
            echo "        ";
            $context["hasVariants"] = (($context["actionsCount"] ?? null) > 1);
            // line 26
            echo "        ";
            $context["additionalCss"] = "btn";
            // line 27
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["block"] ?? null), "parent", array()), "vars", array()), "class_prefix", array()) == "datagrid_toolbar_button_container")) {
                // line 28
                echo "            ";
                $context["additionalCss"] = (($context["additionalCss"] ?? null) . " btn--info ");
                // line 29
                echo "        ";
            } else {
                // line 30
                echo "            ";
                $context["additionalCss"] = (($context["additionalCss"] ?? null) . " btn");
                // line 31
                echo "        ";
            }
            // line 32
            echo "        ";
            if (($context["hasVariants"] ?? null)) {
                // line 33
                echo "            ";
                $context["additionalCss"] = " btn-group full";
                // line 34
                echo "        ";
            }
            // line 35
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . ($context["additionalCss"] ?? null))));
            // line 36
            echo "
        ";
            // line 37
            $context["action"] = twig_first($this->env, ($context["actions"] ?? null));
            // line 38
            echo "        ";
            $context["primaryButtonCss"] = (((" btn btn--action btn--size-s direct-link " . (($this->getAttribute($this->getAttribute(($context["action"] ?? null), "buttonOptions", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["action"] ?? null), "buttonOptions", array(), "any", false, true), "class", array()), "")) : (""))) . " ") . (($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "aCss", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "aCss", array()), "")) : ("")));
            // line 39
            echo "
        ";
            // line 40
            if (($context["hasVariants"] ?? null)) {
                // line 41
                echo "            ";
                $context["dropdownMenuOptions"] = array("align" => "right", "attachToParent" => true);
                // line 45
                echo "
            <div";
                // line 46
                $this->displayBlock("block_attributes", $context, $blocks);
                echo ">
                <a class=\"btn btn--info btn--size-l\">
                    ";
                // line 48
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["action"] ?? null), "label", array())), "html", null, true);
                echo "
                </a>
                <a class=\"btn btn--info btn--size-l dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"></a>
                <ul class=\"dropdown-menu\" data-options=";
                // line 51
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dropdownMenuOptions"] ?? null)), "html", null, true);
                echo ">
                    ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["actions"] ?? null), 1));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 53
                    echo "                    <li>
                        <a class=\"dropdown-item\">
                            ";
                    // line 55
                    echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($context["action"], "label", array())), "html", null, true);
                    echo "
                        </a>
                    </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                </ul>
            </div>
        ";
            } else {
                // line 62
                echo "            <a>
                ";
                // line 63
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["action"] ?? null), "label", array())), "html", null, true);
                echo "
            </a>
        ";
            }
            // line 66
            echo "
    ";
        }
    }

    // line 71
    public function block_line_buttons_widget($context, array $blocks = array())
    {
        // line 72
        echo "    <ul";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 74
            echo "            <li>
                ";
            // line 75
            $this->loadTemplate($this->getAttribute($context["button"], "template", array()), "OroFrontendBundle:layouts/blank:layout.html.twig", 75)->display(array_merge($context, twig_array_merge($this->getAttribute($context["button"], "templateData", array()), array("onlyLink" => true, "noIconText" => true))));
            // line 76
            echo "            </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </ul>
";
    }

    // line 81
    public function block_combined_buttons_widget($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        $context["dropdownActionClass"] = ((array_key_exists("dropdownActionClass", $context)) ? (_twig_default_filter(($context["dropdownActionClass"] ?? null), "btn btn--info btn--size-l direct-link")) : ("btn btn--info btn--size-l direct-link"));
        // line 83
        echo "    ";
        $context["dropdownToggleClass"] = ((array_key_exists("dropdownToggleClass", $context)) ? (_twig_default_filter(($context["dropdownToggleClass"] ?? null), "btn btn--info btn--size-l dropdown-toggle")) : ("btn btn--info btn--size-l dropdown-toggle"));
        // line 84
        echo "    ";
        $context["dropdownItemClass"] = ((array_key_exists("dropdownItemClass", $context)) ? (_twig_default_filter(($context["dropdownItemClass"] ?? null), "dropdown-item")) : ("dropdown-item"));
        // line 85
        echo "    ";
        $context["actionButtonClass"] = ((array_key_exists("actionButtonClass", $context)) ? (_twig_default_filter(($context["actionButtonClass"] ?? null), "btn btn--action btn--size-s direct-link")) : ("btn btn--action btn--size-s direct-link"));
        // line 86
        echo "
    ";
        // line 87
        $context["buttonsCount"] = twig_length_filter($this->env, ($context["buttons"] ?? null));
        // line 88
        echo "    ";
        if ((($context["buttonsCount"] ?? null) > 0)) {
            // line 89
            echo "        ";
            $context["hasVariants"] = (($context["buttonsCount"] ?? null) > 1);
            // line 90
            echo "
        ";
            // line 91
            $context["button"] = twig_first($this->env, ($context["buttons"] ?? null));
            // line 92
            echo "
        ";
            // line 93
            if (($context["hasVariants"] ?? null)) {
                // line 94
                echo "            ";
                $context["additionalCss"] = "btn";
                // line 95
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["block"] ?? null), "parent", array()), "vars", array()), "class_prefix", array()) == "datagrid_toolbar_button_container")) {
                    // line 96
                    echo "                ";
                    $context["additionalCss"] = (($context["additionalCss"] ?? null) . " btn--info ");
                    // line 97
                    echo "            ";
                }
                // line 98
                echo "            ";
                if (($context["hasVariants"] ?? null)) {
                    // line 99
                    echo "                ";
                    $context["additionalCss"] = " btn-group full ";
                    // line 100
                    echo "            ";
                }
                // line 101
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . ($context["additionalCss"] ?? null))));
                // line 102
                echo "            ";
                $context["dropdownMenuOptions"] = array("align" => "right", "attachToParent" => true);
                // line 106
                echo "
            <div";
                // line 107
                $this->displayBlock("block_attributes", $context, $blocks);
                echo ">
                ";
                // line 108
                $this->loadTemplate($this->getAttribute(($context["button"] ?? null), "template", array()), "OroFrontendBundle:layouts/blank:layout.html.twig", 108)->display(array_merge($context, twig_array_merge($this->getAttribute(($context["button"] ?? null), "templateData", array()), array("onlyLink" => true, "aClass" => ($context["dropdownActionClass"] ?? null), "noIcon" => true, "noIconText" => true))));
                // line 109
                echo "
                <a href=\"#\" class=\"";
                // line 110
                echo twig_escape_filter($this->env, ($context["dropdownToggleClass"] ?? null), "html", null, true);
                echo "\" data-toggle=\"dropdown\" data-container=\"body\" aria-haspopup=\"true\" aria-expanded=\"true\"></a>

                <ul class=\"dropdown-menu\" data-options=";
                // line 112
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dropdownMenuOptions"] ?? null)), "html", null, true);
                echo ">
                    ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["buttons"] ?? null), 1));
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
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 114
                    echo "                        <li>
                            ";
                    // line 115
                    $this->loadTemplate($this->getAttribute($context["button"], "template", array()), "OroFrontendBundle:layouts/blank:layout.html.twig", 115)->display(array_merge($context, twig_array_merge($this->getAttribute($context["button"], "templateData", array()), array("onlyLink" => true, "aClass" => ($context["dropdownItemClass"] ?? null), "noIcon" => true, "noIconText" => true))));
                    // line 116
                    echo "                        </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "                </ul>
            </div>
        ";
            } else {
                // line 121
                echo "            ";
                $this->loadTemplate($this->getAttribute(($context["button"] ?? null), "template", array()), "OroFrontendBundle:layouts/blank:layout.html.twig", 121)->display(array_merge($context, twig_array_merge($this->getAttribute(($context["button"] ?? null), "templateData", array()), array("onlyLink" => true, "aClass" => ($context["actionButtonClass"] ?? null), "noIcon" => true, "noIconText" => true))));
                // line 122
                echo "        ";
            }
            // line 123
            echo "    ";
        }
    }

    // line 126
    public function block_icon_block($context, array $blocks = array())
    {
        // line 127
        echo "<i class=\"fa-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        if (array_key_exists("icon_class", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["icon_class"] ?? null), "html", null, true);
        }
        echo "\"></i>";
    }

    // line 130
    public function block_back_link_widget($context, array $blocks = array())
    {
        // line 131
        echo "    <div class=\"order-builder-clear-btn\">
        ";
        // line 132
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 136
    public function block_embedded_list_widget($context, array $blocks = array())
    {
        // line 137
        echo "    <div class=\"embedded-list\"
        ";
        // line 138
        if (($context["use_footer_align"] ?? null)) {
            // line 139
            echo "            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
            // line 140
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["footer_align_component_options"] ?? null)), "html", null, true);
            echo "\"
        ";
        }
        // line 142
        echo "    >
        ";
        // line 143
        if (($context["use_slider"] ?? null)) {
            // line 144
            echo "            ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "orofrontend/js/app/components/list-slider-component", "~data-page-component-options" =>             // line 146
($context["slider_options"] ?? null), "~class" => " embedded-list__slider"));
            // line 149
            echo "        ";
        } else {
            // line 150
            echo "            ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " embedded-list__tiles "));
            // line 153
            echo "        ";
        }
        // line 154
        echo "
        ";
        // line 155
        if (array_key_exists("label", $context)) {
            // line 156
            echo "            <h2 class=\"embedded-list__label\">
                <span class=\"embedded-list__label-inner\">";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
            echo "</span>
            </h2>
        ";
        }
        // line 160
        echo "
        <div ";
        // line 161
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
            ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 163
            echo "                <div class=\"embedded-list__item ";
            echo twig_escape_filter($this->env, ($context["item_extra_class"] ?? null), "html", null, true);
            echo "\">
                    ";
            // line 164
            $context["context"] = array(            // line 165
($context["item_key"] ?? null) => $context["item"]);
            // line 167
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items_data"] ?? null));
            foreach ($context['_seq'] as $context["dataKey"] => $context["dataValue"]) {
                // line 168
                echo "                        ";
                $context["context"] = twig_array_merge(($context["context"] ?? null), array(                // line 169
$context["dataKey"] => (($this->getAttribute($context["dataValue"], $this->getAttribute($context["item"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["dataValue"], $this->getAttribute($context["item"], "id", array()), array(), "array"), null)) : (null))));
                // line 171
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['dataValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "                    ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), ($context["context"] ?? null));
            // line 173
            echo "                    ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "        </div>
    </div>
";
    }

    // line 180
    public function block_attribute_file_widget($context, array $blocks = array())
    {
        // line 181
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\FrontendBundle\Twig\FileExtension')->getFileView($this->env, ($context["entity"] ?? null), ($context["fieldName"] ?? null), ($context["value"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  577 => 181,  574 => 180,  568 => 176,  550 => 173,  547 => 172,  541 => 171,  539 => 169,  537 => 168,  532 => 167,  530 => 165,  529 => 164,  524 => 163,  507 => 162,  503 => 161,  500 => 160,  494 => 157,  491 => 156,  489 => 155,  486 => 154,  483 => 153,  480 => 150,  477 => 149,  475 => 146,  473 => 144,  471 => 143,  468 => 142,  463 => 140,  460 => 139,  458 => 138,  455 => 137,  452 => 136,  445 => 132,  442 => 131,  439 => 130,  429 => 127,  426 => 126,  421 => 123,  418 => 122,  415 => 121,  410 => 118,  395 => 116,  393 => 115,  390 => 114,  373 => 113,  369 => 112,  364 => 110,  361 => 109,  359 => 108,  355 => 107,  352 => 106,  349 => 102,  346 => 101,  343 => 100,  340 => 99,  337 => 98,  334 => 97,  331 => 96,  328 => 95,  325 => 94,  323 => 93,  320 => 92,  318 => 91,  315 => 90,  312 => 89,  309 => 88,  307 => 87,  304 => 86,  301 => 85,  298 => 84,  295 => 83,  292 => 82,  289 => 81,  284 => 78,  269 => 76,  267 => 75,  264 => 74,  247 => 73,  242 => 72,  239 => 71,  233 => 66,  227 => 63,  224 => 62,  219 => 59,  209 => 55,  205 => 53,  201 => 52,  197 => 51,  191 => 48,  186 => 46,  183 => 45,  180 => 41,  178 => 40,  175 => 39,  172 => 38,  170 => 37,  167 => 36,  164 => 35,  161 => 34,  158 => 33,  155 => 32,  152 => 31,  149 => 30,  146 => 29,  143 => 28,  140 => 27,  137 => 26,  134 => 25,  131 => 24,  128 => 23,  125 => 22,  120 => 19,  109 => 15,  101 => 13,  99 => 12,  95 => 10,  91 => 9,  86 => 8,  83 => 7,  78 => 3,  75 => 2,  72 => 1,  68 => 180,  65 => 179,  63 => 136,  60 => 135,  58 => 130,  55 => 129,  53 => 126,  50 => 125,  48 => 81,  45 => 80,  43 => 71,  40 => 69,  38 => 22,  35 => 21,  33 => 7,  30 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank:layout.html.twig", "");
    }
}
