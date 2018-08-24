<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form_cms_update.yml
 */

class __Oro_Layout_Update_3e5fada7b2b0aa1c7e5147c7941d0a8603277e7794926f910725fa0ea6ca0cc0 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form_cms_update.html.twig' );
        $layoutManipulator->add( 'login_page_styles', 'head', 'style', array (
          'visible' => '=data["oro_cms_login_page"].getDefaultLoginPage().getCss()!=null',
          'content' => '=data["oro_cms_login_page"].getDefaultLoginPage().getCss()',
        ) );
        $layoutManipulator->add( 'login_page_logo', 'login_page', 'login_page_logo', array (
          'visible' => '=data["oro_cms_login_page"].getDefaultLoginPage().getLogoImage()!=null',
          'logo' => '=data["oro_cms_login_page"].getDefaultLoginPage().getLogoImage()',
        ), NULL, true );
        $layoutManipulator->add( 'login_page_top', 'login_page', 'text', array (
          'visible' => '=data["oro_cms_login_page"].getDefaultLoginPage().getTopContent()!=null',
          'text' => '=data["oro_cms_login_page"].getDefaultLoginPage().getTopContent()',
          'escape' => false,
        ), 'login_page_logo' );
        $layoutManipulator->add( 'login_page_bottom', 'login_page', 'text', array (
          'visible' => '=data["oro_cms_login_page"].getDefaultLoginPage().getBottomContent()!=null',
          'text' => '=data["oro_cms_login_page"].getDefaultLoginPage().getBottomContent()',
          'escape' => false,
        ) );
        $layoutManipulator->changeBlockType( 'login_page', 'login_page' );
        $layoutManipulator->setOption( 'login_page', 'loginPage', '=data["oro_cms_login_page"].getDefaultLoginPage()' );
    }
}