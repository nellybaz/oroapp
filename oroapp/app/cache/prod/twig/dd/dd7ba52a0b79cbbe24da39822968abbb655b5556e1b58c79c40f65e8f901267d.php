<?php

/* OroActivityListBundle:ActivityList/js:view.html.twig */
class __TwigTemplate_54d06a2fe91bbb5468f6d2cfb05931b9cc85e8ca8afb20d42f3969cb94bd6ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'activityIcon' => array($this, 'block_activityIcon'),
            'activityDetails' => array($this, 'block_activityDetails'),
            'activityActions' => array($this, 'block_activityActions'),
            'activityShortMessage' => array($this, 'block_activityShortMessage'),
            'activityDate' => array($this, 'block_activityDate'),
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
                ";
        // line 7
        $this->displayBlock('activityIcon', $context, $blocks);
        // line 9
        echo "            </div>
            <div class=\"details\">
                ";
        // line 11
        $this->displayBlock('activityDetails', $context, $blocks);
        // line 13
        echo "            </div>
            <div class=\"actions\">
                ";
        // line 15
        $this->displayBlock('activityActions', $context, $blocks);
        // line 17
        echo "            </div>
            <div class=\"extra-info\">
                <div class=\"message-item message\">
                    ";
        // line 20
        $this->displayBlock('activityShortMessage', $context, $blocks);
        // line 26
        echo "                </div>
                <div class=\"comment-count\"<% if (!commentCount) { %> style=\"display:none\"<% } %>
                    title=\"<%= _.__('oro.activitylist.comment.quantity_label') %>\">
                    <i class=\"fa-comment\"></i><span class=\"count\"><%= commentCount %></span>
                </div>
                <div class=\"created-at\">
                    ";
        // line 32
        $this->displayBlock('activityDate', $context, $blocks);
        // line 35
        echo "                </div>
            </div>
        </div>
        <div class=\"accordion-body collapse<% if (!collapsed) { %> in<% } %>\" id=\"accordion-item<%= id %>\">
            <div class=\"message\">
                ";
        // line 40
        $this->displayBlock('activityContent', $context, $blocks);
        // line 50
        echo "            </div>
        </div>
    </div>
</script>
";
    }

    // line 7
    public function block_activityIcon($context, array $blocks = array())
    {
        // line 8
        echo "                ";
    }

    // line 11
    public function block_activityDetails($context, array $blocks = array())
    {
        // line 12
        echo "                ";
    }

    // line 15
    public function block_activityActions($context, array $blocks = array())
    {
        // line 16
        echo "                ";
    }

    // line 20
    public function block_activityShortMessage($context, array $blocks = array())
    {
        // line 21
        echo "                        <strong><%- _.unescape(subject) %></strong>
                        <% if (!_.isUndefined(description) && !_.isEmpty(description)) { %>
                        - <%= description %>
                        <% } %>
                    ";
    }

    // line 32
    public function block_activityDate($context, array $blocks = array())
    {
        // line 33
        echo "                        <i class=\"date\"><%= updatedAt %></i>
                    ";
    }

    // line 40
    public function block_activityContent($context, array $blocks = array())
    {
        // line 41
        echo "                    ";
        // line 42
        echo "                    <div class=\"info responsive-cell clearfix\"></div>
                    <% if (has_comments && commentable) { %>
                    <div class=\"responsive-cell clearfix\">
                        ";
        // line 46
        echo "                        <div class=\"comment\"></div>
                    </div>
                    <% } %>
                ";
    }

    public function getTemplateName()
    {
        return "OroActivityListBundle:ActivityList/js:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  128 => 42,  126 => 41,  123 => 40,  118 => 33,  115 => 32,  107 => 21,  104 => 20,  100 => 16,  97 => 15,  93 => 12,  90 => 11,  86 => 8,  83 => 7,  75 => 50,  73 => 40,  66 => 35,  64 => 32,  56 => 26,  54 => 20,  49 => 17,  47 => 15,  43 => 13,  41 => 11,  37 => 9,  35 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActivityListBundle:ActivityList/js:view.html.twig", "");
    }
}
