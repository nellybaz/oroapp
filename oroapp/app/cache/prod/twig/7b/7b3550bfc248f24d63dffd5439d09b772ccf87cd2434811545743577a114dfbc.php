<?php

/* OroMagentoContactUsBundle:layouts/embedded_default/oro_embedded_form_submit:magento_form.html.twig */
class __TwigTemplate_267755b320b148a28c56c89ca47c0f0317f4727416dedea7e0cd6338834cb340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'form_field_widget' => array($this, 'block_form_field_widget'),
            'form_fields_widget' => array($this, 'block_form_fields_widget'),
            '_embedded_form_comment_widget' => array($this, 'block__embedded_form_comment_widget'),
            '_embedded_form_submit_widget' => array($this, 'block__embedded_form_submit_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('fieldset_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_field_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('form_fields_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('_embedded_form_comment_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('_embedded_form_submit_widget', $context, $blocks);
    }

    // line 1
    public function block_fieldset_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"fieldset\">
        <h2 class=\"legend\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->processText(($context["title"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "</h2>
        <ul class=\"form-list\">
            ";
        // line 5
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </ul>
    </div>
";
    }

    // line 10
    public function block_form_field_widget($context, array $blocks = array())
    {
        // line 11
        echo "    <li";
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "extra_field", array()))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()) . "_holder"), "html", null, true);
            echo "\" ";
        }
        echo ">
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
    </li>
";
    }

    // line 16
    public function block_form_fields_widget($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"page-title\">
        <h1>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Contact Us", array(), "messages");
        echo "</h1>
    </div>
    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "name" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "novalidate" => "novalidate")));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    <script type=\"text/javascript\">
        (function () {
            var Oro = Oro || {};
            Oro.Utils = function () {
                /**
                 * Set Em text node
                 * @param {HTMLElement} el
                 * @param {boolean} required
                 */
                var setRequired = function (el, required) {
                    var labelNode = el.parentNode.previousSibling
                            , emNodes = labelNode.getElementsByTagName('em')
                            , emNode
                            ;

                    if (emNodes.length) {
                        emNode = emNodes[0];
                    } else {
                        emNode = labelNode.createElement('em');
                    }

                    if (emNode) {
                        labelNode.className = labelNode.className.replace(/(\\s*required)/, '');
                        if (required) {
                            emNode.innerText = '*';
                            labelNode.className = [labelNode.className, 'required'].join(' ');
                        } else {
                            emNode.innerText = '';
                        }
                    }
                };

                /**
                 * On change listener
                 *
                 * @param {HTMLSelectElement} el
                 */
                this.change = function (el) {
                    var value = el.value
                            , emailFieldId = document.getElementById(";
        // line 62
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "emailAddress", array()), "vars", array()), "id", array()));
        echo ")
                            , phoneFieldId = document.getElementById(";
        // line 63
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "phone", array()), "vars", array()), "id", array()));
        echo ")
                            ;

                    if (value === ";
        // line 66
        echo twig_jsonencode_filter(twig_constant("Oro\\Bundle\\ContactUsBundle\\Entity\\ContactRequest::CONTACT_METHOD_BOTH"));
        echo ") {
                        setRequired(emailFieldId, true);
                        setRequired(phoneFieldId, true);
                    } else if (value === ";
        // line 69
        echo twig_jsonencode_filter(twig_constant("Oro\\Bundle\\ContactUsBundle\\Entity\\ContactRequest::CONTACT_METHOD_PHONE"));
        echo ") {
                        setRequired(phoneFieldId, true);
                        setRequired(emailFieldId, false);
                    } else if (value === ";
        // line 72
        echo twig_jsonencode_filter(twig_constant("Oro\\Bundle\\ContactUsBundle\\Entity\\ContactRequest::CONTACT_METHOD_EMAIL"));
        echo ") {
                        setRequired(emailFieldId, true);
                        setRequired(phoneFieldId, false);
                    }
                }
            };

            Oro.Utils = new Oro.Utils();

            var selectEl = document.getElementById(";
        // line 81
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "preferredContactMethod", array()), "vars", array()), "id", array()));
        echo ");
            selectEl.onchange = function (event) {
                return Oro.Utils.change(event.target);
            }
            Oro.Utils.change(selectEl)
        })();
    </script>
";
    }

    // line 90
    public function block__embedded_form_comment_widget($context, array $blocks = array())
    {
        // line 91
        echo "    <li class=\"wide\">
        ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
        echo "
    </li>
";
    }

    // line 96
    public function block__embedded_form_submit_widget($context, array $blocks = array())
    {
        // line 97
        echo "    <div class=\"buttons-set\">
        <p class=\"required\">";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("oro.magentocontactus.required_fields", array(), "messages");
        echo "</p>
        ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoContactUsBundle:layouts/embedded_default/oro_embedded_form_submit:magento_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  217 => 99,  213 => 98,  210 => 97,  207 => 96,  200 => 92,  197 => 91,  194 => 90,  182 => 81,  170 => 72,  164 => 69,  158 => 66,  152 => 63,  148 => 62,  105 => 22,  101 => 21,  97 => 20,  92 => 18,  89 => 17,  86 => 16,  79 => 12,  70 => 11,  67 => 10,  59 => 5,  54 => 3,  51 => 2,  48 => 1,  44 => 96,  41 => 95,  39 => 90,  36 => 89,  34 => 16,  31 => 15,  29 => 10,  26 => 9,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoContactUsBundle:layouts/embedded_default/oro_embedded_form_submit:magento_form.html.twig", "");
    }
}
