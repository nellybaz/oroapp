<?php

/* OroEmailBundle::actions.html.twig */
class __TwigTemplate_18a97fb258559c4b030fe7af2f146d77ab3c2300dc2b45845890fa0c691145ab extends Twig_Template
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
        // line 176
        echo "
";
    }

    // line 11
    public function getsendEmailLink($__email__ = null, $__entity__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "email" => $__email__,
            "entity" => $__entity__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_create")) {
                // line 13
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle::actions.html.twig", 13);
                // line 14
                echo $context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_email_create", array("to" =>                 // line 17
($context["email"] ?? null), "entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(                // line 18
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(                // line 19
($context["entity"] ?? null), "id", array()))), "class" => (($this->getAttribute(                // line 21
($context["parameters"] ?? null), "cssClass", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "cssClass", array())) : ("")), "iCss" => (($this->getAttribute(                // line 22
($context["parameters"] ?? null), "iCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "iCss", array())) : ("")), "aCss" => (($this->getAttribute(                // line 23
($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? (($this->getAttribute(($context["parameters"] ?? null), "aCss", array()) . " no-hash")) : ("no-hash")), "label" =>                 // line 24
($context["email"] ?? null), "widget" => array("type" => "dialog", "multiple" => true, "reload-grid-name" => "activity-email-grid", "options" => array("alias" => "email-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000)))));
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

    // line 45
    public function getreplyAllButton($__emailEntity__ = null, $__parameters__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailEntity" => $__emailEntity__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 46
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_create")) {
                // line 47
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle::actions.html.twig", 47);
                // line 48
                $context["routeParameters"] = array("id" => $this->getAttribute(                // line 49
($context["emailEntity"] ?? null), "id", array()));
                // line 51
                if ($this->getAttribute(($context["parameters"] ?? null), "routeParameters", array(), "any", true, true)) {
                    // line 52
                    $context["routeParameters"] = twig_array_merge(($context["routeParameters"] ?? null), $this->getAttribute(($context["parameters"] ?? null), "routeParameters", array()));
                }
                // line 54
                echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_email_reply_all",                 // line 55
($context["routeParameters"] ?? null)), "aCss" => (($this->getAttribute(                // line 56
($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? (($this->getAttribute(($context["parameters"] ?? null), "aCss", array()) . " no-hash")) : ("no-hash")), "iCss" => (($this->getAttribute(                // line 57
($context["parameters"] ?? null), "iCss", array(), "any", true, true)) ? (($this->getAttribute(($context["parameters"] ?? null), "iCss", array()) . " fa-reply-all")) : ("fa-reply-all")), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply_all"), "widget" => array("type" => "dialog", "multiple" => false, "refresh-widget-alias" => "activity-list-widget", "reload-widget-alias" => "thread-view", "options" => array("alias" => "reply-all-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply_all"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000)))));
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

    // line 80
    public function getreplyButton($__emailEntity__ = null, $__parameters__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailEntity" => $__emailEntity__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 81
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_create")) {
                // line 82
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle::actions.html.twig", 82);
                // line 83
                $context["routeParameters"] = array("id" => $this->getAttribute(                // line 84
($context["emailEntity"] ?? null), "id", array()));
                // line 86
                if ($this->getAttribute(($context["parameters"] ?? null), "routeParameters", array(), "any", true, true)) {
                    // line 87
                    $context["routeParameters"] = twig_array_merge(($context["routeParameters"] ?? null), $this->getAttribute(($context["parameters"] ?? null), "routeParameters", array()));
                }
                // line 89
                echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_email_reply",                 // line 90
($context["routeParameters"] ?? null)), "aCss" => (($this->getAttribute(                // line 91
($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? (($this->getAttribute(($context["parameters"] ?? null), "aCss", array()) . " no-hash")) : ("no-hash")), "iCss" => (($this->getAttribute(                // line 92
($context["parameters"] ?? null), "iCss", array(), "any", true, true)) ? (($this->getAttribute(($context["parameters"] ?? null), "iCss", array()) . " fa-reply")) : ("fa-reply")), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply"), "widget" => array("type" => "dialog", "multiple" => false, "refresh-widget-alias" => "activity-list-widget", "reload-widget-alias" => "thread-view", "options" => array("alias" => "reply-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.reply"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000)))));
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

    // line 115
    public function getforwardButton($__emailEntity__ = null, $__parameters__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailEntity" => $__emailEntity__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 116
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_create")) {
                // line 117
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle::actions.html.twig", 117);
                // line 118
                $context["routeParameters"] = array("id" => $this->getAttribute(                // line 119
($context["emailEntity"] ?? null), "id", array()));
                // line 121
                if ($this->getAttribute(($context["parameters"] ?? null), "routeParameters", array(), "any", true, true)) {
                    // line 122
                    $context["routeParameters"] = twig_array_merge(($context["routeParameters"] ?? null), $this->getAttribute(($context["parameters"] ?? null), "routeParameters", array()));
                }
                // line 124
                echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_email_forward",                 // line 125
($context["routeParameters"] ?? null)), "aCss" => (($this->getAttribute(                // line 126
($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? (($this->getAttribute(($context["parameters"] ?? null), "aCss", array()) . " no-hash")) : ("no-hash")), "iCss" => (($this->getAttribute(                // line 127
($context["parameters"] ?? null), "iCss", array(), "any", true, true)) ? (($this->getAttribute(($context["parameters"] ?? null), "iCss", array()) . " fa-mail-forward")) : ("fa-mail-forward")), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.forward"), "widget" => array("type" => "dialog", "multiple" => false, "refresh-widget-alias" => "activity-list-widget", "reload-widget-alias" => "thread-view", "options" => array("alias" => "foward-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.forward"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000)))));
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

    // line 150
    public function getcreateEmailButton($__parameters__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 151
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_create")) {
                // line 152
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle::actions.html.twig", 152);
                // line 153
                echo "        ";
                echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_email_create",                 // line 154
($context["parameters"] ?? null)), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.menu.compose"), "iCss" => "fa-envelope", "widget" => array("type" => "dialog", "multiple" => true, "reload-grid-name" => "user-email-grid", "options" => array("alias" => "email-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000)))));
                // line 173
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

    // line 177
    public function getaddMarkUnreadButton($__emailEntity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailEntity" => $__emailEntity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 178
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_email_user_edit", ($context["emailEntity"] ?? null))) {
                // line 179
                echo "        ";
                $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle::actions.html.twig", 179);
                // line 180
                echo "        ";
                echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_mark_seen", array("id" => $this->getAttribute(                // line 183
($context["emailEntity"] ?? null), "id", array()), "status" => 0)), "dataAttributes" => array("page-component-module" => "oroemail/js/app/components/mark-unread-button", "page-component-options" => twig_jsonencode_filter(array("redirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_user_emails")))), "aCss" => "no-hash", "iCss" => "fa-minus hide-text", "dataId" => $this->getAttribute(                // line 194
($context["emailEntity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.menu.mark_unread.label")));
                // line 196
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
        return "OroEmailBundle::actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 196,  259 => 194,  258 => 183,  256 => 180,  253 => 179,  251 => 178,  239 => 177,  222 => 173,  220 => 154,  218 => 153,  215 => 152,  213 => 151,  201 => 150,  185 => 127,  184 => 126,  183 => 125,  182 => 124,  179 => 122,  177 => 121,  175 => 119,  174 => 118,  171 => 117,  169 => 116,  156 => 115,  140 => 92,  139 => 91,  138 => 90,  137 => 89,  134 => 87,  132 => 86,  130 => 84,  129 => 83,  126 => 82,  124 => 81,  111 => 80,  95 => 57,  94 => 56,  93 => 55,  92 => 54,  89 => 52,  87 => 51,  85 => 49,  84 => 48,  81 => 47,  79 => 46,  66 => 45,  50 => 24,  49 => 23,  48 => 22,  47 => 21,  46 => 19,  45 => 18,  44 => 17,  43 => 14,  40 => 13,  38 => 12,  24 => 11,  19 => 176,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle::actions.html.twig", "");
    }
}
