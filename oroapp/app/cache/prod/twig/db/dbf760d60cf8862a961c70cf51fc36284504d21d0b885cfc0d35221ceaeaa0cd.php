<?php

/* OroCommentBundle:Comment/js:list.html.twig */
class __TwigTemplate_cb44a5d45cd0f8468e7c4a69a1ddface40d97b196f7f7cd0ead7e5478ffd36cf extends Twig_Template
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
        // line 2
        echo "<script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, (($context["id"] ?? null) . "-form"), "html_attr");
        echo "\">
    ";
        // line 3
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->prepareJsTemplateContent($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_comment_form")));
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "OroCommentBundle:Comment/js:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommentBundle:Comment/js:list.html.twig", "");
    }
}
