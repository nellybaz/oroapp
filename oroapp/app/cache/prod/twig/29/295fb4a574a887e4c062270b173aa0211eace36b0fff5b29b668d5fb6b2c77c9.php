<?php

/* OroSearchBundle:Search:searchResultItem.html.twig */
class __TwigTemplate_65ecf44854571c5b373aba4328ae0da9c5415a8b2f9a8b32558e010e018e8350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'additional_info' => array($this, 'block_additional_info'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"customer-info well-small\">
    <div class=\"visual\">
        ";
        // line 3
        if (array_key_exists("recordUrl", $context)) {
            // line 4
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["recordUrl"] ?? null), "html", null, true);
            echo "\" ";
            if (array_key_exists("recordUrlCssClass", $context)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, ($context["recordUrlCssClass"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">";
        }
        // line 6
        echo "<img src=\"";
        echo twig_escape_filter($this->env, (((((array_key_exists("showImage", $context)) ? (_twig_default_filter(($context["showImage"] ?? null), false)) : (false)) && ($context["image"] ?? null))) ? ($this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFilteredImageUrl(($context["image"] ?? null), "avatar_med")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/oroui/img/info-" . ((array_key_exists("iconType", $context)) ? (_twig_default_filter(($context["iconType"] ?? null), "user")) : ("user"))) . ".png")))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" />";
        // line 7
        if (array_key_exists("recordUrl", $context)) {
            // line 8
            echo "</a>";
        }
        // line 10
        echo "    </div>
    <div class=\"clearfix\">
        <div class=\"";
        // line 12
        if (((array_key_exists("showImage", $context)) ? (_twig_default_filter(($context["showImage"] ?? null), false)) : (false))) {
            echo "customer-content";
        } else {
            echo "customer-simple";
        }
        echo " pull-left\">
            <div class=\"clearfix\">
                <div class=\"pull-left\">
                    <h1 class=\"user-name\">
                        ";
        // line 16
        if (array_key_exists("recordUrl", $context)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["recordUrl"] ?? null), "html", null, true);
            echo "\" ";
            if (array_key_exists("recordUrlCssClass", $context)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, ($context["recordUrlCssClass"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">";
        }
        // line 17
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
                            ";
        // line 18
        if (array_key_exists("recordUrl", $context)) {
            echo "</a>";
        }
        // line 19
        echo "                    </h1>
                </div>
                ";
        // line 21
        $this->displayBlock('additional_info', $context, $blocks);
        // line 23
        echo "            </div>";
        // line 24
        ob_start();
        // line 25
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("search_item_entity_info", $context)) ? (_twig_default_filter(($context["search_item_entity_info"] ?? null), "search_item_entity_info")) : ("search_item_entity_info")), array("entity" => ($context["entity"] ?? null)));
        $context["searchItemEntityInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        if (((array_key_exists("entityInfo", $context) && twig_length_filter($this->env, ($context["entityInfo"] ?? null))) ||  !(null === ($context["searchItemEntityInfo"] ?? null)))) {
            // line 28
            echo "                <div class=\"clearfix\">
                    <ul class=\"inline\">
                        ";
            // line 30
            if ( !(null === ($context["searchItemEntityInfo"] ?? null))) {
                // line 31
                echo "                            ";
                echo twig_escape_filter($this->env, ($context["searchItemEntityInfo"] ?? null), "html", null, true);
                echo "
                        ";
            }
            // line 33
            echo "                        ";
            if ((array_key_exists("entityInfo", $context) && twig_length_filter($this->env, ($context["entityInfo"] ?? null)))) {
                // line 34
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["entityInfo"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                    // line 35
                    echo "                                <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "title", array()), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "value", array()), "html", null, true);
                    echo "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                        ";
            }
            // line 38
            echo "                    </ul>
                </div>
            ";
        }
        // line 41
        echo "        </div>
        <div class=\"pull-right\">
            <div class=\"sub-title\">";
        // line 43
        echo twig_escape_filter($this->env, ($context["entityType"] ?? null), "html", null, true);
        echo "</div>
        </div>
    </div>
</div>
";
    }

    // line 21
    public function block_additional_info($context, array $blocks = array())
    {
        // line 22
        echo "                ";
    }

    public function getTemplateName()
    {
        return "OroSearchBundle:Search:searchResultItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 22,  151 => 21,  142 => 43,  138 => 41,  133 => 38,  130 => 37,  119 => 35,  114 => 34,  111 => 33,  105 => 31,  103 => 30,  99 => 28,  97 => 27,  94 => 25,  92 => 24,  90 => 23,  88 => 21,  84 => 19,  80 => 18,  75 => 17,  63 => 16,  52 => 12,  48 => 10,  45 => 8,  43 => 7,  37 => 6,  26 => 4,  24 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSearchBundle:Search:searchResultItem.html.twig", "");
    }
}
