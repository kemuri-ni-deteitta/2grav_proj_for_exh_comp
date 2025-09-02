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

/* forms/default/form.html.twig */
class __TwigTemplate_d3ec1aff4395066e3ff1bff2d6b2bc38bca7cec4ae3a0247a1310af9c666b7b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'xhr' => [$this, 'block_xhr'],
            'form_classes' => [$this, 'block_form_classes'],
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_fields' => [$this, 'block_inner_markup_fields'],
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'field' => [$this, 'block_field'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('xhr', $context, $blocks);
        // line 2
        $context["form"] = (($context["form"]) ?? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "form"], "method")));
        // line 3
        $context["layout"] = (($context["layout"]) ?? (((($this->getAttribute(($context["form"] ?? null), "layout", [], "any", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "layout", [])))) ? ($this->getAttribute(($context["form"] ?? null), "layout", [])) : ("default"))));
        // line 4
        $context["field_layout"] = (($context["field_layout"]) ?? (($context["layout"] ?? null)));
        // line 5
        echo "
";
        // line 7
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 7)->display($context);
        // line 8
        echo "
";
        // line 9
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ((($this->getAttribute(($context["form"] ?? null), "scope", [], "any", true, true)) ? ($this->getAttribute(($context["form"] ?? null), "scope", [])) : ("data."))));
        // line 10
        $context["multipart"] = "";
        // line 11
        $context["blueprints"] = (($context["blueprints"]) ?? ($this->getAttribute(($context["form"] ?? null), "blueprint", [], "method")));
        // line 12
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", [])), "POST");
        // line 13
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", []))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", [])) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "client_side_validation", []), true)));
        // line 14
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
        // line 15
        echo "
";
        // line 16
        $context["data"] = (($context["data"]) ?? ($this->getAttribute(($context["form"] ?? null), "data", [])));
        // line 17
        $context["context"] = (($context["context"]) ?? (($context["data"] ?? null)));
        // line 18
        echo "
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 20
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", []) == "file"))) {
                // line 21
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 22
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
        // line 25
        $context["action"] = (($context["action"]) ?? ((($this->getAttribute(($context["form"] ?? null), "action", [])) ? ($this->getAttribute(($context["form"] ?? null), "action", [])) : (($this->getAttribute(($context["page"] ?? null), "route", []) . $this->getAttribute(($context["uri"] ?? null), "params", []))))));
        // line 26
        $context["action"] = ((((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["action"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "http") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))) || (is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["action"] ?? null)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "#") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))))) ? (($context["action"] ?? null)) : ((($context["base_url"] ?? null) . ($context["action"] ?? null))));
        // line 27
        $context["action"] = twig_trim_filter(($context["action"] ?? null), "/", "right");
        // line 28
        echo "
";
        // line 29
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 30
            echo "    ";
            $context["action"] = (($context["base_url_relative"] ?? null) . "/");
        }
        // line 32
        echo "
";
        // line 33
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            // line 34
            echo "    ";
            if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "browser", []) == "msie") && ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "version", []) < 12))) {
                // line 35
                echo "        ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/object.assign.polyfill.js"], "method");
                // line 36
                echo "    ";
            }
            // line 37
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.vendor.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
            // line 38
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.min.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
        }
        // line 40
        echo "
";
        // line 41
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (((((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 44
($context["grav"] ?? null), "route", []), "withoutParams", [], "method"), "toString", [0 => true], "method")) . "',
        current_params: ") . twig_jsonencode_filter($this->getAttribute($this->getAttribute(        // line 45
($context["grav"] ?? null), "route", []), "params", []))) . ",
        param_sep: '") . $this->getAttribute($this->getAttribute(        // line 46
($context["config"] ?? null), "system", []), "param_sep", [])) . "',
        base_url_relative: '") .         // line 47
($context["base_url_relative"] ?? null)) . "',
        form_nonce: '") . $this->getAttribute(        // line 48
($context["form"] ?? null), "getNonce", [], "method")) . "',
        session_timeout: ") . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 49
($context["config"] ?? null), "system", []), "session", []), "timeout", [])) . "
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
"), 1 => ["group" => "bottom", "position" => "before", "priority" => 100]], "method");
        // line 53
        echo "
";
        // line 55
        ob_start(function () { return ''; });
        // line 56
        echo "  ";
        $this->displayBlock('form_classes', $context, $blocks);
        $context["override_form_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
";
        // line 61
        ob_start(function () { return ''; });
        // line 62
        echo "  ";
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        $context["override_inner_markup_fields_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "
";
        // line 65
        ob_start(function () { return ''; });
        // line 66
        echo "  ";
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        $context["override_inner_markup_fields_end"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo "
";
        // line 69
        ob_start(function () { return ''; });
        // line 70
        echo "  ";
        $this->displayBlock('inner_markup_fields', $context, $blocks);
        $context["override_inner_markup_fields"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "
";
        // line 87
        ob_start(function () { return ''; });
        // line 88
        echo "  ";
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        $context["override_inner_markup_buttons_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "
";
        // line 93
        ob_start(function () { return ''; });
        // line 94
        echo "  ";
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        $context["override_inner_markup_buttons_end"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "
";
        // line 100
        $this->loadTemplate("forms/default/form.html.twig", "forms/default/form.html.twig", 100, "186633855")->display($context);
        // line 203
        echo "

";
        // line 205
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "forms", []), "dropzone", []), "enabled", [])) {
            // line 206
            echo "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 207
            $this->loadTemplate("forms/dropzone/template.html.twig", "forms/default/form.html.twig", 207)->display($context);
            // line 208
            echo "</div>
";
        }
    }

    // line 1
    public function block_xhr($context, array $blocks = [])
    {
    }

    // line 56
    public function block_form_classes($context, array $blocks = [])
    {
        // line 57
        echo twig_escape_filter($this->env, ($context["form_outer_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "classes", []), "html", null, true);
    }

    // line 62
    public function block_inner_markup_fields_start($context, array $blocks = [])
    {
    }

    // line 66
    public function block_inner_markup_fields_end($context, array $blocks = [])
    {
    }

    // line 70
    public function block_inner_markup_fields($context, array $blocks = [])
    {
        // line 71
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
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
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 72
            echo "      ";
            $context["field"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->prepareFormField($context, $context["field"], $context["field_name"]);
            // line 73
            echo "      ";
            if ($context["field"]) {
                // line 74
                echo "        ";
                $context["value"] = ((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method")));
                // line 75
                echo "        ";
                $context["field_templates"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField($this->getAttribute($context["field"], "type", []), ($context["field_layout"] ?? null));
                // line 76
                echo "
        ";
                // line 77
                $this->displayBlock('inner_markup_field_open', $context, $blocks);
                // line 78
                echo "        ";
                $this->displayBlock('field', $context, $blocks);
                // line 81
                echo "        ";
                $this->displayBlock('inner_markup_field_close', $context, $blocks);
                // line 82
                echo "      ";
            }
            // line 83
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
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "  ";
    }

    // line 77
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
    }

    // line 78
    public function block_field($context, array $blocks = [])
    {
        // line 79
        echo "          ";
        $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = null;
        try {
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 =             $this->loadTemplate(($context["field_templates"] ?? null), "forms/default/form.html.twig", 79);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) {
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4->display($context);
        }
        // line 80
        echo "        ";
    }

    // line 81
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
    }

    // line 88
    public function block_inner_markup_buttons_start($context, array $blocks = [])
    {
        // line 89
        echo "  <div class=\"";
        ((($context["form_button_outer_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_button_outer_classes"] ?? null), "html", null, true))) : (print ("buttons")));
        echo "\">
  ";
    }

    // line 94
    public function block_inner_markup_buttons_end($context, array $blocks = [])
    {
        // line 95
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 95,  359 => 94,  352 => 89,  349 => 88,  344 => 81,  340 => 80,  329 => 79,  326 => 78,  321 => 77,  317 => 84,  303 => 83,  300 => 82,  297 => 81,  294 => 78,  292 => 77,  289 => 76,  286 => 75,  283 => 74,  280 => 73,  277 => 72,  259 => 71,  256 => 70,  251 => 66,  246 => 62,  240 => 57,  237 => 56,  232 => 1,  226 => 208,  224 => 207,  221 => 206,  219 => 205,  215 => 203,  213 => 100,  210 => 98,  206 => 94,  204 => 93,  201 => 92,  197 => 88,  195 => 87,  192 => 86,  188 => 70,  186 => 69,  183 => 68,  179 => 66,  177 => 65,  174 => 64,  170 => 62,  168 => 61,  165 => 60,  161 => 56,  159 => 55,  156 => 53,  151 => 49,  149 => 48,  147 => 47,  145 => 46,  143 => 45,  141 => 44,  137 => 41,  134 => 40,  130 => 38,  127 => 37,  124 => 36,  121 => 35,  118 => 34,  116 => 33,  113 => 32,  109 => 30,  107 => 29,  104 => 28,  102 => 27,  100 => 26,  98 => 25,  95 => 24,  88 => 22,  85 => 21,  82 => 20,  78 => 19,  75 => 18,  73 => 17,  71 => 16,  68 => 15,  66 => 14,  64 => 13,  62 => 12,  60 => 11,  58 => 10,  56 => 9,  53 => 8,  51 => 7,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/default/form.html.twig", "/home/ivan/grav-admin/user/plugins/form/templates/forms/default/form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_d3ec1aff4395066e3ff1bff2d6b2bc38bca7cec4ae3a0247a1310af9c666b7b6___186633855 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_form_custom_attributes' => [$this, 'block_embed_form_custom_attributes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 100
        return "forms/layouts/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/layouts/form.html.twig", "forms/default/form.html.twig", 100);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 102
    public function block_embed_form_core($context, array $blocks = [])
    {
        // line 103
        echo "    name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "name", []), "html", null, true);
        echo "\"
    action=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\"
    method=\"";
        // line 105
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
    ";
        // line 106
        if ($this->getAttribute(($context["form"] ?? null), "id", [])) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "id", []), "html", null, true);
            echo "\"";
        }
        // line 107
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", [])) {
            echo "novalidate";
        }
        // line 108
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            echo "data-grav-keepalive=\"true\"";
        }
        // line 109
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "attributes", [], "any", true, true)) {
            // line 110
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "attributes", []));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 111
                echo "        ";
                if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->ofTypeFunc($context["attribute"], "array")) {
                    // line 112
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []), "html_attr");
                    echo "\"
        ";
                } else {
                    // line 114
                    echo "          ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                    echo "\"
        ";
                }
                // line 116
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "    ";
        }
        // line 118
        echo "  ";
    }

    // line 120
    public function block_embed_form_classes($context, array $blocks = [])
    {
        // line 121
        echo "class=\"";
        $this->displayParentBlock("embed_form_classes", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["override_form_classes"] ?? null)), "html", null, true);
        echo "\"";
    }

    // line 124
    public function block_embed_form_custom_attributes($context, array $blocks = [])
    {
        // line 125
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "form", []), "attributes", []));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 126
            echo "      ";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["v"]);
            echo "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "  ";
    }

    // line 130
    public function block_embed_fields($context, array $blocks = [])
    {
        // line 131
        echo "    ";
        echo ($context["override_inner_markup_fields_start"] ?? null);
        echo "
    ";
        // line 132
        echo ($context["override_inner_markup_fields"] ?? null);
        echo "

    ";
        // line 134
        if (((($this->getAttribute(($context["form"] ?? null), "isEnabled", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "isEnabled", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "isEnabled", [], "method")) : (true))) {
            // line 135
            echo "    ";
            $this->loadTemplate($this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField("formname", ($context["field_layout"] ?? null), "hidden"), "forms/default/form.html.twig", 135)->display($context);
            // line 136
            echo "    ";
            $this->loadTemplate($this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField("formtask", ($context["field_layout"] ?? null), "hidden"), "forms/default/form.html.twig", 136)->display($context);
            // line 137
            echo "    ";
            $this->loadTemplate($this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField("uniqueid", ($context["field_layout"] ?? null), "hidden"), "forms/default/form.html.twig", 137)->display($context);
            // line 138
            echo "    ";
            $this->loadTemplate($this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField("nonce", ($context["field_layout"] ?? null), "hidden"), "forms/default/form.html.twig", 138)->display($context);
            // line 139
            echo "    ";
        }
        // line 140
        echo "
    ";
        // line 141
        echo ($context["override_inner_markup_fields_end"] ?? null);
        echo "
  ";
    }

    // line 144
    public function block_embed_buttons($context, array $blocks = [])
    {
        // line 145
        echo "    ";
        echo ($context["override_inner_markup_buttons_start"] ?? null);
        echo "

    ";
        // line 147
        if (((($this->getAttribute(($context["form"] ?? null), "isEnabled", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "isEnabled", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "isEnabled", [], "method")) : (true))) {
            // line 148
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 149
                echo "      ";
                if (( !$this->getAttribute($context["button"], "access", []) || $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize($this->getAttribute($context["button"], "access", [])))) {
                    // line 150
                    echo "      ";
                    if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                        echo "<div class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "outerclasses", []), "html", null, true);
                        echo "\">";
                    }
                    // line 151
                    echo "
      ";
                    // line 152
                    if ($this->getAttribute($context["button"], "url", [])) {
                        // line 153
                        echo "      ";
                        $context["button_url"] = (((is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $this->getAttribute($context["button"], "url", [])) && is_string($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = "http") && ('' === $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e || 0 === strpos($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666, $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e)))) ? ($this->getAttribute($context["button"], "url", [])) : ((($context["base_url"] ?? null) . $this->getAttribute($context["button"], "url", []))));
                        // line 154
                        echo "      ";
                    }
                    // line 155
                    echo "
      ";
                    // line 156
                    $this->loadTemplate("forms/default/form.html.twig", "forms/default/form.html.twig", 156, "1856830731")->display($context);
                    // line 193
                    echo "
      ";
                    // line 194
                    if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                        echo "</div>";
                    }
                    // line 195
                    echo "      ";
                }
                // line 196
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "    ";
        }
        // line 198
        echo "
    ";
        // line 199
        echo twig_escape_filter($this->env, ($context["override_inner_markup_buttons_end"] ?? null), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  657 => 199,  654 => 198,  651 => 197,  637 => 196,  634 => 195,  630 => 194,  627 => 193,  625 => 156,  622 => 155,  619 => 154,  616 => 153,  614 => 152,  611 => 151,  604 => 150,  601 => 149,  583 => 148,  581 => 147,  575 => 145,  572 => 144,  566 => 141,  563 => 140,  560 => 139,  557 => 138,  554 => 137,  551 => 136,  548 => 135,  546 => 134,  541 => 132,  536 => 131,  533 => 130,  529 => 128,  518 => 126,  513 => 125,  510 => 124,  502 => 121,  499 => 120,  495 => 118,  492 => 117,  486 => 116,  478 => 114,  470 => 112,  467 => 111,  462 => 110,  459 => 109,  454 => 108,  449 => 107,  443 => 106,  437 => 105,  433 => 104,  428 => 103,  425 => 102,  415 => 100,  362 => 95,  359 => 94,  352 => 89,  349 => 88,  344 => 81,  340 => 80,  329 => 79,  326 => 78,  321 => 77,  317 => 84,  303 => 83,  300 => 82,  297 => 81,  294 => 78,  292 => 77,  289 => 76,  286 => 75,  283 => 74,  280 => 73,  277 => 72,  259 => 71,  256 => 70,  251 => 66,  246 => 62,  240 => 57,  237 => 56,  232 => 1,  226 => 208,  224 => 207,  221 => 206,  219 => 205,  215 => 203,  213 => 100,  210 => 98,  206 => 94,  204 => 93,  201 => 92,  197 => 88,  195 => 87,  192 => 86,  188 => 70,  186 => 69,  183 => 68,  179 => 66,  177 => 65,  174 => 64,  170 => 62,  168 => 61,  165 => 60,  161 => 56,  159 => 55,  156 => 53,  151 => 49,  149 => 48,  147 => 47,  145 => 46,  143 => 45,  141 => 44,  137 => 41,  134 => 40,  130 => 38,  127 => 37,  124 => 36,  121 => 35,  118 => 34,  116 => 33,  113 => 32,  109 => 30,  107 => 29,  104 => 28,  102 => 27,  100 => 26,  98 => 25,  95 => 24,  88 => 22,  85 => 21,  82 => 20,  78 => 19,  75 => 18,  73 => 17,  71 => 16,  68 => 15,  66 => 14,  64 => 13,  62 => 12,  60 => 11,  58 => 10,  56 => 9,  53 => 8,  51 => 7,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/default/form.html.twig", "/home/ivan/grav-admin/user/plugins/form/templates/forms/default/form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_d3ec1aff4395066e3ff1bff2d6b2bc38bca7cec4ae3a0247a1310af9c666b7b6___1856830731 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'embed_button_core' => [$this, 'block_embed_button_core'],
            'embed_button_classes' => [$this, 'block_embed_button_classes'],
            'button_classes' => [$this, 'block_button_classes'],
            'embed_button_content' => [$this, 'block_embed_button_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 156
        return "forms/layouts/button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/layouts/button.html.twig", "forms/default/form.html.twig", 156);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 157
    public function block_embed_button_core($context, array $blocks = [])
    {
        // line 158
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "id", [])) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "id", []), "html", null, true);
            echo "\"";
        }
        // line 159
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "disabled", [])) {
            echo "disabled=\"disabled\"";
        }
        // line 160
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "name", [])) {
            // line 161
            echo "            name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "name", []), "html", null, true);
            echo "\"
          ";
        } else {
            // line 163
            echo "            ";
            if ($this->getAttribute(($context["button"] ?? null), "task", [])) {
                echo "name=\"task\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "task", []), "html", null, true);
                echo "\"";
            }
            // line 164
            echo "          ";
        }
        // line 165
        echo "          type=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["button"] ?? null), "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "type", []), "submit")) : ("submit")), "html", null, true);
        echo "\"
          ";
        // line 166
        if ($this->getAttribute(($context["button"] ?? null), "attributes", [], "any", true, true)) {
            // line 167
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["button"] ?? null), "attributes", []));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 168
                echo "              ";
                if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->ofTypeFunc($context["attribute"], "array")) {
                    // line 169
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []), "html_attr");
                    echo "\"
              ";
                } else {
                    // line 171
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                    echo "\"
              ";
                }
                // line 173
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "          ";
        }
        // line 175
        echo "        ";
    }

    // line 177
    public function block_embed_button_classes($context, array $blocks = [])
    {
        // line 178
        echo "          ";
        $this->displayBlock('button_classes', $context, $blocks);
        // line 181
        echo "        ";
    }

    // line 178
    public function block_button_classes($context, array $blocks = [])
    {
        // line 179
        echo "            class=\"";
        ((($context["form_button_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_button_classes"] ?? null), "html", null, true))) : (print ("button")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "classes", []), "html", null, true);
        echo "\"
          ";
    }

    // line 183
    public function block_embed_button_content($context, array $blocks = [])
    {
        // line 184
        $context["button_value"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["button"] ?? null), "value", [])), "Submit");
        // line 185
        if ($this->getAttribute(($context["button"] ?? null), "html", [])) {
            // line 186
            echo twig_trim_filter(($context["button_value"] ?? null));
        } else {
            // line 188
            echo twig_escape_filter($this->env, twig_trim_filter(($context["button_value"] ?? null)));
        }
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  830 => 188,  827 => 186,  825 => 185,  823 => 184,  820 => 183,  811 => 179,  808 => 178,  804 => 181,  801 => 178,  798 => 177,  794 => 175,  791 => 174,  785 => 173,  777 => 171,  769 => 169,  766 => 168,  761 => 167,  759 => 166,  754 => 165,  751 => 164,  744 => 163,  738 => 161,  735 => 160,  730 => 159,  723 => 158,  720 => 157,  710 => 156,  657 => 199,  654 => 198,  651 => 197,  637 => 196,  634 => 195,  630 => 194,  627 => 193,  625 => 156,  622 => 155,  619 => 154,  616 => 153,  614 => 152,  611 => 151,  604 => 150,  601 => 149,  583 => 148,  581 => 147,  575 => 145,  572 => 144,  566 => 141,  563 => 140,  560 => 139,  557 => 138,  554 => 137,  551 => 136,  548 => 135,  546 => 134,  541 => 132,  536 => 131,  533 => 130,  529 => 128,  518 => 126,  513 => 125,  510 => 124,  502 => 121,  499 => 120,  495 => 118,  492 => 117,  486 => 116,  478 => 114,  470 => 112,  467 => 111,  462 => 110,  459 => 109,  454 => 108,  449 => 107,  443 => 106,  437 => 105,  433 => 104,  428 => 103,  425 => 102,  415 => 100,  362 => 95,  359 => 94,  352 => 89,  349 => 88,  344 => 81,  340 => 80,  329 => 79,  326 => 78,  321 => 77,  317 => 84,  303 => 83,  300 => 82,  297 => 81,  294 => 78,  292 => 77,  289 => 76,  286 => 75,  283 => 74,  280 => 73,  277 => 72,  259 => 71,  256 => 70,  251 => 66,  246 => 62,  240 => 57,  237 => 56,  232 => 1,  226 => 208,  224 => 207,  221 => 206,  219 => 205,  215 => 203,  213 => 100,  210 => 98,  206 => 94,  204 => 93,  201 => 92,  197 => 88,  195 => 87,  192 => 86,  188 => 70,  186 => 69,  183 => 68,  179 => 66,  177 => 65,  174 => 64,  170 => 62,  168 => 61,  165 => 60,  161 => 56,  159 => 55,  156 => 53,  151 => 49,  149 => 48,  147 => 47,  145 => 46,  143 => 45,  141 => 44,  137 => 41,  134 => 40,  130 => 38,  127 => 37,  124 => 36,  121 => 35,  118 => 34,  116 => 33,  113 => 32,  109 => 30,  107 => 29,  104 => 28,  102 => 27,  100 => 26,  98 => 25,  95 => 24,  88 => 22,  85 => 21,  82 => 20,  78 => 19,  75 => 18,  73 => 17,  71 => 16,  68 => 15,  66 => 14,  64 => 13,  62 => 12,  60 => 11,  58 => 10,  56 => 9,  53 => 8,  51 => 7,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/default/form.html.twig", "/home/ivan/grav-admin/user/plugins/form/templates/forms/default/form.html.twig");
    }
}
