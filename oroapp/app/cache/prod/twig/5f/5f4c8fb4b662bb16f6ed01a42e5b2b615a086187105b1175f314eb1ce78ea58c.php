<?php

/* OroConfigBundle::configPage.html.twig */
class __TwigTemplate_43077ac33cfff03108981864a8ff3a79e4d9ada232cb72823763ab7f63673fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["bap"] ?? null), "layout", array()), "OroConfigBundle::configPage.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        if (($context["form"] ?? null)) {
            // line 13
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroConfigBundle:Form:fields.html.twig", 1 => "OroFormBundle:Form:fields.html.twig", 2 => "OroLocaleBundle:Form:fields.html.twig"));
        }
        // line 15
        $context["syncMacro"] = $this->loadTemplate("OroSyncBundle:Include:contentTags.html.twig", "OroConfigBundle::configPage.html.twig", 15);
        // line 16
        $context["configUI"] = $this->loadTemplate("OroConfigBundle::macros.html.twig", "OroConfigBundle::configPage.html.twig", 16);
        // line 17
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroConfigBundle::configPage.html.twig", 17);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
            // line 21
            echo "        ";
            $context["saveButton"] = $context["UI"]->getsaveAndStayButton(array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.config.actions.save_settings")));
            // line 24
            echo "        ";
            $context["restoreButton"] = $context["UI"]->getbuttonType(array("type" => "reset", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.config.actions.restore_saved_values")));
            // line 25
            echo "        ";
            $context["pageReload"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "block_config", array()), ($context["activeSubGroup"] ?? null)), "page_reload", array());
            // line 26
            echo "        ";
            $context["options"] = array("view" => "oroconfig/js/form/config-form", "pageReload" =>             // line 28
($context["pageReload"] ?? null), "isFormValid" => $this->getAttribute($this->getAttribute(            // line 29
($context["form"] ?? null), "vars", array()), "valid", array()));
            // line 31
            echo "        <form
            id=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\"
            name=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\"
            ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
            echo "
            action=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
            echo "\"
            method=\"post\"
            data-collect=\"true\"
            data-page-component-view=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
            echo "\"
        >
            ";
            // line 40
            echo $context["configUI"]->getrenderTitleAndButtons(($context["pageTitle"] ?? null), array(0 => ($context["restoreButton"] ?? null), 1 => ($context["saveButton"] ?? null)));
            echo "
            ";
            // line 41
            echo $context["configUI"]->getrenderScrollData(($context["data"] ?? null), ($context["form"] ?? null), ($context["activeGroup"] ?? null), ($context["activeSubGroup"] ?? null), ($context["routeName"] ?? null), ($context["routeParameters"] ?? null));
            echo "
        </form>
        ";
            // line 43
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
        ";
            // line 44
            echo $context["syncMacro"]->getsyncContentTags(array("name" => "system_configuration", "params" => array(0 => ($context["activeGroup"] ?? null), 1 => ($context["activeSubGroup"] ?? null))));
            echo "
    ";
        } else {
            // line 46
            echo "        ";
            // line 47
            echo "        <div class=\"no-data\">
            <span>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.config.system_configuration.desktop_only"), "html", null, true);
            echo "</span>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroConfigBundle::configPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 48,  105 => 47,  103 => 46,  98 => 44,  94 => 43,  89 => 41,  85 => 40,  80 => 38,  74 => 35,  70 => 34,  66 => 33,  62 => 32,  59 => 31,  57 => 29,  56 => 28,  54 => 26,  51 => 25,  48 => 24,  45 => 21,  42 => 20,  39 => 19,  35 => 1,  33 => 17,  31 => 16,  29 => 15,  26 => 13,  24 => 12,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroConfigBundle::configPage.html.twig", "");
    }
}
