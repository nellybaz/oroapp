<?php

/* OroCaseBundle:Case:update.html.twig */
class __TwigTemplate_436d1d7f320f02b2094f1b4275b11856b2c45c5b03e8e07584adf1384a1d81e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCaseBundle:Case:update.html.twig", 1);
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.subject%" => $this->getAttribute(        // line 2
($context["entity"] ?? null), "subject", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.entity_label"))));
        // line 4
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 5
        $context["formAction"] = ((($context["entityId"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_update", array("id" => ($context["entityId"] ?? null)))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_case_view", "params" => array("id" => "\$id"))), "method");
        // line 12
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_case_create")) {
            // line 13
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_case_create")), "method"));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_case_update")) {
            // line 18
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_case_update", "params" => array("id" => "\$id"))), "method"));
            // line 22
            echo "    ";
        }
        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_index")), "method"), "html", null, true);
        echo "
";
    }

    // line 27
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 29
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 30
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 33
($context["entity"] ?? null), "subject", array()));
            // line 35
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 37
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.entity_label")));
            // line 38
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCaseBundle:Case:update.html.twig", 38)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 39
            echo "    ";
        }
    }

    // line 42
    public function block_content_data($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $context["id"] = "case-form";
        // line 44
        echo "
    ";
        // line 45
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.block.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 52
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "subject", array()), 'row'), 1 =>         // line 53
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row'), 2 =>         // line 54
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "resolution", array()), 'row'), 3 => (($this->getAttribute(        // line 55
($context["form"] ?? null), "owner", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row')) : ("")), 4 =>         // line 56
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "assignedTo", array()), 'row'), 5 =>         // line 57
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "source", array()), 'row'), 6 =>         // line 58
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "status", array()), 'row'), 7 =>         // line 59
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priority", array()), 'row'), 8 =>         // line 60
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "relatedContact", array()), 'row'), 9 =>         // line 61
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "relatedAccount", array()), 'row'))))));
        // line 66
        echo "
    ";
        // line 67
        $context["additionalData"] = array();
        // line 68
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 69
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 70
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 72
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.block.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 77
($context["additionalData"] ?? null))))));
            // line 80
            echo "    ";
        }
        // line 81
        echo "
    ";
        // line 82
        $context["data"] = array("formErrors" => ((        // line 83
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 84
($context["dataBlocks"] ?? null));
        // line 86
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCaseBundle:Case:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 86,  158 => 84,  157 => 83,  156 => 82,  153 => 81,  150 => 80,  148 => 77,  146 => 72,  143 => 71,  136 => 70,  133 => 69,  127 => 68,  125 => 67,  122 => 66,  120 => 61,  119 => 60,  118 => 59,  117 => 58,  116 => 57,  115 => 56,  114 => 55,  113 => 54,  112 => 53,  111 => 52,  110 => 45,  107 => 44,  104 => 43,  101 => 42,  96 => 39,  93 => 38,  90 => 37,  84 => 35,  82 => 33,  81 => 30,  79 => 29,  76 => 28,  73 => 27,  67 => 24,  62 => 23,  59 => 22,  56 => 18,  53 => 17,  50 => 16,  47 => 13,  44 => 12,  41 => 8,  38 => 7,  34 => 1,  32 => 5,  30 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCaseBundle:Case:update.html.twig", "");
    }
}
