<?php

/* OroDotmailerBundle:DataField:update.html.twig */
class __TwigTemplate_fbbaa933fa0726693eeaf355abd1a032eb72651f84a9b6c7445c7e3e0031cf90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroDotmailerBundle:DataField:update.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.name%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.entity_label"))));
        // line 7
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 9
        $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_create");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "dotmailer-page";
    }

    // line 11
    public function block_navButtons($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_dotmailer_datafield_view", "params" => array("id" => "\$id"))), "method");
        // line 16
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_dotmailer_datafield_create")) {
            // line 17
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_dotmailer_datafield_create")), "method"));
            // line 20
            echo "    ";
        }
        // line 21
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_index")), "method"), "html", null, true);
        echo "
";
    }

    // line 25
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 27
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 28
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_dotmailer_datafield_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 31
($context["entity"] ?? null), "name", array()));
            // line 33
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 35
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.datafield.entity_label")));
            // line 36
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroDotmailerBundle:DataField:update.html.twig", 36)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 37
            echo "    ";
        }
    }

    // line 40
    public function block_content_data($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $context["id"] = "dotmailer-datafield-form";
        // line 42
        echo "
    ";
        // line 43
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.block.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 49
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "channel", array()), 'row'), 1 =>         // line 50
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'), 2 =>         // line 51
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'row'), 3 =>         // line 52
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "visibility", array()), 'row'), 4 =>         // line 53
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "defaultValue", array()), 'row'))))));
        // line 57
        echo "
    ";
        // line 58
        $context["additionalData"] = array(0 =>         // line 59
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "notes", array()), 'row'));
        // line 61
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 62
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 63
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 65
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.block.additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 67
($context["additionalData"] ?? null))))));
            // line 69
            echo "    ";
        }
        // line 70
        echo "
    ";
        // line 71
        $context["data"] = array("formErrors" => ((        // line 72
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 73
($context["dataBlocks"] ?? null));
        // line 75
        echo "    ";
        // line 76
        echo "    ";
        $context["fieldsToSendOnTypeChange"] = array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 77
($context["form"] ?? null), "type", array()), "vars", array()), "full_name", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 78
($context["form"] ?? null), "name", array()), "vars", array()), "full_name", array()), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 79
($context["form"] ?? null), "visibility", array()), "vars", array()), "full_name", array()), 3 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 80
($context["form"] ?? null), "notes", array()), "vars", array()), "full_name", array()), 4 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 81
($context["form"] ?? null), "_token", array()), "vars", array()), "full_name", array()));
        // line 83
        echo "
    <script type=\"text/javascript\">
        require(['orodotmailer/js/datafield-view'], function (DataFieldView) {
            \"use strict\";

            \$(function () {
                var options = {
                    formSelector: '#";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "',
                    typeSelector: '#";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "type", array()), "vars", array()), "id", array()), "html", null, true);
        echo "',
                    fieldsSets: {
                        type: ";
        // line 93
        echo twig_jsonencode_filter(($context["fieldsToSendOnTypeChange"] ?? null));
        echo ",
                    }
                };

                new DataFieldView(options);
            });
        });
    </script>
    ";
        // line 101
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroDotmailerBundle:DataField:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 101,  182 => 93,  177 => 91,  173 => 90,  164 => 83,  162 => 81,  161 => 80,  160 => 79,  159 => 78,  158 => 77,  156 => 76,  154 => 75,  152 => 73,  151 => 72,  150 => 71,  147 => 70,  144 => 69,  142 => 67,  140 => 65,  137 => 64,  130 => 63,  127 => 62,  121 => 61,  119 => 59,  118 => 58,  115 => 57,  113 => 53,  112 => 52,  111 => 51,  110 => 50,  109 => 49,  108 => 43,  105 => 42,  102 => 41,  99 => 40,  94 => 37,  91 => 36,  88 => 35,  82 => 33,  80 => 31,  79 => 28,  77 => 27,  74 => 26,  71 => 25,  65 => 22,  60 => 21,  57 => 20,  54 => 17,  51 => 16,  48 => 12,  45 => 11,  39 => 10,  35 => 1,  33 => 9,  31 => 7,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDotmailerBundle:DataField:update.html.twig", "");
    }
}
