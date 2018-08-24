<?php

/* OroCommentBundle:Comment:comments.html.twig */
class __TwigTemplate_31bab89bfaa4ed80208252ebe4e292cad7ed47c05ced03e0a4bbe7a289c4d6c5 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCommentBundle:Comment:comments.html.twig", 1);
        // line 2
        $context["containerExtraClass"] = ((array_key_exists("containerExtraClass", $context)) ? (($context["containerExtraClass"] ?? null)) : (""));
        // line 3
        echo "<div class=\"widget-content comment-list ";
        echo twig_escape_filter($this->env, ($context["containerExtraClass"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 4
        $context["options"] = array("relatedEntityId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()), "relatedEntityClassName" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 6
($context["entity"] ?? null), true), "listTemplate" => "#template-activity-item-comment", "canCreate" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_comment_create"), "name" => "comments");
        // line 11
        echo "    <div class=\"comment\"
         data-page-component-module=\"orocomment/js/app/components/comment-component\"
         data-page-component-options=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\">
    </div>
</div>
";
        // line 16
        $this->loadTemplate("OroCommentBundle:Comment/js:list.html.twig", "OroCommentBundle:Comment:comments.html.twig", 16)->display(array_merge($context, array("id" => "template-activity-item-comment")));
    }

    public function getTemplateName()
    {
        return "OroCommentBundle:Comment:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  36 => 13,  32 => 11,  30 => 6,  29 => 5,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommentBundle:Comment:comments.html.twig", "");
    }
}
