<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/default/imports/oro_product_grid/upcoming.html.twig */
class __TwigTemplate_911d25996c13c50b62721c19f4ce230d9ad418ec35972928d961d1162a9d8f1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_product_datagrid_row__product_upcoming_label_widget' => array($this, 'block__product_datagrid_row__product_upcoming_label_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_product_datagrid_row__product_upcoming_label_widget', $context, $blocks);
    }

    public function block__product_datagrid_row__product_upcoming_label_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute(($context["product"] ?? null), "is_upcoming", array())) {
            // line 3
            echo "        ";
            $context["availableDate"] = $this->getAttribute(($context["product"] ?? null), "availability_date", array());
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
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/default/imports/oro_product_grid/upcoming.html.twig";
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
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/default/imports/oro_product_grid/upcoming.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/default/imports/oro_product_grid/upcoming.html.twig");
    }
}
