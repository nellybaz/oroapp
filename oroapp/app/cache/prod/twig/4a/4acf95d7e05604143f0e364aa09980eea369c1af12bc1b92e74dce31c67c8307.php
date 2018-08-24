<?php

/* OroCronBundle::macros.html.twig */
class __TwigTemplate_1da5f478fdedd79075e708376b2c4e5420622fd8f0a722fd8ddecfe6384165e8 extends Twig_Template
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
    }

    // line 1
    public function getscheduleIntervalsInfo($__schedules__ = null, $__labels__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "schedules" => $__schedules__,
            "labels" => $__labels__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["defaultLabels"] = array("wasActivated" => "oro.cron.schedule_interval.was_activated", "activeNow" => "oro.cron.schedule_interval.active_now", "notActiveNow" => "oro.cron.schedule_interval.not_active_now", "willBeActivated" => "oro.cron.schedule_interval.will_be_acitivated", "wasDeactivated" => "oro.cron.schedule_interval.was_deactivated", "willBeDeactivated" => "oro.cron.schedule_interval.will_be_deacitivated");
            // line 10
            echo "    ";
            $context["labels"] = twig_array_merge(($context["defaultLabels"] ?? null), ($context["labels"] ?? null));
            // line 11
            echo "    ";
            $context["now"] = twig_date_converter($this->env, "now", "UTC");
            // line 12
            echo "    <ul>
        ";
            // line 13
            $context["activityShown"] = false;
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schedules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
                // line 15
                echo "            ";
                if (($this->getAttribute($context["schedule"], "activeAt", array()) < ($context["now"] ?? null))) {
                    // line 16
                    echo "                ";
                    if ($this->getAttribute($context["schedule"], "activeAt", array())) {
                        // line 17
                        echo "                    <li>
                        ";
                        // line 18
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["labels"] ?? null), "wasActivated", array()), array("%date%" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($context["schedule"], "activeAt", array())))), "html", null, true);
                        echo "
                    </li>
                ";
                    }
                    // line 21
                    echo "
                ";
                    // line 22
                    if (( !$this->getAttribute($context["schedule"], "deactivateAt", array()) || ($this->getAttribute($context["schedule"], "deactivateAt", array()) > ($context["now"] ?? null)))) {
                        // line 23
                        echo "                    ";
                        $context["activityShown"] = true;
                        // line 24
                        echo "                    <li>
                        ";
                        // line 25
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["labels"] ?? null), "activeNow", array())), "html", null, true);
                        echo "
                    </li>
                ";
                    }
                    // line 28
                    echo "            ";
                }
                // line 29
                echo "
            ";
                // line 30
                if (($this->getAttribute($context["schedule"], "activeAt", array()) > ($context["now"] ?? null))) {
                    // line 31
                    echo "                ";
                    if ( !($context["activityShown"] ?? null)) {
                        // line 32
                        echo "                    ";
                        $context["activityShown"] = true;
                        // line 33
                        echo "                    <li>
                        ";
                        // line 34
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["labels"] ?? null), "notActiveNow", array())), "html", null, true);
                        echo "
                    </li>
                ";
                    }
                    // line 37
                    echo "                <li>
                    ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["labels"] ?? null), "willBeActivated", array()), array("%date%" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($context["schedule"], "activeAt", array())))), "html", null, true);
                    echo "
                </li>
            ";
                }
                // line 41
                echo "
            ";
                // line 42
                if ($this->getAttribute($context["schedule"], "deactivateAt", array())) {
                    // line 43
                    echo "                ";
                    if (($this->getAttribute($context["schedule"], "deactivateAt", array()) < ($context["now"] ?? null))) {
                        // line 44
                        echo "                    <li>
                        ";
                        // line 45
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["labels"] ?? null), "wasDeactivated", array()), array("%date%" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($context["schedule"], "deactivateAt", array())))), "html", null, true);
                        echo "
                    </li>
                ";
                    } else {
                        // line 48
                        echo "                    <li>
                        ";
                        // line 49
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["labels"] ?? null), "willBeDeactivated", array()), array("%date%" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($context["schedule"], "deactivateAt", array())))), "html", null, true);
                        echo "
                    </li>
                ";
                    }
                    // line 52
                    echo "            ";
                }
                // line 53
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
        ";
            // line 55
            if ( !($context["activityShown"] ?? null)) {
                // line 56
                echo "            <li>
                ";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["labels"] ?? null), "notActiveNow", array())), "html", null, true);
                echo "
            </li>
        ";
            }
            // line 60
            echo "    </ul>
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
        return "OroCronBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  160 => 57,  157 => 56,  155 => 55,  152 => 54,  146 => 53,  143 => 52,  137 => 49,  134 => 48,  128 => 45,  125 => 44,  122 => 43,  120 => 42,  117 => 41,  111 => 38,  108 => 37,  102 => 34,  99 => 33,  96 => 32,  93 => 31,  91 => 30,  88 => 29,  85 => 28,  79 => 25,  76 => 24,  73 => 23,  71 => 22,  68 => 21,  62 => 18,  59 => 17,  56 => 16,  53 => 15,  48 => 14,  46 => 13,  43 => 12,  40 => 11,  37 => 10,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCronBundle::macros.html.twig", "");
    }
}
