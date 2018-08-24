<?php

/* OroNavigationBundle::macros.html.twig */
class __TwigTemplate_f5cbe72b0ee2205b5cfb95d2f1bbcb4257f1e0d8f6e39dbde1e9b2ef574639f5 extends Twig_Template
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
    public function getrenderClientLink($__config__ = null, $__urlParameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "urlParameters" => $__urlParameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNavigationBundle::macros.html.twig", 2);
            // line 3
            echo "    ";
            echo             // line 4
$context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(            // line 5
($context["config"] ?? null), "dataUrl", array()), ($context["urlParameters"] ?? null)), "aCss" => $this->getAttribute(            // line 6
($context["config"] ?? null), "aCss", array()), "iCss" => $this->getAttribute(            // line 7
($context["config"] ?? null), "iCss", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(            // line 8
($context["config"] ?? null), "label", array())), "widget" => array("type" => $this->getAttribute($this->getAttribute(            // line 10
($context["config"] ?? null), "widget", array()), "type", array()), "multiple" => $this->getAttribute($this->getAttribute(            // line 11
($context["config"] ?? null), "widget", array()), "multiple", array()), "refresh-widget-alias" => $this->getAttribute($this->getAttribute(            // line 12
($context["config"] ?? null), "widget", array()), "refreshWidgetAlias", array()), "reload-grid-name" => $this->getAttribute($this->getAttribute(            // line 13
($context["config"] ?? null), "widget", array()), "reloadGridName", array()), "options" => array("alias" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 15
($context["config"] ?? null), "widget", array()), "options", array()), "alias", array()), "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 17
($context["config"] ?? null), "widget", array()), "options", array()), "dialogOptions", array()), "title", array())), "allowMaximize" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 18
($context["config"] ?? null), "widget", array()), "options", array()), "dialogOptions", array()), "allowMaximize", array()), "allowMinimize" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 19
($context["config"] ?? null), "widget", array()), "options", array()), "dialogOptions", array()), "allowMinimize", array()), "dblclick" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 20
($context["config"] ?? null), "widget", array()), "options", array()), "dialogOptions", array()), "dblclick", array()), "maximizedHeightDecreaseBy" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 21
($context["config"] ?? null), "widget", array()), "options", array()), "dialogOptions", array()), "maximizedHeightDecreaseBy", array()), "width" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 22
($context["config"] ?? null), "widget", array()), "options", array()), "dialogOptions", array()), "width", array()))))));
            // line 27
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
        return "OroNavigationBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 27,  54 => 22,  53 => 21,  52 => 20,  51 => 19,  50 => 18,  49 => 17,  48 => 15,  47 => 13,  46 => 12,  45 => 11,  44 => 10,  43 => 8,  42 => 7,  41 => 6,  40 => 5,  39 => 4,  37 => 3,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/macros.html.twig");
    }
}
