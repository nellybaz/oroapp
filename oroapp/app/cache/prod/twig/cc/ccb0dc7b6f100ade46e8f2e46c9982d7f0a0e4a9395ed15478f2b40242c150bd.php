<?php

/* OroSalesBundle::macros.html.twig */
class __TwigTemplate_934584a42c9ded0595d0efe7ab86a54417877942685ab5a2d5363a84720c0172 extends Twig_Template
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
        // line 31
        echo "
";
    }

    // line 1
    public function getrenderCollectionWithPrimaryElement($__collection__ = null, $__isEmail__ = null, $__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "isEmail" => $__isEmail__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle::macros.html.twig", 2);
            // line 3
            echo "    ";
            $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroSalesBundle::macros.html.twig", 3);
            // line 4
            echo "
    ";
            // line 5
            $context["primaryElement"] = null;
            // line 6
            echo "    ";
            $context["elements"] = array();
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 9
                echo "        ";
                if ($this->getAttribute($context["element"], "primary", array())) {
                    // line 10
                    echo "            ";
                    $context["primaryElement"] = $context["element"];
                    // line 11
                    echo "        ";
                } else {
                    // line 12
                    echo "            ";
                    $context["elements"] = twig_array_merge(($context["elements"] ?? null), array(0 => $context["element"]));
                    // line 13
                    echo "        ";
                }
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
            if (($context["primaryElement"] ?? null)) {
                // line 16
                echo "        ";
                $context["elements"] = twig_array_merge(array(0 => ($context["primaryElement"] ?? null)), ($context["elements"] ?? null));
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    <ul class=\"extra-list\">";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 21
                echo "            <li class=\"contact-collection-element";
                if ($this->getAttribute($context["element"], "primary", array())) {
                    echo " primary";
                }
                echo "\">
                ";
                // line 22
                if (($context["isEmail"] ?? null)) {
                    // line 23
                    echo "                    ";
                    echo $context["email"]->getrenderEmailWithActions($context["element"], ($context["entity"] ?? null));
                    echo "
                ";
                } else {
                    // line 25
                    echo "                    ";
                    echo $context["ui"]->getrenderPhoneWithActions($context["element"], ($context["entity"] ?? null));
                    echo "
                ";
                }
                // line 27
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</ul>
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

    // line 32
    public function getrender_customer_info($__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle::macros.html.twig", 33);
            // line 34
            echo "
    ";
            // line 35
            $context["customer"] = ((($this->getAttribute(($context["entity"] ?? null), "customerAssociation", array()) && $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customerAssociation", array()), "customerTarget", array()))) ? ($this->getAttribute($this->getAttribute(            // line 36
($context["entity"] ?? null), "customerAssociation", array()), "customerTarget", array())) : (null));
            // line 38
            echo "    ";
            $context["account"] = ((($this->getAttribute(($context["entity"] ?? null), "customerAssociation", array()) && $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "customerAssociation", array()), "account", array()))) ? ($this->getAttribute($this->getAttribute(            // line 39
($context["entity"] ?? null), "customerAssociation", array()), "account", array())) : (null));
            // line 42
            $context["accountView"] = $this->getAttribute($this, "entity_view", array(0 => ($context["account"] ?? null)), "method");
            // line 44
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.customer.label"), ($context["accountView"] ?? null), ($context["entity"] ?? null), "customer");
            echo "

    ";
            // line 46
            if ( !twig_test_empty(($context["customer"] ?? null))) {
                // line 47
                echo "        <div class=\"base-currency-wrapper\">
            ";
                // line 48
                echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["customer"] ?? null)), "label")), $this->getAttribute($this, "entity_view", array(0 => ($context["customer"] ?? null)), "method"), ($context["entity"] ?? null), "customer");
                echo "
        </div>
    ";
            }
            // line 51
            echo "
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

    // line 54
    public function getentity_view($__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 55
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle::macros.html.twig", 55);
            // line 57
            $context["entityName"] = ((($context["entity"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["entity"] ?? null))) : (""));
            // line 58
            if ((($context["entity"] ?? null) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null)))) {
                // line 59
                echo $context["ui"]->getrenderUrl($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getEntityViewLink(($context["entity"] ?? null)), ($context["entityName"] ?? null));
            } else {
                // line 61
                echo twig_escape_filter($this->env, ($context["entityName"] ?? null), "html", null, true);
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
        return "OroSalesBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 61,  217 => 59,  215 => 58,  213 => 57,  211 => 55,  199 => 54,  183 => 51,  177 => 48,  174 => 47,  172 => 46,  167 => 44,  165 => 42,  163 => 39,  161 => 38,  159 => 36,  158 => 35,  155 => 34,  152 => 33,  140 => 32,  124 => 29,  117 => 27,  111 => 25,  105 => 23,  103 => 22,  96 => 21,  92 => 20,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  44 => 4,  41 => 3,  38 => 2,  24 => 1,  19 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle::macros.html.twig", "");
    }
}
