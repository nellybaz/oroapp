<?php

/* OroInstallerBundle:Process/Step:schema.html.twig */
class __TwigTemplate_e357c3274b8fb8d0c959f375b6826dcba37aa1ca13ef23d6e9717e9fe7ad8899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroInstallerBundle::layout.html.twig", "OroInstallerBundle:Process/Step:schema.html.twig", 1);
        $_trait_0 = $this->loadTemplate("OroInstallerBundle::progress.html.twig", "OroInstallerBundle:Process/Step:schema.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroInstallerBundle::progress.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'content' => array($this, 'block_content'),
                'javascript' => array($this, 'block_javascript'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "OroInstallerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["step"] = "schema";
        // line 5
        $context["steps"] = array(0 => "cache");
        // line 6
        if (($context["dropDatabase"] ?? null)) {
            // line 7
            $context["steps"] = twig_array_merge(($context["steps"] ?? null), array(0 => "schema-drop", 1 => "clear-config", 2 => "clear-extend"));
        }
        // line 9
        $context["steps"] = twig_array_merge(($context["steps"] ?? null), array(0 => "before-database", 1 => "schema-update", 2 => "permissions", 3 => "crons", 4 => "workflows", 5 => "processes", 6 => "fixtures"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.step.schema.header"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"page-title\">
        <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.step.schema.header"), "html", null, true);
        echo "</h2>
    </div>

    <div class=\"well\">
        <table class=\"table\">
            <col width=\"75%\" valign=\"top\">
            <col width=\"25%\" valign=\"top\">
            <thead>
            <tr>
                <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.operation"), "html", null, true);
        echo "</th>
                <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.status"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["steps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 30
            echo "                <tr>
                    <td><span id=\"step-";
            // line 31
            echo twig_escape_filter($this->env, $context["step"], "html", null, true);
            echo "\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("process.step.schema." . $context["step"])), "html", null, true);
            echo "</td>
                    <td>&nbsp;</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </tbody>
        </table>

        <div class=\"button-set\">
            <div class=\"pull-right\">
                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_flow_display", array("scenarioAlias" => "oro_installer", "stepName" => "configure")), "html", null, true);
        echo "\" class=\"button back disabled\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.button.back"), "html", null, true);
        echo "</span></a>
                <a href=\"javascript: void(0)\" class=\"button next primary disabled\">
                    <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.button.next"), "html", null, true);
        echo "</span>
                </a>
            </div>
        </div>
    </div>
";
    }

    // line 49
    public function block_javascript($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            ajaxQueue(
                    [";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["steps"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            echo "'";
            echo twig_escape_filter($this->env, $context["step"], "html", null, true);
            echo "'";
            echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (", "));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                    '";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_flow_forward", array("scenarioAlias" => "oro_installer", "stepName" => "schema")), "html", null, true);
        echo "'
            );
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle:Process/Step:schema.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 56,  147 => 55,  138 => 50,  135 => 49,  125 => 42,  118 => 40,  111 => 35,  99 => 31,  96 => 30,  92 => 29,  85 => 25,  81 => 24,  69 => 15,  66 => 14,  63 => 13,  55 => 11,  51 => 1,  49 => 9,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  34 => 1,  14 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInstallerBundle:Process/Step:schema.html.twig", "");
    }
}
