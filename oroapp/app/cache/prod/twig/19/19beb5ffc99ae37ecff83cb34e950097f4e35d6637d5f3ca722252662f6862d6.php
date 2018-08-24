<?php

/* OroActionBundle:Operation:button.html.twig */
class __TwigTemplate_9a53320c15fefd7ae9cf0f4523ce5afeb16208a2efd3ce7387fd61165dfb3c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'button' => array($this, 'block_button'),
            'link' => array($this, 'block_link'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["linkTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["params"] ?? null), "frontendOptions", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "frontendOptions", array(), "any", false, true), "title", array()), $this->getAttribute(($context["params"] ?? null), "label", array()))) : ($this->getAttribute(($context["params"] ?? null), "label", array()))));
        // line 2
        $context["linkLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["params"] ?? null), "label", array()));
        // line 3
        $context["isAjax"] = false;
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('button', $context, $blocks);
    }

    public function block_button($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["options"] = $this->env->getExtension('Oro\Bundle\ActionBundle\Twig\OperationExtension')->getFrontendOptions(($context["button"] ?? null));
        // line 7
        echo "    ";
        $context["buttonOptions"] = $this->getAttribute(($context["options"] ?? null), "options", array());
        // line 8
        echo "    ";
        if ( !((array_key_exists("onlyLink", $context)) ? (_twig_default_filter(($context["onlyLink"] ?? null), false)) : (false))) {
            echo "<div class=\"pull-left btn-group icons-holder\">";
        }
        // line 9
        echo "        ";
        $this->displayBlock('link', $context, $blocks);
        // line 30
        echo "    ";
        if ( !((array_key_exists("onlyLink", $context)) ? (_twig_default_filter(($context["onlyLink"] ?? null), false)) : (false))) {
            echo "</div>";
        }
    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        // line 10
        echo "            <a ";
        if ($this->getAttribute(($context["params"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["params"] ?? null), "id", array()), "html", null, true);
            echo "\"";
        }
        // line 11
        echo "                href=\"javascript:void(0);\"
                class=\"";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "class", array()), "back icons-holder-text operation-button")) : ("back icons-holder-text operation-button")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("aClass", $context)) ? (_twig_default_filter(($context["aClass"] ?? null), "")) : ("")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "aCss", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "aCss", array()), "")) : ("")), "html", null, true);
        echo "\"
                title=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["linkTitle"] ?? null), "html", null, true);
        echo "\"
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["options"] ?? null), "data", array()));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 15
            echo "                    data-";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, ((twig_test_iterable($context["value"])) ? (twig_jsonencode_filter($context["value"])) : ($context["value"])), "html", null, true);
            echo "\"
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                data-operation-url=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["buttonOptions"] ?? null), "url", array()), "html", null, true);
        echo "\"
                data-options=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["buttonOptions"] ?? null)), "html", null, true);
        echo "\"
                data-page-component-module=\"oroaction/js/app/components/button-component\"
                ";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["button"] ?? null), "buttonContext", array()), "enabled", array())) {
            // line 21
            echo "                    disabled=\"disabled\"
                ";
        }
        // line 23
        echo "            >
                ";
        // line 24
        if (($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "icon", array(), "any", true, true) || $this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "iCss", array(), "any", true, true))) {
            // line 25
            echo "                    <i class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "icon", array()), "")) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "iCss", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "buttonOptions", array(), "any", false, true), "iCss", array()), "")) : ("")), "html", null, true);
            echo " hide-text\"></i>
                ";
        }
        // line 27
        echo "                ";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["linkLabel"] ?? null)), "html", null, true);
        echo "
            </a>
        ";
    }

    public function getTemplateName()
    {
        return "OroActionBundle:Operation:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 27,  118 => 25,  116 => 24,  113 => 23,  109 => 21,  107 => 20,  102 => 18,  97 => 17,  86 => 15,  82 => 14,  78 => 13,  70 => 12,  67 => 11,  60 => 10,  57 => 9,  50 => 30,  47 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 5,  27 => 4,  25 => 3,  23 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActionBundle:Operation:button.html.twig", "");
    }
}
