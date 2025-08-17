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
        $context["dropdown_enabled"] = ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [])))) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [])) : (true));
        // line 6
        $context["mobile_enabled"] = ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [])))) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [])) : (true));
        // line 7
        echo "
";
        // line 9
        echo "<nav class=\"mobile-navigation\" id=\"mobile-nav\">
    <div class=\"mobile-nav-header\">
        <button class=\"mobile-nav-toggle\" id=\"mobile-nav-toggle\" aria-label=\"Toggle Mobile Navigation\">
            <span class=\"hamburger-line\"></span>
            <span class=\"hamburger-line\"></span>
            <span class=\"hamburger-line\"></span>
        </button>
        <div class=\"mobile-nav-brand\">
            <a href=\"";
        // line 17
        (((($context["base_url"] ?? null) == "")) ? (print ("/")) : (print (twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true))));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</a>
        </div>
    </div>
    
    <div class=\"mobile-nav-content\" id=\"mobile-nav-content\">
        <ul class=\"mobile-nav-menu\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 24
            echo "                ";
            $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
            // line 25
            echo "                ";
            $context["has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0);
            // line 26
            echo "                ";
            $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
            // line 27
            echo "                
                ";
            // line 29
            echo "                ";
            if (($this->getAttribute($context["p"], "slug", []) == "portfolio")) {
                // line 30
                echo "                    ";
                $context["visible_children"] = [];
                // line 31
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 32
                    echo "                        ";
                    if (($this->getAttribute($context["child"], "template", []) != "portfolio-item")) {
                        // line 33
                        echo "                            ";
                        $context["visible_children"] = twig_array_merge(($context["visible_children"] ?? null), [0 => $context["child"]]);
                        // line 34
                        echo "                        ";
                    }
                    // line 35
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                    ";
                $context["has_children"] = (twig_length_filter($this->env, ($context["visible_children"] ?? null)) > 0);
                // line 37
                echo "                    ";
                $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
                // line 38
                echo "                ";
            }
            // line 39
            echo "                
                <li class=\"mobile-nav-item ";
            // line 40
            if (($context["has_children"] ?? null)) {
                echo "has-children";
            }
            echo "\" 
                    data-has-children=\"";
            // line 41
            echo ((($context["has_children"] ?? null)) ? ("true") : ("false"));
            echo "\">
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
            echo "\" class=\"mobile-nav-link ";
            if (($context["active_page"] ?? null)) {
                echo "active";
            }
            echo "\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
            echo "
                        ";
            // line 44
            if (($context["has_children"] ?? null)) {
                // line 45
                echo "                            <span class=\"mobile-dropdown-arrow\">▼</span>
                        ";
            }
            // line 47
            echo "                    </a>
                    
                    ";
            // line 49
            if (($context["has_children"] ?? null)) {
                // line 50
                echo "                        <ul class=\"mobile-dropdown-menu\">
                            ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 52
                    echo "                                ";
                    // line 53
                    echo "                                ";
                    if ( !(($this->getAttribute($context["p"], "slug", []) == "portfolio") && ($this->getAttribute($context["child"], "template", []) == "portfolio-item"))) {
                        // line 54
                        echo "                                    ";
                        $context["child_active"] = ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? ("active") : (""));
                        // line 55
                        echo "                                    ";
                        $context["child_has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []), "count", []) > 0);
                        // line 56
                        echo "                                    
                                    <li class=\"mobile-dropdown-item ";
                        // line 57
                        if (($context["child_has_children"] ?? null)) {
                            echo "has-children";
                        }
                        echo "\">
                                        <a href=\"";
                        // line 58
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                        echo "\" class=\"mobile-dropdown-link ";
                        if (($context["child_active"] ?? null)) {
                            echo "active";
                        }
                        echo "\">
                                            ";
                        // line 59
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                        echo "
                                            ";
                        // line 60
                        if (($context["child_has_children"] ?? null)) {
                            // line 61
                            echo "                                                <span class=\"mobile-dropdown-arrow\">▶</span>
                                            ";
                        }
                        // line 63
                        echo "                                        </a>
                                        
                                        ";
                        // line 65
                        if (($context["child_has_children"] ?? null)) {
                            // line 66
                            echo "                                            <ul class=\"mobile-child-dropdown-menu\">
                                                ";
                            // line 67
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["grandchild"]) {
                                // line 68
                                echo "                                                    ";
                                $context["grandchild_active"] = ((($this->getAttribute($context["grandchild"], "active", []) || $this->getAttribute($context["grandchild"], "activeChild", []))) ? ("active") : (""));
                                // line 69
                                echo "                                                    <li class=\"mobile-child-dropdown-item\">
                                                        <a href=\"";
                                // line 70
                                echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "url", []), "html", null, true);
                                echo "\" class=\"mobile-child-dropdown-link ";
                                if (($context["grandchild_active"] ?? null)) {
                                    echo "active";
                                }
                                echo "\">
                                                            ";
                                // line 71
                                echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "menu", []), "html", null, true);
                                echo "
                                                        </a>
                                                    </li>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grandchild'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 75
                            echo "                                            </ul>
                                        ";
                        }
                        // line 77
                        echo "                                    </li>
                                ";
                    }
                    // line 79
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                        </ul>
                    ";
            }
            // line 82
            echo "                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </ul>
    </div>
</nav>

";
        // line 89
        echo "<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileNavToggle = document.getElementById('mobile-nav-toggle');
    const mobileNavContent = document.getElementById('mobile-nav-content');
    const mobileNav = document.getElementById('mobile-nav');
    
    // Toggle mobile navigation
    if (mobileNavToggle && mobileNavContent) {
        mobileNavToggle.addEventListener('click', function() {
            mobileNavContent.classList.toggle('active');
            mobileNavToggle.classList.toggle('active');
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
            mobileNavContent.classList.add('active');
            mobileNavToggle.classList.add('active');
        }
        // Swipe right to close navigation
        else if (diffX < -50 && Math.abs(diffY) < 50) {
            mobileNavContent.classList.remove('active');
            mobileNavToggle.classList.remove('active');
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
            mobileNavContent.classList.remove('active');
            mobileNavToggle.classList.remove('active');
        }
    });
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
        return array (  264 => 89,  258 => 84,  251 => 82,  247 => 80,  241 => 79,  237 => 77,  233 => 75,  223 => 71,  215 => 70,  212 => 69,  209 => 68,  205 => 67,  202 => 66,  200 => 65,  196 => 63,  192 => 61,  190 => 60,  186 => 59,  178 => 58,  172 => 57,  169 => 56,  166 => 55,  163 => 54,  160 => 53,  158 => 52,  154 => 51,  151 => 50,  149 => 49,  145 => 47,  141 => 45,  139 => 44,  135 => 43,  127 => 42,  123 => 41,  117 => 40,  114 => 39,  111 => 38,  108 => 37,  105 => 36,  99 => 35,  96 => 34,  93 => 33,  90 => 32,  85 => 31,  82 => 30,  79 => 29,  76 => 27,  73 => 26,  70 => 25,  67 => 24,  63 => 23,  52 => 17,  42 => 9,  39 => 7,  37 => 6,  35 => 5,  32 => 3,  30 => 2,);
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
            {% endfor %}
        </ul>
    </div>
</nav>

{# Mobile Navigation JavaScript #}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileNavToggle = document.getElementById('mobile-nav-toggle');
    const mobileNavContent = document.getElementById('mobile-nav-content');
    const mobileNav = document.getElementById('mobile-nav');
    
    // Toggle mobile navigation
    if (mobileNavToggle && mobileNavContent) {
        mobileNavToggle.addEventListener('click', function() {
            mobileNavContent.classList.toggle('active');
            mobileNavToggle.classList.toggle('active');
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
            mobileNavContent.classList.add('active');
            mobileNavToggle.classList.add('active');
        }
        // Swipe right to close navigation
        else if (diffX < -50 && Math.abs(diffY) < 50) {
            mobileNavContent.classList.remove('active');
            mobileNavToggle.classList.remove('active');
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
            mobileNavContent.classList.remove('active');
            mobileNavToggle.classList.remove('active');
        }
    });
});
</script>
", "partials/navigation-mobile.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/partials/navigation-mobile.html.twig");
    }
}
