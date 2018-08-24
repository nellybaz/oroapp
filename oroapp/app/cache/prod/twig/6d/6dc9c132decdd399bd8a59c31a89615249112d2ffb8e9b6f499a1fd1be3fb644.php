<?php

/* OroUserBundle:Status:create.html.twig */
class __TwigTemplate_1dd412c5f29faec1b89d3cc9377ecc028c0aafbe6f7ad1a73864aee753327cd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["bap"] ?? null), "layout", array(), "any", true, true)) ? ($this->getAttribute(($context["bap"] ?? null), "layout", array())) : ("OroUserBundle::layout.html.twig")), "OroUserBundle:Status:create.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_status_create");
        echo "\" method=\"POST\" class=\"form-status\">
        <fieldset>
            <legend>Add status</legend>

            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

            <div class=\"form-row\">
                <button class=\"btn btn-large btn-primary\" type=\"submit\">Save</button>
            </div>
        </fieldset>
    </form>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Status:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Status:create.html.twig", "");
    }
}
