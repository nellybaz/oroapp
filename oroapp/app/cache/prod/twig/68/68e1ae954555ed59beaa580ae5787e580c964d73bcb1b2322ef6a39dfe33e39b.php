<?php

/* OroEmailBundle:Email/widget:thread.html.twig */
class __TwigTemplate_6bad4f352343b79dc9d161124ac826e464fd760fbc4ff6f705bc6576403400f8 extends Twig_Template
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
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroEmailBundle:Email/widget:thread.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 5
        echo "    ";
        if (((array_key_exists("renderContexts", $context) && ($context["renderContexts"] ?? null)) && (twig_length_filter($this->env, ($context["thread"] ?? null)) > 0))) {
            // line 6
            echo "    <div class=\"activity-context-activity-list\">
        ";
            // line 7
            $context["checkTarget"] = ((($context["target"] ?? null)) ? (true) : (false));
            // line 8
            echo "        ";
            echo $context["AC"]->getactivity_contexts(twig_first($this->env, ($context["thread"] ?? null)), ($context["target"] ?? null), ($context["checkTarget"] ?? null));
            echo "
    </div>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (( !array_key_exists("shortEmailThread", $context) && (twig_length_filter($this->env, ($context["thread"] ?? null)) >= 7))) {
            // line 13
            echo "        ";
            // line 14
            echo "        ";
            $context["shortEmailThread"] = true;
            // line 15
            echo "        ";
            $context["skippedEmails"] = array();
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $context["threadViewOptions"] = array("view" => "oroemail/js/app/views/email-thread-view", "actionPanelSelector" => ".email-thread-action-panel");
        // line 21
        echo "    ";
        $context["threadViewOptions"] = twig_array_merge(($context["threadViewOptions"] ?? null), array("isBaseView" =>  !($context["renderContexts"] ?? null)));
        // line 22
        echo "    <div class=\"thread-view\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["threadViewOptions"] ?? null)), "html", null, true);
        echo "\"
         data-page-component-name=\"email-thread\"
         data-layout=\"separate\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["thread"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 28
            echo "            ";
            if ((((array_key_exists("shortEmailThread", $context) && ($context["shortEmailThread"] ?? null)) && ($this->getAttribute($context["loop"], "index", array()) > 2)) && ($this->getAttribute($context["loop"], "index", array()) < ($this->getAttribute($context["loop"], "length", array()) - 1)))) {
                // line 29
                echo "                ";
                $context["skippedEmails"] = twig_array_merge(($context["skippedEmails"] ?? null), array(0 => $this->getAttribute($context["email"], "id", array())));
                // line 30
                echo "                ";
                if (($this->getAttribute($context["loop"], "index", array()) == ($this->getAttribute($context["loop"], "length", array()) - 2))) {
                    // line 31
                    echo "                <div class=\"email-load-more\" data-emails-items=\"";
                    echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["skippedEmails"] ?? null)), "html", null, true);
                    echo "\">
                    <span class=\"load-more-label\">";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.load_more_emails", array("%quantity%" => twig_length_filter($this->env, ($context["skippedEmails"] ?? null)))), "html", null, true);
                    echo "</span>
                </div>
                ";
                }
                // line 35
                echo "            ";
            } else {
                // line 36
                echo "                ";
                // line 37
                echo "                ";
                $context["emailCollapsed"] =  !$this->getAttribute($context["loop"], "last", array());
                // line 38
                echo "                ";
                $this->loadTemplate("OroEmailBundle:Email/Thread:emailItem.html.twig", "OroEmailBundle:Email/widget:thread.html.twig", 38)->display($context);
                // line 39
                echo "            ";
            }
            // line 40
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/widget:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 41,  123 => 40,  120 => 39,  117 => 38,  114 => 37,  112 => 36,  109 => 35,  103 => 32,  98 => 31,  95 => 30,  92 => 29,  89 => 28,  72 => 27,  66 => 24,  62 => 22,  59 => 21,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  45 => 13,  43 => 12,  40 => 11,  33 => 8,  31 => 7,  28 => 6,  25 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/widget:thread.html.twig", "");
    }
}
