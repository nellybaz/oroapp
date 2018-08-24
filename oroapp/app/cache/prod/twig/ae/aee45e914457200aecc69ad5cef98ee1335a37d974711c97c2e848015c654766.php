<?php

/* OroCMSBundle:ContentBlock:index.html.twig */
class __TwigTemplate_91b65174dcd3063e78a27aad5361390b37c575366423b08f1817192b0108af13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroCMSBundle:ContentBlock:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCMSBundle:ContentBlock:index.html.twig", 2);
        // line 4
        $context["gridName"] = "cms-content-block-grid";
        // line 5
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_cms_content_block_create")) {
            // line 9
            echo "        <div class=\"btn-group\">
            ";
            // line 10
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_content_block_create"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.entity_label")));
            // line 13
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:ContentBlock:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 4,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:ContentBlock:index.html.twig", "");
    }
}