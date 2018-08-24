<?php

/* OroCustomerBundle:layouts/default/page:top_nav_logged.html.twig */
class __TwigTemplate_95652b012d235d256f12c140064fa78b050465455aef30d2a954c0e01847d315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_top_nav_controls_widget' => array($this, 'block__top_nav_controls_widget'),
            '_top_nav_logged_user_widget' => array($this, 'block__top_nav_logged_user_widget'),
            '_top_nav_sign_out_item_widget' => array($this, 'block__top_nav_sign_out_item_widget'),
            '_top_nav_my_customer_item_widget' => array($this, 'block__top_nav_my_customer_item_widget'),
            '_top_nav_sign_out_link_widget' => array($this, 'block__top_nav_sign_out_link_widget'),
            '_top_nav_my_customer_link_widget' => array($this, 'block__top_nav_my_customer_link_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_top_nav_controls_widget', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('_top_nav_logged_user_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('_top_nav_sign_out_item_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('_top_nav_my_customer_item_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('_top_nav_sign_out_link_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('_top_nav_my_customer_link_widget', $context, $blocks);
    }

    // line 1
    public function block__top_nav_controls_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " pull-left"));
        // line 5
        echo "    ";
        $context["dom_relocation_options"] = twig_jsonencode_filter(array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-main-menu-container]"))));
        // line 15
        echo "
    <div ";
        // line 16
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <ul class=\"topbar-navigation topbar-navigation--controls\"
            data-dom-relocation-options=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["dom_relocation_options"] ?? null), "html", null, true);
        echo "\"
        >
            ";
        // line 20
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </ul>
    </div>
";
    }

    // line 25
    public function block__top_nav_logged_user_widget($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-navigation__item topbar-navigation__item--user-name shown-on-desktop"));
        // line 29
        echo "
    <li ";
        // line 30
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 32
            echo "            ";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context["child"], 'widget');
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " ";
            }
            // line 33
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </li>
";
    }

    // line 37
    public function block__top_nav_sign_out_item_widget($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-navigation__item"));
        // line 41
        echo "
    <li ";
        // line 42
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 43
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </li>
";
    }

    // line 47
    public function block__top_nav_my_customer_item_widget($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-navigation__item shown-on-desktop"));
        // line 51
        echo "
    <li ";
        // line 52
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 53
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </li>
";
    }

    // line 57
    public function block__top_nav_sign_out_link_widget($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-navigation__link", "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(        // line 60
($context["route_name"] ?? null)), "data-dom-relocation-options" => array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-customer-menu-container]")))));
        // line 72
        echo "
    <a ";
        // line 73
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <i class=\"fa-sign-out\"></i> ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["text"] ?? null)), "html", null, true);
        echo "
    </a>
";
    }

    // line 78
    public function block__top_nav_my_customer_link_widget($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " topbar-navigation__link"));
        // line 82
        echo "
    ";
        // line 83
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/default/page:top_nav_logged.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  209 => 83,  206 => 82,  203 => 79,  200 => 78,  193 => 74,  189 => 73,  186 => 72,  184 => 60,  182 => 58,  179 => 57,  172 => 53,  168 => 52,  165 => 51,  162 => 48,  159 => 47,  152 => 43,  148 => 42,  145 => 41,  142 => 38,  139 => 37,  134 => 34,  120 => 33,  114 => 32,  97 => 31,  93 => 30,  90 => 29,  87 => 26,  84 => 25,  76 => 20,  71 => 18,  66 => 16,  63 => 15,  60 => 5,  57 => 2,  54 => 1,  50 => 78,  47 => 77,  45 => 57,  42 => 56,  40 => 47,  37 => 46,  35 => 37,  32 => 36,  30 => 25,  27 => 24,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/default/page:top_nav_logged.html.twig", "");
    }
}
