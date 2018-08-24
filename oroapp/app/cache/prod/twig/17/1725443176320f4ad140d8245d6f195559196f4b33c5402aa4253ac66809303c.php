<?php

/* OroEntityConfigBundle:AttributeFamily:familyField.html.twig */
class __TwigTemplate_ed2c2614a0ad30b4ff8fd5a89d7eff08c736531f39da8e00e1c59a9de28e518d extends Twig_Template
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
        if ($this->getAttribute(($context["form"] ?? null), "attributeFamily", array(), "any", true, true)) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attributeFamily", array()), 'row');
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:AttributeFamily:familyField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:AttributeFamily:familyField.html.twig", "");
    }
}
