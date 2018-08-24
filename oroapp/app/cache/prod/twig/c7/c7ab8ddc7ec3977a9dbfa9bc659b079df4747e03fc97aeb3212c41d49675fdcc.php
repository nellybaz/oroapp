<?php

/* OroContactBundle:Contact/widget:info.html.twig */
class __TwigTemplate_9aacd9e55b39d07528143ab9f303e5f0a792bb38229f152ed371219d92d96039 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroContactBundle:Contact/widget:info.html.twig", 1);
        // line 2
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroContactBundle:Contact/widget:info.html.twig", 2);
        // line 3
        $context["U"] = $this->loadTemplate("OroUserBundle::macros.html.twig", "OroContactBundle:Contact/widget:info.html.twig", 3);
        // line 4
        echo "
";
        // line 44
        echo "<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal contact-info\">
        <div class=\"responsive-block\">";
        // line 47
        ob_start();
        // line 48
        if ($this->getAttribute(($context["entity"] ?? null), "skype", array())) {
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "skype", array()), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->getSkypeButton($this->env, $this->getAttribute(($context["entity"] ?? null), "skype", array()));
        }
        $context["skypeData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        ob_start();
        // line 54
        if (((($this->getAttribute(($context["entity"] ?? null), "twitter", array()) || $this->getAttribute(($context["entity"] ?? null), "facebook", array())) || $this->getAttribute(($context["entity"] ?? null), "googlePlus", array())) || $this->getAttribute(($context["entity"] ?? null), "linkedIn", array()))) {
            // line 55
            echo "<ul class=\"list-inline\">
                        ";
            // line 56
            if ($this->getAttribute(($context["entity"] ?? null), "twitter", array())) {
                // line 57
                echo "                            <li>
                                <a class=\"no-hash\" href=\"";
                // line 58
                echo $this->getAttribute($this, "getSocialUrl", array(0 => "twitter", 1 => $this->getAttribute(($context["entity"] ?? null), "twitter", array())), "method");
                echo "\" target=\"_blank\" title=\"Twitter\">
                                    <i class=\"fa-twitter\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 63
            echo "                        ";
            if ($this->getAttribute(($context["entity"] ?? null), "facebook", array())) {
                // line 64
                echo "                            <li>
                                <a class=\"no-hash\" href=\"";
                // line 65
                echo $this->getAttribute($this, "getSocialUrl", array(0 => "facebook", 1 => $this->getAttribute(($context["entity"] ?? null), "facebook", array())), "method");
                echo "\" target=\"_blank\" title=\"Facebook\">
                                    <i class=\"fa-facebook\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 70
            echo "                        ";
            if ($this->getAttribute(($context["entity"] ?? null), "googlePlus", array())) {
                // line 71
                echo "                            <li>
                                <a class=\"no-hash\" href=\"";
                // line 72
                echo $this->getAttribute($this, "getSocialUrl", array(0 => "google_plus", 1 => $this->getAttribute(($context["entity"] ?? null), "googlePlus", array())), "method");
                echo "\" target=\"_blank\" title=\"Google+\">
                                    <i class=\"fa-google-plus\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 77
            echo "                        ";
            if ($this->getAttribute(($context["entity"] ?? null), "linkedIn", array())) {
                // line 78
                echo "                            <li>
                                <a class=\"no-hash\" href=\"";
                // line 79
                echo $this->getAttribute($this, "getSocialUrl", array(0 => "linked_in", 1 => $this->getAttribute(($context["entity"] ?? null), "linkedIn", array())), "method");
                echo "\" target=\"_blank\" title=\"LinkedIn\">
                                    <i class=\"fa-linkedin\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 84
            echo "                    </ul>";
        }
        $context["socialData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 88
        echo $context["ui"]->getrenderSwitchableHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.description.label"), $this->getAttribute(($context["entity"] ?? null), "description", array()));
        echo "
            ";
        // line 89
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.phones.label"), (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "phones", array()), "count", array())) ? ($this->getAttribute($this, "renderCollectionWithPrimaryElement", array(0 => $this->getAttribute(($context["entity"] ?? null), "phones", array()), 1 => false, 2 => ($context["entity"] ?? null)), "method")) : (null)));
        echo "
            ";
        // line 90
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.emails.label"), (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emails", array()), "count", array())) ? ($this->getAttribute($this, "renderCollectionWithPrimaryElement", array(0 => $this->getAttribute(($context["entity"] ?? null), "emails", array()), 1 => true, 2 => ($context["entity"] ?? null)), "method")) : (null)));
        echo "
            ";
        // line 91
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.fax.label"), (($this->getAttribute(($context["entity"] ?? null), "fax", array())) ? ($context["ui"]->getrenderPhone($this->getAttribute(($context["entity"] ?? null), "fax", array()))) : (null)));
        echo "
            ";
        // line 92
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.skype.label"), ($context["skypeData"] ?? null));
        echo "
            ";
        // line 93
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.method.label"), $this->getAttribute(($context["entity"] ?? null), "method", array()));
        echo "
            ";
        // line 94
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.social.label"), ($context["socialData"] ?? null));
        echo "

            ";
        // line 96
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
        </div>

        <div class=\"responsive-block\">";
        // line 100
        ob_start();
        // line 101
        if ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "accounts", array()), "count", array())) {
            // line 102
            $context["accountViewGranted"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_account_view");
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "accounts", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
                // line 104
                if (($context["accountViewGranted"] ?? null)) {
                    // line 105
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_view", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo $context["ui"]->getrenderEntityViewLabel($context["account"], "name", "oro.account.entity_label");
                    echo "</a>";
                } else {
                    // line 107
                    echo $context["ui"]->getrenderEntityViewLabel($context["account"], "name");
                }
                // line 109
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $context["accountsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 114
        ob_start();
        // line 115
        echo (( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "birthday", array()))) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["entity"] ?? null), "birthday", array()))) : (null));
        echo "
                ";
        // line 116
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "birthday", array()))) {
            echo " (";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\FormatExtension')->getAgeAsString($this->getAttribute(($context["entity"] ?? null), "birthday", array()), array("default" => "N/A")), "html", null, true);
            echo ")";
        }
        $context["birthdayData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 119
        ob_start();
        // line 120
        if ($this->getAttribute(($context["entity"] ?? null), "assignedTo", array())) {
            // line 121
            echo $context["U"]->getrender_user_name($this->getAttribute(($context["entity"] ?? null), "assignedTo", array()));
            echo "
                    ";
            // line 122
            echo $context["U"]->getuser_business_unit_name($this->getAttribute(($context["entity"] ?? null), "assignedTo", array()));
        }
        $context["assignedToData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 126
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.job_title.label"), $this->getAttribute(($context["entity"] ?? null), "jobTitle", array()));
        echo "
            ";
        // line 127
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.accounts.label"), ($context["accountsData"] ?? null));
        echo "
            ";
        // line 128
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.birthday.label"), (($this->getAttribute(($context["entity"] ?? null), "birthday", array())) ? (($context["birthdayData"] ?? null)) : (null)));
        echo "
            ";
        // line 129
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.gender.label"), $this->env->getExtension('Oro\Bundle\UserBundle\Twig\OroUserExtension')->getGenderLabel($this->getAttribute(($context["entity"] ?? null), "gender", array())));
        echo "
            ";
        // line 130
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.source.label"), $this->getAttribute(($context["entity"] ?? null), "source", array()));
        echo "
            ";
        // line 131
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.assigned_to.label"), ($context["assignedToData"] ?? null));
        echo "
            ";
        // line 132
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.reports_to.label"),         // line 134
$context["ui"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "reportsTo", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "reportsTo", array())), "oro_contact_view"));
        // line 135
        echo "
            ";
        // line 136
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.groups.label"), (($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "groups", array()), "count", array())) ? (twig_join_filter($this->getAttribute(($context["entity"] ?? null), "groupLabels", array()), ", ")) : (null)));
        echo "
        </div>
    </div>
</div>
";
    }

    // line 5
    public function getrenderCollectionWithPrimaryElement($__collection__ = null, $__isEmail__ = null, $__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "isEmail" => $__isEmail__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroContactBundle:Contact/widget:info.html.twig", 6);
            // line 7
            echo "    ";
            $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroContactBundle:Contact/widget:info.html.twig", 7);
            // line 8
            echo "
    ";
            // line 9
            $context["primaryElement"] = null;
            // line 10
            echo "    ";
            $context["elements"] = array();
            // line 11
            echo "
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                if ($this->getAttribute($context["element"], "primary", array())) {
                    // line 14
                    echo "            ";
                    $context["primaryElement"] = $context["element"];
                    // line 15
                    echo "        ";
                } else {
                    // line 16
                    echo "            ";
                    $context["elements"] = twig_array_merge(($context["elements"] ?? null), array(0 => $context["element"]));
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
            if (($context["primaryElement"] ?? null)) {
                // line 20
                echo "        ";
                $context["elements"] = twig_array_merge(array(0 => ($context["primaryElement"] ?? null)), ($context["elements"] ?? null));
                // line 21
                echo "    ";
            }
            // line 22
            echo "
    <ul class=\"extra-list\">";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 25
                echo "            <li class=\"contact-collection-element";
                if ($this->getAttribute($context["element"], "primary", array())) {
                    echo " primary";
                }
                echo "\">
                ";
                // line 26
                if (($context["isEmail"] ?? null)) {
                    // line 27
                    echo "                    ";
                    echo $context["email"]->getrenderEmailWithActions($context["element"], ($context["entity"] ?? null));
                    echo "
                ";
                } else {
                    // line 29
                    echo "                    ";
                    echo $context["ui"]->getrenderPhoneWithActions($context["element"], ($context["entity"] ?? null));
                    echo "
                ";
                }
                // line 31
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "</ul>
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

    // line 36
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
            // line 37
            if (((twig_slice($this->env, ($context["value"] ?? null), 0, 5) == "http:") || (twig_slice($this->env, ($context["value"] ?? null), 0, 6) == "https:"))) {
                // line 38
                echo "        ";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "
    ";
            } else {
                // line 40
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
        return "OroContactBundle:Contact/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 40,  391 => 38,  389 => 37,  376 => 36,  360 => 33,  353 => 31,  347 => 29,  341 => 27,  339 => 26,  332 => 25,  328 => 24,  325 => 22,  322 => 21,  319 => 20,  316 => 19,  310 => 18,  307 => 17,  304 => 16,  301 => 15,  298 => 14,  295 => 13,  291 => 12,  288 => 11,  285 => 10,  283 => 9,  280 => 8,  277 => 7,  274 => 6,  260 => 5,  251 => 136,  248 => 135,  246 => 134,  245 => 132,  241 => 131,  237 => 130,  233 => 129,  229 => 128,  225 => 127,  221 => 126,  217 => 122,  213 => 121,  211 => 120,  209 => 119,  202 => 116,  198 => 115,  196 => 114,  178 => 109,  175 => 107,  168 => 105,  166 => 104,  149 => 103,  147 => 102,  145 => 101,  143 => 100,  137 => 96,  132 => 94,  128 => 93,  124 => 92,  120 => 91,  116 => 90,  112 => 89,  108 => 88,  104 => 84,  96 => 79,  93 => 78,  90 => 77,  82 => 72,  79 => 71,  76 => 70,  68 => 65,  65 => 64,  62 => 63,  54 => 58,  51 => 57,  49 => 56,  46 => 55,  44 => 54,  42 => 53,  36 => 49,  34 => 48,  32 => 47,  28 => 44,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactBundle:Contact/widget:info.html.twig", "");
    }
}
