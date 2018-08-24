<?php

/* OroMagentoBundle:Customer:update.html.twig */
class __TwigTemplate_219da1a24c658cc33a6979538d99168e2c9b0db57e16f9dc2f23aea1092840ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroMagentoBundle:Customer:update.html.twig", 1);
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
        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroMagentoBundle:Include:fields.html.twig"));
        // line 3
        $context["formAction"] = (($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_update", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_create")));
        // line 5
        $context["fullname"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["entity"] ?? null)), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"));

        $this->env->getExtension("oro_title")->set(array("params" => array("%customer.name%" =>         // line 6
($context["fullname"] ?? null), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.entity_label"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_index")), "method"), "html", null, true);
        echo "
    ";
        // line 10
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method");
        // line 11
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_magento_customer_update"))) {
            // line 12
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 17
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 19
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 20
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_customer_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.entity_plural_label"), "entityTitle" =>             // line 23
($context["fullname"] ?? null));
            // line 25
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 27
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.entity_label")));
            // line 28
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroMagentoBundle:Customer:update.html.twig", 28)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 29
            echo "    ";
        }
    }

    // line 32
    public function block_content_data($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $context["id"] = "customer";
        // line 34
        echo "
    ";
        // line 35
        $context["formRows"] = array(0 =>         // line 36
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dataChannel", array()), 'row'), 1 =>         // line 37
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "store", array()), 'row'), 2 =>         // line 38
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "group", array()), 'row'), 3 =>         // line 39
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "namePrefix", array()), 'row'), 4 =>         // line 40
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row'), 5 =>         // line 41
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "middleName", array()), 'row'), 6 =>         // line 42
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row'), 7 =>         // line 43
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nameSuffix", array()), 'row'), 8 =>         // line 44
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row'), 9 =>         // line 45
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "birthday", array()), 'row'), 10 =>         // line 46
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "vat", array()), 'row'), 11 =>         // line 47
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "gender", array()), 'row'), 12 =>         // line 48
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contact", array()), 'row'));
        // line 50
        echo "
    ";
        // line 51
        if ($this->getAttribute(($context["form"] ?? null), "generatedPassword", array(), "any", true, true)) {
            // line 52
            echo "        ";
            $context["formRows"] = twig_array_merge(($context["formRows"] ?? null), array(0 => (("<h5 class=\"user-fieldset\"><span>" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.password.section")) . "</span></h5>"), 1 =>             // line 54
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "generatedPassword", array()), 'row')));
            // line 56
            echo "    ";
        }
        // line 57
        echo "
    ";
        // line 58
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Basic Information"), "data" =>         // line 64
($context["formRows"] ?? null)), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.addresses.label"), "data" => array(0 =>         // line 69
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "addresses", array()), 'widget'))))));
        // line 74
        echo "
    ";
        // line 75
        $context["data"] = array("formErrors" => ((        // line 76
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 77
($context["dataBlocks"] ?? null));
        // line 79
        echo "
    ";
        // line 80
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Customer:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 80,  144 => 79,  142 => 77,  141 => 76,  140 => 75,  137 => 74,  135 => 69,  134 => 64,  133 => 58,  130 => 57,  127 => 56,  125 => 54,  123 => 52,  121 => 51,  118 => 50,  116 => 48,  115 => 47,  114 => 46,  113 => 45,  112 => 44,  111 => 43,  110 => 42,  109 => 41,  108 => 40,  107 => 39,  106 => 38,  105 => 37,  104 => 36,  103 => 35,  100 => 34,  97 => 33,  94 => 32,  89 => 29,  86 => 28,  83 => 27,  77 => 25,  75 => 23,  74 => 20,  72 => 19,  69 => 18,  66 => 17,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  31 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Customer:update.html.twig", "");
    }
}
