<?php

/* OroProductBundle:layouts/blank/oro_product_frontend_product_view:product_media.html.twig */
class __TwigTemplate_f21446ccb6809ba61fc73242b5ae769c786a46142eeca2880f9b81c4cef1f914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_product_view_media_container_widget' => array($this, 'block__product_view_media_container_widget'),
            '_product_view_media_widget' => array($this, 'block__product_view_media_widget'),
            '_product_view_media_gallery_widget' => array($this, 'block__product_view_media_gallery_widget'),
            '_product_view_media_slider_widget' => array($this, 'block__product_view_media_slider_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_product_view_media_container_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_product_view_media_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('_product_view_media_gallery_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('_product_view_media_slider_widget', $context, $blocks);
    }

    // line 1
    public function block__product_view_media_container_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-view-media-container"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 11
    public function block__product_view_media_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:layouts/blank/oro_product_frontend_product_view:product_media.html.twig", 12);
        // line 13
        echo "    ";
        $context["Image"] = $this->loadTemplate("OroProductBundle::image_macros.html.twig", "OroProductBundle:layouts/blank/oro_product_frontend_product_view:product_media.html.twig", 13);
        // line 14
        echo "
    ";
        // line 15
        $context["productImages"] = $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductImageExtension')->collectProductImagesByTypes(($context["product"] ?? null), array(0 => "main", 1 => "additional"));
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, ($context["productImages"] ?? null)) == 0)) {
            // line 18
            echo "        ";
            $context["productImages"] = $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductImageExtension')->collectProductImagesByTypes(($context["product"] ?? null), array(0 => "listing"));
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (($context["popup_gallery"] ?? null)) {
            // line 22
            echo "        ";
            $this->displayBlock("_product_view_media_gallery_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 24
            echo "        ";
            $this->displayBlock("_product_view_media_slider_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 28
    public function block__product_view_media_gallery_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["zoomOptions"] = array("viewport" => array("minScreenType" => "desktop"), "component" => "oroui/js/app/components/jquery-widget-component", "widgetModule" => "oroproduct/js/widget/zoom-widget");
        // line 36
        echo "
    ";
        // line 37
        $context["imageListOptions"] = array("slidesToShow" => 1, "slidesToScroll" => 1, "fade" => true, "arrows" => false, "asNavFor" => ".product-view-media-gallery__nav", "lazyLoad" => "progressive", "infinite" => false, "relatedComponent" => "zoom");
        // line 47
        echo "
    ";
        // line 48
        $context["navListOptions"] = array("slidesToShow" => 4, "slidesToScroll" => 1, "asNavFor" => ".product-view-media-gallery", "focusOnSelect" => true, "infinite" => false, "arrows" => true);
        // line 56
        echo "

    ";
        // line 58
        $context["slideImageAttr"] = (((twig_length_filter($this->env, ($context["productImages"] ?? null)) > 1)) ? (array("data-page-component-module" => "orofrontend/js/app/components/list-slider-component", "data-page-component-options" => twig_jsonencode_filter(        // line 60
($context["imageListOptions"] ?? null)))) : (array()));
        // line 62
        echo "
    ";
        // line 63
        $context["slideNavAttr"] = (((twig_length_filter($this->env, ($context["productImages"] ?? null)) > 1)) ? (array("data-page-component-module" => "orofrontend/js/app/components/list-slider-component", "data-page-component-options" => twig_jsonencode_filter(        // line 65
($context["navListOptions"] ?? null)))) : (array()));
        // line 67
        echo "
    ";
        // line 68
        if ((twig_length_filter($this->env, ($context["productImages"] ?? null)) > 0)) {
            // line 69
            echo "        ";
            $context["galleryImages"] = array();
            // line 70
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productImages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["productImage"]) {
                // line 71
                echo "            ";
                $context["galleryImages"] = twig_array_merge(($context["galleryImages"] ?? null), array(0 => array("src" => $this->getAttribute(                // line 72
($context["Image"] ?? null), "url", array(0 => $this->getAttribute($context["productImage"], "image", array()), 1 => "product_gallery_popup"), "method"), "thumb" => $this->getAttribute(                // line 73
($context["Image"] ?? null), "url", array(0 => $this->getAttribute($context["productImage"], "image", array()), 1 => "product_small"), "method"), "alt" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(                // line 74
($context["product"] ?? null), "names", array()))))));
                // line 76
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
        ";
            // line 78
            $context["options"] = array("galleryImages" =>             // line 79
($context["galleryImages"] ?? null));
            // line 81
            echo "
        ";
            // line 82
            $context["popupGalleryAttr"] = array("data-page-component-module" => "orofrontend/js/app/components/popup-gallery-widget", "data-page-component-options" => twig_jsonencode_filter(            // line 84
($context["options"] ?? null)), "itemprop" => "productID", "content" => $this->getAttribute(            // line 86
($context["product"] ?? null), "id", array()));
            // line 88
            echo "        <div ";
            echo $this->getAttribute(($context["UI"] ?? null), "attributes", array(0 => ($context["popupGalleryAttr"] ?? null)), "method");
            echo ">
            <div class=\"product-view-media-gallery\" ";
            // line 89
            echo $this->getAttribute(($context["UI"] ?? null), "attributes", array(0 => ($context["slideImageAttr"] ?? null)), "method");
            echo ">
                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productImages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["productImage"]) {
                // line 91
                echo "                    <div class=\"product-view-media-gallery__image-item\" data-trigger-gallery-open>
                        <img class=\"product-view-media-gallery__image\"
                             alt=";
                // line 93
                echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(($context["product"] ?? null), "names", array())));
                echo "
                             data-zoom-image=\"";
                // line 94
                echo $this->getAttribute(($context["Image"] ?? null), "url", array(0 => $this->getAttribute($context["productImage"], "image", array()), 1 => "product_original"), "method");
                echo "\"
                                ";
                // line 95
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 96
                    echo "                                    src=\"";
                    echo (($context["productImage"]) ? ($this->getAttribute(($context["Image"] ?? null), "url", array(0 => $this->getAttribute($context["productImage"], "image", array()), 1 => "product_gallery_main"), "method")) : (null));
                    echo "\"
                                    data-page-component-module=\"oroui/js/app/components/viewport-component\"
                                    data-page-component-options=\"";
                    // line 98
                    echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["zoomOptions"] ?? null)), "html", null, true);
                    echo "\"
                                    itemprop=\"image\"
                                ";
                } else {
                    // line 101
                    echo "                                    data-lazy=\"";
                    echo (($context["productImage"]) ? ($this->getAttribute(($context["Image"] ?? null), "url", array(0 => $this->getAttribute($context["productImage"], "image", array()), 1 => "product_gallery_main"), "method")) : (null));
                    echo "\"
                                ";
                }
                // line 103
                echo "                        />
                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "            </div>
        </div>
    ";
        } else {
            // line 109
            echo "        <div class=\"product-view-media-gallery\" itemprop=\"productID\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "id", array()), "html", null, true);
            echo "\">
            <div class=\"product-view-media-gallery__image-item\">
                <img class=\"product-view-media-gallery__image\"
                     src=\"";
            // line 112
            echo $this->getAttribute(($context["Image"] ?? null), "url", array(0 => null, 1 => "product_gallery_main"), "method");
            echo "\"
                     alt=";
            // line 113
            echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(($context["product"] ?? null), "names", array())));
            echo "
                     width=\"378\"
                     height=\"378\"
                     itemprop=\"image\"
                />
            </div>
        </div>
    ";
        }
        // line 121
        echo "
    <div id=\"zoom-container\"></div>
    ";
        // line 123
        if ((twig_length_filter($this->env, ($context["productImages"] ?? null)) > 1)) {
            // line 124
            echo "        <div class=\"product-view-media-gallery__nav\" ";
            echo $this->getAttribute(($context["UI"] ?? null), "attributes", array(0 => ($context["slideNavAttr"] ?? null)), "method");
            echo ">
            ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productImages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["productImage"]) {
                // line 126
                echo "                <div class=\"product-view-media-gallery__nav__item\">
                    <img class=\"product-view-media-gallery__nav__image\"
                         src=\"";
                // line 128
                echo $this->getAttribute(($context["Image"] ?? null), "url", array(0 => $this->getAttribute($context["productImage"], "image", array()), 1 => "product_small"), "method");
                echo "\"/>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "        </div>
    ";
        }
    }

    // line 135
    public function block__product_view_media_slider_widget($context, array $blocks = array())
    {
        // line 136
        echo "    ";
        $context["imageListOptions"] = array("slidesToShow" => 1, "slidesToScroll" => 1, "fade" => true, "arrows" => true, "lazyLoad" => "progressive", "infinite" => true, "dots" => true);
        // line 145
        echo "
    ";
        // line 146
        $context["slideImageAttr"] = (((twig_length_filter($this->env, ($context["productImages"] ?? null)) > 1)) ? (array("data-page-component-module" => "orofrontend/js/app/components/list-slider-component", "data-page-component-options" => twig_jsonencode_filter(        // line 148
($context["imageListOptions"] ?? null)))) : (array()));
        // line 150
        echo "
    <div class=\"product-view-media-slider\" ";
        // line 151
        echo $this->getAttribute(($context["UI"] ?? null), "attributes", array(0 => ($context["slideImageAttr"] ?? null)), "method");
        echo ">
        ";
        // line 152
        if ((twig_length_filter($this->env, ($context["productImages"] ?? null)) == 0)) {
            // line 153
            echo "            <div class=\"product-view-media-slider__image-item\">
                <img class=\"product-view-media-slider__image\"
                     src=\"";
            // line 155
            echo $this->getAttribute(($context["Image"] ?? null), "url", array(0 => null, 1 => "product_gallery_main"), "method");
            echo "\"
                     alt=";
            // line 156
            echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(($context["product"] ?? null), "names", array())));
            echo "
                     width=\"378\"
                     height=\"378\"
                />
            </div>
        ";
        } else {
            // line 162
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productImages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["productImage"]) {
                // line 163
                echo "                <div class=\"product-view-media-slider__image-item\">
                    <img class=\"product-view-media-slider__image\"
                         alt=";
                // line 165
                echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(($context["product"] ?? null), "names", array())));
                echo "
                            ";
                // line 166
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 167
                    echo "                                src=\"";
                    echo (($context["productImage"]) ? ($this->getAttribute(($context["Image"] ?? null), "url", array(0 => $this->getAttribute($context["productImage"], "image", array()), 1 => "product_gallery_main"), "method")) : (null));
                    echo "\"
                            ";
                } else {
                    // line 169
                    echo "                                data-lazy=\"";
                    echo (($context["productImage"]) ? ($this->getAttribute(($context["Image"] ?? null), "url", array(0 => $this->getAttribute($context["productImage"], "image", array()), 1 => "product_gallery_main"), "method")) : (null));
                    echo "\"
                            ";
                }
                // line 171
                echo "                    />
                </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "        ";
        }
        // line 175
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/oro_product_frontend_product_view:product_media.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  405 => 175,  402 => 174,  386 => 171,  380 => 169,  374 => 167,  372 => 166,  368 => 165,  364 => 163,  346 => 162,  337 => 156,  333 => 155,  329 => 153,  327 => 152,  323 => 151,  320 => 150,  318 => 148,  317 => 146,  314 => 145,  311 => 136,  308 => 135,  302 => 131,  293 => 128,  289 => 126,  285 => 125,  280 => 124,  278 => 123,  274 => 121,  263 => 113,  259 => 112,  252 => 109,  247 => 106,  231 => 103,  225 => 101,  219 => 98,  213 => 96,  211 => 95,  207 => 94,  203 => 93,  199 => 91,  182 => 90,  178 => 89,  173 => 88,  171 => 86,  170 => 84,  169 => 82,  166 => 81,  164 => 79,  163 => 78,  160 => 77,  154 => 76,  152 => 74,  151 => 73,  150 => 72,  148 => 71,  143 => 70,  140 => 69,  138 => 68,  135 => 67,  133 => 65,  132 => 63,  129 => 62,  127 => 60,  126 => 58,  122 => 56,  120 => 48,  117 => 47,  115 => 37,  112 => 36,  109 => 29,  106 => 28,  98 => 24,  92 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  79 => 17,  76 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  55 => 7,  51 => 6,  48 => 5,  45 => 2,  42 => 1,  38 => 135,  35 => 134,  33 => 28,  30 => 27,  28 => 11,  25 => 10,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/oro_product_frontend_product_view:product_media.html.twig", "");
    }
}
