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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "stand-page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 5
        echo "
<section class=\"section stand-page\">
    <section class=\"container ";
        // line 7
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
        <div class=\"columns\">
            <div class=\"column col-12\">
                <div class=\"content\">
                    ";
        // line 11
        echo ($context["content"] ?? null);
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
                            $context["img_data"] = ["image" =>                             // line 53
($context["img_obj"] ?? null), "caption" => (($this->getAttribute(                            // line 54
$context["img_item"], "caption", [])) ? ($this->getAttribute($context["img_item"], "caption", [])) : ("")), "is_main" => (($this->getAttribute(                            // line 55
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
                        $context["img_data"] = ["image" =>                         // line 92
($context["item_image"] ?? null), "caption" =>                         // line 93
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
                                                ";
                    // line 113
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["main_image"] ?? null), "url", []), "html", null, true);
                    echo "\" 
                                                   class=\"glightbox\" 
                                                   data-gallery=\"gallery-";
                    // line 115
                    echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "\"
                                                   data-title=\"";
                    // line 116
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                                   data-description=\"";
                    // line 117
                    echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                    echo "\">
                                                    <img src=\"";
                    // line 118
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["main_image"] ?? null), "cropZoom", [0 => ($context["thumb_width"] ?? null), 1 => ($context["thumb_height"] ?? null)], "method"), "url", []), "html", null, true);
                    echo "\" 
                                                         alt=\"";
                    // line 119
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\" 
                                                         title=\"";
                    // line 120
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\">
                                                </a>
                                                
                                                ";
                    // line 124
                    echo "                                                ";
                    if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) > 1)) {
                        // line 125
                        echo "                                                    <div class=\"image-counter\">
                                                        <i class=\"fa fa-camera\"></i> ";
                        // line 126
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["project_images"] ?? null)), "html", null, true);
                        echo "
                                                    </div>
                                                ";
                    }
                    // line 129
                    echo "                                                
                                                ";
                    // line 131
                    echo "                                                ";
                    if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) > 1)) {
                        // line 132
                        echo "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["project_images"] ?? null));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["img_data"]) {
                            // line 133
                            echo "                                                        ";
                            if (($this->getAttribute($context["img_data"], "image", []) != ($context["main_image"] ?? null))) {
                                // line 134
                                echo "                                                            <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img_data"], "image", []), "url", []), "html", null, true);
                                echo "\" 
                                                               class=\"glightbox hidden-lightbox-item\" 
                                                               data-gallery=\"gallery-";
                                // line 136
                                echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                                echo "\"
                                                               data-title=\"";
                                // line 137
                                echo twig_escape_filter($this->env, (($this->getAttribute($context["img_data"], "caption", [])) ? ($this->getAttribute($context["img_data"], "caption", [])) : (($context["title"] ?? null))), "html", null, true);
                                echo "\"
                                                               data-description=\"";
                                // line 138
                                echo twig_escape_filter($this->env, $this->getAttribute($context["img_data"], "caption", []), "html", null, true);
                                echo "\"></a>
                                                        ";
                            }
                            // line 140
                            echo "                                                    ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img_data'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 141
                        echo "                                                ";
                    }
                    // line 142
                    echo "                                            </div>
                                            
                                            <div class=\"portfolio-info\">
                                                <h4 class=\"portfolio-title\">";
                    // line 145
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "</h4>
                                                
                                                <div class=\"portfolio-metadata\">
                                                    ";
                    // line 148
                    if (($context["construction_area"] ?? null)) {
                        // line 149
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Площадь:</span>
                                                            <span class=\"value\">";
                        // line 151
                        echo twig_escape_filter($this->env, ($context["construction_area"] ?? null), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 154
                    echo "                                                    
                                                    ";
                    // line 155
                    if (($context["exhibition_name"] ?? null)) {
                        // line 156
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Выставка:</span>
                                                            <span class=\"value\">";
                        // line 158
                        echo twig_escape_filter($this->env, ($context["exhibition_name"] ?? null), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 161
                    echo "                                                    
                                                    ";
                    // line 162
                    if (($context["company_name"] ?? null)) {
                        // line 163
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Клиент:</span>
                                                            <span class=\"value\">";
                        // line 165
                        echo twig_escape_filter($this->env, ($context["company_name"] ?? null), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 168
                    echo "                                                    
                                                    ";
                    // line 169
                    if (($context["project_year"] ?? null)) {
                        // line 170
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Год:</span>
                                                            <span class=\"value\">";
                        // line 172
                        echo twig_escape_filter($this->env, ($context["project_year"] ?? null), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 175
                    echo "                                                </div>
                                                
                                                ";
                    // line 177
                    if (($context["desc"] ?? null)) {
                        // line 178
                        echo "                                                    <div class=\"portfolio-description\">";
                        echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                        echo "</div>
                                                ";
                    }
                    // line 180
                    echo "                                            </div>
                                        </div>
                                    ";
                }
                // line 183
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
            // line 185
            echo "                        </div>
                    </div>
                </div>
                ";
        }
        // line 189
        echo "            </div>
        </div>
    </section>
</section>
";
    }

    // line 195
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 196
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 197
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
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.portfolio-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

.portfolio-image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 4/3;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
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
    font-size: 1rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.image-counter i {
    font-size: 0.9rem;
}

.hidden-lightbox-item {
    display: none;
}

.portfolio-info {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.portfolio-title {
    margin: 0 0 15px 0;
    font-size: 1.4rem;
    color: #333;
    font-weight: 600;
}

.portfolio-metadata {
    margin-bottom: 15px;
}

.metadata-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
    font-size: 1.3rem;
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
}

.portfolio-description {
    font-size: 1.3rem;
    color: #666;
    line-height: 1.8;
    margin-top: auto;
}

@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
        gap: 20px;
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
        // line 357
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["portfolio_styles"] ?? null)], "method");
    }

    // line 360
    public function block_javascripts($context, array $blocks = [])
    {
        // line 361
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 362
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"], "method");
        // line 363
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css"], "method");
        // line 364
        echo "
";
        // line 365
        $context["gallery_script"] = ('' === $tmp = "document.addEventListener('DOMContentLoaded', function() {
    // Initialize lightbox
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: false,
        autoplayVideos: true
    });
    
    // Hide navigation arrows for single image galleries
    lightbox.on('open', function() {
        setTimeout(() => {
            const slider = document.querySelector('.gslider');
            if (slider && slider.children.length <= 1) {
                const prevBtn = document.querySelector('.gprev');
                const nextBtn = document.querySelector('.gnext');
                if (prevBtn) prevBtn.style.display = 'none';
                if (nextBtn) nextBtn.style.display = 'none';
            }
        }, 50);
    });
    
    // Show navigation arrows when closing (for next time)
    lightbox.on('close', function() {
        const prevBtn = document.querySelector('.gprev');
        const nextBtn = document.querySelector('.gnext');
        if (prevBtn) prevBtn.style.display = '';
        if (nextBtn) nextBtn.style.display = '';
    });
});
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 396
        echo "
";
        // line 397
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["gallery_script"] ?? null)], "method");
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
        return array (  761 => 397,  758 => 396,  727 => 365,  724 => 364,  722 => 363,  720 => 362,  716 => 361,  713 => 360,  709 => 357,  549 => 197,  545 => 196,  542 => 195,  534 => 189,  528 => 185,  513 => 183,  508 => 180,  502 => 178,  500 => 177,  496 => 175,  490 => 172,  486 => 170,  484 => 169,  481 => 168,  475 => 165,  471 => 163,  469 => 162,  466 => 161,  460 => 158,  456 => 156,  454 => 155,  451 => 154,  445 => 151,  441 => 149,  439 => 148,  433 => 145,  428 => 142,  425 => 141,  411 => 140,  406 => 138,  402 => 137,  396 => 136,  390 => 134,  387 => 133,  369 => 132,  366 => 131,  363 => 129,  357 => 126,  354 => 125,  351 => 124,  345 => 120,  341 => 119,  337 => 118,  333 => 117,  329 => 116,  323 => 115,  317 => 113,  312 => 109,  309 => 108,  306 => 107,  304 => 106,  301 => 105,  298 => 104,  295 => 103,  292 => 102,  289 => 100,  286 => 99,  283 => 98,  280 => 97,  277 => 96,  275 => 93,  274 => 92,  272 => 91,  270 => 90,  267 => 89,  264 => 88,  261 => 87,  258 => 86,  255 => 84,  252 => 83,  249 => 82,  246 => 81,  243 => 79,  240 => 78,  234 => 77,  231 => 76,  228 => 75,  225 => 74,  220 => 73,  217 => 72,  214 => 70,  211 => 69,  208 => 68,  205 => 66,  202 => 65,  196 => 64,  193 => 63,  190 => 62,  187 => 61,  184 => 60,  181 => 58,  178 => 57,  176 => 55,  175 => 54,  174 => 53,  172 => 52,  170 => 51,  167 => 50,  164 => 49,  158 => 48,  155 => 47,  152 => 46,  149 => 45,  144 => 44,  141 => 43,  138 => 41,  135 => 40,  130 => 39,  127 => 38,  124 => 36,  121 => 35,  118 => 34,  115 => 33,  112 => 32,  109 => 30,  106 => 29,  103 => 28,  100 => 27,  98 => 26,  95 => 25,  77 => 24,  75 => 23,  65 => 15,  63 => 14,  57 => 11,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  31 => 1,);
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

{% block content %}
{% set grid_size = theme_var('grid-size') %}

<section class=\"section stand-page\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-12\">
                <div class=\"content\">
                    {{ content|raw }}
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
                                                {# Main image with multiple images support #}
                                                <a href=\"{{ main_image.url }}\" 
                                                   class=\"glightbox\" 
                                                   data-gallery=\"gallery-{{ gallery_id }}-{{ loop.index }}\"
                                                   data-title=\"{{ title }}\"
                                                   data-description=\"{{ desc }}\">
                                                    <img src=\"{{ main_image.cropZoom(thumb_width, thumb_height).url }}\" 
                                                         alt=\"{{ title }}\" 
                                                         title=\"{{ title }}\">
                                                </a>
                                                
                                                {# Image counter if multiple images #}
                                                {% if project_images|length > 1 %}
                                                    <div class=\"image-counter\">
                                                        <i class=\"fa fa-camera\"></i> {{ project_images|length }}
                                                    </div>
                                                {% endif %}
                                                
                                                {# Hidden images for lightbox #}
                                                {% if project_images|length > 1 %}
                                                    {% for img_data in project_images %}
                                                        {% if img_data.image != main_image %}
                                                            <a href=\"{{ img_data.image.url }}\" 
                                                               class=\"glightbox hidden-lightbox-item\" 
                                                               data-gallery=\"gallery-{{ gallery_id }}-{{ loop.parent.loop.index }}\"
                                                               data-title=\"{{ img_data.caption ?: title }}\"
                                                               data-description=\"{{ img_data.caption }}\"></a>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
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
            </div>
        </div>
    </section>
</section>
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
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.portfolio-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

.portfolio-image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 4/3;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
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
    font-size: 1rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.image-counter i {
    font-size: 0.9rem;
}

.hidden-lightbox-item {
    display: none;
}

.portfolio-info {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.portfolio-title {
    margin: 0 0 15px 0;
    font-size: 1.4rem;
    color: #333;
    font-weight: 600;
}

.portfolio-metadata {
    margin-bottom: 15px;
}

.metadata-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
    font-size: 1.3rem;
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
}

.portfolio-description {
    font-size: 1.3rem;
    color: #666;
    line-height: 1.8;
    margin-top: auto;
}

@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
        gap: 20px;
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
{% do assets.addJs('https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js') %}
{% do assets.addCss('https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css') %}

{% set gallery_script %}
document.addEventListener('DOMContentLoaded', function() {
    // Initialize lightbox
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: false,
        autoplayVideos: true
    });
    
    // Hide navigation arrows for single image galleries
    lightbox.on('open', function() {
        setTimeout(() => {
            const slider = document.querySelector('.gslider');
            if (slider && slider.children.length <= 1) {
                const prevBtn = document.querySelector('.gprev');
                const nextBtn = document.querySelector('.gnext');
                if (prevBtn) prevBtn.style.display = 'none';
                if (nextBtn) nextBtn.style.display = 'none';
            }
        }, 50);
    });
    
    // Show navigation arrows when closing (for next time)
    lightbox.on('close', function() {
        const prevBtn = document.querySelector('.gprev');
        const nextBtn = document.querySelector('.gnext');
        if (prevBtn) prevBtn.style.display = '';
        if (nextBtn) nextBtn.style.display = '';
    });
});
{% endset %}

{% do assets.addInlineJs(gallery_script) %}
{% endblock %} ", "stand-page.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/stand-page.html.twig");
    }
}
