<?php

/* OroEntityBundle:Collector:orm.html.twig */
class __TwigTemplate_3b312b020b680c6edc68f9f08d52ff7b9af375a26e05e9e5b829fb8f3c97acb6 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "    <img width=\"20\" height=\"28\" alt=\"Doctrine ORM\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwgAADsIBFShKgAAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAc1JREFUSEutlb9Lw0AUxzMJ4u/BxcG/QhxcStdSBEXc2kUUV91KxcFujiIUBAeXghV0Mv1BV9OmpTRpOnaIKXZowUUFB2n8vnAp1FzTxuTg0x4v731yeXdNBdM0A4Ub9AM36Adu0A9CoVC4jUQiMhEKhUwiFoul4vH4Jq+AoGuUY+fb9eQSaIKEvn2RcJPZUM6fmj65LCEF6I68wmmwV2sJo9GodYd6vb6tadpjs9l8BQYPXH8Cu9lsdkZgg4SDwWCBHOQaCvP5fC+Xy51JkrSP4ktVVZ9RLI7hvtVqHYF1tsolntAC0rdSqbSDGPX1fRJjhRA1IPwiqSzLyXA4/EHxcdBg3/xHxpZfQZYED4qiJCD8tIvdYMJZmo8IIfoBPXCt6/pWu92+MQxDcgM5dyQE8zzhN7D6WC6XTxGbuodY4SLmo0JRFA8gq5KwVqtdeOkh4O6yDg7RyxMcm2OPPXSukFbGULHCvXQ6/ZLJZAw3kNNgQuem4Nj0bWmlUkkg5qWHc5g7ergKWQpiDcfm3OM5dD4y+2kKxWJxrdvtbnjpIVihOVdIg3rS6XQUoE1AYcLloTDw1xd9BPqCDfwvgFfgB27QD9ygH7jB/2MKvwXZez+M9nkbAAAAAElFTkSuQmCC\"/>
    <span class=\"sf-toolbar-value\">";
        // line 6
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute(($context["collector"] ?? null), "totalTime", array()) * 1000)), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "hydrationCount", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydration time</b>
        <span>";
        // line 16
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? null), "hydrationTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydrated entities</b>
        <span class=\"sf-toolbar-status\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "hydratedEntities", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"The number of calls. ClassMetadataFactory::getAllMetadata: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "getAllMetadata", array()), "count", array()), "html", null, true);
        echo ", ClassMetadataFactory::getMetadataFor: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "getMetadataFor", array()), "count", array()), "html", null, true);
        echo ", ClassMetadataFactory::isTransient: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "isTransient", array()), "count", array()), "html", null, true);
        echo "\">Metadata</abbr></b>
        <span class=\"sf-toolbar-status\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "metadata", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"ClassMetadataFactory::getAllMetadata: ";
        // line 27
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "getAllMetadata", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms, ClassMetadataFactory::getMetadataFor: ";
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "getMetadataFor", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms, ClassMetadataFactory::isTransient: ";
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "isTransient", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms\">Metadata time</abbr></b>
        <span>";
        // line 28
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "metadata", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persists</b>
        <span class=\"sf-toolbar-status\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "persist", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persist time</b>
        <span>";
        // line 36
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "persist", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detaches</b>
        <span class=\"sf-toolbar-status\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "detach", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detach time</b>
        <span>";
        // line 44
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "detach", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merges</b>
        <span class=\"sf-toolbar-status\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "merge", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merge time</b>
        <span>";
        // line 52
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "merge", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Removes</b>
        <span class=\"sf-toolbar-status\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "remove", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Remove time</b>
        <span>";
        // line 60
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "remove", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refreshes</b>
        <span class=\"sf-toolbar-status\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "refresh", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refresh time</b>
        <span>";
        // line 68
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "refresh", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flushes</b>
        <span class=\"sf-toolbar-status\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "flush", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flush time</b>
        <span>";
        // line 76
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "flush", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"The total time of all monitored ORM hydrations, operations and metadata retrieving. The time of hidrations and operations includes the time of metadata retrieving used there.\">Total time</abbr></b>
        <span>";
        // line 80
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? null), "totalTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 83
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "OroEntityBundle:Collector:orm.html.twig", 83)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? null))));
    }

    // line 86
    public function block_menu($context, array $blocks = array())
    {
        // line 87
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwQAADsEBuJFr7QAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAqdJREFUSEu9lslvEmEYh7EHEpdWvXjy0n9CL4bVE+GkBwkR6EHDIglKDx7RUNIDSwynmtjELRo5GFMNS9jbGNIoskYCF+NBD5JIwKWHtjP+3glDEIelTOVLnvbLxzfv05f5deaTxGKxdY1Gs03I5XKWMBgMbqPReI5lWclBoGvoWr4OX5ccEppgQ5P/kJhGwkPXDtRqkoMT0QL9JUIXioHvjhPpdDrOPLjpsKDa5OiJJBj0QS6Xu1QqlZ5WKpU6aIM9wAqwA7aw91axWLwAFhuNxkK1WpWizhzVotETabXav0SRSOQ98GUymeV8Pr+KYm/K5XIeFIcBWRKsQXKjUCgoID3TLyLHP6JoNMpA9BN8jMfjKx6P57rdbneBlXFYrdY7er1+GTWvTSJiCYj2IYouLS29VCgU32Qy2Y9xqNVqDppTLSAdJdrtiphkMrlpNptTSqXyN+0ZB41AIMCqVCqaShiGmad1QREED8Ph8FfI9lOp1JbFYslMKiKJyWRisZ8TgZO0PqwjO7gCniAQrw8i6mcS0Rd09QhcRHrO45/u+bSikV8dRJS6XfAZ9+guYnu7Vqsl6vX6u0lBxJ91RUdHifjUMYlEIu50OsMiUndiZEe86BBSt0DrgiIIyuAX+L+pw7vjKjpaQ8S30+n0K5vNlhQRhuEdQfQW3XghcmWz2Ztut/u+CNHwMNC9QUdtUMJXtxoMBu95vd6yz+f75Pf7J8Llcn3oio4PFVEQuuzhWRdzOBwb06ZuXBh6qUNHmwjD1KkDp2l9WEc0vuMekUhs6k7RuqAIYViExISONiCKiHzWHaM5Jxp8lYMjoVBICtlZvGFleDI8FiGao7ngmaF/NJvN+Vardbndbj/odDov8Ds0IdyJikZPNLPjFv2YyQFyNkfi2Pofu0Bt+h/LrYUAAAAASUVORK5CYII=\" alt=\"\"/></span>
    <strong>Doctrine ORM</strong>
</span>
";
    }

    // line 93
    public function block_panel($context, array $blocks = array())
    {
        // line 94
        echo "    ";
        $this->displayBlock("stats", $context, $blocks);
        echo "
    ";
        // line 95
        $this->displayBlock("hydrations", $context, $blocks);
        echo "
";
    }

    // line 98
    public function block_stats($context, array $blocks = array())
    {
        // line 99
        echo "    <h2>ORM Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 103
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? null), "totalTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM hydrations, operations and metadata retrieving. The time of hidrations and operations includes the time of metadata retrieving used there.\">Total time</abbr></span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "hydrationCount", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Hydrations</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 111
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? null), "hydrationTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM hydrations. This time includes the time of metadata retrieving used inside hydrations.\">Hydration time</abbr></span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "hydratedEntities", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Hydrated entities</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "metadata", array()), "count", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Metadata calls</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 123
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "metadata", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\">Metadata time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 127
        echo twig_escape_filter($this->env, sprintf("%0.2f", (((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "persist", array()), "time", array()) + $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "detach", array()), "time", array())) + $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "merge", array()), "time", array())) + $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "remove", array()), "time", array())) + $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "refresh", array()), "time", array())) + $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "flush", array()), "time", array())) * 1000)), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "getAllMetadata", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 146
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "getAllMetadata", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>GetMetadataFor</td>
                <td>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "getMetadataFor", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 151
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "getMetadataFor", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>IsTransient</td>
                <td>";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "isTransient", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 156
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "isTransient", array()), "time", array()) * 1000)), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "persist", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 175
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "persist", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Detach</td>
                <td>";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "detach", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 180
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "detach", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Merge</td>
                <td>";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "merge", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 185
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "merge", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Remove</td>
                <td>";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "remove", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 190
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "remove", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Refresh</td>
                <td>";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "refresh", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 195
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "refresh", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Flush</td>
                <td>";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "flush", array()), "count", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 200
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "stats", array()), "flush", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
        </tbody>
    </table>

";
    }

    // line 207
    public function block_hydrations($context, array $blocks = array())
    {
        // line 208
        echo "    <h2>Hydrations</h2>

    ";
        // line 210
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? null), "hydrations", array()))) {
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "hydrations", array()));
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
        return array (  593 => 296,  543 => 248,  527 => 245,  524 => 244,  520 => 243,  509 => 241,  505 => 240,  502 => 239,  500 => 238,  490 => 236,  482 => 235,  479 => 234,  475 => 232,  469 => 230,  467 => 229,  463 => 228,  456 => 227,  439 => 226,  426 => 215,  420 => 211,  418 => 210,  414 => 208,  411 => 207,  401 => 200,  397 => 199,  390 => 195,  386 => 194,  379 => 190,  375 => 189,  368 => 185,  364 => 184,  357 => 180,  353 => 179,  346 => 175,  342 => 174,  321 => 156,  317 => 155,  310 => 151,  306 => 150,  299 => 146,  295 => 145,  274 => 127,  267 => 123,  260 => 119,  253 => 115,  246 => 111,  239 => 107,  232 => 103,  226 => 99,  223 => 98,  217 => 95,  212 => 94,  209 => 93,  201 => 87,  198 => 86,  193 => 83,  187 => 80,  180 => 76,  173 => 72,  166 => 68,  159 => 64,  152 => 60,  145 => 56,  138 => 52,  131 => 48,  124 => 44,  117 => 40,  110 => 36,  103 => 32,  96 => 28,  88 => 27,  82 => 24,  74 => 23,  68 => 20,  61 => 16,  54 => 12,  50 => 10,  47 => 9,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityBundle:Collector:orm.html.twig", "");
    }
}
