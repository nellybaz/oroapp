<?php

/* OroChannelBundle::macros.html.twig */
class __TwigTemplate_1d63ceb8882de6a489a59c965f4c7cd6576792afd39a6d54f55937c297cf211e extends Twig_Template
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
        // line 23
        echo "
";
        // line 47
        echo "
";
    }

    // line 7
    public function getinitializeChannelForm($__form__ = null, $__entitiesMetadata__ = null, $__customerIdentity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "entitiesMetadata" => $__entitiesMetadata__,
            "customerIdentity" => $__customerIdentity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "    ";
            $context["options"] = array("channelTypeEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 9
($context["form"] ?? null), "channelType", array()), "vars", array()), "id", array())), "channelEntitiesEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 10
($context["form"] ?? null), "entities", array()), "vars", array()), "id", array())), "customerIdentity" =>             // line 11
($context["customerIdentity"] ?? null), "entitiesMetadata" =>             // line 12
($context["entitiesMetadata"] ?? null), "fields" => array("name" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 14
($context["form"] ?? null), "name", array()), "vars", array()), "id", array())), "channelType" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 15
($context["form"] ?? null), "channelType", array()), "vars", array()), "id", array())), "tokenEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 16
($context["form"] ?? null), "_token", array()), "vars", array()), "id", array()))));
            // line 19
            echo "
    <div data-page-component-module=\"orochannel/js/app/components/channel\"
         data-page-component-options=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
            echo "\"></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getinializeEntitiesViewComponent($__channel__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "channel" => $__channel__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    ";
            $context["containerIdentifier"] = "entities-list-view";
            // line 31
            echo "
    <div id=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["containerIdentifier"] ?? null), "html", null, true);
            echo "\"></div>
    <script type=\"text/javascript\">
        require(['jquery', 'orochannel/js/entity-management/entity-component-view'],
        function (\$, EntityComponentView) {
            var entityComponentView = new EntityComponentView({
                data:     ";
            // line 37
            echo twig_jsonencode_filter($this->getAttribute(($context["channel"] ?? null), "entities", array()));
            echo ",
                mode:     EntityComponentView.prototype.MODES.VIEW_MODE,
                metadata: ";
            // line 39
            echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\ChannelBundle\Twig\MetadataExtension')->getEntitiesMetadata());
            echo "
            });

            entityComponentView.render();
            \$(";
            // line 43
            echo twig_jsonencode_filter(("#" . ($context["containerIdentifier"] ?? null)));
            echo ").append(entityComponentView.\$el);
        });
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getrenderChannelProperty($__entity__ = null, $__params__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroChannelBundle::macros.html.twig", 56);
            // line 57
            echo "
    ";
            // line 58
            $context["label"] = (($this->getAttribute(($context["params"] ?? null), "label", array(), "any", true, true)) ? ($this->getAttribute(            // line 59
($context["params"] ?? null), "label", array())) : ($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue("Oro\\Bundle\\ChannelBundle\\Entity\\Channel", "label")));
            // line 62
            echo "
    ";
            // line 63
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), $context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "dataChannel", array()), (($this->getAttribute(($context["entity"] ?? null), "dataChannel", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "dataChannel", array()), "name", array())) : (null)), "oro_channel_view"));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroChannelBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 63,  151 => 62,  149 => 59,  148 => 58,  145 => 57,  142 => 56,  129 => 55,  110 => 43,  103 => 39,  98 => 37,  90 => 32,  87 => 31,  84 => 30,  72 => 29,  55 => 21,  51 => 19,  49 => 16,  48 => 15,  47 => 14,  46 => 12,  45 => 11,  44 => 10,  43 => 9,  41 => 8,  27 => 7,  22 => 47,  19 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChannelBundle::macros.html.twig", "");
    }
}
