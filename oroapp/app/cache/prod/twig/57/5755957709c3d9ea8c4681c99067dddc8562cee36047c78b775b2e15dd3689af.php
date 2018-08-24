<?php

/* OroProductBundle:layouts/default/oro_product_frontend_quick_add_import/dialog:quick_add_import_directions.html.twig */
class __TwigTemplate_d925d67150f0d7fcd8b335cbcee47ff90f3bbe46ae1e5fc3f61fa899b77d3cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_quick_add_import_help_widget' => array($this, 'block__quick_add_import_help_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_quick_add_import_help_widget', $context, $blocks);
    }

    public function block__quick_add_import_help_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((($context["method"] ?? null) == "POST")) {
            // line 3
            echo "        <div class=\"alert alert-info import-notice notification--error\">
            <strong>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.feature.quick_add_import_help_widget.important"), "html", null, true);
            echo "</strong>:
            ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.feature.quick_add_import_help_widget.incorrect_message"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 8
        echo "
    <h5>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.feature.quick_add_import_help_widget.import_multiple_products"), "html", null, true);
        echo "</h5>

    <ol>
        <li>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.feature.quick_add_import_help_widget.click_here_to_download"), "html", null, true);
        echo "
            <a target=\"_blank\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroproduct/data-templates/quick-add/quick-order.csv"), "html", null, true);
        echo "\">
                ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.feature.quick_add_import_help_widget.templates.csv"), "html", null, true);
        echo "
            </a>,
            <a target=\"_blank\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroproduct/data-templates/quick-add/quick-order.xlsx"), "html", null, true);
        echo "\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.feature.quick_add_import_help_widget.templates.xlsx"), "html", null, true);
        echo "
            </a>,
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.feature.quick_add_import_help_widget.templates_conjunction"), "html", null, true);
        echo "
            <a target=\"_blank\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroproduct/data-templates/quick-add/quick-order.ods"), "html", null, true);
        echo "\">
                ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.feature.quick_add_import_help_widget.templates.ods"), "html", null, true);
        echo "
            </a>
        </li>
        <li>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.feature.quick_add_import_help_widget.enter_item_numbers.message"), "html", null, true);
        echo "</li>
        <li>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.feature.quick_add_import_help_widget.save_the_file.message"), "html", null, true);
        echo "</li>
    </ol>

";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/default/oro_product_frontend_quick_add_import/dialog:quick_add_import_directions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  87 => 24,  81 => 21,  77 => 20,  73 => 19,  68 => 17,  64 => 16,  59 => 14,  55 => 13,  51 => 12,  45 => 9,  42 => 8,  36 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/default/oro_product_frontend_quick_add_import/dialog:quick_add_import_directions.html.twig", "");
    }
}
