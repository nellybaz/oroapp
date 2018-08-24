<?php

/* OroMagentoBundle:Customer/widget:addressBook.html.twig */
class __TwigTemplate_a37109973b7d59bf3d6819d72918aeb01aacaaab96dd3b17ddacc7f79bcfef56 extends Twig_Template
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
    ";
        // line 3
        echo "    ";
        $this->loadTemplate("OroMagentoBundle:Js:address.js.twig", "OroMagentoBundle:Customer/widget:addressBook.html.twig", 3)->display($context);
        // line 4
        echo "    <div class=\"list-box map-box\" id=\"address-book\"></div>

    ";
        // line 6
        $context["listUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_get_customer_addresses", array("customerId" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        // line 7
        echo "    <script type=\"text/javascript\">
    require(['jquery', 'underscore', 'routing', 'oroaddress/js/address-book', 'oroui/js/widget-manager'],
    function(\$, _, routing, AddressBook, widgetManager) {
        widgetManager.getWidgetInstance(";
        // line 10
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
        echo ", function(widget){
            /** @type oroaddress.AddressBook */
            var addressBook = new AddressBook({
                el: '#address-book',
                addressListUrl: ";
        // line 14
        echo twig_jsonencode_filter(($context["listUrl"] ?? null));
        echo "
            });
            addressBook
                .getCollection()
                .reset(";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment(($context["listUrl"] ?? null));
        echo ");
        });
    });
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Customer/widget:addressBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  43 => 14,  36 => 10,  31 => 7,  29 => 6,  25 => 4,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Customer/widget:addressBook.html.twig", "");
    }
}
