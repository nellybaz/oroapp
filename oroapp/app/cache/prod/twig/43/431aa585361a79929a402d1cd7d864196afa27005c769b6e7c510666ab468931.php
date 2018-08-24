<?php

/* OroInventoryBundle:Product:inventoryLink.html.twig */
class __TwigTemplate_e5d212a2311f9f4efed4e9cd657170ec6d4eee3dfa8e447c47e031fa2c7f88bb extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroInventoryBundle:Product:inventoryLink.html.twig", 1);
        // line 2
        if (($this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("oro_product_inventory_update") && $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted("EDIT", ($context["entity"] ?? null)))) {
            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["entity"] ?? null), "sku", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "sku", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultName", array(), "any", false, true), "string", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultName", array(), "any", false, true), "string", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.widgets.inventory_management"), "html", null, true);
            echo "
    ";
            $context["dialogTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 6
            echo "    ";
            echo $context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_inventory_level_update", array("id" => $this->getAttribute(            // line 7
($context["entity"] ?? null), "id", array()))), "aCss" => "no-hash", "iCss" => "fa-list-alt", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.widgets.inventory_management"), "widget" => array("type" => "dialog", "multiple" => false, "options" => array("dialogOptions" => array("stateEnabled" => false, "incrementalPosition" => false, "title" =>             // line 18
($context["dialogTitle"] ?? null), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 800)))));
            // line 27
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:Product:inventoryLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 27,  39 => 18,  38 => 7,  36 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInventoryBundle:Product:inventoryLink.html.twig", "");
    }
}
