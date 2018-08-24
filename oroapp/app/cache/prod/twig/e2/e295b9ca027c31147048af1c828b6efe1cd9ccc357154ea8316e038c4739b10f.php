<?php

/* OroUIBundle:Form:login.html.twig */
class __TwigTemplate_960fcb91bc4c8c219a4b86e06e715ebbe1dd55e20a533cf5ef59eb4284a27597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Form:fields.html.twig", "OroUIBundle:Form:login.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if (((array_key_exists("hint", $context)) ? (_twig_default_filter(($context["hint"] ?? null))) : (""))) {
            // line 6
            echo "            <div";
            $this->displayBlock("hint_attributes", $context, $blocks);
            echo ">";
            echo ($context["hint"] ?? null);
            echo "</div>
        ";
        }
        // line 8
        echo "        <div class=\"input-prepend";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " error";
        }
        echo "\">
            <span class=\"add-on\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => twig_array_merge(($context["label_attr"] ?? null), array("class" => "control-label"))));
        echo "</span>
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        </div>
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 18
    public function block_form_errors($context, array $blocks = array())
    {
        // line 19
        ob_start();
        // line 20
        if ($this->getAttribute(($context["form"] ?? null), "parent", array())) {
            // line 21
            echo "            ";
            $this->displayParentBlock("form_errors", $context, $blocks);
            echo "
        ";
        } else {
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 24
                echo "<div>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 27
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 30
    public function block_form_label($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        ob_start();
        // line 32
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Form:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  104 => 31,  101 => 30,  96 => 27,  87 => 24,  83 => 23,  77 => 21,  75 => 20,  73 => 19,  70 => 18,  63 => 12,  58 => 10,  54 => 9,  47 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Form:login.html.twig", "");
    }
}
