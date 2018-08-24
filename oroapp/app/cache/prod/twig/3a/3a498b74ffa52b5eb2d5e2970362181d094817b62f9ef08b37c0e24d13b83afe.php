<?php

/* OroProductBundle::image_macros.html.twig */
class __TwigTemplate_a92776192201e4321a845a26320156e21482fc2a6a0eeb61420cb9afe428b491 extends Twig_Template
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
    public function geturl($__file__ = null, $__filter__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "file" => $__file__,
            "filter" => $__filter__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if ( !(null === ($context["file"] ?? null))) {
                // line 3
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFilteredImageUrl(($context["file"] ?? null), ($context["filter"] ?? null)), "html", null, true);
            } else {
                // line 5
                echo $this->getAttribute($this, "urlFromString", array(0 => "", 1 => ($context["filter"] ?? null)), "method");
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

    // line 9
    public function geturlFromString($__file__ = null, $__filter__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "file" => $__file__,
            "filter" => $__filter__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            if (twig_test_empty(($context["file"] ?? null))) {
                // line 11
                echo "        ";
                $context["file"] = "/bundles/oroproduct/default/images/no_image.png";
                // line 12
                echo "    ";
            }
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(($context["file"] ?? null), ($context["filter"] ?? null)), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getimage($__file__ = null, $__filter__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "file" => $__file__,
            "filter" => $__filter__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "<img src=\"";
            echo $this->getAttribute($this, "url", array(0 => ($context["file"] ?? null), 1 => ($context["filter"] ?? null)), "method");
            echo "\"/>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getrenderProductImages($__productImages__ = null, $__imageTypes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "productImages" => $__productImages__,
            "imageTypes" => $__imageTypes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle::image_macros.html.twig", 21);
            // line 22
            echo "    <div class=\"image-collection view\">
        <table class=\"grid table table-bordered\">
            <thead>
                <tr>
                    <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productimage.file.label"), "html", null, true);
            echo "</th>
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imageTypes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["imageType"]) {
                // line 28
                echo "                        <th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["imageType"], "label", array())), "html", null, true);
                echo "</th>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                </tr>
            </thead>

            <tbody>
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productImages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["productImage"]) {
                // line 35
                echo "                    <tr>
                        <td>
                            ";
                // line 37
                echo $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFileView($this->env, $context["productImage"], "image", $this->getAttribute($context["productImage"], "image", array()), array("galleryId" => "images"));
                echo "
                        </td>

                        ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["imageTypes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["imageType"]) {
                    // line 41
                    echo "                            <td>
                                ";
                    // line 42
                    if ($this->getAttribute($context["productImage"], "hasType", array(0 => $this->getAttribute($context["imageType"], "name", array())), "method")) {
                        // line 43
                        echo "                                    <i class=\"fa-check-square-o\"></i>
                                ";
                    }
                    // line 45
                    echo "                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </tbody>
        </table>
    </div>
";
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
        return "OroProductBundle::image_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 49,  200 => 47,  193 => 45,  189 => 43,  187 => 42,  184 => 41,  180 => 40,  174 => 37,  170 => 35,  166 => 34,  160 => 30,  151 => 28,  147 => 27,  143 => 26,  137 => 22,  134 => 21,  121 => 20,  104 => 17,  91 => 16,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  55 => 9,  39 => 5,  36 => 3,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle::image_macros.html.twig", "");
    }
}
