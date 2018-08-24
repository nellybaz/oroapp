<?php

/* OroInstallerBundle::layout.html.twig */
class __TwigTemplate_cfa9af8a3eec26cf510574b498bf7753ca592f766587c631cedf8834557b2d27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'progress' => array($this, 'block_progress'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if IE 7 ]><html class=\"no-js ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroinstaller/css/style.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bowerassets/jquery-ajax-queue/ajaxQueue.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 14
        $this->displayBlock('javascript', $context, $blocks);
        // line 94
        echo "</head>
<body>
    <header class=\"header\">
        <h1 class=\"logo\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title"), "html", null, true);
        echo "</h1>
    </header>
    <div class=\"wrapper\">
        <div class=\"content\">
            ";
        // line 101
        $this->displayBlock('progress', $context, $blocks);
        // line 102
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "        </div>
    </div>
    ";
        // line 105
        $this->displayBlock('bottom', $context, $blocks);
        // line 106
        echo "</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title"), "html", null, true);
    }

    // line 14
    public function block_javascript($context, array $blocks = array())
    {
        // line 15
        echo "    <script type=\"text/javascript\">
        \$(function() {
            \$('.progress-bar li:last-child em.fix-bg').width(\$('.progress-bar li:last-child').width() / 2);
            \$('.progress-bar li:first-child em.fix-bg').width(\$('.progress-bar li:first-child').width() / 2);

            \$('form').submit(function () {
                \$(this).find(':submit').attr('disabled', true).addClass('disabled');
            });

        });

        function ajaxQueue(actions, url) {
            var finRes  = true,
                aborted = false;

            \$.each(actions, function(i) {
                var stepCon = \$('#step-' + this);

                stepCon.closest('tr').find('td:last').text('";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("wait"), "html", null, true);
        echo "');

                if (i == 0) {
                    stepCon
                        .addClass('icon-wait')
                        .closest('tr').find('td:last').text('";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("progress"), "html", null, true);
        echo "');
                }

                \$.ajaxQueue({
                    url: '?action=' + this,
                    beforeSend: function (jqXHR) {
                        if (!finRes) {
                            aborted = true;
                            jqXHR.abort();
                        }
                    },
                    success: function(data) {
                        var curRes = typeof data.result != 'undefined' && data.result,
                            exitCode = typeof data.exitCode != 'undefined' ? data.exitCode : 0,
                            finRes = finRes || curRes;

                        stepCon
                            .removeClass('icon-wait')
                            .addClass('icon-' + (curRes ? (exitCode == 0 ? 'yes' : 'warning') : 'no'))
                            .closest('tr')
                            .find('td:last').text(
                                curRes
                                    ? (exitCode == 0 ? '";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("passed"), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("skipped"), "html", null, true);
        echo "')
                                    : '";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("failed"), "html", null, true);
        echo "'
                            ).end()
                            .closest('tr').next()
                            .find('td:last').text('";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("progress"), "html", null, true);
        echo "').end()
                            .find('span').addClass('icon-wait');

                        if (i == actions.length - 1 && finRes) {
                            \$('a.back').removeClass('disabled');
                            \$('a.primary').removeClass('disabled').attr('href', url);
                        }
                    },
                    error: function() {
                        if (aborted) {
                            stepCon
                                .removeClass('icon-wait')
                                .addClass('fa-warning')
                                .closest('tr').find('td:last').text('";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("skipped"), "html", null, true);
        echo "');
                        } else {
                            finRes = false;
                            stepCon
                                .removeClass('icon-wait')
                                .addClass('icon-no')
                                .closest('tr').find('td:last').text('";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("failed"), "html", null, true);
        echo "');
                        }
                        if (i == actions.length - 1) {
                            \$('a.back').removeClass('disabled');
                        }
                    }
                });
            });
        }
    </script>
    ";
    }

    // line 101
    public function block_progress($context, array $blocks = array())
    {
    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
    }

    // line 105
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 105,  201 => 102,  196 => 101,  181 => 83,  172 => 77,  156 => 64,  150 => 61,  144 => 60,  119 => 38,  111 => 33,  91 => 15,  88 => 14,  82 => 9,  76 => 106,  74 => 105,  70 => 103,  67 => 102,  65 => 101,  58 => 97,  53 => 94,  51 => 14,  47 => 13,  43 => 12,  39 => 11,  34 => 9,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInstallerBundle::layout.html.twig", "");
    }
}
