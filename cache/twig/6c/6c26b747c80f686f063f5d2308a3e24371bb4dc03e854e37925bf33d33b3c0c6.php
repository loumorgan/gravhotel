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

/* modular.html.twig */
class __TwigTemplate_d7f8a7c81e1738cdc5882ed631447fe67656b915da91680ff076edeeca7c53c7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
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

    // line 14
    public function block_bottom($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    ";
        // line 16
        if (($context["show_onpage_menu"] ?? null)) {
            // line 17
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

    // line 30
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 31
        echo "    ";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 32
            echo "        <ul class=\"navigation\">

        ";
            // line 52
            echo "

        ";
            // line 54
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
                // line 55
                echo "            ";
                echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
                echo "
        ";
            } else {
                // line 57
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 58
                    echo "                ";
                    if ($this->getAttribute($context["page"], "visible", [])) {
                        // line 59
                        echo "                    ";
                        $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                        // line 60
                        echo "                    <li class=\"";
                        echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                        echo "\">
                        <a href=\"";
                        // line 61
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                        echo "\" class=\"external\">
                            ";
                        // line 62
                        if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                            echo "<i class=\"fa fa-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []), "html", null, true);
                            echo "\"></i>";
                        }
                        // line 63
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                        echo "
                        </a>
                    </li>
                ";
                    }
                    // line 67
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "        ";
            }
            // line 69
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 70
                echo "            <li>
                <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []), "html", null, true);
                echo "\">
                    ";
                // line 72
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []), "html", null, true);
                    echo "\"></i>";
                }
                // line 73
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
            // line 77
            echo "
        ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 79
                echo "            ";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", []) || $this->getAttribute($context["module"], "activeChild", []))) ? ("active") : (""));
                // line 80
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
            // line 82
            echo "         </ul>
    ";
        } else {
            // line 84
            echo "        ";
            $this->displayParentBlock("header_navigation", $context, $blocks);
            echo "
    ";
        }
    }

    // line 88
    public function block_content($context, array $blocks = [])
    {
        // line 89
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 91
            echo "        <div id=\"";
            echo $this->getAttribute($this, "pageLinkName", [0 => $this->getAttribute($context["module"], "menu", [])], "method");
            echo "\"></div>
        ";
            // line 92
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

    // line 34
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 35
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 36
                echo "            ";
                if ($this->getAttribute($context["p"], "visible", [])) {
                    // line 37
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                    // line 38
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                    echo "\">
                    <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                    echo "\" class=\"external\">
                        ";
                    // line 40
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 41
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                    echo "
                    </a>
                    ";
                    // line 43
                    if (($this->getAttribute($this->getAttribute($context["p"], "children", []), "count", []) > 0)) {
                        // line 44
                        echo "                        <ul>
                            ";
                        // line 45
                        echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                        echo "
                        </ul>
                    ";
                    }
                    // line 48
                    echo "                </li>
            ";
                }
                // line 50
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
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
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 51,  329 => 50,  325 => 48,  319 => 45,  316 => 44,  314 => 43,  308 => 41,  302 => 40,  298 => 39,  293 => 38,  290 => 37,  287 => 36,  282 => 35,  270 => 34,  244 => 4,  234 => 92,  229 => 91,  225 => 90,  220 => 89,  217 => 88,  209 => 84,  205 => 82,  192 => 80,  189 => 79,  185 => 78,  182 => 77,  171 => 73,  165 => 72,  161 => 71,  158 => 70,  153 => 69,  150 => 68,  144 => 67,  136 => 63,  130 => 62,  126 => 61,  121 => 60,  118 => 59,  115 => 58,  110 => 57,  104 => 55,  102 => 54,  98 => 52,  94 => 32,  91 => 31,  88 => 30,  74 => 17,  72 => 16,  67 => 15,  64 => 14,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  40 => 1,  38 => 3,  32 => 1,);
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
    {{ page.content|raw }}
    {% for module in page.collection() %}
        <div id=\"{{ _self.pageLinkName(module.menu) }}\"></div>
        {{ module.content|raw }}
    {% endfor %}
{% endblock %}
", "modular.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\themes\\deliver\\templates\\modular.html.twig");
    }
}
