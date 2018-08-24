<?php

/* OroDotmailerBundle:DataField:index.html.twig */
class __TwigTemplate_5d11f4567044ba79746477d9fcb0e51f021f3ba8d5f2de610ca87c2e54cbc880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroDotmailerBundle:DataField:index.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDotmailerBundle:DataField:index.html.twig", 2);
        // line 3
        $context["gridName"] = "oro_dotmailer_datafield_grid";
        // line 4
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "dotmailer-page";
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_dotmailer_datafield_create")) {
            // line 8
            echo "        <div class=\"btn-group\">
            ";
            // line 9
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_create"), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.entity_label")));
            // line 12
            echo "
        </div>
        ";
            // line 14
            echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_synchronize"), "successMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.syncronize_scheduled"), "dataAttributes" => array("action" => "sync-with-dotmailer"), "iCss" => "icon-refresh", "aCss" => "no-hash dotmailer-sync-btn", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.synchronize"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.synchronize")));
            // line 24
            echo "
        <script type=\"text/javascript\">
            require(['orodotmailer/js/sync-buttons-handler'], function(Handler){
                new Handler('.dotmailer-sync-btn');
            });
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroDotmailerBundle:DataField:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 24,  57 => 14,  53 => 12,  51 => 9,  48 => 8,  45 => 7,  42 => 6,  36 => 5,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDotmailerBundle:DataField:index.html.twig", "");
    }
}
