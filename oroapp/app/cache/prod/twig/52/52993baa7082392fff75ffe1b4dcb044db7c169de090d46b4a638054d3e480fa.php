<?php

/* OroImapBundle:Form:accountTypeOther.html.twig */
class __TwigTemplate_4167e84741250b734cc4e98e9a3ee10df1dce5de70caa353dcb92a46713bca0d extends Twig_Template
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
        echo "<fieldset class=\"form-horizontal\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array(), "any", false, true), "accountType", array(), "any", true, true)) {
            // line 3
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "accountType", array()), 'row');
            echo "
    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array(), "any", false, true), "imapConfiguration", array(), "any", true, true)) {
            // line 7
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "imapConfiguration", array()), 'widget');
            echo "
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array(), "any", false, true), "userEmailOrigin", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), 'widget');
            echo "
    ";
        }
        // line 13
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "OroImapBundle:Form:accountTypeOther.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  46 => 11,  44 => 10,  41 => 9,  35 => 7,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImapBundle:Form:accountTypeOther.html.twig", "");
    }
}
