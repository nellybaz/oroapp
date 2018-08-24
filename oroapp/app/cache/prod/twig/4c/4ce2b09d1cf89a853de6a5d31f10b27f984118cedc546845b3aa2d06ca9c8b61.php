<?php

/* OroOrganizationBundle::viewOwnerInfo.html.twig */
class __TwigTemplate_2bc004231e01fb47a3488965cfe305c7298687d1df7def04a20384e92cfc2687 extends Twig_Template
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
        // line 1
        $context["U"] = $this->loadTemplate("OroUserBundle::macros.html.twig", "OroOrganizationBundle::viewOwnerInfo.html.twig", 1);
        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("VIEW", ($context["entity"] ?? null), $this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getOwnerFieldName(($context["entity"] ?? null)))) {
            // line 3
            echo "    ";
            if ( !array_key_exists("bracket_parts", $context)) {
                // line 4
                echo "        ";
                $context["bracket_parts"] = array();
                // line 5
                echo "    ";
            }
            // line 6
            echo "    ";
            $context["ownerType"] = $this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getOwnerType(($context["entity"] ?? null));
            // line 7
            echo "    ";
            if ((($context["ownerType"] ?? null) == "USER")) {
                // line 8
                echo "        ";
                $context["userOwner"] = $this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getEntityOwner(($context["entity"] ?? null));
                // line 9
                echo "        ";
                if (($context["userOwner"] ?? null)) {
                    // line 10
                    echo "            ";
                    $context["businessUnitName"] = $context["U"]->getuser_business_unit_name(($context["userOwner"] ?? null), false);
                    // line 11
                    echo "            ";
                    if ( !twig_test_empty(($context["businessUnitName"] ?? null))) {
                        // line 12
                        echo "                ";
                        $context["bracket_parts"] = twig_array_merge(array(0 => ($context["businessUnitName"] ?? null)), ($context["bracket_parts"] ?? null));
                        // line 13
                        echo "            ";
                    }
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "    ";
            } elseif ((($context["ownerType"] ?? null) == "ORGANIZATION")) {
                // line 16
                echo "        ";
                if ( !array_key_exists("organizationInfo", $context)) {
                    // line 17
                    echo "            ";
                    $context["organizationOwner"] = $this->env->getExtension('Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension')->getEntityOwner(($context["entity"] ?? null));
                    // line 18
                    echo "            ";
                    if ( !(null === ($context["organizationOwner"] ?? null))) {
                        // line 19
                        echo "                ";
                        $context["organizationInfo"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.owner") . ": ") . $this->getAttribute(($context["organizationOwner"] ?? null), "name", array()));
                        // line 20
                        echo "            ";
                    } else {
                        // line 21
                        echo "                ";
                        $context["organizationInfo"] = "";
                        // line 22
                        echo "            ";
                    }
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "        ";
                echo ($context["organizationInfo"] ?? null);
                echo "
    ";
            }
            // line 26
            echo "    ";
            if ( !twig_test_empty(($context["bracket_parts"] ?? null))) {
                // line 27
                echo "        (";
                echo twig_join_filter(($context["bracket_parts"] ?? null), ", ");
                echo ")
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle::viewOwnerInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  92 => 26,  86 => 24,  83 => 23,  80 => 22,  77 => 21,  74 => 20,  71 => 19,  68 => 18,  65 => 17,  62 => 16,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrganizationBundle::viewOwnerInfo.html.twig", "");
    }
}
