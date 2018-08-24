<?php

/* OroHangoutsCallBundle:Call:updateActions.html.twig */
class __TwigTemplate_32a60f24ffd52f9ef14acc2ebeafcd9041815f97be28ab9a3001fff510fec978 extends Twig_Template
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
        $context["HangoutsCall"] = $this->loadTemplate("OroHangoutsCallBundle::macros.html.twig", "OroHangoutsCallBundle:Call:updateActions.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ( !array_key_exists("hangoutOptions", $context)) {
            // line 4
            echo "    ";
            $context["hangoutOptions"] = array();
        }
        // line 6
        if (( !twig_test_empty(($context["entity"] ?? null)) &&  !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "phoneNumber", array())))) {
            // line 7
            echo "    ";
            // line 8
            echo "    ";
            if (preg_match("{^.+@.+..+\$}", $this->getAttribute(($context["entity"] ?? null), "phoneNumber", array()))) {
                // line 9
                echo "        ";
                $context["hangoutOptions"] = twig_array_merge(($context["hangoutOptions"] ?? null), array("invites" => array(0 => array("id" => twig_escape_filter($this->env, $this->getAttribute(                // line 11
($context["entity"] ?? null), "phoneNumber", array()), "html"), "invite_type" => "EMAIL"))));
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "        ";
                $context["hangoutOptions"] = twig_array_merge(($context["hangoutOptions"] ?? null), array("invites" => array(0 => array("id" => twig_escape_filter($this->env, $this->getAttribute(                // line 18
($context["entity"] ?? null), "phoneNumber", array()), "html"), "invite_type" => "PHONE"))));
                // line 22
                echo "    ";
            }
        }
        // line 24
        echo "
";
        // line 25
        echo $context["HangoutsCall"]->getrenderStartButton(array("class" => "action btn-group", "componentModule" => "orohangoutscall/js/app/components/log-call-component", "componentName" => "log-hangout-call-component", "dataAttributes" => array("action-name" => "hangout-call"), "hangoutOptions" =>         // line 32
($context["hangoutOptions"] ?? null)));
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroHangoutsCallBundle:Call:updateActions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 33,  56 => 32,  55 => 25,  52 => 24,  48 => 22,  46 => 18,  44 => 16,  41 => 15,  39 => 11,  37 => 9,  34 => 8,  32 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroHangoutsCallBundle:Call:updateActions.html.twig", "");
    }
}
