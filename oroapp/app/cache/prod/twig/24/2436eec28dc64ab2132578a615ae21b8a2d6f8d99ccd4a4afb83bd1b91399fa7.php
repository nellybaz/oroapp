<?php

/* AkeneoBatchBundle:Mails:notification.html.twig */
class __TwigTemplate_e43fdc5d9cd35c8a48549604a79cecae5fb92b5cd2418b9b9c7220ca7a4cdbf8 extends Twig_Template
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
        echo "<p>
    Akeneo successfully completed your batch ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["jobExecution"] ?? null), "jobInstance", array()), "type", array()), "html", null, true);
        echo ".<br />
    <br />
    Started on ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["jobExecution"] ?? null), "startTime", array()), "Y-m-d"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["jobExecution"] ?? null), "startTime", array()), "H:i:s"), "html", null, true);
        echo ".<br />
    Ended on ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["jobExecution"] ?? null), "endTime", array()), "Y-m-d"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["jobExecution"] ?? null), "endTime", array()), "H:i:s"), "html", null, true);
        echo ".<br />
</p>

<p>
    Results:<br />
    <ul>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["jobExecution"] ?? null), "stepExecutions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stepExecution"]) {
            // line 12
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["stepExecution"], "stepName", array())), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute($context["stepExecution"], "status", array()), "html", null, true);
            echo "]
            <ul>
                <li>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["stepExecution"], "readCount", array()), "html", null, true);
            echo " item(s) read</li>
                <li>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["stepExecution"], "writeCount", array()), "html", null, true);
            echo " item(s) written</li>
            </ul>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepExecution'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>
</p>

<p>
    -- <br />
    Oro Platform<br />
</p>
";
    }

    public function getTemplateName()
    {
        return "AkeneoBatchBundle:Mails:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  60 => 15,  56 => 14,  48 => 12,  44 => 11,  33 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AkeneoBatchBundle:Mails:notification.html.twig", "");
    }
}
