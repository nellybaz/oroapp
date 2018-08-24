<?php

/* OroDistributionBundle:Package:list_installed.html.twig */
class __TwigTemplate_7faf0a564a6273401d7d9552b2f0bdeca17fdad891d0b5286320a557e06f1dac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDistributionBundle::base_inner.html.twig", "OroDistributionBundle:Package:list_installed.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDistributionBundle::base_inner.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.installed"), "html", null, true);
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "    <a class=\"btn btn-primary btn-large\" id=\"install-new-package\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_distribution_package_listavailable");
        echo "\">
        <i class=\"icon-settings\"></i>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.install_new"), "html", null, true);
        echo "
    </a>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->loadTemplate("OroDistributionBundle:Package:install_form.html.twig", "OroDistributionBundle:Package:list_installed.html.twig", 13)->display($context);
        // line 14
        echo "
    <table class=\"table\">
        <col width=\"30%\" valign=\"top\"/>
        <col width=\"10%\" valign=\"top\"/>
        <col width=\"10%\" valign=\"top\"/>
        <col width=\"15%\" valign=\"top\"/>
        <col width=\"15%\" valign=\"top\"/>
        <col width=\"15%\" valign=\"top\"/>
        <thead>
        <tr>
            <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.package"), "html", null, true);
        echo "</th>
            <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.type"), "html", null, true);
        echo "</th>
            <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.license"), "html", null, true);
        echo "</th>
            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.author"), "html", null, true);
        echo "</th>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.current_version"), "html", null, true);
        echo "</th>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.latest_version"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "            <tr>
                <td>
                    <strong>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "package", array()), "prettyName", array()), "html", null, true);
            echo "</strong>
                    <br/>
                    ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "package", array()), "description", array()), "html", null, true);
            echo "
                </td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "package", array()), "type", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "package", array()), "license", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
                // line 43
                echo "                        ";
                echo twig_escape_filter($this->env, $context["license"], "html", null, true);
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 45
                echo "                        <em>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.unknown"), "html", null, true);
                echo "</em>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                </td>
                <td>
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "package", array()), "authors", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 50
                echo "                        <div>
                            ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                echo "
                            ";
                // line 52
                if ($this->getAttribute($context["author"], "email", array(), "any", true, true)) {
                    // line 53
                    echo "                                <br/>
                                <a href=\"mailto:";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "email", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "email", array()), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 56
                echo "                        </div>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 58
                echo "                        <em>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.unknown"), "html", null, true);
                echo "</em>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                </td>
                <td>
                    ";
            // line 62
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "update", array(), "any", false, true), "currentVersionString", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "update", array(), "any", false, true), "currentVersionString", array()), $this->getAttribute($this->getAttribute($context["item"], "package", array()), "prettyVersion", array()))) : ($this->getAttribute($this->getAttribute($context["item"], "package", array()), "prettyVersion", array()))), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 65
            if ($this->getAttribute($context["item"], "update", array())) {
                // line 66
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "update", array()), "upToDateVersionString", array()), "html", null, true);
                echo "
                        ";
                // line 67
                if ((twig_length_filter($this->env, ($context["notWritableSystemPaths"] ?? null)) == 0)) {
                    // line 68
                    echo "                            <br/>
                            <a href=\"#\" class=\"ajax update\"
                               data-action=\"update\"
                               data-params='{\"packageName\": \"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "package", array()), "prettyName", array()), "html", null, true);
                    echo "\" }'>
                                <i class=\"fa-refresh\"></i>
                                ";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.action.update"), "html", null, true);
                    echo "
                            </a>
                        ";
                }
                // line 76
                echo "                    ";
            }
            // line 77
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "            <tr>
                <td colspan=\"6\"><em>";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.nothing_installed"), "html", null, true);
            echo "</em></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "OroDistributionBundle:Package:list_installed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 84,  234 => 81,  231 => 80,  224 => 77,  221 => 76,  215 => 73,  210 => 71,  205 => 68,  203 => 67,  198 => 66,  196 => 65,  190 => 62,  186 => 60,  177 => 58,  171 => 56,  164 => 54,  161 => 53,  159 => 52,  155 => 51,  152 => 50,  147 => 49,  143 => 47,  134 => 45,  126 => 43,  121 => 42,  116 => 40,  111 => 38,  106 => 36,  102 => 34,  97 => 33,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  70 => 24,  58 => 14,  55 => 13,  52 => 12,  45 => 8,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDistributionBundle:Package:list_installed.html.twig", "");
    }
}
