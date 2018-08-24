<?php

/* OroCustomThemeBundle:layouts/custom/page:notification.html.twig */
class __TwigTemplate_2fb92f599a5d0a850588cc3e2acd65e3e4496327b7b8e4e30db6fb7d9c0f1703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_notification_widget' => array($this, 'block__notification_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_notification_widget', $context, $blocks);
    }

    public function block__notification_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-sticky" => array("toggleClass" => "notification-flash-container--fixed", "placeholderId" => "sticky-element-notification")));
        // line 8
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomThemeBundle:layouts/custom/page:notification.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 8,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomThemeBundle:layouts/custom/page:notification.html.twig", "");
    }
}
