<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig */
class __TwigTemplate_ac0d01cf4f1aeb51d8702f94ef0874e6946e3a653afb8bfe24f5d37508205654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu_base.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig", 1);
        $this->blocks = array(
            'menu_widget' => array($this, 'block_menu_widget'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'item_renderer' => array($this, 'block_item_renderer'),
            'item_content' => array($this, 'block_item_content'),
            'list_wrapper' => array($this, 'block_list_wrapper'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig"));

        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig", 2);
        // line 3
        $context["Navigation"] = $this->loadTemplate("OroNavigationBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_menu_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_widget"));

        // line 20
        echo "    ";
        $context["options"] = array("depth" =>         // line 21
($context["depth"] ?? $this->getContext($context, "depth")), "matchingDepth" =>         // line 22
($context["matchingDepth"] ?? $this->getContext($context, "matchingDepth")), "currentAsLink" =>         // line 23
($context["currentAsLink"] ?? $this->getContext($context, "currentAsLink")), "ancestorClass" =>         // line 24
($context["ancestorClass"] ?? $this->getContext($context, "ancestorClass")), "currentClass" =>         // line 25
($context["currentClass"] ?? $this->getContext($context, "currentClass")), "firstClass" =>         // line 26
($context["firstClass"] ?? $this->getContext($context, "firstClass")), "lastClass" =>         // line 27
($context["lastClass"] ?? $this->getContext($context, "lastClass")), "allow_safe_labels" =>         // line 28
($context["allow_safe_labels"] ?? $this->getContext($context, "allow_safe_labels")), "clear_matcher" =>         // line 29
($context["clear_matcher"] ?? $this->getContext($context, "clear_matcher")), "leaf_class" =>         // line 30
($context["leaf_class"] ?? $this->getContext($context, "leaf_class")), "branch_class" =>         // line 31
($context["branch_class"] ?? $this->getContext($context, "branch_class")));
        // line 33
        echo "
    ";
        // line 34
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), ($context["attr"] ?? $this->getContext($context, "attr")));
        // line 35
        echo "
    ";
        // line 36
        if ($this->getAttribute(($context["options"] ?? null), "rootClass", array(), "any", true, true)) {
            // line 37
            echo "        ";
            $context["listAttributes"] = twig_array_merge(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")), array("class" => $this->getAttribute($this, "add_attribute_values", array(0 => ($context["listAttributes"] ?? $this->getContext($context, "listAttributes")), 1 => "class", 2 => array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "rootClass", array()))), "method")));
            // line 38
            echo "    ";
        }
        // line 39
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_list($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 43
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 44
            echo "        <ul";
            echo $this->getAttribute($this, "attributes", array(0 => ($context["listAttributes"] ?? $this->getContext($context, "listAttributes"))), "method");
            echo ">
            ";
            // line 45
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_children($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 51
        echo "    ";
        // line 52
        echo "    ";
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 53
        echo "    ";
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 56
            echo "        ";
            $context["options"] = twig_array_merge(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
            // line 57
            echo "    ";
        }
        // line 58
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            $context["itemAttributes"] = twig_array_merge($this->getAttribute($context["item"], "attributes", array()), ($context["child_attr"] ?? $this->getContext($context, "child_attr")));
            // line 60
            $context["childrenAttributes"] = $this->getAttribute($context["item"], "childrenAttributes", array());
            // line 61
            $context["classes"] = twig_split_filter($this->env, (((($this->getAttribute($this->getAttribute($context["item"], "attributes", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "attributes", array(), "any", false, true), "class", array()), "")) : ("")) . " ") . (($this->getAttribute(($context["child_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["child_attr"] ?? null), "class", array()), "")) : (""))), " ");
            // line 62
            $context["childrenClasses"] = (($this->getAttribute(($context["childrenAttributes"] ?? null), "class", array(), "any", true, true)) ? (twig_split_filter($this->env, $this->getAttribute(($context["childrenAttributes"] ?? $this->getContext($context, "childrenAttributes")), "class", array()), " ")) : (array()));
            // line 63
            echo "        ";
            $this->displayBlock("item", $context, $blocks);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    ";
        // line 66
        echo "    ";
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 67
        echo "    ";
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_item($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 71
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_item_renderer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_renderer"));

        // line 75
        echo "    ";
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array()) && $this->getAttribute($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extras", array()), "isAllowed", array()))) {
            // line 76
            echo "        ";
            // line 77
            if ($this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->isCurrent(($context["item"] ?? $this->getContext($context, "item")))) {
                // line 78
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->isAncestor(            // line 79
($context["item"] ?? $this->getContext($context, "item")), $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
                // line 80
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 82
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 83
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 85
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 86
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 88
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 89
                $context["itemAttributes"] = twig_array_merge(($context["itemAttributes"] ?? $this->getContext($context, "itemAttributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 91
            echo "        ";
            // line 92
            echo "        <li";
            echo $this->getAttribute($this, "attributes", array(0 => ($context["itemAttributes"] ?? $this->getContext($context, "itemAttributes"))), "method");
            echo ">
            ";
            // line 93
            $this->displayBlock("item_content", $context, $blocks);
            echo "
        </li>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 98
    public function block_item_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_content"));

        // line 99
        $context["linkAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()), ($context["link_attr"] ?? $this->getContext($context, "link_attr")));
        // line 100
        $context["labelAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()), ($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        // line 101
        if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->isCurrent(($context["item"] ?? $this->getContext($context, "item"))) || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
            // line 102
            echo "        ";
            $this->displayBlock("linkElement", $context, $blocks);
        } else {
            // line 104
            echo "        ";
            $this->displayBlock("spanElement", $context, $blocks);
        }
        // line 106
        echo "    ";
        // line 107
        $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
        // line 108
        $context["listAttributes"] = twig_array_merge(($context["childrenAttributes"] ?? $this->getContext($context, "childrenAttributes")), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
        // line 109
        echo "    ";
        $this->displayBlock("list_wrapper", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block_list_wrapper($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_wrapper"));

        // line 114
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 118
        echo "    ";
        $context["extras"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extras", array());
        // line 119
        echo "
    ";
        // line 120
        if (($this->getAttribute(($context["extras"] ?? null), "dialog", array(), "any", true, true) && $this->getAttribute(($context["extras"] ?? $this->getContext($context, "extras")), "dialog", array()))) {
            // line 121
            echo "        ";
            echo $context["Navigation"]->getrenderClientLink($this->getAttribute(($context["extras"] ?? $this->getContext($context, "extras")), "dialog_config", array()), array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName($this->getAttribute(            // line 122
($context["app"] ?? $this->getContext($context, "app")), "user", array()), true), "entityId" => $this->getAttribute($this->getAttribute(            // line 123
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array())));
        } else {
            // line 126
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\CommerceMenuBundle\Twig\MenuExtension')->getUrl($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())), "html", null, true);
            echo "\"";
            echo $this->getAttribute($this, "attributes", array(0 => ($context["linkAttributes"] ?? $this->getContext($context, "linkAttributes"))), "method");
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>
    ";
        }
        // line 128
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 131
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 132
        echo "    <span";
        echo $this->getAttribute($this, "attributes", array(0 => ($context["labelAttributes"] ?? $this->getContext($context, "labelAttributes"))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 135
    public function block_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 136
        echo "    ";
        $context["label"] = ((($this->getAttribute($this->getAttribute(($context["item"] ?? null), "extras", array(), "any", false, true), "custom", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extras", array()), "custom", array()) == true))) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()))));
        // line 137
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array())) {
            // line 138
            echo ($context["label"] ?? $this->getContext($context, "label"));
        } else {
            // line 140
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 7
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 8
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
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

    // line 13
    public function getadd_attribute_values($__attributes__ = null, $__attribute__ = null, $__values__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "attribute" => $__attribute__,
            "values" => $__values__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "add_attribute_values"));

            // line 14
            $context["_values"] = (($this->getAttribute(($context["attributes"] ?? null), ($context["attribute"] ?? $this->getContext($context, "attribute")), array(), "array", true, true)) ? (twig_split_filter($this->env, $this->getAttribute(($context["attributes"] ?? $this->getContext($context, "attributes")), ($context["attribute"] ?? $this->getContext($context, "attribute")), array(), "array"), " ")) : (array()));
            // line 15
            $context["_values"] = twig_array_merge(($context["_values"] ?? $this->getContext($context, "_values")), ($context["values"] ?? $this->getContext($context, "values")));
            // line 16
            echo twig_escape_filter($this->env, twig_join_filter(($context["_values"] ?? $this->getContext($context, "_values")), " "), "html", null, true);
            
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
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 16,  460 => 15,  458 => 14,  441 => 13,  418 => 8,  416 => 7,  412 => 6,  397 => 5,  389 => 140,  386 => 138,  384 => 137,  381 => 136,  375 => 135,  363 => 132,  357 => 131,  349 => 128,  339 => 126,  336 => 123,  335 => 122,  333 => 121,  331 => 120,  328 => 119,  325 => 118,  319 => 117,  309 => 114,  303 => 113,  293 => 109,  291 => 108,  289 => 107,  287 => 106,  283 => 104,  279 => 102,  277 => 101,  275 => 100,  273 => 99,  267 => 98,  256 => 93,  251 => 92,  249 => 91,  246 => 89,  244 => 88,  241 => 86,  239 => 85,  236 => 83,  234 => 82,  231 => 80,  229 => 79,  227 => 78,  225 => 77,  223 => 76,  220 => 75,  214 => 74,  204 => 71,  198 => 70,  190 => 67,  187 => 66,  185 => 65,  168 => 63,  166 => 62,  164 => 61,  162 => 60,  160 => 59,  142 => 58,  139 => 57,  136 => 56,  133 => 55,  131 => 54,  128 => 53,  125 => 52,  123 => 51,  117 => 50,  106 => 45,  101 => 44,  98 => 43,  92 => 42,  84 => 39,  81 => 38,  78 => 37,  76 => 36,  73 => 35,  71 => 34,  68 => 33,  66 => 31,  65 => 30,  64 => 29,  63 => 28,  62 => 27,  61 => 26,  60 => 25,  59 => 24,  58 => 23,  57 => 22,  56 => 21,  54 => 20,  48 => 19,  41 => 1,  39 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OroNavigationBundle:Menu:menu_base.html.twig' %}
{% import 'OroUIBundle::macros.html.twig' as UI %}
{% import 'OroNavigationBundle::macros.html.twig' as Navigation %}

{% macro attributes(attributes) %}
    {%- for name, value in attributes -%}
        {%- if value is not none and value is not sameas(false) -%}
            {{- ' %s=\"%s\"'|format(name, value is sameas(true) ? name|e : value|e)|raw -}}
        {%- endif -%}
    {%- endfor -%}
{% endmacro %}

{% macro add_attribute_values(attributes, attribute, values) %}
    {%- set _values = attributes[attribute] is defined ? attributes[attribute]|split(' ') : [] %}
    {%- set _values = _values|merge(values) %}
    {{- _values|join(' ') -}}
{% endmacro %}

{% block menu_widget %}
    {% set options ={
        depth: depth,
        matchingDepth: matchingDepth,
        currentAsLink: currentAsLink,
        ancestorClass: ancestorClass,
        currentClass: currentClass,
        firstClass: firstClass,
        lastClass: lastClass,
        allow_safe_labels: allow_safe_labels,
        clear_matcher: clear_matcher,
        leaf_class: leaf_class,
        branch_class: branch_class
    } %}

    {% set listAttributes = item.childrenAttributes|merge(attr) %}

    {% if options.rootClass is defined %}
        {% set listAttributes = listAttributes|merge({'class': _self.add_attribute_values(listAttributes, 'class', [options.rootClass])}) %}
    {% endif %}
    {{ block('list') -}}
{% endblock %}

{% block list %}
    {% if item.hasChildren and options.depth is not sameas(0) and item.displayChildren %}
        <ul{{ _self.attributes(listAttributes) }}>
            {{ block('children') }}
        </ul>
    {% endif %}
{% endblock %}

{% block children %}
    {# save current variables #}
    {% set currentOptions = options %}
    {% set currentItem = item %}
    {# update the depth for children #}
    {% if options.depth is not none %}
        {% set options = currentOptions|merge({'depth': currentOptions.depth - 1}) %}
    {% endif %}
    {% for item in currentItem.children %}
        {%- set itemAttributes = item.attributes|merge(child_attr) %}
        {%- set childrenAttributes = item.childrenAttributes %}
        {%- set classes = (item.attributes.class|default('')~' '~child_attr.class|default(''))|split(' ') %}
        {%- set childrenClasses = childrenAttributes.class is defined ? childrenAttributes.class|split(' ') : [] %}
        {{ block('item') }}
    {% endfor %}
    {# restore current variables #}
    {% set item = currentItem %}
    {% set options = currentOptions %}
{% endblock %}

{% block item %}
    {{ block('item_renderer') }}
{% endblock %}

{% block item_renderer %}
    {% if item.displayed and item.extras.isAllowed %}
        {# building the class of the item #}
        {%- if oro_commercemenu_is_current(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif oro_commercemenu_is_ancestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}
        {%- if classes is not empty %}
            {%- set itemAttributes = itemAttributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        <li{{ _self.attributes(itemAttributes) }}>
            {{ block('item_content') }}
        </li>
    {% endif %}
{% endblock %}

{% block item_content %}
    {%- set linkAttributes = item.linkAttributes|merge(link_attr) %}
    {%- set labelAttributes = item.labelAttributes|merge(label_attr) %}
    {%- if item.uri is not empty and (not oro_commercemenu_is_current(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
    {%- else %}
        {{ block('spanElement') }}
    {%- endif %}
    {# render the list of children#}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
    {%- set listAttributes = childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
    {{ block('list_wrapper') }}
{% endblock %}

{# list wrapper block is used to allow modification of execution context in child templates #}
{% block list_wrapper %}
    {{ block('list') }}
{% endblock %}

{% block linkElement %}
    {% set extras = item.extras %}

    {% if extras.dialog is defined and extras.dialog %}
        {{ Navigation.renderClientLink(extras.dialog_config, {
            entityClass: oro_class_name(app.user, true),
            entityId: app.user.id
        }) }}
    {%- else %}
        <a href=\"{{ oro_commercemenu_get_url(item.uri) }}\"{{ _self.attributes(linkAttributes) }}>{{ block('label') }}</a>
    {% endif %}

{% endblock %}

{% block spanElement %}
    <span{{ _self.attributes(labelAttributes) }}>{{ block('label') }}</span>
{% endblock %}

{% block label %}
    {% set label = item.extras.custom is defined and item.extras.custom == true ? item.label : item.label|trans %}
    {%- if options.allow_safe_labels -%}
        {{- label|raw -}}
    {% else %}
        {{- label -}}
    {%- endif -%}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/menu.html.twig");
    }
}
