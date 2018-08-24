<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.html.twig */
class __TwigTemplate_7fbe6ec3d82edb5ec88da33fc05151ec0b0964f37d4ee9a3d20694e2a0186dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sale_representative_info_widget' => array($this, 'block_sale_representative_info_widget'),
            '_sales_menu_user_info_widget' => array($this, 'block__sales_menu_user_info_widget'),
            '_sales_menu_blank_widget' => array($this, 'block__sales_menu_blank_widget'),
            '_sales_menu_text_info_widget' => array($this, 'block__sales_menu_text_info_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sale_representative_info_widget', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_sales_menu_user_info_widget', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('_sales_menu_blank_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('_sales_menu_text_info_widget', $context, $blocks);
    }

    // line 1
    public function block_sale_representative_info_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock($this->getAttribute(($context["blockView"] ?? null), "widget", array()), $context, $blocks);
        echo "
";
    }

    // line 5
    public function block__sales_menu_user_info_widget($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"information-nav\" id=\"sales-contact-info\">
        <h3 class=\"information-nav__title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.frontend.navigation.items.sales.label"), "html", null, true);
        echo "</h3>
        <ul class=\" information-nav__list\">
            ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? null), "attributes", array()), "contactInfo", array()), "name", array())) {
            // line 10
            echo "                <li class=\" information-nav__item first\">
                    <span class=\" information-nav__item-content\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? null), "attributes", array()), "contactInfo", array()), "name", array()), "html", null, true);
            echo "</span>
                </li>
            ";
        }
        // line 14
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? null), "attributes", array()), "contactInfo", array()), "phone", array())) {
            // line 15
            echo "                <li class=\" information-nav__item\">
                    <a
                        href=\"tel:";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? null), "attributes", array()), "contactInfo", array()), "phone", array()), "html", null, true);
            echo "\"
                        class=\" information-nav__item-content\"
                    >";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? null), "attributes", array()), "contactInfo", array()), "phone", array()), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        // line 22
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? null), "attributes", array()), "contactInfo", array()), "email", array())) {
            // line 23
            echo "                <li class=\" information-nav__item last\">
                    <a href=\"mailto:";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? null), "attributes", array()), "contactInfo", array()), "email", array()), "html", null, true);
            echo "\" class=\" information-nav__item-content\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? null), "attributes", array()), "contactInfo", array()), "email", array()), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        // line 27
        echo "        </ul>
    </div>
";
    }

    // line 31
    public function block__sales_menu_blank_widget($context, array $blocks = array())
    {
    }

    // line 34
    public function block__sales_menu_text_info_widget($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\"information-nav\" id=\"sales-contact-info\">
        <h3 class=\"information-nav__title\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.frontend.navigation.items.sales.label"), "html", null, true);
        echo "</h3>
        ";
        // line 37
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? null), "attributes", array()), "contactInfo", array()), "manualText", array())) {
            // line 38
            echo "            ";
            $context["infoRows"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blockView"] ?? null), "attributes", array()), "contactInfo", array()), "manualText", array()), "
");
            // line 39
            echo "            <ul class=\" information-nav__list\">
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["infoRows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 41
                echo "                <li class=\" information-nav__item first\">
                    <span class=\" information-nav__item-content\">";
                // line 42
                echo twig_escape_filter($this->env, $context["row"], "html", null, true);
                echo "</span>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </ul>
        ";
        }
        // line 47
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  156 => 47,  152 => 45,  143 => 42,  140 => 41,  136 => 40,  133 => 39,  129 => 38,  127 => 37,  123 => 36,  120 => 35,  117 => 34,  112 => 31,  106 => 27,  98 => 24,  95 => 23,  92 => 22,  86 => 19,  81 => 17,  77 => 15,  74 => 14,  68 => 11,  65 => 10,  63 => 9,  58 => 7,  55 => 6,  52 => 5,  45 => 2,  42 => 1,  38 => 34,  35 => 33,  33 => 31,  30 => 30,  28 => 5,  25 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.html.twig");
    }
}
