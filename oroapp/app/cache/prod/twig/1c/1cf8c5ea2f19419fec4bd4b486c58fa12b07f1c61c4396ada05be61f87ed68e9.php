<?php

/* OroUIBundle:Default:dialogStyledPage.html.twig */
class __TwigTemplate_778d4b6f1821965a6d2590cdab190dabf89c3a9c5c8433421be058a9987d39a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:dialogStyledPage.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"row-fluid\">
        <div class=\"container-fluid\" style=\"min-height: 800px; background-color:#d0def1;\" id=\"window-container\">
            <button type=\"button\" id=\"my-button\" class=\"btn btn-large btn-primary\">Open more windows</button>
            <hr />
            <div class=\"btn-toolbar\">
                <div class=\"btn-group\">
                    <button id=\"opener1\" class=\"btn\">Open window 1</button>
                    <button id=\"opener2\" class=\"btn\">Open window 2</button>
                    <button id=\"opener3\" class=\"btn\">Open window 3</button>
                </div>
            </div>
            <div id=\"opener-content1\" style=\"display: none;\" title=\"Dima’s Address\">
                    <form action=\"#\" class=\"form form-horizontal\">
                        <fieldset>
                            <div class=\"scroll-holder\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"inputAddress\">Address</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"inputAddress\" placeholder=\"Address\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"inputAddress2\">Address2</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"inputAddress2\" placeholder=\"Address2\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"City\">City</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"City\" placeholder=\"City\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"States\">States</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"States\" placeholder=\"States\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"Zip\">Zip</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"Zip\" placeholder=\"Zip\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"Country\">Country</label>
                                    <div class=\"controls\">
                                        <select name=\"Country\" id=\"Country\">
                                            <option>us</option>
                                            <option>uk</option>
                                            <option>rus</option>
                                            <option>tt</option>
                                            <option>dd</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"tell\">tell</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"tell\" placeholder=\"tell\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"email\">email</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"email\" placeholder=\"email\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <div class=\"controls\">
                                        <label class=\"checkbox\">
                                            <input type=\"checkbox\"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bottom-action\">
                                <div class=\"pull-right\">
                                    <button type=\"button\" class=\"btn\">Cancel</button>
                                    <button type=\"button\" class=\"btn btn-primary\">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

            </div>
            <div id=\"opener-content2\" style=\"display: none;\" title=\"Dima’s Address2\">
                <p>Fusce hendrerit lacinia ligula.</p>
                <p>Donec a tincidunt nisi.</p>
                <p> Cras eu velit sed nibh feugiat congue lacinia ut urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
            <div id=\"opener-content3\" style=\"display: none;\" title=\"Dima’s Address3\">
                <p>v quam eu pellentesque. Nam euismod, lectus sit amet tristique imperdiet, metus ligula gravida felis, non dapibus nulla sem a magna.</p>
                <p>habitasse platea dictumst. Donec elementum vulputate imperdiet. Fusce sed lectus odio. Etiam cursus fermentum ornare. Phasellus facilisis t</p>
                <p> Quisque nec lobortis leo.</p>
            </div>
        </div>
    </div>

    <script>
        require(['jquery', 'jquery-ui'],
        function(\$) {
            \$(function(){
                var positionNextWindowY = 0;
                var positionNextWindowX=0;
                var positionNextWindowCounter = -35;
                function newPositionWindow(){
                    var TTEmp = positionNextWindowY/15;
                    if( TTEmp > 10){
                        positionNextWindowX = positionNextWindowCounter;
                        positionNextWindowY = 0;
                        positionNextWindowCounter = positionNextWindowCounter -35;
                        var needPosition = 'center+' + positionNextWindowX + ' center+' + positionNextWindowY;
                        return needPosition;
                    }else{
                        positionNextWindowY = positionNextWindowY +15;
                        positionNextWindowX =  positionNextWindowX +15;
                        var needPosition = 'center+' +  positionNextWindowX + ' center+' + positionNextWindowY;
                        return needPosition;
                    }
                }
                var isOpen;
                \$(\"#my-button\").click(function(){
                    var offsetwindow = newPositionWindow();
                    var dialogOptions = {
                        title : \"dialog window\",
                        width : 400,
                        height : 400,
                        position: {
                            my: offsetwindow,
                            at: \"center center\",
                            of: \$('body')
                        },
                        \"close\" : function(){ \$(this).dialog( \"destroy\" ) }
                    };
                    \$(\"<div>Some text if you need will be here</div>\").dialog(dialogOptions);
                });
                \$(\"#opener1\").click(function(){
                    try{
                        isOpen = \$('#opener-content1').dialog(\"isOpen\");
                    } catch(e) {
                        isOpen = false;
                    }
                    if (isOpen === false ){
                        var offsetwindow = newPositionWindow();
                        var dialogOptions = {
                            appendTo: \"#window-container\",
                            width : 400,
                            height : 305,
                            position: {
                                my: offsetwindow,
                                at: \"center center\",
                                of: \$('body')
                            },
                            \"close\" : function(){ \$(this).dialog( \"destroy\" ) }
                        };

                        \$(\"#opener-content1\").dialog(dialogOptions);
                    }
                });
                \$(\"#opener2\").click(function(){
                    try{
                        isOpen = \$('#opener-content2').dialog(\"isOpen\");
                    } catch(e) {
                        isOpen = false;
                    }
                    if (isOpen === false ){
                        var offsetwindow = newPositionWindow();
                        var dialogOptions = {
                            width : 400,
                            height : 300,
                            position: {
                                my: offsetwindow,
                                at: \"center center\",
                                of: \$('body')
                            },
                            \"close\" : function(){ \$(this).dialog( \"destroy\" ) }
                        };

                        \$(\"#opener-content2\").dialog(dialogOptions);
                    }
                });
                \$(\"#opener3\").click(function(){
                    try{
                        isOpen = \$('#opener-content3').dialog(\"isOpen\");
                    } catch(e) {
                        isOpen = false;
                    }
                    if (isOpen === false ){
                        var offsetwindow = newPositionWindow();
                        var dialogOptions = {
                            width : 400,
                            height : 300,
                            position: {
                                my: offsetwindow,
                                at: \"center center\",
                                of: \$('body')
                            },
                            \"close\" : function(){ \$(this).dialog( \"destroy\" ) }
                        };
                        \$(\"#opener-content3\").dialog(dialogOptions);
                    }
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:dialogStyledPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  35 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle:Default:dialogStyledPage.html.twig", "");
    }
}
