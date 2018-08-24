<?php

/* OroCallBundle::actions.html.twig */
class __TwigTemplate_9a413815520508623e95b07488c78627969e34f3c4cc8679f09fce99783d5c50 extends Twig_Template
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

    // line 11
    public function getlogCallLink($__phone__ = null, $__entity__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "phone" => $__phone__,
            "entity" => $__entity__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCallBundle::actions.html.twig", 12);
            // line 13
            echo $context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_call_create", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(            // line 16
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(            // line 17
($context["entity"] ?? null), "id", array()), "phone" => ((            // line 18
array_key_exists("phone", $context)) ? (($context["phone"] ?? null)) : (null)))), "aCss" => (($this->getAttribute(            // line 20
($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? (($this->getAttribute(($context["parameters"] ?? null), "aCss", array()) . " no-hash")) : ("no-hash")), "label" =>             // line 21
($context["phone"] ?? null), "widget" => array("type" => "dialog", "multiple" => true, "reload-grid-name" => "activity-call-grid", "options" => array("alias" => "call-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.call.log_call"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000)))));
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
        return "OroCallBundle::actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 21,  41 => 20,  40 => 18,  39 => 17,  38 => 16,  37 => 13,  35 => 12,  21 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCallBundle::actions.html.twig", "");
    }
}
