<?php

/* OroCaseBundle:Case:view.html.twig */
class __TwigTemplate_bc445734841e3739c23ae93e8a091a36bd8f639a1050c65e863c8012283611e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCaseBundle:Case:view.html.twig", 1);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCaseBundle:Case:view.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroCaseBundle:Case:view.html.twig", 3);
        // line 4
        $context["U"] = $this->loadTemplate("OroUserBundle::macros.html.twig", "OroCaseBundle:Case:view.html.twig", 4);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.subject%" => (($this->getAttribute(        // line 6
($context["entity"] ?? null), "subject", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "subject", array()), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_case_comment_create") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_case_comment_view"))) {
            // line 10
            echo "        ";
            echo $context["UI"]->getclientButton(array("id" => "add-case-comment-button", "aCss" => "no-hash", "iCss" => "fa-comment-o hide-text", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casecomment.action.add"), "dataAttributes" => array("purpose" => "open-dialog-widget")));
            // line 16
            echo "
        <script type=\"text/javascript\">
            require(['jquery', 'oroui/js/mediator'],
            function(\$, mediator){
                \$('#add-case-comment-button').on('click', function(e) {
                    e.preventDefault();
                    mediator.trigger('comment:add', this);
                });
            });
        </script>
    ";
        }
        // line 27
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 28
            echo "        ";
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_update", array("id" => $this->getAttribute(            // line 29
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.entity_label")));
            // line 31
            echo "
    ";
        }
        // line 33
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 34
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_api_delete_case", array("id" => $this->getAttribute(            // line 35
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => $this->getAttribute(            // line 39
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.entity_label")));
            // line 41
            echo "
    ";
        }
    }

    // line 45
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 47
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 50
($context["entity"] ?? null), "subject", array()));
        // line 52
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 55
    public function block_content_data($context, array $blocks = array())
    {
        // line 56
        ob_start();
        // line 57
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 59
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.subject.label"), $this->getAttribute(($context["entity"] ?? null), "subject", array()));
        echo "
                ";
        // line 60
        echo $context["UI"]->getrenderSwitchableHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.description.label"), $this->getAttribute(($context["entity"] ?? null), "description", array()));
        echo "
                ";
        // line 61
        echo $context["UI"]->getrenderSwitchableHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.resolution.label"), $this->getAttribute(($context["entity"] ?? null), "resolution", array()));
        echo "
                ";
        // line 62
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.source.label"), $this->getAttribute(($context["entity"] ?? null), "source", array()));
        echo "
                ";
        // line 63
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.status.label"), $this->getAttribute(($context["entity"] ?? null), "status", array()));
        echo "
                ";
        // line 64
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.priority.label"), $this->getAttribute(($context["entity"] ?? null), "priority", array()));
        echo "
                ";
        // line 65
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.reported_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "reportedAt", array())));
        echo "
                ";
        // line 66
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "closedAt", array()))) {
            // line 67
            echo "                    ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.closed_at.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "closedAt", array())));
            echo "
                ";
        }
        // line 70
        ob_start();
        // line 71
        if ($this->getAttribute(($context["entity"] ?? null), "owner", array())) {
            // line 72
            echo $context["U"]->getrender_user_name($this->getAttribute(($context["entity"] ?? null), "owner", array()));
            echo "
                        ";
            // line 73
            echo $context["U"]->getuser_business_unit_name($this->getAttribute(($context["entity"] ?? null), "owner", array()));
        }
        $context["owner"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 76
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.owner.label"), ($context["owner"] ?? null));
        // line 78
        ob_start();
        // line 79
        if ($this->getAttribute(($context["entity"] ?? null), "assignedTo", array())) {
            // line 80
            echo $context["U"]->getrender_user_name($this->getAttribute(($context["entity"] ?? null), "assignedTo", array()));
            echo "
                        ";
            // line 81
            echo $context["U"]->getuser_business_unit_name($this->getAttribute(($context["entity"] ?? null), "assignedTo", array()));
        }
        $context["assignedTo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 84
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.assigned_to.label"), ($context["assignedTo"] ?? null));
        echo "

                ";
        // line 86
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.related_contact.label"),         // line 88
$context["UI"]->getentityViewLink($this->getAttribute(($context["entity"] ?? null), "relatedContact", array()), $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "relatedContact", array())), "oro_contact_view"));
        // line 91
        ob_start();
        // line 92
        if ($this->getAttribute(($context["entity"] ?? null), "relatedAccount", array())) {
            // line 93
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_account_view")) {
                // line 94
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_account_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "relatedAccount", array()), "id", array()))), "html", null, true);
                echo "\">
                                ";
                // line 95
                echo $context["UI"]->getrenderEntityViewLabel($this->getAttribute(($context["entity"] ?? null), "relatedAccount", array()), "name", "oro.account.entity_label");
                echo "
                            </a>
                        ";
            } else {
                // line 98
                echo "                            ";
                echo $context["UI"]->getrenderEntityViewLabel($this->getAttribute(($context["entity"] ?? null), "relatedAccount", array()), "name");
                echo "
                        ";
            }
        }
        $context["relatedAccount"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 102
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.caseentity.related_account.label"), ($context["relatedAccount"] ?? null));
        echo "
            </div>
            <div class=\"responsive-block\">
                ";
        // line 105
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
            </div>
        </div>";
        $context["caseInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 110
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.block.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 115
($context["caseInformation"] ?? null))))));
        // line 119
        echo "
    ";
        // line 120
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_case_comment_view")) {
            // line 121
            echo "        ";
            ob_start();
            // line 122
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_case_widget_comments", array("id" => $this->getAttribute(            // line 124
($context["entity"] ?? null), "id", array()))), "cssClass" => "list-widget comments-widget", "title" => ""));
            // line 127
            echo "
        ";
            $context["caseComments"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 129
            echo "
        ";
            // line 130
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.block.comments"), "subblocks" => array(0 => array("data" => array(0 =>             // line 134
($context["caseComments"] ?? null)))))));
            // line 138
            echo "    ";
        }
        // line 139
        echo "
    ";
        // line 140
        $context["id"] = "caseView";
        // line 141
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 142
        echo "
    ";
        // line 143
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCaseBundle:Case:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 143,  254 => 142,  251 => 141,  249 => 140,  246 => 139,  243 => 138,  241 => 134,  240 => 130,  237 => 129,  233 => 127,  231 => 124,  229 => 122,  226 => 121,  224 => 120,  221 => 119,  219 => 115,  218 => 110,  212 => 105,  206 => 102,  198 => 98,  192 => 95,  187 => 94,  185 => 93,  183 => 92,  181 => 91,  179 => 88,  178 => 86,  173 => 84,  169 => 81,  165 => 80,  163 => 79,  161 => 78,  159 => 76,  155 => 73,  151 => 72,  149 => 71,  147 => 70,  141 => 67,  139 => 66,  135 => 65,  131 => 64,  127 => 63,  123 => 62,  119 => 61,  115 => 60,  111 => 59,  107 => 57,  105 => 56,  102 => 55,  95 => 52,  93 => 50,  92 => 47,  90 => 46,  87 => 45,  81 => 41,  79 => 39,  78 => 35,  76 => 34,  73 => 33,  69 => 31,  67 => 29,  65 => 28,  62 => 27,  49 => 16,  46 => 10,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCaseBundle:Case:view.html.twig", "");
    }
}
