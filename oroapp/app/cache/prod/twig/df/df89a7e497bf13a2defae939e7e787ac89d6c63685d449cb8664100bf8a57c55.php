<?php

/* OroUIBundle::page_title_block.html.twig */
class __TwigTemplate_aae57ad53bff1aabf23468d927ba72336d048aa39849f3bb49e0f5b64aadd7e9 extends Twig_Template
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
        if (array_key_exists("title", $context)) {
            // line 2
            echo "    <div class=\"pull-left\">
        <h1 class=\"oro-subtitle\">";
            // line 3
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h1>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUIBundle::page_title_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle::page_title_block.html.twig", "");
    }
}
