<?php

/* OroEmailBundle:Email/Reply:parentBody.html.twig */
class __TwigTemplate_361b6ecbff182efbc877bd3de5b9dc3bc195b66aa651c778c2f98ced0820395b extends Twig_Template
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
        echo "<body> ";
        // line 2
        echo "    <br><br>
    <div class=\"quote\">
        <p>
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.parent_message_header", array("%date%" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(        // line 6
($context["email"] ?? null), "sentAt", array())), "%user%" => $this->getAttribute(        // line 7
($context["email"] ?? null), "fromName", array()))), "html", null, true);
        // line 8
        echo "
        </p>
        <div class=\"email-prev-body\">
            ";
        // line 11
        if ($this->getAttribute(($context["email"] ?? null), "emailBody", array())) {
            // line 12
            echo "                ";
            echo $this->getAttribute($this->getAttribute(($context["email"] ?? null), "emailBody", array()), "bodyContent", array());
            echo "
            ";
        }
        // line 14
        echo "        </div>
    </div>
</body>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Reply:parentBody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  37 => 12,  35 => 11,  30 => 8,  28 => 7,  27 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Reply:parentBody.html.twig", "");
    }
}
