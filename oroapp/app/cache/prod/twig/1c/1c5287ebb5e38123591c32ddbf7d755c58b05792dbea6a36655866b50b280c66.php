<?php

/* OroHangoutsCallBundle:Call/action:inviteHangoutButton.html.twig */
class __TwigTemplate_8622368ca9c58303217850604b3645ab138e34d53fdba357dbcfc81734668bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroCallBundle:Call:activityLink.html.twig", "OroHangoutsCallBundle:Call/action:inviteHangoutButton.html.twig", 1);
        $this->blocks = array(
            'action_controll' => array($this, 'block_action_controll'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroCallBundle:Call:activityLink.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_action_controll($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["cssClass"] = "btn icons-holder-text";
        // line 5
        echo "
    ";
        // line 6
        if (array_key_exists("phone", $context)) {
            // line 7
            echo "        ";
            $context["hangoutOptions"] = array("invites" => array(0 => array("name" => (( !twig_test_empty(            // line 9
($context["entity"] ?? null))) ? (twig_escape_filter($this->env, ($context["entity"] ?? null), "html")) : ("")), "id" => (( !twig_test_empty(            // line 10
($context["phone"] ?? null))) ? (twig_escape_filter($this->env, ($context["phone"] ?? null), "html")) : ("")), "invite_type" => "PHONE")));
            // line 14
            echo "    ";
        } elseif (array_key_exists("email", $context)) {
            // line 15
            echo "        ";
            $context["hangoutOptions"] = array("invites" => array(0 => array("name" => (( !twig_test_empty(            // line 17
($context["entity"] ?? null))) ? (twig_escape_filter($this->env, ($context["entity"] ?? null), "html")) : ("")), "id" => (( !twig_test_empty(            // line 18
($context["email"] ?? null))) ? (twig_escape_filter($this->env, ($context["email"] ?? null), "html")) : ("")), "invite_type" => "EMAIL")));
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if ((array_key_exists("entity", $context) && $this->env->getExtension('Oro\Bundle\CallBundle\Twig\OroCallExtension')->isCallLogApplicable(($context["entity"] ?? null)))) {
            // line 25
            echo "        ";
            $context["dataUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_call_create", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(            // line 26
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(            // line 27
($context["entity"] ?? null), "id", array()), "phone" => ((            // line 28
array_key_exists("phone", $context)) ? (twig_escape_filter($this->env, ($context["phone"] ?? null), "html")) : (((array_key_exists("email", $context)) ? (twig_escape_filter($this->env, ($context["email"] ?? null), "html")) : (null))))));
            // line 30
            echo "
        ";
            // line 32
            echo "        ";
            $context["extraComponentOptions"] = array("onAppStartOptions" => array("widgetComponentOptions" => twig_array_merge($this->getAttribute(            // line 34
($context["options"] ?? null), "widget", array()), array("options" => twig_array_merge($this->getAttribute($this->getAttribute(            // line 35
($context["options"] ?? null), "widget", array()), "options", array()), array("url" =>             // line 36
($context["dataUrl"] ?? null))))), "targetComponentName" => "log-hangout-call-component"));
            // line 42
            echo "    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $this->loadTemplate("OroHangoutsCallBundle::inviteHangoutLink.html.twig", "OroHangoutsCallBundle:Call/action:inviteHangoutButton.html.twig", 44)->display($context);
    }

    public function getTemplateName()
    {
        return "OroHangoutsCallBundle:Call/action:inviteHangoutButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 44,  78 => 43,  75 => 42,  73 => 36,  72 => 35,  71 => 34,  69 => 32,  66 => 30,  64 => 28,  63 => 27,  62 => 26,  60 => 25,  58 => 24,  55 => 23,  52 => 22,  50 => 18,  49 => 17,  47 => 15,  44 => 14,  42 => 10,  41 => 9,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroHangoutsCallBundle:Call/action:inviteHangoutButton.html.twig", "");
    }
}
