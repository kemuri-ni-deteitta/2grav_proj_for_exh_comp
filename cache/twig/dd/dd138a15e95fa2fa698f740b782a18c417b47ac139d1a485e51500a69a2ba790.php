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

/* portfolio.html.twig */
class __TwigTemplate_44c2d71d40491fe3ac5b44a406954a7744259a2b7620f00302faceca8061ed63 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "portfolio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 5
        echo "
<section class=\"section portfolio\">
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
        // line 15
        echo "                ";
        $context["all_portfolio_items"] = [];
        // line 16
        echo "                
                ";
        // line 18
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 19
            echo "                    ";
            if ((($this->getAttribute($context["child"], "template", []) == "portfolio-item") && $this->getAttribute($this->getAttribute($context["child"], "header", []), "gallery", []))) {
                // line 20
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "header", []), "gallery", []));
                foreach ($context['_seq'] as $context["_key"] => $context["gallery_item"]) {
                    // line 21
                    echo "                            ";
                    $context["item_data"] = ["page" =>                     // line 22
$context["child"], "gallery_item" =>                     // line 23
$context["gallery_item"], "stand_type" => $this->getAttribute($this->getAttribute(                    // line 24
$context["child"], "header", []), "stand_type", []), "construction_area" => $this->getAttribute($this->getAttribute(                    // line 25
$context["child"], "header", []), "construction_area", []), "exhibition_name" => $this->getAttribute($this->getAttribute(                    // line 26
$context["child"], "header", []), "exhibition_name", []), "company_name" => $this->getAttribute($this->getAttribute(                    // line 27
$context["child"], "header", []), "company_name", []), "project_year" => $this->getAttribute($this->getAttribute(                    // line 28
$context["child"], "header", []), "project_year", []), "source" => "portfolio"];
                    // line 31
                    echo "                            ";
                    $context["all_portfolio_items"] = twig_array_merge(($context["all_portfolio_items"] ?? null), [0 => ($context["item_data"] ?? null)]);
                    // line 32
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                    ";
            }
            // line 34
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                
                ";
        // line 37
        echo "                ";
        $context["services_page"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => "/uslugi/razrabotka-stendov"], "method");
        // line 38
        echo "                ";
        if (($context["services_page"] ?? null)) {
            // line 39
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["services_page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["service_child"]) {
                // line 40
                echo "                        ";
                if ((($this->getAttribute($context["service_child"], "template", []) == "stand-page") && $this->getAttribute($this->getAttribute($context["service_child"], "header", []), "gallery", []))) {
                    // line 41
                    echo "                            ";
                    $context["stand_type"] = null;
                    // line 42
                    echo "                            ";
                    if (($this->getAttribute($context["service_child"], "slug", []) == "typovye")) {
                        // line 43
                        echo "                                ";
                        $context["stand_type"] = "typovye";
                        // line 44
                        echo "                            ";
                    } elseif (($this->getAttribute($context["service_child"], "slug", []) == "nestandart")) {
                        // line 45
                        echo "                                ";
                        $context["stand_type"] = "nestandart";
                        // line 46
                        echo "                            ";
                    } elseif (($this->getAttribute($context["service_child"], "slug", []) == "ekskluziv")) {
                        // line 47
                        echo "                                ";
                        $context["stand_type"] = "ekskluziv";
                        // line 48
                        echo "                            ";
                    }
                    // line 49
                    echo "                            
                            ";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["service_child"], "header", []), "gallery", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["gallery_item"]) {
                        // line 51
                        echo "                                ";
                        // line 52
                        echo "                                ";
                        $context["item_data"] = ["page" =>                         // line 53
$context["service_child"], "gallery_item" =>                         // line 54
$context["gallery_item"], "stand_type" =>                         // line 55
($context["stand_type"] ?? null), "construction_area" => $this->getAttribute(                        // line 56
$context["gallery_item"], "construction_area", []), "exhibition_name" => $this->getAttribute(                        // line 57
$context["gallery_item"], "exhibition_name", []), "company_name" => $this->getAttribute(                        // line 58
$context["gallery_item"], "company_name", []), "project_year" => $this->getAttribute(                        // line 59
$context["gallery_item"], "project_year", []), "source" => "services", "images" => (($this->getAttribute(                        // line 61
$context["gallery_item"], "images", [])) ? ($this->getAttribute($context["gallery_item"], "images", [])) : (null))];
                        // line 63
                        echo "                                ";
                        $context["all_portfolio_items"] = twig_array_merge(($context["all_portfolio_items"] ?? null), [0 => ($context["item_data"] ?? null)]);
                        // line 64
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "                        ";
                }
                // line 66
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service_child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                ";
        }
        // line 68
        echo "                
                ";
        // line 69
        if ((twig_length_filter($this->env, ($context["all_portfolio_items"] ?? null)) > 0)) {
            // line 70
            echo "                <div class=\"portfolio-section\" id=\"portfolio-content\">
                    ";
            // line 72
            echo "                    <div class=\"portfolio-filters\">
                        <h3>Фильтр по типу стенда:</h3>
                        <div class=\"filter-buttons\">
                            <button class=\"filter-btn active\" data-filter=\"all\">Все проекты</button>
                            <button class=\"filter-btn\" data-filter=\"typovye\">Типовые стенды</button>
                            <button class=\"filter-btn\" data-filter=\"nestandart\">Нестандартные стенды</button>
                            <button class=\"filter-btn\" data-filter=\"ekskluziv\">Эксклюзивные стенды</button>
                        </div>

                    </div>
                    
                    <div class=\"portfolio-gallery\">
                        <div class=\"portfolio-grid\">
                            ";
            // line 85
            $context["gallery_id"] = "portfolio-main";
            // line 86
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["all_portfolio_items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 87
                echo "                                ";
                $context["gallery_item"] = $this->getAttribute($context["item"], "gallery_item", []);
                // line 88
                echo "                                ";
                $context["page_obj"] = $this->getAttribute($context["item"], "page", []);
                // line 89
                echo "                                
                                <div class=\"portfolio-item\" data-type=\"";
                // line 90
                (($this->getAttribute($context["item"], "stand_type", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true))) : (print ("unknown")));
                echo "\">
                                    ";
                // line 91
                $context["project_images"] = [];
                // line 92
                echo "                                    ";
                $context["main_image"] = null;
                // line 93
                echo "                                    ";
                $context["title"] = (($this->getAttribute(($context["gallery_item"] ?? null), "title", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "title", [])) : ("Проект"));
                // line 94
                echo "                                    ";
                $context["desc"] = (($this->getAttribute(($context["gallery_item"] ?? null), "desc", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "desc", [])) : (""));
                // line 95
                echo "                                    
                                    ";
                // line 97
                echo "                                    ";
                $context["construction_area"] = (($this->getAttribute($context["item"], "construction_area", [])) ? ($this->getAttribute($context["item"], "construction_area", [])) : ((($this->getAttribute(($context["gallery_item"] ?? null), "construction_area", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "construction_area", [])) : (""))));
                // line 98
                echo "                                    ";
                $context["exhibition_name"] = (($this->getAttribute($context["item"], "exhibition_name", [])) ? ($this->getAttribute($context["item"], "exhibition_name", [])) : ((($this->getAttribute(($context["gallery_item"] ?? null), "exhibition_name", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "exhibition_name", [])) : (""))));
                // line 99
                echo "                                    ";
                $context["company_name"] = (($this->getAttribute($context["item"], "company_name", [])) ? ($this->getAttribute($context["item"], "company_name", [])) : ((($this->getAttribute(($context["gallery_item"] ?? null), "company_name", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "company_name", [])) : (""))));
                // line 100
                echo "                                    ";
                $context["project_year"] = (($this->getAttribute($context["item"], "project_year", [])) ? ($this->getAttribute($context["item"], "project_year", [])) : ((($this->getAttribute(($context["gallery_item"] ?? null), "project_year", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "project_year", [])) : (""))));
                // line 101
                echo "                                    

                                    
                                    ";
                // line 105
                echo "                                    ";
                if ($this->getAttribute($context["item"], "images", [])) {
                    // line 106
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "images", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["img_item"]) {
                        // line 107
                        echo "                                            ";
                        $context["img_obj"] = null;
                        // line 108
                        echo "                                            
                                            ";
                        // line 110
                        echo "                                            ";
                        if ($this->getAttribute($context["img_item"], "image_upload", [])) {
                            // line 111
                            echo "                                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["img_item"], "image_upload", []));
                            foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                                // line 112
                                echo "                                                    ";
                                if (( !($context["img_obj"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                    // line 113
                                    echo "                                                        ";
                                    $context["img_obj"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                    // line 114
                                    echo "                                                    ";
                                }
                                // line 115
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 116
                            echo "                                            ";
                        }
                        // line 117
                        echo "                                            
                                            ";
                        // line 118
                        if (($context["img_obj"] ?? null)) {
                            // line 119
                            echo "                                                ";
                            $context["img_data"] = ["image" =>                             // line 120
($context["img_obj"] ?? null), "caption" => (($this->getAttribute(                            // line 121
$context["img_item"], "caption", [])) ? ($this->getAttribute($context["img_item"], "caption", [])) : ("")), "is_main" => (($this->getAttribute(                            // line 122
$context["img_item"], "is_main", [])) ? ($this->getAttribute($context["img_item"], "is_main", [])) : (false))];
                            // line 124
                            echo "                                                ";
                            $context["project_images"] = twig_array_merge(($context["project_images"] ?? null), [0 => ($context["img_data"] ?? null)]);
                            // line 125
                            echo "                                                
                                                ";
                            // line 127
                            echo "                                                ";
                            if (($this->getAttribute($context["img_item"], "is_main", []) &&  !($context["main_image"] ?? null))) {
                                // line 128
                                echo "                                                    ";
                                $context["main_image"] = ($context["img_obj"] ?? null);
                                // line 129
                                echo "                                                ";
                            }
                            // line 130
                            echo "                                            ";
                        }
                        // line 131
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo "                                    ";
                }
                // line 133
                echo "                                    
                                    ";
                // line 135
                echo "                                    ";
                if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) == 0)) {
                    // line 136
                    echo "                                        ";
                    $context["item_image"] = null;
                    // line 137
                    echo "                                        
                                        ";
                    // line 139
                    echo "                                        ";
                    if ($this->getAttribute(($context["gallery_item"] ?? null), "image_upload", [])) {
                        // line 140
                        echo "                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["gallery_item"] ?? null), "image_upload", []));
                        foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                            // line 141
                            echo "                                                ";
                            if (( !($context["item_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                // line 142
                                echo "                                                    ";
                                $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                // line 143
                                echo "                                                ";
                            }
                            // line 144
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 145
                        echo "                                        ";
                    }
                    // line 146
                    echo "                                        
                                        ";
                    // line 148
                    echo "                                        ";
                    if (( !($context["item_image"] ?? null) && $this->getAttribute(($context["gallery_item"] ?? null), "image_name", []))) {
                        // line 149
                        echo "                                            ";
                        $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute(($context["gallery_item"] ?? null), "image_name", []), [], "array");
                        // line 150
                        echo "                                        ";
                    }
                    // line 151
                    echo "                                        
                                        ";
                    // line 153
                    echo "                                        ";
                    if (( !($context["item_image"] ?? null) && $this->getAttribute(($context["gallery_item"] ?? null), "image", []))) {
                        // line 154
                        echo "                                            ";
                        $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute(($context["gallery_item"] ?? null), "image", []), [], "array");
                        // line 155
                        echo "                                        ";
                    }
                    // line 156
                    echo "                                        
                                        ";
                    // line 157
                    if (($context["item_image"] ?? null)) {
                        // line 158
                        echo "                                            ";
                        $context["img_data"] = ["image" =>                         // line 159
($context["item_image"] ?? null), "caption" =>                         // line 160
($context["desc"] ?? null), "is_main" => true];
                        // line 163
                        echo "                                            ";
                        $context["project_images"] = [0 => ($context["img_data"] ?? null)];
                        // line 164
                        echo "                                            ";
                        $context["main_image"] = ($context["item_image"] ?? null);
                        // line 165
                        echo "                                        ";
                    }
                    // line 166
                    echo "                                    ";
                }
                // line 167
                echo "                                    
                                    ";
                // line 169
                echo "                                    ";
                if (( !($context["main_image"] ?? null) && (twig_length_filter($this->env, ($context["project_images"] ?? null)) > 0))) {
                    // line 170
                    echo "                                        ";
                    $context["main_image"] = $this->getAttribute($this->getAttribute(($context["project_images"] ?? null), 0, [], "array"), "image", []);
                    // line 171
                    echo "                                    ";
                }
                // line 172
                echo "                                    
                                    ";
                // line 173
                if ((($context["main_image"] ?? null) && (twig_length_filter($this->env, ($context["project_images"] ?? null)) > 0))) {
                    // line 174
                    echo "                                        ";
                    $context["thumb_width"] = 400;
                    // line 175
                    echo "                                        ";
                    $context["thumb_height"] = 300;
                    // line 176
                    echo "                                        
                                        <div class=\"portfolio-card\">
                                            <div class=\"portfolio-image\">
                                                ";
                    // line 180
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["main_image"] ?? null), "url", []), "html", null, true);
                    echo "\" 
                                                   class=\"glightbox\" 
                                                   data-gallery=\"gallery-";
                    // line 182
                    echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "\"
                                                   data-title=\"";
                    // line 183
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                                   data-description=\"";
                    // line 184
                    echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                    echo "\">
                                                    <img src=\"";
                    // line 185
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["main_image"] ?? null), "cropZoom", [0 => ($context["thumb_width"] ?? null), 1 => ($context["thumb_height"] ?? null)], "method"), "url", []), "html", null, true);
                    echo "\" 
                                                         alt=\"";
                    // line 186
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\" 
                                                         title=\"";
                    // line 187
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\">
                                                </a>
                                                
                                                ";
                    // line 191
                    echo "                                                ";
                    if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) > 1)) {
                        // line 192
                        echo "                                                    <div class=\"image-counter\">
                                                        <i class=\"fa fa-camera\"></i> ";
                        // line 193
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["project_images"] ?? null)), "html", null, true);
                        echo "
                                                    </div>
                                                ";
                    }
                    // line 196
                    echo "                                                
                                                ";
                    // line 198
                    echo "                                                ";
                    if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) > 1)) {
                        // line 199
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
                            // line 200
                            echo "                                                        ";
                            if (($this->getAttribute($context["img_data"], "image", []) != ($context["main_image"] ?? null))) {
                                // line 201
                                echo "                                                            <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img_data"], "image", []), "url", []), "html", null, true);
                                echo "\" 
                                                               class=\"glightbox hidden-lightbox-item\" 
                                                               data-gallery=\"gallery-";
                                // line 203
                                echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                                echo "\"
                                                               data-title=\"";
                                // line 204
                                echo twig_escape_filter($this->env, (($this->getAttribute($context["img_data"], "caption", [])) ? ($this->getAttribute($context["img_data"], "caption", [])) : (($context["title"] ?? null))), "html", null, true);
                                echo "\"
                                                               data-description=\"";
                                // line 205
                                echo twig_escape_filter($this->env, $this->getAttribute($context["img_data"], "caption", []), "html", null, true);
                                echo "\"></a>
                                                        ";
                            }
                            // line 207
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
                        // line 208
                        echo "                                                ";
                    }
                    // line 209
                    echo "                                            </div>
                                            
                                            <div class=\"portfolio-info\">
                                                <h4 class=\"portfolio-title\">";
                    // line 212
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "</h4>
                                                
                                                <div class=\"portfolio-metadata\">
                                                    ";
                    // line 215
                    if ($this->getAttribute($context["item"], "stand_type", [])) {
                        // line 216
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Тип стенда:</span>
                                                            <span class=\"value stand-type-";
                        // line 218
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true);
                        echo "\">
                                                                ";
                        // line 219
                        if (($this->getAttribute($context["item"], "stand_type", []) == "typovye")) {
                            echo "Типовой
                                                                ";
                        } elseif (($this->getAttribute(                        // line 220
$context["item"], "stand_type", []) == "nestandart")) {
                            echo "Нестандартный
                                                                ";
                        } elseif (($this->getAttribute(                        // line 221
$context["item"], "stand_type", []) == "ekskluziv")) {
                            echo "Эксклюзивный
                                                                ";
                        } else {
                            // line 222
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true);
                            echo "
                                                                ";
                        }
                        // line 224
                        echo "                                                            </span>
                                                        </div>
                                                    ";
                    }
                    // line 227
                    echo "                                                    
                                                    ";
                    // line 228
                    if (($context["construction_area"] ?? null)) {
                        // line 229
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Площадь:</span>
                                                            <span class=\"value\">";
                        // line 231
                        echo twig_escape_filter($this->env, ($context["construction_area"] ?? null), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 234
                    echo "                                                    
                                                    ";
                    // line 235
                    if (($context["exhibition_name"] ?? null)) {
                        // line 236
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Выставка:</span>
                                                            <span class=\"value\">";
                        // line 238
                        echo twig_escape_filter($this->env, ($context["exhibition_name"] ?? null), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 241
                    echo "                                                    
                                                    ";
                    // line 242
                    if (($context["company_name"] ?? null)) {
                        // line 243
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Клиент:</span>
                                                            <span class=\"value\">";
                        // line 245
                        echo twig_escape_filter($this->env, ($context["company_name"] ?? null), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 248
                    echo "                                                    
                                                    ";
                    // line 249
                    if (($context["project_year"] ?? null)) {
                        // line 250
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Год:</span>
                                                            <span class=\"value\">";
                        // line 252
                        echo twig_escape_filter($this->env, ($context["project_year"] ?? null), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 255
                    echo "                                                </div>
                                                
                                                ";
                    // line 257
                    if (($context["desc"] ?? null)) {
                        // line 258
                        echo "                                                    <div class=\"portfolio-description\">";
                        echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                        echo "</div>
                                                ";
                    }
                    // line 260
                    echo "                                            </div>
                                        </div>
                                    ";
                }
                // line 263
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "                        </div>
                    </div>
                </div>
                ";
        } else {
            // line 269
            echo "                <div class=\"portfolio-empty\">
                    <p>Пока нет добавленных проектов в портфолио.</p>
                </div>
                ";
        }
        // line 273
        echo "            </div>
        </div>
    </section>
</section>
";
    }

    // line 279
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 280
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 281
        $context["portfolio_styles"] = ('' === $tmp = ".portfolio-section {
    margin: 30px 0;
}

.portfolio-filters {
    margin-bottom: 30px;
    text-align: center;
}

.portfolio-filters h3 {
    margin-bottom: 20px;
    font-size: 18px;
    color: #333;
}

.filter-buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}

.filter-btn {
    background: #f8f9fa;
    border: 2px solid #dee2e6;
    color: #495057;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 14px;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    background: #007bff;
    border-color: #007bff;
    color: white;
}

.filter-status {
    margin-top: 15px;
    font-size: 14px;
    color: #666;
    font-style: italic;
    min-height: 20px;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.portfolio-item {
    opacity: 1;
    transition: all 0.3s ease;
}

.portfolio-item.filtered-out {
    opacity: 0;
    transform: scale(0.8);
    pointer-events: none;
    display: none !important;
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
    font-size: 12px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.image-counter i {
    font-size: 10px;
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
    font-size: 18px;
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
    font-size: 14px;
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
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
    font-size: 14px;
    color: #666;
    line-height: 1.4;
    margin-top: auto;
}

.portfolio-empty {
    text-align: center;
    padding: 60px 20px;
    color: #666;
}

@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .filter-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .filter-btn {
        width: 200px;
    }
}
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 489
        echo "
";
        // line 490
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["portfolio_styles"] ?? null)], "method");
    }

    // line 493
    public function block_javascripts($context, array $blocks = [])
    {
        // line 494
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 495
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"], "method");
        // line 496
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css"], "method");
        // line 497
        echo "
";
        // line 498
        $context["portfolio_script"] = ('' === $tmp = "document.addEventListener('DOMContentLoaded', function() {
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
    
    // Portfolio filtering
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filterValue = this.dataset.filter;
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            portfolioItems.forEach(item => {
                const itemType = item.dataset.type;
                
                if (filterValue === 'all' || itemType === filterValue) {
                    item.classList.remove('filtered-out');
                } else {
                    item.classList.add('filtered-out');
                }
            });
            
            // Filter items without automatic scrolling
            // Users can scroll manually to see the filtered results
        });
    });
    

});
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 559
        echo "
";
        // line 560
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["portfolio_script"] ?? null)], "method");
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1036 => 560,  1033 => 559,  972 => 498,  969 => 497,  967 => 496,  965 => 495,  961 => 494,  958 => 493,  954 => 490,  951 => 489,  743 => 281,  739 => 280,  736 => 279,  728 => 273,  722 => 269,  716 => 265,  701 => 263,  696 => 260,  690 => 258,  688 => 257,  684 => 255,  678 => 252,  674 => 250,  672 => 249,  669 => 248,  663 => 245,  659 => 243,  657 => 242,  654 => 241,  648 => 238,  644 => 236,  642 => 235,  639 => 234,  633 => 231,  629 => 229,  627 => 228,  624 => 227,  619 => 224,  614 => 222,  609 => 221,  605 => 220,  601 => 219,  597 => 218,  593 => 216,  591 => 215,  585 => 212,  580 => 209,  577 => 208,  563 => 207,  558 => 205,  554 => 204,  548 => 203,  542 => 201,  539 => 200,  521 => 199,  518 => 198,  515 => 196,  509 => 193,  506 => 192,  503 => 191,  497 => 187,  493 => 186,  489 => 185,  485 => 184,  481 => 183,  475 => 182,  469 => 180,  464 => 176,  461 => 175,  458 => 174,  456 => 173,  453 => 172,  450 => 171,  447 => 170,  444 => 169,  441 => 167,  438 => 166,  435 => 165,  432 => 164,  429 => 163,  427 => 160,  426 => 159,  424 => 158,  422 => 157,  419 => 156,  416 => 155,  413 => 154,  410 => 153,  407 => 151,  404 => 150,  401 => 149,  398 => 148,  395 => 146,  392 => 145,  386 => 144,  383 => 143,  380 => 142,  377 => 141,  372 => 140,  369 => 139,  366 => 137,  363 => 136,  360 => 135,  357 => 133,  354 => 132,  348 => 131,  345 => 130,  342 => 129,  339 => 128,  336 => 127,  333 => 125,  330 => 124,  328 => 122,  327 => 121,  326 => 120,  324 => 119,  322 => 118,  319 => 117,  316 => 116,  310 => 115,  307 => 114,  304 => 113,  301 => 112,  296 => 111,  293 => 110,  290 => 108,  287 => 107,  282 => 106,  279 => 105,  274 => 101,  271 => 100,  268 => 99,  265 => 98,  262 => 97,  259 => 95,  256 => 94,  253 => 93,  250 => 92,  248 => 91,  244 => 90,  241 => 89,  238 => 88,  235 => 87,  217 => 86,  215 => 85,  200 => 72,  197 => 70,  195 => 69,  192 => 68,  189 => 67,  183 => 66,  180 => 65,  174 => 64,  171 => 63,  169 => 61,  168 => 59,  167 => 58,  166 => 57,  165 => 56,  164 => 55,  163 => 54,  162 => 53,  160 => 52,  158 => 51,  154 => 50,  151 => 49,  148 => 48,  145 => 47,  142 => 46,  139 => 45,  136 => 44,  133 => 43,  130 => 42,  127 => 41,  124 => 40,  119 => 39,  116 => 38,  113 => 37,  110 => 35,  104 => 34,  101 => 33,  95 => 32,  92 => 31,  90 => 28,  89 => 27,  88 => 26,  87 => 25,  86 => 24,  85 => 23,  84 => 22,  82 => 21,  77 => 20,  74 => 19,  69 => 18,  66 => 16,  63 => 15,  57 => 11,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  31 => 1,);
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

<section class=\"section portfolio\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-12\">
                <div class=\"content\">
                    {{ content|raw }}
                </div>
                
                {# Collect all portfolio items from multiple sources #}
                {% set all_portfolio_items = [] %}
                
                {# Get items from Portfolio section #}
                {% for child in page.children.visible %}
                    {% if child.template == 'portfolio-item' and child.header.gallery %}
                        {% for gallery_item in child.header.gallery %}
                            {% set item_data = {
                                'page': child,
                                'gallery_item': gallery_item,
                                'stand_type': child.header.stand_type,
                                'construction_area': child.header.construction_area,
                                'exhibition_name': child.header.exhibition_name,
                                'company_name': child.header.company_name,
                                'project_year': child.header.project_year,
                                'source': 'portfolio'
                            } %}
                            {% set all_portfolio_items = all_portfolio_items|merge([item_data]) %}
                        {% endfor %}
                    {% endif %}
                {% endfor %}
                
                {# Get items from Services section #}
                {% set services_page = pages.find('/uslugi/razrabotka-stendov') %}
                {% if services_page %}
                    {% for service_child in services_page.children.visible %}
                        {% if service_child.template == 'stand-page' and service_child.header.gallery %}
                            {% set stand_type = null %}
                            {% if service_child.slug == 'typovye' %}
                                {% set stand_type = 'typovye' %}
                            {% elseif service_child.slug == 'nestandart' %}
                                {% set stand_type = 'nestandart' %}
                            {% elseif service_child.slug == 'ekskluziv' %}
                                {% set stand_type = 'ekskluziv' %}
                            {% endif %}
                            
                            {% for gallery_item in service_child.header.gallery %}
                                {# Always create item_data, regardless of structure #}
                                {% set item_data = {
                                    'page': service_child,
                                    'gallery_item': gallery_item,
                                    'stand_type': stand_type,
                                    'construction_area': gallery_item.construction_area,
                                    'exhibition_name': gallery_item.exhibition_name,
                                    'company_name': gallery_item.company_name,
                                    'project_year': gallery_item.project_year,
                                    'source': 'services',
                                    'images': gallery_item.images ?: null
                                } %}
                                {% set all_portfolio_items = all_portfolio_items|merge([item_data]) %}
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                
                {% if all_portfolio_items|length > 0 %}
                <div class=\"portfolio-section\" id=\"portfolio-content\">
                    {# Filter Controls #}
                    <div class=\"portfolio-filters\">
                        <h3>Фильтр по типу стенда:</h3>
                        <div class=\"filter-buttons\">
                            <button class=\"filter-btn active\" data-filter=\"all\">Все проекты</button>
                            <button class=\"filter-btn\" data-filter=\"typovye\">Типовые стенды</button>
                            <button class=\"filter-btn\" data-filter=\"nestandart\">Нестандартные стенды</button>
                            <button class=\"filter-btn\" data-filter=\"ekskluziv\">Эксклюзивные стенды</button>
                        </div>

                    </div>
                    
                    <div class=\"portfolio-gallery\">
                        <div class=\"portfolio-grid\">
                            {% set gallery_id = 'portfolio-main' %}
                            {% for item in all_portfolio_items %}
                                {% set gallery_item = item.gallery_item %}
                                {% set page_obj = item.page %}
                                
                                <div class=\"portfolio-item\" data-type=\"{{ item.stand_type ?: 'unknown' }}\">
                                    {% set project_images = [] %}
                                    {% set main_image = null %}
                                    {% set title = gallery_item.title ?: 'Проект' %}
                                    {% set desc = gallery_item.desc ?: '' %}
                                    
                                    {# Ensure all metadata fields have default values #}
                                    {% set construction_area = item.construction_area ?: gallery_item.construction_area ?: '' %}
                                    {% set exhibition_name = item.exhibition_name ?: gallery_item.exhibition_name ?: '' %}
                                    {% set company_name = item.company_name ?: gallery_item.company_name ?: '' %}
                                    {% set project_year = item.project_year ?: gallery_item.project_year ?: '' %}
                                    

                                    
                                    {# Handle multiple images structure #}
                                    {% if item.images %}
                                        {% for img_item in item.images %}
                                            {% set img_obj = null %}
                                            
                                            {# Check for uploaded image #}
                                            {% if img_item.image_upload %}
                                                {% for filepath, filedata in img_item.image_upload %}
                                                    {% if not img_obj and filedata.name %}
                                                        {% set img_obj = page_obj.media[filedata.name] %}
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
                                                    {% set item_image = page_obj.media[filedata.name] %}
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                        
                                        {# If no uploaded image, check for image_name #}
                                        {% if not item_image and gallery_item.image_name %}
                                            {% set item_image = page_obj.media[gallery_item.image_name] %}
                                        {% endif %}
                                        
                                        {# Fallback to old image field #}
                                        {% if not item_image and gallery_item.image %}
                                            {% set item_image = page_obj.media[gallery_item.image] %}
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
                                                    {% if item.stand_type %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Тип стенда:</span>
                                                            <span class=\"value stand-type-{{ item.stand_type }}\">
                                                                {% if item.stand_type == 'typovye' %}Типовой
                                                                {% elseif item.stand_type == 'nestandart' %}Нестандартный
                                                                {% elseif item.stand_type == 'ekskluziv' %}Эксклюзивный
                                                                {% else %}{{ item.stand_type }}
                                                                {% endif %}
                                                            </span>
                                                        </div>
                                                    {% endif %}
                                                    
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
                {% else %}
                <div class=\"portfolio-empty\">
                    <p>Пока нет добавленных проектов в портфолио.</p>
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

.portfolio-filters {
    margin-bottom: 30px;
    text-align: center;
}

.portfolio-filters h3 {
    margin-bottom: 20px;
    font-size: 18px;
    color: #333;
}

.filter-buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}

.filter-btn {
    background: #f8f9fa;
    border: 2px solid #dee2e6;
    color: #495057;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 14px;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    background: #007bff;
    border-color: #007bff;
    color: white;
}

.filter-status {
    margin-top: 15px;
    font-size: 14px;
    color: #666;
    font-style: italic;
    min-height: 20px;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.portfolio-item {
    opacity: 1;
    transition: all 0.3s ease;
}

.portfolio-item.filtered-out {
    opacity: 0;
    transform: scale(0.8);
    pointer-events: none;
    display: none !important;
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
    font-size: 12px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.image-counter i {
    font-size: 10px;
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
    font-size: 18px;
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
    font-size: 14px;
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
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
    font-size: 14px;
    color: #666;
    line-height: 1.4;
    margin-top: auto;
}

.portfolio-empty {
    text-align: center;
    padding: 60px 20px;
    color: #666;
}

@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .filter-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .filter-btn {
        width: 200px;
    }
}
{% endset %}

{% do assets.addInlineCss(portfolio_styles) %}
{% endblock %}

{% block javascripts %}
{{ parent() }}
{% do assets.addJs('https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js') %}
{% do assets.addCss('https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css') %}

{% set portfolio_script %}
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
    
    // Portfolio filtering
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filterValue = this.dataset.filter;
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            portfolioItems.forEach(item => {
                const itemType = item.dataset.type;
                
                if (filterValue === 'all' || itemType === filterValue) {
                    item.classList.remove('filtered-out');
                } else {
                    item.classList.add('filtered-out');
                }
            });
            
            // Filter items without automatic scrolling
            // Users can scroll manually to see the filtered results
        });
    });
    

});
{% endset %}

{% do assets.addInlineJs(portfolio_script) %}
{% endblock %} ", "portfolio.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/portfolio.html.twig");
    }
}
