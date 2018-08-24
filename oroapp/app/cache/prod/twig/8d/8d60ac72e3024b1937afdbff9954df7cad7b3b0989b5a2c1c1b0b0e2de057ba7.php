<?php

/* A2lixTranslationFormBundle::default.html.twig */
class __TwigTemplate_b28489b92f7ae9e5b3f48e29723b46a3521dae7181bf87330a06496c6355ddcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'a2lix_translations_widget' => array($this, 'block_a2lix_translations_widget'),
            'a2lix_translations_gedmo_widget' => array($this, 'block_a2lix_translations_gedmo_widget'),
            'a2lix_translationsForms_widget' => array($this, 'block_a2lix_translationsForms_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
        // line 26
        echo "


";
        // line 29
        $this->displayBlock('a2lix_translations_gedmo_widget', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('a2lix_translationsForms_widget', $context, $blocks);
    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 5
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
            // line 6
            echo "
            <li ";
            // line 7
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()) == ($context["locale"] ?? null))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
            // line 8
            echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
            echo "\">
                   ";
            // line 9
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["locale"] ?? null)), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 17
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
            // line 18
            echo "
            <div class=\"a2lix_translationsFields-";
            // line 19
            echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
            echo " tab-pane ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()) == ($context["locale"] ?? null))) {
                echo "active";
            }
            echo "\">
                ";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
";
    }

    // line 29
    public function block_a2lix_translations_gedmo_widget($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "simple_way", array())) {
            // line 31
            echo "        ";
            $this->displayBlock("a2lix_translations_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 33
            echo "        <div class=\"a2lix_translations tabbable\">
            <ul class=\"a2lix_translationsLocales nav nav-tabs\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 36
                echo "                ";
                $context["isDefaultLocale"] = ("defaultLocale" == $this->getAttribute($this->getAttribute($context["translationsLocales"], "vars", array()), "name", array()));
                // line 37
                echo "
                ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 39
                    echo "                    ";
                    $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                    // line 40
                    echo "
                    <li ";
                    // line 41
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()) == ($context["locale"] ?? null))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                        <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
                    // line 42
                    echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
                    echo "\">
                            ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["locale"] ?? null)), "html", null, true);
                    echo " ";
                    if (($context["isDefaultLocale"] ?? null)) {
                        echo "[Default]";
                    }
                    // line 44
                    echo "                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </ul>

            <div class=\"a2lix_translationsFields tab-content\">
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 52
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 53
                    echo "                    ";
                    $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                    // line 54
                    echo "
                    <div class=\"a2lix_translationsFields-";
                    // line 55
                    echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
                    echo " tab-pane ";
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()) == ($context["locale"] ?? null))) {
                        echo "active";
                    }
                    echo "\">
                        ";
                    // line 56
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </div>
        </div>
    ";
        }
    }

    // line 65
    public function block_a2lix_translationsForms_widget($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $this->displayBlock("a2lix_translations_widget", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "A2lixTranslationFormBundle::default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  232 => 66,  229 => 65,  222 => 60,  216 => 59,  207 => 56,  199 => 55,  196 => 54,  193 => 53,  188 => 52,  184 => 51,  179 => 48,  173 => 47,  165 => 44,  159 => 43,  155 => 42,  149 => 41,  146 => 40,  143 => 39,  139 => 38,  136 => 37,  133 => 36,  129 => 35,  125 => 33,  119 => 31,  116 => 30,  113 => 29,  107 => 23,  98 => 20,  90 => 19,  87 => 18,  84 => 17,  80 => 16,  75 => 13,  65 => 9,  61 => 8,  55 => 7,  52 => 6,  49 => 5,  45 => 4,  41 => 2,  38 => 1,  34 => 65,  31 => 64,  29 => 29,  24 => 26,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "A2lixTranslationFormBundle::default.html.twig", "");
    }
}
