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

/* partials/item.html.twig */
class __TwigTemplate_062db6422ac17eb54a649caf1ee908eeaf46a995781ac6a424e2f4c8911d9cf4 extends \Twig\Template
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
        // line 18
        echo "
";
        // line 19
        $context["data"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "itemData", []);
        // line 20
        echo "
<h1>
    ";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "data-manager", [], "array"), "types", []), ($context["type"] ?? null), [], "array"), "item", []), "title", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "data-manager", [], "array"), "types", []), ($context["type"] ?? null), [], "array"), "item", []), "title", [])) : (((twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_replace_filter(($context["type"] ?? null), ["_" => " "]))) . " ") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_DATA_MANAGER.ITEM_DETAILS"))))), "html", null, true);
        echo "
</h1>
<ul>
    ";
        // line 25
        if (($this->getAttribute(($context["data"] ?? null), "_data_type", [], "array") == "form")) {
            // line 26
            echo "        <div>Form submitted: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? null), "timestamp", []), "m/d/Y \\a\\t g:m:i A"), "html", null, true);
            echo "</div><br>
        ";
            // line 27
            $context["data"] = $this->getAttribute(($context["data"] ?? null), "content", []);
            // line 28
            echo "    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if ( !twig_test_iterable(($context["data"] ?? null))) {
            // line 31
            echo "        ";
            echo ($context["data"] ?? null);
            echo "
    ";
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 32
($context["config"] ?? null), "plugins", []), "data-manager", [], "array"), "types", []), ($context["type"] ?? null), [], "array"), "item", []), "fields", [])) {
            // line 33
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "data-manager", [], "array"), "types", []), $context["type"], [], "array"), "item", []), "fields", []));
            foreach ($context['_seq'] as $context["key"] => $context["type"]) {
                // line 34
                echo "            ";
                $context["item"] = $this->getAttribute(($context["data"] ?? null), $context["key"], [], "array");
                // line 35
                echo "            <li class=\"page-item\">
                <div class=\"row\">
                    <strong>";
                // line 37
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["type"], "name", [])));
                echo "</strong>:

                    ";
                // line 39
                if (twig_test_iterable(($context["item"] ?? null))) {
                    // line 40
                    echo "                        ";
                    echo $this->getAttribute($this, "loop", [0 => ($context["item"] ?? null)], "method");
                    echo "
                    ";
                } else {
                    // line 42
                    echo "                        ";
                    echo strip_tags(($context["item"] ?? null), "<br>");
                    echo "
                    ";
                }
                // line 44
                echo "                </div>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    ";
        } else {
            // line 48
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 49
                echo "            <li class=\"page-item\">
                <div class=\"row\">
                    <strong style=\"vertical-align: top;\">";
                // line 51
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_replace_filter($context["key"], "_", " ")));
                echo ":</strong>

                    ";
                // line 53
                if (twig_test_iterable($context["item"])) {
                    // line 54
                    echo "                        ";
                    echo $this->getAttribute($this, "loop", [0 => $context["item"]], "method");
                    echo "
                    ";
                } else {
                    // line 56
                    echo "                        <span style=\"display: inline-block;\">";
                    echo twig_replace_filter(strip_tags($context["item"], "<br>"), ["
" => "<br>"]);
                    echo "</span>
                    ";
                }
                // line 58
                echo "                </div>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    ";
        }
        // line 62
        echo "</ul>
";
    }

    // line 1
    public function getloop($__elements__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "elements" => $__elements__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <ul>
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 4
                echo "            ";
                if (twig_test_iterable($context["item"])) {
                    // line 5
                    echo "                ";
                    if (($this->getAttribute($context["item"], 0, [], "array") &&  !twig_test_iterable($this->getAttribute($context["item"], 0, [], "array")))) {
                        // line 6
                        echo "                <li><strong style=\"vertical-align: top;\">";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_replace_filter($context["key"], "_", " ")));
                        echo ":</strong>
                <span style=\"display: inline-block;\">";
                        // line 7
                        echo twig_join_filter($context["item"], "<br>
");
                        echo "</span></li>
                ";
                    } else {
                        // line 9
                        echo "                <li><strong>";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_replace_filter($context["key"], "_", " ")));
                        echo "</strong>:</li>
                ";
                        // line 10
                        echo $this->getAttribute($this, "loop", [0 => $context["item"]], "method");
                        echo "
                ";
                    }
                    // line 12
                    echo "            ";
                } else {
                    // line 13
                    echo "                <li><strong style=\"vertical-align: top;\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_replace_filter($context["key"], "_", " ")));
                    echo ":</strong> <span style=\"display: inline-block;\">";
                    echo twig_replace_filter(strip_tags($context["item"], "<br>"), ["
" => "<br>"]);
                    echo "</span></li>
            ";
                }
                // line 15
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </ul>
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
        return "partials/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 16,  214 => 15,  205 => 13,  202 => 12,  197 => 10,  192 => 9,  186 => 7,  181 => 6,  178 => 5,  175 => 4,  171 => 3,  168 => 2,  156 => 1,  151 => 62,  148 => 61,  140 => 58,  133 => 56,  127 => 54,  125 => 53,  120 => 51,  116 => 49,  111 => 48,  108 => 47,  100 => 44,  94 => 42,  88 => 40,  86 => 39,  81 => 37,  77 => 35,  74 => 34,  69 => 33,  67 => 32,  62 => 31,  60 => 30,  57 => 29,  54 => 28,  52 => 27,  47 => 26,  45 => 25,  39 => 22,  35 => 20,  33 => 19,  30 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(elements) %}
    <ul>
        {% for key, item in elements %}
            {% if item is iterable %}
                {% if item[0] and item[0] is not iterable %}
                <li><strong style=\"vertical-align: top;\">{{ key|replace('_', ' ')|capitalize|e }}:</strong>
                <span style=\"display: inline-block;\">{{ item|join(\"<br>\\n\")|raw }}</span></li>
                {% else %}
                <li><strong>{{ key|replace('_', ' ')|capitalize|e }}</strong>:</li>
                {{ _self.loop(item) }}
                {% endif %}
            {% else %}
                <li><strong style=\"vertical-align: top;\">{{ key|replace('_', ' ')|capitalize|e }}:</strong> <span style=\"display: inline-block;\">{{ item|striptags('<br>')|replace({\"\\n\": '<br>'})|raw }}</span></li>
            {% endif %}
        {% endfor %}
    </ul>
{% endmacro %}

{% set data = grav.twig.itemData %}

<h1>
    {{ config.plugins['data-manager'].types[type].item.title ?: type|replace({'_': ' '})|capitalize|e ~ \" \" ~ \"PLUGIN_DATA_MANAGER.ITEM_DETAILS\"|e|tu|raw }}
</h1>
<ul>
    {% if data['_data_type'] == 'form' %}
        <div>Form submitted: {{ data.timestamp|date('m/d/Y \\\\a\\\\t g:m:i A') }}</div><br>
        {% set data = data.content %}
    {% endif %}

    {% if data is not iterable %}
        {{ data|raw }}
    {% elseif config.plugins['data-manager'].types[type].item.fields %}
        {% for key, type in config.plugins['data-manager'].types[type].item.fields %}
            {% set item = data[key] %}
            <li class=\"page-item\">
                <div class=\"row\">
                    <strong>{{ type.name|capitalize|e }}</strong>:

                    {% if item is iterable %}
                        {{ _self.loop(item) }}
                    {% else %}
                        {{ item|striptags('<br>')|raw }}
                    {% endif %}
                </div>
            </li>
        {% endfor %}
    {% else %}
        {% for key, item in data %}
            <li class=\"page-item\">
                <div class=\"row\">
                    <strong style=\"vertical-align: top;\">{{ key|replace('_', ' ')|capitalize|e }}:</strong>

                    {% if item is iterable %}
                        {{ _self.loop(item) }}
                    {% else %}
                        <span style=\"display: inline-block;\">{{ item|striptags('<br>')|replace({\"\\n\": '<br>'})|raw }}</span>
                    {% endif %}
                </div>
            </li>
        {% endfor %}
    {% endif %}
</ul>
", "partials/item.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\plugins\\data-manager\\admin\\templates\\partials\\item.html.twig");
    }
}
