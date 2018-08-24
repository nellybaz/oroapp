<?php

/* OroOrganizationBundle::owner.html.twig */
class __TwigTemplate_9a01afc9e3d40fce37a0efd78632bb9a0c5d2b337c8f222f55efd3059f3e41cb extends Twig_Template
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
        if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
            // line 2
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "owner", array()), "vars", array()), "label", array()) == "oro.organization.businessunit.parent.label")) {
                // line 3
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row');
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row', array("label" => (( !(($context["label"] ?? null) === false)) ? (($context["label"] ?? null)) : (""))));
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle::owner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrganizationBundle::owner.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/OrganizationBundle/Resources/views/owner.html.twig");
    }
}
