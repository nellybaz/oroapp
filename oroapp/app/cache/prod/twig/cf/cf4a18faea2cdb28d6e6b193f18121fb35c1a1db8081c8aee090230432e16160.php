<?php

/* OroCustomerBundle:CustomerUser/widget:roles.html.twig */
class __TwigTemplate_34c21d0ff213893b039661f851e978cfd143956cbf843c50dcead78df29ccab9 extends Twig_Template
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
        echo "<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 4
        $context["hasRoles"] = $this->getAttribute(($context["form"] ?? null), "roles", array(), "any", true, true);
        // line 5
        echo "            ";
        if (($context["hasRoles"] ?? null)) {
            // line 6
            echo "                <div class=\"form-horizontal\" id=\"roles-list\">
                    ";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "roles", array()), 'row', array("attr" => array("class" => "horizontal")));
            echo "
                </div>
            ";
        }
        // line 10
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerUser/widget:roles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  32 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:CustomerUser/widget:roles.html.twig", "");
    }
}
