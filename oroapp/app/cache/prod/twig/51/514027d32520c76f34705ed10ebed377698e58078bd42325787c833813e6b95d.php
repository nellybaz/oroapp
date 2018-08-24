<?php

/* OroUserBundle:Mail:reset.html.twig */
class __TwigTemplate_c0d27010cd04ddc363a99679ff53cb91c5e0e321a1e84c169e6b8faa849c68e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUserBundle:Mail:layout.html.twig", "OroUserBundle:Mail:reset.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUserBundle:Mail:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Hello, ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "!</h1>

";
        // line 6
        $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("oro_user_reset_reset", array("token" => $this->getAttribute(($context["user"] ?? null), "confirmationToken", array())));
        // line 7
        echo "
<p>To reset your password - please visit <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "</a></p>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Mail:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Mail:reset.html.twig", "");
    }
}
