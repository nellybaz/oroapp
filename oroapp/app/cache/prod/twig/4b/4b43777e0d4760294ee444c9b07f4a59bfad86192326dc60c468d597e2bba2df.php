<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce-crm/src/Oro/Bridge/ContactUs/Resources/views/layouts/blank/contact_us_form.html.twig */
class __TwigTemplate_af3b5ae332f59b51afc2b84f0d6f14071234a1672298f9dff6d9fdd692b67440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contact_request_widget' => array($this, 'block_contact_request_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('contact_request_widget', $context, $blocks);
    }

    public function block_contact_request_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"contact-us-form\" data-focusable>
        ";
        // line 3
        $context["formAttr"] = array("id" => $this->getAttribute($this->getAttribute(        // line 4
($context["form"] ?? null), "vars", array()), "id", array()), "novalidate" => "novalidate");
        // line 7
        echo "
        ";
        // line 8
        $context["fieldAttr"] = array("data-validation" => twig_jsonencode_filter(array("Oro\\Bundle\\ContactUsBundle\\Validator\\ContactRequestCallbackValidator" => array("target" => "preferredContactMethod", "deps" => array("oro.contactus.contactrequest.method.both" => array(0 => "emailAddress", 1 => "phone"), "oro.contactus.contactrequest.method.phone" => "phone", "oro.contactus.contactrequest.method.email" => "emailAddress")))));
        // line 20
        echo "
        ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => ($context["formAttr"] ?? null)));
        echo "
        <div class=\"grid\">
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row');
        echo "
                </div>
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row');
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--12\">
                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "organizationName", array()), 'row');
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--12\">
                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "preferredContactMethod", array()), 'row', array("attr" => ($context["fieldAttr"] ?? null)));
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'row');
        echo "
                </div>
                <div class=\"grid__column grid__column--6\">
                    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "emailAddress", array()), 'row');
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--12\">
                    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contactReason", array()), 'row');
        echo "
                </div>
            </div>
            <div class=\"grid__row grid__row--offset-none\">
                <div class=\"grid__column grid__column--12\">
                    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", array()), 'row', array("attr" => array("rows" => 25)));
        echo "
                </div>
            </div>
        </div>
        <div class=\"contact-us-form-actions\">
            <button class=\"role-submit btn btn--info\" type=\"submit\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.form.submit"), "html", null, true);
        echo "</button>
        </div>
        ";
        // line 63
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        ";
        // line 64
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null), ((array_key_exists("js_validation_options", $context)) ? (_twig_default_filter(($context["js_validation_options"] ?? null), array())) : (array())));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce-crm/src/Oro/Bridge/ContactUs/Resources/views/layouts/blank/contact_us_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 64,  112 => 63,  107 => 61,  99 => 56,  91 => 51,  83 => 46,  77 => 43,  69 => 38,  61 => 33,  53 => 28,  47 => 25,  40 => 21,  37 => 20,  35 => 8,  32 => 7,  30 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce-crm/src/Oro/Bridge/ContactUs/Resources/views/layouts/blank/contact_us_form.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce-crm/src/Oro/Bridge/ContactUs/Resources/views/layouts/blank/contact_us_form.html.twig");
    }
}
