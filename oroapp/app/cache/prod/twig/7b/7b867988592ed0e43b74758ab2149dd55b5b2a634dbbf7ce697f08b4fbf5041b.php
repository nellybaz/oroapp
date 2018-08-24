<?php

/* OroEntityConfigBundle:Audit:data.html.twig */
class __TwigTemplate_7446fb1dd74ef1fd0b402972c0478a23fdef538be7cf8bef77ae234d3055ec28 extends Twig_Template
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
        echo "<ul>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 3
            echo "    ";
            $context["items"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config_manager"] ?? null), "getProvider", array(0 => $this->getAttribute($context["val"], "scope", array())), "method"), "getPropertyConfig", array(), "method"), "getItems", array(0 => ((($context["is_entity"] ?? null)) ? ("entity") : ("type"))), "method");
            // line 4
            echo "    ";
            $context["translatable"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config_manager"] ?? null), "getProvider", array(0 => $this->getAttribute($context["val"], "scope", array())), "method"), "getPropertyConfig", array(), "method"), "getTranslatableValues", array(0 => ((($context["is_entity"] ?? null)) ? ("entity") : ("field"))), "method");
            // line 5
            echo "
    ";
            // line 6
            if (((($context["is_entity"] ?? null) && ($this->getAttribute($context["val"], "fieldName", array(), "method") == null)) || ((($context["is_entity"] ?? null) == false) && ($this->getAttribute($context["val"], "fieldName", array(), "method") == ($context["field_name"] ?? null))))) {
                // line 7
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["val"], "diff", array()));
                foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                    // line 8
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), $context["key"], array(), "array", false, true), "form", array(), "array", false, true), "options", array(), "array", false, true), "label", array(), "array", true, true)) {
                        // line 9
                        echo "                ";
                        $context["label"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), $context["key"], array(), "array"), "form", array(), "array"), "options", array(), "array"), "label", array(), "array");
                        // line 10
                        echo "            ";
                    } elseif ($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), $context["key"], array(), "array", false, true), "options", array(), "array", false, true), "label", array(), "array", true, true)) {
                        // line 11
                        echo "                ";
                        $context["label"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), $context["key"], array(), "array"), "options", array(), "array"), "label", array(), "array");
                        // line 12
                        echo "            ";
                    } else {
                        // line 13
                        echo "                ";
                        $context["label"] = twig_replace_filter(twig_capitalize_string_filter($this->env, $context["key"]), "_", " ");
                        // line 14
                        echo "            ";
                    }
                    // line 15
                    echo "
            ";
                    // line 16
                    if (!twig_in_filter((".entity_" . $context["key"]), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["data"], 1, array(), "array")))) {
                        // line 17
                        echo "            <li>
                ";
                        // line 18
                        $context["old"] = ((twig_in_filter($context["key"], ($context["translatable"] ?? null))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["data"], 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["data"], 0, array(), "array"), "N/A")) : ("N/A")))) : ($this->getAttribute($context["data"], 0, array(), "array")));
                        // line 19
                        echo "                ";
                        $context["new"] = ((twig_in_filter($context["key"], ($context["translatable"] ?? null))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["data"], 1, array(), "array"))) : ($this->getAttribute($context["data"], 1, array(), "array")));
                        // line 20
                        echo "                <b>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
                        echo "</b>: <s>";
                        echo twig_escape_filter($this->env, ($context["old"] ?? null), "html", null, true);
                        echo "</s> ";
                        echo twig_escape_filter($this->env, ($context["new"] ?? null), "html", null, true);
                        echo "
            </li>
            ";
                    }
                    // line 23
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Audit:data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  93 => 24,  87 => 23,  76 => 20,  73 => 19,  71 => 18,  68 => 17,  66 => 16,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  37 => 7,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Audit:data.html.twig", "");
    }
}
