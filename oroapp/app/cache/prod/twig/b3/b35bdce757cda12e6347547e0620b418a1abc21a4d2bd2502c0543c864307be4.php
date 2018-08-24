<?php

/* OroImapBundle:Form:accountTypeGmail.html.twig */
class __TwigTemplate_3bf75de9e9a6208ab15807971e128903c0966986265cdd49cde6dbeac55fc511 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array(), "any", false, true), "userEmailOrigin", array(), "any", true, true)) {
            // line 3
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 4
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "parent", array()))) {
                // line 5
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), 'errors');
            }
            // line 8
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array(), "any", false, true), "userEmailOrigin", array(), "any", false, true), "check", array(), "any", true, true)) {
                // line 9
                echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
                // line 11
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "check", array()), 'widget');
                echo "
                    </div>
                </div>
            ";
            }
            // line 15
            echo "
            ";
            // line 16
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array(), "any", false, true), "userEmailOrigin", array(), "any", false, true), "checkFolder", array(), "any", true, true)) {
                // line 17
                echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
                // line 19
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), "checkFolder", array()), 'widget');
                echo "
                    </div>
                </div>
            ";
            }
            // line 23
            echo "
            <div class=\"control-group\">
                <div class=\"controls\">
                    <div class=\"google-alert google-connection-status alert alert-error\" style=\"display: none\"></div>
                </div>
            </div>";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "imapAccountType", array()), "userEmailOrigin", array()), 'rest');
            // line 31
            echo "</div>
    ";
        }
        // line 33
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "OroImapBundle:Form:accountTypeGmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 33,  71 => 31,  69 => 30,  62 => 23,  55 => 19,  51 => 17,  49 => 16,  46 => 15,  39 => 11,  35 => 9,  33 => 8,  30 => 5,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroImapBundle:Form:accountTypeGmail.html.twig", "");
    }
}
