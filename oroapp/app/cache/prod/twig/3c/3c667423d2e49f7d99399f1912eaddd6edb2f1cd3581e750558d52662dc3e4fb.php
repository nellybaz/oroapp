<?php

/* OroProductBundle:Product/widget:addProductsWidget.html.twig */
class __TwigTemplate_7a0d8f19aec76fbc0db3c3ed69b79e7227bf041e22b45286aa0fbf1dba427c7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget_content' => array($this, 'block_widget_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroProductBundle:Product/widget:addProductsWidget.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        $this->displayBlock('widget_content', $context, $blocks);
        // line 15
        echo "</div>
";
    }

    // line 4
    public function block_widget_content($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["parameters"] ?? null), array("enableViews" => false, "enableToggleFilters" => false));
        echo "

        <fieldset class=\"form-horizontal\">
            <div class=\"widget-actions form-actions\" style=\"display: none;\">
                <button class=\"btn\" type=\"reset\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>

                <button data-action-name=\"addProducts\" type=\"button\" class=\"btn\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "</button>
            </div>
        </fieldset>
    ";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product/widget:addProductsWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 9,  36 => 5,  33 => 4,  28 => 15,  26 => 4,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product/widget:addProductsWidget.html.twig", "");
    }
}
