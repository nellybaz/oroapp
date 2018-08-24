<?php

/* OroEmbeddedFormBundle:EmbeddedForm:view.html.twig */
class __TwigTemplate_c1add126827b4083ca73c31c06e6ab24ecbe59068cf74b896a5ca2ce1e92fd5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroEmbeddedFormBundle:EmbeddedForm:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
            'stats' => array($this, 'block_stats'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmbeddedFormBundle:EmbeddedForm:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%form.title%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "title", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_navButtons($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_embedded_form_delete")) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_delete", array("id" => $this->getAttribute(            // line 8
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_list"), "aCss" => "no-hash remove-button", "id" => "btn-remove-embedded-form", "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.entity_label"))), "method"), "html", null, true);
            // line 13
            echo "
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_embedded_form_delete")) {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"))), "method"), "html", null, true);
            echo "
    ";
        }
        // line 20
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_list"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"))), "method"), "html", null, true);
        echo "
";
    }

    // line 23
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 25
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_list"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 28
($context["entity"] ?? null), "title", array()));
        // line 30
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_content_data($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context["id"] = "embedded-form-get-code";
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('stats', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        ob_start();
        // line 40
        echo "        <div class=\"widget-content\">
            <div class=\"row-fluid form-horizontal\">
                <div class=\"responsive-block\">
                    ";
        // line 43
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.title.label"), $this->getAttribute(($context["entity"] ?? null), "title", array()));
        echo "
                    ";
        // line 44
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.form_type.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null), "N/A")) : ("N/A"))));
        echo "

                    ";
        // line 47
        echo "                    <div class=\"control-group\">
                        <label class=\"control-label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.css.label"), "html", null, true);
        echo "</label>

                        <div class=\"controls\" style=\"overflow-y: scroll; height: 180px;\">
                            ";
        // line 51
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "css", array()), "html", null, true));
        echo "
                        </div>
                    </div>

                    ";
        // line 55
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.success_message.label"), $this->getAttribute(($context["entity"] ?? null), "successMessage", array()));
        echo "
                    ";
        // line 56
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.allowed_domains.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize(nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "allowedDomains", array()), "html", null, true))));
        echo "
                </div>
            </div>
        </div>
    ";
        $context["formDetails"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "    <div class=\"widget-content\">
        <iframe
            id=\"embedded-form\"
            src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("oro_embedded_form_submit", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\"
            width=\"640\"
            height=\"800\"
            frameborder=\"0\"></iframe>
    </div>
    ";
        $context["formPreview"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 71
        echo "
    ";
        // line 72
        ob_start();
        // line 73
        echo "        <textarea id=\"oro_embeddedform_iframe\" cols=\"60\" rows=\"10\" class=\"fill-tab\" style=\"height: 300px\">";
        // line 75
        echo "<div id=\"embedded-form-container-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "id", array()), "html", null, true);
        echo "\"></div>
<script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroembeddedform/js/embed.form.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    new ORO.EmbedForm({
        container: 'embedded-form-container-";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "id", array()), "html", null, true);
        echo "',
        iframe: {
            src: \"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("oro_embedded_form_submit", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\",
            width: 640,
            height: 800,
            frameBorder: 0
        }
    });
</script>
";
        // line 89
        echo "</textarea>
    ";
        $context["getCodeIframe"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 91
        echo "
    ";
        // line 92
        ob_start();
        // line 93
        echo "        <div class=\"alert alert-warning\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.tabs.inline.description");
        echo "</div>
        <textarea id=\"oro_embeddedform_inline\" cols=\"60\" rows=\"10\" class=\"fill-tab\" style=\"height: 300px\">";
        // line 96
        echo "<div id=\"embedded-form-container-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "id", array()), "html", null, true);
        echo "\"></div>
<script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroembeddedform/js/embed.form.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    new ORO.EmbedForm({
        container: 'embedded-form-container-";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "id", array()), "html", null, true);
        echo "',
        xhr: {
            url: \"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("oro_embedded_form_submit", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()), "inline" => true)), "html", null, true);
        echo "\"
        }
    });
</script>
";
        // line 107
        echo "</textarea>
    ";
        $context["getCodeInline"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 109
        echo "
    ";
        // line 110
        $context["getCodeTabs"] = array(0 => array("alias" => "oro_embeddedform_iframe", "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.tabs.iframe.label"), "url" => "#oro_embeddedform_iframe", "content" =>         // line 116
($context["getCodeIframe"] ?? null)), 1 => array("alias" => "oro_embeddedform_inline", "widgetType" => "block", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.embeddedform.tabs.inline.label"), "url" => "#oro_embeddedform_inline", "content" =>         // line 123
($context["getCodeInline"] ?? null)));
        // line 126
        echo "
    ";
        // line 127
        ob_start();
        // line 128
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_embedded_form_info", array("id" => $this->getAttribute(        // line 130
($context["entity"] ?? null), "id", array())))));
        // line 131
        echo "
    ";
        $context["informationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 133
        echo "
    ";
        // line 134
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details"), "data" => twig_array_merge(array(0 =>         // line 140
($context["informationWidget"] ?? null)), array(0 => ($context["formDetails"] ?? null)))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Form Preview"), "data" => array(0 =>         // line 144
($context["formPreview"] ?? null))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Get code"), "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Code"), "data" => array(0 => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env,         // line 152
($context["getCodeTabs"] ?? null)))))));
        // line 156
        echo "
    ";
        // line 157
        $context["data"] = array("dataBlocks" =>         // line 158
($context["dataBlocks"] ?? null));
        // line 160
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 36
    public function block_stats($context, array $blocks = array())
    {
        // line 37
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroEmbeddedFormBundle:EmbeddedForm:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 37,  278 => 36,  271 => 160,  269 => 158,  268 => 157,  265 => 156,  263 => 152,  262 => 144,  261 => 140,  260 => 134,  257 => 133,  253 => 131,  251 => 130,  249 => 128,  247 => 127,  244 => 126,  242 => 123,  241 => 116,  240 => 110,  237 => 109,  233 => 107,  226 => 102,  221 => 100,  215 => 97,  210 => 96,  205 => 93,  203 => 92,  200 => 91,  196 => 89,  186 => 81,  181 => 79,  175 => 76,  170 => 75,  168 => 73,  166 => 72,  163 => 71,  154 => 65,  149 => 62,  146 => 61,  138 => 56,  134 => 55,  127 => 51,  121 => 48,  118 => 47,  113 => 44,  109 => 43,  104 => 40,  102 => 39,  99 => 38,  97 => 36,  94 => 35,  91 => 34,  88 => 33,  81 => 30,  79 => 28,  78 => 25,  76 => 24,  73 => 23,  66 => 20,  60 => 18,  58 => 17,  55 => 16,  50 => 14,  47 => 13,  45 => 8,  43 => 7,  40 => 6,  37 => 5,  33 => 1,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmbeddedFormBundle:EmbeddedForm:view.html.twig", "");
    }
}
