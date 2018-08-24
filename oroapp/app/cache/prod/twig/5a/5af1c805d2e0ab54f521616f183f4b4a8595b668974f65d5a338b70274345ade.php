<?php

/* OroNoteBundle:Note/js:list.html.twig */
class __TwigTemplate_b3b3ee5c686108c0c99e7b1b562de2eaf75b9740e5a8d5549f3f92c0b768e3c2 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html_attr");
        echo "\">
    <div class=\"items list-box\"></div>
    <div class=\"no-data\">
        <span>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.no_notes_exist"), "html");
        echo "</span>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroNoteBundle:Note/js:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNoteBundle:Note/js:list.html.twig", "");
    }
}
