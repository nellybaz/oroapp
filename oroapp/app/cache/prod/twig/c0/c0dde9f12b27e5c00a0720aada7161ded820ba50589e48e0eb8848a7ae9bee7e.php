<?php

/* OroMagentoBundle:Cart/Autocomplete:result.html.twig */
class __TwigTemplate_24d2b742ea935ca09f06bd58772092ebcc1060795edaef300adf7c36e036dfdd extends Twig_Template
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
        echo "<%= highlight(
    _.escape(
        _.__(
            'oro.magento.autocomplete.entity_number', {
                \"entityName\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.cart.entity_label"), "html", null, true);
        echo "\",
                \"entityNumber\": originId
            }
        )
    )
) %>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Cart/Autocomplete:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Cart/Autocomplete:result.html.twig", "");
    }
}
