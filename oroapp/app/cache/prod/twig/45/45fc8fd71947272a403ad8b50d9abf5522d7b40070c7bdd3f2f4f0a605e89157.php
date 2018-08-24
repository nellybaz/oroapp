<?php

/* OroEmailBundle:EmailTemplate:update.html.twig */
class __TwigTemplate_c0ecb0b28dd64e2b28964407d50cb6c2c81f0023358df89686be2b4e331b4306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEmailBundle:EmailTemplate:update.html.twig", 1);
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
        $context["pageComponent"] = array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "oroemail/js/app/views/email-template-editor-view"), "layout" => "separate");
        // line 7
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroEmailBundle:Form:fields.html.twig"));
        // line 11
        $context["_emailMacros"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:EmailTemplate:update.html.twig", 11);
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 13
($context["form"] ?? null), "vars", array()), "value", array()), "name", array()))));
        }
        // line 16
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_emailtemplate_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 17
($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_emailtemplate_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_navButtons($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_emailtemplate_preview")) {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_emailtemplate_preview", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 24
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailtemplate.action.preview"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailtemplate.action.preview"), "aCss" => "btn-success dialog-form-renderer no-hash", "iCss" => "fa-share-square-o")), "method"), "html", null, true);
            // line 29
            echo "
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_emailtemplate_clone"))) {
            // line 33
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_emailtemplate_clone", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 34
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailtemplate.action.clone"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailtemplate.action.clone"), "aCss" => "btn-success", "iCss" => "fa-share-square-o")), "method"), "html", null, true);
            // line 39
            echo "
        ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "isSystem", array()) == false)) {
            // line 44
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
                // line 45
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_emailtemplate", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 46
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_emailtemplate_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-emailtemplate", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 50
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailtemplate.entity_label"))), "method"), "html", null, true);
                // line 52
                echo "
        ";
            }
            // line 54
            echo "    ";
        }
        // line 55
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "isEditable", array())) {
            // line 56
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 58
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_emailtemplate_index")), "method"), "html", null, true);
        echo "
    ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "isEditable", array())) {
            // line 60
            echo "        ";
            $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_email_emailtemplate_index")), "method");
            // line 61
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_emailtemplate_create")) {
                // line 62
                echo "            ";
                $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_email_emailtemplate_create")), "method"));
                // line 65
                echo "        ";
            }
            // line 66
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_emailtemplate_update"))) {
                // line 67
                echo "            ";
                $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_email_emailtemplate_update", "params" => array("id" => "\$id"))), "method"));
                // line 71
                echo "        ";
            }
            // line 72
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
            echo "
    ";
        }
    }

    // line 76
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 78
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 79
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_emailtemplate_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailtemplate.entity_plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailtemplate.edit_entity", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 82
($context["form"] ?? null), "vars", array()), "value", array()), "name", array()))));
            // line 84
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 86
            echo "        ";
            $context["title"] = ((($context["isClone"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailtemplate.clone_entity")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailtemplate.entity_label")))));
            // line 89
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroEmailBundle:EmailTemplate:update.html.twig", 89)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 90
            echo "    ";
        }
    }

    // line 93
    public function block_content_data($context, array $blocks = array())
    {
        // line 94
        echo "    ";
        $context["id"] = "emailtemplate-edit";
        // line 95
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 102
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'), 1 =>         // line 103
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'row', array("attr" => array("class" => "choice-template-type"))), 2 =>         // line 104
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "entityName", array()), 'row'))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Template data"), "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "translations", array()), 'widget'))), 1 => array("title" => "", "data" => array(0 =>         // line 120
$context["_emailMacros"]->getrenderAvailableVariablesWidget($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "entityName", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "entityName", array()), "vars", array()), "id", array())))))));
        // line 125
        echo "
    ";
        // line 126
        $context["data"] = array("formErrors" => ((        // line 127
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 128
($context["dataBlocks"] ?? null));
        // line 131
        echo "
    ";
        // line 132
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:EmailTemplate:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 132,  191 => 131,  189 => 128,  188 => 127,  187 => 126,  184 => 125,  182 => 120,  181 => 114,  180 => 104,  179 => 103,  178 => 102,  176 => 95,  173 => 94,  170 => 93,  165 => 90,  162 => 89,  159 => 86,  153 => 84,  151 => 82,  150 => 79,  148 => 78,  145 => 77,  142 => 76,  134 => 72,  131 => 71,  128 => 67,  125 => 66,  122 => 65,  119 => 62,  116 => 61,  113 => 60,  111 => 59,  106 => 58,  100 => 56,  97 => 55,  94 => 54,  90 => 52,  88 => 50,  87 => 46,  85 => 45,  82 => 44,  80 => 43,  77 => 42,  72 => 40,  69 => 39,  67 => 34,  65 => 33,  63 => 32,  60 => 31,  56 => 29,  54 => 24,  52 => 23,  49 => 22,  46 => 21,  42 => 1,  40 => 17,  39 => 16,  36 => 13,  33 => 12,  31 => 11,  29 => 7,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:EmailTemplate:update.html.twig", "");
    }
}
