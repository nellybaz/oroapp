<?php

/* OroEntityConfigBundle::macros.html.twig */
class __TwigTemplate_1b1fdec98d16664aa32a9917f4d966bca4b12db26d9b3fd7c766e9c23d9c4945 extends Twig_Template
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
        // line 20
        echo "
";
        // line 36
        echo "
";
        // line 58
        echo "
";
        // line 98
        echo "
";
        // line 112
        echo "
";
    }

    // line 1
    public function getrenderDynamicFields($__entity__ = null, $__entity_class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "entity_class" => $__entity_class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle::macros.html.twig", 2);
            // line 3
            echo "    ";
            $context["dynamicFields"] = $this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\DynamicFieldsExtensionAttributeDecorator')->getFields(($context["entity"] ?? null), ($context["entity_class"] ?? null));
            // line 4
            echo "    ";
            if ((array_key_exists("dynamicFields", $context) && twig_length_filter($this->env, ($context["dynamicFields"] ?? null)))) {
                // line 5
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["dynamicFields"] ?? null));
                foreach ($context['_seq'] as $context["fieldName"] => $context["item"]) {
                    // line 6
                    echo "            ";
                    if ($this->env->getExtension('Oro\Bundle\FeatureToggleBundle\Twig\FeatureExtension')->isResourceEnabled($context["fieldName"], "field_configs")) {
                        // line 7
                        echo "                ";
                        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                        // line 8
$context["item"], "label", array())), $this->getAttribute(                        // line 9
$this, "formatDynamicFieldValue", array(0 =>                         // line 10
($context["entity"] ?? null), 1 =>                         // line 11
($context["entity_class"] ?? null), 2 =>                         // line 12
$context["fieldName"], 3 =>                         // line 13
$context["item"]), "method"));
                        // line 15
                        echo "
            ";
                    }
                    // line 17
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
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

    // line 21
    public function getrenderDynamicField($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle::macros.html.twig", 22);
            // line 23
            echo "    ";
            $context["dynamicField"] = $this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\DynamicFieldsExtensionAttributeDecorator')->getField(($context["entity"] ?? null), ($context["field"] ?? null));
            // line 24
            echo "    ";
            if (($context["dynamicField"] ?? null)) {
                // line 25
                echo "        ";
                echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                // line 26
($context["dynamicField"] ?? null), "label", array())), $this->getAttribute(                // line 27
$this, "formatDynamicFieldValue", array(0 =>                 // line 28
($context["entity"] ?? null), 1 => $this->getAttribute($this->getAttribute(                // line 29
($context["field"] ?? null), "entity", array()), "className", array()), 2 => $this->getAttribute(                // line 30
($context["field"] ?? null), "fieldName", array()), 3 =>                 // line 31
($context["dynamicField"] ?? null)), "method"));
                // line 33
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

    // line 37
    public function getformatDynamicFieldValue($__entity__ = null, $__entity_class__ = null, $__field_name__ = null, $__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "entity_class" => $__entity_class__,
            "field_name" => $__field_name__,
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "    ";
            $context["hasLink"] = false;
            // line 39
            echo "    ";
            $context["fieldValue"] = $this->getAttribute(($context["item"] ?? null), "value", array());
            // line 40
            echo "    ";
            if (twig_test_iterable(($context["fieldValue"] ?? null))) {
                // line 41
                echo "        ";
                if ($this->getAttribute(($context["fieldValue"] ?? null), "values", array(), "any", true, true)) {
                    // line 42
                    echo "
            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["fieldValue"] ?? null), "values", array()));
                    $context['_iterated'] = false;
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
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 44
                        echo "                ";
                        echo $this->getAttribute($this, "renderField", array(0 => $context["value"]), "method");
                        echo "
                ";
                        // line 45
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 46
                            echo "                    ,&nbsp;
                ";
                        }
                        // line 48
                        echo "            ";
                        $context['_iterated'] = true;
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 49
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "        ";
                } else {
                    // line 52
                    echo "            ";
                    echo $this->getAttribute($this, "renderField", array(0 => ($context["fieldValue"] ?? null)), "method");
                    echo "
        ";
                }
                // line 54
                echo "    ";
            } else {
                // line 55
                echo "        ";
                echo $this->getAttribute($this, "renderFormatted", array(0 => ($context["entity"] ?? null), 1 => ($context["entity_class"] ?? null), 2 => ($context["field_name"] ?? null), 3 => ($context["item"] ?? null)), "method");
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

    // line 59
    public function getrenderFormatted($__entity__ = null, $__entity_class__ = null, $__field_name__ = null, $__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "entity_class" => $__entity_class__,
            "field_name" => $__field_name__,
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo "    ";
            $context["value"] = $this->getAttribute(($context["item"] ?? null), "value", array());
            // line 61
            echo "    ";
            $context["type"] = $this->getAttribute(($context["item"] ?? null), "type", array());
            // line 62
            echo "
    ";
            // line 63
            if (((($context["type"] ?? null) == "text") && ($context["value"] ?? null))) {
                // line 64
                echo "        ";
                ob_start();
                // line 65
                echo "            ";
                echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true));
                echo "
        ";
                $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 67
                echo "    ";
            } elseif ((($context["type"] ?? null) == "html")) {
                // line 68
                echo "        ";
                echo _twig_default_filter($this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize(($context["value"] ?? null)), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"));
                echo "
    ";
            } elseif (((            // line 69
($context["type"] ?? null) == "boolean") &&  !(null === ($context["value"] ?? null)))) {
                // line 70
                echo "        ";
                $context["value"] = ((($context["value"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No")));
                // line 71
                echo "    ";
            } elseif ((($context["type"] ?? null) == "money")) {
                // line 72
                echo "        ";
                $context["value"] = ((($context["value"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["value"] ?? null))) : (null));
                // line 73
                echo "    ";
            } elseif ((($context["type"] ?? null) == "percent")) {
                // line 74
                echo "        ";
                $context["value"] = ((($context["value"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent(($context["value"] ?? null))) : (null));
                // line 75
                echo "    ";
            } elseif ((($context["type"] ?? null) == "date")) {
                // line 76
                echo "        ";
                $context["value"] = ((($context["value"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate(($context["value"] ?? null))) : (null));
                // line 77
                echo "    ";
            } elseif ((($context["type"] ?? null) == "datetime")) {
                // line 78
                echo "        ";
                $context["value"] = ((($context["value"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime(($context["value"] ?? null))) : (null));
                // line 79
                echo "    ";
            } elseif ((($context["type"] ?? null) == "file")) {
                // line 80
                echo "        ";
                ob_start();
                // line 81
                echo "            ";
                echo $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileView($this->env, ($context["entity"] ?? null), ($context["field_name"] ?? null), ($context["value"] ?? null));
                echo "
        ";
                $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 83
                echo "    ";
            } elseif ((($context["type"] ?? null) == "image")) {
                // line 84
                echo "        ";
                if ((null === ($context["entity_class"] ?? null))) {
                    // line 85
                    echo "            ";
                    $context["entityInfo"] = ($context["entity"] ?? null);
                    // line 86
                    echo "        ";
                } else {
                    // line 87
                    echo "            ";
                    $context["entityInfo"] = ($context["entity_class"] ?? null);
                    // line 88
                    echo "        ";
                }
                // line 89
                echo "        ";
                ob_start();
                // line 90
                echo "            ";
                echo $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getImageView($this->env, ($context["entity"] ?? null), ($context["value"] ?? null), ($context["entityInfo"] ?? null), ($context["field_name"] ?? null));
                echo "
        ";
                $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 92
                echo "    ";
            }
            // line 93
            echo "
    ";
            // line 94
            if ((($context["type"] ?? null) != "html")) {
                // line 95
                echo "        ";
                echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter(($context["value"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
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

    // line 99
    public function getrenderField($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 100
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle::macros.html.twig", 100);
            // line 101
            echo "
    ";
            // line 102
            if ($this->getAttribute(($context["value"] ?? null), "template", array(), "any", true, true)) {
                // line 103
                echo "        ";
                echo twig_include($this->env, $context, $this->getAttribute(($context["value"] ?? null), "template", array()), array("data" => ($context["value"] ?? null)));
                echo "
    ";
            } elseif (($this->getAttribute(            // line 104
($context["value"] ?? null), "link", array(), "any", true, true) && ($this->getAttribute(($context["value"] ?? null), "link", array()) != false))) {
                // line 105
                echo "        ";
                echo $context["ui"]->getrenderUrl($this->getAttribute(($context["value"] ?? null), "link", array()), $this->getAttribute(($context["value"] ?? null), "title", array()));
                echo "
    ";
            } elseif ($this->getAttribute(            // line 106
($context["value"] ?? null), "raw", array(), "any", true, true)) {
                // line 107
                echo "        ";
                echo $this->getAttribute(($context["value"] ?? null), "title", array());
                echo "
    ";
            } else {
                // line 109
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "title", array()));
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

    // line 113
    public function getdisplayLayoutActions($__actions__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "actions" => $__actions__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 114
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle::macros.html.twig", 114);
            // line 115
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 116
                echo "        ";
                $context["componentData"] = array();
                // line 117
                echo "        ";
                if ($this->getAttribute($context["button"], "page_component_module", array(), "any", true, true)) {
                    // line 118
                    echo "            ";
                    $context["componentData"] = array("page-component-module" => $this->getAttribute($context["button"], "page_component_module", array()));
                    // line 119
                    echo "
            ";
                    // line 120
                    if ($this->getAttribute($context["button"], "page_component_options", array(), "any", true, true)) {
                        // line 121
                        echo "                ";
                        $context["componentData"] = twig_array_merge(($context["componentData"] ?? null), array("page-component-options" => twig_jsonencode_filter($this->getAttribute(                        // line 122
$context["button"], "page_component_options", array()))));
                        // line 125
                        echo "            ";
                    }
                    // line 126
                    echo "
        ";
                }
                // line 128
                echo "        ";
                echo $context["UI"]->getbutton(array("path" => (($this->getAttribute(                // line 129
$context["button"], "void", array(), "any", true, true)) ? ("javascript:void(0);") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["button"], "route", array()), (($this->getAttribute($context["button"], "args", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "args", array()), array())) : (array()))))), "data" => twig_array_merge(array("url" => (($this->getAttribute(                // line 131
$context["button"], "void", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["button"], "route", array()), (($this->getAttribute($context["button"], "args", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "args", array()), array())) : (array())))) : (null))),                 // line 132
($context["componentData"] ?? null)), "iCss" => (($this->getAttribute(                // line 133
$context["button"], "iCss", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "iCss", array()), "")) : ("")), "aCss" => (($this->getAttribute(                // line 134
$context["button"], "aCss", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "aCss", array()), "")) : ("")), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(                // line 135
$context["button"], "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "title", array()), $this->getAttribute($context["button"], "name", array()))) : ($this->getAttribute($context["button"], "name", array())))), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                // line 136
$context["button"], "name", array()))));
                // line 137
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
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

    public function getTemplateName()
    {
        return "OroEntityConfigBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 137,  511 => 136,  510 => 135,  509 => 134,  508 => 133,  507 => 132,  506 => 131,  505 => 129,  503 => 128,  499 => 126,  496 => 125,  494 => 122,  492 => 121,  490 => 120,  487 => 119,  484 => 118,  481 => 117,  478 => 116,  473 => 115,  470 => 114,  458 => 113,  439 => 109,  433 => 107,  431 => 106,  426 => 105,  424 => 104,  419 => 103,  417 => 102,  414 => 101,  411 => 100,  399 => 99,  380 => 95,  378 => 94,  375 => 93,  372 => 92,  366 => 90,  363 => 89,  360 => 88,  357 => 87,  354 => 86,  351 => 85,  348 => 84,  345 => 83,  339 => 81,  336 => 80,  333 => 79,  330 => 78,  327 => 77,  324 => 76,  321 => 75,  318 => 74,  315 => 73,  312 => 72,  309 => 71,  306 => 70,  304 => 69,  299 => 68,  296 => 67,  290 => 65,  287 => 64,  285 => 63,  282 => 62,  279 => 61,  276 => 60,  261 => 59,  242 => 55,  239 => 54,  233 => 52,  230 => 51,  221 => 49,  208 => 48,  204 => 46,  202 => 45,  197 => 44,  179 => 43,  176 => 42,  173 => 41,  170 => 40,  167 => 39,  164 => 38,  149 => 37,  132 => 33,  130 => 31,  129 => 30,  128 => 29,  127 => 28,  126 => 27,  125 => 26,  123 => 25,  120 => 24,  117 => 23,  114 => 22,  101 => 21,  85 => 18,  79 => 17,  75 => 15,  73 => 13,  72 => 12,  71 => 11,  70 => 10,  69 => 9,  68 => 8,  66 => 7,  63 => 6,  58 => 5,  55 => 4,  52 => 3,  49 => 2,  36 => 1,  31 => 112,  28 => 98,  25 => 58,  22 => 36,  19 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle::macros.html.twig", "");
    }
}
