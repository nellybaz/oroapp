<?php

/* OroUIBundle::macros.html.twig */
class __TwigTemplate_a8fbd3df6ce4ae216016358d3bf0f7ded3b233e1fd893580e549eb1d30e1f0f3 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle::macros.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_prototype"));

            // line 2
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter($this->getAttribute(($context["widget"] ?? $this->getContext($context, "widget")), "vars", array())))) {
                // line 3
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? $this->getContext($context, "widget")), "vars", array()), "prototype", array());
                // line 4
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? $this->getContext($context, "widget")), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["form"] = ($context["widget"] ?? $this->getContext($context, "widget"));
                // line 7
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? $this->getContext($context, "widget")), "vars", array()), "full_name", array());
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <div data-content=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">
        <div class=\"row-oro oro-multiselect-holder\">
            <div class=\"float-holder \">
                ";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                ";
            // line 14
            if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()))) {
                // line 15
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
                echo "
                ";
            }
            // line 22
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "
            </div>
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\">×</button>
        </div>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 30
            echo "    ";
            $context["tooltip_parameters"] = ((array_key_exists("tooltip_parameters", $context)) ? (_twig_default_filter(($context["tooltip_parameters"] ?? $this->getContext($context, "tooltip_parameters")), array())) : (array()));
            // line 31
            echo "    ";
            // line 32
            echo "    ";
            $context["tooltip"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["tooltip_raw"] ?? $this->getContext($context, "tooltip_raw")), ($context["tooltip_parameters"] ?? $this->getContext($context, "tooltip_parameters")), "messages");
            // line 33
            echo "    ";
            if ((($context["tooltip"] ?? $this->getContext($context, "tooltip")) == ($context["tooltip_raw"] ?? $this->getContext($context, "tooltip_raw")))) {
                // line 34
                echo "        ";
                $context["tooltip"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["tooltip_raw"] ?? $this->getContext($context, "tooltip_raw")), ($context["tooltip_parameters"] ?? $this->getContext($context, "tooltip_parameters")), "tooltips");
                // line 35
                echo "    ";
            }
            // line 36
            echo "    ";
            if ( !twig_test_empty(($context["tooltip"] ?? $this->getContext($context, "tooltip")))) {
                // line 37
                echo "        ";
                $context["details_anchor"] = ((array_key_exists("details_anchor", $context)) ? (_twig_default_filter(($context["details_anchor"] ?? $this->getContext($context, "details_anchor")), null)) : (null));
                // line 38
                echo "        ";
                $context["details_link"] = ((array_key_exists("details_link", $context)) ? (_twig_default_filter(($context["details_link"] ?? $this->getContext($context, "details_link")), null)) : (null));
                // line 39
                echo "        ";
                $context["details_enabled"] = ((array_key_exists("details_enabled", $context)) ? (_twig_default_filter(($context["details_enabled"] ?? $this->getContext($context, "details_enabled")), false)) : (false));
                // line 40
                echo "        ";
                $context["tooltip_placement"] = ((array_key_exists("tooltip_placement", $context)) ? (_twig_default_filter(($context["tooltip_placement"] ?? $this->getContext($context, "tooltip_placement")), null)) : (null));
                // line 41
                echo "
        ";
                // line 43
                echo "        ";
                if (((($context["details_enabled"] ?? $this->getContext($context, "details_enabled")) || ($context["details_anchor"] ?? $this->getContext($context, "details_anchor"))) || ($context["details_link"] ?? $this->getContext($context, "details_link")))) {
                    // line 44
                    echo "            ";
                    $context["helpLink"] = ((array_key_exists("details_link", $context)) ? (_twig_default_filter(($context["details_link"] ?? $this->getContext($context, "details_link")), $this->env->getExtension('Oro\Bundle\HelpBundle\Twig\HelpExtension')->getHelpLinkUrl())) : ($this->env->getExtension('Oro\Bundle\HelpBundle\Twig\HelpExtension')->getHelpLinkUrl()));
                    // line 45
                    echo "            ";
                    if (($context["details_anchor"] ?? $this->getContext($context, "details_anchor"))) {
                        // line 46
                        echo "                ";
                        $context["helpLink"] = ((($context["helpLink"] ?? $this->getContext($context, "helpLink")) . "#") . ($context["details_anchor"] ?? $this->getContext($context, "details_anchor")));
                        // line 47
                        echo "            ";
                    }
                    // line 48
                    echo "            ";
                    $context["tooltip"] = (((((($context["tooltip"] ?? $this->getContext($context, "tooltip")) . "<div class=\"clearfix\"><div class=\"pull-right\"><a href=\"") .                     // line 49
($context["helpLink"] ?? $this->getContext($context, "helpLink"))) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.form.tooltip.read_more")) . "</a></div></div>");
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
($context["tooltip"] ?? $this->getContext($context, "tooltip"))) . "</div>");
                // line 59
                echo "
        <i class=\"fa-info-circle tooltip-icon\"
           ";
                // line 61
                if (($context["tooltip_placement"] ?? $this->getContext($context, "tooltip_placement"))) {
                    echo "data-placement=\"";
                    echo twig_escape_filter($this->env, ($context["tooltip_placement"] ?? $this->getContext($context, "tooltip_placement")), "html", null, true);
                    echo "\"";
                }
                // line 62
                echo "           data-content=\"";
                echo twig_escape_filter($this->env, ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "html", null, true);
                echo "\"
           data-toggle=\"popover\"></i>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attibuteRow"));

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
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "</div>
            ";
            } else {
                // line 80
                echo "                <div class=\"control-label\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "value", array()), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "hint", array()), "html", null, true);
                echo "</strong></div>
            ";
            }
            // line 82
            echo "        </div>
        ";
            // line 83
            if (twig_length_filter($this->env, ($context["additionalData"] ?? $this->getContext($context, "additionalData")))) {
                // line 84
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["additionalData"] ?? $this->getContext($context, "additionalData")), "data", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 85
                    echo "                <div class=\"clearfix-oro\">
                    <div class=\"control-label\">";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], $this->getAttribute(($context["additionalData"] ?? $this->getContext($context, "additionalData")), "field", array())), "html", null, true);
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
            echo $this->getAttribute($this, "renderAttribute", array(0 => ($context["title"] ?? $this->getContext($context, "title")), 1 => ($context["attributeValue"] ?? $this->getContext($context, "attributeValue"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderAttribute"));

            // line 101
            echo "    <div class=\"control-group attribute-row\">
        <label class=\"control-label\">";
            // line 102
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            ";
            // line 104
            echo ($context["data"] ?? $this->getContext($context, "data"));
            echo "
        </div>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderProperty"));

            // line 118
            echo "    ";
            echo $this->getAttribute($this, "renderHtmlProperty", array(0 => ($context["title"] ?? $this->getContext($context, "title")), 1 => twig_escape_filter($this->env, ($context["data"] ?? $this->getContext($context, "data"))), 2 => ($context["entity"] ?? $this->getContext($context, "entity")), 3 => ($context["fieldName"] ?? $this->getContext($context, "fieldName"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderHtmlProperty"));

            // line 130
            echo "    ";
            if (((array_key_exists("entity", $context) && array_key_exists("fieldName", $context)) &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? $this->getContext($context, "entity")), ($context["fieldName"] ?? $this->getContext($context, "fieldName"))))) {
                // line 131
                echo "    ";
            } else {
                // line 132
                echo "        ";
                echo $this->getAttribute($this, "renderAttribute", array(0 => ($context["title"] ?? $this->getContext($context, "title")), 1 => (("<div class=\"control-label\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? $this->getContext($context, "data")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty")))) . "</div>")), "method");
                echo "
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderCollapsibleHtmlProperty"));

            // line 145
            echo "    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? $this->getContext($context, "entity")), ($context["fieldName"] ?? $this->getContext($context, "fieldName")))) {
                // line 146
                echo "        ";
                $context["collapseView"] = array("storageKey" => (("collapseBlock[" . $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(                // line 147
($context["entity"] ?? $this->getContext($context, "entity")))) . "]"), "uid" => (((("[" .                 // line 148
($context["title"] ?? $this->getContext($context, "title"))) . "][") . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array())) . "]"), "animationSpeed" => 0, "closeClass" => "overflows", "checkOverflow" => true, "open" => false);
                // line 154
                echo "        <div class=\"collapse-block\" data-page-component-collapse=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["collapseView"] ?? $this->getContext($context, "collapseView"))), "html", null, true);
                echo "\">
            ";
                // line 155
                echo $this->getAttribute($this, "renderAttribute", array(0 => ($context["title"] ?? $this->getContext($context, "title")), 1 => (((((((("<div class=\"control-label\" data-collapse-container>" . ((                // line 157
array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? $this->getContext($context, "data")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty")))) . "</div>") . "<a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(                // line 159
($context["moreText"] ?? $this->getContext($context, "moreText")))) . "</a>") . "<a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(                // line 160
($context["lessText"] ?? $this->getContext($context, "lessText")))) . "</a>")), "method");
                // line 161
                echo "
        </div>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderSwitchableHtmlProperty"));

            // line 173
            echo "    ";
            if ($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_form.wysiwyg_enabled")) {
                // line 174
                echo "        ";
                $context["data"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize(($context["data"] ?? $this->getContext($context, "data")));
                // line 175
                echo "    ";
            } else {
                // line 176
                echo "        ";
                $context["data"] = nl2br(twig_escape_filter($this->env, strip_tags(($context["data"] ?? $this->getContext($context, "data"))), "html", null, true));
                // line 177
                echo "    ";
            }
            // line 178
            echo "
    ";
            // line 179
            echo $this->getAttribute($this, "renderAttribute", array(0 => ($context["title"] ?? $this->getContext($context, "title")), 1 => (("<div class=\"control-label html-property\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? $this->getContext($context, "data")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty")))) . "</div>")), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderColorProperty"));

            // line 190
            echo "    ";
            if ( !(null === ($context["data"] ?? $this->getContext($context, "data")))) {
                // line 191
                echo "       ";
                $context["data"] = (((((("<i class=\"color hide-text\" title=\"" . ($context["data"] ?? $this->getContext($context, "data"))) . "\" style=\"background-color: ") . ($context["data"] ?? $this->getContext($context, "data"))) . ";\">") . ($context["data"] ?? $this->getContext($context, "data"))) . "</i>");
                // line 192
                echo "    ";
            }
            // line 193
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => ($context["title"] ?? $this->getContext($context, "title")), 1 => (("<div class=\"control-label\">" . _twig_default_filter(((array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? $this->getContext($context, "data")), ($context["empty"] ?? $this->getContext($context, "empty")))) : (($context["empty"] ?? $this->getContext($context, "empty")))), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))) . "</div>")), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            // line 209
            echo "    ";
            // line 210
            echo "    ";
            $context["iconHtml"] = "";
            // line 211
            echo "    ";
            if (($this->getAttribute(($context["parameters"] ?? null), "iCss", array(), "any", true, true) && $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "iCss", array()))) {
                // line 212
                echo "        ";
                ob_start();
                // line 213
                echo "        <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "iCss", array()), "html", null, true);
                echo " hide-text\" >
            ";
                // line 214
                if ( !(($this->getAttribute(($context["parameters"] ?? null), "noIconText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "noIconText", array()), false)) : (false))) {
                    // line 215
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "label", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "path", array()), "html", null, true);
            echo "\"
        ";
            // line 223
            if ($this->getAttribute(($context["parameters"] ?? null), "id", array(), "any", true, true)) {
                // line 224
                echo "            id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "id", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 226
            echo "        ";
            if ($this->getAttribute(($context["parameters"] ?? null), "data", array(), "any", true, true)) {
                // line 227
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "data", array()));
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
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "class", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "class", array())) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "aCss", array())) : ("")), "html", null, true);
            echo "\"
        ";
            // line 232
            if ($this->getAttribute(($context["parameters"] ?? null), "title", array(), "any", true, true)) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "title", array()), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_trim_filter(($context["iconHtml"] ?? $this->getContext($context, "iconHtml")));
            // line 233
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "label", array())), "html", null, true);
            echo "
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button"));

            // line 250
            echo "    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 251
            echo $this->getAttribute($this, "link", array(0 => twig_array_merge(($context["parameters"] ?? $this->getContext($context, "parameters")), array("class" => "btn back icons-holder-text"))), "method");
            echo "
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dropdownButton"));

            // line 266
            echo "    <div class=\"btn-group\">
        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
            // line 268
            if ($this->getAttribute(($context["parameters"] ?? null), "iCss", array(), "any", true, true)) {
                // line 269
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "iCss", array()), "html", null, true);
                echo "\"></i>
            ";
            }
            // line 271
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "label", array()), "html", null, true);
            echo "
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu ";
            // line 274
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "aCss", array())) : ("")), "html", null, true);
            echo "\">
            ";
            // line 275
            if (($this->getAttribute(($context["parameters"] ?? null), "elements", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "elements", array())))) {
                // line 276
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "elements", array()));
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
            if (($this->getAttribute(($context["parameters"] ?? null), "html", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "html", array())))) {
                // line 281
                echo "                ";
                echo $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "html", array());
                echo "
            ";
            }
            // line 283
            echo "        </ul>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dropdownItem"));

            // line 299
            echo "    <li>";
            echo $this->getAttribute($this, "link", array(0 => ($context["parameters"] ?? $this->getContext($context, "parameters"))), "method");
            echo "</li>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "pinnedDropdownButton"));

            // line 312
            echo "    ";
            if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() || (($this->getAttribute(($context["parameters"] ?? null), "mobileEnabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "mobileEnabled", array()), false)) : (false)))) {
                // line 313
                echo "        ";
                $context["options"] = (($this->getAttribute(($context["parameters"] ?? null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "options", array()), array())) : (array()));
                // line 314
                echo "        ";
                $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("widgetModule" => (($this->getAttribute(                // line 315
($context["options"] ?? null), "widgetModule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "widgetModule", array()), "oroui/js/content-processor/pinned-dropdown-button")) : ("oroui/js/content-processor/pinned-dropdown-button")), "widgetName" => (($this->getAttribute(                // line 316
($context["options"] ?? null), "widgetName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "widgetName", array()), "pinnedDropdownButtonProcessor")) : ("pinnedDropdownButtonProcessor")), "groupKey" => (($this->getAttribute(                // line 317
($context["parameters"] ?? null), "groupKey", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "groupKey", array())) : ("")), "useMainButtonsClone" => true));
                // line 320
                echo "        ";
                ob_start();
                // line 321
                echo "            <div class=\"pull-right pinned-dropdown\"
                 ";
                // line 322
                echo $this->getAttribute($this, "renderAttributes", array(0 => twig_array_merge((($this->getAttribute(($context["parameters"] ?? null), "dataAttributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "dataAttributes", array()), array())) : (array())), array("page-component-module" => "oroui/js/app/components/jquery-widget-component", "page-component-options" =>                 // line 324
($context["options"] ?? $this->getContext($context, "options"))))), "method");
                // line 325
                echo ">
                ";
                // line 326
                echo $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "html", array());
                echo "
            </div>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 329
                echo "    ";
            } else {
                // line 330
                echo "        ";
                echo $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "html", array());
                echo "
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dropdownSaveButton"));

            // line 338
            echo "    ";
            $context["parameters"] = twig_array_merge(array("groupKey" => "saveButtons", "options" => array("moreButtonAttrs" => array("class" => "btn-success"))), ((            // line 345
array_key_exists("parameters", $context)) ? (_twig_default_filter(($context["parameters"] ?? $this->getContext($context, "parameters")), array())) : (array())));
            // line 346
            echo "    ";
            echo $this->getAttribute($this, "pinnedDropdownButton", array(0 => ($context["parameters"] ?? $this->getContext($context, "parameters"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "cancelButton"));

            // line 356
            echo "    ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 357
                echo "        ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel");
                // line 358
                echo "    ";
            }
            // line 359
            echo "    ";
            echo $this->getAttribute($this, "button", array(0 => array("path" => ($context["path"] ?? $this->getContext($context, "path")), "title" => ($context["label"] ?? $this->getContext($context, "label")), "label" => ($context["label"] ?? $this->getContext($context, "label")), "data" => array("action" => "cancel"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "editButton"));

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
                $context["iCss"] = twig_array_merge(twig_split_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "iCss", array()), " "), ($context["iCss"] ?? $this->getContext($context, "iCss")));
                // line 378
                echo "    ";
            }
            // line 379
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) {
                // line 380
                echo "        ";
                $context["aCss"] = twig_array_merge(twig_split_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "aCss", array()), " "), ($context["aCss"] ?? $this->getContext($context, "aCss")));
                // line 381
                echo "    ";
            }
            // line 382
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "title", array(), "any", true, true)) {
                // line 383
                echo "        ";
                $context["title"] = $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "title", array());
                // line 384
                echo "    ";
            } else {
                // line 385
                echo "        ";
                $context["title"] = (($this->getAttribute(($context["parameters"] ?? null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.edit_entity", array("%entityName%" => $this->getAttribute(                // line 386
($context["parameters"] ?? $this->getContext($context, "parameters")), "entity_label", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.edit")));
                // line 389
                echo "    ";
            }
            // line 390
            echo "    ";
            $context["label"] = (($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true)) ? ($this->getAttribute(            // line 391
($context["parameters"] ?? $this->getContext($context, "parameters")), "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.edit")));
            // line 394
            echo "    ";
            $context["parameters"] = twig_array_merge(($context["parameters"] ?? $this->getContext($context, "parameters")), array("iCss" => twig_join_filter(            // line 395
($context["iCss"] ?? $this->getContext($context, "iCss")), " "), "aCss" => twig_join_filter(            // line 396
($context["aCss"] ?? $this->getContext($context, "aCss")), " "), "title" =>             // line 397
($context["title"] ?? $this->getContext($context, "title")), "label" =>             // line 398
($context["label"] ?? $this->getContext($context, "label"))));
            // line 400
            echo "
    ";
            // line 402
            echo "    ";
            $context["parameters"] = twig_array_merge(($context["parameters"] ?? $this->getContext($context, "parameters")), array("path" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->addUrlQuery($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "path", array(), "array"))));
            // line 403
            echo "
    ";
            // line 404
            echo $this->getAttribute($this, "button", array(0 => ($context["parameters"] ?? $this->getContext($context, "parameters"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "addButton"));

            // line 419
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true)) {
                // line 420
                echo "        ";
                $context["label"] = $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "label", array());
                // line 421
                echo "    ";
            } else {
                // line 422
                echo "        ";
                $context["label"] = (($this->getAttribute(($context["parameters"] ?? null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->getAttribute(                // line 423
($context["parameters"] ?? $this->getContext($context, "parameters")), "entity_label", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create")));
                // line 426
                echo "    ";
            }
            // line 427
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "title", array(), "any", true, true)) {
                // line 428
                echo "        ";
                $context["title"] = $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "title", array());
                // line 429
                echo "    ";
            } else {
                // line 430
                echo "        ";
                $context["title"] = (($this->getAttribute(($context["parameters"] ?? null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->getAttribute(                // line 431
($context["parameters"] ?? $this->getContext($context, "parameters")), "entity_label", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create")));
                // line 434
                echo "    ";
            }
            // line 435
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "path", array()), "html", null, true);
            echo "\"
        class=\"btn main-group btn-primary pull-right ";
            // line 436
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "aCss", array())) : ("")), "html", null, true);
            echo "\"
        title=\"";
            // line 437
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "\"
    >
        ";
            // line 439
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
    </a>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "deleteButton"));

            // line 459
            echo "    ";
            $context["aCss"] = "btn icons-holder-text";
            // line 460
            echo "
    ";
            // line 461
            if (($this->getAttribute(($context["parameters"] ?? null), "disabled", array(), "any", true, true) && $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "disabled", array()))) {
                // line 462
                echo "        ";
                $context["aCss"] = (($context["aCss"] ?? $this->getContext($context, "aCss")) . " disabled");
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
                $context["aCss"] = ((($context["aCss"] ?? $this->getContext($context, "aCss")) . " ") . $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "aCss", array()));
                // line 467
                echo "    ";
            }
            // line 468
            echo "
    ";
            // line 469
            $context["parameters"] = twig_array_merge(($context["parameters"] ?? $this->getContext($context, "parameters")), array("aCss" => ($context["aCss"] ?? $this->getContext($context, "aCss"))));
            // line 470
            echo "
    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 472
            echo $this->getAttribute($this, "deleteLink", array(0 => ($context["parameters"] ?? $this->getContext($context, "parameters"))), "method");
            echo "
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "deleteLink"));

            // line 477
            echo "    ";
            $context["entityLabel"] = (($this->getAttribute(($context["parameters"] ?? null), "entity_label", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "entity_label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.item")));
            // line 478
            echo "    ";
            $context["label"] = (($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete")));
            // line 479
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "title", array(), "any", true, true)) {
                // line 480
                echo "        ";
                $context["title"] = $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "title", array());
                // line 481
                echo "    ";
            } else {
                // line 482
                echo "        ";
                $context["title"] = (($this->getAttribute(($context["parameters"] ?? null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete_entity", array("%entityName%" => $this->getAttribute(                // line 483
($context["parameters"] ?? $this->getContext($context, "parameters")), "entity_label", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete")));
                // line 486
                echo "    ";
            }
            // line 487
            echo "
    ";
            // line 488
            $context["message"] = (($this->getAttribute(($context["parameters"] ?? null), "dataMessage", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "dataMessage", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete_confirm", array("%entity_label%" => ($context["entityLabel"] ?? $this->getContext($context, "entityLabel"))))));
            // line 489
            echo "    ";
            $context["successMessage"] = (($this->getAttribute(($context["parameters"] ?? null), "successMessage", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "successMessage", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.delete_message", array("%entity_label%" => ($context["entityLabel"] ?? $this->getContext($context, "entityLabel"))))));
            // line 490
            echo "    ";
            $context["url"] = (($this->getAttribute(($context["parameters"] ?? null), "dataUrl", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "dataUrl", array())) : (""));
            // line 491
            echo "    ";
            $context["linkParams"] = array("data" => array("message" =>             // line 493
($context["message"] ?? $this->getContext($context, "message")), "success-message" =>             // line 494
($context["successMessage"] ?? $this->getContext($context, "successMessage")), "url" =>             // line 495
($context["url"] ?? $this->getContext($context, "url"))), "iCss" => (($this->getAttribute(            // line 497
($context["parameters"] ?? null), "iCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "iCss", array())) : ("fa-trash-o")), "aCss" => $this->getAttribute(            // line 498
($context["parameters"] ?? $this->getContext($context, "parameters")), "aCss", array()), "title" =>             // line 499
($context["title"] ?? $this->getContext($context, "title")), "label" =>             // line 500
($context["label"] ?? $this->getContext($context, "label")), "path" => "javascript:void(0);");
            // line 503
            echo "

    ";
            // line 505
            if ($this->getAttribute(($context["parameters"] ?? null), "dataId", array(), "any", true, true)) {
                // line 506
                echo "        ";
                $context["data"] = twig_array_merge($this->getAttribute(($context["linkParams"] ?? $this->getContext($context, "linkParams")), "data", array()), array("id" => $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "dataId", array())));
                // line 507
                echo "        ";
                $context["linkParams"] = twig_array_merge(($context["linkParams"] ?? $this->getContext($context, "linkParams")), array("data" => ($context["data"] ?? $this->getContext($context, "data"))));
                // line 508
                echo "    ";
            }
            // line 509
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "dataRedirect", array(), "any", true, true)) {
                // line 510
                echo "        ";
                $context["data"] = twig_array_merge($this->getAttribute(($context["linkParams"] ?? $this->getContext($context, "linkParams")), "data", array()), array("redirect" => $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "dataRedirect", array())));
                // line 511
                echo "        ";
                $context["linkParams"] = twig_array_merge(($context["linkParams"] ?? $this->getContext($context, "linkParams")), array("data" => ($context["data"] ?? $this->getContext($context, "data"))));
                // line 512
                echo "    ";
            }
            // line 513
            echo "    ";
            if ($this->getAttribute(($context["parameters"] ?? null), "data", array(), "any", true, true)) {
                // line 514
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "data", array()));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 515
                    echo "            ";
                    $context["data"] = twig_array_merge($this->getAttribute(($context["linkParams"] ?? $this->getContext($context, "linkParams")), "data", array()), array($context["dataItemName"] => $context["dataItemValue"]));
                    // line 516
                    echo "            ";
                    $context["linkParams"] = twig_array_merge(($context["linkParams"] ?? $this->getContext($context, "linkParams")), array("data" => ($context["data"] ?? $this->getContext($context, "data"))));
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
            echo $this->getAttribute($this, "link", array(0 => ($context["linkParams"] ?? $this->getContext($context, "linkParams"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "clientLink"));

            // line 542
            echo "    ";
            ob_start();
            // line 543
            echo "        <a href=\"javascript: void(0);\" class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "class", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "class", array())) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "aCss", array())) : ("")), "html", null, true);
            echo "\"
            title=\"";
            // line 544
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "title", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "title", array())) : ((($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "label", array())) : ("")))), "html", null, true);
            echo "\"
            ";
            // line 545
            if ($this->getAttribute(($context["parameters"] ?? null), "id", array(), "any", true, true)) {
                // line 546
                echo "                id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "id", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 548
            if ($this->getAttribute(($context["parameters"] ?? null), "dataId", array(), "any", true, true)) {
                // line 549
                echo "data-id =\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "dataId", array()), "html", null, true);
                echo "\"";
            }
            // line 551
            if ($this->getAttribute(($context["parameters"] ?? null), "dataUrlRaw", array(), "any", true, true)) {
                // line 552
                echo "data-url=\"";
                echo $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "dataUrlRaw", array());
                echo "\"
            ";
            } elseif ($this->getAttribute(            // line 553
($context["parameters"] ?? null), "dataUrl", array(), "any", true, true)) {
                // line 554
                echo "                data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "dataUrl", array()), "html", null, true);
                echo "\"";
            }
            // line 556
            if ($this->getAttribute(($context["parameters"] ?? null), "successMessage", array(), "any", true, true)) {
                // line 557
                echo "data-success-message=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "successMessage", array()), "html", null, true);
                echo "\"";
            }
            // line 559
            if ($this->getAttribute(($context["parameters"] ?? null), "dataRedirect", array(), "any", true, true)) {
                // line 560
                echo "data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "dataRedirect", array()), "html", null, true);
                echo "\"";
            }
            // line 562
            if (($this->getAttribute(($context["parameters"] ?? null), "visible", array(), "any", true, true) &&  !$this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "visible", array()))) {
                // line 563
                echo "style=\"display: none\"";
            }
            // line 565
            if (($this->getAttribute(($context["parameters"] ?? null), "widget", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "widget", array())))) {
                // line 566
                $context["options"] = $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "widget", array());
                // line 567
                if ( !$this->getAttribute(($context["options"] ?? null), "createOnEvent", array(), "any", true, true)) {
                    // line 568
                    $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("createOnEvent" => (($this->getAttribute(                    // line 569
($context["options"] ?? null), "event", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "event", array()), "click")) : ("click"))));
                }
                // line 572
                echo $this->getAttribute($this, "renderWidgetAttributes", array(0 => ($context["options"] ?? $this->getContext($context, "options"))), "method");
            }
            // line 574
            if ($this->getAttribute(($context["parameters"] ?? null), "pageComponent", array(), "any", true, true)) {
                // line 575
                echo $this->getAttribute($this, "renderPageComponentAttributes", array(0 => $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "pageComponent", array())), "method");
            }
            // line 577
            if (($this->getAttribute(($context["parameters"] ?? null), "dataAttributes", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "dataAttributes", array())))) {
                // line 578
                echo $this->getAttribute($this, "renderAttributes", array(0 => $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "dataAttributes", array())), "method");
            }
            // line 579
            echo ">";
            // line 580
            $context["labelInIcon"] = (($this->getAttribute(($context["parameters"] ?? null), "labelInIcon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "labelInIcon", array()), true)) : (true));
            // line 581
            if ($this->getAttribute(($context["parameters"] ?? null), "iCss", array(), "any", true, true)) {
                // line 582
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "iCss", array()), "html", null, true);
                if (($context["labelInIcon"] ?? $this->getContext($context, "labelInIcon"))) {
                    echo " hide-text";
                }
                echo "\">";
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true) && ($context["labelInIcon"] ?? $this->getContext($context, "labelInIcon")))) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "label", array())) : ("")), "html", null, true);
                echo "</i>";
            }
            // line 584
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "label", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "label", array())) : ("")), "html", null, true);
            // line 585
            echo "</a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderPageComponentAttributes"));

            // line 593
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageComponent"] ?? $this->getContext($context, "pageComponent")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 594
                echo "        ";
                if (($context["key"] == "layout")) {
                    // line 595
                    echo "            data-layout=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["pageComponent"] ?? $this->getContext($context, "pageComponent")), "layout", array()), "html", null, true);
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderWidgetAttributes"));

            // line 610
            echo "    ";
            $context["pageComponent"] = array("module" => "oroui/js/app/components/widget-component", "options" =>             // line 612
($context["options"] ?? $this->getContext($context, "options")));
            // line 614
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["options"] ?? null), "options", array(), "any", false, true), "pageComponentName", array(), "any", true, true)) {
                // line 615
                echo "        ";
                $context["pageComponent"] = twig_array_merge(($context["pageComponent"] ?? $this->getContext($context, "pageComponent")), array("name" => $this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "options", array()), "pageComponentName", array())));
                // line 616
                echo "    ";
            }
            // line 617
            echo "    ";
            echo $this->getAttribute($this, "renderPageComponentAttributes", array(0 => ($context["pageComponent"] ?? $this->getContext($context, "pageComponent"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderWidgetDataAttributes"));

            // line 624
            echo "    ";
            if ( !$this->getAttribute(($context["options"] ?? null), "createOnEvent", array(), "any", true, true)) {
                // line 625
                echo "        ";
                $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("createOnEvent" => (($this->getAttribute(                // line 626
($context["options"] ?? null), "event", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "event", array()), "click")) : ("click"))));
                // line 628
                echo "    ";
            }
            // line 629
            echo "    ";
            echo $this->getAttribute($this, "renderWidgetAttributes", array(0 => ($context["options"] ?? $this->getContext($context, "options"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderAttributes"));

            // line 633
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
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
                if ( !twig_test_empty(($context["prefix"] ?? $this->getContext($context, "prefix")))) {
                    echo twig_escape_filter($this->env, ($context["prefix"] ?? $this->getContext($context, "prefix")), "html", null, true);
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "clientButton"));

            // line 658
            echo "    ";
            // line 659
            echo "        <div class=\"pull-left btn-group icons-holder\">
            ";
            // line 660
            echo $this->getAttribute($this, "clientLink", array(0 => twig_array_merge(($context["parameters"] ?? $this->getContext($context, "parameters")), array("class" => "btn icons-holder-text"))), "method");
            echo "
        </div>
    ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "ajaxButton"));

            // line 684
            echo "    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 685
            echo $this->getAttribute($this, "ajaxLink", array(0 => twig_array_merge(($context["parameters"] ?? $this->getContext($context, "parameters")), array("class" => "btn icons-holder-text"))), "method");
            echo "
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "ajaxLink"));

            // line 708
            echo "    ";
            $context["additionalParameters"] = array("pageComponent" => array("module" => "oroui/js/app/components/ajax-button"), "dataAttributes" => array("method" => (($this->getAttribute(            // line 713
($context["parameters"] ?? null), "dataMethod", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "dataMethod", array())) : ("GET")), "error-message" => (($this->getAttribute(            // line 714
($context["parameters"] ?? null), "errorMessage", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "errorMessage", array())) : ("oro.ui.unexpected_error"))));
            // line 717
            echo "
    ";
            // line 718
            echo $this->getAttribute($this, "clientLink", array(0 => twig_array_merge(($context["parameters"] ?? $this->getContext($context, "parameters")), ($context["additionalParameters"] ?? $this->getContext($context, "additionalParameters")))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dropdownClientItem"));

            // line 738
            echo "    <li>";
            echo $this->getAttribute($this, "clientLink", array(0 => ($context["parameters"] ?? $this->getContext($context, "parameters"))), "method");
            echo "</li>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "saveAndCloseButton"));

            // line 748
            echo "    ";
            $context["defaultParameters"] = array("class" => "btn-success", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and Close"));
            // line 752
            echo "
    ";
            // line 753
            if (twig_test_iterable(($context["parametersOrLabel"] ?? $this->getContext($context, "parametersOrLabel")))) {
                // line 754
                echo "        ";
                $context["parameters"] = ($context["parametersOrLabel"] ?? $this->getContext($context, "parametersOrLabel"));
                // line 755
                echo "    ";
            } else {
                // line 756
                echo "        ";
                // line 757
                echo "        ";
                $context["parameters"] = array("label" => ((                // line 758
array_key_exists("parametersOrLabel", $context)) ? (_twig_default_filter(($context["parametersOrLabel"] ?? $this->getContext($context, "parametersOrLabel")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and Close"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and Close"))), "action" => "save_and_close");
                // line 761
                echo "    ";
            }
            // line 762
            echo "
    ";
            // line 763
            $context["parameters"] = twig_array_merge(($context["defaultParameters"] ?? $this->getContext($context, "defaultParameters")), ($context["parameters"] ?? $this->getContext($context, "parameters")));
            // line 764
            echo "
    ";
            // line 765
            echo $this->getAttribute($this, "saveActionButton", array(0 => ($context["parameters"] ?? $this->getContext($context, "parameters"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "saveAndStayButton"));

            // line 775
            echo "    ";
            if (twig_test_iterable(($context["parametersOrLabel"] ?? $this->getContext($context, "parametersOrLabel")))) {
                // line 776
                echo "        ";
                $context["parameters"] = ($context["parametersOrLabel"] ?? $this->getContext($context, "parametersOrLabel"));
                // line 777
                echo "    ";
            } else {
                // line 778
                echo "        ";
                // line 779
                echo "        ";
                $context["parameters"] = array("label" => ((                // line 780
array_key_exists("parametersOrLabel", $context)) ? (_twig_default_filter(($context["parametersOrLabel"] ?? $this->getContext($context, "parametersOrLabel")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"))), "action" => "save_and_stay");
                // line 783
                echo "    ";
            }
            // line 784
            echo "
    ";
            // line 785
            echo $this->getAttribute($this, "saveActionButton", array(0 => ($context["parameters"] ?? $this->getContext($context, "parameters"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "saveAndNewButton"));

            // line 793
            echo "    ";
            $context["defaultParameters"] = array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and New"));
            // line 796
            echo "
    ";
            // line 797
            $context["parameters"] = twig_array_merge(($context["defaultParameters"] ?? $this->getContext($context, "defaultParameters")), ($context["parameters"] ?? $this->getContext($context, "parameters")));
            // line 798
            echo "
    ";
            // line 799
            echo $this->getAttribute($this, "saveActionButton", array(0 => ($context["parameters"] ?? $this->getContext($context, "parameters"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "saveActionButton"));

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
                $context["action"] = array("route" => $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "route", array()));
                // line 831
                echo "        ";
                if ($this->getAttribute(($context["parameters"] ?? null), "params", array(), "any", true, true)) {
                    // line 832
                    echo "            ";
                    $context["action"] = twig_array_merge(($context["action"] ?? $this->getContext($context, "action")), array("params" => $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "params", array())));
                    // line 833
                    echo "        ";
                }
                // line 834
                echo "        ";
                $context["parameters"] = twig_array_merge(($context["parameters"] ?? $this->getContext($context, "parameters")), array("action" => twig_jsonencode_filter(($context["action"] ?? $this->getContext($context, "action")))));
                // line 835
                echo "    ";
            }
            // line 836
            echo "
    ";
            // line 837
            $context["parameters"] = twig_array_merge(($context["defaultParameters"] ?? $this->getContext($context, "defaultParameters")), ($context["parameters"] ?? $this->getContext($context, "parameters")));
            // line 838
            echo "
    ";
            // line 839
            echo $this->getAttribute($this, "buttonType", array(0 => ($context["parameters"] ?? $this->getContext($context, "parameters"))), "method");
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buttonType"));

            // line 853
            echo "    ";
            $context["defaultParameters"] = array("type" => "button");
            // line 856
            echo "    ";
            $context["parameters"] = twig_array_merge(($context["defaultParameters"] ?? $this->getContext($context, "defaultParameters")), ($context["parameters"] ?? $this->getContext($context, "parameters")));
            // line 857
            echo "    <div class=\"btn-group\">
        <button type=\"";
            // line 858
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "type", array()), "html", null, true);
            echo "\" class=\"btn ";
            if ($this->getAttribute(($context["parameters"] ?? null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "class", array()), "html", null, true);
            }
            if ($this->getAttribute(($context["parameters"] ?? null), "action", array(), "any", true, true)) {
                echo " action-button";
            }
            echo "\"
                ";
            // line 859
            if ($this->getAttribute(($context["parameters"] ?? null), "action", array(), "any", true, true)) {
                echo "data-action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "action", array()), "html", null, true);
                echo "\"";
            }
            // line 860
            echo "                ";
            if ($this->getAttribute(($context["parameters"] ?? null), "data", array(), "any", true, true)) {
                // line 861
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "data", array()));
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "label", array()), "html", null, true);
            echo "
        </button>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buttonSeparator"));

            // line 874
            echo "    <div class=\"pull-left\">
        <div class=\"separator-btn\"></div>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "scrollSubblock"));

            // line 889
            echo "    ";
            $context["spanClass"] = ((array_key_exists("spanClass", $context)) ? (_twig_default_filter(($context["spanClass"] ?? $this->getContext($context, "spanClass")), "responsive-cell")) : ("responsive-cell"));
            // line 890
            echo "    ";
            // line 898
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, ($context["spanClass"] ?? $this->getContext($context, "spanClass")), "html", null, true);
            echo "\">
    ";
            // line 899
            if (twig_length_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")))) {
                echo "<h5 class=\"user-fieldset\"><span>";
                echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
                echo "</span></h5>";
            }
            // line 900
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "scrollBlock"));

            // line 924
            echo "    ";
            $context["cols"] = twig_length_filter($this->env, ($context["subblocks"] ?? $this->getContext($context, "subblocks")));
            // line 925
            echo "    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">";
            // line 926
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            if (array_key_exists("headerLinkContent", $context)) {
                echo twig_escape_filter($this->env, ($context["headerLinkContent"] ?? $this->getContext($context, "headerLinkContent")), "html", null, true);
            }
            echo "</h4>
        <div id=\"";
            // line 927
            echo twig_escape_filter($this->env, ($context["blockId"] ?? $this->getContext($context, "blockId")), "html", null, true);
            echo "\" class=\"scrollspy-nav-target\"></div>
        <div class=\"section-content\">
            <div class=\"row-fluid";
            // line 929
            if (((array_key_exists("contentAttributes", $context) && $this->getAttribute(($context["contentAttributes"] ?? null), "class", array(), "any", true, true)) && twig_length_filter($this->env, $this->getAttribute(($context["contentAttributes"] ?? $this->getContext($context, "contentAttributes")), "class", array())))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["contentAttributes"] ?? $this->getContext($context, "contentAttributes")), "class", array()), "html", null, true);
            }
            if (((($context["cols"] ?? $this->getContext($context, "cols")) > 1) && ( !array_key_exists("useSubBlockDivider", $context) || (($context["useSubBlockDivider"] ?? $this->getContext($context, "useSubBlockDivider")) == true)))) {
                echo " row-fluid-divider";
            }
            echo "\" ";
            echo $this->getAttribute($this, "attributes", array(0 => ($context["contentAttributes"] ?? $this->getContext($context, "contentAttributes")), 1 => array(0 => "class")), "method");
            echo ">
                ";
            // line 930
            if ((array_key_exists("isForm", $context) && (($context["isForm"] ?? $this->getContext($context, "isForm")) == true))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["subblocks"] ?? $this->getContext($context, "subblocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                // line 936
                echo "                        ";
                echo $this->getAttribute($this, "scrollSubblock", array(0 => ((($this->getAttribute($context["subblock"], "title", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute($context["subblock"], "title", array())))) ? ($this->getAttribute($context["subblock"], "title", array())) : (null)), 1 => $this->getAttribute($context["subblock"], "data", array()), 2 => ($context["isForm"] ?? $this->getContext($context, "isForm")), 3 => (($this->getAttribute($context["subblock"], "useSpan", array(), "any", true, true)) ? ($this->getAttribute($context["subblock"], "useSpan", array())) : (true)), 4 => (($this->getAttribute($context["subblock"], "spanClass", array(), "any", true, true)) ? ($this->getAttribute($context["subblock"], "spanClass", array())) : (""))), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 938
            echo "                ";
            if ((array_key_exists("isForm", $context) && (($context["isForm"] ?? $this->getContext($context, "isForm")) == true))) {
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "scrollData"));

            // line 973
            echo "    ";
            $context["data"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->scrollDataBefore($this->env, ($context["dataTarget"] ?? $this->getContext($context, "dataTarget")), ($context["data"] ?? $this->getContext($context, "data")), ($context["entity"] ?? $this->getContext($context, "entity")), ($context["form"] ?? $this->getContext($context, "form")));
            // line 974
            echo "
    ";
            // line 975
            if ((array_key_exists("form", $context) && ($context["form"] ?? $this->getContext($context, "form")))) {
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
            $context["dataBlocks"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->sortBy($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "dataBlocks", array()));
            // line 982
            echo "
    <div id=\"";
            // line 983
            echo twig_escape_filter($this->env, ($context["dataTarget"] ?? $this->getContext($context, "dataTarget")), "html", null, true);
            echo "\" class=\"navbar navbar-static scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\" style=\"width: auto;\">
                <ul class=\"nav\">
                    ";
            // line 987
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dataBlocks"] ?? $this->getContext($context, "dataBlocks")));
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
            if (($this->getAttribute(($context["data"] ?? null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "formErrors", array())))) {
                // line 996
                echo "            <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                <div class=\"alert alert-error\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                    ";
                // line 999
                echo $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "formErrors", array());
                echo "
                </div>
            </div>
        ";
            }
            // line 1003
            echo "        <div data-spy=\"scroll\" data-target=\"#";
            echo twig_escape_filter($this->env, ($context["dataTarget"] ?? $this->getContext($context, "dataTarget")), "html", null, true);
            echo "\" data-offset=\"1\" class=\"scrollspy container-fluid scrollable-container";
            if (($context["isForm"] ?? $this->getContext($context, "isForm"))) {
                echo " form-container";
            }
            echo "\">
            ";
            // line 1004
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dataBlocks"] ?? $this->getContext($context, "dataBlocks")));
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
                echo $this->getAttribute($this, "scrollBlock", array(0 => ("scroll-" . $this->getAttribute($context["loop"], "index", array())), 1 => $this->getAttribute($context["scrollBlock"], "title", array()), 2 => $this->getAttribute($context["scrollBlock"], "subblocks", array()), 3 => ($context["isForm"] ?? $this->getContext($context, "isForm")), 4 => (($this->getAttribute($context["scrollBlock"], "content_attr", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "content_attr", array())) : (null)), 5 => (($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array())) : (true)), 6 => (($this->getAttribute($context["scrollBlock"], "headerLinkContent", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "headerLinkContent", array())) : (null))), "method");
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
            if (($this->getAttribute(($context["data"] ?? null), "hiddenData", array(), "any", true, true) || ($context["isForm"] ?? $this->getContext($context, "isForm")))) {
                // line 1008
                echo "                <div class=\"hide\" data-skip-input-widgets data-layout=\"separate\">
                    ";
                // line 1009
                if ($this->getAttribute(($context["data"] ?? null), "hiddenData", array(), "any", true, true)) {
                    // line 1010
                    echo "                        ";
                    echo $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "hiddenData", array());
                    echo "
                    ";
                }
                // line 1012
                echo "                    ";
                if (($context["isForm"] ?? $this->getContext($context, "isForm"))) {
                    // line 1013
                    echo "                        ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collectionField"));

            // line 1030
            echo "    <div class=\"control-group\">
        <div class=\"control-label wrap\">
            ";
            // line 1032
            if ( !(null === ($context["tooltipText"] ?? $this->getContext($context, "tooltipText")))) {
                // line 1033
                echo "                ";
                echo $this->getAttribute($this, "tooltip", array(0 => ($context["tooltipText"] ?? $this->getContext($context, "tooltipText"))), "method");
                echo "
            ";
            }
            // line 1035
            echo "            <label>";
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls\">
            <div class=\"row-oro\">
                <div class=\"oro-item-collection collection-fields-list\" data-prototype=\"";
            // line 1039
            echo twig_escape_filter($this->env, $this->getAttribute($this, "collection_prototype", array(0 => ($context["field"] ?? $this->getContext($context, "field"))), "method"));
            echo "\">
                    ";
            // line 1040
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "children", array()));
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
            echo twig_escape_filter($this->env, ($context["buttonCaption"] ?? $this->getContext($context, "buttonCaption")), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 1057
            echo "    ";
            ob_start();
            // line 1058
            echo "        ";
            $context["attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? $this->getContext($context, "attr")), array())) : (array()));
            // line 1059
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (( !array_key_exists("excludes", $context) ||  !$this->getAttribute(($context["excludes"] ?? null), $context["attrname"], array(), "array", true, true))) {
                    if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "entityOwnerLink"));

            // line 1070
            ob_start();
            // line 1071
            if (($context["entity"] ?? $this->getContext($context, "entity"))) {
                // line 1072
                echo "            ";
                $context["ownerType"] = $this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getOwnerType(($context["entity"] ?? $this->getContext($context, "entity")));
                // line 1073
                if (($context["ownerType"] ?? $this->getContext($context, "ownerType"))) {
                    // line 1074
                    echo "                ";
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? $this->getContext($context, "entity")), $this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getOwnerFieldName(($context["entity"] ?? $this->getContext($context, "entity"))))) {
                        // line 1075
                        echo "                    ";
                        $context["owner"] = $this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getEntityOwner(($context["entity"] ?? $this->getContext($context, "entity")));
                        // line 1076
                        echo "                    ";
                        if (($context["owner"] ?? $this->getContext($context, "owner"))) {
                            // line 1077
                            echo "                        ";
                            if ((($context["ownerType"] ?? $this->getContext($context, "ownerType")) == "USER")) {
                                // line 1078
                                echo "                            ";
                                $context["ownerPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_view", array("id" => $this->getAttribute(($context["owner"] ?? $this->getContext($context, "owner")), "id", array())));
                                // line 1079
                                echo "                            ";
                                $context["ownerName"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["owner"] ?? $this->getContext($context, "owner")));
                                // line 1080
                                echo "                        ";
                            } elseif ((($context["ownerType"] ?? $this->getContext($context, "ownerType")) == "BUSINESS_UNIT")) {
                                // line 1081
                                echo "                            ";
                                $context["ownerPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_view", array("id" => $this->getAttribute(($context["owner"] ?? $this->getContext($context, "owner")), "id", array())));
                                // line 1082
                                echo "                            ";
                                $context["ownerName"] = $this->getAttribute(($context["owner"] ?? $this->getContext($context, "owner")), "name", array());
                                // line 1083
                                echo "                        ";
                            }
                            // line 1084
                            echo "                        ";
                            if (array_key_exists("ownerName", $context)) {
                                // line 1085
                                echo "                            ";
                                if (($context["renderLabel"] ?? $this->getContext($context, "renderLabel"))) {
                                    // line 1086
                                    echo "                                ";
                                    $context["entityClassName"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["entity"] ?? $this->getContext($context, "entity")));
                                    // line 1087
                                    echo "                                ";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getFieldConfigValue(                                    // line 1088
($context["entityClassName"] ?? $this->getContext($context, "entityClassName")), $this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(                                    // line 1089
($context["entityClassName"] ?? $this->getContext($context, "entityClassName")), "owner_field_name", "ownership"), "label")), "html", null, true);
                                    // line 1092
                                    echo ":
                            ";
                                }
                                // line 1094
                                echo "                            ";
                                if ((array_key_exists("ownerPath", $context) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["owner"] ?? $this->getContext($context, "owner"))))) {
                                    // line 1095
                                    echo "                                ";
                                    echo $this->getAttribute($this, "renderUrl", array(0 => ($context["ownerPath"] ?? $this->getContext($context, "ownerPath")), 1 => ($context["ownerName"] ?? $this->getContext($context, "ownerName"))), "method");
                                    echo "
                            ";
                                } else {
                                    // line 1097
                                    echo "                                ";
                                    echo twig_escape_filter($this->env, ($context["ownerName"] ?? $this->getContext($context, "ownerName")), "html", null, true);
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderUrl"));

            // line 1108
            ob_start();
            // line 1109
            echo "        ";
            if (twig_test_empty(($context["text"] ?? $this->getContext($context, "text")))) {
                // line 1110
                echo "            ";
                $context["text"] = ($context["url"] ?? $this->getContext($context, "url"));
                // line 1111
                echo "        ";
            }
            // line 1112
            echo "        ";
            if (twig_test_empty(($context["title"] ?? $this->getContext($context, "title")))) {
                // line 1113
                echo "            ";
                $context["title"] = ($context["text"] ?? $this->getContext($context, "text"));
                // line 1114
                echo "        ";
            }
            // line 1115
            echo "        ";
            if (twig_test_empty(($context["class"] ?? $this->getContext($context, "class")))) {
                // line 1116
                echo "            ";
                $context["class"] = "";
                // line 1117
                echo "        ";
            }
            // line 1118
            echo "        ";
            if ( !twig_test_empty(($context["url"] ?? $this->getContext($context, "url")))) {
                // line 1119
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html_attr");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\"
                    ";
                // line 1120
                if ( !$this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isUrlLocal(($context["url"] ?? $this->getContext($context, "url")))) {
                    echo " target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
                echo "</a>
        ";
            }
            // line 1122
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderPhone"));

            // line 1126
            if (twig_test_empty(($context["title"] ?? $this->getContext($context, "title")))) {
                // line 1127
                echo "        ";
                $context["title"] = ($context["phone"] ?? $this->getContext($context, "phone"));
                // line 1128
                echo "    ";
            }
            // line 1129
            echo "    ";
            if ( !twig_test_empty(($context["phone"] ?? $this->getContext($context, "phone")))) {
                // line 1130
                echo "        <a href=\"tel:";
                echo twig_escape_filter($this->env, ($context["phone"] ?? $this->getContext($context, "phone")), "html_attr");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
                echo "\" class=\"phone\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
                echo "</a>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderPhoneWithActions"));

            // line 1141
            if ( !twig_test_empty(($context["phone"] ?? $this->getContext($context, "phone")))) {
                // line 1142
                ob_start();
                // line 1143
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("phone_actions", $context)) ? (_twig_default_filter(($context["phone_actions"] ?? $this->getContext($context, "phone_actions")), "phone_actions")) : ("phone_actions")), array("phone" => ($context["phone"] ?? $this->getContext($context, "phone")), "entity" => ($context["entity"] ?? $this->getContext($context, "entity"))));
                $context["actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 1145
                $context["actions"] = twig_trim_filter(($context["actions"] ?? $this->getContext($context, "actions")));
                // line 1146
                echo "        <span class=\"inline-actions-element";
                if (twig_test_empty(($context["actions"] ?? $this->getContext($context, "actions")))) {
                    echo " inline-actions-element_no-actions";
                }
                echo "\">
            <span class=\"inline-actions-element_wrapper\">";
                // line 1147
                echo $this->getAttribute($this, "renderPhone", array(0 => ($context["phone"] ?? $this->getContext($context, "phone"))), "method");
                echo "</span>
            ";
                // line 1148
                if ( !twig_test_empty(($context["actions"] ?? $this->getContext($context, "actions")))) {
                    // line 1149
                    echo "<span class=\"inline-actions-element_actions phone-actions\">";
                    echo ($context["actions"] ?? $this->getContext($context, "actions"));
                    echo "</span>";
                }
                // line 1151
                echo "        </span>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "getApplicableForUnderscore"));

            // line 1156
            echo "    ";
            echo twig_replace_filter(($context["str"] ?? $this->getContext($context, "str")), array("<script" => "<% print(\"<sc\" + \"ript\"); %>", "</script" => "<% print(\"</sc\" + \"ript\"); %>", "<%" => "<% print(\"<\" + \"%\"); %>", "%>" => "<% print(\"%\" + \">\"); %>"));
            // line 1161
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderList"));

            // line 1165
            echo "<ul class=\"extra-list\">";
            // line 1166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderTable"));

            // line 1173
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ($context["style"] ?? $this->getContext($context, "style")), "html", null, true);
            echo "\">
     <thead>
     <tr>";
            // line 1176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["titles"] ?? $this->getContext($context, "titles")));
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
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? $this->getContext($context, "rows")));
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "entityViewLink"));

            // line 1192
            if (($context["entity"] ?? $this->getContext($context, "entity"))) {
                // line 1193
                echo "        ";
                if ((($context["route"] ?? $this->getContext($context, "route")) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(((array_key_exists("permission", $context)) ? (_twig_default_filter(($context["permission"] ?? $this->getContext($context, "permission")), "VIEW")) : ("VIEW")), ($context["entity"] ?? $this->getContext($context, "entity"))))) {
                    // line 1194
                    echo "            ";
                    echo $this->getAttribute($this, "renderUrl", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), array("id" => $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), "id", array()))), 1 => ($context["label"] ?? $this->getContext($context, "label"))), "method");
                    echo "
        ";
                } else {
                    // line 1196
                    echo "            ";
                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")));
                    echo "
        ";
                }
                // line 1198
                echo "    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "entityViewLinks"));

            // line 1202
            $context["links"] = array();
            // line 1203
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 1204
                echo "        ";
                $context["links"] = twig_array_merge(($context["links"] ?? $this->getContext($context, "links")), array(0 => $this->getAttribute($this, "entityViewLink", array(0 => $context["entity"], 1 => $this->getAttribute($context["entity"], ($context["labelProperty"] ?? $this->getContext($context, "labelProperty"))), 2 => ($context["route"] ?? $this->getContext($context, "route")), 3 => ($context["permission"] ?? $this->getContext($context, "permission"))), "method")));
                // line 1205
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1206
            echo "    ";
            echo $this->getAttribute($this, "renderList", array(0 => ($context["links"] ?? $this->getContext($context, "links"))), "method");
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderDisabledLabel"));

            // line 1215
            echo "<i>";
            echo twig_escape_filter($this->env, ($context["labelText"] ?? $this->getContext($context, "labelText")), "html", null, true);
            echo "</i>";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderEntityViewLabel"));

            // line 1227
            if (( !(null === ($context["entity"] ?? $this->getContext($context, "entity"))) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? $this->getContext($context, "entity")), ($context["fieldName"] ?? $this->getContext($context, "fieldName"))))) {
                // line 1228
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), ($context["fieldName"] ?? $this->getContext($context, "fieldName"))), "html", null, true);
                echo "
    ";
            } else {
                // line 1230
                echo "        ";
                if ( !(null === ($context["entityLabelIfNotGranted"] ?? $this->getContext($context, "entityLabelIfNotGranted")))) {
                    // line 1231
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view %entityName%", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["entityLabelIfNotGranted"] ?? $this->getContext($context, "entityLabelIfNotGranted"))))), "html", null, true);
                    echo "
        ";
                }
                // line 1233
                echo "    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderJsTree"));

            // line 1237
            $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle::macros.html.twig", 1237, "404737103")->display(array_merge($context, array("data" =>             // line 1238
($context["data"] ?? $this->getContext($context, "data")), "actions" =>             // line 1239
($context["actions"] ?? $this->getContext($context, "actions")))));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  3684 => 1239,  3683 => 1238,  3682 => 1237,  3666 => 1236,  3647 => 1233,  3641 => 1231,  3638 => 1230,  3632 => 1228,  3630 => 1227,  3613 => 1226,  3593 => 1215,  3578 => 1214,  3559 => 1206,  3553 => 1205,  3550 => 1204,  3545 => 1203,  3543 => 1202,  3525 => 1201,  3506 => 1198,  3500 => 1196,  3494 => 1194,  3491 => 1193,  3489 => 1192,  3471 => 1191,  3452 => 1188,  3445 => 1186,  3436 => 1184,  3432 => 1183,  3430 => 1182,  3426 => 1181,  3423 => 1179,  3414 => 1177,  3410 => 1176,  3404 => 1173,  3387 => 1172,  3368 => 1169,  3359 => 1167,  3355 => 1166,  3353 => 1165,  3338 => 1164,  3319 => 1161,  3316 => 1156,  3301 => 1155,  3281 => 1151,  3276 => 1149,  3274 => 1148,  3270 => 1147,  3263 => 1146,  3261 => 1145,  3258 => 1143,  3256 => 1142,  3254 => 1141,  3238 => 1140,  3212 => 1130,  3209 => 1129,  3206 => 1128,  3203 => 1127,  3201 => 1126,  3185 => 1125,  3166 => 1122,  3157 => 1120,  3148 => 1119,  3145 => 1118,  3142 => 1117,  3139 => 1116,  3136 => 1115,  3133 => 1114,  3130 => 1113,  3127 => 1112,  3124 => 1111,  3121 => 1110,  3118 => 1109,  3116 => 1108,  3098 => 1107,  3077 => 1102,  3074 => 1101,  3071 => 1100,  3068 => 1099,  3062 => 1097,  3056 => 1095,  3053 => 1094,  3049 => 1092,  3047 => 1089,  3046 => 1088,  3044 => 1087,  3041 => 1086,  3038 => 1085,  3035 => 1084,  3032 => 1083,  3029 => 1082,  3026 => 1081,  3023 => 1080,  3020 => 1079,  3017 => 1078,  3014 => 1077,  3011 => 1076,  3008 => 1075,  3005 => 1074,  3003 => 1073,  3000 => 1072,  2998 => 1071,  2996 => 1070,  2980 => 1069,  2961 => 1060,  2939 => 1059,  2936 => 1058,  2933 => 1057,  2917 => 1056,  2894 => 1044,  2891 => 1043,  2882 => 1041,  2878 => 1040,  2874 => 1039,  2866 => 1035,  2860 => 1033,  2858 => 1032,  2854 => 1030,  2836 => 1029,  2816 => 1017,  2812 => 1015,  2806 => 1013,  2803 => 1012,  2797 => 1010,  2795 => 1009,  2792 => 1008,  2789 => 1007,  2772 => 1005,  2755 => 1004,  2746 => 1003,  2739 => 999,  2734 => 996,  2732 => 995,  2725 => 990,  2700 => 988,  2683 => 987,  2676 => 983,  2673 => 982,  2671 => 981,  2668 => 980,  2665 => 979,  2662 => 978,  2659 => 977,  2656 => 976,  2654 => 975,  2651 => 974,  2648 => 973,  2630 => 972,  2609 => 943,  2605 => 941,  2601 => 939,  2598 => 938,  2589 => 936,  2584 => 935,  2580 => 933,  2576 => 931,  2574 => 930,  2562 => 929,  2557 => 927,  2550 => 926,  2547 => 925,  2544 => 924,  2523 => 923,  2504 => 903,  2495 => 901,  2490 => 900,  2484 => 899,  2479 => 898,  2477 => 890,  2474 => 889,  2455 => 888,  2434 => 874,  2420 => 873,  2398 => 865,  2393 => 864,  2382 => 862,  2377 => 861,  2374 => 860,  2368 => 859,  2357 => 858,  2354 => 857,  2351 => 856,  2348 => 853,  2333 => 852,  2313 => 839,  2310 => 838,  2308 => 837,  2305 => 836,  2302 => 835,  2299 => 834,  2296 => 833,  2293 => 832,  2290 => 831,  2287 => 830,  2285 => 829,  2282 => 828,  2280 => 827,  2278 => 826,  2275 => 825,  2272 => 820,  2257 => 819,  2237 => 799,  2234 => 798,  2232 => 797,  2229 => 796,  2226 => 793,  2211 => 792,  2191 => 785,  2188 => 784,  2185 => 783,  2183 => 780,  2181 => 779,  2179 => 778,  2176 => 777,  2173 => 776,  2170 => 775,  2155 => 774,  2135 => 765,  2132 => 764,  2130 => 763,  2127 => 762,  2124 => 761,  2122 => 758,  2120 => 757,  2118 => 756,  2115 => 755,  2112 => 754,  2110 => 753,  2107 => 752,  2104 => 748,  2089 => 747,  2068 => 738,  2053 => 737,  2033 => 718,  2030 => 717,  2028 => 714,  2027 => 713,  2025 => 708,  2010 => 707,  1989 => 685,  1986 => 684,  1971 => 683,  1950 => 660,  1947 => 659,  1945 => 658,  1930 => 657,  1899 => 637,  1896 => 636,  1893 => 635,  1890 => 634,  1885 => 633,  1869 => 632,  1848 => 629,  1845 => 628,  1843 => 626,  1841 => 625,  1838 => 624,  1823 => 623,  1802 => 617,  1799 => 616,  1796 => 615,  1793 => 614,  1791 => 612,  1789 => 610,  1774 => 609,  1752 => 601,  1744 => 599,  1736 => 597,  1734 => 596,  1729 => 595,  1726 => 594,  1721 => 593,  1706 => 592,  1686 => 585,  1684 => 584,  1674 => 582,  1672 => 581,  1670 => 580,  1668 => 579,  1665 => 578,  1663 => 577,  1660 => 575,  1658 => 574,  1655 => 572,  1652 => 569,  1651 => 568,  1649 => 567,  1647 => 566,  1645 => 565,  1642 => 563,  1640 => 562,  1635 => 560,  1633 => 559,  1628 => 557,  1626 => 556,  1621 => 554,  1619 => 553,  1614 => 552,  1612 => 551,  1607 => 549,  1605 => 548,  1599 => 546,  1597 => 545,  1593 => 544,  1586 => 543,  1583 => 542,  1568 => 541,  1547 => 519,  1544 => 518,  1538 => 517,  1535 => 516,  1532 => 515,  1527 => 514,  1524 => 513,  1521 => 512,  1518 => 511,  1515 => 510,  1512 => 509,  1509 => 508,  1506 => 507,  1503 => 506,  1501 => 505,  1497 => 503,  1495 => 500,  1494 => 499,  1493 => 498,  1492 => 497,  1491 => 495,  1490 => 494,  1489 => 493,  1487 => 491,  1484 => 490,  1481 => 489,  1479 => 488,  1476 => 487,  1473 => 486,  1471 => 483,  1469 => 482,  1466 => 481,  1463 => 480,  1460 => 479,  1457 => 478,  1454 => 477,  1439 => 476,  1418 => 472,  1414 => 470,  1412 => 469,  1409 => 468,  1406 => 467,  1403 => 466,  1401 => 465,  1398 => 464,  1395 => 463,  1392 => 462,  1390 => 461,  1387 => 460,  1384 => 459,  1369 => 458,  1348 => 439,  1343 => 437,  1339 => 436,  1334 => 435,  1331 => 434,  1329 => 431,  1327 => 430,  1324 => 429,  1321 => 428,  1318 => 427,  1315 => 426,  1313 => 423,  1311 => 422,  1308 => 421,  1305 => 420,  1302 => 419,  1287 => 418,  1267 => 404,  1264 => 403,  1261 => 402,  1258 => 400,  1256 => 398,  1255 => 397,  1254 => 396,  1253 => 395,  1251 => 394,  1249 => 391,  1247 => 390,  1244 => 389,  1242 => 386,  1240 => 385,  1237 => 384,  1234 => 383,  1231 => 382,  1228 => 381,  1225 => 380,  1222 => 379,  1219 => 378,  1216 => 377,  1213 => 376,  1210 => 375,  1207 => 374,  1192 => 373,  1171 => 359,  1168 => 358,  1165 => 357,  1162 => 356,  1146 => 355,  1125 => 346,  1123 => 345,  1121 => 338,  1106 => 337,  1084 => 330,  1081 => 329,  1075 => 326,  1072 => 325,  1070 => 324,  1069 => 322,  1066 => 321,  1063 => 320,  1061 => 317,  1060 => 316,  1059 => 315,  1057 => 314,  1054 => 313,  1051 => 312,  1036 => 311,  1015 => 299,  1000 => 298,  980 => 283,  974 => 281,  971 => 280,  968 => 279,  959 => 277,  954 => 276,  952 => 275,  948 => 274,  941 => 271,  935 => 269,  933 => 268,  929 => 266,  914 => 265,  893 => 251,  890 => 250,  875 => 249,  853 => 233,  845 => 232,  838 => 231,  835 => 230,  824 => 228,  819 => 227,  816 => 226,  810 => 224,  808 => 223,  803 => 222,  800 => 221,  797 => 220,  794 => 219,  790 => 217,  784 => 215,  782 => 214,  777 => 213,  774 => 212,  771 => 211,  768 => 210,  766 => 209,  751 => 208,  730 => 193,  727 => 192,  724 => 191,  721 => 190,  704 => 189,  684 => 179,  681 => 178,  678 => 177,  675 => 176,  672 => 175,  669 => 174,  666 => 173,  650 => 172,  629 => 161,  627 => 160,  626 => 159,  625 => 157,  624 => 155,  619 => 154,  617 => 148,  616 => 147,  614 => 146,  611 => 145,  591 => 144,  569 => 132,  566 => 131,  563 => 130,  545 => 129,  524 => 118,  506 => 117,  484 => 104,  479 => 102,  476 => 101,  460 => 100,  439 => 91,  436 => 90,  433 => 89,  424 => 86,  421 => 85,  416 => 84,  414 => 83,  411 => 82,  403 => 80,  397 => 78,  395 => 77,  392 => 76,  389 => 75,  372 => 74,  349 => 62,  343 => 61,  339 => 59,  337 => 56,  336 => 55,  333 => 54,  331 => 53,  328 => 52,  326 => 49,  324 => 48,  321 => 47,  318 => 46,  315 => 45,  312 => 44,  309 => 43,  306 => 41,  303 => 40,  300 => 39,  297 => 38,  294 => 37,  291 => 36,  288 => 35,  285 => 34,  282 => 33,  279 => 32,  277 => 31,  274 => 30,  254 => 29,  232 => 24,  226 => 22,  220 => 20,  217 => 19,  209 => 17,  204 => 16,  199 => 15,  197 => 14,  193 => 13,  187 => 10,  184 => 9,  181 => 8,  178 => 7,  175 => 6,  172 => 5,  169 => 4,  166 => 3,  163 => 2,  148 => 1,  140 => 1154,  137 => 1062,  134 => 1049,  131 => 1020,  128 => 947,  125 => 908,  122 => 878,  119 => 869,  115 => 841,  112 => 801,  109 => 787,  106 => 767,  103 => 740,  100 => 720,  97 => 688,  94 => 664,  91 => 640,  88 => 631,  85 => 603,  82 => 588,  79 => 521,  76 => 475,  73 => 442,  70 => 406,  67 => 361,  64 => 348,  61 => 333,  58 => 301,  55 => 286,  52 => 254,  49 => 237,  46 => 195,  43 => 181,  40 => 165,  37 => 135,  34 => 120,  31 => 108,  28 => 93,  25 => 66,  22 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro collection_prototype(widget) %}
    {% if 'prototype' in widget.vars|keys %}
        {% set form = widget.vars.prototype %}
        {% set name = widget.vars.prototype.vars.name %}
    {% else %}
        {% set form = widget %}
        {% set name = widget.vars.full_name %}
    {% endif %}

    <div data-content=\"{{ name }}\">
        <div class=\"row-oro oro-multiselect-holder\">
            <div class=\"float-holder \">
                {{ form_errors(form) }}
                {% if form.children|length  %}
                    {% for child in form %}
                        {{ form_widget(child) }}
                        {{ form_errors(child) }}
                    {% endfor %}
                {% else %}
                    {{ form_widget(form) }}
                {% endif %}
                {{ form_rest(form) }}
            </div>
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"{{ name }}\">×</button>
        </div>
    </div>
{% endmacro %}

{% macro tooltip(tooltip_raw, tooltip_parameters, tooltip_placement, details_enabled, details_link, details_anchor) %}
    {% set tooltip_parameters = tooltip_parameters|default({}) %}
    {# deprecated tooltips domain since 1.9:1:11 for tooltips use instead 'messages' translation domain #}
    {% set tooltip = tooltip_raw|trans(tooltip_parameters, \"messages\") %}
    {% if (tooltip == tooltip_raw) %}
        {% set tooltip = tooltip_raw|trans(tooltip_parameters, \"tooltips\") %}
    {% endif %}
    {% if tooltip is not empty %}
        {% set details_anchor = details_anchor|default(null) %}
        {% set details_link = details_link|default(null) %}
        {% set details_enabled = details_enabled|default(false) %}
        {% set tooltip_placement = tooltip_placement|default(null) %}

        {# Help link logic #}
        {% if details_enabled or details_anchor or details_link %}
            {% set helpLink = details_link|default(get_help_link()) %}
            {% if details_anchor %}
                {% set helpLink = helpLink ~ '#' ~ details_anchor %}
            {% endif %}
            {% set tooltip = tooltip
                ~ '<div class=\"clearfix\"><div class=\"pull-right\"><a href=\"' ~ helpLink ~ '\">'
                ~ 'oro.form.tooltip.read_more'|trans ~ '</a></div></div>'
            %}
        {% endif %}
        {# End help link logic #}

        {% set tooltip = '<div class=\"oro-popover-content\">'
            ~ tooltip
            ~ '</div>'
        %}

        <i class=\"fa-info-circle tooltip-icon\"
           {% if tooltip_placement %}data-placement=\"{{ tooltip_placement }}\"{% endif %}
           data-content=\"{{ tooltip }}\"
           data-toggle=\"popover\"></i>
    {% endif %}
{% endmacro %}

{#
    Render attribute row
    Parameters:
        title - attribute title
        value - attribute value
        additionalData - array with additional data
#}
{% macro attibuteRow(title, value, additionalData) %}
    {% set attributeValue %}
        <div class=\"clearfix-oro\">
            {% if value.value is not defined  %}
                <div class=\"control-label\">{{ value }}</div>
            {% else %}
                <div class=\"control-label\">{{ value.value }} <strong>{{ value.hint }}</strong></div>
            {% endif %}
        </div>
        {% if additionalData|length %}
            {% for data in additionalData.data %}
                <div class=\"clearfix-oro\">
                    <div class=\"control-label\">{{ attribute(data, additionalData.field) }}</div>
                </div>
            {% endfor %}
        {% endif %}
    {% endset %}
    {{ _self.renderAttribute(title, attributeValue) }}
{% endmacro %}

{#
    Render attribute row with custom data block
    Parameters:
        title - row title
        data - row data
#}
{% macro renderAttribute(title, data) %}
    <div class=\"control-group attribute-row\">
        <label class=\"control-label\">{{ title }}</label>
        <div class=\"controls\">
            {{ data|raw }}
        </div>
    </div>
{% endmacro %}

{#
    Render property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderProperty(title, data, entity = null, fieldName = null) %}
    {{ _self.renderHtmlProperty(title, data|escape, entity, fieldName) }}
{% endmacro %}

{#
    Render html property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderHtmlProperty(title, data, entity = null, fieldName = null) %}
    {% if entity is defined and fieldName is defined and not is_granted('VIEW', entity, fieldName) %}
    {% else %}
        {{ _self.renderAttribute(title, '<div class=\"control-label\">' ~ data|default('oro.ui.empty'|trans) ~ '</div>') }}
    {% endif %}
{% endmacro %}

{#
    Render collapsible html property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderCollapsibleHtmlProperty(title, data, entity, fieldName, moreText = 'Show more', lessText = 'Show less') %}
    {% if is_granted('VIEW', entity, fieldName) %}
        {% set collapseView = {
                storageKey: 'collapseBlock[' ~ oro_class_name(entity) ~ ']',
                uid: '[' ~ title ~ '][' ~ entity.id ~ ']',
                animationSpeed: 0,
                closeClass: 'overflows',
                checkOverflow: true,
                open: false
            } %}
        <div class=\"collapse-block\" data-page-component-collapse=\"{{ collapseView|json_encode }}\">
            {{ _self.renderAttribute(title,
                '<div class=\"control-label\" data-collapse-container>' ~
                    data|default('oro.ui.empty'|trans) ~
                '</div>' ~
                '<a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>' ~ moreText|trans ~ '</a>' ~
                '<a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>' ~ lessText|trans ~ '</a>'
            ) }}
        </div>
    {% endif %}
{% endmacro %}

{#
    Render html property block. HTML rendering may be switched off with system config.
    Parameters:
        title - property title
        data  - property data
#}
{% macro renderSwitchableHtmlProperty(title, data) %}
    {% if oro_config_value('oro_form.wysiwyg_enabled') %}
        {% set data = data|oro_html_sanitize %}
    {%  else %}
        {% set data = data|striptags|nl2br %}
    {% endif %}

    {{ _self.renderAttribute(title, '<div class=\"control-label html-property\">' ~ data|default('oro.ui.empty'|trans) ~ '</div>') }}
{% endmacro %}

{#
    Render color property block
    Parameters:
        title - property title
        data  - property data
        empty - a value which should be used if data is empty
#}
{% macro renderColorProperty(title, data, empty) %}
    {% if data is not none %}
       {% set data = '<i class=\"color hide-text\" title=\"' ~ data ~ '\" style=\"background-color: ' ~ data ~ ';\">' ~ data ~ '</i>' %}
    {% endif %}
    {{ _self.renderAttribute(title, '<div class=\"control-label\">' ~ data|default(empty)|default('oro.ui.empty'|trans) ~ '</div>') }}
{% endmacro %}

{#
    Create the link
    Parameters - array:
        [
            'path'  - button url
            'class' - default class
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
        ]
#}
{% macro link(parameters) %}
    {# need to remove spaces just before label #}
    {% set iconHtml = '' %}
    {% if parameters.iCss is defined and parameters.iCss %}
        {% set iconHtml %}
        <i class=\"{{ parameters.iCss }} hide-text\" >
            {% if not parameters.noIconText|default(false)%}
                {{ parameters.label }}
            {% endif %}
        </i>
        {% endset %}
    {% else %}
    {% endif %}
    {% spaceless %}
    <a href=\"{{ parameters.path }}\"
        {% if (parameters.id is defined) %}
            id=\"{{ parameters.id }}\"
        {% endif %}
        {% if parameters.data is defined %}
            {% for dataItemName,dataItemValue in parameters.data %}
                data-{{ dataItemName }}=\"{{ dataItemValue|e('html_attr')|raw }}\"
            {% endfor %}
        {% endif %}
        class=\"{{ parameters.class is defined? parameters.class : '' }} {{ parameters.aCss is defined? parameters.aCss : '' }}\"
        {% if parameters.title is defined %}title=\"{{ parameters.title }}\"{% endif %}>{{ iconHtml|trim|raw }}
        {{- parameters.label|trim }}
    </a>
    {% endspaceless %}
{% endmacro %}

{#
    Create the button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
        ]
#}
{% macro button(parameters) %}
    <div class=\"pull-left btn-group icons-holder\">
        {{ _self.link(parameters|merge({'class': 'btn back icons-holder-text'})) }}
    </div>
{% endmacro %}

{#
    Create dropdown button
    Parameters - array:
        [
            'label' - button label
            'elements' - dropdown elements
            'html' - html from placeholder
            'aCss'  - additional drop down class
        ]
#}
{% macro dropdownButton(parameters) %}
    <div class=\"btn-group\">
        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            {% if parameters.iCss is defined %}
                <i class=\"{{ parameters.iCss }}\"></i>
            {% endif %}
            {{ parameters.label }}
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu {{ parameters.aCss is defined? parameters.aCss : '' }}\">
            {% if parameters.elements is defined and parameters.elements is not empty %}
                {% for item in parameters.elements %}
                    {{ _self.dropdownItem(item) }}
                {% endfor %}
            {% endif %}
            {% if parameters.html is defined and parameters.html is not empty %}
                {{ parameters.html|raw }}
            {% endif %}
        </ul>
    </div>
{% endmacro %}

{#
    Create the dropdown button item
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
        ]
#}
{% macro dropdownItem(parameters) %}
    <li>{{ _self.link(parameters) }}</li>
{% endmacro %}

{#
    Create the dropdown button wich preserves last used button
    Parameters - array:
        [
            'html'     - original buttons markup
            'groupKey' - key, to remember last used button
            'options'  - options for pinnedDropdownButtonProcessor widget
        ]
#}
{% macro pinnedDropdownButton(parameters) %}
    {% if isDesktopVersion() or parameters.mobileEnabled|default(false) %}
        {% set options = parameters.options|default({}) %}
        {% set options = options|merge({
            widgetModule: options.widgetModule|default('oroui/js/content-processor/pinned-dropdown-button'),
            widgetName: options.widgetName|default('pinnedDropdownButtonProcessor'),
            groupKey: parameters.groupKey is defined ? parameters.groupKey : '',
            useMainButtonsClone: true
        }) %}
        {% spaceless %}
            <div class=\"pull-right pinned-dropdown\"
                 {{ _self.renderAttributes(parameters.dataAttributes|default({})|merge({
                     'page-component-module': 'oroui/js/app/components/jquery-widget-component',
                     'page-component-options': options
                 })) }}>
                {{ parameters.html|raw }}
            </div>
        {% endspaceless %}
    {% else %}
        {{ parameters.html|raw }}
    {% endif %}
{% endmacro %}

{#
    Predefined pinnedDropdownButton's settings for save button
#}
{% macro dropdownSaveButton(parameters) %}
    {% set parameters = {
        'groupKey': 'saveButtons',
        'options': {
            'moreButtonAttrs': {
                'class': 'btn-success'
            }
        }
    }|merge(parameters|default({})) %}
    {{ _self.pinnedDropdownButton(parameters) }}
{% endmacro %}

{#
    Create 'Cancel' button
    Parameters
        'path' - button url
        'label' - button label | 'Cancel' by default
#}
{% macro cancelButton(path, label) %}
    {% if label is empty %}
        {% set label = 'Cancel'|trans %}
    {% endif %}
    {{ _self.button({'path' : path, 'title' : label, 'label' : label, data: {action: 'cancel'} }) }}
{% endmacro %}

{#
    Create 'Edit' button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title | 'Edit' by default
            'label' - button label | 'Edit' by default
            'entity_label' - if specified will be added for title and label
        ]
#}
{% macro editButton(parameters) %}
    {% set iCss = ['fa-pencil-square-o'] %}
    {% set aCss = ['edit-button', 'main-group'] %}
    {% if parameters.iCss is defined %}
        {% set iCss = parameters.iCss|split(' ')|merge(iCss) %}
    {% endif %}
    {% if parameters.aCss is defined %}
        {% set aCss = parameters.aCss|split(' ')|merge(aCss) %}
    {% endif %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.edit_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.edit'|trans
        %}
    {% endif %}
    {% set label = parameters.label is defined
        ? parameters.label
        : 'oro.ui.edit'|trans
    %}
    {% set parameters = parameters|merge({
        'iCss': iCss|join(' '),
        'aCss': aCss|join(' '),
        'title': title,
        'label': label
    }) %}

    {# Add URL parameters to button path #}
    {% set parameters = parameters|merge({ 'path' : oro_url_add_query(parameters['path']) }) %}

    {{ _self.button(parameters) }}
{% endmacro %}

{#
    Create 'add' button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title | 'Create' by default
            'label' - button label | 'Create' by default
            'entity_label' - if specified will be added for title and label
        ]
#}
{% macro addButton(parameters) %}
    {% if parameters.label is defined %}
        {% set label = parameters.label %}
    {% else %}
        {% set label = parameters.entity_label is defined
            ? 'oro.ui.create_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.create'|trans
        %}
    {% endif %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.create_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.create'|trans
        %}
    {% endif %}
    <a href=\"{{ parameters.path }}\"
        class=\"btn main-group btn-primary pull-right {{ parameters.aCss is defined? parameters.aCss : '' }}\"
        title=\"{{ title }}\"
    >
        {{ label }}
    </a>
{% endmacro %}

{#
    Delete button with javascript handler
    Parameters - array:
        [
            'aCss' - additional css class for 'a' tag
            'dataId' - data-id parameter
            'dataMessage' - message before delete record | 'Are you sure you want to delete this %entity_label%?' by default
            'dataRedirect' - url to redirect after delete | '%entity_label% deleted' by default
            'dataUrl' - data-url parameter
            'title' - button title | 'Delete' by default
            'label' - button label | 'Delete' by default
            'entity_label' - if specified will be added for title, label and messages| 'item' by default
            'disabled' - if true this control is rendered as disabled
        ]
#}
{% macro deleteButton(parameters) %}
    {% set aCss = 'btn icons-holder-text' %}

    {% if parameters.disabled is defined and parameters.disabled %}
        {% set aCss = aCss ~ ' disabled' %}
    {% endif %}

    {% if parameters.aCss is defined %}
        {% set aCss = aCss ~ ' ' ~ parameters.aCss %}
    {% endif %}

    {% set parameters = parameters|merge({'aCss': aCss}) %}

    <div class=\"pull-left btn-group icons-holder\">
        {{ _self.deleteLink(parameters) }}
    </div>
{% endmacro %}

{% macro deleteLink(parameters) %}
    {% set entityLabel = parameters.entity_label is defined ? parameters.entity_label : 'oro.ui.item'|trans %}
    {% set label = parameters.label is defined ? parameters.label : 'oro.ui.delete'|trans %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.delete_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.delete'|trans
        %}
    {% endif %}

    {% set message = parameters.dataMessage is defined ? parameters.dataMessage : 'oro.ui.delete_confirm'|trans({ '%entity_label%' : entityLabel }) %}
    {% set successMessage = parameters.successMessage is defined ? parameters.successMessage : 'oro.ui.delete_message'|trans({ '%entity_label%' : entityLabel }) %}
    {% set url = parameters.dataUrl is defined ? parameters.dataUrl : '' %}
    {% set linkParams = {
        'data': {
            'message': message,
            'success-message': successMessage,
            'url': url
        },
        'iCss': parameters.iCss is defined ? parameters.iCss: 'fa-trash-o',
        'aCss': parameters.aCss,
        'title': title,
        'label': label,
        'path': 'javascript:void(0);'
    } %}


    {% if (parameters.dataId is defined) %}
        {% set data = linkParams.data|merge({'id': parameters.dataId}) %}
        {% set linkParams = linkParams|merge({ 'data': data }) %}
    {% endif %}
    {% if parameters.dataRedirect is defined %}
        {% set data = linkParams.data|merge({'redirect': parameters.dataRedirect}) %}
        {% set linkParams = linkParams|merge({ 'data': data }) %}
    {% endif %}
    {% if parameters.data is defined %}
        {% for dataItemName,dataItemValue in parameters.data %}
            {% set data = linkParams.data|merge({(dataItemName): dataItemValue}) %}
            {% set linkParams = linkParams|merge({ 'data': data }) %}
        {% endfor %}
    {% endif %}
    {{ _self.link(linkParams) }}
{% endmacro %}

{#
    A button with javascript handler

    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'title' - button title
            'label' - button label
            'labelInIcon' - determine whether the label is include in icon or not. Defaults to true
            'visible' - determined whether the button is visible or not. Defaults to true,
            'dataAttributes' - additional data attributes
        ]
#}
{% macro clientLink(parameters) %}
    {% spaceless %}
        <a href=\"javascript: void(0);\" class=\"{{ parameters.class is defined ? parameters.class : '' }} {{ parameters.aCss is defined ? parameters.aCss : '' }}\"
            title=\"{{ parameters.title is defined ? parameters.title : (parameters.label is defined ? parameters.label : '') }}\"
            {% if (parameters.id is defined) %}
                id=\"{{ parameters.id }}\"
            {% endif %}
            {%- if (parameters.dataId is defined) -%}
                data-id =\"{{ parameters.dataId }}\"
            {%- endif -%}
            {%- if (parameters.dataUrlRaw is defined) -%}
                data-url=\"{{ parameters.dataUrlRaw|raw }}\"
            {% elseif (parameters.dataUrl is defined) %}
                data-url=\"{{ parameters.dataUrl }}\"
            {%- endif -%}
            {%- if (parameters.successMessage is defined) -%}
                data-success-message=\"{{ parameters.successMessage }}\"
            {%- endif -%}
            {%- if parameters.dataRedirect is defined -%}
                data-redirect=\"{{ parameters.dataRedirect }}\"
            {%- endif -%}
            {%- if (parameters.visible is defined and not parameters.visible) -%}
                style=\"display: none\"
            {%- endif -%}
            {%- if parameters.widget is defined and parameters.widget|length -%}
                {% set options = parameters.widget %}
                {%- if (options.createOnEvent is not defined) -%}
                    {% set options = options|merge({
                        'createOnEvent' : options.event|default('click')
                    }) %}
                {%- endif -%}
                {{ _self.renderWidgetAttributes(options) }}
            {%- endif -%}
            {%- if parameters.pageComponent is defined -%}
                {{ _self.renderPageComponentAttributes(parameters.pageComponent) }}
            {%- endif -%}
            {%- if parameters.dataAttributes is defined and parameters.dataAttributes|length -%}
                {{ _self.renderAttributes(parameters.dataAttributes) }}
            {%- endif -%}>
            {%- set labelInIcon = parameters.labelInIcon|default(true) -%}
            {%- if (parameters.iCss is defined) -%}
                <i class=\"{{ parameters.iCss }}{% if labelInIcon %} hide-text{% endif %}\">{{ (parameters.label is defined and labelInIcon) ? parameters.label : '' }}</i>
            {%- endif %}
            {{- parameters.label is defined ? parameters.label : '' -}}
        </a>
    {% endspaceless %}
{% endmacro %}

{#
    Renders page component attributes passed in array
#}
{% macro renderPageComponentAttributes(pageComponent) %}
    {% for key,value in pageComponent %}
        {% if key == 'layout' %}
            data-layout=\"{{ pageComponent.layout }}\"
        {% elseif value is iterable %}
            data-page-component-{{ key }}=\"{{ value|json_encode }}\"
        {% else %}
            data-page-component-{{ key }}=\"{{ value }}\"
        {% endif %}
    {% endfor %}
{% endmacro %}

{#
    Renders attributes for widget

    Parameters: options array for widget
#}
{% macro renderWidgetAttributes(options) %}
    {% set pageComponent = {
        module:  \"oroui/js/app/components/widget-component\",
        options: options
    }  %}
    {% if options.options.pageComponentName is defined %}
        {% set pageComponent = pageComponent|merge({name: options.options.pageComponentName}) %}
    {% endif %}
    {{ _self.renderPageComponentAttributes(pageComponent) }}
{% endmacro %}
{#
    @deprecated
    Please use renderWidgetAttributes() with createOnEvent option specified instead
#}
{% macro renderWidgetDataAttributes(options) %}
    {% if (options.createOnEvent is not defined) %}
        {% set options = options|merge({
            'createOnEvent' : options.event|default('click')
        }) %}
    {% endif %}
    {{ _self.renderWidgetAttributes(options) }}
{% endmacro %}

{% macro renderAttributes(options, prefix) %}
    {% for name, value in options %}
        {% if (value is iterable) %}
            {% set value = value|json_encode(constant('JSON_FORCE_OBJECT')) %}
        {% endif %}
        data-{% if prefix is not empty %}{{ prefix }}-{% endif %}{{ name }}=\"{{ value }}\"
    {% endfor %}
{% endmacro %}

{#
    A button with javascript handler
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro clientButton(parameters) %}
    {#{% espaceless %}#}
        <div class=\"pull-left btn-group icons-holder\">
            {{ _self.clientLink(parameters|merge({'class': 'btn icons-holder-text'})) }}
        </div>
    {#{% endspaceless %}#}
{% endmacro %}

{#
    A button that sends request to server
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataMethod' - request http method
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'errorMessage' - a message which will be shown if operation failed
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro ajaxButton(parameters) %}
    <div class=\"pull-left btn-group icons-holder\">
        {{ _self.ajaxLink(parameters|merge({'class': 'btn icons-holder-text'})) }}
    </div>
{% endmacro %}

{#
    A link that sends request to server
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataMethod' - request http method
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'errorMessage' - a message which will be shown if operation failed
            'title' - button title
            'label' - button label
            'visible' - determined whether the link is visible or not. Defaults to true
        ]
#}
{% macro ajaxLink(parameters) %}
    {% set additionalParameters = {
        'pageComponent': {
            'module': 'oroui/js/app/components/ajax-button'
        },
        'dataAttributes': {
            'method': parameters.dataMethod is defined ? parameters.dataMethod : 'GET',
            'error-message': parameters.errorMessage is defined ? parameters.errorMessage : 'oro.ui.unexpected_error'
        }
    } %}

    {{ _self.clientLink(parameters|merge(additionalParameters)) }}
{% endmacro %}

{#
    A button with javascript handler
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro dropdownClientItem(parameters) %}
    <li>{{ _self.clientLink(parameters) }}</li>
{% endmacro %}

{#
    Outputs a button with \"Save and Close\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.

    For backward compatibility macros supports input parameter as a label of button.
#}
{% macro saveAndCloseButton(parametersOrLabel) %}
    {% set defaultParameters = {
        'class': 'btn-success',
        'label': 'Save and Close'|trans
    } %}

    {% if parametersOrLabel is iterable %}
        {% set parameters = parametersOrLabel %}
    {% else %}
        {# @deprecated since 1.10, support backward compatibility #}
        {% set parameters = {
            'label': parametersOrLabel|default('Save and Close'|trans),
            'action': 'save_and_close'
        } %}
    {% endif %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ _self.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs a button with \"Save and Stay\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.

    For backward compatibility macros supports input parameter as a label of button.
#}
{% macro saveAndStayButton(parametersOrLabel) %}
    {% if parametersOrLabel is iterable %}
        {% set parameters = parametersOrLabel %}
    {% else %}
        {# @deprecated since 1.10, support backward compatibility #}
        {% set parameters = {
            'label': parametersOrLabel|default('Save'|trans),
            'action': 'save_and_stay'
        } %}
    {% endif %}

    {{ _self.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs a button with \"Save and New\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.
#}
{% macro saveAndNewButton(parameters) %}
    {% set defaultParameters = {
        'label': 'Save and New'|trans
    } %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ _self.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs generic button with \"Save\" label and redirect behavior. Redirect is configured with parameter \"route\"
    and \"route_params\". Route params could contain paths instead of values if value will be available only after save.

    Parameters - array
        [
            'type' - button type, should be \"button\" or \"submit\"
            'class' - CSS class
            'label' - label of button
            'route' - Optional name of route to make a redirect.
            'params' - Optional list of route parameters. In case if value of parameter will be available only
                after save you can pass property path. For example: ['id': '\$id']. '\$' at the means property path.
                So when controller will handle save it will redirect to route using actual id value of entity.
            'action' - Contains data used by controller to make redirect. This value is prepared automatically
                based on route and route_params so you don't need to use this attribute directly.
        ]
#}
{% macro saveActionButton(parameters) %}
    {% set defaultParameters = {
        'type' : 'submit',
        'class': 'btn-success main-group',
        'label': 'Save'|trans,
    } %}

    {% if parameters.action is defined %}
        {# @deprecated since 1.10, support backward compatibility #}
    {% elseif parameters.route is defined %}
        {# Prepare action parameter based on route #}
        {% set action = {'route': parameters.route} %}
        {% if parameters.params is defined %}
            {% set action = action|merge({'params': parameters.params}) %}
        {% endif %}
        {% set parameters = parameters|merge({'action': action|json_encode}) %}
    {% endif %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ _self.buttonType(parameters) }}
{% endmacro %}


{#
    Button macros with custom button type
    Parameters - array:
        [
            'type' - button type
            'class' - additional button css classes
            'label' - label of button
        ]
#}
{% macro buttonType(parameters) %}
    {% set defaultParameters = {
        'type' : 'button'
    } %}
    {% set parameters = defaultParameters|merge(parameters) %}
    <div class=\"btn-group\">
        <button type=\"{{ parameters.type }}\" class=\"btn {% if (parameters.class is defined) %}{{ parameters.class }}{% endif %}{% if (parameters.action is defined) %} action-button{% endif %}\"
                {% if (parameters.action is defined) %}data-action=\"{{ parameters.action }}\"{% endif %}
                {% if parameters.data is defined %}
                    {% for dataItemName,dataItemValue in parameters.data %}
                        data-{{ dataItemName }}=\"{{ dataItemValue|e('html_attr')|raw }}\"
                    {% endfor %}
                {% endif %}>
            {{ parameters.label }}
        </button>
    </div>
{% endmacro %}

{#
    Separator between buttons
#}
{% macro buttonSeparator() %}
    <div class=\"pull-left\">
        <div class=\"separator-btn\"></div>
    </div>
{% endmacro %}

{#
    Create scroll sub block for scroll block
    Parameters:
        title - title of sub block
        data - array with data fields (i.e. form_row() or attibuteRow() data)
        isForm - flag what scroll block mut contain the form
        useSpan - flag to indicate is subblock must have css class specified in spanClass parameter or not
        spanClass - css class name of subblock, if this parameter is not specified the css class is span6
#}
{% macro scrollSubblock(title, data, isForm, useSpan, spanClass) %}
    {% set spanClass = spanClass|default('responsive-cell') %}
    {#% if useSpan is not defined or useSpan == true %}
        {% set span = spanClass %}
    {% else %}
        {% set span = '' %}
    {% endif %}
    {% if span %}
        <div class=\"{{ span }}\">
    {% endif %#}
    <div class=\"{{ spanClass }}\">
    {% if title|length %}<h5 class=\"user-fieldset\"><span>{{ title }}</span></h5>{% endif %}
    {% for dataBlock in data %}
        {{ dataBlock|raw }}
    {% endfor %}
    </div>
    {#% if span %}
        </div>
    {% endif %#}
{% endmacro %}

{#
    Create scroll block for scroll data area
    Parameters:
        blockId - id of block
        title - block title
        'subblocks' - array with scroll sub blocks:
            [
                'title' - title of sub block
                'data' - array with data fields (i.e. form_row() or attibuteRow() data)
            ]
        isForm - flag what scroll block mut contain the form
        contentAttributes - additional attributes for block content
        useSubBlockDivider - indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks
#}
{% macro scrollBlock(blockId, title, subblocks, isForm, contentAttributes, useSubBlockDivider, headerLinkContent = '') %}
    {% set cols = subblocks|length %}
    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">{{ title }}{% if headerLinkContent is defined %}{{ headerLinkContent }}{% endif %}</h4>
        <div id=\"{{ blockId }}\" class=\"scrollspy-nav-target\"></div>
        <div class=\"section-content\">
            <div class=\"row-fluid{% if (contentAttributes is defined and contentAttributes.class is defined and contentAttributes.class|length) %} {{ contentAttributes.class }}{% endif %}{% if cols > 1 and (useSubBlockDivider is not defined or useSubBlockDivider == true) %} row-fluid-divider{% endif %}\" {{ _self.attributes(contentAttributes, ['class']) }}>
                {% if isForm is defined and isForm == true %}
                    <fieldset class=\"form-horizontal\">
                {% else %}
                    <div class=\"form-horizontal\">
                {% endif %}
                    {% for subblock in subblocks %}
                        {{ _self.scrollSubblock(subblock.title is defined and subblock.title|length ? subblock.title : null, subblock.data, isForm, subblock.useSpan is defined ? subblock.useSpan : true, subblock.spanClass is defined ? subblock.spanClass : '') }}
                    {% endfor %}
                {% if isForm is defined and isForm == true %}
                    </fieldset>
                {% else %}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Create scroll blocks (like in view or update pages)
    Parameters:
        dataTarget - id of scroll block
        data - array with scroll data blocks
        form
    data parameter structure:
        [
            'dataBlocks' - array of blocks. each block consist of:
                [
                    'title' - title of scroll block
                    'priority' - a number that can be used to change the order of blocks
                    'class' - additional css class for scroll block menu item
                    'useSubBlockDivider' - [optional] indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks
                    'subblocks' - array with scroll sub blocks:
                        [
                            'title' - title of sub block
                            'data' - array with data fields (i.e. form_row() or attibuteRow() data)
                        ]
                ]
            'formErrors' - errors from the form
            'hiddenData' - additional data (hidden fields from the form)
        ]
#}
{% macro scrollData(dataTarget, data, entity, form = null) %}
    {% set data = oro_ui_scroll_data_before(dataTarget, data, entity, form) %}

    {% if form is defined and form %}
        {% set isForm = true %}
    {% else %}
        {% set isForm = false %}
    {% endif %}

    {% set dataBlocks = data.dataBlocks|oro_sort_by %}

    <div id=\"{{ dataTarget }}\" class=\"navbar navbar-static scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\" style=\"width: auto;\">
                <ul class=\"nav\">
                    {% for navElement in dataBlocks %}
                        <li {% if navElement.class is defined %}class=\"{{ navElement.class }}\"{% endif %}><a href=\"#scroll-{{ loop.index }}\">{{ navElement.title }}</a></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
    <div class=\"clearfix\">
        {% if data.formErrors is defined and data.formErrors | length%}
            <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                <div class=\"alert alert-error\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                    {{ data.formErrors|raw }}
                </div>
            </div>
        {% endif %}
        <div data-spy=\"scroll\" data-target=\"#{{ dataTarget }}\" data-offset=\"1\" class=\"scrollspy container-fluid scrollable-container{% if isForm %} form-container{% endif %}\">
            {% for scrollBlock in dataBlocks %}
                {{ _self.scrollBlock(\"scroll-\" ~ loop.index, scrollBlock.title, scrollBlock.subblocks, isForm, scrollBlock.content_attr is defined ? scrollBlock.content_attr : null, scrollBlock.useSubBlockDivider is defined ? scrollBlock.useSubBlockDivider : true, scrollBlock.headerLinkContent is defined ? scrollBlock.headerLinkContent : null) }}
            {% endfor %}
            {% if data.hiddenData is defined or isForm %}
                <div class=\"hide\" data-skip-input-widgets data-layout=\"separate\">
                    {% if data.hiddenData is defined %}
                        {{ data.hiddenData|raw }}
                    {% endif %}
                    {% if isForm %}
                        {{ form_rest(form) }}
                    {% endif %}
                </div>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{#
    Create collection field block
    Parameters:
        field - form collection field
        label - label of block
        buttonCaption - Caption of add entity button
        tooltipText (optional) - text to render a tooltip for the collection field
#}
{% macro collectionField(field, label, buttonCaption, tooltipText = null) %}
    <div class=\"control-group\">
        <div class=\"control-label wrap\">
            {% if tooltipText is not null %}
                {{ _self.tooltip(tooltipText) }}
            {% endif %}
            <label>{{ label }}</label>
        </div>
        <div class=\"controls\">
            <div class=\"row-oro\">
                <div class=\"oro-item-collection collection-fields-list\" data-prototype=\"{{ _self.collection_prototype(field)|escape }}\">
                    {% for emailField in field.children %}
                        {{ _self.collection_prototype(emailField) }}
                    {% endfor %}
                </div>
                <a class=\"btn add-list-item\" href=\"javascript: void(0);\">{{ buttonCaption }}</a>
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Render attributes of HTML element.
    Parameters:
        attr - attributes
        excludes - names of attributes which should not be rendered even if they exist in attr parameter
#}
{% macro attributes(attr, excludes) %}
    {% spaceless %}
        {% set attr = attr|default({}) %}
        {% for attrname, attrvalue in attr %}{% if not excludes is defined or not excludes[attrname] is defined %}{% if attrname in ['placeholder', 'title'] %}{{ attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\" {% else %}{{ attrname }}=\"{{ attrvalue is iterable ? attrvalue|json_encode : attrvalue }}\" {% endif %}{% endif %}{% endfor %}
    {% endspaceless %}
{% endmacro %}

{#
    Render link to entity owner
    Parameters:
        entity - entity record
        renderLabel - need render default label
#}
{%- macro entityOwnerLink(entity, renderLabel = true) -%}
    {% spaceless %}
        {%- if entity %}
            {% set ownerType = oro_get_owner_type(entity) %}
            {%- if ownerType %}
                {% if  is_granted('VIEW', entity, oro_get_owner_field_name(entity)) %}
                    {% set owner = oro_get_entity_owner(entity) %}
                    {% if owner %}
                        {% if (ownerType == 'USER') %}
                            {% set ownerPath = path('oro_user_view', {'id': owner.id}) %}
                            {% set ownerName = owner|oro_format_name %}
                        {% elseif (ownerType == 'BUSINESS_UNIT') %}
                            {% set ownerPath = path('oro_business_unit_view', {'id': owner.id}) %}
                            {% set ownerName = owner.name %}
                        {% endif %}
                        {% if ownerName is defined %}
                            {% if renderLabel %}
                                {% set entityClassName = oro_class_name(entity) %}
                                {{ oro_field_config_value(
                                        entityClassName,
                                        oro_entity_config_value(entityClassName, 'owner_field_name', 'ownership'),
                                        'label'
                                    )|trans
                                }}:
                            {% endif %}
                            {% if ownerPath is defined and is_granted('VIEW', owner) %}
                                {{ _self.renderUrl(ownerPath, ownerName) }}
                            {% else %}
                                {{ ownerName }}
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endif %}
            {% endif -%}
        {% endif -%}
    {% endspaceless %}
{%- endmacro -%}

{%- macro renderUrl(url, text, class, title) -%}
    {% spaceless %}
        {% if text is empty %}
            {% set text = url %}
        {% endif %}
        {% if title is empty %}
            {% set title = text %}
        {% endif %}
        {% if class is empty %}
            {% set class = '' %}
        {% endif %}
        {% if url is not empty %}
            <a href=\"{{ url|escape('html_attr') }}\" title=\"{{ title|escape('html_attr') }}\" class=\"{{ class }}\"
                    {% if (not oro_is_url_local(url)) %} target=\"_blank\"{% endif %}>{{ text }}</a>
        {% endif %}
    {% endspaceless %}
{%- endmacro -%}

{%- macro renderPhone(phone, title) -%}
    {% if title is empty %}
        {% set title = phone %}
    {% endif %}
    {% if phone is not empty %}
        <a href=\"tel:{{ phone|escape('html_attr') }}\" title=\"{{ title|escape('html_attr') }}\" class=\"phone\">{{ title }}</a>
    {% endif %}
{%- endmacro -%}

{#
    Render phone number with related actions block
    Parameters:
        phone - PhoneInterface object or string
        entity - related entity record
#}
{% macro renderPhoneWithActions(phone, entity) -%}
    {% if phone is not empty %}
        {%- set actions %}
            {%- placeholder phone_actions with {phone: phone, entity: entity} -%}
        {% endset -%}
        {% set actions = actions|trim %}
        <span class=\"inline-actions-element{% if actions is empty %} inline-actions-element_no-actions{% endif %}\">
            <span class=\"inline-actions-element_wrapper\">{{ _self.renderPhone(phone) }}</span>
            {% if actions is not empty -%}
                <span class=\"inline-actions-element_actions phone-actions\">{{ actions|raw }}</span>
            {%- endif %}
        </span>
    {% endif %}
{%- endmacro %}

{% macro getApplicableForUnderscore(str) %}
    {{ str|replace({
        \"<script\": '<% print(\"<sc\" + \"ript\"); %>',
        \"</script\": '<% print(\"</sc\" + \"ript\"); %>',
        \"<%\": '<% print(\"<\" + \"%\"); %>',
        \"%>\": '<% print(\"%\" + \">\"); %>',
    })|raw }}
{% endmacro %}

{%- macro renderList(elements) -%}
    <ul class=\"extra-list\">
        {%- for element in elements %}
            <li class=\"extra-list-element\">{{ element }}</li>
        {% endfor -%}
    </ul>
{% endmacro %}

{%- macro renderTable(titles, rows, style) -%}
     <table class=\"{{ style }}\">
     <thead>
     <tr>
    {%- for title in titles %}
        <th>{{ title }}</th>
    {% endfor -%}
     </tr>
     </thead>
    {%- for row in rows %}
        <tr>
            {%- for element in row %}
                <td>{{ element }}</td>
            {% endfor -%}
        </tr>
    {% endfor -%}
    </table>
{% endmacro %}

{%- macro entityViewLink(entity, label, route, permission) -%}
    {% if entity %}
        {% if route and is_granted(permission|default('VIEW'), entity) %}
            {{ _self.renderUrl(path(route, {'id': entity.id}), label) }}
        {% else %}
            {{ label|escape }}
        {% endif %}
    {% endif %}
{%- endmacro -%}

{%- macro entityViewLinks(entities, labelProperty, route, permission) -%}
    {% set links = [] %}
    {% for entity in entities %}
        {% set links = links|merge([_self.entityViewLink(entity, attribute(entity, labelProperty), route, permission)]) %}
    {% endfor %}
    {{ _self.renderList(links) }}
{%- endmacro -%}

{#
    Renders text that should be rendered instead of not accessable entity field
    Parameters:
        labelText - Text that should be rendered
#}
{%- macro renderDisabledLabel(labelText) -%}
    <i>{{ labelText }}</i>
{%- endmacro -%}

{#
    Renders entity label by it's field. In case if VIEW permission is notgranted, returns
    the 'view entity_name' string in case if entityLabelIfNotGranted was set and empty string otherwise
    Parameters:
        entity - Entity whete field value should be takes
        fieldName - Field name wich value should be rendered
        entityLabelIfNotGranted - Entity label that should be rendered in case if user have no access to see field value
#}
{%- macro renderEntityViewLabel(entity, fieldName, entityLabelIfNotGranted = null) -%}
    {% if entity is not null and is_granted('VIEW', entity, fieldName) %}
        {{ attribute(entity, fieldName) }}
    {% else %}
        {% if entityLabelIfNotGranted is not null %}
            {{ 'view %entityName%'|trans({'%entityName%' : entityLabelIfNotGranted|trans}) }}
        {% endif %}
    {% endif %}
{%- endmacro -%}

{%- macro renderJsTree(data, actions) -%}
    {% embed \"OroUIBundle::jstree.html.twig\" with {
        data: data,
        actions: actions
    } %}
    {% endembed %}
{%- endmacro -%}
", "OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/macros.html.twig");
    }
}


/* OroUIBundle::macros.html.twig */
class __TwigTemplate_a8fbd3df6ce4ae216016358d3bf0f7ded3b233e1fd893580e549eb1d30e1f0f3_404737103 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle::macros.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  4981 => 1237,  3684 => 1239,  3683 => 1238,  3682 => 1237,  3666 => 1236,  3647 => 1233,  3641 => 1231,  3638 => 1230,  3632 => 1228,  3630 => 1227,  3613 => 1226,  3593 => 1215,  3578 => 1214,  3559 => 1206,  3553 => 1205,  3550 => 1204,  3545 => 1203,  3543 => 1202,  3525 => 1201,  3506 => 1198,  3500 => 1196,  3494 => 1194,  3491 => 1193,  3489 => 1192,  3471 => 1191,  3452 => 1188,  3445 => 1186,  3436 => 1184,  3432 => 1183,  3430 => 1182,  3426 => 1181,  3423 => 1179,  3414 => 1177,  3410 => 1176,  3404 => 1173,  3387 => 1172,  3368 => 1169,  3359 => 1167,  3355 => 1166,  3353 => 1165,  3338 => 1164,  3319 => 1161,  3316 => 1156,  3301 => 1155,  3281 => 1151,  3276 => 1149,  3274 => 1148,  3270 => 1147,  3263 => 1146,  3261 => 1145,  3258 => 1143,  3256 => 1142,  3254 => 1141,  3238 => 1140,  3212 => 1130,  3209 => 1129,  3206 => 1128,  3203 => 1127,  3201 => 1126,  3185 => 1125,  3166 => 1122,  3157 => 1120,  3148 => 1119,  3145 => 1118,  3142 => 1117,  3139 => 1116,  3136 => 1115,  3133 => 1114,  3130 => 1113,  3127 => 1112,  3124 => 1111,  3121 => 1110,  3118 => 1109,  3116 => 1108,  3098 => 1107,  3077 => 1102,  3074 => 1101,  3071 => 1100,  3068 => 1099,  3062 => 1097,  3056 => 1095,  3053 => 1094,  3049 => 1092,  3047 => 1089,  3046 => 1088,  3044 => 1087,  3041 => 1086,  3038 => 1085,  3035 => 1084,  3032 => 1083,  3029 => 1082,  3026 => 1081,  3023 => 1080,  3020 => 1079,  3017 => 1078,  3014 => 1077,  3011 => 1076,  3008 => 1075,  3005 => 1074,  3003 => 1073,  3000 => 1072,  2998 => 1071,  2996 => 1070,  2980 => 1069,  2961 => 1060,  2939 => 1059,  2936 => 1058,  2933 => 1057,  2917 => 1056,  2894 => 1044,  2891 => 1043,  2882 => 1041,  2878 => 1040,  2874 => 1039,  2866 => 1035,  2860 => 1033,  2858 => 1032,  2854 => 1030,  2836 => 1029,  2816 => 1017,  2812 => 1015,  2806 => 1013,  2803 => 1012,  2797 => 1010,  2795 => 1009,  2792 => 1008,  2789 => 1007,  2772 => 1005,  2755 => 1004,  2746 => 1003,  2739 => 999,  2734 => 996,  2732 => 995,  2725 => 990,  2700 => 988,  2683 => 987,  2676 => 983,  2673 => 982,  2671 => 981,  2668 => 980,  2665 => 979,  2662 => 978,  2659 => 977,  2656 => 976,  2654 => 975,  2651 => 974,  2648 => 973,  2630 => 972,  2609 => 943,  2605 => 941,  2601 => 939,  2598 => 938,  2589 => 936,  2584 => 935,  2580 => 933,  2576 => 931,  2574 => 930,  2562 => 929,  2557 => 927,  2550 => 926,  2547 => 925,  2544 => 924,  2523 => 923,  2504 => 903,  2495 => 901,  2490 => 900,  2484 => 899,  2479 => 898,  2477 => 890,  2474 => 889,  2455 => 888,  2434 => 874,  2420 => 873,  2398 => 865,  2393 => 864,  2382 => 862,  2377 => 861,  2374 => 860,  2368 => 859,  2357 => 858,  2354 => 857,  2351 => 856,  2348 => 853,  2333 => 852,  2313 => 839,  2310 => 838,  2308 => 837,  2305 => 836,  2302 => 835,  2299 => 834,  2296 => 833,  2293 => 832,  2290 => 831,  2287 => 830,  2285 => 829,  2282 => 828,  2280 => 827,  2278 => 826,  2275 => 825,  2272 => 820,  2257 => 819,  2237 => 799,  2234 => 798,  2232 => 797,  2229 => 796,  2226 => 793,  2211 => 792,  2191 => 785,  2188 => 784,  2185 => 783,  2183 => 780,  2181 => 779,  2179 => 778,  2176 => 777,  2173 => 776,  2170 => 775,  2155 => 774,  2135 => 765,  2132 => 764,  2130 => 763,  2127 => 762,  2124 => 761,  2122 => 758,  2120 => 757,  2118 => 756,  2115 => 755,  2112 => 754,  2110 => 753,  2107 => 752,  2104 => 748,  2089 => 747,  2068 => 738,  2053 => 737,  2033 => 718,  2030 => 717,  2028 => 714,  2027 => 713,  2025 => 708,  2010 => 707,  1989 => 685,  1986 => 684,  1971 => 683,  1950 => 660,  1947 => 659,  1945 => 658,  1930 => 657,  1899 => 637,  1896 => 636,  1893 => 635,  1890 => 634,  1885 => 633,  1869 => 632,  1848 => 629,  1845 => 628,  1843 => 626,  1841 => 625,  1838 => 624,  1823 => 623,  1802 => 617,  1799 => 616,  1796 => 615,  1793 => 614,  1791 => 612,  1789 => 610,  1774 => 609,  1752 => 601,  1744 => 599,  1736 => 597,  1734 => 596,  1729 => 595,  1726 => 594,  1721 => 593,  1706 => 592,  1686 => 585,  1684 => 584,  1674 => 582,  1672 => 581,  1670 => 580,  1668 => 579,  1665 => 578,  1663 => 577,  1660 => 575,  1658 => 574,  1655 => 572,  1652 => 569,  1651 => 568,  1649 => 567,  1647 => 566,  1645 => 565,  1642 => 563,  1640 => 562,  1635 => 560,  1633 => 559,  1628 => 557,  1626 => 556,  1621 => 554,  1619 => 553,  1614 => 552,  1612 => 551,  1607 => 549,  1605 => 548,  1599 => 546,  1597 => 545,  1593 => 544,  1586 => 543,  1583 => 542,  1568 => 541,  1547 => 519,  1544 => 518,  1538 => 517,  1535 => 516,  1532 => 515,  1527 => 514,  1524 => 513,  1521 => 512,  1518 => 511,  1515 => 510,  1512 => 509,  1509 => 508,  1506 => 507,  1503 => 506,  1501 => 505,  1497 => 503,  1495 => 500,  1494 => 499,  1493 => 498,  1492 => 497,  1491 => 495,  1490 => 494,  1489 => 493,  1487 => 491,  1484 => 490,  1481 => 489,  1479 => 488,  1476 => 487,  1473 => 486,  1471 => 483,  1469 => 482,  1466 => 481,  1463 => 480,  1460 => 479,  1457 => 478,  1454 => 477,  1439 => 476,  1418 => 472,  1414 => 470,  1412 => 469,  1409 => 468,  1406 => 467,  1403 => 466,  1401 => 465,  1398 => 464,  1395 => 463,  1392 => 462,  1390 => 461,  1387 => 460,  1384 => 459,  1369 => 458,  1348 => 439,  1343 => 437,  1339 => 436,  1334 => 435,  1331 => 434,  1329 => 431,  1327 => 430,  1324 => 429,  1321 => 428,  1318 => 427,  1315 => 426,  1313 => 423,  1311 => 422,  1308 => 421,  1305 => 420,  1302 => 419,  1287 => 418,  1267 => 404,  1264 => 403,  1261 => 402,  1258 => 400,  1256 => 398,  1255 => 397,  1254 => 396,  1253 => 395,  1251 => 394,  1249 => 391,  1247 => 390,  1244 => 389,  1242 => 386,  1240 => 385,  1237 => 384,  1234 => 383,  1231 => 382,  1228 => 381,  1225 => 380,  1222 => 379,  1219 => 378,  1216 => 377,  1213 => 376,  1210 => 375,  1207 => 374,  1192 => 373,  1171 => 359,  1168 => 358,  1165 => 357,  1162 => 356,  1146 => 355,  1125 => 346,  1123 => 345,  1121 => 338,  1106 => 337,  1084 => 330,  1081 => 329,  1075 => 326,  1072 => 325,  1070 => 324,  1069 => 322,  1066 => 321,  1063 => 320,  1061 => 317,  1060 => 316,  1059 => 315,  1057 => 314,  1054 => 313,  1051 => 312,  1036 => 311,  1015 => 299,  1000 => 298,  980 => 283,  974 => 281,  971 => 280,  968 => 279,  959 => 277,  954 => 276,  952 => 275,  948 => 274,  941 => 271,  935 => 269,  933 => 268,  929 => 266,  914 => 265,  893 => 251,  890 => 250,  875 => 249,  853 => 233,  845 => 232,  838 => 231,  835 => 230,  824 => 228,  819 => 227,  816 => 226,  810 => 224,  808 => 223,  803 => 222,  800 => 221,  797 => 220,  794 => 219,  790 => 217,  784 => 215,  782 => 214,  777 => 213,  774 => 212,  771 => 211,  768 => 210,  766 => 209,  751 => 208,  730 => 193,  727 => 192,  724 => 191,  721 => 190,  704 => 189,  684 => 179,  681 => 178,  678 => 177,  675 => 176,  672 => 175,  669 => 174,  666 => 173,  650 => 172,  629 => 161,  627 => 160,  626 => 159,  625 => 157,  624 => 155,  619 => 154,  617 => 148,  616 => 147,  614 => 146,  611 => 145,  591 => 144,  569 => 132,  566 => 131,  563 => 130,  545 => 129,  524 => 118,  506 => 117,  484 => 104,  479 => 102,  476 => 101,  460 => 100,  439 => 91,  436 => 90,  433 => 89,  424 => 86,  421 => 85,  416 => 84,  414 => 83,  411 => 82,  403 => 80,  397 => 78,  395 => 77,  392 => 76,  389 => 75,  372 => 74,  349 => 62,  343 => 61,  339 => 59,  337 => 56,  336 => 55,  333 => 54,  331 => 53,  328 => 52,  326 => 49,  324 => 48,  321 => 47,  318 => 46,  315 => 45,  312 => 44,  309 => 43,  306 => 41,  303 => 40,  300 => 39,  297 => 38,  294 => 37,  291 => 36,  288 => 35,  285 => 34,  282 => 33,  279 => 32,  277 => 31,  274 => 30,  254 => 29,  232 => 24,  226 => 22,  220 => 20,  217 => 19,  209 => 17,  204 => 16,  199 => 15,  197 => 14,  193 => 13,  187 => 10,  184 => 9,  181 => 8,  178 => 7,  175 => 6,  172 => 5,  169 => 4,  166 => 3,  163 => 2,  148 => 1,  140 => 1154,  137 => 1062,  134 => 1049,  131 => 1020,  128 => 947,  125 => 908,  122 => 878,  119 => 869,  115 => 841,  112 => 801,  109 => 787,  106 => 767,  103 => 740,  100 => 720,  97 => 688,  94 => 664,  91 => 640,  88 => 631,  85 => 603,  82 => 588,  79 => 521,  76 => 475,  73 => 442,  70 => 406,  67 => 361,  64 => 348,  61 => 333,  58 => 301,  55 => 286,  52 => 254,  49 => 237,  46 => 195,  43 => 181,  40 => 165,  37 => 135,  34 => 120,  31 => 108,  28 => 93,  25 => 66,  22 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro collection_prototype(widget) %}
    {% if 'prototype' in widget.vars|keys %}
        {% set form = widget.vars.prototype %}
        {% set name = widget.vars.prototype.vars.name %}
    {% else %}
        {% set form = widget %}
        {% set name = widget.vars.full_name %}
    {% endif %}

    <div data-content=\"{{ name }}\">
        <div class=\"row-oro oro-multiselect-holder\">
            <div class=\"float-holder \">
                {{ form_errors(form) }}
                {% if form.children|length  %}
                    {% for child in form %}
                        {{ form_widget(child) }}
                        {{ form_errors(child) }}
                    {% endfor %}
                {% else %}
                    {{ form_widget(form) }}
                {% endif %}
                {{ form_rest(form) }}
            </div>
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"{{ name }}\">×</button>
        </div>
    </div>
{% endmacro %}

{% macro tooltip(tooltip_raw, tooltip_parameters, tooltip_placement, details_enabled, details_link, details_anchor) %}
    {% set tooltip_parameters = tooltip_parameters|default({}) %}
    {# deprecated tooltips domain since 1.9:1:11 for tooltips use instead 'messages' translation domain #}
    {% set tooltip = tooltip_raw|trans(tooltip_parameters, \"messages\") %}
    {% if (tooltip == tooltip_raw) %}
        {% set tooltip = tooltip_raw|trans(tooltip_parameters, \"tooltips\") %}
    {% endif %}
    {% if tooltip is not empty %}
        {% set details_anchor = details_anchor|default(null) %}
        {% set details_link = details_link|default(null) %}
        {% set details_enabled = details_enabled|default(false) %}
        {% set tooltip_placement = tooltip_placement|default(null) %}

        {# Help link logic #}
        {% if details_enabled or details_anchor or details_link %}
            {% set helpLink = details_link|default(get_help_link()) %}
            {% if details_anchor %}
                {% set helpLink = helpLink ~ '#' ~ details_anchor %}
            {% endif %}
            {% set tooltip = tooltip
                ~ '<div class=\"clearfix\"><div class=\"pull-right\"><a href=\"' ~ helpLink ~ '\">'
                ~ 'oro.form.tooltip.read_more'|trans ~ '</a></div></div>'
            %}
        {% endif %}
        {# End help link logic #}

        {% set tooltip = '<div class=\"oro-popover-content\">'
            ~ tooltip
            ~ '</div>'
        %}

        <i class=\"fa-info-circle tooltip-icon\"
           {% if tooltip_placement %}data-placement=\"{{ tooltip_placement }}\"{% endif %}
           data-content=\"{{ tooltip }}\"
           data-toggle=\"popover\"></i>
    {% endif %}
{% endmacro %}

{#
    Render attribute row
    Parameters:
        title - attribute title
        value - attribute value
        additionalData - array with additional data
#}
{% macro attibuteRow(title, value, additionalData) %}
    {% set attributeValue %}
        <div class=\"clearfix-oro\">
            {% if value.value is not defined  %}
                <div class=\"control-label\">{{ value }}</div>
            {% else %}
                <div class=\"control-label\">{{ value.value }} <strong>{{ value.hint }}</strong></div>
            {% endif %}
        </div>
        {% if additionalData|length %}
            {% for data in additionalData.data %}
                <div class=\"clearfix-oro\">
                    <div class=\"control-label\">{{ attribute(data, additionalData.field) }}</div>
                </div>
            {% endfor %}
        {% endif %}
    {% endset %}
    {{ _self.renderAttribute(title, attributeValue) }}
{% endmacro %}

{#
    Render attribute row with custom data block
    Parameters:
        title - row title
        data - row data
#}
{% macro renderAttribute(title, data) %}
    <div class=\"control-group attribute-row\">
        <label class=\"control-label\">{{ title }}</label>
        <div class=\"controls\">
            {{ data|raw }}
        </div>
    </div>
{% endmacro %}

{#
    Render property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderProperty(title, data, entity = null, fieldName = null) %}
    {{ _self.renderHtmlProperty(title, data|escape, entity, fieldName) }}
{% endmacro %}

{#
    Render html property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderHtmlProperty(title, data, entity = null, fieldName = null) %}
    {% if entity is defined and fieldName is defined and not is_granted('VIEW', entity, fieldName) %}
    {% else %}
        {{ _self.renderAttribute(title, '<div class=\"control-label\">' ~ data|default('oro.ui.empty'|trans) ~ '</div>') }}
    {% endif %}
{% endmacro %}

{#
    Render collapsible html property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderCollapsibleHtmlProperty(title, data, entity, fieldName, moreText = 'Show more', lessText = 'Show less') %}
    {% if is_granted('VIEW', entity, fieldName) %}
        {% set collapseView = {
                storageKey: 'collapseBlock[' ~ oro_class_name(entity) ~ ']',
                uid: '[' ~ title ~ '][' ~ entity.id ~ ']',
                animationSpeed: 0,
                closeClass: 'overflows',
                checkOverflow: true,
                open: false
            } %}
        <div class=\"collapse-block\" data-page-component-collapse=\"{{ collapseView|json_encode }}\">
            {{ _self.renderAttribute(title,
                '<div class=\"control-label\" data-collapse-container>' ~
                    data|default('oro.ui.empty'|trans) ~
                '</div>' ~
                '<a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>' ~ moreText|trans ~ '</a>' ~
                '<a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>' ~ lessText|trans ~ '</a>'
            ) }}
        </div>
    {% endif %}
{% endmacro %}

{#
    Render html property block. HTML rendering may be switched off with system config.
    Parameters:
        title - property title
        data  - property data
#}
{% macro renderSwitchableHtmlProperty(title, data) %}
    {% if oro_config_value('oro_form.wysiwyg_enabled') %}
        {% set data = data|oro_html_sanitize %}
    {%  else %}
        {% set data = data|striptags|nl2br %}
    {% endif %}

    {{ _self.renderAttribute(title, '<div class=\"control-label html-property\">' ~ data|default('oro.ui.empty'|trans) ~ '</div>') }}
{% endmacro %}

{#
    Render color property block
    Parameters:
        title - property title
        data  - property data
        empty - a value which should be used if data is empty
#}
{% macro renderColorProperty(title, data, empty) %}
    {% if data is not none %}
       {% set data = '<i class=\"color hide-text\" title=\"' ~ data ~ '\" style=\"background-color: ' ~ data ~ ';\">' ~ data ~ '</i>' %}
    {% endif %}
    {{ _self.renderAttribute(title, '<div class=\"control-label\">' ~ data|default(empty)|default('oro.ui.empty'|trans) ~ '</div>') }}
{% endmacro %}

{#
    Create the link
    Parameters - array:
        [
            'path'  - button url
            'class' - default class
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
        ]
#}
{% macro link(parameters) %}
    {# need to remove spaces just before label #}
    {% set iconHtml = '' %}
    {% if parameters.iCss is defined and parameters.iCss %}
        {% set iconHtml %}
        <i class=\"{{ parameters.iCss }} hide-text\" >
            {% if not parameters.noIconText|default(false)%}
                {{ parameters.label }}
            {% endif %}
        </i>
        {% endset %}
    {% else %}
    {% endif %}
    {% spaceless %}
    <a href=\"{{ parameters.path }}\"
        {% if (parameters.id is defined) %}
            id=\"{{ parameters.id }}\"
        {% endif %}
        {% if parameters.data is defined %}
            {% for dataItemName,dataItemValue in parameters.data %}
                data-{{ dataItemName }}=\"{{ dataItemValue|e('html_attr')|raw }}\"
            {% endfor %}
        {% endif %}
        class=\"{{ parameters.class is defined? parameters.class : '' }} {{ parameters.aCss is defined? parameters.aCss : '' }}\"
        {% if parameters.title is defined %}title=\"{{ parameters.title }}\"{% endif %}>{{ iconHtml|trim|raw }}
        {{- parameters.label|trim }}
    </a>
    {% endspaceless %}
{% endmacro %}

{#
    Create the button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
        ]
#}
{% macro button(parameters) %}
    <div class=\"pull-left btn-group icons-holder\">
        {{ _self.link(parameters|merge({'class': 'btn back icons-holder-text'})) }}
    </div>
{% endmacro %}

{#
    Create dropdown button
    Parameters - array:
        [
            'label' - button label
            'elements' - dropdown elements
            'html' - html from placeholder
            'aCss'  - additional drop down class
        ]
#}
{% macro dropdownButton(parameters) %}
    <div class=\"btn-group\">
        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            {% if parameters.iCss is defined %}
                <i class=\"{{ parameters.iCss }}\"></i>
            {% endif %}
            {{ parameters.label }}
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu {{ parameters.aCss is defined? parameters.aCss : '' }}\">
            {% if parameters.elements is defined and parameters.elements is not empty %}
                {% for item in parameters.elements %}
                    {{ _self.dropdownItem(item) }}
                {% endfor %}
            {% endif %}
            {% if parameters.html is defined and parameters.html is not empty %}
                {{ parameters.html|raw }}
            {% endif %}
        </ul>
    </div>
{% endmacro %}

{#
    Create the dropdown button item
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
        ]
#}
{% macro dropdownItem(parameters) %}
    <li>{{ _self.link(parameters) }}</li>
{% endmacro %}

{#
    Create the dropdown button wich preserves last used button
    Parameters - array:
        [
            'html'     - original buttons markup
            'groupKey' - key, to remember last used button
            'options'  - options for pinnedDropdownButtonProcessor widget
        ]
#}
{% macro pinnedDropdownButton(parameters) %}
    {% if isDesktopVersion() or parameters.mobileEnabled|default(false) %}
        {% set options = parameters.options|default({}) %}
        {% set options = options|merge({
            widgetModule: options.widgetModule|default('oroui/js/content-processor/pinned-dropdown-button'),
            widgetName: options.widgetName|default('pinnedDropdownButtonProcessor'),
            groupKey: parameters.groupKey is defined ? parameters.groupKey : '',
            useMainButtonsClone: true
        }) %}
        {% spaceless %}
            <div class=\"pull-right pinned-dropdown\"
                 {{ _self.renderAttributes(parameters.dataAttributes|default({})|merge({
                     'page-component-module': 'oroui/js/app/components/jquery-widget-component',
                     'page-component-options': options
                 })) }}>
                {{ parameters.html|raw }}
            </div>
        {% endspaceless %}
    {% else %}
        {{ parameters.html|raw }}
    {% endif %}
{% endmacro %}

{#
    Predefined pinnedDropdownButton's settings for save button
#}
{% macro dropdownSaveButton(parameters) %}
    {% set parameters = {
        'groupKey': 'saveButtons',
        'options': {
            'moreButtonAttrs': {
                'class': 'btn-success'
            }
        }
    }|merge(parameters|default({})) %}
    {{ _self.pinnedDropdownButton(parameters) }}
{% endmacro %}

{#
    Create 'Cancel' button
    Parameters
        'path' - button url
        'label' - button label | 'Cancel' by default
#}
{% macro cancelButton(path, label) %}
    {% if label is empty %}
        {% set label = 'Cancel'|trans %}
    {% endif %}
    {{ _self.button({'path' : path, 'title' : label, 'label' : label, data: {action: 'cancel'} }) }}
{% endmacro %}

{#
    Create 'Edit' button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title | 'Edit' by default
            'label' - button label | 'Edit' by default
            'entity_label' - if specified will be added for title and label
        ]
#}
{% macro editButton(parameters) %}
    {% set iCss = ['fa-pencil-square-o'] %}
    {% set aCss = ['edit-button', 'main-group'] %}
    {% if parameters.iCss is defined %}
        {% set iCss = parameters.iCss|split(' ')|merge(iCss) %}
    {% endif %}
    {% if parameters.aCss is defined %}
        {% set aCss = parameters.aCss|split(' ')|merge(aCss) %}
    {% endif %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.edit_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.edit'|trans
        %}
    {% endif %}
    {% set label = parameters.label is defined
        ? parameters.label
        : 'oro.ui.edit'|trans
    %}
    {% set parameters = parameters|merge({
        'iCss': iCss|join(' '),
        'aCss': aCss|join(' '),
        'title': title,
        'label': label
    }) %}

    {# Add URL parameters to button path #}
    {% set parameters = parameters|merge({ 'path' : oro_url_add_query(parameters['path']) }) %}

    {{ _self.button(parameters) }}
{% endmacro %}

{#
    Create 'add' button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title | 'Create' by default
            'label' - button label | 'Create' by default
            'entity_label' - if specified will be added for title and label
        ]
#}
{% macro addButton(parameters) %}
    {% if parameters.label is defined %}
        {% set label = parameters.label %}
    {% else %}
        {% set label = parameters.entity_label is defined
            ? 'oro.ui.create_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.create'|trans
        %}
    {% endif %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.create_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.create'|trans
        %}
    {% endif %}
    <a href=\"{{ parameters.path }}\"
        class=\"btn main-group btn-primary pull-right {{ parameters.aCss is defined? parameters.aCss : '' }}\"
        title=\"{{ title }}\"
    >
        {{ label }}
    </a>
{% endmacro %}

{#
    Delete button with javascript handler
    Parameters - array:
        [
            'aCss' - additional css class for 'a' tag
            'dataId' - data-id parameter
            'dataMessage' - message before delete record | 'Are you sure you want to delete this %entity_label%?' by default
            'dataRedirect' - url to redirect after delete | '%entity_label% deleted' by default
            'dataUrl' - data-url parameter
            'title' - button title | 'Delete' by default
            'label' - button label | 'Delete' by default
            'entity_label' - if specified will be added for title, label and messages| 'item' by default
            'disabled' - if true this control is rendered as disabled
        ]
#}
{% macro deleteButton(parameters) %}
    {% set aCss = 'btn icons-holder-text' %}

    {% if parameters.disabled is defined and parameters.disabled %}
        {% set aCss = aCss ~ ' disabled' %}
    {% endif %}

    {% if parameters.aCss is defined %}
        {% set aCss = aCss ~ ' ' ~ parameters.aCss %}
    {% endif %}

    {% set parameters = parameters|merge({'aCss': aCss}) %}

    <div class=\"pull-left btn-group icons-holder\">
        {{ _self.deleteLink(parameters) }}
    </div>
{% endmacro %}

{% macro deleteLink(parameters) %}
    {% set entityLabel = parameters.entity_label is defined ? parameters.entity_label : 'oro.ui.item'|trans %}
    {% set label = parameters.label is defined ? parameters.label : 'oro.ui.delete'|trans %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.delete_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.delete'|trans
        %}
    {% endif %}

    {% set message = parameters.dataMessage is defined ? parameters.dataMessage : 'oro.ui.delete_confirm'|trans({ '%entity_label%' : entityLabel }) %}
    {% set successMessage = parameters.successMessage is defined ? parameters.successMessage : 'oro.ui.delete_message'|trans({ '%entity_label%' : entityLabel }) %}
    {% set url = parameters.dataUrl is defined ? parameters.dataUrl : '' %}
    {% set linkParams = {
        'data': {
            'message': message,
            'success-message': successMessage,
            'url': url
        },
        'iCss': parameters.iCss is defined ? parameters.iCss: 'fa-trash-o',
        'aCss': parameters.aCss,
        'title': title,
        'label': label,
        'path': 'javascript:void(0);'
    } %}


    {% if (parameters.dataId is defined) %}
        {% set data = linkParams.data|merge({'id': parameters.dataId}) %}
        {% set linkParams = linkParams|merge({ 'data': data }) %}
    {% endif %}
    {% if parameters.dataRedirect is defined %}
        {% set data = linkParams.data|merge({'redirect': parameters.dataRedirect}) %}
        {% set linkParams = linkParams|merge({ 'data': data }) %}
    {% endif %}
    {% if parameters.data is defined %}
        {% for dataItemName,dataItemValue in parameters.data %}
            {% set data = linkParams.data|merge({(dataItemName): dataItemValue}) %}
            {% set linkParams = linkParams|merge({ 'data': data }) %}
        {% endfor %}
    {% endif %}
    {{ _self.link(linkParams) }}
{% endmacro %}

{#
    A button with javascript handler

    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'title' - button title
            'label' - button label
            'labelInIcon' - determine whether the label is include in icon or not. Defaults to true
            'visible' - determined whether the button is visible or not. Defaults to true,
            'dataAttributes' - additional data attributes
        ]
#}
{% macro clientLink(parameters) %}
    {% spaceless %}
        <a href=\"javascript: void(0);\" class=\"{{ parameters.class is defined ? parameters.class : '' }} {{ parameters.aCss is defined ? parameters.aCss : '' }}\"
            title=\"{{ parameters.title is defined ? parameters.title : (parameters.label is defined ? parameters.label : '') }}\"
            {% if (parameters.id is defined) %}
                id=\"{{ parameters.id }}\"
            {% endif %}
            {%- if (parameters.dataId is defined) -%}
                data-id =\"{{ parameters.dataId }}\"
            {%- endif -%}
            {%- if (parameters.dataUrlRaw is defined) -%}
                data-url=\"{{ parameters.dataUrlRaw|raw }}\"
            {% elseif (parameters.dataUrl is defined) %}
                data-url=\"{{ parameters.dataUrl }}\"
            {%- endif -%}
            {%- if (parameters.successMessage is defined) -%}
                data-success-message=\"{{ parameters.successMessage }}\"
            {%- endif -%}
            {%- if parameters.dataRedirect is defined -%}
                data-redirect=\"{{ parameters.dataRedirect }}\"
            {%- endif -%}
            {%- if (parameters.visible is defined and not parameters.visible) -%}
                style=\"display: none\"
            {%- endif -%}
            {%- if parameters.widget is defined and parameters.widget|length -%}
                {% set options = parameters.widget %}
                {%- if (options.createOnEvent is not defined) -%}
                    {% set options = options|merge({
                        'createOnEvent' : options.event|default('click')
                    }) %}
                {%- endif -%}
                {{ _self.renderWidgetAttributes(options) }}
            {%- endif -%}
            {%- if parameters.pageComponent is defined -%}
                {{ _self.renderPageComponentAttributes(parameters.pageComponent) }}
            {%- endif -%}
            {%- if parameters.dataAttributes is defined and parameters.dataAttributes|length -%}
                {{ _self.renderAttributes(parameters.dataAttributes) }}
            {%- endif -%}>
            {%- set labelInIcon = parameters.labelInIcon|default(true) -%}
            {%- if (parameters.iCss is defined) -%}
                <i class=\"{{ parameters.iCss }}{% if labelInIcon %} hide-text{% endif %}\">{{ (parameters.label is defined and labelInIcon) ? parameters.label : '' }}</i>
            {%- endif %}
            {{- parameters.label is defined ? parameters.label : '' -}}
        </a>
    {% endspaceless %}
{% endmacro %}

{#
    Renders page component attributes passed in array
#}
{% macro renderPageComponentAttributes(pageComponent) %}
    {% for key,value in pageComponent %}
        {% if key == 'layout' %}
            data-layout=\"{{ pageComponent.layout }}\"
        {% elseif value is iterable %}
            data-page-component-{{ key }}=\"{{ value|json_encode }}\"
        {% else %}
            data-page-component-{{ key }}=\"{{ value }}\"
        {% endif %}
    {% endfor %}
{% endmacro %}

{#
    Renders attributes for widget

    Parameters: options array for widget
#}
{% macro renderWidgetAttributes(options) %}
    {% set pageComponent = {
        module:  \"oroui/js/app/components/widget-component\",
        options: options
    }  %}
    {% if options.options.pageComponentName is defined %}
        {% set pageComponent = pageComponent|merge({name: options.options.pageComponentName}) %}
    {% endif %}
    {{ _self.renderPageComponentAttributes(pageComponent) }}
{% endmacro %}
{#
    @deprecated
    Please use renderWidgetAttributes() with createOnEvent option specified instead
#}
{% macro renderWidgetDataAttributes(options) %}
    {% if (options.createOnEvent is not defined) %}
        {% set options = options|merge({
            'createOnEvent' : options.event|default('click')
        }) %}
    {% endif %}
    {{ _self.renderWidgetAttributes(options) }}
{% endmacro %}

{% macro renderAttributes(options, prefix) %}
    {% for name, value in options %}
        {% if (value is iterable) %}
            {% set value = value|json_encode(constant('JSON_FORCE_OBJECT')) %}
        {% endif %}
        data-{% if prefix is not empty %}{{ prefix }}-{% endif %}{{ name }}=\"{{ value }}\"
    {% endfor %}
{% endmacro %}

{#
    A button with javascript handler
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro clientButton(parameters) %}
    {#{% espaceless %}#}
        <div class=\"pull-left btn-group icons-holder\">
            {{ _self.clientLink(parameters|merge({'class': 'btn icons-holder-text'})) }}
        </div>
    {#{% endspaceless %}#}
{% endmacro %}

{#
    A button that sends request to server
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataMethod' - request http method
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'errorMessage' - a message which will be shown if operation failed
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro ajaxButton(parameters) %}
    <div class=\"pull-left btn-group icons-holder\">
        {{ _self.ajaxLink(parameters|merge({'class': 'btn icons-holder-text'})) }}
    </div>
{% endmacro %}

{#
    A link that sends request to server
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataMethod' - request http method
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'errorMessage' - a message which will be shown if operation failed
            'title' - button title
            'label' - button label
            'visible' - determined whether the link is visible or not. Defaults to true
        ]
#}
{% macro ajaxLink(parameters) %}
    {% set additionalParameters = {
        'pageComponent': {
            'module': 'oroui/js/app/components/ajax-button'
        },
        'dataAttributes': {
            'method': parameters.dataMethod is defined ? parameters.dataMethod : 'GET',
            'error-message': parameters.errorMessage is defined ? parameters.errorMessage : 'oro.ui.unexpected_error'
        }
    } %}

    {{ _self.clientLink(parameters|merge(additionalParameters)) }}
{% endmacro %}

{#
    A button with javascript handler
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro dropdownClientItem(parameters) %}
    <li>{{ _self.clientLink(parameters) }}</li>
{% endmacro %}

{#
    Outputs a button with \"Save and Close\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.

    For backward compatibility macros supports input parameter as a label of button.
#}
{% macro saveAndCloseButton(parametersOrLabel) %}
    {% set defaultParameters = {
        'class': 'btn-success',
        'label': 'Save and Close'|trans
    } %}

    {% if parametersOrLabel is iterable %}
        {% set parameters = parametersOrLabel %}
    {% else %}
        {# @deprecated since 1.10, support backward compatibility #}
        {% set parameters = {
            'label': parametersOrLabel|default('Save and Close'|trans),
            'action': 'save_and_close'
        } %}
    {% endif %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ _self.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs a button with \"Save and Stay\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.

    For backward compatibility macros supports input parameter as a label of button.
#}
{% macro saveAndStayButton(parametersOrLabel) %}
    {% if parametersOrLabel is iterable %}
        {% set parameters = parametersOrLabel %}
    {% else %}
        {# @deprecated since 1.10, support backward compatibility #}
        {% set parameters = {
            'label': parametersOrLabel|default('Save'|trans),
            'action': 'save_and_stay'
        } %}
    {% endif %}

    {{ _self.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs a button with \"Save and New\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.
#}
{% macro saveAndNewButton(parameters) %}
    {% set defaultParameters = {
        'label': 'Save and New'|trans
    } %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ _self.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs generic button with \"Save\" label and redirect behavior. Redirect is configured with parameter \"route\"
    and \"route_params\". Route params could contain paths instead of values if value will be available only after save.

    Parameters - array
        [
            'type' - button type, should be \"button\" or \"submit\"
            'class' - CSS class
            'label' - label of button
            'route' - Optional name of route to make a redirect.
            'params' - Optional list of route parameters. In case if value of parameter will be available only
                after save you can pass property path. For example: ['id': '\$id']. '\$' at the means property path.
                So when controller will handle save it will redirect to route using actual id value of entity.
            'action' - Contains data used by controller to make redirect. This value is prepared automatically
                based on route and route_params so you don't need to use this attribute directly.
        ]
#}
{% macro saveActionButton(parameters) %}
    {% set defaultParameters = {
        'type' : 'submit',
        'class': 'btn-success main-group',
        'label': 'Save'|trans,
    } %}

    {% if parameters.action is defined %}
        {# @deprecated since 1.10, support backward compatibility #}
    {% elseif parameters.route is defined %}
        {# Prepare action parameter based on route #}
        {% set action = {'route': parameters.route} %}
        {% if parameters.params is defined %}
            {% set action = action|merge({'params': parameters.params}) %}
        {% endif %}
        {% set parameters = parameters|merge({'action': action|json_encode}) %}
    {% endif %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ _self.buttonType(parameters) }}
{% endmacro %}


{#
    Button macros with custom button type
    Parameters - array:
        [
            'type' - button type
            'class' - additional button css classes
            'label' - label of button
        ]
#}
{% macro buttonType(parameters) %}
    {% set defaultParameters = {
        'type' : 'button'
    } %}
    {% set parameters = defaultParameters|merge(parameters) %}
    <div class=\"btn-group\">
        <button type=\"{{ parameters.type }}\" class=\"btn {% if (parameters.class is defined) %}{{ parameters.class }}{% endif %}{% if (parameters.action is defined) %} action-button{% endif %}\"
                {% if (parameters.action is defined) %}data-action=\"{{ parameters.action }}\"{% endif %}
                {% if parameters.data is defined %}
                    {% for dataItemName,dataItemValue in parameters.data %}
                        data-{{ dataItemName }}=\"{{ dataItemValue|e('html_attr')|raw }}\"
                    {% endfor %}
                {% endif %}>
            {{ parameters.label }}
        </button>
    </div>
{% endmacro %}

{#
    Separator between buttons
#}
{% macro buttonSeparator() %}
    <div class=\"pull-left\">
        <div class=\"separator-btn\"></div>
    </div>
{% endmacro %}

{#
    Create scroll sub block for scroll block
    Parameters:
        title - title of sub block
        data - array with data fields (i.e. form_row() or attibuteRow() data)
        isForm - flag what scroll block mut contain the form
        useSpan - flag to indicate is subblock must have css class specified in spanClass parameter or not
        spanClass - css class name of subblock, if this parameter is not specified the css class is span6
#}
{% macro scrollSubblock(title, data, isForm, useSpan, spanClass) %}
    {% set spanClass = spanClass|default('responsive-cell') %}
    {#% if useSpan is not defined or useSpan == true %}
        {% set span = spanClass %}
    {% else %}
        {% set span = '' %}
    {% endif %}
    {% if span %}
        <div class=\"{{ span }}\">
    {% endif %#}
    <div class=\"{{ spanClass }}\">
    {% if title|length %}<h5 class=\"user-fieldset\"><span>{{ title }}</span></h5>{% endif %}
    {% for dataBlock in data %}
        {{ dataBlock|raw }}
    {% endfor %}
    </div>
    {#% if span %}
        </div>
    {% endif %#}
{% endmacro %}

{#
    Create scroll block for scroll data area
    Parameters:
        blockId - id of block
        title - block title
        'subblocks' - array with scroll sub blocks:
            [
                'title' - title of sub block
                'data' - array with data fields (i.e. form_row() or attibuteRow() data)
            ]
        isForm - flag what scroll block mut contain the form
        contentAttributes - additional attributes for block content
        useSubBlockDivider - indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks
#}
{% macro scrollBlock(blockId, title, subblocks, isForm, contentAttributes, useSubBlockDivider, headerLinkContent = '') %}
    {% set cols = subblocks|length %}
    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">{{ title }}{% if headerLinkContent is defined %}{{ headerLinkContent }}{% endif %}</h4>
        <div id=\"{{ blockId }}\" class=\"scrollspy-nav-target\"></div>
        <div class=\"section-content\">
            <div class=\"row-fluid{% if (contentAttributes is defined and contentAttributes.class is defined and contentAttributes.class|length) %} {{ contentAttributes.class }}{% endif %}{% if cols > 1 and (useSubBlockDivider is not defined or useSubBlockDivider == true) %} row-fluid-divider{% endif %}\" {{ _self.attributes(contentAttributes, ['class']) }}>
                {% if isForm is defined and isForm == true %}
                    <fieldset class=\"form-horizontal\">
                {% else %}
                    <div class=\"form-horizontal\">
                {% endif %}
                    {% for subblock in subblocks %}
                        {{ _self.scrollSubblock(subblock.title is defined and subblock.title|length ? subblock.title : null, subblock.data, isForm, subblock.useSpan is defined ? subblock.useSpan : true, subblock.spanClass is defined ? subblock.spanClass : '') }}
                    {% endfor %}
                {% if isForm is defined and isForm == true %}
                    </fieldset>
                {% else %}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Create scroll blocks (like in view or update pages)
    Parameters:
        dataTarget - id of scroll block
        data - array with scroll data blocks
        form
    data parameter structure:
        [
            'dataBlocks' - array of blocks. each block consist of:
                [
                    'title' - title of scroll block
                    'priority' - a number that can be used to change the order of blocks
                    'class' - additional css class for scroll block menu item
                    'useSubBlockDivider' - [optional] indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks
                    'subblocks' - array with scroll sub blocks:
                        [
                            'title' - title of sub block
                            'data' - array with data fields (i.e. form_row() or attibuteRow() data)
                        ]
                ]
            'formErrors' - errors from the form
            'hiddenData' - additional data (hidden fields from the form)
        ]
#}
{% macro scrollData(dataTarget, data, entity, form = null) %}
    {% set data = oro_ui_scroll_data_before(dataTarget, data, entity, form) %}

    {% if form is defined and form %}
        {% set isForm = true %}
    {% else %}
        {% set isForm = false %}
    {% endif %}

    {% set dataBlocks = data.dataBlocks|oro_sort_by %}

    <div id=\"{{ dataTarget }}\" class=\"navbar navbar-static scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\" style=\"width: auto;\">
                <ul class=\"nav\">
                    {% for navElement in dataBlocks %}
                        <li {% if navElement.class is defined %}class=\"{{ navElement.class }}\"{% endif %}><a href=\"#scroll-{{ loop.index }}\">{{ navElement.title }}</a></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
    <div class=\"clearfix\">
        {% if data.formErrors is defined and data.formErrors | length%}
            <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                <div class=\"alert alert-error\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                    {{ data.formErrors|raw }}
                </div>
            </div>
        {% endif %}
        <div data-spy=\"scroll\" data-target=\"#{{ dataTarget }}\" data-offset=\"1\" class=\"scrollspy container-fluid scrollable-container{% if isForm %} form-container{% endif %}\">
            {% for scrollBlock in dataBlocks %}
                {{ _self.scrollBlock(\"scroll-\" ~ loop.index, scrollBlock.title, scrollBlock.subblocks, isForm, scrollBlock.content_attr is defined ? scrollBlock.content_attr : null, scrollBlock.useSubBlockDivider is defined ? scrollBlock.useSubBlockDivider : true, scrollBlock.headerLinkContent is defined ? scrollBlock.headerLinkContent : null) }}
            {% endfor %}
            {% if data.hiddenData is defined or isForm %}
                <div class=\"hide\" data-skip-input-widgets data-layout=\"separate\">
                    {% if data.hiddenData is defined %}
                        {{ data.hiddenData|raw }}
                    {% endif %}
                    {% if isForm %}
                        {{ form_rest(form) }}
                    {% endif %}
                </div>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{#
    Create collection field block
    Parameters:
        field - form collection field
        label - label of block
        buttonCaption - Caption of add entity button
        tooltipText (optional) - text to render a tooltip for the collection field
#}
{% macro collectionField(field, label, buttonCaption, tooltipText = null) %}
    <div class=\"control-group\">
        <div class=\"control-label wrap\">
            {% if tooltipText is not null %}
                {{ _self.tooltip(tooltipText) }}
            {% endif %}
            <label>{{ label }}</label>
        </div>
        <div class=\"controls\">
            <div class=\"row-oro\">
                <div class=\"oro-item-collection collection-fields-list\" data-prototype=\"{{ _self.collection_prototype(field)|escape }}\">
                    {% for emailField in field.children %}
                        {{ _self.collection_prototype(emailField) }}
                    {% endfor %}
                </div>
                <a class=\"btn add-list-item\" href=\"javascript: void(0);\">{{ buttonCaption }}</a>
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Render attributes of HTML element.
    Parameters:
        attr - attributes
        excludes - names of attributes which should not be rendered even if they exist in attr parameter
#}
{% macro attributes(attr, excludes) %}
    {% spaceless %}
        {% set attr = attr|default({}) %}
        {% for attrname, attrvalue in attr %}{% if not excludes is defined or not excludes[attrname] is defined %}{% if attrname in ['placeholder', 'title'] %}{{ attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\" {% else %}{{ attrname }}=\"{{ attrvalue is iterable ? attrvalue|json_encode : attrvalue }}\" {% endif %}{% endif %}{% endfor %}
    {% endspaceless %}
{% endmacro %}

{#
    Render link to entity owner
    Parameters:
        entity - entity record
        renderLabel - need render default label
#}
{%- macro entityOwnerLink(entity, renderLabel = true) -%}
    {% spaceless %}
        {%- if entity %}
            {% set ownerType = oro_get_owner_type(entity) %}
            {%- if ownerType %}
                {% if  is_granted('VIEW', entity, oro_get_owner_field_name(entity)) %}
                    {% set owner = oro_get_entity_owner(entity) %}
                    {% if owner %}
                        {% if (ownerType == 'USER') %}
                            {% set ownerPath = path('oro_user_view', {'id': owner.id}) %}
                            {% set ownerName = owner|oro_format_name %}
                        {% elseif (ownerType == 'BUSINESS_UNIT') %}
                            {% set ownerPath = path('oro_business_unit_view', {'id': owner.id}) %}
                            {% set ownerName = owner.name %}
                        {% endif %}
                        {% if ownerName is defined %}
                            {% if renderLabel %}
                                {% set entityClassName = oro_class_name(entity) %}
                                {{ oro_field_config_value(
                                        entityClassName,
                                        oro_entity_config_value(entityClassName, 'owner_field_name', 'ownership'),
                                        'label'
                                    )|trans
                                }}:
                            {% endif %}
                            {% if ownerPath is defined and is_granted('VIEW', owner) %}
                                {{ _self.renderUrl(ownerPath, ownerName) }}
                            {% else %}
                                {{ ownerName }}
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endif %}
            {% endif -%}
        {% endif -%}
    {% endspaceless %}
{%- endmacro -%}

{%- macro renderUrl(url, text, class, title) -%}
    {% spaceless %}
        {% if text is empty %}
            {% set text = url %}
        {% endif %}
        {% if title is empty %}
            {% set title = text %}
        {% endif %}
        {% if class is empty %}
            {% set class = '' %}
        {% endif %}
        {% if url is not empty %}
            <a href=\"{{ url|escape('html_attr') }}\" title=\"{{ title|escape('html_attr') }}\" class=\"{{ class }}\"
                    {% if (not oro_is_url_local(url)) %} target=\"_blank\"{% endif %}>{{ text }}</a>
        {% endif %}
    {% endspaceless %}
{%- endmacro -%}

{%- macro renderPhone(phone, title) -%}
    {% if title is empty %}
        {% set title = phone %}
    {% endif %}
    {% if phone is not empty %}
        <a href=\"tel:{{ phone|escape('html_attr') }}\" title=\"{{ title|escape('html_attr') }}\" class=\"phone\">{{ title }}</a>
    {% endif %}
{%- endmacro -%}

{#
    Render phone number with related actions block
    Parameters:
        phone - PhoneInterface object or string
        entity - related entity record
#}
{% macro renderPhoneWithActions(phone, entity) -%}
    {% if phone is not empty %}
        {%- set actions %}
            {%- placeholder phone_actions with {phone: phone, entity: entity} -%}
        {% endset -%}
        {% set actions = actions|trim %}
        <span class=\"inline-actions-element{% if actions is empty %} inline-actions-element_no-actions{% endif %}\">
            <span class=\"inline-actions-element_wrapper\">{{ _self.renderPhone(phone) }}</span>
            {% if actions is not empty -%}
                <span class=\"inline-actions-element_actions phone-actions\">{{ actions|raw }}</span>
            {%- endif %}
        </span>
    {% endif %}
{%- endmacro %}

{% macro getApplicableForUnderscore(str) %}
    {{ str|replace({
        \"<script\": '<% print(\"<sc\" + \"ript\"); %>',
        \"</script\": '<% print(\"</sc\" + \"ript\"); %>',
        \"<%\": '<% print(\"<\" + \"%\"); %>',
        \"%>\": '<% print(\"%\" + \">\"); %>',
    })|raw }}
{% endmacro %}

{%- macro renderList(elements) -%}
    <ul class=\"extra-list\">
        {%- for element in elements %}
            <li class=\"extra-list-element\">{{ element }}</li>
        {% endfor -%}
    </ul>
{% endmacro %}

{%- macro renderTable(titles, rows, style) -%}
     <table class=\"{{ style }}\">
     <thead>
     <tr>
    {%- for title in titles %}
        <th>{{ title }}</th>
    {% endfor -%}
     </tr>
     </thead>
    {%- for row in rows %}
        <tr>
            {%- for element in row %}
                <td>{{ element }}</td>
            {% endfor -%}
        </tr>
    {% endfor -%}
    </table>
{% endmacro %}

{%- macro entityViewLink(entity, label, route, permission) -%}
    {% if entity %}
        {% if route and is_granted(permission|default('VIEW'), entity) %}
            {{ _self.renderUrl(path(route, {'id': entity.id}), label) }}
        {% else %}
            {{ label|escape }}
        {% endif %}
    {% endif %}
{%- endmacro -%}

{%- macro entityViewLinks(entities, labelProperty, route, permission) -%}
    {% set links = [] %}
    {% for entity in entities %}
        {% set links = links|merge([_self.entityViewLink(entity, attribute(entity, labelProperty), route, permission)]) %}
    {% endfor %}
    {{ _self.renderList(links) }}
{%- endmacro -%}

{#
    Renders text that should be rendered instead of not accessable entity field
    Parameters:
        labelText - Text that should be rendered
#}
{%- macro renderDisabledLabel(labelText) -%}
    <i>{{ labelText }}</i>
{%- endmacro -%}

{#
    Renders entity label by it's field. In case if VIEW permission is notgranted, returns
    the 'view entity_name' string in case if entityLabelIfNotGranted was set and empty string otherwise
    Parameters:
        entity - Entity whete field value should be takes
        fieldName - Field name wich value should be rendered
        entityLabelIfNotGranted - Entity label that should be rendered in case if user have no access to see field value
#}
{%- macro renderEntityViewLabel(entity, fieldName, entityLabelIfNotGranted = null) -%}
    {% if entity is not null and is_granted('VIEW', entity, fieldName) %}
        {{ attribute(entity, fieldName) }}
    {% else %}
        {% if entityLabelIfNotGranted is not null %}
            {{ 'view %entityName%'|trans({'%entityName%' : entityLabelIfNotGranted|trans}) }}
        {% endif %}
    {% endif %}
{%- endmacro -%}

{%- macro renderJsTree(data, actions) -%}
    {% embed \"OroUIBundle::jstree.html.twig\" with {
        data: data,
        actions: actions
    } %}
    {% endembed %}
{%- endmacro -%}
", "OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/macros.html.twig");
    }
}
