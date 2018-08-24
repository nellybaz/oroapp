<?php

/* OroCustomerBundle:layouts/blank/imports/oro_customer_menu:oro_customer_menu.html.twig */
class __TwigTemplate_a7b891df84d895fb19737efcbbfa9e321342830602410518f2f2e0f55373e937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_customer_menu__container_widget' => array($this, 'block___oro_customer_menu__container_widget'),
            '__oro_customer_menu__list_widget' => array($this, 'block___oro_customer_menu__list_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_customer_menu__container_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('__oro_customer_menu__list_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_customer_menu__container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " primary-menu-container"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <h3 class=\"title\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.frontend.menu.customer_user_profile.label"), "html", null, true);
        echo "
        </h3>
        ";
        // line 9
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 13
    public function block___oro_customer_menu__list_widget($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " primary-menu primary-menu--vertical"));
        // line 17
        echo "    <ul ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 18
        $context["found"] = false;
        // line 19
        echo "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                // line 21
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "item", array()), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
                    if (($this->getAttribute($context["menuItem"], "displayed", array()) && $this->getAttribute($this->getAttribute($context["menuItem"], "extras", array()), "isAllowed", array()))) {
                        // line 22
                        echo "                ";
                        $context["itemCurrentClass"] = "";
                        // line 23
                        echo "                ";
                        $context["linkCurrentClass"] = "";
                        // line 24
                        echo "                ";
                        if (($this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->isCurrent($context["menuItem"]) || ($this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->isAncestor($context["menuItem"]) &&  !($context["found"] ?? null)))) {
                            // line 25
                            echo "                    ";
                            $context["itemCurrentClass"] = "primary-menu__item--current";
                            // line 26
                            echo "                    ";
                            $context["linkCurrentClass"] = "primary-menu__link--current";
                            // line 27
                            echo "                ";
                        }
                        // line 28
                        echo "
                <li class=\"primary-menu__item ";
                        // line 29
                        echo twig_escape_filter($this->env, ($context["itemCurrentClass"] ?? null), "html", null, true);
                        echo "\">
                    <a href=\"";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menuItem"], "uri", array()), "html", null, true);
                        echo "\" class=\"";
                        echo twig_escape_filter($this->env, (" primary-menu__link " . ($context["linkCurrentClass"] ?? null)), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["menuItem"], "label", array())), "html", null, true);
                        echo "</a>
                </li>
                ";
                        // line 32
                        if (($this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->isCurrent($context["menuItem"]) || ($this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->isAncestor($context["menuItem"]) &&  !($context["found"] ?? null)))) {
                            // line 33
                            echo "                    ";
                            $context["found"] = true;
                            // line 34
                            echo "                ";
                        }
                        // line 35
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/imports/oro_customer_menu:oro_customer_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  130 => 36,  123 => 35,  120 => 34,  117 => 33,  115 => 32,  106 => 30,  102 => 29,  99 => 28,  96 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 23,  81 => 22,  75 => 21,  70 => 20,  67 => 19,  65 => 18,  60 => 17,  57 => 14,  54 => 13,  47 => 9,  42 => 7,  36 => 5,  33 => 2,  30 => 1,  26 => 13,  23 => 12,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/imports/oro_customer_menu:oro_customer_menu.html.twig", "");
    }
}
