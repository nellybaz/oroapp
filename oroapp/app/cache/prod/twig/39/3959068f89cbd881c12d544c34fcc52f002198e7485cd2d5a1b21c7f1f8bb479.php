<?php

/* OroWorkflowBundle:Form:fields.html.twig */
class __TwigTemplate_c7d7e13b62f40cb96db92980c5d1da29383b738f5494d970844eb711e6d1bdfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_workflow_transition_row' => array($this, 'block_oro_workflow_transition_row'),
            '_oro_workflow_definition_form_label_widget' => array($this, 'block__oro_workflow_definition_form_label_widget'),
            'oro_workflow_replacement_row' => array($this, 'block_oro_workflow_replacement_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_workflow_transition_row', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_oro_workflow_definition_form_label_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('oro_workflow_replacement_row', $context, $blocks);
    }

    // line 1
    public function block_oro_workflow_transition_row($context, array $blocks = array())
    {
        // line 2
        echo "    <fieldset class=\"form-horizontal\">
        ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </fieldset>

    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit"), "html", null, true);
        echo "</button>
    </div>
";
    }

    // line 12
    public function block__oro_workflow_definition_form_label_widget($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    <span id=\"workflow_translate_link_label\"></span>
";
    }

    // line 17
    public function block_oro_workflow_replacement_row($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 19
            echo "        <div class=\"alert alert-error\">
            ";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
        </div>
    ";
        }
        // line 23
        echo "
    <div class=\"alert workflow-deactivation-message\">
        <div class=\"message\">
            ";
        // line 26
        if (($context["workflowsToDeactivation"] ?? null)) {
            // line 27
            echo "                <p>
                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.form.workflow_to_deactivation_message"), "html", null, true);
            echo "
                    <ul>
                        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["workflowsToDeactivation"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["workflowToDeactivation"]) {
                // line 31
                echo "                            <li>
                                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_workflow_definition_view", array("name" => $this->getAttribute($context["workflowToDeactivation"], "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["workflowToDeactivation"], "label", array()), array(), "workflows"), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workflowToDeactivation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    </ul>
                </p>
            ";
        }
        // line 38
        echo "            <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.form.replace_message"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <form method=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "method", array()), "html", null, true);
        echo "\"
          id=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
          name=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
        echo "\"
          action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array()), "html", null, true);
        echo "\"
          data-collect=\"true\"
          class=\"form-dialog\"
          ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo "
    >
        <fieldset class=\"form-horizontal\">
            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        </fieldset>

        <div class=\"hidden\">
            ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>

        <div class=\"widget-actions\">
            <button type=\"reset\" class=\"btn\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
            <button type=\"button\" data-action-name=\"activate\" class=\"btn btn-success\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.workflow.workflowdefinition.datagrid.activate"), "html", null, true);
        echo "</button>
        </div>
    </form>
    ";
        // line 63
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 63,  174 => 60,  170 => 59,  163 => 55,  156 => 51,  150 => 48,  144 => 45,  140 => 44,  136 => 43,  132 => 42,  124 => 38,  119 => 35,  108 => 32,  105 => 31,  101 => 30,  96 => 28,  93 => 27,  91 => 26,  86 => 23,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  63 => 13,  60 => 12,  53 => 8,  49 => 7,  42 => 3,  39 => 2,  36 => 1,  32 => 17,  29 => 16,  27 => 12,  24 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/Form/fields.html.twig");
    }
}
