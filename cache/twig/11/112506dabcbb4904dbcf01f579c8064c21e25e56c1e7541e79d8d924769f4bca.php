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

/* modular/form.html.twig */
class __TwigTemplate_647d55e9c7c08c3299037d20d1fd3d023f61d27a2208a5358e983dcfffcb0884 extends \Twig\Template
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
        echo "<div class=\"modular-row contact ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []), "html", null, true);
        echo "\">
    <div class=\"g-grid pure-g-r\">
        <div id=\"listing\" class=\"g-block pure-u-2-3\">
            ";
        // line 4
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 4)->display($context);
        // line 5
        echo "        </div>
        <div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
            ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  39 => 5,  37 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row contact {{ page.header.class }}\">
    <div class=\"g-grid pure-g-r\">
        <div id=\"listing\" class=\"g-block pure-u-2-3\">
            {% include \"forms/form.html.twig\" %}
        </div>
        <div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
            {{ page.content|raw }}
        </div>
    </div>
</div>
", "modular/form.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\themes\\deliver\\templates\\modular\\form.html.twig");
    }
}
