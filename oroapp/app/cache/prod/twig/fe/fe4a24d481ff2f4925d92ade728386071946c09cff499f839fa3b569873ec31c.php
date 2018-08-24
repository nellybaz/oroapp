<?php

/* OroRFPBundle:layouts/blank/oro_rfp_frontend_request_success:layout.html.twig */
class __TwigTemplate_a4eb664f319a803cb3737c35216f9d04f23fafe13199f43956a237f090dc347d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_rfp_success_message_widget' => array($this, 'block__rfp_success_message_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_rfp_success_message_widget', $context, $blocks);
    }

    public function block__rfp_success_message_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"rfp-request__success\">
        <h1 class=\"rfp-request__success__title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.success.thank_you.label"), "html", null, true);
        // line 5
        echo "</h1>

        <div class=\"rfp-request__success__order\">
            ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["request"] ?? null))) {
            // line 9
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.success.request_number.label"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "id", array()), "html", null, true);
            echo "
                    (<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_rfp_frontend_request_view", array("id" => $this->getAttribute(($context["request"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.success.click_to_review.label"), "html", null, true);
            echo "</a>)
                </p>
            ";
        }
        // line 14
        echo "            <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.success.receive_email.label"), "html", null, true);
        echo "</p>
        </div>

        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_frontend_root");
        echo "\" class=\"btn btn--info rfp-request__success__btn\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.rfp.request.success.done.label"), "html", null, true);
        // line 19
        echo "</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:layouts/blank/oro_rfp_frontend_request_success:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  64 => 18,  61 => 17,  54 => 14,  48 => 11,  45 => 10,  38 => 9,  36 => 8,  31 => 5,  29 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRFPBundle:layouts/blank/oro_rfp_frontend_request_success:layout.html.twig", "");
    }
}
