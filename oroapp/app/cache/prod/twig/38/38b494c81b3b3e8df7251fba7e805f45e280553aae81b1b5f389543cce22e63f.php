<?php

/* OroSEOBundle:layouts:default/layout.html.twig */
class __TwigTemplate_597cd3398559117b09aa192b315fdcd200aa01ce84ed3f6b48d47e8390273593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'seo_localized_links_container_widget' => array($this, 'block_seo_localized_links_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('seo_localized_links_container_widget', $context, $blocks);
    }

    public function block_seo_localized_links_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["linkItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["linkItem"]) {
            // line 3
            echo "        ";
            $context["rel"] = "alternate";
            // line 4
            echo "        ";
            $context["href"] = $this->getAttribute($context["linkItem"], "url", array());
            // line 5
            echo "        ";
            $context["hreflang"] = $this->getAttribute($context["linkItem"], "languageCode", array());
            // line 6
            echo "        ";
            $this->displayBlock("external_resource_widget", $context, $blocks);
            echo "
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroSEOBundle:layouts:default/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  50 => 5,  47 => 4,  44 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSEOBundle:layouts:default/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SEOBundle/Resources/views/layouts/default/layout.html.twig");
    }
}
