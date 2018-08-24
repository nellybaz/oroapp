<?php

/* OroDistributionBundle:Package:list_available.html.twig */
class __TwigTemplate_b5974cca8b3a6ebd0283e53abc8b926cb50bd32f4b6f463a98c791fa5079cb8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDistributionBundle::base_inner.html.twig", "OroDistributionBundle:Package:list_available.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(function () {
            \$('select.install-version').on('change', function (el) {
                var install = \$(this).closest('tr').find('a.install');
                install.data('params', \$.extend(install.data('params'), {\"version\": \$(this).val()}));
            });
        });
    </script>
";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.available"), "html", null, true);
    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        // line 18
        echo "    <a id=\"back-to-installed\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_distribution_package_listinstalled");
        echo "\">
        <i class=\"fa-reply\"></i>
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to Installed Packages"), "html", null, true);
        echo "
    </a>
";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "    <table class=\"table\">
        <col width=\"40%\" valign=\"top\"/>
        <col width=\"10%\" valign=\"top\"/>
        <col width=\"10%\" valign=\"top\"/>
        <col width=\"10%\" valign=\"top\"/>
        <col width=\"15%\" valign=\"top\"/>
        <thead>
        <tr>
            <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.package"), "html", null, true);
        echo "</th>
            <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.type"), "html", null, true);
        echo "</th>
            <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.license"), "html", null, true);
        echo "</th>
            <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.author"), "html", null, true);
        echo "</th>
            <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.version"), "html", null, true);
        echo "</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["packages"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 44
            echo "            <tr>
                <td>
                    <strong>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["package"], "prettyName", array()), "html", null, true);
            echo "</strong>
                    <br/>
                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["package"], "description", array()), "html", null, true);
            echo "
                </td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["package"], "type", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["package"], "license", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
                // line 53
                echo "                        ";
                echo twig_escape_filter($this->env, $context["license"], "html", null, true);
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 55
                echo "                        <em>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.unknown"), "html", null, true);
                echo "</em>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                </td>
                <td>
                    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["package"], "authors", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 60
                echo "                        <div>
                            ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                echo "
                            ";
                // line 62
                if ($this->getAttribute($context["author"], "email", array(), "any", true, true)) {
                    // line 63
                    echo "                                <br/>
                                <a href=\"mailto:";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "email", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "email", array()), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 66
                echo "                        </div>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 68
                echo "                        <em>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.unknown"), "html", null, true);
                echo "</em>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                </td>
                <td>
                    ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["package"], "prettyVersion", array()), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 75
            if ((twig_length_filter($this->env, ($context["notWritableSystemPaths"] ?? null)) == 0)) {
                // line 76
                echo "                        <a href=\"#\" class=\"btn btn-success ajax install\"
                           data-action=\"install\"
                           data-params='{\"packageName\": \"";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["package"], "prettyName", array()), "html", null, true);
                echo "\"}'>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.action.install"), "html", null, true);
                echo "</a>
                    ";
            }
            // line 80
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 83
            echo "            <tr>
                <td colspan=\"2\"><em>";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.distribution.package.nothing_installed"), "html", null, true);
            echo "</em></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "OroDistributionBundle:Package:list_available.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 87,  230 => 84,  227 => 83,  220 => 80,  213 => 78,  209 => 76,  207 => 75,  201 => 72,  197 => 70,  188 => 68,  182 => 66,  175 => 64,  172 => 63,  170 => 62,  166 => 61,  163 => 60,  158 => 59,  154 => 57,  145 => 55,  137 => 53,  132 => 52,  127 => 50,  122 => 48,  117 => 46,  113 => 44,  108 => 43,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  84 => 34,  74 => 26,  71 => 25,  64 => 20,  58 => 18,  55 => 17,  49 => 15,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDistributionBundle:Package:list_available.html.twig", "");
    }
}
