<?php

/* OroNoteBundle:Note/widget:info.html.twig */
class __TwigTemplate_111010db71ddd275b77be668ac96c992f5fa5b8e962bddace8740ca285c76b5b extends Twig_Template
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
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNoteBundle:Note/widget:info.html.twig", 2);
        // line 3
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroNoteBundle:Note/widget:info.html.twig", 3);
        // line 4
        echo "
<div class=\"widget-content form-horizontal box-content row-fluid\">
    <div class=\"responsive-block\">
        <div class=\"activity-context-activity-list\">
            ";
        // line 8
        echo $context["AC"]->getactivity_contexts(($context["entity"] ?? null), ($context["target"] ?? null), true, "oronote/js/app/components/note-context-component");
        echo "
        </div>

        ";
        // line 11
        echo $context["UI"]->getrenderSwitchableHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.message.label"), $this->getAttribute(($context["entity"] ?? null), "message", array()));
        echo "
    </div>
    ";
        // line 13
        if (( !twig_test_empty(($context["attachment"] ?? null)) && $this->getAttribute(($context["attachment"] ?? null), "attachmentURL", array()))) {
            // line 14
            echo "    <div class=\"note-attachments\">
        <div class=\"control-group\">
            <label class=\"control-label\">
                Attachment
            </label>
            <div class=\"attachment-item\">
                <div class=\"thumbnail\">
                    ";
            // line 21
            if ($this->getAttribute(($context["attachment"] ?? null), "attachmentThumbnail", array())) {
                // line 22
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "attachmentURL", array()), "html", null, true);
                echo "\" data-gallery=\"note-view-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "id", array()), "html", null, true);
                echo "\" class=\"no-hash\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "attachmentFileName", array()), "html", null, true);
                echo "\">
                            <span class=\"thumbnail\" style=\"background: url('";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "attachmentThumbnail", array()), "html", null, true);
                echo "') 50% 50% no-repeat;\"></span>
                        </a>
                    ";
            } else {
                // line 26
                echo "                        <i class=\"fa ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "attachmentIcon", array()), "html", null, true);
                echo " fa-3x\"></i>
                    ";
            }
            // line 28
            echo "                </div>
                <div class=\"dropdown link-to-record\">
                    <a class=\"no-hash dropdown-toggle file-menu\" href=\"javascript: void(0);\" data-toggle=\"dropdown\">
                        <i class=\"fa ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "attachmentIcon", array()), "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "attachmentFileName", array()), "html", null, true);
            echo "
                    </a>
                    <ul class=\"dropdown-menu file-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                        <a class=\"no-hash\" tabindex=\"-1\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "attachmentURL", array()), "html", null, true);
            echo "\">
                            ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.translation.action.download"), "html", null, true);
            echo " <span>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attachment"] ?? null), "attachmentSize", array()), "html", null, true);
            echo "</span>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    ";
        }
        // line 44
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroNoteBundle:Note/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  91 => 35,  87 => 34,  79 => 31,  74 => 28,  68 => 26,  62 => 23,  53 => 22,  51 => 21,  42 => 14,  40 => 13,  35 => 11,  29 => 8,  23 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNoteBundle:Note/widget:info.html.twig", "");
    }
}
