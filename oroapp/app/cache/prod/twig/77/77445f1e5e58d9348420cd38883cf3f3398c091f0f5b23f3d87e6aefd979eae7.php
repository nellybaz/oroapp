<?php

/* OroEntityMergeBundle:Form:mergeValue.html.twig */
class __TwigTemplate_8274eca54a4c764877d5f3eecb52a6a4fcbdcf2d5367134f4d9f3d607e82c00d extends Twig_Template
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
        // line 1
        $context["macros"] = $this;
        // line 10
        ob_start();
        // line 11
        echo "    <span class=\"empty\">-- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_merge.form.empty"), "html", null, true);
        echo " --</span>
";
        $context["empty_cell"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
";
        // line 14
        $context["escapeStrategy"] = (($this->getAttribute(($context["metadata"] ?? null), "has", array(0 => "autoescape"), "method")) ? ($this->getAttribute(($context["metadata"] ?? null), "get", array(0 => "autoescape"), "method")) : (true));
        // line 15
        echo "
";
        // line 16
        if (twig_length_filter($this->env, ($context["convertedValue"] ?? null))) {
            // line 17
            echo "    ";
            if (($context["isListValue"] ?? null)) {
                // line 18
                echo "    ";
                $context["hasVisibleValues"] = false;
                // line 19
                echo "    <ul>
        ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["convertedValue"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    if (twig_length_filter($this->env, $context["value"])) {
                        // line 21
                        echo "            ";
                        $context["hasVisibleValues"] = true;
                        // line 22
                        echo "            <li>
                ";
                        // line 23
                        echo $context["macros"]->getescape($context["value"], ($context["escapeStrategy"] ?? null));
                        echo "
            </li>
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "
        ";
                // line 27
                if ( !($context["hasVisibleValues"] ?? null)) {
                    // line 28
                    echo "            <li>";
                    echo twig_escape_filter($this->env, ($context["empty_cell"] ?? null), "html", null, true);
                    echo "</li>
        ";
                }
                // line 30
                echo "    </ul>
    ";
            } else {
                // line 32
                echo "        ";
                echo $context["macros"]->getescape(($context["convertedValue"] ?? null), ($context["escapeStrategy"] ?? null));
                echo "
    ";
            }
        } else {
            // line 35
            echo "    ";
            echo twig_escape_filter($this->env, ($context["empty_cell"] ?? null), "html", null, true);
            echo "
";
        }
        // line 37
        echo "
";
    }

    // line 38
    public function getescape($__value__ = null, $__escapeStrategy__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "escapeStrategy" => $__escapeStrategy__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 39
            echo "    ";
            if (($context["escapeStrategy"] ?? null)) {
                // line 40
                echo "        ";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), ($context["escapeStrategy"] ?? null));
                echo "
    ";
            } else {
                // line 42
                echo "        ";
                echo ($context["value"] ?? null);
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

    public function getTemplateName()
    {
        return "OroEntityMergeBundle:Form:mergeValue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  118 => 40,  115 => 39,  102 => 38,  97 => 37,  91 => 35,  84 => 32,  80 => 30,  74 => 28,  72 => 27,  69 => 26,  59 => 23,  56 => 22,  53 => 21,  48 => 20,  45 => 19,  42 => 18,  39 => 17,  37 => 16,  34 => 15,  32 => 14,  29 => 13,  23 => 11,  21 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityMergeBundle:Form:mergeValue.html.twig", "");
    }
}
