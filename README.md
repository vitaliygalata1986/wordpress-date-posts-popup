# WordPress Date Posts Popup

This repository contains:

* A custom WordPress plugin: **date-posts-popup**
* A minimal custom WordPress theme: **artesa-basic-theme**

---

## 📁 Project Structure

```
wp-content/
├── plugins/
│   └── date-posts-popup/
└── themes/
    └── artesa-basic-theme/
```

---

## 🚀 Plugin Features

The **date-posts-popup** plugin provides:

* Filtering posts by date range (`from` / `to`)
* Output as responsive cards:

    * Featured image
    * Publication date (`dd.mm.yyyy`)
    * Post title
* Click on card opens a popup with:

    * Full image
    * Title
    * Short description (excerpt)
    * "Read more" link to single post page

---

## 🧩 Shortcode Usage

Use the shortcode in any page or post:

```
[date_posts from="2025-01-01" to="2026-12-31"]
```

### Parameters

| Parameter | Format     | Description            |
| --------- | ---------- | ---------------------- |
| from      | YYYY-MM-DD | Start date (inclusive) |
| to        | YYYY-MM-DD | End date (inclusive)   |

---

## 🛠 Technologies Used

* WordPress
* PHP (OOP architecture)
* Vanilla JavaScript (no jQuery)
* ES6 syntax
* SCSS
* Webpack (bundler)

---

## 🎨 Theme

The repository includes a minimal theme:

**artesa-basic-theme**

Purpose:

* Provide a clean environment for plugin rendering
* Display shortcode output
* Support thumbnails and basic layout

---

## ⚙️ Installation

1. Copy plugin:

```
wp-content/plugins/date-posts-popup
```

2. Copy theme:

```
wp-content/themes/artesa-basic-theme
```

3. In WordPress admin:

    * Activate the theme
    * Activate the plugin

4. Add shortcode to any page.

---

## 📦 Webpack & Development

All frontend assets (JS + SCSS) are built using Webpack.

### 1. Install dependencies

Inside plugin folder:

```
cd wp-content/plugins/date-posts-popup
npm install
```

---

### 2. Build assets

```
npm run build
```

This will generate:

```
dist/app.js
dist/app.css
```

---

### 3. Watch mode (development)

```
npm run watch
```

Webpack will automatically rebuild files on changes.

---

## ⚠️ Important Notes

* Compiled files (`dist/`) are included in the repository
* No jQuery is used (pure JavaScript)
* Popup logic is implemented manually
* SCSS is compiled via Webpack

---

## 👤 Author

Vitaliy Halata
GitHub: https://github.com/vitaliygalata1986/wordpress-date-posts-popup

---

## 📌 Summary

This project demonstrates:

* WordPress plugin development (OOP)
* Custom shortcode implementation
* Frontend interaction (popup without libraries)
* SCSS architecture
* Webpack integration
* Clean project structure suitable for production
