<?php

/* OroRFPBundle:Action:rfpResubmitForm.html.twig */
class __TwigTemplate_3e6a2bdbd98b3f5a97b82aa67d60b20e15db31811b8b2381fb06159710160b93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroRFPBundle:Action:rfpEditForm.html.twig", "OroRFPBundle:Action:rfpResubmitForm.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroRFPBundle:Action:rfpEditForm.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroRFPBundle:Action:rfpResubmitForm.html.twig", 4)->display(array_merge($context, array("title" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["operation"] ?? null), "definition", array()), "label", array())) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["entity"] ?? null))))));
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:Action:rfpResubmitForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:Action:rfpResubmitForm.html.twig", "");
    }
}
