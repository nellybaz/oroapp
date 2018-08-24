<?php

/* OroUIBundle::macros.html.twig */
class __TwigTemplate_cdb9e42a657b606e593a2ed35751a8f8bcd5484744573d586d62886d38b6ccc1 extends Twig_Template
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
        // line 28
        echo "
";
        // line 66
        echo "
";
        // line 93
        echo "
";
        // line 108
        echo "
";
        // line 120
        echo "
";
        // line 135
        echo "
";
        // line 165
        echo "
";
        // line 181
        echo "
";
        // line 195
        echo "
";
        // line 237
        echo "
";
        // line 254
        echo "
";
        // line 286
        echo "
";
        // line 301
        echo "
";
        // line 333
        echo "
";
        // line 348
        echo "
";
        // line 361
        echo "
";
        // line 406
        echo "
";
        // line 442
        echo "
";
        // line 475
        echo "
";
        // line 521
        echo "
";
        // line 588
        echo "
";
        // line 603
        echo "
";
        // line 631
        echo "
";
        // line 640
        echo "
";
        // line 664
        echo "
";
        // line 688
        echo "
";
        // line 720
        echo "
";
        // line 740
        echo "
";
        // line 767
        echo "
";
        // line 787
        echo "
";
        // line 801
        echo "
";
        // line 841
        echo "

";
        // line 869
        echo "
";
        // line 878
        echo "
";
        // line 908
        echo "
";
        // line 947
        echo "
";
        // line 1020
        echo "
";
        // line 1049
        echo "
";
        // line 1062
        echo "
";
        // line 1154
        echo "
";
    }

    // line 1
    public function getcollection_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter($this->getAttribute(($context["widget"] ?? null), "vars", array())))) {
                // line 3
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 4
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 7
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <div data-content=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
        <div class=\"row-oro oro-multiselect-holder\">
            <div class=\"float-holder \">
                ";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                ";
            // line 14
            if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
                // line 15
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 16
                    echo "                        ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                    echo "
                        ";
                    // line 17
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                ";
            } else {
                // line 20
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
                ";
            }
            // line 22
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
            </div>
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">×</button>
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

    // line 29
    public function gettooltip($__tooltip_raw__ = null, $__tooltip_parameters__ = null, $__tooltip_placement__ = null, $__details_enabled__ = null, $__details_link__ = null, $__details_anchor__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "tooltip_raw" => $__tooltip_raw__,
            "tooltip_parameters" => $__tooltip_parameters__,
            "tooltip_placement" => $__tooltip_placement__,
            "details_enabled" => $__details_enabled__,
            "details_link" => $__details_link__,
            "details_anchor" => $__details_anchor__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    ";
            $context["tooltip_parameters"] = ((array_key_exists("tooltip_parameters", $context)) ? (_twig_default_filter(($context["tooltip_parameters"] ?? null), array())) : (array()));
            // line 31
            echo "    ";
            // line 32
            echo "    ";
            $context["tooltip"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["tooltip_raw"] ?? null), ($context["tooltip_parameters"] ?? null), "messages");
            // line 33
            echo "    ";
            if ((($context["tooltip"] ?? null) == ($context["tooltip_raw"] ?? null))) {
                // line 34
                echo "        ";
                $context["tooltip"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["tooltip_raw"] ?? null), ($context["tooltip_parameters"] ?? null), "tooltips");
                // line 35
                echo "    ";
            }
            // line 36
            echo "    ";
            if ( !twig_test_empty(($context["tooltip"] ?? null))) {
                // line 37
                echo "        ";
                $context["details_anchor"] = ((array_key_exists("details_anchor", $context)) ? (_twig_default_filter(($context["details_anchor"] ?? null), null)) : (null));
                // line 38
                echo "        ";
                $context["details_link"] = ((array_key_exists("details_link", $context)) ? (_twig_default_filter(($context["details_link"] ?? null), null)) : (null));
                // line 39
                echo "        ";
                $context["details_enabled"] = ((array_key_exists("details_enabled", $context)) ? (_twig_default_filter(($context["details_enabled"] ?? null), false)) : (false));
                // line 40
                echo "        ";
                $context["tooltip_placement"] = ((array_key_exists("tooltip_placement", $context)) ? (_twig_default_filter(($context["tooltip_placement"] ?? null), null)) : (null));
                // line 41
                echo "
        ";
                // line 43
                echo "        ";
                if (((($context["details_enabled"] ?? null) || ($context["details_anchor"] ?? null)) || ($context["details_link"] ?? null))) {
                    // line 44
                    echo "            ";
                    $context["helpLink"] = ((array_key_exists("details_link", $context)) ? (_twig_default_filter(($context["details_link"] ?? null), $this->env->getExtension('Oro\Bundle\HelpBundle\Twig\HelpExtension')->getHelpLinkUrl())) : ($this->env->getExtension('Oro\Bundle\HelpBundle\Twig\HelpExtension')->getHelpLinkUrl()));
                    // line 45
                    echo "            ";
                    if (($context["details_anchor"] ?? null)) {
                        // line 46
                        echo "                ";
                        $context["helpLink"] = ((($context["helpLink"] ?? null) . "#") . ($context["details_anchor"] ?? null));
                        // line 47
                        echo "            ";
                    }
                    // line 48
                    echo "            ";
                    $context["tooltip"] = (((((($context["tooltip"] ?? null) . "<div class=\"clearfix\"><div class=\"pull-right\"><a href=\"") .                     // line 49
($context["helpLink"] ?? null)) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.form.tooltip.read_more")) . "</a></div></div>");
                    // line 52
                    echo "        ";
                }
                // line 53
                echo "        ";
                // line 54
                echo "
        ";
                // line 55
                $context["tooltip"] = (("<div class=\"oro-popover-content\">" .                 // line 56
($context["tooltip"] ?? null)) . "</div>");
                // line 59
                echo "
        <i class=\"fa-info-circle tooltip-icon\"
           ";
                // line 61
                if (($context["tooltip_placement"] ?? null)) {
                    echo "data-placement=\"";
                    echo twig_escape_filter($this->env, ($context["tooltip_placement"] ?? null), "html", null, true);
                    echo "\"";
                }
                // line 62
                echo "           data-content=\"";
                echo twig_escape_filter($this->env, ($context["tooltip"] ?? null), "html", null, true);
                echo "\"
           data-toggle=\"popover\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 74
    public function getattibuteRow($__title__ = null, $__value__ = null, $__additionalData__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "value" => $__value__,
            "additionalData" => $__additionalData__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 75
            echo "    ";
            ob_start();
            // line 76
            echo "        <div class=\"clearfix-oro\">
            ";
            // line 77
            if ( !$this->getAttribute(($context["value"] ?? null), "value", array(), "any", true, true)) {
                // line 78
                echo "                <div class=\"control-label\">";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "</div>
            ";
            } else {
                // line 80
                echo "                <div class=\"control-label\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "value", array()), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "hint", array()), "html", null, true);
                echo "</strong></div>
            ";
            }
            // line 82
            echo "        </div>
        ";
            // line 83
            if (twig_length_filter($this->env, ($context["additionalData"] ?? null))) {
                // line 84
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["additionalData"] ?? null), "data", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 85
                    echo "                <div class=\"clearfix-oro\">
                    <div class=\"control-label\">";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], $this->getAttribute(($context["additionalData"] ?? null), "field", array())), "html", null, true);
                    echo "</div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "        ";
            }
            // line 90
            echo "    ";
            $context["attributeValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 91
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => ($context["title"] ?? null), 1 => ($context["attributeValue"] ?? null)), "method");
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

    // line 100
    public function getrenderAttribute($__title__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 101
            echo "    <div class=\"control-group attribute-row\">
        <label class=\"control-label\">";
            // line 102
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            ";
            // line 104
            echo ($context["data"] ?? null);
            echo "
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

    // line 117
    public function getrenderProperty($__title__ = null, $__data__ = null, $__entity__ = null, $__fieldName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 118
            echo "    ";
            echo $this->getAttribute($this, "renderHtmlProperty", array(0 => ($context["title"] ?? null), 1 => twig_escape_filter($this->env, ($context["data"] ?? null)), 2 => ($context["entity"] ?? null), 3 => ($context["fieldName"] ?? null)), "method");
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

    // line 129
    public function getrenderHtmlProperty($__title__ = null, $__data__ = null, $__entity__ = null, $__fieldName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 130
            echo "    ";
            if (((array_key_exists("entity", $context) && array_key_exists("fieldName", $context)) &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), ($context["fieldName"] ?? null)))) {
                // line 131
                echo "    ";
            } else {
                // line 132
                echo "        ";
                echo $this->getAttribute($this, "renderAttribute", array(0 => ($context["title"] ?? null), 1 => (("<div class=\"control-label\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty")))) . "</div>")), "method");
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 144
    public function getrenderCollapsibleHtmlProperty($__title__ = null, $__data__ = null, $__entity__ = null, $__fieldName__ = null, $__moreText__ = "Show more", $__lessText__ = "Show less", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "moreText" => $__moreText__,
            "lessText" => $__lessText__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 145
            echo "    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), ($context["fieldName"] ?? null))) {
                // line 146
                echo "        ";
                $context["collapseView"] = array("storageKey" => (("collapseBlock[" . $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(                // line 147
($context["entity"] ?? null))) . "]"), "uid" => (((("[" .                 // line 148
($context["title"] ?? null)) . "][") . $this->getAttribute(($context["entity"] ?? null), "id", array())) . "]"), "animationSpeed" => 0, "closeClass" => "overflows", "checkOverflow" => true, "open" => false);
                // line 154
                echo "        <div class=\"collapse-block\" data-page-component-collapse=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["collapseView"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 155
                echo $this->getAttribute($this, "renderAttribute", array(0 => ($context["title"] ?? null), 1 => (((((((("<div class=\"control-label\" data-collapse-container>" . ((                // line 157
array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty")))) . "</div>") . "<a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(                // line 159
($context["moreText"] ?? null))) . "</a>") . "<a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(                // line 160
($context["lessText"] ?? null))) . "</a>")), "method");
                // line 161
                echo "
        </div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 172
    public function getrenderSwitchableHtmlProperty($__title__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 173
            echo "    ";
            if ($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_form.wysiwyg_enabled")) {
                // line 174
                echo "        ";
                $context["data"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize(($context["data"] ?? null));
                // line 175
                echo "    ";
            } else {
                // line 176
                echo "        ";
                $context["data"] = nl2br(twig_escape_filter($this->env, strip_tags(($context["data"] ?? null)), "html", null, true));
                // line 177
                echo "    ";
            }
            // line 178
            echo "
    ";
            // line 179
            echo $this->getAttribute($this, "renderAttribute", array(0 => ($context["title"] ?? null), 1 => (("<div class=\"control-label html-property\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty")))) . "</div>")), "method");
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

    // line 189
    public function getrenderColorProperty($__title__ = null, $__data__ = null, $__empty__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "empty" => $__empty__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 190
            echo "    ";
            if ( !(null === ($context["data"] ?? null))) {
                // line 191
                echo "       ";
                $context["data"] = (((((("<i class=\"color hide-text\" title=\"" . ($context["data"] ?? null)) . "\" style=\"background-color: ") . ($context["data"] ?? null)) . ";\">") . ($context["data"] ?? null)) . "</i>");
                // line 192
                echo "    ";
            }
            // line 193
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => ($context["title"] ?? null), 1 => (("<div class=\"control-label\">" . _twig_default_filter(((array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? null), ($context["empty"] ?? null))) : (($context["empty"] ?? null))), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))) . "</div>")), "method");
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

    // line 208
    public function getlink($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 209
            echo "    ";
            // line 210
            echo "    ";
            $context["iconHtml"] = "";
            // line 211
            echo "    ";
            if (($this->getAttribute(($context["parameters"] ?? null), "iCss", array(), "any", true, true) && $this->getAttribute(($context["parameters"] ?? null), "iCss", array()))) {
                // line 212
                echo "        ";
                ob_start();
                // line 213
                echo "        <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "iCss", array()), "html", null, true);
                echo " hide-text\" >
            ";
                // line 214
                if ( !(($this->getAttribute(($context["parameters"] ?? null), "noIconText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "noIconText", array()), false)) : (false))) {
                    // line 215
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "label", array()), "html", null, true);
                    echo "
            ";
                }
                // line 217
                echo "        </i>
        ";
                $context["iconHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 219
                echo "    ";
            } else {
                // line 220
                echo "    ";
            }
            // line 221
            echo "    ";
            ob_start();
            // line 222
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "path", array()), "html", null, true);
            echo "\"
        ";
            // line 223
            if ($this->getAttribute(($context["parameters"] ?? null), "id", array(), "any", true, true)) {
                // line 224
                echo "            id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "id", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 226
            echo "        ";
            if ($this->getAttribute(($context["parameters"] ?? null), "data", array(), "any", true, true)) {
                // line 227
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parameters"] ?? null), "data", array()));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 228
                    echo "                data-";
                    echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                    echo "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 230
                echo "        ";
            }
            // line 231
            echo "        class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "class", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "class", array())) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "aCss", array())) : ("")), "html", null, true);
            echo "\"
        ";
            // line 232
            if ($this->getAttribute(($context["parameters"] ?? null), "title", array(), "any", true, true)) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "title", array()), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_trim_filter(($context["iconHtml"] ?? null));
            // line 233
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["parameters"] ?? null), "label", array())), "html", null, true);
            echo "
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 249
    public function getbutton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 250
            echo "    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 251
            echo $this->getAttribute($this, "link", array(0 => twig_array_merge(($context["parameters"] ?? null), array("class" => "btn back icons-holder-text"))), "method");
            echo "
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

    // line 265
    public function getdropdownButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 266
            echo "    <div class=\"btn-group\">
        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
            // line 268
            if ($this->getAttribute(($context["parameters"] ?? null), "iCss", array(), "any", true, true)) {
                // line 269
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "iCss", array()), "html", null, true);
                echo "\"></i>
            ";
            }
            // line 271
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "label", array()), "html", null, true);
            echo "
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu ";
            // line 274
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "aCss", array())) : ("")), "html", null, true);
            echo "\">
            ";
            // line 275
            if (($this->getAttribute(($context["parameters"] ?? null), "elements", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["parameters"] ?? null), "elements", array())))) {
                // line 276
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parameters"] ?? null), "elements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 277
                    echo "                    ";
                    echo $this->getAttribute($this, "dropdownItem", array(0 => $context["item"]), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 279
                echo "            ";
            }
            // line 280
            echo "            ";
            if (($this->getAttribute(($context["parameters"] ?? null), "html", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["parameters"] ?? null), "html", array())))) {
                // line 281
                echo "                ";
                echo $this->getAttribute(($context["parameters"] ?? null), "html", array());
                echo "
            ";
            }
            // line 283
            echo "        </ul>
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

    // line 298
    public function getdropdownItem($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 299
            echo "    <li>";
            echo $this->getAttribute($this, "link", array(0 => ($context["parameters"] ?? null)), "method");
            echo "</li>
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

    // line 311
    public function getpinnedDropdownButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 312
            echo "    ";
            if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() || (($this->getAttribute(($context["parameters"] ?? null), "mobileEnabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "mobileEnabled", array()), false)) : (false)))) {
                // line 313
                echo "        ";
                $context["options"] = (($this->getAttribute(($context["parameters"] ?? null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "options", array()), array())) : (array()));
                // line 314
                echo "        ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), array("widgetModule" => (($this->getAttribute(                // line 315
($context["options"] ?? null), "widgetModule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "widgetModule", array()), "oroui/js/content-processor/pinned-dropdown-button")) : ("oroui/js/content-processor/pinned-dropdown-button")), "widgetName" => (($this->getAttribute(                // line 316
($context["options"] ?? null), "widgetName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "widgetName", array()), "pinnedDropdownButtonProcessor")) : ("pinnedDropdownButtonProcessor")), "groupKey" => (($this->getAttribute(                // line 317
($context["parameters"] ?? null), "groupKey", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "groupKey", array())) : ("")), "useMainButtonsClone" => true));
                // line 320
                echo "        ";
                ob_start();
                // line 321
                echo "            <div class=\"pull-right pinned-dropdown\"
                 ";
                // line 322
                echo $this->getAttribute($this, "renderAttributes", array(0 => twig_array_merge((($this->getAttribute(($context["parameters"] ?? null), "dataAttributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "dataAttributes", array()), array())) : (array())), array("page-component-module" => "oroui/js/app/components/jquery-widget-component", "page-component-options" =>                 // line 324
($context["options"] ?? null)))), "method");
                // line 325
                echo ">
                ";
                // line 326
                echo $this->getAttribute(($context["parameters"] ?? null), "html", array());
                echo "
            </div>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 329
                echo "    ";
            } else {
                // line 330
                echo "        ";
                echo $this->getAttribute(($context["parameters"] ?? null), "html", array());
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 337
    public function getdropdownSaveButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 338
            echo "    ";
            $context["parameters"] = twig_array_merge(array("groupKey" => "saveButtons", "options" => array("moreButtonAttrs" => array("class" => "btn-success"))), ((            // line 345
array_key_exists("parameters", $context)) ? (_twig_default_filter(($context["parameters"] ?? null), array())) : (array())));
            // line 346
            echo "    ";
            echo $this->getAttribute($this, "pinnedDropdownButton", array(0 => ($context["parameters"] ?? null)), "method");
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

    // line 355
    public function getcancelButton($__path__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $__path__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 356
            echo "    ";
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 357
                echo "        ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel");
                // line 358
                echo "    ";
            }
            // line 359
            echo "    ";
            echo $this->getAttribute($this, "button", array(0 => array("path" => ($context["path"] ?? null), "title" => ($context["label"] ?? null), "label" => ($context["label"] ?? null), "data" => array("action" => "cancel"))), "method");
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

    // line 373
    public function geteditButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 374
            echo "    ";
            $context["iCss"] = array(0 => "fa-pencil-square-o");
            // line 375
            echo "    ";
            $context["aCss"] = array(0 => "edit-button", 1 => "main-group");
            // line 376
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "iCss", array(), "any", true, true)) {
                // line 377
                echo "        ";
                $context["iCss"] = twig_array_merge(twig_split_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "iCss", array()), " "), ($context["iCss"] ?? null));
                // line 378
                echo "    ";
            }
            // line 379
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) {
                // line 380
                echo "        ";
                $context["aCss"] = twig_array_merge(twig_split_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "aCss", array()), " "), ($context["aCss"] ?? null));
                // line 381
                echo "    ";
            }
            // line 382
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "title", array(), "any", true, true)) {
                // line 383
                echo "        ";
                $context["title"] = $this->getAttribute(($context["parameters"] ?? null), "title", array());
                // line 384
                echo "    ";
            } else {
                // line 385
                echo "        ";
                $context["title"] = (($this->getAttribute(($context["parameters"] ?? null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.edit_entity", array("%entityName%" => $this->getAttribute(                // line 386
($context["parameters"] ?? null), "entity_label", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.edit")));
                // line 389
                echo "    ";
            }
            // line 390
            echo "    ";
            $context["label"] = (($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true)) ? ($this->getAttribute(            // line 391
($context["parameters"] ?? null), "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.edit")));
            // line 394
            echo "    ";
            $context["parameters"] = twig_array_merge(($context["parameters"] ?? null), array("iCss" => twig_join_filter(            // line 395
($context["iCss"] ?? null), " "), "aCss" => twig_join_filter(            // line 396
($context["aCss"] ?? null), " "), "title" =>             // line 397
($context["title"] ?? null), "label" =>             // line 398
($context["label"] ?? null)));
            // line 400
            echo "
    ";
            // line 402
            echo "    ";
            $context["parameters"] = twig_array_merge(($context["parameters"] ?? null), array("path" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->addUrlQuery($this->getAttribute(($context["parameters"] ?? null), "path", array(), "array"))));
            // line 403
            echo "
    ";
            // line 404
            echo $this->getAttribute($this, "button", array(0 => ($context["parameters"] ?? null)), "method");
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

    // line 418
    public function getaddButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 419
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true)) {
                // line 420
                echo "        ";
                $context["label"] = $this->getAttribute(($context["parameters"] ?? null), "label", array());
                // line 421
                echo "    ";
            } else {
                // line 422
                echo "        ";
                $context["label"] = (($this->getAttribute(($context["parameters"] ?? null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->getAttribute(                // line 423
($context["parameters"] ?? null), "entity_label", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create")));
                // line 426
                echo "    ";
            }
            // line 427
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "title", array(), "any", true, true)) {
                // line 428
                echo "        ";
                $context["title"] = $this->getAttribute(($context["parameters"] ?? null), "title", array());
                // line 429
                echo "    ";
            } else {
                // line 430
                echo "        ";
                $context["title"] = (($this->getAttribute(($context["parameters"] ?? null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->getAttribute(                // line 431
($context["parameters"] ?? null), "entity_label", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create")));
                // line 434
                echo "    ";
            }
            // line 435
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "path", array()), "html", null, true);
            echo "\"
        class=\"btn main-group btn-primary pull-right ";
            // line 436
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "aCss", array())) : ("")), "html", null, true);
            echo "\"
        title=\"";
            // line 437
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\"
    >
        ";
            // line 439
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
    </a>
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

    // line 458
    public function getdeleteButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 459
            echo "    ";
            $context["aCss"] = "btn icons-holder-text";
            // line 460
            echo "
    ";
            // line 461
            if (($this->getAttribute(($context["parameters"] ?? null), "disabled", array(), "any", true, true) && $this->getAttribute(($context["parameters"] ?? null), "disabled", array()))) {
                // line 462
                echo "        ";
                $context["aCss"] = (($context["aCss"] ?? null) . " disabled");
                // line 463
                echo "    ";
            }
            // line 464
            echo "
    ";
            // line 465
            if ($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) {
                // line 466
                echo "        ";
                $context["aCss"] = ((($context["aCss"] ?? null) . " ") . $this->getAttribute(($context["parameters"] ?? null), "aCss", array()));
                // line 467
                echo "    ";
            }
            // line 468
            echo "
    ";
            // line 469
            $context["parameters"] = twig_array_merge(($context["parameters"] ?? null), array("aCss" => ($context["aCss"] ?? null)));
            // line 470
            echo "
    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 472
            echo $this->getAttribute($this, "deleteLink", array(0 => ($context["parameters"] ?? null)), "method");
            echo "
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

    // line 476
    public function getdeleteLink($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 477
            echo "    ";
            $context["entityLabel"] = (($this->getAttribute(($context["parameters"] ?? null), "entity_label", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "entity_label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.item")));
            // line 478
            echo "    ";
            $context["label"] = (($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete")));
            // line 479
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "title", array(), "any", true, true)) {
                // line 480
                echo "        ";
                $context["title"] = $this->getAttribute(($context["parameters"] ?? null), "title", array());
                // line 481
                echo "    ";
            } else {
                // line 482
                echo "        ";
                $context["title"] = (($this->getAttribute(($context["parameters"] ?? null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete_entity", array("%entityName%" => $this->getAttribute(                // line 483
($context["parameters"] ?? null), "entity_label", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete")));
                // line 486
                echo "    ";
            }
            // line 487
            echo "
    ";
            // line 488
            $context["message"] = (($this->getAttribute(($context["parameters"] ?? null), "dataMessage", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "dataMessage", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete_confirm", array("%entity_label%" => ($context["entityLabel"] ?? null)))));
            // line 489
            echo "    ";
            $context["successMessage"] = (($this->getAttribute(($context["parameters"] ?? null), "successMessage", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "successMessage", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete_message", array("%entity_label%" => ($context["entityLabel"] ?? null)))));
            // line 490
            echo "    ";
            $context["url"] = (($this->getAttribute(($context["parameters"] ?? null), "dataUrl", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "dataUrl", array())) : (""));
            // line 491
            echo "    ";
            $context["linkParams"] = array("data" => array("message" =>             // line 493
($context["message"] ?? null), "success-message" =>             // line 494
($context["successMessage"] ?? null), "url" =>             // line 495
($context["url"] ?? null)), "iCss" => (($this->getAttribute(            // line 497
($context["parameters"] ?? null), "iCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "iCss", array())) : ("fa-trash-o")), "aCss" => $this->getAttribute(            // line 498
($context["parameters"] ?? null), "aCss", array()), "title" =>             // line 499
($context["title"] ?? null), "label" =>             // line 500
($context["label"] ?? null), "path" => "javascript:void(0);");
            // line 503
            echo "

    ";
            // line 505
            if ($this->getAttribute(($context["parameters"] ?? null), "dataId", array(), "any", true, true)) {
                // line 506
                echo "        ";
                $context["data"] = twig_array_merge($this->getAttribute(($context["linkParams"] ?? null), "data", array()), array("id" => $this->getAttribute(($context["parameters"] ?? null), "dataId", array())));
                // line 507
                echo "        ";
                $context["linkParams"] = twig_array_merge(($context["linkParams"] ?? null), array("data" => ($context["data"] ?? null)));
                // line 508
                echo "    ";
            }
            // line 509
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "dataRedirect", array(), "any", true, true)) {
                // line 510
                echo "        ";
                $context["data"] = twig_array_merge($this->getAttribute(($context["linkParams"] ?? null), "data", array()), array("redirect" => $this->getAttribute(($context["parameters"] ?? null), "dataRedirect", array())));
                // line 511
                echo "        ";
                $context["linkParams"] = twig_array_merge(($context["linkParams"] ?? null), array("data" => ($context["data"] ?? null)));
                // line 512
                echo "    ";
            }
            // line 513
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "data", array(), "any", true, true)) {
                // line 514
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parameters"] ?? null), "data", array()));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 515
                    echo "            ";
                    $context["data"] = twig_array_merge($this->getAttribute(($context["linkParams"] ?? null), "data", array()), array($context["dataItemName"] => $context["dataItemValue"]));
                    // line 516
                    echo "            ";
                    $context["linkParams"] = twig_array_merge(($context["linkParams"] ?? null), array("data" => ($context["data"] ?? null)));
                    // line 517
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 518
                echo "    ";
            }
            // line 519
            echo "    ";
            echo $this->getAttribute($this, "link", array(0 => ($context["linkParams"] ?? null)), "method");
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

    // line 541
    public function getclientLink($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 542
            echo "    ";
            ob_start();
            // line 543
            echo "        <a href=\"javascript: void(0);\" class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "class", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "class", array())) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "aCss", array())) : ("")), "html", null, true);
            echo "\"
            title=\"";
            // line 544
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "title", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "title", array())) : ((($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "label", array())) : ("")))), "html", null, true);
            echo "\"
            ";
            // line 545
            if ($this->getAttribute(($context["parameters"] ?? null), "id", array(), "any", true, true)) {
                // line 546
                echo "                id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "id", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 548
            if ($this->getAttribute(($context["parameters"] ?? null), "dataId", array(), "any", true, true)) {
                // line 549
                echo "data-id =\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "dataId", array()), "html", null, true);
                echo "\"";
            }
            // line 551
            if ($this->getAttribute(($context["parameters"] ?? null), "dataUrlRaw", array(), "any", true, true)) {
                // line 552
                echo "data-url=\"";
                echo $this->getAttribute(($context["parameters"] ?? null), "dataUrlRaw", array());
                echo "\"
            ";
            } elseif ($this->getAttribute(            // line 553
($context["parameters"] ?? null), "dataUrl", array(), "any", true, true)) {
                // line 554
                echo "                data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "dataUrl", array()), "html", null, true);
                echo "\"";
            }
            // line 556
            if ($this->getAttribute(($context["parameters"] ?? null), "successMessage", array(), "any", true, true)) {
                // line 557
                echo "data-success-message=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "successMessage", array()), "html", null, true);
                echo "\"";
            }
            // line 559
            if ($this->getAttribute(($context["parameters"] ?? null), "dataRedirect", array(), "any", true, true)) {
                // line 560
                echo "data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "dataRedirect", array()), "html", null, true);
                echo "\"";
            }
            // line 562
            if (($this->getAttribute(($context["parameters"] ?? null), "visible", array(), "any", true, true) &&  !$this->getAttribute(($context["parameters"] ?? null), "visible", array()))) {
                // line 563
                echo "style=\"display: none\"";
            }
            // line 565
            if (($this->getAttribute(($context["parameters"] ?? null), "widget", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "widget", array())))) {
                // line 566
                $context["options"] = $this->getAttribute(($context["parameters"] ?? null), "widget", array());
                // line 567
                if ( !$this->getAttribute(($context["options"] ?? null), "createOnEvent", array(), "any", true, true)) {
                    // line 568
                    $context["options"] = twig_array_merge(($context["options"] ?? null), array("createOnEvent" => (($this->getAttribute(                    // line 569
($context["options"] ?? null), "event", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "event", array()), "click")) : ("click"))));
                }
                // line 572
                echo $this->getAttribute($this, "renderWidgetAttributes", array(0 => ($context["options"] ?? null)), "method");
            }
            // line 574
            if ($this->getAttribute(($context["parameters"] ?? null), "pageComponent", array(), "any", true, true)) {
                // line 575
                echo $this->getAttribute($this, "renderPageComponentAttributes", array(0 => $this->getAttribute(($context["parameters"] ?? null), "pageComponent", array())), "method");
            }
            // line 577
            if (($this->getAttribute(($context["parameters"] ?? null), "dataAttributes", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "dataAttributes", array())))) {
                // line 578
                echo $this->getAttribute($this, "renderAttributes", array(0 => $this->getAttribute(($context["parameters"] ?? null), "dataAttributes", array())), "method");
            }
            // line 579
            echo ">";
            // line 580
            $context["labelInIcon"] = (($this->getAttribute(($context["parameters"] ?? null), "labelInIcon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "labelInIcon", array()), true)) : (true));
            // line 581
            if ($this->getAttribute(($context["parameters"] ?? null), "iCss", array(), "any", true, true)) {
                // line 582
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "iCss", array()), "html", null, true);
                if (($context["labelInIcon"] ?? null)) {
                    echo " hide-text";
                }
                echo "\">";
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true) && ($context["labelInIcon"] ?? null))) ? ($this->getAttribute(($context["parameters"] ?? null), "label", array())) : ("")), "html", null, true);
                echo "</i>";
            }
            // line 584
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "label", array())) : ("")), "html", null, true);
            // line 585
            echo "</a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 592
    public function getrenderPageComponentAttributes($__pageComponent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pageComponent" => $__pageComponent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 593
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageComponent"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 594
                echo "        ";
                if (($context["key"] == "layout")) {
                    // line 595
                    echo "            data-layout=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["pageComponent"] ?? null), "layout", array()), "html", null, true);
                    echo "\"
        ";
                } elseif (twig_test_iterable(                // line 596
$context["value"])) {
                    // line 597
                    echo "            data-page-component-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($context["value"]), "html", null, true);
                    echo "\"
        ";
                } else {
                    // line 599
                    echo "            data-page-component-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"
        ";
                }
                // line 601
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 609
    public function getrenderWidgetAttributes($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 610
            echo "    ";
            $context["pageComponent"] = array("module" => "oroui/js/app/components/widget-component", "options" =>             // line 612
($context["options"] ?? null));
            // line 614
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["options"] ?? null), "options", array(), "any", false, true), "pageComponentName", array(), "any", true, true)) {
                // line 615
                echo "        ";
                $context["pageComponent"] = twig_array_merge(($context["pageComponent"] ?? null), array("name" => $this->getAttribute($this->getAttribute(($context["options"] ?? null), "options", array()), "pageComponentName", array())));
                // line 616
                echo "    ";
            }
            // line 617
            echo "    ";
            echo $this->getAttribute($this, "renderPageComponentAttributes", array(0 => ($context["pageComponent"] ?? null)), "method");
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

    // line 623
    public function getrenderWidgetDataAttributes($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 624
            echo "    ";
            if ( !$this->getAttribute(($context["options"] ?? null), "createOnEvent", array(), "any", true, true)) {
                // line 625
                echo "        ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), array("createOnEvent" => (($this->getAttribute(                // line 626
($context["options"] ?? null), "event", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "event", array()), "click")) : ("click"))));
                // line 628
                echo "    ";
            }
            // line 629
            echo "    ";
            echo $this->getAttribute($this, "renderWidgetAttributes", array(0 => ($context["options"] ?? null)), "method");
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

    // line 632
    public function getrenderAttributes($__options__ = null, $__prefix__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "prefix" => $__prefix__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 633
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 634
                echo "        ";
                if (twig_test_iterable($context["value"])) {
                    // line 635
                    echo "            ";
                    $context["value"] = twig_jsonencode_filter($context["value"], twig_constant("JSON_FORCE_OBJECT"));
                    // line 636
                    echo "        ";
                }
                // line 637
                echo "        data-";
                if ( !twig_test_empty(($context["prefix"] ?? null))) {
                    echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                    echo "-";
                }
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 657
    public function getclientButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 658
            echo "    ";
            // line 659
            echo "        <div class=\"pull-left btn-group icons-holder\">
            ";
            // line 660
            echo $this->getAttribute($this, "clientLink", array(0 => twig_array_merge(($context["parameters"] ?? null), array("class" => "btn icons-holder-text"))), "method");
            echo "
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

    // line 683
    public function getajaxButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 684
            echo "    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 685
            echo $this->getAttribute($this, "ajaxLink", array(0 => twig_array_merge(($context["parameters"] ?? null), array("class" => "btn icons-holder-text"))), "method");
            echo "
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

    // line 707
    public function getajaxLink($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 708
            echo "    ";
            $context["additionalParameters"] = array("pageComponent" => array("module" => "oroui/js/app/components/ajax-button"), "dataAttributes" => array("method" => (($this->getAttribute(            // line 713
($context["parameters"] ?? null), "dataMethod", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "dataMethod", array())) : ("GET")), "error-message" => (($this->getAttribute(            // line 714
($context["parameters"] ?? null), "errorMessage", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "errorMessage", array())) : ("oro.ui.unexpected_error"))));
            // line 717
            echo "
    ";
            // line 718
            echo $this->getAttribute($this, "clientLink", array(0 => twig_array_merge(($context["parameters"] ?? null), ($context["additionalParameters"] ?? null))), "method");
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

    // line 737
    public function getdropdownClientItem($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 738
            echo "    <li>";
            echo $this->getAttribute($this, "clientLink", array(0 => ($context["parameters"] ?? null)), "method");
            echo "</li>
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

    // line 747
    public function getsaveAndCloseButton($__parametersOrLabel__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parametersOrLabel" => $__parametersOrLabel__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 748
            echo "    ";
            $context["defaultParameters"] = array("class" => "btn-success", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and Close"));
            // line 752
            echo "
    ";
            // line 753
            if (twig_test_iterable(($context["parametersOrLabel"] ?? null))) {
                // line 754
                echo "        ";
                $context["parameters"] = ($context["parametersOrLabel"] ?? null);
                // line 755
                echo "    ";
            } else {
                // line 756
                echo "        ";
                // line 757
                echo "        ";
                $context["parameters"] = array("label" => ((                // line 758
array_key_exists("parametersOrLabel", $context)) ? (_twig_default_filter(($context["parametersOrLabel"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and Close"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and Close"))), "action" => "save_and_close");
                // line 761
                echo "    ";
            }
            // line 762
            echo "
    ";
            // line 763
            $context["parameters"] = twig_array_merge(($context["defaultParameters"] ?? null), ($context["parameters"] ?? null));
            // line 764
            echo "
    ";
            // line 765
            echo $this->getAttribute($this, "saveActionButton", array(0 => ($context["parameters"] ?? null)), "method");
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

    // line 774
    public function getsaveAndStayButton($__parametersOrLabel__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parametersOrLabel" => $__parametersOrLabel__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 775
            echo "    ";
            if (twig_test_iterable(($context["parametersOrLabel"] ?? null))) {
                // line 776
                echo "        ";
                $context["parameters"] = ($context["parametersOrLabel"] ?? null);
                // line 777
                echo "    ";
            } else {
                // line 778
                echo "        ";
                // line 779
                echo "        ";
                $context["parameters"] = array("label" => ((                // line 780
array_key_exists("parametersOrLabel", $context)) ? (_twig_default_filter(($context["parametersOrLabel"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"))), "action" => "save_and_stay");
                // line 783
                echo "    ";
            }
            // line 784
            echo "
    ";
            // line 785
            echo $this->getAttribute($this, "saveActionButton", array(0 => ($context["parameters"] ?? null)), "method");
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

    // line 792
    public function getsaveAndNewButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 793
            echo "    ";
            $context["defaultParameters"] = array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and New"));
            // line 796
            echo "
    ";
            // line 797
            $context["parameters"] = twig_array_merge(($context["defaultParameters"] ?? null), ($context["parameters"] ?? null));
            // line 798
            echo "
    ";
            // line 799
            echo $this->getAttribute($this, "saveActionButton", array(0 => ($context["parameters"] ?? null)), "method");
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

    // line 819
    public function getsaveActionButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 820
            echo "    ";
            $context["defaultParameters"] = array("type" => "submit", "class" => "btn-success main-group", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"));
            // line 825
            echo "
    ";
            // line 826
            if ($this->getAttribute(($context["parameters"] ?? null), "action", array(), "any", true, true)) {
                // line 827
                echo "        ";
                // line 828
                echo "    ";
            } elseif ($this->getAttribute(($context["parameters"] ?? null), "route", array(), "any", true, true)) {
                // line 829
                echo "        ";
                // line 830
                echo "        ";
                $context["action"] = array("route" => $this->getAttribute(($context["parameters"] ?? null), "route", array()));
                // line 831
                echo "        ";
                if ($this->getAttribute(($context["parameters"] ?? null), "params", array(), "any", true, true)) {
                    // line 832
                    echo "            ";
                    $context["action"] = twig_array_merge(($context["action"] ?? null), array("params" => $this->getAttribute(($context["parameters"] ?? null), "params", array())));
                    // line 833
                    echo "        ";
                }
                // line 834
                echo "        ";
                $context["parameters"] = twig_array_merge(($context["parameters"] ?? null), array("action" => twig_jsonencode_filter(($context["action"] ?? null))));
                // line 835
                echo "    ";
            }
            // line 836
            echo "
    ";
            // line 837
            $context["parameters"] = twig_array_merge(($context["defaultParameters"] ?? null), ($context["parameters"] ?? null));
            // line 838
            echo "
    ";
            // line 839
            echo $this->getAttribute($this, "buttonType", array(0 => ($context["parameters"] ?? null)), "method");
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

    // line 852
    public function getbuttonType($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 853
            echo "    ";
            $context["defaultParameters"] = array("type" => "button");
            // line 856
            echo "    ";
            $context["parameters"] = twig_array_merge(($context["defaultParameters"] ?? null), ($context["parameters"] ?? null));
            // line 857
            echo "    <div class=\"btn-group\">
        <button type=\"";
            // line 858
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "type", array()), "html", null, true);
            echo "\" class=\"btn ";
            if ($this->getAttribute(($context["parameters"] ?? null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "class", array()), "html", null, true);
            }
            if ($this->getAttribute(($context["parameters"] ?? null), "action", array(), "any", true, true)) {
                echo " action-button";
            }
            echo "\"
                ";
            // line 859
            if ($this->getAttribute(($context["parameters"] ?? null), "action", array(), "any", true, true)) {
                echo "data-action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "action", array()), "html", null, true);
                echo "\"";
            }
            // line 860
            echo "                ";
            if ($this->getAttribute(($context["parameters"] ?? null), "data", array(), "any", true, true)) {
                // line 861
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parameters"] ?? null), "data", array()));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 862
                    echo "                        data-";
                    echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                    echo "\"
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 864
                echo "                ";
            }
            echo ">
            ";
            // line 865
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "label", array()), "html", null, true);
            echo "
        </button>
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

    // line 873
    public function getbuttonSeparator(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 874
            echo "    <div class=\"pull-left\">
        <div class=\"separator-btn\"></div>
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

    // line 888
    public function getscrollSubblock($__title__ = null, $__data__ = null, $__isForm__ = null, $__useSpan__ = null, $__spanClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "isForm" => $__isForm__,
            "useSpan" => $__useSpan__,
            "spanClass" => $__spanClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 889
            echo "    ";
            $context["spanClass"] = ((array_key_exists("spanClass", $context)) ? (_twig_default_filter(($context["spanClass"] ?? null), "responsive-cell")) : ("responsive-cell"));
            // line 890
            echo "    ";
            // line 898
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, ($context["spanClass"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 899
            if (twig_length_filter($this->env, ($context["title"] ?? null))) {
                echo "<h5 class=\"user-fieldset\"><span>";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</span></h5>";
            }
            // line 900
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 901
                echo "        ";
                echo $context["dataBlock"];
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 903
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

    // line 923
    public function getscrollBlock($__blockId__ = null, $__title__ = null, $__subblocks__ = null, $__isForm__ = null, $__contentAttributes__ = null, $__useSubBlockDivider__ = null, $__headerLinkContent__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "blockId" => $__blockId__,
            "title" => $__title__,
            "subblocks" => $__subblocks__,
            "isForm" => $__isForm__,
            "contentAttributes" => $__contentAttributes__,
            "useSubBlockDivider" => $__useSubBlockDivider__,
            "headerLinkContent" => $__headerLinkContent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 924
            echo "    ";
            $context["cols"] = twig_length_filter($this->env, ($context["subblocks"] ?? null));
            // line 925
            echo "    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">";
            // line 926
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            if (array_key_exists("headerLinkContent", $context)) {
                echo twig_escape_filter($this->env, ($context["headerLinkContent"] ?? null), "html", null, true);
            }
            echo "</h4>
        <div id=\"";
            // line 927
            echo twig_escape_filter($this->env, ($context["blockId"] ?? null), "html", null, true);
            echo "\" class=\"scrollspy-nav-target\"></div>
        <div class=\"section-content\">
            <div class=\"row-fluid";
            // line 929
            if (((array_key_exists("contentAttributes", $context) && $this->getAttribute(($context["contentAttributes"] ?? null), "class", array(), "any", true, true)) && twig_length_filter($this->env, $this->getAttribute(($context["contentAttributes"] ?? null), "class", array())))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["contentAttributes"] ?? null), "class", array()), "html", null, true);
            }
            if (((($context["cols"] ?? null) > 1) && ( !array_key_exists("useSubBlockDivider", $context) || (($context["useSubBlockDivider"] ?? null) == true)))) {
                echo " row-fluid-divider";
            }
            echo "\" ";
            echo $this->getAttribute($this, "attributes", array(0 => ($context["contentAttributes"] ?? null), 1 => array(0 => "class")), "method");
            echo ">
                ";
            // line 930
            if ((array_key_exists("isForm", $context) && (($context["isForm"] ?? null) == true))) {
                // line 931
                echo "                    <fieldset class=\"form-horizontal\">
                ";
            } else {
                // line 933
                echo "                    <div class=\"form-horizontal\">
                ";
            }
            // line 935
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subblocks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                // line 936
                echo "                        ";
                echo $this->getAttribute($this, "scrollSubblock", array(0 => ((($this->getAttribute($context["subblock"], "title", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute($context["subblock"], "title", array())))) ? ($this->getAttribute($context["subblock"], "title", array())) : (null)), 1 => $this->getAttribute($context["subblock"], "data", array()), 2 => ($context["isForm"] ?? null), 3 => (($this->getAttribute($context["subblock"], "useSpan", array(), "any", true, true)) ? ($this->getAttribute($context["subblock"], "useSpan", array())) : (true)), 4 => (($this->getAttribute($context["subblock"], "spanClass", array(), "any", true, true)) ? ($this->getAttribute($context["subblock"], "spanClass", array())) : (""))), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 938
            echo "                ";
            if ((array_key_exists("isForm", $context) && (($context["isForm"] ?? null) == true))) {
                // line 939
                echo "                    </fieldset>
                ";
            } else {
                // line 941
                echo "                    </div>
                ";
            }
            // line 943
            echo "            </div>
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

    // line 972
    public function getscrollData($__dataTarget__ = null, $__data__ = null, $__entity__ = null, $__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "dataTarget" => $__dataTarget__,
            "data" => $__data__,
            "entity" => $__entity__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 973
            echo "    ";
            $context["data"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->scrollDataBefore($this->env, ($context["dataTarget"] ?? null), ($context["data"] ?? null), ($context["entity"] ?? null), ($context["form"] ?? null));
            // line 974
            echo "
    ";
            // line 975
            if ((array_key_exists("form", $context) && ($context["form"] ?? null))) {
                // line 976
                echo "        ";
                $context["isForm"] = true;
                // line 977
                echo "    ";
            } else {
                // line 978
                echo "        ";
                $context["isForm"] = false;
                // line 979
                echo "    ";
            }
            // line 980
            echo "
    ";
            // line 981
            $context["dataBlocks"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->sortBy($this->getAttribute(($context["data"] ?? null), "dataBlocks", array()));
            // line 982
            echo "
    <div id=\"";
            // line 983
            echo twig_escape_filter($this->env, ($context["dataTarget"] ?? null), "html", null, true);
            echo "\" class=\"navbar navbar-static scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\" style=\"width: auto;\">
                <ul class=\"nav\">
                    ";
            // line 987
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dataBlocks"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["navElement"]) {
                // line 988
                echo "                        <li ";
                if ($this->getAttribute($context["navElement"], "class", array(), "any", true, true)) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["navElement"], "class", array()), "html", null, true);
                    echo "\"";
                }
                echo "><a href=\"#scroll-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navElement"], "title", array()), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navElement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 990
            echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"clearfix\">
        ";
            // line 995
            if (($this->getAttribute(($context["data"] ?? null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "formErrors", array())))) {
                // line 996
                echo "            <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                <div class=\"alert alert-error\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                    ";
                // line 999
                echo $this->getAttribute(($context["data"] ?? null), "formErrors", array());
                echo "
                </div>
            </div>
        ";
            }
            // line 1003
            echo "        <div data-spy=\"scroll\" data-target=\"#";
            echo twig_escape_filter($this->env, ($context["dataTarget"] ?? null), "html", null, true);
            echo "\" data-offset=\"1\" class=\"scrollspy container-fluid scrollable-container";
            if (($context["isForm"] ?? null)) {
                echo " form-container";
            }
            echo "\">
            ";
            // line 1004
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dataBlocks"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 1005
                echo "                ";
                echo $this->getAttribute($this, "scrollBlock", array(0 => ("scroll-" . $this->getAttribute($context["loop"], "index", array())), 1 => $this->getAttribute($context["scrollBlock"], "title", array()), 2 => $this->getAttribute($context["scrollBlock"], "subblocks", array()), 3 => ($context["isForm"] ?? null), 4 => (($this->getAttribute($context["scrollBlock"], "content_attr", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "content_attr", array())) : (null)), 5 => (($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array())) : (true)), 6 => (($this->getAttribute($context["scrollBlock"], "headerLinkContent", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "headerLinkContent", array())) : (null))), "method");
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1007
            echo "            ";
            if (($this->getAttribute(($context["data"] ?? null), "hiddenData", array(), "any", true, true) || ($context["isForm"] ?? null))) {
                // line 1008
                echo "                <div class=\"hide\" data-skip-input-widgets data-layout=\"separate\">
                    ";
                // line 1009
                if ($this->getAttribute(($context["data"] ?? null), "hiddenData", array(), "any", true, true)) {
                    // line 1010
                    echo "                        ";
                    echo $this->getAttribute(($context["data"] ?? null), "hiddenData", array());
                    echo "
                    ";
                }
                // line 1012
                echo "                    ";
                if (($context["isForm"] ?? null)) {
                    // line 1013
                    echo "                        ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
                    echo "
                    ";
                }
                // line 1015
                echo "                </div>
            ";
            }
            // line 1017
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

    // line 1029
    public function getcollectionField($__field__ = null, $__label__ = null, $__buttonCaption__ = null, $__tooltipText__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "buttonCaption" => $__buttonCaption__,
            "tooltipText" => $__tooltipText__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1030
            echo "    <div class=\"control-group\">
        <div class=\"control-label wrap\">
            ";
            // line 1032
            if ( !(null === ($context["tooltipText"] ?? null))) {
                // line 1033
                echo "                ";
                echo $this->getAttribute($this, "tooltip", array(0 => ($context["tooltipText"] ?? null)), "method");
                echo "
            ";
            }
            // line 1035
            echo "            <label>";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls\">
            <div class=\"row-oro\">
                <div class=\"oro-item-collection collection-fields-list\" data-prototype=\"";
            // line 1039
            echo twig_escape_filter($this->env, $this->getAttribute($this, "collection_prototype", array(0 => ($context["field"] ?? null)), "method"));
            echo "\">
                    ";
            // line 1040
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
                // line 1041
                echo "                        ";
                echo $this->getAttribute($this, "collection_prototype", array(0 => $context["emailField"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1043
            echo "                </div>
                <a class=\"btn add-list-item\" href=\"javascript: void(0);\">";
            // line 1044
            echo twig_escape_filter($this->env, ($context["buttonCaption"] ?? null), "html", null, true);
            echo "</a>
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

    // line 1056
    public function getattributes($__attr__ = null, $__excludes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attr" => $__attr__,
            "excludes" => $__excludes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1057
            echo "    ";
            ob_start();
            // line 1058
            echo "        ";
            $context["attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? null), array())) : (array()));
            // line 1059
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (( !array_key_exists("excludes", $context) ||  !$this->getAttribute(($context["excludes"] ?? null), $context["attrname"], array(), "array", true, true))) {
                    if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? null)), "html", null, true);
                        echo "\" ";
                    } else {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, ((twig_test_iterable($context["attrvalue"])) ? (twig_jsonencode_filter($context["attrvalue"])) : ($context["attrvalue"])), "html", null, true);
                        echo "\" ";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1060
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1069
    public function getentityOwnerLink($__entity__ = null, $__renderLabel__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "renderLabel" => $__renderLabel__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1070
            ob_start();
            // line 1071
            if (($context["entity"] ?? null)) {
                // line 1072
                echo "            ";
                $context["ownerType"] = $this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getOwnerType(($context["entity"] ?? null));
                // line 1073
                if (($context["ownerType"] ?? null)) {
                    // line 1074
                    echo "                ";
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), $this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getOwnerFieldName(($context["entity"] ?? null)))) {
                        // line 1075
                        echo "                    ";
                        $context["owner"] = $this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getEntityOwner(($context["entity"] ?? null));
                        // line 1076
                        echo "                    ";
                        if (($context["owner"] ?? null)) {
                            // line 1077
                            echo "                        ";
                            if ((($context["ownerType"] ?? null) == "USER")) {
                                // line 1078
                                echo "                            ";
                                $context["ownerPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_view", array("id" => $this->getAttribute(($context["owner"] ?? null), "id", array())));
                                // line 1079
                                echo "                            ";
                                $context["ownerName"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["owner"] ?? null));
                                // line 1080
                                echo "                        ";
                            } elseif ((($context["ownerType"] ?? null) == "BUSINESS_UNIT")) {
                                // line 1081
                                echo "                            ";
                                $context["ownerPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_view", array("id" => $this->getAttribute(($context["owner"] ?? null), "id", array())));
                                // line 1082
                                echo "                            ";
                                $context["ownerName"] = $this->getAttribute(($context["owner"] ?? null), "name", array());
                                // line 1083
                                echo "                        ";
                            }
                            // line 1084
                            echo "                        ";
                            if (array_key_exists("ownerName", $context)) {
                                // line 1085
                                echo "                            ";
                                if (($context["renderLabel"] ?? null)) {
                                    // line 1086
                                    echo "                                ";
                                    $context["entityClassName"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["entity"] ?? null));
                                    // line 1087
                                    echo "                                ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getFieldConfigValue(                                    // line 1088
($context["entityClassName"] ?? null), $this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(                                    // line 1089
($context["entityClassName"] ?? null), "owner_field_name", "ownership"), "label")), "html", null, true);
                                    // line 1092
                                    echo ":
                            ";
                                }
                                // line 1094
                                echo "                            ";
                                if ((array_key_exists("ownerPath", $context) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["owner"] ?? null)))) {
                                    // line 1095
                                    echo "                                ";
                                    echo $this->getAttribute($this, "renderUrl", array(0 => ($context["ownerPath"] ?? null), 1 => ($context["ownerName"] ?? null)), "method");
                                    echo "
                            ";
                                } else {
                                    // line 1097
                                    echo "                                ";
                                    echo twig_escape_filter($this->env, ($context["ownerName"] ?? null), "html", null, true);
                                    echo "
                            ";
                                }
                                // line 1099
                                echo "                        ";
                            }
                            // line 1100
                            echo "                    ";
                        }
                        // line 1101
                        echo "                ";
                    }
                    // line 1102
                    echo "            ";
                }
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1107
    public function getrenderUrl($__url__ = null, $__text__ = null, $__class__ = null, $__title__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "text" => $__text__,
            "class" => $__class__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1108
            ob_start();
            // line 1109
            echo "        ";
            if (twig_test_empty(($context["text"] ?? null))) {
                // line 1110
                echo "            ";
                $context["text"] = ($context["url"] ?? null);
                // line 1111
                echo "        ";
            }
            // line 1112
            echo "        ";
            if (twig_test_empty(($context["title"] ?? null))) {
                // line 1113
                echo "            ";
                $context["title"] = ($context["text"] ?? null);
                // line 1114
                echo "        ";
            }
            // line 1115
            echo "        ";
            if (twig_test_empty(($context["class"] ?? null))) {
                // line 1116
                echo "            ";
                $context["class"] = "";
                // line 1117
                echo "        ";
            }
            // line 1118
            echo "        ";
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 1119
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html_attr");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html_attr");
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\"
                    ";
                // line 1120
                if ( !$this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isUrlLocal(($context["url"] ?? null))) {
                    echo " target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
                echo "</a>
        ";
            }
            // line 1122
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1125
    public function getrenderPhone($__phone__ = null, $__title__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "phone" => $__phone__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1126
            if (twig_test_empty(($context["title"] ?? null))) {
                // line 1127
                echo "        ";
                $context["title"] = ($context["phone"] ?? null);
                // line 1128
                echo "    ";
            }
            // line 1129
            echo "    ";
            if ( !twig_test_empty(($context["phone"] ?? null))) {
                // line 1130
                echo "        <a href=\"tel:";
                echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html_attr");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html_attr");
                echo "\" class=\"phone\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1140
    public function getrenderPhoneWithActions($__phone__ = null, $__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "phone" => $__phone__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1141
            if ( !twig_test_empty(($context["phone"] ?? null))) {
                // line 1142
                ob_start();
                // line 1143
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("phone_actions", $context)) ? (_twig_default_filter(($context["phone_actions"] ?? null), "phone_actions")) : ("phone_actions")), array("phone" => ($context["phone"] ?? null), "entity" => ($context["entity"] ?? null)));
                $context["actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 1145
                $context["actions"] = twig_trim_filter(($context["actions"] ?? null));
                // line 1146
                echo "        <span class=\"inline-actions-element";
                if (twig_test_empty(($context["actions"] ?? null))) {
                    echo " inline-actions-element_no-actions";
                }
                echo "\">
            <span class=\"inline-actions-element_wrapper\">";
                // line 1147
                echo $this->getAttribute($this, "renderPhone", array(0 => ($context["phone"] ?? null)), "method");
                echo "</span>
            ";
                // line 1148
                if ( !twig_test_empty(($context["actions"] ?? null))) {
                    // line 1149
                    echo "<span class=\"inline-actions-element_actions phone-actions\">";
                    echo ($context["actions"] ?? null);
                    echo "</span>";
                }
                // line 1151
                echo "        </span>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1155
    public function getgetApplicableForUnderscore($__str__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "str" => $__str__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1156
            echo "    ";
            echo twig_replace_filter(($context["str"] ?? null), array("<script" => "<% print(\"<sc\" + \"ript\"); %>", "</script" => "<% print(\"</sc\" + \"ript\"); %>", "<%" => "<% print(\"<\" + \"%\"); %>", "%>" => "<% print(\"%\" + \">\"); %>"));
            // line 1161
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

    // line 1164
    public function getrenderList($__elements__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "elements" => $__elements__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1165
            echo "<ul class=\"extra-list\">";
            // line 1166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 1167
                echo "            <li class=\"extra-list-element\">";
                echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1169
            echo "</ul>
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

    // line 1172
    public function getrenderTable($__titles__ = null, $__rows__ = null, $__style__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "titles" => $__titles__,
            "rows" => $__rows__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1173
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
            echo "\">
     <thead>
     <tr>";
            // line 1176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["titles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                // line 1177
                echo "        <th>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</th>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1179
            echo "</tr>
     </thead>";
            // line 1181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 1182
                echo "        <tr>";
                // line 1183
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 1184
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1186
                echo "</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1188
            echo "</table>
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

    // line 1191
    public function getentityViewLink($__entity__ = null, $__label__ = null, $__route__ = null, $__permission__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "label" => $__label__,
            "route" => $__route__,
            "permission" => $__permission__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1192
            if (($context["entity"] ?? null)) {
                // line 1193
                echo "        ";
                if ((($context["route"] ?? null) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(((array_key_exists("permission", $context)) ? (_twig_default_filter(($context["permission"] ?? null), "VIEW")) : ("VIEW")), ($context["entity"] ?? null)))) {
                    // line 1194
                    echo "            ";
                    echo $this->getAttribute($this, "renderUrl", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), 1 => ($context["label"] ?? null)), "method");
                    echo "
        ";
                } else {
                    // line 1196
                    echo "            ";
                    echo twig_escape_filter($this->env, ($context["label"] ?? null));
                    echo "
        ";
                }
                // line 1198
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1201
    public function getentityViewLinks($__entities__ = null, $__labelProperty__ = null, $__route__ = null, $__permission__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $__entities__,
            "labelProperty" => $__labelProperty__,
            "route" => $__route__,
            "permission" => $__permission__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1202
            $context["links"] = array();
            // line 1203
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 1204
                echo "        ";
                $context["links"] = twig_array_merge(($context["links"] ?? null), array(0 => $this->getAttribute($this, "entityViewLink", array(0 => $context["entity"], 1 => $this->getAttribute($context["entity"], ($context["labelProperty"] ?? null)), 2 => ($context["route"] ?? null), 3 => ($context["permission"] ?? null)), "method")));
                // line 1205
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1206
            echo "    ";
            echo $this->getAttribute($this, "renderList", array(0 => ($context["links"] ?? null)), "method");
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1214
    public function getrenderDisabledLabel($__labelText__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "labelText" => $__labelText__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1215
            echo "<i>";
            echo twig_escape_filter($this->env, ($context["labelText"] ?? null), "html", null, true);
            echo "</i>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1226
    public function getrenderEntityViewLabel($__entity__ = null, $__fieldName__ = null, $__entityLabelIfNotGranted__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "entityLabelIfNotGranted" => $__entityLabelIfNotGranted__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1227
            if (( !(null === ($context["entity"] ?? null)) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), ($context["fieldName"] ?? null)))) {
                // line 1228
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), ($context["fieldName"] ?? null)), "html", null, true);
                echo "
    ";
            } else {
                // line 1230
                echo "        ";
                if ( !(null === ($context["entityLabelIfNotGranted"] ?? null))) {
                    // line 1231
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view %entityName%", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["entityLabelIfNotGranted"] ?? null)))), "html", null, true);
                    echo "
        ";
                }
                // line 1233
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1236
    public function getrenderJsTree($__data__ = null, $__actions__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "actions" => $__actions__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1237
            $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle::macros.html.twig", 1237, "877997463")->display(array_merge($context, array("data" =>             // line 1238
($context["data"] ?? null), "actions" =>             // line 1239
($context["actions"] ?? null))));
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
        return "OroUIBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3369 => 1239,  3368 => 1238,  3367 => 1237,  3354 => 1236,  3338 => 1233,  3332 => 1231,  3329 => 1230,  3323 => 1228,  3321 => 1227,  3307 => 1226,  3290 => 1215,  3278 => 1214,  3262 => 1206,  3256 => 1205,  3253 => 1204,  3248 => 1203,  3246 => 1202,  3231 => 1201,  3215 => 1198,  3209 => 1196,  3203 => 1194,  3200 => 1193,  3198 => 1192,  3183 => 1191,  3167 => 1188,  3160 => 1186,  3151 => 1184,  3147 => 1183,  3145 => 1182,  3141 => 1181,  3138 => 1179,  3129 => 1177,  3125 => 1176,  3119 => 1173,  3105 => 1172,  3089 => 1169,  3080 => 1167,  3076 => 1166,  3074 => 1165,  3062 => 1164,  3046 => 1161,  3043 => 1156,  3031 => 1155,  3014 => 1151,  3009 => 1149,  3007 => 1148,  3003 => 1147,  2996 => 1146,  2994 => 1145,  2991 => 1143,  2989 => 1142,  2987 => 1141,  2974 => 1140,  2951 => 1130,  2948 => 1129,  2945 => 1128,  2942 => 1127,  2940 => 1126,  2927 => 1125,  2911 => 1122,  2902 => 1120,  2893 => 1119,  2890 => 1118,  2887 => 1117,  2884 => 1116,  2881 => 1115,  2878 => 1114,  2875 => 1113,  2872 => 1112,  2869 => 1111,  2866 => 1110,  2863 => 1109,  2861 => 1108,  2846 => 1107,  2828 => 1102,  2825 => 1101,  2822 => 1100,  2819 => 1099,  2813 => 1097,  2807 => 1095,  2804 => 1094,  2800 => 1092,  2798 => 1089,  2797 => 1088,  2795 => 1087,  2792 => 1086,  2789 => 1085,  2786 => 1084,  2783 => 1083,  2780 => 1082,  2777 => 1081,  2774 => 1080,  2771 => 1079,  2768 => 1078,  2765 => 1077,  2762 => 1076,  2759 => 1075,  2756 => 1074,  2754 => 1073,  2751 => 1072,  2749 => 1071,  2747 => 1070,  2734 => 1069,  2718 => 1060,  2696 => 1059,  2693 => 1058,  2690 => 1057,  2677 => 1056,  2657 => 1044,  2654 => 1043,  2645 => 1041,  2641 => 1040,  2637 => 1039,  2629 => 1035,  2623 => 1033,  2621 => 1032,  2617 => 1030,  2602 => 1029,  2585 => 1017,  2581 => 1015,  2575 => 1013,  2572 => 1012,  2566 => 1010,  2564 => 1009,  2561 => 1008,  2558 => 1007,  2541 => 1005,  2524 => 1004,  2515 => 1003,  2508 => 999,  2503 => 996,  2501 => 995,  2494 => 990,  2469 => 988,  2452 => 987,  2445 => 983,  2442 => 982,  2440 => 981,  2437 => 980,  2434 => 979,  2431 => 978,  2428 => 977,  2425 => 976,  2423 => 975,  2420 => 974,  2417 => 973,  2402 => 972,  2384 => 943,  2380 => 941,  2376 => 939,  2373 => 938,  2364 => 936,  2359 => 935,  2355 => 933,  2351 => 931,  2349 => 930,  2337 => 929,  2332 => 927,  2325 => 926,  2322 => 925,  2319 => 924,  2301 => 923,  2285 => 903,  2276 => 901,  2271 => 900,  2265 => 899,  2260 => 898,  2258 => 890,  2255 => 889,  2239 => 888,  2221 => 874,  2210 => 873,  2191 => 865,  2186 => 864,  2175 => 862,  2170 => 861,  2167 => 860,  2161 => 859,  2150 => 858,  2147 => 857,  2144 => 856,  2141 => 853,  2129 => 852,  2112 => 839,  2109 => 838,  2107 => 837,  2104 => 836,  2101 => 835,  2098 => 834,  2095 => 833,  2092 => 832,  2089 => 831,  2086 => 830,  2084 => 829,  2081 => 828,  2079 => 827,  2077 => 826,  2074 => 825,  2071 => 820,  2059 => 819,  2042 => 799,  2039 => 798,  2037 => 797,  2034 => 796,  2031 => 793,  2019 => 792,  2002 => 785,  1999 => 784,  1996 => 783,  1994 => 780,  1992 => 779,  1990 => 778,  1987 => 777,  1984 => 776,  1981 => 775,  1969 => 774,  1952 => 765,  1949 => 764,  1947 => 763,  1944 => 762,  1941 => 761,  1939 => 758,  1937 => 757,  1935 => 756,  1932 => 755,  1929 => 754,  1927 => 753,  1924 => 752,  1921 => 748,  1909 => 747,  1891 => 738,  1879 => 737,  1862 => 718,  1859 => 717,  1857 => 714,  1856 => 713,  1854 => 708,  1842 => 707,  1824 => 685,  1821 => 684,  1809 => 683,  1791 => 660,  1788 => 659,  1786 => 658,  1774 => 657,  1746 => 637,  1743 => 636,  1740 => 635,  1737 => 634,  1732 => 633,  1719 => 632,  1701 => 629,  1698 => 628,  1696 => 626,  1694 => 625,  1691 => 624,  1679 => 623,  1661 => 617,  1658 => 616,  1655 => 615,  1652 => 614,  1650 => 612,  1648 => 610,  1636 => 609,  1617 => 601,  1609 => 599,  1601 => 597,  1599 => 596,  1594 => 595,  1591 => 594,  1586 => 593,  1574 => 592,  1557 => 585,  1555 => 584,  1545 => 582,  1543 => 581,  1541 => 580,  1539 => 579,  1536 => 578,  1534 => 577,  1531 => 575,  1529 => 574,  1526 => 572,  1523 => 569,  1522 => 568,  1520 => 567,  1518 => 566,  1516 => 565,  1513 => 563,  1511 => 562,  1506 => 560,  1504 => 559,  1499 => 557,  1497 => 556,  1492 => 554,  1490 => 553,  1485 => 552,  1483 => 551,  1478 => 549,  1476 => 548,  1470 => 546,  1468 => 545,  1464 => 544,  1457 => 543,  1454 => 542,  1442 => 541,  1424 => 519,  1421 => 518,  1415 => 517,  1412 => 516,  1409 => 515,  1404 => 514,  1401 => 513,  1398 => 512,  1395 => 511,  1392 => 510,  1389 => 509,  1386 => 508,  1383 => 507,  1380 => 506,  1378 => 505,  1374 => 503,  1372 => 500,  1371 => 499,  1370 => 498,  1369 => 497,  1368 => 495,  1367 => 494,  1366 => 493,  1364 => 491,  1361 => 490,  1358 => 489,  1356 => 488,  1353 => 487,  1350 => 486,  1348 => 483,  1346 => 482,  1343 => 481,  1340 => 480,  1337 => 479,  1334 => 478,  1331 => 477,  1319 => 476,  1301 => 472,  1297 => 470,  1295 => 469,  1292 => 468,  1289 => 467,  1286 => 466,  1284 => 465,  1281 => 464,  1278 => 463,  1275 => 462,  1273 => 461,  1270 => 460,  1267 => 459,  1255 => 458,  1237 => 439,  1232 => 437,  1228 => 436,  1223 => 435,  1220 => 434,  1218 => 431,  1216 => 430,  1213 => 429,  1210 => 428,  1207 => 427,  1204 => 426,  1202 => 423,  1200 => 422,  1197 => 421,  1194 => 420,  1191 => 419,  1179 => 418,  1162 => 404,  1159 => 403,  1156 => 402,  1153 => 400,  1151 => 398,  1150 => 397,  1149 => 396,  1148 => 395,  1146 => 394,  1144 => 391,  1142 => 390,  1139 => 389,  1137 => 386,  1135 => 385,  1132 => 384,  1129 => 383,  1126 => 382,  1123 => 381,  1120 => 380,  1117 => 379,  1114 => 378,  1111 => 377,  1108 => 376,  1105 => 375,  1102 => 374,  1090 => 373,  1072 => 359,  1069 => 358,  1066 => 357,  1063 => 356,  1050 => 355,  1032 => 346,  1030 => 345,  1028 => 338,  1016 => 337,  997 => 330,  994 => 329,  988 => 326,  985 => 325,  983 => 324,  982 => 322,  979 => 321,  976 => 320,  974 => 317,  973 => 316,  972 => 315,  970 => 314,  967 => 313,  964 => 312,  952 => 311,  934 => 299,  922 => 298,  905 => 283,  899 => 281,  896 => 280,  893 => 279,  884 => 277,  879 => 276,  877 => 275,  873 => 274,  866 => 271,  860 => 269,  858 => 268,  854 => 266,  842 => 265,  824 => 251,  821 => 250,  809 => 249,  790 => 233,  782 => 232,  775 => 231,  772 => 230,  761 => 228,  756 => 227,  753 => 226,  747 => 224,  745 => 223,  740 => 222,  737 => 221,  734 => 220,  731 => 219,  727 => 217,  721 => 215,  719 => 214,  714 => 213,  711 => 212,  708 => 211,  705 => 210,  703 => 209,  691 => 208,  673 => 193,  670 => 192,  667 => 191,  664 => 190,  650 => 189,  633 => 179,  630 => 178,  627 => 177,  624 => 176,  621 => 175,  618 => 174,  615 => 173,  602 => 172,  584 => 161,  582 => 160,  581 => 159,  580 => 157,  579 => 155,  574 => 154,  572 => 148,  571 => 147,  569 => 146,  566 => 145,  549 => 144,  530 => 132,  527 => 131,  524 => 130,  509 => 129,  491 => 118,  476 => 117,  457 => 104,  452 => 102,  449 => 101,  436 => 100,  418 => 91,  415 => 90,  412 => 89,  403 => 86,  400 => 85,  395 => 84,  393 => 83,  390 => 82,  382 => 80,  376 => 78,  374 => 77,  371 => 76,  368 => 75,  354 => 74,  334 => 62,  328 => 61,  324 => 59,  322 => 56,  321 => 55,  318 => 54,  316 => 53,  313 => 52,  311 => 49,  309 => 48,  306 => 47,  303 => 46,  300 => 45,  297 => 44,  294 => 43,  291 => 41,  288 => 40,  285 => 39,  282 => 38,  279 => 37,  276 => 36,  273 => 35,  270 => 34,  267 => 33,  264 => 32,  262 => 31,  259 => 30,  242 => 29,  223 => 24,  217 => 22,  211 => 20,  208 => 19,  200 => 17,  195 => 16,  190 => 15,  188 => 14,  184 => 13,  178 => 10,  175 => 9,  172 => 8,  169 => 7,  166 => 6,  163 => 5,  160 => 4,  157 => 3,  154 => 2,  142 => 1,  137 => 1154,  134 => 1062,  131 => 1049,  128 => 1020,  125 => 947,  122 => 908,  119 => 878,  116 => 869,  112 => 841,  109 => 801,  106 => 787,  103 => 767,  100 => 740,  97 => 720,  94 => 688,  91 => 664,  88 => 640,  85 => 631,  82 => 603,  79 => 588,  76 => 521,  73 => 475,  70 => 442,  67 => 406,  64 => 361,  61 => 348,  58 => 333,  55 => 301,  52 => 286,  49 => 254,  46 => 237,  43 => 195,  40 => 181,  37 => 165,  34 => 135,  31 => 120,  28 => 108,  25 => 93,  22 => 66,  19 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/macros.html.twig");
    }
}


/* OroUIBundle::macros.html.twig */
class __TwigTemplate_cdb9e42a657b606e593a2ed35751a8f8bcd5484744573d586d62886d38b6ccc1_877997463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1237
        $this->parent = $this->loadTemplate("OroUIBundle::jstree.html.twig", "OroUIBundle::macros.html.twig", 1237);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle::jstree.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroUIBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3421 => 1237,  3369 => 1239,  3368 => 1238,  3367 => 1237,  3354 => 1236,  3338 => 1233,  3332 => 1231,  3329 => 1230,  3323 => 1228,  3321 => 1227,  3307 => 1226,  3290 => 1215,  3278 => 1214,  3262 => 1206,  3256 => 1205,  3253 => 1204,  3248 => 1203,  3246 => 1202,  3231 => 1201,  3215 => 1198,  3209 => 1196,  3203 => 1194,  3200 => 1193,  3198 => 1192,  3183 => 1191,  3167 => 1188,  3160 => 1186,  3151 => 1184,  3147 => 1183,  3145 => 1182,  3141 => 1181,  3138 => 1179,  3129 => 1177,  3125 => 1176,  3119 => 1173,  3105 => 1172,  3089 => 1169,  3080 => 1167,  3076 => 1166,  3074 => 1165,  3062 => 1164,  3046 => 1161,  3043 => 1156,  3031 => 1155,  3014 => 1151,  3009 => 1149,  3007 => 1148,  3003 => 1147,  2996 => 1146,  2994 => 1145,  2991 => 1143,  2989 => 1142,  2987 => 1141,  2974 => 1140,  2951 => 1130,  2948 => 1129,  2945 => 1128,  2942 => 1127,  2940 => 1126,  2927 => 1125,  2911 => 1122,  2902 => 1120,  2893 => 1119,  2890 => 1118,  2887 => 1117,  2884 => 1116,  2881 => 1115,  2878 => 1114,  2875 => 1113,  2872 => 1112,  2869 => 1111,  2866 => 1110,  2863 => 1109,  2861 => 1108,  2846 => 1107,  2828 => 1102,  2825 => 1101,  2822 => 1100,  2819 => 1099,  2813 => 1097,  2807 => 1095,  2804 => 1094,  2800 => 1092,  2798 => 1089,  2797 => 1088,  2795 => 1087,  2792 => 1086,  2789 => 1085,  2786 => 1084,  2783 => 1083,  2780 => 1082,  2777 => 1081,  2774 => 1080,  2771 => 1079,  2768 => 1078,  2765 => 1077,  2762 => 1076,  2759 => 1075,  2756 => 1074,  2754 => 1073,  2751 => 1072,  2749 => 1071,  2747 => 1070,  2734 => 1069,  2718 => 1060,  2696 => 1059,  2693 => 1058,  2690 => 1057,  2677 => 1056,  2657 => 1044,  2654 => 1043,  2645 => 1041,  2641 => 1040,  2637 => 1039,  2629 => 1035,  2623 => 1033,  2621 => 1032,  2617 => 1030,  2602 => 1029,  2585 => 1017,  2581 => 1015,  2575 => 1013,  2572 => 1012,  2566 => 1010,  2564 => 1009,  2561 => 1008,  2558 => 1007,  2541 => 1005,  2524 => 1004,  2515 => 1003,  2508 => 999,  2503 => 996,  2501 => 995,  2494 => 990,  2469 => 988,  2452 => 987,  2445 => 983,  2442 => 982,  2440 => 981,  2437 => 980,  2434 => 979,  2431 => 978,  2428 => 977,  2425 => 976,  2423 => 975,  2420 => 974,  2417 => 973,  2402 => 972,  2384 => 943,  2380 => 941,  2376 => 939,  2373 => 938,  2364 => 936,  2359 => 935,  2355 => 933,  2351 => 931,  2349 => 930,  2337 => 929,  2332 => 927,  2325 => 926,  2322 => 925,  2319 => 924,  2301 => 923,  2285 => 903,  2276 => 901,  2271 => 900,  2265 => 899,  2260 => 898,  2258 => 890,  2255 => 889,  2239 => 888,  2221 => 874,  2210 => 873,  2191 => 865,  2186 => 864,  2175 => 862,  2170 => 861,  2167 => 860,  2161 => 859,  2150 => 858,  2147 => 857,  2144 => 856,  2141 => 853,  2129 => 852,  2112 => 839,  2109 => 838,  2107 => 837,  2104 => 836,  2101 => 835,  2098 => 834,  2095 => 833,  2092 => 832,  2089 => 831,  2086 => 830,  2084 => 829,  2081 => 828,  2079 => 827,  2077 => 826,  2074 => 825,  2071 => 820,  2059 => 819,  2042 => 799,  2039 => 798,  2037 => 797,  2034 => 796,  2031 => 793,  2019 => 792,  2002 => 785,  1999 => 784,  1996 => 783,  1994 => 780,  1992 => 779,  1990 => 778,  1987 => 777,  1984 => 776,  1981 => 775,  1969 => 774,  1952 => 765,  1949 => 764,  1947 => 763,  1944 => 762,  1941 => 761,  1939 => 758,  1937 => 757,  1935 => 756,  1932 => 755,  1929 => 754,  1927 => 753,  1924 => 752,  1921 => 748,  1909 => 747,  1891 => 738,  1879 => 737,  1862 => 718,  1859 => 717,  1857 => 714,  1856 => 713,  1854 => 708,  1842 => 707,  1824 => 685,  1821 => 684,  1809 => 683,  1791 => 660,  1788 => 659,  1786 => 658,  1774 => 657,  1746 => 637,  1743 => 636,  1740 => 635,  1737 => 634,  1732 => 633,  1719 => 632,  1701 => 629,  1698 => 628,  1696 => 626,  1694 => 625,  1691 => 624,  1679 => 623,  1661 => 617,  1658 => 616,  1655 => 615,  1652 => 614,  1650 => 612,  1648 => 610,  1636 => 609,  1617 => 601,  1609 => 599,  1601 => 597,  1599 => 596,  1594 => 595,  1591 => 594,  1586 => 593,  1574 => 592,  1557 => 585,  1555 => 584,  1545 => 582,  1543 => 581,  1541 => 580,  1539 => 579,  1536 => 578,  1534 => 577,  1531 => 575,  1529 => 574,  1526 => 572,  1523 => 569,  1522 => 568,  1520 => 567,  1518 => 566,  1516 => 565,  1513 => 563,  1511 => 562,  1506 => 560,  1504 => 559,  1499 => 557,  1497 => 556,  1492 => 554,  1490 => 553,  1485 => 552,  1483 => 551,  1478 => 549,  1476 => 548,  1470 => 546,  1468 => 545,  1464 => 544,  1457 => 543,  1454 => 542,  1442 => 541,  1424 => 519,  1421 => 518,  1415 => 517,  1412 => 516,  1409 => 515,  1404 => 514,  1401 => 513,  1398 => 512,  1395 => 511,  1392 => 510,  1389 => 509,  1386 => 508,  1383 => 507,  1380 => 506,  1378 => 505,  1374 => 503,  1372 => 500,  1371 => 499,  1370 => 498,  1369 => 497,  1368 => 495,  1367 => 494,  1366 => 493,  1364 => 491,  1361 => 490,  1358 => 489,  1356 => 488,  1353 => 487,  1350 => 486,  1348 => 483,  1346 => 482,  1343 => 481,  1340 => 480,  1337 => 479,  1334 => 478,  1331 => 477,  1319 => 476,  1301 => 472,  1297 => 470,  1295 => 469,  1292 => 468,  1289 => 467,  1286 => 466,  1284 => 465,  1281 => 464,  1278 => 463,  1275 => 462,  1273 => 461,  1270 => 460,  1267 => 459,  1255 => 458,  1237 => 439,  1232 => 437,  1228 => 436,  1223 => 435,  1220 => 434,  1218 => 431,  1216 => 430,  1213 => 429,  1210 => 428,  1207 => 427,  1204 => 426,  1202 => 423,  1200 => 422,  1197 => 421,  1194 => 420,  1191 => 419,  1179 => 418,  1162 => 404,  1159 => 403,  1156 => 402,  1153 => 400,  1151 => 398,  1150 => 397,  1149 => 396,  1148 => 395,  1146 => 394,  1144 => 391,  1142 => 390,  1139 => 389,  1137 => 386,  1135 => 385,  1132 => 384,  1129 => 383,  1126 => 382,  1123 => 381,  1120 => 380,  1117 => 379,  1114 => 378,  1111 => 377,  1108 => 376,  1105 => 375,  1102 => 374,  1090 => 373,  1072 => 359,  1069 => 358,  1066 => 357,  1063 => 356,  1050 => 355,  1032 => 346,  1030 => 345,  1028 => 338,  1016 => 337,  997 => 330,  994 => 329,  988 => 326,  985 => 325,  983 => 324,  982 => 322,  979 => 321,  976 => 320,  974 => 317,  973 => 316,  972 => 315,  970 => 314,  967 => 313,  964 => 312,  952 => 311,  934 => 299,  922 => 298,  905 => 283,  899 => 281,  896 => 280,  893 => 279,  884 => 277,  879 => 276,  877 => 275,  873 => 274,  866 => 271,  860 => 269,  858 => 268,  854 => 266,  842 => 265,  824 => 251,  821 => 250,  809 => 249,  790 => 233,  782 => 232,  775 => 231,  772 => 230,  761 => 228,  756 => 227,  753 => 226,  747 => 224,  745 => 223,  740 => 222,  737 => 221,  734 => 220,  731 => 219,  727 => 217,  721 => 215,  719 => 214,  714 => 213,  711 => 212,  708 => 211,  705 => 210,  703 => 209,  691 => 208,  673 => 193,  670 => 192,  667 => 191,  664 => 190,  650 => 189,  633 => 179,  630 => 178,  627 => 177,  624 => 176,  621 => 175,  618 => 174,  615 => 173,  602 => 172,  584 => 161,  582 => 160,  581 => 159,  580 => 157,  579 => 155,  574 => 154,  572 => 148,  571 => 147,  569 => 146,  566 => 145,  549 => 144,  530 => 132,  527 => 131,  524 => 130,  509 => 129,  491 => 118,  476 => 117,  457 => 104,  452 => 102,  449 => 101,  436 => 100,  418 => 91,  415 => 90,  412 => 89,  403 => 86,  400 => 85,  395 => 84,  393 => 83,  390 => 82,  382 => 80,  376 => 78,  374 => 77,  371 => 76,  368 => 75,  354 => 74,  334 => 62,  328 => 61,  324 => 59,  322 => 56,  321 => 55,  318 => 54,  316 => 53,  313 => 52,  311 => 49,  309 => 48,  306 => 47,  303 => 46,  300 => 45,  297 => 44,  294 => 43,  291 => 41,  288 => 40,  285 => 39,  282 => 38,  279 => 37,  276 => 36,  273 => 35,  270 => 34,  267 => 33,  264 => 32,  262 => 31,  259 => 30,  242 => 29,  223 => 24,  217 => 22,  211 => 20,  208 => 19,  200 => 17,  195 => 16,  190 => 15,  188 => 14,  184 => 13,  178 => 10,  175 => 9,  172 => 8,  169 => 7,  166 => 6,  163 => 5,  160 => 4,  157 => 3,  154 => 2,  142 => 1,  137 => 1154,  134 => 1062,  131 => 1049,  128 => 1020,  125 => 947,  122 => 908,  119 => 878,  116 => 869,  112 => 841,  109 => 801,  106 => 787,  103 => 767,  100 => 740,  97 => 720,  94 => 688,  91 => 664,  88 => 640,  85 => 631,  82 => 603,  79 => 588,  76 => 521,  73 => 475,  70 => 442,  67 => 406,  64 => 361,  61 => 348,  58 => 333,  55 => 301,  52 => 286,  49 => 254,  46 => 237,  43 => 195,  40 => 181,  37 => 165,  34 => 135,  31 => 120,  28 => 108,  25 => 93,  22 => 66,  19 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/macros.html.twig");
    }
}
