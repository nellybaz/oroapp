<?php

/* OroEntityConfigBundle:Config/widget:info.html.twig */
class __TwigTemplate_9290800b240345ea4b46dce2b8a1341e12bfc6cc8847b277c1ab7b90e31564e6 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle:Config/widget:info.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 6
        $context["entityIcon"] = $this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "icon"), "method");
        // line 7
        echo "            ";
        $context["iconContent"] = null;
        // line 8
        echo "            ";
        if (($context["entityIcon"] ?? null)) {
            // line 9
            echo "                ";
            ob_start();
            // line 10
            echo "                    <i class=\"";
            echo twig_escape_filter($this->env, ($context["entityIcon"] ?? null), "html", null, true);
            echo " hide-text\"></i> (";
            echo twig_escape_filter($this->env, ($context["entityIcon"] ?? null), "html", null, true);
            echo ")
                ";
            $context["iconContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "            ";
        }
        // line 13
        echo "
            ";
        // line 14
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), ($context["entity_name"] ?? null));
        echo "
            ";
        // line 15
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Icon"), ($context["iconContent"] ?? null));
        echo "
            ";
        // line 16
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label"), ((($this->getAttribute(        // line 18
($context["entity_config"] ?? null), "get", array(0 => "label"), "method") == $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "label"), "method")))) ? ("") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 20
($context["entity_config"] ?? null), "get", array(0 => "label"), "method")))));
        // line 21
        echo "
            ";
        // line 22
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Plural Label"), ((($this->getAttribute(        // line 24
($context["entity_config"] ?? null), "get", array(0 => "plural_label"), "method") == $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "plural_label"), "method")))) ? ("") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 26
($context["entity_config"] ?? null), "get", array(0 => "plural_label"), "method")))));
        // line 27
        echo "
            ";
        // line 28
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), $this->getAttribute(($context["entity_extend"] ?? null), "get", array(0 => "owner"), "method"));
        echo "
            ";
        // line 29
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), ((($this->getAttribute(        // line 31
($context["entity_config"] ?? null), "get", array(0 => "description"), "method") == $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["entity_config"] ?? null), "get", array(0 => "description"), "method")))) ? ("") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 33
($context["entity_config"] ?? null), "get", array(0 => "description"), "method")))));
        // line 34
        echo "
            ";
        // line 35
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ownership Type"), ($context["entity_owner_type"] ?? null));
        echo "
            ";
        // line 36
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module"), ($context["module_name"] ?? null));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  85 => 35,  82 => 34,  80 => 33,  79 => 31,  78 => 29,  74 => 28,  71 => 27,  69 => 26,  68 => 24,  67 => 22,  64 => 21,  62 => 20,  61 => 18,  60 => 16,  56 => 15,  52 => 14,  49 => 13,  46 => 12,  38 => 10,  35 => 9,  32 => 8,  29 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Config/widget:info.html.twig", "");
    }
}
