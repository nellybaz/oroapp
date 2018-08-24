<?php

/* OroCMSBundle:layouts/blank/oro_customer_customer_user_security_login:customer_user_login_form_cms_update.html.twig */
class __TwigTemplate_be5af2e87f77619f990d785687684f45250e8db00df9365155712382568c63bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_login_page_widget' => array($this, 'block__login_page_widget'),
            '_login_page_logo_widget' => array($this, 'block__login_page_logo_widget'),
            '_login_page_top_widget' => array($this, 'block__login_page_top_widget'),
            '_login_page_bottom_widget' => array($this, 'block__login_page_bottom_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_login_page_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_login_page_logo_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('_login_page_top_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('_login_page_bottom_widget', $context, $blocks);
    }

    // line 1
    public function block__login_page_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((($context["loginPage"] ?? null) && $this->getAttribute(($context["loginPage"] ?? null), "backgroundImage", array()))) {
            // line 3
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("style" => ((((($this->getAttribute(            // line 4
($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . "background-image: url('") . $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFilteredImageUrl($this->getAttribute(($context["loginPage"] ?? null), "backgroundImage", array()), "login_page_background")) . "');")));
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 10
    public function block__login_page_logo_widget($context, array $blocks = array())
    {
        // line 11
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFilteredImageUrl(($context["logo"] ?? null), "login_page_logo"), "html", null, true);
        echo "\">
    </div>
";
    }

    // line 16
    public function block__login_page_top_widget($context, array $blocks = array())
    {
        // line 17
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 18
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 22
    public function block__login_page_bottom_widget($context, array $blocks = array())
    {
        // line 23
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 24
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:layouts/blank/oro_customer_customer_user_security_login:customer_user_login_form_cms_update.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  95 => 23,  92 => 22,  85 => 18,  80 => 17,  77 => 16,  70 => 12,  65 => 11,  62 => 10,  55 => 7,  52 => 6,  50 => 4,  48 => 3,  45 => 2,  42 => 1,  38 => 22,  35 => 21,  33 => 16,  30 => 15,  28 => 10,  25 => 9,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:layouts/blank/oro_customer_customer_user_security_login:customer_user_login_form_cms_update.html.twig", "");
    }
}
