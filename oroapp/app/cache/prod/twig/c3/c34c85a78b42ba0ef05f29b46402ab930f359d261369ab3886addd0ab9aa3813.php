<?php

/* OroEntityExtendBundle:ConfigEntityGrid:unique.html.twig */
class __TwigTemplate_8c00b756b1c29dd9e27226e837a5c74fc08b88898502ac841fdcd7f643a29182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityExtendBundle:ConfigEntityGrid:unique.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'unique_collection_widget' => array($this, 'block_unique_collection_widget'),
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), "OroFormBundle:Form:fields.html.twig");
        // line 3
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityextend_entity_unique_key", array("id" => ($context["entity_id"] ?? null)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_navButtons($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_view", array("id" => ($context["entity_id"] ?? null)))), "method"), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"), "route" => "oro_entityconfig_view", "params" => array("id" =>         // line 10
($context["entity_id"] ?? null)))), "method"), "html", null, true);
        // line 11
        echo "
";
    }

    // line 14
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.config_grid.entities"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.config_grid.unique_keys"), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_entityconfig_view", array("id" =>         // line 22
($context["entity_id"] ?? null))), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 23
($context["entity_config"] ?? null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"))))));
        // line 27
        echo "
    ";
        // line 28
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 31
    public function block_stats($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
";
    }

    // line 55
    public function block_unique_collection_widget($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        ob_start();
        // line 57
        echo "        <div class=\"row-oro\">
            <div class=\"oro-address-collection collection-fields-list\" id=\"entity_extend_unique_key_collection\" data-prototype=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this, "unique_collection_prototype", array(0 => $this->getAttribute(($context["form"] ?? null), "keys", array())), "method"));
        echo "\">
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "keys", array()), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 60
            echo "                    ";
            echo $this->getAttribute($this, "unique_collection_prototype", array(0 => $context["field"]), "method");
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </div>
            <a class=\"btn add-list-item pull-left\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "</a>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 68
    public function block_content_data($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        $context["id"] = "configentity-unique";
        // line 70
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.unique_keys"), "class" => "active", "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         $this->renderBlock("unique_collection_widget", $context, $blocks))))));
        // line 84
        echo "
    ";
        // line 85
        $context["data"] = array("formErrors" => ((        // line 86
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 87
($context["dataBlocks"] ?? null), "hiddenData" =>         // line 88
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest'));
        // line 90
        echo "
    ";
        // line 91
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 35
    public function getunique_collection_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 36
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter($this->getAttribute(($context["widget"] ?? null), "vars", array())))) {
                // line 37
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 38
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 39
                echo "    ";
            } else {
                // line 40
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 41
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 42
                echo "    ";
            }
            // line 43
            echo "    <div data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
        <div class=\"row-oro oro-multiselect-holder unique-keys\">
            <a class=\"removeRow pull-right\" href=\"javascript: void(0);\" type=\"button\" data-related=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                <i class=\"fa-close\"></i>
            </a>
            ";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
            ";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row');
            echo "
            ";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "key", array()), 'row');
            echo "
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:ConfigEntityGrid:unique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 50,  192 => 49,  188 => 48,  182 => 45,  176 => 43,  173 => 42,  170 => 41,  167 => 40,  164 => 39,  161 => 38,  158 => 37,  155 => 36,  143 => 35,  137 => 91,  134 => 90,  132 => 88,  131 => 87,  130 => 86,  129 => 85,  126 => 84,  123 => 70,  120 => 69,  117 => 68,  109 => 63,  106 => 62,  97 => 60,  93 => 59,  89 => 58,  86 => 57,  83 => 56,  80 => 55,  73 => 32,  70 => 31,  64 => 28,  61 => 27,  59 => 23,  58 => 22,  56 => 15,  53 => 14,  48 => 11,  46 => 10,  45 => 7,  40 => 6,  37 => 5,  33 => 1,  31 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityExtendBundle:ConfigEntityGrid:unique.html.twig", "");
    }
}
