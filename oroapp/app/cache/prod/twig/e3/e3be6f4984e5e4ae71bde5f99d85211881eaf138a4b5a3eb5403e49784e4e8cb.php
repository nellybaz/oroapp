<?php

/* !OroContactUsBundle:ContactRequest:update.html.twig */
class __TwigTemplate_37d393c1338d9e3e55a83c9151a237992cc1a8dbc4e722c8bf92a433ef70b409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "!OroContactUsBundle:ContactRequest:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contactus_request_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contactus_request_create")));
        // line 4
        $context["fullname"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%request.clientName%" =>         // line 5
($context["fullname"] ?? null))));
        // line 7
        $context["formAttr"] = array("data-validation" => array("Oro\\Bundle\\ContactUsBundle\\Validator\\ContactRequestCallbackValidator" => array("target" => "preferredContactMethod", "deps" => array("oro.contactus.contactrequest.method.both" => array(0 => "emailAddress", 1 => "phone"), "oro.contactus.contactrequest.method.phone" => "phone", "oro.contactus.contactrequest.method.email" => "emailAddress"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_navButtons($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_contactus_request_delete"))) {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contactus_request_delete", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 23
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contactus_request_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-contact-request-form", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 27
($context["form"] ?? null), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.entity_label"))), "method"), "html", null, true);
            // line 29
            echo "
        ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 32
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contactus_request_index"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"))), "method"), "html", null, true);
        echo "
    ";
        // line 33
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_contactus_request_view", "params" => array("id" => "\$id"))), "method");
        // line 37
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_contactus_request_create")) {
            // line 38
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_contactus_request_create")), "method"));
            // line 41
            echo "    ";
        }
        // line 42
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_contactus_request_edit")) {
            // line 43
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_contactus_request_update", "params" => array("id" => "\$id"))), "method"));
            // line 47
            echo "    ";
        }
        // line 48
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 51
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())) {
            // line 53
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 54
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contactus_request_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.entity_plural_label"), "entityTitle" =>             // line 57
($context["fullname"] ?? null));
            // line 59
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 61
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.contactrequest.entity_label")));
            // line 62
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "!OroContactUsBundle:ContactRequest:update.html.twig", 62)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 63
            echo "    ";
        }
    }

    // line 66
    public function block_content_data($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $context["id"] = "contact-request-form";
        // line 68
        echo "
    ";
        // line 69
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.block.general"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.block.request_information"), "data" => array(0 =>         // line 76
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row'), 1 =>         // line 77
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row'), 2 =>         // line 78
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "emailAddress", array()), 'row'), 3 =>         // line 79
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'row'), 4 =>         // line 80
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", array()), 'row'))))));
        // line 85
        echo "
    ";
        // line 86
        $context["additionalData"] = array();
        // line 87
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 88
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 89
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 91
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.block.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 93
($context["additionalData"] ?? null))))));
            // line 95
            echo "    ";
        }
        // line 96
        echo "
    ";
        // line 97
        $context["data"] = array("formErrors" => ((        // line 98
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 99
($context["dataBlocks"] ?? null));
        // line 101
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "!OroContactUsBundle:ContactRequest:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 101,  171 => 99,  170 => 98,  169 => 97,  166 => 96,  163 => 95,  161 => 93,  159 => 91,  156 => 90,  149 => 89,  146 => 88,  140 => 87,  138 => 86,  135 => 85,  133 => 80,  132 => 79,  131 => 78,  130 => 77,  129 => 76,  128 => 69,  125 => 68,  122 => 67,  119 => 66,  114 => 63,  111 => 62,  108 => 61,  102 => 59,  100 => 57,  99 => 54,  97 => 53,  94 => 52,  91 => 51,  84 => 48,  81 => 47,  78 => 43,  75 => 42,  72 => 41,  69 => 38,  66 => 37,  64 => 33,  59 => 32,  54 => 30,  51 => 29,  49 => 27,  48 => 23,  46 => 22,  43 => 21,  40 => 20,  36 => 1,  34 => 7,  32 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "!OroContactUsBundle:ContactRequest:update.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/crm/src/Oro/Bundle/ContactUsBundle/Resources/views/ContactRequest/update.html.twig");
    }
}
