<?php

/* OroInstallerBundle:Process/Step:installation.html.twig */
class __TwigTemplate_24f4d941f1e03c7c1c41d44745d92e4b64ef12feaabbc85fa0db93aece9bec98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroInstallerBundle::layout.html.twig", "OroInstallerBundle:Process/Step:installation.html.twig", 1);
        $_trait_0 = $this->loadTemplate("OroInstallerBundle::progress.html.twig", "OroInstallerBundle:Process/Step:installation.html.twig", 2);
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
        list($context["step"], $context["platformSteps"]) =         array("administration", array(0 => "after-database", 1 => "translation-load", 2 => "js-routing", 3 => "localization", 4 => "assets", 5 => "assetic", 6 => "translation", 7 => "requirejs"));
        // line 6
        if (($context["loadFixtures"] ?? null)) {
            // line 7
            $context["platformSteps"] = twig_array_merge(array(0 => "fixtures"), ($context["platformSteps"] ?? null));
        }
        // line 10
        $context["steps"] = ($context["platformSteps"] ?? null);
        // line 12
        if ( !twig_test_empty(($context["installerScripts"] ?? null))) {
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["installerScripts"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["stepName"]) {
                // line 14
                $context["steps"] = twig_array_merge(($context["steps"] ?? null), array(0 => ("installerScript-" . $context["stepName"])));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        $context["steps"] = twig_array_merge(($context["steps"] ?? null), array(0 => "finish"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.step.installation.header"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"page-title\">
    <h2>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.step.installation.header"), "html", null, true);
        echo "</h2>
</div>

<div class=\"well\">
    <table class=\"table\">
         <col width=\"75%\" valign=\"top\">
         <col width=\"25%\" valign=\"top\">
         <thead>
             <tr>
                 <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.operation"), "html", null, true);
        echo "</th>
                 <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.status"), "html", null, true);
        echo "</th>
             </tr>
         </thead>
         <tbody>
             ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["platformSteps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 39
            echo "             <tr>
                 <td><span id=\"step-";
            // line 40
            echo twig_escape_filter($this->env, $context["step"], "html", null, true);
            echo "\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("process.step.installation." . $context["step"])), "html", null, true);
            echo "</td>
                 <td>&nbsp;</td>
             </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "             ";
        if ( !twig_test_empty(($context["installerScripts"] ?? null))) {
            // line 45
            echo "                 ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["installerScripts"] ?? null));
            foreach ($context['_seq'] as $context["stepKey"] => $context["stepLabel"]) {
                // line 46
                echo "                     <tr>
                         <td><span id=\"step-installerScript-";
                // line 47
                echo twig_escape_filter($this->env, $context["stepKey"], "html", null, true);
                echo "\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["stepLabel"]), "html", null, true);
                echo "</td>
                         <td>&nbsp;</td>
                     </tr>
                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['stepKey'], $context['stepLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "             ";
        }
        // line 52
        echo "             <tr>
                 <td><span id=\"step-finish\"></span>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.step.installation.finish"), "html", null, true);
        echo "</td>
                 <td>&nbsp;</td>
             </tr>
         </tbody>
    </table>

    <div class=\"button-set\">
        <div class=\"pull-right\">
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_flow_display", array("scenarioAlias" => "oro_installer", "stepName" => "configure")), "html", null, true);
        echo "\" class=\"button back disabled\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.button.back"), "html", null, true);
        echo "</span></a>
            <a href=\"javascript: void(0)\" class=\"button next primary disabled\">
                <span>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.button.next"), "html", null, true);
        echo "</span>
            </a>
        </div>
    </div>
</div>
";
    }

    // line 70
    public function block_javascript($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            ajaxQueue(
                [";
        // line 76
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
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_flow_forward", array("scenarioAlias" => "oro_installer", "stepName" => "installation")), "html", null, true);
        echo "'
            );
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle:Process/Step:installation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 77,  193 => 76,  184 => 71,  181 => 70,  171 => 63,  164 => 61,  153 => 53,  150 => 52,  147 => 51,  135 => 47,  132 => 46,  127 => 45,  124 => 44,  112 => 40,  109 => 39,  105 => 38,  98 => 34,  94 => 33,  82 => 24,  79 => 23,  76 => 22,  68 => 20,  64 => 1,  62 => 18,  55 => 14,  51 => 13,  49 => 12,  47 => 10,  44 => 7,  42 => 6,  40 => 4,  34 => 1,  14 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInstallerBundle:Process/Step:installation.html.twig", "");
    }
}
