<?php

/* OroUserBundle:Reset/dialog:forcePasswordResetConfirmation.html.twig */
class __TwigTemplate_a2367f4712f670a64a883e6d123b7727a73dc9a9d488da2077945c757505d2b6 extends Twig_Template
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
        if (array_key_exists("formAction", $context)) {
            // line 2
            echo "    <div class=\"widget-content\">
        <div class=\"form-container\">
            <form action=\"";
            // line 4
            echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
            echo "\" method=\"post\">
                <div class=\"modal-body ui-dialog-body\">
                    <p>";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.password.force_reset.popup.message", array("{{ user }}" => (("<b>" . twig_escape_filter($this->env, $this->getAttribute(            // line 7
($context["entity"] ?? null), "username", array()))) . "</b>")));
            // line 8
            echo "</p>
                </div>

                <div class=\"widget-actions form-actions\">
                    <button class=\"btn\" type=\"reset\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                    <button class=\"btn btn-primary\" type=\"submit\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.user.password.force_reset.popup.button"), "html", null, true);
            // line 15
            echo "</button>
                </div>
            </form>
        </div>
    </div>
";
        } else {
            // line 21
            echo "    ";
            $context["widgetResponse"] = array("widget" => array("trigger" => array(0 => array("eventFunction" => "execute", "name" => "refreshPage")), "remove" => true));
            // line 30
            echo "
    ";
            // line 31
            echo twig_jsonencode_filter(($context["widgetResponse"] ?? null));
            echo "
";
        }
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Reset/dialog:forcePasswordResetConfirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 33,  59 => 31,  56 => 30,  53 => 21,  45 => 15,  43 => 14,  39 => 12,  33 => 8,  31 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Reset/dialog:forcePasswordResetConfirmation.html.twig", "");
    }
}
