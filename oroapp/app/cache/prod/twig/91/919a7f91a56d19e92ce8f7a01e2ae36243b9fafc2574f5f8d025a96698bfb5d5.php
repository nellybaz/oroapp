<?php

/* OroUserBundle:Group:update.html.twig */
class __TwigTemplate_c16499b11c9f2a93cee43278165efba291a284bd39ce79d09c03ad41acb0124a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroUserBundle:Group:update.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroUserBundle:Group:update.html.twig", 2);
        // line 4
        $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array());

        $this->env->getExtension("oro_title")->set(array("params" => array("%group%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
($context["form"] ?? null), "vars", array()), "value", array()), "name", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.group.entity_label"))));
        // line 6
        $context["gridName"] = "group-users-grid";
        // line 7
        $context["formAction"] = ((($context["entityId"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_group_update", array("id" => ($context["entityId"] ?? null)))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_group_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navButtons($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ((($context["entityId"] ?? null) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())))) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_group", array("id" =>             // line 12
($context["entityId"] ?? null))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_group_index"), "aCss" => "no-hash remove-button", "dataId" =>             // line 15
($context["entityId"] ?? null), "id" => "btn-remove-group", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.group.entity_label"))), "method"), "html", null, true);
            // line 18
            echo "
        ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 21
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_group_index")), "method"), "html", null, true);
        echo "
    ";
        // line 22
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_user_group_index")), "method");
        // line 25
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_group_create")) {
            // line 26
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_user_group_create")), "method"));
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_group_update"))) {
            // line 31
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_user_group_update", "params" => array("id" => "\$id"))), "method"));
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 39
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 41
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 42
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_group_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.group.entity_plural_label"), "entityTitle" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 45
($context["form"] ?? null), "vars", array()), "value", array()), "name", array()));
            // line 47
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 49
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.group.entity_label")));
            // line 50
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroUserBundle:Group:update.html.twig", 50)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 51
            echo "    ";
        }
    }

    // line 54
    public function block_content_data($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        $context["id"] = "group-profile";
        // line 56
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 63
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appendUsers", array()), 'widget', array("id" => "groupAppendUsers")), 1 =>         // line 64
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removeUsers", array()), 'widget', array("id" => "groupRemoveUsers")), 2 =>         // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'))))));
        // line 70
        echo "
    ";
        // line 71
        $context["additionalData"] = array();
        // line 72
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 73
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 74
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 76
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 81
($context["additionalData"] ?? null))))));
            // line 84
            echo "    ";
        }
        // line 85
        echo "
    ";
        // line 86
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.entity_plural_label"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 93
$context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), array("group_id" => ($context["entityId"] ?? null)), array("cssClass" => "inner-grid"))))))));
        // line 97
        echo "
    ";
        // line 98
        $context["data"] = array("formErrors" => ((        // line 99
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 100
($context["dataBlocks"] ?? null));
        // line 102
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Group:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 102,  175 => 100,  174 => 99,  173 => 98,  170 => 97,  168 => 93,  167 => 86,  164 => 85,  161 => 84,  159 => 81,  157 => 76,  154 => 75,  147 => 74,  144 => 73,  138 => 72,  136 => 71,  133 => 70,  131 => 65,  130 => 64,  129 => 63,  127 => 56,  124 => 55,  121 => 54,  116 => 51,  113 => 50,  110 => 49,  104 => 47,  102 => 45,  101 => 42,  99 => 41,  96 => 40,  93 => 39,  86 => 36,  83 => 35,  80 => 31,  77 => 30,  74 => 29,  71 => 26,  68 => 25,  66 => 22,  61 => 21,  56 => 19,  53 => 18,  51 => 15,  50 => 12,  48 => 11,  45 => 10,  42 => 9,  38 => 1,  36 => 7,  34 => 6,  32 => 5,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Group:update.html.twig", "");
    }
}
