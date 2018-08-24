<?php

/* OroProductBundle:Product:createStepOne.html.twig */
class __TwigTemplate_beae6f7216418600a0de3c22100a3c9d66b48da73b7de5bff94f42cdb29ce0f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroProductBundle:Product:createStepOne.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'page_widget_actions' => array($this, 'block_page_widget_actions'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroProductBundle:Product:createStepOne.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array()));
        // line 6
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_create");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_index")), "method"), "html", null, true);
        echo "
    ";
        // line 12
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "buttonType", array(0 => array("type" => "submit", "class" => "btn-success main-group", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.ui.continue"), "action" => "oro_product_create")), "method");
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 21
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_label")));
        // line 23
        echo "    ";
        $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroProductBundle:Product:createStepOne.html.twig", 23)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
    }

    // line 26
    public function block_page_widget_actions($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.ui.continue"), "html", null, true);
        echo "</button>
    </div>
";
    }

    // line 33
    public function block_content_data($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context["id"] = "product-create-step-one";
        // line 35
        echo "
    ";
        // line 36
        $context["generalData"] = array(0 =>         // line 37
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'row'));
        // line 39
        echo "
    ";
        // line 40
        if ((array_key_exists("isWidgetContext", $context) && ($context["isWidgetContext"] ?? null))) {
            // line 41
            echo "        ";
            $context["generalData"] = twig_array_merge(($context["generalData"] ?? null), array(0 => "<input type=\"hidden\" name=\"input_action\" value=\"oro_product_create\">"));
            // line 42
            echo "    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $context["data"] = array("formErrors" =>         // line 45
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sections.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" =>         // line 52
($context["generalData"] ?? null))))));
        // line 57
        echo "
    ";
        // line 58
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product:createStepOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 58,  118 => 57,  116 => 52,  115 => 45,  114 => 44,  111 => 43,  108 => 42,  105 => 41,  103 => 40,  100 => 39,  98 => 37,  97 => 36,  94 => 35,  91 => 34,  88 => 33,  81 => 29,  77 => 28,  74 => 27,  71 => 26,  66 => 23,  63 => 22,  60 => 21,  53 => 18,  51 => 12,  47 => 11,  41 => 9,  38 => 8,  34 => 1,  32 => 6,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product:createStepOne.html.twig", "");
    }
}
