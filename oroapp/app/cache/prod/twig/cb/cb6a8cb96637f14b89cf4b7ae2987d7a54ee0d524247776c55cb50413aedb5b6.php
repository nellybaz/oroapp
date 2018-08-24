<?php

/* OroUserBundle:Status:index.html.twig */
class __TwigTemplate_d4573db5e416c20ce578a7ec4a2e2a673f3b7b8d874721e5e1575896a14e5e83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["bap"] ?? null), "layout", array(), "any", true, true)) ? ($this->getAttribute(($context["bap"] ?? null), "layout", array())) : ("OroUserBundle::layout.html.twig")), "OroUserBundle:Status:index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User Statuses.", array(), "messages");
        // line 5
        echo "        ";
        if ($this->getAttribute(($context["user"] ?? null), "currentStatus", array())) {
            // line 6
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Current Status", array(), "messages");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? null), "currentStatus", array()), "status", array()), "html", null, true);
            echo "
        ";
        }
        // line 8
        echo "    </h2>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 11
            echo "        <div class=\"alert ";
            if (($this->getAttribute(($context["user"] ?? null), "currentStatus", array()) == $context["status"])) {
                echo "alert-success";
            }
            echo "\">
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_status_delete", array("id" => $this->getAttribute($context["status"], "id", array()))), "html", null, true);
            echo "\" class=\"close\" type=\"button\"><i class=\"fa-trash-o\"></i></a>
            ";
            // line 13
            if (($this->getAttribute(($context["user"] ?? null), "currentStatus", array()) != $context["status"])) {
                // line 14
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_status_set_current", array("id" => $this->getAttribute($context["status"], "id", array()))), "html", null, true);
                echo "\" class=\"close\" type=\"button\"><i class=\"fa-plus-circle\"></i></a>
            ";
            } else {
                // line 16
                echo "                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_status_clear_current");
                echo "\" class=\"close\" type=\"button\"><i class=\"fa-minus-circle\"></i></a>
            ";
            }
            // line 18
            echo "            <p>";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute($context["status"], "createdAt", array()));
            echo "</p>
            <h3>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "status", array()), "html", null, true);
            echo "</h3>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Status:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  82 => 19,  77 => 18,  71 => 16,  65 => 14,  63 => 13,  59 => 12,  52 => 11,  48 => 10,  44 => 8,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Status:index.html.twig", "");
    }
}
