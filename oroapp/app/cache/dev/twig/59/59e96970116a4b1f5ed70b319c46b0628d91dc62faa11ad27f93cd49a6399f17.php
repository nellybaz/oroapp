<?php

/* OroLayoutBundle:Collector:layout.html.twig */
class __TwigTemplate_8625c2ade955b09d739da09bd482efb7ef6bce3a35ee9cba49099bbde8bbfee0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroLayoutBundle:Collector:layout.html.twig"));

        // line 3
        $context["tree"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "views", array()))) {
            // line 7
            echo "        ";
            $context["status_color"] = (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "not_applied_actions_count", array())) ? ("yellow") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            <span class=\"icon\">
                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAYAAACOGPReAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAbElEQVRIx2NgGAXUBowMDAwMaWlp/6ll4KxZsxhZYJy0tDRqGMjAwMDAwEQL77OgCxSXlJBsSG9PDwqfJi6lj/fRvTJ4XYocUTBXE4q8oRtRRBnKwsw8RFw6fA0lKkd1dnYOIpfCCthRMIIAAI0IFu9Hxh7ZAAAAAElFTkSuQmCC\"/>
            </span>
            ";
            // line 12
            if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "not_applied_actions_count", array())) {
                // line 13
                echo "                <span class=\"sf-toolbar-value\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "not_applied_actions_count", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "count", array()), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 24
            if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "not_applied_actions_count", array())) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Not applied actions</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">
                        ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "not_applied_actions_count", array()), "html", null, true);
                echo "
                    </span>
                </div>
            ";
            }
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "context", array()), "items", array()));
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
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 47
        echo "    <span class=\"label
                ";
        // line 48
        echo (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "not_applied_actions_count", array())) ? ("label-status-error") : (""));
        echo "
                ";
        // line 49
        echo ((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "views", array()))) ? ("disabled") : (""));
        echo "\"
    >
        <span class=\"icon\">
            <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAgCAYAAAABtRhCAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAbklEQVRIx2NgGAVDHTDCGGlpaf9pZcmsWbPg9rAgS6SlpdHCMhQ+E72DlAWbYHFJCcUG9/b0YBWnuw9HLaRPosEV4cPHh9iyBczXxGaZ0WxBfBwwM4/mw1ELRy0c4MK7s7NzCPsQvYU1CkYBNgAAV5UW+fU+ZL4AAAAASUVORK5CYII=\"/>
        </span>
        <strong>Layouts</strong>
        ";
        // line 55
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "not_applied_actions_count", array())) {
            // line 56
            echo "            <span class=\"count\">
                <span>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "not_applied_actions_count", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 60
        echo "    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 157
    public function block_panel($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 158
        echo "    <h2>Layouts</h2>

    <div id=\"layout-profiler\" class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Layout Tree
                <span class=\"badge\">";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "count", array()), "html", null, true);
        echo "</span>
            </h3>
            <div class=\"tab-content\">
                ";
        // line 167
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "views", array()))) {
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "views", array()));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "views", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "not_applied_actions_count", array()), "html", null, true);
        echo "</span>
            </h3>
            <div class=\"tab-content\">
                ";
        // line 198
        if (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "not_applied_actions_count", array()) > 0)) {
            // line 199
            echo "                    ";
            echo $context["tree"]->getnot_applied_actions_tab($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "not_applied_actions", array()));
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
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "context", array()), "items", array()))) {
            // line 208
            echo "                        ";
            echo $context["tree"]->getview_block_details("context", "Context", array("Items" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "context", array()), "items", array())));
            echo "
                    ";
        }
        // line 210
        echo "
                    ";
        // line 211
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "context", array()), "data", array()))) {
            // line 212
            echo "                        ";
            echo $context["tree"]->getview_block_details("context-data", "Context Data", array("Items" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "data", array()), "context", array()), "data", array())), true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "view_tree_entry"));

            // line 478
            echo "    ";
            $context["tree"] = $this;
            // line 479
            echo "    <li>
        <div class=\"tree-inner";
            // line 480
            if (($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "visible", array()) == false)) {
                echo " underline";
            }
            echo "\" data-tab-target-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()), "html", null, true);
            echo "-details\">
            ";
            // line 481
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "children", array()))) {
                // line 482
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? $this->getContext($context, "name")), "(no name)")) : ("(no name)")), "html", null, true);
            echo " ";
            if (($this->getAttribute(($context["data"] ?? null), "type_class", array(), "any", true, true) && $this->getAttribute(($context["data"] ?? null), "type", array(), "any", true, true))) {
                echo "[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "type", array()), "\\")), "html", null, true);
                echo "</abbr>]";
            }
            // line 488
            echo "        </div>

        ";
            // line 490
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "children", array()))) {
                // line 491
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-children\" ";
                if ( !($context["expanded"] ?? $this->getContext($context, "expanded"))) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 492
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "children", array()));
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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "view_tree_details"));

            // line 501
            echo "    ";
            $context["tree"] = $this;
            // line 502
            echo "    <div class=\"tree-details\"";
            if ($this->getAttribute(($context["data"] ?? null), "id", array(), "any", true, true)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>
            ";
            // line 504
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter(($context["name"] ?? $this->getContext($context, "name")), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            ";
            // line 505
            if (($this->getAttribute(($context["data"] ?? null), "type_class", array(), "any", true, true) && $this->getAttribute(($context["data"] ?? null), "type", array(), "any", true, true))) {
                // line 506
                echo "                <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "type", array()), "html", null, true);
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
                echo $context["tree"]->getview_block_details(($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()) . "-build-block"), "Build Block", array("Options" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "build_block_options", array())), true);
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
                echo $context["tree"]->getview_block_details(($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()) . "-build-view"), "Build View", array("Options" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "build_view_options", array())), true);
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
                echo $context["tree"]->getview_block_details(($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", array()) . "-vars"), "Variables", array("Variables" => $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "view_vars", array())));
                echo "
        ";
            }
            // line 521
            echo "    </div>

    ";
            // line 523
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "children", array()));
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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "view_block_details"));

            // line 529
            echo "    <h3>
        <a class=\"toggle-button\" data-toggle-target-id=\"";
            // line 530
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "-details\" href=\"#\">
            ";
            // line 531
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo " <span class=\"toggle-icon\"></span>
        </a>
    </h3>
    <div id=\"";
            // line 534
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "-details\"";
            if (($context["hidden"] ?? $this->getContext($context, "hidden"))) {
                echo " class=\"hidden\"";
            }
            echo ">
        ";
            // line 535
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
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
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "not_applied_actions_tab"));

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
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? $this->getContext($context, "actions")));
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
        return "OroLayoutBundle:Collector:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1070 => 586,  1062 => 583,  1053 => 580,  1049 => 579,  1046 => 578,  1042 => 577,  1035 => 573,  1030 => 570,  1026 => 569,  1016 => 561,  1001 => 560,  982 => 557,  976 => 556,  971 => 553,  961 => 549,  956 => 547,  953 => 546,  949 => 545,  939 => 537,  936 => 536,  932 => 535,  924 => 534,  918 => 531,  914 => 530,  911 => 529,  893 => 528,  868 => 524,  864 => 523,  860 => 521,  854 => 519,  852 => 518,  849 => 517,  843 => 515,  841 => 514,  838 => 513,  832 => 511,  830 => 510,  826 => 508,  818 => 506,  816 => 505,  812 => 504,  802 => 502,  799 => 501,  783 => 500,  764 => 497,  760 => 495,  751 => 493,  747 => 492,  738 => 491,  736 => 490,  732 => 488,  722 => 487,  719 => 486,  715 => 484,  709 => 482,  707 => 481,  699 => 480,  696 => 479,  693 => 478,  676 => 477,  408 => 214,  402 => 212,  400 => 211,  397 => 210,  391 => 208,  389 => 207,  381 => 201,  375 => 199,  373 => 198,  367 => 195,  360 => 190,  354 => 186,  350 => 184,  341 => 182,  337 => 181,  331 => 177,  322 => 175,  318 => 174,  310 => 168,  308 => 167,  302 => 164,  294 => 158,  288 => 157,  188 => 64,  182 => 63,  174 => 60,  168 => 57,  165 => 56,  163 => 55,  154 => 49,  150 => 48,  147 => 47,  141 => 46,  131 => 42,  128 => 41,  125 => 40,  115 => 36,  110 => 34,  107 => 33,  102 => 32,  95 => 28,  90 => 25,  88 => 24,  83 => 22,  79 => 20,  77 => 19,  74 => 18,  71 => 17,  65 => 14,  62 => 13,  60 => 12,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  40 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Collector/form.html.twig' %}

{% import _self as tree %}

{% block toolbar %}
    {% if collector.data.views|length %}
        {% set status_color = collector.data.not_applied_actions_count ? 'yellow' : '' %}
        {% set icon %}
            <span class=\"icon\">
                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAYAAACOGPReAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAbElEQVRIx2NgGAXUBowMDAwMaWlp/6ll4KxZsxhZYJy0tDRqGMjAwMDAwEQL77OgCxSXlJBsSG9PDwqfJi6lj/fRvTJ4XYocUTBXE4q8oRtRRBnKwsw8RFw6fA0lKkd1dnYOIpfCCthRMIIAAI0IFu9Hxh7ZAAAAAElFTkSuQmCC\"/>
            </span>
            {% if collector.data.not_applied_actions_count %}
                <span class=\"sf-toolbar-value\">
                    {{ collector.data.not_applied_actions_count }}
                </span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of views</b>
                <span class=\"sf-toolbar-status\">{{ collector.data.count }}</span>
            </div>
            {% if collector.data.not_applied_actions_count %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Not applied actions</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">
                        {{ collector.data.not_applied_actions_count }}
                    </span>
                </div>
            {% endif %}
            {% for key, value in collector.data.context.items %}
                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"oro-layout-toolbar-info-piece-title\">{{ key }}</b>
                    <span class=\"sf-toolbar-info-class oro-layout-toolbar-info-piece-value\">
                       {{ convert_value_to_string(value) }}
                    </span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label
                {{ collector.data.not_applied_actions_count ? 'label-status-error' : '' }}
                {{ collector.data.views is empty ? 'disabled' }}\"
    >
        <span class=\"icon\">
            <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAgCAYAAAABtRhCAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAbklEQVRIx2NgGAVDHTDCGGlpaf9pZcmsWbPg9rAgS6SlpdHCMhQ+E72DlAWbYHFJCcUG9/b0YBWnuw9HLaRPosEV4cPHh9iyBczXxGaZ0WxBfBwwM4/mw1ELRy0c4MK7s7NzCPsQvYU1CkYBNgAAV5UW+fU+ZL4AAAAASUVORK5CYII=\"/>
        </span>
        <strong>Layouts</strong>
        {% if collector.data.not_applied_actions_count %}
            <span class=\"count\">
                <span>{{ collector.data.not_applied_actions_count }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block head %}
    {{ parent() }}

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
{% endblock %}

{% block panel %}
    <h2>Layouts</h2>

    <div id=\"layout-profiler\" class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Layout Tree
                <span class=\"badge\">{{ collector.data.count }}</span>
            </h3>
            <div class=\"tab-content\">
                {% if collector.data.views|length %}
                    <div id=\"tree-menu\" class=\"tree\">
                        <div class=\"tree-menu-wrapper\">
                            <div class=\"expand-all\">
                                <a id=\"expand-all\" href=\"#\" data-collapsed-title=\"Collapse All\">Expand All</a>
                            </div>
                            <ul>
                                {% for viewId, viewData in collector.data.views %}
                                    {{ tree.view_tree_entry(viewId, viewData, true) }}
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                    <div id=\"tree-details-container\">
                        {% for viewId, viewData in collector.data.views %}
                            {{ tree.view_tree_details(viewId, viewData) }}
                        {% endfor %}
                    </div>
                {% else %}
                    <div class=\"empty\">
                        <p>No views were found for this request.</p>
                    </div>
                {% endif %}
            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Not Applied Actions
                <span class=\"badge\">{{ collector.data.not_applied_actions_count }}</span>
            </h3>
            <div class=\"tab-content\">
                {% if collector.data.not_applied_actions_count > 0 %}
                    {{ tree.not_applied_actions_tab(collector.data.not_applied_actions) }}
                {% endif %}
            </div>
        </div>
        <div class=\"tab\">
            <h3 class=\"tab-title\">Context</h3>
            <div class=\"tab-content\">
                <div class=\"tree-details\">
                    {% if collector.data.context.items|length %}
                        {{ tree.view_block_details('context', 'Context', {'Items': collector.data.context.items}) }}
                    {% endif %}

                    {% if collector.data.context.data|length %}
                        {{ tree.view_block_details('context-data', 'Context Data', {'Items': collector.data.context.data}, true) }}
                    {% endif %}
                </div>
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
{% endblock %}

{% macro view_tree_entry(name, data, expanded) %}
    {% import _self as tree %}
    <li>
        <div class=\"tree-inner{% if data.visible == false %} underline{% endif %}\" data-tab-target-id=\"{{ data.id }}-details\">
            {% if data.children is not empty %}
                <a class=\"toggle-button\" data-toggle-target-id=\"{{ data.id }}-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            {% else %}
                <div class=\"toggle-icon empty\"></div>
            {% endif %}

            {{ name|default('(no name)') }} {% if data.type_class is defined and data.type is defined %}[<abbr title=\"{{ data.type_class }}\">{{ data.type|split('\\\\')|last }}</abbr>]{% endif %}
        </div>

        {% if data.children is not empty %}
            <ul id=\"{{ data.id }}-children\" {% if not expanded %}class=\"hidden\"{% endif %}>
                {% for childName, childData in data.children %}
                    {{ tree.view_tree_entry(childName, childData, false) }}
                {% endfor %}
            </ul>
        {% endif %}
    </li>
{% endmacro %}

{% macro view_tree_details(name, data) %}
    {% import _self as tree %}
    <div class=\"tree-details\"{% if data.id is defined %} id=\"{{ data.id }}-details\"{% endif %}>
        <h2>
            {{ name|default('(no name)') }}
            {% if data.type_class is defined and data.type is defined %}
                <span class=\"form-type\">[<abbr title=\"{{ data.type_class }}\">{{ data.type }}</abbr>]</span>
            {% endif %}
        </h2>

        {% if data.build_block_options is defined %}
            {{ tree.view_block_details(data.id ~ '-build-block', 'Build Block', {'Options': data.build_block_options}, true) }}
        {% endif %}

        {% if data.build_view_options is defined %}
            {{ tree.view_block_details(data.id ~ '-build-view', 'Build View', {'Options': data.build_view_options}, true) }}
        {% endif %}

        {% if data.view_vars is defined %}
            {{ tree.view_block_details(data.id ~ '-vars', 'Variables', {'Variables': data.view_vars}) }}
        {% endif %}
    </div>

    {% for childName, childData in data.children %}
        {{ tree.view_tree_details(childName, childData) }}
    {% endfor %}
{% endmacro %}

{% macro view_block_details(id, title, groups, hidden) %}
    <h3>
        <a class=\"toggle-button\" data-toggle-target-id=\"{{ id }}-details\" href=\"#\">
            {{ title }} <span class=\"toggle-icon\"></span>
        </a>
    </h3>
    <div id=\"{{ id }}-details\"{% if hidden %} class=\"hidden\"{% endif %}>
        {% for name, options in groups %}
            {% if options %}
                <table>
                    <thead>
                    <tr>
                        <th width=\"180\">Key</th>
                        <th>Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for option, value in options %}
                        <tr>
                            <th scope=\"row\">{{ option }}</th>
                            <td>
                                {{ convert_value_to_string(value) }}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        {% endfor %}
    </div>
{% endmacro %}

{% macro not_applied_actions_tab(actions) %}
    <table>
        <thead>
        <tr>
            <th width=\"180\">Action name</th>
            <th>Arguments</th>
        </tr>
        </thead>
        <tbody>
            {% for action in actions %}
                <tr>
                    <td>
                        <strong>
                            @{{ action.name }}
                        </strong>
                    </td>
                    <td>
                        {% for argName, argValue in action.args %}
                            <div>
                                <strong>{{ argName }}:</strong>
                                {{ convert_value_to_string(argValue) }}
                            </div>
                        {% endfor %}
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "OroLayoutBundle:Collector:layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Collector/layout.html.twig");
    }
}
