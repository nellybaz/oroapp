<?php

/* OroCommerceMenuBundle:layouts/blank/page:quick_access.html.twig */
class __TwigTemplate_f82ac67e34a706b54edab6d3b74ee3e6ac81323466c09456ecdb20fe12a7bd4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_quick_access_container_widget' => array($this, 'block__quick_access_container_widget'),
            '_quick_access_menu_widget' => array($this, 'block__quick_access_menu_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_quick_access_container_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_quick_access_menu_widget', $context, $blocks);
    }

    // line 1
    public function block__quick_access_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " quick-access-container"));
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
    public function block__quick_access_menu_widget($context, array $blocks = array())
    {
        // line 11
        echo "    <ul class=\"primary-menu\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 13
            echo "            ";
            if (($this->getAttribute($context["child"], "displayed", array()) && $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "isAllowed", array()))) {
                // line 14
                echo "                <li class=\"primary-menu__item primary-menu__item--offset-m\">
                    ";
                // line 15
                $context["label"] = ((($this->getAttribute($this->getAttribute($context["child"], "extras", array(), "any", false, true), "custom", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "custom", array()) == true))) ? ($this->getAttribute($context["child"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["child"], "label", array()))));
                // line 16
                echo "                    <a class=\"link\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "uri", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:layouts/blank/page:quick_access.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  75 => 19,  66 => 16,  64 => 15,  61 => 14,  58 => 13,  54 => 12,  51 => 11,  48 => 10,  41 => 6,  36 => 5,  33 => 2,  30 => 1,  26 => 10,  23 => 9,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:layouts/blank/page:quick_access.html.twig", "");
    }
}
