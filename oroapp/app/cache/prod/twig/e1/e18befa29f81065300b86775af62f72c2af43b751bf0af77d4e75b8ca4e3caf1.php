<?php

/* OroEntityConfigBundle:Config:index.html.twig */
class __TwigTemplate_85eb3c10e4d4299dfb7a47ea3bc73f29e93096b18fb5e2b05657ca5208e3d453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroEntityConfigBundle:Config:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle:Config:index.html.twig", 2);
        // line 4
        $context["gridName"] = "entityconfig-grid";
        // line 5
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_config.menu.entities_list.label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (twig_length_filter($this->env, ($context["require_js"] ?? null))) {
            // line 9
            echo "        <script type=\"text/javascript\">
            require(";
            // line 10
            echo twig_jsonencode_filter(($context["require_js"] ?? null));
            echo ")
        </script>
    ";
        }
        // line 13
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_navButtons($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_entityconfig_manage")) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["buttonConfig"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 19
                echo "            ";
                echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(                // line 20
$context["button"], "route", array()), (($this->getAttribute($context["button"], "args", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "args", array()), array())) : (array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(                // line 21
$context["button"], "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "title", array()), $this->getAttribute($context["button"], "name", array()))) : ($this->getAttribute($context["button"], "name", array())))), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                // line 22
$context["button"], "name", array())), "aCss" => (($this->getAttribute(                // line 23
$context["button"], "aCss", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "aCss", array()), "")) : (""))));
                // line 24
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  76 => 24,  74 => 23,  73 => 22,  72 => 21,  71 => 20,  69 => 19,  64 => 18,  61 => 17,  58 => 16,  51 => 13,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  32 => 1,  30 => 5,  28 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Config:index.html.twig", "");
    }
}
