<?php

/* OroPlatformBundle:Platform:systemInfo.html.twig */
class __TwigTemplate_2075c9e9b9a693690ce53407afbb02b5f60da8a0033615c66b1a2b09016bcf12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroPlatformBundle:Platform:systemInfo.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["entity"] = null;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroPlatformBundle:Platform:systemInfo.html.twig", 6)->display(array_merge($context, array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.platform.system_info"))));
    }

    // line 9
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content_data($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <div class=\"row-fluid\">
            <div class=\"responsive-block package-list\">
                <h3>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.platform.caption.oro"), "html", null, true);
        echo "</h3>
                ";
        // line 16
        echo $this->getAttribute($this, "packagesTable", array(0 => ($context["oroPackages"] ?? null)), "method");
        echo "
            </div>
            <div class=\"responsive-block package-list\">
                <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.platform.caption.thirdParty"), "html", null, true);
        echo "</h3>
                ";
        // line 20
        echo $this->getAttribute($this, "packagesTable", array(0 => ($context["thirdPartyPackages"] ?? null)), "method");
        echo "
            </div>
        </div>
    ";
        $context["packagesSection"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
    ";
        // line 25
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.platform.packages"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 30
($context["packagesSection"] ?? null))))));
        // line 34
        echo "
    ";
        // line 35
        $context["id"] = "system_info";
        // line 36
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 37
        echo "
    ";
        // line 38
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 41
    public function getpackagesTable($__packages__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "packages" => $__packages__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 42
            echo "    ";
            if (twig_length_filter($this->env, ($context["packages"] ?? null))) {
                // line 43
                echo "        <table class=\"table table-bordered table-striped \">
            <thead>
            <tr>
                <th>";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.platform.package.name"), "html", null, true);
                echo "</th>
                <th>";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.platform.package.version"), "html", null, true);
                echo "</th>
                <th>";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.platform.package.license"), "html", null, true);
                echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["packages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
                    // line 53
                    echo "                <tr>
                    <td>";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["package"], "prettyName", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["package"], "prettyVersion", array()), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["package"], "license", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
                        // line 58
                        echo "                            ";
                        echo twig_escape_filter($this->env, $context["license"], "html", null, true);
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            </tbody>
        </table>
    ";
            } else {
                // line 66
                echo "        <div class=\"well\">
            ";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.platform.no_packages"), "html", null, true);
                echo "
        </div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroPlatformBundle:Platform:systemInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 67,  177 => 66,  172 => 63,  164 => 60,  155 => 58,  151 => 57,  146 => 55,  142 => 54,  139 => 53,  135 => 52,  128 => 48,  124 => 47,  120 => 46,  115 => 43,  112 => 42,  100 => 41,  94 => 38,  91 => 37,  88 => 36,  86 => 35,  83 => 34,  81 => 30,  80 => 25,  77 => 24,  70 => 20,  66 => 19,  60 => 16,  56 => 15,  52 => 13,  49 => 12,  46 => 11,  41 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPlatformBundle:Platform:systemInfo.html.twig", "");
    }
}
