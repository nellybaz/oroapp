<?php

/* OroEmailBundle::macros.html.twig */
class __TwigTemplate_d2dfac67cd4803e1c87e217a887e28f3839bbc1ef2aedd582b697867b4068755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 237
        echo "
";
        // line 259
        echo "
";
        // line 335
        echo "
";
        // line 400
        echo "
";
        // line 414
        echo "
";
        // line 438
        echo "
";
        // line 456
        echo "
";
        // line 475
        echo "
";
        // line 528
        echo "
";
        // line 538
        echo "
";
        // line 578
        echo "
";
    }

    // line 1
    public function getrenderAvailableVariablesWidget($__entityName__ = null, $__entityChoiceFieldId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entityName" => $__entityName__,
            "entityChoiceFieldId" => $__entityChoiceFieldId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <script type=\"text/template\" id=\"oro-email-template-variables-template\">
        <div class=\"emailtemplate-variables oro-tabs tabbable\">
            <ul class=\"nav nav-tabs\">
                <li class=\"active\" id=\"oro-email-template-variables-system-tab\">
                    <a href=\"javascript:void(0);\" data-target=\"#oro-email-template-variables-system\" data-toggle=\"tab\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailtemplate.variables.system"), "html", null, true);
            echo "
                    </a>
                </li>
                <li id=\"oro-email-template-variables-entity-tab\">
                    <a href=\"javascript:void(0);\" data-target=\"#oro-email-template-variables-entity\" data-toggle=\"tab\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailtemplate.variables.entity"), "html", null, true);
            echo "
                    </a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"variables tab-pane active\" id=\"oro-email-template-variables-system\">
                    <%= variables.system %>
                </div>
                <div class=\"variables tab-pane\" id=\"oro-email-template-variables-entity\">
                </div>
            </div>
        </div>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-system-template\">
        <ul class=\"nav\">
            <% _.each(variables, function(variable, varName) { %>
            <li>
                <a href=\"javascript:void(0);\"
                   class=\"variable\"
                   title=\"<%= _.__('oro.email.emailtemplate.variable_title', {'variable_label': variable.label}) %>\">";
            // line 31
            echo "{{ <%= root %>.<%= varName %><% if(variable.filter){%>|<%= variable.filter %><% } %> }}";
            echo "</a>
                <span>&ndash; <%= variable.label %></span>
            </li>
            <% }); %>
        </ul>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-entity-variable-template\">
        <li>
            <a href=\"javascript:void(0);\"
               class=\"variable\"
               title=\"<%= _.__('oro.email.emailtemplate.variable_title', {'variable_label': variable.label}) %>\"
            >";
            // line 42
            echo "{{ <%= varValue %> }}";
            echo "</a>
            <span>&ndash;</span>
            <ul class=\"caption\">
                <% for (var i = 1; i < breadcrumbs.length; i++) { %>
                <li>
                    <span><%= pathLabels[breadcrumbs[i]] %></span>
                    <span>/</span>
                </li>
                <% } %>
                <li><%= variable.label %></li>
            </ul>
        </li>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-entity-template\">
        <% var breadcrumbs = path.split('/'); breadcrumbs[0] = root; %>
        <ul class=\"breadcrumb\">
            <% var breadcrumbPath = ''; %>
            <% for (var i = 0; i < breadcrumbs.length; i++) { %>
            <% breadcrumbPath += '/' + breadcrumbs[i]; %>
            <% breadcrumbItemLabel = (i === 0 ? entityLabel : pathLabels[breadcrumbs[i]]); %>
            <li<% if (i === breadcrumbs.length - 1) { %> class=\"active\"<% } %>>
                <% if (i !== breadcrumbs.length - 1) { %>
                <a href=\"javascript:void(0);\"
                   class=\"reference\"
                   data-path=\"<%= breadcrumbPath.substring(root.length + 1) %>\"><%= breadcrumbItemLabel %></a>
                <span class=\"divider\">/&nbsp;</span>
                <% } else { %>
                    <%= breadcrumbItemLabel %>
                <% } %>
            </li>
            <% } %>
        </ul>
        <% var varPrefix = path.split('/'); varPrefix[0] = root; varPrefix = varPrefix.join('.'); %>
        <% if (!_.isEmpty(fields) || !_.isEmpty(relations)) { %>
        <ul class=\"nav groups\">
            <% if (!_.isEmpty(fields)) { %>
            <li>
                <div class=\"group-label\"><%= _.__('oro.entity.field_choice.fields') %></div>
                <ul class=\"nav\">
                <% var variableTemplate =  _.template(\$('#oro-email-template-variables-entity-variable-template').html()) %>
                <% _.each(fields, function(variable, varName) { %>
                    <%= variableTemplate({
                        varValue:    varPrefix + '.' + varName,
                        breadcrumbs: breadcrumbs,
                        pathLabels:  pathLabels,
                        variable:    variable
                    }) %>
                    ";
            // line 101
            echo "
                    ";
            // line 119
            echo "                <% }); %>
                </ul>
            </li>
            <% } %>
            <% if (!_.isEmpty(relations)) { %>
            <li>
                <div class=\"group-label\"><%= _.__('oro.entity.field_choice.relations') %></div>
                <ul class=\"nav\">
                    <% _.each(relations, function(variable, varName) { %>
                    <li>
                        <a href=\"javascript:void(0);\"
                           class=\"reference\"
                           data-path=\"<%= path + '/' + varName %>\"
                           title=\"<%= _.__('oro.email.emailtemplate.reference_title', {'variable_label': variable.label}) %>\">";
            // line 132
            echo "{{ <%= varPrefix %>.<%= varName %> }}";
            echo "</a>
                        <span>&ndash; <%= variable.label %></span>
                    </li>
                    <% }); %>
                </ul>
            </li>
            <% } %>
        </ul>
        <% } %>
    </script>

    ";
            // line 143
            $context["options"] = array("name" => "email-template-variables", "entityChoice" => ("#" .             // line 145
($context["entityChoiceFieldId"] ?? null)), "view" => array("templateSelector" => "#oro-email-template-variables-template", "sectionTemplateSelector" => "#oro-email-template-variables-{sectionName}-template", "sectionContentSelector" => "#oro-email-template-variables-{sectionName}", "sectionTabSelector" => "#oro-email-template-variables-{sectionName}-tab"), "model" => array("attributes" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_get_emailtemplate_variables")), "entityName" =>             // line 154
($context["entityName"] ?? null), "entityLabel" => ((            // line 155
($context["entityName"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(($context["entityName"] ?? null), "label"))) : (""))));
            // line 158
            echo "    <div data-page-component-module=\"oroemail/js/app/components/email-variable-component\"
         data-page-component-options=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
            echo "\"
         data-page-component-name=\"email-template-variables\"></div>
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

    // line 167
    public function getemail_address_text($__emailAddress__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 168
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(_twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["emailAddress"] ?? null), "owner", array())), "N/A"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 177
    public function getemail_address_link($__emailAddress__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 178
            echo $this->getAttribute($this, "renderEmailAddressLink", array(0 => _twig_default_filter($this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(            // line 179
($context["label"] ?? null)), $this->getAttribute($this, "email_address_text", array(0 => ($context["emailAddress"] ?? null)), "method")), 1 => $this->getAttribute($this->getAttribute(            // line 180
($context["emailAddress"] ?? null), "owner", array()), "class", array()), 2 => $this->getAttribute($this->getAttribute(            // line 181
($context["emailAddress"] ?? null), "owner", array()), "id", array())), "method");
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 191
    public function getrenderEmailAddressLink($__label__ = null, $__ownerClass__ = null, $__ownerId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "ownerClass" => $__ownerClass__,
            "ownerId" => $__ownerId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 192
            $context["route"] = $this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassRoute(($context["ownerClass"] ?? null));
            // line 193
            echo "    ";
            if ( !(null === ($context["route"] ?? null))) {
                // line 194
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), array("id" => ($context["ownerId"] ?? null))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(($context["label"] ?? null));
                echo "</a>
    ";
            } else {
                // line 196
                echo "        ";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(($context["label"] ?? null));
                echo "
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

    // line 205
    public function getemail_address_recipient_link($__emailAddress__ = null, $__emailAddressName__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 206
            $context["label"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(($context["label"] ?? null)), ((array_key_exists("emailAddressName", $context)) ? (_twig_default_filter(($context["emailAddressName"] ?? null), "N/A")) : ("N/A")));
            // line 207
            echo "    ";
            $context["route"] = $this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassRoute($this->getAttribute($this->getAttribute(($context["emailAddress"] ?? null), "owner", array()), "class", array()));
            // line 208
            echo "    ";
            if ( !(null === ($context["route"] ?? null))) {
                // line 209
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), array("id" => $this->getAttribute($this->getAttribute(($context["emailAddress"] ?? null), "owner", array()), "id", array()))), "html", null, true);
                echo "\">
            ";
                // line 210
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 212
                echo "        ";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
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

    // line 224
    public function getemail_address($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 225
            if ((null === $this->getAttribute(($context["emailAddress"] ?? null), "owner", array()))) {
                // line 226
                if ( !((array_key_exists("knownOnly", $context)) ? (_twig_default_filter(($context["knownOnly"] ?? null), false)) : (false))) {
                    // line 227
                    echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(($context["emailAddressName"] ?? null));
                }
            } else {
                // line 230
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter(($context["noLink"] ?? null), false)) : (false))) {
                    // line 231
                    echo $this->getAttribute($this, "email_address_text", array(0 => ($context["emailAddress"] ?? null)), "method");
                } else {
                    // line 233
                    echo $this->getAttribute($this, "email_address_link", array(0 => ($context["emailAddress"] ?? null)), "method");
                }
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

    // line 246
    public function getemail_address_recipient($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 247
            if ((null === $this->getAttribute(($context["emailAddress"] ?? null), "owner", array()))) {
                // line 248
                if ( !((array_key_exists("knownOnly", $context)) ? (_twig_default_filter(($context["knownOnly"] ?? null), false)) : (false))) {
                    // line 249
                    echo twig_escape_filter($this->env, ($context["emailAddressName"] ?? null), "html", null, true);
                }
            } else {
                // line 252
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter(($context["noLink"] ?? null), false)) : (false))) {
                    // line 253
                    echo twig_escape_filter($this->env, ($context["emailAddressName"] ?? null), "html", null, true);
                } else {
                    // line 255
                    echo $this->getAttribute($this, "email_address_recipient_link", array(0 => ($context["emailAddress"] ?? null), 1 => ($context["emailAddressName"] ?? null)), "method");
                }
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

    // line 266
    public function getemail_address_simple($__email__ = null, $__title__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "email" => $__email__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 267
            if ( !twig_test_empty(($context["email"] ?? null))) {
                // line 268
                echo "        ";
                $context["emailAddress"] = null;
                // line 269
                echo "        ";
                // line 270
                echo "        ";
                if ($this->getAttribute(($context["email"] ?? null), "email", array(), "any", true, true)) {
                    // line 271
                    echo "            ";
                    if ( !twig_test_empty($this->getAttribute(($context["email"] ?? null), "email", array()))) {
                        // line 272
                        echo "                ";
                        $context["emailAddress"] = $this->getAttribute(($context["email"] ?? null), "email", array());
                        // line 273
                        echo "            ";
                    }
                    // line 274
                    echo "            ";
                    // line 275
                    echo "        ";
                } else {
                    // line 276
                    echo "            ";
                    $context["emailAddress"] = ($context["email"] ?? null);
                    // line 277
                    echo "        ";
                }
                // line 278
                echo "
        ";
                // line 279
                if (twig_test_empty(($context["title"] ?? null))) {
                    // line 280
                    echo "            ";
                    $context["title"] = ($context["emailAddress"] ?? null);
                    // line 281
                    echo "        ";
                }
                // line 282
                echo "
        ";
                // line 283
                if (($context["emailAddress"] ?? null)) {
                    // line 284
                    echo "            <a href=\"mailto:";
                    echo twig_escape_filter($this->env, ($context["emailAddress"] ?? null), "html_attr");
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html_attr");
                    echo "\" class=\"email\">";
                    echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(($context["title"] ?? null));
                    echo "</a>
        ";
                }
                // line 286
                echo "    ";
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

    // line 295
    public function getrenderEmailWithActions($__email__ = null, $__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "email" => $__email__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 296
            if ( !twig_test_empty(($context["email"] ?? null))) {
                // line 297
                ob_start();
                // line 298
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("email_actions", $context)) ? (_twig_default_filter(($context["email_actions"] ?? null), "email_actions")) : ("email_actions")), array("email" => ($context["email"] ?? null), "entity" => ($context["entity"] ?? null)));
                $context["actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 300
                $context["actions"] = twig_trim_filter(($context["actions"] ?? null));
                // line 301
                echo "        <span class=\"inline-actions-element";
                if (twig_test_empty(($context["actions"] ?? null))) {
                    echo " inline-actions-element_no-actions";
                }
                echo "\">
            <span class=\"inline-actions-element_wrapper\">";
                // line 302
                echo $this->getAttribute($this, "email_address_simple", array(0 => ($context["email"] ?? null)), "method");
                echo "</span>
            ";
                // line 303
                if ( !twig_test_empty(($context["actions"] ?? null))) {
                    // line 304
                    echo "<span class=\"inline-actions-element_actions email-actions\">";
                    echo ($context["actions"] ?? null);
                    echo "</span>";
                }
                // line 306
                echo "        </span>
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

    // line 317
    public function getrecipient_email_addresses($__recipients__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "recipients" => $__recipients__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 318
            $context["addresses"] = array();
            // line 319
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recipients"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 320
                $context["address"] = $this->getAttribute($this, "email_address_recipient", array(0 => $this->getAttribute($context["recipient"], "emailAddress", array()), 1 => $this->getAttribute($context["recipient"], "name", array()), 2 => ($context["noLink"] ?? null), 3 => ($context["knownOnly"] ?? null)), "method");
                // line 321
                if ((twig_length_filter($this->env, ($context["address"] ?? null)) > 0)) {
                    // line 322
                    $context["addresses"] = twig_array_merge(($context["addresses"] ?? null), array(0 => ($context["address"] ?? null)));
                    // line 323
                    echo "        ";
                } else {
                    // line 324
                    echo "            ";
                    $context["addresses"] = twig_array_merge(($context["addresses"] ?? null), array(0 => $this->getAttribute($this->getAttribute($context["recipient"], "emailAddress", array()), "email", array())));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 329
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($context["address"]);
                // line 330
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "; ";
                }
                // line 331
                echo "    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 332
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
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

    // line 343
    public function getattachments($__attachments__ = null, $__target__ = null, $__hasGrantReattach__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attachments" => $__attachments__,
            "target" => $__target__,
            "hasGrantReattach" => $__hasGrantReattach__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 344
            $context["galleryUid"] = twig_random($this->env);
            // line 345
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attachments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 346
                if ((null === $this->getAttribute($context["attachment"], "embeddedContentId", array()))) {
                    // line 347
                    echo "            ";
                    $context["canCopyToRecord"] = ((((($context["hasGrantReattach"] ?? null) && array_key_exists("target", $context)) && $this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->canReAttach($context["attachment"], ($context["target"] ?? null)))) ? (true) : (false));
                    // line 348
                    echo "            ";
                    $context["attachmentUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_attachment", array("id" => $this->getAttribute($context["attachment"], "id", array())));
                    // line 349
                    echo "            ";
                    $context["isImage"] = $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getTypeIsImage($this->getAttribute($context["attachment"], "contentType", array()));
                    // line 350
                    echo "            ";
                    $context["isPreviewAvailable"] = $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->isPreviewAvailable($this->getAttribute($context["attachment"], "contentType", array()));
                    // line 351
                    echo "            ";
                    $context["icon"] = $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getAttachmentIcon($context["attachment"]);
                    // line 352
                    echo "            <li class=\"email-attachments-list-item\">
                <div class=\"email-attachments-file\">
                    ";
                    // line 354
                    if (($context["isImage"] ?? null)) {
                        // line 355
                        echo "                        <a data-gallery=\"gallery-";
                        echo twig_escape_filter($this->env, ($context["galleryUid"] ?? null), "html", null, true);
                        echo "\"
                           data-filename=\"";
                        // line 356
                        echo twig_escape_filter($this->env, $this->getAttribute($context["attachment"], "fileName", array()), "html", null, true);
                        echo "\"
                           class=\"no-hash\"
                           href=\"";
                        // line 358
                        echo twig_escape_filter($this->env, ($context["attachmentUrl"] ?? null), "html", null, true);
                        echo "\">
                            <span class=\"thumbnail\" style=\"background: url('";
                        // line 359
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_resize_email_attachment", array("id" => $this->getAttribute($context["attachment"], "id", array()), "width" => 110, "height" => 80)), "html", null, true);
                        echo "') 50% 50% no-repeat;\"></span>
                        </a>
                    ";
                    } else {
                        // line 362
                        echo "                        <div class=\"thumbnail\">
                            <i class=\"fa ";
                        // line 363
                        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                        echo " fa-3x\"></i>
                        </div>
                    ";
                    }
                    // line 366
                    echo "                </div>
                <div class=\"dropdown link-to-record\">
                    <a class=\"no-hash dropdown-toggle\" href=\"javascript: void(0);\" data-toggle=\"dropdown\">
                        <i class=\"fa ";
                    // line 369
                    echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                    echo "\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\FormatExtension')->formatFilename($this->getAttribute($context["attachment"], "fileName", array()), 11, 4, 5), "html", null, true);
                    echo "
                    </a>
                    <ul class=\"dropdown-menu ";
                    // line 371
                    echo ((($context["canCopyToRecord"] ?? null)) ? ("") : ("one"));
                    echo "\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                        ";
                    // line 372
                    if (($context["isPreviewAvailable"] ?? null)) {
                        // line 373
                        echo "                            <a class=\"view-image no-hash\" tabindex=\"-1\" data-gallery=\"gallery-";
                        echo twig_escape_filter($this->env, ($context["galleryUid"] ?? null), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, ($context["attachmentUrl"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.attachment.view"), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 375
                    echo "                        <a class=\"no-hash\" tabindex=\"-1\" href=\"";
                    echo twig_escape_filter($this->env, ($context["attachmentUrl"] ?? null), "html", null, true);
                    echo "\">
                            ";
                    // line 376
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.attachment.save"), "html", null, true);
                    echo "<span>(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileSize($this->getAttribute($context["attachment"], "size", array())), "html", null, true);
                    echo ")</span>
                        </a>
                        ";
                    // line 378
                    if (($context["canCopyToRecord"] ?? null)) {
                        // line 379
                        echo "                            ";
                        $context["options"] = array("view" => "oroemail/js/app/views/email-attachment-link-view", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_attachment_link", array("id" => $this->getAttribute(                        // line 382
$context["attachment"], "id", array()), "targetActivityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(                        // line 383
($context["target"] ?? null)), "targetActivityId" => $this->getAttribute(                        // line 384
($context["target"] ?? null), "id", array()))));
                        // line 387
                        echo "                        <a tabindex=\"-1\" data-page-component-module=\"oroui/js/app/components/view-component\"
                            class=\"attachment\"
                            data-page-component-options=\"";
                        // line 389
                        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
                        echo "\"
                            href=\"";
                        // line 390
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "url", array()), "html", null, true);
                        echo "\">
                            ";
                        // line 391
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.attachment.copy_to_record"), "html", null, true);
                        echo "
                        </a>
                        ";
                    }
                    // line 394
                    echo "                    </ul>
                </div>
            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
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

    // line 407
    public function getbody($__emailBody__ = null, $__cssClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailBody" => $__emailBody__,
            "cssClass" => $__cssClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 408
            if ($this->getAttribute(($context["emailBody"] ?? null), "bodyIsText", array())) {
                // line 409
                echo "<pre class=\"email-body";
                if (array_key_exists("cssClass", $context)) {
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["cssClass"] ?? null), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["emailBody"] ?? null), "bodyContent", array()), "html", null, true);
                echo "</pre>";
            } else {
                // line 411
                echo "<iframe sandbox=\"\" class=\"email-body";
                if (array_key_exists("cssClass", $context)) {
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["cssClass"] ?? null), "html", null, true);
                }
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_body", array("id" => $this->getAttribute(($context["emailBody"] ?? null), "id", array()))), "html", null, true);
                echo "\"></iframe>";
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

    // line 424
    public function getemail_participant_name_or_me($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 425
            if ((( !(null === $this->getAttribute(($context["emailAddress"] ?? null), "owner", array())) && ($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute(            // line 426
($context["emailAddress"] ?? null), "owner", array()), true) == $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute(($context["app"] ?? null), "user", array()), true))) && ($this->getAttribute($this->getAttribute(            // line 427
($context["emailAddress"] ?? null), "owner", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array())))) {
                // line 428
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter(($context["noLink"] ?? null), false)) : (false))) {
                    // line 429
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Me")), "html", null, true);
                } else {
                    // line 431
                    echo $this->getAttribute($this, "email_address_link", array(0 => ($context["emailAddress"] ?? null), 1 => twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Me"))), "method");
                }
            } else {
                // line 434
                $context["name"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(_twig_default_filter($this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->getEmailAddressName(($context["emailAddressName"] ?? null)), $this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->getEmailAddress(($context["emailAddressName"] ?? null))));
                // line 435
                echo $this->getAttribute($this, "email_address", array(0 => ($context["emailAddress"] ?? null), 1 => ($context["name"] ?? null), 2 => ($context["noLink"] ?? null), 3 => ($context["knownOnly"] ?? null)), "method");
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

    // line 446
    public function getemail_participants_name($__recipients__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "recipients" => $__recipients__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 447
            $context["recipientHtmlCollection"] = array();
            // line 448
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recipients"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 449
                echo "        ";
                ob_start();
                // line 450
                echo "<span class=\"email-recipient\">";
                echo $this->getAttribute($this, "email_participant_name_or_me", array(0 => $this->getAttribute($context["recipient"], "emailAddress", array()), 1 => $this->getAttribute($context["recipient"], "name", array()), 2 => ($context["noLink"] ?? null), 3 => ($context["knownOnly"] ?? null)), "method");
                echo "</span>";
                $context["recipientHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 452
                echo "        ";
                $context["recipientHtmlCollection"] = twig_array_merge(($context["recipientHtmlCollection"] ?? null), array(0 => ($context["recipientHtml"] ?? null)));
                // line 453
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 454
            echo "    ";
            echo twig_join_filter(($context["recipientHtmlCollection"] ?? null), ", ");
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 462
    public function getdate_smart_format($__date__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "date" => $__date__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 463
            if (($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate(twig_date_converter($this->env, ($context["date"] ?? null))) == $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate(twig_date_converter($this->env)))) {
                // line 465
                echo "        ";
                echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatTime(($context["date"] ?? null), array("timeZone" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getTimeZone()));
            } elseif (($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate(twig_date_converter($this->env,             // line 466
($context["date"] ?? null))) == $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate(twig_date_converter($this->env, "-1days")))) {
                // line 467
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("yesterday")), "html", null, true);
            } elseif (($this->getAttribute(twig_date_converter($this->env,             // line 468
($context["date"] ?? null)), "format", array(0 => "Y"), "method") == $this->getAttribute(twig_date_converter($this->env), "format", array(0 => "Y"), "method"))) {
                // line 470
                echo "        ";
                echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDay(($context["date"] ?? null), array("timeZone" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getTimeZone()));
            } else {
                // line 472
                echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate(($context["date"] ?? null), array("timeZone" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getTimeZone()));
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

    // line 481
    public function getemail_detailed_info_table($__email__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "email" => $__email__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 482
            echo "    ";
            $context["recipientsTo"] = array();
            // line 483
            echo "    ";
            $context["recipientsCc"] = array();
            // line 484
            echo "    ";
            $context["recipientsBcc"] = array();
            // line 485
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["email"] ?? null), "recipients", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 486
                echo "        ";
                $context["recipientName"] = ((($this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->getEmailAddressName($this->getAttribute($context["recipient"], "name", array()))) . " &lt;") . $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->getEmailAddress($this->getAttribute($context["recipient"], "name", array())))) . "&gt;");
                // line 487
                echo "        ";
                if (($this->getAttribute($context["recipient"], "type", array()) == "to")) {
                    // line 488
                    echo "            ";
                    $context["recipientsTo"] = twig_array_merge(($context["recipientsTo"] ?? null), array(0 => ($context["recipientName"] ?? null)));
                    // line 489
                    echo "        ";
                } elseif (($this->getAttribute($context["recipient"], "type", array()) == "cc")) {
                    // line 490
                    echo "            ";
                    $context["recipientsCc"] = twig_array_merge(($context["recipientsCc"] ?? null), array(0 => ($context["recipientName"] ?? null)));
                    // line 491
                    echo "        ";
                } elseif (($this->getAttribute($context["recipient"], "type", array()) == "bcc")) {
                    // line 492
                    echo "            ";
                    $context["recipientsBcc"] = twig_array_merge(($context["recipientsBcc"] ?? null), array(0 => ($context["recipientName"] ?? null)));
                    // line 493
                    echo "        ";
                }
                // line 494
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 495
            echo "    ";
            $context["fromUserName"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->getEmailAddressName($this->getAttribute(($context["email"] ?? null), "fromName", array())));
            // line 496
            echo "    ";
            $context["fromEmailAddress"] = (("&lt;" . $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->env->getExtension('Oro\Bundle\EmailBundle\Twig\EmailExtension')->getEmailAddress($this->getAttribute(($context["email"] ?? null), "fromName", array())))) . "&gt;");
            // line 497
            echo "    ";
            $context["data"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From"), "value" => ((            // line 499
($context["fromUserName"] ?? null)) ? (((("<b>" . ($context["fromUserName"] ?? null)) . "</b> ") . ($context["fromEmailAddress"] ?? null))) : ((("<b>" . ($context["fromEmailAddress"] ?? null)) . "</b>"))), "cssClass" => "autor"), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To"), "value" => twig_join_filter(            // line 503
($context["recipientsTo"] ?? null), ",<br/>")), 2 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cc"), "value" => twig_join_filter(            // line 506
($context["recipientsCc"] ?? null), ",<br/>")), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bcc"), "value" => twig_join_filter(            // line 509
($context["recipientsBcc"] ?? null), ",<br/>")), 4 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date"), "value" => twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(            // line 512
($context["email"] ?? null), "sentAt", array())))), 5 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subject"), "value" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->getAttribute(            // line 515
($context["email"] ?? null), "subject", array()))));
            // line 517
            echo "    <ul class=\"form-horizontal\">
    ";
            // line 518
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 519
                echo "        ";
                if ( !twig_test_empty($this->getAttribute($context["item"], "value", array()))) {
                    // line 520
                    echo "        <li class=\"control-group\">
            <label class=\"control-label\">";
                    // line 521
                    echo $this->getAttribute($context["item"], "label", array());
                    echo ":</label>
            <div class=\"controls ";
                    // line 522
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "cssClass", array(), "any", true, true)) ? ($this->getAttribute($context["item"], "cssClass", array())) : ("")), "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($context["item"], "value", array());
                    echo "</div>
        </li>
        ";
                }
                // line 525
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 526
            echo "    </ul>
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

    // line 534
    public function getemail_short_body($__emailBody__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailBody" => $__emailBody__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 535
            $context["length"] = ((array_key_exists("length", $context)) ? (_twig_default_filter(($context["length"] ?? null), 150)) : (150));
            // line 536
            echo twig_replace_filter(twig_slice($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->pregReplace(strip_tags($this->getAttribute(($context["emailBody"] ?? null), "textBody", array())), "/-{2,}/", "--"), 0, ($context["length"] ?? null)), array("--" => "&mdash;"));
            echo "
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

    // line 542
    public function getrenderMailboxConfigTitleAndButtons($__pageTitle__ = null, $__buttons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pageTitle" => $__pageTitle__,
            "buttons" => $__buttons__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 543
            echo "    <div class=\"container-fluid configuration-header clearfix\">
        ";
            // line 544
            if (twig_test_iterable(($context["pageTitle"] ?? null))) {
                // line 545
                echo "            <div class=\"customer-info customer-simple pull-left\">
                ";
                // line 546
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pageTitle"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                    // line 547
                    echo "                    ";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        // line 548
                        echo "                        <div class=\"sub-title\">
                            ";
                        // line 549
                        if (((twig_test_iterable($context["title"]) && $this->getAttribute($context["title"], "link", array(), "any", true, true)) && $this->getAttribute($context["title"], "label", array(), "any", true, true))) {
                            // line 550
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "link", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "label", array()), "html", null, true);
                            echo "</a>
                            ";
                        } else {
                            // line 552
                            echo "                                ";
                            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                            echo "
                            ";
                        }
                        // line 554
                        echo "                        </div>
                        <span class=\"separator\">/</span>
                    ";
                    } else {
                        // line 557
                        echo "                        <h1 class=\"user-name\">
                            ";
                        // line 558
                        if (((twig_test_iterable($context["title"]) && $this->getAttribute($context["title"], "link", array(), "any", true, true)) && $this->getAttribute($context["title"], "label", array(), "any", true, true))) {
                            // line 559
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "link", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "label", array()), "html", null, true);
                            echo "</a>
                            ";
                        } else {
                            // line 561
                            echo "                                ";
                            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                            echo "
                            ";
                        }
                        // line 563
                        echo "                        </h1>
                    ";
                    }
                    // line 565
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 566
                echo "            </div>
        ";
            } else {
                // line 568
                echo "            <h1>
                ";
                // line 569
                echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
                echo "
            </h1>
        ";
            }
            // line 572
            echo "
        <div class=\"pull-right title-buttons-container\">
            ";
            // line 574
            echo ($context["buttons"] ?? null);
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

    // line 585
    public function getwrapTextToTag($__text__ = null, $__isWrap__ = null, $__tag__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "isWrap" => $__isWrap__,
            "tag" => $__tag__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 586
            echo "    ";
            $context["tag"] = (( !(null === ($context["tag"] ?? null))) ? (($context["tag"] ?? null)) : ("strong"));
            // line 587
            echo "    ";
            if ((($context["isWrap"] ?? null) == true)) {
                // line 588
                echo "        <";
                echo twig_escape_filter($this->env, ($context["tag"] ?? null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
                echo "</";
                echo twig_escape_filter($this->env, ($context["tag"] ?? null), "html", null, true);
                echo ">
    ";
            } else {
                // line 590
                echo "        ";
                echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
                echo "
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
        return "OroEmailBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1377 => 590,  1367 => 588,  1364 => 587,  1361 => 586,  1347 => 585,  1328 => 574,  1324 => 572,  1318 => 569,  1315 => 568,  1311 => 566,  1297 => 565,  1293 => 563,  1287 => 561,  1279 => 559,  1277 => 558,  1274 => 557,  1269 => 554,  1263 => 552,  1255 => 550,  1253 => 549,  1250 => 548,  1247 => 547,  1230 => 546,  1227 => 545,  1225 => 544,  1222 => 543,  1209 => 542,  1192 => 536,  1190 => 535,  1177 => 534,  1161 => 526,  1155 => 525,  1147 => 522,  1143 => 521,  1140 => 520,  1137 => 519,  1133 => 518,  1130 => 517,  1128 => 515,  1127 => 512,  1126 => 509,  1125 => 506,  1124 => 503,  1123 => 499,  1121 => 497,  1118 => 496,  1115 => 495,  1109 => 494,  1106 => 493,  1103 => 492,  1100 => 491,  1097 => 490,  1094 => 489,  1091 => 488,  1088 => 487,  1085 => 486,  1080 => 485,  1077 => 484,  1074 => 483,  1071 => 482,  1059 => 481,  1043 => 472,  1039 => 470,  1037 => 468,  1035 => 467,  1033 => 466,  1030 => 465,  1028 => 463,  1016 => 462,  1000 => 454,  994 => 453,  991 => 452,  986 => 450,  983 => 449,  978 => 448,  976 => 447,  962 => 446,  946 => 435,  944 => 434,  940 => 431,  937 => 429,  935 => 428,  933 => 427,  932 => 426,  931 => 425,  916 => 424,  893 => 411,  883 => 409,  881 => 408,  868 => 407,  845 => 394,  839 => 391,  835 => 390,  831 => 389,  827 => 387,  825 => 384,  824 => 383,  823 => 382,  821 => 379,  819 => 378,  812 => 376,  807 => 375,  797 => 373,  795 => 372,  791 => 371,  784 => 369,  779 => 366,  773 => 363,  770 => 362,  764 => 359,  760 => 358,  755 => 356,  750 => 355,  748 => 354,  744 => 352,  741 => 351,  738 => 350,  735 => 349,  732 => 348,  729 => 347,  727 => 346,  723 => 345,  721 => 344,  707 => 343,  687 => 332,  674 => 331,  670 => 330,  668 => 329,  650 => 328,  642 => 324,  639 => 323,  637 => 322,  635 => 321,  633 => 320,  629 => 319,  627 => 318,  613 => 317,  596 => 306,  591 => 304,  589 => 303,  585 => 302,  578 => 301,  576 => 300,  573 => 298,  571 => 297,  569 => 296,  556 => 295,  540 => 286,  530 => 284,  528 => 283,  525 => 282,  522 => 281,  519 => 280,  517 => 279,  514 => 278,  511 => 277,  508 => 276,  505 => 275,  503 => 274,  500 => 273,  497 => 272,  494 => 271,  491 => 270,  489 => 269,  486 => 268,  484 => 267,  471 => 266,  454 => 255,  451 => 253,  449 => 252,  445 => 249,  443 => 248,  441 => 247,  426 => 246,  409 => 233,  406 => 231,  404 => 230,  400 => 227,  398 => 226,  396 => 225,  381 => 224,  362 => 212,  357 => 210,  352 => 209,  349 => 208,  346 => 207,  344 => 206,  330 => 205,  311 => 196,  303 => 194,  300 => 193,  298 => 192,  284 => 191,  269 => 181,  268 => 180,  267 => 179,  266 => 178,  253 => 177,  238 => 168,  226 => 167,  208 => 159,  205 => 158,  203 => 155,  202 => 154,  201 => 145,  200 => 143,  186 => 132,  171 => 119,  168 => 101,  118 => 42,  104 => 31,  82 => 12,  74 => 7,  67 => 2,  54 => 1,  49 => 578,  46 => 538,  43 => 528,  40 => 475,  37 => 456,  34 => 438,  31 => 414,  28 => 400,  25 => 335,  22 => 259,  19 => 237,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle::macros.html.twig", "");
    }
}
