<?php

/* OroApiBundle:ApiDoc:motd.html.twig */
class __TwigTemplate_721bac05b56c64df3d74bedcd13ddaa4049293c192de18bdd173ff52a7804cea extends Twig_Template
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
        // line 1
        echo "<style type=\"text/css\">
    #summary { display: none; }
    #api_type { float: left; font-size: 1.2em; padding: 12px 24px; }
    #api_type a.active { font-weight: bold; color: #3d5b00; }
    .authentication-warning svg { vertical-align: middle; padding-right: 5px; }
    div.heading ul.options li { text-transform: capitalize; }
    div.motd { padding-top: 10px; }
    div.motd div.documentation { padding: 3px 0; overflow: hidden; }
    div.motd div.documentation a { font-size: 1.2em; text-decoration: none; }
</style>
<script type=\"text/javascript\">
    handleResourceLinks = function (\$el, apiPrefix) {
        var value = \$el.text(),
            prefix = '', suffix = '', links = [], elements, i, j, resourceId;
        i = value.indexOf(' (');
        if (-1 !== i) {
            j = value.indexOf(')', i);
            if (-1 !== j) {
                prefix = value.substr(0, i + 2);
                suffix = value.substr(j);
            }
        } else if (0 === value.indexOf('array of ')) {
            prefix = 'array of ';
        }
        if (value && value.substr(prefix.length, 2) !== '<a') {
            \$el.text('');
            elements = value.substr(prefix.length, value.length - prefix.length - suffix.length).split(',');
            for (i = 0; i < elements.length; i++) {
                resourceId = 'get-' + apiPrefix + '-api-' + elements[i].trim();
                if (\$('#' + resourceId).length) {
                    links.push('<a href=\"#' + resourceId
                        + '\" onclick=\"return gotoResource(\\'' + resourceId + '\\');\">'
                        + elements[i] + '</a>');
                } else {
                    links.push(elements[i]);
                }
            }
            \$el.append(prefix + links.join(', ') + suffix);
        }
    };
    gotoResource = function (resourceId) {
        var \$section = \$('#' + resourceId).closest('.section'),
            \$toggler = \$('#' + resourceId + ' > .toggler');
        if (!\$section.hasClass('active')) {
            \$section.find('h1').trigger('click');
        }
        if (\$toggler.next().is(':visible')) {
            window.location.hash = \$toggler.data('href');
        } else {
            \$toggler.trigger('click');
        }

        return false;
    };
    \$(function() {
        ";
        // line 56
        $context["user"] = $this->env->getExtension('Oro\Bundle\UserBundle\Twig\OroUserExtension')->getCurrentUser();
        // line 57
        echo "        var userName = ";
        echo ((($context["user"] ?? null)) ? (twig_jsonencode_filter($this->getAttribute(($context["user"] ?? null), "username", array()))) : ("null"));
        echo ",
            apiKey = ";
        // line 58
        echo (((($context["user"] ?? null) && twig_first($this->env, $this->getAttribute(($context["user"] ?? null), "apiKeys", array())))) ? (twig_jsonencode_filter($this->getAttribute(twig_first($this->env, $this->getAttribute(($context["user"] ?? null), "apiKeys", array())), "apiKey", array()))) : ("null"));
        echo ",
            sessionAllowed = true,
            wsseAllowed = userName && apiKey,
            serverTime = ";
        // line 61
        echo twig_jsonencode_filter(twig_date_format_filter($this->env, "now", "c", "UTC"));
        echo ",
            clientTime = new Date(),
            serverTimeOffset = Date.parse(serverTime) - clientTime,
            \$apiDocLink = \$('#header a').first(),
            currentPath = window.location.pathname,
            isFrontend = (currentPath === currentPath.replace(";
        // line 66
        echo twig_jsonencode_filter(($context["webBackendPrefix"] ?? null));
        echo ", '')),
            apiDocHref = isFrontend ? \$apiDocLink.attr('href').replace(";
        // line 67
        echo twig_jsonencode_filter(($context["webBackendPrefix"] ?? null));
        echo ", '') : \$apiDocLink.attr('href'),
            apiType = currentPath.substr(apiDocHref.length + 1),
            apiPrefix = '',
            escapeSelector = function (val) {
                return val.replace(/(:|\\.|\\[|\\]|\\{|\\}|,)/g, \"\\\\\$1\");
            },
            addHeader = function (\$headers, headerKey, headerValue) {
                var needsHeader = true,
                    emptyHeader = null;
                \$('.tuple', \$headers).each(function (index, header) {
                    if (\$('input.key:text[value=\"' + headerKey + '\"]', header).length) {
                        needsHeader = false;
                    } else if (!emptyHeader
                        && \$('input.key:text[value=]', header).length
                        && \$('input.value:text[value=]', header).length
                    ) {
                        emptyHeader = header;
                    }
                });
                if (needsHeader) {
                    if (emptyHeader) {
                        fillHeader(emptyHeader, headerKey, headerValue);
                    } else {
                        \$('button.add_header', \$headers).trigger('click');
                        fillHeader(\$headers.find('.tuple:not(.autogenerated-header):last'), headerKey, headerValue);
                    }
                }
            },
            removeHeader = function (\$headers, headerKey) {
                \$('input.key:text[value=\"' + headerKey + '\"]', \$headers).closest('.tuple').remove();
            },
            getHeaderValue = function (\$headers, headerKey) {
                return \$('input.key:text[value=\"' + headerKey + '\"]', \$headers)
                    .closest('.tuple')
                    .find('input.value')
                    .val();
            },
            fillHeader = function (header, headerKey, headerValue) {
                \$('input.key', header).val(headerKey);
                \$('input.value', header).val(headerValue);
            };

        var apiPrefixMatch = window.location.pathname.match(/\\/(\\w+)\\/api\\//i);
        if (apiPrefixMatch) {
            apiPrefix = '-' + apiPrefixMatch[1];
        }

        if (!isFrontend) {
            \$apiDocLink.after('<div id=\"api_type\">type:&nbsp;&nbsp;' +
                '<a href=\"' + apiDocHref + '\"' + (apiType === '' ? ' class=\"active\"' : '') + '>plain</a>' +
                '&nbsp;|&nbsp;' +
                '<a href=\"' + apiDocHref + '/rest_json_api\"' + (apiType === 'rest_json_api' ? ' class=\"active\"' : '') + '>JSON.API</a>' +
                '</div>'
            );
        }

        /**
         * Add the authentication type selector
         */
        \$('#sandbox_configuration').prepend(
            (wsseAllowed ? '' : '<span class=\"authentication-warning\"' +
            ' title=\"To use WSSE authentication you need to generate API key for the current logged-in user.' +
            ' To do this, go to the My User page and click Generate Key near to API Key.' +
            ' After that reload this page.\"' +
            '>";
        // line 131
        echo twig_include($this->env, $context, "@OroApi/ApiDoc/warning.svg");
        echo "</span>') +
            'authentication: ' +
            '<select id=\"authentication_type\">' +
                '<option value=\"\"' + (!wsseAllowed && !sessionAllowed ? ' selected=\"\"' : '') + '>None</option>' +
                '<option value=\"wsse\"' + (wsseAllowed ? ' selected=\"\"' : ' disabled=\"\"') + '>WSSE</option>' +
                '<option value=\"session\"' + (!sessionAllowed ? ' disabled=\"\"' : (!wsseAllowed ? ' selected=\"\"' : '')) + '>Session</option>' +
            '</select>'
        );
        if (!wsseAllowed && !sessionAllowed) {
            \$('#header').css('background-color', '#F7FE2E');
        }

        /**
         * Make JSON as default body format for JSON.API sandbox
         */
        if (apiType === 'rest_json_api' || isFrontend) {
            \$('#body_format').val('json');
        }

        /**
         * Disable the request format selector for JSON.API and new implementation of REST
         */
        if (apiType === 'rest_json_api' || apiType === 'rest_plain' || isFrontend) {
            \$('#request_format').attr('disabled', 'disabled');
        }

        /**
         * Add \"Try!\" button handler
         */
        \$('.pane.sandbox form').bindFirst('submit', function() {
            var authType = \$('#authentication_type option:selected').val(),
                \$headers = \$('.headers', this);

            /**
             * Remove auto-generated headers
             */
            \$('.autogenerated-header', this).remove();

            /**
             * Add WSSE authentication related headers
             */
            if (authType === 'wsse') {
                \$headers.append(
                    '<div class=\"tuple autogenerated-header\">' +
                    '<input type=\"hidden\" class=\"key\" placeholder=\"Key\" value=\"Authorization\">' +
                    '<input type=\"hidden\" class=\"value authorization-header\" placeholder=\"Value\">' +
                    '</div>' +
                    '<div class=\"tuple autogenerated-header\">' +
                    '<input type=\"hidden\" class=\"key\" placeholder=\"Key\" value=\"X-WSSE\">' +
                    '<input type=\"hidden\" class=\"value x-wsse-header\" placeholder=\"Value\">' +
                    '</div>'
                );
                \$('input.authorization-header', this).val('WSSE profile=\"UsernameToken\"');
                \$('input.x-wsse-header', this).val(wsseHeader(userName, apiKey, serverTimeOffset));
            }

            /**
             * Add Session authentication related headers
             */
            if (authType === 'session') {
                \$headers.append(
                    '<div class=\"tuple autogenerated-header\">' +
                    '<input type=\"hidden\" class=\"key\" placeholder=\"Key\" value=\"X-CSRF-Header\">' +
                    '<input type=\"hidden\" class=\"value authorization-header\" placeholder=\"Value\" value=\"1\">' +
                    '</div>'
                );
            }

            /**
             * Add a header contains the id of current operation
             * It will be used in ajaxPrefilter and ajaxComplete global handlers
             */
            \$headers.append(
                '<div class=\"tuple autogenerated-header\">' +
                '<input type=\"hidden\" class=\"key\" value=\"X-API-Sandbox-Operation-ID\">' +
                '<input type=\"hidden\" class=\"value operation-header\">' +
                '</div>'
            );
            \$('input.operation-header', this).val(\$(this).closest('.operation').attr('id'));
        });

        /**
         * Add sandbox input data handler
         */
        \$('li[data-pane=\"sandbox\"]').on('click', function() {
            /**
             * Fill input requirements: version and _format
             */
            var parameters = \$(this).closest('.content').find('fieldset.parameters'),
                format = \$('input.key[value=\"_format\"]', parameters).closest('.tuple').find('input.value'),
                version = \$('input.key[value=\"version\"]', parameters).closest('.tuple').find('input.value');
            if (format.val() === '') {
                format.val('json');
            }
            if (version.val() === '') {
                version.val('latest');
            }

            /**
             * Add Header \"Content-Type: application/vnd.api+json\" for JSON.API resources
             */
            var \$headers = \$(this).closest('.content').find('fieldset.headers'),
                routePath = \$(this).parents('li.operation').find('div.heading span.path').text(),
                isAllowedRoute = (apiType === 'rest_json_api' && routePath.indexOf('/api/rest/') === -1) || isFrontend;
            if (isAllowedRoute) {
                addHeader(\$headers, 'Content-Type', 'application/vnd.api+json');
            }
        });

        /**
         * Add API resource handler
         */
        \$('.toggler').on('click', function() {
            var \$container = \$(this).closest('.operation'),
                \$filters = \$container.find('.pane.content>table>tbody table'),
                \$form = \$container.find('.pane.sandbox form');

            /**
             * Add relation links
             */
            \$filters.find('td:contains(Relation)').each(function (index, el) {
                handleResourceLinks(\$(el).next(), apiPrefix);
            });
            \$container.find('.pane.content table.input>tbody>tr').each(function (parentIndex, parentEl) {
                \$(parentEl).find('td:eq(1)').each(function (index, el) {
                    handleResourceLinks(\$(el), apiPrefix);
                });
            });
            \$container.find('.pane.content table.output>tbody>tr').each(function (parentIndex, parentEl) {
                \$(parentEl).find('td:eq(1)').each(function (index, el) {
                    handleResourceLinks(\$(el), apiPrefix);
                });
            });

            /**
             * Add the operators selector for filters
             */
            \$filters.find('td:contains(Operators)').each(function (index, el) {
                var \$el = \$(el),
                    filterId = \$el.closest('table').parent().prev().text(),
                    operators = \$el.next().text(),
                    options = '',
                    \$operatorEl = null;
                if (filterId) {
                    \$operatorEl = \$form.find(\"input.key[value='\" + escapeSelector(filterId) + \"']\").next();
                    if (\$operatorEl.length && \$operatorEl.prop(\"tagName\") == 'SPAN' && \$operatorEl.text() == '=') {
                        operators = operators.split(',');
                        for (var i = 0; i < operators.length; i++) {
                            options += '<option value=\"' + operators[i] + '\">' + operators[i] + '</option>'
                        }
                        \$operatorEl.replaceWith('<select class=\"operator\">' + options + '</select>');
                    }
                }
            });
        });

        /**
         * A handler to add operators to the sandbox AJAX requests
         */
        \$.ajaxPrefilter(function(options) {
            if (options.headers['X-API-Sandbox-Operation-ID'] === undefined) {
                return;
            }

            /**
             * Replace \"=\" operator with the operator selected by an user
             */
            var operationId = escapeSelector(options.headers['X-API-Sandbox-Operation-ID']);
            \$('.pane.sandbox form .parameters .tuple', \$('#' + operationId)).each(function() {
                var key = \$('.key', \$(this)).val(),
                    operator = \$('.operator', \$(this)).val(),
                    value = \$('.value', \$(this)).val(),
                    data, obj, keyPair;
                if (value !== '' && operator !== undefined && operator !== '=' && !jQuery.isEmptyObject(options.data)) {
                    if (options.data.lastIndexOf('{\"', 0) === 0) {
                        // json
                        data = JSON.parse(options.data);
                        keyPair = key.match(/^(.+)\\[([^\\]]+)\\]\$/);
                        obj = {};
                        if(keyPair) {
                            if (data.hasOwnProperty(keyPair[1]) && data[keyPair[1]].hasOwnProperty(keyPair[2])) {
                                obj[operator] = data[keyPair[1]][keyPair[2]];
                                data[keyPair[1]][keyPair[2]] = obj;
                            }
                        } else if (data.hasOwnProperty(key)) {
                            obj[operator] = data[key];
                            data[key] = obj;
                        }
                        options.data = JSON.stringify(data);
                    } else {
                        // uri string
                        options.data = options.data.replace(
                            new RegExp(\"([\\?&])?(\" + encodeURIComponent(key) + \")=\"), \"\$1\$2\" + operator
                        );
                    }
                }
            });

            /**
             * Remove \"_format\" parameter for JSON.API and new implementation of REST sandboxes
             */
            if (apiType === 'rest_json_api' || apiType === 'rest_plain' || isFrontend) {
                options.url = options.url.replace(
                    new RegExp(\"([\\?&])(_format=json&?)\"), \"\$1\"
                );
                if (options.data.lastIndexOf('{\"', 0) === 0) {
                    // json
                    var data = JSON.parse(options.data);
                    if (data.hasOwnProperty('_format')) {
                        delete data['_format'];
                        options.data = JSON.stringify(data);
                    }
                } else {
                    // uri string
                    options.data = options.data.replace(
                        new RegExp(\"([&]?)(_format=json&?)\"), \"\$1\"
                    );
                }
            }

            /**
             * Remove \"Content-type\" header if both \"Content-type\" and \"Content-Type\" headers exist
             */
            if (options.headers['Content-Type'] !== undefined && options.headers['Content-type'] !== undefined) {
                delete options.headers['Content-type'];
            }
        });

        /**
         * A handler to correct a result of the sandbox AJAX requests
         */
        \$(document).ajaxComplete(function(event, jqXHR, options) {
            if (options.headers['X-API-Sandbox-Operation-ID'] === undefined) {
                return;
            }

            var \$result = \$(
                    '.pane.sandbox .result',
                    \$('#' + escapeSelector(options.headers['X-API-Sandbox-Operation-ID']))
                );

            delete options.headers['X-API-Sandbox-Operation-ID'];

            /**
             * Update \"Request URL\" section
             */
            if (options.type == 'GET') {
                \$('.url', \$result).text(
                    options.type + ' ' + decodeURIComponent(options.url)
                );
            }

            /**
             * Hide the request body and add a button to display it
             */
            \$('.request-body', \$result).hide();
            var \$requestBodyHeader = \$('.request-body-header', \$result);
            if (\$('.toggle-request-body', \$requestBodyHeader).length) {
                \$('.toggle-request-body', \$requestBodyHeader).text('Show');
            } else {
                \$requestBodyHeader.append('&nbsp;<small>[<a href=\"\" class=\"toggle-request-body\">Show</a>]</small>');
            }

            /**
             * Update \"Curl Command Line\" section
             */
            displayCurl(
                options.type,
                decodeURIComponent(options.url),
                options.headers,
                options.data,
                \$('.curl-command', \$result)
            );
        });

        /**
         * Add the request body visibility handler
         */
        \$('.pane.sandbox').on('click', '.toggle-request-body', function(e) {
            \$(this).text(
                \$('.request-body', \$(this).parents('.result')).toggle().is(':visible') ? 'Hide' : 'Show'
            );
            e.preventDefault();
        });
    });
</script>

";
        // line 418
        if ((array_key_exists("documentationPath", $context) && ($context["documentationPath"] ?? null))) {
            // line 419
            echo "    <div class=\"motd\">
        <div class=\"documentation\">
            <a href=\"";
            // line 421
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["documentationPath"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\">The documentation</a>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroApiBundle:ApiDoc:motd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 421,  460 => 419,  458 => 418,  168 => 131,  101 => 67,  97 => 66,  89 => 61,  83 => 58,  78 => 57,  76 => 56,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroApiBundle:ApiDoc:motd.html.twig", "");
    }
}