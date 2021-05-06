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

/* partials/themes-details.html.twig */
class __TwigTemplate_271caa86df5a0f9b835608396d0d5a95c2f3fa80b401acea28b786b358c1682c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["gpm"] = $this->getAttribute(($context["admin"] ?? null), "gpm", [], "method");
        // line 2
        $context["installed"] = $this->getAttribute(($context["gpm"] ?? null), "isThemeInstalled", [0 => $this->getAttribute(($context["admin"] ?? null), "route", [])], "method");
        // line 3
        $context["isTestingRelease"] = $this->getAttribute(($context["gpm"] ?? null), "isTestingRelease", [0 => $this->getAttribute(($context["theme"] ?? null), "slug", [])], "method");
        // line 4
        $context["gumroad_loaded"] = false;
        // line 5
        echo "
<div class=\"grav-update theme\" data-gpm-theme=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "route", []), "html", null, true);
        echo "\">
</div>

<h1>
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "name", []));
        echo "
    ";
        // line 11
        if ($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", [0 => ($context["theme"] ?? null)], "method")) {
            // line 12
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_THEME"), "html", null, true);
            echo "\"></i></span></small>
    ";
        }
        // line 14
        echo "    ";
        if ($this->getAttribute(($context["admin"] ?? null), "isPremiumProduct", [0 => ($context["theme"] ?? null)], "method")) {
            // line 15
            echo "        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
            echo "</span></small>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute(($context["theme"] ?? null), "symlink", [])) {
            // line 18
            echo "    <small class=\"hint--bottom\"  data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"), "html", null, true);
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 22
        echo "    <small>";
        (($this->getAttribute(($context["theme"] ?? null), "version", [])) ? (print (twig_escape_filter($this->env, ("v" . twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "version", []))), "html", null, true))) : (print ("")));
        echo "</small>
    ";
        // line 23
        if (($context["isTestingRelease"] ?? null)) {
            echo "<span class=\"gpm-testing\">test release</span>";
        }
        // line 24
        echo "</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "icon", []), "html", null, true);
        echo "\"></i>
    <table>
        ";
        // line 28
        if ($this->getAttribute(($context["theme"] ?? null), "version", [])) {
            // line 29
            echo "        <tr>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VERSION"), "html", null, true);
            echo ":</td>
            <td class=\"double\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "version", []), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 34
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "author", [])) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AUTHOR"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                    ";
            // line 38
            if ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "url", [])) {
                // line 39
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "url", []), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "name", []), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 41
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "name", []), "html", null, true);
                echo "
                    ";
            }
            // line 43
            echo "                    ";
            if ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", [])) {
                // line 44
                echo "                         - <a href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", []), "html", null, true);
                echo "</a>
                    ";
            }
            // line 46
            echo "                </td>
            </tr>
        ";
        }
        // line 49
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "homepage", [])) {
            // line 50
            echo "        <tr>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.HOMEPAGE"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "homepage", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "homepage", []), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 55
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "demo", [])) {
            // line 56
            echo "        <tr>
            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEMO"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "demo", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "demo", []), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 61
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "bugs", [])) {
            // line 62
            echo "            <tr>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BUG_TRACKER"), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "bugs", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "bugs", []), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 67
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "keywords", [])) {
            // line 68
            echo "            <tr>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.KEYWORDS"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                   ";
            // line 71
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["theme"] ?? null), "keywords", []), ", "), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        // line 75
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "license", [])) {
            // line 76
            echo "            <tr>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LICENSE"), "html", null, true);
            echo ":</td>
                ";
            // line 78
            if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->startsWithFilter($this->getAttribute(($context["theme"] ?? null), "license", []), "http")) {
                // line 79
                echo "                    <td class=\"double\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "license", []), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "license", []), "html", null, true);
                echo "</a></td>
                ";
            } else {
                // line 81
                echo "                    <td class=\"double\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "license", []), "html", null, true);
                echo "</td>
                ";
            }
            // line 83
            echo "            </tr>
        ";
        }
        // line 85
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "description", [])) {
            // line 86
            echo "            <tr>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DESCRIPTION"), "html", null, true);
            echo ":</td>
                <td class=\"double\">";
            // line 88
            echo $this->getAttribute(($context["theme"] ?? null), "description_html", []);
            echo "</td>
            </tr>
        ";
        }
        // line 91
        echo "
        ";
        // line 92
        if (($this->getAttribute(($context["theme"] ?? null), "readme", []) || $this->getAttribute(($context["theme"] ?? null), "homepage", []))) {
            // line 93
            echo "            ";
            $context["readme_link"] = (($this->getAttribute(($context["theme"] ?? null), "readme", [])) ? ($this->getAttribute(($context["theme"] ?? null), "readme", [])) : ((($this->getAttribute(($context["theme"] ?? null), "docs", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["theme"] ?? null), "docs", []), ($this->getAttribute(($context["theme"] ?? null), "homepage", []) . "/blob/master/README.md"))) : (($this->getAttribute(($context["theme"] ?? null), "homepage", []) . "/blob/master/README.md")))));
            // line 94
            echo "            <tr>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["theme"] ?? null), "readme", [])) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.README")) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DOCS"))), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 99
        echo "
        ";
        // line 100
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", []), "findPackage", [0 => $this->getAttribute(($context["theme"] ?? null), "slug", []), 1 => true], "method"), "changelog", [])) {
            // line 101
            echo "        <tr>
            <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHANGELOG"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a class=\"button button-small\" href=\"#\" data-remodal-target=\"changelog\" data-remodal-changelog=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/changelog/slug:" . $this->getAttribute(($context["theme"] ?? null), "slug", []))), "html", null, true);
            echo "\"><i class=\"fa fa-binoculars\"></i> View Changelog</a></td>
        </tr>
        ";
        }
        // line 106
        echo "    </table>
</div>

";
        // line 109
        if (($context["installed"] ?? null)) {
            // line 110
            echo "    ";
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("themes/" . $this->getAttribute(($context["admin"] ?? null), "route", []))], "method");
            // line 111
            echo "    ";
            $this->loadTemplate("partials/blueprints.html.twig", "partials/themes-details.html.twig", 111)->display(twig_array_merge($context, ["data" => ($context["data"] ?? null), "blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", [])]));
            // line 112
            echo "
    ";
            // line 113
            if (($this->getAttribute(($context["config"] ?? null), "get", [0 => "system.pages.theme"], "method") != $this->getAttribute(($context["admin"] ?? null), "route", []))) {
                // line 114
                echo "    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        ";
                // line 116
                if ( !$this->getAttribute(($context["theme"] ?? null), "symlink", [])) {
                    // line 117
                    echo "            <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REINSTALL_THEME"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 119
                echo "        <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REMOVE_THEME"), "html", null, true);
                echo "</a>
    </div>
    ";
            }
        } else {
            // line 123
            echo "    <div class=\"button-bar success\">
        ";
            // line 124
            if (($this->getAttribute(($context["theme"] ?? null), "premium", []) &&  !$this->getAttribute(($context["admin"] ?? null), "license", [0 => $this->getAttribute(($context["theme"] ?? null), "slug", [])], "method"))) {
                // line 125
                echo "            ";
                if ( !($context["gumroad_loaded"] ?? null)) {
                    // line 126
                    echo "                ";
                    $context["gumroad_loaded"] = true;
                    // line 127
                    echo "                <script src=\"//gumroad.com/js/gumroad.js\"></script>
            ";
                }
                // line 129
                echo "            <a class=\"gumroad-button button\" href=\"https://gum.co/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "premium", []), "permalink", []), "html", null, true);
                echo "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "premium", [], "any", false, true), "button", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "premium", [], "any", false, true), "button", []), "Purchase")) : ("Purchase")), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 131
                echo "            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "slug", []), "html", null, true);
                echo "\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL_THEME"), "html", null, true);
                echo "</a>
        ";
            }
            // line 133
            echo "    </div>
";
        }
        // line 135
        echo "
";
        // line 136
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/themes-details.html.twig", 136)->display($context);
        // line 137
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/themes-details.html.twig", 137)->display(twig_array_merge($context, ["type" => "theme"]));
        // line 138
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/themes-details.html.twig", 138)->display(twig_array_merge($context, ["type" => "theme"]));
        // line 139
        $this->loadTemplate("partials/modal-remove-package.html.twig", "partials/themes-details.html.twig", 139)->display(twig_array_merge($context, ["type" => "theme", "package" => ($context["theme"] ?? null)]));
        // line 140
        $this->loadTemplate("partials/modal-reinstall-package.html.twig", "partials/themes-details.html.twig", 140)->display(twig_array_merge($context, ["type" => "theme", "package" => ($context["theme"] ?? null)]));
        // line 141
        $this->loadTemplate("partials/modal-changelog.html.twig", "partials/themes-details.html.twig", 141)->display(twig_array_merge($context, ["package" => ($context["theme"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "partials/themes-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 141,  399 => 140,  397 => 139,  395 => 138,  393 => 137,  391 => 136,  388 => 135,  384 => 133,  376 => 131,  368 => 129,  364 => 127,  361 => 126,  358 => 125,  356 => 124,  353 => 123,  345 => 119,  339 => 117,  337 => 116,  333 => 114,  331 => 113,  328 => 112,  325 => 111,  322 => 110,  320 => 109,  315 => 106,  309 => 103,  305 => 102,  302 => 101,  300 => 100,  297 => 99,  289 => 96,  285 => 95,  282 => 94,  279 => 93,  277 => 92,  274 => 91,  268 => 88,  264 => 87,  261 => 86,  258 => 85,  254 => 83,  248 => 81,  240 => 79,  238 => 78,  234 => 77,  231 => 76,  228 => 75,  221 => 71,  216 => 69,  213 => 68,  210 => 67,  202 => 64,  198 => 63,  195 => 62,  192 => 61,  184 => 58,  180 => 57,  177 => 56,  174 => 55,  166 => 52,  162 => 51,  159 => 50,  156 => 49,  151 => 46,  143 => 44,  140 => 43,  134 => 41,  126 => 39,  124 => 38,  119 => 36,  116 => 35,  113 => 34,  107 => 31,  103 => 30,  100 => 29,  98 => 28,  93 => 26,  89 => 24,  85 => 23,  80 => 22,  72 => 18,  69 => 17,  63 => 15,  60 => 14,  54 => 12,  52 => 11,  48 => 10,  41 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set gpm = admin.gpm() %}
{% set installed = gpm.isThemeInstalled(admin.route) %}
{% set isTestingRelease = gpm.isTestingRelease(theme.slug) %}
{% set gumroad_loaded = false %}

<div class=\"grav-update theme\" data-gpm-theme=\"{{ admin.route }}\">
</div>

<h1>
    {{ theme.name|e }}
    {% if admin.isTeamGrav(theme) %}
        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_THEME\"|tu }}\"></i></span></small>
    {% endif %}
    {% if admin.isPremiumProduct(theme) %}
        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> {{ \"PLUGIN_ADMIN.PREMIUM_PRODUCT\"|tu }}</span></small>
    {% endif %}
    {% if theme.symlink %}
    <small class=\"hint--bottom\"  data-hint=\"{{ \"PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED\"|tu }}\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    {% endif %}
    <small>{{ theme.version ? 'v' ~ theme.version|e }}</small>
    {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-{{  theme.icon }}\"></i>
    <table>
        {% if theme.version %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.VERSION\"|tu }}:</td>
            <td class=\"double\">{{ theme.version }}</td>
        </tr>
        {% endif %}
        {% if theme.author %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.AUTHOR\"|tu }}:</td>
                <td class=\"double\">
                    {% if theme.author.url %}
                        <a href=\"{{ theme.author.url }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.author.name }}</a>
                    {% else %}
                        {{ theme.author.name }}
                    {% endif %}
                    {% if theme.author.email %}
                         - <a href=\"mailto:{{ theme.author.email }}\">{{ theme.author.email }}</a>
                    {% endif %}
                </td>
            </tr>
        {% endif %}
        {% if theme.homepage %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.HOMEPAGE\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ theme.homepage }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.homepage }}</a></td>
        </tr>
        {% endif %}
        {% if theme.demo %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.DEMO\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ theme.demo }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.demo }}</a></td>
        </tr>
        {% endif %}
        {% if theme.bugs %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.BUG_TRACKER\"|tu }}:</td>
                <td class=\"double\"><a href=\"{{ theme.bugs }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.bugs }}</a></td>
            </tr>
        {% endif %}
        {% if theme.keywords %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.KEYWORDS\"|tu }}:</td>
                <td class=\"double\">
                   {{ theme.keywords|join(', ') }}
                </td>
            </tr>
        {% endif %}
        {% if theme.license %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.LICENSE\"|tu }}:</td>
                {% if theme.license|starts_with('http') %}
                    <td class=\"double\"><a href=\"{{ theme.license }}\" target=\"_blank\">{{ theme.license }}</a></td>
                {% else %}
                    <td class=\"double\">{{ theme.license }}</td>
                {% endif %}
            </tr>
        {% endif %}
        {% if theme.description %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.DESCRIPTION\"|tu }}:</td>
                <td class=\"double\">{{ theme.description_html|raw }}</td>
            </tr>
        {% endif %}

        {% if theme.readme or theme.homepage %}
            {% set readme_link = theme.readme ?: theme.docs|default(theme.homepage ~ '/blob/master/README.md') %}
            <tr>
                <td>{{ theme.readme ? \"PLUGIN_ADMIN.README\"|tu : \"PLUGIN_ADMIN.DOCS\"|tu }}:</td>
                <td class=\"double\"><a href=\"{{ readme_link }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ readme_link }}</a></td>
            </tr>
        {% endif %}

        {% if admin.gpm.findPackage(theme.slug, true).changelog %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.CHANGELOG\"|tu }}:</td>
            <td class=\"double\"><a class=\"button button-small\" href=\"#\" data-remodal-target=\"changelog\" data-remodal-changelog=\"{{ admin_route('/changelog/slug:' ~ theme.slug) }}\"><i class=\"fa fa-binoculars\"></i> View Changelog</a></td>
        </tr>
        {% endif %}
    </table>
</div>

{% if (installed) %}
    {% set data = admin.data('themes/' ~ admin.route) %}
    {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}

    {% if (config.get('system.pages.theme') != admin.route) %}
    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        {% if not theme.symlink %}
            <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> {{ \"PLUGIN_ADMIN.REINSTALL_THEME\"|tu }}</a>
        {% endif %}
        <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> {{ \"PLUGIN_ADMIN.REMOVE_THEME\"|tu }}</a>
    </div>
    {% endif %}
{% else %}
    <div class=\"button-bar success\">
        {% if (theme.premium and not admin.license(theme.slug)) %}
            {% if not gumroad_loaded %}
                {% set gumroad_loaded = true %}
                <script src=\"//gumroad.com/js/gumroad.js\"></script>
            {% endif %}
            <a class=\"gumroad-button button\" href=\"https://gum.co/{{ theme.premium.permalink }}\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> {{ theme.premium.button|default('Purchase') }}</a>
        {% else %}
            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ theme.slug }}\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL_THEME\"|tu }}</a>
        {% endif %}
    </div>
{% endif %}

{% include 'partials/modal-changes-detected.html.twig' %}
{% include 'partials/modal-add-package.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-remove-package.html.twig' with { type: 'theme', package: theme } %}
{% include 'partials/modal-reinstall-package.html.twig' with { type: 'theme', package: theme } %}
{% include 'partials/modal-changelog.html.twig' with { package: theme} %}
", "partials/themes-details.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\themes-details.html.twig");
    }
}
