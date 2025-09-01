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

/* forms/fields/permissions/permissions.html.twig */
class __TwigTemplate_7db61dc1b9feec6b657f7b985b1dde3ec4f38e047dda7f794d8511a18040530e extends \Twig\Template
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
        // line 115
        $context["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/permissions/permissions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 117
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 118
        echo "    data-grav-disabled=\"";
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 119
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
";
    }

    // line 122
    public function block_input($context, array $blocks = [])
    {
        // line 123
        echo "    ";
        $context["options"] = ["1" => "PLUGIN_ADMIN.ALLOWED", "0" => "PLUGIN_ADMIN.DENIED", "" => "PLUGIN_ADMIN.NOT_SET"];
        // line 124
        echo "    ";
        $context["maxLen"] = 0;
        // line 125
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 126
            echo "        ";
            $context["maxLen"] = max(twig_length_filter($this->env, twig_trim_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $context["text"]))), ($context["maxLen"] ?? null));
            // line 127
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
    ";
        // line 129
        $context["permissions"] = $this->getAttribute(($context["grav"] ?? null), "permissions", []);
        // line 130
        echo "    ";
        $context["access"] = $this->getAttribute(($context["permissions"] ?? null), "access", [0 => ($context["value"] ?? null)], "method");
        // line 131
        echo "    ";
        if ((($context["object"] ?? null) && $this->getAttribute(($context["field"] ?? null), "check_authorize", []))) {
            // line 132
            echo "        ";
            $context["auth_badges"] = true;
            // line 133
            echo "        ";
            $context["super"] = $this->getAttribute(($context["object"] ?? null), "authorize", [0 => "admin.super", 1 => "test"], "method");
            // line 134
            echo "    ";
        }
        // line 135
        echo "
    <div class=\"permissions-container\">
        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 138
            echo "            ";
            if ($this->getAttribute($context["section"], "count", [])) {
                // line 139
                echo "            ";
                echo $context["macro"]->getsection($context["section"], $context, 0);
                echo "
            ";
            }
            // line 141
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "
        ";
        // line 144
        echo "        ";
        ob_start(function () { return ''; });
        // line 145
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["access"] ?? null), "getAllActions", [], "method"));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 146
            echo "            ";
            if ( !$this->getAttribute(($context["permissions"] ?? null), "getAction", [0 => $context["key"]], "method")) {
                // line 147
                echo "            ";
                echo $context["macro"]->getaction(["name" => $context["key"]], $context);
                echo "
            ";
            }
            // line 149
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "        ";
        $context["unknown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        echo "
        ";
        // line 152
        if (twig_trim_filter(($context["unknown"] ?? null))) {
            // line 153
            echo "            <fieldset>
                <legend>Unknown Permissions</legend>
                ";
            // line 155
            echo ($context["unknown"] ?? null);
            echo "
            </fieldset>
        ";
        }
        // line 158
        echo "    </div>
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
            echo "    ";
            $context["space"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2));
            // line 5
            echo "    ";
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

    // line 8
    public function getsection($__section__ = null, $__context__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "section" => $__section__,
            "context" => $__context__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 9
            echo "    ";
            $context["macro"] = $this;
            // line 10
            echo "
    ";
            // line 11
            $context["section_label"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ((($this->getAttribute(($context["section"] ?? null), "label", [], "any", true, true) &&  !(null === $this->getAttribute(($context["section"] ?? null), "label", [])))) ? ($this->getAttribute(($context["section"] ?? null), "label", [])) : ($this->getAttribute(($context["section"] ?? null), "name", []))));
            // line 12
            echo "
    ";
            // line 14
            echo "    ";
            if ((($context["depth"] ?? null) > 0)) {
                // line 15
                echo "
        ";
                // line 16
                $context["section_value"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "access", []), "get", [0 => $this->getAttribute(($context["section"] ?? null), "name", [])], "method"));
                // line 17
                echo "        ";
                $context["params"] = ["context" =>                 // line 18
($context["context"] ?? null), "action_label" =>                 // line 19
($context["section_label"] ?? null), "action_value" =>                 // line 20
($context["section_value"] ?? null), "action_name" => $this->getAttribute(                // line 21
($context["section"] ?? null), "name", []), "action_class" => "parent-section"];
                // line 25
                echo "
        ";
                // line 26
                echo $context["macro"]->getaction_row(($context["params"] ?? null));
                echo "
    ";
            }
            // line 28
            echo "
    <fieldset>
        ";
            // line 30
            if ((($context["depth"] ?? null) == 0)) {
                // line 31
                echo "        <legend>";
                echo twig_escape_filter($this->env, ($context["section_label"] ?? null), "html", null, true);
                echo "</legend>
        ";
            }
            // line 33
            echo "
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["section"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 35
                echo "            ";
                if ($this->getAttribute($context["action"], "visible", [])) {
                    // line 36
                    echo "            ";
                    if ($this->getAttribute($context["action"], "count", [])) {
                        // line 37
                        echo "                ";
                        echo $context["macro"]->getsection($context["action"], ($context["context"] ?? null), (($context["depth"] ?? null) + 1));
                        echo "
            ";
                    } else {
                        // line 39
                        echo "                ";
                        echo $context["macro"]->getaction($context["action"], ($context["context"] ?? null));
                        echo "
            ";
                    }
                    // line 41
                    echo "            ";
                }
                // line 42
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
    </fieldset>

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

    // line 48
    public function getaction($__action__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "action" => $__action__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 49
            echo "    ";
            $context["macro"] = $this;
            // line 50
            echo "
    ";
            // line 51
            $context["action_label"] = ((($this->getAttribute(($context["action"] ?? null), "label", [], "any", true, true) &&  !(null === $this->getAttribute(($context["action"] ?? null), "label", [])))) ? ($this->getAttribute(($context["action"] ?? null), "label", [])) : ($this->getAttribute(($context["action"] ?? null), "name", [])));
            // line 52
            echo "    ";
            $context["action_value"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "access", []), "get", [0 => $this->getAttribute(($context["action"] ?? null), "name", [])], "method"));
            // line 53
            echo "
    ";
            // line 54
            $context["params"] = ["context" =>             // line 55
($context["context"] ?? null), "action_label" =>             // line 56
($context["action_label"] ?? null), "action_value" =>             // line 57
($context["action_value"] ?? null), "action_name" => $this->getAttribute(            // line 58
($context["action"] ?? null), "name", []), "action_parent" => $this->getAttribute($this->getAttribute(            // line 59
($context["action"] ?? null), "getParent", [], "method"), "name", [])];
            // line 62
            echo "
    ";
            // line 63
            echo $context["macro"]->getaction_row(($context["params"] ?? null));
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

    // line 66
    public function getaction_row($__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 67
            echo "    ";
            $context["macro"] = $this;
            // line 68
            echo "
    ";
            // line 69
            $context["context"] = $this->getAttribute(($context["data"] ?? null), "context", []);
            // line 70
            echo "    ";
            $context["field"] = $this->getAttribute(($context["context"] ?? null), "field", []);
            // line 71
            echo "
    <div class=\"permission-container ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "action_class", []), "html", null, true);
            echo "\">
        <div class=\"permission-name\">
            <span>";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["data"] ?? null), "action_label", [])), "html", null, true);
            echo "</span>
            ";
            // line 75
            if ($this->getAttribute(($context["context"] ?? null), "auth_badges", [])) {
                // line 76
                echo "                ";
                $context["auth"] = ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "object", [], "any", false, true), "authorize", [0 => $this->getAttribute(($context["data"] ?? null), "action_name", []), 1 => "test"], "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["context"] ?? null), "object", [], "any", false, true), "authorize", [0 => $this->getAttribute(($context["data"] ?? null), "action_name", []), 1 => "test"], "method")))) ? ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "object", [], "any", false, true), "authorize", [0 => $this->getAttribute(($context["data"] ?? null), "action_name", []), 1 => "test"], "method")) : ($this->getAttribute(($context["context"] ?? null), "super", [])));
                // line 77
                echo "                ";
                if (($this->getAttribute(($context["context"] ?? null), "super", []) && ($context["auth"] ?? null))) {
                    // line 78
                    echo "                    <span class=\"badge badge-super\"><i class=\"icon-super\"></i></span>
                ";
                } elseif (                // line 79
($context["auth"] ?? null)) {
                    // line 80
                    echo "                    <span class=\"badge badge-access\"><i class=\"fa fa-check\"></i></span>
                ";
                } else {
                    // line 82
                    echo "                    <span class=\"badge badge-denied\"><i class=\"fa fa-ban\"></i></span>
                ";
                }
                // line 84
                echo "            ";
            }
            // line 85
            echo "        </div>

        <div class=\"switch-toggle switch-grav medium switch-3\">
            ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "options", []));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 89
                echo "                ";
                $context["parent_id"] = (($this->getAttribute(($context["data"] ?? null), "action_parent", [])) ? (((("toggle_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . ".") . $this->getAttribute(($context["data"] ?? null), "action_parent", []))) : (""));
                // line 90
                echo "                ";
                $context["id"] = (((("toggle_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . ".") . $this->getAttribute(($context["data"] ?? null), "action_name", [])) . $context["key"]);
                // line 91
                echo "                ";
                $context["translation"] = twig_trim_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $context["text"]));
                // line 92
                echo "
                <input type=\"radio\"
                       value=\"";
                // line 94
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                       id=\"";
                // line 95
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"
                       ";
                // line 96
                if (($context["parent_id"] ?? null)) {
                    // line 97
                    echo "                       data-parent-id=\"";
                    echo twig_escape_filter($this->env, ($context["parent_id"] ?? null), "html", null, true);
                    echo "\"
                       ";
                }
                // line 99
                echo "                       name=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter(($this->getAttribute(($context["context"] ?? null), "scope", []) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "action_name", []), "html", null, true);
                echo "]\"
                       class=\"label";
                // line 100
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                    ";
                // line 101
                if (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter($context["key"]) == ("" . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter($this->getAttribute(($context["data"] ?? null), "action_value", []))))) {
                    // line 102
                    echo "                        checked=\"checked\"
                    ";
                }
                // line 104
                echo "                    ";
                if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "yes", 1 => "on", 2 => "true", 3 => 1, 4 => true])) {
                    echo "required=\"required\"";
                }
                // line 105
                echo "                />

                <label for=\"";
                // line 107
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">";
                echo twig_trim_filter($context["macro"]->getspanToggle(($context["translation"] ?? null), $this->getAttribute(($context["context"] ?? null), "maxLen", [])));
                echo "</label>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "            <a></a>
        </div>
    </div>

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
        return "forms/fields/permissions/permissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 109,  495 => 107,  491 => 105,  486 => 104,  482 => 102,  480 => 101,  476 => 100,  469 => 99,  463 => 97,  461 => 96,  457 => 95,  453 => 94,  449 => 92,  446 => 91,  443 => 90,  440 => 89,  436 => 88,  431 => 85,  428 => 84,  424 => 82,  420 => 80,  418 => 79,  415 => 78,  412 => 77,  409 => 76,  407 => 75,  403 => 74,  398 => 72,  395 => 71,  392 => 70,  390 => 69,  387 => 68,  384 => 67,  372 => 66,  355 => 63,  352 => 62,  350 => 59,  349 => 58,  348 => 57,  347 => 56,  346 => 55,  345 => 54,  342 => 53,  339 => 52,  337 => 51,  334 => 50,  331 => 49,  318 => 48,  300 => 43,  294 => 42,  291 => 41,  285 => 39,  279 => 37,  276 => 36,  273 => 35,  269 => 34,  266 => 33,  260 => 31,  258 => 30,  254 => 28,  249 => 26,  246 => 25,  244 => 21,  243 => 20,  242 => 19,  241 => 18,  239 => 17,  237 => 16,  234 => 15,  231 => 14,  228 => 12,  226 => 11,  223 => 10,  220 => 9,  206 => 8,  188 => 5,  185 => 4,  172 => 3,  167 => 158,  161 => 155,  157 => 153,  155 => 152,  152 => 151,  149 => 150,  143 => 149,  137 => 147,  134 => 146,  129 => 145,  126 => 144,  123 => 142,  117 => 141,  111 => 139,  108 => 138,  104 => 137,  100 => 135,  97 => 134,  94 => 133,  91 => 132,  88 => 131,  85 => 130,  83 => 129,  80 => 128,  74 => 127,  71 => 126,  66 => 125,  63 => 124,  60 => 123,  57 => 122,  51 => 119,  46 => 118,  43 => 117,  38 => 1,  36 => 115,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/permissions/permissions.html.twig", "/home/ivan/grav-admin/user/plugins/admin/themes/grav/templates/forms/fields/permissions/permissions.html.twig");
    }
}
