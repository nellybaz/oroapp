<?php

/* OroContactBundle:Group:update.html.twig */
class __TwigTemplate_2cfdcea0719d06246deb4a5eca9e7d86d17390c21ffecd6b4bcf612217445a47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroContactBundle:Group:update.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroContactBundle:Group:update.html.twig", 2);
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%group.label%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 4
($context["form"] ?? null), "vars", array()), "value", array()), "label", array()))));
        }
        // line 7
        $context["gridName"] = "contact-group-contacts-grid";
        // line 8
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_group_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_group_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_navButtons($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_contactgroup", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 13
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_group_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-contact-group", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 17
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.group.entity_label"))), "method"), "html", null, true);
            // line 19
            echo "
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 22
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_group_index")), "method"), "html", null, true);
        echo "
    ";
        // line 23
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_contact_group_index")), "method");
        // line 26
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_contact_group_create")) {
            // line 27
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_contact_group_create")), "method"));
            // line 30
            echo "    ";
        }
        // line 31
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_contact_group_update"))) {
            // line 32
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_contact_group_update", "params" => array("id" => "\$.id"))), "method"));
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
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
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_group_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.group.entity_plural_label"), "entityTitle" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 46
($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "label", array()), "N/A")) : ("N/A")));
            // line 49
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.group.entity_label")));
            // line 52
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroContactBundle:Group:update.html.twig", 52)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 53
            echo "    ";
        }
    }

    // line 56
    public function block_content_data($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $context["id"] = "contact-group-profile";
        // line 58
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Basic Information"), "data" => array(0 =>         // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row'))))));
        // line 70
        echo "
    ";
        // line 71
        if (($context["showContactsGrid"] ?? null)) {
            // line 72
            echo "        ";
            $context["gridParams"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? (array("group" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))) : (array()));
            // line 73
            echo "        ";
            $context["gridData"] = $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["gridParams"] ?? null), array("cssClass" => "inner-grid"));
            // line 74
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.entity_plural_label"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>             // line 82
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appendContacts", array()), 'widget', array("id" => "groupAppendContacts")), 1 =>             // line 83
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removeContacts", array()), 'widget', array("id" => "groupRemoveContacts")), 2 =>             // line 84
($context["gridData"] ?? null)))))));
            // line 89
            echo "    ";
        }
        // line 90
        echo "
    ";
        // line 91
        $context["data"] = array("formErrors" => ((        // line 92
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 93
($context["dataBlocks"] ?? null));
        // line 95
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroContactBundle:Group:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 95,  157 => 93,  156 => 92,  155 => 91,  152 => 90,  149 => 89,  147 => 84,  146 => 83,  145 => 82,  143 => 74,  140 => 73,  137 => 72,  135 => 71,  132 => 70,  130 => 65,  128 => 58,  125 => 57,  122 => 56,  117 => 53,  114 => 52,  111 => 51,  105 => 49,  103 => 46,  102 => 43,  100 => 42,  97 => 41,  94 => 40,  87 => 37,  84 => 36,  81 => 32,  78 => 31,  75 => 30,  72 => 27,  69 => 26,  67 => 23,  62 => 22,  57 => 20,  54 => 19,  52 => 17,  51 => 13,  49 => 12,  46 => 11,  43 => 10,  39 => 1,  37 => 8,  35 => 7,  32 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactBundle:Group:update.html.twig", "");
    }
}
