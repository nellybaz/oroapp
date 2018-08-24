<?php

/* OroAddressBundle::macros.html.twig */
class __TwigTemplate_e08074045833190c43f66400e0393b7fc7dc5d5e87aea2510746eebfcac19c3e extends Twig_Template
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
    }

    // line 1
    public function getrenderAddress($__address__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "address" => $__address__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (($context["address"] ?? null)) {
                // line 3
                echo "        ";
                if ($this->getAttribute(($context["address"] ?? null), "label", array())) {
                    // line 4
                    echo "            <b>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? null), "label", array()));
                    echo "</b>
            <br />
        ";
                }
                // line 7
                echo "        ";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\AddressExtension')->formatAddress(($context["address"] ?? null))));
                echo "
    ";
            } else {
                // line 9
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"), "html", null, true);
                echo "
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
        return "OroAddressBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  46 => 7,  39 => 4,  36 => 3,  33 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAddressBundle::macros.html.twig", "");
    }
}
