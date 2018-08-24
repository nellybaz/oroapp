<?php

/* OroSearchBundle:Search:searchSuggestion.html.twig */
class __TwigTemplate_69108b7c127ec560429719cd693eaa029dcb981188c8c38ec02561d560f4bc8c extends Twig_Template
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
        ob_start();
        // line 2
        echo "<ul data-count=";
        if (array_key_exists("records_count", $context)) {
            echo twig_escape_filter($this->env, ($context["records_count"] ?? null), "html", null, true);
        } else {
            echo "0";
        }
        echo ">
    ";
        // line 3
        if (array_key_exists("data", $context)) {
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "        <li>
            <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "record_url", array()), "html", null, true);
                echo "\">
                <span class=\"name\"><strong>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "record_string", array()), "html", null, true);
                echo "</strong></span>
                ";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue($this->getAttribute($context["item"], "entity_name", array()), "label")), "html", null, true);
                echo "
            </a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "</ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroSearchBundle:Search:searchSuggestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  58 => 12,  48 => 8,  44 => 7,  40 => 6,  37 => 5,  32 => 4,  30 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSearchBundle:Search:searchSuggestion.html.twig", "");
    }
}
