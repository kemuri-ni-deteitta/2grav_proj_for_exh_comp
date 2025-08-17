---
title: Mobile Navigation Demo
visible: true
---

# Mobile Navigation Demo

This page demonstrates the mobile-specific navigation features implemented using the **mobile-detect** plugin.

## Features

### 🎯 **Device Detection**
- **Desktop**: Shows traditional horizontal navigation with dropdowns
- **Mobile**: Shows hamburger menu with touch-friendly navigation
- **Tablet**: Uses mobile layout for better touch experience

### 📱 **Mobile Navigation Features**
- **Hamburger Menu**: Tap to open/close navigation
- **Touch Gestures**: Swipe left to open, swipe right to close
- **Touch-Friendly**: Large touch targets (44px minimum)
- **Smooth Animations**: CSS transitions and animations
- **Responsive Design**: Adapts to different screen sizes

### 🖱️ **Desktop Navigation Features**
- **Hover Effects**: Smooth hover animations
- **Dropdown Menus**: Multi-level navigation support
- **Keyboard Navigation**: Full keyboard accessibility
- **Mouse Interactions**: Hover-based dropdown system

## How It Works

The mobile-detect plugin provides several Twig functions:

```twig
{# Check if device is mobile #}
{% if isMobile() %}
    {# Show mobile navigation #}
{% endif %}

{# Check if device is tablet #}
{% if isTablet() %}
    {# Show mobile navigation #}
{% endif %}

{# Check if device is desktop #}
{% if isDesktop() %}
    {# Show desktop navigation #}
{% endif %}
```

## Touch Gestures

On mobile devices, you can:

1. **Tap the hamburger menu** to open/close navigation
2. **Swipe left** from the left edge to open navigation
3. **Swipe right** when navigation is open to close it
4. **Tap menu items** to navigate or expand dropdowns
5. **Pinch and zoom** is prevented on navigation elements

## Responsive Behavior

- **Mobile (< 769px)**: Shows mobile navigation
- **Desktop (≥ 769px)**: Shows traditional navigation
- **Landscape mobile**: Optimized layout for horizontal orientation

## Browser Support

- **Modern Browsers**: Full support for all features
- **Touch Devices**: Optimized for iOS Safari, Chrome Mobile, etc.
- **Accessibility**: Screen reader friendly with proper ARIA labels
- **Performance**: Smooth 60fps animations with hardware acceleration

---

*Try resizing your browser window or viewing this page on different devices to see the navigation adapt!*
