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

/* partners.html.twig */
class __TwigTemplate_3de77fe5ed7753319539d6fc04e8fe46d579990e0bb11a472661a672b88d4dff extends \Twig\Template
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
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partners.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titlebar($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if ($this->getAttribute(($context["grav"] ?? null), "admin", [])) {
            // line 7
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_route')->getCallable(), ["/pages"]), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
            <button class=\"button success\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\" style=\"background: #77559D !important; color: white !important;\"><i class=\"fa fa-check\"></i> ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        if ( !$this->getAttribute(($context["grav"] ?? null), "admin", [])) {
            // line 17
            echo "        <div class=\"content-wrapper\">
            <div class=\"container ";
            // line 18
            echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
            echo "\">
                <!-- Page Content -->
                <div class=\"page-content\">
                    ";
            // line 21
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
                </div>

                <!-- Partners Section -->
                ";
            // line 25
            if ($this->getAttribute(($context["header"] ?? null), "partners", [])) {
                // line 26
                echo "                <section class=\"partners-section\">
                    <div class=\"partners-grid\">
                        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "partners", []));
                foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                    // line 29
                    echo "                        <div class=\"partner-item\">
                            <div class=\"partner-card\">
                                ";
                    // line 31
                    $context["partner_logo"] = null;
                    // line 32
                    echo "                
                                ";
                    // line 34
                    echo "                                ";
                    if ($this->getAttribute($context["partner"], "logo_upload", [])) {
                        // line 35
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["partner"], "logo_upload", []));
                        foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                            // line 36
                            echo "                                        ";
                            if (( !($context["partner_logo"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                // line 37
                                echo "                                            ";
                                $context["partner_logo"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                // line 38
                                echo "                                        ";
                            }
                            // line 39
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                                ";
                    }
                    // line 41
                    echo "                                
                                ";
                    // line 42
                    if (($context["partner_logo"] ?? null)) {
                        // line 43
                        echo "                                <div class=\"partner-logo\">
                                    ";
                        // line 44
                        if ($this->getAttribute($context["partner"], "website", [])) {
                            // line 45
                            echo "                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "website", []), "html", null, true);
                            echo "\" target=\"_blank\" rel=\"noopener\">
                                            <img src=\"";
                            // line 46
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["partner_logo"] ?? null), "url", []), "html", null, true);
                            echo "\" 
                                                 alt=\"";
                            // line 47
                            (($this->getAttribute($context["partner"], "company_name", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["partner"], "company_name", []), "html", null, true))) : (print ("Логотип партнера")));
                            echo "\"
                                                 loading=\"lazy\">
                                        </a>
                                    ";
                        } else {
                            // line 51
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["partner_logo"] ?? null), "url", []), "html", null, true);
                            echo "\" 
                                             alt=\"";
                            // line 52
                            (($this->getAttribute($context["partner"], "company_name", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["partner"], "company_name", []), "html", null, true))) : (print ("Логотип партнера")));
                            echo "\"
                                             loading=\"lazy\">
                                    ";
                        }
                        // line 55
                        echo "                                </div>
                                ";
                    }
                    // line 57
                    echo "                                
                                <div class=\"partner-content\">
                                    ";
                    // line 59
                    if ($this->getAttribute($context["partner"], "company_name", [])) {
                        // line 60
                        echo "                                    <h3 class=\"company-name\">
                                        ";
                        // line 61
                        if ($this->getAttribute($context["partner"], "website", [])) {
                            // line 62
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "website", []), "html", null, true);
                            echo "\" target=\"_blank\" rel=\"noopener\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "company_name", []), "html", null, true);
                            echo "</a>
                                        ";
                        } else {
                            // line 64
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "company_name", []), "html", null, true);
                            echo "
                                        ";
                        }
                        // line 66
                        echo "                                    </h3>
                                    ";
                    }
                    // line 68
                    echo "                                    
                                    ";
                    // line 69
                    if ($this->getAttribute($context["partner"], "partnership_type", [])) {
                        // line 70
                        echo "                                    <div class=\"partnership-type partnership-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "partnership_type", []), "html", null, true);
                        echo "\">
                                        ";
                        // line 71
                        if (($this->getAttribute($context["partner"], "partnership_type", []) == "client")) {
                            // line 72
                            echo "                                            Клиент
                                        ";
                        } elseif (($this->getAttribute(                        // line 73
$context["partner"], "partnership_type", []) == "partner")) {
                            // line 74
                            echo "                                            Партнер
                                        ";
                        } elseif (($this->getAttribute(                        // line 75
$context["partner"], "partnership_type", []) == "supplier")) {
                            // line 76
                            echo "                                            Поставщик
                                        ";
                        } elseif (($this->getAttribute(                        // line 77
$context["partner"], "partnership_type", []) == "strategic")) {
                            // line 78
                            echo "                                            Стратегический партнер
                                        ";
                        }
                        // line 80
                        echo "                                    </div>
                                    ";
                    }
                    // line 82
                    echo "                                    
                                    ";
                    // line 83
                    if ($this->getAttribute($context["partner"], "description", [])) {
                        // line 84
                        echo "                                    <p class=\"partner-description\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "description", []), "html", null, true);
                        echo "</p>
                                    ";
                    }
                    // line 86
                    echo "                                </div>
                            </div>
                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                    </div>
                    
                    ";
                // line 92
                if ((twig_length_filter($this->env, $this->getAttribute(($context["header"] ?? null), "partners", [])) == 0)) {
                    // line 93
                    echo "                    <div class=\"no-partners\">
                        <p>Информация о партнерах будет добавлена в ближайшее время.</p>
                    </div>
                    ";
                }
                // line 97
                echo "                </section>
                ";
            }
            // line 99
            echo "            </div>
        </div>
    ";
        }
        // line 102
        echo "
    <style>
    /* Partners Grid Styles */
    .partners-section {
        margin-top: 2rem;
    }

    .partners-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }

    .partner-item {
        display: flex;
        flex-direction: column;
    }

    .partner-card {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid #f0f0f0;
    }

    .partner-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        border-color: #77559D;
    }

    .partner-logo {
        position: relative;
        overflow: hidden;
        background: #ffffff;
        min-height: 120px;
        max-height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
        border-bottom: 1px solid #f5f5f5;
    }

    .partner-logo img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
        filter: grayscale(20%);
    }

    .partner-logo:hover img {
        transform: scale(1.05);
        filter: grayscale(0%);
    }

    .partner-logo a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
    }

    .partner-content {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    .company-name {
        font-size: 1.1rem;
        font-weight: 600;
        color: #2c2c2c;
        margin: 0 0 0.5rem 0;
        line-height: 1.4;
    }

    .company-name a {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .company-name a:hover {
        color: #77559D;
    }

    .partnership-type {
        font-size: 0.85rem;
        font-weight: 500;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        margin: 0 auto 1rem auto;
        width: fit-content;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .partnership-client {
        background: #e3f2fd;
        color: #1976d2;
    }

    .partnership-partner {
        background: #f3e5f5;
        color: #77559D;
    }

    .partnership-supplier {
        background: #e8f5e8;
        color: #388e3c;
    }

    .partnership-strategic {
        background: #fff3e0;
        color: #f57c00;
    }

    .partner-description {
        font-size: 0.9rem;
        line-height: 1.5;
        color: #666;
        margin: 0;
        flex: 1;
    }

    .no-partners {
        text-align: center;
        padding: 3rem 1rem;
        color: #666;
    }

    /* Logo Spacing by Partnership Type */
    .partnership-strategic .partner-logo {
        background: linear-gradient(135deg, #fff3e0 0%, #ffffff 100%);
    }

    .partnership-partner .partner-logo {
        background: linear-gradient(135deg, #f3e5f5 0%, #ffffff 100%);
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .partners-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        
        .partner-content {
            padding: 1rem;
        }
        
        .partner-logo {
            min-height: 100px;
            max-height: 120px;
            padding: 1rem;
        }
    }

    @media (max-width: 480px) {
        .partners-grid {
            grid-template-columns: 1fr;
        }
    }
    </style>
";
    }

    public function getTemplateName()
    {
        return "partners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 102,  278 => 99,  274 => 97,  268 => 93,  266 => 92,  262 => 90,  253 => 86,  247 => 84,  245 => 83,  242 => 82,  238 => 80,  234 => 78,  232 => 77,  229 => 76,  227 => 75,  224 => 74,  222 => 73,  219 => 72,  217 => 71,  212 => 70,  210 => 69,  207 => 68,  203 => 66,  197 => 64,  189 => 62,  187 => 61,  184 => 60,  182 => 59,  178 => 57,  174 => 55,  168 => 52,  163 => 51,  156 => 47,  152 => 46,  147 => 45,  145 => 44,  142 => 43,  140 => 42,  137 => 41,  134 => 40,  128 => 39,  125 => 38,  122 => 37,  119 => 36,  114 => 35,  111 => 34,  108 => 32,  106 => 31,  102 => 29,  98 => 28,  94 => 26,  92 => 25,  85 => 21,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  63 => 11,  58 => 9,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  38 => 1,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set grid_size = theme_var('grid-size') %}

{% block titlebar %}
    {% if grav.admin %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ admin_route('/pages') }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|t }}</a>
            <button class=\"button success\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\" style=\"background: #77559D !important; color: white !important;\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|t }}</button>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ page.title }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    {% if not grav.admin %}
        <div class=\"content-wrapper\">
            <div class=\"container {{ grid_size }}\">
                <!-- Page Content -->
                <div class=\"page-content\">
                    {{ page.content|raw }}
                </div>

                <!-- Partners Section -->
                {% if header.partners %}
                <section class=\"partners-section\">
                    <div class=\"partners-grid\">
                        {% for partner in header.partners %}
                        <div class=\"partner-item\">
                            <div class=\"partner-card\">
                                {% set partner_logo = null %}
                
                                {# Check for uploaded logo #}
                                {% if partner.logo_upload %}
                                    {% for filepath, filedata in partner.logo_upload %}
                                        {% if not partner_logo and filedata.name %}
                                            {% set partner_logo = page.media[filedata.name] %}
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                                
                                {% if partner_logo %}
                                <div class=\"partner-logo\">
                                    {% if partner.website %}
                                        <a href=\"{{ partner.website }}\" target=\"_blank\" rel=\"noopener\">
                                            <img src=\"{{ partner_logo.url }}\" 
                                                 alt=\"{{ partner.company_name ?: 'Логотип партнера' }}\"
                                                 loading=\"lazy\">
                                        </a>
                                    {% else %}
                                        <img src=\"{{ partner_logo.url }}\" 
                                             alt=\"{{ partner.company_name ?: 'Логотип партнера' }}\"
                                             loading=\"lazy\">
                                    {% endif %}
                                </div>
                                {% endif %}
                                
                                <div class=\"partner-content\">
                                    {% if partner.company_name %}
                                    <h3 class=\"company-name\">
                                        {% if partner.website %}
                                            <a href=\"{{ partner.website }}\" target=\"_blank\" rel=\"noopener\">{{ partner.company_name }}</a>
                                        {% else %}
                                            {{ partner.company_name }}
                                        {% endif %}
                                    </h3>
                                    {% endif %}
                                    
                                    {% if partner.partnership_type %}
                                    <div class=\"partnership-type partnership-{{ partner.partnership_type }}\">
                                        {% if partner.partnership_type == 'client' %}
                                            Клиент
                                        {% elseif partner.partnership_type == 'partner' %}
                                            Партнер
                                        {% elseif partner.partnership_type == 'supplier' %}
                                            Поставщик
                                        {% elseif partner.partnership_type == 'strategic' %}
                                            Стратегический партнер
                                        {% endif %}
                                    </div>
                                    {% endif %}
                                    
                                    {% if partner.description %}
                                    <p class=\"partner-description\">{{ partner.description }}</p>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                    
                    {% if header.partners|length == 0 %}
                    <div class=\"no-partners\">
                        <p>Информация о партнерах будет добавлена в ближайшее время.</p>
                    </div>
                    {% endif %}
                </section>
                {% endif %}
            </div>
        </div>
    {% endif %}

    <style>
    /* Partners Grid Styles */
    .partners-section {
        margin-top: 2rem;
    }

    .partners-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }

    .partner-item {
        display: flex;
        flex-direction: column;
    }

    .partner-card {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid #f0f0f0;
    }

    .partner-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        border-color: #77559D;
    }

    .partner-logo {
        position: relative;
        overflow: hidden;
        background: #ffffff;
        min-height: 120px;
        max-height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
        border-bottom: 1px solid #f5f5f5;
    }

    .partner-logo img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
        filter: grayscale(20%);
    }

    .partner-logo:hover img {
        transform: scale(1.05);
        filter: grayscale(0%);
    }

    .partner-logo a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
    }

    .partner-content {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    .company-name {
        font-size: 1.1rem;
        font-weight: 600;
        color: #2c2c2c;
        margin: 0 0 0.5rem 0;
        line-height: 1.4;
    }

    .company-name a {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .company-name a:hover {
        color: #77559D;
    }

    .partnership-type {
        font-size: 0.85rem;
        font-weight: 500;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        margin: 0 auto 1rem auto;
        width: fit-content;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .partnership-client {
        background: #e3f2fd;
        color: #1976d2;
    }

    .partnership-partner {
        background: #f3e5f5;
        color: #77559D;
    }

    .partnership-supplier {
        background: #e8f5e8;
        color: #388e3c;
    }

    .partnership-strategic {
        background: #fff3e0;
        color: #f57c00;
    }

    .partner-description {
        font-size: 0.9rem;
        line-height: 1.5;
        color: #666;
        margin: 0;
        flex: 1;
    }

    .no-partners {
        text-align: center;
        padding: 3rem 1rem;
        color: #666;
    }

    /* Logo Spacing by Partnership Type */
    .partnership-strategic .partner-logo {
        background: linear-gradient(135deg, #fff3e0 0%, #ffffff 100%);
    }

    .partnership-partner .partner-logo {
        background: linear-gradient(135deg, #f3e5f5 0%, #ffffff 100%);
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .partners-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        
        .partner-content {
            padding: 1rem;
        }
        
        .partner-logo {
            min-height: 100px;
            max-height: 120px;
            padding: 1rem;
        }
    }

    @media (max-width: 480px) {
        .partners-grid {
            grid-template-columns: 1fr;
        }
    }
    </style>
{% endblock %} ", "partners.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/partners.html.twig");
    }
}
