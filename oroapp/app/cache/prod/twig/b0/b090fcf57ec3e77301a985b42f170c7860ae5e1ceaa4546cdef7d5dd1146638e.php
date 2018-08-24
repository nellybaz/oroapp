<?php

/* OroDistributionBundle:Settings:index.html.twig */
class __TwigTemplate_408ee0c3feaa3934ddfa08ded7d638ec3d9f61d459c821fe2bf28a68b5df1b3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDistributionBundle::base_inner.html.twig", "OroDistributionBundle:Settings:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDistributionBundle::base_inner.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.menu.composer_settings"), "html", null, true);
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "    <a id=\"back-to-installed\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_distribution_package_listinstalled");
        echo "\">
        <i class=\"fa-reply\"></i>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to Installed Packages"), "html", null, true);
        echo "
    </a>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (($context["saved"] ?? null)) {
            // line 14
            echo "        <div class=\"alert fade in alert-success\">
            <i class=\"fa-success\"></i>
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.messages.settings_saved"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        $this->loadTemplate("OroDistributionBundle:Settings:settings_form.html.twig", "OroDistributionBundle:Settings:index.html.twig", 21)->display(array_merge($context, array("form" => ($context["form"] ?? null))));
    }

    public function getTemplateName()
    {
        return "OroDistributionBundle:Settings:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  69 => 20,  63 => 17,  58 => 14,  55 => 13,  52 => 12,  45 => 8,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDistributionBundle:Settings:index.html.twig", "");
    }
}
