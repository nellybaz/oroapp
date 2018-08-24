<?php

/* OroLayoutBundle:Collector:layout.html.twig */
class __TwigTemplate_144b5cfc19c5d46faf0e9d1dc875939fdd931ee96d74f5dd4a2400a1b48d9591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Collector/form.html.twig", "OroLayoutBundle:Collector:layout.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Collector/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tree"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "views", array()))) {
            // line 7
            echo "        ";
            $context["status_color"] = (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "not_applied_actions_count", array())) ? ("yellow") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            <span class=\"icon\">
                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAYAAACOGPReAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAbElEQVRIx2NgGAXUBowMDAwMaWlp/6ll4KxZsxhZYJy0tDRqGMjAwMDAwEQL77OgCxSXlJBsSG9PDwqfJi6lj/fRvTJ4XYocUTBXE4q8oRtRRBnKwsw8RFw6fA0lKkd1dnYOIpfCCthRMIIAAI0IFu9Hxh7ZAAAAAElFTkSuQmCC\"/>
            </span>
            ";
            // line 12
            if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "not_applied_actions_count", array())) {
                // line 13
                echo "                <span class=\"sf-toolbar-value\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "not_applied_actions_count", array()), "html", null, true);
                echo "
                </span>
            ";
            }
            // line 17
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 18
            echo "
        ";
            // line 19
            ob_start();
            // line 20
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of views</b>
                <span class=\"sf-toolbar-status\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "count", array()), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 24
            if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "not_applied_actions_count", array())) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Not applied actions</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">
                        ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "not_applied_actions_count", array()), "html", null, true);
                echo "
                    </span>
                </div>
            ";
            }
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "context", array()), "items", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 33
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"oro-layout-toolbar-info-piece-title\">";
                // line 34
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</b>
                    <span class=\"sf-toolbar-info-class oro-layout-toolbar-info-piece-value\">
                       ";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->convertValueToString($context["value"]), "html", null, true);
                echo "
                    </span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 41
            echo "
        ";
            // line 42
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)));
            echo "
    ";
        }
    }

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        // line 47
        echo "    <span class=\"label
                ";
        // line 48
        echo (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "not_applied_actions_count", array())) ? ("label-status-error") : (""));
        echo "
                ";
        // line 49
        echo ((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "views", array()))) ? ("disabled") : (""));
        echo "\"
    >
        <span class=\"icon\">
            <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAgCAYAAAABtRhCAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAbklEQVRIx2NgGAVDHTDCGGlpaf9pZcmsWbPg9rAgS6SlpdHCMhQ+E72DlAWbYHFJCcUG9/b0YBWnuw9HLaRPosEV4cPHh9iyBczXxGaZ0WxBfBwwM4/mw1ELRy0c4MK7s7NzCPsQvYU1CkYBNgAAV5UW+fU+ZL4AAAAASUVORK5CYII=\"/>
        </span>
        <strong>Layouts</strong>
        ";
        // line 55
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "not_applied_actions_count", array())) {
            // line 56
            echo "            <span class=\"count\">
                <span>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "not_applied_actions_count", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 60
        echo "    </span>
";
    }

    // line 63
    public function block_head($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        .container {
            max-width: none;
        }

        #tree-menu {
            width: calc(100% - 570px);
            position: relative;
        }

        #tree-menu:after {
            content: \"\";
            position: absolute;
            right: 10px;
            top: 0;
            width: 30px;
            min-height: 100%;
            height: 100%;
            background: linear-gradient(to left, rgba(249,249,249,1) 0%,rgba(249,249,249,0) 100%);
        }

        .tree-menu-wrapper {
            overflow: auto;
        }

        #tree-details-container {
            margin-left: calc(100% - 550px);
            padding: 0;
            border: none;
            width: 550px;
        }

        #tree-details-container.fixed {
            position: fixed;
            top: 5px;
            right: 15px;
            height: 100%;
            overflow-y: auto;
            overflow-x: hidden;
        }

        #tree-menu ul {
            margin-left: 20px;
        }

        .tree ul .tree-inner {
            padding-left: 0 !important;
            white-space: nowrap;
            line-height: 1.5;
        }

        .expand-all {
            position: relative;
            text-align: right;
            z-index: 1;
        }

        .expand-all a {
            text-decoration: none;
            color: #999;
        }

        .expand-all a:hover {
            border-bottom: 1px dashed;
        }

        .tree-inner.underline {
            text-decoration: line-through;
        }

        @media screen and (max-width: 1100px) {
            #tree-menu {
                width: 100%;
            }

            #tree-details-container {
                clear: both;
                width: 100%;
                margin-left: 0;
                padding-top: 20px;
            }

            #tree-details-container.fixed {
                position: static;
                overflow: visible;
                max-height: inherit;
            }
        }
    </style>
";
    }

    // line 157
    public function block_panel($context, array $blocks = array())
    {
        // line 158
        echo "    <h2>Layouts</h2>

    <div id=\"layout-profiler\" class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Layout Tree
                <span class=\"badge\">";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "count", array()), "html", null, true);
        echo "</span>
            </h3>
            <div class=\"tab-content\">
                ";
        // line 167
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "views", array()))) {
            // line 168
            echo "                    <div id=\"tree-menu\" class=\"tree\">
                        <div class=\"tree-menu-wrapper\">
                            <div class=\"expand-all\">
                                <a id=\"expand-all\" href=\"#\" data-collapsed-title=\"Collapse All\">Expand All</a>
                            </div>
                            <ul>
                                ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "views", array()));
            foreach ($context['_seq'] as $context["viewId"] => $context["viewData"]) {
                // line 175
                echo "                                    ";
                echo $context["tree"]->getview_tree_entry($context["viewId"], $context["viewData"], true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewId'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                            </ul>
                        </div>
                    </div>
                    <div id=\"tree-details-container\">
                        ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "views", array()));
            foreach ($context['_seq'] as $context["viewId"] => $context["viewData"]) {
                // line 182
                echo "                            ";
                echo $context["tree"]->getview_tree_details($context["viewId"], $context["viewData"]);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewId'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "                    </div>
                ";
        } else {
            // line 186
            echo "                    <div class=\"empty\">
                        <p>No views were found for this request.</p>
                    </div>
                ";
        }
        // line 190
        echo "            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Not Applied Actions
                <span class=\"badge\">";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "not_applied_actions_count", array()), "html", null, true);
        echo "</span>
            </h3>
            <div class=\"tab-content\">
                ";
        // line 198
        if (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "not_applied_actions_count", array()) > 0)) {
            // line 199
            echo "                    ";
            echo $context["tree"]->getnot_applied_actions_tab($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "not_applied_actions", array()));
            echo "
                ";
        }
        // line 201
        echo "            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">Context</h3>
            <div class=\"tab-content\">
                <div class=\"tree-details\">
                    ";
        // line 207
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "context", array()), "items", array()))) {
            // line 208
            echo "                        ";
            echo $context["tree"]->getview_block_details("context", "Context", array("Items" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "context", array()), "items", array())));
            echo "
                    ";
        }
        // line 210
        echo "
                    ";
        // line 211
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "context", array()), "data", array()))) {
            // line 212
            echo "                        ";
            echo $context["tree"]->getview_block_details("context-data", "Context Data", array("Items" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "context", array()), "data", array())), true);
            echo "
                    ";
        }
        // line 214
        echo "                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">
        (function(){
            function Toggler(storage) {
                \"use strict\";

                var STORAGE_KEY = 'sf_toggle_data';
                var states = {};

                var isCollapsed = function (button) {
                    return Sfjs.hasClass(button, 'closed');
                };

                var isExpanded = function (button) {
                    return !isCollapsed(button);
                };

                var expand = function (button) {
                    var targetId = button.dataset.toggleTargetId;
                    var target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    if (isCollapsed(button)) {
                        Sfjs.removeClass(button, 'closed');
                        Sfjs.removeClass(target, 'hidden');

                        states[targetId] = 1;
                        storage.setItem(STORAGE_KEY, states);
                    }
                };

                var collapse = function (button) {
                    var targetId = button.dataset.toggleTargetId;
                    var target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    if (isExpanded(button)) {
                        Sfjs.addClass(button, 'closed');
                        Sfjs.addClass(target, 'hidden');

                        states[targetId] = 0;
                        storage.setItem(STORAGE_KEY, states);
                    }
                };

                var toggle = function (button) {
                    if (Sfjs.hasClass(button, 'closed')) {
                        expand(button);
                    } else {
                        collapse(button);
                    }
                };

                var initButtons = function (buttons) {
                    states = storage.getItem(STORAGE_KEY, {});

                    // must be an object, not an array or anything else
                    // `typeof` returns \"object\" also for arrays, so the following
                    // check must be done
                    // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                    if ('[object Object]' !== Object.prototype.toString.call(states)) {
                        states = {};
                    }

                    for (var i = 0, l = buttons.length; i < l; ++i) {
                        var targetId = buttons[i].dataset.toggleTargetId;
                        var target = document.getElementById(targetId);

                        if (!target) {
                            throw \"Toggle target \" + targetId + \" does not exist\";
                        }

                        // correct the initial state of the button
                        if (Sfjs.hasClass(target, 'hidden')) {
                            Sfjs.addClass(buttons[i], 'closed');
                        }

                        // attach listener for expanding/collapsing the target
                        clickHandler(buttons[i], toggle);

                        if (states.hasOwnProperty(targetId)) {
                            // open or collapse based on stored data
                            if (0 === states[targetId]) {
                                collapse(buttons[i]);
                            } else {
                                expand(buttons[i]);
                            }
                        }
                    }
                };

                return {
                    initButtons: initButtons,
                    toggle: toggle,
                    isExpanded: isExpanded,
                    isCollapsed: isCollapsed,
                    expand: expand,
                    collapse: collapse,
                };
            }

            function JsonStorage(storage) {
                var setItem = function (key, data) {
                    storage.setItem(key, JSON.stringify(data));
                };

                var getItem = function (key, defaultValue) {
                    var data = storage.getItem(key);

                    if (null !== data) {
                        try {
                            return JSON.parse(data);
                        } catch(e) {
                        }
                    }

                    return defaultValue;
                };

                return {
                    setItem: setItem,
                    getItem: getItem
                };
            }

            function TabView() {
                \"use strict\";

                var activeTab = null;
                var activeTarget = null;

                var select = function (tab) {
                    var targetId = tab.dataset.tabTargetId;
                    var target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    if (activeTab) {
                        Sfjs.removeClass(activeTab, 'active');
                    }

                    if (activeTarget) {
                        Sfjs.addClass(activeTarget, 'hidden');
                    }

                    Sfjs.addClass(tab, 'active');
                    Sfjs.removeClass(target, 'hidden');

                    activeTab = tab;
                    activeTarget = target;
                };

                var initTabs = function (tabs) {
                    for (var i = 0, l = tabs.length; i < l; ++i) {
                        var targetId = tabs[i].dataset.tabTargetId;
                        var target = document.getElementById(targetId);

                        if (!target) {
                            throw \"Tab target \" + targetId + \" does not exist\";
                        }

                        clickHandler(tabs[i], select);

                        Sfjs.addClass(target, 'hidden');
                    }

                    select(tabs[0]);
                };

                return {
                    initTabs: initTabs,
                    select: select
                };
            }

            var tabTarget = new TabView();
            var storage = new JsonStorage(sessionStorage);
            var toggler = new Toggler(storage);
            var clickHandler = function (element, callback) {
                Sfjs.addEventListener(element, 'click', function (e) {
                    if (!e) {
                        e = window.event;
                    }

                    callback(this);

                    if (e.preventDefault) {
                        e.preventDefault();
                    } else {
                        e.returnValue = false;
                    }

                    e.stopPropagation();

                    return false;
                });
            };

            tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
            toggler.initButtons(document.querySelectorAll('a.toggle-button'));

            (function() {
                var STORAGE_KEY = 'sf_toggle_all_data';
                var buttons = document.querySelectorAll('.tree-inner a.toggle-button');
                var target = document.getElementById('expand-all');
                var isExpanded = storage.getItem(STORAGE_KEY, false);

                var changeTitle = function(target) {
                    var title = target.getAttribute('data-collapsed-title');
                    target.setAttribute('data-collapsed-title', target.text);
                    target.text = title;
                };

                if(isExpanded) {
                    changeTitle(target);
                }

                var toggleAll = function() {
                    var isExpanded = storage.getItem(STORAGE_KEY, false);
                    for (var i = 0; i < buttons.length; i++) {
                        if(isExpanded) {
                            toggler.collapse(buttons[i]);
                        } else {
                            toggler.expand(buttons[i]);
                        }
                    }
                    changeTitle(target);
                    storage.setItem(STORAGE_KEY, isExpanded ? false : true);
                };

                clickHandler(target, toggleAll);
            })();

            function fitDetailsContainer() {
                var container = document.getElementById('tree-details-container');

                if (window.scrollY > 240) {
                    Sfjs.addClass(document.getElementById('tree-details-container'), 'fixed');
                    container.style.maxHeight = window.innerHeight - container.offsetTop + 'px';
                } else {
                    Sfjs.removeClass(document.getElementById('tree-details-container'), 'fixed');
                    container.style.maxHeight = '';
                }
            }

            window.onscroll = fitDetailsContainer;
            fitDetailsContainer();
        }());
    </script>
";
    }

    // line 477
    public function getview_tree_entry($__name__ = null, $__data__ = null, $__expanded__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "expanded" => $__expanded__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 478
            echo "    ";
            $context["tree"] = $this;
            // line 479
            echo "    <li>
        <div class=\"tree-inner";
            // line 480
            if (($this->getAttribute(($context["data"] ?? null), "visible", array()) == false)) {
                echo " underline";
            }
            echo "\" data-tab-target-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
            echo "-details\">
            ";
            // line 481
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? null), "children", array()))) {
                // line 482
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 484
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 486
            echo "
            ";
            // line 487
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo " ";
            if (($this->getAttribute(($context["data"] ?? null), "type_class", array(), "any", true, true) && $this->getAttribute(($context["data"] ?? null), "type", array(), "any", true, true))) {
                echo "[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type", array()), "\\")), "html", null, true);
                echo "</abbr>]";
            }
            // line 488
            echo "        </div>

        ";
            // line 490
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? null), "children", array()))) {
                // line 491
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-children\" ";
                if ( !($context["expanded"] ?? null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 492
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "children", array()));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 493
                    echo "                    ";
                    echo $context["tree"]->getview_tree_entry($context["childName"], $context["childData"], false);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 495
                echo "            </ul>
        ";
            }
            // line 497
            echo "    </li>
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

    // line 500
    public function getview_tree_details($__name__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 501
            echo "    ";
            $context["tree"] = $this;
            // line 502
            echo "    <div class=\"tree-details\"";
            if ($this->getAttribute(($context["data"] ?? null), "id", array(), "any", true, true)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>
            ";
            // line 504
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            ";
            // line 505
            if (($this->getAttribute(($context["data"] ?? null), "type_class", array(), "any", true, true) && $this->getAttribute(($context["data"] ?? null), "type", array(), "any", true, true))) {
                // line 506
                echo "                <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type", array()), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 508
            echo "        </h2>

        ";
            // line 510
            if ($this->getAttribute(($context["data"] ?? null), "build_block_options", array(), "any", true, true)) {
                // line 511
                echo "            ";
                echo $context["tree"]->getview_block_details(($this->getAttribute(($context["data"] ?? null), "id", array()) . "-build-block"), "Build Block", array("Options" => $this->getAttribute(($context["data"] ?? null), "build_block_options", array())), true);
                echo "
        ";
            }
            // line 513
            echo "
        ";
            // line 514
            if ($this->getAttribute(($context["data"] ?? null), "build_view_options", array(), "any", true, true)) {
                // line 515
                echo "            ";
                echo $context["tree"]->getview_block_details(($this->getAttribute(($context["data"] ?? null), "id", array()) . "-build-view"), "Build View", array("Options" => $this->getAttribute(($context["data"] ?? null), "build_view_options", array())), true);
                echo "
        ";
            }
            // line 517
            echo "
        ";
            // line 518
            if ($this->getAttribute(($context["data"] ?? null), "view_vars", array(), "any", true, true)) {
                // line 519
                echo "            ";
                echo $context["tree"]->getview_block_details(($this->getAttribute(($context["data"] ?? null), "id", array()) . "-vars"), "Variables", array("Variables" => $this->getAttribute(($context["data"] ?? null), "view_vars", array())));
                echo "
        ";
            }
            // line 521
            echo "    </div>

    ";
            // line 523
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 524
                echo "        ";
                echo $context["tree"]->getview_tree_details($context["childName"], $context["childData"]);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 528
    public function getview_block_details($__id__ = null, $__title__ = null, $__groups__ = null, $__hidden__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "title" => $__title__,
            "groups" => $__groups__,
            "hidden" => $__hidden__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 529
            echo "    <h3>
        <a class=\"toggle-button\" data-toggle-target-id=\"";
            // line 530
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-details\" href=\"#\">
            ";
            // line 531
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " <span class=\"toggle-icon\"></span>
        </a>
    </h3>
    <div id=\"";
            // line 534
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-details\"";
            if (($context["hidden"] ?? null)) {
                echo " class=\"hidden\"";
            }
            echo ">
        ";
            // line 535
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["options"]) {
                // line 536
                echo "            ";
                if ($context["options"]) {
                    // line 537
                    echo "                <table>
                    <thead>
                    <tr>
                        <th width=\"180\">Key</th>
                        <th>Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
                    // line 545
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["options"]);
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 546
                        echo "                        <tr>
                            <th scope=\"row\">";
                        // line 547
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "</th>
                            <td>
                                ";
                        // line 549
                        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->convertValueToString($context["value"]), "html", null, true);
                        echo "
                            </td>
                        </tr>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 553
                    echo "                    </tbody>
                </table>
            ";
                }
                // line 556
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 557
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

    // line 560
    public function getnot_applied_actions_tab($__actions__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "actions" => $__actions__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 561
            echo "    <table>
        <thead>
        <tr>
            <th width=\"180\">Action name</th>
            <th>Arguments</th>
        </tr>
        </thead>
        <tbody>
            ";
            // line 569
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 570
                echo "                <tr>
                    <td>
                        <strong>
                            @";
                // line 573
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "name", array()), "html", null, true);
                echo "
                        </strong>
                    </td>
                    <td>
                        ";
                // line 577
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "args", array()));
                foreach ($context['_seq'] as $context["argName"] => $context["argValue"]) {
                    // line 578
                    echo "                            <div>
                                <strong>";
                    // line 579
                    echo twig_escape_filter($this->env, $context["argName"], "html", null, true);
                    echo ":</strong>
                                ";
                    // line 580
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->convertValueToString($context["argValue"]), "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['argName'], $context['argValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 583
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 586
            echo "        </tbody>
    </table>
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
        return "OroLayoutBundle:Collector:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1019 => 586,  1011 => 583,  1002 => 580,  998 => 579,  995 => 578,  991 => 577,  984 => 573,  979 => 570,  975 => 569,  965 => 561,  953 => 560,  937 => 557,  931 => 556,  926 => 553,  916 => 549,  911 => 547,  908 => 546,  904 => 545,  894 => 537,  891 => 536,  887 => 535,  879 => 534,  873 => 531,  869 => 530,  866 => 529,  851 => 528,  829 => 524,  825 => 523,  821 => 521,  815 => 519,  813 => 518,  810 => 517,  804 => 515,  802 => 514,  799 => 513,  793 => 511,  791 => 510,  787 => 508,  779 => 506,  777 => 505,  773 => 504,  763 => 502,  760 => 501,  747 => 500,  731 => 497,  727 => 495,  718 => 493,  714 => 492,  705 => 491,  703 => 490,  699 => 488,  689 => 487,  686 => 486,  682 => 484,  676 => 482,  674 => 481,  666 => 480,  663 => 479,  660 => 478,  646 => 477,  381 => 214,  375 => 212,  373 => 211,  370 => 210,  364 => 208,  362 => 207,  354 => 201,  348 => 199,  346 => 198,  340 => 195,  333 => 190,  327 => 186,  323 => 184,  314 => 182,  310 => 181,  304 => 177,  295 => 175,  291 => 174,  283 => 168,  281 => 167,  275 => 164,  267 => 158,  264 => 157,  167 => 64,  164 => 63,  159 => 60,  153 => 57,  150 => 56,  148 => 55,  139 => 49,  135 => 48,  132 => 47,  129 => 46,  122 => 42,  119 => 41,  116 => 40,  106 => 36,  101 => 34,  98 => 33,  93 => 32,  86 => 28,  81 => 25,  79 => 24,  74 => 22,  70 => 20,  68 => 19,  65 => 18,  62 => 17,  56 => 14,  53 => 13,  51 => 12,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroLayoutBundle:Collector:layout.html.twig", "");
    }
}
