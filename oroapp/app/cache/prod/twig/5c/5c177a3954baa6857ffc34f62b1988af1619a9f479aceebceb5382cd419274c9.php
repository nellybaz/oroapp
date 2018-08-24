<?php

/* OroCalendarBundle::templates.html.twig */
class __TwigTemplate_53f7f2673e809ff56663b00d5788f0b6950db282648879d4f2506ba7c07822b1 extends Twig_Template
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
        // line 123
        echo "
";
    }

    // line 25
    public function getrawLink($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "path", array()), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parameters"] ?? null), "data", array()));
            foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                echo " data-";
                echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["parameters"] ?? null), "label", array())), "html", null, true);
            echo "</a>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 29
            echo "    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1
    public function getcalendar_event_view_template($__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
<script type=\"text/template\" id=\"activity-context-activity-list\">
    <div class=\"context-item\" style=\"border: none\" data-cid=\"<%= entity.cid %>\">
        <span data-id=\"<%- entity.get('targetId') %>\">
            <span class=\"<%- entity.get('icon') %>\"></span>

            <% if (entity.get('link')) { %>
                <a href=\"<%- entity.get('link') %>\">
                    <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
                </a>
            <% } else { %>
                <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
            <% } %>
            <% if (editable) { %>
                <i class=\"fa-close\"></i>
            <% } %>
        </span>
    </div>
</script>

<script type=\"text/html\" id=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 23
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle::templates.html.twig", 23);
            // line 24
            echo "    ";
            $context["invitations"] = $this->loadTemplate("OroCalendarBundle::invitations.html.twig", "OroCalendarBundle::templates.html.twig", 24);
            // line 25
            echo "    ";
            // line 30
            echo "    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
            // line 33
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.title.label"), "<%= formatter.string(title) %>");
            echo "
                ";
            // line 34
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.description.label"), "<%= formatter.html(description) %>");
            echo "
                ";
            // line 35
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.start.label"), "<%= formatter.dateTime(start) %>");
            echo "
                ";
            // line 36
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.end.label"), "<%= formatter.dateTime(end) %>");
            echo "
                ";
            // line 37
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.all_day.label"), "<%= formatter.bool(allDay) %>");
            echo "
                ";
            // line 38
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.organizer.label"), "<%= organizerHTML %>");
            echo "
                <% if (recurrence) { %>
                    ";
            // line 40
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.recurrence.label"), "<%= formatter.string(recurrencePattern) %>");
            echo "
                <% } %>
                <% if (recurringEventId && recurrencePattern) { %>
                    ";
            // line 43
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.recurrence.exception.label"), "<%= formatter.string(recurrencePattern) %>");
            echo "
                <% } %>

                <% var attendeesView = _.map(attendees, function (attendee) {
                    var attendeeName = attendee.displayName;
                    if (attendee.fullName) {
                        attendeeName = attendee.fullName;
                    }

                    if (attendee.email) {
                        attendeeName = attendeeName ? attendeeName + ' (' + attendee.email + ')' : attendee.email;
                    }

                    return attendeeName;
                }); %>
                <% if (attendeesView.length > 0) { %>
                    ";
            // line 59
            echo $context["UI"]->getrenderAttribute($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.attendees.label"), "<div class=\"calendar-event-attendees-widget\"><%= attendeesView.join(\", \") %></div>");
            echo "
                <% } %>
                <% if (editableInvitationStatus) { %>
                    <% var properties = []; %>
                    ";
            // line 63
            $context["statuses"] = array(0 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_ACCEPTED"), 1 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_TENTATIVE"), 2 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED"));
            // line 68
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 69
                echo "                        <% if (invitationStatus !== \"";
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "\") { %>
                            <% var link='";
                // line 70
                echo $this->getAttribute(                // line 71
$this, "rawLink", array(0 => array("label" =>                 // line 72
$context["invitations"]->getcalendar_event_invitation_going_status($context["status"]), "title" =>                 // line 73
$context["invitations"]->getcalendar_event_invitation_going_status($context["status"]), "path" => "%path%", "data" => array("page-component-module" => "oroui/js/app/components/view-component", "page-component-options" => twig_jsonencode_filter(array("view" => "orocalendar/js/app/views/change-status-view", "triggerEventName" => "widget_success:attendee_status:change"))))), "method");
                // line 83
                echo "';
                                link = link.replace('%path%', invitationUrls[\"";
                // line 84
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "\"]);
                                properties.push(link);
                            %>
                        <% } else { %>
                            <% properties.push('";
                // line 88
                echo $context["invitations"]->getcalendar_event_invitation_going_status($context["status"]);
                echo "'); %>
                        <% } %>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                    <div class=\"invitation-response\">
                        ";
            // line 92
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.action.going_status.label"), "<%= formatter.html(properties.join(\"&nbsp\")) %>");
            echo "
                    </div>
                <% } %>

                <div class=\"activity-context-activity\">
                ";
            // line 97
            echo $context["UI"]->getrenderAttribute($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity.contexts.label"), "<div class=\"activity-context-activity-items\"></div>");
            echo "
                </div>
                ";
            // line 99
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("calendar_event_widget_view_additional_properties", $context)) ? (_twig_default_filter(($context["calendar_event_widget_view_additional_properties"] ?? null), "calendar_event_widget_view_additional_properties")) : ("calendar_event_widget_view_additional_properties")), array());
            // line 100
            echo "            </div>
            <div class=\"widget-actions form-actions\" style=\"display: none;\">
                <% if (id != null && removable) { %>
                ";
            // line 103
            echo             // line 104
$context["UI"]->getdeleteButton(array("aCss" => "no-hash", "id" => "btn-remove-calendarevent", "dataMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.delete_event.confirmation"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.delete_event.title"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "data" => array("action-name" => "delete", "url" => "oro_calendar_event_delete")));
            // line 112
            echo "
                <% } %>
                <% if (id == null || (id != null && editable)) { %>
                <button class=\"btn\" type=\"button\" data-action-name=\"edit\">";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.edit"), "html", null, true);
            echo "</button>
                <% } %>
                ";
            // line 117
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("calendar_event_widget_view_actions_jstemplate", $context)) ? (_twig_default_filter(($context["calendar_event_widget_view_actions_jstemplate"] ?? null), "calendar_event_widget_view_actions_jstemplate")) : ("calendar_event_widget_view_actions_jstemplate")), array());
            // line 118
            echo "            </div>
        </div>
    </div>
</script>
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

    // line 124
    public function getcalendar_event_form_template($__id__ = null, $__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 125
            echo "<script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 126
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle::templates.html.twig", 126);
            // line 127
            echo "    ";
            $context["invitations"] = $this->loadTemplate("OroCalendarBundle::invitations.html.twig", "OroCalendarBundle::templates.html.twig", 127);
            // line 128
            echo "    ";
            $context["calendarEventDateRange"] = array("module" => "orocalendar/js/app/components/calendar-event-date-range-component", "name" => "calendar-event-date-range", "options" => array("nativeMode" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()));
            // line 135
            echo "    ";
            $context["calendarEventRecurrence"] = array("module" => "orocalendar/js/app/components/calendar-event-recurrence-component", "name" => "calendar-event-recurrence", "options" => array("inputNamePrefixes" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 139
($context["form"] ?? null), "recurrence", array()), "vars", array()), "full_name", array())));
            // line 142
            echo "    ";
            ob_start();
            // line 143
            echo "        <div ";
            echo $context["UI"]->getrenderPageComponentAttributes(($context["calendarEventDateRange"] ?? null));
            echo ">
            ";
            // line 144
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "start", array()), 'row');
            echo "
            ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "end", array()), 'row');
            echo "
            ";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "allDay", array()), 'row');
            echo "
        </div>
        <% if (editAsException || recurringEventId) { %>
            ";
            // line 149
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.recurrence.exception.label"), "<%= recurrencePattern %>");
            // line 152
            echo "
        <% } else { %>
            <div ";
            // line 154
            echo $context["UI"]->getrenderPageComponentAttributes(($context["calendarEventRecurrence"] ?? null));
            echo "></div>
        <% } %>
    ";
            $context["rightColumn"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 157
            echo "    ";
            ob_start();
            // line 158
            echo "        ";
            if ($this->getAttribute(($context["form"] ?? null), "calendar", array(), "any", true, true)) {
                // line 159
                echo "            <% if (!id) { %>
                ";
                // line 160
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "calendar", array()), 'row');
                echo "
            <% } %>
        ";
            }
            // line 163
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'row');
            echo "
        ";
            // line 164
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row');
            echo "
        ";
            // line 165
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "backgroundColor", array()), 'row');
            echo "
        ";
            // line 166
            if ($this->getAttribute(($context["form"] ?? null), "calendarUid", array(), "any", true, true)) {
                // line 167
                echo "            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "calendarUid", array()), 'row');
                echo "
        ";
            }
            // line 169
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attendees", array()), 'row');
            echo "
        <% if (!recurrence) { %>
            ";
            // line 171
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reminders", array()), 'row');
            echo "
        <% } %>
        ";
            // line 173
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "notifyAttendees", array()), 'row');
            echo "
        ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                    // line 175
                    echo "            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
                    echo "
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "        ";
            echo $context["invitations"]->getnotify_attendees_component();
            echo "
    ";
            $context["leftColumn"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 179
            echo "
    <div class=\"widget-content\">
        <div class=\"alert alert-error\" style=\"display: none;\"></div>
        <div class=\"form-container\">
            <form id=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"#\">
                <fieldset class=\"form form-horizontal\">
                    <div class=\"span6\">
                        ";
            // line 186
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->prepareJsTemplateContent(($context["leftColumn"] ?? null));
            echo "
                    </div>
                    <div class=\"span6\">
                        ";
            // line 189
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->prepareJsTemplateContent(($context["rightColumn"] ?? null));
            echo "
                    </div>
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <% if (id != null && removable) { %>
                        ";
            // line 193
            echo             // line 194
$context["UI"]->getdeleteButton(array("aCss" => "no-hash", "id" => "btn-remove-calendarevent", "dataMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.delete_event.confirmation"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.delete_event.title"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "data" => array("action-name" => "delete", "url" => "oro_calendar_event_delete")));
            // line 202
            echo "
                        <% } %>
                        <button class=\"btn\" type=\"reset\">";
            // line 204
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <% if (id == null || (id != null && editable)) { %>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"), "html", null, true);
            echo "</button>
                        <% } %>
                    </div>
                </fieldset>
            </form>
        </div>
        ";
            // line 212
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->prepareJsTemplateContent($this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null)));
            echo "
    </div>
</script>
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

    public function getTemplateName()
    {
        return "OroCalendarBundle::templates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 212,  452 => 206,  447 => 204,  443 => 202,  441 => 194,  440 => 193,  433 => 189,  427 => 186,  419 => 183,  413 => 179,  407 => 177,  397 => 175,  392 => 174,  388 => 173,  383 => 171,  377 => 169,  371 => 167,  369 => 166,  365 => 165,  361 => 164,  356 => 163,  350 => 160,  347 => 159,  344 => 158,  341 => 157,  335 => 154,  331 => 152,  329 => 149,  323 => 146,  319 => 145,  315 => 144,  310 => 143,  307 => 142,  305 => 139,  303 => 135,  300 => 128,  297 => 127,  295 => 126,  290 => 125,  277 => 124,  258 => 118,  256 => 117,  251 => 115,  246 => 112,  244 => 104,  243 => 103,  238 => 100,  236 => 99,  231 => 97,  223 => 92,  220 => 91,  211 => 88,  204 => 84,  201 => 83,  199 => 73,  198 => 72,  197 => 71,  196 => 70,  191 => 69,  186 => 68,  184 => 63,  177 => 59,  158 => 43,  152 => 40,  147 => 38,  143 => 37,  139 => 36,  135 => 35,  131 => 34,  127 => 33,  122 => 30,  120 => 25,  117 => 24,  115 => 23,  111 => 22,  89 => 2,  77 => 1,  62 => 29,  39 => 27,  36 => 26,  24 => 25,  19 => 123,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle::templates.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/calendar-bundle/Resources/views/templates.html.twig");
    }
}
