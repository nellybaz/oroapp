<?php

/* OroSegmentBundle:Segment:index.html.twig */
class __TwigTemplate_111d471e84e669d461445016babacd53bfed61780c338af19946006e23386611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroSegmentBundle:Segment:index.html.twig", 1);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSegmentBundle:Segment:index.html.twig", 2);
        // line 3
        $context["gridName"] = "oro_segments-grid";
        // line 4
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_segment_create"))) {
            // line 8
            echo "        ";
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_segment_create"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.entity_label")));
            // line 11
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroSegmentBundle:Segment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  41 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSegmentBundle:Segment:index.html.twig", "");
    }
}