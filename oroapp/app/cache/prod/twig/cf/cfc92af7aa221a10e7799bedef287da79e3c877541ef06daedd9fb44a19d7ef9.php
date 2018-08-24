<?php

/* OroMarketingCRMBridgeBundle:Customer:websiteMetrics.html.twig */
class __TwigTemplate_cabf144b9b9f171c086d868984e1aee07edbe5c7d6146cd28cb960cb30df7529 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMarketingCRMBridgeBundle:Customer:websiteMetrics.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["metrics"] = $this->getAttribute(($context["data"] ?? null), "metrics", array());
        // line 4
        echo "
";
        // line 16
        echo "
<div class=\"responsive-cell\">
    <div class=\"box-type1\">
        <div class=\"title\">
            <span class=\"widget-title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.label"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"row-fluid\">
            ";
        // line 23
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.site_visit_count.label"), $this->getAttribute(        // line 25
($context["metrics"] ?? null), "visit_count", array()));
        // line 26
        echo "
            ";
        // line 27
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.last_visit_date.label"), $this->getAttribute(        // line 29
$this, "renderEventDate", array(0 => $this->getAttribute(($context["metrics"] ?? null), "last_visit", array())), "method"));
        // line 30
        echo "
            ";
        // line 31
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.average_monthly_visits.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 33
($context["metrics"] ?? null), "average_visit_monthly", array()), array("attributes" => array("fraction_digits" => 1))));
        // line 34
        echo "
            ";
        // line 35
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.page_view_count.label"), $this->getAttribute(        // line 37
($context["metrics"] ?? null), "page_view_count", array()));
        // line 38
        echo "
            ";
        // line 39
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.most_viewed_page.label"), (($this->getAttribute(        // line 41
($context["metrics"] ?? null), "most_viewed_page", array())) ? (        // line 42
$context["ui"]->getrenderUrl($this->getAttribute($this->getAttribute(($context["metrics"] ?? null), "most_viewed_page", array()), "url", array()), $this->getAttribute($this->getAttribute(($context["metrics"] ?? null), "most_viewed_page", array()), "title", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))));
        // line 44
        echo "
            ";
        // line 45
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.last_viewed_page.label"), (($this->getAttribute(        // line 47
($context["metrics"] ?? null), "last_viewed_page", array())) ? (        // line 48
$context["ui"]->getrenderUrl($this->getAttribute($this->getAttribute(($context["metrics"] ?? null), "last_viewed_page", array()), "url", array()), $this->getAttribute($this->getAttribute(($context["metrics"] ?? null), "last_viewed_page", array()), "title", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))));
        // line 50
        echo "
            ";
        // line 51
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.average_visit_views.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 53
($context["metrics"] ?? null), "average_visit_views", array()), array("attributes" => array("fraction_digits" => 1))));
        // line 54
        echo "
            ";
        // line 55
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.last_login_date.label"), $this->getAttribute(        // line 57
$this, "renderEventDate", array(0 => $this->getAttribute(($context["metrics"] ?? null), "last_login", array())), "method"));
        // line 58
        echo "
            ";
        // line 59
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.item_added_count.label"), $this->getAttribute(        // line 61
($context["metrics"] ?? null), "item_added_count", array()));
        // line 62
        echo "
            ";
        // line 63
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.last_item_date.label"), $this->getAttribute(        // line 65
$this, "renderEventDate", array(0 => $this->getAttribute(($context["metrics"] ?? null), "last_item", array())), "method"));
        // line 66
        echo "
            ";
        // line 67
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.average_visit_items.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 69
($context["metrics"] ?? null), "average_visit_items", array()), array("attributes" => array("fraction_digits" => 1))));
        // line 70
        echo "
            ";
        // line 71
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.checkout_count.label"), $this->getAttribute(        // line 73
($context["metrics"] ?? null), "checkout_count", array()));
        // line 74
        echo "
            ";
        // line 75
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.last_checkout_date.label"), $this->getAttribute(        // line 77
$this, "renderEventDate", array(0 => $this->getAttribute(($context["metrics"] ?? null), "last_checkout", array())), "method"));
        // line 78
        echo "
            ";
        // line 79
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.metrics.data.average_visit_checkouts.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 81
($context["metrics"] ?? null), "average_visit_checkouts", array()), array("attributes" => array("fraction_digits" => 1))));
        // line 82
        echo "
        </div>
    </div>
</div>
";
    }

    // line 5
    public function getrenderEventDate($__eventDate__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "eventDate" => $__eventDate__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "    ";
            if (($context["eventDate"] ?? null)) {
                // line 7
                echo "        ";
                $context["now"] = twig_date_converter($this->env);
                // line 8
                echo "        ";
                $context["difference"] = $this->getAttribute(twig_date_converter($this->env, ($context["eventDate"] ?? null)), "diff", array(0 => ($context["now"] ?? null)), "method");
                // line 9
                echo "
        ";
                // line 10
                echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime(($context["eventDate"] ?? null));
                echo "
        (";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("oro.magento.website_activity.days_ago", $this->getAttribute(($context["difference"] ?? null), "days", array())), "html", null, true);
                echo ")
    ";
            } else {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"), "html", null, true);
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
        return "OroMarketingCRMBridgeBundle:Customer:websiteMetrics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 13,  160 => 11,  156 => 10,  153 => 9,  150 => 8,  147 => 7,  144 => 6,  132 => 5,  124 => 82,  122 => 81,  121 => 79,  118 => 78,  116 => 77,  115 => 75,  112 => 74,  110 => 73,  109 => 71,  106 => 70,  104 => 69,  103 => 67,  100 => 66,  98 => 65,  97 => 63,  94 => 62,  92 => 61,  91 => 59,  88 => 58,  86 => 57,  85 => 55,  82 => 54,  80 => 53,  79 => 51,  76 => 50,  74 => 48,  73 => 47,  72 => 45,  69 => 44,  67 => 42,  66 => 41,  65 => 39,  62 => 38,  60 => 37,  59 => 35,  56 => 34,  54 => 33,  53 => 31,  50 => 30,  48 => 29,  47 => 27,  44 => 26,  42 => 25,  41 => 23,  35 => 20,  29 => 16,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMarketingCRMBridgeBundle:Customer:websiteMetrics.html.twig", "");
    }
}
