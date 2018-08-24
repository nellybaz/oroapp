<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/oro_frontend_root/featured_menu.twig */
class __TwigTemplate_84bd59fe2e627e04356227ddcd79dffb973d5dd0503d168a33d885e20799204f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_featured_menu_container_widget' => array($this, 'block__featured_menu_container_widget'),
            '_featured_menu_widget' => array($this, 'block__featured_menu_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_featured_menu_container_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_featured_menu_widget', $context, $blocks);
    }

    // line 1
    public function block__featured_menu_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " featured-menu"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 10
    public function block__featured_menu_widget($context, array $blocks = array())
    {
        // line 11
        echo "    <ul class=\"featured-menu__grid\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 13
            echo "            ";
            if (($this->getAttribute($context["child"], "displayed", array()) && $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "isAllowed", array()))) {
                // line 14
                echo "                <li class=\"featured-menu__item\">
                    <div class=\"featured-menu__content\">
                        <div class=\"featured-menu__img-wrap\">
                            ";
                // line 17
                $context["label"] = ((($this->getAttribute($this->getAttribute($context["child"], "extras", array(), "any", false, true), "custom", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "custom", array()) == true))) ? ($this->getAttribute($context["child"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["child"], "label", array()))));
                // line 18
                echo "                            ";
                if (($this->getAttribute($this->getAttribute($context["child"], "extras", array(), "any", false, true), "image", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "image", array())))) {
                    // line 19
                    echo "                                <img width=\"90\" height=\"90\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getResizedImageUrl($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "image", array()), 90, 90), "html", null, true);
                    echo "\" class=\"featured-menu__img img-fluid\">
                            ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 20
$context["child"], "extras", array(), "any", false, true), "icon", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "icon", array())))) {
                    // line 21
                    echo "                                <span class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "icon", array()), "html", null, true);
                    echo " featured-menu__icon\"></span>
                            ";
                } else {
                    // line 23
                    echo "                                <svg width=\"90\" height=\"90\">
                                    <rect width=\"90\" height=\"90\" fill=\"none\"/>
                                </svg>
                            ";
                }
                // line 27
                echo "                        </div>
                        <h4 class=\"featured-menu__title\">";
                // line 28
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</h4>
                        <div class=\"featured-menu__description\"
                             data-page-component-module=\"oroui/js/app/components/viewport-component\"
                             data-page-component-options=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_jsonencode_filter(array("component" => "oroui/js/app/components/jquery-widget-component", "widgetModule" => "orofrontend/default/js/widgets/line-clamp-widget")), "html", null, true);
                // line 34
                echo "\"
                        >
                            ";
                // line 36
                if (($this->getAttribute($this->getAttribute($context["child"], "extras", array(), "any", false, true), "description", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "description", array())))) {
                    // line 37
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "description", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 39
                echo "                        </div>
                        <a class=\"btn btn--info btn--size-s featured-menu__link\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_ui.application_url"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "uri", array()), "html", null, true);
                echo "\">
                            ";
                // line 41
                echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.commercemenu.frontend.navigation.items.view.label") . " ") . twig_upper_filter($this->env, ($context["label"] ?? null))), "html", null, true);
                echo "
                        </a>
                    </div>
                </li>
            ";
            }
            // line 46
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/oro_frontend_root/featured_menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 47,  129 => 46,  121 => 41,  116 => 40,  113 => 39,  107 => 37,  105 => 36,  101 => 34,  99 => 31,  93 => 28,  90 => 27,  84 => 23,  78 => 21,  76 => 20,  71 => 19,  68 => 18,  66 => 17,  61 => 14,  58 => 13,  54 => 12,  51 => 11,  48 => 10,  41 => 6,  36 => 5,  33 => 2,  30 => 1,  26 => 10,  23 => 9,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/oro_frontend_root/featured_menu.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/oro_frontend_root/featured_menu.twig");
    }
}
