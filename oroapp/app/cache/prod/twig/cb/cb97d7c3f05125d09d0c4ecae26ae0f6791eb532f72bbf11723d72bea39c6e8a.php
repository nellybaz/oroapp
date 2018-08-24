<?php

/* OroTestGeneratorBundle:Tests:functional_template.php.twig */
class __TwigTemplate_95483ebaa65061229d98fa1366bf979a752bf38478802c6e55d78a33ed68e43f extends Twig_Template
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
        echo " extends WebTestCase
{
    protected function setUp()
    {
        \$this->initClient([], \$this->generateBasicAuthHeader());
        \$this->loadFixtures([]);
    }
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["methodsData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["methodData"]) {
            // line 19
            echo "
    public function ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["methodData"], "testName", array()), "html", null, true);
            echo "()
    {
        //TODO: add test assertions
    }
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['methodData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "}
";
    }

    public function getTemplateName()
    {
        return "OroTestGeneratorBundle:Tests:functional_template.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  70 => 20,  67 => 19,  63 => 18,  52 => 11,  45 => 9,  36 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTestGeneratorBundle:Tests:functional_template.php.twig", "");
    }
}
