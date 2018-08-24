<?php

/* @OroFrontend/layouts/default/oro_frontend_style_book_group/notifications.twig */
class __TwigTemplate_2ef87efeadc9dac1091d9f836f30171535fc33b4439eab45de8b82ff5d461f99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_style_book_grid_element_notification_flash_widget' => array($this, 'block__style_book_grid_element_notification_flash_widget'),
            '_style_book_grid_element_notification_flash_success_widget' => array($this, 'block__style_book_grid_element_notification_flash_success_widget'),
            '_style_book_grid_element_notification_flash_warning_widget' => array($this, 'block__style_book_grid_element_notification_flash_warning_widget'),
            '_style_book_grid_element_notification_message_widget' => array($this, 'block__style_book_grid_element_notification_message_widget'),
            '_style_book_grid_element_notification_message_success_widget' => array($this, 'block__style_book_grid_element_notification_message_success_widget'),
            '_style_book_grid_element_notification_message_warning_widget' => array($this, 'block__style_book_grid_element_notification_message_warning_widget'),
            '_style_book_grid_element_callout_info_widget' => array($this, 'block__style_book_grid_element_callout_info_widget'),
            '_style_book_grid_element_callout_warning_widget' => array($this, 'block__style_book_grid_element_callout_warning_widget'),
            '_style_book_grid_element_callout_danger_widget' => array($this, 'block__style_book_grid_element_callout_danger_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_style_book_grid_element_notification_flash_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_style_book_grid_element_notification_flash_success_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('_style_book_grid_element_notification_flash_warning_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('_style_book_grid_element_notification_message_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('_style_book_grid_element_notification_message_success_widget', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('_style_book_grid_element_notification_message_warning_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('_style_book_grid_element_callout_info_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('_style_book_grid_element_callout_warning_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('_style_book_grid_element_callout_danger_widget', $context, $blocks);
    }

    // line 1
    public function block__style_book_grid_element_notification_flash_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"notification-flash notification-flash--error\">
        <div class=\"notification-flash__badge\">
            <i class=\"fa-exclamation-triangle\"></i>
        </div>
        <div class=\"notification-flash__text\">
            Google calendar cannot by synchronized, as Google integration is not yet configured. Please contact system administrator.
        </div>
    </div>
";
    }

    // line 12
    public function block__style_book_grid_element_notification_flash_success_widget($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"notification-flash notification-flash--success\">
        <div class=\"notification-flash__badge\">
            <i class=\"fa-check\"></i>
        </div>
        <div class=\"notification-flash__text\">
            The shopping list 'PO1463' was successfully created.
        </div>
    </div>
";
    }

    // line 23
    public function block__style_book_grid_element_notification_flash_warning_widget($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"notification-flash notification-flash--warning\">
        <div class=\"notification-flash__badge\">
            <i class=\"fa-exclamation-circle\"></i>
        </div>
        <div class=\"notification-flash__text\">
            The connection cannot be established at the moment. Please check your internet connection.
        </div>
    </div>
";
    }

    // line 34
    public function block__style_book_grid_element_notification_message_widget($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\"notification notification--error\">
        <div class=\"notification__item\">
            <i class=\"fa-exclamation-triangle\"></i>
            <span class=\"notification__text\">Please reassign the tasks to a new responsible user before deleting the user with the sales role.</span>
        </div>
    </div>
";
    }

    // line 43
    public function block__style_book_grid_element_notification_message_success_widget($context, array $blocks = array())
    {
        // line 44
        echo "    <div class=\"notification notification--success\">
        <div class=\"notification__item\">
            <i class=\"fa-check\"></i>
            <span class=\"notification__text\">The customer information was updated.</span>
        </div>
    </div>
";
    }

    // line 52
    public function block__style_book_grid_element_notification_message_warning_widget($context, array $blocks = array())
    {
        // line 53
        echo "    <div class=\"notification notification--warning\">
        <div class=\"notification__item\">
            <i class=\"fa-exclamation-circle\"></i>
            <span class=\"notification__text\">Please fill in the shipping address in order to proceed with the checkout.</span>
        </div>
    </div>
";
    }

    // line 61
    public function block__style_book_grid_element_callout_info_widget($context, array $blocks = array())
    {
        // line 62
        echo "    <div class=\"callout-block\">
        <h2 class=\"callout-block__title\">Information</h2>
        <p class=\"callout-block__text\">It is important to keep at least one consumer running.</p>
    </div>
";
    }

    // line 68
    public function block__style_book_grid_element_callout_warning_widget($context, array $blocks = array())
    {
        // line 69
        echo "    <div class=\"callout-block warning\">
        <h2 class=\"callout-block__title\">Warning!</h2>
        <p class=\"callout-block__text\">Beware of the planned system maintenance on March 03, 2017 from 00:00 UTC to 00:30 UTC.</p>
    </div>
";
    }

    // line 75
    public function block__style_book_grid_element_callout_danger_widget($context, array $blocks = array())
    {
        // line 76
        echo "    <div class=\"callout-block danger\">
        <h2 class=\"callout-block__title\">Danger!</h2>
        <p class=\"callout-block__text\">This operation is irreversible. Ensure you have backed up the data before you trigger it.</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/oro_frontend_style_book_group/notifications.twig";
    }

    public function getDebugInfo()
    {
        return array (  181 => 76,  178 => 75,  170 => 69,  167 => 68,  159 => 62,  156 => 61,  146 => 53,  143 => 52,  133 => 44,  130 => 43,  120 => 35,  117 => 34,  105 => 24,  102 => 23,  90 => 13,  87 => 12,  75 => 2,  72 => 1,  68 => 75,  65 => 74,  63 => 68,  60 => 67,  58 => 61,  55 => 60,  53 => 52,  50 => 51,  48 => 43,  45 => 42,  43 => 34,  40 => 33,  38 => 23,  35 => 22,  33 => 12,  30 => 11,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroFrontend/layouts/default/oro_frontend_style_book_group/notifications.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/oro_frontend_style_book_group/notifications.twig");
    }
}
