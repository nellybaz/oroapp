<?php

/* OroDistributionBundle:Settings:repo_prototype.html.twig */
class __TwigTemplate_e0d6e1b26cf826cf410e07b65020c839bc242fd43ef94f0b486754b9462c445a extends Twig_Template
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
        echo "<div class=\"field\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["repo"] ?? null), "type", array()), 'widget');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["repo"] ?? null), "url", array()), 'widget', array("attr" => array("class" => "selector", "placeholder" => "URL")));
        echo "

    <a href=\"#\" onclick=\"javascript:\$(this).parent('div').remove();\" class=\"delete-action\" title=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.action.delete"), "html", null, true);
        echo "\">
        <i class=\"fa-trash-o hide-text\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.action.delete"), "html", null, true);
        echo "</i>
    </a>
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["repo"] ?? null), "url", array()), 'errors');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "OroDistributionBundle:Settings:repo_prototype.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDistributionBundle:Settings:repo_prototype.html.twig", "");
    }
}
