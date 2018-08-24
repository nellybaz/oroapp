<?php

/* OroUIBundle::pager.html.twig */
class __TwigTemplate_9d2d6319472f37cf8a4bc9d1cf9760323b3f4d3bdcaa321344c12ea7cf18f03f extends Twig_Template
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
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 2
            echo "<div class=\"pagination\">
    <ul>
        ";
            // line 4
            if (array_key_exists("previous", $context)) {
                // line 5
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)))), "html", null, true);
                echo "\">← Previous</a></li>
        ";
            } else {
                // line 7
                echo "        <li class=\"disabled\"><span>← Previous</span></li>
        ";
            }
            // line 9
            echo "
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 11
                echo "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 12
                    echo "            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
            ";
                } else {
                    // line 14
                    echo "            <li class=\"active\"><span>";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span></li>
            ";
                }
                // line 16
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
        ";
            // line 18
            if (array_key_exists("next", $context)) {
                // line 19
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["next"] ?? null)))), "html", null, true);
                echo "\">Next →</a></li>
        ";
            } else {
                // line 21
                echo "        <li class=\"disabled\"><span>Next →</span></li>
        ";
            }
            // line 23
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUIBundle::pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 21,  72 => 19,  70 => 18,  67 => 17,  61 => 16,  55 => 14,  47 => 12,  44 => 11,  40 => 10,  37 => 9,  33 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle::pager.html.twig", "");
    }
}
