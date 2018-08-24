<?php

/* OroCaseBundle:Case:contactCases.html.twig */
class __TwigTemplate_f7416fb77eff4a82fc66eec920a42ec616c1bb39f3c0a125a61651c52ad74c47 extends Twig_Template
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_case_view")) {
            // line 2
            echo "    ";
            $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCaseBundle:Case:contactCases.html.twig", 2);
            // line 3
            echo "
    <div class=\"responsive-cell\">
        <div class=\"box-type1\">
            <div class=\"title\">
                <span class=\"widget-title\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.entity_plural_label"), "html", null, true);
            echo "</span>
            </div>

            <div class=\"row-fluid\">
                ";
            // line 11
            echo $context["dataGrid"]->getrenderGrid("contact-cases-grid", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
            echo "
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroCaseBundle:Case:contactCases.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  30 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCaseBundle:Case:contactCases.html.twig", "");
    }
}
