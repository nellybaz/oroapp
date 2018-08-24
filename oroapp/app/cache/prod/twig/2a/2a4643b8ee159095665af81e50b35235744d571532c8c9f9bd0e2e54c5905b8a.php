<?php

/* OroIntegrationBundle:Integration/Datagrid:type.html.twig */
class __TwigTemplate_16a186b83adf175a03386f9c381a72186a5614aab3dcd3df5d336d18fde0c7d2 extends Twig_Template
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
        $context["types"] = $this->getAttribute(($context["registry"] ?? null), "getRegisteredChannelTypes", array(), "method");
        // line 2
        if ($this->getAttribute(($context["choices"] ?? null), ($context["value"] ?? null), array(), "array", true, true)) {
            // line 3
            echo "    ";
            if (($this->getAttribute(($context["types"] ?? null), ($context["value"] ?? null), array(), "array", true, true) && $this->getAttribute($this->getAttribute(($context["types"] ?? null), ($context["value"] ?? null), array(), "array", false, true), "icon", array(), "any", true, true))) {
                // line 4
                echo "        <span class=\"integration-icon\" style=\"background: url(";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["types"] ?? null), ($context["value"] ?? null), array(), "array"), "icon", array()))), "html", null, true);
                echo ") 0 0 no-repeat\" ></span>
    ";
            }
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["choices"] ?? null), ($context["value"] ?? null), array(), "array")), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroIntegrationBundle:Integration/Datagrid:type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroIntegrationBundle:Integration/Datagrid:type.html.twig", "");
    }
}
