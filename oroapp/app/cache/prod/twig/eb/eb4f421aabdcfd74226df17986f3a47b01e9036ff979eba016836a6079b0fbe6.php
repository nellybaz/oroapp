<?php

/* OroMagentoBundle:NewsletterSubscriber:buttons.html.twig */
class __TwigTemplate_c3ce8f2e7509fb3d15d888042303ca8af7ab0655fdab47810eff7c2c42e6bdae extends Twig_Template
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
        $context["subscribedId"] = twig_constant("Oro\\Bundle\\MagentoBundle\\Entity\\NewsletterSubscriber::STATUS_SUBSCRIBED");
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:NewsletterSubscriber:buttons.html.twig", 2);
        // line 3
        if ((array_key_exists("newsletterSubscriber", $context) &&  !twig_test_empty($this->getAttribute(($context["newsletterSubscriber"] ?? null), "id", array())))) {
            // line 4
            echo "    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["newsletterSubscriber"] ?? null))) {
                // line 5
                echo "        <div class=\"pull-left\" data-page-component-module=\"oromagento/js/app/components/subscription-manager\">
        ";
                // line 6
                if (((($this->getAttribute($this->getAttribute(($context["newsletterSubscriber"] ?? null), "status", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["newsletterSubscriber"] ?? null), "status", array(), "any", false, true), "id", array()), false)) : (false)) == ($context["subscribedId"] ?? null))) {
                    // line 7
                    echo "        ";
                    echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_newsletter_subscriber_unsubscribe", array("id" => $this->getAttribute(                    // line 8
($context["newsletterSubscriber"] ?? null), "id", array()))), "aCss" => "no-hash subscription unsubscribe-action", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.newslettersubscriber.action.unsubscribe")));
                    // line 11
                    echo "
        ";
                } else {
                    // line 13
                    echo "        ";
                    echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_newsletter_subscriber_subscribe", array("id" => $this->getAttribute(                    // line 14
($context["newsletterSubscriber"] ?? null), "id", array()))), "aCss" => "no-hash subscription subscribe-action", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.newslettersubscriber.action.subscribe")));
                    // line 17
                    echo "
        ";
                }
                // line 19
                echo "        </div>
    ";
            }
        } elseif ((        // line 21
array_key_exists("customer", $context) && $this->getAttribute(($context["customer"] ?? null), "originId", array()))) {
            // line 22
            echo "    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["customer"] ?? null))) {
                // line 23
                echo "        <div class=\"pull-left\" data-page-component-module=\"oromagento/js/app/components/subscription-manager\">
        ";
                // line 24
                if ($this->getAttribute(($context["customer"] ?? null), "subscribed", array())) {
                    // line 25
                    echo "        ";
                    echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_newsletter_subscriber_unsubscribe_customer", array("id" => $this->getAttribute(                    // line 26
($context["customer"] ?? null), "id", array()))), "aCss" => "no-hash subscription unsubscribe-action", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.newslettersubscriber.action.unsubscribe")));
                    // line 29
                    echo "
        ";
                } else {
                    // line 31
                    echo "        ";
                    echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_newsletter_subscriber_subscribe_customer", array("id" => $this->getAttribute(                    // line 32
($context["customer"] ?? null), "id", array()))), "aCss" => "no-hash subscription subscribe-action", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.newslettersubscriber.action.subscribe")));
                    // line 35
                    echo "
        ";
                }
                // line 37
                echo "        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:NewsletterSubscriber:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 37,  75 => 35,  73 => 32,  71 => 31,  67 => 29,  65 => 26,  63 => 25,  61 => 24,  58 => 23,  55 => 22,  53 => 21,  49 => 19,  45 => 17,  43 => 14,  41 => 13,  37 => 11,  35 => 8,  33 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:NewsletterSubscriber:buttons.html.twig", "");
    }
}
