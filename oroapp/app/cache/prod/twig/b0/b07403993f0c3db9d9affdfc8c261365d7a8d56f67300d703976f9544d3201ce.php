<?php

/* OroTaskBundle:Task/widget:tasksWidget.html.twig */
class __TwigTemplate_c3373f7c2199735d864e81d959d45a8ec3e539e09cbf1c806ac2d1869c031edf extends Twig_Template
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
        if ((twig_length_filter($this->env, ($context["tasks"] ?? null)) > 0)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 3
                echo "        <div class=\"task-widget-row ";
                echo (($this->getAttribute($context["task"], "dueDateExpired", array())) ? ("task-expired") : (""));
                echo " ";
                echo (($this->getAttribute($context["loop"], "first", array())) ? ("first") : (""));
                echo " ";
                echo (($this->getAttribute($context["loop"], "last", array())) ? ("last") : (""));
                echo "\"
            data-url=\"";
                // line 4
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_task_view", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                echo "\">
            <span class=\"task-subject\">";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "subject", array()), "html", null, true);
                echo "</span>
            <span class=\"task-date-time\">";
                // line 6
                echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($context["task"], "dueDate", array()));
                echo "</span>
        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 10
            echo "    <p class=\"no_tasks\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.task.assigned_tasks_widget.no_task_exist"), "html", null, true);
            echo "
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "OroTaskBundle:Task/widget:tasksWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  74 => 10,  56 => 6,  52 => 5,  48 => 4,  39 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaskBundle:Task/widget:tasksWidget.html.twig", "");
    }
}
