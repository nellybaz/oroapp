<?php

/* OroUserBundle:User/widget:info.html.twig */
class __TwigTemplate_9f92f27feb9f619df57e95ae901c2ac27956734643d5664b444f594d5a2d9273 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle:User/widget:info.html.twig", 1);
        // line 2
        $context["tag"] = $this->loadTemplate("OroTagBundle::macros.html.twig", "OroUserBundle:User/widget:info.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroUserBundle:User/widget:info.html.twig", 3);
        // line 4
        echo "
";
        // line 11
        echo "
";
        // line 24
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 28
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.username.label"), $this->getAttribute(($context["entity"] ?? null), "username", array()));
        echo "

            ";
        // line 30
        ob_start();
        // line 31
        echo "                ";
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute(($context["entity"] ?? null), "birthday", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")) : ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "birthday", array())))), "html", null, true);
        echo "
                ";
        // line 32
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "birthday", array()))) {
            // line 33
            echo "                    (";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\FormatExtension')->getAgeAsString($this->getAttribute(($context["entity"] ?? null), "birthday", array()), array("default" => "N/A")), "html", null, true);
            echo ")
                ";
        }
        // line 35
        echo "            ";
        $context["birthday_string"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "            ";
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.birthday.label"), ($context["birthday_string"] ?? null));
        echo "

            ";
        // line 38
        $context["emails"] = array(0 => $this->getAttribute($this, "renderEmail", array(0 => $this->getAttribute(($context["entity"] ?? null), "email", array()), 1 => true, 2 => ($context["entity"] ?? null)), "method"));
        // line 39
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "emails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["emailEntity"]) {
            // line 40
            echo "                ";
            $context["emails"] = twig_array_merge(($context["emails"] ?? null), array(0 => $this->getAttribute($this, "renderEmail", array(0 => $this->getAttribute($context["emailEntity"], "email", array()), 1 => false, 2 => ($context["entity"] ?? null)), "method")));
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailEntity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            ";
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.emails.label"), twig_join_filter(($context["emails"] ?? null), "<br />"));
        echo "

            ";
        // line 44
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.phone.label"), (($this->getAttribute(($context["entity"] ?? null), "phone", array())) ? ($context["ui"]->getrenderPhoneWithActions($this->getAttribute(($context["entity"] ?? null), "phone", array()), ($context["entity"] ?? null))) : (null)));
        echo "

            ";
        // line 46
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_role_view")) {
            // line 47
            echo "                ";
            $context["roles"] = array();
            // line 48
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entityRole"]) {
                // line 49
                echo "                    ";
                $context["roles"] = twig_array_merge(($context["roles"] ?? null), array(0 => $this->getAttribute($context["entityRole"], "label", array())));
                // line 50
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityRole'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                ";
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.roles.label"), nl2br(twig_escape_filter($this->env, twig_join_filter(($context["roles"] ?? null), "
"))));
            echo "
            ";
        }
        // line 53
        echo "
            ";
        // line 54
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_user_group_view")) {
            // line 55
            echo "                ";
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.groups.label"), nl2br(twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["entity"] ?? null), "groups", array()), "
"))));
            echo "
            ";
        }
        // line 57
        echo "
            ";
        // line 58
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_business_unit_view")) {
            // line 59
            echo "                ";
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.business_units.label"), nl2br(twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["entity"] ?? null), "businessUnits", array()), "
"))));
            echo "
            ";
        }
        // line 61
        echo "
            ";
        // line 62
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 66
        echo $this->getAttribute($this, "renderApiBlock", array(0 => ($context["entity"] ?? null), 1 => ($context["userApi"] ?? null), 2 => ($context["viewProfile"] ?? null)), "method");
        echo "

            ";
        // line 68
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_user_api_block_after", $context)) ? (_twig_default_filter(($context["view_user_api_block_after"] ?? null), "view_user_api_block_after")) : ("view_user_api_block_after")), array("entity" => ($context["entity"] ?? null), "viewProfile" => ($context["viewProfile"] ?? null)));
        // line 69
        echo "        </div>
    </div>
</div>

";
    }

    // line 5
    public function getrenderEmail($__emailAddress__ = null, $__isPrimary__ = null, $__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "isPrimary" => $__isPrimary__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "    ";
            $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroUserBundle:User/widget:info.html.twig", 6);
            // line 7
            echo "    ";
            if (($context["isPrimary"] ?? null)) {
                echo "<strong>";
            }
            // line 8
            echo "        ";
            echo $context["email"]->getrenderEmailWithActions(($context["emailAddress"] ?? null), ($context["entity"] ?? null));
            echo "
    ";
            // line 9
            if (($context["isPrimary"] ?? null)) {
                echo "</strong>";
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

    // line 12
    public function getrenderApiBlock($__user__ = null, $__userApi__ = null, $__viewProfile__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "userApi" => $__userApi__,
            "viewProfile" => $__viewProfile__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "    ";
            $context["ownUserView"] = (($this->getAttribute(($context["app"] ?? null), "user", array()) && ($context["user"] ?? null)) && ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()) == $this->getAttribute(($context["user"] ?? null), "id", array())));
            // line 14
            echo "    ";
            if (((($context["viewProfile"] ?? null) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("MANAGE_API_KEY", ($context["user"] ?? null))) || ($context["ownUserView"] ?? null))) {
                // line 15
                echo "        ";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_apigen", array("id" => $this->getAttribute(                // line 17
($context["user"] ?? null), "id", array()))), "alias" => "user-apikey-gen-widget", "elementFirst" => true, "separateLayout" => false));
                // line 21
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
        return "OroUserBundle:User/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 21,  234 => 17,  232 => 15,  229 => 14,  226 => 13,  212 => 12,  195 => 9,  190 => 8,  185 => 7,  182 => 6,  168 => 5,  160 => 69,  158 => 68,  153 => 66,  146 => 62,  143 => 61,  136 => 59,  134 => 58,  131 => 57,  124 => 55,  122 => 54,  119 => 53,  112 => 51,  106 => 50,  103 => 49,  98 => 48,  95 => 47,  93 => 46,  88 => 44,  82 => 42,  76 => 41,  73 => 40,  68 => 39,  66 => 38,  60 => 36,  57 => 35,  51 => 33,  49 => 32,  44 => 31,  42 => 30,  37 => 28,  31 => 24,  28 => 11,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:User/widget:info.html.twig", "");
    }
}
