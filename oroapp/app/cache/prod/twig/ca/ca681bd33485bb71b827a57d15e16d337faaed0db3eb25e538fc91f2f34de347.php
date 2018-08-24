<?php

/* OroTestGeneratorBundle:Tests:unit_template.php.twig */
class __TwigTemplate_0bd357c1b1fea1fc129fd5ff78b99f5124c24da51d8a400e9ea097d2c6f7002a extends Twig_Template
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
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dependenciesData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dependencyData"]) {
            // line 14
            echo "    /**
     * @var ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencyData"], "class", array()), "html", null, true);
            echo "|\\PHPUnit_Framework_MockObject_MockObject
     */
    protected \$";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencyData"], "variable", array()), "html", null, true);
            echo ";

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependencyData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    /**
     * @var ";
        // line 21
        echo twig_escape_filter($this->env, ($context["testedClassName"] ?? null), "html", null, true);
        echo "
     */
    protected \$";
        // line 23
        echo twig_escape_filter($this->env, ($context["testedClassNameVariable"] ?? null), "html", null, true);
        echo ";

    protected function setUp()
    {
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dependenciesData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dependencyData"]) {
            // line 28
            if ($this->getAttribute($context["dependencyData"], "has_constructor", array(), "any", true, true)) {
                // line 29
                $context["fullClassName"] = (((($context["phpVersion"] ?? null) > 5.4)) ? (($this->getAttribute($context["dependencyData"], "class", array()) . "::class")) : ((("'" . $this->getAttribute($context["dependencyData"], "fullClassName", array())) . "'")));
                // line 30
                if ($this->getAttribute($context["dependencyData"], "has_constructor", array())) {
                    // line 31
                    echo "        \$this->";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dependencyData"], "variable", array()), "html", null, true);
                    echo " = \$this->getMockBuilder(";
                    echo ($context["fullClassName"] ?? null);
                    echo ")
            ->disableOriginalConstructor()
            ->getMock();
";
                } else {
                    // line 35
                    echo "        \$this->";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dependencyData"], "variable", array()), "html", null, true);
                    echo " = \$this->createMock(";
                    echo ($context["fullClassName"] ?? null);
                    echo ");
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependencyData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        \$this->";
        echo twig_escape_filter($this->env, ($context["testedClassNameVariable"] ?? null), "html", null, true);
        echo " = new ";
        echo twig_escape_filter($this->env, ($context["testedClassName"] ?? null), "html", null, true);
        echo "(";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dependenciesData"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["dependencyData"]) {
            echo "\$this->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dependencyData"], "variable", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ", ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['dependencyData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
    }
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["methodsData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["methodData"]) {
            // line 42
            echo "
    public function ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["methodData"], "testName", array()), "html", null, true);
            echo "()
    {
";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["methodData"], "arguments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["argument"]) {
                // line 46
                if ($this->getAttribute($context["argument"], "class", array())) {
                    echo "        /** @var ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["argument"], "class", array()), "html", null, true);
                    if ((twig_length_filter($this->env, $this->getAttribute($context["argument"], "class", array())) != 0)) {
                        echo "|\\PHPUnit_Framework_MockObject_MockObject";
                    }
                    echo " \$";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["argument"], "name", array()), "html", null, true);
                    echo " **/
";
                }
                // line 48
                if ($this->getAttribute($context["argument"], "has_constructor", array(), "any", true, true)) {
                    // line 49
                    $context["fullClassName"] = (((($context["phpVersion"] ?? null) > 5.4)) ? (($this->getAttribute($context["argument"], "class", array()) . "::class")) : ((("'" . $this->getAttribute($context["argument"], "fullClass", array())) . "'")));
                    // line 50
                    if ($this->getAttribute($context["argument"], "has_constructor", array())) {
                        // line 51
                        echo "        \$";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["argument"], "name", array()), "html", null, true);
                        echo " = \$this->getMockBuilder(";
                        echo ($context["fullClassName"] ?? null);
                        echo ")
            ->disableOriginalConstructor()
            ->getMock();

";
                    } else {
                        // line 56
                        echo "        \$";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["argument"], "name", array()), "html", null, true);
                        echo " = \$this->createMock(";
                        echo ($context["fullClassName"] ?? null);
                        echo ");

";
                    }
                } else {
                    // line 60
                    echo "        \$";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["argument"], "name", array()), "html", null, true);
                    echo " = '';
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['argument'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        //TODO: add test assertions
        \$this->";
            // line 64
            echo twig_escape_filter($this->env, ($context["testedClassNameVariable"] ?? null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["methodData"], "name", array()), "html", null, true);
            echo "(";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["methodData"], "arguments", array()));
            foreach ($context['_seq'] as $context["key"] => $context["argument"]) {
                echo "\$";
                echo twig_escape_filter($this->env, $this->getAttribute($context["argument"], "name", array()), "html", null, true);
                if ((twig_length_filter($this->env, $this->getAttribute($context["methodData"], "arguments", array())) != ($context["key"] + 1))) {
                    echo ", ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['argument'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ");
    }
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['methodData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "}
";
    }

    public function getTemplateName()
    {
        return "OroTestGeneratorBundle:Tests:unit_template.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 67,  237 => 64,  234 => 63,  224 => 60,  214 => 56,  203 => 51,  201 => 50,  199 => 49,  197 => 48,  185 => 46,  181 => 45,  176 => 43,  173 => 42,  169 => 41,  127 => 39,  114 => 35,  104 => 31,  102 => 30,  100 => 29,  98 => 28,  94 => 27,  87 => 23,  82 => 21,  79 => 20,  70 => 17,  65 => 15,  62 => 14,  58 => 13,  52 => 11,  45 => 9,  36 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTestGeneratorBundle:Tests:unit_template.php.twig", "");
    }
}
