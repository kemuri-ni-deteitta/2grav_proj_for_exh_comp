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

/* forms/fields/url/url.html.twig */
class __TwigTemplate_c6df5f59b095c8068cda91d9fd0bb6c2095bed0e6ce23d82cca43a1a4375f0fc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/url/url.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 4
        echo "    type=\"url\"
    ";
        // line 5
        if ($this->getAttribute(($context["field"] ?? null), "size", [])) {
            echo "size=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
            echo "\"";
        }
        // line 6
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "minlength", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", [], "any", false, true), "min", [], "any", true, true))) {
            echo "minlength=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "minlength", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "minlength", []), $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", []))) : ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", []))), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "maxlength", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", [], "any", false, true), "max", [], "any", true, true))) {
            echo "maxlength=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "maxlength", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "maxlength", []), $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", []))) : ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", []))), "html", null, true);
            echo "\"";
        }
        // line 8
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/url/url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  58 => 7,  51 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input_attributes %}
    type=\"url\"
    {% if field.size %}size=\"{{ field.size }}\"{% endif %}
    {% if field.minlength is defined or field.validate.min is defined %}minlength=\"{{ field.minlength | default(field.validate.min) }}\"{% endif %}
    {% if field.maxlength is defined or field.validate.max is defined %}maxlength=\"{{ field.maxlength | default(field.validate.max) }}\"{% endif %}
    {{ parent() }}
{% endblock %}
", "forms/fields/url/url.html.twig", "/home/ivan/grav-admin/user/plugins/form/templates/forms/fields/url/url.html.twig");
    }
}
