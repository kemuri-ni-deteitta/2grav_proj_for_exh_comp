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

/* partials/base.html.twig */
class __TwigTemplate_58a766b00a7d3fc8f1fdba937db60305f7924ed980cc4bb70df332a36766d82e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->bodyClassFunc($context, [0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 5
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 97
        echo "
";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('assets', $context, $blocks);
        // line 121
        echo "
<script>
// ===== NAVBAR TIMING CONFIGURATION =====
// Adjust these values to change how long dropdowns stay open
const PRIMARY_DROPDOWN_DELAY = 0;      // No delay - immediate hiding for main dropdowns
const CHILD_DROPDOWN_DELAY = 0;        // No delay - immediate hiding for sub-dropdowns
// ======================================

// Enhanced dropdown navigation with click-to-expand and longer hover delays
let dropdownTimeouts = new Map();
let clickedDropdowns = new Set();
let clickedChildDropdowns = new Set();

// Handle dropdown click - only prevent navigation if clicking on arrow or dropdown is already open
function handleDropdownClick(event, element) {
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) return;
    
    const arrow = element.querySelector('.dropdown-arrow');
    const isDropdownOpen = clickedDropdowns.has(element);
    const clickedOnArrow = event.target === arrow || arrow.contains(event.target);
    
    // If dropdown is already open or clicking on arrow, toggle it
    if (isDropdownOpen || clickedOnArrow) {
        event.preventDefault();
        event.stopPropagation();
        
        if (isDropdownOpen) {
            // Close dropdown
            clickedDropdowns.delete(element);
            dropdown.style.display = 'none';
            dropdown.style.opacity = '0';
            dropdown.style.transform = 'translateY(-10px)';
            dropdown.style.pointerEvents = 'none';
            if (arrow) arrow.style.transform = 'rotate(0deg)';
            // Remove visual indicator
            dropdown.style.border = '';
            dropdown.style.boxShadow = '';
        } else {
            // Open dropdown
            clickedDropdowns.add(element);
            element.lastClickTime = Date.now(); // Track when it was clicked
            dropdown.style.display = 'block';
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateY(0)';
            dropdown.style.pointerEvents = 'auto';
            if (arrow) arrow.style.transform = 'rotate(180deg)';
            
            // Add visual indicator that dropdown is click-opened
            // Removed orange border and shadow
        }
    } else {
        // If dropdown is closed and not clicking on arrow, allow navigation
        // Close any other open dropdowns before navigating
        closeAllDropdowns();
    }
}

// Handle child dropdown click - only prevent navigation if clicking on arrow or dropdown is already open
function handleChildDropdownClick(event, element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    const arrow = element.querySelector('.dropdown-arrow');
    const isDropdownOpen = clickedChildDropdowns.has(element);
    const clickedOnArrow = event.target === arrow || arrow.contains(event.target);
    
    // If dropdown is already open or clicking on arrow, toggle it
    if (isDropdownOpen || clickedOnArrow) {
        event.preventDefault();
        event.stopPropagation();
        
        if (isDropdownOpen) {
            // Close dropdown
            clickedChildDropdowns.delete(element);
            dropdown.style.display = 'none';
            dropdown.style.opacity = '0';
            dropdown.style.transform = 'translateX(-10px)';
            dropdown.style.pointerEvents = 'none';
            if (arrow) arrow.style.transform = 'rotate(0deg)';
        } else {
            // Open dropdown
            clickedChildDropdowns.add(element);
            element.lastClickTime = Date.now(); // Track when it was clicked
            dropdown.style.display = 'block';
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateX(0)';
            dropdown.style.pointerEvents = 'auto';
            if (arrow) arrow.style.transform = 'rotate(90deg)';
        }
    } else {
        // If dropdown is closed and not clicking on arrow, allow navigation
        // Close any other open dropdowns before navigating
        closeAllDropdowns();
    }
}

// Close all open dropdowns
function closeAllDropdowns() {
    console.log('closeAllDropdowns called');
    
    // Close all clicked dropdowns
    clickedDropdowns.forEach(function(element) {
        const dropdown = element.querySelector('.dropdown-menu');
        const arrow = element.querySelector('.dropdown-arrow');
        if (dropdown) {
            dropdown.style.setProperty('display', 'none', 'important');
            dropdown.style.setProperty('opacity', '0', 'important');
            dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
            dropdown.style.setProperty('pointer-events', 'none', 'important');
            // Remove visual indicator
            dropdown.style.setProperty('border', '', 'important');
            dropdown.style.setProperty('box-shadow', '', 'important');
        }
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    });
    clickedDropdowns.clear();
    console.log('Cleared clickedDropdowns, size:', clickedDropdowns.size);
    
    // Close all clicked child dropdowns
    clickedChildDropdowns.forEach(function(element) {
        const dropdown = element.querySelector('.child-dropdown-menu');
        const arrow = element.querySelector('.dropdown-arrow');
        if (dropdown) {
            dropdown.style.setProperty('display', 'none', 'important');
            dropdown.style.setProperty('opacity', '0', 'important');
            dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
            dropdown.style.setProperty('pointer-events', 'none', 'important');
        }
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    });
    clickedChildDropdowns.clear();
    console.log('Cleared clickedChildDropdowns, size:', clickedChildDropdowns.size);
    
    // Clear all timeouts
    dropdownTimeouts.forEach(function(timeout) {
        clearTimeout(timeout);
    });
    dropdownTimeouts.clear();
    console.log('Cleared all timeouts, size:', dropdownTimeouts.size);
    
    // Force close all visible navigation dropdowns ONLY (exclude form select elements)
    const allDropdowns = document.querySelectorAll('#custom-header .dropdown-menu, #custom-header .child-dropdown-menu');
    allDropdowns.forEach(function(dropdown) {
        dropdown.style.setProperty('display', 'none', 'important');
        dropdown.style.setProperty('opacity', '0', 'important');
        dropdown.style.setProperty('pointer-events', 'none', 'important');
    });
    console.log('Force closed navigation dropdowns, count:', allDropdowns.length);
}

// Legacy toggle functions for backward compatibility
function toggleDropdown(event, element) {
    handleDropdownClick(event, element);
}

function toggleChildDropdown(event, element) {
    handleChildDropdownClick(event, element);
}

function showDropdown(element) {
    console.log('showDropdown called for:', element.textContent.trim());
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) {
        console.log('No dropdown found for:', element.textContent.trim());
        return;
    }
    console.log('Dropdown found, showing it');
    
    // Always show the dropdown when hovering, even if it's already visible
    // This ensures it works when hovering over the same element multiple times
    
    // Immediately close all other dropdowns when hovering over a new menu item
    const allNavItems = document.querySelectorAll('#custom-header nav ul li');
    allNavItems.forEach(function(otherItem) {
        if (otherItem !== element) {
            const otherDropdown = otherItem.querySelector('.dropdown-menu');
            if (otherDropdown) {
                // Immediately hide other dropdowns
                otherDropdown.style.setProperty('display', 'none', 'important');
                otherDropdown.style.setProperty('opacity', '0', 'important');
                otherDropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
                otherDropdown.style.setProperty('pointer-events', 'none', 'important');
                
                // Reset arrow
                const otherArrow = otherItem.querySelector('.dropdown-arrow');
                if (otherArrow) otherArrow.style.transform = 'rotate(0deg)';
                
                // Clear any timeouts for other items
                if (dropdownTimeouts.has(otherItem)) {
                    clearTimeout(dropdownTimeouts.get(otherItem));
                    dropdownTimeouts.delete(otherItem);
                }
            }
        }
    });
    
    // Don't interfere with clicked dropdowns
    if (clickedDropdowns.has(element)) return;
    
    // Clear any existing timeout for this element
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Show dropdown immediately
    dropdown.style.setProperty('display', 'block', 'important');
    dropdown.style.setProperty('opacity', '1', 'important');
    dropdown.style.setProperty('transform', 'translateY(0)', 'important');
    dropdown.style.setProperty('pointer-events', 'auto', 'important');
    dropdown.style.setProperty('visibility', 'visible', 'important');
    
    // Ensure proper positioning and visibility
    dropdown.style.setProperty('visibility', 'visible', 'important');
    dropdown.style.setProperty('position', 'absolute', 'important');
    dropdown.style.setProperty('z-index', '100001', 'important');
    dropdown.style.setProperty('top', '100%', 'important'); // Position directly below the parent li element
    dropdown.style.setProperty('left', '0', 'important');
    dropdown.style.setProperty('margin-top', '-8px', 'important'); // Remove the gap by overlapping much more aggressively
    
    // Remove any potential clipping
    dropdown.style.setProperty('overflow', 'visible', 'important');
    
    // Remove debugging styles - restore original appearance
    dropdown.style.setProperty('background', '#ffffff', 'important');
    dropdown.style.setProperty('border', '1px solid rgba(0, 0, 0, 0.1)', 'important');
    dropdown.style.setProperty('border-top', 'none', 'important'); // Remove top border to connect with navbar
    dropdown.style.setProperty('border-top-left-radius', '0', 'important');
    dropdown.style.setProperty('border-top-right-radius', '0', 'important');
    
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(180deg)';
    
    // Add hover listeners to the dropdown itself - but don't hide when leaving dropdown
    // This ensures the dropdown stays open when moving between parent and dropdown
    dropdown.addEventListener('mouseenter', function() {
        console.log('Mouse entered dropdown, keeping it open');
        if (dropdownTimeouts.has(element)) {
            clearTimeout(dropdownTimeouts.get(element));
            dropdownTimeouts.delete(element);
        }
    });
    
    // Only hide when leaving the entire dropdown area (parent + dropdown)
    dropdown.addEventListener('mouseleave', function(e) {
        console.log('Mouse left dropdown, checking if we should hide');
        // Check if mouse is moving to the parent item
        const rect = element.getBoundingClientRect();
        const mouseX = e.clientX;
        const mouseY = e.clientY;
        
        // If mouse is moving to the parent item area, don't hide
        if (mouseX >= rect.left && mouseX <= rect.right && mouseY >= rect.top && mouseY <= rect.bottom) {
            console.log('Mouse moving to parent item, keeping dropdown open');
            return;
        }
        
        // Otherwise, start hide timeout
        const hideTimeout = setTimeout(() => {
            hideDropdown(element);
        }, 150);
        dropdownTimeouts.set(element, hideTimeout);
    });
}

function hideDropdown(element) {
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) return;
    
    console.log('hideDropdown called for:', element.textContent.trim());
    
    // Don't hide clicked dropdowns
    if (clickedDropdowns.has(element)) {
        console.log('Not hiding - dropdown is clicked');
        return;
    }
    
    // Clear any existing timeout
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
        console.log('Cleared existing timeout');
    }
    
    // Add delay before hiding to allow time to reach submenu
    const hideTimeoutId = setTimeout(() => {
        console.log('Hiding dropdown after delay for:', element.textContent.trim());
        dropdown.style.setProperty('display', 'none', 'important');
        dropdown.style.setProperty('opacity', '0', 'important');
        dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
        dropdown.style.setProperty('pointer-events', 'none', 'important');
        const arrow = element.querySelector('.dropdown-arrow');
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    }, 300); // 300ms delay to allow time to reach submenu
    
    dropdownTimeouts.set(element, hideTimeoutId);
}

function showChildDropdown(element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    console.log('showChildDropdown called for:', element.textContent.trim());
    
    // Immediately close all other child dropdowns when hovering over a new child item
    const allChildItems = document.querySelectorAll('#custom-header nav ul li li');
    allChildItems.forEach(function(otherChildItem) {
        if (otherChildItem !== element) {
            const otherChildDropdown = otherChildItem.querySelector('.child-dropdown-menu');
            if (otherChildDropdown) {
                // Immediately hide other child dropdowns
                otherChildDropdown.style.setProperty('display', 'none', 'important');
                otherChildDropdown.style.setProperty('opacity', '0', 'important');
                otherChildDropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
                otherChildDropdown.style.setProperty('pointer-events', 'none', 'important');
                
                // Reset arrow
                const otherArrow = otherChildItem.querySelector('.dropdown-arrow');
                if (otherArrow) otherArrow.style.transform = 'rotate(0deg)';
                
                // Clear any timeouts for other child items
                if (dropdownTimeouts.has(otherChildItem)) {
                    clearTimeout(dropdownTimeouts.get(otherChildItem));
                    dropdownTimeouts.delete(otherChildItem);
                }
            }
        }
    });
    
    // Don't interfere with clicked dropdowns
    if (clickedChildDropdowns.has(element)) return;
    
    // Clear any existing timeout for this element
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Show dropdown immediately with !important to override inline styles
    dropdown.style.setProperty('display', 'block', 'important');
    dropdown.style.setProperty('opacity', '1', 'important');
    dropdown.style.setProperty('transform', 'translateX(0)', 'important');
    dropdown.style.setProperty('pointer-events', 'auto', 'important');
    dropdown.style.setProperty('visibility', 'visible', 'important');
    dropdown.style.setProperty('position', 'absolute', 'important');
    dropdown.style.setProperty('z-index', '100002', 'important');
    dropdown.style.setProperty('left', '100%', 'important'); // Position directly to the right
    dropdown.style.setProperty('top', '0', 'important'); // Align with parent item
    dropdown.style.setProperty('margin-left', '-1px', 'important'); // Remove horizontal gap
    
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(90deg)';
    
    // Remove debugging styles - restore original appearance
    dropdown.style.setProperty('background', '#ffffff', 'important');
    dropdown.style.setProperty('border', '1px solid rgba(0, 0, 0, 0.1)', 'important');
    dropdown.style.setProperty('border-left', 'none', 'important'); // Remove left border to connect
    dropdown.style.setProperty('border-top-left-radius', '0', 'important');
    dropdown.style.setProperty('border-bottom-left-radius', '0', 'important');
    
    // Add hover listeners to the child dropdown itself
    dropdown.addEventListener('mouseenter', function() {
        console.log('Mouse entered child dropdown, keeping it open');
        if (dropdownTimeouts.has(element)) {
            clearTimeout(dropdownTimeouts.get(element));
            dropdownTimeouts.delete(element);
        }
    });
    
    // Only hide when leaving the entire child dropdown area
    dropdown.addEventListener('mouseleave', function(e) {
        console.log('Mouse left child dropdown, checking if we should hide');
        // Check if mouse is moving to the parent child item
        const rect = element.getBoundingClientRect();
        const mouseX = e.clientX;
        const mouseY = e.clientY;
        
        // If mouse is moving to the parent child item area, don't hide
        if (mouseX >= rect.left && mouseX <= rect.right && mouseY >= rect.top && mouseY <= rect.bottom) {
            console.log('Mouse moving to parent child item, keeping child dropdown open');
            return;
        }
        
        // Otherwise, start hide timeout
        const hideTimeout = setTimeout(() => {
            hideChildDropdown(element);
        }, 150);
        dropdownTimeouts.set(element, hideTimeout);
    });
}

function hideChildDropdown(element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    console.log('hideChildDropdown called for:', element.textContent.trim());
    
    // Don't hide clicked dropdowns
    if (clickedChildDropdowns.has(element)) {
        console.log('Not hiding child dropdown - it is clicked');
        return;
    }
    
    // Clear any existing timeout
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Add delay before hiding to allow time to reach child dropdown items
    const hideTimeoutId = setTimeout(() => {
        console.log('Hiding child dropdown after delay for:', element.textContent.trim());
        dropdown.style.setProperty('display', 'none', 'important');
        dropdown.style.setProperty('opacity', '0', 'important');
        dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
        dropdown.style.setProperty('pointer-events', 'none', 'important');
        const arrow = element.querySelector('.dropdown-arrow');
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    }, 200); // Reduced delay for child dropdowns
    
    dropdownTimeouts.set(element, hideTimeoutId);
}

// Enhanced hover behavior for better UX
document.addEventListener('DOMContentLoaded', function() {
    // Ensure all dropdowns are closed on page load
    closeAllDropdowns();
    
    // Target navigation elements in the custom header
    const navItems = document.querySelectorAll('#custom-header nav ul li');
    
    navItems.forEach(function(item) {
        const dropdown = item.querySelector('.dropdown-menu');
        if (!dropdown) return;
        
            // Ensure the entire li element is hoverable for dropdown
    item.style.position = 'relative';
    
    // Simple and reliable hover detection directly on the navigation item
    let hoverTimeout;
    
    item.addEventListener('mouseenter', function() {
        console.log('Mouse entered nav item:', item.textContent.trim());
        clearTimeout(hoverTimeout);
        showDropdown(item);
    });
    
    item.addEventListener('mouseleave', function(e) {
        console.log('Mouse left nav item:', item.textContent.trim());
        
        // Check if mouse is moving to the dropdown area
        const dropdown = item.querySelector('.dropdown-menu');
        if (dropdown) {
            const dropdownRect = dropdown.getBoundingClientRect();
            const mouseX = e.clientX;
            const mouseY = e.clientY;
            
            // If mouse is moving to the dropdown area, don't hide
            if (mouseX >= dropdownRect.left && mouseX <= dropdownRect.right && 
                mouseY >= dropdownRect.top && mouseY <= dropdownRect.bottom) {
                console.log('Mouse moving to dropdown area, keeping dropdown open');
                return;
            }
        }
        
        // Otherwise, start hide timeout
        hoverTimeout = setTimeout(() => {
            hideDropdown(item);
        }, 100);
    });
        
        // Handle second-level dropdowns
        const childItems = dropdown.querySelectorAll('li');
        childItems.forEach(function(childItem) {
            const childDropdown = childItem.querySelector('.child-dropdown-menu');
            if (childDropdown) {
                // Create hover area for child items
                const childHoverArea = document.createElement('div');
                childHoverArea.style.cssText = `
                    position: absolute !important;
                    top: -5px !important;
                    left: -5px !important;
                    right: -5px !important;
                    bottom: -5px !important;
                    z-index: 100001 !important;
                    pointer-events: none !important;
                `;
                childItem.style.position = 'relative';
                childItem.appendChild(childHoverArea);
            }
        });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        const nav = document.querySelector('#custom-header nav');
        const isFormSelect = event.target.closest('select');
        
        // Don't close dropdowns if clicking on form select elements
        if (isFormSelect) {
            return;
        }
        
        if (nav && !nav.contains(event.target)) {
            closeAllDropdowns();
        }
    });
    
    // Close dropdowns when mouse leaves the entire navigation area
    const nav = document.querySelector('#custom-header nav');
    if (nav) {
        nav.addEventListener('mouseleave', function(event) {
            // Add a small delay to allow moving to dropdown items
            setTimeout(function() {
                // Only close if mouse is still outside the nav area
                const rect = nav.getBoundingClientRect();
                const mouseX = event.clientX;
                const mouseY = event.clientY;
                
                if (mouseX < rect.left || mouseX > rect.right || mouseY < rect.top || mouseY > rect.bottom) {
                    closeAllDropdowns();
                }
            }, 100);
        });
    }
    
    // Close dropdowns when scrolling (but not when interacting with form select)
    document.addEventListener('scroll', function() {
        // Don't close dropdowns if user is interacting with a form select
        const activeElement = document.activeElement;
        if (activeElement && activeElement.tagName === 'SELECT') {
            return;
        }
        closeAllDropdowns();
    });
    
    // Close dropdowns when window loses focus
    window.addEventListener('blur', function() {
        closeAllDropdowns();
    });
    
    // Auto-close clicked dropdowns after a timeout (for better UX)
    setInterval(function() {
        const now = Date.now();
        clickedDropdowns.forEach(function(element) {
            // Auto-close dropdowns that have been open for more than 10 seconds
            if (now - element.lastClickTime > 10000) {
                const dropdown = element.querySelector('.dropdown-menu');
                const arrow = element.querySelector('.dropdown-arrow');
                if (dropdown) {
                    dropdown.style.setProperty('display', 'none', 'important');
                    dropdown.style.setProperty('opacity', '0', 'important');
                    dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
                    dropdown.style.setProperty('pointer-events', 'none', 'important');
                }
                if (arrow) arrow.style.transform = 'rotate(0deg)';
                clickedDropdowns.delete(element);
            }
        });
        
        clickedChildDropdowns.forEach(function(element) {
            // Auto-close child dropdowns that have been open for more than 8 seconds
            if (now - element.lastClickTime > 8000) {
                const dropdown = element.querySelector('.child-dropdown-menu');
                const arrow = element.querySelector('.dropdown-arrow');
                if (dropdown) {
                    dropdown.style.setProperty('display', 'none', 'important');
                    dropdown.style.setProperty('opacity', '0', 'important');
                    dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
                    dropdown.style.setProperty('pointer-events', 'none', 'important');
                }
                if (arrow) arrow.style.transform = 'rotate(0deg)';
                clickedChildDropdowns.delete(element);
            }
        });
    }, 1000);
});

// Keyboard navigation support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeAllDropdowns();
    }
});

// Manual close function for testing - call this from console: forceCloseDropdowns()
window.forceCloseDropdowns = function() {
    console.log('Manual force close called');
    closeAllDropdowns();
};

// CUSTOM DISPLAY SOLUTION - Create a visible text display
document.addEventListener('DOMContentLoaded', function() {
    const serviceSelect = document.querySelector('select[name*=\"service\"]');
    if (serviceSelect) {
        console.log('Service select found, creating custom display solution');
        
        // Create a wrapper div
        const wrapper = document.createElement('div');
        wrapper.style.position = 'relative';
        wrapper.style.width = '100%';
        
        // Create a display div that shows the selected text
        const displayDiv = document.createElement('div');
        displayDiv.style.cssText = `
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 0.9rem 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            background-color: #ffffff;
            color: #2c2c2c;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            pointer-events: none;
            z-index: 1;
            display: flex;
            align-items: center;
            box-sizing: border-box;
            transition: all 0.2s ease;
        `;
        
        // Insert the wrapper before the select
        serviceSelect.parentNode.insertBefore(wrapper, serviceSelect);
        wrapper.appendChild(serviceSelect);
        wrapper.appendChild(displayDiv);
        
        // Function to update display
        function updateDisplay() {
            if (serviceSelect.value && serviceSelect.value !== '') {
                const selectedText = serviceSelect.options[serviceSelect.selectedIndex].text;
                displayDiv.textContent = selectedText;
                displayDiv.style.display = 'flex';
                displayDiv.style.color = '#2c2c2c';
                displayDiv.style.fontWeight = '400';
                console.log('Updated display with:', selectedText);
            } else {
                displayDiv.textContent = 'Выберите услугу';
                displayDiv.style.color = '#999999';
                displayDiv.style.fontWeight = '400';
            }
        }
        
        // Listen for changes
        serviceSelect.addEventListener('change', function() {
            console.log('Service selection changed to:', this.value);
            console.log('Selected option text:', this.options[this.selectedIndex].text);
            updateDisplay();
        });
        
        // Initial update
        updateDisplay();
        
        // Hide display when select is focused (dropdown is open)
        serviceSelect.addEventListener('focus', function() {
            displayDiv.style.display = 'none';
        });
        
        // Show display when select loses focus
        serviceSelect.addEventListener('blur', function() {
            setTimeout(updateDisplay, 100);
        });
    }
});
</script>
</head>
<body id=\"top\" class=\"";
        // line 792
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\" style=\"margin: 0 !important; padding: 0 !important; padding-top: 80px !important;\">
    
    <!-- CUSTOM NAVBAR - COMPLETELY BYPASSING THEME SYSTEM -->
    <div id=\"custom-header\" style=\"position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; width: 100% !important; height: 80px !important; background: #ffffff !important; border-bottom: 1px solid #e0e0e0 !important; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) !important; z-index: 99999 !important; margin: 0 !important; padding: 0 !important;\">
                  <div style=\"height: 80px !important; padding: 0 1.5rem 0 0 !important; margin: 0 auto !important; max-width: 1200px !important; display: flex !important; align-items: center !important; justify-content: space-between !important;\">
     <!-- Logo Section - ABSOLUTE LEFT POSITIONING -->
     <div style=\"position: absolute !important; left: 15px !important; top: 0 !important; display: flex !important; align-items: center !important; height: 80px !important; z-index: 100000 !important;\">
         <a href=\"";
        // line 799
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" style=\"display: flex !important; align-items: center !important; text-decoration: none !important;\">
             <img src=\"";
        // line 800
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo/logo.gif"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "\" style=\"height: 50px !important; width: auto !important; margin-right: 25px !important;\" />
         </a>
     </div>
    
    <!-- Navigation Menu with Dropdown Support -->
    <div style=\"display: flex !important; align-items: center !important; height: 80px !important; justify-content: flex-start !important; width: 100% !important;\">
        <nav style=\"display: flex !important; align-items: center !important; height: 80px !important;\">
            <ul style=\"display: flex !important; align-items: center !important; margin: 0 !important; padding: 0 !important; list-style: none !important; height: 80px !important; flex-wrap: nowrap !important; white-space: nowrap !important;\">
                ";
        // line 808
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 809
            echo "                    ";
            if (($this->getAttribute($context["p"], "slug", []) != "otpravit-zayavku")) {
                // line 810
                echo "                        ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 811
                echo "                        ";
                $context["has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0);
                // line 812
                echo "                        ";
                $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
                // line 813
                echo "                        ";
                // line 814
                echo "                        ";
                if (($this->getAttribute($context["p"], "slug", []) == "portfolio")) {
                    // line 815
                    echo "                            ";
                    $context["visible_children"] = [];
                    // line 816
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 817
                        echo "                                ";
                        if (($this->getAttribute($context["child"], "template", []) != "portfolio-item")) {
                            // line 818
                            echo "                                    ";
                            $context["visible_children"] = twig_array_merge(($context["visible_children"] ?? null), [0 => $context["child"]]);
                            // line 819
                            echo "                                ";
                        }
                        // line 820
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 821
                    echo "                            ";
                    $context["has_children"] = (twig_length_filter($this->env, ($context["visible_children"] ?? null)) > 0);
                    // line 822
                    echo "                            ";
                    $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
                    // line 823
                    echo "                        ";
                }
                // line 824
                echo "                        <li style=\"margin: 0 1.5rem !important; position: relative !important; display: flex !important; align-items: center !important; height: 80px !important; white-space: nowrap !important; flex-shrink: 0 !important; padding: 0.5rem 0 !important; cursor: pointer !important;\" 
                            data-has-children=\"";
                // line 825
                echo ((($context["has_children"] ?? null)) ? ("true") : ("false"));
                echo "\">
                            <a href=\"";
                // line 826
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.5rem 1rem !important; text-decoration: none !important; color: #2c2c2c !important; font-weight: 500 !important; font-size: 1.1rem !important; transition: all 0.3s ease !important; border-radius: 4px !important; height: 40px !important; white-space: nowrap !important; min-width: fit-content !important; border: 1px solid transparent !important; ";
                if (($context["active_page"] ?? null)) {
                    echo "color: #ffffff !important; background: #ff6600 !important; border: 1px solid #ff6600 !important; box-shadow: 0 2px 8px rgba(255, 102, 0, 0.3) !important;";
                }
                echo "\" 
                               onmouseover=\"this.style.color='#ffffff'; this.style.background='#ff6600'; this.style.border='1px solid #ff6600'; this.style.boxShadow='0 6px 20px rgba(255, 102, 0, 0.4)'; this.style.transform='translateY(-2px)'\" 
                               onmouseout=\"this.style.color='#2c2c2c'; this.style.background='transparent'; this.style.border='1px solid transparent'; this.style.boxShadow='none'; this.style.transform='translateY(0)'; ";
                // line 828
                if (($context["active_page"] ?? null)) {
                    echo "this.style.color='#ffffff'; this.style.background='#ff6600'; this.style.border='1px solid #ff6600'; this.style.boxShadow='0 2px 8px rgba(255, 102, 0, 0.3)';";
                }
                echo "\"
                               ";
                // line 829
                if (($context["has_children"] ?? null)) {
                    echo "onclick=\"handleDropdownClick(event, this.parentElement)\"";
                }
                echo ">
                                ";
                // line 830
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                if (($context["has_children"] ?? null)) {
                    echo " <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.7rem; transition: transform 0.2s ease; ";
                    if (($context["active_page"] ?? null)) {
                        echo "opacity: 1 !important;";
                    }
                    echo "; pointer-events: none !important; user-select: none !important;\">▼</span>";
                }
                // line 831
                echo "                            </a>
                            ";
                // line 832
                if (($context["has_children"] ?? null)) {
                    // line 833
                    echo "                            <ul class=\"dropdown-menu\" style=\"position: absolute !important; top: 100% !important; left: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; ";
                    if (($context["show_children"] ?? null)) {
                        echo "display: block !important;";
                    } else {
                        echo "display: none !important;";
                    }
                    echo " z-index: 100001 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-top: -8px !important; flex-direction: column !important; opacity: 0; transform: translateY(-10px); transition: opacity 0.2s ease, transform 0.2s ease; border-top-left-radius: 0 !important; border-top-right-radius: 0 !important;\">
                                ";
                    // line 834
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 835
                        echo "                                    ";
                        // line 836
                        echo "                                    ";
                        if ( !(($this->getAttribute($context["p"], "slug", []) == "portfolio") && ($this->getAttribute($context["child"], "template", []) == "portfolio-item"))) {
                            // line 837
                            echo "                                    ";
                            $context["child_active"] = ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? ("active") : (""));
                            // line 838
                            echo "                                    ";
                            $context["child_has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []), "count", []) > 0);
                            // line 839
                            echo "                                    <li style=\"margin: 0 !important; display: block !important; height: auto !important; position: relative !important;\" 
                                        onmouseenter=\"showChildDropdown(this)\" 
                                        onmouseleave=\"hideChildDropdown(this)\"
                                        data-has-children=\"";
                            // line 842
                            echo ((($context["child_has_children"] ?? null)) ? ("true") : ("false"));
                            echo "\">
                                        <a href=\"";
                            // line 843
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                            echo "\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 1rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; ";
                            if (($context["child_active"] ?? null)) {
                                echo "color: #ff6600 !important;";
                            }
                            echo "\"
                                           onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                           onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; ";
                            // line 845
                            if (($context["child_active"] ?? null)) {
                                echo "this.style.color='#ff6600';";
                            }
                            echo "\"
                                           ";
                            // line 846
                            if (($context["child_has_children"] ?? null)) {
                                echo "onclick=\"handleChildDropdownClick(event, this.parentElement)\"";
                            }
                            echo ">
                                            ";
                            // line 847
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                            if (($context["child_has_children"] ?? null)) {
                                echo " <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.6rem; transition: transform 0.2s ease; ";
                                if (($context["child_active"] ?? null)) {
                                    echo "opacity: 1 !important;";
                                }
                                echo "; pointer-events: none !important; user-select: none !important;\">▶</span>";
                            }
                            // line 848
                            echo "                                        </a>
                                        ";
                            // line 849
                            if (($context["child_has_children"] ?? null)) {
                                // line 850
                                echo "                                        <ul class=\"child-dropdown-menu\" style=\"position: absolute !important; left: 100% !important; top: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; display: none !important; z-index: 100002 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-left: 4px !important; flex-direction: column !important; opacity: 0; transform: translateX(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                                            ";
                                // line 851
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["grandchild"]) {
                                    // line 852
                                    echo "                                                ";
                                    $context["grandchild_active"] = ((($this->getAttribute($context["grandchild"], "active", []) || $this->getAttribute($context["grandchild"], "activeChild", []))) ? ("active") : (""));
                                    // line 853
                                    echo "                                                <li style=\"margin: 0 !important; display: block !important; height: auto !important;\">
                                                                                            <a href=\"";
                                    // line 854
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "url", []), "html", null, true);
                                    echo "\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.9rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; ";
                                    if (($context["grandchild_active"] ?? null)) {
                                        echo "color: #ff6600 !important;";
                                    }
                                    echo "\"
                                               onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                               onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; ";
                                    // line 856
                                    if (($context["grandchild_active"] ?? null)) {
                                        echo "this.style.color='#ff6600';";
                                    }
                                    echo "\">
                                                        ";
                                    // line 857
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "menu", []), "html", null, true);
                                    echo "
                                                    </a>
                                                </li>
                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grandchild'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 861
                                echo "                                        </ul>
                                        ";
                            }
                            // line 863
                            echo "                                    </li>
                                    ";
                        }
                        // line 865
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 866
                    echo "                            </ul>
                            ";
                }
                // line 868
                echo "                        </li>
                    ";
            }
            // line 870
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 871
        echo "            </ul>
        </nav>
        
        <!-- Right-aligned \"Оставить заявку\" button -->
        <div style=\"display: flex !important; align-items: center !important; height: 80px !important; margin-left: 1.5rem !important; margin-right: 15px !important;\">
            ";
        // line 876
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 877
            echo "                ";
            if (($this->getAttribute($context["p"], "slug", []) == "otpravit-zayavku")) {
                // line 878
                echo "                    ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 879
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.5rem 1rem !important; text-decoration: none !important; color: #ffffff !important; font-weight: 600 !important; font-size: 1.1rem !important; transition: all 0.3s ease !important; border-radius: 4px !important; height: 40px !important; white-space: nowrap !important; min-width: fit-content !important; background: #034880 !important; border: 2px solid #034880 !important; box-shadow: 0 4px 12px rgba(3, 72, 128, 0.3) !important;\" 
                       onmouseover=\"this.style.background='#023a6b'; this.style.border='2px solid #023a6b'; this.style.boxShadow='0 6px 20px rgba(3, 72, 128, 0.4)'; this.style.transform='translateY(-2px)'\" 
                       onmouseout=\"this.style.background='#034880'; this.style.border='2px solid #034880'; this.style.boxShadow='0 4px 12px rgba(3, 72, 128, 0.3)'; this.style.transform='translateY(0)'\">
                        ";
                // line 882
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 885
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 886
        echo "        </div>
    </div>
    </div>
    </div>
    
    <div id=\"page-wrapper\" style=\"margin: 0 !important; padding: 0 !important;\">
    ";
        // line 892
        $this->displayBlock('header', $context, $blocks);
        // line 897
        echo "
    ";
        // line 898
        $this->displayBlock('hero', $context, $blocks);
        // line 899
        echo "
        <section id=\"start\" style=\"margin-top: -20px !important;\">
        ";
        // line 901
        $this->displayBlock('body', $context, $blocks);
        // line 911
        echo "        </section>

    </div>

    ";
        // line 915
        $this->displayBlock('footer', $context, $blocks);
        // line 918
        echo "
    ";
        // line 919
        $this->displayBlock('mobile', $context, $blocks);
        // line 931
        echo "
";
        // line 932
        $this->displayBlock('bottom', $context, $blocks);
        // line 935
        echo "
</body>
</html>";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 9
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 10
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 15
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 15)->display($context);
        // line 16
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "    <style>
        /* Ensure consistent top spacing across all pages */
        .section.main-content {
            padding-top: 0 !important;
        }
        
        /* Override any template-specific top margins/padding */
        .content-wrapper, .main-content, .page-content {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        /* Ensure hero sections don't add extra spacing */
        .modular-hero + .section,
        .modular-hero + .modular-* {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        /* Fix specific template spacing issues */
        .content-wrapper {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        .content-wrapper .container {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        /* Portfolio specific fixes */
        .portfolio-section, .section.portfolio-item {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        /* Ensure all page content starts at consistent height */
        #body-wrapper .content-wrapper,
        #body-wrapper .page-content,
        #body-wrapper .section {
            margin-top: 0 !important;
        }
        
        /* Center the content properly */
        .container {
            text-align: center !important;
        }
        
        /* Ensure content blocks are centered */
        .container > * {
            text-align: left !important;
            max-width: 1200px !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }
        
        /* Keep specific pages at narrower width */
        body.page-kontakty .container,
        body.page-otpravit-zayavku .container,
        .page-kontakty .container,
        .page-otpravit-zayavku .container,
        .page-06-otpravit-zayavku .container,
        .page-08-kontakty .container {
            max-width: 75% !important;
            width: 75% !important;
        }
    </style>
    ";
        // line 89
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 90
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 91
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 92
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 93
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 94
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/oxygen-nav.css"], "method");
        // line 95
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        // line 99
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 100
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 101
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 102
        echo "    ";
        // line 103
        echo "    
    ";
        // line 105
        echo "    ";
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 106
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropotron", []), "enabled", [])) {
            // line 107
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/dropotron@1.4.3/jquery.dropotron.min.js", 1 => ["group" => "bottom"]], "method");
            // line 108
            echo "    ";
        }
        // line 109
        echo "    
    ";
        // line 110
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "skel", []), "enabled", [])) {
            // line 111
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/skel@3.0.1/src/skel.min.js", 1 => ["group" => "bottom"]], "method");
            // line 112
            echo "    ";
        }
        // line 113
        echo "    

";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 117
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 118
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 119
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 792
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 892
    public function block_header($context, array $blocks = [])
    {
        // line 893
        echo "        <!-- HIDE ORIGINAL HEADER -->
        <section id=\"header\" class=\"section\" style=\"display: none !important;\">
        </section>
    ";
    }

    // line 898
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 901
    public function block_body($context, array $blocks = [])
    {
        // line 902
        echo "            <section id=\"body-wrapper\" class=\"section\" style=\"padding-top: 40px !important;\">
                <section class=\"container ";
        // line 903
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\" style=\"margin-top: 0 !important; padding-top: 0 !important; max-width: 95% !important; width: 95% !important; margin-left: auto !important; margin-right: auto !important; text-align: center !important;\">
                    ";
        // line 904
        $this->displayBlock('messages', $context, $blocks);
        // line 907
        echo "                    ";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
                </section>
            </section>
        ";
    }

    // line 904
    public function block_messages($context, array $blocks = [])
    {
        // line 905
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 905);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 906
        echo "                    ";
    }

    // line 915
    public function block_footer($context, array $blocks = [])
    {
        // line 916
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 916)->display($context);
        // line 917
        echo "    ";
    }

    // line 919
    public function block_mobile($context, array $blocks = [])
    {
        // line 920
        echo "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 923
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 923)->display(twig_array_merge($context, ["mobile" => true]));
        // line 924
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 926
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 926)->display(twig_array_merge($context, ["tree" => true]));
        // line 927
        echo "            </nav>
        </div>
    </div>
    ";
    }

    // line 932
    public function block_bottom($context, array $blocks = [])
    {
        // line 933
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1396 => 933,  1393 => 932,  1386 => 927,  1384 => 926,  1380 => 924,  1378 => 923,  1373 => 920,  1370 => 919,  1366 => 917,  1363 => 916,  1360 => 915,  1356 => 906,  1345 => 905,  1342 => 904,  1333 => 907,  1331 => 904,  1327 => 903,  1324 => 902,  1321 => 901,  1316 => 898,  1309 => 893,  1306 => 892,  1300 => 792,  1293 => 119,  1288 => 118,  1285 => 117,  1274 => 113,  1271 => 112,  1268 => 111,  1266 => 110,  1263 => 109,  1260 => 108,  1257 => 107,  1254 => 106,  1251 => 105,  1248 => 103,  1246 => 102,  1243 => 101,  1240 => 100,  1237 => 99,  1234 => 98,  1229 => 95,  1226 => 94,  1223 => 93,  1220 => 92,  1215 => 91,  1210 => 90,  1208 => 89,  1139 => 22,  1136 => 21,  1129 => 18,  1125 => 17,  1122 => 16,  1120 => 15,  1109 => 11,  1106 => 10,  1103 => 9,  1091 => 935,  1089 => 932,  1086 => 931,  1084 => 919,  1081 => 918,  1079 => 915,  1073 => 911,  1071 => 901,  1067 => 899,  1065 => 898,  1062 => 897,  1060 => 892,  1052 => 886,  1046 => 885,  1040 => 882,  1033 => 879,  1030 => 878,  1027 => 877,  1023 => 876,  1016 => 871,  1010 => 870,  1006 => 868,  1002 => 866,  996 => 865,  992 => 863,  988 => 861,  978 => 857,  972 => 856,  963 => 854,  960 => 853,  957 => 852,  953 => 851,  950 => 850,  948 => 849,  945 => 848,  936 => 847,  930 => 846,  924 => 845,  915 => 843,  911 => 842,  906 => 839,  903 => 838,  900 => 837,  897 => 836,  895 => 835,  891 => 834,  882 => 833,  880 => 832,  877 => 831,  868 => 830,  862 => 829,  856 => 828,  847 => 826,  843 => 825,  840 => 824,  837 => 823,  834 => 822,  831 => 821,  825 => 820,  822 => 819,  819 => 818,  816 => 817,  811 => 816,  808 => 815,  805 => 814,  803 => 813,  800 => 812,  797 => 811,  794 => 810,  791 => 809,  787 => 808,  774 => 800,  770 => 799,  760 => 792,  87 => 121,  85 => 117,  82 => 116,  80 => 98,  77 => 97,  75 => 21,  72 => 20,  70 => 9,  65 => 7,  61 => 5,  59 => 3,  57 => 2,  55 => 1,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% use 'blocks/base.html.twig' %}

<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
{% endblock head %}

{% block stylesheets %}
    <style>
        /* Ensure consistent top spacing across all pages */
        .section.main-content {
            padding-top: 0 !important;
        }
        
        /* Override any template-specific top margins/padding */
        .content-wrapper, .main-content, .page-content {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        /* Ensure hero sections don't add extra spacing */
        .modular-hero + .section,
        .modular-hero + .modular-* {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        /* Fix specific template spacing issues */
        .content-wrapper {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        .content-wrapper .container {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        /* Portfolio specific fixes */
        .portfolio-section, .section.portfolio-item {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        /* Ensure all page content starts at consistent height */
        #body-wrapper .content-wrapper,
        #body-wrapper .page-content,
        #body-wrapper .section {
            margin-top: 0 !important;
        }
        
        /* Center the content properly */
        .container {
            text-align: center !important;
        }
        
        /* Ensure content blocks are centered */
        .container > * {
            text-align: left !important;
            max-width: 1200px !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }
        
        /* Keep specific pages at narrower width */
        body.page-kontakty .container,
        body.page-otpravit-zayavku .container,
        .page-kontakty .container,
        .page-otpravit-zayavku .container,
        .page-06-otpravit-zayavku .container,
        .page-08-kontakty .container {
            max-width: 75% !important;
            width: 75% !important;
        }
    </style>
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress) %}{% endif %}
    {% if theme_var('spectre.icons') %}{% do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% do assets.addCss('theme://css/oxygen-nav.css') %}
    {% do assets.addCss('theme://css/line-awesome.min.css') %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {# Removed init.js since we're using inline JavaScript for dropdowns #}
    
    {# Load external libraries based on theme config #}
    {% set theme_config = attribute(config.themes, config.system.pages.theme) %}
    {% if theme_config.dropotron.enabled %}
        {% do assets.addJs('https://cdn.jsdelivr.net/npm/dropotron@1.4.3/jquery.dropotron.min.js', {group: 'bottom'}) %}
    {% endif %}
    
    {% if theme_config.skel.enabled %}
        {% do assets.addJs('https://cdn.jsdelivr.net/npm/skel@3.0.1/src/skel.min.js', {group: 'bottom'}) %}
    {% endif %}
    

{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}

<script>
// ===== NAVBAR TIMING CONFIGURATION =====
// Adjust these values to change how long dropdowns stay open
const PRIMARY_DROPDOWN_DELAY = 0;      // No delay - immediate hiding for main dropdowns
const CHILD_DROPDOWN_DELAY = 0;        // No delay - immediate hiding for sub-dropdowns
// ======================================

// Enhanced dropdown navigation with click-to-expand and longer hover delays
let dropdownTimeouts = new Map();
let clickedDropdowns = new Set();
let clickedChildDropdowns = new Set();

// Handle dropdown click - only prevent navigation if clicking on arrow or dropdown is already open
function handleDropdownClick(event, element) {
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) return;
    
    const arrow = element.querySelector('.dropdown-arrow');
    const isDropdownOpen = clickedDropdowns.has(element);
    const clickedOnArrow = event.target === arrow || arrow.contains(event.target);
    
    // If dropdown is already open or clicking on arrow, toggle it
    if (isDropdownOpen || clickedOnArrow) {
        event.preventDefault();
        event.stopPropagation();
        
        if (isDropdownOpen) {
            // Close dropdown
            clickedDropdowns.delete(element);
            dropdown.style.display = 'none';
            dropdown.style.opacity = '0';
            dropdown.style.transform = 'translateY(-10px)';
            dropdown.style.pointerEvents = 'none';
            if (arrow) arrow.style.transform = 'rotate(0deg)';
            // Remove visual indicator
            dropdown.style.border = '';
            dropdown.style.boxShadow = '';
        } else {
            // Open dropdown
            clickedDropdowns.add(element);
            element.lastClickTime = Date.now(); // Track when it was clicked
            dropdown.style.display = 'block';
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateY(0)';
            dropdown.style.pointerEvents = 'auto';
            if (arrow) arrow.style.transform = 'rotate(180deg)';
            
            // Add visual indicator that dropdown is click-opened
            // Removed orange border and shadow
        }
    } else {
        // If dropdown is closed and not clicking on arrow, allow navigation
        // Close any other open dropdowns before navigating
        closeAllDropdowns();
    }
}

// Handle child dropdown click - only prevent navigation if clicking on arrow or dropdown is already open
function handleChildDropdownClick(event, element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    const arrow = element.querySelector('.dropdown-arrow');
    const isDropdownOpen = clickedChildDropdowns.has(element);
    const clickedOnArrow = event.target === arrow || arrow.contains(event.target);
    
    // If dropdown is already open or clicking on arrow, toggle it
    if (isDropdownOpen || clickedOnArrow) {
        event.preventDefault();
        event.stopPropagation();
        
        if (isDropdownOpen) {
            // Close dropdown
            clickedChildDropdowns.delete(element);
            dropdown.style.display = 'none';
            dropdown.style.opacity = '0';
            dropdown.style.transform = 'translateX(-10px)';
            dropdown.style.pointerEvents = 'none';
            if (arrow) arrow.style.transform = 'rotate(0deg)';
        } else {
            // Open dropdown
            clickedChildDropdowns.add(element);
            element.lastClickTime = Date.now(); // Track when it was clicked
            dropdown.style.display = 'block';
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateX(0)';
            dropdown.style.pointerEvents = 'auto';
            if (arrow) arrow.style.transform = 'rotate(90deg)';
        }
    } else {
        // If dropdown is closed and not clicking on arrow, allow navigation
        // Close any other open dropdowns before navigating
        closeAllDropdowns();
    }
}

// Close all open dropdowns
function closeAllDropdowns() {
    console.log('closeAllDropdowns called');
    
    // Close all clicked dropdowns
    clickedDropdowns.forEach(function(element) {
        const dropdown = element.querySelector('.dropdown-menu');
        const arrow = element.querySelector('.dropdown-arrow');
        if (dropdown) {
            dropdown.style.setProperty('display', 'none', 'important');
            dropdown.style.setProperty('opacity', '0', 'important');
            dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
            dropdown.style.setProperty('pointer-events', 'none', 'important');
            // Remove visual indicator
            dropdown.style.setProperty('border', '', 'important');
            dropdown.style.setProperty('box-shadow', '', 'important');
        }
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    });
    clickedDropdowns.clear();
    console.log('Cleared clickedDropdowns, size:', clickedDropdowns.size);
    
    // Close all clicked child dropdowns
    clickedChildDropdowns.forEach(function(element) {
        const dropdown = element.querySelector('.child-dropdown-menu');
        const arrow = element.querySelector('.dropdown-arrow');
        if (dropdown) {
            dropdown.style.setProperty('display', 'none', 'important');
            dropdown.style.setProperty('opacity', '0', 'important');
            dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
            dropdown.style.setProperty('pointer-events', 'none', 'important');
        }
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    });
    clickedChildDropdowns.clear();
    console.log('Cleared clickedChildDropdowns, size:', clickedChildDropdowns.size);
    
    // Clear all timeouts
    dropdownTimeouts.forEach(function(timeout) {
        clearTimeout(timeout);
    });
    dropdownTimeouts.clear();
    console.log('Cleared all timeouts, size:', dropdownTimeouts.size);
    
    // Force close all visible navigation dropdowns ONLY (exclude form select elements)
    const allDropdowns = document.querySelectorAll('#custom-header .dropdown-menu, #custom-header .child-dropdown-menu');
    allDropdowns.forEach(function(dropdown) {
        dropdown.style.setProperty('display', 'none', 'important');
        dropdown.style.setProperty('opacity', '0', 'important');
        dropdown.style.setProperty('pointer-events', 'none', 'important');
    });
    console.log('Force closed navigation dropdowns, count:', allDropdowns.length);
}

// Legacy toggle functions for backward compatibility
function toggleDropdown(event, element) {
    handleDropdownClick(event, element);
}

function toggleChildDropdown(event, element) {
    handleChildDropdownClick(event, element);
}

function showDropdown(element) {
    console.log('showDropdown called for:', element.textContent.trim());
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) {
        console.log('No dropdown found for:', element.textContent.trim());
        return;
    }
    console.log('Dropdown found, showing it');
    
    // Always show the dropdown when hovering, even if it's already visible
    // This ensures it works when hovering over the same element multiple times
    
    // Immediately close all other dropdowns when hovering over a new menu item
    const allNavItems = document.querySelectorAll('#custom-header nav ul li');
    allNavItems.forEach(function(otherItem) {
        if (otherItem !== element) {
            const otherDropdown = otherItem.querySelector('.dropdown-menu');
            if (otherDropdown) {
                // Immediately hide other dropdowns
                otherDropdown.style.setProperty('display', 'none', 'important');
                otherDropdown.style.setProperty('opacity', '0', 'important');
                otherDropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
                otherDropdown.style.setProperty('pointer-events', 'none', 'important');
                
                // Reset arrow
                const otherArrow = otherItem.querySelector('.dropdown-arrow');
                if (otherArrow) otherArrow.style.transform = 'rotate(0deg)';
                
                // Clear any timeouts for other items
                if (dropdownTimeouts.has(otherItem)) {
                    clearTimeout(dropdownTimeouts.get(otherItem));
                    dropdownTimeouts.delete(otherItem);
                }
            }
        }
    });
    
    // Don't interfere with clicked dropdowns
    if (clickedDropdowns.has(element)) return;
    
    // Clear any existing timeout for this element
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Show dropdown immediately
    dropdown.style.setProperty('display', 'block', 'important');
    dropdown.style.setProperty('opacity', '1', 'important');
    dropdown.style.setProperty('transform', 'translateY(0)', 'important');
    dropdown.style.setProperty('pointer-events', 'auto', 'important');
    dropdown.style.setProperty('visibility', 'visible', 'important');
    
    // Ensure proper positioning and visibility
    dropdown.style.setProperty('visibility', 'visible', 'important');
    dropdown.style.setProperty('position', 'absolute', 'important');
    dropdown.style.setProperty('z-index', '100001', 'important');
    dropdown.style.setProperty('top', '100%', 'important'); // Position directly below the parent li element
    dropdown.style.setProperty('left', '0', 'important');
    dropdown.style.setProperty('margin-top', '-8px', 'important'); // Remove the gap by overlapping much more aggressively
    
    // Remove any potential clipping
    dropdown.style.setProperty('overflow', 'visible', 'important');
    
    // Remove debugging styles - restore original appearance
    dropdown.style.setProperty('background', '#ffffff', 'important');
    dropdown.style.setProperty('border', '1px solid rgba(0, 0, 0, 0.1)', 'important');
    dropdown.style.setProperty('border-top', 'none', 'important'); // Remove top border to connect with navbar
    dropdown.style.setProperty('border-top-left-radius', '0', 'important');
    dropdown.style.setProperty('border-top-right-radius', '0', 'important');
    
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(180deg)';
    
    // Add hover listeners to the dropdown itself - but don't hide when leaving dropdown
    // This ensures the dropdown stays open when moving between parent and dropdown
    dropdown.addEventListener('mouseenter', function() {
        console.log('Mouse entered dropdown, keeping it open');
        if (dropdownTimeouts.has(element)) {
            clearTimeout(dropdownTimeouts.get(element));
            dropdownTimeouts.delete(element);
        }
    });
    
    // Only hide when leaving the entire dropdown area (parent + dropdown)
    dropdown.addEventListener('mouseleave', function(e) {
        console.log('Mouse left dropdown, checking if we should hide');
        // Check if mouse is moving to the parent item
        const rect = element.getBoundingClientRect();
        const mouseX = e.clientX;
        const mouseY = e.clientY;
        
        // If mouse is moving to the parent item area, don't hide
        if (mouseX >= rect.left && mouseX <= rect.right && mouseY >= rect.top && mouseY <= rect.bottom) {
            console.log('Mouse moving to parent item, keeping dropdown open');
            return;
        }
        
        // Otherwise, start hide timeout
        const hideTimeout = setTimeout(() => {
            hideDropdown(element);
        }, 150);
        dropdownTimeouts.set(element, hideTimeout);
    });
}

function hideDropdown(element) {
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) return;
    
    console.log('hideDropdown called for:', element.textContent.trim());
    
    // Don't hide clicked dropdowns
    if (clickedDropdowns.has(element)) {
        console.log('Not hiding - dropdown is clicked');
        return;
    }
    
    // Clear any existing timeout
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
        console.log('Cleared existing timeout');
    }
    
    // Add delay before hiding to allow time to reach submenu
    const hideTimeoutId = setTimeout(() => {
        console.log('Hiding dropdown after delay for:', element.textContent.trim());
        dropdown.style.setProperty('display', 'none', 'important');
        dropdown.style.setProperty('opacity', '0', 'important');
        dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
        dropdown.style.setProperty('pointer-events', 'none', 'important');
        const arrow = element.querySelector('.dropdown-arrow');
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    }, 300); // 300ms delay to allow time to reach submenu
    
    dropdownTimeouts.set(element, hideTimeoutId);
}

function showChildDropdown(element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    console.log('showChildDropdown called for:', element.textContent.trim());
    
    // Immediately close all other child dropdowns when hovering over a new child item
    const allChildItems = document.querySelectorAll('#custom-header nav ul li li');
    allChildItems.forEach(function(otherChildItem) {
        if (otherChildItem !== element) {
            const otherChildDropdown = otherChildItem.querySelector('.child-dropdown-menu');
            if (otherChildDropdown) {
                // Immediately hide other child dropdowns
                otherChildDropdown.style.setProperty('display', 'none', 'important');
                otherChildDropdown.style.setProperty('opacity', '0', 'important');
                otherChildDropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
                otherChildDropdown.style.setProperty('pointer-events', 'none', 'important');
                
                // Reset arrow
                const otherArrow = otherChildItem.querySelector('.dropdown-arrow');
                if (otherArrow) otherArrow.style.transform = 'rotate(0deg)';
                
                // Clear any timeouts for other child items
                if (dropdownTimeouts.has(otherChildItem)) {
                    clearTimeout(dropdownTimeouts.get(otherChildItem));
                    dropdownTimeouts.delete(otherChildItem);
                }
            }
        }
    });
    
    // Don't interfere with clicked dropdowns
    if (clickedChildDropdowns.has(element)) return;
    
    // Clear any existing timeout for this element
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Show dropdown immediately with !important to override inline styles
    dropdown.style.setProperty('display', 'block', 'important');
    dropdown.style.setProperty('opacity', '1', 'important');
    dropdown.style.setProperty('transform', 'translateX(0)', 'important');
    dropdown.style.setProperty('pointer-events', 'auto', 'important');
    dropdown.style.setProperty('visibility', 'visible', 'important');
    dropdown.style.setProperty('position', 'absolute', 'important');
    dropdown.style.setProperty('z-index', '100002', 'important');
    dropdown.style.setProperty('left', '100%', 'important'); // Position directly to the right
    dropdown.style.setProperty('top', '0', 'important'); // Align with parent item
    dropdown.style.setProperty('margin-left', '-1px', 'important'); // Remove horizontal gap
    
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(90deg)';
    
    // Remove debugging styles - restore original appearance
    dropdown.style.setProperty('background', '#ffffff', 'important');
    dropdown.style.setProperty('border', '1px solid rgba(0, 0, 0, 0.1)', 'important');
    dropdown.style.setProperty('border-left', 'none', 'important'); // Remove left border to connect
    dropdown.style.setProperty('border-top-left-radius', '0', 'important');
    dropdown.style.setProperty('border-bottom-left-radius', '0', 'important');
    
    // Add hover listeners to the child dropdown itself
    dropdown.addEventListener('mouseenter', function() {
        console.log('Mouse entered child dropdown, keeping it open');
        if (dropdownTimeouts.has(element)) {
            clearTimeout(dropdownTimeouts.get(element));
            dropdownTimeouts.delete(element);
        }
    });
    
    // Only hide when leaving the entire child dropdown area
    dropdown.addEventListener('mouseleave', function(e) {
        console.log('Mouse left child dropdown, checking if we should hide');
        // Check if mouse is moving to the parent child item
        const rect = element.getBoundingClientRect();
        const mouseX = e.clientX;
        const mouseY = e.clientY;
        
        // If mouse is moving to the parent child item area, don't hide
        if (mouseX >= rect.left && mouseX <= rect.right && mouseY >= rect.top && mouseY <= rect.bottom) {
            console.log('Mouse moving to parent child item, keeping child dropdown open');
            return;
        }
        
        // Otherwise, start hide timeout
        const hideTimeout = setTimeout(() => {
            hideChildDropdown(element);
        }, 150);
        dropdownTimeouts.set(element, hideTimeout);
    });
}

function hideChildDropdown(element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    console.log('hideChildDropdown called for:', element.textContent.trim());
    
    // Don't hide clicked dropdowns
    if (clickedChildDropdowns.has(element)) {
        console.log('Not hiding child dropdown - it is clicked');
        return;
    }
    
    // Clear any existing timeout
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Add delay before hiding to allow time to reach child dropdown items
    const hideTimeoutId = setTimeout(() => {
        console.log('Hiding child dropdown after delay for:', element.textContent.trim());
        dropdown.style.setProperty('display', 'none', 'important');
        dropdown.style.setProperty('opacity', '0', 'important');
        dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
        dropdown.style.setProperty('pointer-events', 'none', 'important');
        const arrow = element.querySelector('.dropdown-arrow');
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    }, 200); // Reduced delay for child dropdowns
    
    dropdownTimeouts.set(element, hideTimeoutId);
}

// Enhanced hover behavior for better UX
document.addEventListener('DOMContentLoaded', function() {
    // Ensure all dropdowns are closed on page load
    closeAllDropdowns();
    
    // Target navigation elements in the custom header
    const navItems = document.querySelectorAll('#custom-header nav ul li');
    
    navItems.forEach(function(item) {
        const dropdown = item.querySelector('.dropdown-menu');
        if (!dropdown) return;
        
            // Ensure the entire li element is hoverable for dropdown
    item.style.position = 'relative';
    
    // Simple and reliable hover detection directly on the navigation item
    let hoverTimeout;
    
    item.addEventListener('mouseenter', function() {
        console.log('Mouse entered nav item:', item.textContent.trim());
        clearTimeout(hoverTimeout);
        showDropdown(item);
    });
    
    item.addEventListener('mouseleave', function(e) {
        console.log('Mouse left nav item:', item.textContent.trim());
        
        // Check if mouse is moving to the dropdown area
        const dropdown = item.querySelector('.dropdown-menu');
        if (dropdown) {
            const dropdownRect = dropdown.getBoundingClientRect();
            const mouseX = e.clientX;
            const mouseY = e.clientY;
            
            // If mouse is moving to the dropdown area, don't hide
            if (mouseX >= dropdownRect.left && mouseX <= dropdownRect.right && 
                mouseY >= dropdownRect.top && mouseY <= dropdownRect.bottom) {
                console.log('Mouse moving to dropdown area, keeping dropdown open');
                return;
            }
        }
        
        // Otherwise, start hide timeout
        hoverTimeout = setTimeout(() => {
            hideDropdown(item);
        }, 100);
    });
        
        // Handle second-level dropdowns
        const childItems = dropdown.querySelectorAll('li');
        childItems.forEach(function(childItem) {
            const childDropdown = childItem.querySelector('.child-dropdown-menu');
            if (childDropdown) {
                // Create hover area for child items
                const childHoverArea = document.createElement('div');
                childHoverArea.style.cssText = `
                    position: absolute !important;
                    top: -5px !important;
                    left: -5px !important;
                    right: -5px !important;
                    bottom: -5px !important;
                    z-index: 100001 !important;
                    pointer-events: none !important;
                `;
                childItem.style.position = 'relative';
                childItem.appendChild(childHoverArea);
            }
        });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        const nav = document.querySelector('#custom-header nav');
        const isFormSelect = event.target.closest('select');
        
        // Don't close dropdowns if clicking on form select elements
        if (isFormSelect) {
            return;
        }
        
        if (nav && !nav.contains(event.target)) {
            closeAllDropdowns();
        }
    });
    
    // Close dropdowns when mouse leaves the entire navigation area
    const nav = document.querySelector('#custom-header nav');
    if (nav) {
        nav.addEventListener('mouseleave', function(event) {
            // Add a small delay to allow moving to dropdown items
            setTimeout(function() {
                // Only close if mouse is still outside the nav area
                const rect = nav.getBoundingClientRect();
                const mouseX = event.clientX;
                const mouseY = event.clientY;
                
                if (mouseX < rect.left || mouseX > rect.right || mouseY < rect.top || mouseY > rect.bottom) {
                    closeAllDropdowns();
                }
            }, 100);
        });
    }
    
    // Close dropdowns when scrolling (but not when interacting with form select)
    document.addEventListener('scroll', function() {
        // Don't close dropdowns if user is interacting with a form select
        const activeElement = document.activeElement;
        if (activeElement && activeElement.tagName === 'SELECT') {
            return;
        }
        closeAllDropdowns();
    });
    
    // Close dropdowns when window loses focus
    window.addEventListener('blur', function() {
        closeAllDropdowns();
    });
    
    // Auto-close clicked dropdowns after a timeout (for better UX)
    setInterval(function() {
        const now = Date.now();
        clickedDropdowns.forEach(function(element) {
            // Auto-close dropdowns that have been open for more than 10 seconds
            if (now - element.lastClickTime > 10000) {
                const dropdown = element.querySelector('.dropdown-menu');
                const arrow = element.querySelector('.dropdown-arrow');
                if (dropdown) {
                    dropdown.style.setProperty('display', 'none', 'important');
                    dropdown.style.setProperty('opacity', '0', 'important');
                    dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
                    dropdown.style.setProperty('pointer-events', 'none', 'important');
                }
                if (arrow) arrow.style.transform = 'rotate(0deg)';
                clickedDropdowns.delete(element);
            }
        });
        
        clickedChildDropdowns.forEach(function(element) {
            // Auto-close child dropdowns that have been open for more than 8 seconds
            if (now - element.lastClickTime > 8000) {
                const dropdown = element.querySelector('.child-dropdown-menu');
                const arrow = element.querySelector('.dropdown-arrow');
                if (dropdown) {
                    dropdown.style.setProperty('display', 'none', 'important');
                    dropdown.style.setProperty('opacity', '0', 'important');
                    dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
                    dropdown.style.setProperty('pointer-events', 'none', 'important');
                }
                if (arrow) arrow.style.transform = 'rotate(0deg)';
                clickedChildDropdowns.delete(element);
            }
        });
    }, 1000);
});

// Keyboard navigation support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeAllDropdowns();
    }
});

// Manual close function for testing - call this from console: forceCloseDropdowns()
window.forceCloseDropdowns = function() {
    console.log('Manual force close called');
    closeAllDropdowns();
};

// CUSTOM DISPLAY SOLUTION - Create a visible text display
document.addEventListener('DOMContentLoaded', function() {
    const serviceSelect = document.querySelector('select[name*=\"service\"]');
    if (serviceSelect) {
        console.log('Service select found, creating custom display solution');
        
        // Create a wrapper div
        const wrapper = document.createElement('div');
        wrapper.style.position = 'relative';
        wrapper.style.width = '100%';
        
        // Create a display div that shows the selected text
        const displayDiv = document.createElement('div');
        displayDiv.style.cssText = `
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 0.9rem 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            background-color: #ffffff;
            color: #2c2c2c;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            pointer-events: none;
            z-index: 1;
            display: flex;
            align-items: center;
            box-sizing: border-box;
            transition: all 0.2s ease;
        `;
        
        // Insert the wrapper before the select
        serviceSelect.parentNode.insertBefore(wrapper, serviceSelect);
        wrapper.appendChild(serviceSelect);
        wrapper.appendChild(displayDiv);
        
        // Function to update display
        function updateDisplay() {
            if (serviceSelect.value && serviceSelect.value !== '') {
                const selectedText = serviceSelect.options[serviceSelect.selectedIndex].text;
                displayDiv.textContent = selectedText;
                displayDiv.style.display = 'flex';
                displayDiv.style.color = '#2c2c2c';
                displayDiv.style.fontWeight = '400';
                console.log('Updated display with:', selectedText);
            } else {
                displayDiv.textContent = 'Выберите услугу';
                displayDiv.style.color = '#999999';
                displayDiv.style.fontWeight = '400';
            }
        }
        
        // Listen for changes
        serviceSelect.addEventListener('change', function() {
            console.log('Service selection changed to:', this.value);
            console.log('Selected option text:', this.options[this.selectedIndex].text);
            updateDisplay();
        });
        
        // Initial update
        updateDisplay();
        
        // Hide display when select is focused (dropdown is open)
        serviceSelect.addEventListener('focus', function() {
            displayDiv.style.display = 'none';
        });
        
        // Show display when select loses focus
        serviceSelect.addEventListener('blur', function() {
            setTimeout(updateDisplay, 100);
        });
    }
});
</script>
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\" style=\"margin: 0 !important; padding: 0 !important; padding-top: 80px !important;\">
    
    <!-- CUSTOM NAVBAR - COMPLETELY BYPASSING THEME SYSTEM -->
    <div id=\"custom-header\" style=\"position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; width: 100% !important; height: 80px !important; background: #ffffff !important; border-bottom: 1px solid #e0e0e0 !important; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) !important; z-index: 99999 !important; margin: 0 !important; padding: 0 !important;\">
                  <div style=\"height: 80px !important; padding: 0 1.5rem 0 0 !important; margin: 0 auto !important; max-width: 1200px !important; display: flex !important; align-items: center !important; justify-content: space-between !important;\">
     <!-- Logo Section - ABSOLUTE LEFT POSITIONING -->
     <div style=\"position: absolute !important; left: 15px !important; top: 0 !important; display: flex !important; align-items: center !important; height: 80px !important; z-index: 100000 !important;\">
         <a href=\"{{ home_url }}\" style=\"display: flex !important; align-items: center !important; text-decoration: none !important;\">
             <img src=\"{{ url('theme://images/logo/logo.gif') }}\" alt=\"{{ site.title }}\" style=\"height: 50px !important; width: auto !important; margin-right: 25px !important;\" />
         </a>
     </div>
    
    <!-- Navigation Menu with Dropdown Support -->
    <div style=\"display: flex !important; align-items: center !important; height: 80px !important; justify-content: flex-start !important; width: 100% !important;\">
        <nav style=\"display: flex !important; align-items: center !important; height: 80px !important;\">
            <ul style=\"display: flex !important; align-items: center !important; margin: 0 !important; padding: 0 !important; list-style: none !important; height: 80px !important; flex-wrap: nowrap !important; white-space: nowrap !important;\">
                {% for p in pages.children.visible %}
                    {% if p.slug != 'otpravit-zayavku' %}
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
                        <li style=\"margin: 0 1.5rem !important; position: relative !important; display: flex !important; align-items: center !important; height: 80px !important; white-space: nowrap !important; flex-shrink: 0 !important; padding: 0.5rem 0 !important; cursor: pointer !important;\" 
                            data-has-children=\"{{ has_children ? 'true' : 'false' }}\">
                            <a href=\"{{ p.url }}\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.5rem 1rem !important; text-decoration: none !important; color: #2c2c2c !important; font-weight: 500 !important; font-size: 1.1rem !important; transition: all 0.3s ease !important; border-radius: 4px !important; height: 40px !important; white-space: nowrap !important; min-width: fit-content !important; border: 1px solid transparent !important; {% if active_page %}color: #ffffff !important; background: #ff6600 !important; border: 1px solid #ff6600 !important; box-shadow: 0 2px 8px rgba(255, 102, 0, 0.3) !important;{% endif %}\" 
                               onmouseover=\"this.style.color='#ffffff'; this.style.background='#ff6600'; this.style.border='1px solid #ff6600'; this.style.boxShadow='0 6px 20px rgba(255, 102, 0, 0.4)'; this.style.transform='translateY(-2px)'\" 
                               onmouseout=\"this.style.color='#2c2c2c'; this.style.background='transparent'; this.style.border='1px solid transparent'; this.style.boxShadow='none'; this.style.transform='translateY(0)'; {% if active_page %}this.style.color='#ffffff'; this.style.background='#ff6600'; this.style.border='1px solid #ff6600'; this.style.boxShadow='0 2px 8px rgba(255, 102, 0, 0.3)';{% endif %}\"
                               {% if has_children %}onclick=\"handleDropdownClick(event, this.parentElement)\"{% endif %}>
                                {{ p.menu }}{% if has_children %} <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.7rem; transition: transform 0.2s ease; {% if active_page %}opacity: 1 !important;{% endif %}; pointer-events: none !important; user-select: none !important;\">▼</span>{% endif %}
                            </a>
                            {% if has_children %}
                            <ul class=\"dropdown-menu\" style=\"position: absolute !important; top: 100% !important; left: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; {% if show_children %}display: block !important;{% else %}display: none !important;{% endif %} z-index: 100001 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-top: -8px !important; flex-direction: column !important; opacity: 0; transform: translateY(-10px); transition: opacity 0.2s ease, transform 0.2s ease; border-top-left-radius: 0 !important; border-top-right-radius: 0 !important;\">
                                {% for child in p.children.visible %}
                                    {# Skip portfolio items from navigation dropdown #}
                                    {% if not (p.slug == 'portfolio' and child.template == 'portfolio-item') %}
                                    {% set child_active = (child.active or child.activeChild) ? 'active' : '' %}
                                    {% set child_has_children = child.children.visible.count > 0 %}
                                    <li style=\"margin: 0 !important; display: block !important; height: auto !important; position: relative !important;\" 
                                        onmouseenter=\"showChildDropdown(this)\" 
                                        onmouseleave=\"hideChildDropdown(this)\"
                                        data-has-children=\"{{ child_has_children ? 'true' : 'false' }}\">
                                        <a href=\"{{ child.url }}\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 1rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; {% if child_active %}color: #ff6600 !important;{% endif %}\"
                                           onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                           onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; {% if child_active %}this.style.color='#ff6600';{% endif %}\"
                                           {% if child_has_children %}onclick=\"handleChildDropdownClick(event, this.parentElement)\"{% endif %}>
                                            {{ child.menu }}{% if child_has_children %} <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.6rem; transition: transform 0.2s ease; {% if child_active %}opacity: 1 !important;{% endif %}; pointer-events: none !important; user-select: none !important;\">▶</span>{% endif %}
                                        </a>
                                        {% if child_has_children %}
                                        <ul class=\"child-dropdown-menu\" style=\"position: absolute !important; left: 100% !important; top: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; display: none !important; z-index: 100002 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-left: 4px !important; flex-direction: column !important; opacity: 0; transform: translateX(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                                            {% for grandchild in child.children.visible %}
                                                {% set grandchild_active = (grandchild.active or grandchild.activeChild) ? 'active' : '' %}
                                                <li style=\"margin: 0 !important; display: block !important; height: auto !important;\">
                                                                                            <a href=\"{{ grandchild.url }}\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.9rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; {% if grandchild_active %}color: #ff6600 !important;{% endif %}\"
                                               onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                               onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; {% if grandchild_active %}this.style.color='#ff6600';{% endif %}\">
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
        </nav>
        
        <!-- Right-aligned \"Оставить заявку\" button -->
        <div style=\"display: flex !important; align-items: center !important; height: 80px !important; margin-left: 1.5rem !important; margin-right: 15px !important;\">
            {% for p in pages.children.visible %}
                {% if p.slug == 'otpravit-zayavku' %}
                    {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
                    <a href=\"{{ p.url }}\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.5rem 1rem !important; text-decoration: none !important; color: #ffffff !important; font-weight: 600 !important; font-size: 1.1rem !important; transition: all 0.3s ease !important; border-radius: 4px !important; height: 40px !important; white-space: nowrap !important; min-width: fit-content !important; background: #034880 !important; border: 2px solid #034880 !important; box-shadow: 0 4px 12px rgba(3, 72, 128, 0.3) !important;\" 
                       onmouseover=\"this.style.background='#023a6b'; this.style.border='2px solid #023a6b'; this.style.boxShadow='0 6px 20px rgba(3, 72, 128, 0.4)'; this.style.transform='translateY(-2px)'\" 
                       onmouseout=\"this.style.background='#034880'; this.style.border='2px solid #034880'; this.style.boxShadow='0 4px 12px rgba(3, 72, 128, 0.3)'; this.style.transform='translateY(0)'\">
                        {{ p.menu }}
                    </a>
                {% endif %}
            {% endfor %}
        </div>
    </div>
    </div>
    </div>
    
    <div id=\"page-wrapper\" style=\"margin: 0 !important; padding: 0 !important;\">
    {% block header %}
        <!-- HIDE ORIGINAL HEADER -->
        <section id=\"header\" class=\"section\" style=\"display: none !important;\">
        </section>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\" style=\"margin-top: -20px !important;\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\" style=\"padding-top: 40px !important;\">
                <section class=\"container {{ grid_size }}\" style=\"margin-top: 0 !important; padding-top: 0 !important; max-width: 95% !important; width: 95% !important; margin-left: auto !important; margin-right: auto !important; text-align: center !important;\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {{ block('content_surround') }}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>
    {% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>", "partials/base.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/partials/base.html.twig");
    }
    private $deferred;
}
