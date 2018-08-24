<?php

/* OroMarketingActivityBundle:MarketingActivity/js:marketingActivitySectionItem.html.twig */
class __TwigTemplate_ea4bb817bf6cd78de95055c493d76683f434ce2eb9333528da11a56b85bea323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'activityContent' => array($this, 'block_activityContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html_attr");
        echo "\">
    <div class=\"accordion-group\">
        <div class=\"accordion-heading clearfix\">
            <a href=\"#accordion-item<%= id %>\" data-toggle=\"collapse\"
               class=\"accordion-icon accordion-toggle<% if (collapsed) { %> collapsed<% } %>\"></a>
            <div class=\"icon\">
                <i class=\"fa-volume-up\"></i>
            </div>
            <div class=\"campaign-name\">
                <strong><%= campaignName %></strong>
            </div>
            <div class=\"actions\">
                ";
        // line 13
        ob_start();
        // line 14
        echo "                    <a href=\"<%= routing.generate('oro_campaign_view', {'id': id}) %>\"
                       title=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketingactivity.view_campaign.label"), "html", null, true);
        echo "\"><i
                                class=\"fa-eye hide-text\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketingactivity.view_campaign.label"), "html", null, true);
        echo "</i>
                        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketingactivity.view_campaign.label"), "html", null, true);
        echo "
                    </a>
                ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "                ";
        $context["actions"] = array(0 => ($context["action"] ?? null));
        // line 21
        echo "
                <div class=\"dropdown vertical-actions activity-actions\">
                    <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle activity-item\">...</a>
                    <ul class=\"dropdown-menu activity-item pull-right\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("actions", $context)) ? (_twig_default_filter(($context["actions"] ?? null), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 26
            echo "                            <li class=\"activity-action\">";
            echo $context["action"];
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </ul>
                </div>
            </div>
            <div class=\"extra-info\">
                <div class=\"marketing-activity-type\">
                    ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketingactivity.last_event_type.label"), "html", null, true);
        echo ": <%= eventType %>
                </div>
                <div class=\"marketing-activity-date\">
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketingactivity.last_activity_date.label"), "html", null, true);
        echo ": <%= dateFormatter.formatDateTime(eventDate) %>
                </div>
            </div>
        </div>
        <div class=\"accordion-body collapse<% if (!collapsed) { %> in<% } %>\" id=\"accordion-item<%= id %>\">
            <div class=\"message\">
                ";
        // line 42
        $this->displayBlock('activityContent', $context, $blocks);
        // line 46
        echo "            </div>
        </div>
    </div>
</script>
";
    }

    // line 42
    public function block_activityContent($context, array $blocks = array())
    {
        // line 43
        echo "                    ";
        // line 44
        echo "                    <div class=\"info responsive-cell clearfix\"></div>
                ";
    }

    public function getTemplateName()
    {
        return "OroMarketingActivityBundle:MarketingActivity/js:marketingActivitySectionItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 44,  112 => 43,  109 => 42,  101 => 46,  99 => 42,  90 => 36,  84 => 33,  77 => 28,  68 => 26,  64 => 25,  58 => 21,  55 => 20,  49 => 17,  45 => 16,  41 => 15,  38 => 14,  36 => 13,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMarketingActivityBundle:MarketingActivity/js:marketingActivitySectionItem.html.twig", "");
    }
}
