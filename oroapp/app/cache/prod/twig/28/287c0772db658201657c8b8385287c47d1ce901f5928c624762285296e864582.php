<?php

/* OroAttachmentBundle:Twig:file.html.twig */
class __TwigTemplate_05c2d24718971b157947fad9a583355af849d584571f675e3962a38911f94210 extends Twig_Template
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
        echo "<span class=\"filename\">
    <i class=\"fa ";
        // line 2
        echo twig_escape_filter($this->env, ($context["iconClass"] ?? null), "html", null, true);
        echo "\"></i>
    ";
        // line 3
        if (($context["url"] ?? null)) {
            // line 4
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" data-filename=\"";
            echo twig_escape_filter($this->env, ($context["fileName"] ?? null), "html", null, true);
            echo "\"
           ";
            // line 5
            if ($this->getAttribute(($context["additional"] ?? null), "galleryId", array(), "array", true, true)) {
                echo "data-gallery=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["additional"] ?? null), "galleryId", array(), "array"), "html", null, true);
                echo "\"";
            }
            // line 6
            echo "           class=\"no-hash\" title=\"";
            echo twig_escape_filter($this->env, ($context["fileName"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\UIBundle\Twig\FormatExtension')->formatFilename(($context["fileName"] ?? null)), "html", null, true);
        echo "
    ";
        // line 9
        if (($context["url"] ?? null)) {
            // line 10
            echo "        </a>
    ";
        }
        // line 12
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Twig:file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  54 => 10,  52 => 9,  47 => 8,  41 => 6,  35 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAttachmentBundle:Twig:file.html.twig", "");
    }
}
