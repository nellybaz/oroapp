<?php

/* OroEmbeddedFormBundle:EmbeddedForm:update.html.twig */
class __TwigTemplate_ca623c9bcb2e944beb05d10115b0a8749de65b74ddc84ef489280d3d3fa6b746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEmbeddedFormBundle:EmbeddedForm:update.html.twig", 1);
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
        // line 3
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_create")));

        $this->env->getExtension("oro_title")->set(array("params" => array("%form.title%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 4
($context["form"] ?? null), "vars", array()), "value", array()), "title", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.entity_label"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_embedded_form_delete"))) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_delete", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 9
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_list"), "aCss" => "no-hash remove-button", "id" => "btn-remove-embedded-form", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 13
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.entity_label"))), "method"), "html", null, true);
            // line 15
            echo "
        ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_list"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"))), "method"), "html", null, true);
        echo "

    ";
        // line 20
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "formType", array()), "vars", array()), "choices", array()))) {
            // line 21
            echo "        ";
            $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_embedded_form_view", "params" => array("id" => "\$id"))), "method");
            // line 25
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_embedded_form_create")) {
                // line 26
                echo "            ";
                $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_embedded_form_create")), "method"));
                // line 29
                echo "        ";
            }
            // line 30
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_embedded_form_update")) {
                // line 31
                echo "            ";
                $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_embedded_form_update", "params" => array("id" => "\$id"))), "method"));
                // line 35
                echo "        ";
            }
            // line 36
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
            echo "
    ";
        }
    }

    // line 40
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 42
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 43
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_list"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.entity_plural_label"), "entityTitle" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 46
($context["form"] ?? null), "vars", array()), "value", array()), "title", array()));
            // line 48
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 50
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.entity_label")));
            // line 51
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroEmbeddedFormBundle:EmbeddedForm:update.html.twig", 51)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 52
            echo "    ";
        }
    }

    // line 55
    public function block_content_data($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $context["id"] = "embedded-form";
        // line 57
        echo "
    ";
        // line 58
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "formType", array()), "vars", array()), "choices", array()))) {
            // line 59
            echo "        ";
            $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Embedded Form"), "data" => array(0 =>             // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'row'), 1 =>             // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "formType", array()), 'row'), 2 =>             // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "css", array()), 'row', array("attr" => array("class" => "span12"))), 3 =>             // line 68
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "successMessage", array()), 'row'), 4 =>             // line 69
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "allowedDomains", array()), 'row'))))));
            // line 73
            echo "
        ";
            // line 74
            $context["data"] = array("formErrors" => ((            // line 75
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>             // line 76
($context["dataBlocks"] ?? null));
            // line 78
            echo "        ";
            $context["componentOptions"] = array("view" => "oroembeddedform/js/embedded-form-watcher", "formTypeFieldId" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 80
($context["form"] ?? null), "formType", array()), "vars", array()), "id", array())), "cssFieldId" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 81
($context["form"] ?? null), "css", array()), "vars", array()), "id", array())), "successMessageFieldId" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 82
($context["form"] ?? null), "successMessage", array()), "vars", array()), "id", array())), "defaultCss" =>             // line 83
($context["defaultCss"] ?? null), "defaultSuccessMessage" =>             // line 84
($context["defaultSuccessMessage"] ?? null), "forceDataLoading" => ((twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(            // line 85
($context["form"] ?? null), "formType", array()), "vars", array()), "value", array()))) ? (true) : (false)));
            // line 87
            echo "
        <div data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["componentOptions"] ?? null)), "html", null, true);
            echo "\">
        </div>
        ";
            // line 91
            $this->displayParentBlock("content_data", $context, $blocks);
            echo "
    ";
        } else {
            // line 93
            echo "        <div class=\"container-fluid\">
            <div class=\"grid-container\">
                <div class=\"no-data\">
                    <span>";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.no_types_available"), "html", null, true);
            echo "</span>
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEmbeddedFormBundle:EmbeddedForm:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 96,  169 => 93,  164 => 91,  159 => 89,  155 => 87,  153 => 85,  152 => 84,  151 => 83,  150 => 82,  149 => 81,  148 => 80,  146 => 78,  144 => 76,  143 => 75,  142 => 74,  139 => 73,  137 => 69,  136 => 68,  135 => 67,  134 => 66,  133 => 65,  131 => 59,  129 => 58,  126 => 57,  123 => 56,  120 => 55,  115 => 52,  112 => 51,  109 => 50,  103 => 48,  101 => 46,  100 => 43,  98 => 42,  95 => 41,  92 => 40,  84 => 36,  81 => 35,  78 => 31,  75 => 30,  72 => 29,  69 => 26,  66 => 25,  63 => 21,  61 => 20,  55 => 18,  50 => 16,  47 => 15,  45 => 13,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmbeddedFormBundle:EmbeddedForm:update.html.twig", "");
    }
}
