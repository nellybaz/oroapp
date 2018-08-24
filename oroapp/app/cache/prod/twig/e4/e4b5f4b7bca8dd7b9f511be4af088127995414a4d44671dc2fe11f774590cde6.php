<?php

/* OroCustomerBundle:CustomerUser:view.html.twig */
class __TwigTemplate_7d0ea273392462ad4a9fd840ea22e116a3bfd60bd6262ea173bb2b745aac7052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCustomerBundle:CustomerUser:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%email%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "email", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 7
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 10
($context["entity"] ?? null), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 12
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 18
        if ($this->getAttribute(($context["entity"] ?? null), "enabled", array())) {
            // line 19
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.statuses.active"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 21
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.statuses.inactive"), "html", null, true);
            echo "</div>
        ";
        }
        // line 23
        echo "        ";
        if ($this->getAttribute(($context["entity"] ?? null), "confirmed", array())) {
            // line 24
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.statuses.confirmed"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 26
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.profile.statuses.unconfirmed"), "html", null, true);
            echo "</div>
        ";
        }
        // line 28
        echo "    </div>
";
    }

    // line 31
    public function block_stats($context, array $blocks = array())
    {
        // line 32
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.last_login.label"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "lastLogin", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "lastLogin", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.login_count.label"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["entity"] ?? null), "loginCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "loginCount", array()), 0)) : (0)), "html", null, true);
        echo "</li>
";
    }

    // line 38
    public function block_content_data($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        ob_start();
        // line 40
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_info", array("id" => $this->getAttribute(        // line 42
($context["entity"] ?? null), "id", array())))));
        // line 43
        echo "
    ";
        $context["customerUserInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
    ";
        // line 46
        ob_start();
        // line 47
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_customer_customer_user_address_view")) {
            // line 48
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "contentClasses" => array(), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_address_book", array("id" => $this->getAttribute(            // line 51
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.customeruser.address_book.label")));
            // line 53
            echo "
        ";
        }
        // line 55
        echo "    ";
        $context["addressBookWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        echo "
    ";
        // line 57
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.customer.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 62
($context["customerUserInformationWidget"] ?? null))), 1 => array("data" => array(0 =>         // line 63
($context["addressBookWidget"] ?? null))))));
        // line 67
        echo "
    ";
        // line 68
        $context["id"] = "customer-user-view";
        // line 69
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 70
        echo "
    ";
        // line 71
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:CustomerUser:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 71,  171 => 70,  168 => 69,  166 => 68,  163 => 67,  161 => 63,  160 => 62,  159 => 57,  156 => 56,  153 => 55,  149 => 53,  147 => 51,  145 => 48,  142 => 47,  140 => 46,  137 => 45,  133 => 43,  131 => 42,  129 => 40,  126 => 39,  123 => 38,  115 => 35,  109 => 34,  103 => 33,  96 => 32,  93 => 31,  88 => 28,  82 => 26,  76 => 24,  73 => 23,  67 => 21,  61 => 19,  59 => 18,  53 => 16,  50 => 15,  43 => 12,  41 => 10,  40 => 7,  38 => 6,  35 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:CustomerUser:view.html.twig", "");
    }
}
