<?php

/* OroZendeskBundle:Case:caseTicketInfo.html.twig */
class __TwigTemplate_2104040f633685601a9bad50227093490ea16300a4d105b580fa788419d6f081 extends Twig_Template
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_case_view")) {
            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroZendeskBundle:Case:caseTicketInfo.html.twig", 2);
            // line 3
            echo "    ";
            $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroZendeskBundle:Case:caseTicketInfo.html.twig", 3);
            // line 4
            echo "
    ";
            // line 29
            echo "
    ";
            // line 30
            $context["ticket"] = $this->env->getExtension('Oro\Bundle\ZendeskBundle\Twig\ZendeskExtension')->getTicketByCase(($context["entity"] ?? null));
            // line 31
            echo "    ";
            if (($context["ticket"] ?? null)) {
                // line 32
                echo "        <div class=\"responsive-cell\">
            <div class=\"box-type1\">
                <div class=\"title\">
                    <span class=\"widget-title\">";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.ticket_info_title"), "html", null, true);
                echo "</span>
                </div>
                <div class=\"row-fluid form-horizontal\">
                    <div class=\"responsive-block\">

                        ";
                // line 40
                ob_start();
                // line 41
                echo "                            ";
                $context["url"] = $this->env->getExtension('Oro\Bundle\ZendeskBundle\Twig\ZendeskExtension')->getTicketUrl(($context["ticket"] ?? null));
                // line 42
                echo "                            ";
                if (($context["url"] ?? null)) {
                    // line 43
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\" target=\"_blank\" class=\"no-hash\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? null), "originId", array()), "html", null, true);
                    echo "</a>
                            ";
                } elseif ($this->getAttribute(                // line 44
($context["ticket"] ?? null), "originId", array())) {
                    // line 45
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["ticket"] ?? null), "originId", array()), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 47
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"), "html", null, true);
                    echo "
                            ";
                }
                // line 49
                echo "                        ";
                $context["link"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 50
                echo "                        ";
                echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.ticket.origin_id.label"), ($context["link"] ?? null));
                echo "

                        ";
                // line 52
                ob_start();
                // line 53
                echo "                            ";
                echo $context["email"]->getemail_address_simple($this->getAttribute(($context["ticket"] ?? null), "recipient", array()));
                echo "
                        ";
                $context["recipient"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 55
                echo "                        ";
                echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.ticket.recipient.label"), twig_trim_filter(($context["recipient"] ?? null)));
                echo "
                        ";
                // line 56
                echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.ticket.status.label"), (($this->getAttribute($this->getAttribute(($context["ticket"] ?? null), "status", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["ticket"] ?? null), "status", array(), "any", false, true), "label", array()), false)) : (false)));
                echo "
                        ";
                // line 57
                echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.ticket.type.label"), (($this->getAttribute($this->getAttribute(($context["ticket"] ?? null), "type", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["ticket"] ?? null), "type", array(), "any", false, true), "label", array()), false)) : (false)));
                echo "
                        ";
                // line 58
                echo $this->getAttribute($this, "render_zendesk_user", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.ticket.submitter.label"), 1 => $this->getAttribute(($context["ticket"] ?? null), "submitter", array())), "method");
                echo "
                        ";
                // line 59
                echo $this->getAttribute($this, "render_zendesk_user", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.ticket.assignee.label"), 1 => $this->getAttribute(($context["ticket"] ?? null), "assignee", array())), "method");
                echo "
                        ";
                // line 60
                echo $this->getAttribute($this, "render_zendesk_user", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.ticket.requester.label"), 1 => $this->getAttribute(($context["ticket"] ?? null), "requester", array())), "method");
                echo "
                        ";
                // line 61
                echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.ticket.priority.label"), (($this->getAttribute($this->getAttribute(($context["ticket"] ?? null), "priority", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["ticket"] ?? null), "priority", array(), "any", false, true), "label", array()), false)) : (false)));
                echo "
                        ";
                // line 62
                ob_start();
                // line 63
                echo "                            ";
                if (($this->getAttribute(($context["ticket"] ?? null), "problem", array()) && $this->getAttribute($this->getAttribute(($context["ticket"] ?? null), "problem", array()), "relatedCase", array()))) {
                    // line 64
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_view", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["ticket"] ?? null), "problem", array()), "relatedCase", array()), "id", array()))), "html", null, true);
                    echo "\">
                                    ";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ticket"] ?? null), "problem", array()), "subject", array()), "html", null, true);
                    echo "
                                </a>
                            ";
                }
                // line 68
                echo "                        ";
                $context["problem"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 69
                echo "                        ";
                echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.ticket.problem.label"), twig_trim_filter(($context["problem"] ?? null)));
                echo "

                        ";
                // line 71
                ob_start();
                // line 72
                echo "                            ";
                if ($this->getAttribute(($context["ticket"] ?? null), "collaborators", array())) {
                    // line 73
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ticket"] ?? null), "collaborators", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["collaborator"]) {
                        // line 74
                        echo "                                    ";
                        echo $this->getAttribute($this, "render_zendesk_user", array(0 => false, 1 => $context["collaborator"]), "method");
                        echo "
                                    ";
                        // line 75
                        if ((($this->getAttribute($context["loop"], "length", array()) > 1) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                            // line 76
                            echo "                                        ,&nbsp;
                                    ";
                        }
                        // line 78
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborator'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                            ";
                }
                // line 80
                echo "                        ";
                $context["collaborators"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 81
                echo "                        ";
                echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.zendesk.ticket.collaborators.label"), twig_trim_filter(($context["collaborators"] ?? null)));
                echo "
                    </div>
                </div>
            </div>
        </div>
    ";
            }
        }
    }

    // line 5
    public function getrender_zendesk_user($__label__ = null, $__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "user" => $__user__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "        ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroZendeskBundle:Case:caseTicketInfo.html.twig", 6);
            // line 7
            ob_start();
            // line 8
            if (($context["user"] ?? null)) {
                // line 9
                if (($this->getAttribute(($context["user"] ?? null), "relatedUser", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", $this->getAttribute(($context["user"] ?? null), "relatedUser", array())))) {
                    // line 10
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_view", array("id" => $this->getAttribute($this->getAttribute(($context["user"] ?? null), "relatedUser", array()), "id", array()))), "html", null, true);
                    echo "\">
                        ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", array()));
                    echo "
                    </a>
                ";
                } elseif (($this->getAttribute(                // line 13
($context["user"] ?? null), "relatedContact", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", $this->getAttribute(($context["user"] ?? null), "relatedContact", array())))) {
                    // line 14
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_view", array("id" => $this->getAttribute($this->getAttribute(($context["user"] ?? null), "relatedContact", array()), "id", array()))), "html", null, true);
                    echo "\">
                        ";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", array()));
                    echo "
                    </a>
                ";
                } else {
                    // line 18
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", array()));
                    echo "
                ";
                }
            }
            $context["userHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 23
            if (($context["label"] ?? null)) {
                // line 24
                echo "            ";
                echo $context["UI"]->getrenderHtmlProperty(($context["label"] ?? null), ($context["userHtml"] ?? null));
                echo "
        ";
            } else {
                // line 26
                echo "            ";
                echo twig_escape_filter($this->env, ($context["userHtml"] ?? null), "html", null, true);
                echo "
        ";
            }
            // line 28
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

    public function getTemplateName()
    {
        return "OroZendeskBundle:Case:caseTicketInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 28,  279 => 26,  273 => 24,  271 => 23,  263 => 18,  257 => 15,  252 => 14,  250 => 13,  245 => 11,  240 => 10,  238 => 9,  236 => 8,  234 => 7,  231 => 6,  218 => 5,  205 => 81,  202 => 80,  199 => 79,  185 => 78,  181 => 76,  179 => 75,  174 => 74,  156 => 73,  153 => 72,  151 => 71,  145 => 69,  142 => 68,  136 => 65,  131 => 64,  128 => 63,  126 => 62,  122 => 61,  118 => 60,  114 => 59,  110 => 58,  106 => 57,  102 => 56,  97 => 55,  91 => 53,  89 => 52,  83 => 50,  80 => 49,  74 => 47,  68 => 45,  66 => 44,  59 => 43,  56 => 42,  53 => 41,  51 => 40,  43 => 35,  38 => 32,  35 => 31,  33 => 30,  30 => 29,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroZendeskBundle:Case:caseTicketInfo.html.twig", "");
    }
}
