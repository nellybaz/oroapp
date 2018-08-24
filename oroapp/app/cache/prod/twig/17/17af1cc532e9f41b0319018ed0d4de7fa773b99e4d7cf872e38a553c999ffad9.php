<?php

/* OroAttachmentBundle:Form:mergeValue.html.twig */
class __TwigTemplate_108305a2652dabffe41c8aaaa8c1a719d3952da731336e6aa6c01e03a86ee709 extends Twig_Template
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
        // line 9
        ob_start();
        // line 10
        echo "    <span class=\"empty\">-- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_merge.form.empty"), "html", null, true);
        echo " --</span>
";
        $context["empty_cell"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
";
        // line 13
        if (twig_length_filter($this->env, ($context["value"] ?? null))) {
            // line 14
            echo "    <ul>
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 16
                echo "            <li>
                ";
                // line 17
                $context["options"] = (($this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getTypeIsImage($this->getAttribute($this->getAttribute($context["attachment"], "file", array()), "mimeType", array()))) ? (array("galleryId" => "merge-attachments")) : (array()));
                // line 18
                echo "                ";
                echo $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileView($this->env, $context["attachment"], "file", $this->getAttribute($context["attachment"], "file", array()), ($context["options"] ?? null));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </ul>
";
        } else {
            // line 23
            echo "    ";
            echo twig_escape_filter($this->env, ($context["empty_cell"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Form:mergeValue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  54 => 21,  44 => 18,  42 => 17,  39 => 16,  35 => 15,  32 => 14,  30 => 13,  27 => 12,  21 => 10,  19 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAttachmentBundle:Form:mergeValue.html.twig", "");
    }
}
