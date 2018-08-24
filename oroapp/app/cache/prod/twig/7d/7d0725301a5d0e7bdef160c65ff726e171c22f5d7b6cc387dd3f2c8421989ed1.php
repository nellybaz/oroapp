<?php

/* OroUIBundle::widget_loader.html.twig */
class __TwigTemplate_a27223275153f7315c4df24c2a38cc772d50afd27c908e4746db005f3c232e61 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle::widget_loader.html.twig", 1);
        // line 2
        $context["widgetComponentOptions"] = array("type" =>         // line 3
($context["widgetType"] ?? null), "options" =>         // line 4
($context["options"] ?? null));
        // line 6
        echo "
";
        // line 7
        $context["content"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->getAttribute(($context["options"] ?? null), "url", array()));
        // line 8
        if (twig_length_filter($this->env, ($context["content"] ?? null))) {
            // line 9
            echo "    ";
            $context["separateLayout"] = ( !$this->getAttribute(($context["options"] ?? null), "separateLayout", array(), "any", true, true) || $this->getAttribute(($context["options"] ?? null), "separateLayout", array()));
            // line 10
            echo "    ";
            ob_start();
            // line 11
            echo "        ";
            if (($context["separateLayout"] ?? null)) {
                echo " data-layout=\"separate\"";
            }
            // line 12
            echo "    ";
            $context["separateLayoutContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["elementId"] ?? null), "html", null, true);
            echo "\" ";
            echo $context["UI"]->getrenderWidgetAttributes(($context["widgetComponentOptions"] ?? null));
            echo twig_escape_filter($this->env, ($context["separateLayoutContent"] ?? null), "html", null, true);
            echo ">
        ";
            // line 14
            if ($this->getAttribute(($context["options"] ?? null), "elementFirst", array())) {
                // line 15
                echo "            ";
                echo ($context["content"] ?? null);
                echo "
        ";
            }
            // line 17
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUIBundle::widget_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  56 => 15,  54 => 14,  46 => 13,  43 => 12,  38 => 11,  35 => 10,  32 => 9,  30 => 8,  28 => 7,  25 => 6,  23 => 4,  22 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle::widget_loader.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/widget_loader.html.twig");
    }
}
