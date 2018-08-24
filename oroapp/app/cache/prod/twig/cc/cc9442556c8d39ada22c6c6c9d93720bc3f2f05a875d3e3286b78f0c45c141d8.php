<?php

/* OroWorkflowBundle:Workflow:transitionForm.html.twig */
class __TwigTemplate_1c1f040579555bbfab485c50ba056c734a15647018f6a3ec3560454923a1d0ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroWorkflowBundle:Workflow:transitionForm.html.twig", 2);
        $this->blocks = array(
            'pin_button' => array($this, 'block_pin_button'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["entity"] = null;
        // line 3
        $context["macros"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroWorkflowBundle:Workflow:transitionForm.html.twig", 3);
        // line 5
        $context["pageParams"] = (($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "page", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array()), "page", array())) : (null));
        // line 6
        if ($this->getAttribute(($context["pageParams"] ?? null), "title", array(), "any", true, true)) {
            // line 7
            $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["pageParams"] ?? null), "title", array()));
        } else {
            // line 9
            $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["transition"] ?? null), "buttonLabel", array()), array(), "workflows");
            // line 10
            if ((twig_test_empty(($context["pageTitle"] ?? null)) || (($context["pageTitle"] ?? null) == $this->getAttribute(($context["transition"] ?? null), "buttonLabel", array())))) {
                // line 11
                $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["transition"] ?? null), "label", array()), array(), "workflows");
            }
        }
        // line 15
        if ($this->getAttribute(($context["pageParams"] ?? null), "parent_label", array(), "any", true, true)) {
            // line 16
            $context["indexLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["pageParams"] ?? null), "parent_label", array()));
        } else {
            // line 18
            $context["indexLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["workflow"] ?? null), "label", array()), array(), "workflows");
        }
        // line 21
        if ($this->getAttribute(($context["pageParams"] ?? null), "parent_route", array(), "any", true, true)) {
            // line 22
            $context["indexPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pageParams"] ?? null), "parent_route", array()), (($this->getAttribute(($context["pageParams"] ?? null), "parent_route_parameters", array(), "any", true, true)) ? ($this->getAttribute(($context["pageParams"] ?? null), "parent_route_parameters", array())) : (array())));
        } else {
            // line 24
            $context["indexPath"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "originalUrl"), "method");
        }

        $this->env->getExtension("oro_title")->set(array("params" => array("%workflow_title%" => ((        // line 27
($context["pageTitle"] ?? null) . " - ") . ($context["indexLabel"] ?? null)))));
        // line 32
        $context["saveAndTransitButtonId"] = "save-and-transit";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_pin_button($context, array $blocks = array())
    {
    }

    // line 34
    public function block_navButtons($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        if (($context["indexPath"] ?? null)) {
            // line 36
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => ($context["indexPath"] ?? null)), "method"), "html", null, true);
            echo "
    ";
        }
        // line 38
        echo "
    <div class=\"btn-group\">
        <button
            type=\"button\"
            class=\"btn btn-success\"
            id=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["saveAndTransitButtonId"] ?? null), "html", null, true);
        echo "\"
            data-transition-url=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["transitionUrl"] ?? null), "html", null, true);
        echo "\"
        >";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit"), "html", null, true);
        echo "</button>
    </div>
";
    }

    // line 49
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $context["breadcrumbs"] = array("indexPath" =>         // line 51
($context["indexPath"] ?? null), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(        // line 52
($context["indexLabel"] ?? null)), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(        // line 53
($context["pageTitle"] ?? null)));
        // line 55
        echo "
    ";
        // line 56
        $this->displayBlock('stats', $context, $blocks);
        // line 57
        echo "
    ";
        // line 58
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 56
    public function block_stats($context, array $blocks = array())
    {
    }

    // line 61
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 62
        echo "    <ul class=\"breadcrumb\">
        <li>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["indexLabel"] ?? null)), "html", null, true);
        echo "</li>
    </ul>
";
    }

    // line 67
    public function block_content_data($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        ob_start();
        // line 69
        echo "        ";
        $context["widgetAlias"] = "transition-form";
        // line 70
        echo "        ";
        $context["workflowFormWidgetViewOptions"] = array("view" => array("view" => "oroworkflow/js/app/views/workflow-form-widget-view", "widgetAlias" =>         // line 73
($context["widgetAlias"] ?? null), "saveAndTransitButtonSelector" => ("#" .         // line 74
($context["saveAndTransitButtonId"] ?? null))));
        // line 77
        echo "        <div class=\"form-container\" ";
        echo $context["macros"]->getrenderPageComponentAttributes(($context["workflowFormWidgetViewOptions"] ?? null));
        echo ">
            ";
        // line 78
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" =>         // line 80
($context["transitionFormUrl"] ?? null), "alias" =>         // line 81
($context["widgetAlias"] ?? null), "loadingMaskEnabled" => false));
        // line 83
        echo "
        </div>
    ";
        $context["transitionFormWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 86
        echo "    ";
        if ($this->getAttribute(($context["transition"] ?? null), "hasFormConfiguration", array(), "method")) {
            // line 87
            echo "        ";
            echo twig_escape_filter($this->env, ($context["transitionFormWidget"] ?? null), "html", null, true);
            echo "
    ";
        } else {
            // line 89
            echo "        ";
            $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>             // line 93
($context["transitionFormWidget"] ?? null))))));
            // line 96
            echo "    
        ";
            // line 97
            $context["id"] = "transitionPage";
            // line 98
            echo "        ";
            $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
            // line 99
            echo "        ";
            $this->displayParentBlock("content_data", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Workflow:transitionForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 99,  200 => 98,  198 => 97,  195 => 96,  193 => 93,  191 => 89,  185 => 87,  182 => 86,  177 => 83,  175 => 81,  174 => 80,  173 => 78,  168 => 77,  166 => 74,  165 => 73,  163 => 70,  160 => 69,  157 => 68,  154 => 67,  147 => 63,  144 => 62,  141 => 61,  136 => 56,  130 => 58,  127 => 57,  125 => 56,  122 => 55,  120 => 53,  119 => 52,  118 => 51,  116 => 50,  113 => 49,  106 => 45,  102 => 44,  98 => 43,  91 => 38,  85 => 36,  82 => 35,  79 => 34,  74 => 29,  70 => 2,  68 => 32,  66 => 27,  62 => 24,  59 => 22,  57 => 21,  54 => 18,  51 => 16,  49 => 15,  45 => 11,  43 => 10,  41 => 9,  38 => 7,  36 => 6,  34 => 5,  32 => 3,  30 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Workflow:transitionForm.html.twig", "");
    }
}
