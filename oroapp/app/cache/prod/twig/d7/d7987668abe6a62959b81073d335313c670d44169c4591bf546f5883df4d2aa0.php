<?php

/* OroTagBundle::macros.html.twig */
class __TwigTemplate_14a3bdfc7c30ef2f640b25a27e0e2c1c3e95a291dcacf2f12fb4ff5cdcdee69a extends Twig_Template
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
        // line 38
        echo "
";
    }

    // line 1
    public function getrenderView($__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["tagCloudElId"] = ("tags-" . twig_random($this->env));
            // line 3
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTagBundle::macros.html.twig", 3);
            // line 4
            echo "    <div ";
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroform/js/app/components/inline-editable-view-component", "options" => array("frontend_type" => "tags", "value" => $this->env->getExtension('Oro\Bundle\TagBundle\Twig\TagExtension')->getList(            // line 8
($context["entity"] ?? null)), "fieldName" => "tags", "metadata" => array("inline_editing" => array("enable" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_tag_assign_unassign"), "save_api_accessor" => array("route" => "oro_api_post_taggable", "http_method" => "POST", "default_route_parameters" => array("entity" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(            // line 17
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(            // line 18
($context["entity"] ?? null), "id", array()))), "autocomplete_api_accessor" => array("class" => "oroui/js/tools/search-api-accessor", "search_handler_name" => "tags", "label_field_name" => "name"), "editor" => array("view_options" => array("permissions" => array("oro_tag_create" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_tag_create")))))))));
            // line 36
            echo "></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function gettagSortActions(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "    <ul class=\"tag-sort-actions inline\">
        <li>
            <a href=\"javascript:void(0);\" class=\"no-hash active\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tag.menu.all_tags"), "html", null, true);
            echo "</a>
        </li>
        <li>
            <a href=\"javascript:void(0);\" data-type=\"owner\" class=\"no-hash\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tag.menu.my_tags"), "html", null, true);
            echo "</a>
        </li>
    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroTagBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 48,  79 => 45,  75 => 43,  64 => 42,  48 => 36,  46 => 18,  45 => 17,  44 => 8,  42 => 4,  39 => 3,  36 => 2,  24 => 1,  19 => 38,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTagBundle::macros.html.twig", "");
    }
}
