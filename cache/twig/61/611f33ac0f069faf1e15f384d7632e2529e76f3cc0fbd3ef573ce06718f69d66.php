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

/* partials/blueprints-raw.html.twig */
class __TwigTemplate_79813ed73aed909f10e979a771dd36feeead2956353c842054ee4f6a6063ec7f extends \Twig\Template
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
        $context["form_id"] = ((($context["form_id"] ?? null)) ? (($context["form_id"] ?? null)) : ("blueprints"));
        // line 2
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 3
        $context["field_layout"] = "admin";
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute(($context["admin"] ?? null), "findFormFields", [0 => "file", 1 => $this->getAttribute(($context["blueprints"] ?? null), "fields", [])], "method")) {
            // line 6
            echo "    ";
            $context["multipart"] = " enctype=\"multipart/form-data\"";
        }
        // line 8
        echo "
<form ";
        // line 9
        if (($context["form_action"] ?? null)) {
            echo "action=\"";
            echo twig_escape_filter($this->env, ($context["form_action"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " id=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" method=\"post\" data-grav-form=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" data-grav-keepalive=\"true\"";
        echo ($context["multipart"] ?? null);
        echo ">
    ";
        // line 10
        $this->loadTemplate("partials/blueprints-raw.html.twig", "partials/blueprints-raw.html.twig", 10, "468583712")->display(twig_array_merge($context, ["name" => null, "fields" => $this->getAttribute(($context["blueprints"] ?? null), "fields", [])]));
        // line 14
        echo "
    ";
        // line 15
        if (($context["form"] ?? null)) {
            // line 16
            echo "        ";
            $this->loadTemplate("forms/fields/formname/formname.html.twig", "partials/blueprints-raw.html.twig", 16)->display($context);
            // line 17
            echo "        ";
            $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "partials/blueprints-raw.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method"), $this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method"));
            echo "
    ";
        } else {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc("admin-form", "admin-nonce");
            echo "
    ";
        }
        // line 22
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "partials/blueprints-raw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  81 => 20,  75 => 18,  72 => 17,  69 => 16,  67 => 15,  64 => 14,  62 => 10,  48 => 9,  45 => 8,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/blueprints-raw.html.twig", "/home/ivan/gravPr/gravExpo/user/plugins/admin/themes/grav/templates/partials/blueprints-raw.html.twig");
    }
}


/* partials/blueprints-raw.html.twig */
class __TwigTemplate_79813ed73aed909f10e979a771dd36feeead2956353c842054ee4f6a6063ec7f___468583712 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "partials/blueprints-raw.html.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        echo "<div class=\"block block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\">";
    }

    // line 12
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/blueprints-raw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 12,  147 => 11,  137 => 10,  87 => 22,  81 => 20,  75 => 18,  72 => 17,  69 => 16,  67 => 15,  64 => 14,  62 => 10,  48 => 9,  45 => 8,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/blueprints-raw.html.twig", "/home/ivan/gravPr/gravExpo/user/plugins/admin/themes/grav/templates/partials/blueprints-raw.html.twig");
    }
}
