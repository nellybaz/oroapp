<?php

/* A2lixTranslationFormBundle::macros.html.twig */
class __TwigTemplate_246e77a43b9704f4bb5df9b60b1485ad3b0857ae427222070194cba659796efe extends Twig_Template
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
        // line 9
        echo "
";
        // line 37
        echo "
";
    }

    // line 10
    public function getpartialTranslations($__form__ = null, $__fieldsNames__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "fieldsNames" => $__fieldsNames__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 14
                echo "            ";
                $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                // line 15
                echo "
            <li ";
                // line 16
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()) == ($context["locale"] ?? null))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
                // line 17
                echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
                echo "\">
                   ";
                // line 18
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["locale"] ?? null)), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 26
                echo "            ";
                $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                // line 27
                echo "
            <div class=\"a2lix_translationsFields-";
                // line 28
                echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
                echo " tab-pane ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()) == ($context["locale"] ?? null))) {
                    echo "active";
                }
                echo "\">
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsFields"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                    if (twig_in_filter($this->getAttribute($this->getAttribute($context["translationsField"], "vars", array()), "name", array()), ($context["fieldsNames"] ?? null))) {
                        // line 30
                        echo "                ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["translationsField"], 'widget');
                        echo "
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
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

    // line 38
    public function getpartialTranslationsGedmo($__form__ = null, $__fieldsNames__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "fieldsNames" => $__fieldsNames__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 39
            echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 42
                echo "            ";
                $context["isDefaultLocale"] = ("defaultLocale" == $this->getAttribute($this->getAttribute($context["translationsLocales"], "vars", array()), "name", array()));
                // line 43
                echo "
            ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 45
                    echo "                ";
                    $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                    // line 46
                    echo "
                <li ";
                    // line 47
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()) == ($context["locale"] ?? null))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                    <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
                    // line 48
                    echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
                    echo "\">
                        ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["locale"] ?? null)), "html", null, true);
                    echo " ";
                    if (($context["isDefaultLocale"] ?? null)) {
                        echo "[Default]";
                    }
                    // line 50
                    echo "                    </a>
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 58
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 59
                    echo "                ";
                    $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                    // line 60
                    echo "
                <div class=\"a2lix_translationsFields-";
                    // line 61
                    echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
                    echo " tab-pane ";
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()) == ($context["locale"] ?? null))) {
                        echo "active";
                    }
                    echo "\">
                ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["translationsFields"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                        if (twig_in_filter($this->getAttribute($this->getAttribute($context["translationsField"], "vars", array()), "name", array()), ($context["fieldsNames"] ?? null))) {
                            // line 63
                            echo "                    ";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["translationsField"], 'widget');
                            echo "
                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
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

    public function getTemplateName()
    {
        return "A2lixTranslationFormBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 68,  253 => 67,  246 => 65,  236 => 63,  231 => 62,  223 => 61,  220 => 60,  217 => 59,  212 => 58,  208 => 57,  203 => 54,  197 => 53,  189 => 50,  183 => 49,  179 => 48,  173 => 47,  170 => 46,  167 => 45,  163 => 44,  160 => 43,  157 => 42,  153 => 41,  149 => 39,  136 => 38,  119 => 34,  112 => 32,  102 => 30,  97 => 29,  89 => 28,  86 => 27,  83 => 26,  79 => 25,  74 => 22,  64 => 18,  60 => 17,  54 => 16,  51 => 15,  48 => 14,  44 => 13,  40 => 11,  27 => 10,  22 => 37,  19 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "A2lixTranslationFormBundle::macros.html.twig", "");
    }
}
