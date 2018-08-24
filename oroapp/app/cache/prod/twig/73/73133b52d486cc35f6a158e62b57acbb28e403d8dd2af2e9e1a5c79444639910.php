<?php

/* OroActionBundle:Operation:page.html.twig */
class __TwigTemplate_b48983f748cde0aadc58014e83fdbec8b9f74b9fb9065ec183131718da13113b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroActionBundle:Operation:page.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
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
        $context["formAction"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uri", array());
        // line 4
        $context["entity"] = $this->getAttribute(($context["context"] ?? null), "data", array());
        // line 6
        if (($context["entity"] ?? null)) {
            // line 7
            $context["className"] = $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute(($context["context"] ?? null), "data", array()));
            // line 8
            $context["entityLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(($context["className"] ?? null), "label"));
            // line 9
            $context["indexUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassRoute(($context["className"] ?? null), "name"));

            $this->env->getExtension("oro_title")->set(array("titleTemplate" => "%entity% - %operationName% - %label% - %pluralLabel%", "params" => array("%entity%" => $this->getAttribute(            // line 14
($context["entity"] ?? null), "__toString", array()), "%operationName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(            // line 15
($context["operation"] ?? null), "definition", array()), "label", array())), "%label%" =>             // line 16
($context["entityLabel"] ?? null), "%pluralLabel%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(            // line 17
($context["className"] ?? null), "plural_label")))));
        } else {
            // line 21
            $context["indexUrl"] = "";

            $this->env->getExtension("oro_title")->set(array("titleTemplate" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(            // line 22
($context["operation"] ?? null), "definition", array()), "label", array()))));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if (($context["entity"] ?? null)) {
            // line 27
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 28
($context["entity"] ?? null), "indexPath" =>             // line 29
($context["indexUrl"] ?? null), "indexLabel" =>             // line 30
($context["entityLabel"] ?? null), "entityTitle" => ((            // line 31
array_key_exists("entity", $context)) ? (_twig_default_filter(($context["entity"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
            // line 33
            echo "
        ";
            // line 34
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroActionBundle:Operation:page.html.twig", 36)->display(array_merge($context, array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["operation"] ?? null), "definition", array()), "label", array())))));
            // line 37
            echo "    ";
        }
    }

    // line 40
    public function block_navButtons($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => ((array_key_exists("fromUrl", $context)) ? (_twig_default_filter(($context["fromUrl"] ?? null), ($context["indexUrl"] ?? null))) : (($context["indexUrl"] ?? null)))), "method"), "html", null, true);
        echo "

    ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => "Submit"), "method"))), "method"), "html", null, true);
        echo "
";
    }

    // line 46
    public function block_content_data($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        if ( !array_key_exists("id", $context)) {
            // line 48
            echo "        ";
            $context["id"] = ("action-page-" . $this->getAttribute(($context["operation"] ?? null), "name", array()));
            // line 49
            echo "    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if ( !array_key_exists("data", $context)) {
            // line 52
            echo "        ";
            $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(            // line 53
($context["operation"] ?? null), "definition", array()), "label", array())), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>             // line 57
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget'))))));
            // line 61
            echo "
        ";
            // line 62
            $context["data"] = array("formErrors" => ((            // line 63
array_key_exists("formErrors", $context)) ? (_twig_default_filter(($context["formErrors"] ?? null), "")) : ("")), "dataBlocks" =>             // line 64
($context["dataBlocks"] ?? null));
            // line 66
            echo "    ";
        }
        // line 67
        echo "
    ";
        // line 68
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroActionBundle:Operation:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 68,  132 => 67,  129 => 66,  127 => 64,  126 => 63,  125 => 62,  122 => 61,  120 => 57,  119 => 53,  117 => 52,  115 => 51,  112 => 50,  109 => 49,  106 => 48,  103 => 47,  100 => 46,  94 => 43,  88 => 41,  85 => 40,  80 => 37,  77 => 36,  72 => 34,  69 => 33,  67 => 31,  66 => 30,  65 => 29,  64 => 28,  62 => 27,  59 => 26,  56 => 25,  52 => 1,  49 => 22,  46 => 21,  43 => 17,  42 => 16,  41 => 15,  40 => 14,  37 => 9,  35 => 8,  33 => 7,  31 => 6,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroActionBundle:Operation:page.html.twig", "");
    }
}
