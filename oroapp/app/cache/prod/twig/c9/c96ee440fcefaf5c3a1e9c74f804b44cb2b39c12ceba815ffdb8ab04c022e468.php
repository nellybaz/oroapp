<?php

/* OroDashboardBundle:Dashboard:launchpad.html.twig */
class __TwigTemplate_ebfa1239837942fd023352f35f15fa4b2e5d7f3303bd062bbbc6dc599c1e2b38 extends Twig_Template
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
        if ((array_key_exists("widgetAcl", $context) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(($context["widgetAcl"] ?? null)))) {
            // line 2
            echo "    <div class=\"widget-content launchpad-widget-content";
            if ((array_key_exists("widgetClass", $context) && ($context["widgetClass"] ?? null))) {
                echo " ";
                echo twig_escape_filter($this->env, ($context["widgetClass"] ?? null), "html", null, true);
                echo "-widget-content";
            }
            echo "\">
        <div class=\"clearfix\">
            <div class=\"image-wrap pull-left\">
                <p class=\"text-center\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["widgetLabel"] ?? null)), "html", null, true);
            echo "
                </p>
                ";
            // line 8
            if ((array_key_exists("widgetIcon", $context) && ($context["widgetIcon"] ?? null))) {
                // line 9
                echo "                    <a href=\"javascript:void(0);\" class=\"fa-";
                echo twig_escape_filter($this->env, ($context["widgetIcon"] ?? null), "html", null, true);
                echo " widget-image\"></a>
                ";
            }
            // line 11
            echo "            </div>
            <div class=\"list-wrap pull-left\">
                <ul class=\"nav nav-list\">
                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "                        ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["item"], "acl", array()))) {
                    // line 16
                    echo "                            <li class=\"";
                    echo (($this->getAttribute($context["loop"], "last", array())) ? ("last") : (""));
                    echo "\">
                                <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["item"], "route", array()), (($this->getAttribute($context["item"], "route_parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "route_parameters", array()), array())) : (array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["item"], "label", array())), "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                // line 20
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </ul>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:launchpad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  84 => 20,  76 => 17,  71 => 16,  68 => 15,  51 => 14,  46 => 11,  40 => 9,  38 => 8,  33 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Dashboard:launchpad.html.twig", "");
    }
}
