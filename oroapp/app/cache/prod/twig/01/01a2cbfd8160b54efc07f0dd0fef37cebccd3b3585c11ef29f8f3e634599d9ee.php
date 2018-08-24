<?php

/* OroSyncBundle:Include:contentTags.html.twig */
class __TwigTemplate_7209cc7c4883f05cd560445c6eefb21033aa63171fb139e10da1ce945ca0a1a7 extends Twig_Template
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
    }

    // line 1
    public function getsyncContentTags($__data__ = null, $__includeCollectionTag__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "includeCollectionTag" => $__includeCollectionTag__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <script type=\"text/javascript\">
        require([ 'orosync/js/content-manager'],
        function (contentManager) {
            contentManager.tagContent(";
            // line 5
            echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\SyncBundle\Twig\OroSyncExtension')->generate(($context["data"] ?? null), ($context["includeCollectionTag"] ?? null)));
            echo ");
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

    public function getTemplateName()
    {
        return "OroSyncBundle:Include:contentTags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSyncBundle:Include:contentTags.html.twig", "");
    }
}
