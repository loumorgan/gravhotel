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

/* partials/items.html.twig */
class __TwigTemplate_44b7a7161ee166a1fecce1edccd1676e82f98161ab17d1c90f812d42a06c5012 extends \Twig\Template
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
        echo "<h1>
    ";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "data-manager", [], "array"), "types", []), ($context["type"] ?? null), [], "array"), "list", []), "title", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "data-manager", [], "array"), "types", []), ($context["type"] ?? null), [], "array"), "list", []), "title", [])) : (((twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["type"] ?? null))) . " ") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_DATA_MANAGER.ITEMS_LIST"))))), "html", null, true);
        echo "
</h1>
<div class=\"\">
    ";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "data-manager", [], "array"), "types", []), ($context["type"] ?? null), [], "array"), "list", []), "columns", [])) {
            // line 6
            echo "        <table>
            <thead>
                <tr>
                    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "data-manager", [], "array"), "types", []), ($context["type"] ?? null), [], "array"), "list", []), "columns", []));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 10
                echo "                        <th>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "label", []));
                echo "</th>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "                </tr>
            </thead>
            <tbody>
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 16
                echo "                    <tr>
                        ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "data-manager", [], "array"), "types", []), ($context["type"] ?? null), [], "array"), "list", []), "columns", []));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 18
                    echo "                            <td>
                                <a href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "route", []), "html", null, true);
                    echo "\">
                                    ";
                    // line 20
                    if (twig_test_iterable($this->getAttribute($context["column"], "field", []))) {
                        // line 21
                        echo "                                        ";
                        $context["value"] = $this->getAttribute($context["item"], "content", []);
                        // line 22
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "field", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                            // line 23
                            echo "                                            ";
                            $context["value"] = $this->getAttribute(($context["value"] ?? null), $context["field"], [], "array");
                            // line 24
                            echo "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "                                        ";
                        echo twig_escape_filter($this->env, ($context["value"] ?? null));
                        echo "
                                    ";
                    } else {
                        // line 27
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "content", []), $this->getAttribute($context["column"], "field", []), [], "array"));
                        echo "
                                    ";
                    }
                    // line 29
                    echo "                                </a>
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 37
            echo "        <ul class=\"\">
           ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "               <li class=\"\">
                   <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "route", []), "html", null, true);
                echo "\" class=\"page-edit\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []));
                echo "</a>
               </li>
           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </ul>
        <div class=\"button-bar danger\">
        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo ".csv\" class=\"button\">Download as CSV</a>
        </div>
    ";
        }
        // line 48
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 48,  162 => 45,  158 => 43,  145 => 40,  142 => 39,  138 => 38,  135 => 37,  130 => 34,  123 => 32,  115 => 29,  109 => 27,  103 => 25,  97 => 24,  94 => 23,  89 => 22,  86 => 21,  84 => 20,  78 => 19,  75 => 18,  71 => 17,  68 => 16,  64 => 15,  59 => 12,  50 => 10,  46 => 9,  41 => 6,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>
    {{ config.plugins['data-manager'].types[type].list.title ?: type|capitalize|e ~ \" \" ~ \"PLUGIN_DATA_MANAGER.ITEMS_LIST\"|e|tu|raw }}
</h1>
<div class=\"\">
    {% if config.plugins['data-manager'].types[type].list.columns %}
        <table>
            <thead>
                <tr>
                    {% for column in config.plugins['data-manager'].types[type].list.columns %}
                        <th>{{ column.label|e }}</th>
                    {% endfor %}
                </tr>
            </thead>
            <tbody>
                {% for item in grav.twig.items %}
                    <tr>
                        {% for column in config.plugins['data-manager'].types[type].list.columns %}
                            <td>
                                <a href=\"{{ type }}/{{ item.route }}\">
                                    {% if column.field is iterable %}
                                        {% set value = item.content %}
                                        {% for field in column.field %}
                                            {% set value = value[field] %}
                                        {% endfor %}
                                        {{ value|e }}
                                    {% else %}
                                        {{ item.content[column.field]|e }}
                                    {% endif %}
                                </a>
                            </td>
                        {% endfor %}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <ul class=\"\">
           {% for item in grav.twig.items %}
               <li class=\"\">
                   <a href=\"{{ type }}/{{ item.route }}\" class=\"page-edit\">{{ item.name|e }}</a>
               </li>
           {% endfor %}
        </ul>
        <div class=\"button-bar danger\">
        <a href=\"{{ type }}.csv\" class=\"button\">Download as CSV</a>
        </div>
    {% endif %}
</div>
", "partials/items.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\plugins\\data-manager\\admin\\templates\\partials\\items.html.twig");
    }
}
