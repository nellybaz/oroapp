<?php

/* OroNavigationBundle:Shortcut:actionslist.html.twig */
class __TwigTemplate_aa73fad12b02773538dba8a6a3966fdf91d274e304e4bda8f58ad82be1cfe980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute(($context["bap"] ?? null), "layout", array()), "OroNavigationBundle:Shortcut:actionslist.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNavigationBundle:Shortcut:actionslist.html.twig", 2);
        // line 3
        $context["Navigation"] = $this->loadTemplate("OroNavigationBundle::macros.html.twig", "OroNavigationBundle:Shortcut:actionslist.html.twig", 3);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Shortcut Actions List", array(), "messages");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"container-fluid\">
    <div class=\"clearfix\">
        <h3>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Shortcut Actions List", array(), "messages");
        echo "</h3>

        ";
        // line 11
        if ((twig_length_filter($this->env, ($context["actionsList"] ?? null)) > 0)) {
            // line 12
            echo "            <table class=\"table table-bordered table-striped\">
                <thead>
                    <tr>
                        <th>";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Action Name", array(), "messages");
            echo "</th>
                        <th>";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Description", array(), "messages");
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actionsList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                if ($this->getAttribute($context["action"], "url", array())) {
                    // line 21
                    echo "                    <tr>
                        ";
                    // line 22
                    if (($this->getAttribute($context["action"], "dialog", array(), "any", true, true) && $this->getAttribute($context["action"], "dialog", array()))) {
                        // line 23
                        echo "                            <td>
                                ";
                        // line 24
                        echo $context["Navigation"]->getrenderClientLink($this->getAttribute($context["action"], "dialog_config", array()), array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute(                        // line 25
($context["app"] ?? null), "user", array()), true), "entityId" => $this->getAttribute($this->getAttribute(                        // line 26
($context["app"] ?? null), "user", array()), "id", array())));
                        // line 27
                        echo "
                            </td>
                            <td>";
                        // line 29
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["action"], "description", array())), "html", null, true);
                        echo "</td>
                        ";
                    } else {
                        // line 31
                        echo "                            <td><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "url", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["action"], "label", array())), "html", null, true);
                        echo "</a></td>
                            <td>";
                        // line 32
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["action"], "description", array())), "html", null, true);
                        echo "</td>
                        ";
                    }
                    // line 34
                    echo "
                    </tr>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 40
            echo "            <h2>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Sorry, you don't have any action", array(), "messages");
            echo "</h2>
        ";
        }
        // line 42
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Shortcut:actionslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 42,  121 => 40,  116 => 37,  107 => 34,  102 => 32,  95 => 31,  90 => 29,  86 => 27,  84 => 26,  83 => 25,  82 => 24,  79 => 23,  77 => 22,  74 => 21,  69 => 20,  62 => 16,  58 => 15,  53 => 12,  51 => 11,  46 => 9,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  25 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Shortcut:actionslist.html.twig", "");
    }
}
