<?php

/* OroCalendarBundle::invitations.html.twig */
class __TwigTemplate_cff06302f2eb86f25fe86fa514746c666fa990ffffde0fa1a5926cd346936c89 extends Twig_Template
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
        // line 13
        echo "
";
        // line 43
        echo "
";
        // line 53
        echo "
";
        // line 80
        echo "
";
    }

    // line 2
    public function getcalendar_event_invitation($__parentEvent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parentEvent" => $__parentEvent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    <div class=\"row-fluid\">
        <div class=\"responsive-block\">
            <ul class=\"user-status-list list-group\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parentEvent"] ?? null), "attendees", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attendee"]) {
                // line 7
                echo "                    ";
                echo $this->getAttribute($this, "build_invitation_link", array(0 => $context["attendee"]), "method");
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </ul>
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

    // line 15
    public function getbuild_invitation_link($__attendee__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attendee" => $__attendee__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle::invitations.html.twig", 16);
            // line 17
            echo "        ";
            $context["invitationStatus"] = $this->getAttribute(($context["attendee"] ?? null), "statusCode", array());
            // line 18
            echo "        ";
            $context["invitationClass"] = $this->getAttribute($this, "get_invitatition_status_class", array(0 => ($context["invitationStatus"] ?? null)), "method");
            // line 19
            echo "        <li class=\"list-group-item\">
            <i ";
            // line 20
            if (($context["invitationClass"] ?? null)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, ($context["invitationClass"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["attendee"] ?? null), "status", array()), "name", array()), "html", null, true);
                echo "\"";
            }
            echo "></i>
            <span class=\"list-group-item-text\">
                ";
            // line 22
            $context["avatar"] = (($this->getAttribute(($context["attendee"] ?? null), "user", array())) ? ($this->getAttribute($this->getAttribute(($context["attendee"] ?? null), "user", array()), "avatar", array())) : (""));
            // line 23
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, ((($context["avatar"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFilteredImageUrl(($context["avatar"] ?? null), "avatar_xsmall")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"))), "html", null, true);
            echo "\" />
                ";
            // line 24
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_user_view") && $this->getAttribute(($context["attendee"] ?? null), "user", array()))) {
                // line 25
                echo "                    ";
                echo $context["UI"]->getlink(array("label" => _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(                // line 26
($context["attendee"] ?? null), "user", array())), "N/A"), "path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_view", array("id" => $this->getAttribute($this->getAttribute(                // line 27
($context["attendee"] ?? null), "user", array()), "id", array())))));
                // line 28
                echo "
                ";
            } else {
                // line 30
                echo "                    ";
                $context["attendeeName"] = $this->getAttribute(($context["attendee"] ?? null), "displayName", array());
                // line 31
                echo "                    ";
                if ($this->getAttribute(($context["attendee"] ?? null), "email", array())) {
                    // line 32
                    echo "                        ";
                    $context["attendeeName"] = ((($context["attendeeName"] ?? null)) ? ((((($context["attendeeName"] ?? null) . " (") . $this->getAttribute(($context["attendee"] ?? null), "email", array())) . ")")) : ($this->getAttribute(($context["attendee"] ?? null), "email", array())));
                    // line 33
                    echo "                    ";
                }
                // line 34
                echo "                    ";
                echo twig_escape_filter($this->env, ($context["attendeeName"] ?? null), "html", null, true);
                echo "
                ";
            }
            // line 36
            echo "                ";
            $context["typeId"] = (($this->getAttribute(($context["attendee"] ?? null), "type", array())) ? ($this->getAttribute($this->getAttribute(($context["attendee"] ?? null), "type", array()), "id", array())) : (null));
            // line 37
            if (($context["typeId"] ?? null)) {
                // line 38
                echo "                - ";
                echo $this->getAttribute($this, "get_attendee_type", array(0 => ($context["typeId"] ?? null)), "method");
                echo "
                ";
            }
            // line 40
            echo "</span>
        </li>
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

    // line 44
    public function getget_invitatition_badge_class($__invitationStatus__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "invitationStatus" => $__invitationStatus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            if ((($context["invitationStatus"] ?? null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_TENTATIVE"))) {
                // line 46
                echo "tentatively";
            } elseif ((            // line 47
($context["invitationStatus"] ?? null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_ACCEPTED"))) {
                // line 48
                echo "enabled";
            } elseif ((            // line 49
($context["invitationStatus"] ?? null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED"))) {
                // line 50
                echo "disabled";
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

    // line 54
    public function getget_invitatition_status_class($__invitationStatus__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "invitationStatus" => $__invitationStatus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 55
            if ((($context["invitationStatus"] ?? null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_NONE"))) {
                // line 56
                echo "fa-reply";
            } elseif ((            // line 57
($context["invitationStatus"] ?? null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_TENTATIVE"))) {
                // line 58
                echo "fa-question";
            } elseif ((            // line 59
($context["invitationStatus"] ?? null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_ACCEPTED"))) {
                // line 60
                echo "fa-check";
            } elseif ((            // line 61
($context["invitationStatus"] ?? null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED"))) {
                // line 62
                echo "fa-close";
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

    // line 66
    public function getcalendar_event_invitation_status($__statusCode__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "statusCode" => $__statusCode__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("oro.calendar.calendarevent.statuses." . ($context["statusCode"] ?? null)) . ".label")), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 70
    public function getcalendar_event_invitation_going_status($__statusCode__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "statusCode" => $__statusCode__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("oro.calendar.calendarevent.action.going_status." . ($context["statusCode"] ?? null)) . ".label")), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 74
    public function getnotify_attendees_component(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 75
            echo "    <div style=\"display: none\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orocalendar/js/app/views/attendee-notifier-view")), "html", null, true);
            echo "\">
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

    // line 81
    public function getget_attendee_type($__typeId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "typeId" => $__typeId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 82
            if ((($context["typeId"] ?? null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::TYPE_ORGANIZER"))) {
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.attendee.type.organizer.label"), "html", null, true);
            } elseif ((            // line 84
($context["typeId"] ?? null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::TYPE_OPTIONAL"))) {
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.attendee.type.optional.label"), "html", null, true);
            } elseif ((            // line 86
($context["typeId"] ?? null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::TYPE_REQUIRED"))) {
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.attendee.type.required.label"), "html", null, true);
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
        return "OroCalendarBundle::invitations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 87,  367 => 86,  365 => 85,  363 => 84,  361 => 83,  359 => 82,  347 => 81,  329 => 77,  325 => 75,  314 => 74,  299 => 71,  287 => 70,  272 => 67,  260 => 66,  244 => 62,  242 => 61,  240 => 60,  238 => 59,  236 => 58,  234 => 57,  232 => 56,  230 => 55,  218 => 54,  202 => 50,  200 => 49,  198 => 48,  196 => 47,  194 => 46,  192 => 45,  180 => 44,  163 => 40,  157 => 38,  155 => 37,  152 => 36,  146 => 34,  143 => 33,  140 => 32,  137 => 31,  134 => 30,  130 => 28,  128 => 27,  127 => 26,  125 => 25,  123 => 24,  118 => 23,  116 => 22,  105 => 20,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  81 => 15,  63 => 9,  54 => 7,  50 => 6,  45 => 3,  33 => 2,  28 => 80,  25 => 53,  22 => 43,  19 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle::invitations.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/calendar-bundle/Resources/views/invitations.html.twig");
    }
}
