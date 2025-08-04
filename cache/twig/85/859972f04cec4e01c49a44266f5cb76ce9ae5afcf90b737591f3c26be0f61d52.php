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

/* stand-page.html.twig */
class __TwigTemplate_b907b6d946ff3b8680064c803a646028a3242581616b87b7530492c53ed46aa1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "stand-page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if ( !$this->getAttribute(($context["grav"] ?? null), "admin", [])) {
            // line 7
            echo "        <div class=\"content-wrapper\">
            <div class=\"container ";
            // line 8
            echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
            echo "\">
                <!-- Page Content -->
                <div class=\"page-content\">
                    ";
            // line 11
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
                </div>
                
                ";
            // line 14
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery", [])) {
                // line 15
                echo "                <div class=\"portfolio-section\">
                    <div class=\"gallery-header\">
                        <h2>Примеры работ</h2>
                        <p><a href=\"/portfolio\" class=\"portfolio-link\">Смотреть все проекты в портфолио →</a></p>
                    </div>
                    
                    <div class=\"portfolio-gallery\">
                        <div class=\"portfolio-grid\">
                            ";
                // line 23
                $context["gallery_id"] = md5($this->getAttribute(($context["page"] ?? null), "url", []));
                // line 24
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["gallery_item"]) {
                    // line 25
                    echo "                                <div class=\"portfolio-item\">
                                    ";
                    // line 26
                    $context["project_images"] = [];
                    // line 27
                    echo "                                    ";
                    $context["main_image"] = null;
                    // line 28
                    echo "                                    ";
                    $context["title"] = (($this->getAttribute($context["gallery_item"], "title", [])) ? ($this->getAttribute($context["gallery_item"], "title", [])) : ("Проект"));
                    // line 29
                    echo "                                    ";
                    $context["desc"] = (($this->getAttribute($context["gallery_item"], "desc", [])) ? ($this->getAttribute($context["gallery_item"], "desc", [])) : (""));
                    // line 30
                    echo "                                    
                                    ";
                    // line 32
                    echo "                                    ";
                    $context["construction_area"] = (($this->getAttribute($context["gallery_item"], "construction_area", [])) ? ($this->getAttribute($context["gallery_item"], "construction_area", [])) : (""));
                    // line 33
                    echo "                                    ";
                    $context["exhibition_name"] = (($this->getAttribute($context["gallery_item"], "exhibition_name", [])) ? ($this->getAttribute($context["gallery_item"], "exhibition_name", [])) : (""));
                    // line 34
                    echo "                                    ";
                    $context["company_name"] = (($this->getAttribute($context["gallery_item"], "company_name", [])) ? ($this->getAttribute($context["gallery_item"], "company_name", [])) : (""));
                    // line 35
                    echo "                                    ";
                    $context["project_year"] = (($this->getAttribute($context["gallery_item"], "project_year", [])) ? ($this->getAttribute($context["gallery_item"], "project_year", [])) : (""));
                    // line 36
                    echo "                                    
                                    ";
                    // line 38
                    echo "                                    ";
                    if ($this->getAttribute($context["gallery_item"], "images", [])) {
                        // line 39
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["gallery_item"], "images", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["img_item"]) {
                            // line 40
                            echo "                                            ";
                            $context["img_obj"] = null;
                            // line 41
                            echo "                                            
                                            ";
                            // line 43
                            echo "                                            ";
                            if ($this->getAttribute($context["img_item"], "image_upload", [])) {
                                // line 44
                                echo "                                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["img_item"], "image_upload", []));
                                foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                                    // line 45
                                    echo "                                                    ";
                                    if (( !($context["img_obj"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                        // line 46
                                        echo "                                                        ";
                                        $context["img_obj"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                        // line 47
                                        echo "                                                    ";
                                    }
                                    // line 48
                                    echo "                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 49
                                echo "                                            ";
                            }
                            // line 50
                            echo "                                            
                                            ";
                            // line 51
                            if (($context["img_obj"] ?? null)) {
                                // line 52
                                echo "                                                ";
                                $context["img_data"] = ["image" =>                                 // line 53
($context["img_obj"] ?? null), "caption" => (($this->getAttribute(                                // line 54
$context["img_item"], "caption", [])) ? ($this->getAttribute($context["img_item"], "caption", [])) : ("")), "is_main" => (($this->getAttribute(                                // line 55
$context["img_item"], "is_main", [])) ? ($this->getAttribute($context["img_item"], "is_main", [])) : (false))];
                                // line 57
                                echo "                                                ";
                                $context["project_images"] = twig_array_merge(($context["project_images"] ?? null), [0 => ($context["img_data"] ?? null)]);
                                // line 58
                                echo "                                                
                                                ";
                                // line 60
                                echo "                                                ";
                                if (($this->getAttribute($context["img_item"], "is_main", []) &&  !($context["main_image"] ?? null))) {
                                    // line 61
                                    echo "                                                    ";
                                    $context["main_image"] = ($context["img_obj"] ?? null);
                                    // line 62
                                    echo "                                                ";
                                }
                                // line 63
                                echo "                                            ";
                            }
                            // line 64
                            echo "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 65
                        echo "                                    ";
                    }
                    // line 66
                    echo "                                    
                                    ";
                    // line 68
                    echo "                                    ";
                    if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) == 0)) {
                        // line 69
                        echo "                                        ";
                        $context["item_image"] = null;
                        // line 70
                        echo "                                        
                                        ";
                        // line 72
                        echo "                                        ";
                        if ($this->getAttribute($context["gallery_item"], "image_upload", [])) {
                            // line 73
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["gallery_item"], "image_upload", []));
                            foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                                // line 74
                                echo "                                                ";
                                if (( !($context["item_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                    // line 75
                                    echo "                                                    ";
                                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                    // line 76
                                    echo "                                                ";
                                }
                                // line 77
                                echo "                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 78
                            echo "                                        ";
                        }
                        // line 79
                        echo "                                        
                                        ";
                        // line 81
                        echo "                                        ";
                        if (( !($context["item_image"] ?? null) && $this->getAttribute($context["gallery_item"], "image_name", []))) {
                            // line 82
                            echo "                                            ";
                            $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["gallery_item"], "image_name", []), [], "array");
                            // line 83
                            echo "                                        ";
                        }
                        // line 84
                        echo "                                        
                                        ";
                        // line 86
                        echo "                                        ";
                        if (( !($context["item_image"] ?? null) && $this->getAttribute($context["gallery_item"], "image", []))) {
                            // line 87
                            echo "                                            ";
                            $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["gallery_item"], "image", []), [], "array");
                            // line 88
                            echo "                                        ";
                        }
                        // line 89
                        echo "                                        
                                        ";
                        // line 90
                        if (($context["item_image"] ?? null)) {
                            // line 91
                            echo "                                            ";
                            $context["img_data"] = ["image" =>                             // line 92
($context["item_image"] ?? null), "caption" =>                             // line 93
($context["desc"] ?? null), "is_main" => true];
                            // line 96
                            echo "                                            ";
                            $context["project_images"] = [0 => ($context["img_data"] ?? null)];
                            // line 97
                            echo "                                            ";
                            $context["main_image"] = ($context["item_image"] ?? null);
                            // line 98
                            echo "                                        ";
                        }
                        // line 99
                        echo "                                    ";
                    }
                    // line 100
                    echo "                                    
                                    ";
                    // line 102
                    echo "                                    ";
                    if (( !($context["main_image"] ?? null) && (twig_length_filter($this->env, ($context["project_images"] ?? null)) > 0))) {
                        // line 103
                        echo "                                        ";
                        $context["main_image"] = $this->getAttribute($this->getAttribute(($context["project_images"] ?? null), 0, [], "array"), "image", []);
                        // line 104
                        echo "                                    ";
                    }
                    // line 105
                    echo "                                    
                                    ";
                    // line 106
                    if ((($context["main_image"] ?? null) && (twig_length_filter($this->env, ($context["project_images"] ?? null)) > 0))) {
                        // line 107
                        echo "                                        ";
                        $context["thumb_width"] = 400;
                        // line 108
                        echo "                                        ";
                        $context["thumb_height"] = 300;
                        // line 109
                        echo "                                        
                                        <div class=\"portfolio-card\">
                                            <div class=\"portfolio-image\">
                                                <img src=\"";
                        // line 112
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["main_image"] ?? null), "url", []), "html", null, true);
                        echo "\" 
                                                     alt=\"";
                        // line 113
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "\"
                                                     onclick=\"openPortfolioGallery(";
                        // line 114
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo ", '";
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html_attr");
                        echo "')\"
                                                     loading=\"lazy\">
                                                
                                                ";
                        // line 118
                        echo "                                                ";
                        if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) > 1)) {
                            // line 119
                            echo "                                                    <div class=\"image-counter\">
                                                        <i class=\"fa fa-camera\"></i> ";
                            // line 120
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["project_images"] ?? null)), "html", null, true);
                            echo "
                                                    </div>
                                                ";
                        }
                        // line 123
                        echo "                                                
                                                ";
                        // line 125
                        echo "                                                <div class=\"hidden-gallery-data\" id=\"gallery-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "\" style=\"display: none;\">
                                                    ";
                        // line 126
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["project_images"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["img_data"]) {
                            // line 127
                            echo "                                                        <div class=\"gallery-item\" 
                                                             data-src=\"";
                            // line 128
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img_data"], "image", []), "url", []), "html", null, true);
                            echo "\" 
                                                             data-caption=\"";
                            // line 129
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["img_data"], "caption", [])) ? ($this->getAttribute($context["img_data"], "caption", [])) : (($context["title"] ?? null))), "html", null, true);
                            echo "\"></div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img_data'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 131
                        echo "                                                </div>
                                                
                                            </div>
                                            
                                            <div class=\"portfolio-info\">
                                                <h4 class=\"portfolio-title\">";
                        // line 136
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "</h4>
                                                
                                                <div class=\"portfolio-metadata\">
                                                    ";
                        // line 139
                        if (($context["construction_area"] ?? null)) {
                            // line 140
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Площадь:</span>
                                                            <span class=\"value\">";
                            // line 142
                            echo twig_escape_filter($this->env, ($context["construction_area"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 145
                        echo "                                                    
                                                    ";
                        // line 146
                        if (($context["exhibition_name"] ?? null)) {
                            // line 147
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Выставка:</span>
                                                            <span class=\"value\">";
                            // line 149
                            echo twig_escape_filter($this->env, ($context["exhibition_name"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 152
                        echo "                                                    
                                                    ";
                        // line 153
                        if (($context["company_name"] ?? null)) {
                            // line 154
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Клиент:</span>
                                                            <span class=\"value\">";
                            // line 156
                            echo twig_escape_filter($this->env, ($context["company_name"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 159
                        echo "                                                    
                                                    ";
                        // line 160
                        if (($context["project_year"] ?? null)) {
                            // line 161
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Год:</span>
                                                            <span class=\"value\">";
                            // line 163
                            echo twig_escape_filter($this->env, ($context["project_year"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 166
                        echo "                                                </div>
                                                
                                                ";
                        // line 168
                        if (($context["desc"] ?? null)) {
                            // line 169
                            echo "                                                    <div class=\"portfolio-description\">";
                            echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                            echo "</div>
                                                ";
                        }
                        // line 171
                        echo "                                            </div>
                                        </div>
                                    ";
                    }
                    // line 174
                    echo "                                </div>
                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "                        </div>
                    </div>
                </div>
                ";
            }
            // line 180
            echo "                
                <!-- Portfolio Modal -->
                <div id=\"portfolioModal\" class=\"portfolio-modal\" onclick=\"closePortfolioModal()\">
                    <div class=\"modal-content\" onclick=\"event.stopPropagation()\">
                        <span class=\"modal-close\" onclick=\"closePortfolioModal()\">&times;</span>
                        
                        <!-- Navigation arrows -->
                        <button class=\"modal-nav modal-prev\" onclick=\"prevImage()\" style=\"display: none;\">&lt;</button>
                        <button class=\"modal-nav modal-next\" onclick=\"nextImage()\" style=\"display: none;\">&gt;</button>
                        
                        <img id=\"modalImage\" src=\"\" alt=\"\">
                        <div id=\"modalCaption\" class=\"modal-caption\"></div>
                        
                        <!-- Image counter -->
                        <div id=\"modalCounter\" class=\"modal-counter\" style=\"display: none;\"></div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 202
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 203
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 204
        $context["portfolio_styles"] = ('' === $tmp = ".portfolio-section {
    margin: 30px 0;
}

.gallery-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid #f8f9fa;
}

.gallery-header h2 {
    margin: 0;
    font-size: 28px;
    color: #333;
    font-weight: 600;
}

.portfolio-link {
    color: #007bff;
    text-decoration: none;
    font-weight: 500;
    font-size: 1.3rem;
    transition: color 0.3s ease;
}

.portfolio-link:hover {
    color: #0056b3;
    text-decoration: underline;
}

.portfolio-gallery {
    margin: 20px 0;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.portfolio-item {
    display: flex;
    flex-direction: column;
}

.portfolio-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}

.portfolio-image {
    position: relative;
    overflow: hidden;
    background: #f8f9fa;
    flex: 1;
    min-height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
    cursor: pointer;
    padding: 1rem;
}

.portfolio-image:hover img {
    transform: scale(1.05);
}

.image-counter {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 5px 8px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.image-counter i {
    font-size: 10px;
}

.hidden-gallery-data {
    display: none !important;
}

.portfolio-info {
    padding: 1rem 1.5rem;
    display: flex;
    flex-direction: column;
    background: #ffffff;
}

.portfolio-title {
    margin: 0 0 0.5rem 0;
    font-size: 1.2rem;
    color: #2c2c2c;
    font-weight: 600;
    line-height: 1.4;
}

.portfolio-metadata {
    margin-bottom: 0.5rem;
    flex-shrink: 0;
}

.metadata-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 4px;
    font-size: 0.85rem;
    min-height: 24px;
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
    display: flex;
    align-items: center;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
    display: flex;
    align-items: center;
}

.stand-type-typovye {
    color: #28a745;
}

.stand-type-nestandart {
    color: #ffc107;
}

.stand-type-ekskluziv {
    color: #dc3545;
}

.portfolio-description {
    font-size: 0.9rem;
    color: #666;
    line-height: 1.5;
    margin: 0;
    height: auto;
    min-height: auto;
}

.portfolio-empty {
    text-align: center;
    padding: 60px 20px;
    color: #666;
}

/* Portfolio Modal Styles */
.portfolio-modal {
    display: none;
    position: fixed !important;
    z-index: 10000 !important;
    left: 0 !important;
    top: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    max-width: none !important;
    margin: 0 !important;
    padding: 0 !important;
    background-color: rgba(0, 0, 0, 0.9) !important;
    animation: fadeIn 0.3s ease;
}

.modal-content {
    position: absolute !important;
    margin: auto !important;
    padding: 0 !important;
    width: 90% !important;
    max-width: 800px !important;
    top: 50% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;
    text-align: center !important;
    z-index: 10001 !important;
}

.modal-content img {
    width: auto;
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
    color: #ff6600;
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

/* Modal Navigation */
.modal-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.7);
    color: white;
    border: none;
    font-size: 2rem;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
    z-index: 10001;
}

.modal-nav:hover {
    background: rgba(0, 0, 0, 0.9);
}

.modal-prev {
    left: 20px;
}

.modal-next {
    right: 20px;
}

.modal-counter {
    position: absolute;
    bottom: -40px;
    left: 50%;
    transform: translateX(-50%);
    color: #fff;
    font-size: 1rem;
    background: rgba(0, 0, 0, 0.7);
    padding: 5px 10px;
    border-radius: 15px;
}

@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .portfolio-image {
        min-height: 200px;
    }
    
    .portfolio-info {
        padding: 0.75rem 1rem;
    }
    
    .gallery-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
    
    .gallery-header h2 {
        font-size: 24px;
    }
}
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 517
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["portfolio_styles"] ?? null)], "method");
    }

    // line 520
    public function block_javascripts($context, array $blocks = [])
    {
        // line 521
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        // line 523
        $context["portfolio_script"] = ('' === $tmp = "// Portfolio Gallery Variables
let currentGallery = [];
let currentImageIndex = 0;

// Portfolio Modal Functions
function openPortfolioGallery(galleryId, title) {
    const galleryData = document.getElementById('gallery-' + galleryId);
    const galleryItems = galleryData.querySelectorAll('.gallery-item');
    
    // Populate gallery array
    currentGallery = [];
    galleryItems.forEach(item => {
        currentGallery.push({
            src: item.dataset.src,
            caption: item.dataset.caption
        });
    });
    
    currentImageIndex = 0;
    showModalImage();
    
    const modal = document.getElementById('portfolioModal');
    modal.style.display = 'block';
    
    // Show/hide navigation
    const prevBtn = document.querySelector('.modal-prev');
    const nextBtn = document.querySelector('.modal-next');
    const counter = document.getElementById('modalCounter');
    
    if (currentGallery.length > 1) {
        prevBtn.style.display = 'block';
        nextBtn.style.display = 'block';
        counter.style.display = 'block';
    } else {
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
        counter.style.display = 'none';
    }
    
    // Prevent body scroll when modal is open
    document.body.style.overflow = 'hidden';
}

function showModalImage() {
    const modalImg = document.getElementById('modalImage');
    const caption = document.getElementById('modalCaption');
    const counter = document.getElementById('modalCounter');
    
    if (currentGallery.length > 0) {
        const currentItem = currentGallery[currentImageIndex];
        modalImg.src = currentItem.src;
        modalImg.alt = currentItem.caption;
        caption.textContent = currentItem.caption;
        
        if (currentGallery.length > 1) {
            counter.textContent = `\${currentImageIndex + 1} / \${currentGallery.length}`;
        }
    }
}

function nextImage() {
    if (currentGallery.length > 1) {
        currentImageIndex = (currentImageIndex + 1) % currentGallery.length;
        showModalImage();
    }
}

function prevImage() {
    if (currentGallery.length > 1) {
        currentImageIndex = (currentImageIndex - 1 + currentGallery.length) % currentGallery.length;
        showModalImage();
    }
}

function closePortfolioModal() {
    const modal = document.getElementById('portfolioModal');
    modal.style.display = 'none';
    
    // Reset gallery
    currentGallery = [];
    currentImageIndex = 0;
    
    // Restore body scroll
    document.body.style.overflow = 'auto';
}

// Close modal with Escape key and add arrow navigation
document.addEventListener('keydown', function(event) {
    const modal = document.getElementById('portfolioModal');
    if (modal.style.display === 'block') {
        if (event.key === 'Escape') {
            closePortfolioModal();
        } else if (event.key === 'ArrowLeft') {
            prevImage();
        } else if (event.key === 'ArrowRight') {
            nextImage();
        }
    }
});
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 624
        echo "
";
        // line 625
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["portfolio_script"] ?? null)], "method");
    }

    public function getTemplateName()
    {
        return "stand-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  942 => 625,  939 => 624,  838 => 523,  833 => 521,  830 => 520,  826 => 517,  513 => 204,  509 => 203,  506 => 202,  482 => 180,  476 => 176,  461 => 174,  456 => 171,  450 => 169,  448 => 168,  444 => 166,  438 => 163,  434 => 161,  432 => 160,  429 => 159,  423 => 156,  419 => 154,  417 => 153,  414 => 152,  408 => 149,  404 => 147,  402 => 146,  399 => 145,  393 => 142,  389 => 140,  387 => 139,  381 => 136,  374 => 131,  366 => 129,  362 => 128,  359 => 127,  355 => 126,  350 => 125,  347 => 123,  341 => 120,  338 => 119,  335 => 118,  327 => 114,  323 => 113,  319 => 112,  314 => 109,  311 => 108,  308 => 107,  306 => 106,  303 => 105,  300 => 104,  297 => 103,  294 => 102,  291 => 100,  288 => 99,  285 => 98,  282 => 97,  279 => 96,  277 => 93,  276 => 92,  274 => 91,  272 => 90,  269 => 89,  266 => 88,  263 => 87,  260 => 86,  257 => 84,  254 => 83,  251 => 82,  248 => 81,  245 => 79,  242 => 78,  236 => 77,  233 => 76,  230 => 75,  227 => 74,  222 => 73,  219 => 72,  216 => 70,  213 => 69,  210 => 68,  207 => 66,  204 => 65,  198 => 64,  195 => 63,  192 => 62,  189 => 61,  186 => 60,  183 => 58,  180 => 57,  178 => 55,  177 => 54,  176 => 53,  174 => 52,  172 => 51,  169 => 50,  166 => 49,  160 => 48,  157 => 47,  154 => 46,  151 => 45,  146 => 44,  143 => 43,  140 => 41,  137 => 40,  132 => 39,  129 => 38,  126 => 36,  123 => 35,  120 => 34,  117 => 33,  114 => 32,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  100 => 26,  97 => 25,  79 => 24,  77 => 23,  67 => 15,  65 => 14,  59 => 11,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  39 => 1,  37 => 3,  31 => 1,);
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

{% block content %}
    {% if not grav.admin %}
        <div class=\"content-wrapper\">
            <div class=\"container {{ grid_size }}\">
                <!-- Page Content -->
                <div class=\"page-content\">
                    {{ page.content|raw }}
                </div>
                
                {% if page.header.gallery %}
                <div class=\"portfolio-section\">
                    <div class=\"gallery-header\">
                        <h2>Примеры работ</h2>
                        <p><a href=\"/portfolio\" class=\"portfolio-link\">Смотреть все проекты в портфолио →</a></p>
                    </div>
                    
                    <div class=\"portfolio-gallery\">
                        <div class=\"portfolio-grid\">
                            {% set gallery_id = md5(page.url) %}
                            {% for gallery_item in page.header.gallery %}
                                <div class=\"portfolio-item\">
                                    {% set project_images = [] %}
                                    {% set main_image = null %}
                                    {% set title = gallery_item.title ?: 'Проект' %}
                                    {% set desc = gallery_item.desc ?: '' %}
                                    
                                    {# Ensure all metadata fields have default values #}
                                    {% set construction_area = gallery_item.construction_area ?: '' %}
                                    {% set exhibition_name = gallery_item.exhibition_name ?: '' %}
                                    {% set company_name = gallery_item.company_name ?: '' %}
                                    {% set project_year = gallery_item.project_year ?: '' %}
                                    
                                    {# Handle multiple images structure #}
                                    {% if gallery_item.images %}
                                        {% for img_item in gallery_item.images %}
                                            {% set img_obj = null %}
                                            
                                            {# Check for uploaded image #}
                                            {% if img_item.image_upload %}
                                                {% for filepath, filedata in img_item.image_upload %}
                                                    {% if not img_obj and filedata.name %}
                                                        {% set img_obj = page.media[filedata.name] %}
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                            
                                            {% if img_obj %}
                                                {% set img_data = {
                                                    'image': img_obj,
                                                    'caption': img_item.caption ?: '',
                                                    'is_main': img_item.is_main ?: false
                                                } %}
                                                {% set project_images = project_images|merge([img_data]) %}
                                                
                                                {# Set main image #}
                                                {% if img_item.is_main and not main_image %}
                                                    {% set main_image = img_obj %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                    
                                    {# Legacy single image handling if no images found #}
                                    {% if project_images|length == 0 %}
                                        {% set item_image = null %}
                                        
                                        {# Check for uploaded image first #}
                                        {% if gallery_item.image_upload %}
                                            {% for filepath, filedata in gallery_item.image_upload %}
                                                {% if not item_image and filedata.name %}
                                                    {% set item_image = page.media[filedata.name] %}
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                        
                                        {# If no uploaded image, check for image_name #}
                                        {% if not item_image and gallery_item.image_name %}
                                            {% set item_image = page.media[gallery_item.image_name] %}
                                        {% endif %}
                                        
                                        {# Fallback to old image field #}
                                        {% if not item_image and gallery_item.image %}
                                            {% set item_image = page.media[gallery_item.image] %}
                                        {% endif %}
                                        
                                        {% if item_image %}
                                            {% set img_data = {
                                                'image': item_image,
                                                'caption': desc,
                                                'is_main': true
                                            } %}
                                            {% set project_images = [img_data] %}
                                            {% set main_image = item_image %}
                                        {% endif %}
                                    {% endif %}
                                    
                                    {# Use first image as main if no main image specified #}
                                    {% if not main_image and project_images|length > 0 %}
                                        {% set main_image = project_images[0].image %}
                                    {% endif %}
                                    
                                    {% if main_image and project_images|length > 0 %}
                                        {% set thumb_width = 400 %}
                                        {% set thumb_height = 300 %}
                                        
                                        <div class=\"portfolio-card\">
                                            <div class=\"portfolio-image\">
                                                <img src=\"{{ main_image.url }}\" 
                                                     alt=\"{{ title }}\"
                                                     onclick=\"openPortfolioGallery({{ loop.index }}, '{{ title|e('html_attr') }}')\"
                                                     loading=\"lazy\">
                                                
                                                {# Image counter if multiple images #}
                                                {% if project_images|length > 1 %}
                                                    <div class=\"image-counter\">
                                                        <i class=\"fa fa-camera\"></i> {{ project_images|length }}
                                                    </div>
                                                {% endif %}
                                                
                                                {# Hidden images data for gallery #}
                                                <div class=\"hidden-gallery-data\" id=\"gallery-{{ loop.index }}\" style=\"display: none;\">
                                                    {% for img_data in project_images %}
                                                        <div class=\"gallery-item\" 
                                                             data-src=\"{{ img_data.image.url }}\" 
                                                             data-caption=\"{{ img_data.caption ?: title }}\"></div>
                                                    {% endfor %}
                                                </div>
                                                
                                            </div>
                                            
                                            <div class=\"portfolio-info\">
                                                <h4 class=\"portfolio-title\">{{ title }}</h4>
                                                
                                                <div class=\"portfolio-metadata\">
                                                    {% if construction_area %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Площадь:</span>
                                                            <span class=\"value\">{{ construction_area }}</span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if exhibition_name %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Выставка:</span>
                                                            <span class=\"value\">{{ exhibition_name }}</span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if company_name %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Клиент:</span>
                                                            <span class=\"value\">{{ company_name }}</span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if project_year %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Год:</span>
                                                            <span class=\"value\">{{ project_year }}</span>
                                                        </div>
                                                    {% endif %}
                                                </div>
                                                
                                                {% if desc %}
                                                    <div class=\"portfolio-description\">{{ desc }}</div>
                                                {% endif %}
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
                {% endif %}
                
                <!-- Portfolio Modal -->
                <div id=\"portfolioModal\" class=\"portfolio-modal\" onclick=\"closePortfolioModal()\">
                    <div class=\"modal-content\" onclick=\"event.stopPropagation()\">
                        <span class=\"modal-close\" onclick=\"closePortfolioModal()\">&times;</span>
                        
                        <!-- Navigation arrows -->
                        <button class=\"modal-nav modal-prev\" onclick=\"prevImage()\" style=\"display: none;\">&lt;</button>
                        <button class=\"modal-nav modal-next\" onclick=\"nextImage()\" style=\"display: none;\">&gt;</button>
                        
                        <img id=\"modalImage\" src=\"\" alt=\"\">
                        <div id=\"modalCaption\" class=\"modal-caption\"></div>
                        
                        <!-- Image counter -->
                        <div id=\"modalCounter\" class=\"modal-counter\" style=\"display: none;\"></div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block stylesheets %}
{{ parent() }}
{% set portfolio_styles %}
.portfolio-section {
    margin: 30px 0;
}

.gallery-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid #f8f9fa;
}

.gallery-header h2 {
    margin: 0;
    font-size: 28px;
    color: #333;
    font-weight: 600;
}

.portfolio-link {
    color: #007bff;
    text-decoration: none;
    font-weight: 500;
    font-size: 1.3rem;
    transition: color 0.3s ease;
}

.portfolio-link:hover {
    color: #0056b3;
    text-decoration: underline;
}

.portfolio-gallery {
    margin: 20px 0;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.portfolio-item {
    display: flex;
    flex-direction: column;
}

.portfolio-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}

.portfolio-image {
    position: relative;
    overflow: hidden;
    background: #f8f9fa;
    flex: 1;
    min-height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
    cursor: pointer;
    padding: 1rem;
}

.portfolio-image:hover img {
    transform: scale(1.05);
}

.image-counter {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 5px 8px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.image-counter i {
    font-size: 10px;
}

.hidden-gallery-data {
    display: none !important;
}

.portfolio-info {
    padding: 1rem 1.5rem;
    display: flex;
    flex-direction: column;
    background: #ffffff;
}

.portfolio-title {
    margin: 0 0 0.5rem 0;
    font-size: 1.2rem;
    color: #2c2c2c;
    font-weight: 600;
    line-height: 1.4;
}

.portfolio-metadata {
    margin-bottom: 0.5rem;
    flex-shrink: 0;
}

.metadata-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 4px;
    font-size: 0.85rem;
    min-height: 24px;
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
    display: flex;
    align-items: center;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
    display: flex;
    align-items: center;
}

.stand-type-typovye {
    color: #28a745;
}

.stand-type-nestandart {
    color: #ffc107;
}

.stand-type-ekskluziv {
    color: #dc3545;
}

.portfolio-description {
    font-size: 0.9rem;
    color: #666;
    line-height: 1.5;
    margin: 0;
    height: auto;
    min-height: auto;
}

.portfolio-empty {
    text-align: center;
    padding: 60px 20px;
    color: #666;
}

/* Portfolio Modal Styles */
.portfolio-modal {
    display: none;
    position: fixed !important;
    z-index: 10000 !important;
    left: 0 !important;
    top: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    max-width: none !important;
    margin: 0 !important;
    padding: 0 !important;
    background-color: rgba(0, 0, 0, 0.9) !important;
    animation: fadeIn 0.3s ease;
}

.modal-content {
    position: absolute !important;
    margin: auto !important;
    padding: 0 !important;
    width: 90% !important;
    max-width: 800px !important;
    top: 50% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;
    text-align: center !important;
    z-index: 10001 !important;
}

.modal-content img {
    width: auto;
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
    color: #ff6600;
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

/* Modal Navigation */
.modal-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.7);
    color: white;
    border: none;
    font-size: 2rem;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
    z-index: 10001;
}

.modal-nav:hover {
    background: rgba(0, 0, 0, 0.9);
}

.modal-prev {
    left: 20px;
}

.modal-next {
    right: 20px;
}

.modal-counter {
    position: absolute;
    bottom: -40px;
    left: 50%;
    transform: translateX(-50%);
    color: #fff;
    font-size: 1rem;
    background: rgba(0, 0, 0, 0.7);
    padding: 5px 10px;
    border-radius: 15px;
}

@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .portfolio-image {
        min-height: 200px;
    }
    
    .portfolio-info {
        padding: 0.75rem 1rem;
    }
    
    .gallery-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
    
    .gallery-header h2 {
        font-size: 24px;
    }
}
{% endset %}
{% do assets.addInlineCss(portfolio_styles) %}
{% endblock %}

{% block javascripts %}
{{ parent() }}

{% set portfolio_script %}
// Portfolio Gallery Variables
let currentGallery = [];
let currentImageIndex = 0;

// Portfolio Modal Functions
function openPortfolioGallery(galleryId, title) {
    const galleryData = document.getElementById('gallery-' + galleryId);
    const galleryItems = galleryData.querySelectorAll('.gallery-item');
    
    // Populate gallery array
    currentGallery = [];
    galleryItems.forEach(item => {
        currentGallery.push({
            src: item.dataset.src,
            caption: item.dataset.caption
        });
    });
    
    currentImageIndex = 0;
    showModalImage();
    
    const modal = document.getElementById('portfolioModal');
    modal.style.display = 'block';
    
    // Show/hide navigation
    const prevBtn = document.querySelector('.modal-prev');
    const nextBtn = document.querySelector('.modal-next');
    const counter = document.getElementById('modalCounter');
    
    if (currentGallery.length > 1) {
        prevBtn.style.display = 'block';
        nextBtn.style.display = 'block';
        counter.style.display = 'block';
    } else {
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
        counter.style.display = 'none';
    }
    
    // Prevent body scroll when modal is open
    document.body.style.overflow = 'hidden';
}

function showModalImage() {
    const modalImg = document.getElementById('modalImage');
    const caption = document.getElementById('modalCaption');
    const counter = document.getElementById('modalCounter');
    
    if (currentGallery.length > 0) {
        const currentItem = currentGallery[currentImageIndex];
        modalImg.src = currentItem.src;
        modalImg.alt = currentItem.caption;
        caption.textContent = currentItem.caption;
        
        if (currentGallery.length > 1) {
            counter.textContent = `\${currentImageIndex + 1} / \${currentGallery.length}`;
        }
    }
}

function nextImage() {
    if (currentGallery.length > 1) {
        currentImageIndex = (currentImageIndex + 1) % currentGallery.length;
        showModalImage();
    }
}

function prevImage() {
    if (currentGallery.length > 1) {
        currentImageIndex = (currentImageIndex - 1 + currentGallery.length) % currentGallery.length;
        showModalImage();
    }
}

function closePortfolioModal() {
    const modal = document.getElementById('portfolioModal');
    modal.style.display = 'none';
    
    // Reset gallery
    currentGallery = [];
    currentImageIndex = 0;
    
    // Restore body scroll
    document.body.style.overflow = 'auto';
}

// Close modal with Escape key and add arrow navigation
document.addEventListener('keydown', function(event) {
    const modal = document.getElementById('portfolioModal');
    if (modal.style.display === 'block') {
        if (event.key === 'Escape') {
            closePortfolioModal();
        } else if (event.key === 'ArrowLeft') {
            prevImage();
        } else if (event.key === 'ArrowRight') {
            nextImage();
        }
    }
});
{% endset %}

{% do assets.addInlineJs(portfolio_script) %}
{% endblock %} ", "stand-page.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/stand-page.html.twig");
    }
}
