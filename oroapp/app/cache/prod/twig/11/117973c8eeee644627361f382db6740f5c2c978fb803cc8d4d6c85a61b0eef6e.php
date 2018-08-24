<?php

/* OroDataAuditBundle::change_history_link.html.twig */
class __TwigTemplate_bf918fc7f72ce51c46054f7d251d9d3849ebbae3d03bf99485adb890869fad88 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDataAuditBundle::change_history_link.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (twig_test_empty(($context["entity_class"] ?? null))) {
            // line 4
            echo "    ";
            $context["entity_class"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["entity"] ?? null), true);
        }
        // line 6
        echo "<li>
    <a href=\"#\" data-url=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["audit_path"] ?? null), array("entity" => ($context["entity_class"] ?? null), "id" => ($context["id"] ?? null))), "html", null, true);
        echo "\"
        title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dataaudit.change_history.title", array("%item%" => ($context["title"] ?? null))), "html", null, true);
        echo "\"
        ";
        // line 9
        echo $context["UI"]->getrenderWidgetDataAttributes(array("type" => "dialog", "options" => array("dialogOptions" => array("allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000, "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dataaudit.change_history.title", array("%item%" =>         // line 18
($context["title"] ?? null)))))));
        // line 21
        echo ">
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dataaudit.change_history"), "html", null, true);
        echo "
    </a>
</li>";
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle::change_history_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 22,  44 => 21,  42 => 18,  41 => 9,  37 => 8,  33 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDataAuditBundle::change_history_link.html.twig", "");
    }
}
