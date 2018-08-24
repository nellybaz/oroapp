<?php

/* OroCustomerBundle:Address/widget:update.html.twig */
class __TwigTemplate_4565c467d229d356a3008ad058316d2b52b52da718c0db97af19d210a84bedbe extends Twig_Template
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
        echo "<div class=\"widget-content\" data-page-component-module=\"orocustomer/js/app/components/customer-address-component\"
     data-page-component-options=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("disableDefaultWithoutType" => true)), "html", null, true);
        echo "\">
    ";
        // line 3
        if (($context["saved"] ?? null)) {
            // line 4
            echo "        <script type=\"text/javascript\">
        require(['oroui/js/widget-manager'],
        function(widgetManager) {
            widgetManager.getWidgetInstance(";
            // line 7
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ", function(widget) {
                widget.trigger('formSave', ";
            // line 8
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()));
            echo ");
            });
        });
        </script>
    ";
        } else {
            // line 13
            echo "        ";
            if (( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'))) {
                // line 14
                echo "        <div class=\"alert alert-error\" style=\"margin:0\">
            <div class=\"message\">
                ";
                // line 16
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                echo "
            </div>
        </div>
        ";
            }
            // line 20
            echo "
        <form id=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\"
              action=\"";
            // line 22
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) > 0))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(            // line 23
($context["routes"] ?? null), "update", array()), array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entityId" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(            // line 24
($context["routes"] ?? null), "create", array()), array("entityId" => $this->getAttribute(($context["entity"] ?? null), "id", array()))))), "html", null, true);
            // line 25
            echo "\"
              method=\"post\" class=\"form-register form-dialog\">
            <fieldset class=\"form-horizontal\">
                ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                <div class=\"widget-actions form-actions\" style=\"display: none;\">
                    <button class=\"btn\" type=\"reset\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.address.cancel"), "html", null, true);
            echo "</button>
                    <button class=\"btn\" type=\"submit\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.address.save"), "html", null, true);
            echo "</button>
                </div>
            </fieldset>
        </form>
        ";
            // line 35
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
    ";
        }
        // line 37
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:Address/widget:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  84 => 31,  80 => 30,  75 => 28,  70 => 25,  68 => 24,  67 => 23,  66 => 22,  62 => 21,  59 => 20,  52 => 16,  48 => 14,  45 => 13,  37 => 8,  33 => 7,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:Address/widget:update.html.twig", "");
    }
}
