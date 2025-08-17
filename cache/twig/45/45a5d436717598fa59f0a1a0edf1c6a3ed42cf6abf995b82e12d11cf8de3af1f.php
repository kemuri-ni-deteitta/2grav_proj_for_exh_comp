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

/* partials/navigation-mobile.html.twig */
class __TwigTemplate_6199c4fb983522075e3d1befe9462a915fc76a9cd2fae19676144dd8e6cb5dea extends \Twig\Template
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
        // line 2
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation-mobile.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 5
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 6
        echo "
";
        // line 8
        $context["dropdown_enabled"] = ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [])))) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [])) : (true));
        // line 9
        $context["mobile_enabled"] = ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [])))) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [])) : (true));
        // line 10
        echo "
";
        // line 12
        echo "<nav class=\"mobile-navigation\" id=\"mobile-nav\">
    <div class=\"mobile-nav-header\">
        <button class=\"mobile-nav-toggle\" id=\"mobile-nav-toggle\" aria-label=\"Toggle Mobile Navigation\">
            <span class=\"hamburger-line\"></span>
            <span class=\"hamburger-line\"></span>
            <span class=\"hamburger-line\"></span>
        </button>
        <div class=\"mobile-nav-brand\">
            <a href=\"";
        // line 20
        (((($context["base_url"] ?? null) == "")) ? (print ("/")) : (print (twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true))));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</a>
        </div>
    </div>
    
    <div class=\"mobile-nav-content\" id=\"mobile-nav-content\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 26
            echo "            ";
            if (($this->getAttribute($context["p"], "slug", []) == "otpravit-zayavku")) {
                // line 27
                echo "            <div class=\"mobile-cta\">
                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                echo "</a>
            </div>
            ";
            }
            // line 31
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        <ul class=\"mobile-nav-menu\">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 34
            echo "                ";
            $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
            // line 35
            echo "                ";
            $context["has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0);
            // line 36
            echo "                ";
            $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
            // line 37
            echo "                
                ";
            // line 39
            echo "                ";
            if (($this->getAttribute($context["p"], "slug", []) == "portfolio")) {
                // line 40
                echo "                    ";
                $context["visible_children"] = [];
                // line 41
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 42
                    echo "                        ";
                    if (($this->getAttribute($context["child"], "template", []) != "portfolio-item")) {
                        // line 43
                        echo "                            ";
                        $context["visible_children"] = twig_array_merge(($context["visible_children"] ?? null), [0 => $context["child"]]);
                        // line 44
                        echo "                        ";
                    }
                    // line 45
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                    ";
                $context["has_children"] = (twig_length_filter($this->env, ($context["visible_children"] ?? null)) > 0);
                // line 47
                echo "                    ";
                $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
                // line 48
                echo "                ";
            }
            // line 49
            echo "                
                ";
            // line 50
            if (($this->getAttribute($context["p"], "slug", []) != "otpravit-zayavku")) {
                // line 51
                echo "                <li class=\"mobile-nav-item ";
                if (($context["has_children"] ?? null)) {
                    echo "has-children";
                }
                echo "\" 
                    data-has-children=\"";
                // line 52
                echo ((($context["has_children"] ?? null)) ? ("true") : ("false"));
                echo "\">
                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\" class=\"mobile-nav-link ";
                if (($context["active_page"] ?? null)) {
                    echo "active";
                }
                echo "\">
                        ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                echo "
                        ";
                // line 55
                if (($context["has_children"] ?? null)) {
                    // line 56
                    echo "                            <span class=\"mobile-dropdown-arrow\">▼</span>
                        ";
                }
                // line 58
                echo "                    </a>
                    
                    ";
                // line 60
                if (($context["has_children"] ?? null)) {
                    // line 61
                    echo "                        <ul class=\"mobile-dropdown-menu\">
                            ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 63
                        echo "                                ";
                        // line 64
                        echo "                                ";
                        if ( !(($this->getAttribute($context["p"], "slug", []) == "portfolio") && ($this->getAttribute($context["child"], "template", []) == "portfolio-item"))) {
                            // line 65
                            echo "                                    ";
                            $context["child_active"] = ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? ("active") : (""));
                            // line 66
                            echo "                                    ";
                            $context["child_has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []), "count", []) > 0);
                            // line 67
                            echo "                                    
                                    <li class=\"mobile-dropdown-item ";
                            // line 68
                            if (($context["child_has_children"] ?? null)) {
                                echo "has-children";
                            }
                            echo "\">
                                        <a href=\"";
                            // line 69
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                            echo "\" class=\"mobile-dropdown-link ";
                            if (($context["child_active"] ?? null)) {
                                echo "active";
                            }
                            echo "\">
                                            ";
                            // line 70
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                            echo "
                                            ";
                            // line 71
                            if (($context["child_has_children"] ?? null)) {
                                // line 72
                                echo "                                                <span class=\"mobile-dropdown-arrow\">▶</span>
                                            ";
                            }
                            // line 74
                            echo "                                        </a>
                                        
                                        ";
                            // line 76
                            if (($context["child_has_children"] ?? null)) {
                                // line 77
                                echo "                                            <ul class=\"mobile-child-dropdown-menu\">
                                                ";
                                // line 78
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["grandchild"]) {
                                    // line 79
                                    echo "                                                    ";
                                    $context["grandchild_active"] = ((($this->getAttribute($context["grandchild"], "active", []) || $this->getAttribute($context["grandchild"], "activeChild", []))) ? ("active") : (""));
                                    // line 80
                                    echo "                                                    <li class=\"mobile-child-dropdown-item\">
                                                        <a href=\"";
                                    // line 81
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "url", []), "html", null, true);
                                    echo "\" class=\"mobile-child-dropdown-link ";
                                    if (($context["grandchild_active"] ?? null)) {
                                        echo "active";
                                    }
                                    echo "\">
                                                            ";
                                    // line 82
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "menu", []), "html", null, true);
                                    echo "
                                                        </a>
                                                    </li>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grandchild'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 86
                                echo "                                            </ul>
                                        ";
                            }
                            // line 88
                            echo "                                    </li>
                                ";
                        }
                        // line 90
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                        </ul>
                    ";
                }
                // line 93
                echo "                </li>
                ";
            }
            // line 95
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        </ul>
    </div>
</nav>

<div class=\"mobile-nav-overlay\" id=\"mobile-nav-overlay\"></div>

";
        // line 103
        echo "<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileNavToggle = document.getElementById('mobile-nav-toggle');
    const mobileNavContent = document.getElementById('mobile-nav-content');
    const mobileNav = document.getElementById('mobile-nav');
    const overlay = document.getElementById('mobile-nav-overlay');

    function openMobileNav() {
        mobileNavContent.classList.add('active');
        mobileNavToggle.classList.add('active');
        if (overlay) overlay.classList.add('active');
    }

    function closeMobileNav() {
        mobileNavContent.classList.remove('active');
        mobileNavToggle.classList.remove('active');
        if (overlay) overlay.classList.remove('active');
    }
    
    // Toggle mobile navigation
    if (mobileNavToggle && mobileNavContent) {
        mobileNavToggle.addEventListener('click', function() {
            if (mobileNavContent.classList.contains('active')) {
                closeMobileNav();
            } else {
                openMobileNav();
            }
        });
    }
    
    // Handle dropdown toggles
    const dropdownItems = document.querySelectorAll('.mobile-nav-item.has-children');
    dropdownItems.forEach(function(item) {
        const link = item.querySelector('.mobile-nav-link');
        const dropdown = item.querySelector('.mobile-dropdown-menu');
        
        if (link && dropdown) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
                const arrow = link.querySelector('.mobile-dropdown-arrow');
                if (arrow) {
                    arrow.style.transform = dropdown.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
                }
            });
        }
    });
    
    // Handle child dropdown toggles
    const childDropdownItems = document.querySelectorAll('.mobile-dropdown-item.has-children');
    childDropdownItems.forEach(function(item) {
        const link = item.querySelector('.mobile-dropdown-link');
        const dropdown = item.querySelector('.mobile-child-dropdown-menu');
        
        if (link && dropdown) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
                const arrow = link.querySelector('.mobile-dropdown-arrow');
                if (arrow) {
                    arrow.style.transform = dropdown.classList.contains('active') ? 'rotate(90deg)' : 'rotate(0deg)';
                }
            });
        }
    });
    
    // Touch/swipe functionality for mobile navigation
    let startX = 0;
    let startY = 0;
    let currentX = 0;
    let currentY = 0;
    
    // Touch start
    function handleTouchStart(e) {
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
    }
    
    // Touch move
    function handleTouchMove(e) {
        if (!startX || !startY) return;
        
        currentX = e.touches[0].clientX;
        currentY = e.touches[0].clientY;
        
        const diffX = startX - currentX;
        const diffY = startY - currentY;
        
        // Prevent default only if we're swiping horizontally
        if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 10) {
            e.preventDefault();
        }
    }
    
    // Touch end
    function handleTouchEnd(e) {
        if (!startX || !startY) return;
        
        const diffX = startX - currentX;
        const diffY = startY - currentY;
        
        // Swipe left to open navigation
        if (diffX > 50 && Math.abs(diffY) < 50) {
            openMobileNav();
        }
        // Swipe right to close navigation
        else if (diffX < -50 && Math.abs(diffY) < 50) {
            closeMobileNav();
        }
        
        startX = 0;
        startY = 0;
        currentX = 0;
        currentY = 0;
    }
    
    // Add touch event listeners to the document
    document.addEventListener('touchstart', handleTouchStart, { passive: false });
    document.addEventListener('touchmove', handleTouchMove, { passive: false });
    document.addEventListener('touchend', handleTouchEnd, { passive: false });
    
    // Close navigation when clicking outside
    document.addEventListener('click', function(e) {
        if (!mobileNav.contains(e.target) && mobileNavContent.classList.contains('active')) {
            closeMobileNav();
        }
    });

    if (overlay) {
        overlay.addEventListener('click', function() {
            closeMobileNav();
        });
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 103,  295 => 96,  289 => 95,  285 => 93,  281 => 91,  275 => 90,  271 => 88,  267 => 86,  257 => 82,  249 => 81,  246 => 80,  243 => 79,  239 => 78,  236 => 77,  234 => 76,  230 => 74,  226 => 72,  224 => 71,  220 => 70,  212 => 69,  206 => 68,  203 => 67,  200 => 66,  197 => 65,  194 => 64,  192 => 63,  188 => 62,  185 => 61,  183 => 60,  179 => 58,  175 => 56,  173 => 55,  169 => 54,  161 => 53,  157 => 52,  150 => 51,  148 => 50,  145 => 49,  142 => 48,  139 => 47,  136 => 46,  130 => 45,  127 => 44,  124 => 43,  121 => 42,  116 => 41,  113 => 40,  110 => 39,  107 => 37,  104 => 36,  101 => 35,  98 => 34,  94 => 33,  91 => 32,  85 => 31,  77 => 28,  74 => 27,  71 => 26,  67 => 25,  57 => 20,  47 => 12,  44 => 10,  42 => 9,  40 => 8,  37 => 6,  35 => 5,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Mobile Navigation Template - Only used on mobile devices #}
{% import 'macros/macros.html.twig' as macros %}

{# Ensure theme_config is available locally #}
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}

{# Check if dropdowns are enabled in theme config #}
{% set dropdown_enabled = theme_config.dropdowns.enabled ?? true %}
{% set mobile_enabled = theme_config.mobile.enabled ?? true %}

{# Mobile Navigation Container with Touch Support #}
<nav class=\"mobile-navigation\" id=\"mobile-nav\">
    <div class=\"mobile-nav-header\">
        <button class=\"mobile-nav-toggle\" id=\"mobile-nav-toggle\" aria-label=\"Toggle Mobile Navigation\">
            <span class=\"hamburger-line\"></span>
            <span class=\"hamburger-line\"></span>
            <span class=\"hamburger-line\"></span>
        </button>
        <div class=\"mobile-nav-brand\">
            <a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title }}</a>
        </div>
    </div>
    
    <div class=\"mobile-nav-content\" id=\"mobile-nav-content\">
        {% for p in pages.children.visible %}
            {% if p.slug == 'otpravit-zayavku' %}
            <div class=\"mobile-cta\">
                <a href=\"{{ p.url }}\">{{ p.menu }}</a>
            </div>
            {% endif %}
        {% endfor %}
        <ul class=\"mobile-nav-menu\">
            {% for p in pages.children.visible %}
                {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
                {% set has_children = p.children.visible.count > 0 %}
                {% set show_children = has_children and (p.active or p.activeChild) %}
                
                {# For portfolio pages, don't show dropdown if all children are portfolio items #}
                {% if p.slug == 'portfolio' %}
                    {% set visible_children = [] %}
                    {% for child in p.children.visible %}
                        {% if child.template != 'portfolio-item' %}
                            {% set visible_children = visible_children|merge([child]) %}
                        {% endif %}
                    {% endfor %}
                    {% set has_children = visible_children|length > 0 %}
                    {% set show_children = has_children and (p.active or p.activeChild) %}
                {% endif %}
                
                {% if p.slug != 'otpravit-zayavku' %}
                <li class=\"mobile-nav-item {% if has_children %}has-children{% endif %}\" 
                    data-has-children=\"{{ has_children ? 'true' : 'false' }}\">
                    <a href=\"{{ p.url }}\" class=\"mobile-nav-link {% if active_page %}active{% endif %}\">
                        {{ p.menu }}
                        {% if has_children %}
                            <span class=\"mobile-dropdown-arrow\">▼</span>
                        {% endif %}
                    </a>
                    
                    {% if has_children %}
                        <ul class=\"mobile-dropdown-menu\">
                            {% for child in p.children.visible %}
                                {# Skip portfolio items from navigation dropdown #}
                                {% if not (p.slug == 'portfolio' and child.template == 'portfolio-item') %}
                                    {% set child_active = (child.active or child.activeChild) ? 'active' : '' %}
                                    {% set child_has_children = child.children.visible.count > 0 %}
                                    
                                    <li class=\"mobile-dropdown-item {% if child_has_children %}has-children{% endif %}\">
                                        <a href=\"{{ child.url }}\" class=\"mobile-dropdown-link {% if child_active %}active{% endif %}\">
                                            {{ child.menu }}
                                            {% if child_has_children %}
                                                <span class=\"mobile-dropdown-arrow\">▶</span>
                                            {% endif %}
                                        </a>
                                        
                                        {% if child_has_children %}
                                            <ul class=\"mobile-child-dropdown-menu\">
                                                {% for grandchild in child.children.visible %}
                                                    {% set grandchild_active = (grandchild.active or grandchild.activeChild) ? 'active' : '' %}
                                                    <li class=\"mobile-child-dropdown-item\">
                                                        <a href=\"{{ grandchild.url }}\" class=\"mobile-child-dropdown-link {% if grandchild_active %}active{% endif %}\">
                                                            {{ grandchild.menu }}
                                                        </a>
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                        {% endif %}
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                </li>
                {% endif %}
            {% endfor %}
        </ul>
    </div>
</nav>

<div class=\"mobile-nav-overlay\" id=\"mobile-nav-overlay\"></div>

{# Mobile Navigation JavaScript #}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileNavToggle = document.getElementById('mobile-nav-toggle');
    const mobileNavContent = document.getElementById('mobile-nav-content');
    const mobileNav = document.getElementById('mobile-nav');
    const overlay = document.getElementById('mobile-nav-overlay');

    function openMobileNav() {
        mobileNavContent.classList.add('active');
        mobileNavToggle.classList.add('active');
        if (overlay) overlay.classList.add('active');
    }

    function closeMobileNav() {
        mobileNavContent.classList.remove('active');
        mobileNavToggle.classList.remove('active');
        if (overlay) overlay.classList.remove('active');
    }
    
    // Toggle mobile navigation
    if (mobileNavToggle && mobileNavContent) {
        mobileNavToggle.addEventListener('click', function() {
            if (mobileNavContent.classList.contains('active')) {
                closeMobileNav();
            } else {
                openMobileNav();
            }
        });
    }
    
    // Handle dropdown toggles
    const dropdownItems = document.querySelectorAll('.mobile-nav-item.has-children');
    dropdownItems.forEach(function(item) {
        const link = item.querySelector('.mobile-nav-link');
        const dropdown = item.querySelector('.mobile-dropdown-menu');
        
        if (link && dropdown) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
                const arrow = link.querySelector('.mobile-dropdown-arrow');
                if (arrow) {
                    arrow.style.transform = dropdown.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
                }
            });
        }
    });
    
    // Handle child dropdown toggles
    const childDropdownItems = document.querySelectorAll('.mobile-dropdown-item.has-children');
    childDropdownItems.forEach(function(item) {
        const link = item.querySelector('.mobile-dropdown-link');
        const dropdown = item.querySelector('.mobile-child-dropdown-menu');
        
        if (link && dropdown) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
                const arrow = link.querySelector('.mobile-dropdown-arrow');
                if (arrow) {
                    arrow.style.transform = dropdown.classList.contains('active') ? 'rotate(90deg)' : 'rotate(0deg)';
                }
            });
        }
    });
    
    // Touch/swipe functionality for mobile navigation
    let startX = 0;
    let startY = 0;
    let currentX = 0;
    let currentY = 0;
    
    // Touch start
    function handleTouchStart(e) {
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
    }
    
    // Touch move
    function handleTouchMove(e) {
        if (!startX || !startY) return;
        
        currentX = e.touches[0].clientX;
        currentY = e.touches[0].clientY;
        
        const diffX = startX - currentX;
        const diffY = startY - currentY;
        
        // Prevent default only if we're swiping horizontally
        if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 10) {
            e.preventDefault();
        }
    }
    
    // Touch end
    function handleTouchEnd(e) {
        if (!startX || !startY) return;
        
        const diffX = startX - currentX;
        const diffY = startY - currentY;
        
        // Swipe left to open navigation
        if (diffX > 50 && Math.abs(diffY) < 50) {
            openMobileNav();
        }
        // Swipe right to close navigation
        else if (diffX < -50 && Math.abs(diffY) < 50) {
            closeMobileNav();
        }
        
        startX = 0;
        startY = 0;
        currentX = 0;
        currentY = 0;
    }
    
    // Add touch event listeners to the document
    document.addEventListener('touchstart', handleTouchStart, { passive: false });
    document.addEventListener('touchmove', handleTouchMove, { passive: false });
    document.addEventListener('touchend', handleTouchEnd, { passive: false });
    
    // Close navigation when clicking outside
    document.addEventListener('click', function(e) {
        if (!mobileNav.contains(e.target) && mobileNavContent.classList.contains('active')) {
            closeMobileNav();
        }
    });

    if (overlay) {
        overlay.addEventListener('click', function() {
            closeMobileNav();
        });
    }
});
</script>
", "partials/navigation-mobile.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/partials/navigation-mobile.html.twig");
    }
}
