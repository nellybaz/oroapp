<?php

/* OroNavigationBundle:menuUpdate:pageHeader.html.twig */
class __TwigTemplate_8e033f688dc78a7088421d0506c44e99b6be15408cddc4b489df1ff6dd07d833 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'breadcrumbMessage' => array($this, 'block_breadcrumbMessage'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"customer-info well-small customer-simple\">
    <div class=\"customer-content\">
        <div class=\"top-row\">
            ";
        // line 4
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 32
        echo "        </div>
    </div>
</div>
";
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 5
        echo "                <div class=\"pull-left\">
                    ";
        // line 6
        if ($this->getAttribute(($context["breadcrumbs"] ?? null), "indexLabel", array(), "any", true, true)) {
            // line 7
            echo "                        <div class=\"sub-title\">";
            // line 8
            if ($this->getAttribute(($context["breadcrumbs"] ?? null), "indexPath", array(), "any", true, true)) {
                // line 9
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->addUrlQuery($this->getAttribute(($context["breadcrumbs"] ?? null), "indexPath", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["breadcrumbs"] ?? null), "indexLabel", array()), "html", null, true);
                echo "</a>";
            } else {
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute(($context["breadcrumbs"] ?? null), "indexLabel", array()), "html", null, true);
            }
            // line 13
            echo "</div>
                        <span class=\"separator\">/</span>
                    ";
        }
        // line 16
        echo "                    ";
        if ($this->getAttribute(($context["breadcrumbs"] ?? null), "additional", array(), "any", true, true)) {
            // line 17
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs"] ?? null), "additional", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 18
                echo "                            <div class=\"sub-title\">";
                // line 19
                if ($this->getAttribute($context["breadcrumb"], "indexPath", array(), "any", true, true)) {
                    // line 20
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexPath", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexLabel", array()), "html", null, true);
                    echo "</a>";
                } else {
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexLabel", array()), "html", null, true);
                }
                // line 24
                echo "</div>
                            <span class=\"separator\">/</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    ";
        }
        // line 28
        echo "                    <h1 class=\"user-name\">";
        echo $this->getAttribute(($context["breadcrumbs"] ?? null), "entityTitle", array());
        echo "</h1>
                </div>
                ";
        // line 30
        $this->displayBlock('breadcrumbMessage', $context, $blocks);
        // line 31
        echo "            ";
    }

    // line 30
    public function block_breadcrumbMessage($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:menuUpdate:pageHeader.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  103 => 31,  101 => 30,  95 => 28,  92 => 27,  84 => 24,  81 => 22,  74 => 20,  72 => 19,  70 => 18,  65 => 17,  62 => 16,  57 => 13,  54 => 11,  47 => 9,  45 => 8,  43 => 7,  41 => 6,  38 => 5,  35 => 4,  28 => 32,  26 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:menuUpdate:pageHeader.html.twig", "");
    }
}
