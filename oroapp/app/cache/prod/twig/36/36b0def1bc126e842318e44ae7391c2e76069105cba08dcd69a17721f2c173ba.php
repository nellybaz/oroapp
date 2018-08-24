<?php

/* OroWorkflowBundle:Button:transitionButton.html.twig */
class __TwigTemplate_9e0984b9beaff0a8af7baba86c0e7ef7d15abdce73945641a8689ec09ce7ff6e extends Twig_Template
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
        $context["workflowMacros"] = $this->loadTemplate("OroWorkflowBundle::macros.html.twig", "OroWorkflowBundle:Button:transitionButton.html.twig", 1);
        // line 2
        echo "
";
        // line 4
        $context["transitionMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["button"] ?? null), "transition", array()), "message", array()), array(), $this->getAttribute(($context["button"] ?? null), "translationDomain", array()));
        // line 5
        if ((($context["transitionMessage"] ?? null) == $this->getAttribute($this->getAttribute(($context["button"] ?? null), "transition", array()), "message", array()))) {
            // line 6
            echo "    ";
            // line 7
            echo "    ";
            $context["transitionMessage"] = "";
        }
        // line 9
        echo "
";
        // line 10
        $context["transitionData"] = array("message" => nl2br(twig_escape_filter($this->env,         // line 11
($context["transitionMessage"] ?? null), "html", null, true)), "transition-condition-messages" => $this->getAttribute($this->getAttribute(        // line 12
($context["button"] ?? null), "buttonContext", array()), "errors", array()), "enabled" => $this->getAttribute($this->getAttribute(        // line 13
($context["button"] ?? null), "buttonContext", array()), "enabled", array()), "transition-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(        // line 14
($context["executionRoute"] ?? null), ($context["routeParams"] ?? null)));
        // line 16
        echo "
";
        // line 17
        $context["transitionData"] = twig_array_merge((($this->getAttribute(($context["frontendOptions"] ?? null), "data", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["frontendOptions"] ?? null), "data", array()), array())) : (array())), ($context["transitionData"] ?? null));
        // line 18
        if (($context["hasForm"] ?? null)) {
            // line 19
            echo "    ";
            if (($context["showDialog"] ?? null)) {
                // line 20
                echo "        ";
                $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("dialog-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["dialogRoute"] ?? null), ($context["routeParams"] ?? null))));
                // line 21
                echo "    ";
            } else {
                // line 22
                echo "        ";
                $context["transitionData"] = twig_array_merge(($context["transitionData"] ?? null), array("transition-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["dialogRoute"] ?? null), ($context["routeParams"] ?? null))));
                // line 23
                echo "    ";
            }
        }
        // line 25
        if ( !((array_key_exists("onlyLink", $context)) ? (_twig_default_filter(($context["onlyLink"] ?? null), false)) : (false))) {
            echo "<div class=\"pull-left btn-group icons-holder\">";
        }
        // line 26
        echo "    ";
        echo $context["workflowMacros"]->getrenderTransitionButton($this->getAttribute(        // line 27
($context["button"] ?? null), "workflow", array()), $this->getAttribute(        // line 28
($context["button"] ?? null), "transition", array()), ((        // line 29
array_key_exists("workflowItem", $context)) ? (_twig_default_filter(($context["workflowItem"] ?? null), null)) : (null)),         // line 30
($context["transitionData"] ?? null), ((        // line 31
array_key_exists("onlyLink", $context)) ? (_twig_default_filter(($context["onlyLink"] ?? null), false)) : (false)), ((        // line 32
array_key_exists("noIcon", $context)) ? (_twig_default_filter(($context["noIcon"] ?? null), false)) : (false)), ((        // line 33
array_key_exists("noIconText", $context)) ? (_twig_default_filter(($context["noIconText"] ?? null), false)) : (false)), ((        // line 34
array_key_exists("aClass", $context)) ? (_twig_default_filter(($context["aClass"] ?? null), "")) : ("")));
        // line 35
        echo "
";
        // line 36
        if ( !((array_key_exists("onlyLink", $context)) ? (_twig_default_filter(($context["onlyLink"] ?? null), false)) : (false))) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Button:transitionButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 36,  81 => 35,  79 => 34,  78 => 33,  77 => 32,  76 => 31,  75 => 30,  74 => 29,  73 => 28,  72 => 27,  70 => 26,  66 => 25,  62 => 23,  59 => 22,  56 => 21,  53 => 20,  50 => 19,  48 => 18,  46 => 17,  43 => 16,  41 => 14,  40 => 13,  39 => 12,  38 => 11,  37 => 10,  34 => 9,  30 => 7,  28 => 6,  26 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Button:transitionButton.html.twig", "");
    }
}
