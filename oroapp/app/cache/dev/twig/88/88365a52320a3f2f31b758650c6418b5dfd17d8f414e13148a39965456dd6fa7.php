<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/layouts/blank/page/layout.html.twig */
class __TwigTemplate_9fec0e071d7759c5d7b7e5f9a36d5a47b5ba79cbe19a5a117e4cfce47962ef8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'attribute_group_rest_widget' => array($this, 'block_attribute_group_rest_widget'),
            'attribute_group_rest_attribute_group_widget' => array($this, 'block_attribute_group_rest_attribute_group_widget'),
            'attribute_label_widget' => array($this, 'block_attribute_label_widget'),
            'attribute_text_widget' => array($this, 'block_attribute_text_widget'),
            'attribute_html_escaped_widget' => array($this, 'block_attribute_html_escaped_widget'),
            'attribute_boolean_widget' => array($this, 'block_attribute_boolean_widget'),
            'attribute_currency_widget' => array($this, 'block_attribute_currency_widget'),
            'attribute_percent_widget' => array($this, 'block_attribute_percent_widget'),
            'attribute_date_widget' => array($this, 'block_attribute_date_widget'),
            'attribute_datetime_widget' => array($this, 'block_attribute_datetime_widget'),
            'attribute_multiselect_widget' => array($this, 'block_attribute_multiselect_widget'),
            'attribute_image_widget' => array($this, 'block_attribute_image_widget'),
            'attribute_file_widget' => array($this, 'block_attribute_file_widget'),
            'attribute_localized_fallback_widget' => array($this, 'block_attribute_localized_fallback_widget'),
            'attribute_group_rest_attribute_widget' => array($this, 'block_attribute_group_rest_attribute_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/layouts/blank/page/layout.html.twig"));

        // line 1
        $this->displayBlock('attribute_group_rest_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('attribute_group_rest_attribute_group_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('attribute_label_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('attribute_text_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('attribute_html_escaped_widget', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('attribute_boolean_widget', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('attribute_currency_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('attribute_percent_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('attribute_date_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('attribute_datetime_widget', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        $this->displayBlock('attribute_multiselect_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('attribute_image_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('attribute_file_widget', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('attribute_localized_fallback_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('attribute_group_rest_attribute_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_attribute_group_rest_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_group_rest_widget"));

        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/layouts/blank/page/layout.html.twig", 2);
        // line 4
        $context["content"] = "";
        // line 5
        echo "    ";
        $context["visibleTabsOptions"] = array();
        // line 6
        echo "
    ";
        // line 7
        $context["tabsOptionsById"] = array();
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabsOptions"] ?? $this->getContext($context, "tabsOptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 9
            echo "        ";
            $context["tabsOptionsById"] = twig_array_merge(($context["tabsOptionsById"] ?? $this->getContext($context, "tabsOptionsById")), array($this->getAttribute(            // line 10
$context["tab"], "id", array()) => $context["tab"]));
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block"] ?? $this->getContext($context, "block")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                // line 15
                $context["childContent"] = $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context["child"], 'widget');
                // line 16
                echo "        ";
                if ((twig_length_filter($this->env, twig_trim_filter(($context["childContent"] ?? $this->getContext($context, "childContent")))) > 0)) {
                    // line 17
                    echo "            ";
                    $context["content"] = (($context["content"] ?? $this->getContext($context, "content")) . ($context["childContent"] ?? $this->getContext($context, "childContent")));
                    // line 18
                    echo "            ";
                    $context["visibleTabsOptions"] = twig_array_merge(($context["visibleTabsOptions"] ?? $this->getContext($context, "visibleTabsOptions")), array(0 => $this->getAttribute(($context["tabsOptionsById"] ?? $this->getContext($context, "tabsOptionsById")), $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "group", array()), array(), "array")));
                    // line 19
                    echo "        ";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    ";
        // line 22
        if ( !twig_test_empty(($context["visibleTabsOptions"] ?? $this->getContext($context, "visibleTabsOptions")))) {
            // line 23
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <div ";
            // line 24
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroentityconfig/js/attribute-group-tabs-component", "options" => array("data" =>             // line 26
($context["visibleTabsOptions"] ?? $this->getContext($context, "visibleTabsOptions")))));
            // line 27
            echo "></div>

            ";
            // line 29
            echo ($context["content"] ?? $this->getContext($context, "content"));
            echo "
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_attribute_group_rest_attribute_group_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_group_rest_attribute_group_widget"));

        // line 35
        echo "    ";
        $context["content"] = $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        // line 36
        echo "    ";
        if ((twig_length_filter($this->env, twig_trim_filter(($context["content"] ?? $this->getContext($context, "content")))) > 0)) {
            // line 37
            echo "    ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-page-component-module" => "oroentityconfig/js/attribute-group-tab-content-component", "~data-page-component-options" => twig_jsonencode_filter(array("id" =>             // line 39
($context["group"] ?? $this->getContext($context, "group"))))));
            // line 41
            echo "    <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo " style=\"display: none;\" class=\"tab-content\">
        ";
            // line 42
            echo ($context["content"] ?? $this->getContext($context, "content"));
            echo "
    </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_attribute_label_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_label_widget"));

        // line 48
        echo "    ";
        if ((twig_first($this->env, ($context["label"] ?? $this->getContext($context, "label"))) != "_")) {
            // line 49
            echo "        <label>";
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo ":</label>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_attribute_text_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_text_widget"));

        // line 54
        echo "    ";
        if ( !twig_test_iterable(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 55
            echo "        ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
    ";
        } else {
            // line 57
            echo "        ";
            echo nl2br(twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? $this->getContext($context, "value")), "
"), "html", null, true));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_attribute_html_escaped_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_html_escaped_widget"));

        // line 62
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlTagTrim(($context["value"] ?? $this->getContext($context, "value")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_attribute_boolean_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_boolean_widget"));

        // line 66
        echo "    ";
        echo twig_escape_filter($this->env, ((($context["value"] ?? $this->getContext($context, "value"))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No"))), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_attribute_currency_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_currency_widget"));

        // line 70
        echo "    ";
        echo ((($context["value"] ?? $this->getContext($context, "value"))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["value"] ?? $this->getContext($context, "value")))) : (null));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_attribute_percent_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_percent_widget"));

        // line 74
        echo "    ";
        echo ((($context["value"] ?? $this->getContext($context, "value"))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent(($context["value"] ?? $this->getContext($context, "value")))) : (null));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 77
    public function block_attribute_date_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_date_widget"));

        // line 78
        echo "    ";
        echo ((($context["value"] ?? $this->getContext($context, "value"))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate(($context["value"] ?? $this->getContext($context, "value")))) : (null));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 81
    public function block_attribute_datetime_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_datetime_widget"));

        // line 82
        echo "    ";
        echo ((($context["value"] ?? $this->getContext($context, "value"))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime(($context["value"] ?? $this->getContext($context, "value")))) : (null));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_attribute_multiselect_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_multiselect_widget"));

        // line 86
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            echo "        ";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "
        ";
            // line 88
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 89
                echo "            ,&nbsp;
        ";
            }
            // line 91
            echo "    ";
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
            // line 92
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_attribute_image_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_image_widget"));

        // line 97
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getResizedImageUrl(($context["value"] ?? $this->getContext($context, "value")), ($context["width"] ?? $this->getContext($context, "width")), ($context["height"] ?? $this->getContext($context, "height"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, ($context["width"] ?? $this->getContext($context, "width")), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, ($context["height"] ?? $this->getContext($context, "height")), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block_attribute_file_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_file_widget"));

        // line 101
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileView($this->env, ($context["entity"] ?? $this->getContext($context, "entity")), ($context["fieldName"] ?? $this->getContext($context, "fieldName")), ($context["value"] ?? $this->getContext($context, "value")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 104
    public function block_attribute_localized_fallback_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_localized_fallback_widget"));

        // line 105
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize(($context["translated_value"] ?? $this->getContext($context, "translated_value")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 108
    public function block_attribute_group_rest_attribute_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attribute_group_rest_attribute_widget"));

        // line 109
        echo "    <div class=\"tab-content__wrapper\">";
        $this->displayBlock("attribute_label_widget", $context, $blocks);
        echo " ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/layouts/blank/page/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  500 => 109,  494 => 108,  484 => 105,  478 => 104,  468 => 101,  462 => 100,  446 => 97,  440 => 96,  426 => 92,  413 => 91,  409 => 89,  407 => 88,  402 => 87,  383 => 86,  377 => 85,  367 => 82,  361 => 81,  351 => 78,  345 => 77,  335 => 74,  329 => 73,  319 => 70,  313 => 69,  303 => 66,  297 => 65,  287 => 62,  281 => 61,  269 => 57,  263 => 55,  260 => 54,  254 => 53,  243 => 49,  240 => 48,  234 => 47,  223 => 42,  218 => 41,  216 => 39,  214 => 37,  211 => 36,  208 => 35,  202 => 34,  191 => 29,  187 => 27,  185 => 26,  184 => 24,  179 => 23,  177 => 22,  174 => 21,  166 => 19,  163 => 18,  160 => 17,  157 => 16,  155 => 15,  150 => 14,  147 => 13,  141 => 12,  139 => 10,  137 => 9,  132 => 8,  130 => 7,  127 => 6,  124 => 5,  122 => 4,  120 => 2,  114 => 1,  107 => 108,  104 => 107,  102 => 104,  99 => 103,  97 => 100,  94 => 99,  92 => 96,  89 => 95,  87 => 85,  84 => 84,  82 => 81,  79 => 80,  77 => 77,  74 => 76,  72 => 73,  69 => 72,  67 => 69,  64 => 68,  62 => 65,  59 => 64,  57 => 61,  54 => 60,  52 => 53,  49 => 52,  47 => 47,  44 => 46,  42 => 34,  39 => 33,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block attribute_group_rest_widget -%}
    {% import 'OroUIBundle::macros.html.twig' as UI -%}

    {% set content = '' %}
    {% set visibleTabsOptions = [] %}

    {% set tabsOptionsById = [] %}
    {% for tab in tabsOptions %}
        {% set tabsOptionsById = tabsOptionsById|merge({
            (tab.id): tab
        }) %}
    {% endfor %}

    {% for child in block if child.vars.visible -%}
        {% set childContent = block_widget(child) %}
        {% if childContent|trim|length > 0 %}
            {% set content = content ~ childContent %}
            {% set visibleTabsOptions = visibleTabsOptions|merge([tabsOptionsById[child.vars.group]]) %}
        {% endif %}
    {%- endfor %}

    {% if visibleTabsOptions is not empty %}
        <div {{ block('block_attributes') }}>
            <div {{ UI.renderPageComponentAttributes({
                module: 'oroentityconfig/js/attribute-group-tabs-component',
                options: {data: visibleTabsOptions}
            }) }}></div>

            {{ content|raw }}
        </div>
    {% endif %}
{%- endblock %}

{% block attribute_group_rest_attribute_group_widget %}
    {% set content = block_widget(block) %}
    {% if content|trim|length > 0 %}
    {% set attr = layout_attr_defaults(attr, {
        'data-page-component-module': 'oroentityconfig/js/attribute-group-tab-content-component',
        '~data-page-component-options': {'id': group}|json_encode
    }) %}
    <div {{ block('block_attributes') }} style=\"display: none;\" class=\"tab-content\">
        {{ content|raw }}
    </div>
    {% endif %}
{% endblock %}

{% block attribute_label_widget %}
    {% if label|first != '_' %}
        <label>{{ label }}:</label>
    {% endif %}
{% endblock %}

{% block attribute_text_widget %}
    {% if value is not iterable %}
        {{ value|nl2br }}
    {% else %}
        {{ value|join('\\n')|nl2br }}
    {% endif %}
{% endblock %}

{% block attribute_html_escaped_widget %}
    {{ value|oro_html_tag_trim }}
{% endblock %}

{% block attribute_boolean_widget %}
    {{ value ? 'Yes'|trans : 'No'|trans }}
{% endblock %}

{% block attribute_currency_widget %}
    {{ value ? value | oro_format_currency : null }}
{% endblock %}

{% block attribute_percent_widget %}
    {{ value ? value | oro_format_percent : null }}
{% endblock %}

{% block attribute_date_widget %}
    {{ value ? value | oro_format_date : null }}
{% endblock %}

{% block attribute_datetime_widget %}
    {{ value ? value | oro_format_datetime : null }}
{% endblock %}

{% block attribute_multiselect_widget %}
    {% for item in value %}
        {{ item }}
        {% if not loop.last %}
            ,&nbsp;
        {% endif %}
    {% else %}
        {{ 'N/A'|trans }}
    {% endfor %}
{% endblock %}

{% block attribute_image_widget %}
    <img src=\"{{ resized_image_url(value, width, height) }}\" alt=\"{{ label }}\" width=\"{{ width }}\" height=\"{{ height }}\">
{% endblock %}

{% block attribute_file_widget %}
    {{ oro_file_view(entity, fieldName, value) }}
{% endblock %}

{% block attribute_localized_fallback_widget %}
    {{ translated_value|oro_html_sanitize }}
{% endblock %}

{% block attribute_group_rest_attribute_widget %}
    <div class=\"tab-content__wrapper\">{{ block('attribute_label_widget') }} {{ block_widget(block) }}</div>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/layouts/blank/page/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/layouts/blank/page/layout.html.twig");
    }
}
