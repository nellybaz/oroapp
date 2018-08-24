<?php

/* OroEntityMergeBundle:Merge:merge.html.twig */
class __TwigTemplate_10b5585f15c38820bf41a29de71b2b5a8ace558e525c1eebd592290a69216e70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityMergeBundle:Merge:merge.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityMergeBundle:Merge:merge.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("{{ label }}" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(        // line 4
($context["entityLabel"] ?? null)))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo $context["UI"]->getcancelButton($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->addUrlQuery(($context["cancelPath"] ?? null)));
        echo "
    ";
        // line 8
        echo $context["UI"]->getsaveAndStayButton($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_merge.form.merge_button"));
        echo "
";
    }

    // line 11
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroEntityMergeBundle:Merge:merge.html.twig", 12)->display($context);
    }

    // line 15
    public function block_content_data($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["id"] = "entity-merge";
        // line 17
        echo "
    ";
        // line 18
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_merge.form.merge_values"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 25
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("class" => "select2"))))))));
        // line 29
        echo "
    ";
        // line 30
        $context["data"] = array("formErrors" => ((        // line 31
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 32
($context["dataBlocks"] ?? null));
        // line 34
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityMergeBundle:Merge:merge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 34,  75 => 32,  74 => 31,  73 => 30,  70 => 29,  68 => 25,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  53 => 12,  50 => 11,  44 => 8,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityMergeBundle:Merge:merge.html.twig", "");
    }
}
