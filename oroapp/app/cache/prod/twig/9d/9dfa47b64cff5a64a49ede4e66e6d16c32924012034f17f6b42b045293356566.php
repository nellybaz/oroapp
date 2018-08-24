<?php

/* OroContactBundle:Contact:view.html.twig */
class __TwigTemplate_9d4627c92dfe294bf379a1d56604632bcf5028fc8349c7dfeb5812471a997bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroContactBundle:Contact:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
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
        // line 2
        $context["macros"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroContactBundle:Contact:view.html.twig", 2);
        // line 4
        $context["fullname"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["entity"] ?? null)), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity.item", array("%id%" => $this->getAttribute(($context["entity"] ?? null), "id", array()))));

        $this->env->getExtension("oro_title")->set(array("params" => array("%contact.name%" =>         // line 5
($context["fullname"] ?? null))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_update", array("id" => $this->getAttribute(            // line 10
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.entity_label"))), "method"), "html", null, true);
            // line 12
            echo "
    ";
        }
        // line 14
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_contact", array("id" => $this->getAttribute(            // line 16
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-contact", "dataId" => $this->getAttribute(            // line 20
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.entity_label"))), "method"), "html", null, true);
            // line 22
            echo "
    ";
        }
    }

    // line 26
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 28
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.entity_plural_label"), "entityTitle" =>         // line 31
($context["fullname"] ?? null));
        // line 33
        echo "    ";
        $context["avatar"] = $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getConfiguredImageUrl(($context["entity"] ?? null), "picture");
        // line 34
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 37
    public function block_stats($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $this->loadTemplate("OroContactBundle:Contact:headerStats.html.twig", "OroContactBundle:Contact:view.html.twig", 38)->display(array_merge($context, array("entity" => ($context["entity"] ?? null))));
    }

    // line 41
    public function block_content_data($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        ob_start();
        // line 43
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_info", array("id" => $this->getAttribute(        // line 45
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Information")));
        // line 47
        echo "
    ";
        $context["contactInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "
    ";
        // line 50
        ob_start();
        // line 51
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "contentClasses" => array(), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_address_book", array("id" => $this->getAttribute(        // line 54
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address Book")));
        // line 56
        echo "
    ";
        $context["addressBookWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        echo "
    ";
        // line 59
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 64
($context["contactInformationWidget"] ?? null))), 1 => array("data" => array(0 =>         // line 65
($context["addressBookWidget"] ?? null))))));
        // line 69
        echo "
    ";
        // line 70
        $context["id"] = "contactView";
        // line 71
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 72
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroContactBundle:Contact:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 72,  132 => 71,  130 => 70,  127 => 69,  125 => 65,  124 => 64,  123 => 59,  120 => 58,  116 => 56,  114 => 54,  112 => 51,  110 => 50,  107 => 49,  103 => 47,  101 => 45,  99 => 43,  96 => 42,  93 => 41,  88 => 38,  85 => 37,  78 => 34,  75 => 33,  73 => 31,  72 => 28,  70 => 27,  67 => 26,  61 => 22,  59 => 20,  58 => 16,  56 => 15,  53 => 14,  49 => 12,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  35 => 1,  33 => 5,  30 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactBundle:Contact:view.html.twig", "");
    }
}
