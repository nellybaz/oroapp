<?php

/* OroCustomerBundle:AclPermission:aclAccessLevels.json.twig */
class __TwigTemplate_70fa511fae4dc10a846f19e1181a19c87a4a49c3c95cb2005150fc922635066e extends Twig_Template
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
        echo "{
";
        // line 2
        $context["translatedLevels"] = array();
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["levels"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["id"] => $context["level"]) {
            // line 4
            echo "    ";
            if (twig_test_empty($context["level"])) {
                // line 5
                echo "        ";
                $context["level"] = "NONE";
                // line 6
                echo "    ";
            }
            // line 7
            echo "    ";
            $context["label"] = (($context["roleTranslationPrefix"] ?? null) . $context["level"]);
            // line 8
            echo "    ";
            if (($this->getAttribute($context["loop"], "index", array()) != $this->getAttribute($context["loop"], "first", array()))) {
                echo ",";
            }
            // line 9
            echo "    \"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\":\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
            echo "\"
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "}
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:AclPermission:aclAccessLevels.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  58 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:AclPermission:aclAccessLevels.json.twig", "");
    }
}
