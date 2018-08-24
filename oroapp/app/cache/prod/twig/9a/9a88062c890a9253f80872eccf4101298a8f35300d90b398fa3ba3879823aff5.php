<?php

/* OroUserBundle::macros.html.twig */
class __TwigTemplate_44b6f8a1da677a8becfd6f833c840971acb3206b491d4b4ad7d0487837afe0d1 extends Twig_Template
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
    }

    // line 1
    public function getcollection_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter($this->getAttribute(($context["widget"] ?? null), "vars", array())))) {
                // line 3
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 4
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 7
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 8
                echo "    ";
            }
            // line 9
            echo "    <div data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
        <div class=\"row-oro\">
            ";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 13
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
                echo "
                ";
                // line 14
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">×</button>
        </div>
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

    // line 22
    public function getuser_business_unit_name($__user__ = null, $__addBrackets__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "addBrackets" => $__addBrackets__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            ob_start();
            // line 24
            echo "        ";
            $context["businessUnit"] = $this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getEntityOwner(($context["user"] ?? null));
            // line 25
            echo "        ";
            if ( !(null === ($context["businessUnit"] ?? null))) {
                // line 26
                echo "            ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["businessUnit"] ?? null))) {
                    // line 27
                    echo "                ";
                    $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle::macros.html.twig", 27);
                    // line 28
                    echo "                ";
                    $context["buView"] = $context["UI"]->getrenderUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_business_unit_view", array("id" => $this->getAttribute(($context["businessUnit"] ?? null), "id", array()))), $this->getAttribute(($context["businessUnit"] ?? null), "name", array()));
                    // line 29
                    echo "            ";
                } else {
                    // line 30
                    echo "                ";
                    $context["buView"] = $this->getAttribute(($context["businessUnit"] ?? null), "name", array());
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "            ";
                if (($context["addBrackets"] ?? null)) {
                    // line 33
                    echo "                (";
                    echo twig_escape_filter($this->env, ($context["buView"] ?? null), "html", null, true);
                    echo ")
            ";
                } else {
                    // line 35
                    echo "                ";
                    echo twig_escape_filter($this->env, ($context["buView"] ?? null), "html", null, true);
                    echo "
            ";
                }
                // line 37
                echo "        ";
            }
            // line 38
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 41
    public function getrender_user_name($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 42
            echo "    ";
            $context["userName"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["user"] ?? null));
            // line 43
            echo "    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["user"] ?? null))) {
                // line 44
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle::macros.html.twig", 44);
                // line 45
                echo "        ";
                echo $context["UI"]->getrenderUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_view", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), ($context["userName"] ?? null));
                echo "
    ";
            } else {
                // line 47
                echo "        ";
                echo twig_escape_filter($this->env, ($context["userName"] ?? null), "html", null, true);
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
        return "OroUserBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 47,  199 => 45,  196 => 44,  193 => 43,  190 => 42,  178 => 41,  162 => 38,  159 => 37,  153 => 35,  147 => 33,  144 => 32,  141 => 31,  138 => 30,  135 => 29,  132 => 28,  129 => 27,  126 => 26,  123 => 25,  120 => 24,  118 => 23,  105 => 22,  86 => 17,  81 => 16,  73 => 14,  68 => 13,  64 => 12,  60 => 11,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  33 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle::macros.html.twig", "");
    }
}
