<?php

/* OroActionBundle:Widget:updateNavButtons.html.twig */
class __TwigTemplate_3e190e373ccecf72733b8b0289293eb8b3733b46999d20d4afc0070e134e8b35 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroActionBundle:Widget:updateNavButtons.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["params"] = twig_array_merge($this->env->getExtension('Oro\Bundle\ActionBundle\Twig\OperationExtension')->getActionParameters($context), array("group" => "update_navButtons"));
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("OroActionBundle:Widget:_widget.html.twig", "OroActionBundle:Widget:updateNavButtons.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        if ($this->env->getExtension('Oro\Bundle\ActionBundle\Twig\OperationExtension')->hasButtons(($context["params"] ?? null))) {
            // line 8
            echo "    ";
            echo $context["UI"]->getbuttonSeparator();
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroActionBundle:Widget:updateNavButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActionBundle:Widget:updateNavButtons.html.twig", "");
    }
}
