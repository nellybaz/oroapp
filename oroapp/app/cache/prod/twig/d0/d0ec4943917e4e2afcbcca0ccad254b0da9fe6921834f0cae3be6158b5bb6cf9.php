<?php

/* OroCommerceMenuBundle:menuUpdate:indexWithTabs.html.twig */
class __TwigTemplate_f12f452740a239f3adc3f858f27a64778b46fb3952ad94c060c5dd0645c74980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:menuUpdate:index.html.twig", "OroCommerceMenuBundle:menuUpdate:indexWithTabs.html.twig", 1);
        $this->blocks = array(
            'content_datagrid' => array($this, 'block_content_datagrid'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:menuUpdate:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_datagrid($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"responsive-cell\">
        ";
        // line 5
        if ((twig_length_filter($this->env, ($context["contexts"] ?? null)) == 1)) {
            // line 6
            echo "            ";
            $context["context"] = twig_first($this->env, ($context["contexts"] ?? null));
            // line 7
            echo "            ";
            if (($context["context"] ?? null)) {
                // line 8
                echo "                ";
                $context["content"] = "";
                // line 9
                echo "                ";
                $this->loadTemplate(($context["gridTemplate"] ?? null), "OroCommerceMenuBundle:menuUpdate:indexWithTabs.html.twig", 9)->display(array_merge($context, array("context" => ($context["context"] ?? null))));
                // line 10
                echo "            ";
            }
            // line 11
            echo "        ";
        } else {
            // line 12
            echo "            ";
            $context["tabs"] = array();
            // line 13
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["contexts"] ?? null));
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
            foreach ($context['_seq'] as $context["label"] => $context["context"]) {
                // line 14
                echo "                ";
                $context["content"] = "";
                // line 15
                echo "                ";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 16
                    echo "                    ";
                    ob_start();
                    // line 17
                    echo "                        ";
                    $this->loadTemplate(($context["gridTemplate"] ?? null), "OroCommerceMenuBundle:menuUpdate:indexWithTabs.html.twig", 17)->display(array_merge($context, array("context" => $context["context"])));
                    // line 18
                    echo "                    ";
                    $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 19
                    echo "                ";
                }
                // line 20
                echo "
                ";
                // line 21
                $context["tab"] = array("widgetType" => "block", "alias" => twig_random($this->env), "label" =>                 // line 24
$context["label"], "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(                // line 26
($context["tabRoute"] ?? null), array("context" =>                 // line 27
$context["context"])), "content" =>                 // line 29
($context["content"] ?? null));
                // line 31
                echo "
                ";
                // line 32
                $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => ($context["tab"] ?? null)));
                // line 33
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['context'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env, ($context["tabs"] ?? null), array("useDropdown" => true));
            echo "
        ";
        }
        // line 36
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCommerceMenuBundle:menuUpdate:indexWithTabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  121 => 34,  107 => 33,  105 => 32,  102 => 31,  100 => 29,  99 => 27,  98 => 26,  97 => 24,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCommerceMenuBundle:menuUpdate:indexWithTabs.html.twig", "");
    }
}
