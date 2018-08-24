<?php

/* OroWorkflowBundle:actions:update.html.twig */
class __TwigTemplate_244718e1e501f66aed6114963d48223ee097b4ee8bb8c152b26d6c70fbcdcf05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroWorkflowBundle:actions:update.html.twig", 1);
        $this->blocks = array(
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_data($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => "general", "subblocks" => array(0 => array("data" => array(0 =>         // line 8
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget'))))));
        // line 12
        echo "    
    ";
        // line 13
        $context["id"] = "transition-form-edit";
        // line 14
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 15
        echo "
    ";
        // line 16
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:actions:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,  43 => 15,  40 => 14,  38 => 13,  35 => 12,  33 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:actions:update.html.twig", "");
    }
}
