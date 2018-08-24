<?php

/* OroInstallerBundle:Form:fields.html.twig */
class __TwigTemplate_0e354abd3d53d74197dca9e31c8a65a3e5e277eb907b8322e9a1a4f980a91f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroFormBundle:Form:fields.html.twig", "OroInstallerBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            '_oro_installer_configuration_mailer_oro_installer_mailer_transport_row' => array($this, 'block__oro_installer_configuration_mailer_oro_installer_mailer_transport_row'),
            '_oro_installer_configuration_database_oro_installer_database_driver_options_row' => array($this, 'block__oro_installer_configuration_database_oro_installer_database_driver_options_row'),
            '_oro_installer_configuration_database_oro_installer_database_driver_row' => array($this, 'block__oro_installer_configuration_database_oro_installer_database_driver_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroFormBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block__oro_installer_configuration_mailer_oro_installer_mailer_transport_row($context, array $blocks = array())
    {
        // line 4
        echo "<script type=\"text/javascript\">
    \$(function () {
        var con = \$('div[data-ftid=oro_installer_configuration_mailer]');

        checkTransport();

        con.find('.control-group:first select').change(checkTransport);

        function checkTransport() {
            if (con.find('.control-group:first select').val() != 'smtp') {
                con.find('.control-group:not(:first)').hide()
                   .find('input').attr('disabled', 'disabled');
            } else {
                con.find('.control-group:not(:first)').show()
                    .find('input').attr('disabled', null);
            }
        }
    });
</script>
";
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block__oro_installer_configuration_database_oro_installer_database_driver_options_row($context, array $blocks = array())
    {
        // line 27
        echo "    <script type=\"text/javascript\">
        \$(function () {
            \$(document).on('click', '.removeRow', function(e) {
                e.preventDefault();

                \$(this).closest('*[data-content]').remove();
            });
        });

        \$(document).on('click', '.add-list-item', function(e) {
            var getOroCollectionInfo = function(\$listContainer) {
                var index = \$listContainer.data('last-index');
                var prototypeName = \$listContainer.attr('data-prototype-name') || '__name__';
                var html = \$listContainer.attr('data-prototype');

                return {
                    nextIndex: index,
                    prototypeHtml: html,
                    prototypeName: prototypeName
                };
            };

            var getOroCollectionNextItemHtml = function(collectionInfo) {
                return collectionInfo.prototypeHtml
                    .replace(new RegExp(collectionInfo.prototypeName, 'g'), collectionInfo.nextIndex);
            };

            e.preventDefault();

            var containerSelector = '.collection-fields-list';
            var \$listContainer = \$(this).closest('.row-oro').find(containerSelector).first();
            var rowCountAdd = \$(containerSelector).data('row-count-add') || 1;

            var collectionInfo = getOroCollectionInfo(\$listContainer);
            console.log(collectionInfo);
            for (var i = 1; i <= rowCountAdd; i++) {
                var nextItemHtml = getOroCollectionNextItemHtml(collectionInfo);
                collectionInfo.nextIndex++;
                \$listContainer.append(nextItemHtml).data('last-index', collectionInfo.nextIndex);
            }
            \$listContainer.find('input.position-input').each(function(i, el) {
                \$(el).val(i);
            });
        });
    </script>

    ";
        // line 73
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 76
    public function block__oro_installer_configuration_database_oro_installer_database_driver_row($context, array $blocks = array())
    {
        // line 77
        echo "<script type=\"text/javascript\">
    \$(function () {
        var \$container = \$('div[data-ftid=oro_installer_configuration_database] .control-group:first');
        var \$select = \$container.find('select');

        checkDatabase();
        \$select.change(checkDatabase);

        function checkDatabase() {
            \$help = \$container.find('.help-block');

            if (\$select.val() != 'pdo_mysql') {
                // hide the recommendation for non MySQL drivers
                \$help.remove();
                return;
            }

            if (0 === \$help.length) {
                \$container
                    .append('<p class=\"help-block\">' + \$select.data('mysql-hint') + '</p>');
            }
        }
    });
</script>
";
        // line 101
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 101,  120 => 77,  117 => 76,  111 => 73,  63 => 27,  60 => 26,  54 => 23,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroInstallerBundle:Form:fields.html.twig", "");
    }
}
