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

/* forms/fields/file/file.html.twig */
class __TwigTemplate_3679891bef720a0d4bfb7eb436b2e3706f55d3270bd5bd25a686f399fd8ab651 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'file_extras' => [$this, 'block_file_extras'],
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
        // line 52
        $context["macro"] = $this;
        // line 54
        $context["defaults"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []);
        // line 55
        $context["files"] = twig_array_merge($this->getAttribute(($context["defaults"] ?? null), "files", []), ((array_key_exists("field", $context)) ? (_twig_default_filter(($context["field"] ?? null), [])) : ([])));
        // line 56
        $context["limit"] = (( !$this->getAttribute(($context["field"] ?? null), "multiple", [])) ? (1) : ($this->getAttribute(($context["files"] ?? null), "limit", [])));
        // line 58
        $this->getAttribute(($context["config"] ?? null), "set", [0 => "forms.dropzone.enabled", 1 => true], "method");
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/file/file.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 60
    public function block_input($context, array $blocks = [])
    {
        // line 61
        echo "    ";
        $context["page_can_upload"] = (($context["exists"] ?? null) || (((($context["type"] ?? null) == "page") &&  !($context["exists"] ?? null)) &&  !((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->getAttribute(($context["field"] ?? null), "destination", [])) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "@self") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))) || (is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $this->getAttribute(($context["field"] ?? null), "destination", [])) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "self@") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))))));
        // line 62
        echo "    ";
        $context["max_filesize"] = (((($this->getAttribute(($context["field"] ?? null), "filesize", []) > ($context["form_max_filesize"] ?? null)) || ($this->getAttribute(($context["field"] ?? null), "filesize", []) == 0))) ? (($context["form_max_filesize"] ?? null)) : ($this->getAttribute(($context["field"] ?? null), "filesize", [])));
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('prepend', $context, $blocks);
        // line 65
        echo "    ";
        $context["settings"] = ["name" => $this->getAttribute(($context["field"] ?? null), "name", []), "paramName" => ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . (($this->getAttribute(($context["files"] ?? null), "multiple", [])) ? ("[]") : (""))), "limit" => ($context["limit"] ?? null), "filesize" => ($context["max_filesize"] ?? null), "accept" => $this->getAttribute(($context["files"] ?? null), "accept", []), "resolution" => $this->getAttribute(($context["files"] ?? null), "resolution", []), "resizeWidth" => $this->getAttribute(($context["files"] ?? null), "resizeWidth", []), "resizeHeight" => $this->getAttribute(($context["files"] ?? null), "resizeHeight", []), "resizeQuality" => $this->getAttribute(($context["files"] ?? null), "resizeQuality", [])];
        // line 66
        echo "    ";
        $context["dropzoneSettings"] = $this->getAttribute(($context["field"] ?? null), "dropzone", []);
        // line 67
        echo "    ";
        $context["file_url_add"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "getFileUploadAjaxRoute", [], "method"), "getUri", [], "method");
        // line 68
        echo "    ";
        $context["file_url_remove"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "getFileDeleteAjaxRoute", [0 => null, 1 => null], "method"), "getUri", [], "method");
        // line 69
        echo "    <div class=\"";
        ((($context["form_field_wrapper_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true))) : (print ("form-input-wrapper")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo " dropzone files-upload form-input-file ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\"
         data-grav-file-settings=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["settings"] ?? null)), "html_attr");
        echo "\"
         data-dropzone-options=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dropzoneSettings"] ?? null)), "html_attr");
        echo "\"
         ";
        // line 72
        if (($context["file_url_add"] ?? null)) {
            echo "data-file-url-add=\"";
            echo twig_escape_filter($this->env, ($context["file_url_add"] ?? null), "html_attr");
            echo "\"";
        }
        // line 73
        echo "         ";
        if (($context["file_url_remove"] ?? null)) {
            echo "data-file-url-remove=\"";
            echo twig_escape_filter($this->env, ($context["file_url_remove"] ?? null), "html_attr");
            echo "\"";
        }
        echo ">
        ";
        // line 74
        $this->displayBlock('file_extras', $context, $blocks);
        // line 75
        echo "        <input
                ";
        // line 77
        echo "                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 86
        echo "        />

        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["path"] => $context["file"]) {
            // line 89
            echo "            ";
            echo $context["macro"]->getpreview($context["path"], $context["file"], $context);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['path'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        ";
        $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "forms/fields/file/file.html.twig", 91)->display(twig_array_merge($context, ["field" => ["name" => ("_json." . $this->getAttribute(($context["field"] ?? null), "name", []))], "value" => twig_jsonencode_filter((($context["value"]) ?? ([])))]));
        // line 92
        echo "

    </div>
    ";
        // line 95
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 96
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, ($context["form_field_inline_error_classes"] ?? null), "html", null, true);
            echo "\">
      <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 97
            echo twig_first($this->env, ($context["errors"] ?? null));
            echo "</p>
    </div>
    ";
        }
        // line 100
        echo "
    ";
        // line 101
        if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "browser", []) == "msie") && ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "version", []) < 12))) {
            // line 102
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/object.assign.polyfill.js"], "method");
            // line 103
            echo "    ";
        }
        // line 104
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 105
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.vendor.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
        // line 106
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.min.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
        // line 107
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://form/assets/dropzone.min.css", 1 => ["group" => "form"]], "method");
        // line 108
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [0 => "form"], "method");
        echo "
    ";
        // line 109
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (((((((((((((((((((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm = Object.assign({}, window.GravForm, {
        translations: {
            PLUGIN_FORM: {
                'DROPZONE_CANCEL_UPLOAD': " . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.DROPZONE_CANCEL_UPLOAD"))) . ",
                'DROPZONE_CANCEL_UPLOAD_CONFIRMATION': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.DROPZONE_CANCEL_UPLOAD_CONFIRMATION"))) . ",
                'DROPZONE_DEFAULT_MESSAGE': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.DROPZONE_DEFAULT_MESSAGE"))) . ",
                'DROPZONE_FALLBACK_MESSAGE': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.DROPZONE_FALLBACK_MESSAGE"))) . ",
                'DROPZONE_FALLBACK_TEXT': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.DROPZONE_FALLBACK_TEXT"))) . ",
                'DROPZONE_FILE_TOO_BIG': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.DROPZONE_FILE_TOO_BIG"))) . ",
                'DROPZONE_INVALID_FILE_TYPE': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.DROPZONE_INVALID_FILE_TYPE"))) . ",
                'DROPZONE_MAX_FILES_EXCEEDED': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.DROPZONE_MAX_FILES_EXCEEDED"))) . ",
                'DROPZONE_REMOVE_FILE': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.DROPZONE_REMOVE_FILE"))) . ",
                'DROPZONE_REMOVE_FILE_CONFIRMATION': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.DROPZONE_REMOVE_FILE_CONFIRMATION"))) . ",
                'DROPZONE_RESPONSE_ERROR': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.DROPZONE_RESPONSE_ERROR"))) . ",
                'RESOLUTION_MIN': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.RESOLUTION_MIN"))) . ",
                'RESOLUTION_MAX': ") . twig_jsonencode_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_FORM.RESOLUTION_MAX"))) . "
            }
        }
    });
    "), 1 => ["group" => "bottom", "position" => "before"]], "method");
    }

    // line 64
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 74
    public function block_file_extras($context, array $blocks = [])
    {
    }

    // line 77
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 78
        echo "                    type=\"file\"
                    ";
        // line 79
        if ($this->getAttribute(($context["files"] ?? null), "multiple", [])) {
            echo "multiple=\"multiple\"";
        }
        // line 80
        echo "                    ";
        if ($this->getAttribute(($context["files"] ?? null), "accept", [])) {
            echo "accept=\"";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["files"] ?? null), "accept", []), ","), "html", null, true);
            echo "\"";
        }
        // line 81
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "disabled", [])) {
            echo "disabled=\"disabled\"";
        }
        // line 82
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "random_name", [])) {
            echo "random=\"true\"";
        }
        // line 83
        echo "                    ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 84
        echo "                    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
                ";
    }

    // line 3
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            ob_start(function () { return ''; });
            // line 5
            echo "        ";
            $context["kilobyte"] = 1024;
            // line 6
            echo "        ";
            $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
            // line 7
            echo "        ";
            $context["gigabyte"] = (($context["megabyte"] ?? null) * 1024);
            // line 8
            echo "        ";
            $context["terabyte"] = (($context["gigabyte"] ?? null) * 1024);
            // line 9
            echo "
        ";
            // line 10
            if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " B"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 12
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2, ".") . " KB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 14
($context["bytes"] ?? null) < ($context["gigabyte"] ?? null))) {
                // line 15
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2, ".") . " MB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 16
($context["bytes"] ?? null) < ($context["terabyte"] ?? null))) {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["gigabyte"] ?? null)), 2, ".") . " GB"), "html", null, true);
                echo "
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["terabyte"] ?? null)), 2, ".") . " TB"), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getpreview($__path__ = null, $__value__ = null, $__global__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "path" => $__path__,
            "value" => $__value__,
            "global" => $__global__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 25
            echo "    ";
            if (($context["value"] ?? null)) {
                // line 26
                echo "        ";
                $context["uri"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "grav", []), "uri", []);
                // line 27
                echo "        ";
                $context["files"] = $this->getAttribute(($context["global"] ?? null), "files", []);
                // line 28
                echo "        ";
                $context["config"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "grav", []), "config", []);
                // line 29
                echo "        ";
                $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", []), "route", [], "method"), "toString", [0 => true], "method");
                // line 30
                echo "        ";
                $context["type"] = (( !(null === $this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", []), "content", [], "method"))) ? ("pages") : ((($this->getAttribute(($context["global"] ?? null), "plugin", [])) ? ("plugins") : ((($this->getAttribute(($context["global"] ?? null), "theme", [])) ? ("themes") : ("config"))))));
                // line 31
                echo "        ";
                $context["blueprint_name"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "blueprints", []), "getFilename", []);
                // line 32
                echo "        ";
                if ((($context["type"] ?? null) == "pages")) {
                    // line 33
                    echo "            ";
                    $context["blueprint_name"] = ((($context["type"] ?? null) . "/") . ($context["blueprint_name"] ?? null));
                    // line 34
                    echo "        ";
                }
                // line 35
                echo "        ";
                $context["blueprint"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->base64EncodeFilter(($context["blueprint_name"] ?? null));
                // line 36
                echo "        ";
                $context["real_path"] = ((($this->getAttribute(($context["value"] ?? null), "thumb", [], "any", true, true) &&  !(null === $this->getAttribute(($context["value"] ?? null), "thumb", [])))) ? ($this->getAttribute(($context["value"] ?? null), "thumb", [])) : (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", [], "any", false, true), "media", [], "any", false, true), ($context["path"] ?? null), [], "array", false, true), "relativePath", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", [], "any", false, true), "media", [], "any", false, true), ($context["path"] ?? null), [], "array", false, true), "relativePath", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", [], "any", false, true), "media", [], "any", false, true), ($context["path"] ?? null), [], "array", false, true), "relativePath", [])) : ($this->getAttribute($this->getAttribute(($context["global"] ?? null), "form", []), "getPagePathFromToken", [0 => ($context["path"] ?? null)], "method")))));
                // line 37
                echo "        ";
                $context["remove"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "form", []), "getFileDeleteAjaxRoute", [0 => $this->getAttribute(($context["files"] ?? null), "name", []), 1 => ($context["path"] ?? null)], "method"), "toString", [0 => true], "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["global"] ?? null), "form", []), "getFileDeleteAjaxRoute", [0 => $this->getAttribute(($context["files"] ?? null), "name", []), 1 => ($context["path"] ?? null)], "method"), "toString", [0 => true], "method")) : ($this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((((((((((((((((((($this->getAttribute(                // line 38
($context["global"] ?? null), "base_url_relative", []) . "/media.json") . "/task") . $this->getAttribute($this->getAttribute(                // line 40
($context["config"] ?? null), "system", []), "param_sep", [])) . "removeFileFromBlueprint") . "/proute") . $this->getAttribute($this->getAttribute(                // line 41
($context["config"] ?? null), "system", []), "param_sep", [])) . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->base64EncodeFilter(($context["route"] ?? null))) . "/blueprint") . $this->getAttribute($this->getAttribute(                // line 42
($context["config"] ?? null), "system", []), "param_sep", [])) . ($context["blueprint"] ?? null)) . "/type") . $this->getAttribute($this->getAttribute(                // line 43
($context["config"] ?? null), "system", []), "param_sep", [])) . ($context["type"] ?? null)) . "/field") . $this->getAttribute($this->getAttribute(                // line 44
($context["config"] ?? null), "system", []), "param_sep", [])) . $this->getAttribute(($context["files"] ?? null), "name", [])) . "/path") . $this->getAttribute($this->getAttribute(                // line 45
($context["config"] ?? null), "system", []), "param_sep", [])) . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->base64EncodeFilter($this->getAttribute(($context["value"] ?? null), "path", []))), 1 => "admin-form", 2 => "admin-nonce"], "method")));
                // line 46
                echo "
        ";
                // line 47
                $context["file"] = twig_array_merge(($context["value"] ?? null), ["remove" => ($context["remove"] ?? null), "path" => ((($this->getAttribute(($context["value"] ?? null), "thumb_url", [], "any", true, true) &&  !(null === $this->getAttribute(($context["value"] ?? null), "thumb_url", [])))) ? ($this->getAttribute(($context["value"] ?? null), "thumb_url", [])) : (((($this->getAttribute(($context["uri"] ?? null), "rootUrl", []) == "/")) ? ("/") : ((($this->getAttribute(($context["uri"] ?? null), "rootUrl", []) . "/") . ($context["real_path"] ?? null))))))]);
                // line 48
                echo "        <div class=\"hidden\" data-file=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["file"] ?? null)), "html_attr");
                echo "\"></div>
    ";
            }
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
        return "forms/fields/file/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 48,  402 => 47,  399 => 46,  397 => 45,  396 => 44,  395 => 43,  394 => 42,  393 => 41,  392 => 40,  391 => 38,  389 => 37,  386 => 36,  383 => 35,  380 => 34,  377 => 33,  374 => 32,  371 => 31,  368 => 30,  365 => 29,  362 => 28,  359 => 27,  356 => 26,  353 => 25,  339 => 24,  323 => 21,  317 => 19,  311 => 17,  309 => 16,  304 => 15,  302 => 14,  297 => 13,  295 => 12,  290 => 11,  288 => 10,  285 => 9,  282 => 8,  279 => 7,  276 => 6,  273 => 5,  271 => 4,  259 => 3,  252 => 84,  247 => 83,  242 => 82,  237 => 81,  230 => 80,  226 => 79,  223 => 78,  220 => 77,  215 => 74,  210 => 64,  185 => 109,  180 => 108,  177 => 107,  174 => 106,  171 => 105,  168 => 104,  165 => 103,  162 => 102,  160 => 101,  157 => 100,  151 => 97,  146 => 96,  144 => 95,  139 => 92,  136 => 91,  127 => 89,  123 => 88,  119 => 86,  116 => 77,  113 => 75,  111 => 74,  102 => 73,  96 => 72,  92 => 71,  88 => 70,  79 => 69,  76 => 68,  73 => 67,  70 => 66,  67 => 65,  65 => 64,  62 => 63,  59 => 62,  56 => 61,  53 => 60,  48 => 1,  46 => 58,  44 => 56,  42 => 55,  40 => 54,  38 => 52,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/file/file.html.twig", "/home/ivan/grav-admin/user/plugins/form/templates/forms/fields/file/file.html.twig");
    }
}
