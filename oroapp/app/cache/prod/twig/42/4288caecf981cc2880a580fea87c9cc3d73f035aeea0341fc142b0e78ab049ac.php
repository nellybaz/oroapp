<?php

/* OroMagentoContactUsBundle:ContactRequest:update.html.twig */
class __TwigTemplate_e6945f347817fcd988d065d76a4e450b65ad08147bc6af6116f222febe4696dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("!OroContactUsBundle:ContactRequest:update.html.twig", "OroMagentoContactUsBundle:ContactRequest:update.html.twig", 1);
        $this->blocks = array(
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "!OroContactUsBundle:ContactRequest:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_data($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["id"] = "contact-request-form";
        // line 5
        echo "
    ";
        // line 6
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.block.general"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.block.request_information"), "data" => array(0 =>         // line 13
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'row'), 1 =>         // line 14
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'row'), 2 =>         // line 15
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "organizationName", array()), 'row'), 3 =>         // line 16
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "preferredContactMethod", array()), 'row'), 4 =>         // line 17
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'row'), 5 =>         // line 18
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "emailAddress", array()), 'row'), 6 =>         // line 19
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contactReason", array()), 'row'), 7 =>         // line 20
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", array()), 'row'))))));
        // line 25
        echo "
    ";
        // line 26
        $context["additionalData"] = array();
        // line 27
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 28
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 29
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 31
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contactus.block.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 33
($context["additionalData"] ?? null))))));
            // line 35
            echo "    ";
        }
        // line 36
        echo "
    ";
        // line 37
        $context["data"] = array("formErrors" => ((        // line 38
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 39
($context["dataBlocks"] ?? null));
        // line 41
        echo "
    ";
        // line 42
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderBlock($this->env, $context, "OroUIBundle:actions:update.html.twig", "content_data");
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMagentoContactUsBundle:ContactRequest:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 42,  85 => 41,  83 => 39,  82 => 38,  81 => 37,  78 => 36,  75 => 35,  73 => 33,  71 => 31,  68 => 30,  61 => 29,  58 => 28,  52 => 27,  50 => 26,  47 => 25,  45 => 20,  44 => 19,  43 => 18,  42 => 17,  41 => 16,  40 => 15,  39 => 14,  38 => 13,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoContactUsBundle:ContactRequest:update.html.twig", "");
    }
}
