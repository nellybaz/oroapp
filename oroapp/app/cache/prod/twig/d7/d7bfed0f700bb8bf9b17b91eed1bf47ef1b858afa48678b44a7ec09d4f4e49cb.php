<?php

/* OroEntityMergeBundle:Form:fields.html.twig */
class __TwigTemplate_171e50c2ac35a1931540ee1fe406892a81e39abd06948132969b9a5f44bef05d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_entity_merge_widget' => array($this, 'block_oro_entity_merge_widget'),
            'oro_entity_merge_javascript' => array($this, 'block_oro_entity_merge_javascript'),
            'oro_entity_merge_field_widget' => array($this, 'block_oro_entity_merge_field_widget'),
            'oro_entity_merge_choice_value_widget' => array($this, 'block_oro_entity_merge_choice_value_widget'),
            'oro_entity_merge_field_label' => array($this, 'block_oro_entity_merge_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_entity_merge_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('oro_entity_merge_javascript', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('oro_entity_merge_field_widget', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('oro_entity_merge_choice_value_widget', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('oro_entity_merge_field_label', $context, $blocks);
    }

    // line 1
    public function block_oro_entity_merge_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('Genemu\Bundle\FormBundle\Twig\Extension\FormExtension')->renderJavascript(($context["form"] ?? null));
        echo "
    <table class=\"table table-bordered entity-merge-table\">
        <thead>
        <tr class=\"default-field\">
            <td class=\"merge-first-column\" rowspan=\"2\">
                <div class=\"control-label wrap\">
                    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "masterEntity", array()), 'label');
        echo "
                </div>
            </td>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "masterEntity", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 12
            echo "                <td class=\"entity-merge-column\">
                    <div class=\"entity-merge-fields-blocks-wrapper\">
                        <label class=\"entity-merge-uppercase entity-merge-inline\">
                            ";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => twig_array_merge($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), array("class" => "entity-merge-field-choice"))));
            echo "

                            <strong data-entity-key=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array()), "html", null, true);
            echo "\"
                                    data-entity-field-name=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "full_name", array()), "html", null, true);
            echo "\"
                                    class=\"merge-entity-representative\">
                                ";
            // line 20
            echo $this->env->getExtension('Oro\Bundle\EntityMergeBundle\Twig\MergeExtension')->renderMergeEntityLabel($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), ($this->getAttribute($context["loop"], "index", array()) - 1));
            echo "
                            </strong>
                        </label>
                    </div>
                    <a class=\"entity-merge-select-all\" data-entity-key=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "html", null, true);
            echo "\"
                       href=\"javascript:void(0);\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_merge.form.select_all"), "html", null, true);
            echo "
                    </a>
                </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Oro\Bundle\EntityMergeBundle\Twig\MergeExtension')->sortMergeFields($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "fields", array()), "children", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 34
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
    <p>* ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_merge.hint.other_related_entities"), "html", null, true);
        echo "</p>
";
    }

    // line 41
    public function block_oro_entity_merge_javascript($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityMergeBundle:Form:fields.html.twig", 42);
        // line 43
        echo "
    <div ";
        // line 44
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroentitymerge/js/merge-view", "options" => array("_sourceElement" => (("#" . $this->getAttribute($this->getAttribute(        // line 47
($context["form"] ?? null), "vars", array()), "id", array())) . " .form-horizontal"))));
        // line 49
        echo "></div>
";
    }

    // line 52
    public function block_oro_entity_merge_field_widget($context, array $blocks = array())
    {
        // line 53
        echo "    <tr>
        <td class=\"merge-first-column\">
            ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
            ";
        // line 56
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 57
            echo "                <div class=\"entity-merge-strategy-wrapper\">

                    <span class=\"entity-merge-inline entity-merge-strategy-label\">
                        <div class=\"control-label wrap\">
                            ";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "mode", array()), 'label');
            echo "
                        </div>
                    </span>

                    <div class=\"entity-merge-inline\">
                        ";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "mode", array()), 'widget', array("attr" => array("class" => "entity-merge-small-select")));
            echo "
                    </div>
                </div>
            ";
        } else {
            // line 70
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "mode", array()), 'widget');
            echo "
            ";
        }
        // line 72
        echo "
        </td>
        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), "sourceEntity", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 75
            echo "            <td class=\"entity-merge-decision-container\">
                ";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("entityOffset" => ($this->getAttribute($context["loop"], "index", array()) - 1)));
            echo "
            </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    </tr>
";
    }

    // line 82
    public function block_oro_entity_merge_choice_value_widget($context, array $blocks = array())
    {
        // line 83
        echo "    <div class=\"entity-merge-fields-blocks-wrapper\">
        <div class=\"entity-merge-inline\">
            ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => twig_array_merge($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), array("class" => "entity-merge-field-choice"))));
        echo "
        </div>
        <label data-entity-key=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\" data-entity-field-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
               class=\"entity-merge-inline-label merge-entity-representative\"
               for=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            ";
        // line 90
        echo $this->env->getExtension('Oro\Bundle\EntityMergeBundle\Twig\MergeExtension')->renderMergeFieldValue(($context["merge_field_data"] ?? null), ($context["merge_entity_offset"] ?? null));
        echo "
        </label>
    </div>
";
    }

    // line 95
    public function block_oro_entity_merge_field_label($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        if ( !(($context["label"] ?? null) === false)) {
            // line 97
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 98
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 99
                echo "        ";
            }
            // line 100
            echo "        ";
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 101
                echo "            ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
                // line 102
                echo "        ";
            }
            // line 103
            echo "        <strong ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            echo "</strong>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEntityMergeBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  332 => 103,  329 => 102,  326 => 101,  323 => 100,  320 => 99,  317 => 98,  314 => 97,  311 => 96,  308 => 95,  300 => 90,  283 => 89,  276 => 87,  271 => 85,  267 => 83,  264 => 82,  259 => 79,  242 => 76,  239 => 75,  222 => 74,  218 => 72,  212 => 70,  205 => 66,  197 => 61,  191 => 57,  189 => 56,  185 => 55,  181 => 53,  178 => 52,  173 => 49,  171 => 47,  170 => 44,  167 => 43,  164 => 42,  161 => 41,  155 => 38,  151 => 36,  142 => 34,  138 => 33,  133 => 30,  115 => 26,  110 => 24,  103 => 20,  98 => 18,  94 => 17,  89 => 15,  84 => 12,  67 => 11,  61 => 8,  51 => 2,  48 => 1,  44 => 95,  41 => 94,  39 => 82,  36 => 81,  34 => 52,  31 => 51,  29 => 41,  26 => 40,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityMergeBundle:Form:fields.html.twig", "");
    }
}
