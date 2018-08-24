<?php

/* OroDataAuditBundle::macros.html.twig */
class __TwigTemplate_84d8949e058026ddc92fa97c78b6ee4bc48fa4d9bcb8562142b86e9ad926c8bd extends Twig_Template
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
        // line 28
        echo "
";
    }

    // line 1
    public function getrenderFieldValue($__fieldValue__ = null, $__field__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldValue" => $__fieldValue__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["type"] = null;
            // line 3
            if ($this->getAttribute(($context["fieldValue"] ?? null), "type", array(), "any", true, true)) {
                // line 4
                $context["type"] = $this->getAttribute(($context["fieldValue"] ?? null), "type", array());
            }
            // line 6
            if ($this->getAttribute(($context["fieldValue"] ?? null), "value", array(), "any", true, true)) {
                // line 7
                $context["fieldValue"] = $this->getAttribute(($context["fieldValue"] ?? null), "value", array());
            }
            // line 10
            if ($this->getAttribute(($context["fieldValue"] ?? null), "timestamp", array(), "any", true, true)) {
                // line 11
                echo (((($context["type"] ?? null) == "date")) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate(($context["fieldValue"] ?? null))) : ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime(($context["fieldValue"] ?? null))));
            } elseif (((            // line 12
($context["type"] ?? null) == "array") || (($context["type"] ?? null) == "jsonarray"))) {
                // line 13
                echo twig_escape_filter($this->env, (( !(null === ($context["fieldValue"] ?? null))) ? (twig_jsonencode_filter(($context["fieldValue"] ?? null), twig_constant("JSON_FORCE_OBJECT"))) : ("")), "html", null, true);
            } elseif ((((            // line 14
($context["type"] ?? null) == "boolean") || (($context["fieldValue"] ?? null) === true)) || (($context["fieldValue"] ?? null) === false))) {
                // line 15
                echo twig_escape_filter($this->env, ((($context["fieldValue"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No"))), "html", null, true);
            } else {
                // line 17
                if (twig_test_iterable(($context["fieldValue"] ?? null))) {
                    // line 18
                    echo "            ";
                    echo twig_escape_filter($this->env, twig_join_filter(($context["fieldValue"] ?? null), ", "), "html", null, true);
                    echo "
        ";
                } else {
                    // line 20
                    echo "            ";
                    if ($this->getAttribute(($context["field"] ?? null), "translationDomain", array(), "any", true, true)) {
                        // line 21
                        echo "                ";
                        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["fieldValue"] ?? null), array(), $this->getAttribute(($context["field"] ?? null), "translationDomain", array())), ""), "html", null, true);
                        echo "
            ";
                    } else {
                        // line 23
                        echo "                ";
                        echo twig_escape_filter($this->env, ((array_key_exists("fieldValue", $context)) ? (_twig_default_filter(($context["fieldValue"] ?? null), "")) : ("")), "html", null, true);
                        echo "
            ";
                    }
                    // line 25
                    echo "        ";
                }
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

    // line 29
    public function getrenderFieldName($__objectClass__ = null, $__fieldKey__ = null, $__fieldValue__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "objectClass" => $__objectClass__,
            "fieldKey" => $__fieldKey__,
            "fieldValue" => $__fieldValue__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    ";
            $context["fieldLabel"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getFieldConfigValue(($context["objectClass"] ?? null), ($context["fieldKey"] ?? null), "label"), ($context["fieldKey"] ?? null));
            // line 31
            echo "    ";
            if ($this->getAttribute(($context["fieldValue"] ?? null), "translationDomain", array(), "any", true, true)) {
                // line 32
                echo "        ";
                $context["fieldLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["fieldKey"] ?? null), array(), $this->getAttribute(($context["fieldValue"] ?? null), "translationDomain", array()));
                // line 33
                echo "    ";
            } else {
                // line 34
                echo "        ";
                $context["fieldLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["fieldKey"] ?? null));
                // line 35
                echo "    ";
            }
            // line 36
            echo twig_escape_filter($this->env, ($context["fieldLabel"] ?? null), "html", null, true);
            echo ":
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
        return "OroDataAuditBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 36,  131 => 35,  128 => 34,  125 => 33,  122 => 32,  119 => 31,  116 => 30,  102 => 29,  85 => 25,  79 => 23,  73 => 21,  70 => 20,  64 => 18,  62 => 17,  59 => 15,  57 => 14,  55 => 13,  53 => 12,  51 => 11,  49 => 10,  46 => 7,  44 => 6,  41 => 4,  39 => 3,  37 => 2,  24 => 1,  19 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataAuditBundle::macros.html.twig", "");
    }
}
