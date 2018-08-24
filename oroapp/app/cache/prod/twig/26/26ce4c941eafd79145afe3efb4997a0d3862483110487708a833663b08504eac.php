<?php

/* OroApiBundle:ApiDoc:input.html.twig */
class __TwigTemplate_1d4e7cea615e95675b4ff95e463fd39428c37a7bab9fb5729f951a31c6a4fc34 extends Twig_Template
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
        echo "<h4>Input</h4>
<table class='fullwidth input'>
    <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Description</th>
    </tr>
    </thead>
        <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
            // line 12
            echo "            ";
            if ( !$this->getAttribute($context["infos"], "readonly", array())) {
                // line 13
                echo "                <tr>
                    <td>";
                // line 14
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                    <td>";
                // line 15
                echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "dataType", array(), "any", true, true)) ? (($this->getAttribute($context["infos"], "dataType", array()) . ((($this->getAttribute($context["infos"], "subType", array(), "any", true, true) && $this->getAttribute($context["infos"], "subType", array()))) ? (((" (" . $this->getAttribute($context["infos"], "subType", array())) . ")")) : ("")))) : ("")), "html", null, true);
                echo "</td>
                    <td>";
                // line 16
                echo (($this->getAttribute($context["infos"], "description", array(), "any", true, true)) ? ($this->env->getExtension('Oro\Bundle\ApiBundle\Twig\MarkdownExtension')->markdown($this->getAttribute($context["infos"], "description", array()))) : (""));
                echo "</td>
                </tr>
            ";
            }
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "OroApiBundle:ApiDoc:input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  55 => 19,  49 => 16,  45 => 15,  41 => 14,  38 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroApiBundle:ApiDoc:input.html.twig", "");
    }
}
