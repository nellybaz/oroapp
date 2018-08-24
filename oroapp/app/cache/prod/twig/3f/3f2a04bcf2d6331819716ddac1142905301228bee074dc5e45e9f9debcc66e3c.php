<?php

/* OroImapBundle:Connection:check.html.twig */
class __TwigTemplate_ca688c68d8dcac878cc42cccc42144293d2a43a811777f36aa047848af36b6a5 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapConfiguration", array(), "any", false, true), "folders", array(), "any", true, true)) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapConfiguration", array()), "folders", array()), 'row');
            echo "
";
        }
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array(), "any", false, true), "userEmailOrigin", array(), "any", false, true), "folders", array(), "any", true, true)) {
            // line 6
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "folders", array()), 'row');
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroImapBundle:Connection:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImapBundle:Connection:check.html.twig", "");
    }
}
