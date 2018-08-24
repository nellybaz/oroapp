<?php

/* OroMessageQueueBundle::macros.html.twig */
class __TwigTemplate_fd219000917915443f6d58b9117716dbe9145f23cf07308502fd964a97cd2516 extends Twig_Template
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
    public function getgetJobStatusClass($__job__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "job" => $__job__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            echo "    ";
            $context["status"] = $this->getAttribute(($context["job"] ?? null), "status", array());
            // line 4
            echo "
    ";
            // line 5
            if ((($context["status"] ?? null) === constant(get_class(($context["job"] ?? null))."::"."STATUS_RUNNING"))) {
                // line 6
                echo "        ";
                $context["class"] = "label-info";
                // line 7
                echo "    ";
            } elseif ((($context["status"] ?? null) === constant(get_class(($context["job"] ?? null))."::"."STATUS_SUCCESS"))) {
                // line 8
                echo "        ";
                $context["class"] = "label-success";
                // line 9
                echo "    ";
            } elseif ((($context["status"] ?? null) === constant(get_class(($context["job"] ?? null))."::"."STATUS_FAILED"))) {
                // line 10
                echo "        ";
                $context["class"] = "label-warning";
                // line 11
                echo "    ";
            } elseif ((($context["status"] ?? null) === constant(get_class(($context["job"] ?? null))."::"."STATUS_FAILED_REDELIVERED"))) {
                // line 12
                echo "        ";
                $context["class"] = "label-warning";
                // line 13
                echo "    ";
            } elseif (twig_in_filter(($context["status"] ?? null), array(0 => twig_constant("STATUS_CANCELLED", ($context["job"] ?? null)), 1 => twig_constant("STATUS_STALE", ($context["job"] ?? null))))) {
                // line 14
                echo "        ";
                $context["class"] = "label-inverse";
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "        ";
                $context["class"] = "";
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "
";
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

    public function getTemplateName()
    {
        return "OroMessageQueueBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  64 => 13,  61 => 12,  58 => 11,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  43 => 6,  41 => 5,  38 => 4,  35 => 3,  33 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMessageQueueBundle::macros.html.twig", "");
    }
}
