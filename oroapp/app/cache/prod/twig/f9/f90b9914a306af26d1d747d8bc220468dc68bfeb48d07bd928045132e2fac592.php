<?php

/* OroTrackingBundle:TrackingWebsite:script.js.twig */
class __TwigTemplate_ebd9babfaee39091868b7639a0e523b1f9fb35633a665e2550c8b1483e371b65 extends Twig_Template
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
        $context["hostWithPath"] = $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->pregReplace($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_ui.application_url"), "/^https?:\\/\\/?/", "");
        // line 2
        echo "<script type=\"text/javascript\">
    var _paq = _paq || [];
    _paq.push(['setUserId', [user_identifier] ]);
    _paq.push(['setConversionAttributionFirstReferrer', false]);
    _paq.push(['trackPageView']);
    // Uncomment following line to track custom events
    // _paq.push(['trackEvent', 'OroCRM', 'Tracking', [name], [value] ]);
    (function() {
        var u=((\"https:\" == document.location.protocol) ? \"https\" : \"http\") + \"://\" + ";
        // line 10
        echo ((($context["hostWithPath"] ?? null)) ? (twig_jsonencode_filter(($context["hostWithPath"] ?? null))) : ("[host]"));
        echo " + \"/\";
        _paq.push(['setTrackerUrl', u+'tracking.php']);
        _paq.push(['setSiteId', '";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "identifier", array()), "js", null, true);
        echo "']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
        g.defer=true; g.async=true; g.src=u+'bundles/orotracking/js/piwik.min.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
";
    }

    public function getTemplateName()
    {
        return "OroTrackingBundle:TrackingWebsite:script.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  31 => 10,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTrackingBundle:TrackingWebsite:script.js.twig", "");
    }
}
