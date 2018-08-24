<?php

/* OroContactBundle:Contact:update.html.twig */
class __TwigTemplate_774a958c7eb73c32dde3159320c0ad166b68dc442f6e2d38734ba1fbaa2f8055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroContactBundle:Contact:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroContactBundle:Contact:update.html.twig", 2);
        // line 4
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroContactBundle:Include:fields.html.twig", 1 => "OroFormBundle:Form:fields.html.twig"));
        // line 5
        $context["fullname"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["entity"] ?? null)), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity.item", array("%id%" => $this->getAttribute(($context["entity"] ?? null), "id", array()))));

        $this->env->getExtension("oro_title")->set(array("params" => array("%contact.name%" =>         // line 6
($context["fullname"] ?? null))));
        // line 8
        $context["gridName"] = "contact-accounts-grid";
        // line 9
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_navButtons($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_contact", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 14
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-contact", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 18
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.entity_label"))), "method"), "html", null, true);
            // line 20
            echo "
        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_index")), "method"), "html", null, true);
        echo "
    ";
        // line 24
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_contact_view", "params" => array("id" => "\$id"))), "method");
        // line 28
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_contact_create")) {
            // line 29
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_contact_create")), "method"));
            // line 32
            echo "    ";
        }
        // line 33
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_contact_update"))) {
            // line 34
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_contact_update", "params" => array("id" => "\$id"))), "method"));
            // line 38
            echo "    ";
        }
        // line 39
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 42
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 44
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 45
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.entity_plural_label"), "entityTitle" =>             // line 48
($context["fullname"] ?? null));
            // line 51
            echo "        ";
            $context["avatar"] = $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getConfiguredImageUrl($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "picture");
            // line 52
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 54
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.entity_label")));
            // line 55
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroContactBundle:Contact:update.html.twig", 55)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 56
            echo "    ";
        }
    }

    // line 59
    public function block_stats($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        $this->loadTemplate("OroContactBundle:Contact:headerStats.html.twig", "OroContactBundle:Contact:update.html.twig", 60)->display(array_merge($context, array("entity" => ($context["entity"] ?? null))));
    }

    // line 63
    public function block_content_data($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $context["id"] = "contact-profile";
        // line 65
        echo "
    ";
        // line 66
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Information"), "data" => array(0 =>         // line 73
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "namePrefix", array()), 'row'), 1 =>         // line 74
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row'), 2 =>         // line 75
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "middleName", array()), 'row'), 3 =>         // line 76
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row'), 4 =>         // line 77
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameSuffix", array()), 'row'), 5 =>         // line 78
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row'), 6 =>         // line 79
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "assignedTo", array()), 'row'), 7 =>         // line 80
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reportsTo", array()), 'row'), 8 =>         // line 81
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "emails", array()), 'row'), 9 =>         // line 82
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phones", array()), 'row'), 10 =>         // line 83
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fax", array()), 'row'), 11 =>         // line 84
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "skype", array()), 'row'), 12 =>         // line 85
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "method", array()), 'row'), 13 =>         // line 86
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "twitter", array()), 'row'), 14 =>         // line 87
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "facebook", array()), 'row'), 15 =>         // line 88
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "googlePlus", array()), 'row'), 16 =>         // line 89
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "linkedIn", array()), 'row'), 17 =>         // line 90
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "jobTitle", array()), 'row'), 18 =>         // line 91
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "birthday", array()), 'row'), 19 =>         // line 92
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "gender", array()), 'row'), 20 =>         // line 93
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "source", array()), 'row'), 21 =>         // line 94
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "picture", array()), 'row'))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.addresses.label"), "data" => array(0 =>         // line 100
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "addresses", array()), 'widget'))))));
        // line 106
        echo "
    ";
        // line 107
        $context["additionalData"] = array();
        // line 108
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 109
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 110
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 112
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 117
($context["additionalData"] ?? null))))));
            // line 120
            echo "    ";
        }
        // line 121
        echo "
    ";
        // line 122
        if (($this->getAttribute(($context["form"] ?? null), "groups", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "groups", array()), "children", array())) > 0))) {
            // line 123
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.groups.label"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>             // line 131
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "groups", array()), 'row', array("attr" => array("class" => "horizontal")))))))));
            // line 136
            echo "    ";
        }
        // line 137
        echo "
    ";
        // line 138
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.accounts.label"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 146
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appendAccounts", array()), 'widget', array("id" => "appendAccounts")), 1 =>         // line 147
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removeAccounts", array()), 'widget', array("id" => "removeAccounts")), 2 =>         // line 148
$context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), array("contact" => (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) : (null))), array("cssClass" => "inner-grid"))))))));
        // line 153
        echo "
    ";
        // line 154
        $context["data"] = array("formErrors" => ((        // line 155
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 156
($context["dataBlocks"] ?? null));
        // line 158
        echo "    <div class=\"responsive-form-inner\">
        ";
        // line 159
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroContactBundle:Contact:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 159,  227 => 158,  225 => 156,  224 => 155,  223 => 154,  220 => 153,  218 => 148,  217 => 147,  216 => 146,  215 => 138,  212 => 137,  209 => 136,  207 => 131,  205 => 123,  203 => 122,  200 => 121,  197 => 120,  195 => 117,  193 => 112,  190 => 111,  183 => 110,  180 => 109,  174 => 108,  172 => 107,  169 => 106,  167 => 100,  166 => 94,  165 => 93,  164 => 92,  163 => 91,  162 => 90,  161 => 89,  160 => 88,  159 => 87,  158 => 86,  157 => 85,  156 => 84,  155 => 83,  154 => 82,  153 => 81,  152 => 80,  151 => 79,  150 => 78,  149 => 77,  148 => 76,  147 => 75,  146 => 74,  145 => 73,  144 => 66,  141 => 65,  138 => 64,  135 => 63,  130 => 60,  127 => 59,  122 => 56,  119 => 55,  116 => 54,  110 => 52,  107 => 51,  105 => 48,  104 => 45,  102 => 44,  99 => 43,  96 => 42,  89 => 39,  86 => 38,  83 => 34,  80 => 33,  77 => 32,  74 => 29,  71 => 28,  69 => 24,  64 => 23,  59 => 21,  56 => 20,  54 => 18,  53 => 14,  51 => 13,  48 => 12,  45 => 11,  41 => 1,  39 => 9,  37 => 8,  35 => 6,  32 => 5,  30 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactBundle:Contact:update.html.twig", "");
    }
}
