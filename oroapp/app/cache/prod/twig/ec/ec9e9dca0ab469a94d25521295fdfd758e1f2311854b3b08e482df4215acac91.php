<?php

/* OroInventoryBundle:InventoryLevel/widget:update.html.twig */
class __TwigTemplate_76ab7979f2cff3e2de8123c0b35b3223ca819bc392ddb1afc0fd4bc3c9d6050e extends Twig_Template
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
        $context["pageComponentOptions"] = array("_wid" => $this->getAttribute($this->getAttribute(        // line 2
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "savedId" => ((((        // line 3
array_key_exists("savedId", $context) && ($context["savedId"] ?? null)) && twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())))) ? (($context["savedId"] ?? null)) : (null)));
        // line 5
        echo "<div class=\"widget-content\">
";
        // line 6
        if ($this->getAttribute(($context["pageComponentOptions"] ?? null), "savedId", array())) {
            // line 7
            echo "    <div data-page-component-module=\"orofrontend/js/app/components/widget-form-component\"
         data-page-component-options=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge(($context["pageComponentOptions"] ?? null), array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.inventory_level_save.flash.success")))), "html", null, true);
            echo "\"
    ></div>
";
        } else {
            // line 11
            echo "    ";
            if ((twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "data", array())) && array_key_exists("noDataReason", $context))) {
                // line 12
                echo "        <div class=\"no-data\">
            ";
                // line 13
                echo twig_escape_filter($this->env, ($context["noDataReason"] ?? null), "html", null, true);
                echo "
        </div>
    ";
            } else {
                // line 16
                echo "        ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
                    // line 17
                    echo "            <div class=\"alert alert-error\">
                ";
                    // line 18
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                    echo "
            </div>
        ";
                }
                // line 21
                echo "
        <form id=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
                echo "\" action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
                echo "
              method=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "method", array()), "html", null, true);
                echo "\" class=\"form-horizontal\">
            ";
                // line 24
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "

            <div class=\"hidden\">
                ";
                // line 27
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
                echo "
            </div>

            <div class=\"widget-actions\">
                <button type=\"reset\" class=\"btn\">";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.widgets.actions.cancel"), "html", null, true);
                echo "</button>
                <button type=\"submit\" class=\"btn btn-success\">";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.widgets.actions.save"), "html", null, true);
                echo "</button>
            </div>
        </form>
        ";
                // line 35
                echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
                echo "
    ";
            }
        }
        // line 38
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:InventoryLevel/widget:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  101 => 35,  95 => 32,  91 => 31,  84 => 27,  78 => 24,  74 => 23,  64 => 22,  61 => 21,  55 => 18,  52 => 17,  49 => 16,  43 => 13,  40 => 12,  37 => 11,  31 => 8,  28 => 7,  26 => 6,  23 => 5,  21 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInventoryBundle:InventoryLevel/widget:update.html.twig", "");
    }
}
