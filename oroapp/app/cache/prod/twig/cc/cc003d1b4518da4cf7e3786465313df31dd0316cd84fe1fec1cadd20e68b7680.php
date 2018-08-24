<?php

/* OroFrontendBundle:layouts:default/oro_frontend_exception/exception.html.twig */
class __TwigTemplate_2839617f8c060eac1e0a44d6376e937888270d57c888ce2776859bffed512667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_exception_widget' => array($this, 'block__exception_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_exception_widget', $context, $blocks);
    }

    public function block__exception_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 3
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " text-center")));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <h1><span>";
        // line 6
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</h1>
        <p>
            ";
        // line 8
        if ((($context["status_code"] ?? null) == 404)) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend.exception.code.404"), "html", null, true);
            echo "
            ";
        } elseif ((        // line 10
($context["status_code"] ?? null) == 403)) {
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend.exception.code.403"), "html", null, true);
            echo "
            ";
        } else {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend.exception.default"), "html", null, true);
            echo "
            ";
        }
        // line 15
        echo "        </p>
        ";
        // line 16
        if (((($context["status_code"] ?? null) == 404) || (($context["status_code"] ?? null) == 403))) {
            // line 17
            echo "            <p><a href=\"#\" onclick=\"window.history.back(); return false;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend.exception.back"), "html", null, true);
            echo "</a></p>
        ";
        }
        // line 19
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts:default/oro_frontend_exception/exception.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  68 => 17,  66 => 16,  63 => 15,  57 => 13,  51 => 11,  49 => 10,  44 => 9,  42 => 8,  35 => 6,  30 => 5,  28 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts:default/oro_frontend_exception/exception.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/oro_frontend_exception/exception.html.twig");
    }
}
