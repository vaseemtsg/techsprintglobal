# Startup Consultant Child Theme

A child theme for the Startup Consultant parent theme, allowing for safe customization while maintaining the ability to receive parent theme updates.

## Features

- Safe customization of parent theme styles and functionality
- Automatic inheritance of parent theme features
- Proper stylesheet enqueueing for optimal performance
- Translation-ready structure
- WordPress coding standards compliant

## Installation

1. Upload the `startup-consultant-child` folder to `/wp-content/themes/`
2. Navigate to **Appearance → Themes** in your WordPress admin
3. Activate the "Startup Consultant Child" theme

## File Structure

```
startup-consultant-child/
├── style.css          # Main stylesheet with theme header
├── functions.php      # Theme functions and setup
├── screenshot.png     # Theme screenshot
├── README.md          # This file
└── (optional)        # Additional files for customization
    ├── css/           # Additional CSS files
    ├── js/            # JavaScript files
    ├── templates/     # Template overrides
    └── languages/     # Translation files
```

## Customization

### CSS Customizations

Add your custom CSS to the `style.css` file below the "Theme customization starts here" comment.

### Template Overrides

To override parent theme templates:

1. Copy the template file from the parent theme to your child theme
2. Maintain the same directory structure
3. Modify the copied file as needed

Common templates to override:
- `page.php`
- `single.php`
- `header.php`
- `footer.php`
- `template-parts/` files

### Function Customizations

Add custom functions to `functions.php`. The child theme automatically:
- Enqueues parent and child stylesheets
- Sets up theme textdomain for translations
- Provides hooks for additional setup

## Best Practices

- Always use a child theme for customizations
- Test changes in a staging environment first
- Keep backup copies of modified files
- Use WordPress coding standards
- Document your custom changes

## Support

For support with the parent theme, refer to the original Startup Consultant theme documentation.

For child theme specific issues, check:
- WordPress Codex: [Child Themes](https://codex.wordpress.org/Child_Themes)
- WordPress Developer Resources: [Child Themes](https://developer.wordpress.org/themes/advanced-topics/child-themes/)

## License

This child theme inherits the license of the parent theme (GNU General Public License v2 or later).
