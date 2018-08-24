<?php

/* OroEmailBundle:Email:view.html.twig */
class __TwigTemplate_e02ca73060a35d367b5645f3f33abf08efef5b1501606ebe3985f178b3462863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroEmailBundle:Email:view.html.twig", 5);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'stats' => array($this, 'block_stats'),
            'navButtons' => array($this, 'block_navButtons'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email:view.html.twig", 6);
        // line 7
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email:view.html.twig", 7);
        // line 8
        $context["name"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["app"] ?? null), "user", array())), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%subject%" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->getAttribute(        // line 9
($context["entity"] ?? null), "subject", array())), "%username%" => ($context["name"] ?? null))));
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 13
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_user_emails"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.entity_plural_label"), "entityTitle" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter($this->getAttribute(        // line 16
($context["entity"] ?? null), "subject", array())));
        // line 18
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.menu.user_emails")));
        // line 25
        echo "    ";
        $this->loadTemplate("OroNavigationBundle:Menu:breadcrumbs.html.twig", "OroEmailBundle:Email:view.html.twig", 25)->display($context);
    }

    // line 28
    public function block_stats($context, array $blocks = array())
    {
        // line 29
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "created", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "created", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 32
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 34
    public function block_content_data($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["id"] = "email-profile";
        // line 36
        echo "    ";
        $context["attributes"] = array(0 =>         // line 37
$context["UI"]->getattibuteRow($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.sent_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "sentAt", array()))), 1 =>         // line 38
$context["UI"]->getattibuteRow($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.from_name.label"), $context["EA"]->getemail_address($this->getAttribute(($context["entity"] ?? null), "fromEmailAddress", array()), $this->getAttribute(($context["entity"] ?? null), "fromName", array()))), 2 =>         // line 39
$context["UI"]->getattibuteRow($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To"), $context["EA"]->getrecipient_email_addresses($this->getAttribute(($context["entity"] ?? null), "recipients", array(0 => "to"), "method"))));
        // line 41
        echo "
    ";
        // line 42
        if ((twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "recipients", array(0 => "cc"), "method")) > 0)) {
            // line 43
            echo "        ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array(0 =>             // line 44
$context["UI"]->getattibuteRow($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cc"), $context["EA"]->getrecipient_email_addresses($this->getAttribute(($context["entity"] ?? null), "recipients", array(0 => "cc"), "method")))));
            // line 46
            echo "    ";
        }
        // line 47
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "recipients", array(0 => "bcc"), "method")) > 0)) {
            // line 48
            echo "        ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array(0 =>             // line 49
$context["UI"]->getattibuteRow($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bcc"), $context["EA"]->getrecipient_email_addresses($this->getAttribute(($context["entity"] ?? null), "recipients", array(0 => "bcc"), "method")))));
            // line 51
            echo "    ";
        }
        // line 52
        echo "    ";
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array(0 =>         // line 53
$context["UI"]->getattibuteRow($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.subject.label"), $this->getAttribute(($context["entity"] ?? null), "subject", array()))));
        // line 55
        echo "
    ";
        // line 56
        if (($context["noBodyFound"] ?? null)) {
            // line 57
            echo "        ";
            ob_start();
            echo "<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.unable_to_load_body"), "html", null, true);
            echo "</strong>";
            $context["notFoundMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 58
            echo "        ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array(0 => $context["UI"]->getattibuteRow("", ($context["notFoundMessage"] ?? null))));
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emailBody", array()), "hasAttachments", array()) && array_key_exists("attachments", $context))) {
                // line 61
                echo "            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array(0 =>                 // line 62
$context["UI"]->getattibuteRow($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attachments"),                 // line 64
$context["EA"]->getattachments(($context["attachments"] ?? null), ($context["targetEntityData"] ?? null)))));
                // line 66
                echo "        ";
            }
            // line 67
            echo "        ";
            if (twig_test_empty($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emailBody", array()), "bodyContent", array()))) {
                // line 68
                echo "            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array(0 => $context["UI"]->getattibuteRow("", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.empty_body"))));
                // line 69
                echo "        ";
            } else {
                // line 70
                echo "            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array(0 => $context["EA"]->getbody($this->getAttribute(($context["entity"] ?? null), "emailBody", array()))));
                // line 71
                echo "        ";
            }
            // line 72
            echo "    ";
        }
        // line 73
        echo "
    ";
        // line 74
        $context["data"] = array("dataBlocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" =>         // line 83
($context["attributes"] ?? null))))));
        // line 89
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 89,  174 => 83,  173 => 74,  170 => 73,  167 => 72,  164 => 71,  161 => 70,  158 => 69,  155 => 68,  152 => 67,  149 => 66,  147 => 64,  146 => 62,  144 => 61,  141 => 60,  138 => 59,  135 => 58,  128 => 57,  126 => 56,  123 => 55,  121 => 53,  119 => 52,  116 => 51,  114 => 49,  112 => 48,  109 => 47,  106 => 46,  104 => 44,  102 => 43,  100 => 42,  97 => 41,  95 => 39,  94 => 38,  93 => 37,  91 => 36,  88 => 35,  85 => 34,  80 => 32,  71 => 29,  68 => 28,  63 => 25,  60 => 22,  57 => 21,  50 => 18,  48 => 16,  47 => 13,  45 => 12,  42 => 11,  38 => 5,  36 => 9,  33 => 8,  31 => 7,  29 => 6,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email:view.html.twig", "");
    }
}
