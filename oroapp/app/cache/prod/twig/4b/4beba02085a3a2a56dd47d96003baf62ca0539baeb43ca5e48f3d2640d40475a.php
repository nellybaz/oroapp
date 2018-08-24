<?php

/* OroCustomerBundle:layouts/blank/oro_customer_customer_user_security_login:customer_user_login_form.html.twig */
class __TwigTemplate_474c0f3b24d4a1668b1cb82cb43f6ed38ae0be5aa0f6c02bbcdc51c451d52f16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block_row' => array($this, 'block_block_row'),
            '_login_page_widget' => array($this, 'block__login_page_widget'),
            '_login_form_start_widget' => array($this, 'block__login_form_start_widget'),
            '_login_form_end_widget' => array($this, 'block__login_form_end_widget'),
            '_login_form_notifications_widget' => array($this, 'block__login_form_notifications_widget'),
            '_login_form_remember_widget' => array($this, 'block__login_form_remember_widget'),
            '_login_form_username_widget' => array($this, 'block__login_form_username_widget'),
            '_login_form_password_widget' => array($this, 'block__login_form_password_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('block_row', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_login_page_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('_login_form_start_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('_login_form_end_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('_login_form_notifications_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('_login_form_remember_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('_login_form_username_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('_login_form_password_widget', $context, $blocks);
    }

    // line 1
    public function block_block_row($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"form-row\">
        ";
        // line 3
        if ((($context["type"] ?? null) != "checkbox")) {
            // line 4
            echo "        <div class=\"form-row__label\">";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'label');
            echo "</div>
        ";
        }
        // line 6
        echo "        <div class=\"form-row__content\">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
    </div>";
    }

    // line 10
    public function block__login_page_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " login-form"));
        // line 14
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 19
    public function block__login_form_start_widget($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" => "form-login", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_customer_customer_user_security_check"), "method" => "post"));
        // line 25
        echo "    <form ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"grid\">
            ";
        // line 27
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 30
    public function block__login_form_end_widget($context, array $blocks = array())
    {
        // line 31
        echo "            ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </form>
    <script type=\"text/javascript\">
        require(['jquery', 'jquery.validate'],
            function (\$) {
                \$('#form-login').validate({
                    onfocusout: false
                });
            });
    </script>
";
    }

    // line 44
    public function block__login_form_notifications_widget($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " notification"));
        // line 48
        echo "    <div class=\"form-row\">
        <div class=\"notifications notifications--error\">";
        // line 49
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
    </div>
";
    }

    // line 53
    public function block__login_form_remember_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'row');
        echo "
";
    }

    // line 57
    public function block__login_form_username_widget($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("required" => "required", "autofocus" => true, "data-validation" => array("NotBlank" => array("payload" => null), "Email" => array("payload" => null)), "~class" => " input input--full"));
        // line 64
        echo "
    ";
        // line 65
        $context["label_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["label_attr"] ?? null), array("~class" => " label"));
        // line 68
        echo "
    ";
        // line 69
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'row', array("attr" =>         // line 70
($context["attr"] ?? null), "label_attr" =>         // line 71
($context["label_attr"] ?? null)));
        // line 72
        echo "
";
    }

    // line 75
    public function block__login_form_password_widget($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-validation" => array("NotBlank" => array("payload" => null))));
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock("_login_form_username_widget", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/oro_customer_customer_user_security_login:customer_user_login_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  201 => 80,  198 => 79,  195 => 76,  192 => 75,  187 => 72,  185 => 71,  184 => 70,  183 => 69,  180 => 68,  178 => 65,  175 => 64,  172 => 58,  169 => 57,  162 => 54,  159 => 53,  152 => 49,  149 => 48,  146 => 45,  143 => 44,  126 => 31,  123 => 30,  117 => 27,  111 => 25,  108 => 20,  105 => 19,  98 => 15,  93 => 14,  90 => 11,  87 => 10,  80 => 6,  74 => 4,  72 => 3,  69 => 2,  66 => 1,  62 => 75,  59 => 74,  57 => 57,  54 => 56,  52 => 53,  49 => 52,  47 => 44,  44 => 43,  42 => 30,  39 => 29,  37 => 19,  34 => 18,  32 => 10,  29 => 9,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/oro_customer_customer_user_security_login:customer_user_login_form.html.twig", "");
    }
}
