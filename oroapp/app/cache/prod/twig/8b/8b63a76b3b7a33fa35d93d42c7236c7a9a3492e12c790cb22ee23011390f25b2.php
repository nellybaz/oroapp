<?php

/* OroFrontendBundle:layouts/default/oro_frontend_style_book_group:components_config.html.twig */
class __TwigTemplate_fc48fb0294fc01a167ec2c875ce55df3a6fd9ada4c19c0caf26a831d44dbe50f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_style_book_components_color_widget' => array($this, 'block__style_book_components_color_widget'),
            '_style_book_components_typography_widget' => array($this, 'block__style_book_components_typography_widget'),
            '_style_book_components_sizes_widget' => array($this, 'block__style_book_components_sizes_widget'),
            '_style_book_components_functions_widget' => array($this, 'block__style_book_components_functions_widget'),
            '_style_book_components_mixins_widget' => array($this, 'block__style_book_components_mixins_widget'),
            '_style_book_components_mixins_components_widget' => array($this, 'block__style_book_components_mixins_components_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_style_book_components_color_widget', $context, $blocks);
        // line 386
        echo "
";
        // line 387
        $this->displayBlock('_style_book_components_typography_widget', $context, $blocks);
        // line 403
        echo "
";
        // line 404
        $this->displayBlock('_style_book_components_sizes_widget', $context, $blocks);
        // line 429
        echo "
";
        // line 430
        $this->displayBlock('_style_book_components_functions_widget', $context, $blocks);
        // line 481
        echo "
";
        // line 482
        $this->displayBlock('_style_book_components_mixins_widget', $context, $blocks);
        // line 727
        echo "
";
        // line 728
        $this->displayBlock('_style_book_components_mixins_components_widget', $context, $blocks);
    }

    // line 5
    public function block__style_book_components_color_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        list($context["palette_key_title"], $context["color_key_title"], $context["function_key"]) =         array($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_palette"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.function_key"));
        // line 7
        echo "    <div class=\"color-palette\">
        ";
        // line 8
        $context['_parent'] = $context;
        // line 9
        echo "            ";
        $context["palette_name"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.pallete_title_primary");
        // line 10
        echo "
            <h3 class=\"color-palette__palette-title\">
                <span class=\"color-palette__palette-title--key\">
                    ";
        // line 13
        echo twig_escape_filter($this->env, ($context["palette_key_title"] ?? null), "html", null, true);
        echo "
                </span>
                ";
        // line 15
        echo twig_escape_filter($this->env, ($context["palette_name"] ?? null), "html", null, true);
        echo "
            </h3>
            <div class=\"color-palette__collection\">
                <div class=\"color-palette__color-box\">
                    ";
        // line 19
        $context['_parent'] = $context;
        // line 20
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_primary_main");
        // line 21
        echo "
                        ";
        // line 22
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 24
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--primary-main\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method")), "html", null, true);
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 31
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 33
        $context['_parent'] = $context;
        // line 34
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_primary_base");
        // line 35
        echo "
                        ";
        // line 36
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 38
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--primary-base\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 42
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 45
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 47
        $context['_parent'] = $context;
        // line 48
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_primary_light");
        // line 49
        echo "
                        ";
        // line 50
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 52
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--primary-light\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 56
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 59
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 61
        $context['_parent'] = $context;
        // line 62
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_primary_dark");
        // line 63
        echo "
                        ";
        // line 64
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 66
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--primary-dark\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 70
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 73
        echo "                </div>
            </div>
        ";
        $context = $context['_parent'];
        // line 76
        echo "    </div>
    <div class=\"color-palette\">
        ";
        // line 78
        $context['_parent'] = $context;
        // line 79
        echo "            ";
        $context["palette_name"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.pallete_title_secondary");
        // line 80
        echo "
            <h3 class=\"color-palette__palette-title\">
                <span class=\"color-palette__palette-title--key\">
                    ";
        // line 83
        echo twig_escape_filter($this->env, ($context["palette_key_title"] ?? null), "html", null, true);
        echo "
                </span>
                ";
        // line 85
        echo twig_escape_filter($this->env, ($context["palette_name"] ?? null), "html", null, true);
        echo "
            </h3>
            <div class=\"color-palette__collection\">
                <div class=\"color-palette__color-box\">
                    ";
        // line 89
        $context['_parent'] = $context;
        // line 90
        echo "                    ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_secondary_main");
        // line 91
        echo "
                    ";
        // line 92
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                    <strong class=\"color-palette__name--title\">
                        ";
        // line 94
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                    </strong>
                    <div class=\"color-palette__name color-palette__name--secondary-main\"></div>
                    <code class=\"color-palette__usage language-css\">
                        ";
        // line 98
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                    </code>
                    ";
        $context = $context['_parent'];
        // line 101
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 103
        $context['_parent'] = $context;
        // line 104
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_secondary_base");
        // line 105
        echo "
                        ";
        // line 106
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 108
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--secondary-base\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 112
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 115
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 117
        $context['_parent'] = $context;
        // line 118
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_secondary_light");
        // line 119
        echo "
                        ";
        // line 120
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 122
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--secondary-light\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 126
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 129
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 131
        $context['_parent'] = $context;
        // line 132
        echo "                    ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_secondary_lighten");
        // line 133
        echo "
                    ";
        // line 134
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                    <strong class=\"color-palette__name--title\">
                        ";
        // line 136
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                    </strong>
                    <div class=\"color-palette__name color-palette__name--secondary-lighten\"></div>
                    <code class=\"color-palette__usage language-css\">
                        ";
        // line 140
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                    </code>
                    ";
        $context = $context['_parent'];
        // line 143
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 145
        $context['_parent'] = $context;
        // line 146
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_secondary_dark");
        // line 147
        echo "
                        ";
        // line 148
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 150
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--secondary-dark\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 154
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 157
        echo "                </div>
            </div>
        ";
        $context = $context['_parent'];
        // line 160
        echo "    </div>
    <div class=\"color-palette\">
        ";
        // line 162
        $context['_parent'] = $context;
        // line 163
        echo "            ";
        $context["palette_name"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.pallete_title_additional");
        // line 164
        echo "
            <h3 class=\"color-palette__palette-title\">
                <span class=\"color-palette__palette-title--key\">
                    ";
        // line 167
        echo twig_escape_filter($this->env, ($context["palette_key_title"] ?? null), "html", null, true);
        echo "
                </span>
                ";
        // line 169
        echo twig_escape_filter($this->env, ($context["palette_name"] ?? null), "html", null, true);
        echo "
            </h3>
            <div class=\"color-palette__collection\">
                <div class=\"color-palette__color-box\">
                    ";
        // line 173
        $context['_parent'] = $context;
        // line 174
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_ultra");
        // line 175
        echo "
                        ";
        // line 176
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 178
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--additional-ultra\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 182
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 185
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 187
        $context['_parent'] = $context;
        // line 188
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_base");
        // line 189
        echo "
                        ";
        // line 190
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 192
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--additional-base\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 196
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 199
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 201
        $context['_parent'] = $context;
        // line 202
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_light");
        // line 203
        echo "
                        ";
        // line 204
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 206
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--additional-light\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 210
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 213
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 215
        $context['_parent'] = $context;
        // line 216
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_middle");
        // line 217
        echo "
                        ";
        // line 218
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 220
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--additional-middle\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 224
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 227
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 229
        $context['_parent'] = $context;
        // line 230
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_dark");
        // line 231
        echo "
                        ";
        // line 232
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 234
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--additional-dark\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 238
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 241
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 243
        $context['_parent'] = $context;
        // line 244
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_darker");
        // line 245
        echo "
                        ";
        // line 246
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 248
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--additional-darker\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 252
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 255
        echo "                </div>
            </div>
        ";
        $context = $context['_parent'];
        // line 258
        echo "    </div>
    <div class=\"color-palette\">
        ";
        // line 260
        $context['_parent'] = $context;
        // line 261
        echo "            ";
        $context["palette_name"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.pallete_title_ui");
        // line 262
        echo "
            <h3 class=\"color-palette__palette-title\">
                <span class=\"color-palette__palette-title--key\">
                    ";
        // line 265
        echo twig_escape_filter($this->env, ($context["palette_key_title"] ?? null), "html", null, true);
        echo "
                </span>
                ";
        // line 267
        echo twig_escape_filter($this->env, ($context["palette_name"] ?? null), "html", null, true);
        echo "
            </h3>
            <div class=\"color-palette__collection\">
                <div class=\"color-palette__color-box\">
                    ";
        // line 271
        $context['_parent'] = $context;
        // line 272
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_error");
        // line 273
        echo "
                        ";
        // line 274
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 276
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--ui-error\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 280
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 283
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 285
        $context['_parent'] = $context;
        // line 286
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_error_dark");
        // line 287
        echo "
                        ";
        // line 288
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 290
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--ui-error-dark\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 294
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 297
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 299
        $context['_parent'] = $context;
        // line 300
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_success");
        // line 301
        echo "
                        ";
        // line 302
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 304
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--ui-success\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 308
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 311
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 313
        $context['_parent'] = $context;
        // line 314
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_success_dark");
        // line 315
        echo "
                        ";
        // line 316
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 318
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--ui-success-dark\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 322
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 325
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 327
        $context['_parent'] = $context;
        // line 328
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_warning");
        // line 329
        echo "
                        ";
        // line 330
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 332
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--ui-warning\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 336
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 339
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 341
        $context['_parent'] = $context;
        // line 342
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_warning_dark");
        // line 343
        echo "
                        ";
        // line 344
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 346
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--ui-warning-dark\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 350
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 353
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 355
        $context['_parent'] = $context;
        // line 356
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_normal");
        // line 357
        echo "
                        ";
        // line 358
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 360
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--ui-normal\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 364
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 367
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 369
        $context['_parent'] = $context;
        // line 370
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_focus");
        // line 371
        echo "
                        ";
        // line 372
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 374
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--ui-focus\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 378
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 381
        echo "                </div>
            </div>
        </div>
    ";
        $context = $context['_parent'];
    }

    // line 387
    public function block__style_book_components_typography_widget($context, array $blocks = array())
    {
        // line 388
        echo "    <p class=\"example-typography base-font\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_font"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-font-minor\">";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_font_minor"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-line-height\">";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_line_height"), "html", null, true);
        echo "</p>
    <br>
    <p class=\"example-typography base-font-icons\">";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_font_icons"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-font-icons\">";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_font_icons_custom"), "html", null, true);
        echo "</p>
    <br>
    <p class=\"example-typography root-font-size\">";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_root"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-font-size--s\">";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_base_s"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-font-size\">";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_base"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-font-size--large\">";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_base_large"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-font-size--m\">";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_base_m"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-font-size--l\">";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_base_l"), "html", null, true);
        echo "</p>

";
    }

    // line 404
    public function block__style_book_components_sizes_widget($context, array $blocks = array())
    {
        // line 405
        echo "    \$site-width: 1400px;

    // Desktop Media Breakpoint
    \$breakpoint-desktop: 1100px;
    // iPad mini 4 (768*1024), iPad Air 2 (768*1024), iPad Pro (1024*1366)
    \$breakpoint-tablet: \$breakpoint-desktop - 1px;
    \$breakpoint-tablet-small: 992px;
    \$breakpoint-mobile-landscape: 640px;
    // iPhone 4s (320*480), iPhone 5s (320*568), iPhone 6s (375*667), iPhone 6s Plus (414*763)
    \$breakpoint-mobile: 414px;
    \$breakpoint-mobile-big: 767px;

    // Media breakpoints old
    \$screen-sm: 767px;
    \$screen-md: 991px;

    // Offsets
    \$offset-y: 15px !default;
    \$offset-y-m: 10px !default;
    \$offset-y-s: 5px !default;
    \$offset-x: 15px !default;
    \$offset-x-m: 10px !default;
    \$offset-x-s: 5px !default;
";
    }

    // line 430
    public function block__style_book_components_functions_widget($context, array $blocks = array())
    {
        // line 431
        echo "    // @return the value in a map associated with a given key;
    // Use: color: get-color('primary', 'base') => color: #000;

    @function get-color(\$palette: 'primary', \$key: 'main') {
        \$current-palette: map-get(\$color-palette,  \$palette);

        @return map-get(\$current-palette, \$key);
    }


    // @return: the value in a map associated with a given key
    // Use: z-index: z('base');

    @function z(\$layer: 'base') {
        \$layers: (
            'base': 1,
            'fixed': 50,
            'dropdown': 100,
            'popup': 150,
            'hidden': -1
        );

        \$z-index: map-get(\$layers, \$layer);
        @return \$z-index;
    }


    // Remove the unit of a length
    // @return number
    // Use: \$value: strip-units(10px); -> 10

    @function strip-units(\$value) {
        @return \$value / (\$value * 0 + 1);
    }


    // In SASS we can only once set a value to variable with flag !default, all others values will be ignored.
    // The variable must be declared.
    // @return new value with flag !default;
    // Use: \$component-var: reset-var(\$component-var, 10);

    @function update-default(\$var, \$value: null) {
        @if (\$var) {
            \$var: null;
            \$var: \$value !default;

            @return \$var;
        }
    }
";
    }

    // line 482
    public function block__style_book_components_mixins_widget($context, array $blocks = array())
    {
        // line 483
        echo "    @mixin after() {
        content: '';

        position: absolute;

        display: block;
    }

    @mixin clearfix {
        &::after {
            content: '';

            display: block;

            clear: both;
        }
    }

    @mixin list-normalize() {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    // Use: @include breakpoint('desktop') {
    //  content
    //}
    @mixin breakpoint(\$type) {
        \$breakpoints: (
            'desktop': '(min-width: ' + \$breakpoint-desktop + ')',
            'tablet': '(max-width: ' +  \$breakpoint-tablet + ')',
            'tablet-small': '(max-width: ' +  \$breakpoint-tablet-small + ')',
            'mobile-landscape': '(max-width: ' +  \$breakpoint-mobile-landscape + ')',
            'mobile': '(max-width: ' + \$breakpoint-mobile + ')'
        );

        @media #{map-get(\$breakpoints, \$type)} {
            @content;
        }
    }

    // Use: @include font-face('Lato', '../fonts/lato/lato-regular-webfont', 400, normal);
    @mixin font-face(\$font-family, \$file-path, \$font-weight, \$font-style) {
        @font-face {
            font-family: \$font-family;
            src: url('#{\$file-path}.eot');
            src: url('#{\$file-path}.eot?#iefix') format('embedded-opentype'),
            url('#{\$file-path}.woff') format('woff'),
            url('#{\$file-path}.ttf') format('truetype'),
            url('#{\$file-path}.svg##{\$font-family}') format('svg');
            font-weight: \$font-weight;
            font-style: \$font-style;
        }
        // Chrome for Windows rendering fix: http://www.adtrak.co.uk/blog/font-face-chrome-rendering/
        @media screen and (-webkit-min-device-pixel-ratio: 0) {
            @font-face {
                font-family: \$font-family;
                src: url('#{\$file-path}.svg##{\$font-family}') format('svg');
            }
        }
    }

    // Check devices on server, if device is desktop added class to body (.desktop-version)
    @mixin only-desktop {
        @include breakpoint('desktop') {
            .desktop-version {
                @content;
            }
        }
    }

    // Mixin for border, if need to use shorthand property, set \$use-shorthand to true
    // Null property doesn't render
    @mixin border(
            \$width: null,
            \$style: null,
            \$color: null,
            \$use-shorthand: false
        ) {
        @if (\$use-shorthand) {
            border: \$width \$style \$color;
        } @else {
            border-width: \$width;
            border-style: \$style;
            border-color: \$color;
        }
    }

    // Mixin for tabs
    @mixin nav-tabs(
            // Selectors
            \$nav-tabs: '.nav-tabs',
            \$nav-tabs-item: '.nav-item',
            \$nav-tabs-item-active: '.active',
            \$nav-tabs-link: '.nav-link',

            // tabs wrapper
            \$nav-tabs-offset: null,
            \$nav-tabs-inner-offset: null,
            \$nav-tabs-border-width: null,
            \$nav-tabs-border-style: null,
            \$nav-tabs-border-color: null,
            \$nav-tabs-background: null,
            \$nav-tabs-align-items: null,
            \$nav-tabs-justify-content: flex-start,
            \$nav-tabs-wrap: nowrap,
            \$nav-tabs-gap: 0,

            // tabs item
            \$nav-tabs-item-flex: null,
            
            // tabs link
            \$nav-tabs-link-inner-offset: null,
            \$nav-tabs-link-text-align: center,
            \$nav-tabs-link-background: null,
            \$nav-tabs-link-border-width: null,
            \$nav-tabs-link-border-style: null,
            \$nav-tabs-link-border-color: null,
            \$nav-tabs-link-color: null,
            
            // tabs link hover
            \$nav-tabs-link-hover-inner-offset: null,
            \$nav-tabs-link-hover-text-decoration: null,
            \$nav-tabs-link-hover-background: null,
            \$nav-tabs-link-hover-border-width: null,
            \$nav-tabs-link-hover-border-style: null,
            \$nav-tabs-link-hover-border-color: null,
            \$nav-tabs-link-hover-color: null,

            // tabs link active
            \$nav-tabs-link-active-inner-offset: null,
            \$nav-tabs-link-active-background: null,
            \$nav-tabs-link-active-border-width: null,
            \$nav-tabs-link-active-border-style: null,
            \$nav-tabs-link-active-border-color: null,
            \$nav-tabs-link-active-color: null
        ) {
        #{\$nav-tabs} {
            margin: \$nav-tabs-offset;
            padding: \$nav-tabs-inner-offset;

            background: \$nav-tabs-background;

            display: flex;
            flex-wrap: \$nav-tabs-wrap;
            align-items: \$nav-tabs-align-items;
            justify-content: \$nav-tabs-justify-content;

            @include border(\$nav-tabs-border-width, \$nav-tabs-border-style, \$nav-tabs-border-color);

            &:after {
                // Disable bootstrap clearfix
                content: none;
            }
        }

        #{\$nav-tabs-item} {
            flex: \$nav-tabs-item-flex;

            &:not(:first-child) {
                margin-left: \$nav-tabs-gap;
            }
        }

        #{\$nav-tabs-link} {
            display: block;
            padding: \$nav-tabs-link-inner-offset;

            text-align: \$nav-tabs-link-text-align;

            background: \$nav-tabs-link-background;
            color: \$nav-tabs-link-color;

            @include border(\$nav-tabs-link-border-width, \$nav-tabs-link-border-style, \$nav-tabs-link-border-color);

            @include hover-focus {
                padding: \$nav-tabs-link-hover-inner-offset;

                text-decoration: \$nav-tabs-link-hover-text-decoration;

                background: \$nav-tabs-link-hover-background;
                color: \$nav-tabs-link-hover-color;

                @include border(\$nav-tabs-link-hover-border-width, \$nav-tabs-link-hover-border-style, \$nav-tabs-link-hover-border-color);
            }
        }

        #{\$nav-tabs-item}#{\$nav-tabs-item-active} #{\$nav-tabs-link} {
            padding: \$nav-tabs-link-active-inner-offset;

            background: \$nav-tabs-link-active-background;
            color: \$nav-tabs-link-active-color;

            @include border(\$nav-tabs-link-active-border-width, \$nav-tabs-link-active-border-style, \$nav-tabs-link-active-border-color);
        }

        @content;
    }

    @mixin ellipsis() {
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    %direct-link {
        padding: 0 10px;

        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    @mixin direct-link() {
        @extend %direct-link;
    }

    @mixin badge(
        \$badge-size:        26px,
        \$badge-f-size:      14px,
        \$badge-bg:          get-color('primary', 'base'),
        \$badge-radius:      50%,
        \$badge-color:       get-color('additional', 'ultra'),
        \$badge-icon-align:  baseline,
        \$badge-icon-offset: 0
    ) {
        display: inline-block;
        vertical-align: middle;
        width: \$badge-size;
        height: \$badge-size;

        text-align: center;
        font-size: \$badge-f-size;
        line-height: strip-units(\$badge-size/ \$badge-f-size);

        background-color: \$badge-bg;
        border-radius: \$badge-radius;
        color: \$badge-color;

        [class^=\"fa-\"] {
            margin: \$badge-icon-offset;
        }
    }
";
    }

    // line 728
    public function block__style_book_components_mixins_components_widget($context, array $blocks = array())
    {
        // line 729
        echo "    @mixin link() {
        color: \$link-color;

        &--current {
            color: \$link-color-current;
        }

        &:hover {
            color: \$link-color-hover;
        }
    }


    // Mixin for include font-awesome icons to custom elements
    // List of icons https://github.com/FortAwesome/Font-Awesome/blob/master/scss/_variables.scss
    // @param \$icon-name (Font Awesome icon)
    // @param \$state {CSS pseudo-element}

    @mixin fa-icon(\$icon: null, \$state: before) {
        @if (\$icon) {
            &:#{\$state} {
                content: '#{\$icon}';

                font-family: \$icon-font;
            }
        }
    }


    %base-transition {
        transition: all linear 100ms;
    }
";
    }

    // line 1
    public function getget_color($__palette_name__ = null, $__palette_key__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "palette_name" => $__palette_name__,
            "palette_key" => $__palette_key__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    get-color('";
            echo twig_escape_filter($this->env, ((array_key_exists("palette_name", $context)) ? (_twig_default_filter(($context["palette_name"] ?? null), "")) : ("")), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, ((array_key_exists("palette_key", $context)) ? (_twig_default_filter(($context["palette_key"] ?? null), "")) : ("")), "html", null, true);
            echo "');
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
        return "OroFrontendBundle:layouts/default/oro_frontend_style_book_group:components_config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1304 => 2,  1291 => 1,  1255 => 729,  1252 => 728,  1005 => 483,  1002 => 482,  949 => 431,  946 => 430,  919 => 405,  916 => 404,  909 => 400,  905 => 399,  901 => 398,  897 => 397,  893 => 396,  889 => 395,  884 => 393,  880 => 392,  875 => 390,  871 => 389,  866 => 388,  863 => 387,  855 => 381,  849 => 378,  842 => 374,  837 => 372,  834 => 371,  831 => 370,  829 => 369,  825 => 367,  819 => 364,  812 => 360,  807 => 358,  804 => 357,  801 => 356,  799 => 355,  795 => 353,  789 => 350,  782 => 346,  777 => 344,  774 => 343,  771 => 342,  769 => 341,  765 => 339,  759 => 336,  752 => 332,  747 => 330,  744 => 329,  741 => 328,  739 => 327,  735 => 325,  729 => 322,  722 => 318,  717 => 316,  714 => 315,  711 => 314,  709 => 313,  705 => 311,  699 => 308,  692 => 304,  687 => 302,  684 => 301,  681 => 300,  679 => 299,  675 => 297,  669 => 294,  662 => 290,  657 => 288,  654 => 287,  651 => 286,  649 => 285,  645 => 283,  639 => 280,  632 => 276,  627 => 274,  624 => 273,  621 => 272,  619 => 271,  612 => 267,  607 => 265,  602 => 262,  599 => 261,  597 => 260,  593 => 258,  588 => 255,  582 => 252,  575 => 248,  570 => 246,  567 => 245,  564 => 244,  562 => 243,  558 => 241,  552 => 238,  545 => 234,  540 => 232,  537 => 231,  534 => 230,  532 => 229,  528 => 227,  522 => 224,  515 => 220,  510 => 218,  507 => 217,  504 => 216,  502 => 215,  498 => 213,  492 => 210,  485 => 206,  480 => 204,  477 => 203,  474 => 202,  472 => 201,  468 => 199,  462 => 196,  455 => 192,  450 => 190,  447 => 189,  444 => 188,  442 => 187,  438 => 185,  432 => 182,  425 => 178,  420 => 176,  417 => 175,  414 => 174,  412 => 173,  405 => 169,  400 => 167,  395 => 164,  392 => 163,  390 => 162,  386 => 160,  381 => 157,  375 => 154,  368 => 150,  363 => 148,  360 => 147,  357 => 146,  355 => 145,  351 => 143,  345 => 140,  338 => 136,  333 => 134,  330 => 133,  327 => 132,  325 => 131,  321 => 129,  315 => 126,  308 => 122,  303 => 120,  300 => 119,  297 => 118,  295 => 117,  291 => 115,  285 => 112,  278 => 108,  273 => 106,  270 => 105,  267 => 104,  265 => 103,  261 => 101,  255 => 98,  248 => 94,  243 => 92,  240 => 91,  237 => 90,  235 => 89,  228 => 85,  223 => 83,  218 => 80,  215 => 79,  213 => 78,  209 => 76,  204 => 73,  198 => 70,  191 => 66,  186 => 64,  183 => 63,  180 => 62,  178 => 61,  174 => 59,  168 => 56,  161 => 52,  156 => 50,  153 => 49,  150 => 48,  148 => 47,  144 => 45,  138 => 42,  131 => 38,  126 => 36,  123 => 35,  120 => 34,  118 => 33,  114 => 31,  108 => 28,  101 => 24,  96 => 22,  93 => 21,  90 => 20,  88 => 19,  81 => 15,  76 => 13,  71 => 10,  68 => 9,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  53 => 728,  50 => 727,  48 => 482,  45 => 481,  43 => 430,  40 => 429,  38 => 404,  35 => 403,  33 => 387,  30 => 386,  28 => 5,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/default/oro_frontend_style_book_group:components_config.html.twig", "");
    }
}
