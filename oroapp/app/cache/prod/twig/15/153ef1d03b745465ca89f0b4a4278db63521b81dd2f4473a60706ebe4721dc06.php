<?php

/* OroEmailBundle:Email/Datagrid/Property:contacts.html.twig */
class __TwigTemplate_a62f1ae638b70c0243ab569b67ba5af27df923f67b36e93ec1327b401449c2f0 extends Twig_Template
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
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email/Datagrid/Property:contacts.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["isNew"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "is_new"), "method");
        // line 4
        echo "
<span class=\"nowrap\">
    <span class=\"icon grid\">
        <i class=\"";
        // line 7
        echo (($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "incoming"), "method")) ? ("fa-sign-in") : ("fa-sign-out"));
        echo "\"></i>
    </span>
    ";
        // line 9
        if ($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "incoming"), "method")) {
            // line 10
            echo "        ";
            echo $this->getAttribute($this, "renderEmailAddressCell", array(0 => $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "fromName"), "method"), 1 => ($context["isNew"] ?? null), 2 => 22), "method");
            echo "
    ";
        } else {
            // line 12
            echo "        ";
            $context["recipients"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "recipients"), "method");
            // line 13
            echo "        ";
            if ((twig_length_filter($this->env, ($context["recipients"] ?? null)) > 0)) {
                // line 14
                echo "            ";
                if ((twig_length_filter($this->env, ($context["recipients"] ?? null)) < 3)) {
                    // line 15
                    echo "                ";
                    echo $this->getAttribute($this, "renderEmailAddressCell", array(0 => $context["EA"]->getemail_participants_name(($context["recipients"] ?? null), true, false), 1 => ($context["isNew"] ?? null)), "method");
                    echo "
            ";
                } else {
                    // line 17
                    echo "                ";
                    $context["firstEmail"] = twig_first($this->env, ($context["recipients"] ?? null));
                    // line 18
                    echo "                ";
                    $context["lastEmail"] = twig_last($this->env, ($context["recipients"] ?? null));
                    // line 19
                    echo "                ";
                    $context["firstLastRecipients"] = ((                    // line 20
$context["EA"]->getemail_participant_name_or_me($this->getAttribute(($context["firstEmail"] ?? null), "emailAddress", array()), $this->getAttribute(($context["firstEmail"] ?? null), "name", array()), true, false) . " .. ") .                     // line 22
$context["EA"]->getemail_participant_name_or_me($this->getAttribute(($context["lastEmail"] ?? null), "emailAddress", array()), $this->getAttribute(($context["lastEmail"] ?? null), "name", array()), true, false));
                    // line 24
                    echo "                ";
                    echo $this->getAttribute($this, "renderEmailAddressCell", array(0 => ($context["firstLastRecipients"] ?? null), 1 => ($context["isNew"] ?? null)), "method");
                    echo "
            ";
                }
                // line 26
                echo "        ";
            }
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        if ($this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_email.threads_grouping")) {
            // line 29
            echo "        ";
            $context["threadEmailCount"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "thread_email_count"), "method");
            // line 30
            echo "        ";
            if ((($context["threadEmailCount"] ?? null) > 1)) {
                // line 31
                echo "            ";
                echo $this->getAttribute($this, "renderEmailAddressCell", array(0 => (("(" . ($context["threadEmailCount"] ?? null)) . ")"), 1 => ($context["isNew"] ?? null)), "method");
                echo "
        ";
            }
            // line 33
            echo "    ";
        }
        // line 34
        echo "</span>

";
    }

    // line 36
    public function getrenderEmailAddressCell($__label__ = null, $__isNew__ = null, $__maxLength__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "isNew" => $__isNew__,
            "maxLength" => $__maxLength__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 37
            echo "    ";
            if ((($context["maxLength"] ?? null) && (twig_length_filter($this->env, ($context["label"] ?? null)) > ($context["maxLength"] ?? null)))) {
                // line 38
                echo "        ";
                list($context["title"], $context["label"]) =                 array(($context["label"] ?? null), twig_truncate_filter($this->env, ($context["label"] ?? null), ($context["maxLength"] ?? null)));
                // line 39
                echo "    ";
            }
            // line 40
            if (($context["isNew"] ?? null)) {
                // line 41
                echo "<strong";
                if (array_key_exists("title", $context)) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(($context["label"] ?? null));
                echo "</strong>";
            } elseif (            // line 42
array_key_exists("title", $context)) {
                // line 43
                echo "<span title=\"";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(($context["label"] ?? null));
                echo "</span>";
            } else {
                // line 45
                echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->tagFilter(($context["label"] ?? null));
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
        return "OroEmailBundle:Email/Datagrid/Property:contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 45,  143 => 43,  141 => 42,  131 => 41,  129 => 40,  126 => 39,  123 => 38,  120 => 37,  106 => 36,  100 => 34,  97 => 33,  91 => 31,  88 => 30,  85 => 29,  82 => 28,  79 => 27,  76 => 26,  70 => 24,  68 => 22,  67 => 20,  65 => 19,  62 => 18,  59 => 17,  53 => 15,  50 => 14,  47 => 13,  44 => 12,  38 => 10,  36 => 9,  31 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email/Datagrid/Property:contacts.html.twig", "");
    }
}
