<?php

/* OroInventoryBundle:layouts/blank/oro_product_frontend_product_view:upcoming.html.twig */
class __TwigTemplate_f0dcf76a25c68cd51b789c5ea9b8baed1446404853bf8d164d9cc65417e670cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_upcoming_label_widget' => array($this, 'block__upcoming_label_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_upcoming_label_widget', $context, $blocks);
    }

    public function block__upcoming_label_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->env->getExtension('Oro\Bundle\InventoryBundle\Twig\ProductUpcomingExtension')->isUpcoming(($context["product"] ?? null))) {
            // line 3
            echo "        ";
            $context["availableDate"] = $this->env->getExtension('Oro\Bundle\InventoryBundle\Twig\ProductUpcomingExtension')->getAvailabilityDate(($context["product"] ?? null));
            // line 4
            echo "        <p class=\"product-upcoming-label\">
            ";
            // line 5
            if ( !(null === ($context["availableDate"] ?? null))) {
                // line 6
                echo "                ";
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.is_upcoming.notification_with_date") . $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate(($context["availableDate"] ?? null), array("timeZone" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getTimeZone()))), "html", null, true);
                echo "
            ";
            } else {
                // line 8
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.inventory.is_upcoming.notification"), "html", null, true);
                echo "
            ";
            }
            // line 10
            echo "        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroInventoryBundle:layouts/blank/oro_product_frontend_product_view:upcoming.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  43 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInventoryBundle:layouts/blank/oro_product_frontend_product_view:upcoming.html.twig", "");
    }
}
