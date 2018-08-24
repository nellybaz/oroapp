<?php

/* OroAddressBundle:Include:fields.html.twig */
class __TwigTemplate_a9f8ce48625f6ecefb4e15d78bc983471f455f7f971f5f562acebdb6fe25c428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_region_widget' => array($this, 'block_oro_region_widget'),
            'oro_email_widget' => array($this, 'block_oro_email_widget'),
            'oro_phone_widget' => array($this, 'block_oro_phone_widget'),
            'oro_address_widget' => array($this, 'block_oro_address_widget'),
            'oro_address_rows' => array($this, 'block_oro_address_rows'),
            'oro_typed_address_widget' => array($this, 'block_oro_typed_address_widget'),
            'oro_typed_address_rows' => array($this, 'block_oro_typed_address_rows'),
            'oro_address_collection_widget' => array($this, 'block_oro_address_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_region_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('oro_email_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('oro_phone_widget', $context, $blocks);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('oro_address_widget', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('oro_address_rows', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('oro_typed_address_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('oro_typed_address_rows', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('oro_address_collection_widget', $context, $blocks);
        // line 147
        echo "
";
    }

    // line 1
    public function block_oro_region_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["_block"] =         $this->renderBlock("oro_region_updater_js", $context, $blocks);
        // line 4
        echo "    ";
        if (twig_test_empty(($context["_block"] ?? null))) {
            // line 5
            echo "        ";
            $this->loadTemplate("OroAddressBundle:Include:javascript.html.twig", "OroAddressBundle:Include:fields.html.twig", 5)->display($context);
            // line 6
            echo "        ";
            $this->displayBlock("oro_region_updater_js", $context, $blocks);
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if (( !array_key_exists("country_field", $context) || twig_test_empty(($context["country_field"] ?? null)))) {
            // line 10
            echo "        ";
            $context["country_field"] = twig_replace_filter(($context["name"] ?? null), array("region" => "country"));
            // line 11
            echo "    ";
        }
        // line 12
        echo "    ";
        $context["country_field"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), ($context["country_field"] ?? null), array(), "array");
        // line 13
        echo "
    ";
        // line 14
        if (( !array_key_exists("region_text_field", $context) || twig_test_empty(($context["region_text_field"] ?? null)))) {
            // line 15
            echo "        ";
            $context["region_text_field"] = (($context["name"] ?? null) . "_text");
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $context["region_text_field"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), ($context["region_text_field"] ?? null), array(), "array");
        // line 18
        echo "
    ";
        // line 19
        $context["attr"] = array();
        // line 20
        echo "
    ";
        // line 21
        if (($context["required"] ?? null)) {
            // line 22
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("attr" => array("data-validation" => twig_jsonencode_filter(array("NotBlank" => null)))));
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["attr"] ?? null));
        echo "
    ";
        // line 26
        $context["showSelect"] = ( !twig_test_empty(($context["choices"] ?? null)) && twig_test_empty($this->getAttribute($this->getAttribute(($context["region_text_field"] ?? null), "vars", array()), "value", array())));
        // line 27
        echo "    ";
        $context["regionView"] = ((array_key_exists("regionView", $context)) ? (_twig_default_filter(($context["regionView"] ?? null), "oroaddress/js/region/view")) : ("oroaddress/js/region/view"));
        // line 28
        echo "
    ";
        // line 29
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroAddressBundle:Include:fields.html.twig", 29);
        // line 30
        echo "
    <div ";
        // line 31
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" =>         // line 32
($context["regionView"] ?? null), "options" => array("_sourceElement" => ("#" . $this->getAttribute($this->getAttribute(        // line 34
($context["country_field"] ?? null), "vars", array()), "id", array())), "target" => ("#" .         // line 35
($context["id"] ?? null)), "simpleEl" => ("#" . $this->getAttribute($this->getAttribute(        // line 36
($context["region_text_field"] ?? null), "vars", array()), "id", array())), "collectionRoute" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 37
($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "region_route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "region_route", array()), "oro_api_country_get_regions")) : ("oro_api_country_get_regions")), "showSelect" =>         // line 38
($context["showSelect"] ?? null), "regionRequired" =>         // line 39
($context["required"] ?? null))));
        // line 41
        echo "></div>

    <style type=\"text/css\">
        ";
        // line 44
        if (($context["showSelect"] ?? null)) {
            // line 45
            echo "            #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " {
                display: block;
            }

            #";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["region_text_field"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo " {
                display: none;
            }
        ";
        } else {
            // line 53
            echo "            #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " {
                display: none;
            }

            #";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["region_text_field"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo " {
                display: block;
            }
        ";
        }
        // line 61
        echo "    </style>
";
    }

    // line 64
    public function block_oro_email_widget($context, array $blocks = array())
    {
        // line 65
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append collection-element-primary\">
            ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo "
            <label class=\"add-on\" title=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Primary"), "html", null, true);
        echo "\">
                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "primary", array()), 'widget');
        echo "
            </label>
        </div>
        ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors');
        echo "
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 74
                echo "            <div class=\"collection-element-other clearfix\">
                ";
                // line 75
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("title" => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()))));
                echo "
            </div>
            ";
                // line 77
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
                echo "
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    </div>
    ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 83
    public function block_oro_phone_widget($context, array $blocks = array())
    {
        // line 84
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "phone", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append collection-element-primary\">
            ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'widget');
        echo "
            <label class=\"add-on\" title=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Primary"), "html", null, true);
        echo "\">
                ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "primary", array()), 'widget');
        echo "
            </label>
        </div>
        ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'errors');
        echo "
        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 93
                echo "            <div class=\"collection-element-other clearfix\">
                ";
                // line 94
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("title" => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()))));
                echo "
            </div>
            ";
                // line 96
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
                echo "
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </div>
    ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 102
    public function block_oro_address_widget($context, array $blocks = array())
    {
        // line 103
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array()))) {
            // line 104
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 105
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 108
            echo "        ";
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
    ";
        }
    }

    // line 112
    public function block_oro_address_rows($context, array $blocks = array())
    {
        // line 113
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id", array()), 'row');
        echo "
    ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row');
        echo "
    ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "namePrefix", array()), 'row');
        echo "
    ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row');
        echo "
    ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "middleName", array()), 'row');
        echo "
    ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row');
        echo "
    ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameSuffix", array()), 'row');
        echo "
    ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "organization", array()), 'row');
        echo "
    ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'row');
        echo "
    ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "street", array()), 'row');
        echo "
    ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "street2", array()), 'row');
        echo "
    ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "city", array()), 'row');
        echo "
    ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "region_text", array()), 'row');
        echo "
    ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "region", array()), 'row');
        echo "
    ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "postalCode", array()), 'row');
        echo "
    ";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 131
    public function block_oro_typed_address_widget($context, array $blocks = array())
    {
        // line 132
        echo "    ";
        $this->displayBlock("oro_typed_address_rows", $context, $blocks);
        echo "
";
    }

    // line 135
    public function block_oro_typed_address_rows($context, array $blocks = array())
    {
        // line 136
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "types", array()), 'row');
        echo "
    ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "primary", array()), 'row');
        echo "
    ";
        // line 138
        $this->displayBlock("oro_address_rows", $context, $blocks);
        echo "
";
    }

    // line 141
    public function block_oro_address_collection_widget($context, array $blocks = array())
    {
        // line 142
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-address-collection")));
        // line 143
        echo "    ";
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    ";
        // line 144
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 145
        echo "    ";
        echo $this->getAttribute($this, "oro_collection_validate_types_js", array(0 => $context), "method");
        echo "
";
    }

    // line 148
    public function getoro_collection_validate_types_js($__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 149
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "types", array(), "any", true, true)) {
                // line 150
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroAddressBundle:Include:fields.html.twig", 150);
                // line 151
                echo "
        <div ";
                // line 152
                echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroaddress/js/app/views/address-collection-view", "options" => array("_sourceElement" => ("#" . $this->getAttribute(                // line 155
($context["context"] ?? null), "id", array())))));
                // line 157
                echo "></div>
    ";
            }
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
        return "OroAddressBundle:Include:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 157,  489 => 155,  488 => 152,  485 => 151,  482 => 150,  479 => 149,  467 => 148,  460 => 145,  458 => 144,  453 => 143,  450 => 142,  447 => 141,  441 => 138,  437 => 137,  432 => 136,  429 => 135,  422 => 132,  419 => 131,  413 => 128,  409 => 127,  405 => 126,  401 => 125,  397 => 124,  393 => 123,  389 => 122,  385 => 121,  381 => 120,  377 => 119,  373 => 118,  369 => 117,  365 => 116,  361 => 115,  357 => 114,  352 => 113,  349 => 112,  341 => 108,  335 => 105,  330 => 104,  327 => 103,  324 => 102,  318 => 99,  315 => 98,  306 => 96,  301 => 94,  298 => 93,  293 => 92,  289 => 91,  283 => 88,  279 => 87,  275 => 86,  267 => 84,  264 => 83,  258 => 80,  255 => 79,  246 => 77,  241 => 75,  238 => 74,  233 => 73,  229 => 72,  223 => 69,  219 => 68,  215 => 67,  207 => 65,  204 => 64,  199 => 61,  192 => 57,  184 => 53,  177 => 49,  169 => 45,  167 => 44,  162 => 41,  160 => 39,  159 => 38,  158 => 37,  157 => 36,  156 => 35,  155 => 34,  154 => 32,  153 => 31,  150 => 30,  148 => 29,  145 => 28,  142 => 27,  140 => 26,  136 => 25,  133 => 24,  130 => 23,  127 => 22,  125 => 21,  122 => 20,  120 => 19,  117 => 18,  114 => 17,  111 => 16,  108 => 15,  106 => 14,  103 => 13,  100 => 12,  97 => 11,  94 => 10,  92 => 9,  89 => 8,  83 => 6,  80 => 5,  77 => 4,  74 => 3,  72 => 2,  69 => 1,  64 => 147,  62 => 141,  59 => 140,  57 => 135,  54 => 134,  52 => 131,  49 => 130,  47 => 112,  44 => 111,  42 => 102,  39 => 101,  37 => 83,  34 => 82,  32 => 64,  29 => 63,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAddressBundle:Include:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/AddressBundle/Resources/views/Include/fields.html.twig");
    }
}
