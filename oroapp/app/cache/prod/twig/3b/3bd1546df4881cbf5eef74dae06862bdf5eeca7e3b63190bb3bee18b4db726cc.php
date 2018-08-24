<?php

/* OroFrontendBundle:layouts/blank/oro_frontend_style_book:content.html.twig */
class __TwigTemplate_7e3f24aade7361072e22142205b78bd3a9b670254affb8bff6da149f30b23fa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_style_book_main_content_widget' => array($this, 'block__style_book_main_content_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_style_book_main_content_widget', $context, $blocks);
    }

    public function block__style_book_main_content_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"content-section\">
        <h2 class=\"content-section__sub-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.main_content.sub_title_main"), "html", null, true);
        echo "</h2>
        <p class=\"content-section__text\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.main_content.text_content"), "html", null, true);
        echo "</p>
        <p class=\"content-section__text\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.main_content.text_content_third");
        echo "</p>
    </div>
    <div class=\"content-section\">
        <h2 class=\"content-section__sub-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.main_content.sub_title"), "html", null, true);
        echo "</h2>
        <p class=\"content-section__text\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.main_content.text_content_first"), "html", null, true);
        echo "</p>
        <p class=\"content-section__text\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.main_content.text_content_second"), "html", null, true);
        echo "</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank/oro_frontend_style_book:content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  43 => 8,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank/oro_frontend_style_book:content.html.twig", "");
    }
}
