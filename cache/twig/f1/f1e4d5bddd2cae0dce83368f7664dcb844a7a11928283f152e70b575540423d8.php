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

/* modular_alt.html.twig */
class __TwigTemplate_ce14e93c658224a8285b7ba5916f8f62cbdd09359ccd7de77b327352d7cd39f4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'bottom' => [$this, 'block_bottom'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", []) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", [])));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular_alt.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_javascripts($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 8
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/singlePageNav.min.js"], "method");
            // line 9
            echo "    ";
        }
        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_bottom($context, array $blocks = [])
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    ";
        // line 15
        if (($context["show_onpage_menu"] ?? null)) {
            // line 16
            echo "        <script>
        // singlePageNav initialization & configuration
        \$('#navbar').singlePageNav({
            offset: \$('#header').outerHeight(),
            filter: ':not(.external)',
            updateHash: true,
            currentClass: 'active'
        });
        </script>
    ";
        }
    }

    // line 28
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 29
        echo "    ";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 30
            echo "        <ul class=\"navigation\">
        ";
            // line 49
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
                // line 50
                echo "            ";
                echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
                echo "
        ";
            } else {
                // line 52
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 53
                    echo "                ";
                    if ($this->getAttribute($context["page"], "visible", [])) {
                        // line 54
                        echo "                    ";
                        $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                        // line 55
                        echo "                    <li class=\"";
                        echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                        echo "\">
                        <a href=\"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                        echo "\" class=\"external\">
                            ";
                        // line 57
                        if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                            echo "<i class=\"fa fa-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []), "html", null, true);
                            echo "\"></i>";
                        }
                        // line 58
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                        echo "

                        </a>
                    </li>
                ";
                    }
                    // line 63
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "        ";
            }
            // line 65
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 66
                echo "            <li>
                <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []), "html", null, true);
                echo "\">
                    ";
                // line 68
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []), "html", null, true);
                    echo "\"></i>";
                }
                // line 69
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "text", []), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 75
                echo "            ";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", []) || $this->getAttribute($context["module"], "activeChild", []))) ? ("active") : (""));
                // line 76
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, ($context["current_module"] ?? null), "html", null, true);
                echo "\"><a href=\"#";
                echo $this->getAttribute($this, "pageLinkName", [0 => $this->getAttribute($context["module"], "menu", [])], "method");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "menu", []), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "         </ul>
    ";
        } else {
            // line 80
            echo "        ";
            $this->displayParentBlock("header_navigation", $context, $blocks);
            echo "
    ";
        }
    }

    // line 84
    public function block_content($context, array $blocks = [])
    {
        // line 85
        echo "    ";
        $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 86
        echo "    ";
        if (($context["blog_image"] ?? null)) {
            // line 87
            echo "    <div class=\"flush-top blog-header blog-header-image\" style=\"background: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bg_color", []), "html", null, true);
            echo " url(";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["blog_image"] ?? null), "url", []), "html", null, true);
            echo ") no-repeat right;\">
    <h1>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h1>
    </div>
    ";
        }
        // line 91
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 93
            echo "        <div id=\"";
            echo $this->getAttribute($this, "pageLinkName", [0 => $this->getAttribute($context["module"], "menu", [])], "method");
            echo "\"></div>
        ";
            // line 94
            echo $this->getAttribute($context["module"], "content", []);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            echo twig_escape_filter($this->env, twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), [" " => "_"]), "html", null, true);
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 32
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 33
                echo "            ";
                if ($this->getAttribute($context["p"], "visible", [])) {
                    // line 34
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                    // line 35
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                    echo "\">
                    <a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                    echo "\" class=\"external\">
                        ";
                    // line 37
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 38
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                    echo "
                    </a>
                    ";
                    // line 40
                    if (($this->getAttribute($this->getAttribute($context["p"], "children", []), "count", []) > 0)) {
                        // line 41
                        echo "                        <ul>
                            ";
                        // line 42
                        echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                        echo "
                        </ul>
                    ";
                    }
                    // line 45
                    echo "                </li>
            ";
                }
                // line 47
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
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
        return "modular_alt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 48,  345 => 47,  341 => 45,  335 => 42,  332 => 41,  330 => 40,  324 => 38,  318 => 37,  314 => 36,  309 => 35,  306 => 34,  303 => 33,  298 => 32,  286 => 31,  260 => 4,  250 => 94,  245 => 93,  241 => 92,  236 => 91,  230 => 88,  223 => 87,  220 => 86,  217 => 85,  214 => 84,  206 => 80,  202 => 78,  189 => 76,  186 => 75,  182 => 74,  179 => 73,  168 => 69,  162 => 68,  158 => 67,  155 => 66,  150 => 65,  147 => 64,  141 => 63,  132 => 58,  126 => 57,  122 => 56,  117 => 55,  114 => 54,  111 => 53,  106 => 52,  100 => 50,  97 => 49,  94 => 30,  91 => 29,  88 => 28,  74 => 16,  72 => 15,  67 => 14,  64 => 13,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  40 => 1,  38 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

{% block javascripts %}
    {% if show_onpage_menu %}
        {% do assets.add('theme://js/singlePageNav.min.js') %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block bottom %}
    {{ parent() }}
    {% if show_onpage_menu %}
        <script>
        // singlePageNav initialization & configuration
        \$('#navbar').singlePageNav({
            offset: \$('#header').outerHeight(),
            filter: ':not(.external)',
            updateHash: true,
            currentClass: 'active'
        });
        </script>
    {% endif %}
{% endblock %}

{% block header_navigation %}
    {% if show_onpage_menu %}
        <ul class=\"navigation\">
        {% macro loop(page) %}
        {% for p in page.children %}
            {% if p.visible %}
                {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ p.url }}\" class=\"external\">
                        {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                        {{ p.menu }}
                    </a>
                    {% if p.children.count > 0 %}
                        <ul>
                            {{ _self.loop(p) }}
                        </ul>
                    {% endif %}
                </li>
            {% endif %}
        {% endfor %}
        {% endmacro %}
        {% if theme_config.dropdown.enabled %}
            {{ _self.loop(pages) }}
        {% else %}
            {% for page in pages.children %}
                {% if page.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    <li class=\"{{ current_page }}\">
                        <a href=\"{{ page.url }}\" class=\"external\">
                            {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                            {{ page.menu }}

                        </a>
                    </li>
                {% endif %}
            {% endfor %}
        {% endif %}
        {% for mitem in site.menu %}
            <li>
                <a href=\"{{ mitem.url }}\">
                    {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                    {{ mitem.text }}
                </a>
            </li>
        {% endfor %}

        {% for module in page.collection() %}
            {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}
            <li class=\"{{ current_module }}\"><a href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a></li>
        {% endfor %}
         </ul>
    {% else %}
        {{  parent() }}
    {% endif %}
{% endblock %}

{% block content %}
    {% set blog_image = page.media.images|first %}
    {% if blog_image %}
    <div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ page.header.bg_color }} url({{ blog_image.url }}) no-repeat right;\">
    <h1>{{ page.title }}</h1>
    </div>
    {% endif %}
    {{ page.content|raw }}
    {% for module in page.collection() %}
        <div id=\"{{ _self.pageLinkName(module.menu) }}\"></div>
        {{ module.content|raw }}
    {% endfor %}
{% endblock %}
", "modular_alt.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\themes\\deliver\\templates\\modular_alt.html.twig");
    }
}
