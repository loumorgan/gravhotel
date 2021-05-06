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

/* forms/default/data.html.twig */
class __TwigTemplate_f0eba138642eaf393f1a5e2eb18a35bd9a3f8cb385559b69da96544cd24dd4ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'field_label' => [$this, 'block_field_label'],
            'field_value' => [$this, 'block_field_value'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 74
        echo "
";
        // line 75
        $context["macro"] = $this;
        // line 76
        echo "
";
        // line 77
        echo $context["macro"]->getrender_field(($context["form"] ?? null), $this->getAttribute(($context["form"] ?? null), "fields", []), "");
        echo "
";
    }

    // line 13
    public function block_field($context, array $blocks = [])
    {
        // line 14
        echo "                        <div>
                            ";
        // line 15
        $this->displayBlock('field_label', $context, $blocks);
        // line 18
        echo "
                            ";
        // line 19
        $this->displayBlock('field_value', $context, $blocks);
        // line 67
        echo "                        </div>
                    ";
    }

    // line 15
    public function block_field_label($context, array $blocks = [])
    {
        // line 16
        echo "                                <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])));
        echo "</strong>:
                            ";
    }

    // line 19
    public function block_field_value($context, array $blocks = [])
    {
        // line 20
        echo "                                ";
        if (($this->getAttribute(($context["field"] ?? null), "type", []) == "checkboxes")) {
            // line 21
            echo "                                    <ul>
                                        ";
            // line 22
            $context["use_keys"] = ($this->getAttribute(($context["field"] ?? null), "use", [], "any", true, true) && ($this->getAttribute(($context["field"] ?? null), "use", []) == "keys"));
            // line 23
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 24
                echo "                                            ";
                $context["index"] = ((($context["use_keys"] ?? null)) ? ($context["key"]) : ($context["value"]));
                // line 25
                echo "                                            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), ($context["index"] ?? null), [], "array")));
                echo "</li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                                    </ul>
                                ";
        } elseif (($this->getAttribute(        // line 28
($context["field"] ?? null), "type", []) == "radio")) {
            // line 29
            echo "                                    ";
            $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method");
            // line 30
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), ($context["value"] ?? null), [], "array")));
            echo "
                                ";
        } elseif (($this->getAttribute(        // line 31
($context["field"] ?? null), "type", []) == "checkbox")) {
            // line 32
            echo "                                    ";
            echo ((($this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method") == 1)) ? (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GRAV.YES"))) : (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GRAV.NO"))));
            echo "
                                ";
        } elseif (($this->getAttribute(        // line 33
($context["field"] ?? null), "type", []) == "select")) {
            // line 34
            echo "                                    ";
            $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method");
            // line 35
            echo "                                    ";
            if (twig_test_iterable(($context["value"] ?? null))) {
                // line 36
                echo "                                        <ul>
                                            ";
                // line 37
                $context["use_keys"] = ($this->getAttribute(($context["field"] ?? null), "use", [], "any", true, true) && ($this->getAttribute(($context["field"] ?? null), "use", []) == "keys"));
                // line 38
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 39
                    echo "                                                ";
                    $context["index"] = ((($context["use_keys"] ?? null)) ? ($context["key"]) : ($context["val"]));
                    // line 40
                    echo "                                                <li>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), ($context["index"] ?? null), [], "array")));
                    echo "</li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                                        </ul>
                                    ";
            } else {
                // line 44
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), ($context["value"] ?? null), [], "array")));
                echo "
                                    ";
            }
            // line 46
            echo "                                ";
        } else {
            // line 47
            echo "                                    ";
            $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method");
            // line 48
            echo "                                    ";
            if (twig_test_iterable(($context["value"] ?? null))) {
                // line 49
                echo "                                        <ul>
                                            ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 51
                    echo "                                                ";
                    if (twig_test_iterable($context["val"])) {
                        // line 52
                        echo "                                                    <ul>
                                                        ";
                        // line 53
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["val"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                            // line 54
                            echo "                                                            <li>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($context["v"]));
                            echo "</li>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 56
                        echo "                                                    </ul>
                                                ";
                    } else {
                        // line 58
                        echo "                                                    <li>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($context["val"]));
                        echo "</li>
                                                ";
                    }
                    // line 60
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                                        </ul>
                                    ";
            } else {
                // line 63
                echo "                                        ";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
                echo "
                                    ";
            }
            // line 65
            echo "                                ";
        }
        // line 66
        echo "                            ";
    }

    // line 1
    public function getrender_field($__form__ = null, $__fields__ = null, $__scope__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "fields" => $__fields__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["index"] => $context["field"]) {
                // line 5
                $context["show_field"] = ((($this->getAttribute($context["field"], "input@", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "input@")))) ? ($this->getAttribute($context["field"], "input@")) : (((($this->getAttribute($context["field"], "store", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "store", [])))) ? ($this->getAttribute($context["field"], "store", [])) : (true))));
                // line 6
                echo "        ";
                if ($this->getAttribute($context["field"], "fields", [])) {
                    // line 7
                    $context["new_scope"] = (($this->getAttribute($context["field"], "nest_id", [])) ? (((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", [])) . ".")) : (($context["scope"] ?? null)));
                    // line 8
                    echo $context["self"]->getrender_field(($context["form"] ?? null), $this->getAttribute($context["field"], "fields", []), ($context["new_scope"] ?? null));
                    echo "
        ";
                } else {
                    // line 10
                    echo "            ";
                    if (($context["show_field"] ?? null)) {
                        // line 11
                        $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["index"])))], "method");
                        // line 12
                        if (($context["value"] ?? null)) {
                            // line 13
                            echo "                    ";
                            $this->displayBlock('field', $context, $blocks);
                            // line 69
                            echo "                ";
                        }
                        // line 70
                        echo "            ";
                    }
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "forms/default/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 72,  296 => 71,  293 => 70,  290 => 69,  287 => 13,  285 => 12,  283 => 11,  280 => 10,  275 => 8,  273 => 7,  270 => 6,  268 => 5,  251 => 4,  248 => 3,  245 => 2,  231 => 1,  227 => 66,  224 => 65,  218 => 63,  214 => 61,  208 => 60,  202 => 58,  198 => 56,  189 => 54,  185 => 53,  182 => 52,  179 => 51,  175 => 50,  172 => 49,  169 => 48,  166 => 47,  163 => 46,  157 => 44,  153 => 42,  144 => 40,  141 => 39,  136 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  123 => 33,  118 => 32,  116 => 31,  111 => 30,  108 => 29,  106 => 28,  103 => 27,  94 => 25,  91 => 24,  86 => 23,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  68 => 16,  65 => 15,  60 => 67,  58 => 19,  55 => 18,  53 => 15,  50 => 14,  47 => 13,  41 => 77,  38 => 76,  36 => 75,  33 => 74,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro render_field(form, fields, scope) %}
    {% import _self as self %}

    {% for index, field in fields %}
        {%- set show_field = attribute(field, \"input@\") ?? field.store ?? true %}
        {% if field.fields %}
            {%- set new_scope = field.nest_id ? scope ~ field.name ~ '.' : scope -%}
            {{- self.render_field(form, field.fields, new_scope) }}
        {% else %}
            {% if show_field %}
                {%- set value = form.value(scope ~ (field.name ?? index)) -%}
                {% if value %}
                    {% block field %}
                        <div>
                            {% block field_label %}
                                <strong>{{ field.label|t|e }}</strong>:
                            {% endblock %}

                            {% block field_value %}
                                {% if field.type == 'checkboxes' %}
                                    <ul>
                                        {% set use_keys = field.use is defined and field.use == 'keys' %}
                                        {% for key,value in form.value(scope ~ field.name) %}
                                            {% set index = (use_keys ? key : value) %}
                                            <li>{{ field.options[index]|t|e }}</li>
                                        {% endfor %}
                                    </ul>
                                {% elseif field.type == 'radio' %}
                                    {% set value = form.value(scope ~ field.name) %}
                                    {{ field.options[value]|t|e }}
                                {% elseif field.type == 'checkbox' %}
                                    {{ (form.value(scope ~ field.name) == 1) ? \"GRAV.YES\"|t|e : \"GRAV.NO\"|t|e }}
                                {% elseif field.type == 'select' %}
                                    {% set value = form.value(scope ~ field.name) %}
                                    {% if value is iterable %}
                                        <ul>
                                            {% set use_keys = field.use is defined and field.use == 'keys' %}
                                            {% for key, val in value %}
                                                {% set index = (use_keys ? key : val) %}
                                                <li>{{ field.options[index]|t|e }}</li>
                                            {% endfor %}
                                        </ul>
                                    {% else %}
                                        {{ field.options[value]|t|e }}
                                    {% endif %}
                                {% else %}
                                    {% set value = form.value(scope ~ field.name) %}
                                    {% if value is iterable %}
                                        <ul>
                                            {% for val in value %}
                                                {% if val is iterable %}
                                                    <ul>
                                                        {% for v in val %}
                                                            <li>{{ string(v)|e }}</li>
                                                        {% endfor %}
                                                    </ul>
                                                {% else %}
                                                    <li>{{ string(val)|e }}</li>
                                                {% endif %}
                                            {% endfor %}
                                        </ul>
                                    {% else %}
                                        {{ string(value)|e|nl2br }}
                                    {% endif %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                {% endif %}
            {% endif %}
        {% endif %}
    {% endfor %}
{% endmacro %}

{% import _self as macro %}

{{ macro.render_field(form, form.fields, '') }}
", "forms/default/data.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\plugins\\form\\templates\\forms\\default\\data.html.twig");
    }
}
