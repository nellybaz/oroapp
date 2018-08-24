<?php

/* OroEmailBundle:Email/Forward:parentBody.html.twig */
class __TwigTemplate_ff4af447b47bf4aeef989abff70ef772af88dea7e3d6c2db2053fdeab05c5fd0 extends Twig_Template
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
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email/Forward:parentBody.html.twig", 1);
        // line 2
        echo "
<body> ";
        // line 4
        echo "<br><br>
<div class=\"quote\">
    <div>
        <p>---------- ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.forwarded_message"), "html", null, true);
        echo " ----------</p>
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From"), "html", null, true);
        echo ":
            ";
        // line 9
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["email"] ?? null), "fromEmailAddress", array()), "owner", array()))) {
            // line 10
            echo "                ";
            echo $context["EA"]->getemail_address_link($this->getAttribute(($context["email"] ?? null), "fromEmailAddress", array()));
            echo "
            ";
        } else {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["email"] ?? null), "fromName", array()), "html", null, true);
            echo "
            ";
        }
        // line 14
        echo "        </p>
        <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.sent_at.label"), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["email"] ?? null), "sentAt", array()));
        echo "</p>
        <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subject"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["email"] ?? null), "subject", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To"), "html", null, true);
        echo ": ";
        echo $context["EA"]->getrecipient_email_addresses($this->getAttribute(($context["email"] ?? null), "toCc", array()), false, false);
        echo "</p>
    </div>
    <br>
    <div class=\"email-prev-body\">
        ";
        // line 21
        if ($this->getAttribute(($context["email"] ?? null), "emailBody", array())) {
            // line 22
            echo "            ";
            echo $this->getAttribute($this->getAttribute(($context["email"] ?? null), "emailBody", array()), "bodyContent", array());
            echo "
        ";
        }
        // line 24
        echo "    </div>
</div>
</body>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Forward:parentBody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  77 => 22,  75 => 21,  66 => 17,  60 => 16,  54 => 15,  51 => 14,  45 => 12,  39 => 10,  37 => 9,  33 => 8,  29 => 7,  24 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Forward:parentBody.html.twig", "");
    }
}
