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
class __TwigTemplate_cef6c9435e05ae2f81980f90bedb735528753fcfc43fa8292ed655d97fc22a7c extends \Twig\Template
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
                    $context["stand_type"] = null;
                    // line 39
                    echo "                                    ";
                    if (($this->getAttribute(($context["page"] ?? null), "slug", []) == "typovye")) {
                        // line 40
                        echo "                                        ";
                        $context["stand_type"] = "typovye";
                        // line 41
                        echo "                                    ";
                    } elseif (($this->getAttribute(($context["page"] ?? null), "slug", []) == "nestandart")) {
                        // line 42
                        echo "                                        ";
                        $context["stand_type"] = "nestandart";
                        // line 43
                        echo "                                    ";
                    } elseif (($this->getAttribute(($context["page"] ?? null), "slug", []) == "ekskluziv")) {
                        // line 44
                        echo "                                        ";
                        $context["stand_type"] = "ekskluziv";
                        // line 45
                        echo "                                    ";
                    }
                    // line 46
                    echo "                                    
                                    ";
                    // line 48
                    echo "                                    ";
                    if ($this->getAttribute($context["gallery_item"], "images", [])) {
                        // line 49
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["gallery_item"], "images", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["img_item"]) {
                            // line 50
                            echo "                                            ";
                            $context["img_obj"] = null;
                            // line 51
                            echo "                                            
                                            ";
                            // line 53
                            echo "                                            ";
                            if ($this->getAttribute($context["img_item"], "image_upload", [])) {
                                // line 54
                                echo "                                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["img_item"], "image_upload", []));
                                foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                                    // line 55
                                    echo "                                                    ";
                                    if (( !($context["img_obj"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                        // line 56
                                        echo "                                                        ";
                                        $context["img_obj"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                        // line 57
                                        echo "                                                    ";
                                    }
                                    // line 58
                                    echo "                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 59
                                echo "                                            ";
                            }
                            // line 60
                            echo "                                            
                                            ";
                            // line 61
                            if (($context["img_obj"] ?? null)) {
                                // line 62
                                echo "                                                ";
                                $context["img_data"] = ["image" =>                                 // line 63
($context["img_obj"] ?? null), "caption" => (($this->getAttribute(                                // line 64
$context["img_item"], "caption", [])) ? ($this->getAttribute($context["img_item"], "caption", [])) : ("")), "is_main" => (($this->getAttribute(                                // line 65
$context["img_item"], "is_main", [])) ? ($this->getAttribute($context["img_item"], "is_main", [])) : (false))];
                                // line 67
                                echo "                                                ";
                                $context["project_images"] = twig_array_merge(($context["project_images"] ?? null), [0 => ($context["img_data"] ?? null)]);
                                // line 68
                                echo "                                                
                                                ";
                                // line 70
                                echo "                                                ";
                                if (($this->getAttribute($context["img_item"], "is_main", []) &&  !($context["main_image"] ?? null))) {
                                    // line 71
                                    echo "                                                    ";
                                    $context["main_image"] = ($context["img_obj"] ?? null);
                                    // line 72
                                    echo "                                                ";
                                }
                                // line 73
                                echo "                                            ";
                            }
                            // line 74
                            echo "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 75
                        echo "                                    ";
                    }
                    // line 76
                    echo "                                    
                                    ";
                    // line 78
                    echo "                                    ";
                    if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) == 0)) {
                        // line 79
                        echo "                                        ";
                        $context["item_image"] = null;
                        // line 80
                        echo "                                        
                                        ";
                        // line 82
                        echo "                                        ";
                        if ($this->getAttribute($context["gallery_item"], "image_upload", [])) {
                            // line 83
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["gallery_item"], "image_upload", []));
                            foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                                // line 84
                                echo "                                                ";
                                if (( !($context["item_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                    // line 85
                                    echo "                                                    ";
                                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                    // line 86
                                    echo "                                                ";
                                }
                                // line 87
                                echo "                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 88
                            echo "                                        ";
                        }
                        // line 89
                        echo "                                        
                                        ";
                        // line 91
                        echo "                                        ";
                        if (( !($context["item_image"] ?? null) && $this->getAttribute($context["gallery_item"], "image_name", []))) {
                            // line 92
                            echo "                                            ";
                            $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["gallery_item"], "image_name", []), [], "array");
                            // line 93
                            echo "                                        ";
                        }
                        // line 94
                        echo "                                        
                                        ";
                        // line 96
                        echo "                                        ";
                        if (( !($context["item_image"] ?? null) && $this->getAttribute($context["gallery_item"], "image", []))) {
                            // line 97
                            echo "                                            ";
                            $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["gallery_item"], "image", []), [], "array");
                            // line 98
                            echo "                                        ";
                        }
                        // line 99
                        echo "                                        
                                        ";
                        // line 100
                        if (($context["item_image"] ?? null)) {
                            // line 101
                            echo "                                            ";
                            $context["img_data"] = ["image" =>                             // line 102
($context["item_image"] ?? null), "caption" =>                             // line 103
($context["desc"] ?? null), "is_main" => true];
                            // line 106
                            echo "                                            ";
                            $context["project_images"] = [0 => ($context["img_data"] ?? null)];
                            // line 107
                            echo "                                            ";
                            $context["main_image"] = ($context["item_image"] ?? null);
                            // line 108
                            echo "                                        ";
                        }
                        // line 109
                        echo "                                    ";
                    }
                    // line 110
                    echo "                                    
                                    ";
                    // line 112
                    echo "                                    ";
                    if (( !($context["main_image"] ?? null) && (twig_length_filter($this->env, ($context["project_images"] ?? null)) > 0))) {
                        // line 113
                        echo "                                        ";
                        $context["main_image"] = $this->getAttribute($this->getAttribute(($context["project_images"] ?? null), 0, [], "array"), "image", []);
                        // line 114
                        echo "                                    ";
                    }
                    // line 115
                    echo "                                    
                                    ";
                    // line 116
                    if ((($context["main_image"] ?? null) && (twig_length_filter($this->env, ($context["project_images"] ?? null)) > 0))) {
                        // line 117
                        echo "                                        ";
                        $context["thumb_width"] = 400;
                        // line 118
                        echo "                                        ";
                        $context["thumb_height"] = 300;
                        // line 119
                        echo "                                        
                                        <div class=\"portfolio-card\">
                                            <div class=\"portfolio-image\">
                                                <img src=\"";
                        // line 122
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["main_image"] ?? null), "url", []), "html", null, true);
                        echo "\" 
                                                     alt=\"";
                        // line 123
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "\"
                                                     onclick=\"openPortfolioGallery(";
                        // line 124
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo ", '";
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html_attr");
                        echo "')\"
                                                     loading=\"lazy\">
                                                
                                                ";
                        // line 128
                        echo "                                                ";
                        if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) > 1)) {
                            // line 129
                            echo "                                                    <div class=\"image-counter\">
                                                        <i class=\"fa fa-camera\"></i> ";
                            // line 130
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["project_images"] ?? null)), "html", null, true);
                            echo "
                                                    </div>
                                                ";
                        }
                        // line 133
                        echo "                                                
                                                ";
                        // line 135
                        echo "                                                <div class=\"hidden-gallery-data\" id=\"gallery-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "\" style=\"display: none;\">
                                                    ";
                        // line 136
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["project_images"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["img_data"]) {
                            // line 137
                            echo "                                                        <div class=\"gallery-item\" 
                                                             data-src=\"";
                            // line 138
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img_data"], "image", []), "url", []), "html", null, true);
                            echo "\" 
                                                             data-caption=\"";
                            // line 139
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["img_data"], "caption", [])) ? ($this->getAttribute($context["img_data"], "caption", [])) : (($context["title"] ?? null))), "html", null, true);
                            echo "\"></div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img_data'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 141
                        echo "                                                </div>
                                                
                                            </div>
                                            
                                            <div class=\"portfolio-info\">
                                                <h4 class=\"portfolio-title\">";
                        // line 146
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "</h4>
                                                
                                                <div class=\"portfolio-metadata\">
                                                    ";
                        // line 149
                        if (($context["stand_type"] ?? null)) {
                            // line 150
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Тип стенда:</span>
                                                            <span class=\"value stand-type-";
                            // line 152
                            echo twig_escape_filter($this->env, ($context["stand_type"] ?? null), "html", null, true);
                            echo "\">
                                                                ";
                            // line 153
                            if ((($context["stand_type"] ?? null) == "typovye")) {
                                echo "Типовой
                                                                ";
                            } elseif ((                            // line 154
($context["stand_type"] ?? null) == "nestandart")) {
                                echo "Нестандартный
                                                                ";
                            } elseif ((                            // line 155
($context["stand_type"] ?? null) == "ekskluziv")) {
                                echo "Эксклюзивный
                                                                ";
                            } else {
                                // line 156
                                echo twig_escape_filter($this->env, ($context["stand_type"] ?? null), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 158
                            echo "                                                            </span>
                                                        </div>
                                                    ";
                        }
                        // line 161
                        echo "                                                    
                                                    ";
                        // line 162
                        if (($context["construction_area"] ?? null)) {
                            // line 163
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Площадь:</span>
                                                            <span class=\"value\">";
                            // line 165
                            echo twig_escape_filter($this->env, ($context["construction_area"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 168
                        echo "                                                    
                                                    ";
                        // line 169
                        if (($context["exhibition_name"] ?? null)) {
                            // line 170
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Выставка:</span>
                                                            <span class=\"value\">";
                            // line 172
                            echo twig_escape_filter($this->env, ($context["exhibition_name"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 175
                        echo "                                                    
                                                    ";
                        // line 176
                        if (($context["company_name"] ?? null)) {
                            // line 177
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Клиент:</span>
                                                            <span class=\"value\">";
                            // line 179
                            echo twig_escape_filter($this->env, ($context["company_name"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 182
                        echo "                                                    
                                                    ";
                        // line 183
                        if (($context["project_year"] ?? null)) {
                            // line 184
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Год:</span>
                                                            <span class=\"value\">";
                            // line 186
                            echo twig_escape_filter($this->env, ($context["project_year"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 189
                        echo "                                                </div>
                                                
                                                ";
                        // line 191
                        if (($context["desc"] ?? null)) {
                            // line 192
                            echo "                                                    <div class=\"portfolio-description\">";
                            echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                            echo "</div>
                                                ";
                        }
                        // line 194
                        echo "                                            </div>
                                        </div>
                                    ";
                    }
                    // line 197
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
                // line 199
                echo "                        </div>
                    </div>
                </div>
                ";
            }
            // line 203
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

    // line 225
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 226
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 227
        $context["portfolio_styles"] = ('' === $tmp = ".portfolio-section {
    margin: 30px 0;
    max-width: none !important;
    width: 100% !important;
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
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
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
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0.75rem;
        margin: 1.5rem 0;
    }
    .portfolio-card {
        border-radius: 10px;
    }
    .portfolio-image {
        min-height: 140px;
        max-height: 30vh;
    }
    .portfolio-image img {
        padding: 0.5rem;
    }
    .portfolio-info {
        padding: 0.5rem 0.75rem;
    }
    .portfolio-title {
        font-size: 1rem;
    }
    .metadata-item {
        font-size: 0.8rem;
    }
    .portfolio-description {
        display: none;
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

@media (max-width: 480px) {
    .portfolio-image {
        min-height: 120px;
        max-height: 28vh;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .portfolio-grid {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }
}

@media (min-width: 1025px) {
    .portfolio-grid {
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2rem;
    }
}
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 576
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["portfolio_styles"] ?? null)], "method");
    }

    // line 579
    public function block_javascripts($context, array $blocks = [])
    {
        // line 580
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        // line 582
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
        // line 683
        echo "
";
        // line 684
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
        return array (  1041 => 684,  1038 => 683,  937 => 582,  932 => 580,  929 => 579,  925 => 576,  576 => 227,  572 => 226,  569 => 225,  545 => 203,  539 => 199,  524 => 197,  519 => 194,  513 => 192,  511 => 191,  507 => 189,  501 => 186,  497 => 184,  495 => 183,  492 => 182,  486 => 179,  482 => 177,  480 => 176,  477 => 175,  471 => 172,  467 => 170,  465 => 169,  462 => 168,  456 => 165,  452 => 163,  450 => 162,  447 => 161,  442 => 158,  437 => 156,  432 => 155,  428 => 154,  424 => 153,  420 => 152,  416 => 150,  414 => 149,  408 => 146,  401 => 141,  393 => 139,  389 => 138,  386 => 137,  382 => 136,  377 => 135,  374 => 133,  368 => 130,  365 => 129,  362 => 128,  354 => 124,  350 => 123,  346 => 122,  341 => 119,  338 => 118,  335 => 117,  333 => 116,  330 => 115,  327 => 114,  324 => 113,  321 => 112,  318 => 110,  315 => 109,  312 => 108,  309 => 107,  306 => 106,  304 => 103,  303 => 102,  301 => 101,  299 => 100,  296 => 99,  293 => 98,  290 => 97,  287 => 96,  284 => 94,  281 => 93,  278 => 92,  275 => 91,  272 => 89,  269 => 88,  263 => 87,  260 => 86,  257 => 85,  254 => 84,  249 => 83,  246 => 82,  243 => 80,  240 => 79,  237 => 78,  234 => 76,  231 => 75,  225 => 74,  222 => 73,  219 => 72,  216 => 71,  213 => 70,  210 => 68,  207 => 67,  205 => 65,  204 => 64,  203 => 63,  201 => 62,  199 => 61,  196 => 60,  193 => 59,  187 => 58,  184 => 57,  181 => 56,  178 => 55,  173 => 54,  170 => 53,  167 => 51,  164 => 50,  159 => 49,  156 => 48,  153 => 46,  150 => 45,  147 => 44,  144 => 43,  141 => 42,  138 => 41,  135 => 40,  132 => 39,  129 => 38,  126 => 36,  123 => 35,  120 => 34,  117 => 33,  114 => 32,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  100 => 26,  97 => 25,  79 => 24,  77 => 23,  67 => 15,  65 => 14,  59 => 11,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  39 => 1,  37 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "stand-page.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/stand-page.html.twig");
    }
}
