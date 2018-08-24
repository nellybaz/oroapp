<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3bfec72e624544bebef7f6b74ee6c98dec990aefa89cb027a85e931ca174f770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'header' => array($this, 'block_header'),
            'before_content' => array($this, 'block_before_content'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($context["status_code"] ?? null) == 403)) ? ("OroUIBundle:Default:index.html.twig") : ("TwigBundle::layout.html.twig")), "TwigBundle:Exception:exception_full.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["pageTitle"] = ((((($context["status_code"] ?? null) . " ") . ($context["status_text"] ?? null)) . " - ") . $this->getAttribute(($context["exception"] ?? null), "message", array()));

        $this->env->getExtension("oro_title")->set(array("titleTemplate" =>         // line 4
($context["pageTitle"] ?? null), "force" => true));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_head_script($context, array $blocks = array())
    {
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
    }

    // line 12
    public function block_before_content($context, array $blocks = array())
    {
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo ")
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 23)->display($context);
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"alert alert-block pagination-centered popup-box\">
        <h1>";
        // line 28
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</h1>
        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/503.png"), "html", null, true);
        echo "\" alt=\"Error page\" />
    </div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  87 => 28,  84 => 27,  81 => 26,  76 => 23,  73 => 22,  62 => 19,  59 => 18,  54 => 15,  49 => 12,  44 => 9,  39 => 6,  35 => 1,  33 => 4,  30 => 3,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:exception_full.html.twig", "");
    }
}
