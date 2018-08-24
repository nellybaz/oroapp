<?php

/* OroAttachmentBundle:Form:fields.html.twig */
class __TwigTemplate_57226d6b1ef942c6015c67c818efd1641598c2661dd2ef3e7f89ef5b2058295f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_file_widget' => array($this, 'block_oro_file_widget'),
            'oro_image_widget' => array($this, 'block_oro_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_file_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('oro_image_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_file_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"control-group\" style=\"margin-bottom: 0\">
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'widget');
        echo "
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'errors')) {
            // line 6
            echo "                <div style=\"clear:both; float:left\">
                    ";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'errors');
            echo "
                </div>
            ";
        }
        // line 10
        echo "        </div>
        ";
        // line 11
        if ( !twig_test_empty(($context["value"] ?? null))) {
            // line 12
            echo "            ";
            if ( !twig_test_empty($this->getAttribute(($context["value"] ?? null), "originalFilename", array()))) {
                // line 13
                echo "                ";
                $context["parentEntity"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "value", array());
                // line 14
                echo "                ";
                $context["fieldName"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array());
                // line 15
                echo "
                ";
                // line 16
                if ($this->getAttribute(($context["form"] ?? null), "emptyFile", array(), "any", true, true)) {
                    // line 17
                    echo "                ";
                    $context["inputId"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "emptyFile", array()), "vars", array()), "id", array());
                    // line 18
                    echo "                ";
                    $context["divId"] = (($context["inputId"] ?? null) . "div");
                    // line 19
                    echo "
                ";
                    // line 20
                    $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroAttachmentBundle:Form:fields.html.twig", 20);
                    // line 21
                    echo "
                <div id=\"";
                    // line 22
                    echo twig_escape_filter($this->env, ($context["divId"] ?? null), "html", null, true);
                    echo "\" class=\"well well-small oro_attachment_file\" ";
                    echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroattachment/js/app/views/attachment-view", "options" => array("inputSelector" => ("#" .                     // line 25
($context["inputId"] ?? null)))));
                    // line 27
                    echo ">

                    ";
                    // line 29
                    echo $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileView($this->env, ($context["parentEntity"] ?? null), ($context["fieldName"] ?? null), ($context["value"] ?? null));
                    echo "
                    ";
                    // line 30
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "emptyFile", array()), 'row');
                    echo "
                    ";
                    // line 31
                    if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "allow_delete", array())) {
                        // line 32
                        echo "                        <button data-role=\"remove\"
                                class=\"btn btn-action btn-link delete\"
                                type=\"button\"
                                data-related=\"";
                        // line 35
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "emptyFile", array()), "vars", array()), "name", array()), "html", null, true);
                        echo "\"
                                ";
                        // line 36
                        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "emptyFile", array()), "vars", array()), "disabled", array())) {
                            echo "disabled=\"disabled\"";
                        }
                        // line 37
                        echo "                        ></button>
                    ";
                    }
                    // line 39
                    echo "                </div>
                ";
                } else {
                    // line 41
                    echo "                    <div class=\"well well-small oro_attachment_file\">
                        ";
                    // line 42
                    echo $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileView($this->env, ($context["parentEntity"] ?? null), ($context["fieldName"] ?? null), ($context["value"] ?? null));
                    echo "
                    </div>
                ";
                }
                // line 45
                echo "            ";
            }
            // line 46
            echo "        ";
        }
        // line 47
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_oro_image_widget($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        ob_start();
        // line 52
        echo "        <div class=\"control-group\" style=\"margin-bottom: 0\">
            ";
        // line 53
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()) == "attachment")) {
            // line 54
            echo "                <div class=\"attachment-file\">
                    ";
            // line 55
            $context["jsonParams"] = (((("{\"initializeOptions\":{\"fileDefaultHtml\":\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attach file:")) . "\" ,\"fileButtonHtml\":\"") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload")) . "\"}}");
            // line 56
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'widget', array("attr" => array("data-input-widget-options" =>             // line 57
($context["jsonParams"] ?? null))));
            // line 59
            echo "
                </div>
            ";
        } else {
            // line 62
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'widget');
            echo "
            ";
        }
        // line 64
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'errors')) {
            // line 65
            echo "                <div style=\"clear:both; float:left\">
                    ";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'errors');
            echo "
                </div>
            ";
        }
        // line 69
        echo "        </div>
        ";
        // line 70
        if ( !twig_test_empty(($context["value"] ?? null))) {
            // line 71
            echo "            ";
            if ( !twig_test_empty($this->getAttribute(($context["value"] ?? null), "originalFilename", array()))) {
                // line 72
                echo "                ";
                $context["parentEntity"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "value", array());
                // line 73
                echo "                ";
                $context["fieldName"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array());
                // line 74
                echo "
                ";
                // line 75
                if ($this->getAttribute(($context["form"] ?? null), "emptyFile", array(), "any", true, true)) {
                    // line 76
                    echo "                ";
                    $context["inputId"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "emptyFile", array()), "vars", array()), "id", array());
                    // line 77
                    echo "                ";
                    $context["divId"] = (($context["inputId"] ?? null) . "div");
                    // line 78
                    echo "
                ";
                    // line 79
                    $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroAttachmentBundle:Form:fields.html.twig", 79);
                    // line 80
                    echo "
                <div id=\"";
                    // line 81
                    echo twig_escape_filter($this->env, ($context["divId"] ?? null), "html", null, true);
                    echo "\" class=\"attachment_item\" ";
                    echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroattachment/js/app/views/attachment-view", "options" => array("inputSelector" => ("#" .                     // line 84
($context["inputId"] ?? null)))));
                    // line 86
                    echo ">
                    <i class=\"fa-paperclip\"></i>
                    <a href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileUrl(($context["parentEntity"] ?? null), ($context["fieldName"] ?? null), ($context["value"] ?? null), "download", true), "html", null, true);
                    echo "\" class=\"no-hash filename\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "originalFilename", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "originalFilename", array()), "html", null, true);
                    echo "
                    </a>
                    (";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileSize($this->getAttribute(($context["value"] ?? null), "fileSize", array())), "html", null, true);
                    echo ")
                    ";
                    // line 92
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "emptyFile", array()), 'row');
                    echo "
                    <i data-role=\"remove\"
                       class=\"btn btn-link fa-close remove-attachment\"
                       type=\"button\"
                       data-related=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "emptyFile", array()), "vars", array()), "name", array()), "html", null, true);
                    echo "\"
                    ></i>
                </div>
                ";
                } else {
                    // line 100
                    echo "                    <div class=\"well well-small oro_attachment_file\">
                        <a href=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileUrl(($context["parentEntity"] ?? null), ($context["fieldName"] ?? null), ($context["value"] ?? null), "download", true), "html", null, true);
                    echo "\" class=\"no-hash filename\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "originalFilename", array()), "html", null, true);
                    echo "\">
                            <img src=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getResizedImageUrl(($context["value"] ?? null)), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "originalFilename", array()), "html", null, true);
                    echo "\" />
                            ";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "originalFilename", array()), "html", null, true);
                    echo "
                        </a>
                    </div>
                ";
                }
                // line 107
                echo "            ";
            }
            // line 108
            echo "        ";
        }
        // line 109
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  289 => 109,  286 => 108,  283 => 107,  276 => 103,  270 => 102,  264 => 101,  261 => 100,  254 => 96,  247 => 92,  243 => 91,  238 => 89,  232 => 88,  228 => 86,  226 => 84,  223 => 81,  220 => 80,  218 => 79,  215 => 78,  212 => 77,  209 => 76,  207 => 75,  204 => 74,  201 => 73,  198 => 72,  195 => 71,  193 => 70,  190 => 69,  184 => 66,  181 => 65,  178 => 64,  172 => 62,  167 => 59,  165 => 57,  163 => 56,  161 => 55,  158 => 54,  156 => 53,  153 => 52,  150 => 51,  147 => 50,  142 => 47,  139 => 46,  136 => 45,  130 => 42,  127 => 41,  123 => 39,  119 => 37,  115 => 36,  111 => 35,  106 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 27,  90 => 25,  87 => 22,  84 => 21,  82 => 20,  79 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  48 => 7,  45 => 6,  43 => 5,  39 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 50,  23 => 49,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAttachmentBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/AttachmentBundle/Resources/views/Form/fields.html.twig");
    }
}
