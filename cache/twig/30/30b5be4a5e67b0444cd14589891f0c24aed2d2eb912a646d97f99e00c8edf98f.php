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
class __TwigTemplate_94209ff33b4ec23c1a162694f229939da69adbcbe604236564c84a32e3589e54 extends \Twig\Template
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

                <!-- Reviews Section (with certificates functionality) -->
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
                    echo "                ";
                    if ($this->getAttribute($context["review"], "image_upload", [])) {
                        // line 35
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["review"], "image_upload", []));
                        foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                            // line 36
                            echo "                        ";
                            if (( !($context["review_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                // line 37
                                echo "                            ";
                                $context["review_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                // line 38
                                echo "                        ";
                            }
                            // line 39
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                ";
                    }
                    // line 41
                    echo "                
                ";
                    // line 42
                    if (($context["review_image"] ?? null)) {
                        // line 43
                        echo "                <div class=\"review-image\">
                    <img src=\"";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["review_image"] ?? null), "url", []), "html", null, true);
                        echo "\" 
                         alt=\"";
                        // line 45
                        (($this->getAttribute($context["review"], "company_name", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["review"], "company_name", []), "html", null, true))) : (print ("Отзыв")));
                        echo "\"
                         onclick=\"openReviewModal('";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["review_image"] ?? null), "url", []), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "company_name", []), "html_attr");
                        echo "')\"
                         loading=\"lazy\">
                </div>
                ";
                    } elseif ($this->getAttribute(                    // line 49
$context["review"], "image_upload", [])) {
                        // line 50
                        echo "                <div class=\"review-image\">
                    <div class=\"no-image\">
                        ";
                        // line 52
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["review"], "image_upload", []));
                        foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                            // line 53
                            echo "                            <p>Изображение не найдено: ";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["filedata"], "name", [])) ? ($this->getAttribute($context["filedata"], "name", [])) : ($context["filepath"])), "html", null, true);
                            echo "</p>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "                    </div>
                </div>
                ";
                    }
                    // line 58
                    echo "                                
                                <div class=\"review-content\">
                                    ";
                    // line 60
                    if ($this->getAttribute($context["review"], "company_name", [])) {
                        // line 61
                        echo "                                    <h3 class=\"review-title\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "company_name", []), "html", null, true);
                        echo "</h3>
                                    ";
                    }
                    // line 63
                    echo "                                    
                                    ";
                    // line 64
                    if ($this->getAttribute($context["review"], "review_text", [])) {
                        // line 65
                        echo "                                    <p class=\"review-description\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "review_text", []), "html", null, true);
                        echo "</p>
                                    ";
                    }
                    // line 67
                    echo "                                </div>
                            </div>
                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                    </div>
                    
                    ";
                // line 73
                if ((twig_length_filter($this->env, $this->getAttribute(($context["header"] ?? null), "reviews", [])) == 0)) {
                    // line 74
                    echo "                    <div class=\"no-reviews\">
                        <p>Отзывы будут добавлены в ближайшее время.</p>
                    </div>
                    ";
                }
                // line 78
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
            // line 89
            echo "            </div>
        </div>
    ";
        }
        // line 92
        echo "
    <style>
    /* Reviews Grid Styles */
    .reviews-section {
        margin-top: 2rem;
    }

    .reviews-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
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
    }

    .review-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    .review-image {
        position: relative;
        overflow: hidden;
        background: #f8f9fa;
        flex: 1;
        min-height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .review-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
        cursor: pointer;
        padding: 1rem;
    }

    .review-image:hover img {
        transform: scale(1.05);
    }

    .review-content {
        padding: 1.5rem;
        background: #ffffff;
    }

    .review-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2c2c2c;
        margin: 0 0 0.5rem 0;
        line-height: 1.4;
    }

    .review-description {
        color: #666;
        font-size: 0.9rem;
        line-height: 1.5;
        margin: 0;
    }

    .no-reviews {
        text-align: center;
        padding: 3rem 1rem;
        color: #666;
    }

    .no-image {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 200px;
        background: #f8f9fa;
        border: 2px dashed #dee2e6;
        border-radius: 8px;
        color: #6c757d;
        font-style: italic;
    }

    .no-image p {
        margin: 0;
        padding: 1rem;
        text-align: center;
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
    function openReviewModal(imageSrc, companyName) {
        const modal = document.getElementById('reviewModal');
        const modalImg = document.getElementById('modalImage');
        const caption = document.getElementById('modalCaption');
        
        modal.style.display = 'block';
        modalImg.src = imageSrc;
        modalImg.alt = companyName;
        caption.textContent = companyName;
        
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
        return array (  247 => 92,  242 => 89,  229 => 78,  223 => 74,  221 => 73,  217 => 71,  208 => 67,  202 => 65,  200 => 64,  197 => 63,  191 => 61,  189 => 60,  185 => 58,  180 => 55,  171 => 53,  167 => 52,  163 => 50,  161 => 49,  153 => 46,  149 => 45,  145 => 44,  142 => 43,  140 => 42,  137 => 41,  134 => 40,  128 => 39,  125 => 38,  122 => 37,  119 => 36,  114 => 35,  111 => 34,  108 => 32,  106 => 31,  102 => 29,  98 => 28,  94 => 26,  92 => 25,  85 => 21,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  63 => 11,  58 => 9,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  38 => 1,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "reviews.html.twig", "/home/ivan/gravPr/gravExpo/user/themes/quark/templates/reviews.html.twig");
    }
}
