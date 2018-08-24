<?php

/* OroTagBundle:Taxonomy:view.html.twig */
class __TwigTemplate_a0b8da4e1e101b51503f8bb924d8c0d2754c72443f19365faa4651471241f6a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroTagBundle:Taxonomy:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navButtons($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_taxonomy_update", array("id" => $this->getAttribute(            // line 6
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.taxonomy.entity_label"))), "method"), "html", null, true);
            // line 8
            echo "
    ";
        }
        // line 10
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_taxonomy", array("id" => $this->getAttribute(            // line 12
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_taxonomy_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-taxonomy", "dataId" => $this->getAttribute(            // line 16
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.taxonomy.entity_label"))), "method"), "html", null, true);
            // line 18
            echo "
    ";
        }
    }

    // line 22
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 24
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_taxonomy_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.taxonomy.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 27
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")));
        // line 29
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 32
    public function block_content_data($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.taxonomy.widgets.taxonomy_information"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_taxonomy_widget_info", array("id" => $this->getAttribute(        // line 37
($context["entity"] ?? null), "id", array())))));
        // line 38
        echo "
    ";
        $context["taxonomyInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        echo "
    ";
        // line 41
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.taxonomy.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 47
($context["taxonomyInformationWidget"] ?? null))))));
        // line 52
        echo "
    ";
        // line 53
        $context["id"] = "taxonomyView";
        // line 54
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 55
        echo "
    ";
        // line 56
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTagBundle:Taxonomy:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 56,  101 => 55,  98 => 54,  96 => 53,  93 => 52,  91 => 47,  90 => 41,  87 => 40,  83 => 38,  81 => 37,  79 => 34,  76 => 33,  73 => 32,  66 => 29,  64 => 27,  63 => 24,  61 => 23,  58 => 22,  52 => 18,  50 => 16,  49 => 12,  47 => 11,  44 => 10,  40 => 8,  38 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTagBundle:Taxonomy:view.html.twig", "");
    }
}
