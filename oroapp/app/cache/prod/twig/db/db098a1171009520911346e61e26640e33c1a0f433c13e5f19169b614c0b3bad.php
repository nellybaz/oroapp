<?php

/* OroEmailBundle:EmailTemplate:preview.html.twig */
class __TwigTemplate_2078b030dd4daa9932d5b8ed234ae0c54753a312c4a60bd630f5f875356390c3 extends Twig_Template
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
        if ((($context["contentType"] ?? null) == "html")) {
            // line 2
            echo "    ";
            echo ($context["content"] ?? null);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:EmailTemplate:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:EmailTemplate:preview.html.twig", "");
    }
}
