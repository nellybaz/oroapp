<?php

/* OroRFPBundle:layouts/default/oro_rfp_frontend_request_view:layout.html.twig */
class __TwigTemplate_043b4a60f5f3463d576cc6750d1c356c0ab1f2a961267abbdefe45bac713d9dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_rfp_request_view_toolbar_actions_widget' => array($this, 'block__rfp_request_view_toolbar_actions_widget'),
            '_rfp_request_view_customer_status_widget' => array($this, 'block__rfp_request_view_customer_status_widget'),
            '_rfp_request_view_information_widget' => array($this, 'block__rfp_request_view_information_widget'),
            '_rfp_request_view_additional_notes_widget' => array($this, 'block__rfp_request_view_additional_notes_widget'),
            '_rfp_request_view_line_items_widget' => array($this, 'block__rfp_request_view_line_items_widget'),
            '_rfp_request_view_notes_container_widget' => array($this, 'block__rfp_request_view_notes_container_widget'),
            '_rfp_request_view_notes_widget' => array($this, 'block__rfp_request_view_notes_widget'),
            '_rfp_request_view_bottom_widget' => array($this, 'block__rfp_request_view_bottom_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_rfp_request_view_toolbar_actions_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_rfp_request_view_customer_status_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('_rfp_request_view_information_widget', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('_rfp_request_view_additional_notes_widget', $context, $blocks);
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('_rfp_request_view_line_items_widget', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('_rfp_request_view_notes_container_widget', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('_rfp_request_view_notes_widget', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('_rfp_request_view_bottom_widget', $context, $blocks);
    }

    // line 1
    public function block__rfp_request_view_toolbar_actions_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " controls-list"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 11
    public function block__rfp_request_view_customer_status_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.customer_status.label"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    <div class=\"box-toolbar__content\">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "</div>
";
    }

    // line 18
    public function block__rfp_request_view_information_widget($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroRFPBundle:layouts/default/oro_rfp_frontend_request_view:layout.html.twig", 19);
        // line 20
        echo "
    <div class=\"customer-info-grid\">
        <h2 class=\"customer-info-grid__title\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.sections.general"), "html", null, true);
        echo "
        </h2>
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--6 grid__column--no-gutters-l\">
                <table class=\"customer-info-grid__table\">
                    <tbody>
                        <tr class=\"customer-info-grid__row\">
                            <td class=\"customer-info-grid__element-label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.first_name.label"), "html", null, true);
        echo "</td>
                            <td class=\"customer-info-grid__element-content\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "firstName", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"customer-info-grid__row\">
                            <td class=\"customer-info-grid__element-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.last_name.label"), "html", null, true);
        echo "</td>
                            <td class=\"customer-info-grid__element-content\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "lastName", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"customer-info-grid__row\">
                            <td class=\"customer-info-grid__element-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.email.label"), "html", null, true);
        echo "</td>
                            <td class=\"customer-info-grid__element-content\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "email", array()), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 41
        if ($this->getAttribute(($context["request"] ?? null), "phone", array())) {
            // line 42
            echo "                            <tr class=\"customer-info-grid__row\">
                                <td class=\"customer-info-grid__element-label\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.phone.label"), "html", null, true);
            echo "</td>
                                <td class=\"customer-info-grid__element-content\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "phone", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        // line 47
        echo "                        <tr class=\"customer-info-grid__row\">
                            <td class=\"customer-info-grid__element-label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.company.label"), "html", null, true);
        echo "</td>
                            <td class=\"customer-info-grid__element-content\">";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["request"] ?? null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["request"] ?? null), "company", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 51
        if ($this->getAttribute(($context["request"] ?? null), "role", array())) {
            // line 52
            echo "                            <tr class=\"customer-info-grid__row\">
                                <td class=\"customer-info-grid__element-label\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.role.label"), "html", null, true);
            echo "</td>
                                <td class=\"customer-info-grid__element-content\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "role", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        // line 57
        echo "                        ";
        if ($this->getAttribute(($context["request"] ?? null), "poNumber", array())) {
            // line 58
            echo "                            <tr class=\"customer-info-grid__row\">
                                <td class=\"customer-info-grid__element-label\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.po_number.label"), "html", null, true);
            echo "</td>
                                <td class=\"customer-info-grid__element-content\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "poNumber", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        // line 63
        echo "                        ";
        if ($this->getAttribute(($context["request"] ?? null), "shipUntil", array())) {
            // line 64
            echo "                            <tr class=\"customer-info-grid__row\">
                                <td class=\"customer-info-grid__element-label\">";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.ship_until.label"), "html", null, true);
            echo "</td>
                                <td class=\"customer-info-grid__element-content\">";
            // line 66
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["request"] ?? null), "shipUntil", array()));
            echo "</td>
                            </tr>
                        ";
        }
        // line 69
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"grid__column grid__column--6 grid__column--no-gutters-r\">
                <table class=\"customer-info-grid__table\">
                    <tbody>
                        ";
        // line 75
        if (($this->env->getExtension('Oro\Bundle\CustomerBundle\Twig\CustomerExtension')->isGrantedViewCustomerUser(($context["request"] ?? null)) && $this->getAttribute(($context["request"] ?? null), "customerUser", array()))) {
            // line 76
            echo "                            <tr class=\"customer-info-grid__row\">
                                <td class=\"customer-info-grid__element-label\">";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.customer_user.label"), "html", null, true);
            echo "</td>
                                <td class=\"customer-info-grid__element-content\">
                                    ";
            // line 79
            echo $context["UI"]->getentityViewLink($this->getAttribute(($context["request"] ?? null), "customerUser", array()), $this->getAttribute($this->getAttribute(($context["request"] ?? null), "customerUser", array()), "fullName", array()), "oro_customer_frontend_customer_user_view");
            echo "
                                </td>
                            </tr>
                        ";
        }
        // line 83
        echo "                        ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["request"] ?? null), "assignedCustomerUsers", array()))) {
            // line 84
            echo "                            <tr>
                                <td class=\"customer-info-grid__element-label\">";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.assigned_customer_users.label"), "html", null, true);
            echo "</td>
                                <td class=\"customer-info-grid__element-content\">
                                    ";
            // line 87
            echo $context["UI"]->getentityViewLinks($this->getAttribute(($context["request"] ?? null), "assignedCustomerUsers", array()), "fullName", "oro_customer_frontend_customer_user_view");
            echo "
                                </td>
                            </tr>
                        ";
        }
        // line 91
        echo "                        ";
        if ($this->getAttribute(($context["request"] ?? null), "note", array())) {
            // line 92
            echo "                            <tr class=\"account-oq__order-info__control\">
                                <td class=\"customer-info-grid__element-label\">";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.note.label"), "html", null, true);
            echo "</td>
                                <td class=\"customer-info-grid__element-content\">";
            // line 94
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "note", array()), "html", null, true));
            echo "</td>
                            </tr>
                        ";
        }
        // line 97
        echo "                        ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 105
    public function block__rfp_request_view_additional_notes_widget($context, array $blocks = array())
    {
        // line 106
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroRFPBundle:layouts/default/oro_rfp_frontend_request_view:layout.html.twig", 106);
        // line 107
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["block"] ?? null), "vars", array()), "visible", array())) {
            // line 108
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(            // line 109
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " notes collapse-view expanded")));
            // line 111
            echo "
        <div ";
            // line 112
            $this->displayBlock("block_attributes", $context, $blocks);
            echo " data-page-component-collapse=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("storageKey" => ($context["id"] ?? null))), "html", null, true);
            echo "\">
            <h3 class=\"section-title section-title--size-m\">
                ";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.sections.notes.label"), "html", null, true);
            echo "
                <span class=\"notes__count\">(";
            // line 115
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["requestAdditionalNotes"] ?? null)), "html", null, true);
            echo ")</span>
                <span class=\"collapse-view__trigger collapse-view__trigger--icon\" data-collapse-trigger>
                    <i class=\"collapse-view__trigger-icon fa-caret-right\" data-toggle=\"collapse\"></i>
                </span>
            </h3>
            <div data-collapse-container>
                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["requestAdditionalNotes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["requestAdditionalNote"]) {
                // line 122
                echo "                    <article class=\"notes__item\">
                        <header class=\"notes__info\">
                            <p>
                                <span class=\"bold\">";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["requestAdditionalNote"], "author", array()), "html", null, true);
                echo "</span>
                                <span class=\"notes__date\">";
                // line 126
                echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($context["requestAdditionalNote"], "createdAt", array()));
                echo "</span>
                            </p>
                        </header>
                        <div>
                            <p>";
                // line 130
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["requestAdditionalNote"], "text", array())));
                echo "</p>
                        </div>
                    </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requestAdditionalNote'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "            </div>
        </div>
    ";
        }
    }

    // line 139
    public function block__rfp_request_view_line_items_widget($context, array $blocks = array())
    {
        // line 140
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroRFPBundle:layouts/default/oro_rfp_frontend_request_view:layout.html.twig", 140);
        // line 141
        echo "    <div class=\"customer-line-items\">
        <h2 class=\"customer-line-items__title\">
            ";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.sections.request_products.label"), "html", null, true);
        echo "
        </h2>
        <table class=\"oro-grid-table customer-line-items__table\">
            <thead class=\"grid-header hide-on-mobile-landscape\">
                <tr class=\"grid-header-row\">
                    <th class=\"grid-cell\" colspan=\"2\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.sections.request_products.columns.item.label"), "html", null, true);
        echo "</th>
                    <th class=\"grid-cell\">";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.sections.request_products.columns.quantity.label"), "html", null, true);
        echo "</th>
                    <th class=\"grid-cell\">";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.sections.request_products.columns.price.label"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["requestProducts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["requestProduct"]) {
            // line 154
            echo "                <tbody class=\"grid-body\">
                ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["requestProduct"], "requestProductItems", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["requestProductItem"]) {
                // line 156
                echo "                    <tr class=\"grid-row\">
                        ";
                // line 157
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 158
                    echo "                            <td class=\"grid-cell grid-cell--offset-none-mobile primary-cell\" colspan=\"2\" rowspan=\"";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["requestProduct"], "requestProductItems", array())), "html", null, true);
                    echo "\">
                                <h3 class=\"oro-grid-table__title\">
                                    ";
                    // line 160
                    if ($this->getAttribute($this->getAttribute($context["requestProduct"], "product", array(), "any", false, true), "id", array(), "any", true, true)) {
                        // line 161
                        echo "                                        ";
                        echo $context["UI"]->getlink(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_view", array("id" => $this->getAttribute($this->getAttribute(                        // line 162
$context["requestProduct"], "product", array()), "id", array()))), "label" => $this->getAttribute(                        // line 163
$context["requestProduct"], "product", array())));
                        // line 164
                        echo "
                                    ";
                    } else {
                        // line 166
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["requestProduct"], "product", array()), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 168
                    echo "                                </h3>
                                <div>";
                    // line 169
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.requestproduct.product_sku.label"), "html", null, true);
                    echo " <span class=\"customer-line-items__sku-value\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["requestProduct"], "productSku", array()), "html", null, true);
                    echo "</span></div>

                                <div class=\"grid-row hide-on-desktop hide-on-strict-tablet\">
                                    <div class=\"grid-head grid-cell--offset-l-none-mobile\" aria-hidden=\"true\">
                                        ";
                    // line 173
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.sections.request_products.columns.quantity.label"), "html", null, true);
                    echo "
                                    </div>
                                    <div class=\"grid-head\" aria-hidden=\"true\">
                                        ";
                    // line 176
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.sections.request_products.columns.price.label"), "html", null, true);
                    echo "
                                    </div>
                                </div>
                            </td>
                        ";
                }
                // line 181
                echo "                        <td class=\"grid-cell grid-cell--offset-l-none-mobile\">
                            ";
                // line 182
                if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\UnitVisibilityExtension')->isUnitCodeVisible($this->getAttribute($this->getAttribute($context["requestProductItem"], "productUnit", array()), "code", array()))) {
                    // line 183
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitValueExtension')->formatShort($this->getAttribute($context["requestProductItem"], "quantity", array()), $this->getAttribute($context["requestProductItem"], "productUnit", array())), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 185
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["requestProductItem"], "quantity", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 187
                echo "                        </td>
                        <td class=\"grid-cell\">
                            ";
                // line 189
                if ($this->getAttribute($context["requestProductItem"], "price", array())) {
                    // line 190
                    echo "                                ";
                    echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute($context["requestProductItem"], "price", array()));
                    echo "
                            ";
                }
                // line 192
                echo "                        </td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requestProductItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "
                ";
            // line 196
            if ( !twig_test_empty($this->getAttribute($context["requestProduct"], "comment", array()))) {
                // line 197
                echo "                    <tr class=\"grid-row\">
                        <td class=\"grid-cell notes-cell\" colspan=\"4\">
                            <div class=\"customer-line-items__notes\">
                                ";
                // line 200
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.requestproduct.comment.label"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["requestProduct"], "comment", array()), "html", null, true);
                echo "
                            </div>
                        </td>
                    </tr>
                ";
            }
            // line 205
            echo "            </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requestProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "        </table>
    </div>
";
    }

    // line 211
    public function block__rfp_request_view_notes_container_widget($context, array $blocks = array())
    {
        // line 212
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["block"] ?? null), "vars", array()), "visible", array())) {
            // line 213
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <h3 class=\"customer-navigation-title\">
                ";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.sections.notes.label"), "html", null, true);
            echo "
            </h3>
            ";
            // line 217
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </div>
    ";
        }
    }

    // line 222
    public function block__rfp_request_view_notes_widget($context, array $blocks = array())
    {
        // line 223
        echo "    ";
        echo nl2br($this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget'));
        echo "
";
    }

    // line 226
    public function block__rfp_request_view_bottom_widget($context, array $blocks = array())
    {
        // line 227
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 228
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " order-checkout-widget")));
        // line 230
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 231
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:layouts/default/oro_rfp_frontend_request_view:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  610 => 231,  605 => 230,  603 => 228,  601 => 227,  598 => 226,  591 => 223,  588 => 222,  580 => 217,  575 => 215,  569 => 213,  566 => 212,  563 => 211,  557 => 207,  550 => 205,  540 => 200,  535 => 197,  533 => 196,  530 => 195,  514 => 192,  508 => 190,  506 => 189,  502 => 187,  496 => 185,  490 => 183,  488 => 182,  485 => 181,  477 => 176,  471 => 173,  462 => 169,  459 => 168,  453 => 166,  449 => 164,  447 => 163,  446 => 162,  444 => 161,  442 => 160,  436 => 158,  434 => 157,  431 => 156,  414 => 155,  411 => 154,  407 => 153,  401 => 150,  397 => 149,  393 => 148,  385 => 143,  381 => 141,  378 => 140,  375 => 139,  368 => 134,  358 => 130,  351 => 126,  347 => 125,  342 => 122,  338 => 121,  329 => 115,  325 => 114,  318 => 112,  315 => 111,  313 => 109,  311 => 108,  308 => 107,  305 => 106,  302 => 105,  290 => 97,  284 => 94,  280 => 93,  277 => 92,  274 => 91,  267 => 87,  262 => 85,  259 => 84,  256 => 83,  249 => 79,  244 => 77,  241 => 76,  239 => 75,  231 => 69,  225 => 66,  221 => 65,  218 => 64,  215 => 63,  209 => 60,  205 => 59,  202 => 58,  199 => 57,  193 => 54,  189 => 53,  186 => 52,  184 => 51,  179 => 49,  175 => 48,  172 => 47,  166 => 44,  162 => 43,  159 => 42,  157 => 41,  152 => 39,  148 => 38,  142 => 35,  138 => 34,  132 => 31,  128 => 30,  118 => 23,  113 => 20,  110 => 19,  107 => 18,  100 => 15,  92 => 13,  89 => 12,  86 => 11,  79 => 7,  75 => 6,  72 => 5,  69 => 2,  66 => 1,  62 => 226,  59 => 225,  57 => 222,  54 => 221,  52 => 211,  49 => 210,  47 => 139,  44 => 138,  42 => 105,  39 => 104,  37 => 18,  34 => 17,  32 => 11,  29 => 10,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:layouts/default/oro_rfp_frontend_request_view:layout.html.twig", "");
    }
}
