<?php

/* OroNoteBundle:Note:notes.html.twig */
class __TwigTemplate_e2e8015a580ea535d89721556a77735785ee545945488c25b95651a10dadf12f extends Twig_Template
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_note_view")) {
            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNoteBundle:Note:notes.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            ob_start();
            // line 5
            echo "        ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_note_widget_notes", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(            // line 8
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(            // line 9
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.note.entity_plural_label"), "cssClass" => "list-widget notes-widget"));
            // line 13
            echo "
    ";
            $context["widgetContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 15
            echo "    ";
            echo $context["UI"]->getscrollSubblock(null, array(0 => ($context["widgetContent"] ?? null)));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroNoteBundle:Note:notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  34 => 13,  32 => 9,  31 => 8,  29 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNoteBundle:Note:notes.html.twig", "");
    }
}
