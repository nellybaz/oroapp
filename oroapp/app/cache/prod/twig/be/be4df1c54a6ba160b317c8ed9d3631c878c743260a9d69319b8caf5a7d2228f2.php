<?php

/* OroWebCatalogBundle:Form:fields.html.twig */
class __TwigTemplate_96296d668a68ac11e4a3907e8e9270dae89f474785ffc24d5e3d818f3304a0fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_web_catalog_content_variant_collection_widget' => array($this, 'block_oro_web_catalog_content_variant_collection_widget'),
            'oro_web_catalog_system_page_variant_widget' => array($this, 'block_oro_web_catalog_system_page_variant_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 37
        echo "
";
        // line 49
        echo "
";
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('oro_web_catalog_content_variant_collection_widget', $context, $blocks);
        // line 120
        echo "
";
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('oro_web_catalog_system_page_variant_widget', $context, $blocks);
    }

    // line 86
    public function block_oro_web_catalog_content_variant_collection_widget($context, array $blocks = array())
    {
        // line 87
        echo "    ";
        ob_start();
        // line 88
        echo "        ";
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 89
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-content-variant-collection")));
        // line 90
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
            data-role=\"content-variant-collection\"
            data-page-component-module=\"orowebcatalog/js/app/components/content-variant-collection-component\"
            data-last-index=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\"
            data-prototype-name=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"
            ";
        // line 95
        echo $this->getAttribute($this, "oro_web_catalog_content_variant_prototype_attributes", array(0 => ($context["form"] ?? null)), "method");
        echo "
        >
            <input type=\"hidden\" name=\"validate_";
        // line 97
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-collection-name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-name=\"collection-validation\" disabled data-validate-element>

            <div class=\"content-variant-add-btn-container clearfix-oro\">
                ";
        // line 100
        echo $this->getAttribute($this, "oro_web_catalog_content_variant_button", array(0 => ($context["form"] ?? null)), "method");
        echo "
            </div>

            <div class=\"variant-collection\" data-role=\"collection-container\"
                 data-page-component-module=\"oroui/js/app/components/view-component\"
                 data-page-component-options=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orowebcatalog/js/app/views/default-variant-collection-view", "defaultSelector" => "[name\$=\"[default]\"]")), "html", null, true);
        // line 108
        echo "\"
            >
                ";
        // line 110
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 111
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 112
                echo "                        ";
                echo $this->getAttribute($this, "oro_web_catalog_content_variant_collection_item_prototype", array(0 => $context["child"], 1 => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "full_name", array()), 2 => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "disabled", array())), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                ";
        }
        // line 115
        echo "            </div>
        </div>
        ";
        // line 117
        echo $this->getAttribute($this, "content_vriant_default_js", array(0 => $context), "method");
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 132
    public function block_oro_web_catalog_system_page_variant_widget($context, array $blocks = array())
    {
        // line 133
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "systemPageRoute", array()), 'row');
        echo "
";
    }

    // line 1
    public function getoro_web_catalog_content_variant_collection_item_prototype($__form__ = null, $__name__ = null, $__disabled__ = null, ...$__varargs__)
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
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "    <div data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
         data-role=\"content-variant-item\"
         class=\"content-variant-item ";
            // line 5
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "default", array()), "vars", array()), "data", array())) {
                echo "content-variant-item-default";
            }
            echo "\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroscope/js/app/views/scope-toggle-view", "selectors" => array("useParentScopeSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 10
($context["form"] ?? null), "default", array()), "vars", array()), "id", array())), "scopesSelector" => ".scope-elements"))), "html", null, true);
            // line 13
            echo "\"
         data-layout=\"separate\"
    >
        <h5 class=\"content-variant-item-title\">
            ";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "default", array()), 'widget');
            echo "
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\WebCatalogBundle\Twig\WebCatalogExtension')->getContentVariantTitle($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "type", array()), "vars", array()), "data", array()))), "html", null, true);
            echo "
            <span class=\"label label-info content-variant-item-default-label\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.contentvariant.default.label"), "html", null, true);
            echo "</span>
        </h5>

        ";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("disabled" => ($context["disabled"] ?? null)));
            echo "

        <div class=\"scope-elements\">
            <h5>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "scopes", array()), "vars", array()), "label", array())), "html", null, true);
            echo "</h5>
            ";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scopes", array()), 'widget');
            echo "
        </div>

        <div class=\"hide\">
            ";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
        </div>

        <button class=\"removeVariantBtn btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 33
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

    // line 38
    public function getoro_web_catalog_content_variant_prototype_attributes($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 39
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototypes", array()));
            foreach ($context['_seq'] as $context["contentVarientTypeName"] => $context["contentVariantPrototypeData"]) {
                // line 40
                echo "        ";
                $context["contentVariantPrototypeForm"] = $this->getAttribute($context["contentVariantPrototypeData"], "form", array());
                // line 41
                echo "        ";
                $context["contentVariantPrototypeFormHtml"] = $this->getAttribute($this, "oro_web_catalog_content_variant_collection_item_prototype", array(0 =>                 // line 42
($context["contentVariantPrototypeForm"] ?? null), 1 => $this->getAttribute($this->getAttribute(                // line 43
($context["contentVariantPrototypeForm"] ?? null), "vars", array()), "name", array()), 2 => $this->getAttribute($this->getAttribute(                // line 44
($context["form"] ?? null), "vars", array()), "disabled", array())), "method");
                // line 46
                echo "        data-prototype-";
                echo twig_escape_filter($this->env, $context["contentVarientTypeName"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ($context["contentVariantPrototypeFormHtml"] ?? null));
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contentVarientTypeName'], $context['contentVariantPrototypeData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 50
    public function getoro_web_catalog_content_variant_button($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 51
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroWebCatalogBundle:Form:fields.html.twig", 51);
            // line 52
            echo "    ";
            $context["numberOfVariants"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototypes", array()));
            // line 53
            echo "
    <div class=\"btn-group pull-right\">
    ";
            // line 55
            if ((($context["numberOfVariants"] ?? null) > 0)) {
                // line 56
                echo "        ";
                $context["contentVarientTypeName"] = twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototypes", array())));
                // line 57
                echo "        ";
                $context["variant"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototypes", array()), ($context["contentVarientTypeName"] ?? null), array(), "array");
                // line 58
                echo "
        ";
                // line 59
                $context["buttonsHtml"] = $context["UI"]->getbutton(array("path" => "javascript: void(0);", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.form.add_variant.label", array("%variantName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                // line 61
($context["variant"] ?? null), "title", array())))), "data" => array("content-variant-type-name" =>                 // line 63
($context["contentVarientTypeName"] ?? null), "role" => "variant-button")));
                // line 67
                echo "
        ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototypes", array())), 1));
                foreach ($context['_seq'] as $context["_key"] => $context["contentVarientTypeName"]) {
                    // line 69
                    echo "            ";
                    $context["variant"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototypes", array()), $context["contentVarientTypeName"], array(), "array");
                    // line 70
                    echo "
            ";
                    // line 71
                    $context["buttonsHtml"] = (($context["buttonsHtml"] ?? null) . $context["UI"]->getbutton(array("path" => "javascript: void(0);", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.webcatalog.form.add_variant.label", array("%variantName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 73
($context["variant"] ?? null), "title", array())))), "data" => array("content-variant-type-name" =>                     // line 75
$context["contentVarientTypeName"], "role" => "variant-button"))));
                    // line 79
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contentVarientTypeName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "
        ";
                // line 81
                echo $context["UI"]->getpinnedDropdownButton(array("html" => ($context["buttonsHtml"] ?? null)));
                echo "
    ";
            }
            // line 83
            echo "    </div>
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

    // line 121
    public function getcontent_vriant_default_js($__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 122
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroWebCatalogBundle:Form:fields.html.twig", 122);
            // line 123
            echo "    <div ";
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("_sourceElement" => ("#" . $this->getAttribute(            // line 126
($context["context"] ?? null), "id", array())), "view" => "orowebcatalog/js/app/views/variants-collection-view")));
            // line 129
            echo "></div>
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
        return "OroWebCatalogBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 129,  382 => 126,  380 => 123,  377 => 122,  365 => 121,  349 => 83,  344 => 81,  341 => 80,  335 => 79,  333 => 75,  332 => 73,  331 => 71,  328 => 70,  325 => 69,  321 => 68,  318 => 67,  316 => 63,  315 => 61,  314 => 59,  311 => 58,  308 => 57,  305 => 56,  303 => 55,  299 => 53,  296 => 52,  293 => 51,  281 => 50,  257 => 46,  255 => 44,  254 => 43,  253 => 42,  251 => 41,  248 => 40,  243 => 39,  231 => 38,  212 => 33,  206 => 30,  199 => 26,  195 => 25,  189 => 22,  183 => 19,  179 => 18,  175 => 17,  169 => 13,  167 => 10,  166 => 7,  159 => 5,  153 => 3,  150 => 2,  136 => 1,  129 => 133,  126 => 132,  119 => 117,  115 => 115,  112 => 114,  103 => 112,  98 => 111,  96 => 110,  92 => 108,  90 => 105,  82 => 100,  74 => 97,  69 => 95,  65 => 94,  61 => 93,  54 => 90,  51 => 89,  48 => 88,  45 => 87,  42 => 86,  38 => 132,  35 => 131,  32 => 120,  30 => 86,  27 => 85,  24 => 49,  21 => 37,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWebCatalogBundle:Form:fields.html.twig", "");
    }
}
