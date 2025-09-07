# SSK Creates - WordPress HTML Blocks for Astra Theme

## Overview
This repository contains WordPress-compatible HTML blocks designed for the Astra theme, implementing a beautiful butterfly and purple rose themed budget savings challenge e-commerce website.

## File Structure

### HTML Pages
- `index.html` - Homepage with hero section, features, product categories, testimonials, and CTA
- `budgeting-tools.html` - Digital budgeting tools collection page
- `worksheets.html` - Professional worksheets and workbooks page with filtering
- `scratch-cards.html` - Scratch-off savings challenges page

### CSS
- `additional-css.css` - Complete CSS styling for WordPress Astra theme "Additional CSS" section

## WordPress Block Structure

Each page is organized into distinct WordPress blocks:

### Homepage Blocks
1. **Header Navigation Block** - Fixed navigation with butterfly/rose branding
2. **Hero Section Block** - Main banner with animated elements
3. **Features Section Block** - Why choose SSK Creates
4. **Product Categories Block** - Three main product lines
5. **Testimonials Block** - Customer success stories
6. **CTA Section Block** - Call-to-action with buttons
7. **Footer Block** - Site footer with links and branding

### Product Page Blocks
1. **Header Navigation Block** - Consistent navigation across pages
2. **Page Header Block** - Page-specific hero section
3. **Product/Tool Showcase Block** - Grid layout for products
4. **Bundle Offer Block** - Special pricing offers
5. **Features/Comparison Block** - Benefits and comparisons
6. **CTA Section Block** - Action-oriented closing
7. **Footer Block** - Consistent footer

## Theme Elements

### Color Scheme
- Primary Purple: `#8B5CF6`
- Rose Pink: `#F472B6`
- Gold Accent: `#FBBF24`
- Light backgrounds and gradients

### Typography
- Clean, modern fonts
- Hierarchical heading structure
- Readable line spacing

### Animations
- Floating butterfly and rose elements
- Hover effects on buttons and cards
- Smooth transitions
- CSS keyframe animations for engagement

### Icons and Visuals
- Emoji-based icons for cross-platform compatibility
- Butterfly 🦋 and rose 🌹 themed decorations
- Financial and savings-related icons
- Gradient backgrounds

## WordPress Integration

### For Astra Theme
1. Copy the contents of `additional-css.css` to WordPress Admin → Appearance → Customize → Additional CSS
2. Create new pages in WordPress
3. Switch to HTML/Code view
4. Copy the content between `<body>` tags from each HTML file
5. Paste into WordPress page content
6. Remove the `<header>` and `<footer>` sections as these will be handled by Astra theme

### Block-by-Block Implementation
Each section wrapped in comments can be copied as individual blocks:
- Copy content between `<!-- WordPress Block: [Name] -->` comments
- Paste into WordPress Gutenberg blocks
- Use Custom HTML blocks for full control

## Features

### Responsive Design
- Mobile-first approach
- Flexible grid layouts
- Adaptive typography
- Touch-friendly interactions

### Accessibility
- Semantic HTML structure
- Keyboard navigation support
- Screen reader friendly
- High contrast ratios

### Performance
- Optimized CSS with CSS variables
- Efficient animations
- Minimal external dependencies
- Print-friendly styles

## Customization

### Colors
Update CSS variables in `:root` selector:
```css
:root {
    --primary-purple: #8B5CF6;
    --rose-pink: #F472B6;
    --gold-accent: #FBBF24;
    /* ... other variables */
}
```

### Content
- Replace placeholder text with actual content
- Update pricing and product details
- Modify testimonials and success stories
- Customize navigation links

### Animations
- Adjust animation duration in CSS
- Enable/disable reduced motion preferences
- Customize hover effects

## Browser Support
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile browsers (iOS Safari, Chrome Mobile)
- Responsive design for all screen sizes

## License
MIT License - See LICENSE file for details

## Support
For customization and support, contact the development team.