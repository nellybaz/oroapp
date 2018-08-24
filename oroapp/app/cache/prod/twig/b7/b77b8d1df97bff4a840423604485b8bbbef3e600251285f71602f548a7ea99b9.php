<?php

/* OroUserBundle:User/widget:apiKeyGen.html.twig */
class __TwigTemplate_47b6ea690b2a7aabcfd46484656254c94a87454fd6cd71698492450c0741c843 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle:User/widget:apiKeyGen.html.twig", 1);
        // line 2
        $context["userId"] = $this->getAttribute(($context["user"] ?? null), "id", array());
        // line 3
        $context["formId"] = ("user-apikey-gen-form-" . ($context["userId"] ?? null));
        // line 4
        $context["apiKeyElementId"] = ("user-apikey-gen-elem-" . ($context["userId"] ?? null));
        // line 5
        $context["options"] = array("view" => "orouser/js/views/user-apikey-gen-view", "apiKeyElementSelector" => ("#" .         // line 7
($context["apiKeyElementId"] ?? null)), "formSelector" => ("#" .         // line 8
($context["formId"] ?? null)), "responseMessage" => "oro.user.apikey_gen.new_key.success");
        // line 11
        echo "<div class=\"control-group api-block\"
     data-nohash=\"true\"
     data-page-component-module=\"oroui/js/app/components/view-component\"
     data-page-component-options=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"
     data-layout=\"separate\">
    <label class=\"control-label control-label-api-key\">
        ";
        // line 17
        echo $context["ui"]->gettooltip("oro.user.api.tooltip_text", array(), "bottom");
        echo "
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.api.label"), "html", null, true);
        echo "
    </label>
    <div class=\"controls\">
        <div class=\"control-label html-content\">
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(        // line 23
($context["form"] ?? null), 'row', array("method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_apigen", array("id" =>         // line 26
($context["userId"] ?? null))), "attr" => array("id" =>         // line 27
($context["formId"] ?? null)), "apiKeyElementId" =>         // line 28
($context["apiKeyElementId"] ?? null)));
        // line 30
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User/widget:apiKeyGen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 30,  57 => 28,  56 => 27,  55 => 26,  54 => 23,  53 => 22,  46 => 18,  42 => 17,  36 => 14,  31 => 11,  29 => 8,  28 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:User/widget:apiKeyGen.html.twig", "");
    }
}
