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

/* user.html.twig */
class __TwigTemplate_3a9c65a56192bf7547b97154cb6cdb65b50997586e3fbf43c7a27c7762e93c0b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        if ($this->getAttribute(($context["admin"] ?? null), "route", [])) {
            // line 4
            $context["user"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("users/" . $this->getAttribute(($context["admin"] ?? null), "route", []))], "method");
            // line 5
            $context["title"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.USER") . ": ") . twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "route", [])));
        } else {
            // line 7
            $context["title"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN_PRO.USERS");
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_titlebar($context, array $blocks = [])
    {
        // line 11
        echo "    ";
        if ( !$this->getAttribute(($context["admin"] ?? null), "route", [])) {
            // line 12
            echo "        ";
            if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize([0 => "admin.users", 1 => "admin.super"])) {
                // line 13
                echo "            <div class=\"button-bar\">
                <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ADD_ACCOUNT"), "html", null, true);
                echo "</a>
            </div>
            <h1><i class=\"fa fa-fw fa-users\"></i> ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.USERS"), "html", null, true);
                echo "</h1>
        ";
            } else {
                // line 18
                echo "            <h1>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ACCESS_DENIED"), "html", null, true);
                echo "</h1>
        ";
            }
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        ";
            if (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize([0 => "admin.users", 1 => "admin.super"]) || ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []) == $this->getAttribute(($context["user"] ?? null), "username", [])))) {
                // line 22
                echo "            <div class=\"button-bar\">
                ";
                // line 23
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin-pro", [], "array"), "enabled", [])) {
                    // line 24
                    echo "                <a class=\"button\" href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                    echo "/users\"><i class=\"fa fa-reply\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 26
                echo "                <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SAVE"), "html", null, true);
                echo "</button>
            </div>
            <h1><i class=\"fa fa-fw fa-user\"></i> ";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.USER"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", []), "html", null, true);
                echo "</h1>
        ";
            } else {
                // line 30
                echo "            <h1>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ACCESS_DENIED"), "html", null, true);
                echo "</h1>
        ";
            }
            // line 32
            echo "    ";
        }
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        // line 36
        echo "    ";
        if (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize([0 => "admin.users", 1 => "admin.super"]) || ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []) == $this->getAttribute(($context["user"] ?? null), "username", [])))) {
            // line 37
            echo "    <div>
        ";
            // line 38
            if ( !$this->getAttribute(($context["admin"] ?? null), "route", [])) {
                // line 39
                echo "            ";
                $this->loadTemplate("partials/users-list.html.twig", "user.html.twig", 39)->display($context);
                // line 40
                echo "
            <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
                ";
                // line 42
                $this->loadTemplate("partials/blueprints-new.html.twig", "user.html.twig", 42)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "user/account_new"], "method")]));
                // line 43
                echo "            </div>
        ";
            } else {
                // line 45
                echo "            ";
                $this->loadTemplate("partials/blueprints.html.twig", "user.html.twig", 45)->display(twig_array_merge($context, ["data" => ($context["user"] ?? null), "blueprints" => $this->getAttribute(($context["user"] ?? null), "blueprints", [])]));
                // line 46
                echo "        ";
            }
            // line 47
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"changes\">
        <form>
            <h1>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE"), "html", null, true);
            echo "</h1>
            <p class=\"bigger\">
                ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC"), "html", null, true);
            echo "
            </p>
            <br>
            <div class=\"button-bar\">
                <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
            echo "</a>
                <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</a>
            </div>
        </form>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 58,  170 => 57,  163 => 53,  158 => 51,  152 => 47,  149 => 46,  146 => 45,  142 => 43,  140 => 42,  136 => 40,  133 => 39,  131 => 38,  128 => 37,  125 => 36,  122 => 35,  117 => 32,  111 => 30,  104 => 28,  98 => 26,  90 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  73 => 18,  68 => 16,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  46 => 1,  43 => 7,  40 => 5,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "user.html.twig", "/home/ivan/grav-admin/user/plugins/admin/themes/grav/templates/user.html.twig");
    }
}
