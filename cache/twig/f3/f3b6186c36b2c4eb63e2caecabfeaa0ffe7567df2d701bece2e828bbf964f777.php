<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* flex-objects/types/pages/edit.html.twig */
class __TwigTemplate_0c9c89748cb4143820c539dd654c0d54e0c003a537c69e91d1c123fb9797d91d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'back_button' => [$this, 'block_back_button'],
            'preview_button' => [$this, 'block_preview_button'],
            'delete_button' => [$this, 'block_delete_button'],
            'extra_buttons' => [$this, 'block_extra_buttons'],
            'save_button' => [$this, 'block_save_button'],
            'content_top' => [$this, 'block_content_top'],
            'topbar' => [$this, 'block_topbar'],
            'edit' => [$this, 'block_edit'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "flex-objects/types/default/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["form"] = (($context["form"]) ?? ($this->getAttribute(($context["object"] ?? null), "form", [0 => ((($this->getAttribute(($context["user"] ?? null), "authorize", [0 => "admin.super"], "method") && ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) != "0"))) ? ("raw") : (""))], "method")));
        // line 5
        $context["title"] = (($context["title"]) ?? (((($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method")) : (((($this->getAttribute(($context["object"] ?? null), "title", [], "any", true, true) &&  !(null === $this->getAttribute(($context["object"] ?? null), "title", [])))) ? ($this->getAttribute(($context["object"] ?? null), "title", [])) : (($context["key"] ?? null)))))));
        // line 6
        $context["parent"] = $this->getAttribute(($context["object"] ?? null), "parent", []);
        // line 7
        $context["can_read"] = (($context["can_read"]) ?? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->boolFilter((($this->getAttribute(($context["object"] ?? null), "exists", [])) ? ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "read", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) : ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))))));
        // line 8
        $context["can_copy"] = (($context["can_copy"]) ?? (($this->getAttribute(($context["parent"] ?? null), "exists", []) && $this->getAttribute(($context["parent"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))));
        // line 9
        $context["can_create"] = (($context["can_create"]) ?? (($this->getAttribute(($context["object"] ?? null), "exists", []) && $this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))));
        // line 10
        $context["can_save"] = (($context["can_save"]) ?? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->boolFilter((($this->getAttribute(($context["object"] ?? null), "exists", [])) ? ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "update", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) : ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))))));
        // line 11
        $context["can_move"] = ((($context["can_move"]) ?? (($context["can_save"] ?? null))) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "blueprint", []), "schema", []), "property", [0 => "route"], "method"), "type", []) === "parents"));
        // line 12
        $context["can_translate"] = (($context["can_translate"]) ?? ((($this->getAttribute(($context["admin"] ?? null), "multilang", []) && $this->getAttribute(($context["object"] ?? null), "hasFlexFeature", [0 => "page-translate"], "method")) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))));
        // line 17
        $context["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("flex-objects/types/default/edit.html.twig", "flex-objects/types/pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        $context["current_route"] = ("/" . $this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1], "method"));
        // line 21
        echo "
    ";
        // line 22
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 23
            echo "    ";
            $context["child"] = $this->getAttribute($this->getAttribute(($context["object"] ?? null), "children", []), "first", []);
            // line 24
            echo "    ";
            $context["prev"] = $this->getAttribute(($context["object"] ?? null), "prevSibling", []);
            // line 25
            echo "    ";
            $context["next"] = $this->getAttribute(($context["object"] ?? null), "nextSibling", []);
            // line 26
            echo "
    ";
            // line 27
            $context["parent_url"] = (((($context["parent"] ?? null) &&  !$this->getAttribute(($context["parent"] ?? null), "root", []))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(($context["back_route"] ?? null))) : (""));
            // line 28
            echo "    ";
            $context["child_url"] = (((($context["can_read"] ?? null) && ($context["child"] ?? null))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["current_route"] ?? null) . "/") . $this->getAttribute(($context["child"] ?? null), "slug", [])))) : (""));
            // line 29
            echo "    ";
            $context["prev_url"] = (((($context["can_read"] ?? null) && ($context["prev"] ?? null))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["back_route"] ?? null) . "/") . $this->getAttribute(($context["prev"] ?? null), "slug", [])))) : (""));
            // line 30
            echo "    ";
            $context["next_url"] = (((($context["can_read"] ?? null) && ($context["next"] ?? null))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["back_route"] ?? null) . "/") . $this->getAttribute(($context["next"] ?? null), "slug", [])))) : (""));
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        $context["back_url"] = (($context["back_url"]) ?? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc($this->getAttribute(($context["flex"] ?? null), "adminRoute", [0 => $this->getAttribute(($context["directory"] ?? null), "getFlexType", [], "method")], "method"))));
        // line 33
        echo "
    ";
        // line 34
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 37
    public function block_back_button($context, array $blocks = [])
    {
        // line 38
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), 1 => "flex-objects/types/pages/buttons/back.html.twig"], "flex-objects/types/pages/edit.html.twig", 38)->display(twig_array_merge($context, ["back_url" =>         // line 39
($context["back_url"] ?? null)]));
        // line 40
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 41
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-prev.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-prev.html.twig"], "flex-objects/types/pages/edit.html.twig", 41)->display(twig_array_merge($context, ["prev_url" =>             // line 42
($context["prev_url"] ?? null), "title" => $this->getAttribute(($context["prev"] ?? null), "route", [])]));
            // line 43
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-parent.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-parent.html.twig"], "flex-objects/types/pages/edit.html.twig", 43)->display(twig_array_merge($context, ["parent_url" =>             // line 44
($context["parent_url"] ?? null), "title" => $this->getAttribute(($context["parent"] ?? null), "route", [])]));
            // line 45
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-child.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-child.html.twig"], "flex-objects/types/pages/edit.html.twig", 45)->display(twig_array_merge($context, ["child_url" =>             // line 46
($context["child_url"] ?? null), "title" => $this->getAttribute(($context["child"] ?? null), "route", [])]));
            // line 47
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-next.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-next.html.twig"], "flex-objects/types/pages/edit.html.twig", 47)->display(twig_array_merge($context, ["next_url" =>             // line 48
($context["next_url"] ?? null), "title" => $this->getAttribute(($context["next"] ?? null), "route", [])]));
            // line 49
            echo "    ";
        }
    }

    // line 52
    public function block_preview_button($context, array $blocks = [])
    {
        // line 53
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))) {
            // line 54
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/preview.html.twig"), 1 => "flex-objects/types/pages/buttons/preview.html.twig"], "flex-objects/types/pages/edit.html.twig", 54)->display($context);
            // line 55
            echo "    ";
        }
    }

    // line 58
    public function block_delete_button($context, array $blocks = [])
    {
        // line 59
        echo "    ";
        // line 60
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 61
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/delete.html.twig"), 1 => "flex-objects/types/pages/buttons/delete.html.twig"], "flex-objects/types/pages/edit.html.twig", 61)->display($context);
            // line 62
            echo "    ";
        }
    }

    // line 65
    public function block_extra_buttons($context, array $blocks = [])
    {
        // line 66
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))) {
            // line 67
            echo "    ";
            if (($context["can_create"] ?? null)) {
                // line 68
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/add.html.twig"), 1 => "flex-objects/types/pages/buttons/add.html.twig"], "flex-objects/types/pages/edit.html.twig", 68)->display($context);
                // line 69
                echo "    ";
            }
            // line 70
            echo "    ";
            if (($context["can_copy"] ?? null)) {
                // line 71
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/copy.html.twig"), 1 => "flex-objects/types/pages/buttons/copy.html.twig"], "flex-objects/types/pages/edit.html.twig", 71)->display($context);
                // line 72
                echo "    ";
            }
            // line 73
            echo "    ";
            if (($context["can_move"] ?? null)) {
                // line 74
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/move.html.twig"), 1 => "flex-objects/types/pages/buttons/move.html.twig"], "flex-objects/types/pages/edit.html.twig", 74)->display($context);
                // line 75
                echo "    ";
            }
            // line 76
            echo "    ";
        }
    }

    // line 79
    public function block_save_button($context, array $blocks = [])
    {
        // line 80
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/save.html.twig"), 1 => "flex-objects/types/pages/buttons/save.html.twig"], "flex-objects/types/pages/edit.html.twig", 80)->display($context);
    }

    // line 83
    public function block_content_top($context, array $blocks = [])
    {
        // line 84
        echo "    ";
        if ((($context["allowed"] ?? null) && $this->getAttribute(($context["user"] ?? null), "authorize", [0 => "admin.super"], "method"))) {
            // line 85
            echo "    <div class=\"alert notice\">
        ";
            // line 86
            $context["save_location"] = (($this->getAttribute(($context["object"] ?? null), "getStorageFolder", [], "method")) ? ($this->getAttribute(($context["object"] ?? null), "getStorageFolder", [], "method")) : ($this->getAttribute(($context["directory"] ?? null), "getStorageFolder", [], "method")));
            // line 87
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_trim_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
            echo " ";
            echo (( !$this->getAttribute(($context["object"] ?? null), "exists", [])) ? ("[NEW]") : (""));
            echo "</b> (type: <b>";
            (($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "name"], "method")) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "getValue", [0 => "name"], "method"), "html", null, true))) : (print ("default")));
            echo "</b>)
    </div>
    ";
        }
        // line 90
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "flash", []), "exists", []))) {
            // line 91
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.EDITING_DRAFT"), "html", null, true);
            echo " <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESET"), "html", null, true);
            echo "</button>
        </div>
    ";
        }
        // line 95
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "exists", [])) {
            // line 96
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> ";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.NOT_CREATED_YET"), "html", null, true);
            echo "
        </div>
    ";
        } elseif (        // line 99
($context["can_translate"] ?? null)) {
            // line 100
            echo "        ";
            $context["is_default"] = (($context["language"] ?? null) === ($context["default_language"] ?? null));
            // line 101
            echo "        ";
            if ((($context["is_default"] ?? null) && twig_in_filter(($context["default_language"] ?? null), ($context["object_languages"] ?? null)))) {
                // line 102
                echo "            ";
                if (( !($context["translate_include_default"] ?? null) && $this->getAttribute(($context["object"] ?? null), "property", [0 => "lang"], "method"))) {
                    // line 103
                    echo "            ";
                    // line 104
                    echo "            <div class=\"alert secondary-accent\">
                ";
                    // line 105
                    $context["overrideLanguage"] = ((($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")) : (($context["object_language"] ?? null)));
                    // line 106
                    echo "                ";
                    echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_OVERRIDE", ($context["overrideLanguage"] ?? null), null);
                    echo "
                ";
                    // line 107
                    echo (($this->getAttribute(($context["object"] ?? null), "hasTranslation", [0 => "", 1 => false], "method")) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT")) : (""));
                    echo "
            </div>
            ";
                } elseif (                // line 109
($context["translate_include_default"] ?? null)) {
                    // line 110
                    echo "                ";
                    if ( !$this->getAttribute(($context["object"] ?? null), "property", [0 => "lang"], "method")) {
                        // line 111
                        echo "                    <div class=\"alert secondary-accent\">
                        ";
                        // line 112
                        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_DEFAULT");
                        echo "
                    </div>
                ";
                    } elseif ($this->getAttribute(                    // line 114
($context["object"] ?? null), "hasTranslation", [0 => "", 1 => false], "method")) {
                        // line 115
                        echo "                    <div class=\"alert secondary-accent\">
                        ";
                        // line 116
                        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT");
                        echo "
                    </div>
                ";
                    }
                    // line 119
                    echo "            ";
                }
                // line 120
                echo "        ";
            } elseif ( !($context["has_translation"] ?? null)) {
                // line 121
                echo "        <div class=\"alert warning\">
            ";
                // line 122
                $context["overrideLanguage"] = ((($this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array")) : (($context["object_language"] ?? null)));
                // line 123
                echo "            ";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.NOT_TRANSLATED_YET", ($context["overrideLanguage"] ?? null), null);
                echo "
            ";
                // line 124
                if ((($context["language"] ?? null) == ($context["object_language"] ?? null))) {
                    // line 125
                    echo "                ";
                    echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.NO_FALLBACK_FOUND");
                    echo "
            ";
                } else {
                    // line 127
                    echo "                ";
                    $context["overrideLanguage"] = ((($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")) : (($context["object_language"] ?? null)));
                    // line 128
                    echo "                ";
                    echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.FALLING_BACK", ($context["overrideLanguage"] ?? null), null);
                    echo "
            ";
                }
                // line 130
                echo "        </div>
        ";
            }
            // line 132
            echo "    ";
        }
    }

    // line 135
    public function block_topbar($context, array $blocks = [])
    {
        // line 136
        echo "    ";
        if (($context["can_translate"] ?? null)) {
            // line 137
            echo "        <div id=\"admin-lang-toggle\" class=\"button-group\">
            <button type=\"button\" class=\"button disabled\">
                <i class=\"fa fa-flag-o\"></i>
                ";
            // line 140
            echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")) : (($context["object_language"] ?? null))), "html", null, true);
            echo "
            </button>
            ";
            // line 142
            if ((count(($context["object_languages"] ?? null)) > $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->intFilter(twig_in_filter(($context["object_language"] ?? null), ($context["object_languages"] ?? null))))) {
                // line 143
                echo "                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu language-switcher\">
                ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["object_languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang_code"]) {
                    // line 148
                    echo "                    ";
                    if (($context["lang_code"] != ($context["object_language"] ?? null))) {
                        // line 149
                        echo "                    <li>
                        <a href=\"";
                        // line 150
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc($this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1], "method"), $context["lang_code"]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array")) : ($context["lang_code"])), "html", null, true);
                        echo "</a>
                    </li>
                    ";
                    }
                    // line 153
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_code'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "                </ul>
            ";
            }
            // line 156
            echo "        </div>
    ";
        }
        // line 158
        echo "
    ";
        // line 159
        if ($this->getAttribute(($context["user"] ?? null), "authorize", [0 => "admin.super"], "method")) {
            // line 160
            echo "    <form id=\"admin-mode-toggle\">
        ";
            // line 161
            $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
            // line 162
            echo "        ";
            $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
            // line 163
            echo "        ";
            $context["maxLen"] = max([0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))]);
            // line 164
            echo "        ";
            $context["normalText"] = $context["macro"]->getspanToggle(($context["normalText"] ?? null), ($context["maxLen"] ?? null));
            // line 165
            echo "        ";
            $context["expertText"] = $context["macro"]->getspanToggle(($context["expertText"] ?? null), ($context["maxLen"] ?? null));
            // line 166
            echo "
        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "normal"], "method"), "toString", [0 => true], "method"), "html", null, true);
            echo "\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
            if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0")) {
                echo " checked=\"checked\"";
            }
            echo ">
            <label for=\"normal\">";
            // line 169
            echo twig_escape_filter($this->env, ($context["normalText"] ?? null), "html", null, true);
            echo "</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "expert"], "method"), "toString", [0 => true], "method"), "html", null, true);
            echo "\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
            if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "1")) {
                echo " checked=\"checked\"";
            }
            echo ">
            <label for=\"expert\">";
            // line 171
            echo twig_escape_filter($this->env, ($context["expertText"] ?? null), "html", null, true);
            echo "</label>
            <a></a>
        </div>
    </form>
    ";
        }
    }

    // line 178
    public function block_edit($context, array $blocks = [])
    {
        // line 179
        echo "    ";
        $this->loadTemplate("partials/blueprints.html.twig", "flex-objects/types/pages/edit.html.twig", 179)->display(twig_array_merge($context, ["context" => ($context["object"] ?? null), "data" => ($context["object"] ?? null), "blueprints" => $this->getAttribute(($context["form"] ?? null), "blueprint", [])]));
    }

    // line 182
    public function block_content($context, array $blocks = [])
    {
        // line 183
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    ";
        // line 185
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "flex-objects/types/pages/edit.html.twig", 185)->display($context);
        // line 186
        echo "
    ";
        // line 187
        if ($this->getAttribute(($context["object"] ?? null), "exists", [])) {
            // line 188
            echo "        ";
            $context["modal_data"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->dataFunc(["route" => ("/" . $this->getAttribute(            // line 189
($context["object"] ?? null), "key", [])), "name" => ((($this->getAttribute($this->getAttribute(            // line 190
($context["object"] ?? null), "header", [], "any", false, true), "child_type", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["object"] ?? null), "header", [], "any", false, true), "child_type", [])))) ? ($this->getAttribute($this->getAttribute(($context["object"] ?? null), "header", [], "any", false, true), "child_type", [])) : (null))]);
            // line 192
            echo "
        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 194
            $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/edit.html.twig", 194)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-page"]));
            // line 195
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 198
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "flex-objects/types/pages/edit.html.twig", 198)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new_folder"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-folder"]));
            // line 199
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 202
            $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/edit.html.twig", 202)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/modular_new"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-module"]));
            // line 203
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-page-copy\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 206
            $this->loadTemplate("partials/blueprints-copy.html.twig", "flex-objects/types/pages/edit.html.twig", 206)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/copy"], "method"), "data" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->dataFunc(["title" => ($this->getAttribute(($context["object"] ?? null), "title", []) . " (Copy)"), "folder" => ($this->getAttribute(($context["object"] ?? null), "slug", []) . "-copy")]), "form_id" => "copy"]));
            // line 207
            echo "        </div>
    ";
        }
        // line 209
        echo "
    ";
        // line 211
        echo "
    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.PARENTS"), "html", null, true);
        echo "</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.LOADING"), "html", null, true);
        echo "</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

";
    }

    // line 226
    public function block_bottom($context, array $blocks = [])
    {
        // line 227
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
";
    }

    // line 14
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 15
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 15,  586 => 14,  576 => 227,  573 => 226,  563 => 219,  559 => 218,  553 => 215,  549 => 214,  544 => 211,  541 => 209,  537 => 207,  535 => 206,  530 => 203,  528 => 202,  523 => 199,  521 => 198,  516 => 195,  514 => 194,  510 => 192,  508 => 190,  507 => 189,  505 => 188,  503 => 187,  500 => 186,  498 => 185,  492 => 183,  489 => 182,  484 => 179,  481 => 178,  471 => 171,  463 => 170,  459 => 169,  451 => 168,  447 => 166,  444 => 165,  441 => 164,  438 => 163,  435 => 162,  433 => 161,  430 => 160,  428 => 159,  425 => 158,  421 => 156,  417 => 154,  411 => 153,  403 => 150,  400 => 149,  397 => 148,  393 => 147,  387 => 143,  385 => 142,  380 => 140,  375 => 137,  372 => 136,  369 => 135,  364 => 132,  360 => 130,  354 => 128,  351 => 127,  345 => 125,  343 => 124,  338 => 123,  336 => 122,  333 => 121,  330 => 120,  327 => 119,  321 => 116,  318 => 115,  316 => 114,  311 => 112,  308 => 111,  305 => 110,  303 => 109,  298 => 107,  293 => 106,  291 => 105,  288 => 104,  286 => 103,  283 => 102,  280 => 101,  277 => 100,  275 => 99,  270 => 97,  267 => 96,  264 => 95,  256 => 92,  253 => 91,  250 => 90,  237 => 87,  235 => 86,  232 => 85,  229 => 84,  226 => 83,  221 => 80,  218 => 79,  213 => 76,  210 => 75,  207 => 74,  204 => 73,  201 => 72,  198 => 71,  195 => 70,  192 => 69,  189 => 68,  186 => 67,  183 => 66,  180 => 65,  175 => 62,  172 => 61,  169 => 60,  167 => 59,  164 => 58,  159 => 55,  156 => 54,  153 => 53,  150 => 52,  145 => 49,  143 => 48,  141 => 47,  139 => 46,  137 => 45,  135 => 44,  133 => 43,  131 => 42,  129 => 41,  126 => 40,  124 => 39,  122 => 38,  119 => 37,  113 => 34,  110 => 33,  107 => 32,  104 => 31,  101 => 30,  98 => 29,  95 => 28,  93 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  65 => 1,  63 => 17,  61 => 12,  59 => 11,  57 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 3,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'flex-objects/types/default/edit.html.twig' %}

{% set form = form ?? object.form(user.authorize('admin.super') and admin.session.expert != '0' ? 'raw') %}

{% set title = title ?? form.getValue('header.title') ?? object.title ?? key %}
{% set parent = object.parent %}
{% set can_read = can_read ?? (object.exists ? object.isAuthorized('read', 'admin', user) : object.isAuthorized('create', 'admin', user))|bool %}
{% set can_copy = can_copy ?? (parent.exists and parent.isAuthorized('create', 'admin', user)) %}
{% set can_create = can_create ?? (object.exists and object.isAuthorized('create', 'admin', user)) %}
{% set can_save = can_save ?? (object.exists ? object.isAuthorized('update', 'admin', user) : object.isAuthorized('create', 'admin', user))|bool %}
{% set can_move = can_move ?? can_save and form.blueprint.schema.property('route').type is same as('parents') %}
{% set can_translate = can_translate ?? (admin.multilang and object.hasFlexFeature('page-translate') and not object.root()) %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}
{% import _self as macro %}

{% block body %}
    {% set current_route = '/' ~ route.getRoute(1) %}

    {% if not object.root() %}
    {% set child = object.children.first %}
    {% set prev = object.prevSibling %}
    {% set next = object.nextSibling %}

    {% set parent_url = parent and not parent.root ? admin_route(back_route) %}
    {% set child_url = can_read and child ? admin_route(current_route ~ '/' ~ child.slug) %}
    {% set prev_url = can_read and prev ? admin_route(back_route ~ '/' ~ prev.slug) %}
    {% set next_url = can_read and next ? admin_route(back_route ~ '/' ~ next.slug) %}
    {% endif %}
    {% set back_url = back_url ?? admin_route(flex.adminRoute(directory.getFlexType())) %}

    {{ parent() }}
{% endblock body %}

{% block back_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/back.html.twig', 'flex-objects/types/pages/buttons/back.html.twig']
        with { back_url: back_url } %}
    {% if not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-prev.html.twig', 'flex-objects/types/pages/buttons/nav-prev.html.twig']
        with { prev_url: prev_url, title: prev.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-parent.html.twig', 'flex-objects/types/pages/buttons/nav-parent.html.twig']
        with { parent_url: parent_url, title: parent.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-child.html.twig', 'flex-objects/types/pages/buttons/nav-child.html.twig']
        with { child_url: child_url, title: child.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-next.html.twig', 'flex-objects/types/pages/buttons/nav-next.html.twig']
        with { next_url: next_url, title: next.route } %}
    {% endif %}
{% endblock back_button %}

{% block preview_button %}
    {% if object.exists and not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/preview.html.twig', 'flex-objects/types/pages/buttons/preview.html.twig'] %}
    {% endif %}
{% endblock preview_button %}

{% block delete_button %}
    {# FIXME: add support for deleting root file only #}
    {% if not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/delete.html.twig', 'flex-objects/types/pages/buttons/delete.html.twig'] %}
    {% endif %}
{% endblock delete_button %}

{% block extra_buttons %}
    {% if object.exists and not object.root() %}
    {% if can_create %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/add.html.twig', 'flex-objects/types/pages/buttons/add.html.twig'] %}
    {% endif %}
    {% if can_copy %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/copy.html.twig', 'flex-objects/types/pages/buttons/copy.html.twig'] %}
    {% endif %}
    {% if can_move %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/move.html.twig', 'flex-objects/types/pages/buttons/move.html.twig'] %}
    {% endif %}
    {% endif %}
{% endblock extra_buttons %}

{% block save_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/save.html.twig', 'flex-objects/types/pages/buttons/save.html.twig'] %}
{% endblock save_button %}

{% block content_top %}
    {% if allowed and user.authorize('admin.super') %}
    <div class=\"alert notice\">
        {% set save_location = object.getStorageFolder() ?: directory.getStorageFolder() %}
        {{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ url(save_location, false, true)|trim('/') }} {{ not object.exists ? '[NEW]' }}</b> (type: <b>{{ (form.getValue('name') ?: 'default') }}</b>)
    </div>
    {% endif %}
    {% if object.exists and form.flash.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> {{ 'PLUGIN_FLEX_OBJECTS.STATE.EDITING_DRAFT'|tu }} <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">{{ \"PLUGIN_ADMIN.RESET\"|tu }}</button>
        </div>
    {% endif %}
    {% if not object.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> {{ 'PLUGIN_FLEX_OBJECTS.STATE.NOT_CREATED_YET'|tu }}
        </div>
    {% elseif can_translate %}
        {% set is_default = language is same as(default_language) %}
        {% if is_default and default_language in object_languages %}
            {% if not translate_include_default and object.property('lang') %}
            {# Handle default language extension #}
            <div class=\"alert secondary-accent\">
                {% set overrideLanguage = all_languages[object_language] ?? object_language %}
                {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_OVERRIDE'|tu(overrideLanguage, null)|raw }}
                {{ object.hasTranslation('', false) ? 'PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT'|tu|raw }}
            </div>
            {% elseif translate_include_default %}
                {%  if not object.property('lang') %}
                    <div class=\"alert secondary-accent\">
                        {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_DEFAULT'|tu|raw }}
                    </div>
                {% elseif object.hasTranslation('', false) %}
                    <div class=\"alert secondary-accent\">
                        {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT'|tu|raw }}
                    </div>
                {% endif %}
            {% endif %}
        {% elseif not has_translation %}
        <div class=\"alert warning\">
            {% set overrideLanguage = all_languages[language] ?? object_language %}
            {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.NOT_TRANSLATED_YET'|tu(overrideLanguage, null)|raw }}
            {% if language == object_language %}
                {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.NO_FALLBACK_FOUND'|tu|raw }}
            {% else %}
                {% set overrideLanguage = all_languages[object_language] ?? object_language %}
                {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.FALLING_BACK'|tu(overrideLanguage, null)|raw }}
            {% endif %}
        </div>
        {% endif %}
    {% endif %}
{% endblock content_top %}

{% block topbar %}
    {% if can_translate %}
        <div id=\"admin-lang-toggle\" class=\"button-group\">
            <button type=\"button\" class=\"button disabled\">
                <i class=\"fa fa-flag-o\"></i>
                {{ all_languages[object_language] ?? object_language }}
            </button>
            {% if count(object_languages) > (object_language in object_languages)|int %}
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu language-switcher\">
                {% for lang_code in object_languages %}
                    {% if lang_code != object_language %}
                    <li>
                        <a href=\"{{ admin_route(route.getRoute(1), lang_code) }}\">{{ all_languages[lang_code] ?? lang_code }}</a>
                    </li>
                    {% endif %}
                {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}

    {% if user.authorize('admin.super') %}
    <form id=\"admin-mode-toggle\">
        {% set normalText = 'PLUGIN_ADMIN.NORMAL'|tu %}
        {% set expertText = 'PLUGIN_ADMIN.EXPERT'|tu %}
        {% set maxLen = max([normalText|length, expertText|length]) %}
        {% set normalText = macro.spanToggle(normalText, maxLen) %}
        {% set expertText = macro.spanToggle(expertText, maxLen) %}

        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ route.withGravParam('mode', 'normal').toString(true) }}\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
            <label for=\"normal\">{{ normalText }}</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ route.withGravParam('mode', 'expert').toString(true) }}\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
            <label for=\"expert\">{{ expertText }}</label>
            <a></a>
        </div>
    </form>
    {% endif %}
{% endblock topbar %}

{% block edit %}
    {% include 'partials/blueprints.html.twig' with { context: object, data: object, blueprints: form.blueprint } %}
{% endblock edit %}

{% block content %}
    {{ parent() }}

    {% include 'partials/modal-changes-detected.html.twig' %}

    {% if object.exists %}
        {% set modal_data = data({
            route: '/' ~ object.key,
            name: object.header.child_type ?? null
        }) %}

        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            {% include 'partials/blueprints-new.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/new'), data: modal_data, form_id: 'new-page' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new-folder.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/new_folder'), data: modal_data, form_id: 'new-folder' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            {% include 'partials/blueprints-new.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/modular_new'), data: modal_data, form_id: 'new-module' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-page-copy\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            {% include 'partials/blueprints-copy.html.twig' with { blueprints: admin.blueprints('admin/pages/copy'), data: data({ title: object.title ~ ' (Copy)', folder: object.slug ~ '-copy' }), form_id: 'copy' } %}
        </div>
    {% endif %}

    {# TODO: regular pages support extra modals from admin config #}

    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>{{ 'PLUGIN_FLEX_OBJECTS.PARENTS'|tu }}</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">{{ 'PLUGIN_FLEX_OBJECTS.STATE.LOADING'|tu }}</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

{% endblock content %}

{% block bottom %}
    {{ parent() }}
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
{% endblock bottom %}
", "flex-objects/types/pages/edit.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\edit.html.twig");
    }
}
