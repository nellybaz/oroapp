<?php

/* OroActionBundle:Widget/widget:buttons.html.twig */
class __TwigTemplate_11736e491945e978cc4c372fc8d9c761172a573111e7d7ac126380804fa7864e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroActionBundle:Widget/widget:buttons.html.twig", 1);
        // line 2
        if (twig_length_filter($this->env, ($context["buttons"] ?? null))) {
            // line 3
            echo "    ";
            $context["renderedButtons"] = array();
            // line 4
            echo "    ";
            $context["groups"] = array();
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 7
                echo "        ";
                $context["groupName"] = (($this->getAttribute($context["button"], "group", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "group", array()), null)) : (null));
                // line 8
                echo "        ";
                if (($context["groupName"] ?? null)) {
                    // line 9
                    echo "            ";
                    ob_start();
                    // line 10
                    echo "                <li>
                    ";
                    // line 11
                    $this->loadTemplate($this->getAttribute($context["button"], "template", array()), "OroActionBundle:Widget/widget:buttons.html.twig", 11)->display(array_merge($context, $this->getAttribute($context["button"], "getTemplateData", array(0 => array("onlyLink" => true)), "method")));
                    // line 12
                    echo "                </li>
            ";
                    $context["link"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 14
                    echo "
            ";
                    // line 15
                    $context["groups"] = twig_array_merge(($context["groups"] ?? null), array(($context["groupName"] ?? null) => twig_array_merge((($this->getAttribute(($context["groups"] ?? null), ($context["groupName"] ?? null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["groups"] ?? null), ($context["groupName"] ?? null), array(), "array"), array())) : (array())), array(0 => ($context["link"] ?? null)))));
                    // line 16
                    echo "        ";
                } else {
                    // line 17
                    echo "            ";
                    ob_start();
                    // line 18
                    echo "                ";
                    $this->loadTemplate($this->getAttribute($context["button"], "template", array()), "OroActionBundle:Widget/widget:buttons.html.twig", 18)->display(array_merge($context, $this->getAttribute($context["button"], "getTemplateData", array(0 => array("aClass" => "btn action-button")), "method")));
                    // line 19
                    echo "            ";
                    $context["renderedButton"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 20
                    echo "            ";
                    $context["renderedButtons"] = twig_array_merge(($context["renderedButtons"] ?? null), array(0 => ($context["renderedButton"] ?? null)));
                    // line 21
                    echo "        ";
                }
                // line 22
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
    <div class=\"widget-content\">
        <div>
            ";
            // line 26
            if (twig_length_filter($this->env, ($context["renderedButtons"] ?? null))) {
                // line 27
                echo "                ";
                echo twig_join_filter(($context["renderedButtons"] ?? null));
                echo "
            ";
            }
            // line 29
            echo "            ";
            if (twig_length_filter($this->env, ($context["groups"] ?? null))) {
                // line 30
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["groupName"] => $context["groupButtons"]) {
                    // line 31
                    echo "                    ";
                    if ($context["groupButtons"]) {
                        // line 32
                        echo "                        ";
                        echo $context["UI"]->getdropdownButton(array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(                        // line 33
$context["groupName"]), "html" => twig_join_filter(                        // line 34
$context["groupButtons"])));
                        // line 35
                        echo "
                    ";
                    }
                    // line 37
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['groupButtons'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            ";
            }
            // line 39
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroActionBundle:Widget/widget:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 39,  143 => 38,  137 => 37,  133 => 35,  131 => 34,  130 => 33,  128 => 32,  125 => 31,  120 => 30,  117 => 29,  111 => 27,  109 => 26,  104 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  70 => 15,  67 => 14,  63 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  32 => 6,  29 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActionBundle:Widget/widget:buttons.html.twig", "");
    }
}
