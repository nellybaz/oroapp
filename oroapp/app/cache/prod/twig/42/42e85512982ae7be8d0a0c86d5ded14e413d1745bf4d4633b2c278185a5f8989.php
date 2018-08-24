<?php

/* OroRFPBundle:Action:rfpEditForm.html.twig */
class __TwigTemplate_3bca915eda3170b602c3c5124bf793c8d345f6c9b5b19720dde313f2b018f339 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:page.html.twig", "OroRFPBundle:Action:rfpEditForm.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroActionBundle:Operation:page.html.twig";
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
        if (($context["entity"] ?? null)) {
            // line 5
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 6
($context["entity"] ?? null), "indexPath" =>             // line 7
($context["fromUrl"] ?? null), "indexLabel" =>             // line 8
($context["entityLabel"] ?? null), "entityTitle" => ((            // line 9
array_key_exists("entity", $context)) ? (_twig_default_filter(($context["entity"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 11
            echo "
        ";
            // line 12
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 14
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroRFPBundle:Action:rfpEditForm.html.twig", 14)->display(array_merge($context, array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["operation"] ?? null), "definition", array()), "label", array())))));
            // line 15
            echo "    ";
        }
    }

    // line 18
    public function block_content_data($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        ob_start();
        // line 20
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "requestProducts", array()), 'widget');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "requestProducts", array()), 'errors');
        echo "
    ";
        $context["lineItems"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    ";
        // line 24
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 30
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "firstName", array()), 'row'), 1 =>         // line 31
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "lastName", array()), 'row'), 2 =>         // line 32
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "email", array()), 'row'), 3 =>         // line 33
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "phone", array()), 'row'), 4 =>         // line 34
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "company", array()), 'row'), 5 =>         // line 35
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "role", array()), 'row'), 6 =>         // line 36
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "customer", array()), 'row'), 7 =>         // line 37
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "customerUser", array()), 'row'), 8 =>         // line 38
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "note", array()), 'row'), 9 =>         // line 39
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "poNumber", array()), 'row'), 10 =>         // line 40
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "shipUntil", array()), 'row'), 11 =>         // line 41
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "assignedUsers", array()), 'row'), 12 =>         // line 42
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "request", array()), "assignedCustomerUsers", array()), 'row'))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.sections.request_products"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 51
($context["lineItems"] ?? null))))));
        // line 56
        echo "
    ";
        // line 57
        $context["data"] = array("formErrors" =>         // line 58
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 59
($context["dataBlocks"] ?? null));
        // line 61
        echo "
    ";
        // line 62
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:Action:rfpEditForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 62,  100 => 61,  98 => 59,  97 => 58,  96 => 57,  93 => 56,  91 => 51,  90 => 42,  89 => 41,  88 => 40,  87 => 39,  86 => 38,  85 => 37,  84 => 36,  83 => 35,  82 => 34,  81 => 33,  80 => 32,  79 => 31,  78 => 30,  77 => 24,  74 => 23,  69 => 21,  64 => 20,  61 => 19,  58 => 18,  53 => 15,  50 => 14,  45 => 12,  42 => 11,  40 => 9,  39 => 8,  38 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:Action:rfpEditForm.html.twig", "");
    }
}
