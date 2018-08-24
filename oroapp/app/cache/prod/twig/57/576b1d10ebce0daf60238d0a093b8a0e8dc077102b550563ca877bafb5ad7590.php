<?php

/* OroTagBundle:Form:fields.html.twig */
class __TwigTemplate_79345510abb7712d840e4534d680bbf717c2b7a05cc35c5a0f1a82f56cdf4273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_tag_select_row' => array($this, 'block_oro_tag_select_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_tag_select_row', $context, $blocks);
    }

    public function block_oro_tag_select_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_tag_view")) {
            // line 3
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_tag_assign_unassign")) {
                // line 4
                echo "            <div class=\"control-group";
                if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "class", array()), "html", null, true);
                }
                echo "\">
                <div class=\"control-label wrap\">
                    ";
                // line 6
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => ($context["label_attr"] ?? null)));
                echo "
                </div>
                <div class=\"controls tags-form-select-editor\">
                    ";
                // line 9
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
                    ";
                // line 10
                echo $this->env->getExtension('Genemu\Bundle\FormBundle\Twig\Extension\FormExtension')->renderJavascript(($context["form"] ?? null));
                echo "
                </div>
            </div>
        ";
            }
            // line 14
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "OroTagBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  47 => 9,  41 => 6,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTagBundle:Form:fields.html.twig", "");
    }
}
