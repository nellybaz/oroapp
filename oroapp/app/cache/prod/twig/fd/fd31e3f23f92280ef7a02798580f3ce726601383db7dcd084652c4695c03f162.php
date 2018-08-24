<?php

/* OroProductBundle:layouts/blank/page:layout.html.twig */
class __TwigTemplate_4fbd40fd1df6f4897ab2e15f5d8131048b0d4037401cf152ca03ea51e576ad53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_sticker_widget' => array($this, 'block_product_sticker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('product_sticker_widget', $context, $blocks);
    }

    public function block_product_sticker_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((        // line 3
array_key_exists("stickers", $context) && twig_length_filter($this->env,         // line 4
($context["stickers"] ?? null)))) {
            // line 6
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-sticker"));
            // line 9
            echo "
        ";
            // line 10
            if ((($context["mode"] ?? null) == "icon")) {
                // line 11
                echo "            ";
                $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-sticker--icon"));
                // line 14
                echo "        ";
            } elseif ((($context["mode"] ?? null) == "text")) {
                // line 15
                echo "            ";
                $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-sticker--text"));
                // line 18
                echo "        ";
            }
            // line 19
            echo "
        ";
            // line 20
            $context["def_attr"] = ($context["attr"] ?? null);
            // line 21
            echo "
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stickers"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                // line 23
                echo "            ";
                $context["attr"] = ($context["def_attr"] ?? null);
                // line 24
                echo "
            ";
                // line 25
                $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (((" product-sticker--" .                 // line 26
($context["mode"] ?? null)) . "-") . $this->getAttribute($context["sticker"], "type", array()))));
                // line 28
                echo "
            ";
                // line 29
                if ((($context["mode"] ?? null) == "icon")) {
                    // line 30
                    echo "                ";
                    $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (" product-sticker--" .                     // line 31
($context["position"] ?? null))));
                    // line 33
                    echo "            ";
                }
                // line 34
                echo "
            <div ";
                // line 35
                $this->displayBlock("block_attributes", $context, $blocks);
                echo ">";
                // line 36
                if ((($context["mode"] ?? null) == "text")) {
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.product.sticker." . $this->getAttribute($context["sticker"], "type", array()))), "html", null, true);
                }
                // line 39
                echo "</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/page:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 41,  108 => 39,  105 => 37,  103 => 36,  100 => 35,  97 => 34,  94 => 33,  92 => 31,  90 => 30,  88 => 29,  85 => 28,  83 => 26,  82 => 25,  79 => 24,  76 => 23,  59 => 22,  56 => 21,  54 => 20,  51 => 19,  48 => 18,  45 => 15,  42 => 14,  39 => 11,  37 => 10,  34 => 9,  31 => 6,  29 => 4,  28 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/page:layout.html.twig", "");
    }
}
