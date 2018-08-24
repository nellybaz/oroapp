<?php

/* OroUIBundle:Default/navbar:sided.html.twig */
class __TwigTemplate_0704fc5433bfa402ba3f88372913cc4ef3554aacf03887cd465a42e33e1c0a9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroUIBundle:Default/navbar:blocks.html.twig", "OroUIBundle:Default/navbar:sided.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroUIBundle:Default/navbar:blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop() && ($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_ui.navbar_position") == ($context["placement"] ?? null)))) {
            // line 2
            echo "    ";
            // line 3
            echo "
    ";
            // line 4
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:Default/navbar:sided.html.twig", 4);
            // line 5
            echo "
    <div class=\"main-menu-sided minimized\" ";
            // line 6
            echo $context["UI"]->getrenderPageComponentAttributes(array("jquery" => array("widgetModule" => "oroui/js/desktop/side-menu", "toggleSelector" => "#main-menu-toggler")));
            // line 11
            echo ">
        <div class=\"scroller\" id=\"main-menu\">
            ";
            // line 13
            $this->displayBlock("application_menu", $context, $blocks);
            echo "
        </div>
        <div id=\"main-menu-toggler\" class=\"menu-toggler\" ></div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default/navbar:sided.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  45 => 11,  43 => 6,  40 => 5,  38 => 4,  35 => 3,  33 => 2,  31 => 1,  14 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default/navbar:sided.html.twig", "");
    }
}
