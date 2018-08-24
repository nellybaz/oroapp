<?php

/* @OroCMS/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form_cms_update.yml */
class __TwigTemplate_37818e1067c1a42ecc538a78a310445aa436007d0b821f5f33f3cf7faa9b24c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "layout:
    actions:
        - '@setBlockTheme':
            themes: 'customer_user_login_form_cms_update.html.twig'
        - '@add':
            id: login_page_styles
            parentId: head
            blockType: style
            options:
                visible: '=data[\"oro_cms_login_page\"].getDefaultLoginPage().getCss()!=null'
                content: '=data[\"oro_cms_login_page\"].getDefaultLoginPage().getCss()'
        - '@add':
            id: login_page_logo
            parentId: login_page
            blockType: login_page_logo
            options:
                visible: '=data[\"oro_cms_login_page\"].getDefaultLoginPage().getLogoImage()!=null'
                logo: '=data[\"oro_cms_login_page\"].getDefaultLoginPage().getLogoImage()'
            prepend: true
        - '@add':
            id: login_page_top
            parentId: login_page
            blockType: text
            options:
                visible: '=data[\"oro_cms_login_page\"].getDefaultLoginPage().getTopContent()!=null'
                text: '=data[\"oro_cms_login_page\"].getDefaultLoginPage().getTopContent()'
                escape: false
            siblingId: login_page_logo
        - '@add':
            id: login_page_bottom
            parentId: login_page
            blockType: text
            options:
                visible: '=data[\"oro_cms_login_page\"].getDefaultLoginPage().getBottomContent()!=null'
                text: '=data[\"oro_cms_login_page\"].getDefaultLoginPage().getBottomContent()'
                escape: false
        - '@changeBlockType':
            id: login_page
            blockType: login_page
        - '@setOption':
            id: login_page
            optionName: loginPage
            optionValue: '=data[\"oro_cms_login_page\"].getDefaultLoginPage()'
";
    }

    public function getTemplateName()
    {
        return "@OroCMS/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form_cms_update.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroCMS/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form_cms_update.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form_cms_update.yml");
    }
}
