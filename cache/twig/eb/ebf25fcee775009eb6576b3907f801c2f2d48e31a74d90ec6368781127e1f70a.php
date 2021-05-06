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

/* modular/bottom.html.twig */
class __TwigTemplate_1f221f9120bb6feb47e92b044b4d02db698a29a144fa58e0f401c3e5887d04e9 extends \Twig\Template
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
        echo "<div class=\"modular-row bottom ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []), "html", null, true);
        echo "\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 4
            echo "    <a class=\"button";
            if ($this->getAttribute($context["button"], "primary", [])) {
                echo " primary";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "text", []), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []) == "borderbottom")) {
            // line 7
            echo "    <hr>
    ";
        }
        // line 9
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", [])) {
            // line 10
            echo "    <div class=\"services\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 12
                echo "        <div class=\"service\">
            <i class=\"fa fa-";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "icon", []), "html", null, true);
                echo "\"></i>
            <h4>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", []), "html", null, true);
                echo "</h4>
            <p>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "desc", []), "html", null, true);
                echo "</p>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
    ";
        }
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modular/bottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  95 => 18,  86 => 15,  82 => 14,  78 => 13,  75 => 12,  71 => 11,  68 => 10,  65 => 9,  61 => 7,  58 => 6,  43 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row bottom {{ page.header.class }}\">
    {{ content|raw }}
    {% for button in page.header.buttons %}
    <a class=\"button{% if button.primary %} primary{% endif %}\" href=\"{{ button.url }}\">{{ button.text }}</a>
    {% endfor %}
    {% if page.header.class == 'borderbottom' %}
    <hr>
    {% endif %}
    {% if page.header.services %}
    <div class=\"services\">
        {% for service in page.header.services %}
        <div class=\"service\">
            <i class=\"fa fa-{{ service.icon }}\"></i>
            <h4>{{ service.title }}</h4>
            <p>{{ service.desc }}</p>
        </div>
        {% endfor %}
    </div>
    {% endif %}
</div>
", "modular/bottom.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\themes\\deliver\\templates\\modular\\bottom.html.twig");
    }
}
