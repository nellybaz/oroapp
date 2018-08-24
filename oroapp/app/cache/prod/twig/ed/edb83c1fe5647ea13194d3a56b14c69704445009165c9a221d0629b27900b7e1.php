<?php

/* OroEmailBundle:Email/Thread:emailItem.html.twig */
class __TwigTemplate_9f4f72dd94927082f662965f3c00285c2b07656345bdaf397b0aed2c689e7666 extends Twig_Template
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
        $context["Actions"] = $this->loadTemplate("OroEmailBundle::actions.html.twig", "OroEmailBundle:Email/Thread:emailItem.html.twig", 1);
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email/Thread:emailItem.html.twig", 2);
        // line 3
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email/Thread:emailItem.html.twig", 3);
        // line 4
        echo "
";
        // line 10
        echo "
";
        // line 11
        $context["emailCollapsed"] = ((array_key_exists("emailCollapsed", $context)) ? (($context["emailCollapsed"] ?? null)) : (false));
        // line 12
        echo "<div class=\"email-info";
        echo ((($context["emailCollapsed"] ?? null)) ? ("") : (" in"));
        echo "\" data-layout=\"separate\">
    <div class=\"email-short\">
        <div class=\"email-view-toggle\">
            <div class=\"pull-right\">
                <span class=\"email-sent-date\">
                    <span class=\"comment-count\" style=\"display:none\" title=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.comment.quantity_label"), "html", null, true);
        echo "\">
                        <i class=\"fa-comment\"></i><span class=\"count\"></span>
                    </span>
                    ";
        // line 20
        if (($this->getAttribute(($context["email"] ?? null), "emailBody", array()) && $this->getAttribute($this->getAttribute(($context["email"] ?? null), "emailBody", array()), "hasAttachments", array()))) {
            // line 21
            echo "                        <i class=\"fa-paperclip email-has-attachment\"></i>
                    ";
        }
        // line 23
        echo "                    ";
        echo $context["EA"]->getdate_smart_format($this->getAttribute(($context["email"] ?? null), "sentAt", array()));
        echo "
                </span>
            </div>
            <div class=\"email-participants\">
                <span class=\"email-author\">";
        // line 27
        echo $context["EA"]->getemail_participant_name_or_me($this->getAttribute(($context["email"] ?? null), "fromEmailAddress", array()), $this->getAttribute(($context["email"] ?? null), "fromName", array()), true);
        echo "</span>
                <span class=\"email-recipients\">";
        // line 28
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To")), "html", null, true);
        echo " ";
        echo $context["EA"]->getemail_participants_name($this->getAttribute(($context["email"] ?? null), "recipients", array()), true, false);
        echo "</span>
            </div>
            <div class=\"email-body\">
                ";
        // line 31
        if ($this->getAttribute(($context["email"] ?? null), "emailBody", array())) {
            // line 32
            echo "                    ";
            echo $context["EA"]->getemail_short_body($this->getAttribute(($context["email"] ?? null), "emailBody", array()), 200);
            echo "
                ";
        } else {
            // line 34
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.body_is_unavailable"), "html", null, true);
            echo "
                ";
        }
        // line 36
        echo "            </div>
        </div>
    </div>
    <div class=\"email-full\">
        <div class=\"email-view-toggle\">
            ";
        // line 41
        $context["actionParameters"] = ((array_key_exists("routeParameters", $context)) ? (array("routeParameters" =>         // line 42
($context["routeParameters"] ?? null))) : (array()));
        // line 44
        echo "            ";
        ob_start();
        // line 45
        echo "                ";
        if (( !array_key_exists("defaultReplyButton", $context) || (($context["defaultReplyButton"] ?? null) == 1))) {
            // line 46
            echo "                    ";
            echo $context["Actions"]->getreplyButton(($context["email"] ?? null), ($context["actionParameters"] ?? null));
            echo "
                    ";
            // line 47
            echo $context["Actions"]->getreplyAllButton(($context["email"] ?? null), ($context["actionParameters"] ?? null));
            echo "
                ";
        } else {
            // line 49
            echo "                    ";
            echo $context["Actions"]->getreplyAllButton(($context["email"] ?? null), ($context["actionParameters"] ?? null));
            echo "
                    ";
            // line 50
            echo $context["Actions"]->getreplyButton(($context["email"] ?? null), ($context["actionParameters"] ?? null));
            echo "
                ";
        }
        // line 52
        echo "                ";
        echo $context["Actions"]->getforwardButton(($context["email"] ?? null), ($context["actionParameters"] ?? null));
        echo "
            ";
        $context["buttonsHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 54
        echo "            <div class=\"pull-right\">
                ";
        // line 55
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
            // line 56
            echo "                    ";
            echo $context["UI"]->getpinnedDropdownButton(array("html" => ($context["buttonsHtml"] ?? null)));
            echo "
                ";
        }
        // line 58
        echo "                <div class=\"email-sent-date\">
                    <span class=\"comment-count\" style=\"display:none\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.comment.quantity_label"), "html", null, true);
        echo "\">
                        <i class=\"fa-comment\"></i><span class=\"count\"></span>
                    </span>
                    ";
        // line 62
        if (($this->getAttribute(($context["email"] ?? null), "emailBody", array()) && $this->getAttribute($this->getAttribute(($context["email"] ?? null), "emailBody", array()), "hasAttachments", array()))) {
            // line 63
            echo "                        <i class=\"fa-paperclip email-has-attachment\"></i>
                    ";
        }
        // line 65
        echo "                    ";
        echo $context["EA"]->getdate_smart_format($this->getAttribute(($context["email"] ?? null), "sentAt", array()));
        echo "<br />
                </div>
            </div>
            <div class=\"email-participants\">
                <div class=\"email-author\">";
        // line 69
        echo $context["EA"]->getemail_participant_name_or_me($this->getAttribute(($context["email"] ?? null), "fromEmailAddress", array()), $this->getAttribute(($context["email"] ?? null), "fromName", array()), true);
        echo "</div>
                <span class=\"email-recipients\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To"), "html", null, true);
        echo ": ";
        echo $context["EA"]->getemail_participants_name($this->getAttribute(($context["email"] ?? null), "recipients", array()), true);
        echo "</span>
                <div class=\"email-detailed-info-table dropdown\">
                    <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" title=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.show_details.tooltip"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-caret-square-o-down\"></i>
                    </span>
                    <div class=\"dropdown-menu\" role=\"menu\">
                        ";
        // line 76
        echo $context["EA"]->getemail_detailed_info_table(($context["email"] ?? null));
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 80
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()) {
            // line 81
            echo "                <div class=\"email-actions clearfix\">";
            echo twig_escape_filter($this->env, ($context["buttonsHtml"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        // line 83
        echo "        </div>
        <div class=\"email-content clearfix\">
            <div class=\"email-body responsive-cell\">
                ";
        // line 86
        if ($this->getAttribute(($context["email"] ?? null), "emailBody", array())) {
            // line 87
            echo "                    ";
            if ($this->getAttribute($this->getAttribute(($context["email"] ?? null), "emailBody", array()), "bodyIsText", array())) {
                // line 88
                echo "                        ";
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["email"] ?? null), "emailBody", array()), "bodyContent", array()), "html", null, true));
                echo "
                    ";
            } else {
                // line 90
                echo "                        ";
                $context["emailBodyViewOptions"] = array("name" => "email-body", "view" => "oroemail/js/app/views/email-body-view", "bodyContent" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute($this->getAttribute(                // line 93
($context["email"] ?? null), "emailBody", array()), "bodyContent", array())), "styles" => array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroform/css/wysiwyg-editor.css"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroemail/css/email-body.css")));
                // line 99
                echo "                        <iframe data-page-component-module=\"oroui/js/app/components/view-component\"
                                data-page-component-options=\"";
                // line 100
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["emailBodyViewOptions"] ?? null)), "html", null, true);
                echo "\"></iframe>
                    ";
            }
            // line 102
            echo "                ";
        } else {
            // line 103
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.body_is_unavailable"), "html", null, true);
            echo "
                ";
        }
        // line 105
        echo "                ";
        if ($this->getAttribute(($context["email"] ?? null), "emailBody", array())) {
            // line 106
            echo "                    ";
            $context["aCount"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["email"] ?? null), "emailBody", array()), "attachments", array()));
            // line 107
            echo "                    ";
            $context["previewLimit"] = $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_email.attachment_preview_limit");
            // line 108
            echo "                    ";
            if (($context["aCount"] ?? null)) {
                // line 109
                echo "                        <div class=\"email-attachments-list-cont\">
                            <h6 class=\"pull-left\">";
                // line 110
                echo twig_escape_filter($this->env, ($context["aCount"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (((($context["aCount"] ?? null) > 1)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.attachment.entity_plural_label")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.attachment.entity_label"))), "html", null, true);
                echo "</h6>
                            <a class=\"pull-left no-hash\" href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_body_attachments", array("id" => $this->getAttribute($this->getAttribute(($context["email"] ?? null), "emailBody", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.attachment.download_all"), "html", null, true);
                echo "</a>
                            <ul class=\"email-attachments-list thumbnails ";
                // line 112
                echo (((($context["aCount"] ?? null) > ($context["previewLimit"] ?? null))) ? ("name-only") : (""));
                echo "\">
                                ";
                // line 113
                echo $context["EA"]->getattachments($this->getAttribute($this->getAttribute(($context["email"] ?? null), "emailBody", array()), "attachments", array()), ($context["target"] ?? null), ($context["hasGrantReattach"] ?? null));
                echo "
                            </ul>
                        </div>
                    ";
            }
            // line 117
            echo "                ";
        }
        // line 118
        echo "            </div>";
        // line 119
        ob_start();
        // line 120
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_content_data_comments", $context)) ? (_twig_default_filter(($context["view_content_data_comments"] ?? null), "view_content_data_comments")) : ("view_content_data_comments")), array("entity" => ($context["email"] ?? null)));
        $context["commentsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 122
        if ( !twig_test_empty(($context["commentsData"] ?? null))) {
            // line 123
            echo "                <div class=\"responsive-cell\">
                    ";
            // line 124
            echo twig_escape_filter($this->env, ($context["commentsData"] ?? null), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 127
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Thread:emailItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 127,  287 => 124,  284 => 123,  282 => 122,  279 => 120,  277 => 119,  275 => 118,  272 => 117,  265 => 113,  261 => 112,  255 => 111,  249 => 110,  246 => 109,  243 => 108,  240 => 107,  237 => 106,  234 => 105,  228 => 103,  225 => 102,  220 => 100,  217 => 99,  215 => 93,  213 => 90,  207 => 88,  204 => 87,  202 => 86,  197 => 83,  191 => 81,  189 => 80,  182 => 76,  175 => 72,  168 => 70,  164 => 69,  156 => 65,  152 => 63,  150 => 62,  144 => 59,  141 => 58,  135 => 56,  133 => 55,  130 => 54,  124 => 52,  119 => 50,  114 => 49,  109 => 47,  104 => 46,  101 => 45,  98 => 44,  96 => 42,  95 => 41,  88 => 36,  82 => 34,  76 => 32,  74 => 31,  66 => 28,  62 => 27,  54 => 23,  50 => 21,  48 => 20,  42 => 17,  33 => 12,  31 => 11,  28 => 10,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Thread:emailItem.html.twig", "");
    }
}
