<?php

/* OroEntityBundle:Collector:orm.html.twig */
class __TwigTemplate_31398662eaec3d1af08424149f8a491cc06cb4f965d2c9ff2fe1a630f2f56ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "OroEntityBundle:Collector:orm.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'stats' => array($this, 'block_stats'),
            'hydrations' => array($this, 'block_hydrations'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEntityBundle:Collector:orm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "    <img width=\"20\" height=\"28\" alt=\"Doctrine ORM\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwgAADsIBFShKgAAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAc1JREFUSEutlb9Lw0AUxzMJ4u/BxcG/QhxcStdSBEXc2kUUV91KxcFujiIUBAeXghV0Mv1BV9OmpTRpOnaIKXZowUUFB2n8vnAp1FzTxuTg0x4v731yeXdNBdM0A4Ub9AM36Adu0A9CoVC4jUQiMhEKhUwiFoul4vH4Jq+AoGuUY+fb9eQSaIKEvn2RcJPZUM6fmj65LCEF6I68wmmwV2sJo9GodYd6vb6tadpjs9l8BQYPXH8Cu9lsdkZgg4SDwWCBHOQaCvP5fC+Xy51JkrSP4ktVVZ9RLI7hvtVqHYF1tsolntAC0rdSqbSDGPX1fRJjhRA1IPwiqSzLyXA4/EHxcdBg3/xHxpZfQZYED4qiJCD8tIvdYMJZmo8IIfoBPXCt6/pWu92+MQxDcgM5dyQE8zzhN7D6WC6XTxGbuodY4SLmo0JRFA8gq5KwVqtdeOkh4O6yDg7RyxMcm2OPPXSukFbGULHCvXQ6/ZLJZAw3kNNgQuem4Nj0bWmlUkkg5qWHc5g7ergKWQpiDcfm3OM5dD4y+2kKxWJxrdvtbnjpIVihOVdIg3rS6XQUoE1AYcLloTDw1xd9BPqCDfwvgFfgB27QD9ygH7jB/2MKvwXZez+M9nkbAAAAAElFTkSuQmCC\"/>
    <span class=\"sf-toolbar-value\">";
        // line 6
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
        echo "</span>
    <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>Hydrations</b>
        <span class=\"sf-toolbar-status\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hydrationCount", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydration time</b>
        <span>";
        // line 16
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hydrationTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydrated entities</b>
        <span class=\"sf-toolbar-status\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hydratedEntities", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"The number of calls. ClassMetadataFactory::getAllMetadata: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "getAllMetadata", array()), "count", array()), "html", null, true);
        echo ", ClassMetadataFactory::getMetadataFor: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "getMetadataFor", array()), "count", array()), "html", null, true);
        echo ", ClassMetadataFactory::isTransient: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "isTransient", array()), "count", array()), "html", null, true);
        echo "\">Metadata</abbr></b>
        <span class=\"sf-toolbar-status\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "metadata", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"ClassMetadataFactory::getAllMetadata: ";
        // line 27
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "getAllMetadata", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms, ClassMetadataFactory::getMetadataFor: ";
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "getMetadataFor", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms, ClassMetadataFactory::isTransient: ";
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "isTransient", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms\">Metadata time</abbr></b>
        <span>";
        // line 28
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "metadata", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persists</b>
        <span class=\"sf-toolbar-status\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "persist", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persist time</b>
        <span>";
        // line 36
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "persist", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detaches</b>
        <span class=\"sf-toolbar-status\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "detach", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detach time</b>
        <span>";
        // line 44
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "detach", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merges</b>
        <span class=\"sf-toolbar-status\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "merge", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merge time</b>
        <span>";
        // line 52
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "merge", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Removes</b>
        <span class=\"sf-toolbar-status\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "remove", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Remove time</b>
        <span>";
        // line 60
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "remove", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refreshes</b>
        <span class=\"sf-toolbar-status\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "refresh", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refresh time</b>
        <span>";
        // line 68
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "refresh", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flushes</b>
        <span class=\"sf-toolbar-status\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "flush", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flush time</b>
        <span>";
        // line 76
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "flush", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"The total time of all monitored ORM hydrations, operations and metadata retrieving. The time of hidrations and operations includes the time of metadata retrieving used there.\">Total time</abbr></b>
        <span>";
        // line 80
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 83
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "OroEntityBundle:Collector:orm.html.twig", 83)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")))));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 87
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwQAADsEBuJFr7QAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAqdJREFUSEu9lslvEmEYh7EHEpdWvXjy0n9CL4bVE+GkBwkR6EHDIglKDx7RUNIDSwynmtjELRo5GFMNS9jbGNIoskYCF+NBD5JIwKWHtjP+3glDEIelTOVLnvbLxzfv05f5deaTxGKxdY1Gs03I5XKWMBgMbqPReI5lWclBoGvoWr4OX5ccEppgQ5P/kJhGwkPXDtRqkoMT0QL9JUIXioHvjhPpdDrOPLjpsKDa5OiJJBj0QS6Xu1QqlZ5WKpU6aIM9wAqwA7aw91axWLwAFhuNxkK1WpWizhzVotETabXav0SRSOQ98GUymeV8Pr+KYm/K5XIeFIcBWRKsQXKjUCgoID3TLyLHP6JoNMpA9BN8jMfjKx6P57rdbneBlXFYrdY7er1+GTWvTSJiCYj2IYouLS29VCgU32Qy2Y9xqNVqDppTLSAdJdrtiphkMrlpNptTSqXyN+0ZB41AIMCqVCqaShiGmad1QREED8Ph8FfI9lOp1JbFYslMKiKJyWRisZ8TgZO0PqwjO7gCniAQrw8i6mcS0Rd09QhcRHrO45/u+bSikV8dRJS6XfAZ9+guYnu7Vqsl6vX6u0lBxJ91RUdHifjUMYlEIu50OsMiUndiZEe86BBSt0DrgiIIyuAX+L+pw7vjKjpaQ8S30+n0K5vNlhQRhuEdQfQW3XghcmWz2Ztut/u+CNHwMNC9QUdtUMJXtxoMBu95vd6yz+f75Pf7J8Llcn3oio4PFVEQuuzhWRdzOBwb06ZuXBh6qUNHmwjD1KkDp2l9WEc0vuMekUhs6k7RuqAIYViExISONiCKiHzWHaM5Jxp8lYMjoVBICtlZvGFleDI8FiGao7ngmaF/NJvN+Vardbndbj/odDov8Ds0IdyJikZPNLPjFv2YyQFyNkfi2Pofu0Bt+h/LrYUAAAAASUVORK5CYII=\" alt=\"\"/></span>
    <strong>Doctrine ORM</strong>
</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_panel($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 94
        echo "    ";
        $this->displayBlock("stats", $context, $blocks);
        echo "
    ";
        // line 95
        $this->displayBlock("hydrations", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 98
    public function block_stats($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stats"));

        // line 99
        echo "    <h2>ORM Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 103
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM hydrations, operations and metadata retrieving. The time of hidrations and operations includes the time of metadata retrieving used there.\">Total time</abbr></span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hydrationCount", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Hydrations</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 111
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hydrationTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM hydrations. This time includes the time of metadata retrieving used inside hydrations.\">Hydration time</abbr></span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hydratedEntities", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Hydrated entities</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "metadata", array()), "count", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Metadata calls</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 123
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "metadata", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\">Metadata time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 127
        echo twig_escape_filter($this->env, sprintf("%0.2f", (((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "persist", array()), "time", array()) + $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "detach", array()), "time", array())) + $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "merge", array()), "time", array())) + $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "remove", array()), "time", array())) + $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "refresh", array()), "time", array())) + $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "flush", array()), "time", array())) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM operations, such as persist, flush, detach, merge, remove and refresh. This time includes the time of metadata retrieving used inside operations.\">Operations time</abbr></span>
        </div>
    </div>

    <h3>Metadata</h3>

    <table>
        <thead>
            <tr>
                <th style=\"width: 100%;\">Operation</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Calls</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GetAllMetadata</td>
                <td>";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "getAllMetadata", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 146
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "getAllMetadata", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>GetMetadataFor</td>
                <td>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "getMetadataFor", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 151
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "getMetadataFor", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>IsTransient</td>
                <td>";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "isTransient", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 156
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "isTransient", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
        </tbody>
    </table>

    <h3>Operations</h3>

    <table>
        <thead>
            <tr>
                <th style=\"width: 100%;\">Operation</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Calls</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Persist</td>
                <td>";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "persist", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 175
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "persist", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Detach</td>
                <td>";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "detach", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 180
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "detach", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Merge</td>
                <td>";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "merge", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 185
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "merge", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Remove</td>
                <td>";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "remove", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 190
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "remove", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Refresh</td>
                <td>";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "refresh", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 195
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "refresh", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Flush</td>
                <td>";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "flush", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 200
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stats", array()), "flush", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 207
    public function block_hydrations($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hydrations"));

        // line 208
        echo "    <h2>Hydrations</h2>

    ";
        // line 210
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hydrations", array()))) {
            // line 211
            echo "        <div class=\"empty\">
            <p>No hydrations.</p>
        </div>
    ";
        } else {
            // line 215
            echo "        <table class=\"alt\" id=\"hydrationsPlaceholder\">
            <thead>
            <tr>
                <th onclick=\"javascript:sortTable(this, 0, 'hydrations')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                <th onclick=\"javascript:sortTable(this, 1, 'hydrations')\" style=\"cursor: pointer;\">Time<span></span></th>
                <th onclick=\"javascript:sortTable(this, 2, 'hydrations')\" style=\"cursor: pointer;\">Entities<span></span></th>
                <th>Type</th>
                <th>Alias Map</th>
            </tr>
            </thead>
            <tbody id=\"hydrations\">
            ";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hydrations", array()));
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
            foreach ($context['_seq'] as $context["i"] => $context["hydration"]) {
                // line 227
                echo "                <tr id=\"hydrationNo-";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
                echo "\">
                    <td>";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 229
                if ($this->getAttribute($context["hydration"], "time", array(), "any", true, true)) {
                    // line 230
                    echo "                            ";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["hydration"], "time", array()) * 1000)), "html", null, true);
                    echo "&nbsp;ms
                        ";
                } else {
                    // line 232
                    echo "                            Unknown
                        ";
                }
                // line 234
                echo "                    </td>
                    <td>";
                // line 235
                if ($this->getAttribute($context["hydration"], "resultCount", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hydration"], "resultCount", array()), "html", null, true);
                } else {
                    echo "Unknown";
                }
                echo "</td>
                    <td>";
                // line 236
                if ($this->getAttribute($context["hydration"], "type", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hydration"], "type", array()), "html", null, true);
                    echo " ";
                } else {
                    echo "Unknown";
                }
                echo "</td>
                    <td>
                        ";
                // line 238
                if ($this->getAttribute($context["hydration"], "aliasMap", array(), "any", true, true)) {
                    // line 239
                    echo "                        <ul>
                            ";
                    // line 240
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["hydration"], "aliasMap", array()));
                    foreach ($context['_seq'] as $context["alias"] => $context["class"]) {
                        // line 241
                        echo "                                <li>";
                        echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                        echo " => ";
                        echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                        echo "</li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['alias'], $context['class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 243
                    echo "                        </ul>
                        ";
                } else {
                    // line 244
                    echo "Unknown";
                }
                // line 245
                echo "                    </td>
                </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['hydration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "            </tbody>
        </table>

        <style>
            table li {
                margin-bottom: 0px;
            }
        </style>

        <script type=\"text/javascript\">//<![CDATA[

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

            items.sort(function(a, b) {
                return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

    //]]></script>
    ";
        }
        // line 296
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Collector:orm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  626 => 296,  576 => 248,  560 => 245,  557 => 244,  553 => 243,  542 => 241,  538 => 240,  535 => 239,  533 => 238,  523 => 236,  515 => 235,  512 => 234,  508 => 232,  502 => 230,  500 => 229,  496 => 228,  489 => 227,  472 => 226,  459 => 215,  453 => 211,  451 => 210,  447 => 208,  441 => 207,  428 => 200,  424 => 199,  417 => 195,  413 => 194,  406 => 190,  402 => 189,  395 => 185,  391 => 184,  384 => 180,  380 => 179,  373 => 175,  369 => 174,  348 => 156,  344 => 155,  337 => 151,  333 => 150,  326 => 146,  322 => 145,  301 => 127,  294 => 123,  287 => 119,  280 => 115,  273 => 111,  266 => 107,  259 => 103,  253 => 99,  247 => 98,  238 => 95,  233 => 94,  227 => 93,  216 => 87,  210 => 86,  202 => 83,  196 => 80,  189 => 76,  182 => 72,  175 => 68,  168 => 64,  161 => 60,  154 => 56,  147 => 52,  140 => 48,  133 => 44,  126 => 40,  119 => 36,  112 => 32,  105 => 28,  97 => 27,  91 => 24,  83 => 23,  77 => 20,  70 => 16,  63 => 12,  59 => 10,  56 => 9,  50 => 6,  47 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
    <img width=\"20\" height=\"28\" alt=\"Doctrine ORM\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwgAADsIBFShKgAAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAc1JREFUSEutlb9Lw0AUxzMJ4u/BxcG/QhxcStdSBEXc2kUUV91KxcFujiIUBAeXghV0Mv1BV9OmpTRpOnaIKXZowUUFB2n8vnAp1FzTxuTg0x4v731yeXdNBdM0A4Ub9AM36Adu0A9CoVC4jUQiMhEKhUwiFoul4vH4Jq+AoGuUY+fb9eQSaIKEvn2RcJPZUM6fmj65LCEF6I68wmmwV2sJo9GodYd6vb6tadpjs9l8BQYPXH8Cu9lsdkZgg4SDwWCBHOQaCvP5fC+Xy51JkrSP4ktVVZ9RLI7hvtVqHYF1tsolntAC0rdSqbSDGPX1fRJjhRA1IPwiqSzLyXA4/EHxcdBg3/xHxpZfQZYED4qiJCD8tIvdYMJZmo8IIfoBPXCt6/pWu92+MQxDcgM5dyQE8zzhN7D6WC6XTxGbuodY4SLmo0JRFA8gq5KwVqtdeOkh4O6yDg7RyxMcm2OPPXSukFbGULHCvXQ6/ZLJZAw3kNNgQuem4Nj0bWmlUkkg5qWHc5g7ergKWQpiDcfm3OM5dD4y+2kKxWJxrdvtbnjpIVihOVdIg3rS6XQUoE1AYcLloTDw1xd9BPqCDfwvgFfgB27QD9ygH7jB/2MKvwXZez+M9nkbAAAAAElFTkSuQmCC\"/>
    <span class=\"sf-toolbar-value\">{{ '%0.0f'|format(collector.totalTime * 1000) }}</span>
    <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}
    {% set text %}
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydrations</b>
        <span class=\"sf-toolbar-status\">{{ collector.hydrationCount }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydration time</b>
        <span>{{ '%0.2f'|format(collector.hydrationTime * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydrated entities</b>
        <span class=\"sf-toolbar-status\">{{ collector.hydratedEntities }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"The number of calls. ClassMetadataFactory::getAllMetadata: {{ collector.stats.getAllMetadata.count }}, ClassMetadataFactory::getMetadataFor: {{ collector.stats.getMetadataFor.count }}, ClassMetadataFactory::isTransient: {{ collector.stats.isTransient.count }}\">Metadata</abbr></b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.metadata.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"ClassMetadataFactory::getAllMetadata: {{ '%0.2f'|format(collector.stats.getAllMetadata.time * 1000) }} ms, ClassMetadataFactory::getMetadataFor: {{ '%0.2f'|format(collector.stats.getMetadataFor.time * 1000) }} ms, ClassMetadataFactory::isTransient: {{ '%0.2f'|format(collector.stats.isTransient.time * 1000) }} ms\">Metadata time</abbr></b>
        <span>{{ '%0.2f'|format(collector.stats.metadata.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persists</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.persist.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persist time</b>
        <span>{{ '%0.2f'|format(collector.stats.persist.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detaches</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.detach.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detach time</b>
        <span>{{ '%0.2f'|format(collector.stats.detach.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merges</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.merge.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merge time</b>
        <span>{{ '%0.2f'|format(collector.stats.merge.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Removes</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.remove.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Remove time</b>
        <span>{{ '%0.2f'|format(collector.stats.remove.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refreshes</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.refresh.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refresh time</b>
        <span>{{ '%0.2f'|format(collector.stats.refresh.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flushes</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.flush.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flush time</b>
        <span>{{ '%0.2f'|format(collector.stats.flush.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"The total time of all monitored ORM hydrations, operations and metadata retrieving. The time of hidrations and operations includes the time of metadata retrieving used there.\">Total time</abbr></b>
        <span>{{ '%0.2f'|format(collector.totalTime * 1000) }} ms</span>
    </div>
    {% endset %}
    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwQAADsEBuJFr7QAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAqdJREFUSEu9lslvEmEYh7EHEpdWvXjy0n9CL4bVE+GkBwkR6EHDIglKDx7RUNIDSwynmtjELRo5GFMNS9jbGNIoskYCF+NBD5JIwKWHtjP+3glDEIelTOVLnvbLxzfv05f5deaTxGKxdY1Gs03I5XKWMBgMbqPReI5lWclBoGvoWr4OX5ccEppgQ5P/kJhGwkPXDtRqkoMT0QL9JUIXioHvjhPpdDrOPLjpsKDa5OiJJBj0QS6Xu1QqlZ5WKpU6aIM9wAqwA7aw91axWLwAFhuNxkK1WpWizhzVotETabXav0SRSOQ98GUymeV8Pr+KYm/K5XIeFIcBWRKsQXKjUCgoID3TLyLHP6JoNMpA9BN8jMfjKx6P57rdbneBlXFYrdY7er1+GTWvTSJiCYj2IYouLS29VCgU32Qy2Y9xqNVqDppTLSAdJdrtiphkMrlpNptTSqXyN+0ZB41AIMCqVCqaShiGmad1QREED8Ph8FfI9lOp1JbFYslMKiKJyWRisZ8TgZO0PqwjO7gCniAQrw8i6mcS0Rd09QhcRHrO45/u+bSikV8dRJS6XfAZ9+guYnu7Vqsl6vX6u0lBxJ91RUdHifjUMYlEIu50OsMiUndiZEe86BBSt0DrgiIIyuAX+L+pw7vjKjpaQ8S30+n0K5vNlhQRhuEdQfQW3XghcmWz2Ztut/u+CNHwMNC9QUdtUMJXtxoMBu95vd6yz+f75Pf7J8Llcn3oio4PFVEQuuzhWRdzOBwb06ZuXBh6qUNHmwjD1KkDp2l9WEc0vuMekUhs6k7RuqAIYViExISONiCKiHzWHaM5Jxp8lYMjoVBICtlZvGFleDI8FiGao7ngmaF/NJvN+Vardbndbj/odDov8Ds0IdyJikZPNLPjFv2YyQFyNkfi2Pofu0Bt+h/LrYUAAAAASUVORK5CYII=\" alt=\"\"/></span>
    <strong>Doctrine ORM</strong>
</span>
{% endblock %}

{% block panel %}
    {{ block('stats') }}
    {{ block('hydrations') }}
{% endblock %}

{% block stats %}
    <h2>ORM Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(collector.totalTime * 1000) }} ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM hydrations, operations and metadata retrieving. The time of hidrations and operations includes the time of metadata retrieving used there.\">Total time</abbr></span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.hydrationCount }}</span>
            <span class=\"label\">Hydrations</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(collector.hydrationTime * 1000) }} ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM hydrations. This time includes the time of metadata retrieving used inside hydrations.\">Hydration time</abbr></span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.hydratedEntities }}</span>
            <span class=\"label\">Hydrated entities</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.stats.metadata.count }}</span>
            <span class=\"label\">Metadata calls</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(collector.stats.metadata.time * 1000) }} ms</span>
            <span class=\"label\">Metadata time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format((collector.stats.persist.time + collector.stats.detach.time + collector.stats.merge.time + collector.stats.remove.time + collector.stats.refresh.time + collector.stats.flush.time) * 1000) }} ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM operations, such as persist, flush, detach, merge, remove and refresh. This time includes the time of metadata retrieving used inside operations.\">Operations time</abbr></span>
        </div>
    </div>

    <h3>Metadata</h3>

    <table>
        <thead>
            <tr>
                <th style=\"width: 100%;\">Operation</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Calls</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GetAllMetadata</td>
                <td>{{ collector.stats.getAllMetadata.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.getAllMetadata.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>GetMetadataFor</td>
                <td>{{ collector.stats.getMetadataFor.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.getMetadataFor.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>IsTransient</td>
                <td>{{ collector.stats.isTransient.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.isTransient.time * 1000) }} ms</td>
            </tr>
        </tbody>
    </table>

    <h3>Operations</h3>

    <table>
        <thead>
            <tr>
                <th style=\"width: 100%;\">Operation</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Calls</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Persist</td>
                <td>{{ collector.stats.persist.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.persist.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>Detach</td>
                <td>{{ collector.stats.detach.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.detach.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>Merge</td>
                <td>{{ collector.stats.merge.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.merge.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>Remove</td>
                <td>{{ collector.stats.remove.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.remove.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>Refresh</td>
                <td>{{ collector.stats.refresh.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.refresh.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>Flush</td>
                <td>{{ collector.stats.flush.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.flush.time * 1000) }} ms</td>
            </tr>
        </tbody>
    </table>

{% endblock stats %}

{% block hydrations %}
    <h2>Hydrations</h2>

    {% if collector.hydrations is empty %}
        <div class=\"empty\">
            <p>No hydrations.</p>
        </div>
    {% else %}
        <table class=\"alt\" id=\"hydrationsPlaceholder\">
            <thead>
            <tr>
                <th onclick=\"javascript:sortTable(this, 0, 'hydrations')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                <th onclick=\"javascript:sortTable(this, 1, 'hydrations')\" style=\"cursor: pointer;\">Time<span></span></th>
                <th onclick=\"javascript:sortTable(this, 2, 'hydrations')\" style=\"cursor: pointer;\">Entities<span></span></th>
                <th>Type</th>
                <th>Alias Map</th>
            </tr>
            </thead>
            <tbody id=\"hydrations\">
            {% for i, hydration in collector.hydrations %}
                <tr id=\"hydrationNo-{{ i }}\" class=\"{{ cycle(['odd', 'even'], i) }}\">
                    <td>{{ loop.index }}</td>
                    <td>{% if hydration.time is defined %}
                            {{ '%0.2f'|format(hydration.time * 1000) }}&nbsp;ms
                        {% else %}
                            Unknown
                        {% endif %}
                    </td>
                    <td>{% if hydration.resultCount is defined %}{{ hydration.resultCount }}{% else %}Unknown{% endif %}</td>
                    <td>{% if hydration.type is defined %}{{ hydration.type }} {% else %}Unknown{% endif %}</td>
                    <td>
                        {% if hydration.aliasMap is defined %}
                        <ul>
                            {% for alias, class in hydration.aliasMap %}
                                <li>{{ alias }} => {{ class }}</li>
                            {% endfor %}
                        </ul>
                        {% else %}Unknown{% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <style>
            table li {
                margin-bottom: 0px;
            }
        </style>

        <script type=\"text/javascript\">//<![CDATA[

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

            items.sort(function(a, b) {
                return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

    //]]></script>
    {% endif %}

{% endblock hydrations %}
", "OroEntityBundle:Collector:orm.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityBundle/Resources/views/Collector/orm.html.twig");
    }
}
