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

/* forms/form.html.twig */
class __TwigTemplate_80162278a09a3120349868166b6796af2f260c3d12300bc46d670943ad31cacd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'xhr' => [$this, 'block_xhr'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return "forms/default/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/default/form.html.twig", "forms/form.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_xhr($context, array $blocks = [])
    {
        // line 33
        $this->loadTemplate("forms/layouts/xhr.html.twig", "forms/form.html.twig", 33)->display($context);
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 33,  39 => 32,  29 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/form.html.twig", "/home/ivan/gravPr/gravExpo/user/plugins/form/templates/forms/form.html.twig");
    }
}
