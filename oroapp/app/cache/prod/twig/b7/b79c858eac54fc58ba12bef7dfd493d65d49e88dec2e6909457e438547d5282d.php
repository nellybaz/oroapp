<?php

/* OroScopeBundle::macros.html.twig */
class __TwigTemplate_e5db0943af9b8105663fca29a6f48e55aab5aa4394b89ad308394700b31c1bf8 extends Twig_Template
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
        // line 10
        echo "
";
    }

    // line 1
    public function getrenderRestrictionsView($__scopeEntities__ = null, $__scopes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "scopeEntities" => $__scopeEntities__,
            "scopes" => $__scopes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "    ";
            if ($this->env->getExtension('Oro\Bundle\ScopeBundle\Twig\ScopeExtension')->isScopesEmpty(($context["scopeEntities"] ?? null), ($context["scopes"] ?? null))) {
                // line 4
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
                echo "
    ";
            } else {
                // line 6
                echo "        ";
                $context["gridHtml"] = $context["self"]->getrenderRestrictionsViewGrid(($context["scopeEntities"] ?? null), ($context["scopes"] ?? null));
                // line 7
                echo "        ";
                echo twig_escape_filter($this->env, ($context["gridHtml"] ?? null), "html", null, true);
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

    // line 11
    public function getrenderRestrictionsViewGrid($__scopeEntities__ = null, $__scopes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "scopeEntities" => $__scopeEntities__,
            "scopes" => $__scopes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "    <div class=\"grid-container\">
        <table class=\"grid table table-bordered table-condensed\">
            <thead>
                <tr>
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scopeEntities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entityClass"]) {
                // line 17
                echo "                        <th><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue($context["entityClass"], "label")), "html", null, true);
                echo "</span></th>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityClass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </tr>
            </thead>
            <tbody>
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scopes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["scope"]) {
                // line 23
                echo "                <tr>
                    ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["scopeEntities"] ?? null));
                foreach ($context['_seq'] as $context["fieldName"] => $context["entityClass"]) {
                    // line 25
                    echo "                        <td>
                            ";
                    // line 26
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["scope"], $context["fieldName"])) ? ($this->getAttribute($context["scope"], $context["fieldName"])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Any"))), "html", null, true);
                    echo "
                        </td>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['entityClass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scope'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </tbody>
        </table>
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
        return "OroScopeBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 31,  131 => 29,  122 => 26,  119 => 25,  115 => 24,  112 => 23,  108 => 22,  103 => 19,  94 => 17,  90 => 16,  84 => 12,  71 => 11,  52 => 7,  49 => 6,  43 => 4,  40 => 3,  37 => 2,  24 => 1,  19 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroScopeBundle::macros.html.twig", "");
    }
}
