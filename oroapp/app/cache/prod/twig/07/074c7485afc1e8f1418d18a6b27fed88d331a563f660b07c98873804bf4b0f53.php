<?php

/* OroActivityContactBundle:ActivityContact/widget:metrics.html.twig */
class __TwigTemplate_f3e14f6479372c59943d6c0e3f32c11bda3e742d9e373f2bf8093b0a9ebce203 extends Twig_Template
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
        // line 1
        $context["entityClassName"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(($context["entity"] ?? null), true);
        // line 2
        echo "
<div id=\"activity-count-";
        // line 3
        echo twig_escape_filter($this->env, ((($context["entityClassName"] ?? null) . "-") . $this->getAttribute(($context["entity"] ?? null), "id", array())), "html", null, true);
        echo "\" class=\"activity-contact-info-title\">
    ";
        // line 4
        echo $this->getAttribute($this, "last_contacted_time", array(0 => ($context["data"] ?? null), 1 => ($context["entity"] ?? null)), "method");
        echo "
</div>

<script type=\"text/javascript\">
    require(['jquery', 'routing', 'oroui/js/mediator'], function (\$, routing, mediator) {
        \$(function () {
            var reloadStatistics = function () {
                \$.ajax({
                    url: routing.generate('oro_activity_contact_metrics', {
                        entityClass: '";
        // line 13
        echo twig_escape_filter($this->env, ($context["entityClassName"] ?? null), "html", null, true);
        echo "',
                        entityId: '";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "id", array()), "html", null, true);
        echo "'
                    }),
                    type: 'GET',
                    success: function (response) {
                        \$('#activity-count-' + '";
        // line 18
        echo twig_escape_filter($this->env, ((($context["entityClassName"] ?? null) . "-") . $this->getAttribute(($context["entity"] ?? null), "id", array())), "html", null, true);
        echo "').html(
                            \$(response).filter('#activity-count-' + '";
        // line 19
        echo twig_escape_filter($this->env, ((($context["entityClassName"] ?? null) . "-") . $this->getAttribute(($context["entity"] ?? null), "id", array())), "html", null, true);
        echo "').html()
                        );
                    }
                })
            };

            mediator.on(
                'widget:doRefresh:activity-list-widget ' +
                'widget_success:activity_list:refresh ' +
                'widget_success:activity_list:item:delete ' +
                'widget_success:activity_list:item:update',
                reloadStatistics
            );
            mediator.once('page:beforeChange', function () {
                mediator.off(
                    'widget:doRefresh:activity-list-widget ' +
                    'widget_success:activity_list:refresh ' +
                    'widget_success:activity_list:item:delete ' +
                    'widget_success:activity_list:item:update',
                    reloadStatistics
                );
            });
        });
    });
</script>

";
    }

    // line 45
    public function getlast_contacted_time($__data__ = null, $__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 46
            echo "    ";
            $context["activity_scope_class"] = "Oro\\Bundle\\ActivityContactBundle\\EntityConfig\\ActivityScope";
            // line 47
            echo "
    ";
            // line 48
            $context["last_contact_date_key"] = twig_constant((($context["activity_scope_class"] ?? null) . "::LAST_CONTACT_DATE"));
            // line 49
            echo "    ";
            $context["last_contact_date_in_key"] = twig_constant((($context["activity_scope_class"] ?? null) . "::LAST_CONTACT_DATE_IN"));
            // line 50
            echo "    ";
            $context["last_contact_date_out_key"] = twig_constant((($context["activity_scope_class"] ?? null) . "::LAST_CONTACT_DATE_OUT"));
            // line 51
            echo "    ";
            $context["contact_count_key"] = twig_constant((($context["activity_scope_class"] ?? null) . "::CONTACT_COUNT"));
            // line 52
            echo "
    ";
            // line 53
            if (($this->getAttribute(($context["data"] ?? null), ($context["contact_count_key"] ?? null), array(), "array", true, true) && ($this->getAttribute(($context["data"] ?? null), ($context["contact_count_key"] ?? null), array(), "array") > 0))) {
                // line 54
                echo "        ";
                $context["last_datetime"] = "";
                // line 55
                echo "        ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), ($context["last_contact_date_key"] ?? null))) {
                    // line 56
                    echo "            ";
                    $context["last_datetime"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["data"] ?? null), ($context["last_contact_date_key"] ?? null), array(), "array")), "N/A");
                    // line 57
                    echo "        ";
                }
                // line 58
                echo "        ";
                $context["direction"] = (("<i class=\"fa-sign-" . ((($this->getAttribute(                // line 59
($context["data"] ?? null), ($context["last_contact_date_in_key"] ?? null), array(), "array") >= $this->getAttribute(($context["data"] ?? null), ($context["last_contact_date_out_key"] ?? null), array(), "array"))) ? ("in") : ("out"))) . "\"></i>");
                // line 62
                echo "    <ul class=\"inline\">
        ";
                // line 63
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), ($context["contact_count_key"] ?? null))) {
                    // line 64
                    echo "            <li>
            ";
                    // line 65
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity_contact.info_title_times", array("{{ total_contacted }}" => (($this->getAttribute(                    // line 66
($context["data"] ?? null), ($context["contact_count_key"] ?? null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), ($context["contact_count_key"] ?? null), array(), "array"), 0)) : (0))));
                    // line 67
                    echo "
            </li>
        ";
                }
                // line 70
                echo "        <li style=\"padding-right:0\">
        ";
                // line 71
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity_contact.info_title_last", array("{{ direction }}" =>                 // line 72
($context["direction"] ?? null), "{{ last_datetime }}" =>                 // line 73
($context["last_datetime"] ?? null)));
                // line 74
                echo "
        </li>
    </ul>
    ";
            } else {
                // line 78
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.activity_contact.info_title_no_data"), "html", null, true);
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
        return "OroActivityContactBundle:ActivityContact/widget:metrics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 78,  160 => 74,  158 => 73,  157 => 72,  156 => 71,  153 => 70,  148 => 67,  146 => 66,  145 => 65,  142 => 64,  140 => 63,  137 => 62,  135 => 59,  133 => 58,  130 => 57,  127 => 56,  124 => 55,  121 => 54,  119 => 53,  116 => 52,  113 => 51,  110 => 50,  107 => 49,  105 => 48,  102 => 47,  99 => 46,  86 => 45,  55 => 19,  51 => 18,  44 => 14,  40 => 13,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActivityContactBundle:ActivityContact/widget:metrics.html.twig", "");
    }
}
