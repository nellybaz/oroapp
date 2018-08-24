<?php

/* OroCMSBundle:LoginPage:view.html.twig */
class __TwigTemplate_5a1c49932858645c9df801f942fda65ef65f74649ebbb438420babc932610365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCMSBundle:LoginPage:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
            'stats' => array($this, 'block_stats'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCMSBundle:LoginPage:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%title%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.page.entity_label"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 8
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_cms_loginpage_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 11
($context["entity"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "id", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))));
        // line 13
        echo "
    ";
        // line 14
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_content_data($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "        ";
        if ($this->getAttribute(($context["entity"] ?? null), "logoImage", array())) {
            // line 20
            echo "            ";
            ob_start();
            // line 21
            echo "                <div class=\"control-label html-content\">
                    <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFilteredImageUrl($this->getAttribute(($context["entity"] ?? null), "logoImage", array()), "login_page"), "html", null, true);
            echo "\">
                </div>
            ";
            $context["logoImageContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 25
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderAttribute", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.logo_image.label"), 1 => ($context["logoImageContent"] ?? null)), "method"), "html", null, true);
            echo "
        ";
        } else {
            // line 27
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.logo_image.label"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")), "method"), "html", null, true);
            echo "
        ";
        }
        // line 29
        echo "    ";
        $context["imageLogoData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
    ";
        // line 31
        ob_start();
        // line 32
        echo "        ";
        if ($this->getAttribute(($context["entity"] ?? null), "backgroundImage", array())) {
            // line 33
            echo "            ";
            ob_start();
            // line 34
            echo "                <div class=\"control-label html-content\">
                    <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFilteredImageUrl($this->getAttribute(($context["entity"] ?? null), "backgroundImage", array()), "login_page"), "html", null, true);
            echo "\">
                </div>
            ";
            $context["backgroupImageContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 38
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderAttribute", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.background_image.label"), 1 => ($context["backgroupImageContent"] ?? null)), "method"), "html", null, true);
            echo "
        ";
        } else {
            // line 40
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.background_image.label"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")), "method"), "html", null, true);
            echo "
        ";
        }
        // line 42
        echo "    ";
        $context["backgroundImageData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "
    ";
        // line 44
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 => $this->getAttribute(        // line 49
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.top_content.label"), 1 => twig_truncate_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "topContent", array()), 100)), "method"), 1 => $this->getAttribute(        // line 50
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.bottom_content.label"), 1 => twig_truncate_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "bottomContent", array()), 100)), "method"), 2 => $this->getAttribute(        // line 51
($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cms.loginpage.css.label"), 1 => twig_truncate_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "css", array()), 100)), "method"), 3 =>         // line 52
($context["imageLogoData"] ?? null), 4 =>         // line 53
($context["backgroundImageData"] ?? null))))));
        // line 57
        echo "
    ";
        // line 58
        $context["id"] = "login-page-view";
        // line 59
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 60
        echo "
    ";
        // line 61
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 64
    public function block_stats($context, array $blocks = array())
    {
        // line 65
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroCMSBundle:LoginPage:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 65,  150 => 64,  144 => 61,  141 => 60,  138 => 59,  136 => 58,  133 => 57,  131 => 53,  130 => 52,  129 => 51,  128 => 50,  127 => 49,  126 => 44,  123 => 43,  120 => 42,  114 => 40,  108 => 38,  102 => 35,  99 => 34,  96 => 33,  93 => 32,  91 => 31,  88 => 30,  85 => 29,  79 => 27,  73 => 25,  67 => 22,  64 => 21,  61 => 20,  58 => 19,  55 => 18,  52 => 17,  46 => 14,  43 => 13,  41 => 11,  40 => 8,  38 => 7,  35 => 6,  31 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCMSBundle:LoginPage:view.html.twig", "");
    }
}
