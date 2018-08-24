<?php

/* OroCMSBundle:Form:fields.html.twig */
class __TwigTemplate_300fa8fdd663be1b8e36090598ebfaa6f3bcd710e7b951712b07a35407cc11f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_cms_page_variant_widget' => array($this, 'block_oro_cms_page_variant_widget'),
            'text_content_variant_collection_widget' => array($this, 'block_text_content_variant_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_cms_page_variant_widget', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('text_content_variant_collection_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 94
        echo "
";
    }

    // line 1
    public function block_oro_cms_page_variant_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cmsPage", array()), 'row');
        echo "
";
    }

    // line 5
    public function block_text_content_variant_collection_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCMSBundle:Form:fields.html.twig", 6);
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-content-variant-collection")));
        // line 10
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
                data-role=\"content-variant-collection\"
                data-page-component-module=\"orocms/js/app/components/content-variant-collection-component\"
                data-last-index=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\"
                data-prototype-name=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"
                ";
        // line 15
        echo $this->getAttribute($this, "oro_cms_content_variant_attributes", array(0 => ($context["form"] ?? null)), "method");
        echo "
        >
            <input type=\"hidden\" name=\"validate_";
        // line 17
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-collection-name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-name=\"collection-validation\" disabled data-validate-element>

            <div class=\"content-variant-add-btn-container clearfix-oro\">
                <div class=\"btn-group pull-right\">
                    ";
        // line 21
        echo $context["UI"]->getbutton(array("path" => "javascript: void(0);", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.form.add_variant.label"), "data" => array("role" => "variant-button")));
        // line 27
        echo "
                </div>
            </div>

            <div class=\"variant-collection\" data-role=\"collection-container\"
                 data-page-component-module=\"oroui/js/app/components/view-component\"
                 data-page-component-options=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orocms/js/app/views/default-variant-collection-view", "defaultSelector" => "[name\$=\"[default]\"]")), "html", null, true);
        // line 36
        echo "\"
            >
                ";
        // line 38
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 39
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 40
                echo "                        ";
                echo $this->getAttribute($this, "oro_cms_content_variant_collection_item", array(0 => $context["child"], 1 => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "full_name", array()), 2 => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "disabled", array())), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                ";
        }
        // line 43
        echo "            </div>
        </div>

        <div ";
        // line 46
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("_sourceElement" => ("#" . $this->getAttribute(        // line 49
$context, "id", array())), "view" => "orocms/js/app/views/variants-collection-view")));
        // line 52
        echo "></div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 56
    public function getoro_cms_content_variant_collection_item($__form__ = null, $__name__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "name" => $__name__,
            "disabled" => $__disabled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 57
            echo "    ";
            ob_start();
            // line 58
            echo "        ";
            ob_start();
            // line 59
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scopes", array()), 'widget');
            echo "
        ";
            $context["scopes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 61
            echo "        <div data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
             data-validation-optional-group
             data-role=\"content-variant-item\"
             class=\"content-variant-item ";
            // line 64
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "default", array()), "vars", array()), "data", array())) {
                echo "content-variant-item-default";
            }
            echo "\"
                ";
            // line 65
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "data-validation-optional-group-handler", array(), "array", true, true)) {
                // line 66
                echo "                    data-validation-optional-group-handler=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-validation-optional-group-handler", array(), "array"), "html", null, true);
                echo "\"
                ";
            }
            // line 68
            echo "             data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroscope/js/app/views/scope-toggle-view", "selectors" => array("useParentScopeSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 72
($context["form"] ?? null), "default", array()), "vars", array()), "id", array())), "scopesSelector" => ".scope-elements"))), "html", null, true);
            // line 75
            echo "\"
             data-layout=\"separate\"
        >
            <h5 class=\"content-variant-item-title\">
                ";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "default", array()), 'widget');
            echo "
                <span class=\"label label-info content-variant-item-default-label\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.content_variants.default.label"), "html", null, true);
            echo "</span>
            </h5>

            ";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("disabled" => ($context["disabled"] ?? null)));
            echo "

            <div class=\"scope-elements\">
                <h5>";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "scopes", array()), "vars", array()), "label", array())), "html", null, true);
            echo "</h5>
                ";
            // line 87
            echo twig_escape_filter($this->env, ($context["scopes"] ?? null), "html", null, true);
            echo "
            </div>

            <button class=\"removeVariantBtn btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 90
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-action=\"remove\">×</button>
        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 95
    public function getoro_cms_content_variant_attributes($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 96
            echo "    ";
            $context["prototype"] = $this->getAttribute($this, "oro_cms_content_variant_collection_item", array(0 => $this->getAttribute($this->getAttribute(            // line 97
($context["form"] ?? null), "vars", array()), "prototype", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 98
($context["form"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array()), 2 => $this->getAttribute($this->getAttribute(            // line 99
($context["form"] ?? null), "vars", array()), "disabled", array())), "method");
            // line 101
            echo "    data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype"] ?? null));
            echo "\"
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
        return "OroCMSBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 101,  258 => 99,  257 => 98,  256 => 97,  254 => 96,  242 => 95,  223 => 90,  217 => 87,  213 => 86,  207 => 83,  201 => 80,  197 => 79,  191 => 75,  189 => 72,  188 => 69,  185 => 68,  179 => 66,  177 => 65,  171 => 64,  164 => 61,  158 => 59,  155 => 58,  152 => 57,  138 => 56,  132 => 52,  130 => 49,  129 => 46,  124 => 43,  121 => 42,  112 => 40,  107 => 39,  105 => 38,  101 => 36,  99 => 33,  91 => 27,  89 => 21,  80 => 17,  75 => 15,  71 => 14,  67 => 13,  60 => 10,  57 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  39 => 2,  36 => 1,  31 => 94,  28 => 55,  26 => 5,  23 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/Form/fields.html.twig");
    }
}
