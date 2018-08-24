<?php

/* OroTestGeneratorBundle:Tests:entity_template.php.twig */
class __TwigTemplate_ab9d9e5e25ddca2840da3c9d463d7c54630be5e0fdcb7fa48229aa9c5bc148c7 extends Twig_Template
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
        echo "<?php

namespace ";
        // line 3
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo ";

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vendors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["vendor"]);
            foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
                // line 7
                echo "use ";
                echo twig_escape_filter($this->env, $context["use"], "html", null, true);
                echo ";
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['use'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "class ";
        echo twig_escape_filter($this->env, ($context["className"] ?? null), "html", null, true);
        echo " extends \\PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    public function testAccessors()
    {
";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute(($context["propertiesData"] ?? null), "simple", array())) > 0)) {
            // line 18
            echo "        \$this->assertPropertyAccessors(new ";
            echo twig_escape_filter($this->env, ($context["testedClassName"] ?? null), "html", null, true);
            echo "(), [
";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["propertiesData"] ?? null), "simple", array()));
            foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                // line 20
                echo "            ['";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "propertyName", array()), "html", null, true);
                echo "', ";
                if ($this->getAttribute($context["data"], "value", array(), "any", true, true)) {
                    if ($this->getAttribute($context["data"], "quotes", array(), "any", true, true)) {
                        echo "'";
                    }
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "value", array()), "html", null, true);
                    if ($this->getAttribute($context["data"], "quotes", array(), "any", true, true)) {
                        echo "'";
                    }
                } else {
                    echo "new ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "type", array()), "html", null, true);
                    echo "()";
                }
                echo "]";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["propertiesData"] ?? null), "simple", array())) != ($context["key"] + 1))) {
                    echo ",";
                }
                // line 21
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ]);
";
        }
        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute(($context["propertiesData"] ?? null), "collection", array())) > 0)) {
            // line 26
            echo "        \$this->assertPropertyCollections(new ";
            echo twig_escape_filter($this->env, ($context["testedClassName"] ?? null), "html", null, true);
            echo "(), [
    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["propertiesData"] ?? null), "collection", array()));
            foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                // line 28
                echo "        ['";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "propertyName", array()), "html", null, true);
                echo "', new ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "type", array()), "html", null, true);
                echo "()]";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["propertiesData"] ?? null), "simple", array())) != ($context["key"] + 1))) {
                    echo ",";
                }
                // line 29
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    ]);
";
        }
        // line 33
        echo "    }
}
";
    }

    public function getTemplateName()
    {
        return "OroTestGeneratorBundle:Tests:entity_template.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 33,  132 => 31,  125 => 29,  116 => 28,  112 => 27,  107 => 26,  105 => 25,  101 => 23,  94 => 21,  73 => 20,  69 => 19,  64 => 18,  62 => 17,  52 => 11,  45 => 9,  36 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTestGeneratorBundle:Tests:entity_template.php.twig", "");
    }
}
