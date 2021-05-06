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

/* data-manager.html.twig */
class __TwigTemplate_67c3b79a98a2583f50006fe8f0ce33d99452e65683645c99c7c8f567143ee4db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
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
        // line 2
        $context["mode"] = "types";
        // line 4
        if ((($this->getAttribute($this->getAttribute(($context["uri"] ?? null), "paths", []), 1, [], "array") == "data-manager") && $this->getAttribute($this->getAttribute(($context["uri"] ?? null), "paths", []), 2, [], "array"))) {
            // line 5
            $context["mode"] = "items";
            // line 6
            $context["type"] = $this->getAttribute($this->getAttribute(($context["uri"] ?? null), "paths", []), 2, [], "array");
            // line 8
            if ($this->getAttribute($this->getAttribute(($context["uri"] ?? null), "paths", []), 3, [], "array")) {
                // line 9
                $context["mode"] = "item";
                // line 10
                $context["item"] = $this->getAttribute($this->getAttribute(($context["uri"] ?? null), "paths", []), 3, [], "array");
            }
        }
        // line 15
        if ($this->getAttribute(($context["admin"] ?? null), "route", [])) {
            // line 16
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", [0 => true], "method");
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "data-manager.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_titlebar($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        if ((($context["mode"] ?? null) == "types")) {
            // line 21
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_DATA_MANAGER.DATA_TYPES"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 25
($context["mode"] ?? null) == "items")) {
            // line 26
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/data-manager\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_DATA_MANAGER.ITEMS_LIST"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 30
($context["mode"] ?? null) == "item")) {
            // line 31
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/data-manager/";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_DATA_MANAGER.ITEM_DETAILS"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        // line 39
        echo "
    <div class=\"page-data\">
        ";
        // line 41
        if ((($context["mode"] ?? null) == "types")) {
            // line 42
            echo "            ";
            $this->loadTemplate("partials/types.html.twig", "data-manager.html.twig", 42)->display($context);
            // line 43
            echo "        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if ((($context["mode"] ?? null) == "items")) {
            // line 46
            echo "            ";
            $this->loadTemplate([0 => (("partials/data-manager/" . ($context["type"] ?? null)) . "/items.html.twig"), 1 => "partials/items.html.twig"], "data-manager.html.twig", 46)->display($context);
            // line 47
            echo "        ";
        }
        // line 48
        echo "
        ";
        // line 49
        if ((($context["mode"] ?? null) == "item")) {
            // line 50
            echo "            ";
            $this->loadTemplate([0 => (("partials/data-manager/" . ($context["type"] ?? null)) . "/item.html.twig"), 1 => "partials/item.html.twig"], "data-manager.html.twig", 50)->display($context);
            // line 51
            echo "        ";
        }
        // line 52
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "data-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 52,  153 => 51,  150 => 50,  148 => 49,  145 => 48,  142 => 47,  139 => 46,  137 => 45,  134 => 44,  131 => 43,  128 => 42,  126 => 41,  122 => 39,  119 => 38,  112 => 34,  103 => 32,  100 => 31,  98 => 30,  94 => 29,  87 => 27,  84 => 26,  82 => 25,  78 => 24,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  57 => 1,  54 => 16,  52 => 15,  48 => 10,  46 => 9,  44 => 8,  42 => 6,  40 => 5,  38 => 4,  36 => 2,  30 => 1,);
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
{% set mode = 'types' %}

{% if uri.paths[1] == 'data-manager' and uri.paths[2] %}
    {% set mode = 'items' %}
    {% set type = uri.paths[2] %}

    {% if uri.paths[3] %}
        {% set mode = 'item' %}
        {% set item = uri.paths[3] %}
    {% endif %}

{% endif %}

{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}

{% block titlebar %}
    {% if mode == 'types' %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_DATA_MANAGER.DATA_TYPES\"|tu }}</h1>
    {% elseif mode == 'items' %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ base_url }}/data-manager\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_DATA_MANAGER.ITEMS_LIST\"|tu }}</h1>
    {% elseif mode == 'item' %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ base_url }}/data-manager/{{ type }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_DATA_MANAGER.ITEM_DETAILS\"|tu }}</h1>
    {% endif %}
{% endblock %}

{% block content %}

    <div class=\"page-data\">
        {% if mode == 'types' %}
            {% include \"partials/types.html.twig\" %}
        {% endif %}

        {% if mode == 'items' %}
            {% include ['partials/data-manager/' ~ type ~ '/items.html.twig', 'partials/items.html.twig'] %}
        {% endif %}

        {% if mode == 'item' %}
            {% include ['partials/data-manager/' ~ type ~ '/item.html.twig', 'partials/item.html.twig'] %}
        {% endif %}
    </div>

{% endblock %}
", "data-manager.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\plugins\\data-manager\\admin\\templates\\data-manager.html.twig");
    }
}
