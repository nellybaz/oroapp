<?php

/* OroInstallerBundle:Process/Step:configure.html.twig */
class __TwigTemplate_c43c80f707897ac47fab5ad577e1825d97f4c4aaa3859cdc7f53ac86a0d4f02e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroInstallerBundle::layout.html.twig", "OroInstallerBundle:Process/Step:configure.html.twig", 1);
        $_trait_0 = $this->loadTemplate("OroInstallerBundle::progress.html.twig", "OroInstallerBundle:Process/Step:configure.html.twig", 2);
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
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), "OroInstallerBundle:Form:fields.html.twig");
        // line 5
        $context["step"] = "configure";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.step.configure.header"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"page-title\">
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.step.configure.header"), "html", null, true);
        echo "</h2>
</div>

<div class=\"well horizontal-form\">
    <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_flow_forward", array("scenarioAlias" => "oro_installer", "stepName" => "configure")), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"validation-error\">
            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>

        <div class=\"row\">
            <div class=\"box\">
                <h3 class=\"sub-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "database", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</h3>

                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "database", array()), 'widget');
        echo "
            </div>
            <div class=\"box\">
                <h3 class=\"sub-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "mailer", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</h3>

                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mailer", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"box\">
                <h3 class=\"sub-title\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "system", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</h3>

                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "system", array()), 'widget');
        echo "
            </div>
            <div class=\"box\">
                <h3 class=\"sub-title\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "websocket", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</h3>

                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "websocket", array()), 'widget');
        echo "
            </div>
        </div>

        ";
        // line 45
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("install_additional_configuration_fields", $context)) ? (_twig_default_filter(($context["install_additional_configuration_fields"] ?? null), "install_additional_configuration_fields")) : ("install_additional_configuration_fields")), array("form" => ($context["form"] ?? null)));
        // line 46
        echo "
        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

        <div class=\"button-set\">
            <div class=\"pull-right\">
                <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basePath", array()), "html", null, true);
        echo "/install.php\" class=\"button back\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.button.back"), "html", null, true);
        echo "</span></a>
                <button class=\"primary button next\" type=\"submit\"><span>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("process.button.next"), "html", null, true);
        echo "</span></button>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle:Process/Step:configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  140 => 51,  133 => 47,  130 => 46,  128 => 45,  121 => 41,  116 => 39,  110 => 36,  105 => 34,  97 => 29,  92 => 27,  86 => 24,  81 => 22,  73 => 17,  68 => 15,  61 => 11,  58 => 10,  55 => 9,  47 => 7,  43 => 1,  41 => 5,  39 => 3,  33 => 1,  14 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInstallerBundle:Process/Step:configure.html.twig", "");
    }
}
