<?php

/* OroImapBundle:Connection:checkMailbox.html.twig */
class __TwigTemplate_ab4d731bb80ec08136177ec647e39a74df782038f9663e09c1af9786ed87fd63 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "origin", array(), "any", false, true), "folders", array(), "any", true, true)) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "origin", array()), "folders", array()), 'row');
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
        return "OroImapBundle:Connection:checkMailbox.html.twig";
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
        return new Twig_Source("", "OroImapBundle:Connection:checkMailbox.html.twig", "");
    }
}
