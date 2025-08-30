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

/* forms/data.html.twig */
class __TwigTemplate_e1ddeba5d39c3e1caf6606d002034c03e40e3399f1148ecfa5637edbf71aa866 extends \Twig\Template
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
        // line 89
        echo "
";
        // line 90
        $context["macro"] = $this;
        // line 91
        echo "
";
        // line 92
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
        // line 82
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
        $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method");
        // line 21
        echo "                                ";
        $context["field_name"] = ((($this->getAttribute(($context["field"] ?? null), "name", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "name", [])))) ? ($this->getAttribute(($context["field"] ?? null), "name", [])) : (($context["index"] ?? null)));
        // line 22
        echo "                                
                                ";
        // line 24
        echo "                                ";
        if ((($context["field_name"] ?? null) == "service")) {
            // line 25
            echo "                                    ";
            if ((($context["value"] ?? null) == "development")) {
                // line 26
                echo "                                        Разработка и строительство выставочных стендов
                                    ";
            } elseif ((            // line 27
($context["value"] ?? null) == "design")) {
                // line 28
                echo "                                        Дизайн выставочных стендов
                                    ";
            } elseif ((            // line 29
($context["value"] ?? null) == "full_service")) {
                // line 30
                echo "                                        Полный выставочный сервис
                                    ";
            } else {
                // line 32
                echo "                                        ";
                echo twig_escape_filter($this->env, ($context["value"] ?? null));
                echo "
                                    ";
            }
            // line 34
            echo "                                ";
        } elseif (($this->getAttribute(($context["field"] ?? null), "type", []) == "checkboxes")) {
            // line 35
            echo "                                    <ul>
                                        ";
            // line 36
            $context["use_keys"] = ($this->getAttribute(($context["field"] ?? null), "use", [], "any", true, true) && ($this->getAttribute(($context["field"] ?? null), "use", []) == "keys"));
            // line 37
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 38
                echo "                                            ";
                $context["index"] = ((($context["use_keys"] ?? null)) ? ($context["key"]) : ($context["value"]));
                // line 39
                echo "                                            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), ($context["index"] ?? null), [], "array")));
                echo "</li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                    </ul>
                                ";
        } elseif (($this->getAttribute(        // line 42
($context["field"] ?? null), "type", []) == "radio")) {
            // line 43
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), ($context["value"] ?? null), [], "array")));
            echo "
                                ";
        } elseif (($this->getAttribute(        // line 44
($context["field"] ?? null), "type", []) == "checkbox")) {
            // line 45
            echo "                                    ";
            echo ((($this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method") == 1)) ? (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GRAV.YES"))) : (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GRAV.NO"))));
            echo "
                                ";
        } elseif (($this->getAttribute(        // line 46
($context["field"] ?? null), "type", []) == "select")) {
            // line 47
            echo "                                    ";
            if (twig_test_iterable(($context["value"] ?? null))) {
                // line 48
                echo "                                        <ul>
                                            ";
                // line 49
                $context["use_keys"] = ($this->getAttribute(($context["field"] ?? null), "use", [], "any", true, true) && ($this->getAttribute(($context["field"] ?? null), "use", []) == "keys"));
                // line 50
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 51
                    echo "                                                ";
                    $context["index"] = ((($context["use_keys"] ?? null)) ? ($context["key"]) : ($context["val"]));
                    // line 52
                    echo "                                                <li>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), ($context["index"] ?? null), [], "array")));
                    echo "</li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                                        </ul>
                                    ";
            } else {
                // line 56
                echo "                                        ";
                if (($this->getAttribute(($context["field"] ?? null), "options", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", [], "any", false, true), ($context["value"] ?? null), [], "array", true, true))) {
                    // line 57
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), ($context["value"] ?? null), [], "array")));
                    echo "
                                        ";
                } else {
                    // line 59
                    echo "                                            ";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null));
                    echo "
                                        ";
                }
                // line 61
                echo "                                    ";
            }
            // line 62
            echo "                                ";
        } else {
            // line 63
            echo "                                    ";
            if (twig_test_iterable(($context["value"] ?? null))) {
                // line 64
                echo "                                        <ul>
                                            ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 66
                    echo "                                                ";
                    if (twig_test_iterable($context["val"])) {
                        // line 67
                        echo "                                                    <ul>
                                                        ";
                        // line 68
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["val"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                            // line 69
                            echo "                                                            <li>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($context["v"]));
                            echo "</li>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 71
                        echo "                                                    </ul>
                                                ";
                    } else {
                        // line 73
                        echo "                                                    <li>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($context["val"]));
                        echo "</li>
                                                ";
                    }
                    // line 75
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                                        </ul>
                                    ";
            } else {
                // line 78
                echo "                                        ";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
                echo "
                                    ";
            }
            // line 80
            echo "                                ";
        }
        // line 81
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
                            // line 84
                            echo "                ";
                        }
                        // line 85
                        echo "            ";
                    }
                    // line 86
                    echo "        ";
                }
                // line 87
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
        return "forms/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 87,  334 => 86,  331 => 85,  328 => 84,  325 => 13,  323 => 12,  321 => 11,  318 => 10,  313 => 8,  311 => 7,  308 => 6,  306 => 5,  289 => 4,  286 => 3,  283 => 2,  269 => 1,  265 => 81,  262 => 80,  256 => 78,  252 => 76,  246 => 75,  240 => 73,  236 => 71,  227 => 69,  223 => 68,  220 => 67,  217 => 66,  213 => 65,  210 => 64,  207 => 63,  204 => 62,  201 => 61,  195 => 59,  189 => 57,  186 => 56,  182 => 54,  173 => 52,  170 => 51,  165 => 50,  163 => 49,  160 => 48,  157 => 47,  155 => 46,  150 => 45,  148 => 44,  143 => 43,  141 => 42,  138 => 41,  129 => 39,  126 => 38,  121 => 37,  119 => 36,  116 => 35,  113 => 34,  107 => 32,  103 => 30,  101 => 29,  98 => 28,  96 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  68 => 16,  65 => 15,  60 => 82,  58 => 19,  55 => 18,  53 => 15,  50 => 14,  47 => 13,  41 => 92,  38 => 91,  36 => 90,  33 => 89,);
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
                                {% set value = form.value(scope ~ field.name) %}
                                {% set field_name = field.name ?? index %}
                                
                                {# Special handling for service field regardless of field type #}
                                {% if field_name == 'service' %}
                                    {% if value == 'development' %}
                                        Разработка и строительство выставочных стендов
                                    {% elseif value == 'design' %}
                                        Дизайн выставочных стендов
                                    {% elseif value == 'full_service' %}
                                        Полный выставочный сервис
                                    {% else %}
                                        {{ value|e }}
                                    {% endif %}
                                {% elseif field.type == 'checkboxes' %}
                                    <ul>
                                        {% set use_keys = field.use is defined and field.use == 'keys' %}
                                        {% for key,value in form.value(scope ~ field.name) %}
                                            {% set index = (use_keys ? key : value) %}
                                            <li>{{ field.options[index]|t|e }}</li>
                                        {% endfor %}
                                    </ul>
                                {% elseif field.type == 'radio' %}
                                    {{ field.options[value]|t|e }}
                                {% elseif field.type == 'checkbox' %}
                                    {{ (form.value(scope ~ field.name) == 1) ? \"GRAV.YES\"|t|e : \"GRAV.NO\"|t|e }}
                                {% elseif field.type == 'select' %}
                                    {% if value is iterable %}
                                        <ul>
                                            {% set use_keys = field.use is defined and field.use == 'keys' %}
                                            {% for key, val in value %}
                                                {% set index = (use_keys ? key : val) %}
                                                <li>{{ field.options[index]|t|e }}</li>
                                            {% endfor %}
                                        </ul>
                                    {% else %}
                                        {% if field.options is defined and field.options[value] is defined %}
                                            {{ field.options[value]|t|e }}
                                        {% else %}
                                            {{ value|e }}
                                        {% endif %}
                                    {% endif %}
                                {% else %}
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
", "forms/data.html.twig", "/home/ivan/grav-admin/user/plugins/form/templates/forms/data.html.twig");
    }
}
