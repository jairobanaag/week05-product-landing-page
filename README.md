# Type C Cafe — Responsive Product Landing Page

A responsive coffee shop landing page built with Laravel, Blade Components, and Tailwind CSS for **Type C Cafe**, a real coffee shop known for its signature drinks like Mango Paradise, Iced Hibiscus Tea, Salted Caramel Coffee, and Alamang Shake.

🔗 **Live Repository:** https://github.com/[your-username]/week05-product-landing-page

---

## 1. Introduction

A product landing page is a single, focused web page designed to introduce a business, product, or service and guide visitors toward a specific action — in this case, exploring the menu or placing an order. Landing pages matter because they are often a customer's first impression of a business online: a clear, well-designed page builds trust, communicates value quickly, and increases the chance that a visitor becomes a paying customer.

The purpose of this project is to design and build a modern, responsive landing page for a real local coffee shop (**Type C Cafe**) using Laravel Blade Components and Tailwind CSS, applying component-based frontend architecture and responsive design principles learned in this module.

---

## 2. Objectives

By completing this project, the following learning objectives were accomplished:

- Built a fully responsive interface using Tailwind CSS utility classes.
- Applied component-based frontend architecture using Laravel Blade Components.
- Created reusable components (navbar, hero, feature-card, product-card, pricing-card, testimonial-card, button, footer) to eliminate duplicated code.
- Applied responsive layouts using Flexbox and CSS Grid across breakpoints (mobile, tablet, desktop).
- Implemented a consistent design system — typography, color palette, spacing, and button styles.
- Documented the frontend architecture and component design decisions in this README.

---

## 3. Responsive Web Design

- **Mobile-First Design:** The layout was built starting from small screens, then progressively enhanced for larger viewports using Tailwind's responsive prefixes (`sm:`, `md:`).
- **Responsive Breakpoints:** Grids and navigation change behavior at the `md` (768px) breakpoint — the navbar switches from a horizontal link list to a hamburger dropdown menu below `md`, since the full link set plus logo and CTA button did not fit comfortably on tablet-sized screens.
- **Flexbox:** Used throughout the navbar, hero button groups, and footer social icons to align items along a single axis.
- **CSS Grid:** Used for the Features, Menu Categories, Product Showcase, and Testimonials sections to arrange cards responsively (e.g., `grid-cols-2` on mobile, `md:grid-cols-4` on larger screens).
- **User Experience (UX):** A sticky, transparent navbar overlaid on the hero, hover-lift effects on cards, and a mobile hamburger menu (powered by Alpine.js) were added to improve navigation and visual feedback without being distracting.

Responsive design is important because visitors access the site from a wide range of devices — phones, tablets, and desktops. A page that isn't responsive can break, become unreadable, or drive visitors away, directly hurting a business's ability to convert visitors into customers.

---

## 4. Tailwind CSS

- **Utility-First CSS:** Instead of writing custom CSS classes, styling is applied directly in markup using small, single-purpose utility classes (e.g., `px-6`, `text-green-700`, `rounded-full`).
- **Advantages:** Faster development, no context-switching between HTML and CSS files, and a constrained design system (spacing scale, color palette) that keeps the UI consistent.
- **Responsive Utility Classes:** Prefixes like `sm:` and `md:` are used throughout (e.g., `grid-cols-2 md:grid-cols-4`, `hidden md:flex`) to change layout behavior at different screen sizes without writing media queries manually.
- **Component Styling:** Each Blade component (buttons, cards) uses consistent utility patterns — for example, all cards share the same border-radius, shadow, and hover-transition conventions, keeping the UI visually unified.

Example from the project (`button.blade.php`):

```php
$variants = [
    'primary'   => 'bg-gradient-to-r from-green-600 to-emerald-600 text-white hover:shadow-lg',
    'secondary' => 'bg-white text-green-800 border border-green-200 hover:bg-green-50',
    'dark'      => 'bg-black text-white hover:bg-gray-800',
];
```

This shows utility-first styling combined with a PHP array lookup to switch between button variants using only Tailwind classes.

---

## 5. Blade Components

**What are Blade Components?** Blade Components are reusable pieces of Laravel view code that combine HTML markup with dynamic data via props. They allow a piece of UI (like a button or a card) to be defined once and reused across the application with different data.

**Why reusable components improve maintainability:** Instead of copy-pasting the same HTML for every menu item or testimonial, a single component file defines the structure once. If the design needs to change (e.g., updating a card's border radius), it only needs to be updated in one place.

**Benefits of modular UI development:**
- Faster development through reuse
- Easier debugging (isolated component logic)
- Consistent design across the whole page
- Cleaner, more readable page templates (`home.blade.php` mainly just calls components)

Example — `feature-card.blade.php`:

```php
@props(['icon' => '☕', 'title' => 'Feature Title', 'number' => '01'])

<div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition duration-300">
    <div class="w-12 h-12 flex items-center justify-center rounded-2xl bg-green-700 text-2xl mb-4">
        {{ $icon }}
    </div>
    <h3 class="text-lg font-bold text-black mb-2">{{ $title }}</h3>
    <p class="text-sm text-gray-600">{{ $slot }}</p>
</div>
```

Used in `home.blade.php` as:

```blade
<x-feature-card icon="☕" title="Freshly Roasted Beans" number="01">
    Beans roasted in small batches every week for peak freshness and flavor.
</x-feature-card>
```

Components built for this project: `navbar`, `hero`, `feature-card`, `product-card`, `pricing-card`, `testimonial-card`, `button`, `footer`.

---

## 6. User Interface Design

- **Color Palette:** A green-based palette (`green-700`, `emerald-800`) paired with white backgrounds and black accents was chosen to reflect a fresh, organic coffee-shop identity while keeping strong contrast for readability.
- **Typography:** Bold, extrabold headings (`font-extrabold`) create visual hierarchy, paired with smaller, lighter body text (`text-sm text-gray-600`) for descriptions.
- **Iconography:** Emoji-based icons (☕ 📱 🎁 🛋️ 🌱 🚚) were used for feature cards to keep the design lightweight and friendly without requiring an external icon library.
- **Button Styles:** Rounded, pill-shaped buttons (`rounded-full`) with distinct variants (primary, secondary, outline, dark) for different contexts — CTA vs. secondary actions.
- **Card Design:** Consistent card styling (`rounded-2xl`, `shadow-md`, hover lift effect) was applied across features, menu items, and testimonials for visual consistency.
- **Layout Consistency:** All sections use the same `max-w-7xl mx-auto px-4 sm:px-6 lg:px-8` container pattern and consistent vertical spacing (`py-16 md:py-24`) to maintain rhythm as the user scrolls.

These choices contribute to a better user experience by keeping the interface easy to scan, reinforcing the coffee shop's identity through consistent branding, and making every section feel like part of the same design system.

---

## 7. Folder Structure
week05-product-landing-page/
│
├── app/ → Laravel application logic (models, controllers)
├── resources/
│ ├── views/
│ │ ├── layouts/ → Shared page layout (app.blade.php) — the HTML shell all pages extend
│ │ ├── components/ → Reusable Blade components (navbar, hero, cards, button, footer)
│ │ └── pages/ → Actual page views (home.blade.php) that assemble components
│ └── css/ → Tailwind entry point (app.css)
│
├── public/
│ └── images/ → Static image assets (logo, product photos)
│
├── screenshots/ → Screenshots of the final responsive interface across devices
├── documentation/ → Before-and-after comparison images
└── README.md → This file
---

## 8. Screenshots

All screenshots are located in the `/screenshots` folder.


---

## 9. Reflection

Building this landing page for **Type C Cafe** helped connect Laravel Blade Components and Tailwind CSS to an actual business need rather than a generic exercise. Translating the coffee shop's real menu items, branding, and photos into a structured, component-based interface reinforced how reusable components (like `product-card` and `pricing-card`) reduce duplication while keeping the design consistent. It also highlighted the importance of iterating on design based on feedback — the color palette, section layouts, and pricing display all went through several revisions before arriving at the final, polished version.

Course: ITST 302 – Client-Server Technologies
Activity: Mini Project 04 – Responsive Product Landing Page
Student: Jairo Banaag — BSIT-3D