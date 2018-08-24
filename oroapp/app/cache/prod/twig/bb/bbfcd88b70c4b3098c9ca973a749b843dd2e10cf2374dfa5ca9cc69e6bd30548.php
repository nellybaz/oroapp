<?php

/* OroFrontendBundle:layouts/blank/oro_frontend_style_book_group:components_config.html.twig */
class __TwigTemplate_db6bdbcc8648a3faf3711885e8ab26c216eb2844302ca00203b1f5657a3502ea extends Twig_Template
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
            '_style_book_components_animation_widget' => array($this, 'block__style_book_components_animation_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_style_book_components_color_widget', $context, $blocks);
        // line 358
        echo "
";
        // line 359
        $this->displayBlock('_style_book_components_typography_widget', $context, $blocks);
        // line 372
        echo "
";
        // line 373
        $this->displayBlock('_style_book_components_sizes_widget', $context, $blocks);
        // line 394
        echo "
";
        // line 395
        $this->displayBlock('_style_book_components_functions_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('_style_book_components_mixins_widget', $context, $blocks);
        // line 647
        echo "
";
        // line 648
        $this->displayBlock('_style_book_components_mixins_components_widget', $context, $blocks);
        // line 716
        echo "
";
        // line 717
        $this->displayBlock('_style_book_components_animation_widget', $context, $blocks);
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
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_secondary_base");
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
                        <div class=\"color-palette__name color-palette__name--secondary-base\"></div>
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
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_secondary_light");
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
                        <div class=\"color-palette__name color-palette__name--secondary-light\"></div>
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
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_secondary_dark");
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
                        <div class=\"color-palette__name color-palette__name--secondary-dark\"></div>
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
            </div>
        ";
        $context = $context['_parent'];
        // line 132
        echo "    </div>
    <div class=\"color-palette\">
        ";
        // line 134
        $context['_parent'] = $context;
        // line 135
        echo "            ";
        $context["palette_name"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.pallete_title_additional");
        // line 136
        echo "
            <h3 class=\"color-palette__palette-title\">
                <span class=\"color-palette__palette-title--key\">
                    ";
        // line 139
        echo twig_escape_filter($this->env, ($context["palette_key_title"] ?? null), "html", null, true);
        echo "
                </span>
                ";
        // line 141
        echo twig_escape_filter($this->env, ($context["palette_name"] ?? null), "html", null, true);
        echo "
            </h3>
            <div class=\"color-palette__collection\">
                <div class=\"color-palette__color-box\">
                    ";
        // line 145
        $context['_parent'] = $context;
        // line 146
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_ultra");
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
                        <div class=\"color-palette__name color-palette__name--additional-ultra\"></div>
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
                <div class=\"color-palette__color-box\">
                    ";
        // line 159
        $context['_parent'] = $context;
        // line 160
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_base");
        // line 161
        echo "
                        ";
        // line 162
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 164
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--additional-base\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 168
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 171
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 173
        $context['_parent'] = $context;
        // line 174
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_light");
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
                        <div class=\"color-palette__name color-palette__name--additional-light\"></div>
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
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_middle");
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
                        <div class=\"color-palette__name color-palette__name--additional-middle\"></div>
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
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_dark");
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
                        <div class=\"color-palette__name color-palette__name--additional-dark\"></div>
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
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_additional_darker");
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
                        <div class=\"color-palette__name color-palette__name--additional-darker\"></div>
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
            </div>
        ";
        $context = $context['_parent'];
        // line 230
        echo "    </div>
    <div class=\"color-palette\">
        ";
        // line 232
        $context['_parent'] = $context;
        // line 233
        echo "            ";
        $context["palette_name"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.pallete_title_ui");
        // line 234
        echo "
            <h3 class=\"color-palette__palette-title\">
                <span class=\"color-palette__palette-title--key\">
                    ";
        // line 237
        echo twig_escape_filter($this->env, ($context["palette_key_title"] ?? null), "html", null, true);
        echo "
                </span>
                ";
        // line 239
        echo twig_escape_filter($this->env, ($context["palette_name"] ?? null), "html", null, true);
        echo "
            </h3>
            <div class=\"color-palette__collection\">
                <div class=\"color-palette__color-box\">
                    ";
        // line 243
        $context['_parent'] = $context;
        // line 244
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_error");
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
                        <div class=\"color-palette__name color-palette__name--ui-error\"></div>
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
                <div class=\"color-palette__color-box\">
                    ";
        // line 257
        $context['_parent'] = $context;
        // line 258
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_error_dark");
        // line 259
        echo "
                        ";
        // line 260
        echo twig_escape_filter($this->env, ($context["color_key_title"] ?? null), "html", null, true);
        echo "
                        <strong class=\"color-palette__name--title\">
                            ";
        // line 262
        echo twig_escape_filter($this->env, ($context["palette_key"] ?? null), "html", null, true);
        echo "
                        </strong>
                        <div class=\"color-palette__name color-palette__name--ui-error-dark\"></div>
                        <code class=\"color-palette__usage language-css\">
                            ";
        // line 266
        echo $this->getAttribute($this, "get_color", array(0 => ($context["palette_name"] ?? null), 1 => ($context["palette_key"] ?? null)), "method");
        echo "
                        </code>
                    ";
        $context = $context['_parent'];
        // line 269
        echo "                </div>
                <div class=\"color-palette__color-box\">
                    ";
        // line 271
        $context['_parent'] = $context;
        // line 272
        echo "                        ";
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_success");
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
                        <div class=\"color-palette__name color-palette__name--ui-success\"></div>
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
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_success_dark");
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
                        <div class=\"color-palette__name color-palette__name--ui-success-dark\"></div>
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
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_warning");
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
                        <div class=\"color-palette__name color-palette__name--ui-warning\"></div>
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
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_warning_dark");
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
                        <div class=\"color-palette__name color-palette__name--ui-warning-dark\"></div>
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
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_normal");
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
                        <div class=\"color-palette__name color-palette__name--ui-normal\"></div>
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
        $context["palette_key"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.color_key_ui_focus");
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
                        <div class=\"color-palette__name color-palette__name--ui-focus\"></div>
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
            </div>
        </div>
    ";
        $context = $context['_parent'];
    }

    // line 359
    public function block__style_book_components_typography_widget($context, array $blocks = array())
    {
        // line 360
        echo "    <p class=\"example-typography base-font\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_font"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-line-height\">";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_line_height"), "html", null, true);
        echo "</p>
    <br>
    <p class=\"example-typography base-font-icons\">";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_font_icons"), "html", null, true);
        echo "</p>
    <br>
    <p class=\"example-typography root-font-size\">";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_root"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-font-size--s\">";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_base_s"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-font-size\">";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_base"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-font-size--m\">";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_base_m"), "html", null, true);
        echo "</p>
    <p class=\"example-typography base-font-size--l\">";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.groups.configs.text_typography_base_l"), "html", null, true);
        echo "</p>

";
    }

    // line 373
    public function block__style_book_components_sizes_widget($context, array $blocks = array())
    {
        // line 374
        echo "    \$site-width: 1100px;

    // Desktop Media Breakpoint
    \$breakpoint-desktop: 1100px;
    // iPad mini 4 (768*1024), iPad Air 2 (768*1024), iPad Pro (1024*1366)
    \$breakpoint-tablet: \$breakpoint-desktop - 1px;
    \$breakpoint-tablet-small: 992px;
    \$breakpoint-mobile-landscape: 640px;
    // iPhone 4s (320*480), iPhone 5s (320*568), iPhone 6s (375*667), iPhone 6s Plus (414*763)
    \$breakpoint-mobile: 414px;
    \$breakpoint-mobile-big: 767px;

    // Offsets
    \$offset-y: 15px !default;
    \$offset-y-m: 10px !default;
    \$offset-y-s: 5px !default;
    \$offset-x: 15px !default;
    \$offset-x-m: 10px !default;
    \$offset-x-s: 5px !default;
";
    }

    // line 395
    public function block__style_book_components_functions_widget($context, array $blocks = array())
    {
        // line 396
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

    // line 447
    public function block__style_book_components_mixins_widget($context, array $blocks = array())
    {
        // line 448
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
";
    }

    // line 648
    public function block__style_book_components_mixins_components_widget($context, array $blocks = array())
    {
        // line 649
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


    // Mixin for enable styled scroll bar for target container
    // Use: @include styled-scrollbar();
    @mixin styled-scrollbar(
        \$color: \$scrollbar-color,
        \$color-bg: \$scrollbar-color-bg,
        \$size: \$scrollbar-size,
        \$border-radius: \$scrollbar-thumb-radius,
        \$thumb-border: \$scrollbar-thumb-border
    ) {
        &::-webkit-scrollbar {
            -webkit-appearance: none;

            &:vertical {
                width: \$size;
            }

            &:horizontal {
                height: \$size;
            }
        }

        &::-webkit-scrollbar-thumb {
            border-radius: \$border-radius;
            border: \$thumb-border; /* should match background, can't be transparent */
            background-color: \$color;
        }

        &::-webkit-scrollbar-track {
            background-color: \$color-bg;
            border-radius: \$border-radius;
        }
    }
";
    }

    // line 717
    public function block__style_book_components_animation_widget($context, array $blocks = array())
    {
        // line 718
        echo "    <div class=\"btn-group\">
        <button class=\"btn btn--default\" data-role=\"animate\" data-animation=\"fade-in\">Fade In</button>
        <button class=\"btn btn--default\" data-role=\"animate\" data-animation=\"fade-out\">Fade Out</button>
        <button class=\"btn btn--default\" data-role=\"animate\" data-animation=\"fade-in-down\">Fade In Down</button>
        <button class=\"btn btn--default\" data-role=\"animate\" data-animation=\"fade-in-up\">Fade In Up</button>
        <button class=\"btn btn--default\" data-role=\"animate\" data-animation=\"slide-in-down\">Slide In Down</button>
        <button class=\"btn btn--default\" data-role=\"animate\" data-animation=\"slide-in-up\">Slide In Up</button>
    </div>
    <div class=\"style-book-animation\" data-role=\"animate-me\"></div>

    <script>
        require(['jquery'], function(\$) {
            var \$animateMe = \$('[data-role=\"animate-me\"]');

            \$('[data-role=\"animate\"]').on({
                click: function() {
                    \$animateMe.addClass(\$(this).data('animation'));
                }
            });

            \$animateMe.on({
                'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend': function() {
                    \$(this).removeAttr('class').addClass('style-book-animation');
                }
            });
        });
    </script>
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
        return "OroFrontendBundle:layouts/blank/oro_frontend_style_book_group:components_config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1257 => 2,  1244 => 1,  1213 => 718,  1210 => 717,  1140 => 649,  1137 => 648,  935 => 448,  932 => 447,  879 => 396,  876 => 395,  853 => 374,  850 => 373,  843 => 369,  839 => 368,  835 => 367,  831 => 366,  827 => 365,  822 => 363,  817 => 361,  812 => 360,  809 => 359,  801 => 353,  795 => 350,  788 => 346,  783 => 344,  780 => 343,  777 => 342,  775 => 341,  771 => 339,  765 => 336,  758 => 332,  753 => 330,  750 => 329,  747 => 328,  745 => 327,  741 => 325,  735 => 322,  728 => 318,  723 => 316,  720 => 315,  717 => 314,  715 => 313,  711 => 311,  705 => 308,  698 => 304,  693 => 302,  690 => 301,  687 => 300,  685 => 299,  681 => 297,  675 => 294,  668 => 290,  663 => 288,  660 => 287,  657 => 286,  655 => 285,  651 => 283,  645 => 280,  638 => 276,  633 => 274,  630 => 273,  627 => 272,  625 => 271,  621 => 269,  615 => 266,  608 => 262,  603 => 260,  600 => 259,  597 => 258,  595 => 257,  591 => 255,  585 => 252,  578 => 248,  573 => 246,  570 => 245,  567 => 244,  565 => 243,  558 => 239,  553 => 237,  548 => 234,  545 => 233,  543 => 232,  539 => 230,  534 => 227,  528 => 224,  521 => 220,  516 => 218,  513 => 217,  510 => 216,  508 => 215,  504 => 213,  498 => 210,  491 => 206,  486 => 204,  483 => 203,  480 => 202,  478 => 201,  474 => 199,  468 => 196,  461 => 192,  456 => 190,  453 => 189,  450 => 188,  448 => 187,  444 => 185,  438 => 182,  431 => 178,  426 => 176,  423 => 175,  420 => 174,  418 => 173,  414 => 171,  408 => 168,  401 => 164,  396 => 162,  393 => 161,  390 => 160,  388 => 159,  384 => 157,  378 => 154,  371 => 150,  366 => 148,  363 => 147,  360 => 146,  358 => 145,  351 => 141,  346 => 139,  341 => 136,  338 => 135,  336 => 134,  332 => 132,  327 => 129,  321 => 126,  314 => 122,  309 => 120,  306 => 119,  303 => 118,  301 => 117,  297 => 115,  291 => 112,  284 => 108,  279 => 106,  276 => 105,  273 => 104,  271 => 103,  267 => 101,  261 => 98,  254 => 94,  249 => 92,  246 => 91,  243 => 90,  241 => 89,  234 => 85,  229 => 83,  224 => 80,  221 => 79,  219 => 78,  215 => 76,  210 => 73,  204 => 70,  197 => 66,  192 => 64,  189 => 63,  186 => 62,  184 => 61,  180 => 59,  174 => 56,  167 => 52,  162 => 50,  159 => 49,  156 => 48,  154 => 47,  150 => 45,  144 => 42,  137 => 38,  132 => 36,  129 => 35,  126 => 34,  124 => 33,  120 => 31,  114 => 28,  107 => 24,  102 => 22,  99 => 21,  96 => 20,  94 => 19,  87 => 15,  82 => 13,  77 => 10,  74 => 9,  72 => 8,  69 => 7,  66 => 6,  63 => 5,  59 => 717,  56 => 716,  54 => 648,  51 => 647,  49 => 447,  46 => 446,  44 => 395,  41 => 394,  39 => 373,  36 => 372,  34 => 359,  31 => 358,  29 => 5,  26 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank/oro_frontend_style_book_group:components_config.html.twig", "");
    }
}
