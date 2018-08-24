<?php

/* OroWindowsBundle::states.html.twig */
class __TwigTemplate_00d444be2ee94e4cffd98bef13ba30e417104221d9b8962130d426e3eda82f7e extends Twig_Template
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
        if (twig_length_filter($this->env, ($context["windowStates"] ?? null))) {
            // line 2
            echo "    <div style=\"display: none\" id=\"widget-states-container\" data-layout=\"separate\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["windowStates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["windowState"]) {
                // line 4
                echo "            <div id=\"widget-restored-state-";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["windowState"], "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["windowState"], "id", array()), "none")) : ("none")), "html", null, true);
                echo "\">
                ";
                // line 5
                echo $this->env->getExtension('Oro\Bundle\WindowsBundle\Twig\WindowsExtension')->renderFragment($this->env, $context["windowState"]);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['windowState'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>

    <script type=\"text/javascript\">
        require(['jquery', 'oro/dialog-widget', 'orowindows/js/dialog/state/model', 'ready!app'],
        function(\$, DialogWidget, StateModel) {
            \$(function(){
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["windowStates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["windowState"]) {
                if ($this->getAttribute($context["windowState"], "renderedSuccessfully", array())) {
                    // line 15
                    echo "                new DialogWidget({
                    autoRender: true,
                    model: new StateModel(";
                    // line 17
                    echo twig_jsonencode_filter(array("data" => $this->getAttribute($context["windowState"], "data", array()), "id" => $this->getAttribute($context["windowState"], "id", array())));
                    echo ")
                });
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['windowState'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            });
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroWindowsBundle::states.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  59 => 17,  55 => 15,  50 => 14,  42 => 8,  33 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWindowsBundle::states.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/WindowsBundle/Resources/views/states.html.twig");
    }
}
