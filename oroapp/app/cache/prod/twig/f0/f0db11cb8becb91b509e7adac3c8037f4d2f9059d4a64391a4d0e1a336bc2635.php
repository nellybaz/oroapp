<?php

/* OroUserBundle:Form:fields.html.twig */
class __TwigTemplate_05693f38c1987bed338c97caf286771303595dbe7f75745115f9dae0688c9f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_entity_create_or_select_inline_js_acl_user_autocomplete' => array($this, 'block_oro_entity_create_or_select_inline_js_acl_user_autocomplete'),
            'oro_type_widget_owners_row' => array($this, 'block_oro_type_widget_owners_row'),
            'oro_user_apikey_gen_row' => array($this, 'block_oro_user_apikey_gen_row'),
            'oro_user_apikey_gen_key_row' => array($this, 'block_oro_user_apikey_gen_key_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_entity_create_or_select_inline_js_acl_user_autocomplete', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('oro_type_widget_owners_row', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('oro_user_apikey_gen_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('oro_user_apikey_gen_key_row', $context, $blocks);
    }

    // line 1
    public function block_oro_entity_create_or_select_inline_js_acl_user_autocomplete($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle:Form:fields.html.twig", 2);
        // line 3
        echo "    ";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "configs", array(), "any", false, true), "async_dialogs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "configs", array(), "any", false, true), "async_dialogs", array()), false)) : (false)) === true)) {
            // line 4
            echo "        ";
            $context["asyncNameSegment"] = "async-";
            // line 5
            echo "    ";
        }
        // line 6
        echo "    ";
        $context["gridParameters"] = twig_array_merge($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "grid_parameters", array()), array("permission" => $this->getAttribute(        // line 7
($context["configs"] ?? null), "permission", array()), "entity" => $this->getAttribute(        // line 8
($context["configs"] ?? null), "entity_name", array()), "entity_id" => $this->getAttribute(        // line 9
($context["configs"] ?? null), "entity_id", array())));
        // line 11
        echo "
    ";
        // line 12
        $context["urlParts"] = array("grid" => array("route" => "oro_datagrid_widget", "parameters" => array("gridName" => $this->getAttribute($this->getAttribute(        // line 16
($context["form"] ?? null), "vars", array()), "grid_name", array()), "params" =>         // line 17
($context["gridParameters"] ?? null), "renderParams" => $this->getAttribute($this->getAttribute(        // line 18
($context["form"] ?? null), "vars", array()), "grid_render_parameters", array()))));
        // line 22
        echo "
    ";
        // line 23
        if (((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)) === true)) {
            // line 24
            echo "    ";
            $context["urlParts"] = twig_array_merge(($context["urlParts"] ?? null), array("create" => array("route" => $this->getAttribute($this->getAttribute(            // line 26
($context["form"] ?? null), "vars", array()), "create_form_route", array()), "parameters" => $this->getAttribute($this->getAttribute(            // line 27
($context["form"] ?? null), "vars", array()), "create_form_route_parameters", array()))));
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => (("orocrmchannel/js/app/components/select-create-inline-type-" . ((        // line 32
array_key_exists("asyncNameSegment", $context)) ? (_twig_default_filter(($context["asyncNameSegment"] ?? null), "")) : (""))) . "component"), "options" => array("_sourceElement" => (("#" .         // line 34
($context["id"] ?? null)) . "-el"), "inputSelector" => ("#" .         // line 35
($context["id"] ?? null)), "entityLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(        // line 36
($context["label"] ?? null)), "urlParts" =>         // line 37
($context["urlParts"] ?? null), "existingEntityGridId" => (($this->getAttribute($this->getAttribute(        // line 38
($context["form"] ?? null), "vars", array(), "any", false, true), "existing_entity_grid_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "existing_entity_grid_id", array()), "id")) : ("id")), "createEnabled" => (($this->getAttribute($this->getAttribute(        // line 39
($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)))));
        // line 41
        echo " style=\"display: none\"></div>
";
    }

    // line 44
    public function block_oro_type_widget_owners_row($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 46
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 50
    public function block_oro_user_apikey_gen_row($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "apiKey", array()), 'row', array("apiKeyElementId" => ($context["apiKeyElementId"] ?? null)));
        echo "
    <button class=\"btn btn-mini no-hash\" id=\"btn-apigen\" title=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate key"), "html", null, true);
        echo "\" type=\"submit\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate key"), "html", null, true);
        echo "</button>
    ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 58
    public function block_oro_user_apikey_gen_key_row($context, array $blocks = array())
    {
        // line 59
        echo "    <span class=\"api-key\" id=\"";
        echo twig_escape_filter($this->env, ($context["apiKeyElementId"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, ($context["value"] ?? null)), "N/A"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  149 => 59,  146 => 58,  140 => 55,  134 => 54,  130 => 53,  126 => 52,  121 => 51,  118 => 50,  107 => 46,  102 => 45,  99 => 44,  94 => 41,  92 => 39,  91 => 38,  90 => 37,  89 => 36,  88 => 35,  87 => 34,  86 => 32,  84 => 31,  81 => 30,  79 => 27,  78 => 26,  76 => 24,  74 => 23,  71 => 22,  69 => 18,  68 => 17,  67 => 16,  66 => 12,  63 => 11,  61 => 9,  60 => 8,  59 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  42 => 1,  38 => 58,  35 => 57,  33 => 50,  30 => 49,  28 => 44,  25 => 43,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Form/fields.html.twig");
    }
}
