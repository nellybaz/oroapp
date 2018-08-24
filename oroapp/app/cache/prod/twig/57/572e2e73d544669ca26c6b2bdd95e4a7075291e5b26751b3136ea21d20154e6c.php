<?php

/* OroPromotionBundle:Promotion/orderPlaceholders:informationNotice.html.twig */
class __TwigTemplate_83776f5651dd4effef2c34f9e5121ceed6a49d37463b40dbdae01fff64d2a0b7 extends Twig_Template
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
        echo "<div id=\"column-information-notice\" class=\"alert alert-info\">
    <strong>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.promotions.nav_button.important"), "html", null, true);
        echo "</strong>:
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.promotions.nav_button.information_notice"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Promotion/orderPlaceholders:informationNotice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Promotion/orderPlaceholders:informationNotice.html.twig", "");
    }
}
