<?php

/* OroActionBundle:Widget:_widget.html.twig */
class __TwigTemplate_87620ec7d2dd1fa24fb414565864510ef8a99cbcdfc7489ce564822d0bdc7232 extends Twig_Template
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
        if ($this->env->getExtension('Oro\Bundle\ActionBundle\Twig\OperationExtension')->hasButtons(($context["params"] ?? null))) {
            // line 2
            echo "    <div class=\"pull-left\">
        ";
            // line 3
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->env->getExtension('Oro\Bundle\ActionBundle\Twig\OperationExtension')->getWidgetRoute(),             // line 5
($context["params"] ?? null)), "alias" => "action_buttons_widget"));
            // line 7
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroActionBundle:Widget:_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  25 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActionBundle:Widget:_widget.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/ActionBundle/Resources/views/Widget/_widget.html.twig");
    }
}
