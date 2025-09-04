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

/* forms/fields/toggle/toggle.html.twig */
class __TwigTemplate_1c3f4a24580d6802d9306aefa25cd6f51871b8d9b10f01c717330e54d98cef2d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 8
        $context["macro"] = $this;
        // line 10
        $context["has_hidden"] = false;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 12
            if (twig_test_empty($context["key"])) {
                // line 13
                $context["has_hidden"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/toggle/toggle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 18
        echo "  ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
  data-grav-field-name=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
";
    }

    // line 22
    public function block_input($context, array $blocks = [])
    {
        // line 23
        echo "  <div class=\"switch-toggle switch-grav ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " switch-";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "options", [])), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\">
    ";
        // line 24
        $context["maxLen"] = 0;
        // line 25
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 26
            echo "      ";
            $context["translation"] = twig_trim_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $context["text"]));
            // line 27
            echo "      ";
            $context["maxLen"] = max(twig_length_filter($this->env, ($context["translation"] ?? null)), ($context["maxLen"] ?? null));
            // line 28
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    ";
        // line 31
        echo "    ";
        $context["highlight"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($this->getAttribute(($context["field"] ?? null), "highlight", []));
        // line 32
        echo "    ";
        $context["value"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter((($context["value"]) ?? ((($context["default"]) ?? (($context["highlight"] ?? null))))));
        // line 33
        echo "
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 35
            echo "      ";
            $context["key"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($context["key"]);
            // line 36
            echo "      ";
            $context["id"] = (((($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "id", [])))) ? ($this->getAttribute(($context["field"] ?? null), "id", [])) : (("toggle_" . $this->getAttribute(($context["field"] ?? null), "name", [])))) . $context["key"]);
            // line 37
            echo "      ";
            $context["translation"] = twig_trim_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $context["text"]));
            // line 38
            echo "
      <input type=\"radio\"
             value=\"";
            // line 40
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
             id=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"
             name=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
             ";
            // line 43
            if ((($context["highlight"] ?? null) === $context["key"])) {
                echo "class=\"highlight\"";
            }
            // line 44
            echo "             ";
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 45
            echo "             ";
            if (($context["key"] === ($context["value"] ?? null))) {
                echo "checked=\"checked\"";
            }
            // line 46
            echo "             ";
            if (($context["required"] ?? null)) {
                echo "required=\"required\"";
            }
            // line 47
            echo "             ";
            if ($this->getAttribute(($context["field"] ?? null), "tabindex", [])) {
                echo "tabindex=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "tabindex", []), "html", null, true);
                echo "\"";
            }
            // line 48
            echo "      />
      <label for=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">";
            echo twig_trim_filter($context["macro"]->getspanToggle(($context["translation"] ?? null), ($context["maxLen"] ?? null)));
            echo "</label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  </div>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            echo "  ";
            $context["space"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2));
            // line 5
            echo "  ";
            echo ((($context["space"] ?? null) . ($context["input"] ?? null)) . ($context["space"] ?? null));
            echo "
";
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
        return "forms/fields/toggle/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 5,  201 => 4,  188 => 3,  183 => 51,  173 => 49,  170 => 48,  163 => 47,  158 => 46,  153 => 45,  148 => 44,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 38,  125 => 37,  122 => 36,  119 => 35,  115 => 34,  112 => 33,  109 => 32,  106 => 31,  103 => 29,  97 => 28,  94 => 27,  91 => 26,  86 => 25,  84 => 24,  75 => 23,  72 => 22,  66 => 19,  61 => 18,  58 => 17,  53 => 1,  46 => 13,  44 => 12,  40 => 11,  38 => 10,  36 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/toggle/toggle.html.twig", "/home/ivan/gravPr/gravExpo/user/plugins/form/templates/forms/fields/toggle/toggle.html.twig");
    }
}
