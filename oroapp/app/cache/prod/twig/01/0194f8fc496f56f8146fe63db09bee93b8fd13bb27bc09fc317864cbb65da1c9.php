<?php

/* OroFrontendBundle:layouts/default/page:layout.html.twig */
class __TwigTemplate_dca6d1a99d2053fa8a1e47503de44d3e657763e4903f6fa093853b05c506528a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'root_widget' => array($this, 'block_root_widget'),
            '_scripts_before_widget' => array($this, 'block__scripts_before_widget'),
            'scripts_before' => array($this, 'block_scripts_before'),
            '_requirejs_scripts_after_widget' => array($this, 'block__requirejs_scripts_after_widget'),
            '_page_header_widget' => array($this, 'block__page_header_widget'),
            '_page_title_container_widget' => array($this, 'block__page_title_container_widget'),
            '_page_title_widget' => array($this, 'block__page_title_widget'),
            '_notification_widget' => array($this, 'block__notification_widget'),
            '_sticky_element_notification_widget' => array($this, 'block__sticky_element_notification_widget'),
            '_sticky_header_row_widget' => array($this, 'block__sticky_header_row_widget'),
            '_page_footer_container_widget' => array($this, 'block__page_footer_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('root_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('_scripts_before_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('_requirejs_scripts_after_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('_page_header_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('_page_title_container_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('_page_title_widget', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('_notification_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('_sticky_element_notification_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('_sticky_header_row_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('_page_footer_container_widget', $context, $blocks);
    }

    // line 1
    public function block_root_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ( !$this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\HashNavExtension')->checkIsHashNavigation()) {
            // line 3
            echo "        <!DOCTYPE ";
            echo twig_escape_filter($this->env, ((array_key_exists("doctype", $context)) ? (_twig_default_filter(($context["doctype"] ?? null), "html")) : ("html")), "html", null, true);
            echo ">
        <html>
        ";
            // line 5
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
        </html>
    ";
        } else {
            // line 8
            echo "        ";
            $this->loadTemplate("OroNavigationBundle:HashNav:hashNavAjax.html.twig", "OroFrontendBundle:layouts/default/page:layout.html.twig", 8)->display(array_merge($context, array("data" => array("content" =>             // line 10
$this->env->getExtension('layout')->renderer->searchAndRenderBlock($this->getAttribute(($context["blocks"] ?? null), "wrapper", array()), 'widget')))));
            // line 13
            echo "    ";
        }
    }

    // line 16
    public function block__scripts_before_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    ";
        // line 18
        $this->displayBlock('scripts_before', $context, $blocks);
    }

    public function block_scripts_before($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("scripts_before", $context)) ? (_twig_default_filter(($context["scripts_before"] ?? null), "scripts_before")) : ("scripts_before")), array());
        // line 20
        echo "    ";
    }

    // line 23
    public function block__requirejs_scripts_after_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("scripts_after", $context)) ? (_twig_default_filter(($context["scripts_after"] ?? null), "scripts_after")) : ("scripts_after")), array());
        // line 25
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 28
    public function block__page_header_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-header"));
        // line 32
        echo "
    <div ";
        // line 33
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 34
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 38
    public function block__page_title_container_widget($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (" page-title-wrapper" . ((        // line 40
($context["class_prefix"] ?? null)) ? (" {{ class_prefix }}-page-title-wrapper") : ("")))));
        // line 42
        echo "    ";
        $context["content"] = twig_trim_filter($this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget'));
        // line 43
        echo "    ";
        if (twig_length_filter($this->env, ($context["content"] ?? null))) {
            // line 44
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">";
            echo ($context["content"] ?? null);
            echo "</div>
    ";
        }
    }

    // line 48
    public function block__page_title_widget($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["additionalClasses"] = array("classPrefix" => ((        // line 50
($context["class_prefix"] ?? null)) ? (" {{ class_prefix }}-page-title") : ("")), "hasActions" => ((        // line 51
array_key_exists("hasActions", $context)) ? (" page-title--has-actions") : ("")));
        // line 53
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => ((" page-title" . $this->getAttribute(        // line 54
($context["additionalClasses"] ?? null), "classPrefix", array())) . $this->getAttribute(($context["additionalClasses"] ?? null), "hasActions", array()))));
        // line 56
        echo "    ";
        $context["content"] = twig_trim_filter($this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget'));
        // line 57
        echo "    ";
        if (twig_length_filter($this->env, ($context["content"] ?? null))) {
            // line 58
            echo "        <h1";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 59
            if (array_key_exists("titleIcon", $context)) {
                // line 60
                echo "            <span class=\"badge\">
                <i class=\"";
                // line 61
                echo twig_escape_filter($this->env, ($context["titleIcon"] ?? null), "html", null, true);
                echo "\"></i>
            </span>
            ";
            }
            // line 64
            echo "            <span class=\"page-title__text\">";
            echo ($context["content"] ?? null);
            echo "</span>
        </h1>
    ";
        }
    }

    // line 69
    public function block__notification_widget($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" => "flash-messages", "~class" => " notification-flash-container", "data-sticky-target" => "top-sticky-panel", "data-sticky" => array("isSticky" => true, "placeholderId" => "sticky-element-notification")));
        // line 79
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "></div>
    <script type=\"text/javascript\">
        require(['jquery', 'oroui/js/messenger'],
            function(\$, messenger, template) {
                messenger.setup({
                    container: '#";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "id", array()), "html", null, true);
        echo "'
                });
                ";
        // line 86
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 87
            echo "                \$(function() {
                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 89
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 90
                    echo "                            messenger.notificationFlashMessage(";
                    echo twig_jsonencode_filter($context["type"]);
                    echo ", ";
                    echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]));
                    echo ");
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                });
                ";
        }
        // line 95
        echo "            });
    </script>
";
    }

    // line 99
    public function block__sticky_element_notification_widget($context, array $blocks = array())
    {
        // line 100
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" => "sticky-element-notification"));
        // line 103
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 106
    public function block__sticky_header_row_widget($context, array $blocks = array())
    {
        // line 107
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" => "sticky-header-row"));
        // line 110
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 113
    public function block__page_footer_container_widget($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-area-container"));
        // line 117
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/default/page:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  323 => 117,  320 => 114,  317 => 113,  308 => 110,  305 => 107,  302 => 106,  293 => 103,  290 => 100,  287 => 99,  281 => 95,  277 => 93,  271 => 92,  260 => 90,  255 => 89,  251 => 88,  248 => 87,  246 => 86,  241 => 84,  232 => 79,  229 => 70,  226 => 69,  217 => 64,  211 => 61,  208 => 60,  206 => 59,  201 => 58,  198 => 57,  195 => 56,  193 => 54,  191 => 53,  189 => 51,  188 => 50,  186 => 49,  183 => 48,  173 => 44,  170 => 43,  167 => 42,  165 => 40,  163 => 39,  160 => 38,  153 => 34,  149 => 33,  146 => 32,  143 => 29,  140 => 28,  133 => 25,  130 => 24,  127 => 23,  123 => 20,  120 => 19,  114 => 18,  109 => 17,  106 => 16,  101 => 13,  99 => 10,  97 => 8,  91 => 5,  85 => 3,  82 => 2,  79 => 1,  75 => 113,  72 => 112,  70 => 106,  67 => 105,  65 => 99,  62 => 98,  60 => 69,  57 => 68,  55 => 48,  52 => 47,  50 => 38,  47 => 37,  45 => 28,  42 => 27,  40 => 23,  37 => 22,  35 => 16,  32 => 15,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/default/page:layout.html.twig", "");
    }
}
