<?php

/* OroEntityConfigBundle:Config/widget:uniqueKeys.html.twig */
class __TwigTemplate_abc65a4a89641ebcdf3759b759b0bdfc6abeef73499add0362e8542c661947e7 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle:Config/widget:uniqueKeys.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 6
        if ( !twig_test_empty($this->getAttribute(($context["unique_key"] ?? null), "keys", array()))) {
            // line 7
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["unique_key"] ?? null), "keys", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 8
                echo "                    ";
                echo $context["ui"]->getrenderProperty($this->getAttribute($context["key"], "name", array()), twig_join_filter($this->getAttribute($context["key"], "key", array()), ", "));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            ";
        } else {
            // line 11
            echo "                <div class=\"container-fluid\">
                    ";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("No unique keys found.", array(), "messages");
            // line 13
            echo "                </div>
            ";
        }
        // line 15
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config/widget:uniqueKeys.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  51 => 13,  49 => 12,  46 => 11,  43 => 10,  34 => 8,  29 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Config/widget:uniqueKeys.html.twig", "");
    }
}
