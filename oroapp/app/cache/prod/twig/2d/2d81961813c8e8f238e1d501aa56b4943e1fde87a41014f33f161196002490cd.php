<?php

/* OroAddressBundle:widget:update.html.twig */
class __TwigTemplate_f90793eab9b71d89772a7177e6872d6946f6975d37c48e9ff4c8e701dcda2f56 extends Twig_Template
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
        if (($context["saved"] ?? null)) {
            // line 2
            echo "    ";
            $context["widgetResponse"] = array("widget" => array("trigger" => array(0 => array("eventBroker" => "widget", "name" => "formSave", "args" => array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 7
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))))));
            // line 11
            echo "
    ";
            // line 12
            echo twig_jsonencode_filter(($context["widgetResponse"] ?? null));
            echo "
";
        } else {
            // line 14
            echo "    ";
            // line 15
            echo "    <div class=\"widget-content\">
        ";
            // line 16
            if (( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'))) {
                // line 17
                echo "            <div class=\"alert alert-error\" style=\"margin:0\">
                <div class=\"message\">
                    ";
                // line 19
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                echo "
                </div>
            </div>
        ";
            }
            // line 23
            echo "
        <form id=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\"
              action=\"";
            // line 25
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) > 0))) ? (            // line 26
($context["addressUpdateUrl"] ?? null)) : (            // line 27
($context["addressCreateUrl"] ?? null))), "html", null, true);
            // line 28
            echo "\"
              method=\"post\" class=\"form-register form-dialog\">
            <fieldset class=\"form-horizontal\">
                ";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                <div class=\"widget-actions form-actions\" style=\"display: none;\">
                    <button class=\"btn\" type=\"reset\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                    <button class=\"btn btn-primary\" type=\"submit\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"), "html", null, true);
            echo "</button>
                </div>
            </fieldset>
        </form>
        ";
            // line 38
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroAddressBundle:widget:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  78 => 34,  74 => 33,  69 => 31,  64 => 28,  62 => 27,  61 => 26,  60 => 25,  54 => 24,  51 => 23,  44 => 19,  40 => 17,  38 => 16,  35 => 15,  33 => 14,  28 => 12,  25 => 11,  23 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAddressBundle:widget:update.html.twig", "");
    }
}
