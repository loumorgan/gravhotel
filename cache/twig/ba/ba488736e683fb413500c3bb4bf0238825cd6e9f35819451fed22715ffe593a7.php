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

/* modular/showcase.html.twig */
class __TwigTemplate_48fc84bc5b0e586af697457e5a57f72458eff19bd9532e8e6642db124b46dc92 extends \Twig\Template
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
        echo "<div id=\"content-slide\">
  <div class=\"slideme\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slides", []));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 4
            echo "       <div class=\"modular-row showcase flush-top\" ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["slide"], "image", []), [], "array")) {
                echo "style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["slide"], "image", []), [], "array"), "url", []), "html", null, true);
                echo ");\"";
            }
            echo ">
          <h1>";
            // line 5
            echo $this->getAttribute($context["slide"], "heading", []);
            echo "</h1>
          <h2>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "subheading", []), "html", null, true);
            echo "</h2>
          <a class=\"button\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "button_url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "button_text", []), "html", null, true);
            echo "</a>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
</div>

";
        // line 13
        echo ($context["content"] ?? null);
        echo "

<script type=\"text/javascript\">
\$('#content-slide').slideme({
  arrows: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", []), "arrows", []), "html", null, true);
        echo ",
  autoslide: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", []), "autoslide", []), "html", null, true);
        echo ",
  autoslideHoverStop: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", []), "autoslideHoverStop", []), "html", null, true);
        echo ",
  interval: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", []), "interval", []), "html", null, true);
        echo ",
  loop: ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", []), "loop", []), "html", null, true);
        echo ",
  pagination: \"numbers\",
  transition : '";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", []), "transition", []), "html", null, true);
        echo "',
  itemsForSlide: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", []), "itemsForSlide", []), "html", null, true);
        echo ",
  touch: ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", []), "touch", []), "html", null, true);
        echo ",
  swipe: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", []), "swipe", []), "html", null, true);
        echo ",
});
</script>
";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 26,  107 => 25,  103 => 24,  99 => 23,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  71 => 13,  66 => 10,  55 => 7,  51 => 6,  47 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"content-slide\">
  <div class=\"slideme\">
    {% for slide in page.header.slides %}
       <div class=\"modular-row showcase flush-top\" {% if page.media[slide.image] %}style=\"background-image: url({{ page.media[slide.image].url }});\"{% endif %}>
          <h1>{{ slide.heading|raw }}</h1>
          <h2>{{ slide.subheading }}</h2>
          <a class=\"button\" href=\"{{ slide.button_url }}\">{{ slide.button_text }}</a>
      </div>
  {% endfor %}
</div>
</div>

{{ content|raw }}

<script type=\"text/javascript\">
\$('#content-slide').slideme({
  arrows: {{ site.header_options.arrows }},
  autoslide: {{ site.header_options.autoslide }},
  autoslideHoverStop: {{ site.header_options.autoslideHoverStop }},
  interval: {{ site.header_options.interval }},
  loop: {{ site.header_options.loop }},
  pagination: \"numbers\",
  transition : '{{ site.header_options.transition }}',
  itemsForSlide: {{ site.header_options.itemsForSlide }},
  touch: {{ site.header_options.touch }},
  swipe: {{ site.header_options.swipe }},
});
</script>
", "modular/showcase.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\themes\\deliver\\templates\\modular\\showcase.html.twig");
    }
}
