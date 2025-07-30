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

/* reviews.html.twig */
class __TwigTemplate_604bc177dac6e999481d7c359787db5899689402e7caf04f6d73e6e35b629ae0 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "reviews.html.twig", 1);
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

                <!-- Reviews Section -->
                ";
            // line 25
            if ($this->getAttribute(($context["header"] ?? null), "reviews", [])) {
                // line 26
                echo "                <section class=\"reviews-section\">
                    <div class=\"reviews-grid\">
                        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "reviews", []));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 29
                    echo "                        <div class=\"review-item\">
                            <div class=\"review-card\">
                                ";
                    // line 31
                    $context["review_image"] = null;
                    // line 32
                    echo "                
                                ";
                    // line 34
                    echo "                                ";
                    if ($this->getAttribute($context["review"], "image_upload", [])) {
                        // line 35
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["review"], "image_upload", []));
                        foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                            // line 36
                            echo "                                        ";
                            if (( !($context["review_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                // line 37
                                echo "                                            ";
                                $context["review_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
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
                    if (($context["review_image"] ?? null)) {
                        // line 43
                        echo "                                <div class=\"review-image\">
                                    <img src=\"";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["review_image"] ?? null), "url", []), "html", null, true);
                        echo "\" 
                                         alt=\"";
                        // line 45
                        (($this->getAttribute($context["review"], "client_name", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["review"], "client_name", []), "html", null, true))) : (print ("Проект клиента")));
                        echo "\"
                                         onclick=\"openReviewModal('";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["review_image"] ?? null), "url", []), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "client_name", []), "html_attr");
                        echo "')\"
                                         loading=\"lazy\">
                                </div>
                                ";
                    }
                    // line 50
                    echo "                                
                                <div class=\"review-content\">
                                    <div class=\"review-header\">
                                        ";
                    // line 53
                    if ($this->getAttribute($context["review"], "client_name", [])) {
                        // line 54
                        echo "                                        <h3 class=\"client-name\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "client_name", []), "html", null, true);
                        echo "</h3>
                                        ";
                    }
                    // line 56
                    echo "                                        
                                        ";
                    // line 57
                    if ($this->getAttribute($context["review"], "rating", [])) {
                        // line 58
                        echo "                                        <div class=\"rating\">
                                            ";
                        // line 59
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 60
                            echo "                                                ";
                            if (($context["i"] <= $this->getAttribute($context["review"], "rating", []))) {
                                // line 61
                                echo "                                                    <span class=\"star filled\">★</span>
                                                ";
                            } else {
                                // line 63
                                echo "                                                    <span class=\"star\">☆</span>
                                                ";
                            }
                            // line 65
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "                                        </div>
                                        ";
                    }
                    // line 68
                    echo "                                    </div>
                                    
                                    ";
                    // line 70
                    if ($this->getAttribute($context["review"], "review_text", [])) {
                        // line 71
                        echo "                                    <blockquote class=\"review-text\">
                                        \"";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "review_text", []), "html", null, true);
                        echo "\"
                                    </blockquote>
                                    ";
                    }
                    // line 75
                    echo "                                    
                                    ";
                    // line 76
                    if ($this->getAttribute($context["review"], "project_details", [])) {
                        // line 77
                        echo "                                    <div class=\"project-details\">
                                        <strong>Проект:</strong> ";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "project_details", []), "html", null, true);
                        echo "
                                    </div>
                                    ";
                    }
                    // line 81
                    echo "                                </div>
                            </div>
                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "                    </div>
                    
                    ";
                // line 87
                if ((twig_length_filter($this->env, $this->getAttribute(($context["header"] ?? null), "reviews", [])) == 0)) {
                    // line 88
                    echo "                    <div class=\"no-reviews\">
                        <p>Отзывы будут добавлены в ближайшее время.</p>
                    </div>
                    ";
                }
                // line 92
                echo "                </section>
                
                <!-- Review Modal -->
                <div id=\"reviewModal\" class=\"review-modal\" onclick=\"closeReviewModal()\">
                    <div class=\"modal-content\" onclick=\"event.stopPropagation()\">
                        <span class=\"modal-close\" onclick=\"closeReviewModal()\">&times;</span>
                        <img id=\"modalImage\" src=\"\" alt=\"\">
                        <div id=\"modalCaption\" class=\"modal-caption\"></div>
                    </div>
                </div>
                ";
            }
            // line 103
            echo "            </div>
        </div>
    ";
        }
        // line 106
        echo "
    <style>
    /* Reviews Grid Styles */
    .reviews-section {
        margin-top: 2rem;
    }

    .reviews-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }

    .review-item {
        display: flex;
        flex-direction: column;
    }

    .review-card {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border-left: 4px solid #77559D;
    }

    .review-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    .review-image {
        position: relative;
        overflow: hidden;
        background: #f8f9fa;
        max-height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .review-image img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
        cursor: pointer;
    }

    .review-image:hover img {
        transform: scale(1.05);
    }

    .review-content {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .review-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 1rem;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .client-name {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2c2c2c;
        margin: 0;
        line-height: 1.4;
    }

    .rating {
        display: flex;
        gap: 2px;
    }

    .star {
        font-size: 1.2rem;
        color: #ddd;
    }

    .star.filled {
        color: #ffd700;
    }

    .review-text {
        font-size: 1rem;
        line-height: 1.6;
        color: #444;
        font-style: italic;
        margin: 0 0 1rem 0;
        padding: 0;
        border: none;
        flex: 1;
    }

    .project-details {
        font-size: 0.9rem;
        color: #666;
        border-top: 1px solid #eee;
        padding-top: 1rem;
        margin-top: auto;
    }

    .no-reviews {
        text-align: center;
        padding: 3rem 1rem;
        color: #666;
    }

    /* Review Modal Styles */
    .review-modal {
        display: none;
        position: fixed;
        z-index: 10000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        animation: fadeIn 0.3s ease;
    }

    .modal-content {
        position: relative;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 800px;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
    }

    .modal-content img {
        width: 100%;
        height: auto;
        max-height: 80vh;
        object-fit: contain;
        border-radius: 8px;
    }

    .modal-close {
        position: absolute;
        top: -40px;
        right: 0;
        color: #fff;
        font-size: 2rem;
        font-weight: bold;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .modal-close:hover {
        color: #77559D;
    }

    .modal-caption {
        margin-top: 1rem;
        color: #fff;
        font-size: 1.1rem;
        font-weight: 500;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .reviews-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .review-content {
            padding: 1rem;
        }
        
        .review-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .modal-content {
            width: 95%;
            padding: 0 1rem;
        }
        
        .modal-close {
            top: -35px;
            font-size: 1.5rem;
        }
    }
    </style>

    <script>
    // Review Modal Functions
    function openReviewModal(imageSrc, clientName) {
        const modal = document.getElementById('reviewModal');
        const modalImg = document.getElementById('modalImage');
        const caption = document.getElementById('modalCaption');
        
        modal.style.display = 'block';
        modalImg.src = imageSrc;
        modalImg.alt = clientName;
        caption.textContent = clientName;
        
        // Prevent body scroll when modal is open
        document.body.style.overflow = 'hidden';
    }

    function closeReviewModal() {
        const modal = document.getElementById('reviewModal');
        modal.style.display = 'none';
        
        // Restore body scroll
        document.body.style.overflow = 'auto';
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeReviewModal();
        }
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 106,  271 => 103,  258 => 92,  252 => 88,  250 => 87,  246 => 85,  237 => 81,  231 => 78,  228 => 77,  226 => 76,  223 => 75,  217 => 72,  214 => 71,  212 => 70,  208 => 68,  204 => 66,  198 => 65,  194 => 63,  190 => 61,  187 => 60,  183 => 59,  180 => 58,  178 => 57,  175 => 56,  169 => 54,  167 => 53,  162 => 50,  153 => 46,  149 => 45,  145 => 44,  142 => 43,  140 => 42,  137 => 41,  134 => 40,  128 => 39,  125 => 38,  122 => 37,  119 => 36,  114 => 35,  111 => 34,  108 => 32,  106 => 31,  102 => 29,  98 => 28,  94 => 26,  92 => 25,  85 => 21,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  63 => 11,  58 => 9,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  38 => 1,  36 => 3,  30 => 1,);
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

                <!-- Reviews Section -->
                {% if header.reviews %}
                <section class=\"reviews-section\">
                    <div class=\"reviews-grid\">
                        {% for review in header.reviews %}
                        <div class=\"review-item\">
                            <div class=\"review-card\">
                                {% set review_image = null %}
                
                                {# Check for uploaded image #}
                                {% if review.image_upload %}
                                    {% for filepath, filedata in review.image_upload %}
                                        {% if not review_image and filedata.name %}
                                            {% set review_image = page.media[filedata.name] %}
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                                
                                {% if review_image %}
                                <div class=\"review-image\">
                                    <img src=\"{{ review_image.url }}\" 
                                         alt=\"{{ review.client_name ?: 'Проект клиента' }}\"
                                         onclick=\"openReviewModal('{{ review_image.url }}', '{{ review.client_name|e('html_attr') }}')\"
                                         loading=\"lazy\">
                                </div>
                                {% endif %}
                                
                                <div class=\"review-content\">
                                    <div class=\"review-header\">
                                        {% if review.client_name %}
                                        <h3 class=\"client-name\">{{ review.client_name }}</h3>
                                        {% endif %}
                                        
                                        {% if review.rating %}
                                        <div class=\"rating\">
                                            {% for i in 1..5 %}
                                                {% if i <= review.rating %}
                                                    <span class=\"star filled\">★</span>
                                                {% else %}
                                                    <span class=\"star\">☆</span>
                                                {% endif %}
                                            {% endfor %}
                                        </div>
                                        {% endif %}
                                    </div>
                                    
                                    {% if review.review_text %}
                                    <blockquote class=\"review-text\">
                                        \"{{ review.review_text }}\"
                                    </blockquote>
                                    {% endif %}
                                    
                                    {% if review.project_details %}
                                    <div class=\"project-details\">
                                        <strong>Проект:</strong> {{ review.project_details }}
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                    
                    {% if header.reviews|length == 0 %}
                    <div class=\"no-reviews\">
                        <p>Отзывы будут добавлены в ближайшее время.</p>
                    </div>
                    {% endif %}
                </section>
                
                <!-- Review Modal -->
                <div id=\"reviewModal\" class=\"review-modal\" onclick=\"closeReviewModal()\">
                    <div class=\"modal-content\" onclick=\"event.stopPropagation()\">
                        <span class=\"modal-close\" onclick=\"closeReviewModal()\">&times;</span>
                        <img id=\"modalImage\" src=\"\" alt=\"\">
                        <div id=\"modalCaption\" class=\"modal-caption\"></div>
                    </div>
                </div>
                {% endif %}
            </div>
        </div>
    {% endif %}

    <style>
    /* Reviews Grid Styles */
    .reviews-section {
        margin-top: 2rem;
    }

    .reviews-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }

    .review-item {
        display: flex;
        flex-direction: column;
    }

    .review-card {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border-left: 4px solid #77559D;
    }

    .review-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    .review-image {
        position: relative;
        overflow: hidden;
        background: #f8f9fa;
        max-height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .review-image img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
        cursor: pointer;
    }

    .review-image:hover img {
        transform: scale(1.05);
    }

    .review-content {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .review-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 1rem;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .client-name {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2c2c2c;
        margin: 0;
        line-height: 1.4;
    }

    .rating {
        display: flex;
        gap: 2px;
    }

    .star {
        font-size: 1.2rem;
        color: #ddd;
    }

    .star.filled {
        color: #ffd700;
    }

    .review-text {
        font-size: 1rem;
        line-height: 1.6;
        color: #444;
        font-style: italic;
        margin: 0 0 1rem 0;
        padding: 0;
        border: none;
        flex: 1;
    }

    .project-details {
        font-size: 0.9rem;
        color: #666;
        border-top: 1px solid #eee;
        padding-top: 1rem;
        margin-top: auto;
    }

    .no-reviews {
        text-align: center;
        padding: 3rem 1rem;
        color: #666;
    }

    /* Review Modal Styles */
    .review-modal {
        display: none;
        position: fixed;
        z-index: 10000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        animation: fadeIn 0.3s ease;
    }

    .modal-content {
        position: relative;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 800px;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
    }

    .modal-content img {
        width: 100%;
        height: auto;
        max-height: 80vh;
        object-fit: contain;
        border-radius: 8px;
    }

    .modal-close {
        position: absolute;
        top: -40px;
        right: 0;
        color: #fff;
        font-size: 2rem;
        font-weight: bold;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .modal-close:hover {
        color: #77559D;
    }

    .modal-caption {
        margin-top: 1rem;
        color: #fff;
        font-size: 1.1rem;
        font-weight: 500;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .reviews-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .review-content {
            padding: 1rem;
        }
        
        .review-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .modal-content {
            width: 95%;
            padding: 0 1rem;
        }
        
        .modal-close {
            top: -35px;
            font-size: 1.5rem;
        }
    }
    </style>

    <script>
    // Review Modal Functions
    function openReviewModal(imageSrc, clientName) {
        const modal = document.getElementById('reviewModal');
        const modalImg = document.getElementById('modalImage');
        const caption = document.getElementById('modalCaption');
        
        modal.style.display = 'block';
        modalImg.src = imageSrc;
        modalImg.alt = clientName;
        caption.textContent = clientName;
        
        // Prevent body scroll when modal is open
        document.body.style.overflow = 'hidden';
    }

    function closeReviewModal() {
        const modal = document.getElementById('reviewModal');
        modal.style.display = 'none';
        
        // Restore body scroll
        document.body.style.overflow = 'auto';
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeReviewModal();
        }
    });
    </script>
{% endblock %} ", "reviews.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/reviews.html.twig");
    }
}
