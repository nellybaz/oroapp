<?php

/* OroVisibilityBundle:Category:customer_category_visibility_edit.html.twig */
class __TwigTemplate_86821aa30b26876b8b038bddac2d30b037ef1703a858ca82329b5f06d19bd84f extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroVisibilityBundle:Category:customer_category_visibility_edit.html.twig", 1);
        // line 2
        echo "
<div class=\"oro-tabs\" id=\"categoryVisibilityTabs\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\">
            <a href=\"#categoryVisibility\" data-toggle=\"tab\">
                ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.visibility.categoryvisibility.entity_label"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#CustomerGroupCategoryVisibility\" data-toggle=\"tab\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.visibility.customergroupcategoryvisibility.entity_label"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#CustomerCategoryVisibility\" data-toggle=\"tab\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.visibility.customercategoryvisibility.entity_label"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>

    <div class=\"tab-content\" id=\"containerAlias\">
        <div class=\"tab-pane active\" id=\"categoryVisibility\"><br>
            ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "visibility", array()), "all", array()), 'row');
        echo "
        </div>
        <div class=\"tab-pane\" id=\"CustomerGroupCategoryVisibility\">
            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "visibility", array()), "customerGroup", array()), 'row', array("id" => "customergroup-category-visibility-changeset"));
        echo "
            ";
        // line 28
        echo $context["dataGrid"]->getrenderGrid("customer-group-category-visibility-grid", array("target_entity_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        echo "
        </div>
        <div class=\"tab-pane\" id=\"CustomerCategoryVisibility\">
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "visibility", array()), "customer", array()), 'row', array("id" => "customer-category-visibility-changeset"));
        echo "
            ";
        // line 32
        echo $context["dataGrid"]->getrenderGrid("customer-category-visibility-grid", array("target_entity_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        echo "
        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "OroVisibilityBundle:Category:customer_category_visibility_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 32,  70 => 31,  64 => 28,  60 => 27,  54 => 24,  44 => 17,  36 => 12,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroVisibilityBundle:Category:customer_category_visibility_edit.html.twig", "");
    }
}
