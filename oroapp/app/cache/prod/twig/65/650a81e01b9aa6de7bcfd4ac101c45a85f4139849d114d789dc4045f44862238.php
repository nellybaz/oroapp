<?php

/* OroEntityConfigBundle:Config:update.html.twig */
class __TwigTemplate_dd2459f531863c49135e5d1050db21e9b1082dff4acea6413c74056134bc2bc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityConfigBundle:Config:update.html.twig", 1);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle:Config:update.html.twig", 2);
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), "OroFormBundle:Form:fields.html.twig");

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 4
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))))));
        // line 6
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        // line 8
        $context["audit_entity_class"] = twig_replace_filter($this->getAttribute(($context["entity"] ?? null), "classname", array()), "\\", "_");
        // line 9
        $context["audit_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")));
        // line 10
        $context["audit_path"] = "oro_entityconfig_audit";
        // line 11
        $context["audit_entity_id"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 12
        $context["audit_show_change_history"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_navButtons($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_entityconfig_manage")) {
            // line 16
            echo "        ";
            echo $context["UI"]->getcancelButton($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_view", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))));
            echo "
        ";
            // line 17
            $context["html"] = $context["UI"]->getsaveAndCloseButton(array("route" => "oro_entityconfig_view", "params" => array("id" => "\$id")));
            // line 21
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_entityextend_entity_create")) {
                // line 22
                echo "            ";
                $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndNewButton(array("route" => "oro_entityextend_entity_create")));
                // line 25
                echo "        ";
            }
            // line 26
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $context["UI"]->getsaveAndStayButton(array("route" => "oro_entityconfig_update", "params" => array("id" => "\$id"))));
            // line 30
            echo "        ";
            echo $context["UI"]->getdropdownSaveButton(array("html" => ($context["html"] ?? null)));
            echo "
    ";
        }
    }

    // line 34
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.entity.plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 39
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))));
        // line 41
        echo "
    ";
        // line 42
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 45
    public function block_stats($context, array $blocks = array())
    {
        // line 46
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "created", array()));
        echo "</li>
    <li>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updated", array()));
        echo "</li>
    ";
        // line 48
        if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
            // line 49
            echo "        <li>
            ";
            // line 50
            echo $context["UI"]->getlink(array("path" =>             // line 51
($context["link"] ?? null), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.info.records_count.label", array("%count%" => ((            // line 52
array_key_exists("entity_count", $context)) ? (_twig_default_filter(($context["entity_count"] ?? null), 0)) : (0))))));
            // line 53
            echo "
        </li>
    ";
        } else {
            // line 56
            echo "        <li>
            <span>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.info.records_count.label", array("%count%" => ((array_key_exists("entity_count", $context)) ? (_twig_default_filter(($context["entity_count"] ?? null), 0)) : (0)))), "html", null, true);
            echo "</span>
        </li>
    ";
        }
    }

    // line 62
    public function block_content_data($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        $context["id"] = "configentity-update";
        // line 64
        echo "    ";
        $context["dataBlocks"] = $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormDataBlocks($this->env, $context, ($context["form"] ?? null));
        // line 65
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 67
($context["dataBlocks"] ?? null));
        // line 69
        echo "
    ";
        // line 70
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 70,  155 => 69,  153 => 67,  152 => 66,  150 => 65,  147 => 64,  144 => 63,  141 => 62,  133 => 57,  130 => 56,  125 => 53,  123 => 52,  122 => 51,  121 => 50,  118 => 49,  116 => 48,  110 => 47,  103 => 46,  100 => 45,  94 => 42,  91 => 41,  89 => 39,  87 => 35,  84 => 34,  76 => 30,  73 => 26,  70 => 25,  67 => 22,  64 => 21,  62 => 17,  57 => 16,  54 => 15,  51 => 14,  47 => 1,  45 => 12,  43 => 11,  41 => 10,  39 => 9,  37 => 8,  35 => 6,  33 => 4,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Config:update.html.twig", "");
    }
}
