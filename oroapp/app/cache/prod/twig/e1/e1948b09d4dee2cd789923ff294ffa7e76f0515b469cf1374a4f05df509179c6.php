<?php

/* OroUIBundle:Default:tablesPage.html.twig */
class __TwigTemplate_5d66837f8df1e914368002c3328055d780d6f608d0b38739b2ef3a3d8076402c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:tablesPage.html.twig", 1);
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
        <div class=\"popup-box\">
            <div class=\"clearfix\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr />
        <div class=\"popup-box\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr />
        <div class=\"popup-box\">
            <h3>Table boardered/hover</h3>
            <table class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td rowspan=\"2\">1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@TwBootstrap</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td colspan=\"2\">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr />
        <div class=\"popup-box\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Payment Taken</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr class=\"success\">
                    <td>1</td>
                    <td>TB - Monthly</td>
                    <td>01/04/2012</td>
                    <td>Approved</td>
                </tr>
                <tr class=\"error\">
                    <td>2</td>
                    <td>TB - Monthly</td>
                    <td>02/04/2012</td>
                    <td>Declined</td>
                </tr>
                <tr class=\"warning\">
                    <td>3</td>
                    <td>TB - Monthly</td>
                    <td>03/04/2012</td>
                    <td>Pending</td>
                </tr>
                <tr class=\"info\">
                    <td>4</td>
                    <td>TB - Monthly</td>
                    <td>04/04/2012</td>
                    <td>Call in to confirm</td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr />
        <div class=\"popup-box\">
        </div>
        <div class=\"clearfix\">
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
                        <span>@tableBackground</span>
                    </td>
                    <td>
                        <code>transparent; // overall background-color</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span  >@tableBackgroundAccent</span>
                    </td>
                    <td>
                        <code>#f9f9f9; // for striping</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span  >@tableBackgroundHover</span>
                    </td>
                    <td>
                        <code>#f5f5f5; // for hover</code>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>@tableBorder</span>
                    </td>
                    <td>
                        <code>#ddd; // table and cell border</code>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:tablesPage.html.twig";
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
        return new Twig_Source("", "OroUIBundle:Default:tablesPage.html.twig", "");
    }
}
