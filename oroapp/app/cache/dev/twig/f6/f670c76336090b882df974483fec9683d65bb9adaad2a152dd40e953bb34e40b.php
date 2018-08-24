<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/layout.html.twig */
class __TwigTemplate_5085380e55db54663851ba2ad2a7086668742e4e77526f010d6cfb5f0b2069ab extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/layout.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_root_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root_widget"));

        // line 2
        echo "    ";
        if ( !$this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\HashNavExtension')->checkIsHashNavigation()) {
            // line 3
            echo "        <!DOCTYPE ";
            echo twig_escape_filter($this->env, ((array_key_exists("doctype", $context)) ? (_twig_default_filter(($context["doctype"] ?? $this->getContext($context, "doctype")), "html")) : ("html")), "html", null, true);
            echo ">
        <html>
        ";
            // line 5
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
            echo "
        </html>
    ";
        } else {
            // line 8
            echo "        ";
            $this->loadTemplate("OroNavigationBundle:HashNav:hashNavAjax.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/layout.html.twig", 8)->display(array_merge($context, array("data" => array("content" =>             // line 10
$this->env->getExtension('layout')->renderer->searchAndRenderBlock($this->getAttribute(($context["blocks"] ?? $this->getContext($context, "blocks")), "wrapper", array()), 'widget')))));
            // line 13
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block__scripts_before_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_scripts_before_widget"));

        // line 17
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    ";
        // line 18
        $this->displayBlock('scripts_before', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_scripts_before($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts_before"));

        // line 19
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("scripts_before", $context)) ? (_twig_default_filter(($context["scripts_before"] ?? $this->getContext($context, "scripts_before")), "scripts_before")) : ("scripts_before")), array());
        // line 20
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block__requirejs_scripts_after_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_requirejs_scripts_after_widget"));

        // line 24
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("scripts_after", $context)) ? (_twig_default_filter(($context["scripts_after"] ?? $this->getContext($context, "scripts_after")), "scripts_after")) : ("scripts_after")), array());
        // line 25
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block__page_header_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_header_widget"));

        // line 29
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " page-header"));
        // line 32
        echo "
    <div ";
        // line 33
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 34
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block__page_title_container_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_title_container_widget"));

        // line 39
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => (" page-title-wrapper" . ((        // line 40
($context["class_prefix"] ?? $this->getContext($context, "class_prefix"))) ? (" {{ class_prefix }}-page-title-wrapper") : ("")))));
        // line 42
        echo "    ";
        $context["content"] = twig_trim_filter($this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget'));
        // line 43
        echo "    ";
        if (twig_length_filter($this->env, ($context["content"] ?? $this->getContext($context, "content")))) {
            // line 44
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">";
            echo ($context["content"] ?? $this->getContext($context, "content"));
            echo "</div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block__page_title_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_title_widget"));

        // line 49
        echo "    ";
        $context["additionalClasses"] = array("classPrefix" => ((        // line 50
($context["class_prefix"] ?? $this->getContext($context, "class_prefix"))) ? (" {{ class_prefix }}-page-title") : ("")), "hasActions" => ((        // line 51
array_key_exists("hasActions", $context)) ? (" page-title--has-actions") : ("")));
        // line 53
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => ((" page-title" . $this->getAttribute(        // line 54
($context["additionalClasses"] ?? $this->getContext($context, "additionalClasses")), "classPrefix", array())) . $this->getAttribute(($context["additionalClasses"] ?? $this->getContext($context, "additionalClasses")), "hasActions", array()))));
        // line 56
        echo "    ";
        $context["content"] = twig_trim_filter($this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget'));
        // line 57
        echo "    ";
        if (twig_length_filter($this->env, ($context["content"] ?? $this->getContext($context, "content")))) {
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
                echo twig_escape_filter($this->env, ($context["titleIcon"] ?? $this->getContext($context, "titleIcon")), "html", null, true);
                echo "\"></i>
            </span>
            ";
            }
            // line 64
            echo "            <span class=\"page-title__text\">";
            echo ($context["content"] ?? $this->getContext($context, "content"));
            echo "</span>
        </h1>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block__notification_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_notification_widget"));

        // line 70
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("id" => "flash-messages", "~class" => " notification-flash-container", "data-sticky-target" => "top-sticky-panel", "data-sticky" => array("isSticky" => true, "placeholderId" => "sticky-element-notification")));
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "id", array()), "html", null, true);
        echo "'
                });
                ";
        // line 86
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 87
            echo "                \$(function() {
                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 99
    public function block__sticky_element_notification_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_sticky_element_notification_widget"));

        // line 100
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("id" => "sticky-element-notification"));
        // line 103
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 106
    public function block__sticky_header_row_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_sticky_header_row_widget"));

        // line 107
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("id" => "sticky-header-row"));
        // line 110
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block__page_footer_container_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_footer_container_widget"));

        // line 114
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " page-area-container"));
        // line 117
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  392 => 117,  389 => 114,  383 => 113,  371 => 110,  368 => 107,  362 => 106,  350 => 103,  347 => 100,  341 => 99,  332 => 95,  328 => 93,  322 => 92,  311 => 90,  306 => 89,  302 => 88,  299 => 87,  297 => 86,  292 => 84,  283 => 79,  280 => 70,  274 => 69,  262 => 64,  256 => 61,  253 => 60,  251 => 59,  246 => 58,  243 => 57,  240 => 56,  238 => 54,  236 => 53,  234 => 51,  233 => 50,  231 => 49,  225 => 48,  212 => 44,  209 => 43,  206 => 42,  204 => 40,  202 => 39,  196 => 38,  186 => 34,  182 => 33,  179 => 32,  176 => 29,  170 => 28,  160 => 25,  157 => 24,  151 => 23,  144 => 20,  141 => 19,  129 => 18,  124 => 17,  118 => 16,  110 => 13,  108 => 10,  106 => 8,  100 => 5,  94 => 3,  91 => 2,  85 => 1,  78 => 113,  75 => 112,  73 => 106,  70 => 105,  68 => 99,  65 => 98,  63 => 69,  60 => 68,  58 => 48,  55 => 47,  53 => 38,  50 => 37,  48 => 28,  45 => 27,  43 => 23,  40 => 22,  38 => 16,  35 => 15,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block root_widget %}
    {% if not oro_is_hash_navigation() %}
        <!DOCTYPE {{ doctype|default('html') }}>
        <html>
        {{ block_widget(block) }}
        </html>
    {% else %}
        {% include 'OroNavigationBundle:HashNav:hashNavAjax.html.twig' with {
            'data': {
                'content': block_widget(blocks.wrapper),
            }
        } %}
    {% endif %}
{% endblock %}

{% block _scripts_before_widget %}
    {{ block_widget(block) }}
    {% block scripts_before %}
        {% placeholder scripts_before %}
    {% endblock %}
{% endblock %}

{% block _requirejs_scripts_after_widget %}
    {% placeholder scripts_after %}
    {{ block_widget(block) }}
{% endblock %}

{% block _page_header_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-header'
    }) %}

    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _page_title_container_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-title-wrapper' ~ (class_prefix ? ' {{ class_prefix }}-page-title-wrapper')
    }) %}
    {% set content = block_widget(block)|trim %}
    {% if content|length %}
        <div{{ block('block_attributes') }}>{{ content|raw }}</div>
    {% endif %}
{% endblock %}

{% block _page_title_widget %}
    {% set additionalClasses = {
        classPrefix: class_prefix ? ' {{ class_prefix }}-page-title',
        hasActions: hasActions is defined ? ' page-title--has-actions'
    } %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-title' ~ additionalClasses.classPrefix ~ additionalClasses.hasActions
    }) %}
    {% set content = block_widget(block)|trim %}
    {% if content|length %}
        <h1{{ block('block_attributes') }}>
            {% if titleIcon is defined %}
            <span class=\"badge\">
                <i class=\"{{ titleIcon }}\"></i>
            </span>
            {% endif %}
            <span class=\"page-title__text\">{{ content|raw }}</span>
        </h1>
    {% endif %}
{% endblock %}

{% block _notification_widget %}
    {% set attr = layout_attr_defaults(attr, {
        'id': 'flash-messages',
        '~class': ' notification-flash-container',
        'data-sticky-target': 'top-sticky-panel',
        'data-sticky': {
            isSticky: true,
            placeholderId: 'sticky-element-notification'
        }
    }) %}
    <div{{ block('block_attributes') }}></div>
    <script type=\"text/javascript\">
        require(['jquery', 'oroui/js/messenger'],
            function(\$, messenger, template) {
                messenger.setup({
                    container: '#{{ attr.id }}'
                });
                {% if app.session.flashbag.peekAll|length > 0 %}
                \$(function() {
                    {% for type, messages in app.session.flashbag.all %}
                        {% for message in messages %}
                            messenger.notificationFlashMessage({{ type|json_encode|raw }}, {{ message|trans|json_encode|raw }});
                        {% endfor %}
                    {% endfor %}
                });
                {% endif %}
            });
    </script>
{% endblock %}

{% block _sticky_element_notification_widget %}
    {% set attr = layout_attr_defaults(attr, {
    'id': 'sticky-element-notification'
    }) %}
    <div {{ block('block_attributes') }}>{{ block_widget(block) }}</div>
{% endblock %}

{% block _sticky_header_row_widget %}
    {% set attr = layout_attr_defaults(attr, {
    'id': 'sticky-header-row'
    }) %}
    <div {{ block('block_attributes') }}>{{ block_widget(block) }}</div>
{% endblock %}

{% block _page_footer_container_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': \" page-area-container\"
    }) %}
    {{ parent_block_widget(block) }}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/layout.html.twig");
    }
}
