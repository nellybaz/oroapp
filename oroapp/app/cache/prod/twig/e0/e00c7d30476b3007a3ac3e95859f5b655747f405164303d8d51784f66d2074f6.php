<?php

/* OroContactBundle:Contact/widget:accountContacts.html.twig */
class __TwigTemplate_ffd0efa18055bf3f8e3628b1cdfcef0be43d22fcb8b688acf0600c54b561b080 extends Twig_Template
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
        echo "<div class=\"widget-content\">
    <div class=\"contact-box-wrapper\">
        ";
        // line 3
        if ((($context["defaultContact"] ?? null) || twig_length_filter($this->env, ($context["contactsWithoutDefault"] ?? null)))) {
            // line 4
            echo "            ";
            if (($context["defaultContact"] ?? null)) {
                // line 5
                echo "                ";
                echo $this->getAttribute($this, "render_contact_box", array(0 => ($context["entity"] ?? null), 1 => ($context["defaultContact"] ?? null), 2 => true), "method");
                echo "
            ";
            }
            // line 7
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["contactsWithoutDefault"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 8
                echo "                ";
                echo $this->getAttribute($this, "render_contact_box", array(0 => ($context["entity"] ?? null), 1 => $context["contact"], 2 => false), "method");
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        ";
        } else {
            // line 11
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.account.no_contacts_exist"), "html", null, true);
            echo "</p>
        ";
        }
        // line 13
        echo "    </div>
</div>

";
    }

    // line 16
    public function getrender_contact_box($__account__ = null, $__contact__ = null, $__isDefault__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "account" => $__account__,
            "contact" => $__contact__,
            "isDefault" => $__isDefault__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroContactBundle:Contact/widget:accountContacts.html.twig", 17);
            // line 18
            echo "    ";
            $context["Email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroContactBundle:Contact/widget:accountContacts.html.twig", 18);
            // line 19
            echo "    <div class=\"contact-box\">
        <div class=\"contact-box-row\">
            <a class=\"contact-box-name-link contact-box-link\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_contact_view", array("id" => $this->getAttribute(($context["contact"] ?? null), "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["contact"] ?? null)));
            echo "
                ";
            // line 23
            if (($context["isDefault"] ?? null)) {
                // line 24
                echo "                    <span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.default_contact.label"), "html", null, true);
                echo "</span>
                ";
            }
            // line 26
            echo "            </a>
        </div>
        <div class=\"contact-box-row\"></div>
        <div class=\"contact-box-row\">
            <span class=\"contact-element-label\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.phone.label"), "html", null, true);
            echo ":</span>
            ";
            // line 31
            if ($this->getAttribute(($context["contact"] ?? null), "primaryPhone", array())) {
                // line 32
                echo "                ";
                echo $context["UI"]->getrenderPhoneWithActions($this->getAttribute(($context["contact"] ?? null), "primaryPhone", array()), ($context["contact"] ?? null));
                echo "
            ";
            } else {
                // line 34
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
                echo "
            ";
            }
            // line 36
            echo "        </div>
        <div class=\"contact-box-row\">
            <span class=\"contact-element-label\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.account.email.label"), "html", null, true);
            echo ":</span>
            ";
            // line 39
            if ($this->getAttribute(($context["contact"] ?? null), "primaryEmail", array())) {
                // line 40
                echo "                ";
                echo $context["Email"]->getrenderEmailWithActions($this->getAttribute($this->getAttribute(($context["contact"] ?? null), "primaryEmail", array()), "email", array()), ($context["contact"] ?? null));
                echo "
            ";
            } else {
                // line 42
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
                echo "
            ";
            }
            // line 44
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroContactBundle:Contact/widget:accountContacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 44,  144 => 42,  138 => 40,  136 => 39,  132 => 38,  128 => 36,  122 => 34,  116 => 32,  114 => 31,  110 => 30,  104 => 26,  98 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 19,  81 => 18,  78 => 17,  64 => 16,  57 => 13,  51 => 11,  48 => 10,  39 => 8,  34 => 7,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactBundle:Contact/widget:accountContacts.html.twig", "");
    }
}
