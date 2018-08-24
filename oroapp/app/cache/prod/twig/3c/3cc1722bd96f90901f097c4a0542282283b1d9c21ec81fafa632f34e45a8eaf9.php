<?php

/* OroRFPBundle:Form:fields.html.twig */
class __TwigTemplate_16345e9c2d01889061ea8b5004cbffdfc68255aaed4146cea6aabba8c21de12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroPricingBundle:layouts/default:layout.html.twig", "OroRFPBundle:Form:fields.html.twig", 379);
        // line 379
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroPricingBundle:layouts/default:layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'oro_rfp_request_widget' => array($this, 'block_oro_rfp_request_widget'),
                'oro_rfp_frontend_request_product_collection_widget' => array($this, 'block_oro_rfp_frontend_request_product_collection_widget'),
                'oro_rfp_request_product_collection_widget' => array($this, 'block_oro_rfp_request_product_collection_widget'),
                'oro_rfp_lineitem_collection_widget' => array($this, 'block_oro_rfp_lineitem_collection_widget'),
                'oro_rfp_frontend_request_product_widget' => array($this, 'block_oro_rfp_frontend_request_product_widget'),
                'oro_rfp_request_product_widget' => array($this, 'block_oro_rfp_request_product_widget'),
                'oro_rfp_request_frontend_product_item_collection_widget' => array($this, 'block_oro_rfp_request_frontend_product_item_collection_widget'),
                'oro_rfp_frontend_request_product_item_collection_widget' => array($this, 'block_oro_rfp_frontend_request_product_item_collection_widget'),
                'oro_rfp_request_product_item_collection_widget' => array($this, 'block_oro_rfp_request_product_item_collection_widget'),
                '_oro_rfp_frontend_request_requestProducts_entry_requestProductItems_entry_widget' => array($this, 'block__oro_rfp_frontend_request_requestProducts_entry_requestProductItems_entry_widget'),
                'oro_rfp_request_product_item_widget' => array($this, 'block_oro_rfp_request_product_item_widget'),
                '_oro_order_type_lineItems_entry_offers_widget' => array($this, 'block__oro_order_type_lineItems_entry_offers_widget'),
                '_oro_order_type_lineItems_entry_offers_entry_row' => array($this, 'block__oro_order_type_lineItems_entry_offers_entry_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('oro_rfp_request_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('oro_rfp_frontend_request_product_collection_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('oro_rfp_request_product_collection_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('oro_rfp_lineitem_collection_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('oro_rfp_frontend_request_product_widget', $context, $blocks);
        // line 248
        echo "
";
        // line 249
        $this->displayBlock('oro_rfp_request_product_widget', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('oro_rfp_request_frontend_product_item_collection_widget', $context, $blocks);
        // line 297
        echo "
";
        // line 298
        $this->displayBlock('oro_rfp_frontend_request_product_item_collection_widget', $context, $blocks);
        // line 327
        echo "
";
        // line 328
        $this->displayBlock('oro_rfp_request_product_item_collection_widget', $context, $blocks);
        // line 360
        echo "
";
        // line 377
        echo "
";
        // line 378
        $this->displayBlock('_oro_rfp_frontend_request_requestProducts_entry_requestProductItems_entry_widget', $context, $blocks);
        // line 428
        echo "
";
        // line 429
        $this->displayBlock('oro_rfp_request_product_item_widget', $context, $blocks);
        // line 447
        echo "
";
        // line 448
        $this->displayBlock('_oro_order_type_lineItems_entry_offers_widget', $context, $blocks);
        // line 472
        echo "
";
        // line 473
        $this->displayBlock('_oro_order_type_lineItems_entry_offers_entry_row', $context, $blocks);
    }

    // line 32
    public function block_oro_rfp_request_widget($context, array $blocks = array())
    {
        // line 33
        echo "    <div class=\"rfp-request-widget\" data-page-component-module=\"orocustomer/js/app/components/customer-selection-component\">
        ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form');
        echo "
    </div>
";
    }

    // line 38
    public function block_oro_rfp_frontend_request_product_collection_widget($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 40
            echo "        ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_rfp_frontend_request_lineitem_prototype", array(0 => ($context["form"] ?? null), 1 => ($context["prototype_name"] ?? null)), "method");
            // line 41
            echo "    ";
        }
        // line 42
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "grid-container")));
        // line 43
        echo "    ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 44
        echo "
    <div class=\"request-form\">
        <h2 class=\"request-form__title\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.title.label"), "html", null, true);
        echo "</h2>
        ";
        // line 47
        $this->loadTemplate("OroUIBundle::view_loading.html.twig", "OroRFPBundle:Form:fields.html.twig", 47)->display($context);
        // line 48
        echo "        <div class=\"request-form__content\" style=\"display: none;\">
            <div class=\"row-oro\">
                ";
        // line 50
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 51
        echo "                <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
                    data-last-index=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\"
                    data-prototype-name=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"
                    ";
        // line 54
        if (array_key_exists("prototype_html", $context)) {
            // line 55
            echo "                        data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"
                    ";
        }
        // line 57
        echo "                    data-role=\"product-container\">

                    ";
        // line 59
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 60
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["key"] => $context["child"]) {
                // line 61
                echo "                            ";
                echo $this->getAttribute($this, "oro_rfp_frontend_request_lineitem_prototype", array(0 => $context["child"], 1 => ($context["prototype_name"] ?? null), 2 => $context["key"]), "method");
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                    ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 64
            echo "                        ";
            echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => "0"));
            echo "
                    ";
        }
        // line 66
        echo "
                </div>

                <div class=\"request-form-footer\">
                    <a class=\"add-list-item\" data-container=\"[data-role='product-container']\" href=\"javascript: void(0);\"><i class=\"fa-plus-circle\"></i>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.add"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 167
    public function block_oro_rfp_request_product_collection_widget($context, array $blocks = array())
    {
        // line 168
        echo "    <div data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
        // line 169
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "ororfp/js/app/views/line-items-view")), "html", null, true);
        // line 171
        echo "\"
         data-layout=\"separate\"
         data-layout-model=\"productModel\"
         class=\"rfp-lineitems\"
    >
        ";
        // line 176
        $this->displayBlock("oro_rfp_lineitem_collection_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 180
    public function block_oro_rfp_lineitem_collection_widget($context, array $blocks = array())
    {
        // line 181
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 182
            echo "        ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_rfp_request_lineitem_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 183
            echo "    ";
        }
        // line 184
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection grid-container")));
        // line 185
        echo "    ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 186
        echo "    <div class=\"row-oro\">
        ";
        // line 187
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 188
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <table class=\"grid table-hover table table-bordered table-condensed\">
                <thead>
                <tr>
                    <th><span>";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.product"), "html", null, true);
        echo "</span></th>
                    <th><span>";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.requested.label"), "html", null, true);
        echo "</span></th>
                    <th><span>";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.notes"), "html", null, true);
        echo "</span></th>
                    <th></th>
                </tr>
                </thead>
                <tbody data-last-index=\"";
        // line 198
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        echo ">
                ";
        // line 199
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 200
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 201
                echo "                        ";
                echo $this->getAttribute($this, "oro_rfp_request_lineitem_prototype", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 204
            echo "                    ";
            echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => "0"));
            echo "
                ";
        }
        // line 206
        echo "                </tbody>
            </table>
        </div>
        <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.add"), "html", null, true);
        echo "</a>
    </div>
";
    }

    // line 235
    public function block_oro_rfp_frontend_request_product_widget($context, array $blocks = array())
    {
        // line 236
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "product", array()), "vars", array()), "attr", array()), array("data-role" => "lineitem-product"));
        // line 239
        echo "    <div class=\"request-form-editline__product\">
        ";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product", array()), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
        ";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product", array()), 'errors');
        echo "
    </div>
    <div class=\"request-form-editline__lines\">
        ";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "requestProductItems", array()), 'widget');
        echo "
        ";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "requestProductItems", array()), 'errors');
        echo "
    </div>
";
    }

    // line 249
    public function block_oro_rfp_request_product_widget($context, array $blocks = array())
    {
        // line 250
        echo "    <td class=\"rfp-lineitem-product\">
        ";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product", array()), 'widget');
        echo "
        ";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product", array()), 'errors');
        echo "
    </td>
    <td class=\"rfp-lineitem-requested\">
        ";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "requestProductItems", array()), 'widget');
        echo "
        ";
        // line 256
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "requestProductItems", array()), 'errors');
        echo "
    </td>
    <td class=\"rfp-lineitem-notes\">
        <div data-page-component-module=\"oroorder/js/app/components/notes-component\" style=\"display: none;\">
            ";
        // line 260
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", array()), 'widget');
        echo "
            ";
        // line 261
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", array()), 'errors');
        echo "
        </div>
    </td>
";
    }

    // line 266
    public function block_oro_rfp_request_frontend_product_item_collection_widget($context, array $blocks = array())
    {
        // line 267
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 268
            echo "        ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_rfp_frontend_request_lineitem_requested_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 269
            echo "    ";
        }
        // line 270
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection grid-container")));
        // line 271
        echo "    ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 272
        echo "    <div class=\"row-oro\">
        ";
        // line 273
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 274
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <table class=\"table-hover table table-bordered rfp-lineitem-requested\">
                <thead>
                <tr>
                    <th colspan=\"2\"><span>";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.requested.quantity"), "html", null, true);
        echo "</span></th>
                    <th colspan=\"2\"><span>";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.requested.price"), "html", null, true);
        echo "</span></th>
                    <th></th>
                </tr>
                </thead>
                <tbody class=\"rfp-lineitem-requested-items\" data-last-index=\"";
        // line 283
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        echo " data-content>
                ";
        // line 284
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 285
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 286
                echo "                        ";
                echo $this->getAttribute($this, "oro_rfp_frontend_request_lineitem_requested_prototype", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 289
            echo "                    ";
            echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => "0"));
            echo "
                ";
        }
        // line 291
        echo "                </tbody>
            </table>
        </div>
        <a class=\"btn add-list-item rfp-lineitem-requested-item-add\" data-container=\".oro-item-collection tbody\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.requested.add"), "html", null, true);
        echo "</a>
    </div>
";
    }

    // line 298
    public function block_oro_rfp_frontend_request_product_item_collection_widget($context, array $blocks = array())
    {
        // line 299
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 300
            echo "        ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_rfp_frontend_request_lineitem_requested_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 301
            echo "    ";
        }
        // line 302
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "grid-container")));
        // line 303
        echo "    ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 304
        echo "    ";
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 305
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <input type=\"hidden\" name=\"validate_";
        // line 306
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-collection-name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-name=\"collection-validation\" disabled data-validate-element>
        <div class=\"request-form-lineitems\">
            <div data-last-index=\"";
        // line 308
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\"
            data-prototype-name=\"";
        // line 309
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"
            ";
        // line 310
        if (array_key_exists("prototype_html", $context)) {
            // line 311
            echo "                data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"
            ";
        }
        // line 313
        echo "            data-content
            data-role=\"lineitems\">
            ";
        // line 315
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 316
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 317
                echo "                    ";
                echo $this->getAttribute($this, "oro_rfp_frontend_request_lineitem_requested_prototype", array(0 => $context["child"]), "method");
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "            ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 320
            echo "                ";
            echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => "0"));
            echo "
            ";
        }
        // line 322
        echo "            </div>
        </div>
    </div>
    <a class=\"request-form-lineitems__add add-list-item\" data-role=\"lineitem-add\" data-container=\"[data-role='lineitems']\" href=\"javascript: void(0);\"><i class=\"fa-plus-circle\"></i>";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.requested.add"), "html", null, true);
        echo "</a>
";
    }

    // line 328
    public function block_oro_rfp_request_product_item_collection_widget($context, array $blocks = array())
    {
        // line 329
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 330
            echo "        ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_rfp_request_lineitem_requested_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 331
            echo "    ";
        }
        // line 332
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection grid-container")));
        // line 333
        echo "    ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 334
        echo "    <div class=\"row-oro\">
        ";
        // line 335
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 336
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <input type=\"hidden\" name=\"validate_";
        // line 337
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-collection-name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-name=\"collection-validation\" disabled data-validate-element>
            <table class=\"table-hover table table-bordered rfp-lineitem-requested\">
                <thead>
                <tr>
                    <th colspan=\"2\"><span>";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.requested.quantity"), "html", null, true);
        echo "</span></th>
                    <th colspan=\"2\"><span>";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.requested.price"), "html", null, true);
        echo "</span></th>
                    <th></th>
                </tr>
                </thead>
                <tbody class=\"rfp-lineitem-requested-items\" data-last-index=\"";
        // line 346
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        echo " data-content>
                ";
        // line 347
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 348
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 349
                echo "                        ";
                echo $this->getAttribute($this, "oro_rfp_request_lineitem_requested_prototype", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 351
            echo "                ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 352
            echo "                    ";
            echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => "0"));
            echo "
                ";
        }
        // line 354
        echo "                </tbody>
            </table>
        </div>
        <a class=\"btn add-list-item rfp-lineitem-requested-item-add\" data-container=\".oro-item-collection tbody\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.frontend.request.lineitem.requested.add"), "html", null, true);
        echo "</a>
    </div>
";
    }

    // line 378
    public function block__oro_rfp_frontend_request_requestProducts_entry_requestProductItems_entry_widget($context, array $blocks = array())
    {
        // line 379
        echo "    ";
        // line 380
        echo "    <div class=\"request-form-lineitem-unit request-form-lineitem-unit--size-m\">
        ";
        // line 381
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget');
        echo "
        ";
        // line 382
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
        echo "
    </div>
    ";
        // line 384
        $context["attr_unit"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "productUnit", array()), "vars", array()), "attr", array()), array("~class" => "select select--size-m select--full"));
        // line 387
        echo "    <div class=\"request-form-lineitem-unit request-form-lineitem-unit--size-m\">
        ";
        // line 388
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'widget', array("attr" => ($context["attr_unit"] ?? null)));
        echo "
        ";
        // line 389
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'errors');
        echo "
    </div>
    <div class=\"request-form-lineitem-unit request-form-lineitem-unit--prices\"
        data-page-component-module=\"oroui/js/app/components/view-component\"
        data-page-component-options=\"";
        // line 393
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oropricing/js/app/views/line-item-product-prices-view", "elements" => array("pricesHint" => "[data-name=\"prices-hint\"]", "pricesHintContent" => "[data-name=\"prices-hint-content\"]"), "matchedPriceEnabled" => false)), "html", null, true);
        // line 400
        echo "\">
        ";
        // line 401
        $context["label"] = "List prices";
        // line 402
        echo "        <script type=\"text/template\" data-name=\"prices-hint-content\">
            ";
        // line 403
        $this->displayBlock("product_price_hint_content_js_widget", $context, $blocks);
        echo "
        </script>
        <script type=\"text/template\" data-name=\"prices-hint\">
            ";
        // line 406
        $this->displayBlock("product_price_hint_js_widget", $context, $blocks);
        echo "
        </script>
        ";
        // line 408
        $context["input_price"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "value", array()), "vars", array()), "attr", array()), array("~class" => "request-form-lineitem-unit__input", "~data-precision" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->getAttribute("max_fraction_digits", "currency")));
        // line 412
        echo "
        <span class=\"request-form-lineitem-unit__label\">";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.rfp.requestproductitem.price.label"), "html", null, true);
        echo ":</span> ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "value", array()), 'widget', array("attr" => ($context["input_price"] ?? null)));
        echo "
        <div class=\"hidden\">";
        // line 414
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "currency", array()), 'widget');
        echo "</div>
        ";
        // line 415
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "price", array()), 'errors');
        echo "
    </div>
    ";
        // line 417
        $context["attr_price"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-role" => "lineitem-price"));
        // line 420
        echo "    ";
        $context["attr_currency"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-role" => "lineitem-currency"));
        // line 423
        echo "    <div class=\"request-form-lineitem-unit hide\">
        ";
        // line 424
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "currency", array()), 'widget', array("attr" => ($context["attr_currency"] ?? null)));
        echo "
        ";
        // line 425
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "currency", array()), 'errors');
        echo "
    </div>
";
    }

    // line 429
    public function block_oro_rfp_request_product_item_widget($context, array $blocks = array())
    {
        // line 430
        echo "    <td class=\"rfp-lineitem-requested-quantity\">
        ";
        // line 431
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget');
        echo "
        ";
        // line 432
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
        echo "
    </td>
    <td class=\"rfp-lineitem-requested-unit\">
        ";
        // line 435
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'widget', array("attr" => twig_array_merge(($context["attr"] ?? null), array("class" => "rfp-requestproductitem-productunit-select"))));
        echo "
        ";
        // line 436
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'errors');
        echo "
    </td>
    <td class=\"rfp-lineitem-requested-price\">
        ";
        // line 439
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "value", array()), 'widget');
        echo "
        ";
        // line 440
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "value", array()), 'errors');
        echo "
    </td>
    <td class=\"rfp-lineitem-requested-currency\">
        ";
        // line 443
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "currency", array()), 'widget');
        echo "
        ";
        // line 444
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "currency", array()), 'errors');
        echo "
    </td>
";
    }

    // line 448
    public function block__oro_order_type_lineItems_entry_offers_widget($context, array $blocks = array())
    {
        // line 449
        echo "    ";
        if ((array_key_exists("offers", $context) && twig_length_filter($this->env, ($context["offers"] ?? null)))) {
            // line 450
            echo "        ";
            $context["page_component_options"] = array("offersSelector" => sprintf("[name=\"%s\"]",             // line 451
($context["full_name"] ?? null)), "quantitySelector" => sprintf("#%s", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 452
($context["form"] ?? null), "parent", array()), "quantity", array()), "vars", array()), "id", array())), "unitSelector" => sprintf("#%s", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 453
($context["form"] ?? null), "parent", array()), "productUnit", array()), "vars", array()), "id", array())), "productSelector" => sprintf("#%s", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 454
($context["form"] ?? null), "parent", array()), "product", array()), "vars", array()), "id", array())), "productSkuSelector" => sprintf("#%s", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 455
($context["form"] ?? null), "parent", array()), "productSku", array()), "vars", array()), "id", array())), "offersDataSelector" => sprintf("#%s", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 456
($context["form"] ?? null), "parent", array()), "offers_data", array()), "vars", array()), "id", array())));
            // line 458
            echo "
        <table class=\"grid table table-hover table-bordered order-line-item-offers\"
               data-page-component-module=\"ororfp/js/app/components/order-line-item-offers\"
               data-page-component-options=\"";
            // line 461
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["page_component_options"] ?? null)), "html", null, true);
            echo "\">
            <tbody>
            ";
            // line 463
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 464
                echo "                <tr>
                    ";
                // line 465
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row', array("offer" => $this->getAttribute(($context["offers"] ?? null), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array")));
                echo "
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 468
            echo "            </tbody>
        </table>
    ";
        }
    }

    // line 473
    public function block__oro_order_type_lineItems_entry_offers_entry_row($context, array $blocks = array())
    {
        // line 474
        echo "    <td class=\"order-line-item-offers-radio\">
        ";
        // line 475
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("data-quantity" => (($this->getAttribute(        // line 477
($context["offer"] ?? null), "quantity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["offer"] ?? null), "quantity", array()))) : ("")), "data-unit" => (($this->getAttribute(        // line 478
($context["offer"] ?? null), "unit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["offer"] ?? null), "unit", array()))) : ("")), "data-price" => (($this->getAttribute(        // line 479
($context["offer"] ?? null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["offer"] ?? null), "price", array()))) : ("")), "data-currency" => (($this->getAttribute(        // line 480
($context["offer"] ?? null), "currency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["offer"] ?? null), "currency", array()))) : ("")))));
        // line 482
        echo "
    </td>
    <td class=\"order-line-item-offers-quantity\">
        ";
        // line 485
        if (($this->getAttribute(($context["offer"] ?? null), "quantity", array(), "any", true, true) && $this->getAttribute(($context["offer"] ?? null), "unit", array(), "any", true, true))) {
            // line 486
            echo "            <label for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 487
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitValueExtension')->formatCode($this->getAttribute(($context["offer"] ?? null), "quantity", array()), $this->getAttribute(($context["offer"] ?? null), "unit", array())), "html", null, true);
            echo "
            </label>
        ";
        }
        // line 490
        echo "    </td>
    <td class=\"order-line-item-offers-price\">
        ";
        // line 492
        if (($this->getAttribute(($context["offer"] ?? null), "price", array(), "any", true, true) && $this->getAttribute(($context["offer"] ?? null), "currency", array(), "any", true, true))) {
            // line 493
            echo "            <label for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 494
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["offer"] ?? null), "price", array()), array("currency" => $this->getAttribute(($context["offer"] ?? null), "currency", array())));
            echo "
            </label>
        ";
        }
        // line 497
        echo "    </td>
";
    }

    // line 1
    public function getoro_rfp_frontend_request_lineitem_requested_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 3
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 4
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 7
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 8
                echo "    ";
            }
            // line 9
            echo "    <div data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
        data-validation-optional-group
        data-role=\"lineitem\" ";
            // line 11
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo "
        class=\"request-form-lineitem fields-row\"
        data-page-component-module=\"oroui/js/app/components/view-component\"
        data-page-component-options=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "ororfp/js/app/views/line-item-offer-view", "elements" => array("unit" => "[data-name=\"field__product-unit\"]"))), "html", null, true);
            // line 19
            echo "\"
        data-layout=\"deferred-initialize\">
        <div data-role=\"line-item-form-container\">
            ";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            <div class=\"request-form-lineitem-unit--remove\">
                <button type=\"button\" class=\"removeRow item-remove button--plain\">
                    <i class=\"fa-trash fa--large fa--no-offset\"></i>
                </button>
            </div>
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

    // line 77
    public function getoro_rfp_frontend_request_lineitem_prototype($__widget__ = null, $__prototype_name__ = null, $__key__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "prototype_name" => $__prototype_name__,
            "key" => $__key__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 78
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroRFPBundle:Form:fields.html.twig", 78);
            // line 79
            echo "
    ";
            // line 80
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 81
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 82
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 83
                echo "        ";
                $context["id"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "id", array());
                // line 84
                echo "    ";
            } else {
                // line 85
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 86
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 87
                echo "        ";
                $context["id"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "id", array());
                // line 88
                echo "    ";
            }
            // line 89
            echo "
    ";
            // line 90
            if ( !(null === ($context["key"] ?? null))) {
                // line 91
                echo "        ";
                $context["prototype_name"] = ("child-" . ($context["key"] ?? null));
                // line 92
                echo "    ";
            }
            // line 93
            echo "
    <div data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "ororfp/js/app/views/frontend-line-item-view")), "html", null, true);
            // line 97
            echo "\"
         data-content=\"\"
         data-role=\"line-item\"
         data-skip-input-widgets
         class=\"request-form-line-container row-oro\"
        >

        <div class=\"request-form-product hidden\" data-role=\"line-item-view\">
            <div data-role=\"content\"></div>
            <div class=\"request-form-product__item request-form-product__item--actions\">
                <ul class=\"actions-row\">
                    <li class=\"actions-row__item actions-row__item--separate-light\">
                        <button class=\"actions-row__button\" title=\"Edit\" data-role=\"edit\">
                            <i class=\"actions-row__icon fa-pencil\"></i>
                        </button>
                    </li>
                    <li class=\"actions-row__item actions-row__item--separate-light\">
                        <button class=\"actions-row__button removeRow\" title=\"Delete\" data-role=\"remove\">
                            <i class=\"actions-row__icon fa-trash\"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>

    ";
            // line 122
            $context["page_component_options"] = twig_array_merge($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "page_component_options", array()), (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "componentOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "componentOptions", array()), array())) : (array())));
            // line 123
            echo "    <div class=\"request-form-editline\" data-role=\"line-item-edit\">
        <div data-content=\"";
            // line 124
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo "
             class=\"request-form-editline__inner\"
             data-page-component-module=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "page_component", array()), "html", null, true);
            echo "\"
             data-page-component-options=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["page_component_options"] ?? null)), "html", null, true);
            echo "\"
             data-layout=\"deferred-initialize\">
            ";
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            ";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
        </div>
        <div class=\"request-form-editline__footer\">
            <div class=\"request-form-editline__note\">
                <div class=\"request-form-editnote\">
                    ";
            // line 135
            $context["notes"] = $this->getAttribute(($context["form"] ?? null), "comment", array());
            // line 136
            echo "                    <label for=\"";
            echo twig_escape_filter($this->env, ("lineItem-" . ($context["prototype_name"] ?? null)), "html", null, true);
            echo "\" class=\"custom-checkbox\">
                        <input type=\"checkbox\"
                               name=\"";
            // line 138
            echo twig_escape_filter($this->env, ("lineItem" . ($context["id"] ?? null)), "html", null, true);
            echo "\"
                               data-role=\"field__comment-checkbox\"
                               id=\"";
            // line 140
            echo twig_escape_filter($this->env, ("lineItem-" . ($context["prototype_name"] ?? null)), "html", null, true);
            echo "\"";
            if ( !twig_test_empty(($context["notes"] ?? null))) {
                echo " checked=\"checked\"";
            }
            // line 141
            echo "                               class=\"custom-checkbox__input custom-checkbox__input\"
                        >
                        <span class=\"custom-checkbox__icon\"></span>
                        <span class=\"custom-checkbox__text\">";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.view.add_item_note.label"), "html", null, true);
            echo "</span>
                    </label>
                    <div class=\"request-form-editnote__body\">
                        ";
            // line 147
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", array()), 'widget');
            echo "
                        ";
            // line 148
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", array()), 'errors');
            echo "
                    </div>
                </div>
            </div>
            <div class=\"request-form-editline__action\">
                <div class=\"request-form-group\">
                    <div class=\"request-form-group__item\">
                        <button type=\"button\" class=\"btn\" data-role=\"decline\">";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                    </div>
                    <div class=\"request-form-group__item\">
                        <button type=\"button\" class=\"btn btn--info\" data-role=\"update\">";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
            echo "</button>
                    </div>
                </div>
            </div>
        </div>
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

    // line 213
    public function getoro_rfp_request_lineitem_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 214
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 215
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 216
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 217
                echo "    ";
            } else {
                // line 218
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 219
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 220
                echo "    ";
            }
            // line 221
            echo "    ";
            $context["page_component_options"] = twig_array_merge($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "page_component_options", array()), (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "componentOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "componentOptions", array()), array())) : (array())));
            // line 222
            echo "    <tr data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo "
        class=\"rfp-lineitem\"
        data-page-component-module=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "page_component", array()), "html", null, true);
            echo "\"
        data-page-component-options=\"";
            // line 225
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["page_component_options"] ?? null)), "html", null, true);
            echo "\"
            >
        ";
            // line 227
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
        ";
            // line 228
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
        <td class=\"request-form-lineitem-unit--remove\">
            <button type=\"button\" class=\"removeLineItem btn icons-holder\"><i class=\"fa-close\"></i></button>
        </td>
    </tr>
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

    // line 361
    public function getoro_rfp_request_lineitem_requested_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 362
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 363
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 364
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 365
                echo "    ";
            } else {
                // line 366
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 367
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 368
                echo "    ";
            }
            // line 369
            echo "    <tr data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo "
        class=\"rfp-lineitem-requested rfp-lineitem-requested-item\">
        ";
            // line 371
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
        <td class=\"rfp-lineitem-requested-remove\">
            <button type=\"button\" class=\"removeRow btn icons-holder\"><i class=\"fa-close\"></i></button>
        </td>
    </tr>
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
        return "OroRFPBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1348 => 371,  1340 => 369,  1337 => 368,  1334 => 367,  1331 => 366,  1328 => 365,  1325 => 364,  1322 => 363,  1319 => 362,  1307 => 361,  1286 => 228,  1282 => 227,  1277 => 225,  1273 => 224,  1265 => 222,  1262 => 221,  1259 => 220,  1256 => 219,  1253 => 218,  1250 => 217,  1247 => 216,  1244 => 215,  1241 => 214,  1229 => 213,  1206 => 158,  1200 => 155,  1190 => 148,  1186 => 147,  1180 => 144,  1175 => 141,  1169 => 140,  1164 => 138,  1158 => 136,  1156 => 135,  1148 => 130,  1144 => 129,  1139 => 127,  1135 => 126,  1128 => 124,  1125 => 123,  1123 => 122,  1096 => 97,  1094 => 95,  1090 => 93,  1087 => 92,  1084 => 91,  1082 => 90,  1079 => 89,  1076 => 88,  1073 => 87,  1070 => 86,  1067 => 85,  1064 => 84,  1061 => 83,  1058 => 82,  1055 => 81,  1053 => 80,  1050 => 79,  1047 => 78,  1033 => 77,  1009 => 22,  1004 => 19,  1002 => 14,  996 => 11,  990 => 9,  987 => 8,  984 => 7,  981 => 6,  978 => 5,  975 => 4,  972 => 3,  969 => 2,  957 => 1,  952 => 497,  946 => 494,  941 => 493,  939 => 492,  935 => 490,  929 => 487,  924 => 486,  922 => 485,  917 => 482,  915 => 480,  914 => 479,  913 => 478,  912 => 477,  911 => 475,  908 => 474,  905 => 473,  898 => 468,  881 => 465,  878 => 464,  861 => 463,  856 => 461,  851 => 458,  849 => 456,  848 => 455,  847 => 454,  846 => 453,  845 => 452,  844 => 451,  842 => 450,  839 => 449,  836 => 448,  829 => 444,  825 => 443,  819 => 440,  815 => 439,  809 => 436,  805 => 435,  799 => 432,  795 => 431,  792 => 430,  789 => 429,  782 => 425,  778 => 424,  775 => 423,  772 => 420,  770 => 417,  765 => 415,  761 => 414,  755 => 413,  752 => 412,  750 => 408,  745 => 406,  739 => 403,  736 => 402,  734 => 401,  731 => 400,  729 => 393,  722 => 389,  718 => 388,  715 => 387,  713 => 384,  708 => 382,  704 => 381,  701 => 380,  699 => 379,  696 => 378,  689 => 357,  684 => 354,  678 => 352,  675 => 351,  666 => 349,  661 => 348,  659 => 347,  647 => 346,  640 => 342,  636 => 341,  627 => 337,  622 => 336,  620 => 335,  617 => 334,  614 => 333,  611 => 332,  608 => 331,  605 => 330,  602 => 329,  599 => 328,  593 => 325,  588 => 322,  582 => 320,  579 => 319,  570 => 317,  565 => 316,  563 => 315,  559 => 313,  553 => 311,  551 => 310,  547 => 309,  543 => 308,  536 => 306,  531 => 305,  528 => 304,  525 => 303,  522 => 302,  519 => 301,  516 => 300,  513 => 299,  510 => 298,  503 => 294,  498 => 291,  492 => 289,  489 => 288,  480 => 286,  475 => 285,  473 => 284,  461 => 283,  454 => 279,  450 => 278,  442 => 274,  440 => 273,  437 => 272,  434 => 271,  431 => 270,  428 => 269,  425 => 268,  422 => 267,  419 => 266,  411 => 261,  407 => 260,  400 => 256,  396 => 255,  390 => 252,  386 => 251,  383 => 250,  380 => 249,  373 => 245,  369 => 244,  363 => 241,  359 => 240,  356 => 239,  353 => 236,  350 => 235,  343 => 209,  338 => 206,  332 => 204,  329 => 203,  320 => 201,  315 => 200,  313 => 199,  301 => 198,  294 => 194,  290 => 193,  286 => 192,  278 => 188,  276 => 187,  273 => 186,  270 => 185,  267 => 184,  264 => 183,  261 => 182,  258 => 181,  255 => 180,  248 => 176,  241 => 171,  239 => 169,  236 => 168,  233 => 167,  223 => 70,  217 => 66,  211 => 64,  208 => 63,  199 => 61,  194 => 60,  192 => 59,  188 => 57,  182 => 55,  180 => 54,  176 => 53,  172 => 52,  167 => 51,  165 => 50,  161 => 48,  159 => 47,  155 => 46,  151 => 44,  148 => 43,  145 => 42,  142 => 41,  139 => 40,  136 => 39,  133 => 38,  126 => 34,  123 => 33,  120 => 32,  116 => 473,  113 => 472,  111 => 448,  108 => 447,  106 => 429,  103 => 428,  101 => 378,  98 => 377,  95 => 360,  93 => 328,  90 => 327,  88 => 298,  85 => 297,  83 => 266,  80 => 265,  78 => 249,  75 => 248,  73 => 235,  70 => 234,  67 => 212,  65 => 180,  62 => 179,  60 => 167,  57 => 166,  54 => 76,  52 => 38,  49 => 37,  47 => 32,  44 => 31,  14 => 379,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:Form:fields.html.twig", "");
    }
}
