<?php

/* OroEntityBundle:Entities:detailed.html.twig */
class __TwigTemplate_e750a514f1366bd3d3b2a7b9306d544babbede3ce8f87c4510e6b274c572ed9d extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityBundle:Entities:detailed.html.twig", 1);
        // line 2
        echo "
<style>
    .entity-info {min-height: 380px;}
</style>

<div class=\"widget-content entity-info form-horizontal box-content row-fluid\">
    <div class=\"span6\">
        ";
        // line 9
        if (twig_length_filter($this->env, ($context["dynamic"] ?? null))) {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dynamic"] ?? null));
            foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                // line 11
                echo "                ";
                echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["label"]), $context["item"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        // line 14
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Entities:detailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  46 => 13,  37 => 11,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityBundle:Entities:detailed.html.twig", "");
    }
}
