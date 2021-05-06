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

/* partials/types.html.twig */
class __TwigTemplate_241647d0465498ecd32769542fa1d230e19f860b166a68c55090921a676b4d65 extends \Twig\Template
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
        echo "<div class=\"gpm gpm-themes\">
    <h1>
        ";
        // line 3
        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_DATA_MANAGER.DATA_TYPES"));
        echo "
    </h1>
    <div class=\"gpm gpm-themes themes card-row grid fixed-blocks pure-g\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "types", []));
        foreach ($context['_seq'] as $context["type"] => $context["count"]) {
            // line 7
            echo "            <a href=\"data-manager/";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\" class=\"pure-u-1-3 card-item\">
                <div class=\"theme\">
                    <div class=\"gpm-name\">
                        ";
            // line 10
            echo ((twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "data-manager", [], "array"), "types", []), $context["type"], [], "array"), "name", []))) ? (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "data-manager", [], "array"), "types", []), $context["type"], [], "array"), "name", []))) : (twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["type"]))));
            echo "
                    </div>
                    <p>";
            // line 12
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo " ";
            echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_DATA_MANAGER.ITEMS"));
            echo "</p>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/types.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  56 => 12,  51 => 10,  44 => 7,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"gpm gpm-themes\">
    <h1>
        {{ \"PLUGIN_DATA_MANAGER.DATA_TYPES\"|e|tu|raw }}
    </h1>
    <div class=\"gpm gpm-themes themes card-row grid fixed-blocks pure-g\">
        {% for type, count in grav.twig.types %}
            <a href=\"data-manager/{{ type }}\" class=\"pure-u-1-3 card-item\">
                <div class=\"theme\">
                    <div class=\"gpm-name\">
                        {{ config.plugins['data-manager'].types[type].name|e ?: type|capitalize|e }}
                    </div>
                    <p>{{ count }} {{ \"PLUGIN_DATA_MANAGER.ITEMS\"|e|tu|raw }}</p>
                </div>
            </a>
        {% endfor %}
    </div>
</div>
", "partials/types.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\plugins\\data-manager\\admin\\templates\\partials\\types.html.twig");
    }
}
