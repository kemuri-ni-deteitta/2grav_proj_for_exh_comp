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

/* partials/blueprints-new.html.twig */
class __TwigTemplate_251980694e5fe6a295e0d1c000098313dca6368a3cd71622134b87531dd23359 extends \Twig\Template
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
<form ";
        // line 5
        if (($context["form_action"] ?? null)) {
            echo "action=\"";
            echo twig_escape_filter($this->env, ($context["form_action"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " id=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" method=\"post\" data-grav-form=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", [])) {
            echo "novalidate";
        }
        echo " data-grav-keepalive=\"true\">
    ";
        // line 6
        $this->loadTemplate("partials/blueprints-new.html.twig", "partials/blueprints-new.html.twig", 6, "1087480916")->display(twig_array_merge($context, ["name" => null, "fields" => $this->getAttribute(($context["blueprints"] ?? null), "fields", [])]));
        // line 10
        echo "
    <input type=\"hidden\" name=\"task\" value=\"continue\" />
    <div class=\"button-bar\">
        <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
        <button class=\"button success\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "

</form>
";
    }

    public function getTemplateName()
    {
        return "partials/blueprints-new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  66 => 14,  62 => 13,  57 => 10,  55 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/blueprints-new.html.twig", "/home/ivan/gravPr/gravExpo/user/plugins/admin/themes/grav/templates/partials/blueprints-new.html.twig");
    }
}


/* partials/blueprints-new.html.twig */
class __TwigTemplate_251980694e5fe6a295e0d1c000098313dca6368a3cd71622134b87531dd23359___1087480916 extends \Twig\Template
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
        // line 6
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "partials/blueprints-new.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        echo "<div class=\"block block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\">";
    }

    // line 8
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/blueprints-new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 8,  135 => 7,  125 => 6,  72 => 17,  66 => 14,  62 => 13,  57 => 10,  55 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/blueprints-new.html.twig", "/home/ivan/gravPr/gravExpo/user/plugins/admin/themes/grav/templates/partials/blueprints-new.html.twig");
    }
}
