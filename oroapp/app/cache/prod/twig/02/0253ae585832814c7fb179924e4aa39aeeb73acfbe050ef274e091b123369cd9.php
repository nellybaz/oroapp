<?php

/* OroHangoutsCallBundle::inviteHangoutLink.html.twig */
class __TwigTemplate_dfcc6bef899e0ae20750718c7e91c3e77af55b7836c1632fdf2f0d215afae315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'action_controll' => array($this, 'block_action_controll'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroHangoutsCallBundle::inviteHangoutLink.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["options"] = array("class" => ((        // line 4
array_key_exists("cssClass", $context)) ? (($context["cssClass"] ?? null)) : ("")), "aCss" => "no-hash", "iCss" => "icon-hangouts", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.hangoutscall.call.hangouts_call"), "pageComponent" => array("module" => "orohangoutscall/js/app/components/invite-hangout-component", "options" => twig_array_merge(array("modalOptions" => array("hangoutOptions" => ((        // line 12
array_key_exists("hangoutOptions", $context)) ? (($context["hangoutOptions"] ?? null)) : (array())))), ((        // line 14
array_key_exists("extraComponentOptions", $context)) ? (($context["extraComponentOptions"] ?? null)) : (array())))));
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('action_controll', $context, $blocks);
    }

    public function block_action_controll($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        echo $context["UI"]->getclientLink(($context["options"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroHangoutsCallBundle::inviteHangoutLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 19,  33 => 18,  30 => 17,  28 => 14,  27 => 12,  26 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroHangoutsCallBundle::inviteHangoutLink.html.twig", "");
    }
}
