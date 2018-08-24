<?php

/* OroSalesBundle:Lead/widget:info.html.twig */
class __TwigTemplate_b12efd28078602afbdb0b66f9c68ec34b4cef848c1169f4c501af7a17ddec19e extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSalesBundle:Lead/widget:info.html.twig", 1);
        // line 2
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroSalesBundle:Lead/widget:info.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroSalesBundle:Lead/widget:info.html.twig", 3);
        // line 4
        $context["channel"] = $this->loadTemplate("OroChannelBundle::macros.html.twig", "OroSalesBundle:Lead/widget:info.html.twig", 4);
        // line 5
        $context["sales"] = $this->loadTemplate("OroSalesBundle::macros.html.twig", "OroSalesBundle:Lead/widget:info.html.twig", 5);
        // line 6
        $context["Tag"] = $this->loadTemplate("OroTagBundle::macros.html.twig", "OroSalesBundle:Lead/widget:info.html.twig", 6);
        // line 16
        echo "<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 19
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.first_name.label"), $this->getAttribute(($context["entity"] ?? null), "firstName", array()));
        echo "
            ";
        // line 20
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.last_name.label"), $this->getAttribute(($context["entity"] ?? null), "lastName", array()));
        echo "

            ";
        // line 22
        if ($this->getAttribute(($context["entity"] ?? null), "dataChannel", array(), "array", true, true)) {
            // line 23
            echo "                ";
            echo $context["channel"]->getrenderChannelProperty(($context["entity"] ?? null), "oro.sales.lead.data_channel.label");
            echo "
            ";
        }
        // line 25
        echo "
            ";
        // line 26
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.contact.label"),         // line 28
$context["ui"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "contact", array()), (($this->getAttribute(($context["entity"] ?? null), "contact", array())) ? ($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "contact", array()))) : ("")), "oro_contact_view"));
        // line 29
        echo "
            ";
        // line 30
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.job_title.label"), $this->getAttribute(($context["entity"] ?? null), "jobTitle", array()));
        // line 32
        ob_start();
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "opportunities", array()), "count", array())) {
            // line 34
            $context["opportunityViewGranted"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_sales_opportunity_view");
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "opportunities", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["opportunity"]) {
                // line 36
                if (($context["opportunityViewGranted"] ?? null)) {
                    // line 37
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sales_opportunity_view", array("id" => $this->getAttribute($context["opportunity"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo $context["ui"]->getrenderEntityViewLabel($context["opportunity"], "name", "oro.sales.oportunity.entity_label");
                    echo "</a>";
                } else {
                    // line 39
                    echo $context["ui"]->getrenderEntityViewLabel($context["opportunity"], "name");
                }
                // line 41
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $context["opportunitiesData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 46
        echo $context["sales"]->getrender_customer_info(($context["entity"] ?? null));
        echo "
            ";
        // line 47
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.company_name.label"), $this->getAttribute(($context["entity"] ?? null), "companyName", array()));
        echo "
            ";
        // line 48
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.industry.label"), $this->getAttribute(($context["entity"] ?? null), "industry", array()));
        echo "
            ";
        // line 49
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.number_of_employees.label"), $this->getAttribute(($context["entity"] ?? null), "numberOfEmployees", array()));
        echo "
            ";
        // line 50
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.source.label"), $this->getAttribute(($context["entity"] ?? null), "source", array()));
        echo "

            ";
        // line 52
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "

            ";
        // line 54
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tag.entity_plural_label"), $context["Tag"]->getrenderView(($context["entity"] ?? null)));
        echo "
        </div>";
        // line 57
        ob_start();
        // line 58
        if (($this->getAttribute(($context["entity"] ?? null), "twitter", array()) || $this->getAttribute(($context["entity"] ?? null), "linkedIn", array()))) {
            // line 59
            echo "<ul class=\"list-inline\">
                    ";
            // line 60
            if ($this->getAttribute(($context["entity"] ?? null), "twitter", array())) {
                // line 61
                echo "                        <li>
                            <a class=\"no-hash\" href=\"";
                // line 62
                echo $this->getAttribute($this, "getSocialUrl", array(0 => "twitter", 1 => $this->getAttribute(($context["entity"] ?? null), "twitter", array())), "method");
                echo "\" target=\"_blank\" title=\"Twitter\">
                                <i class=\"fa-twitter\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 67
            echo "                    ";
            if ($this->getAttribute(($context["entity"] ?? null), "linkedIn", array())) {
                // line 68
                echo "                        <li>
                            <a class=\"no-hash\" href=\"";
                // line 69
                echo $this->getAttribute($this, "getSocialUrl", array(0 => "linked_in", 1 => $this->getAttribute(($context["entity"] ?? null), "linkedIn", array())), "method");
                echo "\" target=\"_blank\" title=\"LinkedIn\">
                                <i class=\"fa-linkedin\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 74
            echo "                </ul>";
        }
        $context["socialData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 78
        echo "<div class=\"responsive-block\">
            ";
        // line 79
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.emails.label"), $context["sales"]->getrenderCollectionWithPrimaryElement($this->getAttribute(($context["entity"] ?? null), "emails", array()), true, ($context["entity"] ?? null)));
        echo "
            ";
        // line 80
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.phones.label"), $context["sales"]->getrenderCollectionWithPrimaryElement($this->getAttribute(($context["entity"] ?? null), "phones", array()), false, ($context["entity"] ?? null)));
        echo "
            ";
        // line 81
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.website.label"), (($this->getAttribute(($context["entity"] ?? null), "website", array())) ? ($context["ui"]->getrenderUrl($this->getAttribute(($context["entity"] ?? null), "website", array()), $this->getAttribute(($context["entity"] ?? null), "website", array()), "no-hash")) : (null)));
        echo "
            ";
        // line 82
        echo $context["ui"]->getrenderCollapsibleHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.lead.notes.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->getAttribute(($context["entity"] ?? null), "notes", array())), ($context["entity"] ?? null), "notes");
        echo "
            ";
        // line 83
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.social.label"), ($context["socialData"] ?? null));
        echo "
            ";
        // line 84
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sales.opportunity.entity_label"), ($context["opportunitiesData"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    // line 8
    public function getgetSocialUrl($__type__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            if (((twig_slice($this->env, ($context["value"] ?? null), 0, 5) == "http:") || (twig_slice($this->env, ($context["value"] ?? null), 0, 6) == "https:"))) {
                // line 10
                echo "        ";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "
    ";
            } else {
                // line 12
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ContactBundle\Twig\ContactExtension')->getSocialUrl(($context["type"] ?? null), ($context["value"] ?? null)), "html", null, true);
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
        return "OroSalesBundle:Lead/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 12,  232 => 10,  230 => 9,  217 => 8,  208 => 84,  204 => 83,  200 => 82,  196 => 81,  192 => 80,  188 => 79,  185 => 78,  181 => 74,  173 => 69,  170 => 68,  167 => 67,  159 => 62,  156 => 61,  154 => 60,  151 => 59,  149 => 58,  147 => 57,  143 => 54,  138 => 52,  133 => 50,  129 => 49,  125 => 48,  121 => 47,  117 => 46,  99 => 41,  96 => 39,  89 => 37,  87 => 36,  70 => 35,  68 => 34,  66 => 33,  64 => 32,  62 => 30,  59 => 29,  57 => 28,  56 => 26,  53 => 25,  47 => 23,  45 => 22,  40 => 20,  36 => 19,  31 => 16,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Lead/widget:info.html.twig", "");
    }
}
