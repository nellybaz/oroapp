<?php

/* OroWorkflowBundle:Widget/widget:transitionCustomForm.html.twig */
class __TwigTemplate_da5a94b2a01ccc36594a68c1866af00bed3849e7bff30ca5f9347146e7718f45 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroWorkflowBundle:Widget/widget:transitionCustomForm.html.twig", 1);
        // line 2
        $context["isWidgetContext"] = true;
        // line 3
        $context["formAction"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array());
        // line 4
        $this->loadTemplate("OroWorkflowBundle:Widget/widget:transitionCustomForm.html.twig", "OroWorkflowBundle:Widget/widget:transitionCustomForm.html.twig", 4, "536880198")->display(array_merge($context, array("formAction" => ($context["formAction"] ?? null))));
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Widget/widget:transitionCustomForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 35,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Widget/widget:transitionCustomForm.html.twig", "");
    }
}


/* OroWorkflowBundle:Widget/widget:transitionCustomForm.html.twig */
class __TwigTemplate_da5a94b2a01ccc36594a68c1866af00bed3849e7bff30ca5f9347146e7718f45_536880198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'widget_context' => array($this, 'block_widget_context'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate($this->getAttribute(($context["transition"] ?? null), "getFormTemplate", array(), "method"), "OroWorkflowBundle:Widget/widget:transitionCustomForm.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_widget_context($context, array $blocks = array())
    {
        // line 6
        echo "    ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        if (($context["saved"] ?? null)) {
            // line 9
            echo "            <div ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => array("module" => "oroui/js/app/components/widget-form-component", "options" => array("_wid" => $this->getAttribute($this->getAttribute(            // line 12
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "data" => ((            // line 13
array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? null), null)) : (null))))), "method"), "html", null, true);
            // line 15
            echo "></div>
        ";
        } elseif ((twig_length_filter($this->env,         // line 16
($context["formErrors"] ?? null)) > 0)) {
            // line 17
            echo "            <div ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => array("module" => "oroui/js/app/components/widget-form-component", "options" => array("_wid" => $this->getAttribute($this->getAttribute(            // line 20
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "formError" => true, "preventRemove" => true, "reloadLayout" => true))), "method"), "html", null, true);
            // line 25
            echo "></div>
            ";
            // line 26
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
                // line 27
                echo "                <div class=\"alert alert-error\">
                    ";
                // line 28
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                echo "
                </div>
            ";
            }
            // line 31
            echo "        ";
        }
        // line 32
        echo "        ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Widget/widget:transitionCustomForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  127 => 31,  121 => 28,  118 => 27,  116 => 26,  113 => 25,  111 => 20,  109 => 17,  107 => 16,  104 => 15,  102 => 13,  101 => 12,  99 => 9,  96 => 8,  93 => 7,  89 => 6,  86 => 5,  77 => 4,  27 => 35,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Widget/widget:transitionCustomForm.html.twig", "");
    }
}
