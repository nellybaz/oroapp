<?php

/* OroCustomerBundle:layouts/blank/page:top_nav_logged.html.twig */
class __TwigTemplate_f4e256def40aaba11eb80bbb146c4898efda08ec6ddf9742a4be099b3b81bbca extends Twig_Template
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
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_top_nav_logged_user_widget', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('_top_nav_sign_out_item_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('_top_nav_my_customer_item_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('_top_nav_sign_out_link_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('_top_nav_my_customer_link_widget', $context, $blocks);
    }

    // line 1
    public function block__top_nav_controls_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " grid__column grid__column--5"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <ul class=\"primary-menu\">
            ";
        // line 8
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </ul>
    </div>
";
    }

    // line 13
    public function block__top_nav_logged_user_widget($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " primary-menu__item primary-menu__item--offset-m"));
        // line 17
        echo "
    <li ";
        // line 18
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 19
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
            // line 20
            echo "            ";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context["child"], 'widget');
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " ";
            }
            // line 21
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
        // line 22
        echo "    </li>
";
    }

    // line 25
    public function block__top_nav_sign_out_item_widget($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " primary-menu__item primary-menu__item--offset-m"));
        // line 29
        echo "
    <li ";
        // line 30
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 31
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </li>
";
    }

    // line 35
    public function block__top_nav_my_customer_item_widget($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " primary-menu__item primary-menu__item--offset-m"));
        // line 39
        echo "
    <li ";
        // line 40
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 41
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </li>
";
    }

    // line 45
    public function block__top_nav_sign_out_link_widget($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " link"));
        // line 49
        echo "
    ";
        // line 50
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    // line 53
    public function block__top_nav_my_customer_link_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " link"));
        // line 57
        echo "
    ";
        // line 58
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "

";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/page:top_nav_logged.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 58,  192 => 57,  189 => 54,  186 => 53,  180 => 50,  177 => 49,  174 => 46,  171 => 45,  164 => 41,  160 => 40,  157 => 39,  154 => 36,  151 => 35,  144 => 31,  140 => 30,  137 => 29,  134 => 26,  131 => 25,  126 => 22,  112 => 21,  106 => 20,  89 => 19,  85 => 18,  82 => 17,  79 => 14,  76 => 13,  68 => 8,  63 => 6,  60 => 5,  57 => 2,  54 => 1,  50 => 53,  47 => 52,  45 => 45,  42 => 44,  40 => 35,  37 => 34,  35 => 25,  32 => 24,  30 => 13,  27 => 12,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/page:top_nav_logged.html.twig", "");
    }
}
