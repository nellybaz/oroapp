<?php

/* OroUserBundle:Reset/dialog:update.html.twig */
class __TwigTemplate_cfab1f5531c947eb2aa084f659345060ed4507e211814289080d855a90e737fe extends Twig_Template
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), "OroFormBundle:Form:fields.html.twig");
        // line 2
        echo "<div class=\"widget-content\">
    ";
        // line 3
        if (($context["saved"] ?? null)) {
            // line 4
            echo "        <script type=\"text/javascript\">
        require([
            'orotranslation/js/translator',
            'oroui/js/widget-manager',
            'oroui/js/messenger',
            'oroui/js/mediator'
        ],
        function(__, widgetManager, messenger, mediator) {
            widgetManager.getWidgetInstance(";
            // line 12
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ", function(widget) {
                mediator.once('page:afterChange', function() {
                    messenger.notificationFlashMessage('success', __('oro.user.change_password.flash.success'));
                });
                mediator.trigger('widget_success:' + widget.getAlias());
                mediator.trigger('widget_success:' + widget.getWid());
                widget.remove();
                mediator.execute('refreshPage');
            });
        });
        </script>
    ";
        } else {
            // line 24
            echo "        <script type=\"text/javascript\">
        require([
            'jquery',
            'orotranslation/js/translator'
        ],
        function(\$, __) {
            var \$passwordInput= \$('[data-ftid=oro_set_password_form_password]');
            \$passwordInput.after(
                    '<span class=\"fa-eye-slash\" id=\"show-hide-pass\" style=\"cursor: pointer; font-size: 16px;\" ' +
                    ' title=\"' + __(\"oro.user.show_hide_password.label\") + '\"/>'
            );
            \$passwordInput.parent().after(
                '<div class=\"controls\" style=\"margin-top: 5px;\">' +
                    '<a href=\"#\" id=\"generate-pass\">' + __(\"oro.user.suggest_password.label\") + '</a>' +
                '</div>'
            );

            \$('#generate-pass').on('click', function(e){
                e.preventDefault();
                var getRnd = function(n) {
                    return Math.floor(Math.random() * (n + 1));
                };
                var requireLength = \$passwordInput.data('suggest-length') || 1;
                var requirements = \$passwordInput.data('suggest-rules') || '';
                var length = Math.max(requireLength, 8);
                var charsets = {
                    'lower_case': 'abcdefghijklmnopqrstuvwxyz',
                    'upper_case':'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    'numbers':'0123456789',
                    'special_chars':' !\"#\$%&\\'()*+,-./:;<=>?@[\\\\]^_`{|}~'
                };
                var rules = requirements.split(',');
                var pass = '';

                // make sure we have at least one symbol for each rule, shuffle them later
                rules.forEach(function(rule) {
                    if (charsets.hasOwnProperty(rule)) {
                        pass += charsets[rule].charAt(getRnd(charsets[rule].length));
                    }
                });

                // create a pool for picking random chars that is reasonably strong
                var charset = charsets['lower_case'] + charsets['upper_case'] + charsets['numbers'];

                // fill up to the minLength with random symbols
                for (var i = pass.length; i < length; ++i) {
                    pass = pass + charset.charAt(getRnd(charset.length));
                }

                // shuffle the password
                pass = pass.split('').sort(function() {
                    return 0.5 - Math.random()
                }).join('');

                \$passwordInput.val(pass);
            });

            \$('#show-hide-pass').on('click', function(e){
                var target = e.target || window.event.target;
                if(\$(target).hasClass('fa-eye')) {
                    \$passwordInput.attr('type', 'password');
                    \$(target).removeClass('fa-eye');
                    \$(target).addClass('fa-eye-slash');
                } else {
                    \$passwordInput.attr('type', 'text');
                    \$(target).removeClass('fa-eye-slash');
                    \$(target).addClass('fa-eye');
                }
            });
        });
        </script>
        <div class=\"form-container\">
            <form id=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
            echo "\" method=\"post\" class=\"change-password-form\">
                <fieldset class=\"form form-horizontal\">
                    ";
            // line 98
            if (( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array()) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())))) {
                // line 99
                echo "                        <div class=\"alert alert-error\">
                            <div class=\"message\">
                                ";
                // line 101
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 105
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "password", array()), 'row');
            echo "
                </fieldset>
                <fieldset class=\"form-horizontal\">
                    ";
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 115
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
        </div>
    ";
        }
        // line 118
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Reset/dialog:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 118,  170 => 115,  163 => 111,  159 => 110,  154 => 108,  147 => 105,  140 => 101,  136 => 99,  134 => 98,  125 => 96,  51 => 24,  36 => 12,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Reset/dialog:update.html.twig", "");
    }
}
