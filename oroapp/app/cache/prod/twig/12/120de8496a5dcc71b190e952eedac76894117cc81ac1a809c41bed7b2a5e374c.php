<?php

/* OroUIBundle:Default:oneColumnWithToolbar.html.twig */
class __TwigTemplate_ff2ed6c3170817be2b6f9c64cb1bec7b5a925179ac47bfa8edfdc83942126916 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:oneColumnWithToolbar.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'right_panel' => array($this, 'block_right_panel'),
            'left_panel' => array($this, 'block_left_panel'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"page-container\">
";
        // line 4
        $this->displayBlock('right_panel', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('left_panel', $context, $blocks);
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('content', $context, $blocks);
        // line 290
        echo "</div>
";
    }

    // line 4
    public function block_right_panel($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"side-nav right-panel\">
    <div class=\"side-nav-opener\">
        <span class=\"maximize-bar\"><i class=\"fa-arrow-left hide-text\">maximize-bar</i><i class=\"fa-arrow-right hide-text\">minimmase bar</i></span>
        <span class=\"lock-bar\"><i class=\"fa-lock hide-text\">lock-bar</i><i class=\"fa-unlock hide-text\">unlock bar</i></span>
    </div>
    <ul class=\"bar-tools\">
        <li class=\"open-item\">
            <a class=\"test2 sn-opener\" href=\"#\"><i class=\"fa-paypal hide-text\">paypal</i><span>paypal</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-paypal hide-text\">paypal</i>
                        Paypal
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\">
                    <div class=\"well well-small\">

                        <ul>
                            <li>@DarthVader We Will begin creating DS after lunch</li>
                            <li>@DarthVader We Will begin creating DS after lunch</li>
                            <li>@DarthVader We Will begin creating DS after lunch</li>
                            <li>@DarthVader We Will begin creating DS after lunch</li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class=\"test5 sn-opener\" href=\"#\"><i class=\"fa-twitter hide-text\">twitter</i><span>twitter</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-twitter hide-text\">twitter</i>twitter
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\"  style=\"display: none;\">
                    <p>Vivamus bibendum orci eget eros egestas et interdum ipsum elementum. Aliquam laoreet mattis felis, vitae bibendum mauris consectetur vel. </p>
                    <p>In hac habitasse platea dictumst. Cras cursus orci arcu.</p>
                </div>
            </div>
        </li>
        <li>
            <a class=\"test6 sn-opener\" href=\"#\"><i class=\"fa-facebook hide-text\">facebook</i><span>facebook</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-facebook hide-text\">facebook</i>Facebook
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\"  style=\"display: none;\">
                    <p> Aliquam laoreet mattis felis, vitae bibendum mauris consectetur vel. </p>
                    <p>tes te ts ea dictumst. Cras cursus orci arcu.</p>
                </div>
            </div>
        </li>
        <li>
            <a class=\"test6 sn-opener\" href=\"#\"><i class=\"fa-clock-o hide-text\">timer</i><span>timer</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-clock-o hide-text\">timer</i>Time Tracker
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\" style=\"display: none;\">
                    <p> Aliquam laoreet mattis felis, vitae bibendum mauris consectetur vel. </p>
                    <p>tes te ts ea dictumst. Cras cursus orci arcu.</p>
                </div>
            </div>
        </li>
        <li>
            <a class=\"test6 sn-opener\" href=\"#\"><i class=\"fa-bug hide-text\">bug</i><span>bug</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-bug hide-text\">bug</i>
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\" style=\"display: none;\">
                    <p> Aliquam laoreet mattis felis, vitae bibendum mauris consectetur vel. </p>
                    <p>tes te ts ea dictumst. Cras cursus orci arcu.</p>
                </div>
            </div>
        </li>
        <li>
            <a class=\"test6 sn-opener\" href=\"#\"><i class=\"fa-plus fa-inverse hide-text\">add</i><span>add</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-bug hide-text\">bug</i>
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\" style=\"display: none;\">
                    <p> Aliquam laoreet mattis felis, vitae bibendum mauris consectetur vel. </p>
                    <p>tes te ts ea dictumst. Cras cursus orci arcu.</p>
                </div>
            </div>
        </li>
    </ul>
</div>
";
    }

    // line 143
    public function block_left_panel($context, array $blocks = array())
    {
        // line 144
        echo "<div class=\"side-nav left-panel\">
    <div class=\"side-nav-opener\">
        <span class=\"maximize-bar\"><i class=\"fa-arrow-left hide-text\">maximize-bar</i><i class=\"fa-arrow-right hide-text\">minimmase bar</i></span>
        <span class=\"lock-bar\"><i class=\"fa-lock hide-text\">lock-bar</i><i class=\"fa-unlock hide-text\">unlock bar</i></span>
    </div>
    <ul class=\"bar-tools\">
        <li class=\"open-item\">
            <a class=\"test2 sn-opener\" href=\"#\"><i class=\"fa-paypal hide-text\">paypal</i><span>paypal</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-paypal hide-text\">paypal</i>
                        Paypal
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\">
                    <div class=\"well well-small\">

                        <ul>
                            <li>@DarthVader We Will begin creating DS after lunch</li>
                            <li>@DarthVader We Will begin creating DS after lunch</li>
                            <li>@DarthVader We Will begin creating DS after lunch</li>
                            <li>@DarthVader We Will begin creating DS after lunch</li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class=\"test5 sn-opener\" href=\"#\"><i class=\"fa-twitter hide-text\">twitter</i><span>twitter</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-twitter hide-text\">twitter</i>twitter
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\"  style=\"display: none;\">
                    <p>Vivamus bibendum orci eget eros egestas et interdum ipsum elementum. Aliquam laoreet mattis felis, vitae bibendum mauris consectetur vel. </p>
                    <p>In hac habitasse platea dictumst. Cras cursus orci arcu.</p>
                </div>
            </div>
        </li>
        <li>
            <a class=\"test6 sn-opener\" href=\"#\"><i class=\"fa-facebook hide-text\">facebook</i><span>facebook</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-facebook hide-text\">facebook</i>Facebook
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\"  style=\"display: none;\">
                    <p> Aliquam laoreet mattis felis, vitae bibendum mauris consectetur vel. </p>
                    <p>tes te ts ea dictumst. Cras cursus orci arcu.</p>
                </div>
            </div>
        </li>
        <li>
            <a class=\"test6 sn-opener\" href=\"#\"><i class=\"fa-clock-o hide-text\">timer</i><span>timer</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-clock-o hide-text\">timer</i>Time Tracker
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\" style=\"display: none;\">
                    <p> Aliquam laoreet mattis felis, vitae bibendum mauris consectetur vel. </p>
                    <p>tes te ts ea dictumst. Cras cursus orci arcu.</p>
                </div>
            </div>
        </li>
        <li>
            <a class=\"test6 sn-opener\" href=\"#\"><i class=\"fa-bug hide-text\">bug</i><span>bug</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-bug hide-text\">bug</i>
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\" style=\"display: none;\">
                    <p> Aliquam laoreet mattis felis, vitae bibendum mauris consectetur vel. </p>
                    <p>tes te ts ea dictumst. Cras cursus orci arcu.</p>
                </div>
            </div>
        </li>
        <li>
            <a class=\"test6 sn-opener\" href=\"#\"><i class=\"fa-plus fa-inverse hide-text\">add</i><span>add</span></a>
            <div class=\"nav-box\" style=\"display: none;\">
                <div class=\"nav-title\">
                    <h3>
                        <span class=\"open-bar-item\">
                            <i class=\"fa-chevron-right fa-inverse hide-text\">close</i>
                            <i class=\"fa-chevron-down fa-inverse hide-text\"  style=\"display: none;\">open</i>
                        </span>
                        <i class=\"fa-bug hide-text\">bug</i>
                    </h3>
                    <span class=\"close action fa-close\">close</span>
                    <span class=\"settings action fa-cog\">settings</span>
                </div>
                <div class=\"nav-content\" style=\"display: none;\">
                    <p> Aliquam laoreet mattis felis, vitae bibendum mauris consectetur vel. </p>
                    <p>tes te ts ea dictumst. Cras cursus orci arcu.</p>
                </div>
            </div>
        </li>
    </ul>
</div>
";
    }

    // line 282
    public function block_content($context, array $blocks = array())
    {
        // line 283
        echo "    <div class=\"container-fluid alert alert-info layout-content\">
        <div class=\" test-box\">
            <div class=\"pull-right\">test text</div>
            One column
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:oneColumnWithToolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 283,  340 => 282,  200 => 144,  197 => 143,  57 => 5,  54 => 4,  49 => 290,  47 => 282,  44 => 281,  42 => 143,  39 => 142,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default:oneColumnWithToolbar.html.twig", "");
    }
}
