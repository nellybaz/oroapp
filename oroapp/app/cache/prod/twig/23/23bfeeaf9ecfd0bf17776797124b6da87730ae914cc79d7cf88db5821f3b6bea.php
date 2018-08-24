<?php

/* OroCacheBundle:Action:invalidate.html.twig */
class __TwigTemplate_eb7f0da2669e1d5964c6d223df83b00bbad6abcab37ad15c51712541efa1eecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActionBundle:Operation:form.html.twig", "OroCacheBundle:Action:invalidate.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroActionBundle:Operation:form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context["buttonOptions"] = $this->getAttribute($this->getAttribute(($context["operation"] ?? null), "definition", array()), "buttonOptions", array());
        // line 4
        echo "    ";
        $context["pageComponentOptions"] = array();
        // line 5
        echo "    <div class=\"widget-content invalidate-cache-content\" data-page-component-module=\"orocache/js/app/components/invalidate-cache-component\">
        <form id=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo "
              method=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "method", array()), "html", null, true);
        echo "\" data-collect=\"true\" class=\"form-dialog invalidate-cache-form\"

                ";
        // line 9
        if ($this->getAttribute(($context["buttonOptions"] ?? null), "page_component_module", array(), "any", true, true)) {
            echo "data-page-component-module=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["buttonOptions"] ?? null), "page_component_module", array()), "html", null, true);
            echo "\"";
        }
        // line 10
        echo "        >
            <table>
                <tbody>
                <tr class=\"invalidate-cache-tr\">
                    <td class=\"invalidate-cache-td-labels\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cache.invalidate.label"), "html", null, true);
        echo ":&nbsp;</td>
                    <td>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "invalidateType", array()), 'widget', array("attr" => array("class" => "cache-invalidate-type")));
        echo "</td>
                    <td class=\"invalidate-cache-td-labels\">&nbsp;";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cache.invalidate.at.label"), "html", null, true);
        echo "&nbsp;</td>
                    <td class=\"invalidate-cache-td-fields\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "invalidateCacheAt", array()), 'widget');
        echo "</td>
                </tr>
                </tbody>
            </table>
            <div class=\"hidden\">
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
            </div>
            <div class=\"widget-actions invalidate-cache-buttons\">
                <button type=\"reset\" class=\"btn\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cache.invalidate.action.cancel"), "html", null, true);
        echo "</button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"remove_scheduled_cache_invalidation_button\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cache.invalidate.action.remove"), "html", null, true);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-success\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cache.invalidate.action.submit"), "html", null, true);
        echo "</button>
            </div>
        </form>
        ";
        // line 30
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCacheBundle:Action:invalidate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  101 => 27,  97 => 26,  93 => 25,  87 => 22,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  61 => 10,  55 => 9,  50 => 7,  40 => 6,  37 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCacheBundle:Action:invalidate.html.twig", "");
    }
}
