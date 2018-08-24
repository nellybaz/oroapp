<?php

/* OroTrackingBundle:TrackingWebsite:view.html.twig */
class __TwigTemplate_b693d028dbd7b2076ff3cf9256be377549b534a68127a0b9f68be3b437ea1941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroTrackingBundle:TrackingWebsite:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTrackingBundle:TrackingWebsite:view.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroTrackingBundle:TrackingWebsite:view.html.twig", 3);
        // line 4
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroTrackingBundle:TrackingWebsite:view.html.twig", 4);
        // line 5
        $context["U"] = $this->loadTemplate("OroUserBundle::macros.html.twig", "OroTrackingBundle:TrackingWebsite:view.html.twig", 5);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.name%" => (($this->getAttribute(        // line 6
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 10
            echo "        ";
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tracking_website_update", array("id" => $this->getAttribute(            // line 11
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.trackingwebsite.entity_label")));
            // line 13
            echo "
    ";
        }
        // line 15
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 16
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_tracking_website", array("id" => $this->getAttribute(            // line 17
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tracking_website_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => $this->getAttribute(            // line 21
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.trackingwebsite.entity_label")));
            // line 23
            echo "
    ";
        }
    }

    // line 27
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 29
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_tracking_website_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.trackingwebsite.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 32
($context["entity"] ?? null), "name", array()));
        // line 34
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 37
    public function block_content_data($context, array $blocks = array())
    {
        // line 38
        ob_start();
        // line 39
        echo "<div class=\"row-fluid\">
        <div class=\"responsive-block\">
            ";
        // line 41
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.trackingwebsite.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "
            ";
        // line 42
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.trackingwebsite.identifier.label"), $this->getAttribute(($context["entity"] ?? null), "identifier", array()));
        // line 44
        ob_start();
        // line 45
        echo "<a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "url", array()), "html", null, true);
        echo "\">
                ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "url", array()), "html", null, true);
        echo "
            </a>";
        $context["url"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.trackingwebsite.url.label"), ($context["url"] ?? null));
        // line 51
        ob_start();
        // line 52
        if ($this->getAttribute(($context["entity"] ?? null), "owner", array())) {
            // line 53
            echo $context["U"]->getrender_user_name($this->getAttribute(($context["entity"] ?? null), "owner", array()));
            echo "
                ";
            // line 54
            echo $context["U"]->getuser_business_unit_name($this->getAttribute(($context["entity"] ?? null), "owner", array()));
        }
        $context["ownerData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 57
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.trackingwebsite.owner.label"), ($context["ownerData"] ?? null));
        echo "
        </div>
        <div class=\"responsive-block\">
            ";
        // line 60
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>
    </div>";
        $context["generalInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 64
        ob_start();
        // line 65
        echo "<div class=\"row-fluid\">
        <div class=\"responsive-block\">
            <p>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.help.event_tooltip"), "html", null, true);
        echo "</p>
            ";
        // line 68
        if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "secure", array())) {
            // line 69
            echo "                <p><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.help.secure"), "html", null, true);
            echo "</strong></p>
            ";
        }
        // line 71
        echo "            <textarea class=\"code code-script\">";
        // line 72
        $this->loadTemplate("OroTrackingBundle:TrackingWebsite:script.js.twig", "OroTrackingBundle:TrackingWebsite:view.html.twig", 72)->display($context);
        // line 73
        echo "</textarea>
        </div>
    </div>";
        $context["trackingCode"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 78
        ob_start();
        // line 79
        echo "        ";
        echo $context["dataGrid"]->getrenderGrid("website-tracking-events-grid", array("websiteIdentifier" => $this->getAttribute(($context["entity"] ?? null), "identifier", array())));
        echo "
    ";
        $context["trackingEventsGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 81
        echo "
    ";
        // line 82
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.block.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 87
($context["generalInformation"] ?? null))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.block.tracking"), "subblocks" => array(0 => array("data" => array(0 =>         // line 93
($context["trackingCode"] ?? null))))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tracking.block.events"), "subblocks" => array(0 => array("data" => array(0 =>         // line 99
($context["trackingEventsGrid"] ?? null))))));
        // line 103
        echo "
    ";
        // line 104
        $context["id"] = "websiteView";
        // line 105
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 106
        echo "
    ";
        // line 107
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTrackingBundle:TrackingWebsite:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 107,  189 => 106,  186 => 105,  184 => 104,  181 => 103,  179 => 99,  178 => 93,  177 => 87,  176 => 82,  173 => 81,  167 => 79,  165 => 78,  160 => 73,  158 => 72,  156 => 71,  150 => 69,  148 => 68,  144 => 67,  140 => 65,  138 => 64,  132 => 60,  126 => 57,  122 => 54,  118 => 53,  116 => 52,  114 => 51,  112 => 49,  107 => 46,  102 => 45,  100 => 44,  98 => 42,  94 => 41,  90 => 39,  88 => 38,  85 => 37,  78 => 34,  76 => 32,  75 => 29,  73 => 28,  70 => 27,  64 => 23,  62 => 21,  61 => 17,  59 => 16,  56 => 15,  52 => 13,  50 => 11,  48 => 10,  45 => 9,  42 => 8,  38 => 1,  36 => 6,  33 => 5,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTrackingBundle:TrackingWebsite:view.html.twig", "");
    }
}
