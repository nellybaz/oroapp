<?php

/* OroCMSBundle:ContentBlock:view.html.twig */
class __TwigTemplate_aa42bded49de982f47d32725c212f3991b135e78586839cd3d60a813f4a26add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCMSBundle:ContentBlock:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCMSBundle:ContentBlock:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "alias", array()))));
        // line 17
        ob_start();
        // line 18
        echo "    <table class=\"grid table table-bordered table-condensed quote-line-items\">
        <thead>
        <tr>
            <th><span>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.scopes.localization.label"), "html", null, true);
        echo "</span></th>
            <th><span>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.scopes.website.label"), "html", null, true);
        echo "</span></th>
            <th><span>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.scopes.customer_group.label"), "html", null, true);
        echo "</span></th>
            <th><span>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.scopes.customer.label"), "html", null, true);
        echo "</span></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "scopes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["scope"]) {
            // line 29
            echo "                <tr>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, (($this->getAttribute($context["scope"], "localization", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["scope"], "localization", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, (($this->getAttribute($context["scope"], "website", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["scope"], "website", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute($context["scope"], "customerGroup", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["scope"], "customerGroup", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, (($this->getAttribute($context["scope"], "customer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["scope"], "customer", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
            echo "</td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scope'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
";
        $context["restrictionsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        ob_start();
        // line 41
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "contentVariants", array()))) {
            // line 42
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "contentVariants", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                // line 43
                echo "            ";
                echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.content_variants.default.label"), (($this->getAttribute($context["variant"], "default", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.content_variants.default.yes.label")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.content_variants.default.no.label"))));
                // line 46
                echo "
            ";
                // line 47
                echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.page.content.label"), $this->getAttribute($context["variant"], "content", array()));
                echo "
            <table class=\"grid table table-bordered table-condensed quote-line-items\">
                <thead>
                <tr>
                    <th><span>";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.scopes.localization.label"), "html", null, true);
                echo "</span></th>
                    <th><span>";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.scopes.website.label"), "html", null, true);
                echo "</span></th>
                    <th><span>";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.scopes.customer_group.label"), "html", null, true);
                echo "</span></th>
                    <th><span>";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.scopes.customer.label"), "html", null, true);
                echo "</span></th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["variant"], "scopes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["variantScope"]) {
                    // line 59
                    echo "                    <tr>
                        <td>";
                    // line 60
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["variantScope"], "localization", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["variantScope"], "localization", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 61
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["variantScope"], "website", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["variantScope"], "website", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 62
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["variantScope"], "customerGroup", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["variantScope"], "customerGroup", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 63
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["variantScope"], "customer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["variantScope"], "customer", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variantScope'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                </tbody>
            </table>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "    ";
        } else {
            // line 70
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.content_variants.no_content_variants.label"), "html", null, true);
            echo "
    ";
        }
        $context["contentVariantsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_content_block_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 11
($context["entity"] ?? null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "alias", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 13
        echo "
    ";
        // line 14
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 74
    public function block_content_data($context, array $blocks = array())
    {
        // line 75
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.sections.general.label"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 81
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.alias.label"), $this->getAttribute(($context["entity"] ?? null), "alias", array())), 1 =>         // line 82
$context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.enabled.label"), (($this->getAttribute(($context["entity"] ?? null), "enabled", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.enabled.yes.label")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.enabled.no.label")))))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.sections.use_for.label"), "subblocks" => array(0 => array("data" => array(0 =>         // line 92
($context["restrictionsData"] ?? null))))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.contentblock.content_variants.entity_plural_label"), "subblocks" => array(0 => array("data" => array(0 =>         // line 98
($context["contentVariantsData"] ?? null))))));
        // line 102
        echo "
    ";
        // line 103
        $context["id"] = "contentblock-page-view";
        // line 104
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 105
        echo "
    ";
        // line 106
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:ContentBlock:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 106,  217 => 105,  214 => 104,  212 => 103,  209 => 102,  207 => 98,  206 => 92,  205 => 82,  204 => 81,  202 => 75,  199 => 74,  193 => 14,  190 => 13,  188 => 11,  187 => 8,  185 => 7,  182 => 6,  178 => 1,  171 => 70,  168 => 69,  160 => 66,  151 => 63,  147 => 62,  143 => 61,  139 => 60,  136 => 59,  132 => 58,  125 => 54,  121 => 53,  117 => 52,  113 => 51,  106 => 47,  103 => 46,  100 => 43,  95 => 42,  92 => 41,  90 => 40,  85 => 36,  76 => 33,  72 => 32,  68 => 31,  64 => 30,  61 => 29,  57 => 28,  50 => 24,  46 => 23,  42 => 22,  38 => 21,  33 => 18,  31 => 17,  29 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:ContentBlock:view.html.twig", "");
    }
}
