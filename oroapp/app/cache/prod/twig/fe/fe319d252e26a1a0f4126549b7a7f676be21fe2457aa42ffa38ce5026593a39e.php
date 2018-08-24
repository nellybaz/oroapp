<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/quick_access.html.twig */
class __TwigTemplate_24b78ca3230d542eea694b0b3ecc5b3b559e102bdcf938e6b82bf9a39a895abd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_quick_access_menu_widget' => array($this, 'block__quick_access_menu_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_quick_access_menu_widget', $context, $blocks);
    }

    public function block__quick_access_menu_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " quick-access", "data-dom-relocation-options" => array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-main-menu-extra-container]")))));
        // line 15
        echo "    
    ";
        // line 16
        $context["firstItem"] = true;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "children", array()));
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
            // line 18
            echo "        ";
            if (($this->getAttribute($context["child"], "displayed", array()) && $this->getAttribute($this->getAttribute($context["child"], "extras", array()), "isAllowed", array()))) {
                // line 19
                echo "            ";
                if (($context["firstItem"] ?? null)) {
                    // line 20
                    echo "                <div ";
                    $this->displayBlock("block_attributes", $context, $blocks);
                    echo ">
                    <ul class=\"quick-access__list\">
            ";
                }
                // line 23
                echo "
            ";
                // line 24
                if (($this->getAttribute($context["child"], "name", array()) == "orders")) {
                    // line 25
                    echo "                ";
                    $context["badgeClass"] = "quick-access__icon--light";
                    // line 26
                    echo "                ";
                    $context["iconClass"] = "fa-clipboard";
                    // line 27
                    echo "            ";
                } elseif (($this->getAttribute($context["child"], "name", array()) == "quotes")) {
                    // line 28
                    echo "                ";
                    $context["badgeClass"] = "";
                    // line 29
                    echo "                ";
                    $context["iconClass"] = "fa-tags";
                    // line 30
                    echo "            ";
                } else {
                    // line 31
                    echo "                ";
                    $context["badgeClass"] = "quick-access__icon--dark";
                    // line 32
                    echo "                ";
                    $context["iconClass"] = "fa-bolt";
                    // line 33
                    echo "            ";
                }
                // line 34
                echo "
            <li class=\"quick-access__item\">
                <a class=\"quick-access__link\"  href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "uri", array()), "html", null, true);
                echo "\">
                    <span class=\"quick-access__icon ";
                // line 37
                echo twig_escape_filter($this->env, ($context["badgeClass"] ?? null), "html", null, true);
                echo "\">
                        <i class=\"";
                // line 38
                echo twig_escape_filter($this->env, ($context["iconClass"] ?? null), "html", null, true);
                echo "\"></i>
                    </span>
                    ";
                // line 40
                $context["label"] = ((($this->getAttribute($this->getAttribute($context["child"], "extras", array(), "any", false, true), "custom", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["child"], "extras", array()), "custom", array()) == true))) ? ($this->getAttribute($context["child"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["child"], "label", array()))));
                // line 41
                echo "                    <span class=\"quick-access__text\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</span>
                </a>
            </li>

            ";
                // line 45
                $context["firstItem"] = false;
                // line 46
                echo "        ";
            }
            // line 47
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    
    ";
        // line 49
        if ((($context["firstItem"] ?? null) == false)) {
            // line 50
            echo "            </ul>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/quick_access.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 50,  146 => 49,  143 => 48,  129 => 47,  126 => 46,  124 => 45,  116 => 41,  114 => 40,  109 => 38,  105 => 37,  101 => 36,  97 => 34,  94 => 33,  91 => 32,  88 => 31,  85 => 30,  82 => 29,  79 => 28,  76 => 27,  73 => 26,  70 => 25,  68 => 24,  65 => 23,  58 => 20,  55 => 19,  52 => 18,  34 => 17,  32 => 16,  29 => 15,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/quick_access.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/quick_access.html.twig");
    }
}
