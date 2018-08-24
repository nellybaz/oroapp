<?php

/* OroMagentoBundle:NewsletterSubscriber:view.html.twig */
class __TwigTemplate_175fb9add860935b5c852b15a7693af2af07481bfec7073780cb4d6b43220d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroMagentoBundle:NewsletterSubscriber:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMagentoBundle:NewsletterSubscriber:view.html.twig", 2);
        // line 3
        $context["channel"] = $this->loadTemplate("OroChannelBundle::macros.html.twig", "OroMagentoBundle:NewsletterSubscriber:view.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%newsletter_subscriber.email%" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "email", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 9
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_newsletter_subscriber_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.newslettersubscriber.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 12
($context["entity"] ?? null), "email", array()));
        // line 14
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_navButtons($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->loadTemplate("OroMagentoBundle:NewsletterSubscriber:buttons.html.twig", "OroMagentoBundle:NewsletterSubscriber:view.html.twig", 18)->display(array_merge($context, array("newsletterSubscriber" => ($context["entity"] ?? null))));
        // line 19
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "
";
    }

    // line 22
    public function block_content_data($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        echo $context["channel"]->getrenderChannelProperty(($context["entity"] ?? null), "oro.magento.newslettersubscriber.data_channel.label");
        echo "
        ";
        // line 25
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.newslettersubscriber.channel.label"), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array()), "name", array()));
        echo "

        ";
        // line 27
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.newslettersubscriber.website.label"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "store", array()), "website", array()), "name", array()));
        echo "
        ";
        // line 28
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.newslettersubscriber.store.label"), nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "store", array()), "name", array()))));
        echo "

        ";
        // line 30
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_magento_newsletter_subscriber_info", array("id" => $this->getAttribute(        // line 32
($context["entity"] ?? null), "id", array()), "useCustomer" => true))));
        // line 33
        echo "
    ";
        $context["newsletterSubscriberInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        echo "
    ";
        // line 36
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 41
($context["newsletterSubscriberInformationWidget"] ?? null))))));
        // line 45
        echo "
    ";
        // line 46
        $context["id"] = "newsletterSubscriberView";
        // line 47
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 48
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:NewsletterSubscriber:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 48,  109 => 47,  107 => 46,  104 => 45,  102 => 41,  101 => 36,  98 => 35,  94 => 33,  92 => 32,  91 => 30,  86 => 28,  82 => 27,  77 => 25,  72 => 24,  69 => 23,  66 => 22,  59 => 19,  56 => 18,  53 => 17,  46 => 14,  44 => 12,  43 => 9,  41 => 8,  38 => 7,  34 => 1,  32 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:NewsletterSubscriber:view.html.twig", "");
    }
}
