<?php

/* OroMigrationBundle::schema-template.php.twig */
class __TwigTemplate_0ab708f0850b9d4c021403719468b569749ea0601baf0b43cb27945b5c78d728 extends Twig_Template
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
        echo "<?php

namespace ";
        // line 3
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\Migrations\\Schema;

use Doctrine\\DBAL\\Schema\\Schema;
use Oro\\Bundle\\MigrationBundle\\Migration\\Installation;
use Oro\\Bundle\\MigrationBundle\\Migration\\QueryBag;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 */
class ";
        // line 13
        echo twig_escape_filter($this->env, ($context["className"] ?? null), "html", null, true);
        echo " implements Installation
{
    /**
     * {@inheritdoc}
     */
    public function getMigrationVersion()
    {
        return '";
        // line 20
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "';
    }

    /**
     * {@inheritdoc}
     */
    public function up(Schema \$schema, QueryBag \$queries)
    {
        /** Tables generation **/
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["schema"] ?? null), "tables", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            if ((twig_test_empty(($context["allowedTables"] ?? null)) || $this->getAttribute(($context["allowedTables"] ?? null), $this->getAttribute($context["table"], "name", array()), array(), "array", true, true))) {
                // line 30
                echo "        \$this->";
                echo twig_escape_filter($this->env, (("create" . twig_replace_filter(twig_title_string_filter($this->env, twig_replace_filter($this->getAttribute($context["table"], "name", array()), array("_" => " "))), array(" " => ""))) . "Table"), "html", null, true);
                echo "(\$schema);
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        /** Foreign keys generation **/
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["schema"] ?? null), "tables", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            if ((twig_test_empty(($context["allowedTables"] ?? null)) || $this->getAttribute(($context["allowedTables"] ?? null), $this->getAttribute($context["table"], "name", array()), array(), "array", true, true))) {
                // line 35
                if ( !twig_test_empty($this->getAttribute($context["table"], "ForeignKeys", array()))) {
                    // line 36
                    echo "        \$this->";
                    echo twig_escape_filter($this->env, (("add" . twig_replace_filter(twig_title_string_filter($this->env, twig_replace_filter($this->getAttribute($context["table"], "name", array()), array("_" => " "))), array(" " => ""))) . "ForeignKeys"), "html", null, true);
                    echo "(\$schema);
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    }
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["schema"] ?? null), "tables", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            if ((twig_test_empty(($context["allowedTables"] ?? null)) || $this->getAttribute(($context["allowedTables"] ?? null), $this->getAttribute($context["table"], "name", array()), array(), "array", true, true))) {
                // line 41
                $context["methodName"] = (("create" . twig_replace_filter(twig_title_string_filter($this->env, twig_replace_filter($this->getAttribute($context["table"], "name", array()), array("_" => " "))), array(" " => ""))) . "Table");
                // line 42
                echo "
    /**
     * Create ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "name", array()), "html", null, true);
                echo " table
     *
     * @param Schema \$schema
     */
    protected function ";
                // line 48
                echo twig_escape_filter($this->env, ($context["methodName"] ?? null), "html", null, true);
                echo "(Schema \$schema)
    {
        \$table = \$schema->createTable('";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "name", array()), "html", null, true);
                echo "');
";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["table"], "columns", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 52
                    $context["columnExtendedOptions"] = (($this->getAttribute($this->getAttribute(($context["extendedOptions"] ?? null), $this->getAttribute($context["table"], "name", array()), array(), "array", false, true), $this->getAttribute($context["column"], "name", array()), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute(($context["extendedOptions"] ?? null), $this->getAttribute($context["table"], "name", array()), array(), "array"), $this->getAttribute($context["column"], "name", array()), array(), "array")) : (null));
                    // line 53
                    echo "        \$table->addColumn('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "name", array()), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["column"], "type", array()), "name", array()), "html", null, true);
                    echo "', ";
                    echo $this->getAttribute($this, "dumpColumnOptions", array(0 => $context["column"], 1 => ($context["columnExtendedOptions"] ?? null)), "method");
                    echo ");
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["table"], "indexes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                    // line 56
                    if ($this->getAttribute($context["index"], "isPrimary", array())) {
                        // line 57
                        echo "        \$table->setPrimaryKey(";
                        echo $this->getAttribute($this, "dumpArray", array(0 => $this->getAttribute($context["index"], "columns", array())), "method");
                        echo ");
";
                    } elseif ($this->getAttribute(                    // line 58
$context["index"], "isUnique", array())) {
                        // line 59
                        echo "        \$table->addUniqueIndex(";
                        echo $this->getAttribute($this, "dumpArray", array(0 => $this->getAttribute($context["index"], "columns", array())), "method");
                        echo ", '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["index"], "name", array()), "html", null, true);
                        echo "');
";
                    } else {
                        // line 61
                        echo "        \$table->addIndex(";
                        echo $this->getAttribute($this, "dumpArray", array(0 => $this->getAttribute($context["index"], "columns", array())), "method");
                        echo ", '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["index"], "name", array()), "html", null, true);
                        echo "', ";
                        echo $this->getAttribute($this, "dumpArray", array(0 => $this->getAttribute($context["index"], "flags", array())), "method");
                        echo ");
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "    }
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["schema"] ?? null), "tables", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            if ((twig_test_empty(($context["allowedTables"] ?? null)) || $this->getAttribute(($context["allowedTables"] ?? null), $this->getAttribute($context["table"], "name", array()), array(), "array", true, true))) {
                // line 67
                $context["methodName"] = (("add" . twig_replace_filter(twig_title_string_filter($this->env, twig_replace_filter($this->getAttribute($context["table"], "name", array()), array("_" => " "))), array(" " => ""))) . "ForeignKeys");
                // line 68
                if ( !twig_test_empty($this->getAttribute($context["table"], "ForeignKeys", array()))) {
                    // line 69
                    echo "
    /**
     * Add ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "name", array()), "html", null, true);
                    echo " foreign keys.
     *
     * @param Schema \$schema
     */
    protected function ";
                    // line 75
                    echo twig_escape_filter($this->env, ($context["methodName"] ?? null), "html", null, true);
                    echo "(Schema \$schema)
    {
        \$table = \$schema->getTable('";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "name", array()), "html", null, true);
                    echo "');
";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["table"], "ForeignKeys", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["foreignKey"]) {
                        // line 79
                        echo "        \$table->addForeignKeyConstraint(
            \$schema->getTable('";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute($context["foreignKey"], "foreignTableName", array()), "html", null, true);
                        echo "'),
            ";
                        // line 81
                        echo $this->getAttribute($this, "dumpArray", array(0 => $this->getAttribute($context["foreignKey"], "localColumns", array())), "method");
                        echo ",
            ";
                        // line 82
                        echo $this->getAttribute($this, "dumpArray", array(0 => $this->getAttribute($context["foreignKey"], "foreignColumns", array())), "method");
                        echo ",
            ";
                        // line 83
                        echo $this->getAttribute($this, "dumpOptionsArray", array(0 => $this->getAttribute($context["foreignKey"], "options", array())), "method");
                        echo "
        );
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foreignKey'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "    }
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "}";
        ob_start();
        // line 90
        echo "
";
        // line 108
        echo "
";
        // line 128
        echo "
";
        // line 134
        echo "
";
        // line 144
        echo "
";
        // line 154
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 91
    public function getdumpColumnOptions($__column__ = null, $__columnExtendedOptions__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "column" => $__column__,
            "columnExtendedOptions" => $__columnExtendedOptions__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 92
            ob_start();
            // line 93
            $context["options"] = $this->env->getExtension('Oro\Bundle\MigrationBundle\Twig\SchemaDumperExtension')->getColumnOptions(($context["column"] ?? null));
            // line 94
            $context["items"] = array();
            // line 95
            if ($this->getAttribute(($context["options"] ?? null), "default", array(), "any", true, true)) {
                $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => ("'default' => " . $this->getAttribute($this, "dumpString", array(0 => $this->getAttribute(($context["options"] ?? null), "default", array())), "method"))));
            }
            // line 96
            if ($this->getAttribute(($context["options"] ?? null), "notnull", array(), "any", true, true)) {
                $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => ("'notnull' => " . $this->getAttribute($this, "dumpBoolean", array(0 => $this->getAttribute(($context["options"] ?? null), "notnull", array())), "method"))));
            }
            // line 97
            if ($this->getAttribute(($context["options"] ?? null), "length", array(), "any", true, true)) {
                $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => ("'length' => " . $this->getAttribute($this, "dumpInteger", array(0 => $this->getAttribute(($context["options"] ?? null), "length", array())), "method"))));
            }
            // line 98
            if ($this->getAttribute(($context["options"] ?? null), "precision", array(), "any", true, true)) {
                $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => ("'precision' => " . $this->getAttribute($this, "dumpInteger", array(0 => $this->getAttribute(($context["options"] ?? null), "precision", array())), "method"))));
            }
            // line 99
            if ($this->getAttribute(($context["options"] ?? null), "scale", array(), "any", true, true)) {
                $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => ("'scale' => " . $this->getAttribute($this, "dumpInteger", array(0 => $this->getAttribute(($context["options"] ?? null), "scale", array())), "method"))));
            }
            // line 100
            if ($this->getAttribute(($context["options"] ?? null), "fixed", array(), "any", true, true)) {
                $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => ("'fixed' => " . $this->getAttribute($this, "dumpBoolean", array(0 => $this->getAttribute(($context["options"] ?? null), "fixed", array())), "method"))));
            }
            // line 101
            if ($this->getAttribute(($context["options"] ?? null), "unsigned", array(), "any", true, true)) {
                $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => ("'unsigned' => " . $this->getAttribute($this, "dumpBoolean", array(0 => $this->getAttribute(($context["options"] ?? null), "unsigned", array())), "method"))));
            }
            // line 102
            if ($this->getAttribute(($context["options"] ?? null), "autoincrement", array(), "any", true, true)) {
                $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => ("'autoincrement' => " . $this->getAttribute($this, "dumpBoolean", array(0 => $this->getAttribute(($context["options"] ?? null), "autoincrement", array())), "method"))));
            }
            // line 103
            if ($this->getAttribute(($context["options"] ?? null), "comment", array(), "any", true, true)) {
                $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => ("'comment' => " . $this->getAttribute($this, "dumpString", array(0 => $this->getAttribute(($context["options"] ?? null), "comment", array())), "method"))));
            }
            // line 104
            if ( !twig_test_empty(($context["columnExtendedOptions"] ?? null))) {
                $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => ("'oro_options' => " . $this->getAttribute($this, "dumpOptionsArray", array(0 => ($context["columnExtendedOptions"] ?? null)), "method"))));
            }
            // line 105
            echo "[";
            echo twig_join_filter(($context["items"] ?? null), ", ");
            echo "]
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function getdumpOptionsArray($__arrayValues__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "arrayValues" => $__arrayValues__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 110
            ob_start();
            // line 111
            $context["items"] = array();
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arrayValues"] ?? null));
            foreach ($context['_seq'] as $context["valueName"] => $context["value"]) {
                // line 113
                echo "    ";
                if ((null === $context["value"])) {
                    // line 114
                    echo "        ";
                    $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => (("'" . $context["valueName"]) . "' => null")));
                    // line 115
                    echo "    ";
                } elseif (($context["value"] === true)) {
                    // line 116
                    echo "        ";
                    $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => (("'" . $context["valueName"]) . "' => true")));
                    // line 117
                    echo "    ";
                } elseif (($context["value"] === false)) {
                    // line 118
                    echo "        ";
                    $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => (("'" . $context["valueName"]) . "' => false")));
                    // line 119
                    echo "    ";
                } elseif (twig_test_iterable($context["value"])) {
                    // line 120
                    echo "        ";
                    $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => ((("'" . $context["valueName"]) . "' => ") . $this->getAttribute($this, "dumpOptionsArray", array(0 => $context["value"]), "method"))));
                    // line 121
                    echo "    ";
                } else {
                    // line 122
                    echo "        ";
                    $context["items"] = twig_array_merge(($context["items"] ?? null), array(0 => (((("'" . $context["valueName"]) . "' => '") . $context["value"]) . "'")));
                    // line 123
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['valueName'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "[";
            echo twig_join_filter(($context["items"] ?? null), ", ");
            echo "]
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 129
    public function getdumpArray($__arrayValues__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "arrayValues" => $__arrayValues__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 130
            ob_start();
            // line 131
            echo "[";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arrayValues"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                if ( !$this->getAttribute($context["loop"], "first", array())) {
                    echo ", ";
                }
                echo "'";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "'";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "]
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 135
    public function getdumpBoolean($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 136
            ob_start();
            // line 137
            echo "    ";
            if (($context["value"] ?? null)) {
                // line 138
                echo "        true
    ";
            } else {
                // line 140
                echo "        false
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 145
    public function getdumpString($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 146
            ob_start();
            // line 147
            echo "    ";
            if ( !(null === ($context["value"] ?? null))) {
                // line 148
                echo "        '";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "'
    ";
            } else {
                // line 150
                echo "        null
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 155
    public function getdumpInteger($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 156
            ob_start();
            // line 157
            echo "    ";
            if ( !(null === ($context["value"] ?? null))) {
                // line 158
                echo "        ";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "
    ";
            } else {
                // line 160
                echo "        null
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return "OroMigrationBundle::schema-template.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 160,  594 => 158,  591 => 157,  589 => 156,  577 => 155,  559 => 150,  553 => 148,  550 => 147,  548 => 146,  536 => 145,  518 => 140,  514 => 138,  511 => 137,  509 => 136,  497 => 135,  445 => 131,  443 => 130,  431 => 129,  412 => 125,  405 => 123,  402 => 122,  399 => 121,  396 => 120,  393 => 119,  390 => 118,  387 => 117,  384 => 116,  381 => 115,  378 => 114,  375 => 113,  371 => 112,  369 => 111,  367 => 110,  355 => 109,  336 => 105,  332 => 104,  328 => 103,  324 => 102,  320 => 101,  316 => 100,  312 => 99,  308 => 98,  304 => 97,  300 => 96,  296 => 95,  294 => 94,  292 => 93,  290 => 92,  277 => 91,  271 => 154,  268 => 144,  265 => 134,  262 => 128,  259 => 108,  256 => 90,  253 => 89,  244 => 86,  235 => 83,  231 => 82,  227 => 81,  223 => 80,  220 => 79,  216 => 78,  212 => 77,  207 => 75,  200 => 71,  196 => 69,  194 => 68,  192 => 67,  187 => 66,  179 => 64,  165 => 61,  157 => 59,  155 => 58,  150 => 57,  148 => 56,  144 => 55,  131 => 53,  129 => 52,  125 => 51,  121 => 50,  116 => 48,  109 => 44,  105 => 42,  103 => 41,  98 => 40,  95 => 39,  84 => 36,  82 => 35,  77 => 34,  73 => 32,  63 => 30,  58 => 29,  46 => 20,  36 => 13,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMigrationBundle::schema-template.php.twig", "");
    }
}
