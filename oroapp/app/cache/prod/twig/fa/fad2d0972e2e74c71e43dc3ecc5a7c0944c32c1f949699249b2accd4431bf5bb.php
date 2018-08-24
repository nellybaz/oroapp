<?php

/* OroDistributionBundle:Settings:settings_form.html.twig */
class __TwigTemplate_d23dab6141a3bccb614d817e5d2d7fccac65cf7db6ac87094122f508f5089139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'form_errors' => array($this, 'block_form_errors'),
            '__internal_88f03e1c6cc3326713c4d832d716771766820b333034355d11d6ac436ad4df4c' => array($this, 'block___internal_88f03e1c6cc3326713c4d832d716771766820b333034355d11d6ac436ad4df4c'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => $this));
        // line 24
        $this->displayBlock('form_errors', $context, $blocks);
        // line 33
        echo "
<form method=\"post\" action=\"\" class=\"form\" name=\"composer_config\" id=\"composer-config\">
    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "oauth", array()), 'label');
        echo "
    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "oauth", array()), 'widget');
        echo "
    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "oauth", array()), 'errors');
        echo "

    <fieldset class=\"repos\" data-prototype=\"";
        // line 39
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_88f03e1c6cc3326713c4d832d716771766820b333034355d11d6ac436ad4df4c", $context, $blocks));
        echo "\">
        <legend>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.settings.repositories"), "html", null, true);
        echo "</legend>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "repositories", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["repo"]) {
            // line 42
            echo "            ";
            $this->loadTemplate("OroDistributionBundle:Settings:repo_prototype.html.twig", "OroDistributionBundle:Settings:settings_form.html.twig", 42)->display(array_merge($context, array("repo" => $context["repo"])));
            // line 43
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        <a href=\"javascript:void(0);\" id=\"add_repo_link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.settings.add_repository"), "html", null, true);
        echo "</a>
    </fieldset>


    <div class=\"actions\">
        <a class=\"btn btn-primary btn-large\" id=\"install-new-package\" href=\"javascript:submit();\">
            <i class=\"icon-settings\"></i>
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.action.save"), "html", null, true);
        echo "
        </a>
    </div>
    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
</form>
";
    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        // line 2
        echo "    <script type=\"text/javascript\">
        \$(function () {
            fieldset = \$('fieldset.repos');
            fieldset.data('index', fieldset.find(':input').length);

            \$('#add_repo_link').on('click', function (e) {
                e.preventDefault();
                var index = fieldset.data('index');
                var field = fieldset.data('prototype').replace(/__name__/g, index);

                fieldset.data('index', index + 1);
                \$(this).before(field);
            });
        });

        function submit() {
            document.composer_config.submit();
        }
    </script>
";
    }

    // line 24
    public function block_form_errors($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        ob_start();
        // line 26
        echo "        ";
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, ($context["errors"] ?? null)) > 0))) {
            // line 27
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 28
                echo "                <span for=\"oro_entity_config_type_entity_label\" class=\"validation-failed\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        }
        // line 31
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 39
    public function block___internal_88f03e1c6cc3326713c4d832d716771766820b333034355d11d6ac436ad4df4c($context, array $blocks = array())
    {
        $this->loadTemplate("OroDistributionBundle:Settings:repo_prototype.html.twig", "OroDistributionBundle:Settings:settings_form.html.twig", 39)->display(array_merge($context, array("repo" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "repositories", array()), "vars", array()), "prototype", array()))));
    }

    public function getTemplateName()
    {
        return "OroDistributionBundle:Settings:settings_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 39,  166 => 31,  163 => 30,  154 => 28,  149 => 27,  146 => 26,  143 => 25,  140 => 24,  117 => 2,  114 => 1,  107 => 54,  101 => 51,  90 => 44,  76 => 43,  73 => 42,  56 => 41,  52 => 40,  48 => 39,  43 => 37,  39 => 36,  35 => 35,  31 => 33,  29 => 24,  27 => 23,  24 => 22,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDistributionBundle:Settings:settings_form.html.twig", "");
    }
}
