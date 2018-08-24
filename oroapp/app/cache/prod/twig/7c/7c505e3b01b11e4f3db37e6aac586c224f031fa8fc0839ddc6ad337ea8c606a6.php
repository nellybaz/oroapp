<?php

/* OroQueryDesignerBundle:Form:fields.html.twig */
class __TwigTemplate_f314d2a9c71cba571f6b462af85e92ec3d7d685d79948fbd3bbabdcf50abcf0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_field_choice_row' => array($this, 'block_oro_field_choice_row'),
            'oro_date_field_choice_row' => array($this, 'block_oro_date_field_choice_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_field_choice_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('oro_date_field_choice_row', $context, $blocks);
    }

    // line 1
    public function block_oro_field_choice_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_oro_date_field_choice_row($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroQueryDesignerBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  33 => 2,  30 => 1,  26 => 5,  23 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroQueryDesignerBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/QueryDesignerBundle/Resources/views/Form/fields.html.twig");
    }
}
