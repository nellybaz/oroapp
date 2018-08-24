<?php

/* OroCalendarBundle::macros.html.twig */
class __TwigTemplate_4af51e48d4e4206f711b8abf9cd3ea2cb17b213b8e284a6d2c861a4394646ffa extends Twig_Template
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
    public function getrenderOrganizer($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle::macros.html.twig", 2);
            // line 3
            echo "
    <div class=\"calendar-event-organizer\">
        ";
            // line 5
            if (( !(null === $this->getAttribute(($context["user"] ?? null), "organizerUser", array())) &&  !(null === $this->getAttribute(($context["user"] ?? null), "organizerDisplayName", array())))) {
                // line 6
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["user"] ?? null), "organizerUser", array()), "avatar", array())) ? ($this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFilteredImageUrl($this->getAttribute($this->getAttribute(($context["user"] ?? null), "organizerUser", array()), "avatar", array()), "avatar_xsmall")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"))), "html", null, true);
                echo "\" />
            ";
                // line 7
                echo $context["UI"]->getlink(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_user_view", array("id" => $this->getAttribute($this->getAttribute(                // line 8
($context["user"] ?? null), "organizerUser", array()), "id", array()))), "label" => $this->getAttribute(                // line 9
($context["user"] ?? null), "organizerDisplayName", array())));
                // line 10
                echo "
        ";
            } elseif (( !(null === $this->getAttribute(            // line 11
($context["user"] ?? null), "organizerEmail", array())) &&  !(null === $this->getAttribute(($context["user"] ?? null), "organizerDisplayName", array())))) {
                // line 12
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html", null, true);
                echo "\" />
            ";
                // line 13
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["user"] ?? null), "organizerDisplayName", array()) . " (") . $this->getAttribute(($context["user"] ?? null), "organizerEmail", array())) . ")"), "html", null, true);
                echo "
        ";
            } else {
                // line 15
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.na.label"), "html", null, true);
                echo "
        ";
            }
            // line 17
            echo "    </div>
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
        return "OroCalendarBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  66 => 15,  61 => 13,  56 => 12,  54 => 11,  51 => 10,  49 => 9,  48 => 8,  47 => 7,  42 => 6,  40 => 5,  36 => 3,  33 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle::macros.html.twig", "");
    }
}
