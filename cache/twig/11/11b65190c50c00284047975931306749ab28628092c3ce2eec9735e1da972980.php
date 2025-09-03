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

/* login.html.twig */
class __TwigTemplate_07636606da289483213faec4e473615bcb8103574f251bf30c551a4f392e8e1b extends \Twig\Template
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
        $context["user"] = $this->getAttribute(($context["grav"] ?? null), "user", []);
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute(($context["user"] ?? null), "username", []) && $this->getAttribute(($context["user"] ?? null), "authenticated", []))) {
            // line 4
            echo "    ";
            if (( !$this->getAttribute(($context["user"] ?? null), "authorized", []) && $this->getAttribute(($context["user"] ?? null), "twofa_enabled", []))) {
                // line 5
                echo "        ";
                $this->loadTemplate("partials/login-twofa.html.twig", "login.html.twig", 5)->display($context);
                // line 6
                echo "    ";
            } else {
                // line 7
                echo "        ";
                $this->loadTemplate("partials/login-logout.html.twig", "login.html.twig", 7)->display($context);
                // line 8
                echo "    ";
            }
        } else {
            // line 10
            echo "    ";
            $this->loadTemplate("partials/login-form.html.twig", "login.html.twig", 10)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 8,  46 => 7,  43 => 6,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "login.html.twig", "/home/ivan/grav-admin/user/plugins/admin/themes/grav/templates/login.html.twig");
    }
}
