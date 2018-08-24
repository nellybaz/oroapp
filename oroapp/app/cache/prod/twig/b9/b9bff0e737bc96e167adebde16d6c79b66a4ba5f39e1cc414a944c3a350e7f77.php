<?php

/* OroLocaleBundle:Localization:view.html.twig */
class __TwigTemplate_8c887b89bb583f01ba6fd0bce299b48be31e1cd44a87b9210761fa67bbbbf7d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroLocaleBundle:Localization:view.html.twig", 1);
        $this->blocks = array(
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroLocaleBundle:Localization:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_locale_localization_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.entity_plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.navigation.view", array("%name%" => (($this->getAttribute(        // line 12
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))))));
        // line 15
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_content_data($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        ob_start();
        // line 20
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.name.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "name", array())), "method"), "html", null, true);
        echo "
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.title.label"), 1 => $this->getAttribute(($context["entity"] ?? null), "defaultTitle", array())), "method"), "html", null, true);
        echo "
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.language.label"), 1 => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->formatLocale($this->getAttribute(($context["entity"] ?? null), "languageCode", array()))), "method"), "html", null, true);
        echo "
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.formatting_code.label"), 1 => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getFormattingTitleByCode($this->getAttribute(($context["entity"] ?? null), "formattingCode", array()))), "method"), "html", null, true);
        echo "

        ";
        // line 25
        if ($this->getAttribute(($context["entity"] ?? null), "parentLocalization", array())) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderHtmlProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.parent_localization.label"), 1 => $this->getAttribute(            // line 28
($context["UI"] ?? null), "entityViewLink", array(0 => $this->getAttribute(($context["entity"] ?? null), "parentLocalization", array()), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "parentLocalization", array()), "name", array()), 2 => "oro_locale_localization_view"), "method")), "method"), "html", null, true);
            // line 29
            echo "
        ";
        }
        // line 31
        echo "    ";
        $context["localizationInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 36
($context["localizationInfo"] ?? null))))));
        // line 38
        echo "
    ";
        // line 39
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.locale.localization.child_localizations.label"), "subblocks" => array(0 => array("data" => array(0 =>         // line 41
$context["dataGrid"]->getrenderGrid("oro-locale-localizations-children-grid", array("localization_id" => $this->getAttribute(($context["entity"] ?? null), "id", array())))), "spanClass" => "order-line-items")))));
        // line 43
        echo "
    ";
        // line 44
        $context["id"] = "localization-view";
        // line 45
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 46
        echo "
    ";
        // line 47
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroLocaleBundle:Localization:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 47,  107 => 46,  104 => 45,  102 => 44,  99 => 43,  97 => 41,  96 => 39,  93 => 38,  91 => 36,  90 => 33,  87 => 32,  84 => 31,  80 => 29,  78 => 28,  76 => 26,  74 => 25,  69 => 23,  65 => 22,  61 => 21,  56 => 20,  53 => 19,  50 => 18,  43 => 15,  41 => 12,  40 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroLocaleBundle:Localization:view.html.twig", "");
    }
}
