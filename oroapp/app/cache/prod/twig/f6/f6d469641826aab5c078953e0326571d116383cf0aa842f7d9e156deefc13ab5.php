<?php

/* OroAttachmentBundle:Attachment/dialog:update.html.twig */
class __TwigTemplate_a846321b4f4dffc4f94c084ef2ec3633008e39bdef10322a96f81450b8368a7f extends Twig_Template
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
        if ((array_key_exists("saved", $context) && ($context["saved"] ?? null))) {
            // line 2
            echo "    ";
            $context["messageText"] = ((((array_key_exists("update", $context)) ? (_twig_default_filter(($context["update"] ?? null), false)) : (false))) ? ("Attachment updated successfully") : ("Attachment created successfully"));
            // line 3
            echo "    ";
            $context["widgetResponse"] = array("widget" => array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(            // line 5
($context["messageText"] ?? null)), "triggerSuccess" => true, "remove" => true));
            // line 10
            echo "
    ";
            // line 11
            echo twig_jsonencode_filter(($context["widgetResponse"] ?? null));
            echo "
";
        } else {
            // line 13
            echo "<div class=\"widget-content\">
    ";
            // line 14
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => $this));
            // line 15
            echo "
    <div class=\"form-container\">
        <form id=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
            echo "\" method=\"post\">
            <fieldset class=\"form form-horizontal\">
                <div class=\"span6\">
                    ";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'row');
            echo "
                    ";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", array()), 'row');
            echo "
                    ";
            // line 22
            if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
                // line 23
                echo "                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row');
                echo "
                    ";
            }
            // line 25
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
                </div>
                <div class=\"widget-actions form-actions\" style=\"display: none;\">
                    <button class=\"btn\" type=\"reset\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                    <button class=\"btn btn-primary\" type=\"submit\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"), "html", null, true);
            echo "</button>
                </div>
            </fieldset>
        </form>
        ";
            // line 33
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Attachment/dialog:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  82 => 29,  78 => 28,  71 => 25,  65 => 23,  63 => 22,  59 => 21,  55 => 20,  45 => 17,  41 => 15,  39 => 14,  36 => 13,  31 => 11,  28 => 10,  26 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAttachmentBundle:Attachment/dialog:update.html.twig", "");
    }
}
