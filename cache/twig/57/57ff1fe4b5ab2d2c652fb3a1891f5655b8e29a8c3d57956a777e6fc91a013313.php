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

/* forms/layouts/form.html.twig */
class __TwigTemplate_c81caae3361d3e2a4f0be2f2a220b9330ddb024657f74693c37353c04d578105 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_form_custom_attributes' => [$this, 'block_embed_form_custom_attributes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<form
    ";
        // line 2
        $this->displayBlock('embed_form_core', $context, $blocks);
        // line 3
        echo "    ";
        $this->displayBlock('embed_form_classes', $context, $blocks);
        // line 4
        echo "    ";
        $this->displayBlock('embed_form_custom_attributes', $context, $blocks);
        // line 5
        echo ">
  ";
        // line 6
        $this->displayBlock('embed_fields', $context, $blocks);
        // line 7
        echo "  ";
        $this->displayBlock('embed_buttons', $context, $blocks);
        // line 8
        echo "</form>
";
    }

    // line 2
    public function block_embed_form_core($context, array $blocks = [])
    {
    }

    // line 3
    public function block_embed_form_classes($context, array $blocks = [])
    {
    }

    // line 4
    public function block_embed_form_custom_attributes($context, array $blocks = [])
    {
    }

    // line 6
    public function block_embed_fields($context, array $blocks = [])
    {
    }

    // line 7
    public function block_embed_buttons($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/layouts/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 7,  74 => 6,  69 => 4,  64 => 3,  59 => 2,  54 => 8,  51 => 7,  49 => 6,  46 => 5,  43 => 4,  40 => 3,  38 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<form
    {% block embed_form_core %}{% endblock %}
    {% block embed_form_classes %}{% endblock %}
    {% block embed_form_custom_attributes %}{% endblock %}
>
  {% block embed_fields %}{% endblock %}
  {% block embed_buttons %}{% endblock %}
</form>
", "forms/layouts/form.html.twig", "C:\\Users\\Lou Morgan\\Documents\\handigital\\formation\\web-dev\\xampp\\htdocs\\grav\\user\\plugins\\form\\templates\\forms\\layouts\\form.html.twig");
    }
}
