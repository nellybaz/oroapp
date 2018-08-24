<?php

/* AkeneoBatchBundle:Mails:notification.txt.twig */
class __TwigTemplate_d084940765255c315113e502c2bdbc54623f81486189491ca363de0ca88d5e18 extends Twig_Template
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
        echo "Akeneo successfully completed your batch ";
        echo $this->getAttribute($this->getAttribute(($context["jobExecution"] ?? null), "jobInstance", array()), "type", array());
        echo ".

Started on ";
        // line 3
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["jobExecution"] ?? null), "startTime", array()), "Y-m-d");
        echo " at ";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["jobExecution"] ?? null), "startTime", array()), "H:i:s");
        echo ".
Ended on ";
        // line 4
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["jobExecution"] ?? null), "endTime", array()), "Y-m-d");
        echo " at ";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["jobExecution"] ?? null), "endTime", array()), "H:i:s");
        echo ".

Results:
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["jobExecution"] ?? null), "stepExecutions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stepExecution"]) {
            // line 8
            echo "  - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["stepExecution"], "stepName", array()));
            echo " [";
            echo $this->getAttribute($context["stepExecution"], "status", array());
            echo "]
    - ";
            // line 9
            echo $this->getAttribute($context["stepExecution"], "readCount", array());
            echo " item(s) read
    - ";
            // line 10
            echo $this->getAttribute($context["stepExecution"], "writeCount", array());
            echo " item(s) written
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepExecution'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
--
Oro Platform
";
    }

    public function getTemplateName()
    {
        return "AkeneoBatchBundle:Mails:notification.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  54 => 10,  50 => 9,  43 => 8,  39 => 7,  31 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AkeneoBatchBundle:Mails:notification.txt.twig", "");
    }
}
