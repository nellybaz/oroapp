<?php

/* OroOrganizationBundle:Organization:update.html.twig */
class __TwigTemplate_377ef79f6f2310a7dbfc15bafabda8c2482f4760985afcacfd506eb76b281a1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroOrganizationBundle:Organization:update.html.twig", 1);
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%organization.name%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "name", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.entity_label"))));
        // line 5
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 6
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_organization_update_current");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_organization_update")) {
            // line 10
            echo "        ";
            $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_organization_update_current")), "method");
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
            echo "
    ";
        }
    }

    // line 15
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 17
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 18
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_organization_update_current"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.entity_label"), "entityTitle" => $this->getAttribute(            // line 21
($context["entity"] ?? null), "name", array()));
            // line 23
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 25
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.organization.entity_label")));
            // line 26
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroOrganizationBundle:Organization:update.html.twig", 26)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 27
            echo "    ";
        }
    }

    // line 30
    public function block_content_data($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["id"] = "organization-form";
        // line 32
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 39
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", array()), 'row'), 1 =>         // line 40
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'), 2 =>         // line 41
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row'), 3 => (($this->getAttribute(        // line 42
($context["form"] ?? null), "owner", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row')) : ("")))))));
        // line 47
        echo "
    ";
        // line 48
        $context["additionalData"] = array();
        // line 49
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 50
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 51
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 53
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 58
($context["additionalData"] ?? null))))));
            // line 61
            echo "    ";
        }
        // line 62
        echo "
    ";
        // line 63
        $context["data"] = array("formErrors" => ((        // line 64
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 65
($context["dataBlocks"] ?? null));
        // line 67
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:Organization:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 67,  132 => 65,  131 => 64,  130 => 63,  127 => 62,  124 => 61,  122 => 58,  120 => 53,  117 => 52,  110 => 51,  107 => 50,  101 => 49,  99 => 48,  96 => 47,  94 => 42,  93 => 41,  92 => 40,  91 => 39,  89 => 32,  86 => 31,  83 => 30,  78 => 27,  75 => 26,  72 => 25,  66 => 23,  64 => 21,  63 => 18,  61 => 17,  58 => 16,  55 => 15,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  34 => 1,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrganizationBundle:Organization:update.html.twig", "");
    }
}
