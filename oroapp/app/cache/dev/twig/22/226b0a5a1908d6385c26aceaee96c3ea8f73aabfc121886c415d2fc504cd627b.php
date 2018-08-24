<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/layout.html.twig */
class __TwigTemplate_ccf0399d24a23e00193d9bbb7e5258e633c9cabcf6941d2fc2d5d02c1702a094 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/layout.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_block_attributes_underscore($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_attributes_underscore"));

        // line 2
        echo "    ";
        $context["utils"] = $this->loadTemplate("OroFrontendBundle:layouts/blank:utils.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/layout.html.twig", 2);
        // line 3
        echo "    ";
        echo $context["utils"]->getunderscoreRaw(        $this->renderBlock("block_attributes_base", $context, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_action_line_buttons_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_line_buttons_widget"));

        // line 8
        echo "    <ul";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? $this->getContext($context, "actions")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_action_combined_buttons_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_combined_buttons_widget"));

        // line 23
        echo "    ";
        $context["actionsCount"] = twig_length_filter($this->env, ($context["actions"] ?? $this->getContext($context, "actions")));
        // line 24
        echo "    ";
        if ((($context["actionsCount"] ?? $this->getContext($context, "actionsCount")) > 0)) {
            // line 25
            echo "        ";
            $context["hasVariants"] = (($context["actionsCount"] ?? $this->getContext($context, "actionsCount")) > 1);
            // line 26
            echo "        ";
            $context["additionalCss"] = "btn";
            // line 27
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "parent", array()), "vars", array()), "class_prefix", array()) == "datagrid_toolbar_button_container")) {
                // line 28
                echo "            ";
                $context["additionalCss"] = (($context["additionalCss"] ?? $this->getContext($context, "additionalCss")) . " btn--info ");
                // line 29
                echo "        ";
            } else {
                // line 30
                echo "            ";
                $context["additionalCss"] = (($context["additionalCss"] ?? $this->getContext($context, "additionalCss")) . " btn");
                // line 31
                echo "        ";
            }
            // line 32
            echo "        ";
            if (($context["hasVariants"] ?? $this->getContext($context, "hasVariants"))) {
                // line 33
                echo "            ";
                $context["additionalCss"] = " btn-group full";
                // line 34
                echo "        ";
            }
            // line 35
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . ($context["additionalCss"] ?? $this->getContext($context, "additionalCss")))));
            // line 36
            echo "
        ";
            // line 37
            $context["action"] = twig_first($this->env, ($context["actions"] ?? $this->getContext($context, "actions")));
            // line 38
            echo "        ";
            $context["primaryButtonCss"] = (((" btn btn--action btn--size-s direct-link " . (($this->getAttribute($this->getAttribute(($context["action"] ?? null), "buttonOptions", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["action"] ?? null), "buttonOptions", array(), "any", false, true), "class", array()), "")) : (""))) . " ") . (($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "aCss", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "aCss", array()), "")) : ("")));
            // line 39
            echo "
        ";
            // line 40
            if (($context["hasVariants"] ?? $this->getContext($context, "hasVariants"))) {
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
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array())), "html", null, true);
                echo "
                </a>
                <a class=\"btn btn--info btn--size-l dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"></a>
                <ul class=\"dropdown-menu\" data-options=";
                // line 51
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dropdownMenuOptions"] ?? $this->getContext($context, "dropdownMenuOptions"))), "html", null, true);
                echo ">
                    ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["actions"] ?? $this->getContext($context, "actions")), 1));
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
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array())), "html", null, true);
                echo "
            </a>
        ";
            }
            // line 66
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_line_buttons_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "line_buttons_widget"));

        // line 72
        echo "    <ul";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? $this->getContext($context, "buttons")));
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
            $this->loadTemplate($this->getAttribute($context["button"], "template", array()), "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/layout.html.twig", 75)->display(array_merge($context, twig_array_merge($this->getAttribute($context["button"], "templateData", array()), array("onlyLink" => true, "noIconText" => true))));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 81
    public function block_combined_buttons_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "combined_buttons_widget"));

        // line 82
        echo "    ";
        $context["dropdownActionClass"] = ((array_key_exists("dropdownActionClass", $context)) ? (_twig_default_filter(($context["dropdownActionClass"] ?? $this->getContext($context, "dropdownActionClass")), "btn btn--info btn--size-l direct-link")) : ("btn btn--info btn--size-l direct-link"));
        // line 83
        echo "    ";
        $context["dropdownToggleClass"] = ((array_key_exists("dropdownToggleClass", $context)) ? (_twig_default_filter(($context["dropdownToggleClass"] ?? $this->getContext($context, "dropdownToggleClass")), "btn btn--info btn--size-l dropdown-toggle")) : ("btn btn--info btn--size-l dropdown-toggle"));
        // line 84
        echo "    ";
        $context["dropdownItemClass"] = ((array_key_exists("dropdownItemClass", $context)) ? (_twig_default_filter(($context["dropdownItemClass"] ?? $this->getContext($context, "dropdownItemClass")), "dropdown-item")) : ("dropdown-item"));
        // line 85
        echo "    ";
        $context["actionButtonClass"] = ((array_key_exists("actionButtonClass", $context)) ? (_twig_default_filter(($context["actionButtonClass"] ?? $this->getContext($context, "actionButtonClass")), "btn btn--action btn--size-s direct-link")) : ("btn btn--action btn--size-s direct-link"));
        // line 86
        echo "
    ";
        // line 87
        $context["buttonsCount"] = twig_length_filter($this->env, ($context["buttons"] ?? $this->getContext($context, "buttons")));
        // line 88
        echo "    ";
        if ((($context["buttonsCount"] ?? $this->getContext($context, "buttonsCount")) > 0)) {
            // line 89
            echo "        ";
            $context["hasVariants"] = (($context["buttonsCount"] ?? $this->getContext($context, "buttonsCount")) > 1);
            // line 90
            echo "
        ";
            // line 91
            $context["button"] = twig_first($this->env, ($context["buttons"] ?? $this->getContext($context, "buttons")));
            // line 92
            echo "
        ";
            // line 93
            if (($context["hasVariants"] ?? $this->getContext($context, "hasVariants"))) {
                // line 94
                echo "            ";
                $context["additionalCss"] = "btn";
                // line 95
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "parent", array()), "vars", array()), "class_prefix", array()) == "datagrid_toolbar_button_container")) {
                    // line 96
                    echo "                ";
                    $context["additionalCss"] = (($context["additionalCss"] ?? $this->getContext($context, "additionalCss")) . " btn--info ");
                    // line 97
                    echo "            ";
                }
                // line 98
                echo "            ";
                if (($context["hasVariants"] ?? $this->getContext($context, "hasVariants"))) {
                    // line 99
                    echo "                ";
                    $context["additionalCss"] = " btn-group full ";
                    // line 100
                    echo "            ";
                }
                // line 101
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . ($context["additionalCss"] ?? $this->getContext($context, "additionalCss")))));
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
                $this->loadTemplate($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "template", array()), "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/layout.html.twig", 108)->display(array_merge($context, twig_array_merge($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "templateData", array()), array("onlyLink" => true, "aClass" => ($context["dropdownActionClass"] ?? $this->getContext($context, "dropdownActionClass")), "noIcon" => true, "noIconText" => true))));
                // line 109
                echo "
                <a href=\"#\" class=\"";
                // line 110
                echo twig_escape_filter($this->env, ($context["dropdownToggleClass"] ?? $this->getContext($context, "dropdownToggleClass")), "html", null, true);
                echo "\" data-toggle=\"dropdown\" data-container=\"body\" aria-haspopup=\"true\" aria-expanded=\"true\"></a>

                <ul class=\"dropdown-menu\" data-options=";
                // line 112
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dropdownMenuOptions"] ?? $this->getContext($context, "dropdownMenuOptions"))), "html", null, true);
                echo ">
                    ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["buttons"] ?? $this->getContext($context, "buttons")), 1));
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
                    $this->loadTemplate($this->getAttribute($context["button"], "template", array()), "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/layout.html.twig", 115)->display(array_merge($context, twig_array_merge($this->getAttribute($context["button"], "templateData", array()), array("onlyLink" => true, "aClass" => ($context["dropdownItemClass"] ?? $this->getContext($context, "dropdownItemClass")), "noIcon" => true, "noIconText" => true))));
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
                $this->loadTemplate($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "template", array()), "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/layout.html.twig", 121)->display(array_merge($context, twig_array_merge($this->getAttribute(($context["button"] ?? $this->getContext($context, "button")), "templateData", array()), array("onlyLink" => true, "aClass" => ($context["actionButtonClass"] ?? $this->getContext($context, "actionButtonClass")), "noIcon" => true, "noIconText" => true))));
                // line 122
                echo "        ";
            }
            // line 123
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 126
    public function block_icon_block($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon_block"));

        // line 127
        echo "<i class=\"fa-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
        if (array_key_exists("icon_class", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["icon_class"] ?? $this->getContext($context, "icon_class")), "html", null, true);
        }
        echo "\"></i>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 130
    public function block_back_link_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_link_widget"));

        // line 131
        echo "    <div class=\"order-builder-clear-btn\">
        ";
        // line 132
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 136
    public function block_embedded_list_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "embedded_list_widget"));

        // line 137
        echo "    <div class=\"embedded-list\"
        ";
        // line 138
        if (($context["use_footer_align"] ?? $this->getContext($context, "use_footer_align"))) {
            // line 139
            echo "            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
            // line 140
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["footer_align_component_options"] ?? $this->getContext($context, "footer_align_component_options"))), "html", null, true);
            echo "\"
        ";
        }
        // line 142
        echo "    >
        ";
        // line 143
        if (($context["use_slider"] ?? $this->getContext($context, "use_slider"))) {
            // line 144
            echo "            ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-page-component-module" => "orofrontend/js/app/components/list-slider-component", "~data-page-component-options" =>             // line 146
($context["slider_options"] ?? $this->getContext($context, "slider_options")), "~class" => " embedded-list__slider"));
            // line 149
            echo "        ";
        } else {
            // line 150
            echo "            ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " embedded-list__tiles "));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label"))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
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
            echo twig_escape_filter($this->env, ($context["item_extra_class"] ?? $this->getContext($context, "item_extra_class")), "html", null, true);
            echo "\">
                    ";
            // line 164
            $context["context"] = array(            // line 165
($context["item_key"] ?? $this->getContext($context, "item_key")) => $context["item"]);
            // line 167
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items_data"] ?? $this->getContext($context, "items_data")));
            foreach ($context['_seq'] as $context["dataKey"] => $context["dataValue"]) {
                // line 168
                echo "                        ";
                $context["context"] = twig_array_merge(($context["context"] ?? $this->getContext($context, "context")), array(                // line 169
$context["dataKey"] => (($this->getAttribute($context["dataValue"], $this->getAttribute($context["item"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["dataValue"], $this->getAttribute($context["item"], "id", array()), array(), "array"), null)) : (null))));
                // line 171
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['dataValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "                    ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? $this->getContext($context, "block")), ($context["context"] ?? $this->getContext($context, "context")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 180
    public function block_attribute_file_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_file_widget"));

        // line 181
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\FrontendBundle\Twig\FileExtension')->getFileView($this->env, ($context["entity"] ?? $this->getContext($context, "entity")), ($context["fieldName"] ?? $this->getContext($context, "fieldName")), ($context["value"] ?? $this->getContext($context, "value")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  634 => 181,  628 => 180,  619 => 176,  601 => 173,  598 => 172,  592 => 171,  590 => 169,  588 => 168,  583 => 167,  581 => 165,  580 => 164,  575 => 163,  558 => 162,  554 => 161,  551 => 160,  545 => 157,  542 => 156,  540 => 155,  537 => 154,  534 => 153,  531 => 150,  528 => 149,  526 => 146,  524 => 144,  522 => 143,  519 => 142,  514 => 140,  511 => 139,  509 => 138,  506 => 137,  500 => 136,  490 => 132,  487 => 131,  481 => 130,  468 => 127,  462 => 126,  454 => 123,  451 => 122,  448 => 121,  443 => 118,  428 => 116,  426 => 115,  423 => 114,  406 => 113,  402 => 112,  397 => 110,  394 => 109,  392 => 108,  388 => 107,  385 => 106,  382 => 102,  379 => 101,  376 => 100,  373 => 99,  370 => 98,  367 => 97,  364 => 96,  361 => 95,  358 => 94,  356 => 93,  353 => 92,  351 => 91,  348 => 90,  345 => 89,  342 => 88,  340 => 87,  337 => 86,  334 => 85,  331 => 84,  328 => 83,  325 => 82,  319 => 81,  311 => 78,  296 => 76,  294 => 75,  291 => 74,  274 => 73,  269 => 72,  263 => 71,  254 => 66,  248 => 63,  245 => 62,  240 => 59,  230 => 55,  226 => 53,  222 => 52,  218 => 51,  212 => 48,  207 => 46,  204 => 45,  201 => 41,  199 => 40,  196 => 39,  193 => 38,  191 => 37,  188 => 36,  185 => 35,  182 => 34,  179 => 33,  176 => 32,  173 => 31,  170 => 30,  167 => 29,  164 => 28,  161 => 27,  158 => 26,  155 => 25,  152 => 24,  149 => 23,  143 => 22,  135 => 19,  124 => 15,  116 => 13,  114 => 12,  110 => 10,  106 => 9,  101 => 8,  95 => 7,  87 => 3,  84 => 2,  78 => 1,  71 => 180,  68 => 179,  66 => 136,  63 => 135,  61 => 130,  58 => 129,  56 => 126,  53 => 125,  51 => 81,  48 => 80,  46 => 71,  43 => 69,  41 => 22,  38 => 21,  36 => 7,  33 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block block_attributes_underscore %}
    {% import 'OroFrontendBundle:layouts/blank:utils.html.twig' as utils %}
    {{ utils.underscoreRaw(block('block_attributes_base')) }}
{%- endblock %}

{#Action Buttons#}
{% block action_line_buttons_widget %}
    <ul{{ block('block_attributes') }}>
        {% for action in actions %}
            <li>
                <a>
                    {% if action.icon is not empty %}
                        <i class=\"{{ action.icon }} {{ action.buttonOptions.iCss|default('') }}\"></i>
                    {% endif %}
                    {{ action.label|trim }}
                </a>
            </li>
        {% endfor %}
    </ul>
{% endblock %}

{% block action_combined_buttons_widget %}
    {% set actionsCount = actions|length %}
    {% if actionsCount > 0 %}
        {% set hasVariants = actionsCount > 1 %}
        {% set additionalCss = \"btn\" %}
        {% if block.parent.vars.class_prefix == 'datagrid_toolbar_button_container' %}
            {% set additionalCss = additionalCss ~ \" btn--info \" %}
        {% else %}
            {% set additionalCss = additionalCss ~ \" btn\" %}
        {% endif %}
        {% if hasVariants %}
            {% set additionalCss = \" btn-group full\" %}
        {% endif %}
        {% set attr = attr|merge({ class: attr.class|default('') ~ additionalCss}) %}

        {% set action = actions|first %}
        {% set primaryButtonCss = ' btn btn--action btn--size-s direct-link ' ~ action.buttonOptions.class|default('') ~ \" \"  ~ params.buttonOptions.aCss|default('') %}

        {% if hasVariants %}
            {% set dropdownMenuOptions = {
                'align': 'right',
                'attachToParent': true
            } %}

            <div{{ block('block_attributes') }}>
                <a class=\"btn btn--info btn--size-l\">
                    {{ action.label|trim }}
                </a>
                <a class=\"btn btn--info btn--size-l dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"></a>
                <ul class=\"dropdown-menu\" data-options={{ dropdownMenuOptions|json_encode }}>
                    {% for action in actions|slice(1) %}
                    <li>
                        <a class=\"dropdown-item\">
                            {{ action.label|trim }}
                        </a>
                    </li>
                    {% endfor %}
                </ul>
            </div>
        {% else %}
            <a>
                {{ action.label|trim }}
            </a>
        {% endif %}

    {% endif %}
{% endblock %}

{#Buttons#}
{% block line_buttons_widget %}
    <ul{{ block('block_attributes') }}>
        {% for button in buttons %}
            <li>
                {% include button.template with button.templateData|merge({onlyLink: true, noIconText: true}) %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}

{% block combined_buttons_widget %}
    {% set dropdownActionClass = dropdownActionClass|default('btn btn--info btn--size-l direct-link') %}
    {% set dropdownToggleClass = dropdownToggleClass|default('btn btn--info btn--size-l dropdown-toggle') %}
    {% set dropdownItemClass = dropdownItemClass|default('dropdown-item') %}
    {% set actionButtonClass = actionButtonClass|default('btn btn--action btn--size-s direct-link') %}

    {% set buttonsCount = buttons|length %}
    {% if buttonsCount > 0 %}
        {% set hasVariants = buttonsCount > 1 %}

        {% set button = buttons|first %}

        {% if hasVariants %}
            {% set additionalCss = \"btn\" %}
            {% if block.parent.vars.class_prefix == 'datagrid_toolbar_button_container' %}
                {% set additionalCss = additionalCss ~ \" btn--info \" %}
            {% endif %}
            {% if hasVariants %}
                {% set additionalCss = \" btn-group full \" %}
            {% endif %}
            {% set attr = attr|merge({ class: attr.class|default('') ~ additionalCss}) %}
            {% set dropdownMenuOptions = {
                'align': 'right',
                'attachToParent': true
            } %}

            <div{{ block('block_attributes') }}>
                {% include button.template with button.templateData|merge({onlyLink: true, aClass: dropdownActionClass, noIcon: true, noIconText: true}) %}

                <a href=\"#\" class=\"{{ dropdownToggleClass }}\" data-toggle=\"dropdown\" data-container=\"body\" aria-haspopup=\"true\" aria-expanded=\"true\"></a>

                <ul class=\"dropdown-menu\" data-options={{ dropdownMenuOptions|json_encode }}>
                    {% for button in buttons|slice(1) %}
                        <li>
                            {% include button.template with button.templateData|merge({onlyLink: true, aClass: dropdownItemClass, noIcon: true, noIconText: true}) %}
                        </li>
                    {% endfor %}
                </ul>
            </div>
        {% else %}
            {% include button.template with button.templateData|merge({onlyLink: true, aClass: actionButtonClass, noIcon: true, noIconText: true}) %}
        {% endif %}
    {% endif %}
{% endblock %}

{% block icon_block -%}
    <i class=\"fa-{{ icon }}{% if icon_class is defined %} {{ icon_class }}{% endif %}\"></i>
{%- endblock %}

{% block back_link_widget %}
    <div class=\"order-builder-clear-btn\">
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block embedded_list_widget %}
    <div class=\"embedded-list\"
        {% if use_footer_align %}
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"{{ footer_align_component_options|json_encode }}\"
        {% endif %}
    >
        {% if use_slider %}
            {% set attr = layout_attr_defaults(attr, {
                'data-page-component-module': 'orofrontend/js/app/components/list-slider-component',
                '~data-page-component-options': slider_options,
                '~class': ' embedded-list__slider'
            }) %}
        {% else %}
            {% set attr = layout_attr_defaults(attr, {
                '~class': ' embedded-list__tiles '
            }) %}
        {% endif %}

        {% if label is defined %}
            <h2 class=\"embedded-list__label\">
                <span class=\"embedded-list__label-inner\">{{ label|trans }}</span>
            </h2>
        {% endif %}

        <div {{ block('block_attributes') }}>
            {% for item in items %}
                <div class=\"embedded-list__item {{ item_extra_class }}\">
                    {% set context = {
                        (item_key): item
                    } %}
                    {% for dataKey, dataValue in items_data %}
                        {% set context = context|merge({
                            (dataKey): dataValue[item.id]|default(null)
                        }) %}
                    {% endfor %}
                    {% do block|merge_context(context) %}
                    {{ block('container_widget') }}
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block attribute_file_widget %}
    {{ oro_frontend_file_view(entity, fieldName, value) }}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/layout.html.twig");
    }
}
