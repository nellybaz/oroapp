<?php

/* OroUIBundle:Default:systemMessages.html.twig */
class __TwigTemplate_8bb332dff53c92201dbb21ca4c5d767c3607d62cec7d3aa7ddb5e673a3c78dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:systemMessages.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
    public function block_header($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container-fluid\" >
        <div class=\"row-fluid one-column\">
            <div class=\"span12 top-frame\">
                <!--Body content-->
                <div class=\"container-fluid\">
                    <div class=\"alert alert-block\">
                        <button data-dismiss=\"alert\" class=\"close\" type=\"button\">&times;</button>
                        <h4>Warning!</h4>
                        <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                    </div>
                    <div class=\"alert alert-success\">
                        <button data-dismiss=\"alert\" class=\"close\" type=\"button\">&times;</button>
                        <strong>Well done!</strong> You successfully read this important alert message.
                    </div>
                    <div class=\"alert alert-info\">
                        <button data-dismiss=\"alert\" class=\"close\" type=\"button\">&times;</button>
                        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                    </div>
                    <div class=\"alert alert-error\">
                        <button data-dismiss=\"alert\" class=\"close\" type=\"button\">&times;</button>
                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                    </div>
                    <div class=\"alert alert-block alert-error fade in\">
                        <button data-dismiss=\"alert\" class=\"close\" type=\"button\">&times;</button>
                        <h4 class=\"alert-heading\">Oh snap! You got an error!</h4>
                        <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                        <p>
                            <a href=\"#\" class=\"btn btn-danger\">Take this action</a> <a href=\"#\" class=\"btn\">Or do this</a>
                        </p>
                    </div>
                    <h3>Alert messages <small>bootstrap-alert.js</small></h3>
                    <p>Just add <code>data-dismiss=\"alert\"</code> to your close button to automatically give an alert close functionality.</p>
                </div>
                <div class=\"container\">
                    <table class=\"table table-bordered table-striped\">
                        <thead>
                        <tr>
                            <th>Variable</th>
                            <th>default</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <span class=\"\">@warningText</span>
                            </td>
                            <td>
                                <code>#c09853;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"\">@warningBackground</span>
                            </td>
                            <td>
                                <code>#fcf8e3;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"\">@warningBorder</span>
                            </td>
                            <td>
                                <code>darken(spin(@warningBackground, -10), 3%);</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"\">@errorText</span>
                            </td>
                            <td>
                                <code>#b94a48;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"\">@errorBackground</span>
                            </td>
                            <td>
                                <code>#f2dede;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"\">@errorBorder</span>
                            </td>
                            <td>
                                <code>darken(spin(@errorBackground, -10), 3%);</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"\">@successText</span>
                            </td>
                            <td>
                                <code>#468847;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"\">@successBackground</span>
                            </td>
                            <td>
                                <code> #dff0d8;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"\">@successBorder</span>
                            </td>
                            <td>
                                <code>darken(spin(@successBackground, -10), 5%);</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"\">@infoText</span>
                            </td>
                            <td>
                                <code>#3a87ad;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"\">@infoBackground</span>
                            </td>
                            <td>
                                <code>#d9edf7;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"\">@infoBorder</span>
                            </td>
                            <td>
                                <code>darken(spin(@infoBackground, -10), 7%);</code>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:systemMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  34 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default:systemMessages.html.twig", "");
    }
}
