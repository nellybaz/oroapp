<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig */
class __TwigTemplate_bba1dc6609c46ae330975464b97882cb28e3117dd934eb41578d61ac2811f61e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'layout_subtree_update_widget' => array($this, 'block_layout_subtree_update_widget'),
            'page_subtitle_widget' => array($this, 'block_page_subtitle_widget'),
            'breadcrumbs_widget' => array($this, 'block_breadcrumbs_widget'),
            'logo_widget' => array($this, 'block_logo_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('layout_subtree_update_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('page_subtitle_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('breadcrumbs_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('logo_widget', $context, $blocks);
    }

    // line 1
    public function block_layout_subtree_update_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["block"] ?? null), "children", array()))) {
            // line 3
            echo "    ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "oroui/js/app/views/layout-subtree-view", "blockId" => $this->getAttribute($this->getAttribute(            // line 7
($context["block"] ?? null), "vars", array()), "id", array()), "reloadEvents" =>             // line 8
($context["reloadEvents"] ?? null), "restoreFormState" =>             // line 9
($context["restoreFormState"] ?? null))));
            // line 12
            echo "    <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
        ";
            // line 13
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
    </div>
    ";
        }
    }

    // line 18
    public function block_page_subtitle_widget($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-subtitle"));
        // line 20
        echo "    <h2 ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 21
        if (($context["icon"] ?? null)) {
            echo "<span class=\"badge ";
            echo twig_escape_filter($this->env, ((($context["badge"] ?? null)) ? (("badge--" . ($context["badge"] ?? null))) : ("")), "html", null, true);
            echo "\"><i class=\"fa-";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i></span>";
        }
        // line 22
        echo "        <span class=\"page-subtitle__text\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->processText(($context["text"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "</span>
        ";
        // line 23
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </h2>
";
    }

    // line 27
    public function block_breadcrumbs_widget($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        if (twig_test_empty(($context["breadcrumbs"] ?? null))) {
            // line 29
            echo "        ";
            $context["breadcrumbs"] = twig_reverse_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["blocks"] ?? null), "title", array()), "vars", array()), "value", array()), " - "));
            // line 30
            echo "    ";
        }
        // line 31
        echo "
    ";
        // line 32
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " breadcrumbs"));
        // line 35
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <span class=\"breadcrumbs__item\">
            ";
        // line 37
        if ( !twig_test_iterable(($context["breadcrumbs"] ?? null))) {
            // line 38
            echo "                ";
            echo twig_escape_filter($this->env, ($context["breadcrumbs"] ?? null), "html", null, true);
            echo "
            ";
        } else {
            // line 40
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 41
                echo "                    ";
                echo (( !$this->getAttribute($context["loop"], "first", array())) ? (" / ") : (""));
                echo "
                    ";
                // line 42
                if ($this->getAttribute($context["breadcrumb"], "label", array(), "any", true, true)) {
                    // line 43
                    echo "                        ";
                    if ($this->getAttribute($context["breadcrumb"], "uri", array(), "any", true, true)) {
                        // line 44
                        echo "                            ";
                        $context["url"] = $this->getAttribute($context["breadcrumb"], "uri", array());
                        // line 45
                        echo "                        ";
                    } else {
                        // line 46
                        echo "                            ";
                        $context["url"] = $this->getAttribute($context["breadcrumb"], "url", array());
                        // line 47
                        echo "                        ";
                    }
                    // line 48
                    echo "
                        ";
                    // line 49
                    if ((($context["url"] ?? null) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                        // line 50
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                        echo "\" class=\"breadcrumbs__link\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["breadcrumb"], "label", array())), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 52
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["breadcrumb"], "label", array())), "html", null, true);
                        echo "
                        ";
                    }
                    // line 54
                    echo "                    ";
                } else {
                    // line 55
                    echo "                        ";
                    echo twig_escape_filter($this->env, $context["breadcrumb"], "html", null, true);
                    echo "
                    ";
                }
                // line 57
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            ";
        }
        // line 59
        echo "        </span>
        ";
        // line 60
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 64
    public function block_logo_widget($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig", 65);
        // line 66
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " logo"));
        // line 69
        echo "    
    ";
        // line 70
        $context["attr_img"] = ((array_key_exists("attr_img", $context)) ? (_twig_default_filter(($context["attr_img"] ?? null), array())) : (array()));
        // line 71
        echo "    ";
        $context["attr_img"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr_img"] ?? null), array("src" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/orofrontend/blank/images/logo/logo-oroacem.svg"), "~class" => " logo-img", "alt" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend.logo.alt.label")));
        // line 76
        echo "
    ";
        // line 77
        if ((($context["renderLink"] ?? null) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != ($context["route"] ?? null)))) {
            // line 78
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null));
            echo "\" ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <img ";
            // line 79
            echo $context["UI"]->getattributes(($context["attr_img"] ?? null));
            echo ">
        </a>
    ";
        } else {
            // line 82
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <img ";
            // line 83
            echo $context["UI"]->getattributes(($context["attr_img"] ?? null));
            echo ">
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  264 => 83,  259 => 82,  253 => 79,  246 => 78,  244 => 77,  241 => 76,  238 => 71,  236 => 70,  233 => 69,  230 => 66,  227 => 65,  224 => 64,  217 => 60,  214 => 59,  211 => 58,  197 => 57,  191 => 55,  188 => 54,  182 => 52,  174 => 50,  172 => 49,  169 => 48,  166 => 47,  163 => 46,  160 => 45,  157 => 44,  154 => 43,  152 => 42,  147 => 41,  129 => 40,  123 => 38,  121 => 37,  115 => 35,  113 => 32,  110 => 31,  107 => 30,  104 => 29,  101 => 28,  98 => 27,  91 => 23,  86 => 22,  78 => 21,  73 => 20,  70 => 19,  67 => 18,  59 => 13,  54 => 12,  52 => 9,  51 => 8,  50 => 7,  48 => 3,  45 => 2,  42 => 1,  38 => 64,  35 => 63,  33 => 27,  30 => 26,  28 => 18,  25 => 17,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig");
    }
}
