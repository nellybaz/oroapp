<?php

/* OroActivityBundle::macros.html.twig */
class __TwigTemplate_48d37fc859b91282c94692fc79e5fb5018f7139a99d24e417947792bab853bc2 extends Twig_Template
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
        // line 64
        echo "
";
        // line 91
        echo "
";
    }

    // line 6
    public function getactivity_contexts($__entity__ = null, $__target__ = null, $__checkTarget__ = null, $__component__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "target" => $__target__,
            "checkTarget" => $__checkTarget__,
            "component" => $__component__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    <script type=\"text/template\" id=\"activity-context-activity-list\">
        <div class=\"context-item\" style=\"border: none\" data-cid=\"<%- entity.cid %>\">
                <span data-id=\"<%- entity.get('targetId') %>\">
                    <span class=\"<%- entity.get('icon') %>\"></span>
                    <% if (entity.get('link')) { %>
                        <a href=\"<%- entity.get('link') %>\">
                            <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
                        </a>
                    <% } else { %>
                        <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
                    <% }  %>
                    ";
            // line 18
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
                // line 19
                echo "                        <i class=\"fa-close\"></i>
                    ";
            }
            // line 21
            echo "                </span>
        </div>
    </script>

    ";
            // line 25
            if (twig_test_empty(($context["checkTarget"] ?? null))) {
                // line 26
                echo "        ";
                $context["checkTarget"] = false;
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            $context["targetClassNameEncoded"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["target"] ?? null), true);
            // line 30
            echo "    ";
            $context["activityClassAlias"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassAlias(($context["entity"] ?? null), true);
            // line 31
            echo "
    ";
            // line 32
            $context["options"] = array("entityId" => $this->getAttribute(            // line 33
($context["entity"] ?? null), "id", array()), "target" => false, "checkTarget" =>             // line 35
($context["checkTarget"] ?? null), "activityClassAlias" =>             // line 36
($context["activityClassAlias"] ?? null));
            // line 38
            echo "
    ";
            // line 39
            if (($context["checkTarget"] ?? null)) {
                // line 40
                echo "        ";
                $context["targetEntity"] = array("target" => array("id" => $this->getAttribute(                // line 42
($context["target"] ?? null), "id", array()), "className" =>                 // line 43
($context["targetClassNameEncoded"] ?? null)));
                // line 46
                echo "        ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ($context["targetEntity"] ?? null));
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    ";
            // line 49
            $context["component"] = (((array_key_exists("component", $context) && ($context["component"] ?? null))) ? (            // line 50
($context["component"] ?? null)) : ("oroactivity/js/app/components/activity-context-activity-component"));
            // line 52
            echo "
    <div class=\"activity-context-activity\"
         data-page-component-module=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["component"] ?? null), "html", null, true);
            echo "\"
         data-page-component-options=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
            echo "\"
         data-layout=\"separate\">
        <div class=\"activity-context-activity-label\">
            ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.label"), "html", null, true);
            echo "
        </div>
        <div class=\"activity-context-activity-items\">
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 65
    public function getactivity_context_link($__hideText__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "hideText" => $__hideText__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 66
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroActivityBundle::macros.html.twig", 66);
            // line 67
            echo "    <a href=\"#\" title=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.placeholder");
            echo "\"
       data-url=\"<%= routing.generate('oro_activity_context', {'id': relatedActivityId, 'activity': relatedActivityClass }) %>\"
        ";
            // line 69
            echo $context["UI"]->getrenderWidgetDataAttributes(array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "activity-context-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.add_context_entity.label"), "allowMaximize" => true, "allowMinimize" => true, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000, "height" => 600))));
            // line 86
            echo ">
        <i class=\"fa-link hide-text\">";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.placeholder");
            echo "</i>
        ";
            // line 88
            echo ((($context["hideText"] ?? null)) ? ("") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.placeholder")));
            echo "
    </a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function getaddContextButton($__entity__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 94
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
                // line 95
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroActivityBundle::macros.html.twig", 95);
                // line 96
                echo "        ";
                echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_activity_context", array("id" => $this->getAttribute(                // line 99
($context["entity"] ?? null), "id", array()), "activity" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(                // line 100
($context["entity"] ?? null), true))), "aCss" => "no-hash", "iCss" => "fa-link hide-text", "dataId" => $this->getAttribute(                // line 104
($context["entity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.add_context.label"), "widget" => array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "activity-context-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.add_context_entity.label"), "allowMaximize" => true, "allowMinimize" => true, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000, "height" => 600)))));
                // line 124
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroActivityBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 124,  218 => 104,  217 => 100,  216 => 99,  214 => 96,  211 => 95,  209 => 94,  196 => 93,  178 => 88,  174 => 87,  171 => 86,  169 => 69,  163 => 67,  160 => 66,  148 => 65,  127 => 58,  121 => 55,  117 => 54,  113 => 52,  111 => 50,  110 => 49,  107 => 48,  104 => 47,  101 => 46,  99 => 43,  98 => 42,  96 => 40,  94 => 39,  91 => 38,  89 => 36,  88 => 35,  87 => 33,  86 => 32,  83 => 31,  80 => 30,  78 => 29,  75 => 28,  72 => 27,  69 => 26,  67 => 25,  61 => 21,  57 => 19,  55 => 18,  42 => 7,  27 => 6,  22 => 91,  19 => 64,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActivityBundle::macros.html.twig", "");
    }
}
