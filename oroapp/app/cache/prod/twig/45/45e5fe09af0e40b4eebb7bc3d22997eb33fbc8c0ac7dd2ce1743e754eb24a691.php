<?php

/* OroVisibilityBundle:ProductVisibility:edit.html.twig */
class __TwigTemplate_fcea8f314dedcd47492e3c4636720dc466daeb15f94dd23d2dfc93a2c4db9b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroVisibilityBundle:ProductVisibility:edit.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroVisibilityBundle:ProductVisibility:edit.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%sku%" => (($this->getAttribute(        // line 4
($context["entity"] ?? null), "sku", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "sku", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "%name%" => _twig_default_filter((($this->getAttribute(($context["entity"] ?? null), "id", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultName", array()), "string", array())) : ("")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")))));
        // line 6
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_visibility_edit", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_index")), "method"), "html", null, true);
        echo "
    ";
        // line 10
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(), "method");
        // line 11
        echo "    ";
        if (($this->getAttribute(($context["entity"] ?? null), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_product_update"))) {
            // line 12
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(), "method"));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 17
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if ($this->getAttribute(($context["entity"] ?? null), "id", array())) {
            // line 19
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 20
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 23
($context["UI"] ?? null), "link", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_view", array("id" => $this->getAttribute(            // line 24
($context["entity"] ?? null), "id", array()))), "label" => (($this->getAttribute(            // line 25
($context["entity"] ?? null), "sku", array()) . " - ") . $this->getAttribute(($context["entity"] ?? null), "defaultName", array())))), "method"));
            // line 28
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        }
    }

    // line 32
    public function block_content_data($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $context["id"] = "product-visibility-edit";
        // line 34
        echo "
    ";
        // line 35
        ob_start();
        // line 36
        echo "        <div class=\"responsive-cell\">
            ";
        // line 37
        $context["scopes"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "scopes", array());
        // line 38
        echo "            ";
        if ((twig_length_filter($this->env, ($context["scopes"] ?? null)) == 1)) {
            // line 39
            echo "                ";
            $context["scope"] = twig_first($this->env, ($context["scopes"] ?? null));
            // line 40
            echo "                ";
            if (($context["scope"] ?? null)) {
                // line 41
                echo "                    ";
                $context["content"] = "";
                // line 42
                echo "                    ";
                if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute(($context["scope"] ?? null), "id", array()), array(), "array", true, true)) {
                    // line 43
                    echo "                        ";
                    $this->loadTemplate("OroVisibilityBundle:ProductVisibility/widget:scope.html.twig", "OroVisibilityBundle:ProductVisibility:edit.html.twig", 43)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), $this->getAttribute(($context["scope"] ?? null), "id", array()), array(), "array"))));
                    // line 44
                    echo "                    ";
                }
                // line 45
                echo "                ";
            }
            // line 46
            echo "            ";
        } else {
            // line 47
            echo "                ";
            $context["tabs"] = array();
            // line 48
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scopes"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["label"] => $context["scope"]) {
                // line 49
                echo "                    ";
                $context["content"] = "";
                // line 50
                echo "                    ";
                if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["scope"], "id", array()), array(), "array", true, true)) {
                    // line 51
                    echo "                        ";
                    ob_start();
                    // line 52
                    echo "                            ";
                    $this->loadTemplate("OroVisibilityBundle:ProductVisibility/widget:scope.html.twig", "OroVisibilityBundle:ProductVisibility:edit.html.twig", 52)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), $this->getAttribute($context["scope"], "id", array()), array(), "array"))));
                    // line 53
                    echo "                        ";
                    $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 54
                    echo "                    ";
                }
                // line 55
                echo "
                    ";
                // line 56
                $context["tab"] = array("alias" => $this->getAttribute(                // line 57
$context["scope"], "id", array()), "widgetType" => "block", "label" =>                 // line 59
$context["label"], "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_visibility_scoped", array("productId" => $this->getAttribute(                // line 62
($context["entity"] ?? null), "id", array()), "id" => $this->getAttribute($context["scope"], "id", array()))), "content" =>                 // line 64
($context["content"] ?? null));
                // line 66
                echo "
                    ";
                // line 67
                $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => ($context["tab"] ?? null)));
                // line 68
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['scope'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\TabExtension')->tabPanel($this->env, ($context["tabs"] ?? null), array("useDropdown" => true));
            echo "
            ";
        }
        // line 71
        echo "        </div>
    ";
        $context["productVisibilityWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
    ";
        // line 74
        $context["dataBlocks"] = array(0 => array("title" => "Product visibility", "subblocks" => array(0 => array("data" => array(0 =>         // line 78
($context["productVisibilityWidget"] ?? null))))));
        // line 82
        echo "
    ";
        // line 83
        $context["data"] = array("formErrors" =>         // line 84
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors'), "dataBlocks" =>         // line 85
($context["dataBlocks"] ?? null));
        // line 87
        echo "
    ";
        // line 88
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroVisibilityBundle:ProductVisibility:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 88,  218 => 87,  216 => 85,  215 => 84,  214 => 83,  211 => 82,  209 => 78,  208 => 74,  205 => 73,  201 => 71,  195 => 69,  181 => 68,  179 => 67,  176 => 66,  174 => 64,  173 => 62,  172 => 59,  171 => 57,  170 => 56,  167 => 55,  164 => 54,  161 => 53,  158 => 52,  155 => 51,  152 => 50,  149 => 49,  131 => 48,  128 => 47,  125 => 46,  122 => 45,  119 => 44,  116 => 43,  113 => 42,  110 => 41,  107 => 40,  104 => 39,  101 => 38,  99 => 37,  96 => 36,  94 => 35,  91 => 34,  88 => 33,  85 => 32,  77 => 28,  75 => 25,  74 => 24,  73 => 23,  72 => 20,  70 => 19,  67 => 18,  64 => 17,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  46 => 10,  41 => 9,  38 => 8,  34 => 1,  32 => 6,  30 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroVisibilityBundle:ProductVisibility:edit.html.twig", "");
    }
}
