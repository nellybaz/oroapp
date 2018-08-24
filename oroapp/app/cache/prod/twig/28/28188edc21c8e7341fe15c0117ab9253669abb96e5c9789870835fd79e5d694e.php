<?php

/* OroScopeBundle:Form:fields.html.twig */
class __TwigTemplate_877df8c052aef964d1ba34cba283afb7b89e35ccc0958385278f7f01ec00379a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_scope_widget' => array($this, 'block_oro_scope_widget'),
            'oro_scope_collection_widget' => array($this, 'block_oro_scope_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_scope_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('oro_scope_collection_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_scope_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <table class=\"table-condensed\">
        <tr>
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 5
            echo "                <td>
                    ";
            // line 6
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()))) {
                // line 7
                echo "                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label');
                echo "
                    ";
            }
            // line 9
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
                </td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </tr>
    </table>
    <div>
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    </div>
";
    }

    // line 19
    public function block_oro_scope_collection_widget($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"scope-collection\">
        ";
        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-options-collection")));
        // line 22
        echo "        ";
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroScopeBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  80 => 21,  77 => 20,  74 => 19,  67 => 15,  62 => 12,  52 => 9,  46 => 7,  44 => 6,  41 => 5,  37 => 4,  33 => 2,  30 => 1,  26 => 19,  23 => 18,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroScopeBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/ScopeBundle/Resources/views/Form/fields.html.twig");
    }
}
