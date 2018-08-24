<?php

/* OroDashboardBundle:Index:quickLaunchpad.html.twig */
class __TwigTemplate_c52c8e3cbdd18224e8b1d65dd3bfc620bb9caa6f19d8505c5a7f4862336f2e14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
            'titleNavButtons' => array($this, 'block_titleNavButtons'),
            'navButtons' => array($this, 'block_navButtons'),
            'widgets_content' => array($this, 'block_widgets_content'),
            'widgets' => array($this, 'block_widgets'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["bap"] ?? null), "layout", array()), "OroDashboardBundle:Index:quickLaunchpad.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"layout-content dashboard-container-wrapper\">
        <div class=\"container-fluid page-title\">
            <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
                <div class=\"row\">
                    ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "                    ";
        $this->displayBlock('titleNavButtons', $context, $blocks);
        // line 41
        echo "                </div>
            </div>
        </div>
        ";
        // line 44
        $this->displayBlock('widgets_content', $context, $blocks);
        // line 62
        echo "    </div>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "                        <div class=\"pull-left pull-left-extra\">
                            <div class=\"pull-left\">
                                <h1 class=\"oro-subtitle\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.title.quick_launchpad"), "html", null, true);
        echo "</h1>
                            </div>
                        </div>
                    ";
    }

    // line 15
    public function block_titleNavButtons($context, array $blocks = array())
    {
        // line 16
        echo "                        <div class=\"pull-right title-buttons-container\">
                            ";
        // line 17
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("dashboard_navButtons_before", $context)) ? (_twig_default_filter(($context["dashboard_navButtons_before"] ?? null), "dashboard_navButtons_before")) : ("dashboard_navButtons_before")), array());
        // line 18
        echo "
                            ";
        // line 19
        $this->displayBlock('navButtons', $context, $blocks);
        // line 38
        echo "                            ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("dashboard_navButtons_after", $context)) ? (_twig_default_filter(($context["dashboard_navButtons_after"] ?? null), "dashboard_navButtons_after")) : ("dashboard_navButtons_after")), array());
        // line 39
        echo "                        </div>
                    ";
    }

    // line 19
    public function block_navButtons($context, array $blocks = array())
    {
        // line 20
        echo "                                ";
        if ((twig_length_filter($this->env, ($context["dashboards"] ?? null)) > 1)) {
            // line 21
            echo "                                    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Index:quickLaunchpad.html.twig", 21);
            // line 22
            echo "
                                    <div class=\"dashboard-selector-container pull-left\">
                                        <label for=\"dashboard_selector\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.entity_plural_label"), "html", null, true);
            echo ":</label>
                                        <select id=\"dashboard_selector\" ";
            // line 25
            echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "orodashboard/js/app/views/dashboard-change-view"));
            // line 27
            echo ">
                                            <option>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.title.chose_dashboard"), "html", null, true);
            echo "</option>
                                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dashboards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dashboardModel"]) {
                // line 30
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dashboardModel"], "id", array()), "html", null, true);
                echo "\">
                                                    ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["dashboardModel"], "getLabel", array(), "method")), "html", null, true);
                echo "
                                                </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboardModel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                                        </select>
                                    </div>
                                ";
        }
        // line 37
        echo "                            ";
    }

    // line 44
    public function block_widgets_content($context, array $blocks = array())
    {
        // line 45
        echo "            <div class=\"scrollable-container\">
                <div class=\"responsive-section launchpad-container\">
                    <div class=\"clearfix\">
                        <div class=\"container\">
                            ";
        // line 49
        $this->displayBlock('widgets', $context, $blocks);
        // line 57
        echo "                        </div>
                    </div>
                </div>
            </div>
        ";
    }

    // line 49
    public function block_widgets($context, array $blocks = array())
    {
        // line 50
        echo "                                <div class=\"responsive-cell dashboard-column\">
                                    ";
        // line 51
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("quick_launchpad_left_column", $context)) ? (_twig_default_filter(($context["quick_launchpad_left_column"] ?? null), "quick_launchpad_left_column")) : ("quick_launchpad_left_column")), array());
        // line 52
        echo "                                </div>
                                <div class=\"responsive-cell dashboard-column\">
                                    ";
        // line 54
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("quick_launchpad_right_column", $context)) ? (_twig_default_filter(($context["quick_launchpad_right_column"] ?? null), "quick_launchpad_right_column")) : ("quick_launchpad_right_column")), array());
        // line 55
        echo "                                </div>
                            ";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Index:quickLaunchpad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 55,  178 => 54,  174 => 52,  172 => 51,  169 => 50,  166 => 49,  158 => 57,  156 => 49,  150 => 45,  147 => 44,  143 => 37,  138 => 34,  129 => 31,  124 => 30,  120 => 29,  116 => 28,  113 => 27,  111 => 25,  107 => 24,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  89 => 39,  86 => 38,  84 => 19,  81 => 18,  79 => 17,  76 => 16,  73 => 15,  65 => 11,  61 => 9,  58 => 8,  53 => 62,  51 => 44,  46 => 41,  43 => 15,  41 => 8,  35 => 4,  32 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Index:quickLaunchpad.html.twig", "");
    }
}
