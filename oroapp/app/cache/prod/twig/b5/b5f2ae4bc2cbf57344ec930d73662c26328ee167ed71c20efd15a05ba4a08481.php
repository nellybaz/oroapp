<?php

/* OroDotmailerBundle:DataField:view.html.twig */
class __TwigTemplate_35052fc198ebb14f8f9166776f03202938880c8a3192435d9cd8dce0e3a9fa23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroDotmailerBundle:DataField:view.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
            'navButtons' => array($this, 'block_navButtons'),
            'stats' => array($this, 'block_stats'),
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
        $context["macros"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDotmailerBundle:DataField:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%datafield.name%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "dotmailer-page";
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_dotmailer_datafield", array("id" => $this->getAttribute(            // line 9
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-lead", "dataId" => $this->getAttribute(            // line 13
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.entity_label"))), "method"), "html", null, true);
            // line 15
            echo "
    ";
        }
    }

    // line 19
    public function block_stats($context, array $blocks = array())
    {
        // line 20
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute(($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 23
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 25
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 28
($context["entity"] ?? null), "name", array()));
        // line 30
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_content_data($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_info", array("id" => $this->getAttribute(        // line 37
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Data Field Information")));
        // line 39
        echo "
    ";
        $context["dataFieldWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
    ";
        // line 42
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 47
($context["dataFieldWidget"] ?? null))))));
        // line 51
        echo "
    ";
        // line 52
        $context["id"] = "dataFieldView";
        // line 53
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 54
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroDotmailerBundle:DataField:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 54,  113 => 53,  111 => 52,  108 => 51,  106 => 47,  105 => 42,  102 => 41,  98 => 39,  96 => 37,  94 => 35,  91 => 34,  88 => 33,  81 => 30,  79 => 28,  78 => 25,  76 => 24,  73 => 23,  64 => 20,  61 => 19,  55 => 15,  53 => 13,  52 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 5,  34 => 1,  32 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDotmailerBundle:DataField:view.html.twig", "");
    }
}
