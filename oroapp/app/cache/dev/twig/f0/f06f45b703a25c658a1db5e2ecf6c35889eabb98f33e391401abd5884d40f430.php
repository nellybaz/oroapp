<?php

/* OroProductBundle::image_macros.html.twig */
class __TwigTemplate_5850324e71a516b1107553428a636eacad2826019de8b5448b91bb5d6d32ea56 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroProductBundle::image_macros.html.twig"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "url"));

            // line 2
            if ( !(null === ($context["file"] ?? $this->getContext($context, "file")))) {
                // line 3
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFilteredImageUrl(($context["file"] ?? $this->getContext($context, "file")), ($context["filter"] ?? $this->getContext($context, "filter"))), "html", null, true);
            } else {
                // line 5
                echo $this->getAttribute($this, "urlFromString", array(0 => "", 1 => ($context["filter"] ?? $this->getContext($context, "filter"))), "method");
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "urlFromString"));

            // line 10
            if (twig_test_empty(($context["file"] ?? $this->getContext($context, "file")))) {
                // line 11
                echo "        ";
                $context["file"] = "/bundles/oroproduct/default/images/no_image.png";
                // line 12
                echo "    ";
            }
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(($context["file"] ?? $this->getContext($context, "file")), ($context["filter"] ?? $this->getContext($context, "filter"))), "html", null, true);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "image"));

            // line 17
            echo "<img src=\"";
            echo $this->getAttribute($this, "url", array(0 => ($context["file"] ?? $this->getContext($context, "file")), 1 => ($context["filter"] ?? $this->getContext($context, "filter"))), "method");
            echo "\"/>";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderProductImages"));

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
            $context['_seq'] = twig_ensure_traversable(($context["imageTypes"] ?? $this->getContext($context, "imageTypes")));
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
            $context['_seq'] = twig_ensure_traversable(($context["productImages"] ?? $this->getContext($context, "productImages")));
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
                $context['_seq'] = twig_ensure_traversable(($context["imageTypes"] ?? $this->getContext($context, "imageTypes")));
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  234 => 49,  227 => 47,  220 => 45,  216 => 43,  214 => 42,  211 => 41,  207 => 40,  201 => 37,  197 => 35,  193 => 34,  187 => 30,  178 => 28,  174 => 27,  170 => 26,  164 => 22,  161 => 21,  145 => 20,  125 => 17,  109 => 16,  91 => 13,  88 => 12,  85 => 11,  83 => 10,  67 => 9,  48 => 5,  45 => 3,  43 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro url(file, filter) -%}
    {%- if file is not null %}
        {{- filtered_image_url(file, filter) -}}
    {% else %}
        {{- _self.urlFromString('', filter) -}}
    {% endif %}
{%- endmacro -%}

{% macro urlFromString(file, filter) -%}
    {%- if file is empty %}
        {% set file = '/bundles/oroproduct/default/images/no_image.png' %}
    {% endif %}
    {{- file|imagine_filter(filter) -}}
{%- endmacro -%}

{% macro image(file, filter) -%}
    <img src=\"{{ _self.url(file, filter) }}\"/>
{%- endmacro -%}

{% macro renderProductImages(productImages, imageTypes) %}
    {% import 'OroUIBundle::macros.html.twig' as UI %}
    <div class=\"image-collection view\">
        <table class=\"grid table table-bordered\">
            <thead>
                <tr>
                    <th>{{ 'oro.product.productimage.file.label'|trans }}</th>
                    {% for imageType in imageTypes %}
                        <th>{{ imageType.label|trans }}</th>
                    {% endfor %}
                </tr>
            </thead>

            <tbody>
                {% for productImage in productImages %}
                    <tr>
                        <td>
                            {{ oro_file_view(productImage, 'image', productImage.image, {'galleryId' : 'images'} ) }}
                        </td>

                        {% for imageType in imageTypes %}
                            <td>
                                {% if productImage.hasType(imageType.name) %}
                                    <i class=\"fa-check-square-o\"></i>
                                {% endif %}
                            </td>
                        {% endfor %}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endmacro %}
", "OroProductBundle::image_macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/image_macros.html.twig");
    }
}
