<?php

/* OroDotmailerBundle:Dotmailer:integrationConnection.html.twig */
class __TwigTemplate_db2cd018496fe3570f0ace957b17c86d10b254b96ee8f542b955090193ee172f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroDotmailerBundle:Dotmailer:integrationConnection.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig"));

        $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.integration.connection.label"))));
        // line 6
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_integration_connection");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "dotmailer-page";
    }

    // line 9
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 11
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.integration.connection.label");
        // line 13
        echo "    ";
        $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroDotmailerBundle:Dotmailer:integrationConnection.html.twig", 13)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
    }

    // line 16
    public function block_content_data($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        ";
        if (((($context["entity"] ?? null) && $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "transport", array()), "clientId", array())) && $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "transport", array()), "clientKey", array()))) {
            // line 19
            echo "            ";
            if (($context["loginUserUrl"] ?? null)) {
                // line 20
                echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_oauth_disconnect", array("id" => $this->getAttribute(                // line 23
($context["entity"] ?? null), "id", array()))), "aCss" => "btn btn-primary", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.integration.disconnect.label"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.integration.disconnect.label"))), "method"), "html", null, true);
                // line 27
                echo "
                    </div>
                </div>
            ";
            } else {
                // line 31
                echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" =>                 // line 34
($context["connectUrl"] ?? null), "aCss" => "btn btn-primary", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.integration.connect.label"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.integration.connect.label"))), "method"), "html", null, true);
                // line 38
                echo "
                    </div>
                </div>
            ";
            }
            // line 42
            echo "        ";
        }
        // line 43
        echo "    ";
        $context["button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 44
        echo "
    ";
        // line 45
        $context["id"] = "oro_dotmailer_integration_connection";
        // line 46
        echo "    ";
        $context["dataBlocks"] = array();
        // line 47
        echo "    ";
        if (($context["loginUserUrl"] ?? null)) {
            // line 48
            echo "        ";
            ob_start();
            // line 49
            echo "            <input type=\"hidden\" data-focusable=\"true\" /> ";
            // line 50
            echo "            <iframe src=\"";
            echo twig_escape_filter($this->env, ($context["loginUserUrl"] ?? null), "html", null, true);
            echo "\" width=\"100%\" height=\"1650\" frameborder=\"0\"></iframe>
        ";
            $context["dotmailerSection"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 52
            echo "
        ";
            // line 53
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.channel_type.label"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>             // line 59
($context["dotmailerSection"] ?? null)))))));
            // line 63
            echo "    ";
        }
        // line 64
        echo "
    ";
        // line 65
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.integration.choose_connection.label"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 71
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "channel", array()), 'row'), 1 =>         // line 72
($context["button"] ?? null)))))));
        // line 76
        echo "
    ";
        // line 77
        $context["data"] = array("formErrors" => ((        // line 78
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 79
($context["dataBlocks"] ?? null));
        // line 81
        echo "
    ";
        // line 82
        $context["fieldsToSendOnChannelChange"] = array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "channel", array()), "vars", array()), "full_name", array()));
        // line 83
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "_token", array(), "any", true, true)) {
            // line 84
            echo "        ";
            $context["fieldsToSendOnChannelChange"] = twig_array_merge(($context["fieldsToSendOnChannelChange"] ?? null), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "_token", array()), "vars", array()), "full_name", array())));
            // line 85
            echo "    ";
        }
        // line 86
        echo "    <script type=\"text/javascript\">
        require(['orodotmailer/js/integration-connection'], function (IntegrationConnection) {
            \"use strict\";

            \$(function () {
                var options = {
                    formSelector: '#";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "',
                    channelSelector: '#";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "channel", array()), "vars", array()), "id", array()), "html", null, true);
        echo "',
                    fieldsSets: {
                        channel: ";
        // line 95
        echo twig_jsonencode_filter(($context["fieldsToSendOnChannelChange"] ?? null));
        echo "
                    }
                };

                new IntegrationConnection(options);
            });
        });
    </script>

    ";
        // line 104
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroDotmailerBundle:Dotmailer:integrationConnection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 104,  180 => 95,  175 => 93,  171 => 92,  163 => 86,  160 => 85,  157 => 84,  154 => 83,  152 => 82,  149 => 81,  147 => 79,  146 => 78,  145 => 77,  142 => 76,  140 => 72,  139 => 71,  138 => 65,  135 => 64,  132 => 63,  130 => 59,  129 => 53,  126 => 52,  120 => 50,  118 => 49,  115 => 48,  112 => 47,  109 => 46,  107 => 45,  104 => 44,  101 => 43,  98 => 42,  92 => 38,  90 => 34,  89 => 33,  85 => 31,  79 => 27,  77 => 23,  76 => 22,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  55 => 13,  52 => 12,  49 => 11,  44 => 9,  38 => 8,  34 => 1,  32 => 6,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDotmailerBundle:Dotmailer:integrationConnection.html.twig", "");
    }
}
