<?php

/* OroDotmailerBundle:AddressBook/widget:addressBookConnectionUpdate.html.twig */
class __TwigTemplate_2be0c4face9b08e0bbecbc33b1808a8777a05ad1f0eaba72aed44d96f2dc24cb extends Twig_Template
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
    ";
        // line 2
        if ((array_key_exists("savedId", $context) && ($context["savedId"] ?? null))) {
            // line 3
            echo "        <script type=\"text/javascript\">
            require(['oroui/js/widget-manager'],
                    function (widgetManager) {
                        widgetManager.getWidgetInstance(";
            // line 6
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ", function (widget) {
                            widget.trigger(
                                    'formSave',
                                    ";
            // line 9
            echo twig_jsonencode_filter(($context["savedId"] ?? null));
            echo "
                            );
                        });
                    });
        </script>
        ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(        // line 14
($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 15
            echo "        <script type=\"text/javascript\">
            require(['oroui/js/widget-manager'],
                    function (widgetManager) {
                        widgetManager.getWidgetInstance(";
            // line 18
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ", function (widget) {
                            widget.trigger('formSaveError');
                        });
                    });
        </script>
        <div class=\"alert alert-error\">
            ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
        </div>
    ";
        }
        // line 27
        echo "
    <form method=\"post\"
          data-nohash=\"true\"
          data-disable-autofocus=\"true\"
          id=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
          action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
        echo "\"
          class=\"form-dialog\"
            >
        <fieldset class=\"form-horizontal connection-form\">
            ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "channel", array()), 'row');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "addressBook", array()), 'row');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "createEntities", array()), 'row');
        echo "
        </fieldset>
        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "

        <div class=\"widget-actions\">
            <button type=\"reset\" class=\"btn\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.dialog.button.cancel"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn btn-success\">
                ";
        // line 45
        if ((($context["entity"] ?? null) && $this->getAttribute(($context["entity"] ?? null), "id", array()))) {
            // line 46
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.dialog.button.update"), "html", null, true);
            echo "
                ";
        } else {
            // line 48
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.connection.dialog.button.connect"), "html", null, true);
            echo "
                ";
        }
        // line 50
        echo "            </button>
        </div>
    </form>
    ";
        // line 53
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroDotmailerBundle:AddressBook/widget:addressBookConnectionUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 53,  120 => 50,  114 => 48,  108 => 46,  106 => 45,  101 => 43,  95 => 40,  90 => 38,  86 => 37,  82 => 36,  75 => 32,  71 => 31,  65 => 27,  59 => 24,  50 => 18,  45 => 15,  43 => 14,  35 => 9,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDotmailerBundle:AddressBook/widget:addressBookConnectionUpdate.html.twig", "");
    }
}
