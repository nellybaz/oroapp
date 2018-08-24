<?php

/* OroCustomerBundle:layouts/blank/imports/oro_customer_form:oro_customer_form.html.twig */
class __TwigTemplate_aeeae17a3d18c01d0439363f271f0984f230acbdf6a734e8e1d054739491e023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_customer_form__page_widget' => array($this, 'block___oro_customer_form__page_widget'),
            '__oro_customer_form__label_wrapper_widget' => array($this, 'block___oro_customer_form__label_wrapper_widget'),
            '__oro_customer_form__label_widget' => array($this, 'block___oro_customer_form__label_widget'),
            '__oro_customer_form__description_widget' => array($this, 'block___oro_customer_form__description_widget'),
            '__oro_customer_form__form_submit_wrapper_widget' => array($this, 'block___oro_customer_form__form_submit_wrapper_widget'),
            '__oro_customer_form__form_submit_widget' => array($this, 'block___oro_customer_form__form_submit_widget'),
            '__oro_customer_form__links_widget' => array($this, 'block___oro_customer_form__links_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_customer_form__page_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('__oro_customer_form__label_wrapper_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('__oro_customer_form__label_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('__oro_customer_form__description_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('__oro_customer_form__form_submit_wrapper_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('__oro_customer_form__form_submit_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('__oro_customer_form__links_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_customer_form__page_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-focusable" => true));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 10
    public function block___oro_customer_form__label_wrapper_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-title-wrapper"));
        // line 14
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 17
    public function block___oro_customer_form__label_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-title"));
        // line 21
        echo "    <h2";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</h2>
";
    }

    // line 24
    public function block___oro_customer_form__description_widget($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"form-row\">
        <p";
        // line 26
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</p>
    </div>
";
    }

    // line 30
    public function block___oro_customer_form__form_submit_wrapper_widget($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " form-row"));
        // line 34
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 35
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 39
    public function block___oro_customer_form__form_submit_widget($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " button"));
        // line 43
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    // line 46
    public function block___oro_customer_form__links_widget($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $context["childs"] = array();
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                // line 49
                echo "        ";
                $context["childs"] = twig_array_merge(($context["childs"] ?? null), array(0 => $context["child"]));
                // line 50
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo "        <div class=\"form-row form-row--offset-s ";
            echo (($this->getAttribute($context["loop"], "last", array())) ? ("form-row--offset-none") : (""));
            echo "\">
            ";
            // line 53
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "attr", array()), array("~class" => " link"));
            // line 56
            echo "            ";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => ($context["attr"] ?? null)));
            echo "
        </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroCustomerBundle:layouts/blank/imports/oro_customer_form:oro_customer_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  201 => 56,  199 => 53,  194 => 52,  176 => 51,  169 => 50,  166 => 49,  160 => 48,  157 => 47,  154 => 46,  147 => 43,  144 => 40,  141 => 39,  134 => 35,  129 => 34,  126 => 31,  123 => 30,  114 => 26,  111 => 25,  108 => 24,  99 => 21,  96 => 18,  93 => 17,  84 => 14,  81 => 11,  78 => 10,  71 => 6,  66 => 5,  63 => 2,  60 => 1,  56 => 46,  53 => 45,  51 => 39,  48 => 38,  46 => 30,  43 => 29,  41 => 24,  38 => 23,  36 => 17,  33 => 16,  31 => 10,  28 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomerBundle:layouts/blank/imports/oro_customer_form:oro_customer_form.html.twig", "");
    }
}
