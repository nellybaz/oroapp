<?php

/* OroProductBundle:Product/RelatedItems:macros.html.twig */
class __TwigTemplate_bd41e295de4881318aa9c8365de300095b49503ff491b12e1e5f30821a00968a extends Twig_Template
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
        // line 27
        echo "
";
    }

    // line 1
    public function getrenderRelatedItemButton($__dataUrl__ = null, $__label__ = null, $__title__ = null, $__limit__ = null, $__itemsIdsToAddFieldName__ = null, $__itemsIdsToRemoveFieldName__ = null, $__gridName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "dataUrl" => $__dataUrl__,
            "label" => $__label__,
            "title" => $__title__,
            "limit" => $__limit__,
            "itemsIdsToAddFieldName" => $__itemsIdsToAddFieldName__,
            "itemsIdsToRemoveFieldName" => $__itemsIdsToRemoveFieldName__,
            "gridName" => $__gridName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:Product/RelatedItems:macros.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            echo $context["UI"]->getclientLink(array("dataUrl" =>             // line 5
($context["dataUrl"] ?? null), "aCss" => "btn no-hash related-items-widget__button", "label" =>             // line 7
($context["label"] ?? null), "widget" => array("type" => "related-items", "options" => array("dialogOptions" => array("title" =>             // line 12
($context["title"] ?? null), "modal" => true, "resizable" => false, "width" => 820, "height" => "80vh", "autoResize" => true), "itemsLimit" =>             // line 19
($context["limit"] ?? null), "itemsIdsToAdd" =>             // line 20
($context["itemsIdsToAddFieldName"] ?? null), "itemsIdsToRemove" =>             // line 21
($context["itemsIdsToRemoveFieldName"] ?? null), "gridName" =>             // line 22
($context["gridName"] ?? null)))));
            // line 25
            echo "
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

    // line 28
    public function getrenderGrid($__name__ = null, $__params__ = array(), $__renderParams__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "    ";
            $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroProductBundle:Product/RelatedItems:macros.html.twig", 29);
            // line 30
            echo "
    <div id=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 32
            echo $context["dataGrid"]->getrenderGrid(($context["name"] ?? null), ($context["params"] ?? null), ($context["renderParams"] ?? null));
            echo "
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
        return "OroProductBundle:Product/RelatedItems:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  93 => 31,  90 => 30,  87 => 29,  73 => 28,  57 => 25,  55 => 22,  54 => 21,  53 => 20,  52 => 19,  51 => 12,  50 => 7,  49 => 5,  48 => 4,  45 => 3,  42 => 2,  24 => 1,  19 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product/RelatedItems:macros.html.twig", "");
    }
}
