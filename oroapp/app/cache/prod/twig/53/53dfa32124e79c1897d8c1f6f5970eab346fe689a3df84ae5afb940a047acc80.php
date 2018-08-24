<?php

/* OroDotmailerBundle:Dotmailer:marketingListSyncStatus.html.twig */
class __TwigTemplate_624f942938c96fab875c2c048ba7da698a66c2606c9b718026ff0b9012548d25 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDotmailerBundle:Dotmailer:marketingListSyncStatus.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\" xmlns=\"http://www.w3.org/1999/html\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            <div class=\"control-group\">
                ";
        // line 7
        if ($this->getAttribute(($context["address_book"] ?? null), "syncStatus", array())) {
            // line 8
            echo "                    ";
            $context["status"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.dotmailer.syncstatus." . $this->getAttribute($this->getAttribute(($context["address_book"] ?? null), "syncStatus", array()), "id", array())));
            // line 9
            echo "                ";
        } else {
            // line 10
            echo "                    ";
            $context["status"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty");
            // line 11
            echo "                ";
        }
        // line 12
        echo "
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.syncstatus.list_is_connected.label", array("%address_book%" => (("<strong>" . twig_escape_filter($this->env, $this->getAttribute(        // line 14
($context["address_book"] ?? null), "name", array()))) . "</strong>"), "%synced%" => (("<strong>" . _twig_default_filter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(        // line 16
($context["address_book"] ?? null), "lastExportedAt", array())), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))) . "</strong>"), "%status%" => (("<strong>" .         // line 19
($context["status"] ?? null)) . "</strong>")));
        // line 22
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroDotmailerBundle:Dotmailer:marketingListSyncStatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 22,  48 => 19,  47 => 16,  46 => 14,  45 => 13,  42 => 12,  39 => 11,  36 => 10,  33 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDotmailerBundle:Dotmailer:marketingListSyncStatus.html.twig", "");
    }
}
