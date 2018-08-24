<?php

/* OroUserBundle:Mail:invite.html.twig */
class __TwigTemplate_89ecfc6f8d9077989f144d3455f73fd76d007218391de4cae02f6d3429fa0403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUserBundle:Mail:layout.html.twig", "OroUserBundle:Mail:invite.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUserBundle:Mail:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        @media (max-width: 480pt) {
            .wrapper{
                width: 100% !important;
            }
        }
        a:hover {
            text-decoration: underline;
        }
    </style>

    <table class=\"wrapper\" style=\"border-collapse: collapse; width: 640px; width: 480pt; max-width: 100%; box-sizing: border-box\">
        <tr>
            <td style=\"background-color: #ffffff; padding: 4pt\">
                <span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14pt; line-height: 14pt; color: #444444\">Hello, ";
        // line 18
        echo $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["user"] ?? null));
        echo "!</span>
                <div style=\"height: 10pt; line-height: 10pt\">&nbsp;</div>
                <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 5pt 0;\">
                    A new user has been created for you at <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_ui.application_url") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_security_login")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_ui.application_url"), "html", null, true);
        echo "</a>
                </p>
                <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                    Please use the following credentials to log in:
                </p>
                <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                    <strong>Login:</strong> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "
                </p>

                ";
        // line 30
        if ( !twig_test_empty(($context["password"] ?? null))) {
            // line 31
            echo "                    <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                        <strong>Password:</strong> ";
            // line 32
            echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
            echo "
                    </p>
                    <p></p>
                    <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                        <strong>We strongly recommend that you change your password after logging in.</strong>
                    </p>
                ";
        } else {
            // line 39
            echo "                    <p style=\"color: #444444; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; font-weight: normal; margin: 5pt 0 10pt 0;\">
                        <strong>Proceed to creating your own password by clicking the Reset Password button.</strong>
                    </p>
                    <table style=\"width: 100%;\">
                        <tbody>
                        <tr>
                            <td>&nbsp;</td>
                            <td style=\"padding: 5pt 0; background: #2ea63a; width: 130pt; text-align: center\">
                                <a style=\"color: #ffffff; font-size: 11pt; text-transform: uppercase; text-decoration: none; line-height: 1em; font-family: Arial, Helvetica, sans-serif;\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_ui.application_url"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_reset_reset", array("token" => $this->getAttribute(($context["user"] ?? null), "confirmationToken", array()))), "html", null, true);
            echo "\" target=\"_blank\">
                                    RESET&nbsp;PASSWORD
                                </a>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        </tbody>
                    </table>
                ";
        }
        // line 56
        echo "            </td>
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Mail:invite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 56,  95 => 47,  85 => 39,  75 => 32,  72 => 31,  70 => 30,  64 => 27,  53 => 21,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Mail:invite.html.twig", "");
    }
}
