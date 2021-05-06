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

/* forms/default/data.txt.twig */
class __TwigTemplate_bab85936306f89a62d51784a91cec0a73100c2e9a2063b0da8ac1ce8b67e0647 extends \Twig\Template
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
        $context["macro"] = $this;
        // line 20
        echo ($context["macro"]->getrender_field(($context["form"] ?? null), $this->getAttribute(($context["form"] ?? null), "fields", []), "") . "
");
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
            $context["self"] = $this;
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["field"]) {
                // line 4
                $context["show_field"] = ((($this->getAttribute($context["field"], "input@", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "input@")))) ? ($this->getAttribute($context["field"], "input@")) : (((($this->getAttribute($context["field"], "store", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "store", [])))) ? ($this->getAttribute($context["field"], "store", [])) : (true))));
                // line 5
                if ($this->getAttribute($context["field"], "fields", [])) {
                    // line 6
                    $context["new_scope"] = (($this->getAttribute($context["field"], "nest_id", [])) ? (((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", [])) . ".")) : (($context["scope"] ?? null)));
                    // line 7
                    echo $context["self"]->getrender_field(($context["form"] ?? null), $this->getAttribute($context["field"], "fields", []), ($context["new_scope"] ?? null));
                } else {
                    // line 9
                    if (($context["show_field"] ?? null)) {
                        // line 10
                        $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["index"])))], "method");
                        // line 11
                        if (($context["value"] ?? null)) {
                            // line 12
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($context["field"], "label", [])));
                            echo ": ";
                            echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(((twig_test_iterable(($context["value"] ?? null))) ? (twig_jsonencode_filter(($context["value"] ?? null))) : (twig_escape_filter($this->env, ($context["value"] ?? null), "yaml")))) . "
"), "html", null, true);
                        }
                    }
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
        return "forms/default/data.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  70 => 11,  68 => 10,  66 => 9,  63 => 7,  61 => 6,  59 => 5,  57 => 4,  53 => 3,  51 => 2,  37 => 1,  32 => 20,  30 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%- macro render_field(form, fields, scope) %}
{%- import _self as self %}
{%- for index, field in fields %}
    {%- set show_field = attribute(field, \"input@\") ?? field.store ?? true %}
    {%- if field.fields %}
        {%- set new_scope = field.nest_id ? scope ~ field.name ~ '.' : scope -%}
        {{- self.render_field(form, field.fields, new_scope) }}
    {%- else %}
        {%- if show_field %}
            {%- set value = form.value(scope ~ (field.name ?? index)) -%}
            {%- if value -%}
            {{- field.label|t|e }}: {{ string(value is iterable ? value|json_encode : value|escape('yaml')) ~ \"\\r\\n\" }}
            {%- endif -%}
        {%- endif %}
    {%- endif %}
{%- endfor %}
{%- endmacro %}
{%- import _self as macro %}
{%- autoescape false %}
{{- macro.render_field(form, form.fields, '') ~ \"\\r\\n\" }}
{%- endautoescape %}
", "forms/default/data.txt.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\plugins\\form\\templates\\forms\\default\\data.txt.twig");
    }
}
