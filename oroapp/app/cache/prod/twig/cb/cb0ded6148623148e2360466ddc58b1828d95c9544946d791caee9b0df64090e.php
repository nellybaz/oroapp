<?php

/* OroCatalogBundle:layouts/default/page:main_menu.html.twig */
class __TwigTemplate_9486d753e9188cce5227bd11d9561de46e78a3abf21b34379d41a51f0637c89f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_categories_main_menu_widget' => array($this, 'block__categories_main_menu_widget'),
            '_categories_main_menu_list_widget' => array($this, 'block__categories_main_menu_list_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_categories_main_menu_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('_categories_main_menu_list_widget', $context, $blocks);
    }

    // line 1
    public function block__categories_main_menu_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ( !(null === ($context["max_size"] ?? null))) {
            // line 3
            echo "        ";
            $context["categories"] = twig_slice($this->env, ($context["categories"] ?? null), 0, ($context["max_size"] ?? null));
        }
        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            $context["hasSublist"] =  !twig_test_empty($this->getAttribute($context["category"], "childCategories", array()));
            // line 8
            echo "        <li class=\"main-menu__item
            ";
            // line 9
            echo ((($context["hasSublist"] ?? null)) ? ("main-menu__item--ancestor") : (""));
            echo "
            main-menu__item--";
            // line 10
            echo twig_escape_filter($this->env, ((((twig_length_filter($this->env, $this->getAttribute(($context["block"] ?? null), "children", array())) == 1)) ? ("floated") : ("centered")) . "-dropdown"), "html", null, true);
            echo "\">
            ";
            // line 11
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("category" => $context["category"]));
            // line 12
            echo "            ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
        </li>";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 17
    public function block__categories_main_menu_list_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " main-menu main-menu__categories"));
        // line 21
        echo "
    <ul ";
        // line 22
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 23
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </ul>
";
    }

    public function getTemplateName()
    {
        return "OroCatalogBundle:layouts/default/page:main_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 23,  103 => 22,  100 => 21,  97 => 18,  94 => 17,  75 => 12,  73 => 11,  69 => 10,  65 => 9,  62 => 8,  60 => 7,  43 => 6,  40 => 5,  36 => 3,  33 => 2,  30 => 1,  26 => 17,  23 => 16,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCatalogBundle:layouts/default/page:main_menu.html.twig", "");
    }
}
